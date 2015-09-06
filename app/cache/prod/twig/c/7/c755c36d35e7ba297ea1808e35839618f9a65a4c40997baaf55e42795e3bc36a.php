<?php

/* OroCRMSalesBundle:Dashboard:salesFlowChart.html.twig */
class __TwigTemplate_c755c36d35e7ba297ea1808e35839618f9a65a4c40997baaf55e42795e3bc36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:chartWidget.html.twig", "OroCRMSalesBundle:Dashboard:salesFlowChart.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:chartWidget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->getAttribute((isset($context["chartView"]) ? $context["chartView"] : null), "render", array(), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCRMSalesBundle:Dashboard:salesFlowChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
