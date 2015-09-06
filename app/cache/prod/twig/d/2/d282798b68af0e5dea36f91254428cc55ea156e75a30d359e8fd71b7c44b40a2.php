<?php

/* OroFormBundle:Form:fields.html.twig */
class __TwigTemplate_d282798b68af0e5dea36f91254428cc55ea156e75a30d359e8fd71b7c44b40a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Form:fields.html.twig", "OroFormBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'genemu_jqueryselect2_widget' => array($this, 'block_genemu_jqueryselect2_widget'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
            'oro_ticker_symbol_widget' => array($this, 'block_oro_ticker_symbol_widget'),
            'oro_multiple_entity_widget' => array($this, 'block_oro_multiple_entity_widget'),
            'form_label' => array($this, 'block_form_label'),
            'oro_money_row' => array($this, 'block_oro_money_row'),
            'oro_money_widget' => array($this, 'block_oro_money_widget'),
            'percent_row' => array($this, 'block_percent_row'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'oro_date_widget' => array($this, 'block_oro_date_widget'),
            'oro_datetime_widget' => array($this, 'block_oro_datetime_widget'),
            'oro_collection_widget' => array($this, 'block_oro_collection_widget'),
            'oro_form_js_validation' => array($this, 'block_oro_form_js_validation'),
            'oro_entity_create_or_select_row' => array($this, 'block_oro_entity_create_or_select_row'),
            'oro_entity_create_or_select_widget' => array($this, 'block_oro_entity_create_or_select_widget'),
            'oro_entity_create_or_select_choice_widget' => array($this, 'block_oro_entity_create_or_select_choice_widget'),
            'oro_entity_create_or_select_inline_widget' => array($this, 'block_oro_entity_create_or_select_inline_widget'),
            'oro_link_type_widget' => array($this, 'block_oro_link_type_widget'),
            'oro_download_links_type_widget' => array($this, 'block_oro_download_links_type_widget'),
            'oro_simple_color_picker_row' => array($this, 'block_oro_simple_color_picker_row'),
            'oro_simple_color_picker_widget' => array($this, 'block_oro_simple_color_picker_widget'),
            'oro_simple_color_choice_widget' => array($this, 'block_oro_simple_color_choice_widget'),
            'oro_simple_color_choice_widget_options' => array($this, 'block_oro_simple_color_choice_widget_options'),
            'oro_color_table_row' => array($this, 'block_oro_color_table_row'),
            'oro_color_table_widget' => array($this, 'block_oro_color_table_widget'),
            'oro_resizeable_rich_text_widget' => array($this, 'block_oro_resizeable_rich_text_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_genemu_jqueryselect2_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "grid", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "grid", array(), "any", false, true), "name", array(), "any", true, true))) {
            // line 5
            echo "        ";
            $context["url"] = $this->env->getExtension('routing')->getPath("oro_datagrid_index", array("gridName" => $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "grid", array()), "name", array())));
            // line 6
            echo "    ";
        } elseif (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_name", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_name", array()))) {
            // line 7
            echo "        ";
            $context["url"] = $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_name", array()), (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_parameters", array()), array())) : (array())));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["url"] = "";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "placeholder", array(), "any", true, true)) {
            // line 12
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("placeholder" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "placeholder", array()))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "result_template_twig", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "result_template_twig", array()))) {
            // line 15
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("result_template" => twig_include($this->env, $context, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "result_template_twig", array()))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "selection_template_twig", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "selection_template_twig", array()))) {
            // line 18
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : null), array("selection_template" => twig_include($this->env, $context, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "selection_template_twig", array()))));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "component", array(), "any", true, true)) {
            // line 21
            echo "        ";
            $context["component"] = (("oro/select2-" . $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "component", array())) . "-component");
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context["component"] = "oro/select2-component";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    ";
        if ( !array_key_exists("component_options", $context)) {
            // line 26
            echo "        ";
            $context["component_options"] = array();
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        $context["component_options"] = twig_array_merge((isset($context["component_options"]) ? $context["component_options"] : null), array("configs" => (isset($context["configs"]) ? $context["configs"] : null), "url" => (isset($context["url"]) ? $context["url"] : null)));
        // line 29
        echo "    ";
        if (array_key_exists("excluded", $context)) {
            // line 30
            echo "        ";
            $context["component_options"] = twig_array_merge((isset($context["component_options"]) ? $context["component_options"] : null), array("excluded" => (isset($context["excluded"]) ? $context["excluded"] : null)));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "select2", "data-page-component-module" =>         // line 34
(isset($context["component"]) ? $context["component"] : null), "data-page-component-options" => twig_jsonencode_filter(        // line 35
(isset($context["component_options"]) ? $context["component_options"] : null)))));
        // line 36
        echo "
