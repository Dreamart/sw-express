<?php

/* OroUserBundle:Form:fields.html.twig */
class __TwigTemplate_7c52dea68895ce2f625335a7d361690ac52f974937ef703aec58cb809708b5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_create_or_select_inline_js_acl_user_autocomplete' => array($this, 'block_oro_entity_create_or_select_inline_js_acl_user_autocomplete'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_entity_create_or_select_inline_js_acl_user_autocomplete', $context, $blocks);
    }

    public function block_oro_entity_create_or_select_inline_js_acl_user_autocomplete($context, array $blocks = array())
    {
        // line 2
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'oroform/js/select-create-inline-type-handler'],
        function (\$, handler) {
            \$(function() {
                ";
        // line 6
        $context["gridParameters"] = twig_array_merge($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_parameters", array()), array("permission" => $this->getAttribute(        // line 7
(isset($context["configs"]) ? $context["configs"] : null), "permission", array()), "entity" => $this->getAttribute(        // line 8
(isset($context["configs"]) ? $context["configs"] : null), "entity_name", array()), "entity_id" => $this->getAttribute(        // line 9
(isset($context["configs"]) ? $context["configs"] : null), "entity_id", array())));
        // line 11
        echo "
                ";
        // line 12
        $context["urlParts"] = array("grid" => array("route" => "oro_datagrid_widget", "parameters" => array("gridName" => $this->getAttribute($this->getAttribute(        // line 16
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_name", array()), "params" =>         // line 17
(isset($context["gridParameters"]) ? $context["gridParameters"] : null), "renderParams" => $this->getAttribute($this->getAttribute(        // line 18
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "grid_render_parameters", array()))));
        // line 22
        echo "
                ";
        // line 23
        if (((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)) === true)) {
            // line 24
            echo "                ";
            $context["urlParts"] = twig_array_merge((isset($context["urlParts"]) ? $context["urlParts"] : null), array("create" => array("route" => $this->getAttribute($this->getAttribute(            // line 26
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "create_form_route", array()), "parameters" => $this->getAttribute($this->getAttribute(            // line 27
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "create_form_route_parameters", array()))));
            // line 30
            echo "                ";
        }
        // line 31
        echo "
                handler(
                        \$('#";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-el'),
                        \$('#";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "'),
                        ";
        // line 35
        echo twig_jsonencode_filter($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)));
        echo ",
                        ";
        // line 36
        echo twig_jsonencode_filter((isset($context["urlParts"]) ? $context["urlParts"] : null), twig_constant("JSON_FORCE_OBJECT"));
        echo ",
                        ";
        // line 37
        echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array()), "id")) : ("id")));
        echo ",
                        ";
        // line 38
        echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)));
        echo "
                );
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  78 => 37,  74 => 36,  70 => 35,  66 => 34,  62 => 33,  58 => 31,  55 => 30,  53 => 27,  52 => 26,  50 => 24,  48 => 23,  45 => 22,  43 => 18,  42 => 17,  41 => 16,  40 => 12,  37 => 11,  35 => 9,  34 => 8,  33 => 7,  32 => 6,  26 => 2,  20 => 1,);
    }
}
