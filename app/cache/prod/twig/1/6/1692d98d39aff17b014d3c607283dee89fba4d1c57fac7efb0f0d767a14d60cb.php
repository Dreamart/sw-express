<?php

/* OroNavigationBundle:Menu:menu.html.twig */
class __TwigTemplate_1692d98d39aff17b014d3c607283dee89fba4d1c57fac7efb0f0d767a14d60cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu_base.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'item_renderer' => array($this, 'block_item_renderer'),
            'item_content' => array($this, 'block_item_content'),
            'list_wrapper' => array($this, 'block_list_wrapper'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 2);
        // line 3
        $context["Navigation"] = $this->loadTemplate("OroNavigationBundle::macros.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_root($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", array());
        // line 27
        echo "
    ";
        // line 28
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "rootClass", array(), "any", true, true)) {
            // line 29
            echo "        ";
            $context["oro_menu"] = $this;
            // line 30
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : null), array("class" => $context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "rootClass", array())))));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 35
    public function block_list($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", array()))) {
            // line 37
            echo "        ";
            $context["oro_menu"] = $this;
            // line 38
            echo "        <ul";
            echo $context["oro_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 39
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
    }

    // line 44
    public function block_children($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : null);
        // line 47
        echo "    ";
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : null);
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array()))) {
            // line 50
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : null), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "depth", array()) - 1)));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : null), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            $context["itemAttributes"] = $this->getAttribute($context["item"], "attributes", array());
            // line 54
            $context["childrenAttributes"] = $this->getAttribute($context["item"], "childrenAttributes", array());
            // line 55
            $context["classes"] = (($this->getAttribute((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null), "class", array()), " ")) : (array()));
            // line 56
            $context["childrenClasses"] = (($this->getAttribute((isset($context["childrenAttributes"]) ? $context["childrenAttributes"] : null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute((isset($context["childrenAttributes"]) ? $context["childrenAttributes"] : null), "class", array()), " ")) : (array()));
            // line 57
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    ";
        // line 60
        echo "    ";
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : null);
        // line 61
        echo "    ";
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : null);
    }

    // line 64
    public function block_item($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 68
    public function block_item_renderer($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "showNonAuthorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "showNonAuthorized", array()));
        // line 70
        echo "    ";
        $context["displayable"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "isAllowed", array()) || (isset($context["showNonAuthorized"]) ? $context["showNonAuthorized"] : null));
        // line 71
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", array()) && (isset($context["displayable"]) ? $context["displayable"] : null))) {
            // line 72
            echo "        ";
            // line 73
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) {
                // line 74
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 75
(isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array())), "method")) {
                // line 76
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", array())));
            }
            // line 78
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst", array())) {
                // line 79
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass", array())));
            }
            // line 81
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast", array())) {
                // line 82
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass", array())));
            }
            // line 84
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : null))) {
                // line 85
                $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 87
            echo "        ";
            // line 88
            echo "        ";
            $context["oro_menu"] = $this;
            // line 89
            echo "        <li";
            echo $context["oro_menu"]->getattributes((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null));
            echo ">
            ";
            // line 90
            $this->displayBlock("item_content", $context, $blocks);
            echo "
        </li>
    ";
        }
    }

    // line 95
    public function block_item_content($context, array $blocks = array())
    {
        // line 96
        $context["linkAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", array());
        // line 97
        $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array());
        // line 98
        if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", array())))) {
            // line 99
            echo "        ";
            $this->displayBlock("linkElement", $context, $blocks);
        } else {
            // line 101
            echo "        ";
            $this->displayBlock("spanElement", $context, $blocks);
        }
        // line 103
        echo "    ";
        // line 104
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()))));
        // line 105
        $context["listAttributes"] = twig_array_merge((isset($context["childrenAttributes"]) ? $context["childrenAttributes"] : null), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
        // line 106
        echo "    ";
        $this->displayBlock("list_wrapper", $context, $blocks);
        echo "
";
    }

    // line 110
    public function block_list_wrapper($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
";
    }

    // line 114
    public function block_linkElement($context, array $blocks = array())
    {
        // line 115
        echo "    ";
        $context["oro_menu"] = $this;
        // line 116
        echo "    ";
        $context["extras"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array());
        // line 117
        echo "
    ";
        // line 118
        if (($this->getAttribute((isset($context["extras"]) ? $context["extras"] : null), "dialog", array(), "any", true, true) && $this->getAttribute((isset($context["extras"]) ? $context["extras"] : null), "dialog", array()))) {
            // line 119
            echo "        ";
            echo $context["Navigation"]->getrenderClientLink($this->getAttribute((isset($context["extras"]) ? $context["extras"] : null), "dialog_config", array()), array("entityClass" => $this->env->getExtension('oro_entity')->getClassName($this->getAttribute(            // line 120
(isset($context["app"]) ? $context["app"] : null), "user", array()), true), "entityId" => $this->getAttribute($this->getAttribute(            // line 121
(isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())));
        } else {
            // line 124
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
            echo "\"";
            echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : null));
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>
    ";
        }
        // line 126
        echo "
";
    }

    // line 129
    public function block_spanElement($context, array $blocks = array())
    {
        // line 130
        echo "    ";
        $context["oro_menu"] = $this;
        // line 131
        echo "    <span";
        echo $context["oro_menu"]->getattributes((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
    }

    // line 134
    public function block_label($context, array $blocks = array())
    {
        // line 135
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "icon"), "method")) {
            // line 136
            echo "        <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 138
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 139
            echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()));
        } else {
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translateParams", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "translateDomain", 1 => "messages"), "method")), "html", null, true);
        }
    }

    // line 5
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 7
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 8
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getadd_attribute_values($__attributes__ = null, $__attribute__ = null, $__values__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "attribute" => $__attribute__,
            "values" => $__values__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            $context["_values"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["attribute"]) ? $context["attribute"] : null), array(), "array", true, true)) ? (twig_split_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["attribute"]) ? $context["attribute"] : null), array(), "array"), " ")) : (array()));
            // line 15
            $context["_values"] = twig_array_merge((isset($context["_values"]) ? $context["_values"] : null), (isset($context["values"]) ? $context["values"] : null));
            // line 16
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["_values"]) ? $context["_values"] : null), " "), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 16,  407 => 15,  405 => 14,  391 => 13,  375 => 8,  373 => 7,  368 => 6,  356 => 5,  351 => 141,  348 => 139,  346 => 138,  340 => 136,  338 => 135,  335 => 134,  326 => 131,  323 => 130,  320 => 129,  315 => 126,  305 => 124,  302 => 121,  301 => 120,  299 => 119,  297 => 118,  294 => 117,  291 => 116,  288 => 115,  285 => 114,  278 => 111,  275 => 110,  268 => 106,  266 => 105,  264 => 104,  262 => 103,  258 => 101,  254 => 99,  252 => 98,  250 => 97,  248 => 96,  245 => 95,  237 => 90,  232 => 89,  229 => 88,  227 => 87,  224 => 85,  222 => 84,  219 => 82,  217 => 81,  214 => 79,  212 => 78,  209 => 76,  207 => 75,  205 => 74,  203 => 73,  201 => 72,  198 => 71,  195 => 70,  192 => 69,  189 => 68,  182 => 65,  179 => 64,  174 => 61,  171 => 60,  169 => 59,  152 => 57,  150 => 56,  148 => 55,  146 => 54,  144 => 53,  126 => 52,  123 => 51,  120 => 50,  117 => 49,  115 => 48,  112 => 47,  109 => 46,  107 => 45,  104 => 44,  96 => 39,  91 => 38,  88 => 37,  85 => 36,  82 => 35,  77 => 32,  74 => 31,  71 => 30,  68 => 29,  66 => 28,  63 => 27,  60 => 26,  57 => 25,  49 => 21,  46 => 20,  43 => 19,  39 => 1,  37 => 3,  35 => 2,  11 => 1,);
    }
}
