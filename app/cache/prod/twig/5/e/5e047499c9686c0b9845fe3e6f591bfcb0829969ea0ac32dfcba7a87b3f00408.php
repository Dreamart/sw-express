<?php

/* OroCalendarBundle:CalendarEvent:reminderTemplate.html.twig */
class __TwigTemplate_5e047499c9686c0b9845fe3e6f591bfcb0829969ea0ac32dfcba7a87b3f00408 extends Twig_Template
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
        echo "<script type=\"text/html\" class=\"reminder_templates\" data-identifier=\"calendar_event_template\">
    <% if (url != '') { %>
    <span><a class=\"hash-navigation-link\" href=\"<%= url %>\"><%= subject %></a> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.calendar.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } else { %>
    <span><%= subject %>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.calendar.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } %>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent:reminderTemplate.html.twig";
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
