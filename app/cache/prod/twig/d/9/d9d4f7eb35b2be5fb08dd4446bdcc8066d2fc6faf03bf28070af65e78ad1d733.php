<?php

/* OroDataGridBundle:js:grid-view-label.html.twig */
class __TwigTemplate_d9d4f7eb35b2be5fb08dd4446bdcc8066d2fc6faf03bf28070af65e78ad1d733 extends Twig_Template
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
        echo "<script type=\"text/template\" id=\"template-datagrid-grid-view-label\">
    <% if (navbar) { %>
        <h1 class=\"oro-subtitle\"><%= title %><span class=\"caret\"></span></h1>
    <% } else { %>
        <%= title %><span class=\"caret\"></span>
    <% } %>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:grid-view-label.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
