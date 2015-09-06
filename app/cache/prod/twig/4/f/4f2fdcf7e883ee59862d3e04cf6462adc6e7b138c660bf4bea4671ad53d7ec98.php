<?php

/* OroCalendarBundle:Dashboard:myCalendar.html.twig */
class __TwigTemplate_4f2fdcf7e883ee59862d3e04cf6462adc6e7b138c660bf4bea4671ad53d7ec98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroCalendarBundle:Dashboard:myCalendar.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["calendarTemplates"] = $this->loadTemplate("OroCalendarBundle::templates.html.twig", "OroCalendarBundle:Dashboard:myCalendar.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["dashboardCalendarOptions"] = array("widgetId" =>         // line 6
(isset($context["widgetId"]) ? $context["widgetId"] : null), "calendar" => $this->getAttribute(        // line 7
(isset($context["entity"]) ? $context["entity"] : null), "id", array()), "aspectRatio" => 2, "calendarOptions" =>         // line 9
(isset($context["calendar"]) ? $context["calendar"] : null), "eventsItemsJson" => $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("oro_api_get_calendarevents", array("calendar" => $this->getAttribute(        // line 10
(isset($context["entity"]) ? $context["entity"] : null), "id", array()), "start" => twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : null), "c"), "end" => twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : null), "c"), "subordinate" => true))), "connectionsItemsJson" => $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("oro_api_get_calendar_connections", array("id" => $this->getAttribute(        // line 11
(isset($context["entity"]) ? $context["entity"] : null), "id", array())))), "eventsOptions" => array("defaultDate" => twig_date_format_filter($this->env, "now", "c", call_user_func_array($this->env->getFunction('oro_timezone')->getCallable(), array())), "containerSelector" => ".calendar-events", "itemViewTemplateSelector" => ("#template-view-calendar-event-" .         // line 15
(isset($context["widgetId"]) ? $context["widgetId"] : null)), "itemFormTemplateSelector" => ("#template-calendar-event-" .         // line 16
(isset($context["widgetId"]) ? $context["widgetId"] : null)), "defaultView" => "agendaDay", "firstHour" =>         // line 18
(isset($context["firstHour"]) ? $context["firstHour"] : null), "aspectRatio" => 2), "connectionsOptions" => array(), "colorManagerOptions" => array("colors" => $this->env->getExtension('config_extension')->getConfigValue("oro_calendar.calendar_colors")));
        // line 27
        echo "    <div class=\"calendar-dashboard-widget\" data-page-component-module=\"orocalendar/js/app/components/dashboard-calendar-component\"
         data-page-component-options=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["dashboardCalendarOptions"]) ? $context["dashboardCalendarOptions"] : null)), "html", null, true);
        echo "\">
        <div class=\"calendar-events\"></div>
    </div>
    ";
        // line 31
        echo $context["calendarTemplates"]->getcalendar_event_view_template(("template-view-calendar-event-" . (isset($context["widgetId"]) ? $context["widgetId"] : null)));
        echo "
    ";
        // line 32
        echo $context["calendarTemplates"]->getcalendar_event_form_template(("template-calendar-event-" . (isset($context["widgetId"]) ? $context["widgetId"] : null)), (isset($context["event_form"]) ? $context["event_form"] : null));
        echo "
";
    }

    // line 35
    public function block_actions($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context["actions"] = array(0 => array("icon" => "plus-sign", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.calendar.new_event"), "data" => array("action-name" => "new-event")), 1 => array("type" => "link", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.calendar.view_calendar"), "url" => $this->env->getExtension('routing')->getPath("oro_calendar_view_default")));
        // line 48
        echo "
    ";
        // line 49
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Dashboard:myCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 49,  71 => 48,  68 => 36,  65 => 35,  59 => 32,  55 => 31,  49 => 28,  46 => 27,  44 => 18,  43 => 16,  42 => 15,  41 => 11,  40 => 10,  39 => 9,  38 => 7,  37 => 6,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }
}
