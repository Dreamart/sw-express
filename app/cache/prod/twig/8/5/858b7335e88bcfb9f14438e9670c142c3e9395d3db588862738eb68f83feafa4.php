<?php

/* OroNavigationBundle:Menu:history.html.twig */
class __TwigTemplate_858b7335e88bcfb9f14438e9670c142c3e9395d3db588862738eb68f83feafa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:history.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'label' => array($this, 'block_label'),
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
    public function block_list($context, array $blocks = array())
    {
        // line 4
        echo "    <ul";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oro_menu"]) ? $context["oro_menu"] : null), "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : null)), "method"), "html", null, true);
        echo ">
        ";
        // line 5
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 6
            echo "            ";
            $context["oro_menu"] = $this;
            // line 7
            echo "            ";
            $this->displayBlock("children", $context, $blocks);
            echo "
        ";
        }
        // line 9
        echo "    </ul>
    ";
        // line 10
        if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) && (null === $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parent", array())))) {
            // line 11
            echo "        <div class=\"dot-menu-empty-message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.messages.no_items"), "html", null, true);
            echo "</div>
    ";
        }
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  61 => 15,  53 => 11,  51 => 10,  48 => 9,  42 => 7,  39 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
