<?php

/* OroCRMMagentoBundle:Form:fields.html.twig */
class __TwigTemplate_93781d854becb24c9db71b9643cc9729e18722741986af1659b50b84a9d0bf65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'orocrm_magento_soap_transport_check_button_widget' => array($this, 'block_orocrm_magento_soap_transport_check_button_widget'),
            'orocrm_magento_soap_transport_check_button_row' => array($this, 'block_orocrm_magento_soap_transport_check_button_row'),
            'orocrm_magento_website_select_row' => array($this, 'block_orocrm_magento_website_select_row'),
            'orocrm_magento_order_place_form_type_row' => array($this, 'block_orocrm_magento_order_place_form_type_row'),
            'orocrm_magento_customer_addresses_widget' => array($this, 'block_orocrm_magento_customer_addresses_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('orocrm_magento_soap_transport_check_button_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('orocrm_magento_soap_transport_check_button_row', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('orocrm_magento_website_select_row', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('orocrm_magento_order_place_form_type_row', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('orocrm_magento_customer_addresses_widget', $context, $blocks);
    }

    // line 19
    public function block_orocrm_magento_soap_transport_check_button_widget($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["entity"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array());
        // line 21
        echo "    <div class=\"control-group\">
        <div class=\"controls\">
            <button type=\"";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</button>
            <script type=\"text/javascript\">
                require(['orocrm/magento/soap-checker'], function (SoapChecker) {
                    \"use strict\";
                    new SoapChecker(";
        // line 27
        echo $this->getAttribute($this, "getSoapCheckerOptions", array(0 => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), 1 => ("#" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()))), "method");
        echo ");
                });
            </script>

            ";
        // line 31
        if ((array_key_exists("entity", $context) &&  !twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array())))) {
            // line 32
            echo "                ";
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "isExtensionInstalled", array())) {
                // line 33
                echo "                    ";
                if ( !$this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "supportedExtensionVersion", array())) {
                    // line 34
                    echo "                        ";
                    $context["message"] = $this->env->getExtension('translator')->trans("orocrm.magento.magentosoaptransport.message.outdated_brige", array("%extension_version%" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "extensionVersion", array())));
                    // line 35
                    echo "                        ";
                    $context["messageType"] = "warning";
                    // line 36
                    echo "                    ";
                }
                // line 37
                echo "                ";
            } else {
                // line 38
                echo "                    ";
                $context["message"] = $this->env->getExtension('translator')->trans("orocrm.magento.magentosoaptransport.message.native_soap");
                // line 39
                echo "                    ";
                $context["messageType"] = "info";
                // line 40
                echo "                ";
            }
            // line 41
            echo "
                ";
            // line 42
            if ((array_key_exists("messageType", $context) && array_key_exists("message", $context))) {
                // line 43
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["messageType"]) ? $context["messageType"] : null), "html", null, true);
                echo " connection-status\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</div>
                ";
            }
            // line 45
            echo "            ";
        }
        // line 46
        echo "        </div>
    </div>
";
    }

    // line 50
    public function block_orocrm_magento_soap_transport_check_button_row($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
    }

    // line 54
    public function block_orocrm_magento_website_select_row($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        <div class=\"control-group";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "html", null, true);
        }
        echo "\">
            ";
        // line 57
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 58
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : null)));
            echo "
                </div>
            ";
        }
        // line 62
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " validation-error";
        }
        echo " magento-website-selector-container\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 64
        if ( !($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "disabled", array()) === true)) {
            // line 65
            echo "                    <a href=\"javascript:void(0)\" class=\"no-hash sync-website-list-link\">
                        <i class=\"icon icon-refresh\"></i>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sync website list"), "html", null, true);
            echo "
                    </a>
                    <script type=\"text/javascript\">
                        require(['orocrm/magento/soap-checker'], function (SoapChecker) {
                            \"use strict\";
                            new SoapChecker(";
            // line 71
            echo $this->getAttribute($this, "getSoapCheckerOptions", array(0 => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), 1 => ".sync-website-list-link"), "method");
            echo ");
                        });
                    </script>
                ";
        }
        // line 75
        echo "                <div class=\"clear-fix\"></div>
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_orocrm_magento_order_place_form_type_row($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        $context["cartId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cart_id", array()), "vars", array()), "data", array());
        // line 84
        echo "    ";
        echo $this->env->getExtension('oro_widget')->render($this->env, array("widgetType" => "block", "alias" => "order-place-widget", "url" => $this->env->getExtension('routing')->getPath("orocrm_magento_orderplace_cart", array("id" =>         // line 87
(isset($context["cartId"]) ? $context["cartId"] : null))), "loadingMaskEnabled" => true));
        // line 89
        echo "

    <script type=\"text/javascript\">
        require(['underscore', 'oroui/js/widget-manager'], function(_, widgetManager) {
            widgetManager.getWidgetInstanceByAlias('order-place-widget', function(widget) {
                widget._showLoading();

                widget.once('externalContentLoaded', _.bind(widget._hideLoading, widget));
            });
        });
    </script>
