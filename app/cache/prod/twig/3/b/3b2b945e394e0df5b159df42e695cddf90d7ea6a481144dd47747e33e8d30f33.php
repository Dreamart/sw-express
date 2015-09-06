<?php

/* OroInstallerBundle::layout.html.twig */
class __TwigTemplate_3b2b945e394e0df5b159df42e695cddf90d7ea6a481144dd47747e33e8d30f33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'progress' => array($this, 'block_progress'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if IE 7 ]><html class=\"no-js ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroinstaller/css/style.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroinstaller/lib/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroinstaller/lib/jquery.ajaxQueue.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 14
        $this->displayBlock('javascript', $context, $blocks);
        // line 92
        echo "</head>
<body>
    <header class=\"header\">
        <h1 class=\"logo\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title"), "html", null, true);
        echo "</h1>
    </header>
    <div class=\"wrapper\">
        <div class=\"content\">
            ";
        // line 99
        $this->displayBlock('progress', $context, $blocks);
        // line 100
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo "        </div>
    </div>
    ";
        // line 103
        $this->displayBlock('bottom', $context, $blocks);
        // line 104
        echo "</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title"), "html", null, true);
    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        // line 15
        echo "    <script type=\"text/javascript\">
        \$(function() {
            \$('.progress-bar li:last-child em.fix-bg').width(\$('.progress-bar li:last-child').width() / 2);
            \$('.progress-bar li:first-child em.fix-bg').width(\$('.progress-bar li:first-child').width() / 2);

            \$('form').submit(function () {
                \$(this).find(':submit').attr('disabled', true).addClass('disabled');
            });

        });

        function ajaxQueue(actions, url) {
            var finRes  = true,
                aborted = false;

            \$.each(actions, function(i) {
                var stepCon = \$('#step-' + this);

                stepCon.closest('tr').find('td:last').text('";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("wait"), "html", null, true);
        echo "');

                if (i == 0) {
                    stepCon
                        .addClass('icon-wait')
                        .closest('tr').find('td:last').text('";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("progress"), "html", null, true);
        echo "');
                }

                \$.ajaxQueue({
                    url: '?action=' + this,
                    beforeSend: function (jqXHR) {
                        if (!finRes) {
                            aborted = true;
                            jqXHR.abort();
                        }
                    }
                }).done(function(data) {
                    var curRes = typeof data.result != 'undefined' && data.result,
                        exitCode = typeof data.exitCode != 'undefined' ? data.exitCode : 0,
                        finRes = finRes || curRes;

                    stepCon
                        .removeClass('icon-wait')
                        .addClass('icon-' + (curRes ? (exitCode == 0 ? 'yes' : 'warning') : 'no'))
                        .closest('tr')
                            .find('td:last').text(
                                curRes
                                    ? (exitCode == 0 ? '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("passed"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("skipped"), "html", null, true);
        echo "')
                                    : '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("failed"), "html", null, true);
        echo "'
                            ).end()
                        .closest('tr').next()
                            .find('td:last').text('";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("progress"), "html", null, true);
        echo "').end()
                            .find('span').addClass('icon-wait');

                    if (i == actions.length - 1 && finRes) {
                        \$('a.back').removeClass('disabled');
                        \$('a.primary').removeClass('disabled').attr('href', url);
                    }
                }).fail(function() {
                    if (aborted) {
                        stepCon
                            .removeClass('icon-wait')
                            .addClass('icon-warning')
                            .closest('tr').find('td:last').text('";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("skipped"), "html", null, true);
        echo "');
                    } else {
                        finRes = false;
                        stepCon
                            .removeClass('icon-wait')
                            .addClass('icon-no')
                            .closest('tr').find('td:last').text('";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("failed"), "html", null, true);
        echo "');
                    }
                    if (i == actions.length - 1) {
                        \$('a.back').removeClass('disabled');
                    }
                });
            });
        }
    </script>
    ";
    }

    // line 99
    public function block_progress($context, array $blocks = array())
    {
    }

    // line 100
    public function block_content($context, array $blocks = array())
    {
    }

    // line 103
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 103,  199 => 100,  194 => 99,  180 => 82,  171 => 76,  156 => 64,  150 => 61,  144 => 60,  119 => 38,  111 => 33,  91 => 15,  88 => 14,  82 => 9,  76 => 104,  74 => 103,  70 => 101,  67 => 100,  65 => 99,  58 => 95,  53 => 92,  51 => 14,  47 => 13,  43 => 12,  39 => 11,  34 => 9,  24 => 1,);
    }
}
