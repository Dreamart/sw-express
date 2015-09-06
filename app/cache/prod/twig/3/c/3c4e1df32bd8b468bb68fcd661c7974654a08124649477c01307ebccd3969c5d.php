<?php

/* OroAddressBundle:Include:fields.html.twig */
class __TwigTemplate_3c4e1df32bd8b468bb68fcd661c7974654a08124649477c01307ebccd3969c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_region_widget' => array($this, 'block_oro_region_widget'),
            'oro_email_widget' => array($this, 'block_oro_email_widget'),
            'oro_phone_widget' => array($this, 'block_oro_phone_widget'),
            'oro_address_widget' => array($this, 'block_oro_address_widget'),
            'oro_address_rows' => array($this, 'block_oro_address_rows'),
            'oro_typed_address_widget' => array($this, 'block_oro_typed_address_widget'),
            'oro_typed_address_rows' => array($this, 'block_oro_typed_address_rows'),
            'oro_address_collection_widget' => array($this, 'block_oro_address_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_region_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('oro_email_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('oro_phone_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('oro_address_widget', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('oro_address_rows', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('oro_typed_address_widget', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('oro_typed_address_rows', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('oro_address_collection_widget', $context, $blocks);
        // line 144
        echo "
";
    }

    // line 1
    public function block_oro_region_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["_block"] = $this->renderBlock("oro_region_updater_js", $context, $blocks);
        // line 4
        echo "    ";
        if (twig_test_empty((isset($context["_block"]) ? $context["_block"] : null))) {
            // line 5
            echo "        ";
            $this->loadTemplate("OroAddressBundle:Include:javascript.html.twig", "OroAddressBundle:Include:fields.html.twig", 5)->display($context);
            // line 6
            echo "        ";
            $this->displayBlock("oro_region_updater_js", $context, $blocks);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (( !array_key_exists("country_field", $context) || twig_test_empty((isset($context["country_field"]) ? $context["country_field"] : null)))) {
            // line 10
            echo "        ";
            $context["country_field"] = strtr((isset($context["name"]) ? $context["name"] : null), array("region" => "country"));
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        $context["country_field"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), (isset($context["country_field"]) ? $context["country_field"] : null), array(), "array");
        // line 13
        echo "
    ";
        // line 14
        if (( !array_key_exists("region_text_field", $context) || twig_test_empty((isset($context["region_text_field"]) ? $context["region_text_field"] : null)))) {
            // line 15
            echo "        ";
            $context["region_text_field"] = ((isset($context["name"]) ? $context["name"] : null) . "_text");
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $context["region_text_field"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), (isset($context["region_text_field"]) ? $context["region_text_field"] : null), array(), "array");
        // line 18
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("data-validation" => twig_jsonencode_filter(array("NotBlank" => null)))));
        echo "
    ";
        // line 20
        $context["showSelect"] = ( !twig_test_empty((isset($context["choices"]) ? $context["choices"] : null)) && twig_test_empty($this->getAttribute($this->getAttribute((isset($context["region_text_field"]) ? $context["region_text_field"] : null), "vars", array()), "value", array())));
        // line 21
        echo "
    <script type=\"text/javascript\">
        require(['jquery', 'oroaddress/js/region/view', 'oroaddress/js/region/collection'],
        function(\$, RegionView, RegionCollection){
            \$(function() {
                /** @type oro.region.View */
                new RegionView({
                    el: \$('#";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["country_field"]) ? $context["country_field"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "'),
                    target: \$('#";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "'),
                    simpleEl: \$('#";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["region_text_field"]) ? $context["region_text_field"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "'),
                    collection: new RegionCollection([], {
                        route: ";
        // line 32
        echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "region_route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "region_route", array()), "oro_api_country_get_regions")) : ("oro_api_country_get_regions")));
        echo "
                    }),
                    showSelect: ";
        // line 34
        echo twig_jsonencode_filter((isset($context["showSelect"]) ? $context["showSelect"] : null));
        echo "
                });
            });
        });
    </script>

    <style type=\"text/css\">
        ";
        // line 41
        if ((isset($context["showSelect"]) ? $context["showSelect"] : null)) {
            // line 42
            echo "            #";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " {
                display: block;
            }

            #";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["region_text_field"]) ? $context["region_text_field"] : null), "vars", array()), "id", array()), "html", null, true);
            echo " {
                display: none;
            }
        ";
        } else {
            // line 50
            echo "            #";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo " {
                display: none;
            }

            #";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["region_text_field"]) ? $context["region_text_field"] : null), "vars", array()), "id", array()), "html", null, true);
            echo " {
                display: block;
            }
        ";
        }
        // line 58
        echo "    </style>