";
    }

    // line 39
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
    }

    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
    }

    // line 43
    public function block_oro_ticker_symbol_widget($context, array $blocks = array())
    {
        // line 44
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'bootstrap'],
        function(\$){
            \$(function() {
                var cache = {};
                \$(\"#";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\").typeahead({
                    source: function (request, process) {
                        YAHOO = {
                            Finance: {
                                SymbolSuggest: {
                                    ssCallback: function (data) {
                                        var result = \$.map(data.ResultSet.Result, function (item) {
                                            return item.name + \" (\" + item.symbol + \")\";
                                        });
                                        \$.each(data.ResultSet.Result, function (itemKey, item) {
                                            cache[item.name + \" (\" + item.symbol + \")\"] = item.symbol;
                                        });
                                        process(result)
                                    }
                                }
                            }
                        };
                        \$.ajax({
                            type: \"GET\",
                            dataType: \"jsonp\",
                            jsonp: \"callback\",
                            jsonpCallback: \"YAHOO.Finance.SymbolSuggest.ssCallback\",
                            data: {
                                query: request
                            },
                            cache: true,
                            url: \"http://autoc.finance.yahoo.com/autoc\"
                        });
                    },
                    updater: function(item) {
                        if (typeof cache[item] != 'undefined') {
                            return cache[item];
                        } else {
                            return item;
                        }
                    }
                });
            });
        });
    </script>

    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
    }

    // line 93
    public function block_oro_multiple_entity_widget($context, array $blocks = array())
    {
        // line 94
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    <div id=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-container\"></div>

    <script type=\"text/javascript\">
        require(['jquery',
            'oroform/js/multiple-entity', 'oroform/js/multiple-entity/collection', 'oroform/js/multiple-entity/model',
            'text!";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroform/js/multiple-entity/templates/multiple-entities.html"), "html", null, true);
        echo "',
            'text!";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroform/js/multiple-entity/templates/multiple-entity.html"), "html", null, true);
        echo "'
        ],
        function(\$, MultipleEntity, MultipleEntityCollection, MultipleEntityModel, EntitiesTpl, EntityTpl) {
            ";
        // line 105
        $context["selectionUrl"] = null;
        // line 106
        echo "            ";
        $context["originalFieldId"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-ftid", array(), "array");
        // line 107
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "grid_url", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_url", array()))) {
            // line 108
            echo "                ";
            $context["selectionUrl"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_url", array());
            // line 109
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_url", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "selection_url", array()))) {
            // line 110
            echo "                ";
            $context["selectionUrl"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "selection_url", array());
            // line 111
            echo "            ";
        }
        // line 112
        echo "            ";
        $context["selectionRouteName"] = (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_route", array()), null)) : (null));
        // line 113
        echo "            ";
        $context["selectionRouteParameters"] = (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_route_parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_route_parameters", array()), array())) : (array()));
        // line 114
        echo "
            var widget = new MultipleEntity({
                el: '#";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-container',
                template: EntitiesTpl,
                elementTemplate: EntityTpl,
                addedElement: 'input[data-ftid=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["originalFieldId"]) ? $context["originalFieldId"] : null), "html", null, true);
        echo "_added\"]',
                removedElement: 'input[data-ftid=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["originalFieldId"]) ? $context["originalFieldId"] : null), "html", null, true);
        echo "_removed\"]',
                name: ";
        // line 121
        echo twig_jsonencode_filter((isset($context["id"]) ? $context["id"] : null));
        echo ",
                defaultElement: ";
        // line 122
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "default_element", array()));
        echo ",
                selectionUrl: ";
        // line 123
        echo twig_jsonencode_filter((isset($context["selectionUrl"]) ? $context["selectionUrl"] : null));
        echo ",
                selectionRouteName: ";
        // line 124
        echo twig_jsonencode_filter((isset($context["selectionRouteName"]) ? $context["selectionRouteName"] : null));
        echo ",
                selectionRouteParams: ";
        // line 125
        echo twig_jsonencode_filter((isset($context["selectionRouteParameters"]) ? $context["selectionRouteParameters"] : null), twig_constant("JSON_FORCE_OBJECT"));
        echo ",
                allowAction: ";
        // line 126
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "allow_action", array()));
        echo ",
                collection: new MultipleEntityCollection(),
                selectorWindowTitle: ";
        // line 128
        echo twig_jsonencode_filter($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "selector_window_title", array())));
        echo "
            });
            var data = [];
            ";
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["initial_elements"]) ? $context["initial_elements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 132
            echo "                data.push(new MultipleEntityModel(";
            echo twig_jsonencode_filter($context["element"]);
            echo "));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            widget.getCollection().reset(data);

            ";
        // line 136
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "extra_config", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "extra_config", array()))) {
            // line 137
            echo "                ";
            $this->displayBlock(("oro_multiple_entity_js_" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "extra_config", array())), $context, $blocks);
            echo "
            ";
        }
        // line 139
        echo "        });
    </script>
";
    }

    // line 143
    public function block_form_label($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        ob_start();
        // line 145
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 146
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 147
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 148
                echo "        ";
            }
            // line 149
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 150
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 151
                echo "        ";
            }
            // line 152
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 153
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " validation-error"))));
                // line 154
                echo "        ";
            }
            // line 155
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 156
                echo "            ";
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null))) {
                    // line 157
                    $context["label"] = strtr((isset($context["label_format"]) ? $context["label_format"] : null), array("%name%" => (isset($context["name"]) ? $context["name"] : null), "%id%" => (isset($context["id"]) ? $context["id"] : null)));
                    // line 158
                    echo "            ";
                } else {
                    // line 159
                    echo "                ";
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                    // line 160
                    echo "            ";
                }
                // line 161
                echo "        ";
            }
            // line 162
            echo "        ";
            $context["isRadioLabel"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array()), false)) : (false)) && array_key_exists("checked", $context));
            // line 163
            echo "        ";
            if ((array_key_exists("tooltip", $context) && (isset($context["tooltip"]) ? $context["tooltip"] : null))) {
                // line 164
                echo "            ";
                $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroFormBundle:Form:fields.html.twig", 164);
                // line 165
                echo "            ";
                echo $context["ui"]->gettooltip(                // line 166
(isset($context["tooltip"]) ? $context["tooltip"] : null), ((                // line 167
array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter((isset($context["tooltip_parameters"]) ? $context["tooltip_parameters"] : null), array())) : (array())), ((                // line 168
array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter((isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : null), null)) : (null)), ((                // line 169
array_key_exists("tooltip_details_enabled", $context)) ? (_twig_default_filter((isset($context["tooltip_details_enabled"]) ? $context["tooltip_details_enabled"] : null), false)) : (false)), ((                // line 170
array_key_exists("tooltip_details_link", $context)) ? (_twig_default_filter((isset($context["tooltip_details_link"]) ? $context["tooltip_details_link"] : null), null)) : (null)), ((                // line 171
array_key_exists("tooltip_details_anchor", $context)) ? (_twig_default_filter((isset($context["tooltip_details_anchor"]) ? $context["tooltip_details_anchor"] : null), null)) : (null)));
            }
            // line 175
            echo "<label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 176
            if ((array_key_exists("translatable_label", $context) &&  !(isset($context["translatable_label"]) ? $context["translatable_label"] : null))) {
                // line 177
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            } elseif ((            // line 178
array_key_exists("raw_label", $context) && (isset($context["raw_label"]) ? $context["raw_label"] : null))) {
                // line 179
                echo (isset($context["label"]) ? $context["label"] : null);
            } else {
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            }
            // line 183
            echo "<em>";
            if (((isset($context["required"]) ? $context["required"] : null) &&  !(isset($context["isRadioLabel"]) ? $context["isRadioLabel"] : null))) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
            echo "</em>
        </label>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 189
    public function block_oro_money_row($context, array $blocks = array())
    {
        // line 190
        echo "    ";
        $context["label"] = ((($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)) . " (") . (isset($context["currency_symbol"]) ? $context["currency_symbol"] : null)) . ")");
        // line 191
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row', array("type" => "text", "label" => (isset($context["label"]) ? $context["label"] : null), "translatable_label" => false));
        echo "
