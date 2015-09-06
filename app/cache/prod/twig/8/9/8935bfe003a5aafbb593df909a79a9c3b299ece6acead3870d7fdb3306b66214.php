<?php

/* OroUIBundle:Default:help.html.twig */
class __TwigTemplate_8935bfe003a5aafbb593df909a79a9c3b299ece6acead3870d7fdb3306b66214 extends Twig_Template
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
        echo "<li><a class=\"help no-hash\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_help')->getHelpLinkUrl(), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"icon-question-sign\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Get help"), "html", null, true);
        echo "\"></i></a></li>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
