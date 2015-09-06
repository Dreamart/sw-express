<?php

/* OroDashboardBundle:Js:default_templates.js.twig */
class __TwigTemplate_8c374428eb19955738bbc264c4ac38499b570db4b7f128d757503e74d8b0c538 extends Twig_Template
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
        // line 1
        echo "<script type=\"text/template\" id=\"date-filter-template-wo-actions\">
    <div class=\"control-group\">
        <%= parts.join('') %>
    </div>
    <div>
        <div class=\"filter-start-date\">
            <input type=\"text\" class=\"<%= inputClass %>\"
                   value=\"<%= value.value.start %>\"
                   name=\"<%= value.value.startEndPrefix %>[value][start]\"
                   placeholder=\"<%- _.__('from') %>\"
            />
        </div>
        <span class=\"filter-separator\">-</span>
        <div class=\"filter-end-date\">
            <input type=\"text\" class=\"<%= inputClass %>\"
                   value=\"<%= value.value.end %>\"
                   name=\"<%= value.value.startEndPrefix %>[value][end]\"
                   placeholder=\"<%- _.__('to') %>\"
            />
        </div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Js:default_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
