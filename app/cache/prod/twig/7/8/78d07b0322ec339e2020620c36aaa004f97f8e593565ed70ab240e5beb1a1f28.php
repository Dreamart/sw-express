<?php

/* OroNavigationBundle:Menu:pin_tabs_list.html.twig */
class __TwigTemplate_78d07b0322ec339e2020620c36aaa004f97f8e593565ed70ab240e5beb1a1f28 extends Twig_Template
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
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 2
            echo "<div class=\"list-bar-wrapper\" id=\"pinbar\">
    <div class=\"list-bar\">
        <ul></ul>
        <div class=\"pin-bar-empty\" ><a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("oro_pinbar_help");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Learn how to use this space"), "html", null, true);
            echo "</a></div>
    </div>
    <div class=\"show-more dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-ellipsis-vertical\"></i></a><div class=\"dropdown-menu pull-right\"><ul></ul></div></div>
    ";
            // line 8
            echo $this->env->getExtension('oro_menu')->render("pinbar");
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:pin_tabs_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }
}
