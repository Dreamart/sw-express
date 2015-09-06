<?php

/* OroTranslationBundle::requirejs.config.js.twig */
class __TwigTemplate_cef4df51234d89b8314c7a6fe09753635c7b9638aa8c08578cf8195f66a205e4 extends Twig_Template
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
        echo "require({
    shim: {
        'oro/translations': {
            deps: ['orotranslation/js/translator', 'translator'],
            init: function(__) {
                return __;
            }
        }
    },
    map: {
        '*': {
            'orotranslation/js/translator': 'oro/translations'
        },
        'oro/translations': {
            'orotranslation/js/translator': 'orotranslation/js/translator'
        }
    },
    paths: {
        'oro/translations': '";
        // line 19
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->env->getExtension('routing')->getUrl("oro_translation_jstranslation"), 0,  -3), "js", null, true);
        echo "'
    },
    config: {
        'orotranslation/js/translator': {
            'debugTranslator': ";
        // line 23
        echo twig_jsonencode_filter(call_user_func_array($this->env->getFunction('oro_translation_debug_translator')->getCallable(), array()));
        echo "
        }
    }
});
";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  39 => 19,  19 => 1,);
    }
}
