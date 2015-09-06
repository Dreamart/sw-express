<?php

/* OroDashboardBundle:Dashboard:chartWidget.html.twig */
class __TwigTemplate_794bc086d713363ab1ffd1779b6ee3b36f36305c4265d4aeb0dc5f20c3a26fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroDashboardBundle:Dashboard:chartWidget.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["chartColors"] = array(0 => "#ACD39C", 1 => "#BE9DE2", 2 => "#6598DA", 3 => "#ECC87E", 4 => "#A4A2F6", 5 => "#6487BF", 6 => "#65BC87", 7 => "#8985C2", 8 => "#ECB574", 9 => "#84A377");
        // line 4
        $context["chartFontSize"] = 9;
        // line 5
        $context["chartFontColor"] = "#454545";
        // line 6
        $context["chartHighlightColor"] = "#FF5E5E";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:chartWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 1,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  11 => 1,);
    }
}
