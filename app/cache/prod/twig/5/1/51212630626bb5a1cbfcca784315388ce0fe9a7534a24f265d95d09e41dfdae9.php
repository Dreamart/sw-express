<?php

/* OroDataGridBundle:js:page-size.html.twig */
class __TwigTemplate_51212630626bb5a1cbfcca784315388ce0fe9a7534a24f265d95d09e41dfdae9 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-datagrid-toolbar-page-size\">
";
        // line 2
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 3
            echo "    <label class=\"control-label\"><%- _.__(\"View per page\") %>: &nbsp;</label>
";
        }
        // line 5
        echo "    <div class=\"btn-group\">
        <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle <% if (disabled) { %>disabled<% } %>\">
            <%= currentSizeLabel %><span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu pull-right\">
            <% _.each(items, function (item) { %>
            <li><a href=\"#\" data-size=\"<% if (_.isUndefined(item.size)) { %><%= item %><% } else { %><%= item.size %><% } %>\">
                <% if (_.isUndefined(item.label)) { %><%= item %><% } else { %><%= item.label %><% } %></a></li>
            <% }); %>
        </ul>
    </div>
";
        // line 16
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            // line 17
            echo "    <label><%- _.__(\"Per page\") %></label>
";
        }
        // line 19
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:page-size.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 19,  43 => 17,  41 => 16,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