";
    }

    // line 194
    public function block_oro_money_widget($context, array $blocks = array())
    {
        // line 195
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 196
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 199
    public function block_percent_row($context, array $blocks = array())
    {
        // line 200
        echo "    ";
        $context["label"] = ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)) . " (%)");
        // line 201
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row', array("type" => "text", "label" => (isset($context["label"]) ? $context["label"] : null), "translatable_label" => false));
        echo "
";
    }

    // line 204
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 205
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 206
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 209
    public function block_oro_date_widget($context, array $blocks = array())
    {
        // line 210
        echo "    ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-validation", array(), "any", true, true)) {
            // line 211
            echo "        ";
            $context["dateValidation"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-validation", array(), "array");
            // line 212
            echo "    ";
        } else {
            // line 213
            echo "        ";
            $context["dateValidation"] = array("Date" => array());
            // line 214
            echo "
        ";
            // line 215
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 216
                echo "            ";
                $context["dateValidation"] = twig_array_merge((isset($context["dateValidation"]) ? $context["dateValidation"] : null), array("NotBlank" => array("message" => "This value should not be blank.")));
                // line 217
                echo "        ";
            }
            // line 218
            echo "
        ";
            // line 219
            $context["dateValidation"] = twig_jsonencode_filter((isset($context["dateValidation"]) ? $context["dateValidation"] : null));
            // line 220
            echo "    ";
        }
        // line 221
        echo "
    ";
        // line 222
        $context["options"] = array("view" => "oroui/js/app/views/datepicker/datepicker-view", "nativeMode" => $this->env->getExtension('mobile_extension')->isMobile(), "dateInputAttrs" => array("placeholder" => $this->env->getExtension('translator')->trans("oro.form.choose_date"), "id" => ("date_selector_" .         // line 227
(isset($context["id"]) ? $context["id"] : null)), "name" => ("date_selector_" .         // line 228
(isset($context["id"]) ? $context["id"] : null)), "data-validation" =>         // line 229
(isset($context["dateValidation"]) ? $context["dateValidation"] : null), "class" => ("datepicker-input " . (($this->getAttribute(        // line 230
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "array")) : ("")))), "datePickerOptions" => array("altFormat" => "yy-mm-dd", "changeMonth" => true, "changeYear" => true, "yearRange" => ((        // line 236
array_key_exists("years", $context)) ? (_twig_default_filter((isset($context["years"]) ? $context["years"] : null), "-80:+1")) : ("-80:+1")), "showButtonPanel" => true));
        // line 240
        echo "
    ";
        // line 241
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(        // line 243
(isset($context["options"]) ? $context["options"] : null), twig_constant("JSON_FORCE_OBJECT"))));
        // line 245
        echo "
    ";
        // line 246
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
";
    }

    // line 249
    public function block_oro_datetime_widget($context, array $blocks = array())
    {
        // line 250
        echo "    ";
        $context["dateValidation"] = array("Date" => array());
        // line 251
        echo "    ";
        $context["timeValidation"] = array("Time" => array());
        // line 252
        echo "
    ";
        // line 253
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 254
            echo "        ";
            $context["dateValidation"] = twig_array_merge((isset($context["dateValidation"]) ? $context["dateValidation"] : null), array("NotBlank" => array()));
            // line 255
            echo "        ";
            $context["timeValidation"] = twig_array_merge((isset($context["timeValidation"]) ? $context["timeValidation"] : null), array("NotBlank" => array()));
            // line 256
            echo "    ";
        }
        // line 257
        echo "
    ";
        // line 258
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            // line 259
            echo "        ";
            $context["attrClass"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "array");
            // line 260
            echo "    ";
        } else {
            // line 261
            echo "        ";
            $context["attrClass"] = "";
            // line 262
            echo "    ";
        }
        // line 263
        echo "
    ";
        // line 264
        $context["options"] = array("view" => "oroui/js/app/views/datepicker/datetimepicker-view", "nativeMode" => $this->env->getExtension('mobile_extension')->isMobile(), "dateInputAttrs" => array("placeholder" => $this->env->getExtension('translator')->trans("oro.form.choose_date"), "id" => ("date_selector_" .         // line 269
(isset($context["id"]) ? $context["id"] : null)), "name" => ("date_selector_" .         // line 270
(isset($context["id"]) ? $context["id"] : null)), "class" => ("input-small datepicker-input " .         // line 271
(isset($context["attrClass"]) ? $context["attrClass"] : null)), "data-validation" => twig_jsonencode_filter(        // line 272
(isset($context["dateValidation"]) ? $context["dateValidation"] : null))), "datePickerOptions" => array("altFormat" => "yy-mm-dd", "changeMonth" => true, "changeYear" => true, "yearRange" => ((        // line 278
array_key_exists("years", $context)) ? (_twig_default_filter((isset($context["years"]) ? $context["years"] : null), "-80:+1")) : ("-80:+1")), "showButtonPanel" => true), "timeInputAttrs" => array("placeholder" => $this->env->getExtension('translator')->trans("oro.form.choose_time"), "id" => ("time_selector_" .         // line 283
(isset($context["id"]) ? $context["id"] : null)), "name" => ("time_selector_" .         // line 284
(isset($context["id"]) ? $context["id"] : null)), "class" => ("input-small timepicker-input " .         // line 285
(isset($context["attrClass"]) ? $context["attrClass"] : null)), "data-validation" => twig_jsonencode_filter(        // line 286
(isset($context["timeValidation"]) ? $context["timeValidation"] : null))), "timePickerOptions" => array());
        // line 291
        echo "
    ";
        // line 292
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(        // line 294
(isset($context["options"]) ? $context["options"] : null), twig_constant("JSON_FORCE_OBJECT"))));
        // line 296
        echo "
    ";
        // line 297
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
";
    }

    // line 327
    public function block_oro_collection_widget($context, array $blocks = array())
    {
        // line 328
        echo "    ";
        ob_start();
        // line 329
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 330
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_collection_item_prototype", array(0 => (isset($context["form"]) ? $context["form"] : null)), "method");
            // line 331
            echo "        ";
        }
        // line 332
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 333
        echo "        ";
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "_collection");
        // line 334
        echo "        <div class=\"row-oro\">
            ";
        // line 335
        $context["prototype_name"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "prototype_name", array());
        // line 336
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-last-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array())), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, (isset($context["prototype_name"]) ? $context["prototype_name"] : null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_html"]) ? $context["prototype_html"] : null));
            echo "\"";
        }
        echo ">
                ";
        // line 337
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()))) {
            // line 338
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 339
                echo "                        ";
                echo $this->getAttribute($this, "oro_collection_item_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "                ";
        } elseif (((isset($context["show_form_when_empty"]) ? $context["show_form_when_empty"] : null) && array_key_exists("prototype_html", $context))) {
            // line 342
            echo "                    ";
            echo strtr((isset($context["prototype_html"]) ? $context["prototype_html"] : null), array((isset($context["prototype_name"]) ? $context["prototype_name"] : null) => "0"));
            echo "
                ";
        }
        // line 344
        echo "            </div>
            ";
        // line 345
        if ((isset($context["allow_add"]) ? $context["allow_add"] : null)) {
            // line 346
            echo "            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 348
        echo "        </div>
        ";
        // line 349
        if (((isset($context["handle_primary"]) ? $context["handle_primary"] : null) && ( !array_key_exists("prototype", $context) || $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "primary", array(), "any", true, true)))) {
            // line 350
            echo "            ";
            echo $this->getAttribute($this, "oro_collection_validate_primary_js", array(0 => $context), "method");
            echo "
        ";
        }
        // line 352
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 376
    public function block_oro_form_js_validation($context, array $blocks = array())
    {
        // line 377
        echo "<script type=\"text/javascript\">
    require(['jquery', 'jquery.validate'],
    function (\$) {
        var options = ";
        // line 380
        echo (((isset($context["js_options"]) ? $context["js_options"] : null)) ? (twig_jsonencode_filter((isset($context["js_options"]) ? $context["js_options"] : null))) : ("{}"));
        echo ";
        \$('#";
        // line 381
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "').validate(options);
    });
</script>
";
    }

    // line 386
    public function block_oro_entity_create_or_select_row($context, array $blocks = array())
    {
        // line 387
        echo "    ";
        $context["currentMode"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array()), "create")) : ("create"));
        // line 388
        echo "    ";
        $context["viewsContainerId"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()) . "-container");
        // line 389
        echo "
    ";
        // line 390
        ob_start();
        // line 391
        echo "        <div class=\"control-group create-select-entity ";
        echo twig_escape_filter($this->env, (isset($context["currentMode"]) ? $context["currentMode"] : null), "html", null, true);
        echo "
            ";
        // line 392
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "html", null, true);
        }
        echo "\"
            id=\"";
        // line 393
        echo twig_escape_filter($this->env, (isset($context["viewsContainerId"]) ? $context["viewsContainerId"] : null), "html", null, true);
        echo "\"
        >
            ";
        // line 395
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 396
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 397
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : null)));
            echo "
                </div>
            ";
        }
        // line 400
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 401
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 402
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 408
    public function block_oro_entity_create_or_select_widget($context, array $blocks = array())
    {
        // line 409
        echo "    ";
        $context["currentMode"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array()), "create")) : ("create"));
        // line 410
        echo "    ";
        $context["btnGroupId"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()) . "-btn-group");
        // line 411
        echo "    ";
        $context["viewsContainerId"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()) . "-container");
        // line 412
        echo "    ";
        $context["gridWidgetAlias"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()) . "-grid");
        // line 413
        echo "    ";
        $context["routeParametersElement"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()) . "-route-parameters");
        // line 414
        echo "
    <div class=\"create-select-entity-container clearfix\">
        <div id=\"";
        // line 416
        echo twig_escape_filter($this->env, (isset($context["btnGroupId"]) ? $context["btnGroupId"] : null), "html", null, true);
        echo "\" class=\"buttons-container\">
            <a href=\"javascript:void(0)\" class=\"entity-select-btn\" title=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose"), "html", null, true);
        echo "\"";
        if (((isset($context["disabled"]) ? $context["disabled"] : null) || (isset($context["read_only"]) ? $context["read_only"] : null))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span
                    data-label=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose Existing"), "html", null, true);
        echo "\"
                    data-alt-label-view=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose Another"), "html", null, true);
        echo "\"
                >
                    ";
        // line 422
        if (((isset($context["currentMode"]) ? $context["currentMode"] : null) == "view")) {
            // line 423
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose Another"), "html", null, true);
            echo "
                    ";
        } else {
            // line 425
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose Existing"), "html", null, true);
            echo "
                    ";
        }
        // line 427
        echo "                </span>
            </a>

            <a href=\"javascript:void(0)\" class=\"entity-create-btn\" title=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create New"), "html", null, true);
        echo "\"";
        if (((isset($context["disabled"]) ? $context["disabled"] : null) || (isset($context["read_only"]) ? $context["read_only"] : null))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span>";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create New"), "html", null, true);
        echo "</span>
            </a>

            <a href=\"javascript:void(0)\" class=\"entity-cancel-btn\" title=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "\"";
        if (((isset($context["disabled"]) ? $context["disabled"] : null) || (isset($context["read_only"]) ? $context["read_only"] : null))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span>";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</span>
            </a>
        </div>

        <div class=\"entity-create-block\"
            ";
        // line 440
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "required", array())) {
            echo "data-validation-optional-group=\"\"";
        }
        // line 441
        echo "            ";
        if (((isset($context["currentMode"]) ? $context["currentMode"] : null) != "create")) {
            echo "data-validation-ignore=\"\"";
        }
        // line 442
        echo "        >
            ";
        // line 443
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "new_entity", array()), 'widget');
        echo "
        </div>

        <div class=\"entity-select-block\">
            ";
        // line 447
        echo $this->env->getExtension('oro_widget')->render($this->env, array("widgetType" => "block", "loadingElement" => (("#" .         // line 449
(isset($context["viewsContainerId"]) ? $context["viewsContainerId"] : null)) . " .create-select-entity-container"), "elementFirst" => (        // line 450
(isset($context["currentMode"]) ? $context["currentMode"] : null) == "grid"), "url" => $this->env->getExtension('routing')->getPath("oro_datagrid_widget", array("gridName" => $this->getAttribute($this->getAttribute(        // line 451
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_name", array()))), "alias" =>         // line 452
(isset($context["gridWidgetAlias"]) ? $context["gridWidgetAlias"] : null)));
        // line 453
        echo "
        </div>

        <div class=\"entity-view-block ";
        // line 456
        if ((twig_length_filter($this->env, (isset($context["view_widgets"]) ? $context["view_widgets"] : null)) > 1)) {
            echo "row-fluid row-fluid-divider";
        }
        echo "\">
            ";
        // line 457
        $context["allRouteParameters"] = array();
        // line 458
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["view_widgets"]) ? $context["view_widgets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["view_widget"]) {
            // line 459
            echo "                <div class=\"responsive-cell\">
                    ";
            // line 460
            $context["routeParameters"] = $this->getAttribute($context["view_widget"], "route_parameters", array());
            // line 461
            echo "                    ";
            $context["allRouteParameters"] = twig_array_merge((isset($context["allRouteParameters"]) ? $context["allRouteParameters"] : null), array($this->getAttribute($context["view_widget"], "widget_alias", array()) => (isset($context["routeParameters"]) ? $context["routeParameters"] : null)));
            // line 462
            echo "                    ";
            echo $this->env->getExtension('oro_widget')->render($this->env, array("widgetType" => "block", "loadingElement" => (("#" .             // line 464
(isset($context["viewsContainerId"]) ? $context["viewsContainerId"] : null)) . " .create-select-entity-container"), "elementFirst" => (            // line 465
(isset($context["currentMode"]) ? $context["currentMode"] : null) == "view"), "url" => (((            // line 466
(isset($context["currentMode"]) ? $context["currentMode"] : null) == "view")) ? ($this->env->getExtension('routing')->getPath($this->getAttribute($context["view_widget"], "route_name", array()), (isset($context["routeParameters"]) ? $context["routeParameters"] : null))) : (null)), "alias" => $this->getAttribute(            // line 467
$context["view_widget"], "widget_alias", array()), "title" => (($this->getAttribute(            // line 468
$context["view_widget"], "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["view_widget"], "title", array()))) : (null))));
            // line 469
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view_widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 472
        echo "            <input type=\"hidden\"
               name=\"";
        // line 473
        echo twig_escape_filter($this->env, (isset($context["routeParametersElement"]) ? $context["routeParametersElement"] : null), "html", null, true);
        echo "\"
               id=\"";
        // line 474
        echo twig_escape_filter($this->env, (isset($context["routeParametersElement"]) ? $context["routeParametersElement"] : null), "html", null, true);
        echo "\"
               value=\"";
        // line 475
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["allRouteParameters"]) ? $context["allRouteParameters"] : null)));
        echo "\"
            />
        </div>

        ";
        // line 479
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "existing_entity", array()), 'widget');
        echo "
        ";
        // line 480
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array()), 'widget');
        echo "
    </div>
    <script type=\"text/javascript\">
        require(['jquery', 'oroform/js/create-select-type-handler'],
        function (\$, createSelectTypeHandler) {
            \$(function() {
                createSelectTypeHandler(
                    '#";
        // line 487
        echo twig_escape_filter($this->env, (isset($context["btnGroupId"]) ? $context["btnGroupId"] : null), "html", null, true);
        echo "',
                    '#";
        // line 488
        echo twig_escape_filter($this->env, (isset($context["viewsContainerId"]) ? $context["viewsContainerId"] : null), "html", null, true);
        echo "',
                    '#";
        // line 489
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array()), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    '#";
        // line 490
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "existing_entity", array()), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    '#";
        // line 491
        echo twig_escape_filter($this->env, (isset($context["routeParametersElement"]) ? $context["routeParametersElement"] : null), "html", null, true);
        echo "',
                    ";
        // line 492
        echo twig_jsonencode_filter((isset($context["gridWidgetAlias"]) ? $context["gridWidgetAlias"] : null));
        echo ",
                    ";
        // line 493
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "view_widgets", array()));
        echo ",
                    ";
        // line 494
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "existing_entity_grid_id", array()));
        echo ",
                    ";
        // line 495
        echo twig_jsonencode_filter((isset($context["currentMode"]) ? $context["currentMode"] : null));
        echo ",
                    ";
        // line 496
        echo twig_jsonencode_filter((isset($context["allRouteParameters"]) ? $context["allRouteParameters"] : null));
        echo "
                );
            });
        });
    </script>
