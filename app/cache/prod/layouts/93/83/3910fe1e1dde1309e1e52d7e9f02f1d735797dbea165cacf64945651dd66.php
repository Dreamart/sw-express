<?php

/**
 * Filename: /opt/lampp/htdocs/swcrm/vendor/oro/crm/src/OroCRM/Bundle/ContactUsBundle/Resources/views/layouts/embedded_default/oro_embedded_form_submit/default.yml
 */
class __Oro_Layout_Update_93833910fe1e1dde1309e1e52d7e9f02f1d735797dbea165cacf64945651dd66 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\ConfigExpression\ExpressionFactoryAwareInterface
{
    private $expressionFactory;

    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (null === $this->expressionFactory) {
            throw new \RuntimeException('Missing expression factory for layout update');
        }

        $expr = $this->expressionFactory->create('eq', [new \Oro\Component\ConfigExpression\CompiledPropertyPath('context.embedded_form_type', ['context', 'embedded_form_type'], [false, false]), 'orocrm_contact_us.embedded_form']);
        $context = ['context' => $item->getContext()];
        if ($expr->evaluate($context)) {
            $layoutManipulator->setBlockTheme( 'OroCRMContactUsBundle:layouts:embedded_default/oro_embedded_form_submit/form.html.twig' );
            $layoutManipulator->setOption( 'embedded_form', 'preferred_fields', array (
              0 => 'firstName',
              1 => 'lastName',
              2 => 'emailAddress',
              3 => 'phone',
            ) );
            $layoutManipulator->add( 'name_group', 'embedded_form', 'fieldset' );
            $layoutManipulator->move( 'embedded_form_firstName', 'name_group' );
            $layoutManipulator->move( 'embedded_form_lastName', 'name_group' );
        }
    }

    public function setExpressionFactory(\Oro\Component\ConfigExpression\ExpressionFactoryInterface $expressionFactory)
    {
        $this->expressionFactory = $expressionFactory;
    }
}