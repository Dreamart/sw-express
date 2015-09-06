<?php

/* OroNavigationBundle:Shortcut:shortcuts.html.twig */
class __TwigTemplate_f042b75d01559a9389bd606dd1188133867f04751b45b973fca071964dd76fa7 extends Twig_Template
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
        echo $this->env->getExtension('oro_menu')->render("shortcuts", array("source" => "oro_api_get_shortcuts", "details" => $this->env->getExtension('routing')->getPath("oro_shortcut_actionslist")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Shortcut:shortcuts.html.twig";
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
