<?php

/* OroReminderBundle:Form:fields.html.twig */
class __TwigTemplate_ee23215be45462d2ee53384c7fc081129940b035e110e6ac96de2f8260681c47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_reminder_collection_widget' => array($this, 'block_oro_reminder_collection_widget'),
            'oro_reminder_widget' => array($this, 'block_oro_reminder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_reminder_collection_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('oro_reminder_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_reminder_collection_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["class"] = "reminders-collection";
        // line 3
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . (isset($context["class"]) ? $context["class"] : null))) : ((isset($context["class"]) ? $context["class"] : null)))));
        // line 4
        echo "    ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    ";
        // line 5
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "_collection");
    }

    // line 8
    public function block_oro_reminder_widget($context, array $blocks = array())
    {
        // line 9
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <div class=\"method inline-field\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array()), 'widget');
        echo "
        </div>
        <div class=\"number inline-field\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interval", array()), "number", array()), 'widget');
        echo "
        </div>
        <div class=\"unit inline-field\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "interval", array()), "unit", array()), 'widget');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  63 => 14,  57 => 11,  51 => 9,  48 => 8,  44 => 5,  39 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 8,  23 => 7,  21 => 1,);
    }
}
