<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_c6ed65ad73455f9b16062e56343b085249418d2ef69d74c7af26e0128a179480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'header' => array($this, 'block_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'navbar' => array($this, 'block_navbar'),
            'before_content' => array($this, 'block_before_content'),
            'scripts_before' => array($this, 'block_scripts_before'),
            'right_panel' => array($this, 'block_right_panel'),
            'left_panel' => array($this, 'block_left_panel'),
            'content' => array($this, 'block_content'),
            'head_script' => array($this, 'block_head_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("titleTemplate" => "%code% - %status%", "params" => array("%code%" =>         // line 2
(isset($context["status_code"]) ? $context["status_code"] : null), "%status%" => (isset($context["status_text"]) ? $context["status_text"] : null)), "force" => true));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <meta name=\"error\" content=\"";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "error-page";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 15
            echo "        ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
        ";
            // line 16
            if (((isset($context["status_code"]) ? $context["status_code"] : null) == 503)) {
                // line 17
                echo "            ";
                $this->displayBlock('navbar', $context, $blocks);
                // line 18
                echo "        ";
            }
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        <header class=\"navbar\" id=\"oroplatform-header\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    ";
            // line 23
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("header_logo", $context)) ? (_twig_default_filter((isset($context["header_logo"]) ? $context["header_logo"] : null), "header_logo")) : ("header_logo")), array());
            // line 24
            echo "                </div>
            </div>
        </header>
    ";
        }
    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 12
        echo "    ";
    }

    // line 17
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 30
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 33
    public function block_scripts_before($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 35
            echo "        ";
            $this->displayParentBlock("scripts_before", $context, $blocks);
            echo "
    ";
        }
    }

    // line 39
    public function block_right_panel($context, array $blocks = array())
    {
    }

    // line 41
    public function block_left_panel($context, array $blocks = array())
    {
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "    <div class=\"popup-frame\">
        <div class=\"popup-holder\">
            <div class=\"pagination-centered popup-box-errors\">
                <h1><span>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</h1>
                <div class=\"popup-content\">
                    <p>
                        ";
        // line 51
        if (((isset($context["status_code"]) ? $context["status_code"] : null) == 404)) {
            // line 52
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The page you requested could not be found. Please make sure the path you used is correct."), "html", null, true);
            echo "
                        ";
        } elseif ((        // line 53
(isset($context["status_code"]) ? $context["status_code"] : null) == 403)) {
            // line 54
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("You don't have permission to access this page."), "html", null, true);
            echo "
                        ";
        } else {
            // line 56
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The System is currently under maintenance and should be available in a few minutes."), "html", null, true);
            echo "
                        ";
        }
        // line 58
        echo "                    </p>
                    ";
        // line 59
        if ((((isset($context["status_code"]) ? $context["status_code"] : null) == 404) || ((isset($context["status_code"]) ? $context["status_code"] : null) == 403))) {
            // line 60
            echo "                        <p><a href=\"#\" onclick=\"window.history.back(); return false;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Click to go back"), "html", null, true);
            echo "</a></p>
                    ";
        }
        // line 62
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 68
    public function block_head_script($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\">require(['oroui/js/init-errors'])</script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 69,  203 => 68,  195 => 62,  189 => 60,  187 => 59,  184 => 58,  178 => 56,  172 => 54,  170 => 53,  165 => 52,  163 => 51,  155 => 48,  150 => 45,  147 => 44,  142 => 41,  137 => 39,  129 => 35,  126 => 34,  123 => 33,  118 => 30,  113 => 17,  109 => 12,  106 => 11,  98 => 24,  96 => 23,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  80 => 16,  75 => 15,  73 => 14,  70 => 13,  68 => 11,  65 => 10,  62 => 9,  56 => 7,  50 => 5,  45 => 4,  42 => 3,  38 => 1,  36 => 2,  11 => 1,);
    }
}
