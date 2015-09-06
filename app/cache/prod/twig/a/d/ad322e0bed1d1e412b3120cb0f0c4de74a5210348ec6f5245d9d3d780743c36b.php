<?php

/* OroCRMSalesBundle:Dashboard:opportunityByStatus.html.twig */
class __TwigTemplate_ad322e0bed1d1e412b3120cb0f0c4de74a5210348ec6f5245d9d3d780743c36b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:chartWidget.html.twig", "OroCRMSalesBundle:Dashboard:opportunityByStatus.html.twig", 1);
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
        return "OroCRMSalesBundle:Dashboard:opportunityByStatus.html.twig";
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
