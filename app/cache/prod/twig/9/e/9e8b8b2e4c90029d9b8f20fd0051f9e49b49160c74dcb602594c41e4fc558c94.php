<?php

/* OroAttachmentBundle:Form:fields.html.twig */
class __TwigTemplate_9e8b8b2e4c90029d9b8f20fd0051f9e49b49160c74dcb602594c41e4fc558c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_file_widget' => array($this, 'block_oro_file_widget'),
            'oro_image_widget' => array($this, 'block_oro_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_file_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('oro_image_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_file_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"control-group\" style=\"margin-bottom: 0\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
            ";
        // line 5
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'errors')) {
            // line 6
            echo "                <div style=\"clear:both; float:left\">
                    ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'errors');
            echo "
                </div>
            ";
        }
        // line 10
        echo "        </div>
        ";
        // line 11
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 12
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "originalFilename", array()))) {
                // line 13
                echo "                ";
                $context["parentEntity"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array());
                // line 14
                echo "                ";
                $context["fieldName"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array());
                // line 15
                echo "
                ";
                // line 16
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array(), "any", true, true)) {
                    // line 17
                    echo "                ";
                    $context["inputId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array()), "vars", array()), "id", array());
                    // line 18
                    echo "                ";
                    $context["buttonId"] = ((isset($context["inputId"]) ? $context["inputId"] : null) . "btn");
                    // line 19
                    echo "                ";
                    $context["divId"] = ((isset($context["inputId"]) ? $context["inputId"] : null) . "div");
                    // line 20
                    echo "                <div id=\"";
                    echo twig_escape_filter($this->env, (isset($context["divId"]) ? $context["divId"] : null), "html", null, true);
                    echo "\" class=\"well well-small oro_attachment_file\">
                    ";
                    // line 21
                    echo $this->env->getExtension('oro_attachment_file')->getFileView($this->env, (isset($context["parentEntity"]) ? $context["parentEntity"] : null), (isset($context["fieldName"]) ? $context["fieldName"] : null), (isset($context["value"]) ? $context["value"] : null));
                    echo "
                    ";
                    // line 22
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array()), 'row');
                    echo "
                    <button id = \"";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : null), "html", null, true);
                    echo "\" class=\"btn btn-action btn-link\" type=\"button\" data-related=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array()), "vars", array()), "name", array()), "html", null, true);
                    echo "\"></button>
                </div>
                <script type=\"text/javascript\">
                    require(['jquery'],
                    function(\$){
                        \$(function() {
                            \$(document).on('click', '#";
                    // line 29
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : null), "html", null, true);
                    echo "', function() {
                                \$('#";
                    // line 30
                    echo twig_escape_filter($this->env, (isset($context["divId"]) ? $context["divId"] : null), "html", null, true);
                    echo "').hide();
                                \$('#";
                    // line 31
                    echo twig_escape_filter($this->env, (isset($context["inputId"]) ? $context["inputId"] : null), "html", null, true);
                    echo "').val('true');
                                return false;
                            });
                        });
                    });
                </script>
                ";
                } else {
                    // line 38
                    echo "                    <div class=\"well well-small oro_attachment_file\">
                        ";
                    // line 39
                    echo $this->env->getExtension('oro_attachment_file')->getFileView($this->env, (isset($context["parentEntity"]) ? $context["parentEntity"] : null), (isset($context["fieldName"]) ? $context["fieldName"] : null), (isset($context["value"]) ? $context["value"] : null));
                    echo "
                    </div>
                ";
                }
                // line 42
                echo "            ";
            }
            // line 43
            echo "        ";
        }
        // line 44
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 47
    public function block_oro_image_widget($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        ob_start();
        // line 49
        echo "        <div class=\"control-group\" style=\"margin-bottom: 0\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
            ";
        // line 51
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'errors')) {
            // line 52
            echo "                <div style=\"clear:both; float:left\">
                    ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'errors');
            echo "
                </div>
            ";
        }
        // line 56
        echo "        </div>
        ";
        // line 57
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 58
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "originalFilename", array()))) {
                // line 59
                echo "                ";
                $context["parentEntity"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "value", array());
                // line 60
                echo "                ";
                $context["fieldName"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array());
                // line 61
                echo "
                ";
                // line 62
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array(), "any", true, true)) {
                    // line 63
                    echo "                ";
                    $context["inputId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array()), "vars", array()), "id", array());
                    // line 64
                    echo "                ";
                    $context["buttonId"] = ((isset($context["inputId"]) ? $context["inputId"] : null) . "btn");
                    // line 65
                    echo "                ";
                    $context["divId"] = ((isset($context["inputId"]) ? $context["inputId"] : null) . "div");
                    // line 66
                    echo "                <div id=\"";
                    echo twig_escape_filter($this->env, (isset($context["divId"]) ? $context["divId"] : null), "html", null, true);
                    echo "\" class=\"well well-small oro_attachment_file\">
                    <a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_attachment_file')->getFIleUrl((isset($context["parentEntity"]) ? $context["parentEntity"] : null), (isset($context["fieldName"]) ? $context["fieldName"] : null), (isset($context["value"]) ? $context["value"] : null), "download", true), "html", null, true);
                    echo "\" class=\"no-hash filename\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "originalFilename", array()), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_attachment_file')->getResizedImageUrl((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "originalFilename", array()), "html", null, true);
                    echo "\" />
                        ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "originalFilename", array()), "html", null, true);
                    echo "
                    </a>
                    ";
                    // line 71
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array()), 'row');
                    echo "
                    <button id = \"";
                    // line 72
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : null), "html", null, true);
                    echo "\" class=\"btn btn-action btn-link delete\" type=\"button\" data-related=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array()), "vars", array()), "name", array()), "html", null, true);
                    echo "\"></button>
                    <script type=\"text/javascript\">
                        require(['jquery'],
                            function(\$){
                                \$(function() {
                                    \$(document).on('click', '#";
                    // line 77
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : null), "html", null, true);
                    echo "', function() {
                                        \$('#";
                    // line 78
                    echo twig_escape_filter($this->env, (isset($context["divId"]) ? $context["divId"] : null), "html", null, true);
                    echo "').hide();
                                        \$('#";
                    // line 79
                    echo twig_escape_filter($this->env, (isset($context["inputId"]) ? $context["inputId"] : null), "html", null, true);
                    echo "').val('true');
                                        return false;
                                    });
                                });
                            });
                    </script>
                </div>
                ";
                } else {
                    // line 87
                    echo "                    <div class=\"well well-small oro_attachment_file\">
                        <a href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_attachment_file')->getFIleUrl((isset($context["parentEntity"]) ? $context["parentEntity"] : null), (isset($context["fieldName"]) ? $context["fieldName"] : null), (isset($context["value"]) ? $context["value"] : null), "download", true), "html", null, true);
                    echo "\" class=\"no-hash filename\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "originalFilename", array()), "html", null, true);
                    echo "\">
                            <img src=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_attachment_file')->getResizedImageUrl((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "originalFilename", array()), "html", null, true);
                    echo "\" />
                            ";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "originalFilename", array()), "html", null, true);
                    echo "
                        </a>
                    </div>
                ";
                }
                // line 94
                echo "            ";
            }
            // line 95
            echo "        ";
        }
        // line 96
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  279 => 96,  276 => 95,  273 => 94,  266 => 90,  260 => 89,  254 => 88,  251 => 87,  240 => 79,  236 => 78,  232 => 77,  222 => 72,  218 => 71,  213 => 69,  207 => 68,  201 => 67,  196 => 66,  193 => 65,  190 => 64,  187 => 63,  185 => 62,  182 => 61,  179 => 60,  176 => 59,  173 => 58,  171 => 57,  168 => 56,  162 => 53,  159 => 52,  157 => 51,  153 => 50,  150 => 49,  147 => 48,  144 => 47,  139 => 44,  136 => 43,  133 => 42,  127 => 39,  124 => 38,  114 => 31,  110 => 30,  106 => 29,  95 => 23,  91 => 22,  87 => 21,  82 => 20,  79 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  48 => 7,  45 => 6,  43 => 5,  39 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 47,  23 => 46,  21 => 1,);
    }
}
