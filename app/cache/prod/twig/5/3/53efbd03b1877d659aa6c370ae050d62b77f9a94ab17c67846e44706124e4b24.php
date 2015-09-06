<?php

/* OroUIBundle::requirejs.config.js.twig */
class __TwigTemplate_53efbd03b1877d659aa6c370ae050d62b77f9a94ab17c67846e44706124e4b24 extends Twig_Template
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
        $context["userName"] = null;
        // line 2
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 3
            $context["userName"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array());
        }
        // line 5
        if ((isset($context["assets_version"]) ? $context["assets_version"] : null)) {
            // line 6
            echo "require({
    urlArgs: 'version=";
            // line 7
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["assets_version"]) ? $context["assets_version"] : null), "url"), "js", null, true);
            echo "'
});";
        }
        // line 10
        echo "require({
    config: {
        'oroui/js/app': {
            baseUrl: ";
        // line 13
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"));
        echo ",
            headerId: ";
        // line 14
        echo twig_jsonencode_filter($this->env->getExtension('oro_hash_nav')->getHashNavigationHeaderConst());
        echo ",
            userName: ";
        // line 15
        echo twig_jsonencode_filter((isset($context["userName"]) ? $context["userName"] : null));
        echo ",
            root: ";
        // line 16
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBaseURL", array(), "method"));
        echo " + '\\/',
            startRouteName: ";
        // line 17
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_master_request_route"), "method"));
        echo ",
            debug: Boolean(";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array()), "js", null, true);
        echo "),
            skipRouting: '[data-nohash=true], .no-hash',
            controllerPath: 'controllers/',
            controllerSuffix: '-controller',
            // preserves url path as it is (does not add/remove trailing slash)
            trailing: null
        }
    }
});
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  36 => 10,  31 => 7,  28 => 6,  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
