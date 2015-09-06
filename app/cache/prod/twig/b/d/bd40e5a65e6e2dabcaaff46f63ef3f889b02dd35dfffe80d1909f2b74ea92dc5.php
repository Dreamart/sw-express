<?php

/* OroDataGridBundle:js:pagination.html.twig */
class __TwigTemplate_bd40e5a65e6e2dabcaaff46f63ef3f889b02dd35dfffe80d1909f2b74ea92dc5 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-datagrid-toolbar-pagination\">
    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.label') %>:</label>
    <ul class=\"icons-holder\">
        <% _.each(handles, function (handle) { %>
        <li <% if (handle.className) { %>class=\"<%= handle.className %>\"<% } %>>
            <a href=\"#\" <% if (handle.title) { %> title=\"<%= handle.title %>\"<% } %>>
            <% if (handle.wrapClass) { %>
                <i <% if (handle.wrapClass) { %>class=\"<%= handle.wrapClass %>\"<% } %>>
                    <%= handle.label %>
                </i>
            <% } else { %>
                <%= handle.label %>
            <% } %>
            </a>
        </li>
        <% }); %>
    </ul>
";
        // line 18
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 19
            echo "    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.totalPages', {totalPages: state.totalPages || 1}) %>&nbsp;|</label>
    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.totalRecords', {totalRecords: state.totalRecords}) %></label>
";
        }
        // line 22
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 22,  40 => 19,  38 => 18,  19 => 1,);
    }
}
