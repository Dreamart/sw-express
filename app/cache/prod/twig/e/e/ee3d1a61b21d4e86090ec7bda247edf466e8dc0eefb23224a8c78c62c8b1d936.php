<?php

/* OroChartBundle:Chart:pie.html.twig */
class __TwigTemplate_ee3d1a61b21d4e86090ec7bda247edf466e8dc0eefb23224a8c78c62c8b1d936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["chart"] = $this->loadTemplate("OroChartBundle::macros.html.twig", "OroChartBundle:Chart:pie.html.twig", 1);
        // line 2
        echo "
";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : null)) > 0)) {
            // line 23
            echo "    ";
            echo $context["chart"]->getrenderChart((isset($context["data"]) ? $context["data"] : null), (isset($context["options"]) ? $context["options"] : null), (isset($context["config"]) ? $context["config"] : null), $this->env->getExtension('mobile_extension')->isMobile());
            echo "
";
        } else {
            // line 25
            echo "    <div class=\"clearfix no-data\">
        <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.no_data_found"), "html", null, true);
            echo "</span>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroChartBundle:Chart:pie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 26,  32 => 25,  26 => 23,  24 => 22,  21 => 2,  19 => 1,);
    }
}