";
    }

    // line 102
    public function block_orocrm_magento_customer_addresses_widget($context, array $blocks = array())
    {
        // line 103
        echo "    <div ";
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "originId", array()))) {
            echo "class=\"collection-remove-disabled\"";
        }
        echo ">
        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    </div>
";
    }

    // line 1
    public function getgetSoapCheckerOptions($__form__ = null, $__elSelector__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "elSelector" => $__elSelector__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["modificationAreAllowed"] = ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "websiteId", array(), "any", false, true), "vars", array(), "any", false, true), "disabled", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "websiteId", array()), "vars", array()), "disabled", array()) == false));
            // line 3
            echo "    ";
            $context["soapCheckerOptions"] = array("el" =>             // line 4
(isset($context["elSelector"]) ? $context["elSelector"] : null), "websiteSelectEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 5
(isset($context["form"]) ? $context["form"] : null), "websiteId", array()), "vars", array()), "id", array())), "websitesListEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 6
(isset($context["form"]) ? $context["form"] : null), "websites", array()), "vars", array()), "id", array())), "connectorsEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 7
(isset($context["form"]) ? $context["form"] : null), "parent", array()), "connectors", array()), "vars", array()), "id", array())), "adminUrlEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 8
(isset($context["form"]) ? $context["form"] : null), "adminUrl", array()), "vars", array()), "id", array())), "isExtensionInstalledEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 9
(isset($context["form"]) ? $context["form"] : null), "isExtensionInstalled", array()), "vars", array()), "id", array())), "extensionVersionEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 10
(isset($context["form"]) ? $context["form"] : null), "extensionVersion", array()), "vars", array()), "id", array())), "magentoVersionEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 11
(isset($context["form"]) ? $context["form"] : null), "magentoVersion", array()), "vars", array()), "id", array())), "websitesModificationAllowed" =>             // line 13
(isset($context["modificationAreAllowed"]) ? $context["modificationAreAllowed"] : null), "transportEntityId" => (($this->getAttribute($this->getAttribute(            // line 14
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "id", array())) : (null)));
            // line 16
            echo "    ";
            echo twig_jsonencode_filter((isset($context["soapCheckerOptions"]) ? $context["soapCheckerOptions"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroCRMMagentoBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 16,  277 => 14,  276 => 13,  275 => 11,  274 => 10,  273 => 9,  272 => 8,  271 => 7,  270 => 6,  269 => 5,  268 => 4,  266 => 3,  263 => 2,  250 => 1,  243 => 104,  236 => 103,  233 => 102,  218 => 89,  216 => 87,  214 => 84,  211 => 83,  208 => 82,  199 => 76,  196 => 75,  189 => 71,  181 => 66,  178 => 65,  176 => 64,  172 => 63,  165 => 62,  159 => 59,  156 => 58,  154 => 57,  146 => 56,  143 => 55,  140 => 54,  133 => 51,  130 => 50,  124 => 46,  121 => 45,  113 => 43,  111 => 42,  108 => 41,  105 => 40,  102 => 39,  99 => 38,  96 => 37,  93 => 36,  90 => 35,  87 => 34,  84 => 33,  81 => 32,  79 => 31,  72 => 27,  61 => 23,  57 => 21,  54 => 20,  51 => 19,  47 => 102,  44 => 101,  42 => 82,  39 => 81,  37 => 54,  34 => 53,  32 => 50,  29 => 49,  27 => 19,  24 => 18,);
    }
}