";
    }

    // line 503
    public function block_oro_entity_create_or_select_choice_widget($context, array $blocks = array())
    {
        // line 504
        echo "    <div class=\"create-select-entity-choice-container\"
         data-page-component-module=\"oroform/js/app/components/create-or-select-choice-component\"
         data-page-component-options=\"";
        // line 506
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("modeSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 507
(isset($context["form"]) ? $context["form"] : null), "mode", array()), "vars", array()), "id", array())), "newEntitySelector" => ".new-entity", "existingEntitySelector" => ".existing-entity", "existingEntityInputSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 510
(isset($context["form"]) ? $context["form"] : null), "existing_entity", array()), "vars", array()), "id", array())))), "html", null, true);
        // line 511
        echo "\">
        <div class=\"existing-entity\">
            ";
        // line 513
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "existing_entity", array()), 'widget');
        echo "
        </div>
        <div class=\"new-entity\">
            ";
        // line 516
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "new_entity", array()), 'widget');
        echo "
        </div>
        ";
        // line 518
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array()), 'widget');
        echo "
    </div>
";
    }

    // line 522
    public function block_oro_entity_create_or_select_inline_widget($context, array $blocks = array())
    {
        // line 523
        echo "    ";
        $context["isButtonsEnabled"] = ( !(isset($context["disabled"]) ? $context["disabled"] : null) &&  !(isset($context["read_only"]) ? $context["read_only"] : null));
        // line 524
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-el\"
        ";
        // line 525
        if ((isset($context["isButtonsEnabled"]) ? $context["isButtonsEnabled"] : null)) {
            echo "class=\"entity-create-or-select-container ";
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "create_enabled", array())) {
                echo "entity-create-enabled";
            }
            echo "\"";
        }
        echo ">
        <div ";
        // line 526
        if ((isset($context["isButtonsEnabled"]) ? $context["isButtonsEnabled"] : null)) {
            echo "class=\"input-append\"";
        }
        echo ">
            ";
        // line 527
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

            ";
        // line 529
        if ((isset($context["isButtonsEnabled"]) ? $context["isButtonsEnabled"] : null)) {
            // line 530
            echo "                <button class=\"add-on btn entity-select-btn\"><i class=\"icon-bars\"></i></button>

                ";
            // line 532
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "create_enabled", array())) {
                // line 533
                echo "                    <button class=\"btn entity-create-btn\"><i class=\"icon-plus\"></i></button>
                ";
            }
            // line 535
            echo "            ";
        }
        // line 536
        echo "        </div>
    </div>

    ";
        // line 539
        $context["_block"] = false;
        // line 540
        echo "    ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "extra_config", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "extra_config", array()))) {
            // line 541
            echo "        ";
            $context["_block"] = $this->renderBlock(("oro_entity_create_or_select_inline_js_" . $this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "extra_config", array())), $context, $blocks);
            // line 542
            echo "    ";
        }
        // line 543
        echo "    ";
        if ( !twig_test_empty((isset($context["_block"]) ? $context["_block"] : null))) {
            // line 544
            echo "        ";
            echo (isset($context["_block"]) ? $context["_block"] : null);
            echo "
    ";
        } else {
            // line 546
            echo "        <script type=\"text/javascript\">
            require(['jquery', 'oroform/js/select-create-inline-type-handler'],
            function (\$, handler) {
                \$(function() {
                    ";
            // line 550
            $context["urlParts"] = array("grid" => array("route" => (($this->getAttribute($this->getAttribute(            // line 552
(isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "grid_widget_route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "grid_widget_route", array()), "oro_datagrid_widget")) : ("oro_datagrid_widget")), "parameters" => array("gridName" => $this->getAttribute($this->getAttribute(            // line 554
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_name", array()), "params" => $this->getAttribute($this->getAttribute(            // line 555
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_parameters", array()), "renderParams" => $this->getAttribute($this->getAttribute(            // line 556
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_render_parameters", array()))));
            // line 560
            echo "
                    ";
            // line 561
            if (((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)) === true)) {
                // line 562
                echo "                        ";
                $context["urlParts"] = twig_array_merge((isset($context["urlParts"]) ? $context["urlParts"] : null), array("create" => array("route" => $this->getAttribute($this->getAttribute(                // line 564
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "create_form_route", array()), "parameters" => $this->getAttribute($this->getAttribute(                // line 565
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "create_form_route_parameters", array()))));
                // line 568
                echo "                    ";
            }
            // line 569
            echo "
                    handler(
                        \$('#";
            // line 571
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "-el'),
                        \$('#";
            // line 572
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "'),
                        ";
            // line 573
            echo twig_jsonencode_filter($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)));
            echo ",
                        ";
            // line 574
            echo twig_jsonencode_filter((isset($context["urlParts"]) ? $context["urlParts"] : null), twig_constant("JSON_FORCE_OBJECT"));
            echo ",
                        ";
            // line 575
            echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array()), "id")) : ("id")));
            echo ",
                        ";
            // line 576
            echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)));
            echo "
                    );
                });
            });
        </script>
    ";
        }
    }

    // line 584
    public function block_oro_link_type_widget($context, array $blocks = array())
    {
        // line 585
        echo "    ";
        if (((isset($context["isPath"]) ? $context["isPath"] : null) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted((isset($context["acl"]) ? $context["acl"] : null)))) {
            echo " ";
            // line 586
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (((isset($context["isPath"]) ? $context["isPath"] : null)) ? ((isset($context["route"]) ? $context["route"] : null)) : ($this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), (isset($context["routeParameters"]) ? $context["routeParameters"] : null)))), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : null))) ? ((isset($context["class"]) ? $context["class"] : null)) : ("")), "html", null, true);
            echo "\" style=\"display: block; margin-top: 5px;\">
            ";
            // line 587
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "
        </a>
    ";
        }
    }

    // line 592
    public function block_oro_download_links_type_widget($context, array $blocks = array())
    {
        // line 593
        echo "    ";
        ob_start();
        // line 594
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
        foreach ($context['_seq'] as $context["fileName"] => $context["route"]) {
            // line 595
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $context["route"], "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : null))) ? ((isset($context["class"]) ? $context["class"] : null)) : ("")), "html", null, true);
            echo "\" style=\"display: block; margin-top: 5px;\">
                ";
            // line 596
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fileName'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 602
    public function block_oro_simple_color_picker_row($context, array $blocks = array())
    {
        // line 603
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 606
    public function block_oro_simple_color_picker_widget($context, array $blocks = array())
    {
        // line 607
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(array("view" => "oroform/js/app/views/simple-color-picker-view"),         // line 609
(isset($context["configs"]) ? $context["configs"] : null)))),         // line 610
(isset($context["attr"]) ? $context["attr"] : null));
        // line 611
        echo "    ";
        $context["type"] = "hidden";
        // line 612
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 615
    public function block_oro_simple_color_choice_widget($context, array $blocks = array())
    {
        // line 616
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(array("view" => "oroform/js/app/views/simple-color-choice-view"),         // line 618
(isset($context["configs"]) ? $context["configs"] : null)))),         // line 619
(isset($context["attr"]) ? $context["attr"] : null));
        // line 620
        echo "    ";
        if (((((isset($context["required"]) ? $context["required"] : null) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : null)) &&  !(isset($context["multiple"]) ? $context["multiple"] : null))) {
            // line 621
            $context["required"] = false;
        }
        // line 623
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 624
        if ((isset($context["allow_empty_color"]) ? $context["allow_empty_color"] : null)) {
            // line 625
            echo "<option value=\"\" class=\"empty-color\"";
            if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</option>
            <optgroup label=\"---\"></optgroup>";
        }
        // line 628
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 629
        $this->displayBlock("oro_simple_color_choice_widget_options", $context, $blocks);
        // line 630
        echo "</select>
