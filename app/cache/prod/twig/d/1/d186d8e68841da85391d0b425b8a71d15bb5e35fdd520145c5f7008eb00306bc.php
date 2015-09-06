<?php

/* OroDashboardBundle:Dashboard:widget.html.twig */
class __TwigTemplate_d186d8e68841da85391d0b425b8a71d15bb5e35fdd520145c5f7008eb00306bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["widgetId"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_wid"), "method");
        // line 2
        $context["widgetContentId"] = ("widget-content-" . (isset($context["widgetId"]) ? $context["widgetId"] : null));
        // line 3
        $context["widgetType"] = ((array_key_exists("widgetType", $context)) ? (_twig_default_filter((isset($context["widgetType"]) ? $context["widgetType"] : null), "dashboard")) : ("dashboard"));
        // line 4
        $context["widgetClass"] = twig_lower_filter($this->env, strtr((isset($context["widgetName"]) ? $context["widgetName"] : null), array("_" => "-")));
        // line 5
        if ( !array_key_exists("widgetTitle", $context)) {
            // line 6
            echo "    ";
            if ( !array_key_exists("widgetLabel", $context)) {
                // line 7
                echo "        ";
                $context["widgetTitle"] = false;
                // line 8
                echo "    ";
            } elseif (((array_key_exists("widgetConfiguration", $context) && $this->getAttribute((isset($context["widgetConfiguration"]) ? $context["widgetConfiguration"] : null), "title", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["widgetConfiguration"]) ? $context["widgetConfiguration"] : null), "title", array()), "value", array())))) {
                // line 9
                echo "        ";
                $context["widgetTitle"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["widgetConfiguration"]) ? $context["widgetConfiguration"] : null), "title", array()), "value", array()));
                // line 10
                echo "    ";
            } else {
                // line 11
                echo "        ";
                $context["widgetTitle"] = $this->env->getExtension('translator')->trans((isset($context["widgetLabel"]) ? $context["widgetLabel"] : null));
                // line 12
                echo "    ";
            }
        }
        // line 14
        echo "
<div id=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["widgetContentId"]) ? $context["widgetContentId"] : null), "html", null, true);
        echo "\" class=\"invisible widget-content ";
        echo twig_escape_filter($this->env, (isset($context["widgetType"]) ? $context["widgetType"] : null), "html", null, true);
        echo "-widget-content ";
        echo twig_escape_filter($this->env, (isset($context["widgetClass"]) ? $context["widgetClass"] : null), "html", null, true);
        echo "-widget-content\">
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "    ";
        if (array_key_exists("widgetConfiguration", $context)) {
            // line 19
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgetConfiguration"]) ? $context["widgetConfiguration"] : null));
            foreach ($context['_seq'] as $context["configName"] => $context["config"]) {
                // line 20
                echo "            ";
                if (($this->getAttribute($context["config"], "show_on_widget", array()) &&  !(null === $this->getAttribute($context["config"], "value", array())))) {
                    // line 21
                    echo "                ";
                    if (($this->getAttribute($context["config"], "options", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["config"], "options", array(), "any", false, true), "label", array(), "any", true, true))) {
                        // line 22
                        echo "                    ";
                        $context["label"] = $this->getAttribute($this->getAttribute($context["config"], "options", array()), "label", array());
                        // line 23
                        echo "                ";
                    } else {
                        // line 24
                        echo "                    ";
                        $context["label"] = $context["configName"];
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "                <div class=\"widget-config-data\"><stong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
                    echo "</stong>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "value", array()), "html", null, true);
                    echo "</div>
            ";
                }
                // line 28
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['configName'], $context['config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        $this->displayBlock('actions', $context, $blocks);
        // line 51
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'underscore', 'oroui/js/widget-manager'],
        function(\$, _, widgetManager){
            widgetManager.getWidgetInstance(";
        // line 54
        echo twig_jsonencode_filter((isset($context["widgetId"]) ? $context["widgetId"] : null));
        echo ", function(widget) {
                ";
        // line 55
        if ( !twig_test_empty((isset($context["widgetTitle"]) ? $context["widgetTitle"] : null))) {
            // line 56
            echo "                widget.setTitle(";
            echo twig_jsonencode_filter((isset($context["widgetTitle"]) ? $context["widgetTitle"] : null));
            echo ");
                ";
        }
        // line 58
        echo "            });
        });
    </script>
</div>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    // line 30
    public function block_actions($context, array $blocks = array())
    {
        // line 31
        echo "        <div class=\"widget-actions\">
            ";
        // line 32
        if (array_key_exists("actions", $context)) {
            // line 33
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 34
                if (( !$this->getAttribute($context["action"], "type", array(), "any", true, true) || ($this->getAttribute($context["action"], "type", array()) == "button"))) {
                    // line 35
                    echo "                        ";
                    $context["cssType"] = ("btn btn-mini " . (($this->getAttribute($context["action"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "class", array()), "btn-primary")) : ("btn-primary")));
                    // line 36
                    echo "                    ";
                } else {
                    // line 37
                    echo "                        ";
                    $context["cssType"] = "dashboard-link";
                    // line 38
                    echo "                    ";
                }
                // line 39
                echo "                    <a class=\"dashboard-btn  ";
                echo twig_escape_filter($this->env, (isset($context["cssType"]) ? $context["cssType"] : null), "html", null, true);
                if (( !$this->getAttribute($context["action"], "url", array(), "any", true, true) ||  !$this->getAttribute($context["action"], "url", array()))) {
                    echo " no-hash";
                }
                echo "\"
                        href=\"";
                // line 40
                echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "url", array()), "javascript:void(0);")) : ("javascript:void(0);")), "html", null, true);
                echo "\"
                        ";
                // line 41
                if ($this->getAttribute($context["action"], "data", array(), "any", true, true)) {
                    // line 42
                    echo "                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "data", array()));
                    foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                        // line 43
                        echo "                            data-";
                        echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                        echo "\"
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                        ";
                }
                // line 46
                echo "                    >";
                if ($this->getAttribute($context["action"], "icon", array(), "any", true, true)) {
                    echo "<i class=\"icon-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                    echo "\"></i> ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "label", array()), "html", null, true);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        }
        // line 49
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 49,  217 => 48,  204 => 46,  201 => 45,  190 => 43,  185 => 42,  183 => 41,  179 => 40,  171 => 39,  168 => 38,  165 => 37,  162 => 36,  159 => 35,  157 => 34,  152 => 33,  150 => 32,  147 => 31,  144 => 30,  140 => 17,  137 => 16,  129 => 58,  123 => 56,  121 => 55,  117 => 54,  112 => 51,  109 => 30,  106 => 29,  100 => 28,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  77 => 21,  74 => 20,  69 => 19,  66 => 18,  64 => 16,  56 => 15,  53 => 14,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  23 => 2,  21 => 1,);
    }
}
