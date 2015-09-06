<?php

/* {{ form_row(form.children['oro_locale___format_address_by_address_country']) }} */
class __TwigTemplate_297229ea4361578b3902a3dd076b451b9017a530fc23e0c5010b5de9895abf02 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "oro_locale___format_address_by_address_country", array(), "array"), 'row');
    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_locale___format_address_by_address_country']) }}";
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
