<?php

/* OroEmailBundle:Dashboard:recentEmailsGrid.html.twig */
class __TwigTemplate_e9443897531e309c7faae56c6e27df6654500650f94c4875e73b5d5d5dbf1a92 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEmailBundle:Dashboard:recentEmailsGrid.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : null), array("userId" => (isset($context["loggedUserId"]) ? $context["loggedUserId"] : null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Dashboard:recentEmailsGrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
