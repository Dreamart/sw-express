<?php

/* OroUIBundle::macros.html.twig */
class __TwigTemplate_80a3e66344b396096a95d80ac588b059ab14aee34643942e352a7aa61becfe33 extends Twig_Template
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
        // line 28
        echo "
";
        // line 62
        echo "
";
        // line 89
        echo "
";
        // line 104
        echo "
";
        // line 114
        echo "
";
        // line 124
        echo "
";
        // line 138
        echo "
";
        // line 152
        echo "
";
        // line 188
        echo "
";
        // line 205
        echo "
";
        // line 237
        echo "
";
        // line 252
        echo "
";
        // line 280
        echo "
";
        // line 295
        echo "
";
        // line 308
        echo "
";
        // line 353
        echo "
";
        // line 389
        echo "
";
        // line 422
        echo "
";
        // line 468
        echo "
";
        // line 527
        echo "
";
        // line 549
        echo "
";
        // line 577
        echo "
";
        // line 586
        echo "
";
        // line 608
        echo "
";
        // line 628
        echo "
";
        // line 646
        echo "
";
        // line 653
        echo "
";
        // line 660
        echo "
";
        // line 669
        echo "
";
        // line 699
        echo "
";
        // line 736
        echo "
";
        // line 809
        echo "
";
        // line 832
        echo "
";
        // line 845
        echo "
