<?php

/* OroCRMCallBundle:Dashboard:recentCalls.html.twig */
class __TwigTemplate_3f6560ce8caed6e2b6f3213adf22e254c14f8a12283b4c312bb38328688e2540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroCRMCallBundle:Dashboard:recentCalls.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCRMCallBundle:Dashboard:recentCalls.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid("dashboard-recent-calls-grid");
        echo "
";
    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["actions"] = array(0 => array("url" => $this->env->getExtension('routing')->getPath("orocrm_call_index"), "type" => "link", "label" => $this->env->getExtension('translator')->trans("orocrm.dashboard.recent_calls.view_all")));
        // line 14
        echo "
    ";
        // line 15
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCRMCallBundle:Dashboard:recentCalls.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  48 => 14,  45 => 9,  42 => 8,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }
}
