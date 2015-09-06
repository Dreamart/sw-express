<?php

/* OroCalendarBundle::templates.html.twig */
class __TwigTemplate_0f8bfea646882d0d76d278e2e8d23c5e1c1d69e524ea79a4b560c501d9f78db2 extends Twig_Template
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
        // line 34
        echo "
";
    }

    // line 1
    public function getcalendar_event_view_template($__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
    ";
            // line 3
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::templates.html.twig", 3);
            // line 4
            echo "    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
            // line 7
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.title.label"), "<%= formatter.string(title) %>");
            echo "
                ";
            // line 8
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.description.label"), "<%= formatter.text(description) %>");
            echo "
                ";
            // line 9
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.start.label"), "<%= formatter.dateTime(start) %>");
            echo "
                ";
            // line 10
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.end.label"), "<%= formatter.dateTime(end) %>");
            echo "
                ";
            // line 11
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.all_day.label"), "<%= formatter.bool(allDay) %>");
            echo "
            </div>
            <div class=\"widget-actions form-actions\" style=\"display: none;\">
                <% if (id != null && removable) { %>
                ";
            // line 15
            echo             // line 16
$context["UI"]->getdeleteButton(array("aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataMessage" => $this->env->getExtension('translator')->trans("oro.calendar.delete_event.confirmation"), "title" => $this->env->getExtension('translator')->trans("oro.calendar.delete_event.title"), "label" => $this->env->getExtension('translator')->trans("Delete"), "data" => array("action-name" => "delete")));
            // line 24
            echo "
                <% } %>
                <% if (id == null || (id != null && editable)) { %>
                <button class=\"btn\" type=\"button\" data-action-name=\"edit\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.ui.edit"), "html", null, true);
            echo "</button>
                <% } %>
            </div>
        </div>
    </div>
</script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 35
    public function getcalendar_event_form_template($__id__ = null, $__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 36
            echo "<script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
    ";
            // line 37
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::templates.html.twig", 37);
            // line 38
            echo "    ";
            $context["invitations"] = $this->loadTemplate("OroCalendarBundle::invitations.html.twig", "OroCalendarBundle::templates.html.twig", 38);
            // line 39
            echo "    ";
            $context["data"] = array(0 =>             // line 40
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'row'), 1 =>             // line 41
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row'), 2 =>             // line 42
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "start", array()), 'row'), 3 =>             // line 43
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "end", array()), 'row'), 4 =>             // line 44
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "allDay", array()), 'row'), 5 =>             // line 45
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "backgroundColor", array()), 'row'), 6 => (($this->getAttribute(            // line 46
(isset($context["form"]) ? $context["form"] : null), "calendarUid", array(), "any", true, true)) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calendarUid", array()), 'row')) : (null)), 7 => strtr(            // line 47
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "childEvents", array()), 'row'), array("childEvents" => "invitedUsers")), 8 =>             // line 48
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reminders", array()), 'row'), 9 =>             // line 49
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "notifyInvitedUsers", array()), 'row'));
            // line 52
            echo "    <div class=\"widget-content\">
        <div class=\"alert alert-error\" style=\"display: none;\"></div>
        <form id=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"#\">
            ";
            // line 55
            $context["options"] = array("view" => "orocalendar/js/app/views/calendar-event-form-view", "nativeMode" => $this->env->getExtension('mobile_extension')->isMobile());
            // line 59
            echo "            <div data-page-component-module=\"oroui/js/app/components/view-component\"
                 data-page-component-options=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
            echo "\"
                 data-layout=\"separate\">
                <fieldset class=\"form-horizontal\">
                    ";
            // line 63
            echo $this->env->getExtension('oro_ui.js_template')->prepareJsTemplateContent($context["UI"]->getscrollSubblock(null, (isset($context["data"]) ? $context["data"] : null), true, false));
            echo "
                    <% if (typeof notifiable !== 'undefined' && notifiable) { %>
                        ";
            // line 65
            echo $context["invitations"]->getnotifyGuestsComponent();
            echo "
                    <% } %>
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <% if (id != null && removable) { %>
                        ";
            // line 69
            echo             // line 70
$context["UI"]->getdeleteButton(array("aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataMessage" => $this->env->getExtension('translator')->trans("oro.calendar.delete_event.confirmation"), "title" => $this->env->getExtension('translator')->trans("oro.calendar.delete_event.title"), "label" => $this->env->getExtension('translator')->trans("Delete"), "data" => array("action-name" => "delete")));
            // line 78
            echo "
                        <% } %>
                        <button class=\"btn\" type=\"reset\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <% if (id == null || (id != null && editable)) { %>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
            echo "</button>
                        <% } %>
                    </div>
                </fieldset>
            </div>
        </form>
        ";
            // line 88
            echo $this->env->getExtension('oro_ui.js_template')->prepareJsTemplateContent($this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : null)));
            echo "
    </div>
</script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle::templates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 88,  178 => 82,  173 => 80,  169 => 78,  167 => 70,  166 => 69,  159 => 65,  154 => 63,  148 => 60,  145 => 59,  143 => 55,  137 => 54,  133 => 52,  131 => 49,  130 => 48,  129 => 47,  128 => 46,  127 => 45,  126 => 44,  125 => 43,  124 => 42,  123 => 41,  122 => 40,  120 => 39,  117 => 38,  115 => 37,  110 => 36,  97 => 35,  79 => 27,  74 => 24,  72 => 16,  71 => 15,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 4,  41 => 3,  36 => 2,  24 => 1,  19 => 34,);
    }
}
