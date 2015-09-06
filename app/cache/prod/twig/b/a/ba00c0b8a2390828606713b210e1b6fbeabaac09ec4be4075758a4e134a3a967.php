<?php

/* OroNavigationBundle:Menu:dots_menu.html.twig */
class __TwigTemplate_ba00c0b8a2390828606713b210e1b6fbeabaac09ec4be4075758a4e134a3a967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:dots_tabs.html.twig", "OroNavigationBundle:Menu:dots_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:dots_tabs.html.twig";
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
        if (((($this->env->getExtension('mobile_extension')->isDesktop() && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array())) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 5
            echo "    <li class=\"dot-menu dropdown\">
        <a href=\"#\" class=\"oro-dropdown-toggle\">
            <i class=\"icon-bars\"></i>
        </a>
        <div class=\"dropdown-menu pull-right\" tabindex=\"0\">
            <div class=\"tabbable tabs-left\">
                ";
            // line 11
            $this->displayBlock("navbar_tabs", $context, $blocks);
            echo "
                ";
            // line 12
            $this->displayBlock("navbar_tabs_content", $context, $blocks);
            echo "
            </div>
        </div>
    </li>
    <script type=\"text/javascript\">
        require(['jquery', 'bootstrap'], function (\$) {
            \$('.show-if-empty a').tab('show');
        });
    </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dots_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  42 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
