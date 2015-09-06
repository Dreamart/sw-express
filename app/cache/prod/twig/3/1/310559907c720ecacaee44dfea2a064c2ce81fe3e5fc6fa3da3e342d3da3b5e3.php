<?php

/* OroCRMCampaignBundle:Dashboard:campaignByCloseRevenue.html.twig */
class __TwigTemplate_310559907c720ecacaee44dfea2a064c2ce81fe3e5fc6fa3da3e342d3da3b5e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:chartWidget.html.twig", "OroCRMCampaignBundle:Dashboard:campaignByCloseRevenue.html.twig", 1);
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
        return "OroCRMCampaignBundle:Dashboard:campaignByCloseRevenue.html.twig";
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
