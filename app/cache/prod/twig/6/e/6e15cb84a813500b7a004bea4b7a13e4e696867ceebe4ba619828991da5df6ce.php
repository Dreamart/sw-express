<?php

/* OroCRMAccountBundle:Dashboard:myAccountsActivity.html.twig */
class __TwigTemplate_6e15cb84a813500b7a004bea4b7a13e4e696867ceebe4ba619828991da5df6ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroCRMAccountBundle:Dashboard:myAccountsActivity.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCRMAccountBundle:Dashboard:myAccountsActivity.html.twig", 2);
        // line 4
        $context["gridName"] = "dashboard-my-accounts-activity-grid";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : null));
        echo "
";
    }

    // line 10
    public function block_actions($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["actions"] = array(0 => array("url" => $this->env->getExtension('routing')->getPath("orocrm_account_index"), "type" => "link", "label" => $this->env->getExtension('translator')->trans("orocrm.dashboard.my_accounts_activity.view_all")));
        // line 16
        echo "
    ";
        // line 17
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCRMAccountBundle:Dashboard:myAccountsActivity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  50 => 16,  47 => 11,  44 => 10,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  26 => 2,  11 => 1,);
    }
}
