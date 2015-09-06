<?php

/* OroTranslationBundle:Translation:translation.js.twig */
class __TwigTemplate_156eddeb4746d10a4905020deec6683764e3a2998e190e35906778549cbe1f7c extends Twig_Template
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
        echo "Translator.fromJSON(";
        echo twig_jsonencode_filter((isset($context["json"]) ? $context["json"] : null));
        echo ");";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Translation:translation.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
