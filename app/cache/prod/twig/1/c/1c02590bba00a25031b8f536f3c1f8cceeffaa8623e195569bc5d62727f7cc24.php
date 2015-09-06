<?php

/* OroCalendarBundle::invitations.html.twig */
class __TwigTemplate_1c02590bba00a25031b8f536f3c1f8cceeffaa8623e195569bc5d62727f7cc24 extends Twig_Template
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
        // line 13
        echo "
";
        // line 36
        echo "
";
        // line 46
        echo "
";
    }

    // line 1
    public function getcalendar_event_invitation($__parentEvent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parentEvent" => $__parentEvent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
            <ul class=\"user-status-list list-group\">
                ";
            // line 5
            echo $this->getAttribute($this, "build_invitation_link", array(0 => (isset($context["parentEvent"]) ? $context["parentEvent"] : null)), "method");
            echo "
                ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parentEvent"]) ? $context["parentEvent"] : null), "childEvents", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 7
                echo "                    ";
                echo $this->getAttribute($this, "build_invitation_link", array(0 => $context["event"]), "method");
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </ul>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getbuild_invitation_link($__calendarEvent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "calendarEvent" => $__calendarEvent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::invitations.html.twig", 15);
            // line 16
            echo "        ";
            $context["invitationStatus"] = $this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : null), "invitationStatus", array());
            // line 17
            echo "        ";
            $context["invitationClass"] = $this->getAttribute($this, "get_invitatition_status_class", array(0 => (isset($context["invitationStatus"]) ? $context["invitationStatus"] : null)), "method");
            // line 18
            echo "        <li class=\"list-group-item\">
            ";
            // line 19
            if ( !twig_test_empty((isset($context["invitationClass"]) ? $context["invitationClass"] : null))) {
                // line 20
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, (isset($context["invitationClass"]) ? $context["invitationClass"] : null), "html", null, true);
                echo "\" title=\"";
                echo $this->getAttribute($this, "calendar_event_invitation_status", array(0 => (isset($context["invitationStatus"]) ? $context["invitationStatus"] : null)), "method");
                echo "\"></i>
            ";
            }
            // line 22
            echo "            ";
            $context["avatar"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : null), "calendar", array()), "owner", array()), "avatar", array());
            // line 23
            echo "            <span class=\"list-group-item-text\">
                <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, (((isset($context["avatar"]) ? $context["avatar"] : null)) ? ($this->env->getExtension('oro_attachment_file')->getFilteredImageUrl((isset($context["avatar"]) ? $context["avatar"] : null), "avatar_xsmall")) : ($this->env->getExtension('asset')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"))), "html", null, true);
            echo "\" />
                ";
            // line 25
            if (($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_user_view") && $this->getAttribute($this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : null), "calendar", array()), "owner", array()))) {
                // line 26
                echo "                    ";
                echo $context["UI"]->getlink(array("label" => $this->env->getExtension('oro_entity')->getEntityName($this->getAttribute($this->getAttribute(                // line 27
(isset($context["calendarEvent"]) ? $context["calendarEvent"] : null), "calendar", array()), "owner", array())), "path" => $this->env->getExtension('routing')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 28
(isset($context["calendarEvent"]) ? $context["calendarEvent"] : null), "calendar", array()), "owner", array()), "id", array())))));
                // line 29
                echo "
                ";
            } else {
                // line 31
                echo "                    ";
                echo (($this->getAttribute($this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : null), "calendar", array()), "owner", array())) ? ($this->env->getExtension('oro_entity')->getEntityName($this->getAttribute($this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : null), "calendar", array()), "owner", array()))) : (""));
                echo "
                ";
            }
            // line 33
            echo "            </span>
        </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getget_invitatition_badge_class($__invitationStatus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "invitationStatus" => $__invitationStatus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            if (((isset($context["invitationStatus"]) ? $context["invitationStatus"] : null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::TENTATIVELY_ACCEPTED"))) {
                // line 39
                echo "tentatively";
            } elseif ((            // line 40
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::ACCEPTED"))) {
                // line 41
                echo "enabled";
            } elseif ((            // line 42
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::DECLINED"))) {
                // line 43
                echo "disabled";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getget_invitatition_status_class($__invitationStatus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "invitationStatus" => $__invitationStatus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 48
            if (((isset($context["invitationStatus"]) ? $context["invitationStatus"] : null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::NOT_RESPONDED"))) {
                // line 49
                echo "icon-reply";
            } elseif ((            // line 50
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::TENTATIVELY_ACCEPTED"))) {
                // line 51
                echo "icon-question";
            } elseif ((            // line 52
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::ACCEPTED"))) {
                // line 53
                echo "icon-ok";
            } elseif ((            // line 54
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : null) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::DECLINED"))) {
                // line 55
                echo "icon-remove";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getcalendar_event_invitation_status($__statusCode__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "statusCode" => $__statusCode__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("oro.calendar.calendarevent.statuses." . (isset($context["statusCode"]) ? $context["statusCode"] : null))), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function getcalendar_event_invitation_action($__statusCode__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "statusCode" => $__statusCode__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("oro.calendar.calendarevent.actions." . (isset($context["statusCode"]) ? $context["statusCode"] : null))), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function getnotifyGuestsComponent(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 68
            echo "    <div style=\"display: none\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orocalendar/js/app/views/guest-notifier-view")), "html", null, true);
            echo "\">
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle::invitations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 70,  281 => 68,  270 => 67,  259 => 64,  247 => 63,  236 => 60,  224 => 59,  212 => 55,  210 => 54,  208 => 53,  206 => 52,  204 => 51,  202 => 50,  200 => 49,  198 => 48,  186 => 47,  174 => 43,  172 => 42,  170 => 41,  168 => 40,  166 => 39,  164 => 38,  152 => 37,  139 => 33,  133 => 31,  129 => 29,  127 => 28,  126 => 27,  124 => 26,  122 => 25,  118 => 24,  115 => 23,  112 => 22,  104 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  90 => 15,  78 => 14,  64 => 9,  55 => 7,  51 => 6,  47 => 5,  42 => 2,  30 => 1,  25 => 46,  22 => 36,  19 => 13,);
    }
}
