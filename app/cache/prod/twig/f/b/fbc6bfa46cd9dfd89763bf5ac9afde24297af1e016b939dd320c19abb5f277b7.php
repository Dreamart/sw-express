<?php

/* OroNavigationBundle:Js:requirejs.config.js.twig */
class __TwigTemplate_fbc6bfa46cd9dfd89763bf5ac9afde24297af1e016b939dd320c19abb5f277b7 extends Twig_Template
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
        echo "require({
    shim: {
        'oro/routes': {
            deps: ['routing'],
            init: function(routing) {
                ";
        // line 6
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 7
            echo "                    ";
            // line 8
            echo "                    ";
            $context["data"] = array("base_url" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "baseUrl", array()), "scheme" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "scheme", array()), "host" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "host", array()));
            // line 9
            echo "                    var data = ";
            echo twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : null));
            echo ";
                    data.routes = routing.getRoutes();
                    fos.Router.setData(data);
                ";
        }
        // line 13
        echo "                return routing;
            }
        }
    },
    map: {
        '*': {
            'routing': 'oro/routes'
        },
        'oro/routes': {
            'routing': 'routing'
        }
    },
    paths: {
    ";
        // line 26
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 27
            echo "        'oro/routes': '";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "js", null, true);
            echo "'
    ";
        } else {
            // line 29
            echo "        'oro/routes': '../js/routes'
    ";
        }
        // line 31
        echo "    }
});
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 31,  64 => 29,  58 => 27,  56 => 26,  41 => 13,  33 => 9,  30 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
