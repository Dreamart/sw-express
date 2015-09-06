<?php

/* OroInstallerBundle::progress.html.twig */
class __TwigTemplate_959dadd13b6c65a24d8f6f16fa0d6f8ca44b429e5487f810c53fafb37b414095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'progress' => array($this, 'block_progress'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('progress', $context, $blocks);
    }

    public function block_progress($context, array $blocks = array())
    {
        // line 2
        $context["step"] = ((array_key_exists("step", $context)) ? (twig_lower_filter($this->env, (isset($context["step"]) ? $context["step"] : null))) : ("configure"));
        // line 3
        echo "<div class=\"progress-bar\">
    <ul>
        <li";
        // line 5
        if (((isset($context["step"]) ? $context["step"] : null) == "check")) {
            echo " class=\"active\"";
        }
        echo ">
            <em class=\"fix-bg\">&nbsp;</em>
            <strong class=\"step\">1</strong>
            <span>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.check.header"), "html", null, true);
        echo "</span>
        </li>
        <li";
        // line 10
        if (((isset($context["step"]) ? $context["step"] : null) == "configure")) {
            echo " class=\"active\"";
        }
        echo ">
            <em class=\"fix-bg\">&nbsp;</em>
            <strong class=\"step\">2</strong>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.configure.header"), "html", null, true);
        echo "</span>
        </li>
        <li";
        // line 15
        if (((isset($context["step"]) ? $context["step"] : null) == "schema")) {
            echo " class=\"active\"";
        }
        echo ">
            <em class=\"fix-bg\">&nbsp;</em>
            <strong class=\"step\">3</strong>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.schema.header"), "html", null, true);
        echo "</span>
        </li>
        <li";
        // line 20
        if (((isset($context["step"]) ? $context["step"] : null) == "setup")) {
            echo " class=\"active\"";
        }
        echo ">
            <em class=\"fix-bg\">&nbsp;</em>
            <strong class=\"step\">4</strong>
            <span>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.setup.header"), "html", null, true);
        echo "</span>
        </li>
        <li";
        // line 25
        if (((isset($context["step"]) ? $context["step"] : null) == "final")) {
            echo " class=\"active\"";
        }
        echo ">
            <em class=\"fix-bg\">&nbsp;</em>
            <strong class=\"step\">5</strong>
            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.final.header"), "html", null, true);
        echo "</span>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle::progress.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  84 => 25,  79 => 23,  71 => 20,  66 => 18,  58 => 15,  53 => 13,  45 => 10,  40 => 8,  32 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }
}
