<?php

/* OroChartBundle:Chart:flow.html.twig */
class __TwigTemplate_41829bea25c6f27a2754aaebf17e7437e29f6f194eaa5fc35ac6813367f0e85f extends Twig_Template
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
        $context["chart"] = $this->loadTemplate("OroChartBundle::macros.html.twig", "OroChartBundle:Chart:flow.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : null)) > 0)) {
            // line 4
            echo "    ";
            echo $context["chart"]->getrenderChart((isset($context["data"]) ? $context["data"] : null), (isset($context["options"]) ? $context["options"] : null), (isset($context["config"]) ? $context["config"] : null), $this->env->getExtension('mobile_extension')->isMobile());
            echo "
";
        } else {
            // line 6
            echo "    <div class=\"clearfix no-data\">
        <span>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.no_data_found"), "html", null, true);
            echo "</span>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroChartBundle:Chart:flow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
