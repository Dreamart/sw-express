<?php

/* OroOrganizationBundle::owner.html.twig */
class __TwigTemplate_191d979c03a059fab691b568043de8081623f1aab93292eb09c08fd6c8e7b22c extends Twig_Template
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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array(), "any", true, true)) {
            // line 2
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array()), "vars", array()), "label", array()) == "oro.organization.businessunit.parent.label")) {
                // line 3
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array()), 'row');
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array()), 'row', array("label" => (( !((isset($context["label"]) ? $context["label"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : (""))));
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle::owner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
