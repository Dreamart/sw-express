<?php

/* OroTranslationBundle:Form:fields.html.twig */
class __TwigTemplate_8dbf5521a76a1732113ff905fefdbe74bbde1a0c42f542a3f3b3fa9d6ee8d8c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_translation_available_translations_widget' => array($this, 'block_oro_translation_available_translations_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('oro_translation_available_translations_widget', $context, $blocks);
    }

    public function block_oro_translation_available_translations_widget($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div class=\"available-translation-widget-container\">
        ";
        // line 7
        echo $this->env->getExtension('oro_widget')->render($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('routing')->getPath("oro_translation_available_translations"), "alias" => "oro_translation_available_translations"));
        // line 11
        echo "
    </div>
    <p class=\"available-translation-widget-note\">
        <sup>1&nbsp;</sup>";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Translation coverage indicator relates to translation package volume. Some bundles may still not be translated.", array(), "messages");
        // line 15
        echo "    </p>
    <script type=\"text/javascript\">
        require(['jquery', 'orotranslation/js/translation/config-action', 'oroui/js/widget-manager'],
        function (\$, ActionPerformer, widgetManager) {
            \$('.available-translation-widget-container')
                .parents('.controls.control-subgroup')
                .removeClass('controls')
                .removeClass('control-subgroup')
                .end()
                .parents('.control-group')
                .addClass('available-translation-widget-control-group')
            ;

            widgetManager.getWidgetInstanceByAlias('oro_translation_available_translations', function (widget) {
                new ActionPerformer({el: ";
        // line 29
        echo twig_jsonencode_filter(("#" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array())));
        echo "});
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 29,  41 => 15,  39 => 14,  34 => 11,  32 => 7,  26 => 5,  20 => 4,);
    }
}
