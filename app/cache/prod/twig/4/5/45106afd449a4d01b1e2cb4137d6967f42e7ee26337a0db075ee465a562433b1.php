<?php

/* OroUIBundle:Default/navbar:blocks.html.twig */
class __TwigTemplate_45106afd449a4d01b1e2cb4137d6967f42e7ee26337a0db075ee465a562433b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'application_menu' => array($this, 'block_application_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('application_menu', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('user_menu', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
    }

    // line 1
    public function block_application_menu($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("application_menu", $context)) ? (_twig_default_filter((isset($context["application_menu"]) ? $context["application_menu"] : null), "application_menu")) : ("application_menu")), array());
    }

    // line 5
    public function block_user_menu($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("user_menu", $context)) ? (_twig_default_filter((isset($context["user_menu"]) ? $context["user_menu"] : null), "user_menu")) : ("user_menu")), array());
        // line 7
        echo "    ";
    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("navbar", $context)) ? (_twig_default_filter((isset($context["navbar"]) ? $context["navbar"] : null), "navbar")) : ("navbar")), array());
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default/navbar:blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  54 => 15,  50 => 7,  47 => 6,  44 => 5,  39 => 2,  36 => 1,  32 => 15,  29 => 14,  27 => 5,  24 => 4,  22 => 1,);
    }
}
