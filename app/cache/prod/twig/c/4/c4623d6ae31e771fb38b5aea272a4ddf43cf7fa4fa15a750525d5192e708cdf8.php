<?php

/* OroUIBundle:Default:index.html.twig */
class __TwigTemplate_c4623d6ae31e771fb38b5aea272a4ddf43cf7fa4fa15a750525d5192e708cdf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroUIBundle:Default/navbar:blocks.html.twig", "OroUIBundle:Default:index.html.twig", 207);
        // line 207
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroUIBundle:Default/navbar:blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'head' => array($this, 'block_head'),
                'head_style' => array($this, 'block_head_style'),
                'script' => array($this, 'block_script'),
                'scripts_before' => array($this, 'block_scripts_before'),
                'application' => array($this, 'block_application'),
                'head_script' => array($this, 'block_head_script'),
                'bodyClass' => array($this, 'block_bodyClass'),
                'header' => array($this, 'block_header'),
                'left_panel' => array($this, 'block_left_panel'),
                'main' => array($this, 'block_main'),
                'before_content' => array($this, 'block_before_content'),
                'breadcrumb' => array($this, 'block_breadcrumb'),
                'before_content_addition' => array($this, 'block_before_content_addition'),
                'messages' => array($this, 'block_messages'),
                'page_container' => array($this, 'block_page_container'),
                'content' => array($this, 'block_content'),
                'right_panel' => array($this, 'block_right_panel'),
                'footer' => array($this, 'block_footer'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !$this->env->getExtension('oro_hash_nav')->checkIsHashNavigation()) {
            // line 2
            echo "    <!DOCTYPE html>
    <html class=\"";
            // line 3
            if ($this->env->getExtension('mobile_extension')->isMobile()) {
                echo "mobile";
            } else {
                echo "desktop";
            }
            echo "-version\">
    <head>
        ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 50
            echo "    </head>
    <body class=\"";
            // line 51
            if ($this->env->getExtension('mobile_extension')->isMobile()) {
                echo "mobile";
            } else {
                echo "desktop";
            }
            echo "-version lang-";
            echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFunction('oro_language')->getCallable(), array()), 0, 2), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
                echo "dev-mode ";
            }
            $this->displayBlock('bodyClass', $context, $blocks);
            echo "\">
    ";
            // line 52
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("after_body_start", $context)) ? (_twig_default_filter((isset($context["after_body_start"]) ? $context["after_body_start"] : null), "after_body_start")) : ("after_body_start")), array());
            // line 53
            echo "    <div id=\"progressbar\">
        <h3>";
            // line 54
            echo $this->env->getExtension('translator')->getTranslator()->trans("Loading...", array(), "messages");
            echo "</h3>
        <div class=\"progress progress-striped active\">
            <div class=\"bar\" style=\"width: 90%;\"></div>
        </div>
    </div>
    <div id=\"page\" style=\"display:none;\">
        <div id=\"top-page\">
            ";
            // line 61
            $this->displayBlock('header', $context, $blocks);
            // line 80
            echo "            ";
            if ($this->env->getExtension('mobile_extension')->isDesktop()) {
                // line 81
                echo "                ";
                $this->displayBlock('left_panel', $context, $blocks);
                // line 86
                echo "            ";
            }
            // line 87
            echo "            ";
            $this->displayBlock('main', $context, $blocks);
            // line 185
            echo "            ";
            if ($this->env->getExtension('mobile_extension')->isDesktop()) {
                // line 186
                echo "                ";
                $this->displayBlock('right_panel', $context, $blocks);
                // line 191
                echo "            ";
            }
            // line 192
            echo "            ";
            $this->displayBlock('footer', $context, $blocks);
            // line 198
            echo "        </div>
    </div>
    ";
            // line 200
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("before_body_end", $context)) ? (_twig_default_filter((isset($context["before_body_end"]) ? $context["before_body_end"] : null), "before_body_end")) : ("before_body_end")), array());
            // line 201
            echo "    </body>
    </html>
