<?php

/* OroUserBundle:User:Autocomplete/result.html.twig */
class __TwigTemplate_1de48bd57023dd229616854432c73855a12ee3bee6ec7ea93ed74b0e168df85f extends Twig_Template
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
        echo "<% } %>\" width=\"16\" height=\"16\" />&nbsp;<%= highlight(_.escape(fullName)) %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:Autocomplete/result.html.twig";
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
