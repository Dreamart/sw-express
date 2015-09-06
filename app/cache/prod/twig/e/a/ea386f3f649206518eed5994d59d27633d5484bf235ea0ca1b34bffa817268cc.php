<?php

/* OroNavigationBundle:Menu:favorites.html.twig */
class __TwigTemplate_ea386f3f649206518eed5994d59d27633d5484bf235ea0ca1b34bffa817268cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:favorites.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
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

    // line 13
    public function block_list($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["favorites"] = array();
        // line 15
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["favoritesItem"]) {
                // line 17
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["favoritesItem"], "extras", array()), "isAllowed", array())) {
                    // line 18
                    echo "                ";
                    $context["favorites"] = twig_array_merge((isset($context["favorites"]) ? $context["favorites"] : null), array(0 => array("id" => $this->getAttribute($this->getAttribute($context["favoritesItem"], "extras", array()), "id", array()), "title" => $this->getAttribute($context["favoritesItem"], "label", array()), "title_rendered" => $this->env->getExtension('oro_title')->render($this->getAttribute($context["favoritesItem"], "label", array())), "url" => $this->getAttribute($context["favoritesItem"], "uri", array()), "type" => $this->getAttribute($this->getAttribute($context["favoritesItem"], "extras", array()), "type", array()))));
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoritesItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        $context["navigation"] = $this;
        // line 23
        echo "    ";
        $context["frontendOptions"] = array(0 => "el", 1 => "tabTitle", 2 => "tabIcon");
        // line 24
        echo "    <div data-data=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["favorites"]) ? $context["favorites"] : null)), "html", null, true);
        echo "\" data-options=\"";
        echo $context["navigation"]->getget_options((isset($context["frontendOptions"]) ? $context["frontendOptions"] : null), (isset($context["options"]) ? $context["options"] : null));
        echo "\"></div>
    <ul class=\"extra-list\"></ul>
    <div class=\"dot-menu-empty-message\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.messages.no_items"), "html", null, true);
        echo "</div>
";
    }

    // line 3
    public function getget_options($__attributes__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context["options"] = array();
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 6
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["attribute"], array(), "array", true, true)) {
                    // line 7
                    $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array($context["attribute"] => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["attribute"], array(), "array")));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:favorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 10,  101 => 7,  99 => 6,  95 => 5,  93 => 4,  80 => 3,  74 => 26,  66 => 24,  63 => 23,  60 => 22,  57 => 21,  51 => 20,  48 => 19,  45 => 18,  42 => 17,  37 => 16,  34 => 15,  31 => 14,  28 => 13,  11 => 1,);
    }
}