";
        } else {
            // line 204
            echo "    ";
            // line 205
            echo "    ";
            $context["title"] = $this->env->getExtension('oro_title')->render();
            // line 206
            echo "    ";
            // line 207
            echo "    ";
            // line 208
            echo "    ";
            $this->loadTemplate("OroNavigationBundle:HashNav:hashNavAjax.html.twig", "OroUIBundle:Default:index.html.twig", 208)->display(array_merge($context, array("data" => array("scripts" => $this->renderBlock("head_script", $context, $blocks), "content" => $this->renderBlock("page_container", $context, $blocks), "breadcrumb" => trim($this->renderBlock("breadcrumb", $context, $blocks)), "beforeContentAddition" => $this->renderBlock("before_content_addition", $context, $blocks)))));
        }
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <title>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Loading...", array(), "messages");
        echo "</title>
            <script id=\"page-title\" type=\"text/html\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render(), "html", null, true);
        echo "</script>
            <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=no\"/>
            <meta http-equiv=\"cache-control\" content=\"max-age=0\" />
            <meta http-equiv=\"cache-control\" content=\"no-cache\" />
            <meta http-equiv=\"expires\" content=\"0\" />
            <meta http-equiv=\"pragma\" content=\"no-cache\" />
            ";
        // line 13
        $this->displayBlock('head_style', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('script', $context, $blocks);
        // line 49
        echo "        ";
    }

    // line 13
    public function block_head_style($context, array $blocks = array())
    {
        // line 14
        echo "                ";
        if ($this->env->getExtension('oro_theme')->getThemeIcon()) {
            // line 15
            echo "                    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeIcon()), "html", null, true);
            echo "\" />
                ";
        }
        // line 17
        echo "               ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("head_style", $context)) ? (_twig_default_filter((isset($context["head_style"]) ? $context["head_style"] : null), "head_style")) : ("head_style")), array());
        // line 18
        echo "            ";
    }

    // line 20
    public function block_script($context, array $blocks = array())
    {
        // line 21
        echo "                ";
        $this->displayBlock('scripts_before', $context, $blocks);
        // line 24
        echo "                ";
        ob_start();
        // line 25
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("requirejs_config_extend", $context)) ? (_twig_default_filter((isset($context["requirejs_config_extend"]) ? $context["requirejs_config_extend"] : null), "requirejs_config_extend")) : ("requirejs_config_extend")), array());
        $context["requirejs_config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "OroUIBundle:Default:index.html.twig", 27)->display(array_merge($context, array("compressed" =>  !$this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : null), "debug", array()), "config_extend" =>         // line 29
(isset($context["requirejs_config_extend"]) ? $context["requirejs_config_extend"] : null))));
        // line 31
        echo "                ";
        $this->displayBlock('application', $context, $blocks);
        // line 36
        echo "                <script type=\"text/javascript\">
                    require(['oroui/js/init-layout', 'orouser/js/init-user', 'oroui/js/widget-manager']);
                ";
        // line 38
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            // line 39
            echo "                    require(['oroui/js/mobile/layout'], function (layout) {layout.init();});
                ";
        }
        // line 41
        echo "                ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 42
            echo "                    require(['oroui/js/tools'], function (tools) {tools.debug = true;});
                ";
        }
        // line 44
        echo "                </script>
                ";
        // line 45
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("scripts_after", $context)) ? (_twig_default_filter((isset($context["scripts_after"]) ? $context["scripts_after"] : null), "scripts_after")) : ("scripts_after")), array());
        // line 46
        echo "                ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 48
        echo "            ";
    }

    // line 21
    public function block_scripts_before($context, array $blocks = array())
    {
        // line 22
        echo "                    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("scripts_before", $context)) ? (_twig_default_filter((isset($context["scripts_before"]) ? $context["scripts_before"] : null), "scripts_before")) : ("scripts_before")), array());
        // line 23
        echo "                ";
    }

    // line 31
    public function block_application($context, array $blocks = array())
    {
        // line 32
        echo "                <script type=\"text/javascript\">
                    require(['oroui/js/app']);
                </script>
                ";
    }

    // line 46
    public function block_head_script($context, array $blocks = array())
    {
        // line 47
        echo "                ";
    }

    // line 51
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 61
    public function block_header($context, array $blocks = array())
    {
        // line 62
        echo "                <header class=\"navbar\" id=\"oroplatform-header\">
                    ";
        // line 63
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("before_navigation", $context)) ? (_twig_default_filter((isset($context["before_navigation"]) ? $context["before_navigation"] : null), "before_navigation")) : ("before_navigation")), array());
        // line 64
        echo "                    <div class=\"navbar-inner\">
                        <div class=\"container\">
                            ";
        // line 66
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("header_logo", $context)) ? (_twig_default_filter((isset($context["header_logo"]) ? $context["header_logo"] : null), "header_logo")) : ("header_logo")), array());
        // line 67
        echo "                            <ul class=\"nav pull-right user-menu\">
                                ";
        // line 68
        $this->displayBlock("user_menu", $context, $blocks);
        echo "
                            </ul>
                            <div class=\"nav top-search shortcuts\">
                                ";
        // line 71
        $this->displayBlock("navbar", $context, $blocks);
        echo "
                            </div>
                            ";
        // line 73
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("pin_tabs_list", $context)) ? (_twig_default_filter((isset($context["pin_tabs_list"]) ? $context["pin_tabs_list"] : null), "pin_tabs_list")) : ("pin_tabs_list")), array());
        // line 74
        echo "                        </div>
                    </div>
                    ";
        // line 76
        $this->loadTemplate("OroUIBundle:Default/navbar:top.html.twig", "OroUIBundle:Default:index.html.twig", 76)->display($context);
        // line 77
        echo "                    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("after_navigation", $context)) ? (_twig_default_filter((isset($context["after_navigation"]) ? $context["after_navigation"] : null), "after_navigation")) : ("after_navigation")), array());
        // line 78
        echo "                </header>
            ";
    }

    // line 81
    public function block_left_panel($context, array $blocks = array())
    {
        // line 82
        echo "                    <div id=\"left-panel\">
                        ";
        // line 83
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("left_panel", $context)) ? (_twig_default_filter((isset($context["left_panel"]) ? $context["left_panel"] : null), "left_panel")) : ("left_panel")), array("placement" => "left"));
        // line 84
        echo "                    </div>
                ";
    }

    // line 87
    public function block_main($context, array $blocks = array())
    {
        // line 88
        echo "                <div id=\"main\">
                    ";
        // line 89
        $this->displayBlock('before_content', $context, $blocks);
        // line 134
        echo "                    <div id=\"container\"";
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            echo " class=\"scrollable-container\"";
        }
        echo ">
                        ";
        // line 135
        $this->displayBlock('page_container', $context, $blocks);
        // line 182
        echo "                    </div>
                </div>
            ";
    }

    // line 89
    public function block_before_content($context, array $blocks = array())
    {
        // line 90
        echo "                    <div class=\"breadcrumb-pin\">
                        <div id=\"breadcrumb\">
                            ";
        // line 92
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 95
        echo "                        </div>
                        ";
        // line 96
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("pin_button", $context)) ? (_twig_default_filter((isset($context["pin_button"]) ? $context["pin_button"] : null), "pin_button")) : ("pin_button")), array());
        // line 97
        echo "                        <div id=\"before-content-addition\">
                            ";
        // line 98
        $this->displayBlock('before_content_addition', $context, $blocks);
        // line 99
        echo "                        </div>
                        <div id=\"flash-messages\">
                            ";
        // line 101
        $this->displayBlock('messages', $context, $blocks);
        // line 130
        echo "                        </div>

                    </div>
                    ";
    }

    // line 92
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 93
        echo "                                ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("breadcrumb", $context)) ? (_twig_default_filter((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "breadcrumb")) : ("breadcrumb")), array());
        // line 94
        echo "                            ";
    }

    // line 98
    public function block_before_content_addition($context, array $blocks = array())
    {
    }

    // line 101
    public function block_messages($context, array $blocks = array())
    {
        // line 102
        echo "                                <div class=\"flash-messages-frame\">
                                    <div class=\"flash-messages-holder\"></div>
                                </div>
                                <script type=\"text/template\" id=\"message-item-template\">
                                    <div class=\"alert <% if (type) {  %><%= 'alert-' + type %><% } %> fade in top-messages \">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        <div class=\"message\"><%= message %></div>
                                    </div>
                                </script>
                                <script type=\"text/javascript\">
                                    require(['jquery', 'oroui/js/messenger'],
                                            function(\$, messenger) {
                                                messenger.setup({
                                                    container: '#flash-messages .flash-messages-holder',
                                                    template: _.template(\$.trim(\$('#message-item-template').html()))
                                                });
                                                ";
        // line 118
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 119
            echo "                                                \$(function() {
                                                    ";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 121
                echo "                                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 122
                    echo "                                                    messenger.notificationFlashMessage(";
                    echo twig_jsonencode_filter($context["type"]);
                    echo ", ";
                    echo twig_jsonencode_filter($this->env->getExtension('translator')->trans($context["message"]));
                    echo ");
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                                });
                                                ";
        }
        // line 127
        echo "                                            });
                                </script>
                            ";
    }

    // line 135
    public function block_page_container($context, array $blocks = array())
    {
        // line 136
        echo "                            ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("content_before", $context)) ? (_twig_default_filter((isset($context["content_before"]) ? $context["content_before"] : null), "content_before")) : ("content_before")), array());
        // line 137
        echo "                            ";
        $this->displayBlock('content', $context, $blocks);
        // line 180
        echo "                            ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("content_after", $context)) ? (_twig_default_filter((isset($context["content_after"]) ? $context["content_after"] : null), "content_after")) : ("content_after")), array());
        // line 181
        echo "                        ";
    }

    // line 137
    public function block_content($context, array $blocks = array())
    {
        // line 138
        echo "                                <div class=\"container\" style=\"background: #fff\">
                                    <div class=\"row\">
                                        <div class=\"span4\">
                                            <hr />
                                            <h3>Layout pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column");
        echo "\">1 column </a></li>
                                                <li><a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column_toolbar");
        echo "\">1 column with toolbar</a></li>
                                                <li><a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column_menu");
        echo "\">1 column with menu</a></li>
                                                <li><a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("oro_ui_grid_page");
        echo "\">grid page</a></li>
                                                <li><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("oro_ui_grid_without_bar_page");
        echo "\">grid page without bar</a></li>
                                                <li><a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("oro_ui_2columns_left");
        echo "\">2 columns - left</a></li>
                                                <li><a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("oro_ui_2columns_right");
        echo "\">2 columns - right</a></li>
                                                <li><a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("oro_ui_3columns");
        echo "\">3 columns</a></li>
                                            </ul>
                                            <h3>Static pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("oro_ui_forgot_password");
        echo "\">Forgot password</a></li>
                                                <li><a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("oro_ui_login");
        echo "\">Login page</a></li>
                                                <li><a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("oro_ui_registration");
        echo "\">Registration page</a></li>
                                                <li><a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("oro_ui_404");
        echo "\">404</a></li>
                                                <li><a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("oro_ui_503");
        echo "\">503</a></li>
                                            </ul>
                                            <h3>Example pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("oro_ui_form_elements");
        echo "\">Form elements</a></li>
                                                <li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("oro_ui_form_horizontal");
        echo "\">Form Horizontal</a></li>
                                                <li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("oro_ui_messages");
        echo "\">System messages</a></li>
                                                <li><a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("oro_ui_title_bar");
        echo "\">Entity Title Bar</a></li>
                                                <li><a href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("oro_ui_buttons");
        echo "\">Buttons</a></li>
                                                <li><a href=\"#\">Print page</a></li>
                                                <li><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("oro_ui_tables");
        echo "\">Tables</a></li>
                                                <li><a href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("oro_ui_general_elements");
        echo "\">General elements</a></li>
                                            </ul>
                                            <h3>Js use page</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("oro_ui_dialog_styled");
        echo "\">jQuery Dialog styled</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            ";
    }

    // line 186
    public function block_right_panel($context, array $blocks = array())
    {
        // line 187
        echo "                    <div id=\"right-panel\">
                        ";
        // line 188
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("right_panel", $context)) ? (_twig_default_filter((isset($context["right_panel"]) ? $context["right_panel"] : null), "right_panel")) : ("right_panel")), array("placement" => "right"));
        // line 189
        echo "                    </div>
                ";
    }

    // line 192
    public function block_footer($context, array $blocks = array())
    {
        // line 193
        echo "                <div id=\"dialog-extend-fixed-container\"></div>
                <footer id=\"footer\" class=\"footer\">
                    ";
        // line 195
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("footer_inner", $context)) ? (_twig_default_filter((isset($context["footer_inner"]) ? $context["footer_inner"] : null), "footer_inner")) : ("footer_inner")), array());
        // line 196
        echo "                </footer>
            ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 196,  614 => 195,  610 => 193,  607 => 192,  602 => 189,  600 => 188,  597 => 187,  594 => 186,  584 => 174,  577 => 170,  573 => 169,  568 => 167,  564 => 166,  560 => 165,  556 => 164,  552 => 163,  545 => 159,  541 => 158,  537 => 157,  533 => 156,  529 => 155,  522 => 151,  518 => 150,  514 => 149,  510 => 148,  506 => 147,  502 => 146,  498 => 145,  494 => 144,  486 => 138,  483 => 137,  479 => 181,  476 => 180,  473 => 137,  470 => 136,  467 => 135,  461 => 127,  457 => 125,  451 => 124,  440 => 122,  435 => 121,  431 => 120,  428 => 119,  426 => 118,  408 => 102,  405 => 101,  400 => 98,  396 => 94,  393 => 93,  390 => 92,  383 => 130,  381 => 101,  377 => 99,  375 => 98,  372 => 97,  370 => 96,  367 => 95,  365 => 92,  361 => 90,  358 => 89,  352 => 182,  350 => 135,  343 => 134,  341 => 89,  338 => 88,  335 => 87,  330 => 84,  328 => 83,  325 => 82,  322 => 81,  317 => 78,  314 => 77,  312 => 76,  308 => 74,  306 => 73,  301 => 71,  295 => 68,  292 => 67,  290 => 66,  286 => 64,  284 => 63,  281 => 62,  278 => 61,  273 => 51,  269 => 47,  266 => 46,  259 => 32,  256 => 31,  252 => 23,  249 => 22,  246 => 21,  242 => 48,  239 => 46,  237 => 45,  234 => 44,  230 => 42,  227 => 41,  223 => 39,  221 => 38,  217 => 36,  214 => 31,  212 => 29,  211 => 28,  209 => 27,  206 => 25,  203 => 24,  200 => 21,  197 => 20,  193 => 18,  190 => 17,  184 => 15,  181 => 14,  178 => 13,  174 => 49,  172 => 20,  169 => 19,  167 => 13,  158 => 7,  153 => 6,  150 => 5,  144 => 208,  142 => 207,  140 => 206,  137 => 205,  135 => 204,  130 => 201,  128 => 200,  124 => 198,  121 => 192,  118 => 191,  115 => 186,  112 => 185,  109 => 87,  106 => 86,  103 => 81,  100 => 80,  98 => 61,  88 => 54,  85 => 53,  83 => 52,  68 => 51,  65 => 50,  63 => 5,  54 => 3,  51 => 2,  49 => 1,  14 => 207,);
    }
}
