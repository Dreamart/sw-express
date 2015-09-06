<?php

/* {{ form_row(form.children['oro_locale___language']) }} */
class __TwigTemplate_b2b80dd4f80e5a4a887f64e55c999d8f1b2d7e28d17076678e99709d39d5e705 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "oro_locale___language", array(), "array"), 'row');
    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_locale___language']) }}";
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
