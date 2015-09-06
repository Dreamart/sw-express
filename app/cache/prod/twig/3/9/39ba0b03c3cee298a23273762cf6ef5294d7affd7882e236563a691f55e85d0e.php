<?php

/* OroEmailBundle::macros.html.twig */
class __TwigTemplate_39ba0b03c3cee298a23273762cf6ef5294d7affd7882e236563a691f55e85d0e extends Twig_Template
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
        // line 161
        echo "
";
        // line 235
        echo "
";
        // line 298
        echo "
";
        // line 320
        echo "
";
        // line 375
        echo "
";
        // line 418
        echo "
";
        // line 432
        echo "
";
        // line 454
        echo "
";
        // line 472
        echo "
";
        // line 491
        echo "
";
        // line 543
        echo "
";
        // line 553
        echo "
";
        // line 629
        echo "
";
        // line 669
        echo "
";
    }

    // line 1
    public function getrenderAvailableVariablesWidget($__entityName__ = null, $__entityChoiceFieldId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entityName" => $__entityName__,
            "entityChoiceFieldId" => $__entityChoiceFieldId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <script type=\"text/template\" id=\"oro-email-template-variables-template\">
        <div class=\"emailtemplate-variables oro-tabs tabbable\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\" id=\"oro-email-template-variables-system-tab\">
                    <a href=\"javascript:void(0);\" data-target=\"#oro-email-template-variables-system\" data-toggle=\"tab\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.emailtemplate.variables.system"), "html", null, true);
            echo "
                    </a>
                </li>
                <li id=\"oro-email-template-variables-entity-tab\">
                    <a href=\"javascript:void(0);\" data-target=\"#oro-email-template-variables-entity\" data-toggle=\"tab\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.emailtemplate.variables.entity"), "html", null, true);
            echo "
                    </a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"variables tab-pane active\" id=\"oro-email-template-variables-system\">
                    <%= variables.system %>
                </div>
                <div class=\"variables tab-pane\" id=\"oro-email-template-variables-entity\">
                </div>
            </div>
        </div>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-system-template\">
        <ul class=\"nav\">
            <% _.each(variables, function(variable, varName) { %>
            <li>
                <a href=\"javascript:void(0);\"
                   class=\"variable\"
                   title=\"<%= _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\">";
            // line 31
            echo "{{ <%= root %>.<%= varName %><% if(variable.filter){%>|<%= variable.filter %><% } %> }}";
            echo "</a>
                <span>&ndash; <%= variable.label %></span>
            </li>
            <% }); %>
        </ul>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-variable-template\">
        <li>
            <a href=\"javascript:void(0);\"
               class=\"variable\"
               title=\"<%= _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\"
            >";
            // line 42
            echo "{{ <%= varValue %> }}";
            echo "</a>
            <span>&ndash;</span>
            <ul class=\"caption\">
                <% for (var i = 1; i < breadcrumbs.length; i++) { %>
                <li>
                    <span><%= pathLabels[breadcrumbs[i]] %></span>
                    <span>/</span>
                </li>
                <% } %>
                <li><%= variable.label %></li>
            </ul>
        </li>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-template\">
        <% var breadcrumbs = path.split('/'); breadcrumbs[0] = root; %>
        <ul class=\"breadcrumb\">
            <% var breadcrumbPath = ''; %>
            <% for (var i = 0; i < breadcrumbs.length; i++) { %>
            <% breadcrumbPath += '/' + breadcrumbs[i]; %>
            <% breadcrumbItemLabel = (i === 0 ? entityLabel : pathLabels[breadcrumbs[i]]); %>
            <li<% if (i === breadcrumbs.length - 1) { %> class=\"active\"<% } %>>
                <% if (i !== breadcrumbs.length - 1) { %>
                <a href=\"javascript:void(0);\"
                   class=\"reference\"
                   data-path=\"<%= breadcrumbPath.substring(root.length + 1) %>\"><%= breadcrumbItemLabel %></a>
                <span class=\"divider\">/&nbsp;</span>
                <% } else { %>
                    <%= breadcrumbItemLabel %>
                <% } %>
            </li>
            <% } %>
        </ul>
        <% var varPrefix = path.split('/'); varPrefix[0] = root; varPrefix = varPrefix.join('.'); %>
        <% if (!_.isEmpty(fields) || !_.isEmpty(relations)) { %>
        <ul class=\"nav groups\">
            <% if (!_.isEmpty(fields)) { %>
            <li>
                <div class=\"group-label\"><%= _.__('oro.entity.field_choice.fields') %></div>
                <ul class=\"nav\">
                <% var variableTemplate =  _.template(\$('#oro-email-template-variables-entity-variable-template').html()) %>
                <% _.each(fields, function(variable, varName) { %>
                    <%= variableTemplate({
                        varValue:    varPrefix + '.' + varName,
                        breadcrumbs: breadcrumbs,
                        pathLabels:  pathLabels,
                        variable:    variable
                    }) %>
                    ";
            // line 101
            echo "
                    ";
            // line 119
            echo "                <% }); %>
                </ul>
            </li>
            <% } %>
            <% if (!_.isEmpty(relations)) { %>
            <li>
                <div class=\"group-label\"><%= _.__('oro.entity.field_choice.relations') %></div>
                <ul class=\"nav\">
                    <% _.each(relations, function(variable, varName) { %>
                    <li>
                        <a href=\"javascript:void(0);\"
                           class=\"reference\"
                           data-path=\"<%= path + '/' + varName %>\"
                           title=\"<%= _.__('oro.email.emailtemplate.reference_title', {'variable_label': variable.label}) %>\">";
            // line 132
            echo "{{ <%= varPrefix %>.<%= varName %> }}";
            echo "</a>
                        <span>&ndash; <%= variable.label %></span>
                    </li>
                    <% }); %>
                </ul>
            </li>
            <% } %>
        </ul>
        <% } %>
    </script>

    ";
            // line 143
            $context["options"] = array("name" => "email-template-variables", "entityChoice" => ("#" .             // line 145
(isset($context["entityChoiceFieldId"]) ? $context["entityChoiceFieldId"] : null)), "view" => array("templateSelector" => "#oro-email-template-variables-template", "sectionTemplateSelector" => "#oro-email-template-variables-{sectionName}-template", "sectionContentSelector" => "#oro-email-template-variables-{sectionName}", "sectionTabSelector" => "#oro-email-template-variables-{sectionName}-tab"), "model" => array("attributes" => $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("oro_api_get_emailtemplate_variables")), "entityName" =>             // line 154
(isset($context["entityName"]) ? $context["entityName"] : null), "entityLabel" => $this->env->getExtension('translator')->trans($this->env->getExtension('oro_entity_config')->getClassConfigValue(            // line 155
(isset($context["entityName"]) ? $context["entityName"] : null), "label"))));
            // line 158
            echo "    <div data-page-component-module=\"oroemail/js/app/components/email-variable-component\"
         data-page-component-options=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
            echo "\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 162
    public function getrenderPreviewDialog($__formId__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "formId" => $__formId__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 163
            echo "    <script type=\"text/javascript\">
        require(['jquery', 'underscore', 'orotranslation/js/translator', 'oroui/js/modal'],
        function(\$, _, __, Modal){
            \$(function () {
                var showEmailPreviewDialog = function(el) {
                    var iframeId = 'preview-frame';
                    var iframe = \$('<iframe />', {
                        name: iframeId,
                        id: iframeId,
                        'class': \"scrollable-container\",
                        frameborder: 0,
                        marginwidth: 0,
                        marginheight: 0,
                        allowfullscreen: true,
                        width: '100%',
                        height: '98%'
                    });

                    var form = \$('#";
            // line 181
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : null), "html", null, true);
            echo "');
                    var formAction = form.attr('action');

                    form.one('submit', function(e) {
                        if (!e.result) {
                            return;
                        }

                        var loader;
                        var confirmModal = new Modal({
                            title: __('Preview'),
                            content: '<div class=\"loading-content\">' + __('Loading...') + '</div>',
                            okText: __('OK'),
                            className: 'modal oro-modal-normal',
                            template: _.template('<% if (title) { %>' +
                                '<div class=\"modal-header\">' +
                                    '<% if (allowCancel) { %>' +
                                    '<a class=\"close\">×</a>' +
                                    '<% } %>' +
                                    '<h3><%- title %></h3>' +
                                '</div>' +
                                '<% } %>' +
                                '<div class=\"modal-body\"><%= content %></div>'
                            )
                        });
                        confirmModal.open();
                        confirmModal.\$content.append(iframe);
                        loader = confirmModal.\$content.find('.loading-content');

                        loader.show();
                        form.attr('target', iframeId);
                        form.attr('action', \$(el).attr('href'));

                        iframe.one('load', function() {
                            loader.hide();
                            form.removeAttr('target');
                            form.attr('action', formAction);
                        });

                        // prevent navigation form processing
                        e.stopImmediatePropagation();
                    });

                    form.submit();
                };

                \$('.dialog-form-renderer').click(function (e) {
                    showEmailPreviewDialog(this);
                    e.preventDefault();
                });
            });
        });
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 241
    public function getemail_address_text($__emailAddress__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 242
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('oro_entity')->getEntityName($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : null), "owner", array())), "N/A"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 250
    public function getemail_address_link($__emailAddress__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 251
            $context["label"] = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), $this->getAttribute($this, "email_address_text", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : null)), "method"))) : ($this->getAttribute($this, "email_address_text", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : null)), "method")));
            // line 252
            echo "    ";
            $context["route"] = $this->env->getExtension('oro_entity_config')->getClassRoute($this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : null), "owner", array()), "class", array()));
            // line 253
            echo "    ";
            if ( !(null === (isset($context["route"]) ? $context["route"] : null))) {
                // line 254
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), array("id" => $this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : null), "owner", array()), "id", array()))), "html", null, true);
                echo "\">
            ";
                // line 255
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 257
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 266
    public function getemail_address_recipient_link($__emailAddress__ = null, $__emailAddressName__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 267
            $context["label"] = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), ((array_key_exists("emailAddressName", $context)) ? (_twig_default_filter((isset($context["emailAddressName"]) ? $context["emailAddressName"] : null), "N/A")) : ("N/A")))) : (((array_key_exists("emailAddressName", $context)) ? (_twig_default_filter((isset($context["emailAddressName"]) ? $context["emailAddressName"] : null), "N/A")) : ("N/A"))));
            // line 268
            echo "    ";
            $context["route"] = $this->env->getExtension('oro_entity_config')->getClassRoute($this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : null), "owner", array()), "class", array()));
            // line 269
            echo "    ";
            if ( !(null === (isset($context["route"]) ? $context["route"] : null))) {
                // line 270
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), array("id" => $this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : null), "owner", array()), "id", array()))), "html", null, true);
                echo "\">
            ";
                // line 271
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 273
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 285
    public function getemail_address($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 286
            if ((null === $this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : null), "owner", array()))) {
                // line 287
                if ( !((array_key_exists("knownOnly", $context)) ? (_twig_default_filter((isset($context["knownOnly"]) ? $context["knownOnly"] : null), false)) : (false))) {
                    // line 288
                    echo twig_escape_filter($this->env, (isset($context["emailAddressName"]) ? $context["emailAddressName"] : null), "html", null, true);
                }
            } else {
                // line 291
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) ? $context["noLink"] : null), false)) : (false))) {
                    // line 292
                    echo $this->getAttribute($this, "email_address_text", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : null)), "method");
                } else {
                    // line 294
                    echo $this->getAttribute($this, "email_address_link", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : null)), "method");
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 307
    public function getemail_address_recipient($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 308
            if ((null === $this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : null), "owner", array()))) {
                // line 309
                if ( !((array_key_exists("knownOnly", $context)) ? (_twig_default_filter((isset($context["knownOnly"]) ? $context["knownOnly"] : null), false)) : (false))) {
                    // line 310
                    echo twig_escape_filter($this->env, (isset($context["emailAddressName"]) ? $context["emailAddressName"] : null), "html", null, true);
                }
            } else {
                // line 313
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) ? $context["noLink"] : null), false)) : (false))) {
                    // line 314
                    echo twig_escape_filter($this->env, (isset($context["emailAddressName"]) ? $context["emailAddressName"] : null), "html", null, true);
                } else {
                    // line 316
                    echo $this->getAttribute($this, "email_address_recipient_link", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : null), 1 => (isset($context["emailAddressName"]) ? $context["emailAddressName"] : null)), "method");
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 327
    public function getemail_address_simple($__email__ = null, $__title__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "email" => $__email__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 328
            if ( !twig_test_empty((isset($context["email"]) ? $context["email"] : null))) {
                // line 329
                echo "        ";
                $context["emailAddress"] = null;
                // line 330
                echo "        ";
                // line 331
                echo "        ";
                if ($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email", array(), "any", true, true)) {
                    // line 332
                    echo "            ";
                    if ( !twig_test_empty($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email", array()))) {
                        // line 333
                        echo "                ";
                        $context["emailAddress"] = $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email", array());
                        // line 334
                        echo "            ";
                    }
                    // line 335
                    echo "            ";
                    // line 336
                    echo "        ";
                } else {
                    // line 337
                    echo "            ";
                    $context["emailAddress"] = (isset($context["email"]) ? $context["email"] : null);
                    // line 338
                    echo "        ";
                }
                // line 339
                echo "
        ";
                // line 340
                if (twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
                    // line 341
                    echo "            ";
                    $context["title"] = (isset($context["emailAddress"]) ? $context["emailAddress"] : null);
                    // line 342
                    echo "        ";
                }
                // line 343
                echo "
        ";
                // line 344
                if ((isset($context["emailAddress"]) ? $context["emailAddress"] : null)) {
                    // line 345
                    echo "            <a href=\"mailto:";
                    echo twig_escape_filter($this->env, (isset($context["emailAddress"]) ? $context["emailAddress"] : null), "html_attr");
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html_attr");
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                    echo "</a>
        ";
                }
                // line 347
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 357
    public function getrecipient_email_addresses($__recipients__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "recipients" => $__recipients__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 358
            $context["addresses"] = array();
            // line 359
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipients"]) ? $context["recipients"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 360
                $context["address"] = $this->getAttribute($this, "email_address_recipient", array(0 => $this->getAttribute($context["recipient"], "emailAddress", array()), 1 => $this->getAttribute($context["recipient"], "name", array()), 2 => (isset($context["noLink"]) ? $context["noLink"] : null), 3 => (isset($context["knownOnly"]) ? $context["knownOnly"] : null)), "method");
                // line 361
                if ((twig_length_filter($this->env, (isset($context["address"]) ? $context["address"] : null)) > 0)) {
                    // line 362
                    $context["addresses"] = twig_array_merge((isset($context["addresses"]) ? $context["addresses"] : null), array(0 => (isset($context["address"]) ? $context["address"] : null)));
                    // line 363
                    echo "        ";
                } else {
                    // line 364
                    echo "            ";
                    $context["addresses"] = twig_array_merge((isset($context["addresses"]) ? $context["addresses"] : null), array(0 => $this->getAttribute($this->getAttribute($context["recipient"], "emailAddress", array()), "email", array())));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 369
                echo twig_escape_filter($this->env, $context["address"], "html", null, true);
                // line 370
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "; ";
                }
                // line 371
                echo "    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 372
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("N/A"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 383
    public function getattachments($__attachments__ = null, $__target__ = null, $__hasGrantReattach__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attachments" => $__attachments__,
            "target" => $__target__,
            "hasGrantReattach" => $__hasGrantReattach__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 384
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachments"]) ? $context["attachments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 385
                if ((null === $this->getAttribute($context["attachment"], "embeddedContentId", array()))) {
                    // line 386
                    echo "            ";
                    $context["canCopyToRecord"] = (((((isset($context["hasGrantReattach"]) ? $context["hasGrantReattach"] : null) && array_key_exists("target", $context)) && $this->env->getExtension('oro_email')->canReAttach($context["attachment"], (isset($context["target"]) ? $context["target"] : null)))) ? (true) : (false));
                    // line 387
                    echo "            <li class=\"email-attachments-list-item\">
            <div class=\"dropdown link-to-record\">
                <a class=\"no-hash dropdown-toggle\" href=\"javascript: void(0);\" data-toggle=\"dropdown\">
                    <i class=\"icon icon-file-alt\"></i> ";
                    // line 390
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_formatter')->formatFilename($this->getAttribute($context["attachment"], "fileName", array())), "html", null, true);
                    echo "
                </a>
                <ul class=\"dropdown-menu ";
                    // line 392
                    echo (((isset($context["canCopyToRecord"]) ? $context["canCopyToRecord"] : null)) ? ("") : ("one"));
                    echo "\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                    <a class=\"no-hash\" tabindex=\"-1\" href=\"";
                    // line 393
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_email_attachment", array("id" => $this->getAttribute($context["attachment"], "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 394
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.attachment.save"), "html", null, true);
                    echo "
                    </a>
                    ";
                    // line 396
                    if ((isset($context["canCopyToRecord"]) ? $context["canCopyToRecord"] : null)) {
                        // line 397
                        echo "                        ";
                        $context["options"] = array("view" => "oroemail/js/app/views/email-attachment-link-view", "url" => $this->env->getExtension('routing')->getPath("oro_email_attachment_link", array("id" => $this->getAttribute(                        // line 400
$context["attachment"], "id", array()), "targetActivityClass" => $this->env->getExtension('oro_entity')->getClassName(                        // line 401
(isset($context["target"]) ? $context["target"] : null)), "targetActivityId" => $this->getAttribute(                        // line 402
(isset($context["target"]) ? $context["target"] : null), "id", array()))));
                        // line 405
                        echo "                    <a tabindex=\"-1\" data-page-component-module=\"oroui/js/app/components/view-component\"
                        class=\"attachment\"
                        data-page-component-options=\"";
                        // line 407
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
                        echo "\"
                        href=\"";
                        // line 408
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "url", array()), "html", null, true);
                        echo "\">
                        ";
                        // line 409
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.attachment.copy_to_record"), "html", null, true);
                        echo "
                    </a>
                    ";
                    }
                    // line 412
                    echo "                </ul>
            </div>
        </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 425
    public function getbody($__emailBody__ = null, $__cssClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailBody" => $__emailBody__,
            "cssClass" => $__cssClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 426
            if ($this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : null), "bodyIsText", array())) {
                // line 427
                echo "<pre class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : null), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : null), "bodyContent", array()), "html", null, true);
                echo "</pre>";
            } else {
                // line 429
                echo "<iframe sandbox=\"\" class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : null), "html", null, true);
                }
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_email_body", array("id" => $this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : null), "id", array()))), "html", null, true);
                echo "\"></iframe>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 442
    public function getemail_participant_name_or_me($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 443
            if (( !(null === $this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : null), "owner", array())) && ($this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : null), "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
                // line 444
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) ? $context["noLink"] : null), false)) : (false))) {
                    // line 445
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('translator')->trans("Me")), "html", null, true);
                } else {
                    // line 447
                    echo $this->getAttribute($this, "email_address_link", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : null), 1 => twig_lower_filter($this->env, $this->env->getExtension('translator')->trans("Me"))), "method");
                }
            } else {
                // line 450
                $context["name"] = _twig_default_filter($this->env->getExtension('oro_email')->getEmailAddressName((isset($context["emailAddressName"]) ? $context["emailAddressName"] : null)), $this->env->getExtension('oro_email')->getEmailAddress((isset($context["emailAddressName"]) ? $context["emailAddressName"] : null)));
                // line 451
                echo $this->getAttribute($this, "email_address", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : null), 1 => (isset($context["name"]) ? $context["name"] : null), 2 => (isset($context["noLink"]) ? $context["noLink"] : null), 3 => (isset($context["knownOnly"]) ? $context["knownOnly"] : null)), "method");
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 462
    public function getemail_participants_name($__recipients__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "recipients" => $__recipients__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 463
            $context["recipientHtmlCollection"] = array();
            // line 464
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipients"]) ? $context["recipients"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 465
                echo "        ";
                ob_start();
                // line 466
                echo "<span class=\"email-recipient\">";
                echo $this->getAttribute($this, "email_participant_name_or_me", array(0 => $this->getAttribute($context["recipient"], "emailAddress", array()), 1 => $this->getAttribute($context["recipient"], "name", array()), 2 => (isset($context["noLink"]) ? $context["noLink"] : null), 3 => (isset($context["knownOnly"]) ? $context["knownOnly"] : null)), "method");
                echo "</span>";
                $context["recipientHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 468
                echo "        ";
                $context["recipientHtmlCollection"] = twig_array_merge((isset($context["recipientHtmlCollection"]) ? $context["recipientHtmlCollection"] : null), array(0 => (isset($context["recipientHtml"]) ? $context["recipientHtml"] : null)));
                // line 469
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 470
            echo "    ";
            echo twig_join_filter((isset($context["recipientHtmlCollection"]) ? $context["recipientHtmlCollection"] : null), ", ");
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 478
    public function getdate_smart_format($__date__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "date" => $__date__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 479
            if (($this->env->getExtension('oro_locale_datetime')->formatDate(twig_date_converter($this->env, (isset($context["date"]) ? $context["date"] : null))) == $this->env->getExtension('oro_locale_datetime')->formatDate(twig_date_converter($this->env)))) {
                // line 481
                echo "        ";
                echo $this->env->getExtension('oro_locale_datetime')->formatTime((isset($context["date"]) ? $context["date"] : null));
            } elseif (($this->env->getExtension('oro_locale_datetime')->formatDate(twig_date_converter($this->env,             // line 482
(isset($context["date"]) ? $context["date"] : null))) == $this->env->getExtension('oro_locale_datetime')->formatDate(twig_date_converter($this->env, "-1days")))) {
                // line 483
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("yesterday")), "html", null, true);
            } elseif (($this->getAttribute(twig_date_converter($this->env,             // line 484
(isset($context["date"]) ? $context["date"] : null)), "format", array(0 => "Y"), "method") == $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "Y"), "method"))) {
                // line 486
                echo "        ";
                echo $this->env->getExtension('oro_locale_datetime')->formatDay((isset($context["date"]) ? $context["date"] : null));
            } else {
                // line 488
                echo $this->env->getExtension('oro_locale_datetime')->formatDate((isset($context["date"]) ? $context["date"] : null));
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 497
    public function getemail_detailed_info_table($__email__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "email" => $__email__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 498
            echo "    ";
            $context["recipientsTo"] = array();
            // line 499
            echo "    ";
            $context["recipientsCc"] = array();
            // line 500
            echo "    ";
            $context["recipientsBcc"] = array();
            // line 501
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "recipients", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 502
                echo "        ";
                if (($this->getAttribute($context["recipient"], "type", array()) == "to")) {
                    // line 503
                    echo "            ";
                    $context["recipientsTo"] = twig_array_merge((isset($context["recipientsTo"]) ? $context["recipientsTo"] : null), array(0 => twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "name", array()))));
                    // line 504
                    echo "        ";
                } elseif (($this->getAttribute($context["recipient"], "type", array()) == "cc")) {
                    // line 505
                    echo "            ";
                    $context["recipientsCc"] = twig_array_merge((isset($context["recipientsCc"]) ? $context["recipientsCc"] : null), array(0 => twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "name", array()))));
                    // line 506
                    echo "        ";
                } elseif (($this->getAttribute($context["recipient"], "type", array()) == "bcc")) {
                    // line 507
                    echo "            ";
                    $context["recipientsBcc"] = twig_array_merge((isset($context["recipientsBcc"]) ? $context["recipientsBcc"] : null), array(0 => twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "name", array()))));
                    // line 508
                    echo "        ";
                }
                // line 509
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 510
            echo "    ";
            $context["fromUserName"] = $this->env->getExtension('oro_email')->getEmailAddressName($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "fromName", array()));
            // line 511
            echo "    ";
            $context["fromEmailAddress"] = (("&lt;" . $this->env->getExtension('oro_email')->getEmailAddress($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "fromName", array()))) . "&gt;");
            // line 512
            echo "    ";
            $context["data"] = array(0 => array("label" => $this->env->getExtension('translator')->trans("From"), "value" => ((            // line 514
(isset($context["fromUserName"]) ? $context["fromUserName"] : null)) ? (((("<b>" . twig_escape_filter($this->env, (isset($context["fromUserName"]) ? $context["fromUserName"] : null))) . "</b> ") . (isset($context["fromEmailAddress"]) ? $context["fromEmailAddress"] : null))) : ((("<b>" . (isset($context["fromEmailAddress"]) ? $context["fromEmailAddress"] : null)) . "</b>"))), "cssClass" => "autor"), 1 => array("label" => $this->env->getExtension('translator')->trans("To"), "value" => twig_join_filter(            // line 518
(isset($context["recipientsTo"]) ? $context["recipientsTo"] : null), ",<br/>")), 2 => array("label" => $this->env->getExtension('translator')->trans("Cc"), "value" => twig_join_filter(            // line 521
(isset($context["recipientsCc"]) ? $context["recipientsCc"] : null), ",<br/>")), 3 => array("label" => $this->env->getExtension('translator')->trans("Bcc"), "value" => twig_join_filter(            // line 524
(isset($context["recipientsBcc"]) ? $context["recipientsBcc"] : null), ",<br/>")), 4 => array("label" => $this->env->getExtension('translator')->trans("Date"), "value" => twig_escape_filter($this->env, $this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute(            // line 527
(isset($context["email"]) ? $context["email"] : null), "sentAt", array())))), 5 => array("label" => $this->env->getExtension('translator')->trans("Subject"), "value" => twig_escape_filter($this->env, $this->getAttribute(            // line 530
(isset($context["email"]) ? $context["email"] : null), "subject", array()))));
            // line 532
            echo "    <ul class=\"form-horizontal\">
    ";
            // line 533
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 534
                echo "        ";
                if ( !twig_test_empty($this->getAttribute($context["item"], "value", array()))) {
                    // line 535
                    echo "        <li class=\"control-group\">
            <label class=\"control-label\">";
                    // line 536
                    echo $this->getAttribute($context["item"], "label", array());
                    echo ":</label>
            <div class=\"controls ";
                    // line 537
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "cssClass", array(), "any", true, true)) ? ($this->getAttribute($context["item"], "cssClass", array())) : ("")), "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($context["item"], "value", array());
                    echo "</div>
        </li>
        ";
                }
                // line 540
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 541
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 549
    public function getemail_short_body($__emailBody__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "emailBody" => $__emailBody__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 550
            $context["length"] = ((array_key_exists("length", $context)) ? (_twig_default_filter((isset($context["length"]) ? $context["length"] : null), 150)) : (150));
            // line 551
            echo strtr(twig_slice($this->env, $this->env->getExtension('oro_regex')->pregReplace(strip_tags($this->env->getExtension('oro_ui.html_tag')->htmlPurify($this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : null), "bodyContent", array()))), "/-{2,}/", "--"), 0, (isset($context["length"]) ? $context["length"] : null)), array("--" => "&mdash;"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 559
    public function getemail_contexts($__entity__ = null, $__target__ = null, $__checkTarget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "target" => $__target__,
            "checkTarget" => $__checkTarget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 560
            echo "    <script type=\"text/template\" id=\"email-context-activity-list\">
        <div class=\"context-item\" style=\"border: none\" data-cid=\"<%= entity.cid %>\">
                <span data-id=\"<%= entity.get('targetId') %>\">
                    <span class=\"<%= entity.get('icon') %>\"></span>

                    <% if (entity.get('link')) { %>
                        <a href=\"<%= entity.get('link') %>\">
                            <span class=\"context-label\"><%= entity.get('title') %></span>
                        </a>
                    <% } else { %>
                        <span class=\"context-label\"><%= entity.get('title') %></span>
                    <% }  %>
                    ";
            // line 572
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", (isset($context["entity"]) ? $context["entity"] : null))) {
                // line 573
                echo "                        <i class=\"icon-remove\"></i>
                    ";
            }
            // line 575
            echo "                </span>
        </div>
    </script>

    ";
            // line 579
            if (twig_test_empty((isset($context["checkTarget"]) ? $context["checkTarget"] : null))) {
                // line 580
                echo "        ";
                $context["checkTarget"] = false;
                // line 581
                echo "    ";
            }
            // line 582
            echo "
    ";
            // line 583
            $context["contextTargetArray"] = array();
            // line 584
            echo "    ";
            $context["targetClassNameEncoded"] = $this->env->getExtension('oro_entity')->getClassName((isset($context["target"]) ? $context["target"] : null), true);
            // line 585
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "getActivityTargetEntities", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 586
                echo "        ";
                $context["itemClassName"] = $this->env->getExtension('oro_entity')->getClassName($context["item"]);
                // line 587
                echo "        ";
                $context["itemClassNameEncoded"] = $this->env->getExtension('oro_entity')->getClassName($context["item"], true);
                // line 588
                echo "        ";
                $context["contextTarget"] = array("entityId" => $this->getAttribute(                // line 589
(isset($context["entity"]) ? $context["entity"] : null), "id", array()), "targetId" => $this->getAttribute(                // line 590
$context["item"], "id", array()), "targetClassName" =>                 // line 591
(isset($context["itemClassNameEncoded"]) ? $context["itemClassNameEncoded"] : null), "title" => $this->env->getExtension('oro_entity')->getEntityName(                // line 592
$context["item"]), "icon" => $this->env->getExtension('oro_entity_config')->getClassConfigValue(                // line 593
(isset($context["itemClassName"]) ? $context["itemClassName"] : null), "icon"), "link" => (($this->env->getExtension('oro_entity_config')->getClassMetadataValue(                // line 594
(isset($context["itemClassName"]) ? $context["itemClassName"] : null), "routeView")) ? ($this->env->getExtension('routing')->getPath($this->env->getExtension('oro_entity_config')->getClassRoute((isset($context["itemClassName"]) ? $context["itemClassName"] : null)), array("id" => $this->getAttribute($context["item"], "id", array())))) : (false)));
                // line 596
                echo "        ";
                if (($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("VIEW", $context["item"]) &&  !(($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute($context["item"], "id", array())) && ($this->env->getExtension('oro_entity')->getClassName($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) == (isset($context["itemClassName"]) ? $context["itemClassName"] : null))))) {
                    // line 597
                    echo "            ";
                    $context["contextTargetArray"] = twig_array_merge((isset($context["contextTargetArray"]) ? $context["contextTargetArray"] : null), array(0 => (isset($context["contextTarget"]) ? $context["contextTarget"] : null)));
                    // line 598
                    echo "        ";
                }
                // line 599
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 600
            echo "
    ";
            // line 601
            $context["options"] = array("contextTargets" =>             // line 602
(isset($context["contextTargetArray"]) ? $context["contextTargetArray"] : null), "entityId" => $this->getAttribute(            // line 603
(isset($context["entity"]) ? $context["entity"] : null), "id", array()), "target" => false, "checkTarget" =>             // line 605
(isset($context["checkTarget"]) ? $context["checkTarget"] : null));
            // line 607
            echo "
    ";
            // line 608
            if ((isset($context["checkTarget"]) ? $context["checkTarget"] : null)) {
                // line 609
                echo "        ";
                $context["targetEntity"] = array("target" => array("id" => $this->getAttribute(                // line 611
(isset($context["target"]) ? $context["target"] : null), "id", array()), "className" =>                 // line 612
(isset($context["targetClassNameEncoded"]) ? $context["targetClassNameEncoded"] : null)));
                // line 615
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), (isset($context["targetEntity"]) ? $context["targetEntity"] : null));
                // line 616
                echo "    ";
            }
            // line 617
            echo "
    <div class=\"email-context-activity\"
         data-page-component-module=\"oroemail/js/app/components/email-context-activity-component\"
         data-page-component-options=\"";
            // line 620
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
            echo "\"
         data-layout=\"separate\">
        <div class=\"email-context-activity-label\">
            ";
            // line 623
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.contexts.label"), "html", null, true);
            echo "
        </div>
        <div class=\"email-context-activity-items\">
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 633
    public function getrenderMailboxConfigTitleAndButtons($__pageTitle__ = null, $__buttons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pageTitle" => $__pageTitle__,
            "buttons" => $__buttons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 634
            echo "    <div class=\"container-fluid configuration-header clearfix\">
        ";
            // line 635
            if (twig_test_iterable((isset($context["pageTitle"]) ? $context["pageTitle"] : null))) {
                // line 636
                echo "            <div class=\"customer-info customer-simple pull-left\">
                ";
                // line 637
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
                    // line 638
                    echo "                    ";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 639
                        echo "                        <div class=\"sub-title\">
                            ";
                        // line 640
                        if (((twig_test_iterable($context["title"]) && $this->getAttribute($context["title"], "link", array(), "any", true, true)) && $this->getAttribute($context["title"], "label", array(), "any", true, true))) {
                            // line 641
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "link", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "label", array()), "html", null, true);
                            echo "</a>
                            ";
                        } else {
                            // line 643
                            echo "                                ";
                            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                            echo "
                            ";
                        }
                        // line 645
                        echo "                        </div>
                        <span class=\"separator\">/</span>
                    ";
                    } else {
                        // line 648
                        echo "                        <h1 class=\"user-name\">
                            ";
                        // line 649
                        if (((twig_test_iterable($context["title"]) && $this->getAttribute($context["title"], "link", array(), "any", true, true)) && $this->getAttribute($context["title"], "label", array(), "any", true, true))) {
                            // line 650
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "link", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "label", array()), "html", null, true);
                            echo "</a>
                            ";
                        } else {
                            // line 652
                            echo "                                ";
                            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                            echo "
                            ";
                        }
                        // line 654
                        echo "                        </h1>
                    ";
                    }
                    // line 656
                    echo "                ";
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
                // line 657
                echo "            </div>
        ";
            } else {
                // line 659
                echo "            <h1>
                ";
                // line 660
                echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
                echo "
            </h1>
        ";
            }
            // line 663
            echo "
        <div class=\"pull-right title-buttons-container\">
            ";
            // line 665
            echo (isset($context["buttons"]) ? $context["buttons"] : null);
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

    public function getTemplateName()
    {
        return "OroEmailBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1362 => 665,  1358 => 663,  1352 => 660,  1349 => 659,  1345 => 657,  1331 => 656,  1327 => 654,  1321 => 652,  1313 => 650,  1311 => 649,  1308 => 648,  1303 => 645,  1297 => 643,  1289 => 641,  1287 => 640,  1284 => 639,  1281 => 638,  1264 => 637,  1261 => 636,  1259 => 635,  1256 => 634,  1243 => 633,  1226 => 623,  1220 => 620,  1215 => 617,  1212 => 616,  1209 => 615,  1207 => 612,  1206 => 611,  1204 => 609,  1202 => 608,  1199 => 607,  1197 => 605,  1196 => 603,  1195 => 602,  1194 => 601,  1191 => 600,  1185 => 599,  1182 => 598,  1179 => 597,  1176 => 596,  1174 => 594,  1173 => 593,  1172 => 592,  1171 => 591,  1170 => 590,  1169 => 589,  1167 => 588,  1164 => 587,  1161 => 586,  1156 => 585,  1153 => 584,  1151 => 583,  1148 => 582,  1145 => 581,  1142 => 580,  1140 => 579,  1134 => 575,  1130 => 573,  1128 => 572,  1114 => 560,  1100 => 559,  1087 => 551,  1085 => 550,  1072 => 549,  1060 => 541,  1054 => 540,  1046 => 537,  1042 => 536,  1039 => 535,  1036 => 534,  1032 => 533,  1029 => 532,  1027 => 530,  1026 => 527,  1025 => 524,  1024 => 521,  1023 => 518,  1022 => 514,  1020 => 512,  1017 => 511,  1014 => 510,  1008 => 509,  1005 => 508,  1002 => 507,  999 => 506,  996 => 505,  993 => 504,  990 => 503,  987 => 502,  982 => 501,  979 => 500,  976 => 499,  973 => 498,  961 => 497,  949 => 488,  945 => 486,  943 => 484,  941 => 483,  939 => 482,  936 => 481,  934 => 479,  922 => 478,  910 => 470,  904 => 469,  901 => 468,  896 => 466,  893 => 465,  888 => 464,  886 => 463,  872 => 462,  860 => 451,  858 => 450,  854 => 447,  851 => 445,  849 => 444,  847 => 443,  832 => 442,  813 => 429,  803 => 427,  801 => 426,  788 => 425,  769 => 412,  763 => 409,  759 => 408,  755 => 407,  751 => 405,  749 => 402,  748 => 401,  747 => 400,  745 => 397,  743 => 396,  738 => 394,  734 => 393,  730 => 392,  725 => 390,  720 => 387,  717 => 386,  715 => 385,  711 => 384,  697 => 383,  681 => 372,  668 => 371,  664 => 370,  662 => 369,  644 => 368,  636 => 364,  633 => 363,  631 => 362,  629 => 361,  627 => 360,  623 => 359,  621 => 358,  607 => 357,  595 => 347,  585 => 345,  583 => 344,  580 => 343,  577 => 342,  574 => 341,  572 => 340,  569 => 339,  566 => 338,  563 => 337,  560 => 336,  558 => 335,  555 => 334,  552 => 333,  549 => 332,  546 => 331,  544 => 330,  541 => 329,  539 => 328,  526 => 327,  513 => 316,  510 => 314,  508 => 313,  504 => 310,  502 => 309,  500 => 308,  485 => 307,  472 => 294,  469 => 292,  467 => 291,  463 => 288,  461 => 287,  459 => 286,  444 => 285,  429 => 273,  424 => 271,  419 => 270,  416 => 269,  413 => 268,  411 => 267,  397 => 266,  382 => 257,  377 => 255,  372 => 254,  369 => 253,  366 => 252,  364 => 251,  351 => 250,  340 => 242,  328 => 241,  263 => 181,  243 => 163,  230 => 162,  217 => 159,  214 => 158,  212 => 155,  211 => 154,  210 => 145,  209 => 143,  195 => 132,  180 => 119,  177 => 101,  127 => 42,  113 => 31,  91 => 12,  83 => 7,  76 => 2,  63 => 1,  58 => 669,  55 => 629,  52 => 553,  49 => 543,  46 => 491,  43 => 472,  40 => 454,  37 => 432,  34 => 418,  31 => 375,  28 => 320,  25 => 298,  22 => 235,  19 => 161,);
    }
}
