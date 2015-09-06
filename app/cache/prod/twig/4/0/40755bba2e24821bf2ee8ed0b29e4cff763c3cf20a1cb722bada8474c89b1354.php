<?php

/* OroDataGridBundle:js:select-all-header-cell.html.twig */
class __TwigTemplate_40755bba2e24821bf2ee8ed0b29e4cff763c3cf20a1cb722bada8474c89b1354 extends Twig_Template
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
        echo "<script type=\"text/template\" id=\"template-select-all-header-cell\">
    <div class=\"btn-group dropdown\">
        <button class=\"btn btn-default btn-small dropdown-toggle\" data-toggle=\"dropdown\"><input type=\"checkbox\" data-select/>
            <i class=\"caret\"></i>
        </button>
        <ul class=\"dropdown-menu\">
            <li><a href=\"#\" data-select-all><%- _.__('oro.datagrid.headerCell.selectAll.all') %></a></li>
            <li class=\"all-visible\"><a href=\"#\" data-select-all-visible><%- _.__('oro.datagrid.headerCell.selectAll.allVisible') %></a></li>
            <li><a href=\"#\" data-select-none><%- _.__('oro.datagrid.headerCell.selectAll.none') %></a></li>
        </ul>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:select-all-header-cell.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
