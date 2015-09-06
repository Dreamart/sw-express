<?php

/* OroDataGridBundle:js:action-header-cell.html.twig */
class __TwigTemplate_134fa6797b13209122e365adcef05ec8dde3d6816ac33a1ed6bbaca4a711ac63 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-datagrid-action-header-cell\">
    <div class=\"dropdown btn-group\">
        <button type=\"button\" class=\"btn btn-default btn-small dropdown-toggle\" data-toggle=\"dropdown\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.grid.mass_action.label"), "html", null, true);
        echo "\">
            <i class=\"icon-cog\"></i>
            <i class=\"caret\"></i>
        </button>
        <ul class=\"dropdown-menu\" data-action-panel></ul>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:action-header-cell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
