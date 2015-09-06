<?php

/* OroReminderBundle:Reminder:subscribeScript.html.twig */
class __TwigTemplate_607d5fff4db5cf8650fed9a84294d3eaeca407d3afcf4e7a22fd552af35e05dd extends Twig_Template
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("oro_reminder_reminder_templates", $context)) ? (_twig_default_filter((isset($context["oro_reminder_reminder_templates"]) ? $context["oro_reminder_reminder_templates"] : null), "oro_reminder_reminder_templates")) : ("oro_reminder_reminder_templates")), array());
            // line 3
            echo "    <script type=\"text/javascript\">
        require(['ororeminder/js/reminder-handler'], function(reminderHandler) {
            reminderHandler.init(";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
            echo ", ";
            echo (($this->env->getExtension('sync_extension')->checkWsConnected()) ? ("true") : ("false"));
            echo ");
        });
    </script>
";
        }
        // line 9
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Reminder:subscribeScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
