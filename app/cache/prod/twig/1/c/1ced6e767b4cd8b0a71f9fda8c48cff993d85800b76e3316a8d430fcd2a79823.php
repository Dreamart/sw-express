<?php

/* OroCRMAnalyticsBundle:Form:fields.html.twig */
class __TwigTemplate_1ced6e767b4cd8b0a71f9fda8c48cff993d85800b76e3316a8d430fcd2a79823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'orocrm_analytics_rfm_category_row' => array($this, 'block_orocrm_analytics_rfm_category_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('orocrm_analytics_rfm_category_row', $context, $blocks);
    }

    public function block_orocrm_analytics_rfm_category_row($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"rfm-settings-row\">
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category_index", array()), 'widget');
        echo "
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "min_value", array()), 'widget');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "max_value", array()), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCRMAnalyticsBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
