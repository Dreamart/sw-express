<?php

/* OroDataGridBundle:js:grid-view.html.twig */
class __TwigTemplate_6aeb181f15cbf0846c66f57ac3204788174a751d03f46967491995efcdea4011 extends Twig_Template
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
        echo "<script type=\"text/template\" id=\"template-datagrid-grid-view\">
    <div class=\"btn-toolbar\">
        <% if (choices.length) { %>
            <div class=\"btn-group views-group\">
                <button data-toggle=\"dropdown\" class=\"btn btn-link dropdown-toggle <% if (disabled) { %>disabled<% } %>\">
                    <%= title %>
                </button>
                <ul class=\"dropdown-menu\">
                    <% _.each(choices, function (choice) { %>
                        <li><a href=\"#\" data-value=\"<%= choice.value %>\"><%= choice.label %></a></li>
                    <% }); %>
                </ul>
            </div>
        <% } %>
        <% if (showActions) { %>
            <div class=\"btn-group actions-group\">
                <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    <%= actionsLabel %>
                </button>
                <ul class=\"dropdown-menu\">
                    <% _.each(actions, function(action) { %>
                        <% if (action.enabled) { %>
                            <li><a href=\"#\" class=\"<%= action.name %>\"><%= action.label %></a></li>
                        <% } %>
                    <% }); %>
                </ul>
            </div>
            <% if (dirty) { %>
                <div class=\"edited-label\">&nbsp;-&nbsp;<%= editedLabel %></div>
            <% } %>
        <% } %>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:grid-view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
