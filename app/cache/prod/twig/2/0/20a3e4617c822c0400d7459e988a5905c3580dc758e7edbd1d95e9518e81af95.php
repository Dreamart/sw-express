<?php

/* OroDataGridBundle:js:view-name-modal.html.twig */
class __TwigTemplate_20a3e4617c822c0400d7459e988a5905c3580dc758e7edbd1d95e9518e81af95 extends Twig_Template
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
        echo "<script type=\"text/template\" id=\"template-datagrid-view-name-modal\">
    <div class=\"form-horizontal\">
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"gridViewName\"><%= label %>:</label>
            <div class=\"controls\">
                <input id=\"gridViewName\" name=\"name\" type=\"text\" value=\"<%= value %>\">
            </div>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"template-datagrid-view-name-error-modal\">
    <span for=\"gridViewName\" class=\"validation-failed\"><%= error %></span>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:view-name-modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
