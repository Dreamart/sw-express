<?php

/* OroSyncBundle::sync_js.html.twig */
class __TwigTemplate_37e89d309052d68db6724163230730d00e422dd2483563ee0284bae7591b61c8 extends Twig_Template
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
        if ($this->env->getExtension('sync_extension')->checkWsConnected()) {
            // line 2
            echo "<script type=\"text/javascript\">
    require(['jquery', 'orosync/js/sync', 'orosync/js/sync/wamp'],
    function(\$, sync, Wamp){
        \$(document).on('click.action.data-api', '[data-action=sync-connect]', function (e) {
            sync.reconnect();
            \$(e.target).closest('.alert').alert('close');
            e.preventDefault();
        });

        sync(new Wamp({
            secure: ";
            // line 12
            echo (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "get", array(0 => "X-Forwarded-Proto"), "method") == "https") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isSecure", array(), "method"))) ? ("true") : ("false"));
            echo ",
            host: '";
            // line 13
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["ws"]) ? $context["ws"] : null), "host", array()) == "*")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "get", array(0 => "host"), "method")) : ($this->getAttribute((isset($context["ws"]) ? $context["ws"] : null), "host", array()))), "html", null, true);
            echo "',
            port: ";
            // line 14
            echo twig_jsonencode_filter($this->getAttribute((isset($context["ws"]) ? $context["ws"] : null), "port", array()));
            echo ",
            maxRetries: 3,
            retryDelay: 30000
        }));
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroSyncBundle::sync_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 14,  37 => 13,  33 => 12,  21 => 2,  19 => 1,);
    }
}
