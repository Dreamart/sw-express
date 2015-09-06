<?php

/* OroSSOBundle:Security:oauthLogin.html.twig */
class __TwigTemplate_f978eb9158d354907427b6d2bb0f615fa6b578d66a03b3cb5acfb40f644cada0 extends Twig_Template
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
        if ($this->env->getExtension('config_extension')->getConfigValue("oro_sso.enable_google_sso")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.sso.login.alternative.label"), "html", null, true);
            echo "
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
            foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
                // line 4
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getAuthorizationUrl($context["owner"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["owner"]), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "OroSSOBundle:Security:oauthLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
