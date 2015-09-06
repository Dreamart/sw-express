<?php

/**
 * Filename: /opt/lampp/htdocs/swcrm/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_submit/default_legacy.yml
 */
class __Oro_Layout_Update_aca3cf96b20ac90f07f5e519719d346c1c507b3277f45e594df997456a3e56f5 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\ConfigExpression\ExpressionFactoryAwareInterface
{
    private $expressionFactory;

    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (null === $this->expressionFactory) {
            throw new \RuntimeException('Missing expression factory for layout update');
        }

        $expr = $this->expressionFactory->create('neq', ['', new \Oro\Component\ConfigExpression\CompiledPropertyPath('context.embedded_form_custom_layout', ['context', 'embedded_form_custom_layout'], [false, false])]);
        $context = ['context' => $item->getContext()];
        if ($expr->evaluate($context)) {
            $layoutManipulator->add( 'form', 'content', 'embed_form_legacy_form', array (
              'form' => 
              array (
                '@value' => '$context.embedded_form.view',
              ),
              'form_layout' => 
              array (
                '@value' => '$context.embedded_form_custom_layout',
              ),
            ) );
        }
    }

    public function setExpressionFactory(\Oro\Component\ConfigExpression\ExpressionFactoryInterface $expressionFactory)
    {
        $this->expressionFactory = $expressionFactory;
    }
}