<?php

/* OroUserBundle:Security:login.html.twig */
class __TwigTemplate_ca23d45e1ae7511115262c58b3853e7fd833f78b3c44740694f6ea4a0fadcccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle::layout.html.twig", "OroUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "login-page";
    }

    // line 4
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"container\">

    <form id=\"login-form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("oro_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
        <div class=\"title-box\">
            ";
        // line 11
        if ($this->env->getExtension('oro_theme')->getThemeLogo()) {
            // line 12
            echo "            <h1 class=\"oro-title logo-";
            echo (($this->env->getExtension('oro_theme')->getThemeLogo()) ? ("image") : ("text"));
            echo "\">
                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeLogo()), "html", null, true);
            echo "\">
            </h1>
            <span class=\"divider-vertical\"></span>
            ";
        }
        // line 17
        echo "            <h2 class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "</h2>
        </div>
        <fieldset>
            <script type=\"text/javascript\">
                require(['jquery'], function (\$) {
                    var \$form = \$('#login-form');
                    \$form.on('submit', function () {
                        \$form.find('button').attr('disabled', 'disabled');
                    });
                });
            </script>
            ";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 29
            echo "                <div class=\"alert alert-error\">
                    <div>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 33
        echo "            ";
        echo twig_escape_filter($this->env, (isset($context["messagesContent"]) ? $context["messagesContent"] : null), "html", null, true);
        // line 34
        $context["usernameLabel"] = $this->env->getExtension('translator')->trans("Username");
        // line 35
        $context["passwordLabel"] = $this->env->getExtension('translator')->trans("Password");
        // line 36
        $context["organizationLabel"] = $this->env->getExtension('translator')->trans("Organization");
        // line 37
        $context["showLabels"] = ((twig_length_filter($this->env, (isset($context["usernameLabel"]) ? $context["usernameLabel"] : null)) <= 9) && ($this->env->getExtension('translator')->trans((isset($context["passwordLabel"]) ? $context["passwordLabel"] : null)) <= 9));
        // line 38
        echo "            <div class=\"input-prepend\">
                ";
        // line 39
        if ((isset($context["showLabels"]) ? $context["showLabels"] : null)) {
            // line 40
            echo "                <span class=\"add-on\">";
            echo twig_escape_filter($this->env, (isset($context["usernameLabel"]) ? $context["usernameLabel"] : null), "html", null, true);
            echo "</span>
                ";
        }
        // line 42
        echo "                <input type=\"text\" id=\"prependedInput\" class=\"span2\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username or Email"), "html", null, true);
        echo "\" autofocus/>
            </div>
            <div class=\"input-prepend\">
                ";
        // line 45
        if ((isset($context["showLabels"]) ? $context["showLabels"] : null)) {
            // line 46
            echo "                <span class=\"add-on\">";
            echo twig_escape_filter($this->env, (isset($context["passwordLabel"]) ? $context["passwordLabel"] : null), "html", null, true);
            echo "</span>
                ";
        }
        // line 48
        echo "                <input type=\"password\" id=\"prependedInput2\" class=\"span2\" name=\"_password\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "\" autocomplete=\"off\" />
            </div>
            <label class=\"checkbox oro-remember-me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember me on this computer"), "html", null, true);
        echo "
            </label>
            <div class=\"control-group form-row\">
                <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("oro_user_reset_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Forgot your password?"), "html", null, true);
        echo "</a>
                <button type=\"submit\" class=\"btn btn-large  btn-primary pull-right\" id=\"_submit\" name=\"_submit\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Log in"), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 57
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("oro_user_login_form", $context)) ? (_twig_default_filter((isset($context["oro_user_login_form"]) ? $context["oro_user_login_form"] : null), "oro_user_login_form")) : ("oro_user_login_form")), array());
        // line 58
        echo "        </fieldset>
        <input type=\"hidden\" name=\"_target_path\" value=\"\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 60,  158 => 58,  156 => 57,  151 => 55,  145 => 54,  139 => 51,  132 => 48,  126 => 46,  124 => 45,  115 => 42,  109 => 40,  107 => 39,  104 => 38,  102 => 37,  100 => 36,  98 => 35,  96 => 34,  93 => 33,  87 => 30,  84 => 29,  82 => 28,  67 => 17,  60 => 13,  55 => 12,  53 => 11,  48 => 9,  44 => 7,  41 => 6,  36 => 4,  30 => 3,  11 => 1,);
    }
}
