<?php

/* OroDashboardBundle:Dashboard:dialog/configure.html.twig */
class __TwigTemplate_64571cdb434216f96e2e9bde7ab0d4fb68781c06f0f40ad8178e9337f495cd64 extends Twig_Template
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
        echo "<div class=\"widget-content widget-configuration\">
    ";
        // line 2
        if ((array_key_exists("saved", $context) && (isset($context["saved"]) ? $context["saved"] : null))) {
            // line 3
            echo "        <script type=\"text/javascript\">
            require(['underscore', 'orotranslation/js/translator', 'oroui/js/widget-manager', 'oroui/js/messenger', 'oroui/js/mediator'],
            function(_, __, widgetManager, messenger, mediator) {
                widgetManager.getWidgetInstance(";
            // line 6
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ", function(widget) {
                    messenger.notificationFlashMessage('success', __('oro.dashboard.widget_configuration_success'));

                    mediator.trigger('widget_success:' + widget.getWid());
                    mediator.trigger('widget_success:' + widget.getAlias());

                    widget.remove();
                });
            });
        </script>
    ";
        } else {
            // line 17
            echo "        <div class=\"form-container\">
            ";
            // line 18
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => (isset($context["formAction"]) ? $context["formAction"] : null)));
            echo "
                <fieldset class=\"form form-horizontal\">
                    ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            ";
            // line 26
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
            echo "
        </div>
    ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:dialog/configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  66 => 26,  60 => 23,  56 => 22,  51 => 20,  46 => 18,  43 => 17,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
