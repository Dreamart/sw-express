<?php

/* OroUIBundle:Default:user_dots_menu.html.twig */
class __TwigTemplate_3faa5c47f9de4917018f07c75fbd90a81a3a6a93a3b177b76ced03fd76802dcb extends Twig_Template
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
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("dots_menu", $context)) ? (_twig_default_filter((isset($context["dots_menu"]) ? $context["dots_menu"] : null), "dots_menu")) : ("dots_menu")), array());
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:user_dots_menu.html.twig";
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
