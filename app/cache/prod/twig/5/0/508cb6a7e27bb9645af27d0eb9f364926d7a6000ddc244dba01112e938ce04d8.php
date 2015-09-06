<?php

/* OroDashboardBundle:Js:items.html.twig */
class __TwigTemplate_508cb6a7e27bb9645af27d0eb9f364926d7a6000ddc244dba01112e938ce04d8 extends Twig_Template
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
        echo "<script id=\"widget-items-item-select-template\" type=\"text/template\">
    <div class=\"pull-left items-selector-widget\">
        <select class=\"item-select filter-select-oro\">
            <option></option>
            <% items.each(function (item) { %>
                <option value=\"<%= item.get('id') %>\"><%= item.get('label') %></option>
            <% }); %>
        </select>
    </div>
</script>

<script id=\"widget-items-item-template\" type=\"text/template\">
    <tr data-cid=\"<%= cid %>\">
        <td><%= label %></td>
        <td class=\"action-cell\">
            <input type=\"hidden\" name=\"<%= namePrefix %>[id]\" value=\"<%= id %>\">
            <input data-name=\"order\" type=\"hidden\" class=\"order\" name=\"<%= namePrefix %>[order]\" value=\"<%= order %>\">
            <input class=\"hide\" data-name=\"show\" type=\"checkbox\" name=\"<%= namePrefix %>[show]\" <%= show ? 'checked' : '' %>>
            <a href=\"javascript: void(0);\" class=\"action no-hash delete-button\"
                    title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.actions.delete.label"), "html", null, true);
        echo "\"
                    data-collection-action=\"delete\">
                <i class=\"icon-trash hide-text\"></i>
            </a>
            <span title=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.actions.move_column.label"), "html", null, true);
        echo "\">
                <i class=\"icon-list handle\"></i>
            </span>
        </td>
    </tr>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Js:items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  40 => 20,  19 => 1,);
    }
}
