<?php

/* OroEntityMergeBundle:Form:fields.html.twig */
class __TwigTemplate_7236ba4bf21846beb899e8a81323bb4480d456feb21828df0c1b4507af38468a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_merge_widget' => array($this, 'block_oro_entity_merge_widget'),
            'oro_entity_merge_javascript' => array($this, 'block_oro_entity_merge_javascript'),
            'oro_entity_merge_field_widget' => array($this, 'block_oro_entity_merge_field_widget'),
            'oro_entity_merge_choice_value_widget' => array($this, 'block_oro_entity_merge_choice_value_widget'),
            'oro_entity_merge_field_label' => array($this, 'block_oro_entity_merge_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_entity_merge_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('oro_entity_merge_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('oro_entity_merge_field_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('oro_entity_merge_choice_value_widget', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('oro_entity_merge_field_label', $context, $blocks);
    }

    // line 1
    public function block_oro_entity_merge_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : null));
        echo "
    <table class=\"table table-bordered entity-merge-table\">
        <thead>
        <tr class=\"default-field\">
            <td class=\"merge-first-column\" rowspan=\"2\">
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "masterEntity", array()), 'label');
        echo "
            </td>
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "masterEntity", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 10
            echo "                <td class=\"entity-merge-column\">
                    <div class=\"entity-merge-fields-blocks-wrapper\">
                        <label class=\"entity-merge-uppercase entity-merge-inline\">
                            ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "attr", array()), array("class" => "entity-merge-field-choice"))));
            echo "

                            <strong data-entity-key=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array()), "html", null, true);
            echo "\"
                                    data-entity-field-name=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "full_name", array()), "html", null, true);
            echo "\"
                                    class=\"merge-entity-representative\">
                                ";
            // line 18
            echo $this->env->getExtension('oro_entity_merge')->renderMergeEntityLabel($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), ($this->getAttribute($context["loop"], "index", array()) - 1));
            echo "
                            </strong>
                        </label>
                    </div>
                    <a class=\"entity-merge-select-all\" data-entity-key=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "html", null, true);
            echo "\"
                       href=\"javascript:void(0);\">
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_merge.form.select_all"), "html", null, true);
            echo "
                    </a>
                </td>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('oro_entity_merge')->sortMergeFields($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "fields", array()), "children", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 32
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
    <p>* ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_merge.hint.other_related_entities"), "html", null, true);
        echo "</p>
";
    }

    // line 39
    public function block_oro_entity_merge_javascript($context, array $blocks = array())
    {
        // line 40
        echo "    <script type=\"text/javascript\">

        require(['oroentitymerge/js/merge-view'],
                /**
                 * @param {mergeView} mergeView
                 */
                function (mergeView) {

                    mergeView.init.call(mergeView);
                });
    </script>
";
    }

    // line 53
    public function block_oro_entity_merge_field_widget($context, array $blocks = array())
    {
        // line 54
        echo "    <tr>
        <td class=\"merge-first-column\">
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
            ";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 58
            echo "                <div class=\"entity-merge-strategy-wrapper\">

                    <span class=\"entity-merge-inline entity-merge-strategy-label\">
                        ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "mode", array()), 'label');
            echo "
                    </span>

                    <div class=\"entity-merge-inline\">
                        ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "mode", array()), 'widget', array("attr" => array("class" => "entity-merge-small-select")));
            echo "
                    </div>
                </div>
            ";
        } else {
            // line 69
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "mode", array()), 'widget');
            echo "
            ";
        }
        // line 71
        echo "
        </td>
        ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "sourceEntity", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            echo "            <td class=\"entity-merge-decision-container\">
                ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("entityOffset" => ($this->getAttribute($context["loop"], "index", array()) - 1)));
            echo "
            </td>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </tr>
";
    }

    // line 81
    public function block_oro_entity_merge_choice_value_widget($context, array $blocks = array())
    {
        // line 82
        echo "    <div class=\"entity-merge-fields-blocks-wrapper\">
        <div class=\"entity-merge-inline\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "attr", array()), array("class" => "entity-merge-field-choice"))));
        echo "</div>
        <label data-entity-key=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\" data-entity-field-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
               class=\"entity-merge-inline-label merge-entity-representative\"
               for=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            ";
        // line 87
        echo $this->env->getExtension('oro_entity_merge')->renderMergeFieldValue((isset($context["merge_field_data"]) ? $context["merge_field_data"] : null), (isset($context["merge_entity_offset"]) ? $context["merge_entity_offset"] : null));
        echo "
        </label>
    </div>
";
    }

    // line 92
    public function block_oro_entity_merge_field_label($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 94
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 95
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 96
                echo "        ";
            }
            // line 97
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 98
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 99
                echo "        ";
            }
            // line 100
            echo "        <strong ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</strong>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityMergeBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  327 => 100,  324 => 99,  321 => 98,  318 => 97,  315 => 96,  312 => 95,  309 => 94,  306 => 93,  303 => 92,  295 => 87,  278 => 86,  271 => 84,  267 => 83,  264 => 82,  261 => 81,  256 => 78,  239 => 75,  236 => 74,  219 => 73,  215 => 71,  209 => 69,  202 => 65,  195 => 61,  190 => 58,  188 => 57,  184 => 56,  180 => 54,  177 => 53,  162 => 40,  159 => 39,  153 => 36,  149 => 34,  140 => 32,  136 => 31,  131 => 28,  113 => 24,  108 => 22,  101 => 18,  96 => 16,  92 => 15,  87 => 13,  82 => 10,  65 => 9,  60 => 7,  51 => 2,  48 => 1,  44 => 92,  41 => 91,  39 => 81,  36 => 80,  34 => 53,  31 => 52,  29 => 39,  26 => 38,  24 => 1,);
    }
}
