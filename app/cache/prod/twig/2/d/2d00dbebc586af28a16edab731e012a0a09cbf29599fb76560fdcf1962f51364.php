<?php

/* OroNavigationBundle:Js:dot.menu.js.twig */
class __TwigTemplate_2d00dbebc586af28a16edab731e012a0a09cbf29599fb76560fdcf1962f51364 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-dot-menu-item\">
    <button class=\"close\" type=\"button\">&times;</button><a href=\"<%= url %>\"><%- title_rendered %></a>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:dot.menu.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
