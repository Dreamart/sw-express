<?php

/* OroDashboardBundle:Form:fields.html.twig */
class __TwigTemplate_5bae2b21e5b9140ab45005c63644b2d4c31e9e3fd3c511a0cc3deaa97628a1f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_type_widget_date_range_widget' => array($this, 'block_oro_type_widget_date_range_widget'),
            'oro_type_widget_title_widget' => array($this, 'block_oro_type_widget_title_widget'),
            'oro_type_widget_items_row' => array($this, 'block_oro_type_widget_items_row'),
            'oro_type_widget_items_javascript' => array($this, 'block_oro_type_widget_items_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_type_widget_date_range_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('oro_type_widget_title_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('oro_type_widget_items_row', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('oro_type_widget_items_javascript', $context, $blocks);
    }

    // line 1
    public function block_oro_type_widget_date_range_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"date-range-filter filter-criteria date-range-filter-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\">
        <!-- datetime range filter placeholder -->
        <input type=\"hidden\" name=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "[part]\" value=\"source\"/>
    </div>
    <script type=\"text/javascript\">
        require(
            ['jquery', 'underscore', 'orodashboard/js/widget/datetime-range'],
            function (\$, _, WidgetConfigDatetimeRangeFilter) {
                \$(function () {
                    var metadata = JSON.parse('";
        // line 11
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "datetime_range_metadata", array()), twig_constant("JSON_UNESCAPED_SLASHES"));
        echo "');
                    var DatetimeFilterWithMeta = WidgetConfigDatetimeRangeFilter.extend(metadata);
                    var dateRangeFilter = new DatetimeFilterWithMeta();

                    var valueConfig = {};
                    ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "value", array()) == null)) {
            // line 17
            echo "                        valueConfig = {start: '', end: ''};
                    ";
        } else {
            // line 19
            echo "                        valueConfig = JSON.parse('";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "value", array()));
            echo "');
                    ";
        }
        // line 21
        echo "
                    valueConfig.startEndPrefix = '";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "';

                    value = {
                        part: 'source',
                        type: ";
        // line 26
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "type", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "type", array())) : (1)), "html", null, true);
        echo ",
                        value: valueConfig
                    };
                    dateRangeFilter.setValue(value);
                    dateRangeFilter.render();
                    dateRangeFilter._formatRawValue(value);

                    \$('.date-range-filter-' + '";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "').append(dateRangeFilter.\$el);
                    \$('div.widget-configuration').parent().not('.ui-widget-content').css('overflow', 'inherit');
                    \$('div.widget-configuration').closest('.ui-widget-content').trigger('dialogresize');
                });
            }
        )
    </script>
";
    }

    // line 42
    public function block_oro_type_widget_title_widget($context, array $blocks = array())
    {
        // line 43
        echo "    <div class=\"widget_title_widget\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
        echo "
    </div>
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "useDefault", array()), 'row');
        echo "
    <script type=\"text/javascript\">
        require(['jquery'], function (\$) {
            \$(function () {
                var title     = \$('input#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');
                var isDefault = \$('input#";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "useDefault", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');

                if (isDefault.prop('checked') == true) {
                    \$(title).prop('readonly', 'readonly');
                }
                \$(isDefault).change(function() {
                    if (\$(this).is(':checked')) {
                        \$(title).prop('readonly', 'readonly');
                    } else {
                        \$(title).removeAttr('readonly');
                    }
                });
            });
        })
    </script>
";
    }

    // line 68
    public function block_oro_type_widget_items_row($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 69);
        // line 70
        echo "    ";
        $context["rowId"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()) . "Row");
        // line 71
        echo "
    <div id=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["rowId"]) ? $context["rowId"] : null), "html", null, true);
        echo "\" class=\"dashboard-widget-items\">
        <div class=\"control-group\">
            <label class=\"control-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                <div class=\"\">
                    ";
        // line 77
        echo $context["UI"]->getclientButton(array("aCss" => "no-hash add-button", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.actions.add.label")));
        // line 80
        echo "
                    ";
        // line 81
        echo $context["UI"]->getclientButton(array("aCss" => "no-hash btn-primary add-all-button", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.actions.add_all.label")));
        // line 84
        echo "
                </div>
            </div>
        </div>
        <div class=\"grid-container\">
            <table id=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"grid table table-bordered table-condensed\">
                <thead>
                    <tr>
                        <th><span>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "item_label", array())), "html", null, true);
        echo "</span></th>
                        <th class=\"action-column\"><span>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.columns.actions"), "html", null, true);
        echo "</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </div>
    ";
        // line 100
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
        echo "
";
    }

    // line 103
    public function block_oro_type_widget_items_javascript($context, array $blocks = array())
    {
        // line 104
        echo "    ";
        $context["options"] = array("itemsData" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 105
(isset($context["form"]) ? $context["form"] : null), "children", array()), "items", array()), "vars", array()), "value", array()), "baseName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 106
(isset($context["form"]) ? $context["form"] : null), "children", array()), "items", array()), "vars", array()), "full_name", array()), "el" => (("#" . $this->getAttribute($this->getAttribute(        // line 107
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array())) . "Row"));
        // line 109
        echo "
    <script>
        require([
            'orodashboard/js/items/view'
        ], function (ItemsView) {
            'use strict';

            new ItemsView(";
        // line 116
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
        echo ");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  236 => 116,  227 => 109,  225 => 107,  224 => 106,  223 => 105,  221 => 104,  218 => 103,  212 => 100,  202 => 93,  198 => 92,  192 => 89,  185 => 84,  183 => 81,  180 => 80,  178 => 77,  172 => 74,  167 => 72,  164 => 71,  161 => 70,  158 => 69,  155 => 68,  135 => 51,  131 => 50,  124 => 46,  119 => 44,  116 => 43,  113 => 42,  101 => 33,  91 => 26,  84 => 22,  81 => 21,  75 => 19,  71 => 17,  69 => 16,  61 => 11,  51 => 4,  45 => 2,  42 => 1,  38 => 103,  35 => 102,  33 => 68,  30 => 67,  28 => 42,  25 => 41,  23 => 1,);
    }
}
