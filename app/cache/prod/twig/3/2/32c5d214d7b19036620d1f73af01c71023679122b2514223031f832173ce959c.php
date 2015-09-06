<?php

/* OroUIBundle:Form:fields.html.twig */
class __TwigTemplate_32c5d214d7b19036620d1f73af01c71023679122b2514223031f832173ce959c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "OroUIBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'form_errors' => array($this, 'block_form_errors'),
            'date_widget' => array($this, 'block_date_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'choice_widget_option_attributes' => array($this, 'block_choice_widget_option_attributes'),
            'collection_render' => array($this, 'block_collection_render'),
            '_oro_entity_config_config_field_type_widget' => array($this, 'block__oro_entity_config_config_field_type_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"control-group";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "html", null, true);
        }
        echo "\">
            ";
        // line 6
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 7
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : null)));
            echo "
                </div>
            ";
        }
        // line 11
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 21
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " error")) : ("error"))));
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 28
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " error")) : ("error"))));
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        $this->displayParentBlock("widget_container_attributes", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_form_errors($context, array $blocks = array())
    {
        // line 34
        ob_start();
        // line 35
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 36
            echo "            ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) {
                // line 37
                echo "                ";
                $context["combinedError"] = "";
                // line 38
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 39
                    echo "                    ";
                    $context["combinedError"] = ((((isset($context["combinedError"]) ? $context["combinedError"] : null) != "")) ? ((((isset($context["combinedError"]) ? $context["combinedError"] : null) . "; ") . $this->getAttribute($context["error"], "message", array()))) : ($this->getAttribute($context["error"], "message", array())));
                    // line 40
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                <span class=\"validation-failed\">";
                echo twig_escape_filter($this->env, (isset($context["combinedError"]) ? $context["combinedError"] : null), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 43
                echo "                ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
            ";
            }
            // line 45
            echo "        ";
        }
        // line 46
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        ob_start();
        // line 51
        echo "        ";
        $context["type"] = "text";
        // line 52
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 53
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 55
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 56
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 57
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 58
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 59
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 60
            echo "
            </div>
        ";
        }
        // line 63
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 66
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        ob_start();
        // line 68
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " horizontal")) : ("horizontal"))));
        // line 69
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " validate-group")));
        // line 70
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 72
            echo "                <div class=\"oro-clearfix\">
                    ";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
                    ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("raw_label" => ((array_key_exists("raw_label", $context)) ? ((isset($context["raw_label"]) ? $context["raw_label"] : null)) : (false)), "translatable_label" => ((array_key_exists("translatable_options", $context)) ? ((isset($context["translatable_options"]) ? $context["translatable_options"] : null)) : (true))));
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        ob_start();
        // line 83
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 84
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 85
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, (((array_key_exists("translatable_groups", $context) &&  !(isset($context["translatable_groups"]) ? $context["translatable_groups"] : null))) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
                echo "\">
                    ";
                // line 86
                $context["options"] = $context["choice"];
                // line 87
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 90
                echo "                ";
                $context["label"] = (((array_key_exists("translatable_options", $context) &&  !(isset($context["translatable_options"]) ? $context["translatable_options"] : null))) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))));
                // line 91
                echo "                <option ";
                $this->displayBlock("choice_widget_option_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_safe", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_safe", array()))) {
                    echo (isset($context["label"]) ? $context["label"] : null);
                } else {
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                }
                echo "</option>
            ";
            }
            // line 93
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 97
    public function block_choice_widget_option_attributes($context, array $blocks = array())
    {
        // line 98
        ob_start();
        // line 99
        echo "    ";
        // line 100
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label", array(), "any", false, true), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label", array()), "attr", array())) > 0))) {
            // line 101
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label", array()), "attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "    ";
        }
        // line 103
        echo "
    ";
        // line 104
        if (($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "attr", array())) > 0))) {
            // line 105
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 110
    public function block_collection_render($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        ob_start();
        // line 112
        echo "        ";
        $context["__internal_9a8d2640f879055871bf98191d62f237ecc667dd36aaef3afae60989a7f6b6d8"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:Form:fields.html.twig", 112);
        // line 113
        echo "        <div class=\"row-oro\">
            <div class=\"collection-fields-list\" data-prototype=\"";
        // line 114
        echo twig_escape_filter($this->env, $context["__internal_9a8d2640f879055871bf98191d62f237ecc667dd36aaef3afae60989a7f6b6d8"]->getcollection_prototype((isset($context["subform"]) ? $context["subform"] : null)));
        echo "\">
                ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subform"]) ? $context["subform"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 116
            echo "                    ";
            echo $context["__internal_9a8d2640f879055871bf98191d62f237ecc667dd36aaef3afae60989a7f6b6d8"]->getcollection_prototype($context["field"]);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "            </div>
            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "</a>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 124
    public function block__oro_entity_config_config_field_type_widget($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 126
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 126,  422 => 125,  419 => 124,  411 => 119,  408 => 118,  399 => 116,  395 => 115,  391 => 114,  388 => 113,  385 => 112,  382 => 111,  379 => 110,  373 => 106,  360 => 105,  358 => 104,  355 => 103,  352 => 102,  339 => 101,  336 => 100,  334 => 99,  332 => 98,  329 => 97,  324 => 94,  310 => 93,  292 => 91,  289 => 90,  282 => 87,  280 => 86,  275 => 85,  272 => 84,  254 => 83,  251 => 82,  248 => 81,  242 => 77,  233 => 74,  229 => 73,  226 => 72,  222 => 71,  217 => 70,  214 => 69,  211 => 68,  208 => 67,  205 => 66,  200 => 63,  195 => 60,  193 => 59,  192 => 58,  191 => 57,  190 => 56,  185 => 55,  179 => 53,  176 => 52,  173 => 51,  170 => 50,  167 => 49,  162 => 46,  159 => 45,  153 => 43,  147 => 41,  141 => 40,  138 => 39,  133 => 38,  130 => 37,  127 => 36,  125 => 35,  123 => 34,  120 => 33,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  94 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  73 => 13,  69 => 12,  62 => 11,  56 => 8,  53 => 7,  51 => 6,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
