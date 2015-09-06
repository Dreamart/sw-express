<?php

/* OroNavigationBundle:Menu:application_menu.html.twig */
class __TwigTemplate_693469fafb2d6102fa32d7a7e5b112bcb9440996b9c86b8315e0a7add54622c4 extends Twig_Template
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
        if (($this->env->getExtension('mobile_extension')->isMobile() || ($this->env->getExtension('config_extension')->getConfigValue("oro_ui.navbar_position") == "top"))) {
            // line 2
            echo "    ";
            $this->loadTemplate("OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", "OroNavigationBundle:Menu:application_menu.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "    ";
            $this->loadTemplate("OroNavigationBundle:Menu:application_menu_desktop_sided.html.twig", "OroNavigationBundle:Menu:application_menu.html.twig", 4)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:application_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
