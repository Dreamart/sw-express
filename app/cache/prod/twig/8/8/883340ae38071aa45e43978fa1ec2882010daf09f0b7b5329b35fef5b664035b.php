<?php

/* OroQueryDesignerBundle:Form:fields.html.twig */
class __TwigTemplate_883340ae38071aa45e43978fa1ec2882010daf09f0b7b5329b35fef5b664035b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_field_choice_row' => array($this, 'block_oro_field_choice_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_field_choice_row', $context, $blocks);
    }

    public function block_oro_field_choice_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 4
        $context["fieldConditionOptions"] = array("select2" => array("placeholder" => $this->env->getExtension('translator')->trans(        // line 6
(isset($context["placeholder"]) ? $context["placeholder"] : null))), "fieldsLoaderSelector" =>         // line 8
(isset($context["entity_choice_selector"]) ? $context["entity_choice_selector"] : null));
        // line 10
        echo "    <script type=\"text/javascript\">
        require(['oroentity/js/field-choice'], function (\$) {
            var \$field = \$('#";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
            \$field.fieldChoice(";
        // line 13
        echo twig_jsonencode_filter((isset($context["fieldConditionOptions"]) ? $context["fieldConditionOptions"] : null));
        echo ");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroQueryDesignerBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  40 => 12,  36 => 10,  34 => 8,  33 => 6,  32 => 4,  26 => 2,  20 => 1,);
    }
}
