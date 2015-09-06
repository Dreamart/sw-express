<?php

/* OroConfigBundle::configPage.html.twig */
class __TwigTemplate_9f789feb916bbc9e99f94c86ac4f7194bbbb7ce4db52a8525ca3e1217272e6a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : null), "layout", array()), "OroConfigBundle::configPage.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        if ((isset($context["form"]) ? $context["form"] : null)) {
            // line 13
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "OroConfigBundle:Form:fields.html.twig", 1 => "OroFormBundle:Form:fields.html.twig", 2 => "OroLocaleBundle:Form:fields.html.twig"));
        }
        // line 15
        $context["navigationMacro"] = $this->loadTemplate("OroNavigationBundle:Include:contentTags.html.twig", "OroConfigBundle::configPage.html.twig", 15);
        // line 16
        $context["configUI"] = $this->loadTemplate("OroConfigBundle::macros.html.twig", "OroConfigBundle::configPage.html.twig", 16);
        // line 17
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroConfigBundle::configPage.html.twig", 17);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["saveButton"] = $context["UI"]->getsaveAndCloseButton($this->env->getExtension('translator')->trans("oro.config.actions.save_settings"));
        // line 21
        echo "    ";
        $context["restoreButton"] = $context["UI"]->getbuttonType(array("type" => "reset", "label" => $this->env->getExtension('translator')->trans("oro.config.actions.restore_saved_values")));
        // line 22
        echo "    ";
        $context["options"] = array("pageReload" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 23
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_config", array()), (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : null)), "page_reload", array()), "el" => ("#" . $this->getAttribute($this->getAttribute(        // line 24
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array())));
        // line 26
        echo "    <form
        id=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\"
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
        action=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : null), "html", null, true);
        echo "\"
        method=\"post\"
        data-collect=\"true\"
        data-page-component-module=\"oroconfig/js/form/config-form\"
        data-page-component-options=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
        echo "\"
    >
        ";
        // line 36
        echo $context["configUI"]->getrenderTitleAndButtons((isset($context["pageTitle"]) ? $context["pageTitle"] : null), array(0 => (isset($context["restoreButton"]) ? $context["restoreButton"] : null), 1 => (isset($context["saveButton"]) ? $context["saveButton"] : null)));
        echo "
        ";
        // line 37
        echo $context["configUI"]->getrenderScrollData((isset($context["data"]) ? $context["data"] : null), (isset($context["form"]) ? $context["form"] : null), (isset($context["activeGroup"]) ? $context["activeGroup"] : null), (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : null), (isset($context["routeName"]) ? $context["routeName"] : null), (isset($context["routeParameters"]) ? $context["routeParameters"] : null));
        echo "
    </form>
    ";
        // line 39
        echo $this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : null));
        echo "
    ";
        // line 40
        echo $context["navigationMacro"]->getnavigationContentTags(array("name" => "system_configuration", "params" => array(0 => (isset($context["activeGroup"]) ? $context["activeGroup"] : null), 1 => (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroConfigBundle::configPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  89 => 39,  84 => 37,  80 => 36,  75 => 34,  68 => 30,  64 => 29,  60 => 28,  56 => 27,  53 => 26,  51 => 24,  50 => 23,  48 => 22,  45 => 21,  42 => 20,  39 => 19,  35 => 1,  33 => 17,  31 => 16,  29 => 15,  26 => 13,  24 => 12,  18 => 1,);
    }
}