";
    }

    // line 61
    public function block_oro_email_widget($context, array $blocks = array())
    {
        // line 62
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append collection-element-primary\">
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
            <label class=\"add-on\" title=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Primary"), "html", null, true);
        echo "\">
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "primary", array()), 'widget');
        echo "
            </label>
        </div>
        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
        ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 71
                echo "            <div class=\"collection-element-other clearfix\">
                ";
                // line 72
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("title" => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()))));
                echo "
            </div>
            ";
                // line 74
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'errors');
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </div>
    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
    }

    // line 80
    public function block_oro_phone_widget($context, array $blocks = array())
    {
        // line 81
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append collection-element-primary\">
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'widget');
        echo "
            <label class=\"add-on\" title=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Primary"), "html", null, true);
        echo "\">
                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "primary", array()), 'widget');
        echo "
            </label>
        </div>
        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'errors');
        echo "
        ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 90
                echo "            <div class=\"collection-element-other clearfix\">
                ";
                // line 91
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("title" => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()))));
                echo "
            </div>
            ";
                // line 93
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'errors');
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    </div>
    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
    }

    // line 99
    public function block_oro_address_widget($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) {
            // line 101
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 102
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 105
            echo "        ";
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
    ";
        }
    }

    // line 109
    public function block_oro_address_rows($context, array $blocks = array())
    {
        // line 110
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'row');
        echo "
    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), 'row');
        echo "
    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "namePrefix", array()), 'row');
        echo "
    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'row');
        echo "
    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "middleName", array()), 'row');
        echo "
    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'row');
        echo "
    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nameSuffix", array()), 'row');
        echo "
    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "organization", array()), 'row');
        echo "
    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), 'row');
        echo "
    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "street", array()), 'row');
        echo "
    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "street2", array()), 'row');
        echo "
    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), 'row');
        echo "
    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region_text", array()), 'row');
        echo "
    ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'row');
        echo "
    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "postalCode", array()), 'row');
        echo "
    ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
    }

    // line 128
    public function block_oro_typed_address_widget($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        $this->displayBlock("oro_typed_address_rows", $context, $blocks);
        echo "
";
    }

    // line 132
    public function block_oro_typed_address_rows($context, array $blocks = array())
    {
        // line 133
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "types", array()), 'row');
        echo "
    ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "primary", array()), 'row');
        echo "
    ";
        // line 135
        $this->displayBlock("oro_address_rows", $context, $blocks);
        echo "
";
    }

    // line 138
    public function block_oro_address_collection_widget($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()) . " ")) : ("")) . "oro-address-collection")));
        // line 140
        echo "    ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    ";
        // line 141
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "_collection");
        // line 142
        echo "    ";
        echo $this->getAttribute($this, "oro_collection_validate_types_js", array(0 => $context), "method");
        echo "
";
    }

    // line 145
    public function getoro_collection_validate_types_js($__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 146
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "types", array(), "any", true, true)) {
                // line 147
                echo "        <script type=\"text/javascript\">
            require(['jquery'],
            function(\$){
                \$(function() {
                    var container = \$('#";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "id", array()), "html", null, true);
                echo "');
                    /**
                     * Allow only 1 item with selected type
                     */
                    container.on('click', '[name\$=\"[types][]\"]', function() {
                        if (this.checked) {
                            container.find('[name\$=\"[types][]\"][value=\"' + this.value + '\"]').each(function (idx, el) {
                                el.checked = false;
                            });
                            this.checked = true;
                        }
                    });
                });
            });
        </script>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroAddressBundle:Include:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 151,  478 => 147,  475 => 146,  463 => 145,  456 => 142,  454 => 141,  449 => 140,  446 => 139,  443 => 138,  437 => 135,  433 => 134,  428 => 133,  425 => 132,  418 => 129,  415 => 128,  409 => 125,  405 => 124,  401 => 123,  397 => 122,  393 => 121,  389 => 120,  385 => 119,  381 => 118,  377 => 117,  373 => 116,  369 => 115,  365 => 114,  361 => 113,  357 => 112,  353 => 111,  348 => 110,  345 => 109,  337 => 105,  331 => 102,  326 => 101,  323 => 100,  320 => 99,  314 => 96,  311 => 95,  302 => 93,  297 => 91,  294 => 90,  289 => 89,  285 => 88,  279 => 85,  275 => 84,  271 => 83,  263 => 81,  260 => 80,  254 => 77,  251 => 76,  242 => 74,  237 => 72,  234 => 71,  229 => 70,  225 => 69,  219 => 66,  215 => 65,  211 => 64,  203 => 62,  200 => 61,  195 => 58,  188 => 54,  180 => 50,  173 => 46,  165 => 42,  163 => 41,  153 => 34,  148 => 32,  143 => 30,  139 => 29,  135 => 28,  126 => 21,  124 => 20,  120 => 19,  117 => 18,  114 => 17,  111 => 16,  108 => 15,  106 => 14,  103 => 13,  100 => 12,  97 => 11,  94 => 10,  92 => 9,  89 => 8,  83 => 6,  80 => 5,  77 => 4,  74 => 3,  72 => 2,  69 => 1,  64 => 144,  62 => 138,  59 => 137,  57 => 132,  54 => 131,  52 => 128,  49 => 127,  47 => 109,  44 => 108,  42 => 99,  39 => 98,  37 => 80,  34 => 79,  32 => 61,  29 => 60,  27 => 1,);
    }
}
