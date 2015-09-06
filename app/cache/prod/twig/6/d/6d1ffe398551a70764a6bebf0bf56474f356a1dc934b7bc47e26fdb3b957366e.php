<?php

/* OroUIBundle::widget_loader.html.twig */
class __TwigTemplate_6d1ffe398551a70764a6bebf0bf56474f356a1dc934b7bc47e26fdb3b957366e extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle::widget_loader.html.twig", 1);
        // line 2
        $context["widgetComponentOptions"] = array("type" =>         // line 3
(isset($context["widgetType"]) ? $context["widgetType"] : null), "options" =>         // line 4
(isset($context["options"]) ? $context["options"] : null));
        // line 6
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["elementId"]) ? $context["elementId"] : null), "html", null, true);
        echo "\" ";
        echo $context["UI"]->getrenderWidgetAttributes((isset($context["widgetComponentOptions"]) ? $context["widgetComponentOptions"] : null));
        echo " data-layout=\"separate\">
    ";
        // line 7
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "elementFirst", array())) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('actions')->renderUri($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "url", array()), array());
            // line 9
            echo "    ";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::widget_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  37 => 9,  34 => 8,  32 => 7,  25 => 6,  23 => 4,  22 => 3,  21 => 2,  19 => 1,);
    }
}
