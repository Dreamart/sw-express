<?php

/* OroNavigationBundle:ApplicationMenu:pinButton.html.twig */
class __TwigTemplate_4e79b395fc29179be41279badcc1a00daa1684c7ec036890da2c6c3dead7bb6e extends Twig_Template
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
        $context["contentProviderContent"] = twig_first($this->env, $this->getAttribute((isset($context["oro_ui_content_provider_manager"]) ? $context["oro_ui_content_provider_manager"] : null), "getContent", array(0 => array(0 => "navigationElements")), "method"));
        // line 2
        echo "<div id=\"bookmark-buttons\">
    <div class=\"navigation clearfix\">
        <div class=\"top-action-box\">
            <button class=\"btn favorite-button\" ";
        // line 5
        if (($this->getAttribute((isset($context["contentProviderContent"]) ? $context["contentProviderContent"] : null), "favoriteButton", array(), "array") == false)) {
            echo "style=\"display: none\"";
        }
        // line 6
        echo "                    data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderSerialized(), "html", null, true);
        echo "\"
                    data-title-rendered-short=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderShort(), "html", null, true);
        echo "\"
                    title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.favorites.button.title"), "html", null, true);
        echo "\">
                        <i class=\"icon-star hide-text\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.favorites.button"), "html", null, true);
        echo "</i>
            </button>
            <button class=\"btn minimize-button\" ";
        // line 11
        if (($this->getAttribute((isset($context["contentProviderContent"]) ? $context["contentProviderContent"] : null), "pinButton", array(), "array") == false)) {
            echo "style=\"display: none\"";
        }
        // line 12
        echo "                    data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderSerialized(), "html", null, true);
        echo "\"
                    data-title-rendered-short=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderShort(), "html", null, true);
        echo "\"
                    title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.pins.button.title"), "html", null, true);
        echo "\">
                        <i class=\"icon-pushpin hide-text\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.pins.button"), "html", null, true);
        echo "</i>
            </button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:pinButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 14,  57 => 13,  52 => 12,  48 => 11,  43 => 9,  39 => 8,  35 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
