<?php

/* OroCRMTaskBundle:Task:reminderTemplate.html.twig */
class __TwigTemplate_686f683dc412ff4de6bf852362fc7c2a8d662078d75551d68979e2d5d3c18638 extends Twig_Template
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
        echo "<script type=\"text/html\" class=\"reminder_templates\" data-identifier=\"task_template\">
<% if (url != '') { %>
    <span><a class=\"hash-navigation-link\" href=\"<%= url %>\"><%= subject %></a> is due on <%= expireAt %></span>
<% } else { %>
    <span><%= subject %> is due on <%= expireAt %></span>
<% } %>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroCRMTaskBundle:Task:reminderTemplate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
