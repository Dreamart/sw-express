<?php

/* OroEmailBundle:Dashboard:recentEmails.html.twig */
class __TwigTemplate_7c05e5689974b5cb181caf04c226b8a25ae52032bec4232d26672cfea36a16a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:tabbedWidget.html.twig", "OroEmailBundle:Dashboard:recentEmails.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:tabbedWidget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["Email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Dashboard:recentEmails.html.twig", 2);
        // line 4
        if (((isset($context["unreadMailCount"]) ? $context["unreadMailCount"] : null) > 10)) {
            // line 5
            $context["unreadMailCount"] = ('' === $tmp = "        <div class=\"email-mail-count-circle\">10+</div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } else {
            // line 9
            ob_start();
            // line 10
            echo "        <div class=\"email-mail-count-circle\">";
            echo twig_escape_filter($this->env, (isset($context["unreadMailCount"]) ? $context["unreadMailCount"] : null), "html", null, true);
            echo "</div>
    ";
            $context["unreadMailCount"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["tabs"] = array(0 => array("url" => $this->env->getExtension('routing')->getPath("oro_email_dashboard_recent_emails", array("widget" =>         // line 18
(isset($context["widgetName"]) ? $context["widgetName"] : null), "activeTab" => "inbox", "contentType" => "tab")), "name" => "inbox", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.recent_emails.inbox")), 1 => array("url" => $this->env->getExtension('routing')->getPath("oro_email_dashboard_recent_emails", array("widget" =>         // line 26
(isset($context["widgetName"]) ? $context["widgetName"] : null), "activeTab" => "sent", "contentType" => "tab")), "name" => "sent", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.recent_emails.sent")), 2 => array("url" => $this->env->getExtension('routing')->getPath("oro_email_dashboard_recent_emails", array("widget" =>         // line 34
(isset($context["widgetName"]) ? $context["widgetName"] : null), "activeTab" => "new", "contentType" => "tab")), "name" => "unread", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.recent_emails.unread"), "afterHtml" =>         // line 38
(isset($context["unreadMailCount"]) ? $context["unreadMailCount"] : null)));
        // line 40
        echo "
    ";
        // line 41
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    // line 44
    public function block_actions($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $context["actions"] = array(0 => array("url" => $this->env->getExtension('routing')->getPath("oro_user_view", array("id" =>         // line 46
(isset($context["loggedUserId"]) ? $context["loggedUserId"] : null))), "type" => "link", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.recent_emails.view_all")));
        // line 50
        echo "
    ";
        // line 51
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Dashboard:recentEmails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 51,  73 => 50,  71 => 46,  69 => 45,  66 => 44,  60 => 41,  57 => 40,  55 => 38,  54 => 34,  53 => 26,  52 => 18,  50 => 15,  47 => 14,  43 => 1,  36 => 10,  34 => 9,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }
}
