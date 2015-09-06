<?php

/* OroCRMChannelBundle:Form:fields.html.twig */
class __TwigTemplate_e46b4e280787d2511b942de92ff76ae4667bed473ffc72e8e55981c08c82fa7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'orocrm_channel_datasource_form_row' => array($this, 'block_orocrm_channel_datasource_form_row'),
            'orocrm_channel_datasource_form_widget' => array($this, 'block_orocrm_channel_datasource_form_widget'),
            'orocrm_channel_entity_choice_form_row' => array($this, 'block_orocrm_channel_entity_choice_form_row'),
            '_orocrm_channel_form_channelType_widget' => array($this, 'block__orocrm_channel_form_channelType_widget'),
            'oro_multiple_entity_js_channel_aware' => array($this, 'block_oro_multiple_entity_js_channel_aware'),
            'oro_entity_create_or_select_inline_js_autocomplete_channel_aware' => array($this, 'block_oro_entity_create_or_select_inline_js_autocomplete_channel_aware'),
            'oro_entity_create_or_select_inline_js_grid_channel_aware' => array($this, 'block_oro_entity_create_or_select_inline_js_grid_channel_aware'),
            'oro_entity_create_or_select_inline_js_channel_aware' => array($this, 'block_oro_entity_create_or_select_inline_js_channel_aware'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('orocrm_channel_datasource_form_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('orocrm_channel_datasource_form_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('orocrm_channel_entity_choice_form_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('_orocrm_channel_form_channelType_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('oro_multiple_entity_js_channel_aware', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('oro_entity_create_or_select_inline_js_autocomplete_channel_aware', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('oro_entity_create_or_select_inline_js_grid_channel_aware', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('oro_entity_create_or_select_inline_js_channel_aware', $context, $blocks);
    }

    // line 1
    public function block_orocrm_channel_datasource_form_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_orocrm_channel_datasource_form_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " ")) : ("")) . "orocrm-channel-datasource-field")));
        // line 7
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : null)));
        echo "

    ";
        // line 9
        $context["options"] = array("el" => ("#" . $this->getAttribute($this->getAttribute(        // line 10
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array())), "idEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 11
(isset($context["form"]) ? $context["form"] : null), "identifier", array()), "vars", array()), "id", array())), "dataEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 12
(isset($context["form"]) ? $context["form"] : null), "data", array()), "vars", array()), "id", array())), "typeEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
(isset($context["form"]) ? $context["form"] : null), "type", array()), "vars", array()), "id", array())), "nameEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
(isset($context["form"]) ? $context["form"] : null), "name", array()), "vars", array()), "id", array())), "channelNameEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
(isset($context["form"]) ? $context["form"] : null), "parent", array()), "name", array()), "vars", array()), "id", array())));
        // line 17
        echo "
    <div data-page-component-module=\"orocrmchannel/js/app/components/integration-widget\"
         data-page-component-options=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
        echo "\"></div>
