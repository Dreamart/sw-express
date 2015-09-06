<?php

/* OroSidebarBundle::sidebar.html.twig */
class __TwigTemplate_f81934599e01260f11870d81e45461d2f0ccbc2f49a852bf3c9046b762050010 extends Twig_Template
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
        if ( !array_key_exists("sidebarsGetURL", $context)) {
            // line 2
            echo "    ";
            $context["sidebarsGetURL"] = $this->env->getExtension('routing')->getPath("oro_api_get_sidebars", array("position" => ("SIDEBAR_" . twig_upper_filter($this->env, (isset($context["placement"]) ? $context["placement"] : null)))));
        }
        // line 4
        echo "
";
        // line 5
        if ( !array_key_exists("sidebarPostURL", $context)) {
            // line 6
            echo "    ";
            $context["sidebarPostURL"] = $this->env->getExtension('routing')->getPath("oro_api_post_sidebars");
        }
        // line 8
        echo "
";
        // line 9
        if ( !array_key_exists("widgetsGetURL", $context)) {
            // line 10
            echo "    ";
            $context["widgetsGetURL"] = $this->env->getExtension('routing')->getPath("oro_api_get_sidebarwidgets", array("placement" => (isset($context["placement"]) ? $context["placement"] : null)));
        }
        // line 12
        echo "
";
        // line 13
        if ( !array_key_exists("widgetPostURL", $context)) {
            // line 14
            echo "    ";
            $context["widgetPostURL"] = $this->env->getExtension('routing')->getPath("oro_api_post_sidebarwidgets");
        }
        // line 16
        echo "
";
        // line 17
        if (($this->env->getExtension('mobile_extension')->isDesktop() && ($this->env->getExtension('config_extension')->getConfigValue((("oro_sidebar.sidebar_" . (isset($context["placement"]) ? $context["placement"] : null)) . "_active")) == true))) {
            // line 18
            echo "<div id=\"sidebar-";
            echo twig_escape_filter($this->env, (isset($context["placement"]) ? $context["placement"] : null), "html", null, true);
            echo "\" class=\"sidebar sidebar-";
            echo twig_escape_filter($this->env, (isset($context["placement"]) ? $context["placement"] : null), "html", null, true);
            echo "\"></div>

<script type=\"text/javascript\">
    require(['jquery', 'orosidebar/js/model', 'orosidebar/js/view',
        'orosidebar/js/widget-container/collection', 'orosidebar/js/constants'],
    function(\$, SidebarModel, SidebarView, WidgetContainerCollection, constants) {
        'use strict';

        \$(function () {";
            // line 27
            ob_start();
            // line 28
            echo $this->env->getExtension('http_kernel')->renderFragment((isset($context["sidebarsGetURL"]) ? $context["sidebarsGetURL"] : null));
            $context["sidebarData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 30
            if ( !twig_test_empty((isset($context["sidebarData"]) ? $context["sidebarData"] : null))) {
                // line 31
                echo "            var sidebarData = ";
                echo twig_escape_filter($this->env, (isset($context["sidebarData"]) ? $context["sidebarData"] : null), "html", null, true);
                echo ";
            ";
            } else {
                // line 33
                echo "            var sidebarData = {position: constants.SIDEBAR_";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["placement"]) ? $context["placement"] : null)), "html", null, true);
                echo " };
            ";
            }
            // line 35
            echo "            var sidebarModel = new SidebarModel(sidebarData);
            var widgets = new WidgetContainerCollection();
            var availableWidgets = ";
            // line 37
            echo twig_jsonencode_filter($this->env->getExtension('oro_sidebar')->getWidgetDefinitions((isset($context["placement"]) ? $context["placement"] : null)));
            echo ";

            sidebarModel.urlRoot = ";
            // line 39
            echo twig_jsonencode_filter((isset($context["sidebarPostURL"]) ? $context["sidebarPostURL"] : null));
            echo ";
            widgets.url = ";
            // line 40
            echo twig_jsonencode_filter((isset($context["widgetPostURL"]) ? $context["widgetPostURL"] : null));
            echo ";

            new SidebarView({
                model: sidebarModel,
                availableWidgets: availableWidgets,
                widgets: widgets,
                el: '#sidebar-";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["placement"]) ? $context["placement"] : null), "html", null, true);
            echo "',
                \$main: \$('#main')
            });

            widgets.reset(";
            // line 50
            echo $this->env->getExtension('http_kernel')->renderFragment((isset($context["widgetsGetURL"]) ? $context["widgetsGetURL"] : null));
            echo ");

            widgets.each(function (widget) {
                var name = widget.get('widgetName');
                var originalWidget = availableWidgets[name];
                widget.update(originalWidget);
            });
        });
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroSidebarBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 50,  112 => 46,  103 => 40,  99 => 39,  94 => 37,  90 => 35,  84 => 33,  78 => 31,  76 => 30,  73 => 28,  71 => 27,  57 => 18,  55 => 17,  52 => 16,  48 => 14,  46 => 13,  43 => 12,  39 => 10,  37 => 9,  34 => 8,  30 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
