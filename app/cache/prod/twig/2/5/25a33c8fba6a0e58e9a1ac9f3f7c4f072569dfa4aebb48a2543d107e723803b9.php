<?php

/* OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig */
class __TwigTemplate_25a33c8fba6a0e58e9a1ac9f3f7c4f072569dfa4aebb48a2543d107e723803b9 extends Twig_Template
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
        echo $this->env->getExtension('oro_menu')->render("application_menu");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig";
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
