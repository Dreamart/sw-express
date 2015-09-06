<?php

/* {{ form_row(form.children['oro_locale___locale']) }} */
class __TwigTemplate_a1afe83b05ede710f1bc39139719684da27729bdec0a6a9e35c216310ba43262 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "oro_locale___locale", array(), "array"), 'row');
    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_locale___locale']) }}";
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
