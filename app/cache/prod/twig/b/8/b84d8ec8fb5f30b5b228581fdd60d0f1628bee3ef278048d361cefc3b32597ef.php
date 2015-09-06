<?php

/* OroChartBundle:Chart:bar.html.twig */
class __TwigTemplate_b84d8ec8fb5f30b5b228581fdd60d0f1628bee3ef278048d361cefc3b32597ef extends Twig_Template
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
        $context["chart"] = $this->loadTemplate("OroChartBundle::macros.html.twig", "OroChartBundle:Chart:bar.html.twig", 1);
        // line 2
        echo "
";
        // line 22
        echo "
";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : null)) > 0)) {
            // line 24
            echo "    ";
            echo $context["chart"]->getrenderChart((isset($context["data"]) ? $context["data"] : null), (isset($context["options"]) ? $context["options"] : null), (isset($context["config"]) ? $context["config"] : null));
            echo "
";
        } else {
            // line 26
            echo "    <div class=\"clearfix no-data\">
        <span>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.no_data_found"), "html", null, true);
            echo "</span>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroChartBundle:Chart:bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 27,  35 => 26,  29 => 24,  27 => 23,  24 => 22,  21 => 2,  19 => 1,);
    }
}