";
    }

    // line 22
    public function block_orocrm_channel_entity_choice_form_row($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row');
        echo "
";
    }

    // line 26
    public function block__orocrm_channel_form_channelType_widget($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "disabled", array())) {
            // line 28
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 29
                echo "            ";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : null))) {
                    // line 30
                    echo "                <span class=\"inline-text\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
                    echo "\" data-value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "html", null, true);
                    echo "\" data-disabled>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array())), "html", null, true);
                    echo "</span>
            ";
                }
                // line 32
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
    ";
        }
    }

    // line 38
    public function block_oro_multiple_entity_js_channel_aware($context, array $blocks = array())
    {
        // line 39
        echo "    var \$channelSelector = \$('select[name=\"' + ";
        echo twig_jsonencode_filter((isset($context["channel_field_name"]) ? $context["channel_field_name"] : null));
        echo " + '\"]'),
        presetChannelId = ";
        // line 40
        echo twig_jsonencode_filter((isset($context["channel_id"]) ? $context["channel_id"] : null));
        echo ",
        changeHandler = function(\$el) {
            var channelIds = [\$el.val()];

            if (presetChannelId) {
                channelIds.push(presetChannelId);
            }

            widget.options.selectionRouteParams.channelIds = channelIds.join(',');
        };

        \$channelSelector.change(function() {
            changeHandler(\$(this));
            widget.removeAll();
        });
        changeHandler(\$channelSelector);
";
    }

    // line 58
    public function block_oro_entity_create_or_select_inline_js_autocomplete_channel_aware($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $this->displayBlock("oro_entity_create_or_select_inline_js_channel_aware", $context, $blocks);
        echo "
";
    }

    // line 62
    public function block_oro_entity_create_or_select_inline_js_grid_channel_aware($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $this->displayBlock("oro_entity_create_or_select_inline_js_channel_aware", $context, $blocks);
        echo "
";
    }

    // line 66
    public function block_oro_entity_create_or_select_inline_js_channel_aware($context, array $blocks = array())
    {
        // line 67
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'oroform/js/select-create-inline-type-handler'],
        function (\$, handler) {
            \$(function() {
                var presetChannelId = ";
        // line 71
        echo twig_jsonencode_filter((isset($context["channel_id"]) ? $context["channel_id"] : null));
        echo ";
                var \$formEl = \$('#";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
                var \$formElContainer = \$('#";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-el');

                ";
        // line 75
        $context["urlParts"] = array("grid" => array("route" => "oro_datagrid_widget", "parameters" => array("gridName" => $this->getAttribute($this->getAttribute(        // line 79
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_name", array()), "params" => $this->getAttribute($this->getAttribute(        // line 80
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_parameters", array()), "renderParams" => $this->getAttribute($this->getAttribute(        // line 81
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_render_parameters", array()))));
        // line 85
        echo "
                ";
        // line 86
        if (((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)) === true)) {
            // line 87
            echo "                ";
            $context["urlParts"] = twig_array_merge((isset($context["urlParts"]) ? $context["urlParts"] : null), array("create" => array("route" => $this->getAttribute($this->getAttribute(            // line 89
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "create_form_route", array()), "parameters" => $this->getAttribute($this->getAttribute(            // line 90
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "create_form_route_parameters", array()))));
            // line 93
            echo "                ";
        }
        // line 94
        echo "
                var configurator = handler(
                    \$formElContainer,
                    \$formEl,
                    ";
        // line 98
        echo twig_jsonencode_filter($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)));
        echo ",
                    ";
        // line 99
        echo twig_jsonencode_filter((isset($context["urlParts"]) ? $context["urlParts"] : null), twig_constant("JSON_FORCE_OBJECT"));
        echo ",
                    ";
        // line 100
        echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array()), "id")) : ("id")));
        echo ",
                    ";
        // line 101
        echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)));
        echo "
                ),
                changeHandler = function(\$el) {
                    var parts = configurator.getUrlParts(),
                        channelIds = [],
                        currentVal = \$el.val();

                    if (currentVal) {
                        channelIds.push(currentVal);
                    }
                    if (presetChannelId) {
                        channelIds.push(presetChannelId);
                    }

                    if (";
        // line 115
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "channel_required", array()));
        echo ") {
                        var disallowEdit = !channelIds.length;
                        \$formElContainer.find('button').prop('disabled', disallowEdit);
                        \$formEl.select2(\"readonly\", disallowEdit);
                    }

                    parts.grid.parameters.params.channelIds = channelIds.join(',');
                    var channelId = presetChannelId || \$el.val();
                    if (parts.hasOwnProperty('create') && channelId) {
                        parts.create.parameters.channelId = channelId;
                    }
                },
                \$channelSelector = \$('select[name=\"' + ";
        // line 127
        echo twig_jsonencode_filter((isset($context["channel_field_name"]) ? $context["channel_field_name"] : null));
        echo " + '\"]');

                \$channelSelector.change(function() {
                    changeHandler(\$(this));
                    configurator.setSelection(null);
                });
                changeHandler(\$channelSelector);
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroCRMChannelBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  296 => 127,  281 => 115,  264 => 101,  260 => 100,  256 => 99,  252 => 98,  246 => 94,  243 => 93,  241 => 90,  240 => 89,  238 => 87,  236 => 86,  233 => 85,  231 => 81,  230 => 80,  229 => 79,  228 => 75,  223 => 73,  219 => 72,  215 => 71,  209 => 67,  206 => 66,  199 => 63,  196 => 62,  189 => 59,  186 => 58,  165 => 40,  160 => 39,  157 => 38,  149 => 34,  146 => 33,  140 => 32,  130 => 30,  127 => 29,  122 => 28,  119 => 27,  116 => 26,  109 => 23,  106 => 22,  100 => 19,  96 => 17,  94 => 15,  93 => 14,  92 => 13,  91 => 12,  90 => 11,  89 => 10,  88 => 9,  82 => 7,  79 => 6,  76 => 5,  69 => 2,  66 => 1,  62 => 66,  59 => 65,  57 => 62,  54 => 61,  52 => 58,  49 => 57,  47 => 38,  44 => 37,  42 => 26,  39 => 25,  37 => 22,  34 => 21,  32 => 5,  29 => 4,  27 => 1,);
    }
}
