<?php

/* OroDataGridBundle:js:pagination-input.html.twig */
class __TwigTemplate_2a02f54e32f73fa8d81abc559e4f2158b12564f0a6e21d80426e17e65cac6a42 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-datagrid-toolbar-pagination-input\">
    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.label') %>:</label>
    <ul class=\"icons-holder\">
    <% _.each(handles, function (handle) { %>
        <li <% if (handle.className || disabled) { %>class=\"<%= handle.className %> <% if (disabled) { %>disabled<% } %>\"<% } %>>
        <% if (handle.type == \"input\") { %>
            <input type=\"number\" value=\"<%= state.firstPage == 0 ? state.currentPage + 1 : state.currentPage  %>\"
                <% if (disabled) { %>disabled=\"disabled\"<% } %>/>
        <% } else { %>
            <a href=\"#\" <% if (handle.title) { %> title=\"<%= handle.title %>\"<% } %>>
            <% if (handle.wrapClass) { %>
                <i <% if (handle.wrapClass) { %>class=\"<%= handle.wrapClass %>\"<% } %>>
                    <%= handle.label %>
                </i>
            <% } else { %>
                <%= handle.label %>
            <% } %>
            </a>
        <% } %>
        </li>
    <% }); %>
    </ul>
";
        // line 23
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 24
            echo "    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.totalPages', {totalPages: state.totalPages || 1}) %>&nbsp;|</label>
    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.totalRecords', {totalRecords: state.totalRecords}) %></label>
";
        }
        // line 27
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:pagination-input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 27,  45 => 24,  43 => 23,  19 => 1,);
    }
}
