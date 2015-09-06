<?php

/* OroUIBundle:Default/navbar:top.html.twig */
class __TwigTemplate_e263ee54d69101dd9fbede347a7bccd678c7789b6966846227f9a4a63e2493bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroUIBundle:Default/navbar:blocks.html.twig", "OroUIBundle:Default/navbar:top.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroUIBundle:Default/navbar:blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->env->getExtension('mobile_extension')->isMobile() || ($this->env->getExtension('config_extension')->getConfigValue("oro_ui.navbar_position") == "top"))) {
            // line 3
            echo "<div id=\"main-menu\" class=\"main-menu-top\">
    ";
            // line 4
            $this->displayBlock("application_menu", $context, $blocks);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default/navbar:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  33 => 3,  31 => 1,  14 => 2,);
    }
}
