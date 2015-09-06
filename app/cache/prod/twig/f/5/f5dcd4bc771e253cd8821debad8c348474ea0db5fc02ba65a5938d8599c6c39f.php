<?php

/* OroPlatformBundle::have_request.html.twig */
class __TwigTemplate_f5dcd4bc771e253cd8821debad8c348474ea0db5fc02ba65a5938d8599c6c39f extends Twig_Template
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
        echo "<script>
    require(['jquery'], function (\$) {
        \$(function () {
            var options = {
                dataType: 'script',
                cache:     true,
                url:       ";
        // line 7
        echo twig_jsonencode_filter(($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "scheme", array()) . "://crm.orocrm.com/bundles/orocrmrequest/js/embed.form.js"));
        echo ",
                timeout:   2000
            };

            \$.ajax(options).done(function() {
                var options = {
                    version: ";
        // line 13
        echo twig_jsonencode_filter($this->env->getExtension('oro_platform')->getVersion());
        echo "
                };
                new ORO.EmbedRequestForm(options);
            }).error(function() {
                if (typeof(console) != 'undefined' && console.hasOwnProperty('error')) {
                    console.error('Unable to load external script.');
                }
            });
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroPlatformBundle::have_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  27 => 7,  19 => 1,);
    }
}
