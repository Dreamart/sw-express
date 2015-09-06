<?php

/* OroDataGridBundle::macros.html.twig */
class __TwigTemplate_ea534ca86253cb571dc43c5c87c73ee9dae2a7dbfc2a1f674c7c39ad6e0fe0fe extends Twig_Template
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
    }

    // line 9
    public function getrenderGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "    ";
            $context["datagrid"] = $this->env->getExtension('oro_datagrid')->getGrid((isset($context["name"]) ? $context["name"] : null), (isset($context["params"]) ? $context["params"] : null));
            // line 11
            echo "    ";
            if ((isset($context["datagrid"]) ? $context["datagrid"] : null)) {
                // line 12
                echo "        ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_widgetContainer"), "method") == "dialog")) {
                    // line 13
                    echo "            ";
                    $context["renderParams"] = twig_array_merge(array("enableViews" => false), (isset($context["renderParams"]) ? $context["renderParams"] : null));
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "        ";
                $context["metaData"] = $this->env->getExtension('oro_datagrid')->getGridMetadata((isset($context["datagrid"]) ? $context["datagrid"] : null), (isset($context["params"]) ? $context["params"] : null));
                // line 16
                echo "        ";
                if ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "routerEnabled", array(), "any", true, true)) {
                    // line 17
                    echo "            ";
                    $context["metadataOptions"] = (($this->getAttribute((isset($context["metaData"]) ? $context["metaData"] : null), "options", array(), "any", true, true)) ? ($this->getAttribute((isset($context["metaData"]) ? $context["metaData"] : null), "options", array())) : (array()));
                    // line 18
                    echo "            ";
                    $context["metadataOptions"] = twig_array_merge((isset($context["metadataOptions"]) ? $context["metadataOptions"] : null), array("routerEnabled" => $this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "routerEnabled", array())));
                    // line 19
                    echo "            ";
                    $context["metaData"] = twig_array_merge((isset($context["metaData"]) ? $context["metaData"] : null), array("options" => (isset($context["metadataOptions"]) ? $context["metadataOptions"] : null)));
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "        ";
                if ((($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "enableFullScreenLayout", array(), "any", true, true) && $this->getAttribute(                // line 22
(isset($context["renderParams"]) ? $context["renderParams"] : null), "enableFullScreenLayout", array())) && $this->env->getExtension('config_extension')->getConfigValue("oro_data_grid.full_screen_layout_enabled"))) {
                    // line 24
                    echo "            ";
                    $context["metaData"] = twig_array_merge((isset($context["metaData"]) ? $context["metaData"] : null), array("enableFullScreenLayout" => true));
                    // line 25
                    echo "        ";
                }
                // line 26
                echo "        ";
                $context["data"] = $this->env->getExtension('oro_datagrid')->getGridData((isset($context["datagrid"]) ? $context["datagrid"] : null));
                // line 27
                echo "        ";
                $context["gridId"] = $this->env->getExtension('oro_datagrid')->generateGridElementId((isset($context["datagrid"]) ? $context["datagrid"] : null));
                // line 28
                echo "        ";
                $context["enableFilters"] = (($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "enableFilters", array(), "any", true, true)) ? ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "enableFilters", array())) : (true));
                // line 29
                echo "        ";
                $context["options"] = array("el" => ("#" .                 // line 30
(isset($context["gridId"]) ? $context["gridId"] : null)), "gridName" => $this->env->getExtension('oro_datagrid')->buildGridFullName($this->getAttribute(                // line 31
(isset($context["datagrid"]) ? $context["datagrid"] : null), "name", array()), $this->getAttribute((isset($context["datagrid"]) ? $context["datagrid"] : null), "scope", array())), "builders" => $this->getAttribute(                // line 32
(isset($context["metaData"]) ? $context["metaData"] : null), "requireJSModules", array()), "metadata" =>                 // line 33
(isset($context["metaData"]) ? $context["metaData"] : null), "data" =>                 // line 34
(isset($context["data"]) ? $context["data"] : null), "enableFilters" =>                 // line 35
(isset($context["enableFilters"]) ? $context["enableFilters"] : null), "enableViews" => (($this->getAttribute(                // line 36
(isset($context["renderParams"]) ? $context["renderParams"] : null), "enableViews", array(), "any", true, true)) ? ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "enableViews", array())) : ((isset($context["enableFilters"]) ? $context["enableFilters"] : null))), "showViewsInNavbar" => (($this->getAttribute(                // line 37
(isset($context["renderParams"]) ? $context["renderParams"] : null), "showViewsInNavbar", array(), "any", true, true)) ? ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "showViewsInNavbar", array())) : (false)), "inputName" => $this->env->getExtension('oro_datagrid')->buildGridInputName($this->getAttribute(                // line 38
(isset($context["datagrid"]) ? $context["datagrid"] : null), "name", array())));
                // line 40
                echo "
        <div id=\"";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["gridId"]) ? $context["gridId"] : null), "html", null, true);
                echo "\"
             data-page-component-module=\"orodatagrid/js/app/components/datagrid-component\"
             data-page-component-options=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
                echo "\"
             ";
                // line 44
                if ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "cssClass", array(), "any", true, true)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "cssClass", array()), "html", null, true);
                    echo "\" ";
                }
                echo "></div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 44,  107 => 43,  102 => 41,  99 => 40,  97 => 38,  96 => 37,  95 => 36,  94 => 35,  93 => 34,  92 => 33,  91 => 32,  90 => 31,  89 => 30,  87 => 29,  84 => 28,  81 => 27,  78 => 26,  75 => 25,  72 => 24,  70 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  44 => 13,  41 => 12,  38 => 11,  35 => 10,  21 => 9,);
    }
}