";
    }

    // line 1
    public function getcollection_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array())))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "prototype", array());
                // line 4
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = (isset($context["widget"]) ? $context["widget"] : null);
                // line 7
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "full_name", array());
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <div data-content=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder\">
            <div class=\"float-holder \">
                ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                ";
            // line 14
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()))) {
                // line 15
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 16
                    echo "                        ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                    echo "
                        ";
                    // line 17
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'errors');
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                ";
            } else {
                // line 20
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
                ";
            }
            // line 22
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
            </div>
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">×</button>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function gettooltip($__tooltip__ = null, $__tooltip_parameters__ = null, $__tooltip_placement__ = null, $__details_enabled__ = null, $__details_link__ = null, $__details_anchor__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "tooltip" => $__tooltip__,
            "tooltip_parameters" => $__tooltip_parameters__,
            "tooltip_placement" => $__tooltip_placement__,
            "details_enabled" => $__details_enabled__,
            "details_link" => $__details_link__,
            "details_anchor" => $__details_anchor__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            $context["tooltip_parameters"] = ((array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter((isset($context["tooltip_parameters"]) ? $context["tooltip_parameters"] : null), array())) : (array()));
            // line 31
            echo "    ";
            $context["tooltip"] = $this->env->getExtension('translator')->trans((isset($context["tooltip"]) ? $context["tooltip"] : null), (isset($context["tooltip_parameters"]) ? $context["tooltip_parameters"] : null), "tooltips");
            // line 32
            echo "    ";
            if ( !twig_test_empty((isset($context["tooltip"]) ? $context["tooltip"] : null))) {
                // line 33
                echo "        ";
                $context["details_anchor"] = ((array_key_exists("details_anchor", $context)) ? (_twig_default_filter((isset($context["details_anchor"]) ? $context["details_anchor"] : null), null)) : (null));
                // line 34
                echo "        ";
                $context["details_link"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter((isset($context["details_link"]) ? $context["details_link"] : null), null)) : (null));
                // line 35
                echo "        ";
                $context["details_enabled"] = ((array_key_exists("details_enabled", $context)) ? (_twig_default_filter((isset($context["details_enabled"]) ? $context["details_enabled"] : null), false)) : (false));
                // line 36
                echo "        ";
                $context["tooltip_placement"] = ((array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter((isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : null), null)) : (null));
                // line 37
                echo "
        ";
                // line 39
                echo "        ";
                if ((((isset($context["details_enabled"]) ? $context["details_enabled"] : null) || (isset($context["details_anchor"]) ? $context["details_anchor"] : null)) || (isset($context["details_link"]) ? $context["details_link"] : null))) {
                    // line 40
                    echo "            ";
                    $context["helpLink"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter((isset($context["details_link"]) ? $context["details_link"] : null), $this->env->getExtension('oro_help')->getHelpLinkUrl())) : ($this->env->getExtension('oro_help')->getHelpLinkUrl()));
                    // line 41
                    echo "            ";
                    if ((isset($context["details_anchor"]) ? $context["details_anchor"] : null)) {
                        // line 42
                        echo "                ";
                        $context["helpLink"] = (((isset($context["helpLink"]) ? $context["helpLink"] : null) . "#") . (isset($context["details_anchor"]) ? $context["details_anchor"] : null));
                        // line 43
                        echo "            ";
                    }
                    // line 44
                    echo "            ";
                    $context["tooltip"] = ((((((isset($context["tooltip"]) ? $context["tooltip"] : null) . "<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"") .                     // line 45
(isset($context["helpLink"]) ? $context["helpLink"] : null)) . "\">") . $this->env->getExtension('translator')->trans("oro.form.tooltip.read_more")) . "</a></div></div>");
                    // line 48
                    echo "        ";
                }
                // line 49
                echo "        ";
                // line 50
                echo "
        ";
                // line 51
                $context["tooltip"] = (("<div class=\"oro-popover-content\">" .                 // line 52
(isset($context["tooltip"]) ? $context["tooltip"] : null)) . "</div>");
                // line 55
                echo "
        <i class=\"icon-info-sign tooltip-icon\"
           ";
                // line 57
                if ((isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : null)) {
                    echo "data-placement=\"";
                    echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : null), "html", null, true);
                    echo "\"";
                }
                // line 58
                echo "           data-content=\"";
                echo twig_escape_filter($this->env, (isset($context["tooltip"]) ? $context["tooltip"] : null), "html", null, true);
                echo "\"
           data-toggle=\"popover\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 70
    public function getattibuteRow($__title__ = null, $__value__ = null, $__additionalData__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 71
            echo "    ";
            ob_start();
            // line 72
            echo "        <div class=\"clearfix-oro\">
            ";
            // line 73
            if ( !$this->getAttribute((isset($context["value"]) ? $context["value"] : null), "value", array(), "any", true, true)) {
                // line 74
                echo "                <div class=\"control-label\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 76
                echo "                <div class=\"control-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "value", array()), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "hint", array()), "html", null, true);
                echo "</strong></div>
            ";
            }
            // line 78
            echo "        </div>
        ";
            // line 79
            if (twig_length_filter($this->env, (isset($context["additionalData"]) ? $context["additionalData"] : null))) {
                // line 80
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : null), "data", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 81
                    echo "                <div class=\"clearfix-oro\">
                    <div class=\"control-label\">";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], $this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : null), "field", array())), "html", null, true);
                    echo "</div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "        ";
            }
            // line 86
            echo "    ";
            $context["attributeValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 87
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : null), 1 => (isset($context["attributeValue"]) ? $context["attributeValue"] : null)), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function getrenderAttribute($__title__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 97
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            ";
            // line 100
            echo (isset($context["data"]) ? $context["data"] : null);
            echo "
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 111
    public function getrenderProperty($__title__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 112
            echo "    ";
            echo $this->getAttribute($this, "renderHtmlProperty", array(0 => (isset($context["title"]) ? $context["title"] : null), 1 => twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function getrenderHtmlProperty($__title__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : null), 1 => (("<div class=\"control-label html-content\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) ? $context["data"] : null), $this->env->getExtension('translator')->trans("oro.ui.empty"))) : ($this->env->getExtension('translator')->trans("oro.ui.empty")))) . "</div>")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function getrenderSwitchableHtmlProperty($__title__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 132
            echo "    ";
            if ( !$this->env->getExtension('config_extension')->getConfigValue("oro_form.wysiwyg_enabled")) {
                // line 133
                echo "        ";
                $context["data"] = nl2br(strip_tags((isset($context["data"]) ? $context["data"] : null), "<a>"));
                // line 134
                echo "    ";
            }
            // line 135
            echo "
    ";
            // line 136
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : null), 1 => (("<div class=\"control-label html-content\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) ? $context["data"] : null), $this->env->getExtension('translator')->trans("oro.ui.empty"))) : ($this->env->getExtension('translator')->trans("oro.ui.empty")))) . "</div>")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 146
    public function getrenderColorProperty($__title__ = null, $__data__ = null, $__empty__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "empty" => $__empty__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 147
            echo "    ";
            if ( !(null === (isset($context["data"]) ? $context["data"] : null))) {
                // line 148
                echo "       ";
                $context["data"] = (((((("<i class=\"color hide-text\" title=\"" . (isset($context["data"]) ? $context["data"] : null)) . "\" style=\"background-color: ") . (isset($context["data"]) ? $context["data"] : null)) . ";\">") . (isset($context["data"]) ? $context["data"] : null)) . "</i>");
                // line 149
                echo "    ";
            }
            // line 150
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : null), 1 => (("<div class=\"control-label\">" . _twig_default_filter(((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) ? $context["data"] : null), (isset($context["empty"]) ? $context["empty"] : null))) : ((isset($context["empty"]) ? $context["empty"] : null))), $this->env->getExtension('translator')->trans("oro.ui.empty"))) . "</div>")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getlink($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    ";
            // line 167
            echo "    ";
            $context["iconHtml"] = "";
            // line 168
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) {
                // line 169
                echo "        ";
                ob_start();
                // line 170
                echo "        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array()), "html", null, true);
                echo " hide-text\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array()), "html", null, true);
                echo "</i>
        ";
                $context["iconHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 172
                echo "    ";
            } else {
                // line 173
                echo "    ";
            }
            // line 174
            echo "    ";
            ob_start();
            // line 175
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "path", array()), "html", null, true);
            echo "\"
        ";
            // line 176
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array(), "any", true, true)) {
                // line 177
                echo "            id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 179
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array(), "any", true, true)) {
                // line 180
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 181
                    echo "                data-";
                    echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "        ";
            }
            // line 184
            echo "       class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array())) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array())) : ("")), "html", null, true);
            echo "\"
       ";
            // line 185
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array()), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo trim((isset($context["iconHtml"]) ? $context["iconHtml"] : null));
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array())), "html", null, true);
            echo "</a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 200
    public function getbutton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 201
            echo "    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 202
            echo $this->getAttribute($this, "link", array(0 => twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : null), array("class" => "btn back icons-holder-text"))), "method");
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 216
    public function getdropdownButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 217
            echo "    <div class=\"btn-group\">
        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
            // line 219
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) {
                // line 220
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array()), "html", null, true);
                echo "\"></i>
            ";
            }
            // line 222
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array()), "html", null, true);
            echo "
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu ";
            // line 225
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array())) : ("")), "html", null, true);
            echo "\">
            ";
            // line 226
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "elements", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "elements", array())))) {
                // line 227
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "elements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 228
                    echo "                    ";
                    echo $this->getAttribute($this, "dropdownItem", array(0 => $context["item"]), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 230
                echo "            ";
            }
            // line 231
            echo "            ";
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "html", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "html", array())))) {
                // line 232
                echo "                ";
                echo $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "html", array());
                echo "
            ";
            }
            // line 234
            echo "        </ul>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 249
    public function getdropdownItem($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 250
            echo "    <li>";
            echo $this->getAttribute($this, "link", array(0 => (isset($context["parameters"]) ? $context["parameters"] : null)), "method");
            echo "</li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 262
    public function getpinnedDropdownButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 263
            echo "    ";
            if ($this->env->getExtension('mobile_extension')->isDesktop()) {
                // line 264
                echo "        ";
                $context["options"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "options", array()), array())) : (array()));
                // line 265
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("widgetModule" => (($this->getAttribute(                // line 266
(isset($context["options"]) ? $context["options"] : null), "widgetModule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "widgetModule", array()), "oroui/js/content-processor/pinned-dropdown-button")) : ("oroui/js/content-processor/pinned-dropdown-button")), "widgetName" => (($this->getAttribute(                // line 267
(isset($context["options"]) ? $context["options"] : null), "widgetName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "widgetName", array()), "pinnedDropdownButtonProcessor")) : ("pinnedDropdownButtonProcessor")), "groupKey" => (($this->getAttribute(                // line 268
(isset($context["parameters"]) ? $context["parameters"] : null), "groupKey", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "groupKey", array())) : ("")), "useMainButtonsClone" => true));
                // line 271
                echo "        <div class=\"pull-right\"
             data-page-component-module=\"oroui/js/app/components/jquery-widget-component\"
             data-page-component-options=\"";
                // line 273
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
                echo "\">
            ";
                // line 274
                echo $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "html", array());
                echo "
        </div>
    ";
            } else {
                // line 277
                echo "        ";
                echo $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "html", array());
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 284
    public function getdropdownSaveButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 285
            echo "    ";
            $context["parameters"] = twig_array_merge(array("groupKey" => "saveButtons", "options" => array("moreButtonAttrs" => array("class" => "btn-success"))), ((            // line 292
array_key_exists("parameters", $context)) ? (_twig_default_filter((isset($context["parameters"]) ? $context["parameters"] : null), array())) : (array())));
            // line 293
            echo "    ";
            echo $this->getAttribute($this, "pinnedDropdownButton", array(0 => (isset($context["parameters"]) ? $context["parameters"] : null)), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 302
    public function getcancelButton($__path__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $__path__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 303
            echo "    ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 304
                echo "        ";
                $context["label"] = $this->env->getExtension('translator')->trans("Cancel");
                // line 305
                echo "    ";
            }
            // line 306
            echo "    ";
            echo $this->getAttribute($this, "button", array(0 => array("path" => (isset($context["path"]) ? $context["path"] : null), "title" => (isset($context["label"]) ? $context["label"] : null), "label" => (isset($context["label"]) ? $context["label"] : null), "data" => array("action" => "cancel"))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 320
    public function geteditButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 321
            echo "    ";
            $context["iCss"] = array(0 => "icon-edit");
            // line 322
            echo "    ";
            $context["aCss"] = array(0 => "edit-button", 1 => "main-group");
            // line 323
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) {
                // line 324
                echo "        ";
                $context["iCss"] = twig_array_merge(twig_split_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array()), " "), (isset($context["iCss"]) ? $context["iCss"] : null));
                // line 325
                echo "    ";
            }
            // line 326
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) {
                // line 327
                echo "        ";
                $context["aCss"] = twig_array_merge(twig_split_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array()), " "), (isset($context["aCss"]) ? $context["aCss"] : null));
                // line 328
                echo "    ";
            }
            // line 329
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 330
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array());
                // line 331
                echo "    ";
            } else {
                // line 332
                echo "        ";
                $context["title"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans("oro.ui.edit_entity", array("%entityName%" => $this->getAttribute(                // line 333
(isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array())))) : ($this->env->getExtension('translator')->trans("oro.ui.edit")));
                // line 336
                echo "    ";
            }
            // line 337
            echo "    ";
            $context["label"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute(            // line 338
(isset($context["parameters"]) ? $context["parameters"] : null), "label", array())) : ($this->env->getExtension('translator')->trans("oro.ui.edit")));
            // line 341
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : null), array("iCss" => twig_join_filter(            // line 342
(isset($context["iCss"]) ? $context["iCss"] : null), " "), "aCss" => twig_join_filter(            // line 343
(isset($context["aCss"]) ? $context["aCss"] : null), " "), "title" =>             // line 344
(isset($context["title"]) ? $context["title"] : null), "label" =>             // line 345
(isset($context["label"]) ? $context["label"] : null)));
            // line 347
            echo "
    ";
            // line 349
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : null), array("path" => $this->env->getExtension('oro_ui_url')->addQuery($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "path", array(), "array"))));
            // line 350
            echo "
    ";
            // line 351
            echo $this->getAttribute($this, "button", array(0 => (isset($context["parameters"]) ? $context["parameters"] : null)), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 365
    public function getaddButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 366
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) {
                // line 367
                echo "        ";
                $context["label"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array());
                // line 368
                echo "    ";
            } else {
                // line 369
                echo "        ";
                $context["label"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans("oro.ui.create_entity", array("%entityName%" => $this->getAttribute(                // line 370
(isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array())))) : ($this->env->getExtension('translator')->trans("oro.ui.create")));
                // line 373
                echo "    ";
            }
            // line 374
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 375
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array());
                // line 376
                echo "    ";
            } else {
                // line 377
                echo "        ";
                $context["title"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans("oro.ui.create_entity", array("%entityName%" => $this->getAttribute(                // line 378
(isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array())))) : ($this->env->getExtension('translator')->trans("oro.ui.create")));
                // line 381
                echo "    ";
            }
            // line 382
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "path", array()), "html", null, true);
            echo "\"
        class=\"btn main-group btn-primary pull-right ";
            // line 383
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array())) : ("")), "html", null, true);
            echo "\"
        title=\"";
            // line 384
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\"
    >
        ";
            // line 386
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
    </a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 405
    public function getdeleteButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 406
            echo "    ";
            $context["aCss"] = "btn icons-holder-text";
            // line 407
            echo "
    ";
            // line 408
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "disabled", array(), "any", true, true) && $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "disabled", array()))) {
                // line 409
                echo "        ";
                $context["aCss"] = ((isset($context["aCss"]) ? $context["aCss"] : null) . " disabled");
                // line 410
                echo "    ";
            }
            // line 411
            echo "
    ";
            // line 412
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) {
                // line 413
                echo "        ";
                $context["aCss"] = (((isset($context["aCss"]) ? $context["aCss"] : null) . " ") . $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array()));
                // line 414
                echo "    ";
            }
            // line 415
            echo "
    ";
            // line 416
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : null), array("aCss" => (isset($context["aCss"]) ? $context["aCss"] : null)));
            // line 417
            echo "
    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 419
            echo $this->getAttribute($this, "deleteLink", array(0 => (isset($context["parameters"]) ? $context["parameters"] : null)), "method");
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 423
    public function getdeleteLink($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 424
            echo "    ";
            $context["entityLabel"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array())) : ($this->env->getExtension('translator')->trans("oro.ui.item")));
            // line 425
            echo "    ";
            $context["label"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array())) : ($this->env->getExtension('translator')->trans("oro.ui.delete")));
            // line 426
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 427
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array());
                // line 428
                echo "    ";
            } else {
                // line 429
                echo "        ";
                $context["title"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans("oro.ui.delete_entity", array("%entityName%" => $this->getAttribute(                // line 430
(isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array())))) : ($this->env->getExtension('translator')->trans("oro.ui.delete")));
                // line 433
                echo "    ";
            }
            // line 434
            echo "
    ";
            // line 435
            $context["message"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataMessage", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataMessage", array())) : ($this->env->getExtension('translator')->trans("oro.ui.delete_confirm", array("%entity_label%" => (isset($context["entityLabel"]) ? $context["entityLabel"] : null)))));
            // line 436
            echo "    ";
            $context["successMessage"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array())) : ($this->env->getExtension('translator')->trans("oro.ui.delete_message", array("%entity_label%" => (isset($context["entityLabel"]) ? $context["entityLabel"] : null)))));
            // line 437
            echo "    ";
            $context["url"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array())) : (""));
            // line 438
            echo "    ";
            $context["linkParams"] = array("data" => array("message" =>             // line 440
(isset($context["message"]) ? $context["message"] : null), "success-message" =>             // line 441
(isset($context["successMessage"]) ? $context["successMessage"] : null), "url" =>             // line 442
(isset($context["url"]) ? $context["url"] : null)), "iCss" => "icon-trash", "aCss" => $this->getAttribute(            // line 445
(isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array()), "title" =>             // line 446
(isset($context["title"]) ? $context["title"] : null), "label" =>             // line 447
(isset($context["label"]) ? $context["label"] : null), "path" => "javascript:void(0);");
            // line 450
            echo "

    ";
            // line 452
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array(), "any", true, true)) {
                // line 453
                echo "        ";
                $context["data"] = twig_array_merge($this->getAttribute((isset($context["linkParams"]) ? $context["linkParams"] : null), "data", array()), array("id" => $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array())));
                // line 454
                echo "        ";
                $context["linkParams"] = twig_array_merge((isset($context["linkParams"]) ? $context["linkParams"] : null), array("data" => (isset($context["data"]) ? $context["data"] : null)));
                // line 455
                echo "    ";
            }
            // line 456
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array(), "any", true, true)) {
                // line 457
                echo "        ";
                $context["data"] = twig_array_merge($this->getAttribute((isset($context["linkParams"]) ? $context["linkParams"] : null), "data", array()), array("redirect" => $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array())));
                // line 458
                echo "        ";
                $context["linkParams"] = twig_array_merge((isset($context["linkParams"]) ? $context["linkParams"] : null), array("data" => (isset($context["data"]) ? $context["data"] : null)));
                // line 459
                echo "    ";
            }
            // line 460
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array(), "any", true, true)) {
                // line 461
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 462
                    echo "            ";
                    $context["data"] = twig_array_merge($this->getAttribute((isset($context["linkParams"]) ? $context["linkParams"] : null), "data", array()), array($context["dataItemName"] => $context["dataItemValue"]));
                    // line 463
                    echo "            ";
                    $context["linkParams"] = twig_array_merge((isset($context["linkParams"]) ? $context["linkParams"] : null), array("data" => (isset($context["data"]) ? $context["data"] : null)));
                    // line 464
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 465
                echo "    ";
            }
            // line 466
            echo "    ";
            echo $this->getAttribute($this, "link", array(0 => (isset($context["linkParams"]) ? $context["linkParams"] : null)), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 487
    public function getclientLink($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 488
            echo "    <a href=\"javascript: void(0);\" class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array())) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array())) : ("")), "html", null, true);
            echo "\"
        ";
            // line 489
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array(), "any", true, true)) {
                // line 490
                echo "        id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 492
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array(), "any", true, true)) {
                // line 493
                echo "        data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 495
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array(), "any", true, true)) {
                // line 496
                echo "        data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 498
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array(), "any", true, true)) {
                // line 499
                echo "        data-success-message=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 501
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array(), "any", true, true)) {
                // line 502
                echo "        data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 504
            echo "        title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array())) : ((($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array())) : ("")))), "html", null, true);
            echo "\"
        ";
            // line 505
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "visible", array(), "any", true, true) &&  !$this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "visible", array()))) {
                // line 506
                echo "        style=\"display: none\"
        ";
            }
            // line 508
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "widget", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "widget", array())))) {
                // line 509
                echo "            ";
                $context["options"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "widget", array());
                // line 510
                echo "            ";
                if ( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "createOnEvent", array(), "any", true, true)) {
                    // line 511
                    echo "                ";
                    $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("createOnEvent" => (($this->getAttribute(                    // line 512
(isset($context["options"]) ? $context["options"] : null), "event", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "event", array()), "click")) : ("click"))));
                    // line 514
                    echo "            ";
                }
                // line 515
                echo "            ";
                echo $this->getAttribute($this, "renderWidgetAttributes", array(0 => (isset($context["options"]) ? $context["options"] : null)), "method");
                echo "
        ";
            }
            // line 517
            echo "        ";
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataAttributes", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataAttributes", array())))) {
                // line 518
                echo "            ";
                echo $this->getAttribute($this, "renderAttributes", array(0 => $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataAttributes", array())), "method");
                echo "
        ";
            }
            // line 520
            echo "    >";
            // line 521
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) {
                // line 522
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array()), "html", null, true);
                echo " hide-text\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array())) : ("")), "html", null, true);
                echo "</i>";
            }
            // line 524
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array())) : ("")), "html", null, true);
            // line 525
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 537
    public function getrenderPageComponentAttributes($__pageComponent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pageComponent" => $__pageComponent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 538
            echo "    data-page-component-module=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "module", array()), "html", null, true);
            echo "\"
    ";
            // line 539
            if ($this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "options", array(), "any", true, true)) {
                // line 540
                echo "        data-page-component-options=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "options", array())), "html", null, true);
                echo "\"
    ";
            }
            // line 542
            echo "    ";
            if ($this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "name", array(), "any", true, true)) {
                // line 543
                echo "        data-page-component-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "name", array()), "html", null, true);
                echo "\"
    ";
            }
            // line 545
            echo "    ";
            if ($this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "layout", array(), "any", true, true)) {
                // line 546
                echo "        data-layout=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "layout", array()), "html", null, true);
                echo "\"
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 555
    public function getrenderWidgetAttributes($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 556
            echo "    ";
            $context["pageComponent"] = array("module" => "oroui/js/app/components/widget-component", "options" =>             // line 558
(isset($context["options"]) ? $context["options"] : null));
            // line 560
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "options", array(), "any", false, true), "pageComponentName", array(), "any", true, true)) {
                // line 561
                echo "        ";
                $context["pageComponent"] = twig_array_merge((isset($context["pageComponent"]) ? $context["pageComponent"] : null), array("name" => $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "options", array()), "pageComponentName", array())));
                // line 562
                echo "    ";
            }
            // line 563
            echo "    ";
            echo $this->getAttribute($this, "renderPageComponentAttributes", array(0 => (isset($context["pageComponent"]) ? $context["pageComponent"] : null)), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 569
    public function getrenderWidgetDataAttributes($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 570
            echo "    ";
            if ( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "createOnEvent", array(), "any", true, true)) {
                // line 571
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("createOnEvent" => (($this->getAttribute(                // line 572
(isset($context["options"]) ? $context["options"] : null), "event", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "event", array()), "click")) : ("click"))));
                // line 574
                echo "    ";
            }
            // line 575
            echo "    ";
            echo $this->getAttribute($this, "renderWidgetAttributes", array(0 => (isset($context["options"]) ? $context["options"] : null)), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 578
    public function getrenderAttributes($__options__ = null, $__prefix__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "prefix" => $__prefix__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 579
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 580
                echo "        ";
                if (twig_test_iterable($context["value"])) {
                    // line 581
                    echo "            ";
                    $context["value"] = twig_jsonencode_filter($context["value"], twig_constant("JSON_FORCE_OBJECT"));
                    // line 582
                    echo "        ";
                }
                // line 583
                echo "        data-";
                if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null))) {
                    echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
                    echo "-";
                }
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
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

    // line 603
    public function getclientButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 604
            echo "    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 605
            echo $this->getAttribute($this, "clientLink", array(0 => twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : null), array("class" => "btn icons-holder-text"))), "method");
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 625
    public function getdropdownClientItem($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 626
            echo "    <li>";
            echo $this->getAttribute($this, "clientLink", array(0 => (isset($context["parameters"]) ? $context["parameters"] : null)), "method");
            echo "</li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 638
    public function getbuttonType($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 639
            echo "    <div class=\"btn-group\">
        <button type=\"";
            // line 640
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "type", array()), "html", null, true);
            echo "\" class=\"btn ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array()), "html", null, true);
            }
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo " action-button";
            }
            echo "\"
                ";
            // line 641
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo "data-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array()), "html", null, true);
                echo "\"";
            }
            echo ">
            ";
            // line 642
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array()), "html", null, true);
            echo "
        </button>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 647
    public function getsaveAndCloseButton($__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 648
            echo "    ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 649
                echo "        ";
                $context["label"] = $this->env->getExtension('translator')->trans("Save and Close");
                // line 650
                echo "    ";
            }
            // line 651
            echo "    ";
            echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "submit", "class" => "btn-success", "label" => (isset($context["label"]) ? $context["label"] : null))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 654
    public function getsaveAndStayButton($__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 655
            echo "    ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 656
                echo "        ";
                $context["label"] = $this->env->getExtension('translator')->trans("Save");
                // line 657
                echo "    ";
            }
            // line 658
            echo "    ";
            echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "button", "class" => "btn-success main-group", "label" => (isset($context["label"]) ? $context["label"] : null), "action" => "save_and_stay")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 664
    public function getbuttonSeparator(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 665
            echo "    <div class=\"pull-left\">
        <div class=\"separator-btn\"></div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 679
    public function getscrollSubblock($__title__ = null, $__data__ = null, $__isForm__ = null, $__useSpan__ = null, $__spanClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "isForm" => $__isForm__,
            "useSpan" => $__useSpan__,
            "spanClass" => $__spanClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 680
            echo "    ";
            $context["spanClass"] = ((array_key_exists("spanClass", $context)) ? (_twig_default_filter((isset($context["spanClass"]) ? $context["spanClass"] : null), "responsive-cell")) : ("responsive-cell"));
            // line 681
            echo "    ";
            // line 689
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["spanClass"]) ? $context["spanClass"] : null), "html", null, true);
            echo "\">
    ";
            // line 690
            if (twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : null))) {
                echo "<h5 class=\"user-fieldset\"><span>";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</span></h5>";
            }
            // line 691
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 692
                echo "        ";
                echo $context["dataBlock"];
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 694
            echo "    </div>
    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 714
    public function getscrollBlock($__blockId__ = null, $__title__ = null, $__subblocks__ = null, $__isForm__ = null, $__contentAttributes__ = null, $__useSubBlockDivider__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "blockId" => $__blockId__,
            "title" => $__title__,
            "subblocks" => $__subblocks__,
            "isForm" => $__isForm__,
            "contentAttributes" => $__contentAttributes__,
            "useSubBlockDivider" => $__useSubBlockDivider__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 715
            echo "    ";
            $context["cols"] = twig_length_filter($this->env, (isset($context["subblocks"]) ? $context["subblocks"] : null));
            // line 716
            echo "    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">";
            // line 717
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h4>
        <div id=\"";
            // line 718
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
            echo "\" class=\"scrollspy-nav-target\"></div>
        <div class=\"row-fluid";
            // line 719
            if (((array_key_exists("contentAttributes", $context) && $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), "class", array(), "any", true, true)) && twig_length_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), "class", array())))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), "class", array()), "html", null, true);
            }
            if ((((isset($context["cols"]) ? $context["cols"] : null) > 1) && ( !array_key_exists("useSubBlockDivider", $context) || ((isset($context["useSubBlockDivider"]) ? $context["useSubBlockDivider"] : null) == true)))) {
                echo " row-fluid-divider";
            }
            echo "\" ";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), 1 => array(0 => "class")), "method");
            echo ">
            ";
            // line 720
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : null) == true))) {
                // line 721
                echo "                <fieldset class=\"form-horizontal\">
            ";
            } else {
                // line 723
                echo "                <div class=\"form-horizontal\">
            ";
            }
            // line 725
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subblocks"]) ? $context["subblocks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                // line 726
                echo "                    ";
                echo $this->getAttribute($this, "scrollSubblock", array(0 => ((($this->getAttribute($context["subblock"], "title", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute($context["subblock"], "title", array())))) ? ($this->getAttribute($context["subblock"], "title", array())) : (null)), 1 => $this->getAttribute($context["subblock"], "data", array()), 2 => (isset($context["isForm"]) ? $context["isForm"] : null), 3 => (($this->getAttribute($context["subblock"], "useSpan", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "useSpan", array())) : (true)), 4 => (($this->getAttribute($context["subblock"], "spanClass", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "spanClass", array())) : (""))), "method");
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 728
            echo "            ";
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : null) == true))) {
                // line 729
                echo "                </fieldset>
            ";
            } else {
                // line 731
                echo "                </div>
            ";
            }
            // line 733
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 761
    public function getscrollData($__dataTarget__ = null, $__data__ = null, $__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "dataTarget" => $__dataTarget__,
            "data" => $__data__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 762
            echo "    ";
            $context["data"] = $this->env->getExtension('oro_ui')->scrollDataBefore($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : null), (isset($context["data"]) ? $context["data"] : null), (isset($context["form"]) ? $context["form"] : null));
            // line 763
            echo "
    ";
            // line 764
            if ((array_key_exists("form", $context) && (isset($context["form"]) ? $context["form"] : null))) {
                // line 765
                echo "        ";
                $context["isForm"] = true;
                // line 766
                echo "    ";
            } else {
                // line 767
                echo "        ";
                $context["isForm"] = false;
                // line 768
                echo "    ";
            }
            // line 769
            echo "
    ";
            // line 770
            $context["dataBlocks"] = $this->env->getExtension('oro_sort_by')->sortBy($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dataBlocks", array()));
            // line 771
            echo "
    <div id=\"";
            // line 772
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : null), "html", null, true);
            echo "\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\" style=\"width: auto;\">
                <ul class=\"nav\">
                    ";
            // line 776
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["navElement"]) {
                // line 777
                echo "                        <li ";
                if ($this->getAttribute($context["navElement"], "class", array(), "any", true, true)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navElement"], "class", array()), "html", null, true);
                    echo "\"";
                }
                echo "><a href=\"#scroll-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navElement"], "title", array()), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navElement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 779
            echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"clearfix\">
        ";
            // line 784
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array())))) {
                // line 785
                echo "            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    ";
                // line 788
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array());
                echo "
                </div>
            </div>
        ";
            }
            // line 792
            echo "        <div data-spy=\"scroll\" data-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : null), "html", null, true);
            echo "\" data-offset=\"1\" class=\"scrollspy container-fluid scrollable-container";
            if ((isset($context["isForm"]) ? $context["isForm"] : null)) {
                echo " form-container";
            }
            echo "\">
            ";
            // line 793
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 794
                echo "                ";
                echo $this->getAttribute($this, "scrollBlock", array(0 => ("scroll-" . $this->getAttribute($context["loop"], "index", array())), 1 => $this->getAttribute($context["scrollBlock"], "title", array()), 2 => $this->getAttribute($context["scrollBlock"], "subblocks", array()), 3 => (isset($context["isForm"]) ? $context["isForm"] : null), 4 => (($this->getAttribute($context["scrollBlock"], "content_attr", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "content_attr", array())) : (null)), 5 => (($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array())) : (true))), "method");
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 796
            echo "            ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true) || (isset($context["isForm"]) ? $context["isForm"] : null))) {
                // line 797
                echo "                <div class=\"hide\">
                    ";
                // line 798
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true)) {
                    // line 799
                    echo "                        ";
                    echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array());
                    echo "
                    ";
                }
                // line 801
                echo "                    ";
                if ((isset($context["isForm"]) ? $context["isForm"] : null)) {
                    // line 802
                    echo "                        ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
                    echo "
                    ";
                }
                // line 804
                echo "                </div>
            ";
            }
            // line 806
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 817
    public function getcollectionField($__field__ = null, $__label__ = null, $__buttonCaption__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "buttonCaption" => $__buttonCaption__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 818
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 819
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            <div class=\"row-oro\">
                <div class=\"oro-item-collection collection-fields-list\" data-prototype=\"";
            // line 822
            echo twig_escape_filter($this->env, $this->getAttribute($this, "collection_prototype", array(0 => (isset($context["field"]) ? $context["field"] : null)), "method"));
            echo "\">
                    ";
            // line 823
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
                // line 824
                echo "                        ";
                echo $this->getAttribute($this, "collection_prototype", array(0 => $context["emailField"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 826
            echo "                </div>
                <a class=\"btn add-list-item\" href=\"javascript: void(0);\">";
            // line 827
            echo twig_escape_filter($this->env, (isset($context["buttonCaption"]) ? $context["buttonCaption"] : null), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 839
    public function getattributes($__attr__ = null, $__excludes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $__attr__,
            "excludes" => $__excludes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 840
            echo "    ";
            ob_start();
            // line 841
            echo "        ";
            $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : null), array())) : (array()));
            // line 842
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (( !array_key_exists("excludes", $context) ||  !$this->getAttribute((isset($context["excludes"]) ? $context["excludes"] : null), $context["attrname"], array(), "array", true, true))) {
                    if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                        echo "\" ";
                    } else {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 843
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 852
    public function getentityOwnerLink($__entity__ = null, $__renderLabel__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "renderLabel" => $__renderLabel__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 853
            if ((isset($context["entity"]) ? $context["entity"] : null)) {
                // line 854
                echo "        ";
                $context["ownerType"] = $this->env->getExtension('oro_owner_type')->getOwnerType((isset($context["entity"]) ? $context["entity"] : null));
                // line 855
                if ((isset($context["ownerType"]) ? $context["ownerType"] : null)) {
                    // line 856
                    echo "            ";
                    $context["owner"] = $this->env->getExtension('oro_owner_type')->getEntityOwner((isset($context["entity"]) ? $context["entity"] : null));
                    // line 857
                    echo "            ";
                    if ((isset($context["owner"]) ? $context["owner"] : null)) {
                        // line 858
                        echo "                ";
                        if (((isset($context["ownerType"]) ? $context["ownerType"] : null) == "USER")) {
                            // line 859
                            echo "                    ";
                            $context["ownerPath"] = $this->env->getExtension('routing')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "owner", array()), "id", array())));
                            // line 860
                            echo "                    ";
                            $context["ownerName"] = $this->env->getExtension('oro_entity')->getEntityName((isset($context["owner"]) ? $context["owner"] : null));
                            // line 861
                            echo "                ";
                        } elseif (((isset($context["ownerType"]) ? $context["ownerType"] : null) == "BUSINESS_UNIT")) {
                            // line 862
                            echo "                    ";
                            $context["ownerPath"] = $this->env->getExtension('routing')->getPath("oro_business_unit_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "owner", array()), "id", array())));
                            // line 863
                            echo "                    ";
                            $context["ownerName"] = $this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "name", array());
                            // line 864
                            echo "                ";
                        } elseif (((isset($context["ownerType"]) ? $context["ownerType"] : null) == "ORGANIZATION")) {
                            // line 865
                            echo "                    ";
                            $context["ownerName"] = $this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "name", array());
                            // line 866
                            echo "                ";
                        }
                        // line 867
                        echo "                ";
                        if (array_key_exists("ownerName", $context)) {
                            // line 868
                            echo "                    ";
                            if ((isset($context["renderLabel"]) ? $context["renderLabel"] : null)) {
                                // line 869
                                echo "                        ";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('oro_entity_config')->getFieldConfigValue($this->env->getExtension('oro_entity')->getClassName((isset($context["entity"]) ? $context["entity"] : null)), "owner", "label")), "html", null, true);
                                echo ":
                    ";
                            }
                            // line 871
                            echo "                    ";
                            if ((array_key_exists("ownerPath", $context) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("VIEW", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "owner", array())))) {
                                // line 872
                                echo "                        <a href=\"";
                                echo twig_escape_filter($this->env, (isset($context["ownerPath"]) ? $context["ownerPath"] : null), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : null), "html", null, true);
                                echo "</a>
                    ";
                            } else {
                                // line 874
                                echo "                        ";
                                echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : null), "html", null, true);
                                echo "
                    ";
                            }
                            // line 876
                            echo "                ";
                        }
                        // line 877
                        echo "            ";
                    }
                    // line 878
                    echo "        ";
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 882
    public function getrenderUrl($__url__ = null, $__title__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "title" => $__title__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 883
            ob_start();
            // line 884
            echo "        ";
            if (twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
                // line 885
                echo "            ";
                $context["title"] = (isset($context["url"]) ? $context["url"] : null);
                // line 886
                echo "        ";
            }
            // line 887
            echo "        ";
            if (twig_test_empty((isset($context["class"]) ? $context["class"] : null))) {
                // line 888
                echo "            ";
                $context["class"] = "";
                // line 889
                echo "        ";
            }
            // line 890
            echo "        ";
            if ( !twig_test_empty((isset($context["url"]) ? $context["url"] : null))) {
                // line 891
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html_attr");
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</a>
        ";
            }
            // line 893
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 896
    public function getrenderPhone($__phone__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "phone" => $__phone__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 897
            if (twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
                // line 898
                echo "        ";
                $context["title"] = (isset($context["phone"]) ? $context["phone"] : null);
                // line 899
                echo "    ";
            }
            // line 900
            echo "    ";
            if ( !twig_test_empty((isset($context["phone"]) ? $context["phone"] : null))) {
                // line 901
                echo "        <a href=\"tel:";
                echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html_attr");
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 905
    public function getgetApplicableForUnderscore($__str__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "str" => $__str__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 906
            echo "    ";
            echo strtr((isset($context["str"]) ? $context["str"] : null), array("<script" => "<% print(\"<sc\" + \"ript\"); %>", "</script" => "<% print(\"</sc\" + \"ript\"); %>", "<%" => "<% print(\"<\" + \"%\"); %>", "%>" => "<% print(\"%\" + \">\"); %>"));
            // line 911
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 914
    public function getrenderList($__elements__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 915
            echo "<ul class=\"extra-list\">
        ";
            // line 916
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 917
                echo "            <li class=\"extra-list-element\">";
                echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 919
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroUIBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2469 => 919,  2460 => 917,  2456 => 916,  2453 => 915,  2441 => 914,  2429 => 911,  2426 => 906,  2414 => 905,  2395 => 901,  2392 => 900,  2389 => 899,  2386 => 898,  2384 => 897,  2371 => 896,  2359 => 893,  2347 => 891,  2344 => 890,  2341 => 889,  2338 => 888,  2335 => 887,  2332 => 886,  2329 => 885,  2326 => 884,  2324 => 883,  2310 => 882,  2297 => 878,  2294 => 877,  2291 => 876,  2285 => 874,  2277 => 872,  2274 => 871,  2268 => 869,  2265 => 868,  2262 => 867,  2259 => 866,  2256 => 865,  2253 => 864,  2250 => 863,  2247 => 862,  2244 => 861,  2241 => 860,  2238 => 859,  2235 => 858,  2232 => 857,  2229 => 856,  2227 => 855,  2224 => 854,  2222 => 853,  2209 => 852,  2197 => 843,  2175 => 842,  2172 => 841,  2169 => 840,  2156 => 839,  2140 => 827,  2137 => 826,  2128 => 824,  2124 => 823,  2120 => 822,  2114 => 819,  2111 => 818,  2097 => 817,  2084 => 806,  2080 => 804,  2074 => 802,  2071 => 801,  2065 => 799,  2063 => 798,  2060 => 797,  2057 => 796,  2040 => 794,  2023 => 793,  2014 => 792,  2007 => 788,  2002 => 785,  2000 => 784,  1993 => 779,  1968 => 777,  1951 => 776,  1944 => 772,  1941 => 771,  1939 => 770,  1936 => 769,  1933 => 768,  1930 => 767,  1927 => 766,  1924 => 765,  1922 => 764,  1919 => 763,  1916 => 762,  1902 => 761,  1889 => 733,  1885 => 731,  1881 => 729,  1878 => 728,  1869 => 726,  1864 => 725,  1860 => 723,  1856 => 721,  1854 => 720,  1842 => 719,  1838 => 718,  1834 => 717,  1831 => 716,  1828 => 715,  1811 => 714,  1799 => 694,  1790 => 692,  1785 => 691,  1779 => 690,  1774 => 689,  1772 => 681,  1769 => 680,  1753 => 679,  1739 => 665,  1728 => 664,  1714 => 658,  1711 => 657,  1708 => 656,  1705 => 655,  1693 => 654,  1679 => 651,  1676 => 650,  1673 => 649,  1670 => 648,  1658 => 647,  1643 => 642,  1635 => 641,  1624 => 640,  1621 => 639,  1609 => 638,  1595 => 626,  1583 => 625,  1569 => 605,  1566 => 604,  1554 => 603,  1530 => 583,  1527 => 582,  1524 => 581,  1521 => 580,  1516 => 579,  1503 => 578,  1489 => 575,  1486 => 574,  1484 => 572,  1482 => 571,  1479 => 570,  1467 => 569,  1453 => 563,  1450 => 562,  1447 => 561,  1444 => 560,  1442 => 558,  1440 => 556,  1428 => 555,  1413 => 546,  1410 => 545,  1404 => 543,  1401 => 542,  1395 => 540,  1393 => 539,  1388 => 538,  1376 => 537,  1364 => 525,  1362 => 524,  1355 => 522,  1353 => 521,  1351 => 520,  1345 => 518,  1342 => 517,  1336 => 515,  1333 => 514,  1331 => 512,  1329 => 511,  1326 => 510,  1323 => 509,  1321 => 508,  1317 => 506,  1315 => 505,  1310 => 504,  1304 => 502,  1301 => 501,  1295 => 499,  1292 => 498,  1286 => 496,  1283 => 495,  1277 => 493,  1274 => 492,  1268 => 490,  1266 => 489,  1259 => 488,  1247 => 487,  1233 => 466,  1230 => 465,  1224 => 464,  1221 => 463,  1218 => 462,  1213 => 461,  1210 => 460,  1207 => 459,  1204 => 458,  1201 => 457,  1198 => 456,  1195 => 455,  1192 => 454,  1189 => 453,  1187 => 452,  1183 => 450,  1181 => 447,  1180 => 446,  1179 => 445,  1178 => 442,  1177 => 441,  1176 => 440,  1174 => 438,  1171 => 437,  1168 => 436,  1166 => 435,  1163 => 434,  1160 => 433,  1158 => 430,  1156 => 429,  1153 => 428,  1150 => 427,  1147 => 426,  1144 => 425,  1141 => 424,  1129 => 423,  1115 => 419,  1111 => 417,  1109 => 416,  1106 => 415,  1103 => 414,  1100 => 413,  1098 => 412,  1095 => 411,  1092 => 410,  1089 => 409,  1087 => 408,  1084 => 407,  1081 => 406,  1069 => 405,  1055 => 386,  1050 => 384,  1046 => 383,  1041 => 382,  1038 => 381,  1036 => 378,  1034 => 377,  1031 => 376,  1028 => 375,  1025 => 374,  1022 => 373,  1020 => 370,  1018 => 369,  1015 => 368,  1012 => 367,  1009 => 366,  997 => 365,  984 => 351,  981 => 350,  978 => 349,  975 => 347,  973 => 345,  972 => 344,  971 => 343,  970 => 342,  968 => 341,  966 => 338,  964 => 337,  961 => 336,  959 => 333,  957 => 332,  954 => 331,  951 => 330,  948 => 329,  945 => 328,  942 => 327,  939 => 326,  936 => 325,  933 => 324,  930 => 323,  927 => 322,  924 => 321,  912 => 320,  898 => 306,  895 => 305,  892 => 304,  889 => 303,  876 => 302,  862 => 293,  860 => 292,  858 => 285,  846 => 284,  831 => 277,  825 => 274,  821 => 273,  817 => 271,  815 => 268,  814 => 267,  813 => 266,  811 => 265,  808 => 264,  805 => 263,  793 => 262,  779 => 250,  767 => 249,  754 => 234,  748 => 232,  745 => 231,  742 => 230,  733 => 228,  728 => 227,  726 => 226,  722 => 225,  715 => 222,  709 => 220,  707 => 219,  703 => 217,  691 => 216,  677 => 202,  674 => 201,  662 => 200,  641 => 185,  634 => 184,  631 => 183,  620 => 181,  615 => 180,  612 => 179,  606 => 177,  604 => 176,  599 => 175,  596 => 174,  593 => 173,  590 => 172,  582 => 170,  579 => 169,  576 => 168,  573 => 167,  571 => 166,  559 => 165,  545 => 150,  542 => 149,  539 => 148,  536 => 147,  522 => 146,  509 => 136,  506 => 135,  503 => 134,  500 => 133,  497 => 132,  484 => 131,  470 => 122,  457 => 121,  443 => 112,  430 => 111,  415 => 100,  410 => 98,  407 => 97,  394 => 96,  380 => 87,  377 => 86,  374 => 85,  365 => 82,  362 => 81,  357 => 80,  355 => 79,  352 => 78,  344 => 76,  338 => 74,  336 => 73,  333 => 72,  330 => 71,  316 => 70,  300 => 58,  294 => 57,  290 => 55,  288 => 52,  287 => 51,  284 => 50,  282 => 49,  279 => 48,  277 => 45,  275 => 44,  272 => 43,  269 => 42,  266 => 41,  263 => 40,  260 => 39,  257 => 37,  254 => 36,  251 => 35,  248 => 34,  245 => 33,  242 => 32,  239 => 31,  236 => 30,  219 => 29,  204 => 24,  198 => 22,  192 => 20,  189 => 19,  181 => 17,  176 => 16,  171 => 15,  169 => 14,  165 => 13,  159 => 10,  156 => 9,  153 => 8,  150 => 7,  147 => 6,  144 => 5,  141 => 4,  138 => 3,  135 => 2,  123 => 1,  118 => 845,  115 => 832,  112 => 809,  109 => 736,  106 => 699,  103 => 669,  100 => 660,  97 => 653,  94 => 646,  91 => 628,  88 => 608,  85 => 586,  82 => 577,  79 => 549,  76 => 527,  73 => 468,  70 => 422,  67 => 389,  64 => 353,  61 => 308,  58 => 295,  55 => 280,  52 => 252,  49 => 237,  46 => 205,  43 => 188,  40 => 152,  37 => 138,  34 => 124,  31 => 114,  28 => 104,  25 => 89,  22 => 62,  19 => 28,);
    }
}
