<?php

/* OroCRMCampaignBundle:Dashboard:campaignLeads.html.twig */
class __TwigTemplate_6c2a9d1034e237bbb776ba6d31eb693d5ebd91b67ae26bc2a8e1715663a67fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:chartWidget.html.twig", "OroCRMCampaignBundle:Dashboard:campaignLeads.html.twig", 1);
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
        return "OroCRMCampaignBundle:Dashboard:campaignLeads.html.twig";
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
