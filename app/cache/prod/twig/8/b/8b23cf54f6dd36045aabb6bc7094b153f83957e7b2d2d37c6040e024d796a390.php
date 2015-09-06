<?php

/* OroLocaleBundle::locale_settings.html.twig */
class __TwigTemplate_8b23cf54f6dd36045aabb6bc7094b153f83957e7b2d2d37c6040e024d796a390 extends Twig_Template
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
require(['jquery', 'orolocale/js/locale-settings'],
function(\$, localeSettings) {
    ";
        // line 4
        $context["dateTimeFormats"] = array();
        // line 5
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('oro_locale_dateformat')->getDateTimeFormatterList());
        foreach ($context['_seq'] as $context["_key"] => $context["formatterName"]) {
            // line 6
            echo "        ";
            $context["currentFormats"] = array("day" => $this->env->getExtension('oro_locale_dateformat')->getDayFormat(            // line 7
$context["formatterName"]), "date" => $this->env->getExtension('oro_locale_dateformat')->getDateFormat(            // line 8
$context["formatterName"]), "time" => $this->env->getExtension('oro_locale_dateformat')->getTimeFormat(            // line 9
$context["formatterName"]), "datetime" => $this->env->getExtension('oro_locale_dateformat')->getDateTimeFormat(            // line 10
$context["formatterName"]));
            // line 12
            echo "        ";
            $context["dateTimeFormats"] = twig_array_merge((isset($context["dateTimeFormats"]) ? $context["dateTimeFormats"] : null), array($context["formatterName"] => (isset($context["currentFormats"]) ? $context["currentFormats"] : null)));
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formatterName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    ";
        // line 15
        $context["numberFormatSettings"] = array();
        // line 16
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "decimal", 1 => "percent", 2 => "currency"));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 17
            echo "        ";
            $context["numberFormatSettings"] = twig_array_merge((isset($context["numberFormatSettings"]) ? $context["numberFormatSettings"] : null), array(            // line 18
$context["style"] => array("grouping_size" => $this->env->getExtension('oro_locale_number')->getAttribute("grouping_size",             // line 19
$context["style"]), "grouping_used" => $this->env->getExtension('oro_locale_number')->getAttribute("grouping_used",             // line 20
$context["style"]), "max_fraction_digits" => $this->env->getExtension('oro_locale_number')->getAttribute("max_fraction_digits",             // line 21
$context["style"]), "min_fraction_digits" => $this->env->getExtension('oro_locale_number')->getAttribute("min_fraction_digits",             // line 22
$context["style"]), "negative_prefix" => $this->env->getExtension('oro_locale_number')->getTextAttribute("negative_prefix",             // line 24
$context["style"]), "negative_suffix" => $this->env->getExtension('oro_locale_number')->getTextAttribute("negative_suffix",             // line 25
$context["style"]), "positive_prefix" => $this->env->getExtension('oro_locale_number')->getTextAttribute("positive_prefix",             // line 26
$context["style"]), "positive_suffix" => $this->env->getExtension('oro_locale_number')->getTextAttribute("positive_suffix",             // line 27
$context["style"]), "currency_code" => $this->env->getExtension('oro_locale_number')->getTextAttribute("currency_code",             // line 28
$context["style"]), "padding_character" => $this->env->getExtension('oro_locale_number')->getTextAttribute("padding_character",             // line 29
$context["style"]), "decimal_separator_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("decimal_separator_symbol",             // line 31
$context["style"]), "grouping_separator_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("grouping_separator_symbol",             // line 32
$context["style"]), "monetary_separator_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("monetary_separator_symbol",             // line 33
$context["style"]), "monetary_grouping_separator_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("monetary_grouping_separator_symbol",             // line 34
$context["style"]), "currency_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("currency_symbol",             // line 35
$context["style"]), "zero_digit_symbol" => $this->env->getExtension('oro_locale_number')->getSymbol("zero_digit_symbol",             // line 36
$context["style"]))));
            // line 39
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    ";
        // line 41
        $context["localeConfigurationClass"] = "\\Oro\\Bundle\\LocaleBundle\\DependencyInjection\\Configuration::";
        // line 42
        echo "    ";
        $context["defaults"] = array("locale" => twig_constant((        // line 43
(isset($context["localeConfigurationClass"]) ? $context["localeConfigurationClass"] : null) . "DEFAULT_LOCALE")), "language" => twig_constant((        // line 44
(isset($context["localeConfigurationClass"]) ? $context["localeConfigurationClass"] : null) . "DEFAULT_LANGUAGE")), "country" => twig_constant((        // line 45
(isset($context["localeConfigurationClass"]) ? $context["localeConfigurationClass"] : null) . "DEFAULT_COUNTRY")), "currency" => twig_constant((        // line 46
(isset($context["localeConfigurationClass"]) ? $context["localeConfigurationClass"] : null) . "DEFAULT_CURRENCY")));
        // line 48
        echo "
    ";
        // line 49
        $context["settings"] = array("locale" => call_user_func_array($this->env->getFunction('oro_locale')->getCallable(), array()), "language" => call_user_func_array($this->env->getFunction('oro_language')->getCallable(), array()), "country" => call_user_func_array($this->env->getFunction('oro_country')->getCallable(), array()), "currency" => call_user_func_array($this->env->getFunction('oro_currency')->getCallable(), array()), "timezone" => call_user_func_array($this->env->getFunction('oro_timezone')->getCallable(), array()), "timezone_offset" => $this->env->getExtension('oro_locale')->getTimeZoneOffset(), "format_address_by_address_country" => call_user_func_array($this->env->getFunction('oro_format_address_by_address_country')->getCallable(), array()), "unit" => array("temperature" => $this->env->getExtension('config_extension')->getConfigValue("oro_locale.temperature_unit"), "wind_speed" => $this->env->getExtension('config_extension')->getConfigValue("oro_locale.wind_speed_unit")), "format" => array("datetime" =>         // line 62
(isset($context["dateTimeFormats"]) ? $context["dateTimeFormats"] : null), "number" =>         // line 63
(isset($context["numberFormatSettings"]) ? $context["numberFormatSettings"] : null)), "calendar" => array("dow" => array("wide" => $this->env->getExtension('oro_locale_calendar')->getDayOfWeekNames("wide"), "abbreviated" => $this->env->getExtension('oro_locale_calendar')->getDayOfWeekNames("abbreviated"), "short" => $this->env->getExtension('oro_locale_calendar')->getDayOfWeekNames("short"), "narrow" => $this->env->getExtension('oro_locale_calendar')->getDayOfWeekNames("narrow")), "months" => array("wide" => $this->env->getExtension('oro_locale_calendar')->getMonthNames("wide"), "abbreviated" => $this->env->getExtension('oro_locale_calendar')->getMonthNames("abbreviated"), "narrow" => $this->env->getExtension('oro_locale_calendar')->getMonthNames("narrow")), "first_dow" => $this->env->getExtension('oro_locale_calendar')->getFirstDayOfWeek()));
        // line 80
        echo "
    var defaults = ";
        // line 81
        echo twig_jsonencode_filter((isset($context["defaults"]) ? $context["defaults"] : null));
        echo ";
    var settings = ";
        // line 82
        echo twig_jsonencode_filter((isset($context["settings"]) ? $context["settings"] : null));
        echo ";

    localeSettings.extendDefaults(defaults);
    localeSettings.extendSettings(settings);
});
</script>
";
    }

    public function getTemplateName()
    {
        return "OroLocaleBundle::locale_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 82,  105 => 81,  102 => 80,  100 => 63,  99 => 62,  98 => 49,  95 => 48,  93 => 46,  92 => 45,  91 => 44,  90 => 43,  88 => 42,  86 => 41,  83 => 40,  77 => 39,  75 => 36,  74 => 35,  73 => 34,  72 => 33,  71 => 32,  70 => 31,  69 => 29,  68 => 28,  67 => 27,  66 => 26,  65 => 25,  64 => 24,  63 => 22,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  57 => 17,  52 => 16,  50 => 15,  47 => 14,  41 => 13,  38 => 12,  36 => 10,  35 => 9,  34 => 8,  33 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
