<?php

/* OroDashboardBundle:Index:default.html.twig */
class __TwigTemplate_49488d0d6b2a9072d69d2300b0d012e38c2a8c6e65596edaa7c28b69663f71fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
            'titleNavButtons' => array($this, 'block_titleNavButtons'),
            'navButtons' => array($this, 'block_navButtons'),
            'widgets_content' => array($this, 'block_widgets_content'),
            'widgets' => array($this, 'block_widgets'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : null), "layout", array()), "OroDashboardBundle:Index:default.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Index:default.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute(        // line 3
(isset($context["dashboard"]) ? $context["dashboard"] : null), "getLabel", array(), "method"))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('translator')->trans("oro.dashboard.menu.dashboards_tab.label")), 1 => array("label" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 7
(isset($context["dashboard"]) ? $context["dashboard"] : null), "getLabel", array(), "method"))));
        // line 9
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroDashboardBundle:Index:default.html.twig", 9)->display($context);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        $context["widgetIdPrefix"] = (("dashboard-widget-" . twig_random($this->env)) . "-");
        // line 13
        $context["allowEdit"] = $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "entity", array()));
        // line 14
        echo "<div class=\"layout-content dashboard-container-wrapper\">
    <div class=\"container-fluid page-title\">
        <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
            <div class=\"row\">
                ";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "                ";
        $this->displayBlock('titleNavButtons', $context, $blocks);
        // line 107
        echo "            </div>
        </div>
    </div>
    ";
        // line 110
        $this->displayBlock('widgets_content', $context, $blocks);
        // line 180
        echo "
    <script type=\"text/javascript\">
        require(['orodashboard/js/dashboard-container', 'orodashboard/js/widget-picker'],
            function(dashboardContainer, widgetPicker) {
                ";
        // line 184
        $context["widgetIds"] = array();
        // line 185
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "widgets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 186
            echo "                    ";
            if (( !$this->getAttribute($this->getAttribute($context["widget"], "config", array(), "any", false, true), "acl", array(), "any", true, true) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted($this->getAttribute($this->getAttribute($context["widget"], "config", array()), "acl", array())))) {
                // line 187
                echo "                        ";
                $context["widgetIds"] = twig_array_merge((isset($context["widgetIds"]) ? $context["widgetIds"] : null), array(0 => ((isset($context["widgetIdPrefix"]) ? $context["widgetIdPrefix"] : null) . $this->getAttribute($context["widget"], "id", array()))));
                // line 188
                echo "                    ";
            }
            // line 189
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                dashboardContainer.initialize({
                    widgetIds: ";
        // line 191
        echo twig_jsonencode_filter((isset($context["widgetIds"]) ? $context["widgetIds"] : null));
        echo ",
                    dashboardId: ";
        // line 192
        echo twig_jsonencode_filter($this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "id", array()));
        echo ",
                    columnsSelector: '.dashboard-column',
                    allowEdit: ";
        // line 194
        echo (((isset($context["allowEdit"]) ? $context["allowEdit"] : null)) ? ("true") : ("false"));
        echo "
                });
                widgetPicker.init(";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "id", array()), "html", null, true);
        echo ");
            }
        );
    </script>
    <script type=\"text/javascript\">
        require(['oronavigation/js/content-manager'], function (contentManager) {
            // prevents caching dashboard page, to keep it actual
            contentManager.cacheIgnore();
        });
    </script>
