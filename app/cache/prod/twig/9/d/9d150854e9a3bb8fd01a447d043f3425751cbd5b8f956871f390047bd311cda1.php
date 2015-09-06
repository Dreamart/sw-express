<?php

/* OroNavigationBundle:HashNav:hashNavAjax.html.twig */
class __TwigTemplate_9d150854e9a3bb8fd01a447d043f3425751cbd5b8f956871f390047bd311cda1 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    ";
        echo twig_jsonencode_filter($this->env->getExtension('oro_ui.content')->getContent(((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) ? $context["data"] : null), array())) : (array()))));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:HashNav:hashNavAjax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
