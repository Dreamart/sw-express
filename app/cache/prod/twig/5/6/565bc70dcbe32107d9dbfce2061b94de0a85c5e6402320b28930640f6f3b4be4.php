<?php

/* OroUserBundle:Menu:menuProfile.html.twig */
class __TwigTemplate_565bc70dcbe32107d9dbfce2061b94de0a85c5e6402320b28930640f6f3b4be4 extends Twig_Template
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 2
            echo "    <li class=\"dropdown\" id=\"user-menu\">
        <a href=\"javascript: void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            ";
            // line 4
            if ($this->env->getExtension('mobile_extension')->isMobile()) {
                // line 5
                echo "                <i class=\"icon-user\"></i>
            ";
            } else {
                // line 7
                echo "                ";
                // line 10
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('oro_entity')->getEntityName($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())));
                echo "
                <i class=\"icon-sort-down\"></i>
            ";
            }
            // line 13
            echo "        </a>
        ";
            // line 14
            echo $this->env->getExtension('oro_menu')->render("usermenu");
            echo "
    </li>
";
        } else {
            // line 17
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("oro_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
            echo "</a></li>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Menu:menuProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  43 => 14,  40 => 13,  33 => 10,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
