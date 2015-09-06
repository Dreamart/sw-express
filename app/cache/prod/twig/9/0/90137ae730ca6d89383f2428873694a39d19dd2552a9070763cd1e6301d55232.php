<?php

/* OroSecurityBundle:Organization:current_name.html.twig */
class __TwigTemplate_90137ae730ca6d89383f2428873694a39d19dd2552a9070763cd1e6301d55232 extends Twig_Template
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
        $context["current_organization"] = $this->env->getExtension('oro_security_organization_extension')->getCurrentOrganization();
        // line 2
        if ((isset($context["current_organization"]) ? $context["current_organization"] : null)) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_organization"]) ? $context["current_organization"] : null), "name", array()), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroSecurityBundle:Organization:current_name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
