<?php

/* OroUIBundle:Default/navbar:sided.html.twig */
class __TwigTemplate_371d7c8a77a996837002976a903982b46314254a77d782624e5221651f66af2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroUIBundle:Default/navbar:blocks.html.twig", "OroUIBundle:Default/navbar:sided.html.twig", 2);
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
        if (($this->env->getExtension('mobile_extension')->isDesktop() && ($this->env->getExtension('config_extension')->getConfigValue("oro_ui.navbar_position") == (isset($context["placement"]) ? $context["placement"] : null)))) {
            // line 3
            echo "<div class=\"main-menu-sided minimized\">
    <div class=\"scroller\" id=\"main-menu\">
        ";
            // line 5
            $this->displayBlock("application_menu", $context, $blocks);
            echo "
    </div>
    <div id=\"main-menu-toggler\" class=\"menu-toggler\"></div>
</div>
<script type=\"text/javascript\">
    require(['oroui/js/desktop/side-menu'], function (\$) {
        \$('.main-menu-sided').desktopSideMenu({
            toggleSelector: '#main-menu-toggler'
        });
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default/navbar:sided.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 3,  31 => 1,  14 => 2,);
    }
}
