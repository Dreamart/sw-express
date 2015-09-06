<?php

/* OroSecurityBundle:Organization:selector.html.twig */
class __TwigTemplate_50074e8da4ecf4f93fae9714d17224dcb54325cfc6dee97e11c4534b33e0e598 extends Twig_Template
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
        $context["curr_organization"] = $this->env->getExtension('oro_security_organization_extension')->getCurrentOrganization();
        // line 2
        $context["organizations"] = $this->env->getExtension('oro_security_organization_extension')->getOrganizations();
        // line 3
        echo "
";
        // line 4
        ob_start();
        // line 5
        ob_start();
        // line 6
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("organization_name", $context)) ? (_twig_default_filter((isset($context["organization_name"]) ? $context["organization_name"] : null), "organization_name")) : ("organization_name")), array());
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["organization_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
";
        // line 10
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 11
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["organizations"]) ? $context["organizations"] : null)) > 1)) {
                // line 12
                echo "        <div class=\"nav top-search fix_logo\">
            <div class=\"dropdown header-utility-dropdown\">
                <i class=\"icon-ellipsis-vertical dropdown-toggle btn-organization-switcher\" data-toggle=\"dropdown\"></i>
                <ul class=\"dropdown-menu dropdown-organization-switcher\">
                    ";
                // line 16
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                    // line 17
                    echo "                        <li>
                            ";
                    // line 18
                    if (((isset($context["curr_organization"]) ? $context["curr_organization"] : null) && ($this->getAttribute((isset($context["curr_organization"]) ? $context["curr_organization"] : null), "getId", array(), "method") == $this->getAttribute($context["organization"], "id", array())))) {
                        // line 19
                        echo "                            <span class=\"selected\"><b>";
                        echo $this->getAttribute($context["organization"], "name", array());
                        echo "</b></span>
                            ";
                    } else {
                        // line 21
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_security_switch_organization", array("id" => $this->getAttribute($context["organization"], "id", array()))), "html", null, true);
                        echo "\"
                               class=\"organization-switcher no-hash\">
                                ";
                        // line 23
                        echo $this->getAttribute($context["organization"], "name", array());
                        echo "
                            </a>
                            ";
                    }
                    // line 26
                    echo "                        </li>
                        ";
                    // line 27
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 28
                        echo "                        <li class=\"divider\"><span></span></li>
                        ";
                    }
                    // line 30
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                </ul>
            </div>
            ";
                // line 33
                echo $this->getAttribute($this, "organization_name_and_logo", array(0 => (isset($context["organization_name"]) ? $context["organization_name"] : null)), "method");
                echo "
        </div>
        <script type=\"text/javascript\">
            require(['orosecurity/js/init-organization-selector'])
        </script>
    ";
            } else {
                // line 39
                echo "        ";
                echo $this->getAttribute($this, "organization_name_and_logo", array(0 => (isset($context["organization_name"]) ? $context["organization_name"] : null)), "method");
                echo "
    ";
            }
        } else {
            // line 42
            echo "    ";
            // line 43
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["organizations"]) ? $context["organizations"] : null)) > 1)) {
                // line 44
                echo "        <ul class=\"nav organization-switcher\">
            <li class=\"dropdown\">
                <h1 class=\"logo dropdown-toggle\" data-toggle=\"dropdown\">
                    <span>
                        <a href=\"javascript: void(0);\">
                            ";
                // line 49
                if ($this->env->getExtension('oro_theme')->getThemeLogo()) {
                    // line 50
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeLogo()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, trim(strip_tags((isset($context["organization_name"]) ? $context["organization_name"] : null))), "html", null, true);
                    echo "\">
                            ";
                } else {
                    // line 52
                    echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : null), "html", null, true);
                }
                // line 54
                echo "                        </a>
                        <span class=\"caret\"></span>
                    </span>
                </h1>
                <ul class=\"dropdown-menu\">
                    ";
                // line 59
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                    // line 60
                    echo "                        <li ";
                    if (((isset($context["curr_organization"]) ? $context["curr_organization"] : null) && ($this->getAttribute((isset($context["curr_organization"]) ? $context["curr_organization"] : null), "getId", array(), "method") == $this->getAttribute($context["organization"], "id", array())))) {
                        echo "class=\"current\"";
                    }
                    echo ">
                            <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_security_switch_organization", array("id" => $this->getAttribute($context["organization"], "id", array()))), "html", null, true);
                    echo "\" class=\"no-hash\">
                                ";
                    // line 62
                    echo $this->getAttribute($context["organization"], "name", array());
                    echo "
                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                </ul>
            </li>
        </ul>
        <script type=\"text/javascript\">
            require(['orosecurity/js/init-organization-selector'])
        </script>
    ";
            } else {
                // line 73
                echo "        <h1 class=\"logo\">
            <span>
                <a href=\"";
                // line 75
                echo $this->env->getExtension('routing')->getPath("oro_default");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, trim(strip_tags((isset($context["organization_name"]) ? $context["organization_name"] : null))), "html", null, true);
                echo "\">
                    ";
                // line 76
                if ($this->env->getExtension('oro_theme')->getThemeLogo()) {
                    // line 77
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeLogo()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, trim(strip_tags((isset($context["organization_name"]) ? $context["organization_name"] : null))), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 79
                    echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : null), "html", null, true);
                }
                // line 81
                echo "                </a>
            </span>
        </h1>
    ";
            }
        }
        // line 86
        echo "
";
    }

    // line 87
    public function getorganization_name_and_logo($__organization_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "organization_name" => $__organization_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    ";
            if (twig_length_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : null))) {
                // line 89
                echo "        ";
                $context["logo"] = $this->env->getExtension('oro_theme')->getThemeLogo();
                // line 90
                echo "        <h1 class=\"logo logo-";
                echo (((isset($context["logo"]) ? $context["logo"] : null)) ? ("image") : ("text"));
                echo "\">
            <a href=\"";
                // line 91
                echo $this->env->getExtension('routing')->getPath("oro_default");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : null), "html", null, true);
                echo "\">
                ";
                // line 92
                if ((isset($context["logo"]) ? $context["logo"] : null)) {
                    // line 93
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["logo"]) ? $context["logo"] : null)), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : null), "html", null, true);
                    echo "\">
                ";
                } else {
                    // line 95
                    echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : null), "html", null, true);
                }
                // line 97
                echo "            </a>
        </h1>
    ";
            } else {
                // line 100
                echo "        <span class=\"logo-placeholder\"></span>
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
        return "OroSecurityBundle:Organization:selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 100,  275 => 97,  272 => 95,  264 => 93,  262 => 92,  256 => 91,  251 => 90,  248 => 89,  245 => 88,  233 => 87,  228 => 86,  221 => 81,  218 => 79,  210 => 77,  208 => 76,  202 => 75,  198 => 73,  189 => 66,  179 => 62,  175 => 61,  168 => 60,  164 => 59,  157 => 54,  154 => 52,  146 => 50,  144 => 49,  137 => 44,  134 => 43,  132 => 42,  125 => 39,  116 => 33,  112 => 31,  98 => 30,  94 => 28,  92 => 27,  89 => 26,  83 => 23,  77 => 21,  71 => 19,  69 => 18,  66 => 17,  49 => 16,  43 => 12,  40 => 11,  38 => 10,  35 => 9,  30 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
