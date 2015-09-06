<?php

/* OroNavigationBundle:Menu:application_menu_desktop_top.html.twig */
class __TwigTemplate_dc8bde37cefd9df018f307d2855af1adffeec34916b9d661747a28dcdefeaafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", 1);
        $this->blocks = array(
            'list_wrapper' => array($this, 'block_list_wrapper'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'children' => array($this, 'block_children'),
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
    public function block_list_wrapper($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_item($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 9
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "dropdown"));
            // line 10
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => "dropdown-menu"));
            // line 11
            echo "    ";
        } else {
            // line 12
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "single"));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "routes", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "routes", array(), "any", false, true), 0, array(), "array", true, true))) {
            // line 15
            echo "        ";
            $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null), array("data-route" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "routes", array()), 0, array(), "array")));
            // line 16
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "routes", array())) > 1)) {
                // line 17
                echo "            ";
                $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null), array("data-routes" => twig_jsonencode_filter(twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "routes", array()), 1))));
                // line 18
                echo "        ";
            }
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_linkElement($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", 24);
        // line 25
        echo "
    ";
        // line 26
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array())) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) === 0))) {
            // line 27
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null), array("class" =>             // line 28
$context["oro_menu"]->getadd_attribute_values((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null), "class", array(0 => "dropdown-toggle")), "data-toggle" => "dropdown"));
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ((twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array())) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()) == "#"))) {
            // line 34
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null), array("class" =>             // line 35
$context["oro_menu"]->getadd_attribute_values((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null), "class", array(0 => "unclickable"))));
            // line 37
            echo "    ";
        }
        // line 38
        echo "
    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null));
        echo "><span class=\"title\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span></a>
";
    }

    // line 42
    public function block_children($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) === 1)) {
            // line 44
            $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array());
            // line 45
            echo "        <li class=\"dropdown-menu-title\">";
            $this->displayBlock("spanElement", $context, $blocks);
            echo "</li>
        <li class=\"divider\"><span></span></li>
    ";
        }
        // line 48
        echo "    ";
        $this->displayParentBlock("children", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 48,  135 => 45,  133 => 44,  130 => 43,  127 => 42,  117 => 39,  114 => 38,  111 => 37,  109 => 35,  107 => 34,  105 => 33,  102 => 32,  99 => 31,  97 => 28,  95 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  49 => 10,  47 => 9,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
