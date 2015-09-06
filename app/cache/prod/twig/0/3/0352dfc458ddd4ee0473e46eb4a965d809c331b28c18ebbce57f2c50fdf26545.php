<?php

/* {{ form_row(form.children['oro_translation___available_translations']) }} */
class __TwigTemplate_0352dfc458ddd4ee0473e46eb4a965d809c331b28c18ebbce57f2c50fdf26545 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "oro_translation___available_translations", array(), "array"), 'row');
    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_translation___available_translations']) }}";
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
