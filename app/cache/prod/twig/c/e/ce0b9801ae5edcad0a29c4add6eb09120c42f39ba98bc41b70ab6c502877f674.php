<?php

/* OroDataGridBundle:js:toolbar.html.twig */
class __TwigTemplate_ce0b9801ae5edcad0a29c4add6eb09120c42f39ba98bc41b70ab6c502877f674 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-datagrid-toolbar\">
";
        // line 2
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 3
            echo "    <div class=\"grid-toolbar\">
        <div class=\"pull-left\">
            <div class=\"mass-actions-panel btn-group icons-holder\"></div>
            <div class=\"extra-actions-panel\"></div>
            ";
            // line 19
            echo "        </div>
        <div class=\"pull-right\">
            <div class=\"actions-panel pull-right form-horizontal\"></div>
            <div class=\"page-size pull-right form-horizontal\"></div>
        </div>
        <div class=\"pagination pagination-centered\"></div>
    </div>
";
        } else {
            // line 27
            echo "    <div class=\"grid-toolbar\">
        <div class=\"pagination-container\">
            <div class=\"pagination pull-left\"></div>
            <div class=\"pull-right\">
                <div class=\"page-size pull-right\"></div>
            </div>
            <div class=\"separator\">|</div>
        </div>
        <div class=\"pull-left\">
            <div class=\"mass-actions-panel btn-group icons-holder\"></div>
        </div>
    </div>
";
        }
        // line 40
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 40,  40 => 27,  30 => 19,  24 => 3,  22 => 2,  19 => 1,);
    }
}
