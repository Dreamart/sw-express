<?php

/* OroReminderBundle:Reminder:showScript.html.twig */
class __TwigTemplate_3c3f9f10ab586a849aa6917d6a8afc7dd5b15dd908986a097d2f1cf899c029c7 extends Twig_Template
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
            echo "    <script type=\"text/javascript\">
        require(['ororeminder/js/reminder-handler'], function(reminderHandler) {
            reminderHandler.setReminders(";
            // line 4
            echo twig_jsonencode_filter($this->env->getExtension('oro_reminder.subscriber')->getRequestedRemindersData());
            echo ");
            reminderHandler.showReminders();
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Reminder:showScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
