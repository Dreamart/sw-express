<?php

/* OroCRMCaseBundle:Form:fields.html.twig */
class __TwigTemplate_5c6196189769ff822fd0dd4feb317d5619d11ec2ee390bef246cceb347680aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'orocrm_case_mailbox_process_settings_widget' => array($this, 'block_orocrm_case_mailbox_process_settings_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('orocrm_case_mailbox_process_settings_widget', $context, $blocks);
    }

    public function block_orocrm_case_mailbox_process_settings_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "OroTagBundle:Form:fields.html.twig", 1 => $this));
        // line 3
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCRMCaseBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }
}
