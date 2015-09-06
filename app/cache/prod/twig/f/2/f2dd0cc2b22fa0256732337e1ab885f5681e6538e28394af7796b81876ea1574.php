<?php

/* OroConfigBundle::macros.html.twig */
class __TwigTemplate_f2dd0cc2b22fa0256732337e1ab885f5681e6538e28394af7796b81876ea1574 extends Twig_Template
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
        // line 33
        echo "
";
        // line 57
        echo "
";
        // line 75
        echo "
";
        // line 160
        echo "
";
        // line 221
        echo "
";
        // line 246
        echo "
";
    }

    // line 4
    public function getrenderTitleAndButtons($__pageTitle__ = null, $__buttons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pageTitle" => $__pageTitle__,
            "buttons" => $__buttons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    <div class=\"container-fluid configuration-header clearfix\">
    ";
            // line 6
            if (twig_test_iterable((isset($context["pageTitle"]) ? $context["pageTitle"] : null))) {
                // line 7
                echo "        <div class=\"customer-info customer-simple pull-left\">
        ";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageTitle"]) ? $context["pageTitle"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                    // line 9
                    echo "            ";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 10
                        echo "            <div class=\"sub-title\">
                ";
                        // line 11
                        echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                        echo "
            </div>
            <span class=\"separator\">/</span>
            ";
                    } else {
                        // line 15
                        echo "            <h1 class=\"user-name\">";
                        echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                        echo "</h1>
            ";
                    }
                    // line 17
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        </div>
    ";
            } else {
                // line 20
                echo "        <h1>
            ";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
                echo "
        </h1>
    ";
            }
            // line 24
            echo "        <div class=\"pull-right\">
            ";
            // line 25
            if (array_key_exists("buttons", $context)) {
                // line 26
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) ? $context["buttons"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 27
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["button"], "html", null, true);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            ";
            }
            // line 30
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function getrenderScrollData($__data__ = null, $__form__ = null, $__activeTabName__ = false, $__activeSubTabName__ = false, $__routeName__ = "oro_config_configuration_system", $__routeParameters__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "form" => $__form__,
            "activeTabName" => $__activeTabName__,
            "activeSubTabName" => $__activeSubTabName__,
            "routeName" => $__routeName__,
            "routeParameters" => $__routeParameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroConfigBundle::macros.html.twig", 45);
            // line 46
            echo "    <div class=\"system-configuration-container left-panel-container\">
        <div class=\"placeholder\">
            <div class=\"scrollable-container\">
                ";
            // line 49
            if (((isset($context["activeSubTabName"]) ? $context["activeSubTabName"] : null) && ((isset($context["form"]) ? $context["form"] : null) != false))) {
                // line 50
                echo "                    ";
                echo $this->getAttribute($this, "renderTabs", array(0 => (isset($context["data"]) ? $context["data"] : null), 1 => (isset($context["activeTabName"]) ? $context["activeTabName"] : null), 2 => (isset($context["activeSubTabName"]) ? $context["activeSubTabName"] : null), 3 => (isset($context["routeName"]) ? $context["routeName"] : null), 4 => (isset($context["routeParameters"]) ? $context["routeParameters"] : null)), "method");
                echo "
                    ";
                // line 51
                echo $this->getAttribute($this, "renderTabContent", array(0 => (isset($context["form"]) ? $context["form"] : null)), "method");
                echo "
                ";
            }
            // line 53
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

    // line 67
    public function getrenderTabNavItem($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 68
            echo "    <li ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isActive", array())) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 69
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isActive", array())) {
                echo "javascript:void(0);";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "url", array()), "html", null, true);
            }
            echo "\">
            ";
            // line 70
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "icon", array(), "any", true, true) && ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "icon", array()) != ""))) {
                echo "<i class=\"icon fa ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 71
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array())), "html", null, true);
            echo "
        </a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 85
    public function getrenderTabs($__data__ = null, $__activeTabName__ = false, $__activeSubTabName__ = false, $__routeName__ = "oro_config_configuration_system", $__routeParameters__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "activeTabName" => $__activeTabName__,
            "activeSubTabName" => $__activeSubTabName__,
            "routeName" => $__routeName__,
            "routeParameters" => $__routeParameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 86
            echo "    <div class=\"left-panel\">
        <div class=\"system-configuration-search\">
            ";
            // line 94
            echo "            <div class=\"clearfix\">
                ";
            // line 95
            echo $this->getAttribute($this, "renderCollapseExpandActions", array(0 => "#sidebar-menu-tree"), "method");
            echo "
            </div>
        </div>
        ";
            // line 98
            if (twig_test_iterable((isset($context["data"]) ? $context["data"] : null))) {
                // line 99
                echo "        <ul class=\"system-configuration-accordion accordion\" id=\"sidebar-menu-tree\">
            ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 101
                    echo "            ";
                    $context["tabData"] = twig_array_merge(array("isActive" => (                    // line 102
(isset($context["activeTabName"]) ? $context["activeTabName"] : null) && ((isset($context["activeTabName"]) ? $context["activeTabName"] : null) == $this->getAttribute($context["tab"], "name", array()))), "name" => $this->getAttribute(                    // line 103
$context["tab"], "name", array()), "url" => $this->env->getExtension('routing')->getPath(                    // line 104
(isset($context["routeName"]) ? $context["routeName"] : null), twig_array_merge(array("activeGroup" => $this->getAttribute($context["tab"], "name", array())), (isset($context["routeParameters"]) ? $context["routeParameters"] : null)))), $this->getAttribute(                    // line 105
$context["tab"], "toViewData", array()));
                    // line 107
                    echo "            <li class=\"accordion-group\">
                <div class=\"accordion-heading\">
                    <a href=\"#config_tab_";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "name", array()), "html", null, true);
                    echo "\" data-toggle=\"collapse\"
                       class=\"accordion-toggle";
                    // line 110
                    if ( !$this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "isActive", array())) {
                        echo " collapsed";
                    }
                    echo "\">";
                    // line 111
                    if (($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "icon", array(), "any", true, true) && ($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "icon", array()) != ""))) {
                        echo "<i class=\"icon ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "icon", array()), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "title", array())), "html", null, true);
                    // line 113
                    echo "</a>
                </div>
                <div id=\"config_tab_";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "name", array()), "html", null, true);
                    echo "\" class=\"accordion-body collapse";
                    if ($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "isActive", array())) {
                        echo " in";
                    }
                    echo "\">
                    <div class=\"accordion-inner\"><ul>
                    ";
                    // line 117
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($context["tab"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                        // line 118
                        echo "                        ";
                        $context["activeSubTab"] = null;
                        // line 119
                        echo "                        ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($context["group"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["subTab"]) {
                            // line 120
                            echo "                            ";
                            if ((($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "isActive", array()) && (isset($context["activeSubTabName"]) ? $context["activeSubTabName"] : null)) && ((isset($context["activeSubTabName"]) ? $context["activeSubTabName"] : null) == $this->getAttribute($context["subTab"], "name", array())))) {
                                // line 121
                                echo "                                ";
                                $context["activeSubTab"] = $context["subTab"];
                                // line 122
                                echo "                            ";
                            }
                            // line 123
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subTab'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 124
                        echo "                        ";
                        $context["groupData"] = twig_array_merge(array("isActive" =>  !(null ===                         // line 125
(isset($context["activeSubTab"]) ? $context["activeSubTab"] : null)), "name" => $this->getAttribute(                        // line 126
$context["group"], "name", array())), $this->getAttribute(                        // line 127
$context["group"], "toViewData", array()));
                        // line 129
                        echo "                        <li class=\"accordion-group\">
                            <div class=\"accordion-heading\">
                                <a href=\"#config_tab_group_";
                        // line 131
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : null), "name", array()), "html", null, true);
                        echo "\" data-toggle=\"collapse\"
                                   class=\"accordion-toggle";
                        // line 132
                        if ( !$this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : null), "isActive", array())) {
                            echo " collapsed";
                        }
                        echo "\">";
                        // line 133
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : null), "title", array())), "html", null, true);
                        // line 134
                        echo "</a>
                            </div>
                            <div id=\"config_tab_group_";
                        // line 136
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : null), "name", array()), "html", null, true);
                        echo "\"
                                 class=\"accordion-body collapse collapse-inner";
                        // line 137
                        if ($this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : null), "isActive", array())) {
                            echo " in";
                        }
                        echo "\">
                                <div class=\"accordion-inner\"><ul>
                                ";
                        // line 139
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($context["group"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["subTab"]) {
                            // line 140
                            echo "                                    ";
                            $context["subTabData"] = twig_array_merge(array("isActive" => (                            // line 141
(isset($context["activeSubTab"]) ? $context["activeSubTab"] : null) == $context["subTab"]), "name" => $this->getAttribute(                            // line 142
$context["subTab"], "name", array()), "url" => $this->env->getExtension('routing')->getPath(                            // line 143
(isset($context["routeName"]) ? $context["routeName"] : null), twig_array_merge(array("activeGroup" => $this->getAttribute($context["tab"], "name", array()), "activeSubGroup" => $this->getAttribute($context["subTab"], "name", array())), (isset($context["routeParameters"]) ? $context["routeParameters"] : null)))), $this->getAttribute(                            // line 144
$context["subTab"], "toViewData", array()));
                            // line 146
                            echo "                                    ";
                            echo $this->getAttribute($this, "renderTabNavItem", array(0 => (isset($context["subTabData"]) ? $context["subTabData"] : null)), "method");
                            echo "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subTab'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 148
                        echo "                                </ul></div>
                            </div>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "                    </ul></div>
                </div>
            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "        </ul>
        ";
            }
            // line 158
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 166
    public function getrenderTabContent($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 167
            echo "    ";
            $context["data"] = array("formErrors" =>             // line 168
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors'), "dataBlocks" => call_user_func_array($this->env->getFunction('form_data_blocks')->getCallable(), array($this->env, $context,             // line 169
(isset($context["form"]) ? $context["form"] : null))), "hiddenData" =>             // line 170
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest'));
            // line 172
            echo "
    ";
            // line 173
            $context["data"] = $this->env->getExtension('oro_form_process')->process($this->env, (isset($context["data"]) ? $context["data"] : null), (isset($context["form"]) ? $context["form"] : null));
            // line 174
            echo "
    <div class=\"system-configuration-content content form-container\" id=\"configuration-options-block\">
        <div class=\"pull-right\">
            <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
            echo "\"/>
        </div>
        ";
            // line 179
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array())))) {
                // line 180
                echo "            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    ";
                // line 183
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array());
                echo "
                </div>
            </div>
        ";
            }
            // line 187
            echo "
        ";
            // line 188
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dataBlocks", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 189
                echo "        ";
                $context["accordionId"] = ("system-configuration-collapse" . $this->getAttribute($context["loop"], "index", array()));
                // line 190
                echo "        <div class=\"accordion\">
            <div class=\"accordion-group\">
                <div class=\"accordion-heading\">
                    ";
                // line 193
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 194
                    echo "                    <div class=\"pull-right\">
                        ";
                    // line 195
                    echo $this->getAttribute($this, "renderCollapseExpandActions", array(0 => "#configuration-options-block"), "method");
                    echo "
                    </div>
                    ";
                }
                // line 198
                echo "                    <a href=\"#";
                echo twig_escape_filter($this->env, (isset($context["accordionId"]) ? $context["accordionId"] : null), "html", null, true);
                echo "\" data-toggle=\"collapse\" class=\"accordion-toggle\">
                        ";
                // line 199
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["scrollBlock"], "title", array())), "html", null, true);
                echo "
                    </a>
                </div>
                <div class=\"accordion-body in collapse\" id=\"";
                // line 202
                echo twig_escape_filter($this->env, (isset($context["accordionId"]) ? $context["accordionId"] : null), "html", null, true);
                echo "\" >
                    <div class=\"accordion-inner\">
                        ";
                // line 204
                if (($this->getAttribute($context["scrollBlock"], "description", array(), "any", true, true) && ($this->getAttribute($context["scrollBlock"], "description", array()) != ""))) {
                    // line 205
                    echo "                            <p>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["scrollBlock"], "description", array())), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 207
                echo "
                        ";
                // line 208
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["scrollBlock"], "subblocks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                    // line 209
                    echo "                            ";
                    echo $this->getAttribute($this, "renderFieldset", array(0 => $context["subblock"]), "method");
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "                    </div>
                </div>
            </div>
        </div>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "        <div class=\"hide\">
            ";
            // line 217
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array());
            echo "
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 229
    public function getrenderFieldset($__block__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "block" => $__block__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 230
            echo "    <fieldset class=\"form-horizontal form-horizontal-large\">
        <h5 class=\"user-fieldset\">
            <span>";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array())), "html", null, true);
            echo "</span>
        </h5>

        ";
            // line 235
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description", array(), "any", true, true) && ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description", array()) != ""))) {
                // line 236
                echo "            <div class=\"container-fluid\">
                <p>";
                // line 237
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description", array())), "html", null, true);
                echo "</p>
            </div>
        ";
            }
            // line 240
            echo "
        ";
            // line 241
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 242
                echo "            ";
                echo $context["dataBlock"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "    </fieldset>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 252
    public function getrenderCollapseExpandActions($__target__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "target" => $__target__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 253
            echo "    <ul class=\"inline small-text\">
        <li><a href=\"";
            // line 254
            echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : null), "html", null, true);
            echo "\" data-action=\"accordion:expand-all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.config.actions.expand_all"), "html", null, true);
            echo "</a></li>
        <li class=\"separator\">|</li>
        <li><a href=\"";
            // line 256
            echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : null), "html", null, true);
            echo "\" data-action=\"accordion:collapse-all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.config.actions.collapse_all"), "html", null, true);
            echo "</a></li>
    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroConfigBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 256,  692 => 254,  689 => 253,  677 => 252,  665 => 244,  656 => 242,  652 => 241,  649 => 240,  643 => 237,  640 => 236,  638 => 235,  632 => 232,  628 => 230,  616 => 229,  601 => 217,  598 => 216,  580 => 211,  571 => 209,  567 => 208,  564 => 207,  558 => 205,  556 => 204,  551 => 202,  545 => 199,  540 => 198,  534 => 195,  531 => 194,  529 => 193,  524 => 190,  521 => 189,  504 => 188,  501 => 187,  494 => 183,  489 => 180,  487 => 179,  482 => 177,  477 => 174,  475 => 173,  472 => 172,  470 => 170,  469 => 169,  468 => 168,  466 => 167,  454 => 166,  442 => 158,  438 => 156,  429 => 152,  420 => 148,  411 => 146,  409 => 144,  408 => 143,  407 => 142,  406 => 141,  404 => 140,  400 => 139,  393 => 137,  389 => 136,  385 => 134,  383 => 133,  378 => 132,  374 => 131,  370 => 129,  368 => 127,  367 => 126,  366 => 125,  364 => 124,  358 => 123,  355 => 122,  352 => 121,  349 => 120,  344 => 119,  341 => 118,  337 => 117,  328 => 115,  324 => 113,  322 => 112,  316 => 111,  311 => 110,  307 => 109,  303 => 107,  301 => 105,  300 => 104,  299 => 103,  298 => 102,  296 => 101,  292 => 100,  289 => 99,  287 => 98,  281 => 95,  278 => 94,  274 => 86,  258 => 85,  242 => 71,  236 => 70,  228 => 69,  221 => 68,  209 => 67,  195 => 53,  190 => 51,  185 => 50,  183 => 49,  178 => 46,  175 => 45,  158 => 44,  145 => 30,  142 => 29,  133 => 27,  128 => 26,  126 => 25,  123 => 24,  117 => 21,  114 => 20,  110 => 18,  96 => 17,  90 => 15,  83 => 11,  80 => 10,  77 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  39 => 4,  34 => 246,  31 => 221,  28 => 160,  25 => 75,  22 => 57,  19 => 33,);
    }
}
