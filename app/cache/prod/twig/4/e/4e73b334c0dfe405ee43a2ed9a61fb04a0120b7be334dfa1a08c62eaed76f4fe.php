<?php

/* OroConfigBundle:Configuration:system.html.twig */
class __TwigTemplate_4e73b334c0dfe405ee43a2ed9a61fb04a0120b7be334dfa1a08c62eaed76f4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroConfigBundle::configPage.html.twig", "OroConfigBundle:Configuration:system.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroConfigBundle::configPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["pageTitle"] = $this->env->getExtension('translator')->trans("oro.config.menu.system_configuration.label");
        // line 4
        $context["formAction"] = $this->env->getExtension('routing')->getPath("oro_config_configuration_system", array("activeGroup" =>         // line 6
(isset($context["activeGroup"]) ? $context["activeGroup"] : null), "activeSubGroup" => (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : null)));
        // line 9
        $context["routeName"] = "oro_config_configuration_system";
        // line 10
        $context["routeParameters"] = array();
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroConfigBundle:Configuration:system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,  31 => 10,  29 => 9,  27 => 6,  26 => 4,  24 => 3,  11 => 1,);
    }
}