</div>
";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        // line 19
        echo "                <div class=\"pull-left pull-left-extra\">
                    <div class=\"pull-left\">
                        <h1 class=\"oro-subtitle\">
                            ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "getLabel", array(), "method")), "html", null, true);
        echo "
                        </h1>
                    </div>
                </div>
                ";
    }

    // line 27
    public function block_titleNavButtons($context, array $blocks = array())
    {
        // line 28
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("dashboard_navButtons_before", $context)) ? (_twig_default_filter((isset($context["dashboard_navButtons_before"]) ? $context["dashboard_navButtons_before"] : null), "dashboard_navButtons_before")) : ("dashboard_navButtons_before")), array());
        // line 30
        echo "
                    <div class=\"pull-right title-buttons-container\">
                        ";
        // line 32
        if ((isset($context["allowEdit"]) ? $context["allowEdit"] : null)) {
            // line 33
            echo "                            <a href=\"javascript:void(0);\" class=\"dashboard-widgets-add btn main-group pull-left\">
                                <i class=\"icon-plus\"></i>
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.add_dashboard_widgets.add_widget"), "html", null, true);
            echo "
                            </a>
                        ";
        }
        // line 38
        echo "
                        ";
        // line 39
        if ((($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("DELETE", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "entity", array())) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_dashboard_create")) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "entity", array())))) {
            // line 40
            echo "                            ";
            ob_start();
            // line 41
            echo "                                ";
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "entity", array()))) {
                // line 42
                echo "                                    ";
                echo $context["UI"]->getdropdownItem(array("path" => $this->env->getExtension('routing')->getPath("oro_dashboard_update", array("id" => $this->getAttribute(                // line 43
(isset($context["dashboard"]) ? $context["dashboard"] : null), "id", array()))), "title" => $this->env->getExtension('translator')->trans("oro.dashboard.edit_dashboard_link.title"), "label" => $this->env->getExtension('translator')->trans("oro.dashboard.edit_dashboard_link.text"), "iCss" => "icon-edit"));
                // line 47
                echo "
                                ";
            }
            // line 49
            echo "                                ";
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_dashboard_create")) {
                // line 50
                echo "                                    ";
                echo $context["UI"]->getdropdownItem(array("path" => $this->env->getExtension('routing')->getPath("oro_dashboard_create"), "title" => $this->env->getExtension('translator')->trans("oro.dashboard.create_dashboard_link.title"), "label" => $this->env->getExtension('translator')->trans("oro.dashboard.create_dashboard_link.text"), "iCss" => "icon-plus"));
                // line 55
                echo "
                                ";
            }
            // line 57
            echo "                                ";
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("DELETE", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "entity", array()))) {
                // line 58
                echo "                                    <li>
                                        ";
                // line 59
                echo $context["UI"]->getdeleteLink(array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_api_delete_dashboard", array("id" => $this->getAttribute(                // line 60
(isset($context["dashboard"]) ? $context["dashboard"] : null), "id", array()))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_dashboard_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(                // line 64
(isset($context["dashboard"]) ? $context["dashboard"] : null), "id", array()), "entity_label" => $this->env->getExtension('translator')->trans("oro.dashboard.entity_label")));
                // line 66
                echo "
                                    </li>
                                ";
            }
            // line 69
            echo "                            ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 70
            echo "
                            ";
            // line 71
            echo $context["UI"]->getdropdownButton(array("label" => $this->env->getExtension('translator')->trans("oro.dashboard.tools_dropdown.label"), "iCss" => "icon icon-cog", "aCss" => "pull-right", "html" =>             // line 75
(isset($context["html"]) ? $context["html"] : null)));
            // line 76
            echo "
                        ";
        }
        // line 78
        echo "                    </div>
                    ";
        // line 79
        $this->displayBlock('navButtons', $context, $blocks);
        // line 103
        echo "
                    ";
        // line 104
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("dashboard_navButtons_after", $context)) ? (_twig_default_filter((isset($context["dashboard_navButtons_after"]) ? $context["dashboard_navButtons_after"] : null), "dashboard_navButtons_after")) : ("dashboard_navButtons_after")), array());
        // line 105
        echo "
                ";
    }

    // line 79
    public function block_navButtons($context, array $blocks = array())
    {
        // line 80
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["dashboards"]) ? $context["dashboards"] : null)) > 1)) {
            // line 81
            echo "                            <div class=\"dashboard-selector-container pull-right title-buttons-container\">
                                <label for=\"dashboard_selector\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.entity_plural_label"), "html", null, true);
            echo ":</label>
                                <select id=\"dashboard_selector\">
                                    ";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dashboards"]) ? $context["dashboards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["dashboardModel"]) {
                // line 85
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dashboardModel"], "id", array()), "html", null, true);
                echo "\"";
                if (($this->getAttribute($context["dashboardModel"], "id", array()) == $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : null), "id", array()))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                            ";
                // line 86
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["dashboardModel"], "getLabel", array(), "method")), 50), "html", null, true);
                echo "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboardModel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                </select>
                            </div>

                            <script type=\"text/javascript\">
                                require(['jquery', 'routing', 'oroui/js/mediator'],
                                function(\$, routing, mediator){
                                    \$('#dashboard_selector').on('change', function (e) {
                                        var url = routing.generate('oro_dashboard_view', {id: \$(e.currentTarget).val(), change_dashboard: true});
                                        mediator.execute('redirectTo', {url: url}, {redirect: true});
                                    });
                                });
                            </script>
                        ";
        }
        // line 102
        echo "                    ";
    }

    // line 110
    public function block_widgets_content($context, array $blocks = array())
    {
        // line 111
        echo "        ";
        $context["contentClass"] = ((array_key_exists("contentClass", $context)) ? (_twig_default_filter((isset($context["contentClass"]) ? $context["contentClass"] : null), "dashboard-container")) : ("dashboard-container"));
        // line 112
        echo "        <div class=\"scrollable-container\">
            <div class=\"responsive-section ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["contentClass"]) ? $context["contentClass"] : null), "html", null, true);
        echo "\">
                <div class=\"clearfix\">
                ";
        // line 115
        $this->displayBlock('widgets', $context, $blocks);
        // line 135
        echo "                </div>
            </div>
        </div>
        <script type=\"text/html\" id=\"available-dashboard-widgets\">
            ";
        // line 139
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) ? $context["widgets"] : null));
        foreach ($context['_seq'] as $context["widgetName"] => $context["widget"]) {
            // line 140
            echo "                ";
            if (( !$this->getAttribute($context["widget"], "acl", array(), "any", true, true) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted($this->getAttribute($context["widget"], "acl", array())))) {
                // line 141
                echo "                    <div class=\"dashboard-widget-container\">
                        <table>
                            <tr class=\"dashboard-widget-title\">
                                <td class=\"dashboard-widget-small-column\">
                                    <a href=\"javascript:void(0);\" class=\"dashboard-picker-collapse\">
                                    </a>
                                </td>
                                <td class=\"dashboard-widget-small-column\">
                                    ";
                // line 149
                if ($this->getAttribute($context["widget"], "icon", array(), "any", true, true)) {
                    // line 150
                    echo "                                    <img class=\"dashboard-widget-icon\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["widget"], "icon", array())), "html", null, true);
                    echo "\" alt=\"Preview\" />
                                    ";
                } else {
                    // line 152
                    echo "                                    <img class=\"dashboard-widget-icon\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/orodashboard/img/no_icon.png"), "html", null, true);
                    echo "\" alt=\"Preview\" />
                                    ";
                }
                // line 154
                echo "                                </td>
                                <td class=\"dashboard-widget-large-column\">
                                    ";
                // line 156
                if ($this->getAttribute($context["widget"], "label", array(), "any", true, true)) {
                    // line 157
                    echo "                                        <strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["widget"], "label", array())), "html", null, true);
                    echo "</strong>
                                    ";
                }
                // line 159
                echo "                                </td>
                                <td class=\"dashboard-widgets-pick-wrapper\">
                                    <a class=\"btn add-widget-button btn-primary\" data-widget-name=\"";
                // line 161
                echo twig_escape_filter($this->env, $context["widgetName"], "html", null, true);
                echo "\">
                                            ";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.add_dashboard_widgets.add_to_dashboard"), "html", null, true);
                echo "
                                        </a>
                                </td>
                            </tr>
                            <tr class=\"dashboard-widgets-description\">
                                <td colspan=\"2\"></td>
                                <td class=\"dashboard-widget-large-column\">
                                    ";
                // line 169
                if ($this->getAttribute($context["widget"], "description", array(), "any", true, true)) {
                    // line 170
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["widget"], "description", array())), "html", null, true);
                    echo "
                                    ";
                }
                // line 172
                echo "                                </td>
                            </tr>
                        </table>
                    </div>
                ";
            }
            // line 177
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['widgetName'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "        </script>
    ";
    }

    // line 115
    public function block_widgets($context, array $blocks = array())
    {
        // line 116
        echo "                    ";
        echo $this->getAttribute(        // line 117
$this, "renderWidgetsColumn", array(0 => array("widgets" => $this->getAttribute(        // line 118
(isset($context["dashboard"]) ? $context["dashboard"] : null), "getOrderedColumnWidgets", array(0 => 0, 1 => false, 2 => true), "method"), "columnElementId" => "dashboard-column-0", "columnClass" => "dashboard-column", "widgetIdPrefix" =>         // line 121
(isset($context["widgetIdPrefix"]) ? $context["widgetIdPrefix"] : null), "allowEdit" =>         // line 122
(isset($context["allowEdit"]) ? $context["allowEdit"] : null))), "method");
        // line 124
        echo "
                    ";
        // line 125
        echo $this->getAttribute(        // line 126
$this, "renderWidgetsColumn", array(0 => array("widgets" => $this->getAttribute(        // line 127
(isset($context["dashboard"]) ? $context["dashboard"] : null), "getOrderedColumnWidgets", array(0 => 1, 1 => true, 2 => false), "method"), "columnElementId" => "dashboard-column-1", "columnClass" => "dashboard-column", "widgetIdPrefix" =>         // line 130
(isset($context["widgetIdPrefix"]) ? $context["widgetIdPrefix"] : null), "allowEdit" =>         // line 131
(isset($context["allowEdit"]) ? $context["allowEdit"] : null))), "method");
        // line 133
        echo "
                ";
    }

    // line 209
    public function getrenderWidgetsColumn($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 210
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "columnElementId", array()), "html", null, true);
            echo "\" class=\"responsive-cell dashboard-column\">
        ";
            // line 211
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "widgets", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 212
                echo "            ";
                if (( !$this->getAttribute($this->getAttribute($context["widget"], "config", array(), "any", false, true), "acl", array(), "any", true, true) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted($this->getAttribute($this->getAttribute($context["widget"], "config", array()), "acl", array())))) {
                    // line 213
                    echo "                ";
                    echo $this->env->getExtension('oro_widget')->render($this->env, array("widgetType" => "dashboard-item", "wid" => ($this->getAttribute(                    // line 216
(isset($context["options"]) ? $context["options"] : null), "widgetIdPrefix", array()) . $this->getAttribute($context["widget"], "id", array())), "url" => $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute(                    // line 217
$context["widget"], "config", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute($context["widget"], "config", array()), "route_parameters", array()), array("_widgetId" => $this->getAttribute($context["widget"], "id", array())))), "state" => array("id" => $this->getAttribute(                    // line 219
$context["widget"], "id", array()), "expanded" => $this->getAttribute(                    // line 220
$context["widget"], "expanded", array()), "layoutPosition" => $this->getAttribute(                    // line 221
$context["widget"], "layoutPosition", array())), "allowEdit" => $this->getAttribute(                    // line 223
(isset($context["options"]) ? $context["options"] : null), "allowEdit", array()), "showConfig" => ($this->getAttribute(                    // line 224
(isset($context["options"]) ? $context["options"] : null), "allowEdit", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["widget"], "config", array()), "configuration", array())) > 0))));
                    // line 226
                    echo "
            ";
                }
                // line 228
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "        <div class=\"empty-text";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "widgets", array())) > 0)) {
                echo " hidden-empty-text";
            }
            echo "\">
            <div class=\"widget-placeholder\">
                ";
            // line 231
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allowEdit", array())) {
                // line 232
                echo "                    ";
                echo $this->env->getExtension('translator')->trans("oro.dashboard.empty_column_message.allowed");
                echo "
                ";
            } else {
                // line 234
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.empty_column_message.denied"), "html", null, true);
                echo "
                ";
            }
            // line 236
            echo "            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Index:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 236,  498 => 234,  492 => 232,  490 => 231,  482 => 229,  476 => 228,  472 => 226,  470 => 224,  469 => 223,  468 => 221,  467 => 220,  466 => 219,  465 => 217,  464 => 216,  462 => 213,  459 => 212,  455 => 211,  450 => 210,  438 => 209,  433 => 133,  431 => 131,  430 => 130,  429 => 127,  428 => 126,  427 => 125,  424 => 124,  422 => 122,  421 => 121,  420 => 118,  419 => 117,  417 => 116,  414 => 115,  409 => 178,  403 => 177,  396 => 172,  390 => 170,  388 => 169,  378 => 162,  374 => 161,  370 => 159,  364 => 157,  362 => 156,  358 => 154,  352 => 152,  346 => 150,  344 => 149,  334 => 141,  331 => 140,  327 => 139,  321 => 135,  319 => 115,  314 => 113,  311 => 112,  308 => 111,  305 => 110,  301 => 102,  286 => 89,  277 => 86,  268 => 85,  264 => 84,  259 => 82,  256 => 81,  253 => 80,  250 => 79,  245 => 105,  243 => 104,  240 => 103,  238 => 79,  235 => 78,  231 => 76,  229 => 75,  228 => 71,  225 => 70,  222 => 69,  217 => 66,  215 => 64,  214 => 60,  213 => 59,  210 => 58,  207 => 57,  203 => 55,  200 => 50,  197 => 49,  193 => 47,  191 => 43,  189 => 42,  186 => 41,  183 => 40,  181 => 39,  178 => 38,  172 => 35,  168 => 33,  166 => 32,  162 => 30,  160 => 29,  157 => 28,  154 => 27,  145 => 22,  140 => 19,  137 => 18,  121 => 196,  116 => 194,  111 => 192,  107 => 191,  104 => 190,  98 => 189,  95 => 188,  92 => 187,  89 => 186,  84 => 185,  82 => 184,  76 => 180,  74 => 110,  69 => 107,  66 => 27,  64 => 18,  58 => 14,  56 => 13,  54 => 12,  51 => 11,  46 => 9,  44 => 7,  42 => 5,  39 => 4,  35 => 1,  33 => 3,  30 => 2,  24 => 1,);
    }
}
