<?php

/* OroReminderBundle:Reminder:reminderDefault.html.twig */
class __TwigTemplate_aa73e2bb6fb00ee3ac2ebaa6d62b107018fd9c138a59db6381ce61501908e50e extends Twig_Template
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
        echo "<script type=\"text/html\" class=\"reminder_templates\" data-identifier=\"default\">
    <% if (url != '') { %>
    <span><a class=\"hash-navigation-link\" href=\"<%= url %>\"><%= subject %></a> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.reminder.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } else { %>
    <span><%= subject %>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.reminder.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } %>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Reminder:reminderDefault.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 3,  19 => 1,);
    }
}
