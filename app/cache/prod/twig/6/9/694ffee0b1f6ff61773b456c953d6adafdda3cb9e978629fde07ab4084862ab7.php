<?php

/* OroOrganizationBundle:Form:fields.html.twig */
class __TwigTemplate_694ffee0b1f6ff61773b456c953d6adafdda3cb9e978629fde07ab4084862ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_business_unit_tree_widget' => array($this, 'block_oro_business_unit_tree_widget'),
            'oro_organizations_select_widget' => array($this, 'block_oro_organizations_select_widget'),
            'oro_type_choice_ownership_type_widget' => array($this, 'block_oro_type_choice_ownership_type_widget'),
            'oro_business_unit_tree_select_widget' => array($this, 'block_oro_business_unit_tree_select_widget'),
            'choice_bu_widget_collapsed' => array($this, 'block_choice_bu_widget_collapsed'),
            'choice_bu_widget_options' => array($this, 'block_choice_bu_widget_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_business_unit_tree_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('oro_organizations_select_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('oro_type_choice_ownership_type_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('oro_business_unit_tree_select_widget', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('choice_bu_widget_collapsed', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        $this->displayBlock('choice_bu_widget_options', $context, $blocks);
    }

    // line 1
    public function block_oro_business_unit_tree_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " horizontal")) : ("horizontal"))));
            // line 4
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " validate-group")));
            // line 5
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["id"] => $context["child"]) {
                // line 7
                echo "                <div class=\"oro-clearfix\">
                    ";
                // line 8
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                    ";
                // line 9
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("raw_label" => true));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </div>
    ";
        } else {
            // line 14
            echo "        ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
    }

    // line 18
    public function block_oro_organizations_select_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        ob_start();
        // line 20
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " horizontal")) : ("horizontal"))));
        // line 21
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " validate-group")));
        // line 22
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <input type=\"hidden\" name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "[organizations][]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "default_organization", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "[default_organization]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "default_organization", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\" />
            ";
        // line 25
        echo $this->getAttribute($this, "renderOrganizationChildren", array(0 =>         // line 26
(isset($context["form"]) ? $context["form"] : null), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "organization_tree_ids", array()), 0, array(), "array"), "organization", array()), 2 => $this->getAttribute($this->getAttribute(        // line 28
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "organization_tree_ids", array()), 3 => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "selected_business_units", array()), 4 => 0), "method");
        // line 31
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 63
    public function block_oro_type_choice_ownership_type_widget($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        ob_start();
        // line 65
        echo "        ";
        if (((isset($context["value"]) ? $context["value"] : null) || (isset($context["disabled"]) ? $context["disabled"] : null))) {
            // line 66
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 67
                echo "                ";
                if (($this->getAttribute($context["choice"], "value", array()) == ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), "NONE")) : ("NONE")))) {
                    // line 68
                    echo "                    <div class=\"control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "label", array()), "html", null, true);
                    echo "</div>
                ";
                }
                // line 70
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 73
            echo "            ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
        ";
        }
        // line 75
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 78
    public function block_oro_business_unit_tree_select_widget($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $context["entityId"] = false;
        // line 80
        echo "    ";
        if (("oro_business_unit_form" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "name", array()))) {
            // line 81
            echo "        ";
            $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array()), "id", array());
            // line 82
            echo "    ";
        }
        // line 83
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 84
            echo "        ";
            // line 85
            echo "        ";
            $context["raw_label"] = true;
            // line 86
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 88
            echo "        ";
            $this->displayBlock("choice_bu_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
    }

    // line 92
    public function block_choice_bu_widget_collapsed($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        ob_start();
        // line 94
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 95
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) {
            // line 96
            echo "                <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</option>
            ";
        }
        // line 98
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 99
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 100
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 101
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : null)))) {
                // line 102
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>
                ";
            }
            // line 104
            echo "            ";
        }
        // line 105
        echo "            ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 106
        echo "            ";
        $this->displayBlock("choice_bu_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 111
    public function block_choice_bu_widget_options($context, array $blocks = array())
    {
        // line 112
        echo "    ";
        ob_start();
        // line 113
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
            // line 114
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 115
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\">
                    ";
                // line 116
                $context["options"] = $context["choice"];
                // line 117
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 120
                echo "                ";
                $context["disable"] = "";
                // line 121
                echo "                ";
                if ((array_key_exists("forbidden_business_unit_ids", $context) && twig_length_filter($this->env, (isset($context["forbidden_business_unit_ids"]) ? $context["forbidden_business_unit_ids"] : null)))) {
                    // line 122
                    echo "                    ";
                    if (twig_in_filter($this->getAttribute($context["choice"], "value", array()), (isset($context["forbidden_business_unit_ids"]) ? $context["forbidden_business_unit_ids"] : null))) {
                        // line 123
                        echo "                        ";
                        $context["disable"] = "disabled=\"disabled\"";
                        // line 124
                        echo "                    ";
                    }
                    // line 125
                    echo "                ";
                } else {
                    // line 126
                    echo "                    ";
                    if (( !twig_in_filter($this->getAttribute($context["choice"], "value", array()), (isset($context["business_unit_ids"]) ? $context["business_unit_ids"] : null)) || ((isset($context["entityId"]) ? $context["entityId"] : null) && ((isset($context["entityId"]) ? $context["entityId"] : null) == $this->getAttribute($context["choice"], "value", array()))))) {
                        // line 127
                        echo "                        ";
                        $context["disable"] = "disabled=\"disabled\"";
                        // line 128
                        echo "                    ";
                    }
                    // line 129
                    echo "                ";
                }
                // line 130
                echo "                <option ";
                echo twig_escape_filter($this->env, (isset($context["disable"]) ? $context["disable"] : null), "html", null, true);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"
                ";
                // line 131
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                // line 132
                ob_start();
                // line 133
                $context["label"] = (((array_key_exists("translatable_options", $context) &&  !(isset($context["translatable_options"]) ? $context["translatable_options"] : null))) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))));
                // line 134
                echo "                        ";
                // line 135
                echo "                        ";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 137
                echo "</option>
            ";
            }
            // line 139
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
        // line 140
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 36
    public function getrenderOrganizationChildren($__form__ = null, $__org_id__ = null, $__children__ = array(), $__selected__ = array(), $__level__ = 1, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "org_id" => $__org_id__,
            "children" => $__children__,
            "selected" => $__selected__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 37
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 38
                echo "        <div class=\"oro-clearfix\">
            <span style=\"float:left;\">
            ";
                // line 40
                if (((isset($context["level"]) ? $context["level"] : null) != 0)) {
                    // line 41
                    echo "                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["level"]) ? $context["level"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 42
                        echo "                    ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["si"]) {
                            echo "&nbsp;";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['si'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "            </span>
            <input type=\"checkbox\"
                id=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
                echo "_businessUnits_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
                echo "\"
                name=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
                echo "[businessUnits][]\"
                value=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
                echo "\"
                ";
                // line 50
                if (twig_in_filter($this->getAttribute($context["child"], "id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    echo " checked=\"checked\" ";
                }
                // line 51
                echo "                class=\"bu\"
                data-organization=\"";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["org_id"]) ? $context["org_id"] : null), "html", null, true);
                echo "\"
            />
            <label for=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
                echo "_businessUnits_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()), "html", null, true);
                echo "</label>
        </div>
        ";
                // line 56
                if ($this->getAttribute($context["child"], "children", array(), "any", true, true)) {
                    // line 57
                    echo "            ";
                    $context["sublevel"] = ((isset($context["level"]) ? $context["level"] : null) + 1);
                    // line 58
                    echo "            ";
                    echo $this->getAttribute($this, "renderOrganizationChildren", array(0 => (isset($context["form"]) ? $context["form"] : null), 1 => (isset($context["org_id"]) ? $context["org_id"] : null), 2 => $this->getAttribute($context["child"], "children", array()), 3 => (isset($context["selected"]) ? $context["selected"] : null), 4 => (isset($context["sublevel"]) ? $context["sublevel"] : null)), "method");
                    echo "
        ";
                }
                // line 60
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 60,  502 => 58,  499 => 57,  497 => 56,  488 => 54,  483 => 52,  480 => 51,  476 => 50,  472 => 49,  468 => 48,  462 => 47,  458 => 45,  455 => 44,  449 => 43,  439 => 42,  434 => 41,  432 => 40,  428 => 38,  423 => 37,  407 => 36,  402 => 140,  388 => 139,  384 => 137,  380 => 135,  378 => 134,  376 => 133,  374 => 132,  369 => 131,  362 => 130,  359 => 129,  356 => 128,  353 => 127,  350 => 126,  347 => 125,  344 => 124,  341 => 123,  338 => 122,  335 => 121,  332 => 120,  325 => 117,  323 => 116,  318 => 115,  315 => 114,  297 => 113,  294 => 112,  291 => 111,  282 => 106,  279 => 105,  276 => 104,  270 => 102,  268 => 101,  263 => 100,  260 => 99,  257 => 98,  247 => 96,  245 => 95,  237 => 94,  234 => 93,  231 => 92,  223 => 88,  217 => 86,  214 => 85,  212 => 84,  209 => 83,  206 => 82,  203 => 81,  200 => 80,  197 => 79,  194 => 78,  189 => 75,  183 => 73,  177 => 71,  171 => 70,  165 => 68,  162 => 67,  157 => 66,  154 => 65,  151 => 64,  148 => 63,  141 => 31,  139 => 29,  138 => 28,  137 => 27,  136 => 26,  135 => 25,  129 => 24,  123 => 23,  118 => 22,  115 => 21,  112 => 20,  109 => 19,  106 => 18,  98 => 14,  94 => 12,  85 => 9,  81 => 8,  78 => 7,  74 => 6,  69 => 5,  66 => 4,  63 => 3,  60 => 2,  57 => 1,  53 => 111,  50 => 110,  48 => 92,  45 => 91,  43 => 78,  40 => 77,  38 => 63,  35 => 62,  32 => 35,  30 => 18,  27 => 17,  25 => 1,);
    }
}
