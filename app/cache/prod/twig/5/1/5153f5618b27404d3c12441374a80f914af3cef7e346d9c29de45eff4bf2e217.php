<?php

/* OroRequireJSBundle::scripts.html.twig */
class __TwigTemplate_5153f5618b27404d3c12441374a80f914af3cef7e346d9c29de45eff4bf2e217 extends Twig_Template
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
        $context["compressed"] = ((array_key_exists("compressed", $context)) ? ((isset($context["compressed"]) ? $context["compressed"] : null)) : (true));
        // line 2
        ob_start();
        // line 3
        echo "    require({
        baseUrl: ";
        // line 4
        echo twig_jsonencode_filter($this->getAttribute(twig_split_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles"), "?", 2), 0, array(), "array"));
        echo "
    });
    ";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("config_extend", $context)) ? (_twig_default_filter((isset($context["config_extend"]) ? $context["config_extend"] : null), "")) : ("")), "html", null, true);
        echo "
";
        $context["config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        if (((isset($context["compressed"]) ? $context["compressed"] : null) && call_user_func_array($this->env->getFunction('requirejs_build_exists')->getCallable(), array()))) {
            // line 9
            echo "    <script type=\"text/javascript\">
        var require = (function(){
            var r=function(c){m(r.c,c)};r.c={};function m(a,b){
                for (var i in b)b[i]!=null&&b[i].toString()==='[object Object]'?m(a[i]||(a[i]={}),b[i]):a[i]=b[i]}
            return r;
        }());
        ";
            // line 15
            echo (isset($context["config_extend"]) ? $context["config_extend"] : null);
            echo "
        require = require.c;
    </script>
    <script type=\"text/javascript\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(call_user_func_array($this->env->getFunction('get_requirejs_build_path')->getCallable(), array())), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 20
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ororequirejs/lib/require.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">
        ";
            // line 22
            echo call_user_func_array($this->env->getFunction('get_requirejs_config')->getCallable(), array());
            echo "
    </script>
    <script type=\"text/javascript\">
        ";
            // line 25
            echo (isset($context["config_extend"]) ? $context["config_extend"] : null);
            echo "
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroRequireJSBundle::scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  63 => 22,  57 => 20,  52 => 18,  46 => 15,  38 => 9,  36 => 8,  31 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
