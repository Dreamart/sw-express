<?php

/**
 * Filename: /opt/lampp/htdocs/swcrm/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_submit/default.yml
 */
class __Oro_Layout_Update_aa6a935f44e38fad626c408c5933ff6bf76b186eebe1cd070bdaf426e1c5094d implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\ConfigExpression\ExpressionFactoryAwareInterface
{
    private $expressionFactory;

    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (null === $this->expressionFactory) {
            throw new \RuntimeException('Missing expression factory for layout update');
        }

        $expr = $this->expressionFactory->create('eq', ['', new \Oro\Component\ConfigExpression\CompiledPropertyPath('context.embedded_form_custom_layout', ['context', 'embedded_form_custom_layout'], [false, false])]);
        $context = ['context' => $item->getContext()];
        if ($expr->evaluate($context)) {
            $layoutManipulator->add( 'embedded_form', 'content', 'form', array (
              'form_name' => 'embedded_form',
            ) );
        }
    }

    public function setExpressionFactory(\Oro\Component\ConfigExpression\ExpressionFactoryInterface $expressionFactory)
    {
        $this->expressionFactory = $expressionFactory;
    }
}