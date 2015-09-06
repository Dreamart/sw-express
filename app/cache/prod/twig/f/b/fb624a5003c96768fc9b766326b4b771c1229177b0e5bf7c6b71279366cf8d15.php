<?php

/* OroConfigBundle:Form:fields.html.twig */
class __TwigTemplate_fb624a5003c96768fc9b766326b4b771c1229177b0e5bf7c6b71279366cf8d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_config_form_field_type_widget' => array($this, 'block_oro_config_form_field_type_widget'),
            'oro_config_form_field_type_row' => array($this, 'block_oro_config_form_field_type_row'),
            'oro_config_parent_scope_checkbox_type_row' => array($this, 'block_oro_config_parent_scope_checkbox_type_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_config_form_field_type_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('oro_config_form_field_type_row', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('oro_config_parent_scope_checkbox_type_row', $context, $blocks);
    }

    // line 1
    public function block_oro_config_form_field_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["additionalOptions"] = array();
        // line 3
        echo "    ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_parent_scope_value", array(), "any", true, true)) {
            // line 4
            echo "        ";
            $context["additionalOptions"] = array("disabled" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_parent_scope_value", array()), "vars", array()), "data", array()) == true));
            // line 5
            echo "    ";
        }
        // line 6
        echo "    ";
        $context["valueContainerId"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "vars", array()), "id", array()) . "_container");
        // line 7
        echo "
    <div id=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["valueContainerId"]) ? $context["valueContainerId"] : null), "html", null, true);
        echo "\"
         class=\"controls control-subgroup";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), 'widget', (isset($context["additionalOptions"]) ? $context["additionalOptions"] : null));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), 'errors');
        echo "
    </div>

    ";
        // line 14
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_parent_scope_value", array(), "any", true, true)) {
            // line 15
            echo "        <div class=\"horizontal parent-scope-checkbox\">
            <div class=\"oro-clearfix\">
                ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_parent_scope_value", array()), 'row');
            echo "
            </div>
        </div>
    ";
        }
    }

    // line 23
    public function block_oro_config_form_field_type_row($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "label", array(), "any", true, true) ||  !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "label", array()))) {
            // line 25
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), 'row');
            echo "
    ";
        } else {
            // line 27
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row');
            echo "
    ";
        }
    }

    // line 31
    public function block_oro_config_parent_scope_checkbox_type_row($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroConfigBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  115 => 32,  112 => 31,  104 => 27,  98 => 25,  95 => 24,  92 => 23,  83 => 17,  79 => 15,  77 => 14,  71 => 11,  67 => 10,  61 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 31,  29 => 30,  27 => 23,  24 => 22,  22 => 1,);
    }
}
