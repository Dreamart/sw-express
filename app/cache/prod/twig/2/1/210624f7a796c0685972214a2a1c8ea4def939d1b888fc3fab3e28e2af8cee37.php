<?php

/* OroUserBundle:User:Autocomplete/selection.html.twig */
class __TwigTemplate_210624f7a796c0685972214a2a1c8ea4def939d1b888fc3fab3e28e2af8cee37 extends Twig_Template
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
        echo "<img src=\"<% if (avatar) { %><%= avatar %><% } else { %>";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" width=\"16\" height=\"16\" />&nbsp;<%= _.escape(fullName) %>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:Autocomplete/selection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
