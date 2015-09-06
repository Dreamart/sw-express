<?php

/* OroSecurityBundle:Form:fields.html.twig */
class __TwigTemplate_e6ff4ede09827976fb52edf4aee8a6c98241ef9172c058a716eadb3033b63d95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_acl_access_level_selector_widget' => array($this, 'block_oro_acl_access_level_selector_widget'),
            'oro_acl_privilege_identity_widget' => array($this, 'block_oro_acl_privilege_identity_widget'),
            'oro_acl_label_widget' => array($this, 'block_oro_acl_label_widget'),
            'oro_acl_object_name_widget' => array($this, 'block_oro_acl_object_name_widget'),
            'oro_acl_collection_widget' => array($this, 'block_oro_acl_collection_widget'),
            'oro_acl_privilege_widget' => array($this, 'block_oro_acl_privilege_widget'),
            'oro_acl_permission_widget' => array($this, 'block_oro_acl_permission_widget'),
            'oro_acl_permission_collection_widget' => array($this, 'block_oro_acl_permission_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_acl_access_level_selector_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('oro_acl_privilege_identity_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('oro_acl_label_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('oro_acl_object_name_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('oro_acl_collection_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('oro_acl_privilege_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('oro_acl_permission_widget', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('oro_acl_permission_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_acl_access_level_selector_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["additionalClass"] = "";
        // line 3
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "privileges_config", array(), "any", false, true), "view_type", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "parent", array()), "vars", array()), "privileges_config", array()), "view_type", array()) != "grid"))) {
            // line 4
            echo "        ";
            $context["additionalClass"] = "span2";
            // line 5
            echo "    ";
        }
        // line 6
        echo "    <div class=\"access_level_value ";
        echo twig_escape_filter($this->env, (isset($context["additionalClass"]) ? $context["additionalClass"] : null), "html", null, true);
        echo "\"
         data-identity=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["identity"]) ? $context["identity"] : null), "html", null, true);
        echo "\"
         data-selector-id=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"
         data-selector-name=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"
         data-value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"
    >
        <div class=\"access_level_value_link\">
            <a href=\"javascript:void(0);\">
                ";
        // line 14
        $context["label"] = ((( !array_key_exists("level_label", $context) || twig_test_empty((isset($context["level_label"]) ? $context["level_label"] : null)))) ? ((        // line 15
(isset($context["translation_prefix"]) ? $context["translation_prefix"] : null) . "NONE")) : ((        // line 16
(isset($context["translation_prefix"]) ? $context["translation_prefix"] : null) . (isset($context["level_label"]) ? $context["level_label"] : null))));
        // line 18
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "
            </a>
            ";
        // line 20
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "hidden")) : ("hidden"));
        // line 21
        echo "            ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        </div>
        <div class=\"access_level_value_choice\" style=\"display: none\"></div>
    </div>
";
    }

    // line 27
    public function block_oro_acl_privilege_identity_widget($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $context["class"] = "";
        // line 29
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "privileges_config", array(), "any", false, true), "view_type", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "privileges_config", array()), "view_type", array()) != "grid"))) {
            // line 30
            echo "        ";
            $context["class"] = "span8";
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => (isset($context["class"]) ? $context["class"] : null))));
        echo "
";
    }

    // line 36
    public function block_oro_acl_label_widget($context, array $blocks = array())
    {
        // line 37
        echo "    <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
        echo "</strong>
    ";
        // line 38
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "hidden")) : ("hidden"));
        // line 39
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 42
    public function block_oro_acl_object_name_widget($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "oid", array()), 'widget');
        echo "
    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
";
    }

    // line 47
    public function block_oro_acl_collection_widget($context, array $blocks = array())
    {
        // line 48
        echo "    <div data-page-component-module=\"";
        echo twig_escape_filter($this->env, (isset($context["page_component_module"]) ? $context["page_component_module"] : null));
        echo "\" data-page-component-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["page_component_options"]) ? $context["page_component_options"] : null)));
        echo "\">
        ";
        // line 49
        if (($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : null), "view_type", array()) == "grid")) {
            // line 50
            echo "            <table class=\"table table-striped acl-table\">
                <tbody>
                <tr>
                    <th>
                        &nbsp;
                    </th>
                    ";
            // line 56
            $context["width"] = twig_number_format_filter($this->env, ((100 / (twig_length_filter($this->env, $this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : null), "permissions", array(), "array")) + 1)) - 1), 0);
            // line 57
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : null), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 58
                echo "                        <th width=\"";
                echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
                echo "%\">
                            ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["field"]), "html", null, true);
                echo "
                        </th>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                </tr>
                ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 64
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 69
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 70
                echo "                <div class=\"security-row row-fluid\">
                    ";
                // line 71
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        ";
        }
        // line 75
        echo "    </div>
";
    }

    // line 78
    public function block_oro_acl_privilege_widget($context, array $blocks = array())
    {
        // line 79
        echo "     ";
        ob_start();
        // line 80
        echo "         <tr ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) {
            echo "class=\"default-field\"";
        }
        echo ">
             <td>
                 ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "identity", array()), 'widget');
        echo "
             </td>
             ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "permissions", array()), 'widget');
        echo "
         </tr>
     ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_oro_acl_permission_widget($context, array $blocks = array())
    {
        // line 90
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "accessLevel", array()), 'widget');
        echo "
    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
        echo "
";
    }

    // line 94
    public function block_oro_acl_permission_collection_widget($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : null), "permissions", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 96
            echo "        <td>
            ";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 98
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                    // line 99
                    echo "                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["permission"], 'widget');
                    echo "
                ";
                }
                // line 101
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "            &nbsp;
        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroSecurityBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  340 => 102,  334 => 101,  328 => 99,  325 => 98,  321 => 97,  318 => 96,  313 => 95,  310 => 94,  304 => 91,  299 => 90,  296 => 89,  288 => 84,  283 => 82,  275 => 80,  272 => 79,  269 => 78,  264 => 75,  261 => 74,  252 => 71,  249 => 70,  244 => 69,  239 => 66,  230 => 64,  226 => 63,  223 => 62,  214 => 59,  209 => 58,  204 => 57,  202 => 56,  194 => 50,  192 => 49,  185 => 48,  182 => 47,  176 => 44,  171 => 43,  168 => 42,  161 => 39,  159 => 38,  154 => 37,  151 => 36,  145 => 33,  142 => 32,  139 => 31,  136 => 30,  133 => 29,  130 => 28,  127 => 27,  117 => 21,  115 => 20,  109 => 18,  107 => 16,  106 => 15,  105 => 14,  98 => 10,  94 => 9,  90 => 8,  86 => 7,  81 => 6,  78 => 5,  75 => 4,  72 => 3,  69 => 2,  66 => 1,  62 => 94,  59 => 93,  57 => 89,  54 => 88,  52 => 78,  49 => 77,  47 => 47,  44 => 46,  42 => 42,  39 => 41,  37 => 36,  34 => 35,  32 => 27,  29 => 26,  27 => 1,);
    }
}
