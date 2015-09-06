<?php

namespace Oro\Bundle\DataGridBundle\Tests\Unit\Extension\GridViews;

use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Datagrid\Common\MetadataObject;
use Oro\Bundle\DataGridBundle\Extension\GridViews\View;
use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Event\GridViewsLoadEvent;
use Oro\Bundle\DataGridBundle\Extension\GridViews\GridViewsExtension;

class GridViewsExtensionTest extends \PHPUnit_Framework_TestCase
{
    private $eventDispatcher;
    private $gridViewsExtension;

    public function setUp()
    {
        $this->eventDispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');

        $translator = $this->getMock('Symfony\Component\Translation\TranslatorInterface');

        $securityFacade = $this->getMockBuilder('Oro\Bundle\SecurityBundle\SecurityFacade')
            ->disableOriginalConstructor()
            ->getMock();

        $securityFacade
            ->expects($this->any())
            ->method('isGranted')
            ->will($this->returnValue(true));

        $this->gridViewsExtension = new GridViewsExtension($this->eventDispatcher, $securityFacade, $translator);
    }

    public function testVisitMetadataShouldAddGridViewsFromEvent()
    {
        $this->gridViewsExtension->setParameters(new ParameterBag());
        $data = MetadataObject::create([]);
        $config = DatagridConfiguration::create([
            DatagridConfiguration::NAME_KEY => 'grid',
        ]);

        $this->eventDispatcher
            ->expects($this->once())
            ->method('hasListeners')
            ->with(GridViewsLoadEvent::EVENT_NAME)
            ->will($this->returnValue(true));

        $expectedViews = [
            'views' => [
                (new View('name', ['k' => 'v'], ['k2' => 'v2']))->getMetadata(),
            ],
            'permissions' => [
                'CREATE' => true,
                'EDIT' => true,
                'VIEW' => true,
                'DELETE' => true,
                'SHARE' => true,
                'EDIT_SHARED' => true,
            ],
            'gridName' => 'grid',
        ];
        $this->eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with(GridViewsLoadEvent::EVENT_NAME)
            ->will($this->returnCallback(function ($eventName, GridViewsLoadEvent $event) use ($expectedViews) {
                $event->setGridViews($expectedViews);

                return $event;
            }));

        $this->assertFalse($data->offsetExists('gridViews'));
        $this->gridViewsExtension->visitMetadata($config, $data);
        $this->assertTrue($data->offsetExists('gridViews'));
        $this->assertEquals($expectedViews, $data->offsetGet('gridViews'));
    }

    /**
     * @param array $input
     * @param array $expected
     * @dataProvider setParametersDataProvider
     */
    public function testSetParameters(array $input, array $expected)
    {
        $this->gridViewsExtension->setParameters(new ParameterBag($input));
        $this->assertEquals($expected, $this->gridViewsExtension->getParameters()->all());
    }

    /**
     * @return array
     */
    public function setParametersDataProvider()
    {
        return array(
            'empty' => array(
                'input' => array(),
                'expected' => array(),
            ),
            'regular' => array(
                'input' => array(
                    ParameterBag::ADDITIONAL_PARAMETERS => array(
                        GridViewsExtension::VIEWS_PARAM_KEY => 'view'
                    )
                ),
                'expected' => array(
                    ParameterBag::ADDITIONAL_PARAMETERS => array(
                        GridViewsExtension::VIEWS_PARAM_KEY => 'view'
                    )
                )
            ),
            'minified' => array(
                'input' => array(
                    ParameterBag::MINIFIED_PARAMETERS => array(
                        GridViewsExtension::MINIFIED_VIEWS_PARAM_KEY => 'view'
                    )
                ),
                'expected' => array(
                    ParameterBag::MINIFIED_PARAMETERS => array(
                        GridViewsExtension::MINIFIED_VIEWS_PARAM_KEY => 'view'
                    ),
                    ParameterBag::ADDITIONAL_PARAMETERS => array(
                        GridViewsExtension::VIEWS_PARAM_KEY => 'view'
                    )
                )
            ),
        );
    }
}