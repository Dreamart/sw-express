<?php

/* OroEntityExtendBundle:Form:fields.html.twig */
class __TwigTemplate_f1aa3ef2ab28dbf8fdb112a16bc2cc07662e448fd2de3f7f1a0875d4ff0bd42f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_extend_enum_value_widget' => array($this, 'block_oro_entity_extend_enum_value_widget'),
            'oro_entity_extend_enum_value_collection_widget' => array($this, 'block_oro_entity_extend_enum_value_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_entity_extend_enum_value_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('oro_entity_extend_enum_value_collection_widget', $context, $blocks);
        // line 25
        echo "
";
    }

    // line 1
    public function block_oro_entity_extend_enum_value_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), 'widget', array("disabled" => (isset($context["disabled"]) ? $context["disabled"] : null)));
        echo "
            <label class=\"add-on";
        // line 5
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled";
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_extend.enum_options.default.tooltip", array(), "tooltips"), "html", null, true);
        echo "\">
                ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "is_default", array()), 'widget', array("disabled" => (isset($context["disabled"]) ? $context["disabled"] : null)));
        echo "
            </label>
            <label class=\"add-on";
        // line 8
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled";
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_extend.enum_options.priority.tooltip", array(), "tooltips"), "html", null, true);
        echo "\">
                <i class=\"icon-list ui-sortable-handle";
        // line 9
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled";
        }
        echo "\"></i>
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "priority", array()), 'widget', array("disabled" => (isset($context["disabled"]) ? $context["disabled"] : null)));
        echo "
            </label>
        </div>
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), 'errors');
        echo "
    </div>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
    }

    // line 18
    public function block_oro_entity_extend_enum_value_collection_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    ";
        // line 20
        if ( !(isset($context["disabled"]) ? $context["disabled"] : null)) {
            // line 21
            echo "        ";
            $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "_collection");
            // line 22
            echo "        ";
            echo $this->getAttribute($this, "oro_entity_extend_enum_value_collection_js", array(0 => $context), "method");
            echo "
    ";
        }
    }

    // line 26
    public function getoro_entity_extend_enum_value_collection_js($__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "    <script type=\"text/javascript\">
        require(['jquery', 'jquery-ui'],
        function(\$){
            \$(function() {
                var container = \$('#";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id", array()), "html", null, true);
            echo "');

                ";
            // line 33
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "multiple", array()) == false)) {
                // line 34
                echo "                container.on('click', '[name\$=\"[is_default]\"]', function(e) {
                    container.find('[name\$=\"[is_default]\"]').each(function (idx, el) {
                        if (el.checked && el.id != e.currentTarget.id) {
                            el.checked = false;
                        }
                    });
                });
                ";
            }
            // line 42
            echo "
                var reindex_values = function() {
                    var index = 1;
                    \$('#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id", array()), "html", null, true);
            echo " [name\$=\"[priority]\"]').each(function(i, el){
                        \$(el).val(index++);
                    })
                };

                container.sortable({
                    cursor: 'move',
                    delay : 100,
                    containment: \"parent\",
                    stop  : reindex_values
                });

                reindex_values();
                container.parent().on('click', 'a.add-list-item', reindex_values);
            });
        });
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 45,  148 => 42,  138 => 34,  136 => 33,  131 => 31,  125 => 27,  113 => 26,  105 => 22,  102 => 21,  100 => 20,  95 => 19,  92 => 18,  86 => 15,  81 => 13,  75 => 10,  69 => 9,  61 => 8,  56 => 6,  48 => 5,  44 => 4,  36 => 2,  33 => 1,  28 => 25,  26 => 18,  23 => 17,  21 => 1,);
    }
}
