<?php

/* OroCRMSalesBundle:Form:fields.html.twig */
class __TwigTemplate_e264ec4197363a6e7b8fd312ccb8262de314cfd390806691831212dcc2ff47dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'orocrm_sales_opportunity_widget' => array($this, 'block_orocrm_sales_opportunity_widget'),
            'orocrm_sales_lead_widget' => array($this, 'block_orocrm_sales_lead_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('orocrm_sales_opportunity_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('orocrm_sales_lead_widget', $context, $blocks);
    }

    // line 1
    public function block_orocrm_sales_opportunity_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"row-fluid\">
        <fieldset class=\"form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 5
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array(), "any", true, true)) {
            // line 6
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array()), 'row');
            echo "
                ";
        }
        // line 8
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contact", array()), 'row');
        echo "
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "customer", array()), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "probability", array()), 'row');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "budgetAmount", array()), 'row');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "customerNeed", array()), 'row');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "proposedSolution", array()), 'row');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "closeReason", array()), 'row');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "closeRevenue", array()), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "closeDate", array()), 'row');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "notes", array()), 'row');
        echo "

                ";
        // line 20
        $context["additionalData"] = array();
        // line 21
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 22
                echo "                    ";
                $context["additionalData"] = twig_array_merge((isset($context["additionalData"]) ? $context["additionalData"] : null), array(0 => $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 23
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                ";
        if ( !twig_test_empty((isset($context["additionalData"]) ? $context["additionalData"] : null))) {
            // line 25
            echo "                    <h5 class=\"user-fieldset\">
                        <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Additional"), "html", null, true);
            echo "</span>
                    </h5>

                    ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["additionalData"]) ? $context["additionalData"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                ";
        }
        // line 33
        echo "            </div>
        </fieldset>
    </div>
";
    }

    // line 38
    public function block_orocrm_sales_lead_widget($context, array $blocks = array())
    {
        // line 39
        echo "    <div class=\"row-fluid row-fluid-divider\">
        <fieldset class=\"form-horizontal\">
            <div class=\"responsive-block\">
                <h5 class=\"user-fieldset\">
                    <span>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orocrm.sales.lead.details.label"), "html", null, true);
        echo "</span>
                </h5>
                ";
        // line 45
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array(), "any", true, true)) {
            // line 46
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array()), 'row');
            echo "
                ";
        }
        // line 48
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "namePrefix", array()), 'row');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'row');
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "middleName", array()), 'row');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'row');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nameSuffix", array()), 'row');
        echo "
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contact", array()), 'row');
        echo "
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "jobTitle", array()), 'row');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phoneNumber", array()), 'row');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "customer", array()), 'row');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "companyName", array()), 'row');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "website", array()), 'row');
        echo "
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numberOfEmployees", array()), 'row');
        echo "
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "industry", array()), 'row');
        echo "
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "source", array()), 'row');
        echo "
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "notes", array()), 'row');
        echo "

                ";
        // line 66
        $context["additionalData"] = array();
        // line 67
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 68
                echo "                    ";
                $context["additionalData"] = twig_array_merge((isset($context["additionalData"]) ? $context["additionalData"] : null), array(0 => $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 69
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                ";
        if ( !twig_test_empty((isset($context["additionalData"]) ? $context["additionalData"] : null))) {
            // line 71
            echo "                    <h5 class=\"user-fieldset\">
                        <span>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Additional"), "html", null, true);
            echo "</span>
                    </h5>

                    ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["additionalData"]) ? $context["additionalData"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 76
                echo "                        ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                ";
        }
        // line 79
        echo "            </div>
            <div class=\"responsive-cell\">
                <h5 class=\"user-fieldset\">
                    <span>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("orocrm.sales.lead.address.label"), "html", null, true);
        echo "</span>
                </h5>
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address", array()), 'widget');
        echo "
            </div>
        </fieldset>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCRMSalesBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  293 => 84,  288 => 82,  283 => 79,  280 => 78,  271 => 76,  267 => 75,  261 => 72,  258 => 71,  255 => 70,  248 => 69,  245 => 68,  239 => 67,  237 => 66,  232 => 64,  228 => 63,  224 => 62,  220 => 61,  216 => 60,  212 => 59,  208 => 58,  204 => 57,  200 => 56,  196 => 55,  192 => 54,  188 => 53,  184 => 52,  180 => 51,  176 => 50,  172 => 49,  167 => 48,  161 => 46,  159 => 45,  154 => 43,  148 => 39,  145 => 38,  138 => 33,  135 => 32,  126 => 30,  122 => 29,  116 => 26,  113 => 25,  110 => 24,  103 => 23,  100 => 22,  94 => 21,  92 => 20,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  46 => 8,  40 => 6,  38 => 5,  33 => 2,  30 => 1,  26 => 38,  23 => 37,  21 => 1,);
    }
}
