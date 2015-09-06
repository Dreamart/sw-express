<?php

/* OroNavigationBundle:Menu:dropdown.html.twig */
class __TwigTemplate_36f08e30fab9410e0fb01ec481a71a82813bf1571f18b9a48a100dd3409fe22a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:dropdown.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", array());
        // line 5
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:dropdown.html.twig", 5);
        // line 6
        echo "    ";
        $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" =>         // line 8
$context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(0 => "dropdown-menu")), "role" => "menu", "aria-labelledby" => "dropdownMenu"));
        // line 12
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  39 => 8,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
