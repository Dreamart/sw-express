<?php

/* OroTranslationBundle:Service:block/availableTranslations.html.twig */
class __TwigTemplate_0c485f59697113e7d5a1125cf891daccabf00fef7615a0515c9e77db5a18976a extends Twig_Template
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
        echo "<div class=\"widget-content\">
    <table class=\"table table-hover table-bordered\">
        <colgroup>
            <col width=\"150\">
            <col width=\"250\">
            <col width=\"150\">
            <col width=\"100\">
        </colgroup>
        <thead>
            <tr>
                <th>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</th>
                <th>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Translation coverage", array(), "messages");
        echo "<sup>&nbsp;1</sup></th>
                <th>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Translation status", array(), "messages");
        echo "</th>
                <th>";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Action", array(), "messages");
        echo "</th>
            </tr>
        </thead>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statistic"]) ? $context["statistic"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            if (($this->getAttribute($context["language"], "code", array()) != (isset($context["defaultLanguage"]) ? $context["defaultLanguage"] : null))) {
                // line 18
                echo "            ";
                // line 19
                $context["status"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), $this->getAttribute($context["language"], "code", array()), array(), "array", true, true)) ? ($this->getAttribute(                // line 20
(isset($context["config"]) ? $context["config"] : null), $this->getAttribute($context["language"], "code", array()), array(), "array")) : (twig_constant("Oro\\Bundle\\TranslationBundle\\Translation\\TranslationStatusInterface::STATUS_NEW")));
                // line 23
                echo "            <tr>
                <td>
                    ";
                // line 25
                if ($this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), $this->getAttribute($context["language"], "code", array()), array(), "array", true, true)) {
                    // line 26
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), $this->getAttribute($context["language"], "code", array()), array(), "array")), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 28
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["language"], "code", array())), "html", null, true);
                    echo "
                    ";
                }
                // line 30
                echo "                </td>
                <td class=\"translation-coverage\">
                    <div class=\"progress\">
                        <div class=\"bar bar-success\" style=\"width: ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "translationStatus", array()), "html", null, true);
                echo "%;\"></div>
                    </div>
                    <b>";
                // line 35
                echo $this->env->getExtension('oro_locale_number')->formatPercent(($this->getAttribute($context["language"], "translationStatus", array()) / 100));
                echo "</b>
                </td>
                <td class=\"translation-status\">
                    ";
                // line 38
                if (((isset($context["status"]) ? $context["status"] : null) != twig_constant("Oro\\Bundle\\TranslationBundle\\Translation\\TranslationStatusInterface::STATUS_NEW"))) {
                    // line 39
                    echo "                        ";
                    if ($this->env->getExtension('oro_translation_translation_status')->isFresh($this->getAttribute($context["language"], "code", array()))) {
                        // line 40
                        echo "                            <span class=\"status-up-to-date\">";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("Up to date", array(), "messages");
                        echo "</span>
                        ";
                    } else {
                        // line 42
                        echo "                            <span class=\"status-needs-update\">";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("Update needed", array(), "messages");
                        echo "</span>
                        ";
                    }
                    // line 44
                    echo "                    ";
                }
                // line 45
                echo "                </td>
                <td>
                    ";
                // line 47
                if (((isset($context["status"]) ? $context["status"] : null) == twig_constant("Oro\\Bundle\\TranslationBundle\\Translation\\TranslationStatusInterface::STATUS_NEW"))) {
                    // line 48
                    echo "                        ";
                    echo $this->getAttribute($this, "renderButton", array(0 => $this->getAttribute($context["language"], "code", array()), 1 => "download", 2 => $this->env->getExtension('translator')->trans("oro.translation.action.download")), "method");
                    echo "
                    ";
                } elseif ((                // line 49
(isset($context["status"]) ? $context["status"] : null) == twig_constant("Oro\\Bundle\\TranslationBundle\\Translation\\TranslationStatusInterface::STATUS_DOWNLOADED"))) {
                    // line 50
                    echo "                        ";
                    echo $this->getAttribute($this, "renderButton", array(0 => $this->getAttribute($context["language"], "code", array()), 1 => "enable", 2 => $this->env->getExtension('translator')->trans("oro.translation.action.enable")), "method");
                    echo "

                        ";
                    // line 52
                    if ( !$this->env->getExtension('oro_translation_translation_status')->isFresh($this->getAttribute($context["language"], "code", array()))) {
                        // line 53
                        echo "                            ";
                        echo $this->getAttribute($this, "renderButton", array(0 => $this->getAttribute($context["language"], "code", array()), 1 => "update", 2 => $this->env->getExtension('translator')->trans("oro.translation.action.update")), "method");
                        echo "
                        ";
                    }
                    // line 55
                    echo "                    ";
                } elseif (((isset($context["status"]) ? $context["status"] : null) == twig_constant("Oro\\Bundle\\TranslationBundle\\Translation\\TranslationStatusInterface::STATUS_ENABLED"))) {
                    // line 56
                    echo "                        ";
                    echo $this->getAttribute($this, "renderButton", array(0 => $this->getAttribute($context["language"], "code", array()), 1 => "disable", 2 => $this->env->getExtension('translator')->trans("oro.translation.action.disable")), "method");
                    echo "

                        ";
                    // line 58
                    if ( !$this->env->getExtension('oro_translation_translation_status')->isFresh($this->getAttribute($context["language"], "code", array()))) {
                        // line 59
                        echo "                            ";
                        echo $this->getAttribute($this, "renderButton", array(0 => $this->getAttribute($context["language"], "code", array()), 1 => "update", 2 => $this->env->getExtension('translator')->trans("oro.translation.action.update")), "method");
                        echo "
                        ";
                    }
                    // line 61
                    echo "                    ";
                }
                // line 62
                echo "                </td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 65
            echo "            <tr>
                <td colspan=\"4\" class=\"no-statistic\">
                    ";
            // line 67
            echo $this->env->getExtension('translator')->getTranslator()->trans("Sorry, but translation statistic is not available.", array(), "messages");
            // line 68
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </table>
</div>

";
    }

    // line 80
    public function getrenderButton($__langCode__ = null, $__action__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "langCode" => $__langCode__,
            "action" => $__action__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 81
            echo "    <button class=\"btn btn-mini\" data-lang=\"";
            echo twig_escape_filter($this->env, (isset($context["langCode"]) ? $context["langCode"] : null), "html", null, true);
            echo "\" data-action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\">
        ";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
    </button>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Service:block/availableTranslations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 82,  204 => 81,  190 => 80,  183 => 71,  175 => 68,  173 => 67,  169 => 65,  161 => 62,  158 => 61,  152 => 59,  150 => 58,  144 => 56,  141 => 55,  135 => 53,  133 => 52,  127 => 50,  125 => 49,  120 => 48,  118 => 47,  114 => 45,  111 => 44,  105 => 42,  99 => 40,  96 => 39,  94 => 38,  88 => 35,  83 => 33,  78 => 30,  72 => 28,  66 => 26,  64 => 25,  60 => 23,  58 => 20,  57 => 19,  55 => 18,  49 => 17,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
