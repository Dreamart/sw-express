<?php

/* OroImapBundle:Form:fields.html.twig */
class __TwigTemplate_05d7b5a27ab52168eaac39c625dee8d9e7eb175e2d165f284ff788bb651cf291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_imap_configuration_check_row' => array($this, 'block_oro_imap_configuration_check_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_imap_configuration_check_row', $context, $blocks);
    }

    public function block_oro_imap_configuration_check_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["data"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "parent", array()), "vars", array()), "value", array());
        // line 3
        echo "    ";
        if (((isset($context["data"]) ? $context["data"] : null) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "username", array(), "any", true, true))) {
            // line 4
            echo "        ";
            $context["forEntity"] = "user";
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "        ";
            $context["forEntity"] = "mailbox";
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        $context["options"] = array("elementNamePrototype" =>         // line 9
(isset($context["full_name"]) ? $context["full_name"] : null), "id" => ((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 10
(isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array()) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array()), "id", array())) : (null)), "forEntity" =>         // line 11
(isset($context["forEntity"]) ? $context["forEntity"] : null), "organization" => ((((        // line 12
(isset($context["data"]) ? $context["data"] : null) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "organization", array(), "any", true, true)) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "organization", array()))) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "organization", array()), "id", array())) : (null)));
        // line 14
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-page-component-module" => "oroimap/js/app/components/check-connection-btn", "data-page-component-options" => twig_jsonencode_filter(        // line 16
(isset($context["options"]) ? $context["options"] : null))));
        // line 18
        echo "    ";
        $context["wrapperId"] = ((isset($context["id"]) ? $context["id"] : null) . "_wrapper");
        // line 19
        echo "
    <div class=\"control-group\" id=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["wrapperId"]) ? $context["wrapperId"] : null), "html", null, true);
        echo "\">
        <div class=\"controls\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : null)));
        echo "</div>
    </div>
    <div class=\"container-config-group\"
         data-page-component-module=\"oroimap/js/app/components/check-config-settings\"
         data-page-component-options=\"\">
    </div>
    <style type=\"text/css\">
        ";
        // line 28
        echo twig_escape_filter($this->env, ("#" . (isset($context["wrapperId"]) ? $context["wrapperId"] : null)), "html", null, true);
        echo " .alert {
            margin-top: 10px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "OroImapBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  65 => 21,  61 => 20,  58 => 19,  55 => 18,  53 => 16,  51 => 14,  49 => 12,  48 => 11,  47 => 10,  46 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
