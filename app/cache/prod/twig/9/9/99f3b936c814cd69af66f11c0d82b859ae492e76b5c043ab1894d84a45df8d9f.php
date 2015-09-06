<?php

/* OroUIBundle:Default:logo.html.twig */
class __TwigTemplate_99f3b936c814cd69af66f11c0d82b859ae492e76b5c043ab1894d84a45df8d9f extends Twig_Template
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
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 2
            echo "    <div id=\"organization-switcher\">";
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("organization_selector", $context)) ? (_twig_default_filter((isset($context["organization_selector"]) ? $context["organization_selector"] : null), "organization_selector")) : ("organization_selector")), array());
            echo "</div>
";
        } else {
            // line 4
            echo "    <span id=\"main-menu-toggle\">
        <i class=\"icon-menu-bars\"></i>
    </span>
    <div id=\"organization-switcher\">";
            // line 7
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("organization_selector", $context)) ? (_twig_default_filter((isset($context["organization_selector"]) ? $context["organization_selector"] : null), "organization_selector")) : ("organization_selector")), array());
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  27 => 4,  21 => 2,  19 => 1,);
    }
}
