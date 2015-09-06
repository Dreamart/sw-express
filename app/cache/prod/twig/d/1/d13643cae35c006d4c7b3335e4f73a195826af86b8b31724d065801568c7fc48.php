<?php

/* OroNavigationBundle:Js:pinbar.js.twig */
class __TwigTemplate_d13643cae35c006d4c7b3335e4f73a195826af86b8b31724d065801568c7fc48 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-list-pin-item\">
    <div class=\"pin-holder\">
        <button class=\"btn-close icon-remove\" href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("close"), "html");
        echo "</button>
        <div><a href=\"<%= url %>\" data-options=\"{&quot;cache&quot;:true}\" title=\"<%- title_rendered %>\"><i class=\"icon-circle pin-status\"></i><%- title_rendered_short %></a></div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:pinbar.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
