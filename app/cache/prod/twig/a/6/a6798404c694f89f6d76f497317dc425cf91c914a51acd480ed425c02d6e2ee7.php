<?php

/* {{ form_row(form.children['oro_ui___application_url']) }} */
class __TwigTemplate_a6798404c694f89f6d76f497317dc425cf91c914a51acd480ed425c02d6e2ee7 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "oro_ui___application_url", array(), "array"), 'row');
    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_ui___application_url']) }}";
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
