<?php

/* OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig */
class __TwigTemplate_b034e5b0ea88e0a083790e67418f802f89aa7916d91950e6a28489d7eae51ffc extends Twig_Template
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
        echo $this->env->getExtension('oro_menu')->render("dots_menu");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig";
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
