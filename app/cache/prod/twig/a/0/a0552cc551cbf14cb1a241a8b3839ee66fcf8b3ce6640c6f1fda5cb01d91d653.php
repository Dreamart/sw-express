<?php

/* OroNavigationBundle:Include:contentTags.html.twig */
class __TwigTemplate_a0552cc551cbf14cb1a241a8b3839ee66fcf8b3ce6640c6f1fda5cb01d91d653 extends Twig_Template
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

    // line 1
    public function getnavigationContentTags($__data__ = null, $__includeCollectionTag__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "includeCollectionTag" => $__includeCollectionTag__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <script type=\"text/javascript\">
        require([ 'oronavigation/js/content-manager'],
        function (contentManager) {
            contentManager.tagContent(";
            // line 5
            echo twig_jsonencode_filter($this->env->getExtension('oro_navigation.content_tags')->generate((isset($context["data"]) ? $context["data"] : null), (isset($context["includeCollectionTag"]) ? $context["includeCollectionTag"] : null)));
            echo ");
        });
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Include:contentTags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  34 => 2,  21 => 1,);
    }
}
