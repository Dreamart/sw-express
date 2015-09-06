<?php

/* OroEmailBundle:Js:default_templates.js.twig */
class __TwigTemplate_13ac7fbb1f1311020ccf2cd0338a932aa88e429c1643eba563ab6fed0eb4a2d6 extends Twig_Template
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
        echo "<script type=\"text/template\" id=\"multiselect-origin-folder-template\">
    <div class=\"filter-item oro-drop\">
        <div class=\"btn filter-select filter-criteria-selector <% if (isEmpty) { %>filter-default-value<% } %>\">
            <% if (showLabel) { %><%= label %>: <% } %>
            <strong class=\"select-filter-placeholder multiselect-filter-placeholder\"><%= placeholder %></strong>
            <select multiple>
                <% _.each(options, function (item, key) { %>
                    <optgroup label=\"<%- key %>\">
                        <% _.each(item['choices']['folder']['choices'], function (option) { %>
                            <option value=\"<%= option.value %>\" title=\"<%- option.label %>\"
                            <% if (_.isArray(selected.value)) { %>
                            <% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                            <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                            <%- option.label %>
                            </option>
                        <% }); %>
                    </optgroup>
                <% }); %>
            </select>
            <span class=\"reset-filter\" title=\"<%- _.__(\"oro.filter.wrapper.reset.tooltip\") %>\"
            ><i class=\"icon-remove hide-text\"><%- _.__(\"oro.filter.wrapper.reset.hint\") %></i></span>
        </div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Js:default_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
