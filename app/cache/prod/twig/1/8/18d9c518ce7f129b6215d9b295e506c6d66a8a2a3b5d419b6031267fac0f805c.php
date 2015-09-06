<?php

/* OroEntityBundle:Form:fields.html.twig */
class __TwigTemplate_18d9c518ce7f129b6215d9b295e506c6d66a8a2a3b5d419b6031267fac0f805c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_oro_entity_config_type_view_priority_widget' => array($this, 'block__oro_entity_config_type_view_priority_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_oro_entity_config_type_view_priority_widget', $context, $blocks);
    }

    public function block__oro_entity_config_type_view_priority_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    <script type=\"text/javascript\">
        require(['jquery', 'underscore'], function (\$, _) {
            \$(function () {
                var displayable = \$('#";
        // line 7
        echo twig_escape_filter($this->env, strtr((isset($context["id"]) ? $context["id"] : null), array((isset($context["name"]) ? $context["name"] : null) => "is_displayable")), "html", null, true);
        echo "');
                displayable
                    .on('change', _.bind(function () {
                        \$('#";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').attr('disabled', displayable.val() == 0);
                    }))
                    .trigger('change');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  35 => 7,  26 => 2,  20 => 1,);
    }
}
