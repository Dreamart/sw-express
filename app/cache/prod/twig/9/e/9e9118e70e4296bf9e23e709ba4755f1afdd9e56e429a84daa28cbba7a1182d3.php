<?php

/* OroNavigationBundle:Menu:_dots_tabs.html.twig */
class __TwigTemplate_9e9118e70e4296bf9e23e709ba4755f1afdd9e56e429a84daa28cbba7a1182d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:_htabs.html.twig", "OroNavigationBundle:Menu:_dots_tabs.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'item_renderer' => array($this, 'block_item_renderer'),
            'linkElement' => array($this, 'block_linkElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:_htabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_item_renderer($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "showNonAuthorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "showNonAuthorized", array()));
        // line 9
        echo "    ";
        $context["displayable"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "isAllowed", array()) || (isset($context["showNonAuthorized"]) ? $context["showNonAuthorized"] : null));
        // line 10
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", array()) && (isset($context["displayable"]) ? $context["displayable"] : null))) {
            // line 11
            echo "        ";
            // line 12
            echo "        ";
            $context["oro_menu"] = $this;
            // line 13
            $context["linkAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", array());
            // line 14
            $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array());
            // line 15
            echo "        ";
            $context["class"] = array(0 => "");
            // line 16
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "activeIfFirstIsEmpty", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "activeIfFirstIsEmpty", array()))) {
                // line 17
                echo "            ";
                $context["class"] = twig_array_merge((isset($context["class"]) ? $context["class"] : null), array(0 => "show-if-empty"));
                // line 18
                echo "        ";
            }
            // line 19
            echo "        <li id=\"";
            echo twig_escape_filter($this->env, trim(twig_lower_filter($this->env, strtr($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name", array()), array(" " => "_", "#" => "_")))), "html", null, true);
            echo "-tab\" class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["class"]) ? $context["class"] : null), " "), "html", null, true);
            echo "\">
            ";
            // line 20
            $this->displayBlock("linkElement", $context, $blocks);
            echo "
        </li>
    ";
        }
    }

    // line 25
    public function block_linkElement($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_dots_tabs.html.twig", 26);
        // line 27
        echo "    ";
        $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null), array("data-toggle" => "tab"));
        // line 28
        echo "    ";
        $context["itemLink"] = (("#" . trim(twig_lower_filter($this->env, strtr($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name", array()), array(" " => "_", "#" => "_"))))) . "-content");
        // line 29
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["itemLink"]) ? $context["itemLink"] : null), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_dots_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  80 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
