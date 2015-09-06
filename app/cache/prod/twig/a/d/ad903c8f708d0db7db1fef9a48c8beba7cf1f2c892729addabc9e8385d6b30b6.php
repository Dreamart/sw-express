<?php

/* OroWindowsBundle:Include:javascript.html.twig */
class __TwigTemplate_ad903c8f708d0db7db1fef9a48c8beba7cf1f2c892729addabc9e8385d6b30b6 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    require(['orowindows/js/dialog/state/model'],
    function(StateModel) {
        StateModel.prototype.urlRoot = ";
        // line 4
        echo twig_jsonencode_filter($this->env->getExtension('routing')->getPath("oro_api_get_windows"));
        echo ";
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroWindowsBundle:Include:javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
