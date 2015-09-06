<?php

/* OroChartBundle::macros.html.twig */
class __TwigTemplate_df15f010264b5a8d22c0f96a156448cfd806b1089cd742ff584ffeffa6b95bc8 extends Twig_Template
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
    }

    // line 10
    public function getrenderChart($__data__ = null, $__options__ = null, $__config__ = null, $__isMobileVersion__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "options" => $__options__,
            "config" => $__config__,
            "isMobileVersion" => $__isMobileVersion__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            $context["name"] = strtr($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "name", array()), array("_chart" => ""));
            // line 12
            echo "    ";
            $context["params"] = array("ratio" => ((            // line 13
(isset($context["isMobileVersion"]) ? $context["isMobileVersion"] : null)) ? ("0.8") : ("0.35")), "data" =>             // line 14
(isset($context["data"]) ? $context["data"] : null), "options" =>             // line 15
(isset($context["options"]) ? $context["options"] : null), "config" =>             // line 16
(isset($context["config"]) ? $context["config"] : null), "date" => (($this->getAttribute($this->getAttribute(            // line 17
(isset($context["options"]) ? $context["options"] : null), "settings", array(), "any", false, true), "quarterDate", array(), "any", true, true)) ? ($this->env->getExtension('oro_locale_datetime')->formatDate($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "settings", array()), "quarterDate", array()), array("timeZone" => call_user_func_array($this->env->getFunction('oro_timezone')->getCallable(), array())))) : ("")));
            // line 19
            echo "

    <div data-page-component-module=\"orochart/js/app/components/";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "-chart-component\"
         data-page-component-options=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["params"]) ? $context["params"] : null)), "html", null, true);
            echo "\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroChartBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  51 => 21,  47 => 19,  45 => 17,  44 => 16,  43 => 15,  42 => 14,  41 => 13,  39 => 12,  36 => 11,  21 => 10,);
    }
}