";
    }

    // line 633
    public function block_oro_simple_color_choice_widget_options($context, array $blocks = array())
    {
        // line 634
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 635
            if (twig_test_iterable($context["choice"])) {
                // line 636
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, $context["group_label"], "html", null, true);
                echo "\"></optgroup>";
            } else {
                // line 638
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((isset($context["translatable"]) ? $context["translatable"] : null)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))) : ($this->getAttribute($context["choice"], "label", array()))), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 643
    public function block_oro_color_table_row($context, array $blocks = array())
    {
        // line 644
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 647
    public function block_oro_color_table_widget($context, array $blocks = array())
    {
        // line 648
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(array("view" => "oroform/js/app/views/color-table-view"),         // line 650
(isset($context["configs"]) ? $context["configs"] : null)))),         // line 651
(isset($context["attr"]) ? $context["attr"] : null));
        // line 652
        echo "    ";
        $context["type"] = "hidden";
        // line 653
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 656
    public function block_oro_resizeable_rich_text_widget($context, array $blocks = array())
    {
        // line 657
        echo "    ";
        $context["options"] = array("view" => "oroform/js/app/views/wysiwig-editor/wysiwyg-dialog-view", "editorComponentName" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 659
(isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "data-page-component-name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 660
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "attr", array()), "data-page-component-name", array(), "array")) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "attr", array()), "data-ftid", array(), "array"))));
        // line 662
        echo "
    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-name=\"wrap_";
        // line 664
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "data-page-component-name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 665
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "attr", array()), "data-page-component-name", array(), "array")) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "attr", array()), "data-ftid", array(), "array"))), "html", null, true);
        echo "\"
         data-page-component-options=\"";
        // line 666
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
        echo "\"
         data-layout=\"separate\" >
        ";
        // line 668
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    </div>
";
    }

    // line 300
    public function getoro_collection_item_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 301
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "block_prefixes", array()))) {
                // line 302
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "prototype", array());
                // line 303
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 304
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "disabled", array());
                // line 305
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "allow_delete", array());
                // line 306
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "allow_add_after", array());
                // line 307
                echo "    ";
            } else {
                // line 308
                echo "        ";
                $context["form"] = (isset($context["widget"]) ? $context["widget"] : null);
                // line 309
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "vars", array()), "full_name", array());
                // line 310
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "parent", array()), "vars", array()), "disabled", array());
                // line 311
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "parent", array()), "vars", array()), "allow_delete", array());
                // line 312
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "parent", array()), "vars", array()), "allow_add_after", array());
                // line 313
                echo "    ";
            }
            // line 314
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-validation-optional-group>
        <div class=\"row-oro oro-multiselect-holder";
            // line 315
            if ( !(isset($context["allow_delete"]) ? $context["allow_delete"] : null)) {
                echo " not-removable";
            }
            echo "\">
            ";
            // line 316
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("disabled" => (isset($context["disabled"]) ? $context["disabled"] : null)));
            echo "
            ";
            // line 317
            if ((isset($context["allow_delete"]) ? $context["allow_delete"] : null)) {
                // line 318
                echo "            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\">×</button>
            ";
            }
            // line 320
            echo "            ";
            if ((isset($context["allow_add_after"]) ? $context["allow_add_after"] : null)) {
                // line 321
                echo "            <button class=\"addAfterRow btn btn-action btn-link\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\">+</button>
            ";
            }
            // line 323
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 355
    public function getoro_collection_validate_primary_js($__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 356
            echo "    <script type=\"text/javascript\">
        require(['jquery'],
        function(\$){
            \$(function() {
                var container = \$('#";
            // line 360
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id", array()), "html", null, true);
            echo "');
                /**
                 * Allow only 1 primary checkbox to be checked.
                 * This logic convert checkbox logic to logic used in radiobutton
                 */
                container.on('click', '[name\$=\"[primary]\"]', function() {
                    container.find('[name\$=\"[primary]\"]').each(function (idx, el) {
                        el.checked = false;
                    });
                    this.checked = true;
                });
            });
        });
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1558 => 360,  1552 => 356,  1540 => 355,  1527 => 323,  1521 => 321,  1518 => 320,  1512 => 318,  1510 => 317,  1506 => 316,  1500 => 315,  1495 => 314,  1492 => 313,  1489 => 312,  1486 => 311,  1483 => 310,  1480 => 309,  1477 => 308,  1474 => 307,  1471 => 306,  1468 => 305,  1465 => 304,  1462 => 303,  1459 => 302,  1456 => 301,  1444 => 300,  1437 => 668,  1432 => 666,  1428 => 665,  1427 => 664,  1423 => 662,  1421 => 660,  1420 => 659,  1418 => 657,  1415 => 656,  1408 => 653,  1405 => 652,  1403 => 651,  1402 => 650,  1400 => 648,  1397 => 647,  1390 => 644,  1387 => 643,  1370 => 638,  1365 => 636,  1363 => 635,  1358 => 634,  1355 => 633,  1350 => 630,  1348 => 629,  1345 => 628,  1335 => 625,  1333 => 624,  1325 => 623,  1322 => 621,  1319 => 620,  1317 => 619,  1316 => 618,  1314 => 616,  1311 => 615,  1304 => 612,  1301 => 611,  1299 => 610,  1298 => 609,  1296 => 607,  1293 => 606,  1286 => 603,  1283 => 602,  1278 => 599,  1269 => 596,  1262 => 595,  1257 => 594,  1254 => 593,  1251 => 592,  1243 => 587,  1236 => 586,  1232 => 585,  1229 => 584,  1218 => 576,  1214 => 575,  1210 => 574,  1206 => 573,  1202 => 572,  1198 => 571,  1194 => 569,  1191 => 568,  1189 => 565,  1188 => 564,  1186 => 562,  1184 => 561,  1181 => 560,  1179 => 556,  1178 => 555,  1177 => 554,  1176 => 552,  1175 => 550,  1169 => 546,  1163 => 544,  1160 => 543,  1157 => 542,  1154 => 541,  1151 => 540,  1149 => 539,  1144 => 536,  1141 => 535,  1137 => 533,  1135 => 532,  1131 => 530,  1129 => 529,  1124 => 527,  1118 => 526,  1108 => 525,  1103 => 524,  1100 => 523,  1097 => 522,  1090 => 518,  1085 => 516,  1079 => 513,  1075 => 511,  1073 => 510,  1072 => 507,  1071 => 506,  1067 => 504,  1064 => 503,  1054 => 496,  1050 => 495,  1046 => 494,  1042 => 493,  1038 => 492,  1034 => 491,  1030 => 490,  1026 => 489,  1022 => 488,  1018 => 487,  1008 => 480,  1004 => 479,  997 => 475,  993 => 474,  989 => 473,  986 => 472,  978 => 469,  976 => 468,  975 => 467,  974 => 466,  973 => 465,  972 => 464,  970 => 462,  967 => 461,  965 => 460,  962 => 459,  957 => 458,  955 => 457,  949 => 456,  944 => 453,  942 => 452,  941 => 451,  940 => 450,  939 => 449,  938 => 447,  931 => 443,  928 => 442,  923 => 441,  919 => 440,  911 => 435,  903 => 434,  897 => 431,  889 => 430,  884 => 427,  878 => 425,  872 => 423,  870 => 422,  865 => 420,  861 => 419,  852 => 417,  848 => 416,  844 => 414,  841 => 413,  838 => 412,  835 => 411,  832 => 410,  829 => 409,  826 => 408,  817 => 402,  813 => 401,  806 => 400,  800 => 397,  797 => 396,  795 => 395,  790 => 393,  783 => 392,  778 => 391,  776 => 390,  773 => 389,  770 => 388,  767 => 387,  764 => 386,  756 => 381,  752 => 380,  747 => 377,  744 => 376,  739 => 352,  733 => 350,  731 => 349,  728 => 348,  722 => 346,  720 => 345,  717 => 344,  711 => 342,  708 => 341,  699 => 339,  694 => 338,  692 => 337,  677 => 336,  675 => 335,  672 => 334,  669 => 333,  666 => 332,  663 => 331,  660 => 330,  657 => 329,  654 => 328,  651 => 327,  645 => 297,  642 => 296,  640 => 294,  639 => 292,  636 => 291,  634 => 286,  633 => 285,  632 => 284,  631 => 283,  630 => 278,  629 => 272,  628 => 271,  627 => 270,  626 => 269,  625 => 264,  622 => 263,  619 => 262,  616 => 261,  613 => 260,  610 => 259,  608 => 258,  605 => 257,  602 => 256,  599 => 255,  596 => 254,  594 => 253,  591 => 252,  588 => 251,  585 => 250,  582 => 249,  576 => 246,  573 => 245,  571 => 243,  570 => 241,  567 => 240,  565 => 236,  564 => 230,  563 => 229,  562 => 228,  561 => 227,  560 => 222,  557 => 221,  554 => 220,  552 => 219,  549 => 218,  546 => 217,  543 => 216,  541 => 215,  538 => 214,  535 => 213,  532 => 212,  529 => 211,  526 => 210,  523 => 209,  516 => 206,  513 => 205,  510 => 204,  503 => 201,  500 => 200,  497 => 199,  490 => 196,  487 => 195,  484 => 194,  477 => 191,  474 => 190,  471 => 189,  458 => 183,  455 => 181,  452 => 179,  450 => 178,  448 => 177,  446 => 176,  431 => 175,  428 => 171,  427 => 170,  426 => 169,  425 => 168,  424 => 167,  423 => 166,  421 => 165,  418 => 164,  415 => 163,  412 => 162,  409 => 161,  406 => 160,  403 => 159,  400 => 158,  398 => 157,  395 => 156,  392 => 155,  389 => 154,  386 => 153,  383 => 152,  380 => 151,  377 => 150,  374 => 149,  371 => 148,  368 => 147,  365 => 146,  362 => 145,  359 => 144,  356 => 143,  350 => 139,  344 => 137,  342 => 136,  338 => 134,  329 => 132,  325 => 131,  319 => 128,  314 => 126,  310 => 125,  306 => 124,  302 => 123,  298 => 122,  294 => 121,  290 => 120,  286 => 119,  280 => 116,  276 => 114,  273 => 113,  270 => 112,  267 => 111,  264 => 110,  261 => 109,  258 => 108,  255 => 107,  252 => 106,  250 => 105,  244 => 102,  240 => 101,  232 => 96,  226 => 94,  223 => 93,  217 => 90,  173 => 49,  166 => 44,  163 => 43,  154 => 40,  151 => 39,  146 => 36,  144 => 35,  143 => 34,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  123 => 26,  120 => 25,  117 => 24,  114 => 23,  111 => 22,  108 => 21,  105 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  90 => 15,  87 => 14,  84 => 13,  81 => 12,  78 => 11,  75 => 10,  72 => 9,  69 => 8,  66 => 7,  63 => 6,  60 => 5,  57 => 4,  54 => 3,  11 => 1,);
    }
}
