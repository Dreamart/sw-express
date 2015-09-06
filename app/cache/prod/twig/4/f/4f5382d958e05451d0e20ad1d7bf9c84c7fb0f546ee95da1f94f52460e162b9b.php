<?php

/* OroCalendarBundle:Form:fields.html.twig */
class __TwigTemplate_4f5382d958e05451d0e20ad1d7bf9c84c7fb0f546ee95da1f94f52460e162b9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_calendar_choice_row' => array($this, 'block_oro_calendar_choice_row'),
            'oro_calendar_choice_template_row' => array($this, 'block_oro_calendar_choice_template_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_calendar_choice_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('oro_calendar_choice_template_row', $context, $blocks);
    }

    // line 1
    public function block_oro_calendar_choice_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ( !twig_test_empty((isset($context["choices"]) ? $context["choices"] : null))) {
            // line 3
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 1)) {
                // line 4
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row');
                echo "
        ";
            } else {
                // line 6
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row', array("label" => false));
                echo "
        ";
            }
            // line 8
            echo "    ";
        }
    }

    // line 11
    public function block_oro_calendar_choice_template_row($context, array $blocks = array())
    {
        // line 12
        echo "    <% var ";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "Template = '';
    if (";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "TemplateType === 'single') {
        ";
        // line 14
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "Template = '";
        // line 15
        ob_start();
        // line 16
        echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <div id=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"horizontal validate-group\">
                    <div class=\"oro-clearfix\">
                        <input type=\"checkbox\" id=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_0\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "[]\" value=\"< %= calendars[0].uid % >\">
                        <label for=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_0\">< %= ";
        echo twig_jsonencode_filter($this->env->getExtension('translator')->trans("oro.calendar.add_to_calendar"));
        echo ".replace(\"%name%\", calendars[0].name) % ><em>&nbsp;</em></label>
                    </div>
                </div>
            </div>
        </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 27
        echo "';
    } else if (";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "TemplateType === 'multiple') {
        ";
        // line 29
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "Template = '";
        // line 30
        ob_start();
        // line 31
        echo "        <div class=\"control-group\">
            <label data-required=\"1\" class=\"control-label required\" for=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "<em>*</em></label>
            <div class=\"controls\">
                <select id=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\" data-required=\"1\">
                < % for (var i = 0; i < calendars.length; i++) { % >
                    <option value=\"< %= calendars[i].uid % >\">< %= calendars[i].name % ></option>
                < % } % >
                </select>
            </div>
        </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "';
    } %>
    <% if (";
        // line 44
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "Template) { %>
        <%= _.template(";
        // line 45
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "Template.replace(/\\< %/g, '<' + '%').replace(/% \\>/g, '%' + '>'))({calendars: calendars}) %>
    <% } %>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  138 => 44,  134 => 42,  121 => 34,  114 => 32,  111 => 31,  109 => 30,  106 => 29,  102 => 28,  99 => 27,  88 => 21,  82 => 20,  77 => 18,  73 => 16,  71 => 15,  68 => 14,  64 => 13,  59 => 12,  56 => 11,  51 => 8,  45 => 6,  39 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 11,  23 => 10,  21 => 1,);
    }
}
