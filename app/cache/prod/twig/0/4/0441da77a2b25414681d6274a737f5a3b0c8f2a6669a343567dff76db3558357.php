<?php

/* OroUserBundle::layout.html.twig */
class __TwigTemplate_0441da77a2b25414681d6274a737f5a3b0c8f2a6669a343567dff76db3558357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'messages' => array($this, 'block_messages'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"";
        // line 2
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            echo "mobile";
        } else {
            echo "desktop";
        }
        echo "-version\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("scripts_after", $context)) ? (_twig_default_filter((isset($context["scripts_after"]) ? $context["scripts_after"] : null), "scripts_after")) : ("scripts_after")), array());
        // line 26
        echo "</head>
<body class=\"";
        // line 27
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            echo "mobile";
        } else {
            echo "desktop";
        }
        echo "-version ";
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
    <div id=\"page\">
        <div id=\"top-page\">
            ";
        // line 30
        ob_start();
        // line 31
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 33
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 34
                    echo "                    <div class=\"alert";
                    echo twig_escape_filter($this->env, (($context["type"]) ? ((" alert-" . $context["type"])) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 35
                    echo $this->env->getExtension('translator')->trans($context["message"]);
                    echo "
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            ";
        }
        // line 40
        echo "            ";
        $context["messagesContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('messages', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "
            ";
        // line 49
        $this->displayBlock('main', $context, $blocks);
        // line 53
        echo "        </div>
    </div>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <title>";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render(), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=no\">

    ";
        // line 8
        if ($this->env->getExtension('oro_theme')->getThemeIcon()) {
            // line 9
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeIcon()), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("head_style", $context)) ? (_twig_default_filter((isset($context["head_style"]) ? $context["head_style"] : null), "head_style")) : ("head_style")), array());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "OroUserBundle::layout.html.twig", 14)->display(array_merge($context, array("compressed" =>  !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array()))));
        // line 15
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'oroui/js/init-layout'],
        function(\$) {
            \$(function() {
                // emulates 'document ready state' for selenium tests
                document['page-rendered'] = true;
            });
        });
    </script>
    ";
    }

    // line 27
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 42
    public function block_messages($context, array $blocks = array())
    {
        // line 43
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["messagesContent"]) ? $context["messagesContent"] : null), "html", null, true);
        echo "
            ";
    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        // line 47
        echo "            ";
    }

    // line 49
    public function block_main($context, array $blocks = array())
    {
        // line 50
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "            ";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "                ";
    }

    public function getTemplateName()
    {
        return "OroUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 51,  194 => 50,  190 => 52,  187 => 50,  184 => 49,  180 => 47,  177 => 46,  170 => 43,  167 => 42,  162 => 27,  149 => 15,  147 => 14,  144 => 13,  142 => 12,  139 => 11,  133 => 9,  131 => 8,  124 => 5,  121 => 4,  113 => 53,  111 => 49,  108 => 48,  106 => 46,  103 => 45,  101 => 42,  98 => 41,  95 => 40,  92 => 39,  86 => 38,  77 => 35,  72 => 34,  67 => 33,  62 => 32,  59 => 31,  57 => 30,  45 => 27,  42 => 26,  39 => 25,  37 => 4,  28 => 2,  25 => 1,);
    }
}
