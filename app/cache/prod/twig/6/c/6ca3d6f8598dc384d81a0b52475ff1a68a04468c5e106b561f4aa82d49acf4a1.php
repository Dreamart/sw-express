<?php

/* OroEmailBundle:Form:fields.html.twig */
class __TwigTemplate_6ca3d6f8598dc384d81a0b52475ff1a68a04468c5e106b561f4aa82d49acf4a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_oro_email_autoresponserule_conditions_entry_field_row' => array($this, 'block__oro_email_autoresponserule_conditions_entry_field_row'),
            '_oro_email_autoresponserule_conditions_entry_filter_row' => array($this, 'block__oro_email_autoresponserule_conditions_entry_filter_row'),
            'oro_email_template_list_row' => array($this, 'block_oro_email_template_list_row'),
            'oro_email_link_to_scope_row' => array($this, 'block_oro_email_link_to_scope_row'),
            'oro_email_attachments_row' => array($this, 'block_oro_email_attachments_row'),
            'oro_email_emailtemplate_translatation_widget' => array($this, 'block_oro_email_emailtemplate_translatation_widget'),
            'oro_email_email_folder_row' => array($this, 'block_oro_email_email_folder_row'),
            'oro_email_email_folder_tree_row' => array($this, 'block_oro_email_email_folder_tree_row'),
            'oro_email_email_folder_tree_widget' => array($this, 'block_oro_email_email_folder_tree_widget'),
            'oro_email_mailbox_grid_row' => array($this, 'block_oro_email_mailbox_grid_row'),
            'oro_email_mailbox_grid_label' => array($this, 'block_oro_email_mailbox_grid_label'),
            'oro_email_mailbox_grid_widget' => array($this, 'block_oro_email_mailbox_grid_widget'),
            'oro_email_mailbox_widget' => array($this, 'block_oro_email_mailbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_oro_email_autoresponserule_conditions_entry_field_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_oro_email_autoresponserule_conditions_entry_filter_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('oro_email_template_list_row', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('oro_email_link_to_scope_row', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('oro_email_attachments_row', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('oro_email_emailtemplate_translatation_widget', $context, $blocks);
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('oro_email_email_folder_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('oro_email_email_folder_tree_row', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('oro_email_email_folder_tree_widget', $context, $blocks);
        // line 258
        echo "
";
        // line 259
        $this->displayBlock('oro_email_mailbox_grid_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('oro_email_mailbox_grid_label', $context, $blocks);
        // line 283
        echo "
";
        // line 284
        $this->displayBlock('oro_email_mailbox_grid_widget', $context, $blocks);
        // line 296
        echo "
";
        // line 297
        $this->displayBlock('oro_email_mailbox_widget', $context, $blocks);
        // line 327
        echo "
";
        // line 344
        echo "
";
    }

    // line 1
    public function block__oro_email_autoresponserule_conditions_entry_field_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
    }

    // line 5
    public function block__oro_email_autoresponserule_conditions_entry_filter_row($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 7
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array(), "array"))));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 11
    public function block_oro_email_template_list_row($context, array $blocks = array())
    {
        // line 12
        echo "    <script type=\"text/javascript\">
        require(['jquery',
                    'oroemail/js/app/views/email-template-view',
                    'oroemail/js/app/models/email-template-collection'],
        function(\$, View, Collection) {
            \$(function () {
                'use strict';
                var \$templateSelectorEl = \$('#";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "');
                ";
        // line 20
        if ((array_key_exists("includeSystemTemplates", $context) &&  !(isset($context["includeSystemTemplates"]) ? $context["includeSystemTemplates"] : null))) {
            // line 21
            echo "                    var includeSystemTemplates = false;
                ";
        } else {
            // line 23
            echo "                    var includeSystemTemplates = true;
                ";
        }
        // line 25
        echo "                new View({
                    el: \$templateSelectorEl.closest('form').find('[name\$=\"[";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["depends_on_parent_field"]) ? $context["depends_on_parent_field"] : null), "html", null, true);
        echo "]\"]'),
                    target: \$templateSelectorEl,
                    collection: new Collection(
                        '";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["data_route"]) ? $context["data_route"] : null), "html", null, true);
        echo "',
                        ";
        // line 30
        echo twig_jsonencode_filter((isset($context["data_route_parameter"]) ? $context["data_route_parameter"] : null));
        echo ",
                        ";
        // line 31
        echo (((array_key_exists("includeNonEntity", $context) && (isset($context["includeNonEntity"]) ? $context["includeNonEntity"] : null))) ? ("true") : ("false"));
        echo ",
                        includeSystemTemplates
                    )
                });
            });
        })
    </script>
    <script type=\"text/template\" id=\"emailtemplate-chooser-template\">
        <% _.each(entities, function(entity, i) { %>
        <option value=\"<%= entity.get('id') %>\"><%= entity.get('name') %></option>
        <% }); %>
    </script>

    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row');
        echo "
";
    }

    // line 47
    public function block_oro_email_link_to_scope_row($context, array $blocks = array())
    {
        // line 48
        echo "    <script type=\"text/javascript\">
        require(['jquery'],
            function(\$) {
                function initLinkToScopeEl(mainEl, el) {
                    if (parseInt(\$(mainEl).val())) {
                        \$(el).attr('disabled', false);
                        \$(el).parent('div').removeClass('disabled');
                    } else {
                        \$(el).attr('disabled', true);
                        \$(el).parent('div').addClass('disabled');
                    }
                }
                \$(function () {
                    var selectorEl = '";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "';
                    var emailLinkToScopeEl = \$('#' + selectorEl);
                    var enableAttachmentEl = \$(emailLinkToScopeEl).closest('form')
                            .find('[data-ftid=oro_entity_config_type_attachment_enabled]');
                    initLinkToScopeEl(enableAttachmentEl, emailLinkToScopeEl);
                    \$(enableAttachmentEl).on('change', function() {
                        initLinkToScopeEl(enableAttachmentEl, emailLinkToScopeEl);
                    });
                });
            })
    </script>
    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row');
        echo "
";
    }

    // line 75
    public function block_oro_email_attachments_row($context, array $blocks = array())
    {
        // line 76
        echo "    <script type=\"text/template\" id=\"email-attachment-item\">
        <div class=\"attachment-item\" style=\"border: none\">
            <span data-id=\"<%= id %>\" class=\"filename\">
                <i class=\"icon icon-file-alt\"></i>
                <span class=\"filename-label\"><%= fileName %></span>
                <i class=\"icon-remove\"></i>
            </span>
            <input name=\"<%= inputName %>[<%= cid %>][id]\" type=\"text\" value=\"<%= id %>\"/>
            <input name=\"<%= inputName %>[<%= cid %>][type]\" type=\"text\" value=\"<%= type %>\" class=\"attachment-type\"/>
            <input name=\"<%= inputName %>[<%= cid %>][file]\" type=\"file\"/>
        </div>
    </script>

    <script type=\"text/template\" id=\"email-attachment-select-view\">
        <div class=\"attachment-list-content\">
            <div class=\"filter-block\">
                <label>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.attachment.select_file"), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"filter\"/>
            </div>
            <div class=\"attachment-list\">
                <div class=\"no-items\">
                    <p class=\"text-center\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.form.no_attachments"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"group-block entity-attachments\">
                    <b>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.form.record_attachments"), "html", null, true);
        echo "</b>
                    <div class=\"entity-attachments-list\"></div>
                </div>
                <div class=\"group-block thread-attachments\">
                    <b>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.form.thread_attachments"), "html", null, true);
        echo "</b>
                    <div class=\"thread-attachments-list\"></div>
                </div>
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"attachment-actions\">
            <div class=\"pull-right\">
                <a class=\"btn cancel\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
                <a class=\"btn btn-primary attach\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.form.attach"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </script>

    <script type=\"text/template\" id=\"email-attachment-list-row-view\">
        <div class=\"attachment-list-row <% if (!visible) { %>hide<% } %>\">
            <input type=\"checkbox\" class=\"checkbox\" <% if (checked) { %>checked<% } %>>
            <span><%= fileName %> (<%= fileSize %>, <%= modified %>)</span>
        </div>
    </script>

    ";
        // line 125
        $context["entityAttachmentsArray"] = array();
        // line 126
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "entityAttachments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 127
            echo "        ";
            $context["entityAttachmentArray"] = array("id" => $this->getAttribute(            // line 128
$context["attachment"], "id", array()), "type" => $this->getAttribute(            // line 129
$context["attachment"], "type", array()), "fileName" => $this->getAttribute(            // line 130
$context["attachment"], "fileName", array()));
            // line 132
            echo "        ";
            $context["entityAttachmentsArray"] = twig_array_merge((isset($context["entityAttachmentsArray"]) ? $context["entityAttachmentsArray"] : null), array(0 => (isset($context["entityAttachmentArray"]) ? $context["entityAttachmentArray"] : null)));
            // line 133
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
    ";
        // line 135
        $context["attachmentsAvailableArray"] = array();
        // line 136
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "attachmentsAvailable", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 137
            echo "        ";
            $context["attachmentAvailableArray"] = array("id" => $this->getAttribute(            // line 138
$context["attachment"], "id", array()), "type" => $this->getAttribute(            // line 139
$context["attachment"], "type", array()), "fileName" => $this->getAttribute(            // line 140
$context["attachment"], "fileName", array()), "fileSize" => $this->getAttribute(            // line 141
$context["attachment"], "fileSize", array()), "modified" => $this->getAttribute(            // line 142
$context["attachment"], "modified", array()));
            // line 144
            echo "        ";
            $context["attachmentsAvailableArray"] = twig_array_merge((isset($context["attachmentsAvailableArray"]) ? $context["attachmentsAvailableArray"] : null), array(0 => (isset($context["attachmentAvailableArray"]) ? $context["attachmentAvailableArray"] : null)));
            // line 145
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "
    ";
        // line 147
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("containerId" =>         // line 148
(isset($context["id"]) ? $context["id"] : null), "inputName" =>         // line 149
(isset($context["full_name"]) ? $context["full_name"] : null), "entityAttachments" =>         // line 150
(isset($context["entityAttachmentsArray"]) ? $context["entityAttachmentsArray"] : null), "attachmentsAvailable" =>         // line 151
(isset($context["attachmentsAvailableArray"]) ? $context["attachmentsAvailableArray"] : null)));
        // line 153
        echo "
    <div data-page-component-module=\"oroemail/js/app/components/email-attachment-component\"
         data-page-component-options=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
        echo "\">
        ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row');
        echo "
    </div>
";
    }

    // line 160
    public function block_oro_email_emailtemplate_translatation_widget($context, array $blocks = array())
    {
        // line 161
        echo "    <div class=\"emailtemplate-translatation oro-tabs tabbable\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 163
        ob_start();
        // line 164
        echo "                ";
        if ((isset($context["simple_way"]) ? $context["simple_way"] : null)) {
            // line 165
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                // line 166
                echo "                        ";
                echo $this->getAttribute($this, "renderTabNavItem", array(0 => $context["translationsField"], 1 => (isset($context["labels"]) ? $context["labels"] : null)), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                ";
        } else {
            // line 169
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 170
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    // line 171
                    echo "                            ";
                    echo $this->getAttribute($this, "renderTabNavItem", array(0 => $context["translationsField"], 1 => (isset($context["labels"]) ? $context["labels"] : null), 2 => ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()))), "method");
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                ";
        }
        // line 175
        echo "            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 176
        echo "        </ul>
        <div class=\"tab-content\">
            ";
        // line 178
        ob_start();
        // line 179
        echo "                ";
        if ((isset($context["simple_way"]) ? $context["simple_way"] : null)) {
            // line 180
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                // line 181
                echo "                        ";
                echo $this->getAttribute($this, "renderTab", array(0 => $context["translationsField"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                ";
        } else {
            // line 184
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 185
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    // line 186
                    echo "                            ";
                    echo $this->getAttribute($this, "renderTab", array(0 => $context["translationsField"]), "method");
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                ";
        }
        // line 190
        echo "            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 191
        echo "        </div>
    </div>
    <script type=\"text/javascript\">
        require(['jquery'],
                function(\$) {
                    \$('.emailtemplate-translatation.oro-tabs.tabbable ul.nav.nav-tabs li a').on('show', function(e) {
                        var target = e.target || window.event.target;
                        var dataRelated = \$(target).attr('data-related');
                        \$(\$(target).closest('form').find(':input.translation')).each(function(key, el) {
                            \$(el).val(dataRelated);
                        });
                    });
                })
    </script>
";
    }

    // line 207
    public function block_oro_email_email_folder_row($context, array $blocks = array())
    {
        // line 208
        echo "    ";
        if (( !(null === $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array())) && (null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "outdatedAt", array())))) {
            // line 209
            echo "        <div>
            ";
            // line 210
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "syncEnabled", array()), 'widget');
            echo "<label class=\"folder-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "name", array()), "html", null, true);
            echo "</label>
            ";
            // line 211
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fullName", array()), 'widget');
            echo "
            ";
            // line 212
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget');
            echo "
            ";
            // line 213
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget');
            echo "
            ";
            // line 214
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "subFolders", array())) > 0)) {
                // line 215
                echo "                <div class=\"folder-sub-folders\">
                    ";
                // line 216
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subFolders", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 219
            echo "        </div>
    ";
        }
    }

    // line 223
    public function block_oro_email_email_folder_tree_row($context, array $blocks = array())
    {
        // line 224
        echo "    ";
        if (( !(null === $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array())) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array())) > 0))) {
            // line 225
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'row');
            echo "
    ";
        }
    }

    // line 229
    public function block_oro_email_email_folder_tree_widget($context, array $blocks = array())
    {
        // line 230
        echo "    <div class=\"folder-tree-widget\">
        <input id=\"check-all\" type=\"checkbox\"/><label class=\"folder-label\">All</label>
        <div id=\"folder-list\">
            ";
        // line 233
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 234
            echo "                ";
            if (((null === $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "parentFolder", array())) && (null === $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "outdatedAt", array())))) {
                // line 235
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
                ";
            }
            // line 237
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "        </div>
    </div>

    <script type=\"text/javascript\">
        require(['jquery'], function(\$) {
            var \$folderList = \$('#folder-list');
            var \$checkAll = \$('#check-all');
            \$checkAll.click(function() {
                var checked = this.checked;
                \$folderList.find(':checkbox').each(function() {
                    this.checked = checked;
                });
            });

            \$folderList.find(':checkbox').each(function() {
                \$(this).css('margin', 0);
            });
        });
    </script>
";
    }

    // line 259
    public function block_oro_email_mailbox_grid_row($context, array $blocks = array())
    {
        // line 260
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
    ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
    }

    // line 264
    public function block_oro_email_mailbox_grid_label($context, array $blocks = array())
    {
        // line 265
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 265);
        // line 266
        echo "    ";
        $context["redirectData"] = array("route" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 267
(isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "parameters" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 268
(isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 270
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_organization_update")) {
            // line 271
            echo "        <div class=\"row\" style=\"margin-top: -42px;\">
            <div class=\"pull-right\">
                <div class=\"btn-group\">
                    ";
            // line 274
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('routing')->getPath("oro_email_mailbox_create", array("redirectData" =>             // line 275
(isset($context["redirectData"]) ? $context["redirectData"] : null))), "label" => $this->env->getExtension('translator')->trans("oro.email.system_configuration.mailbox_configuration.add_mailbox.label")));
            // line 277
            echo "
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 284
    public function block_oro_email_mailbox_grid_widget($context, array $blocks = array())
    {
        // line 285
        echo "    ";
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 285);
        // line 286
        echo "    ";
        $context["redirectData"] = array("route" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 287
(isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "parameters" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 288
(isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 290
        echo "    <div class=\"row\" style=\"margin-right: -20px;\">
        ";
        // line 291
        echo $context["dataGrid"]->getrenderGrid("base-mailboxes-grid", array("redirectData" =>         // line 292
(isset($context["redirectData"]) ? $context["redirectData"] : null), "organization_ids" => array(0 => $this->getAttribute($this->env->getExtension('oro_security_organization_extension')->getCurrentOrganization(), "getId", array(), "method"))));
        // line 293
        echo "
    </div>
";
    }

    // line 297
    public function block_oro_email_mailbox_widget($context, array $blocks = array())
    {
        // line 298
        echo "    ";
        $context["email_origin"] = $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "origin", array()), 'widget');
        // line 299
        echo "    ";
        $context["process"] = ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "processType", array()), 'row') .         // line 300
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "processSettings", array()), 'widget'));
        // line 301
        echo "    ";
        $context["access"] = ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "authorizedUsers", array()), 'row') .         // line 302
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), "authorizedRoles", array()), 'row'));
        // line 304
        echo "    ";
        $context["options"] = array("el" => ("#" . $this->getAttribute($this->getAttribute(        // line 305
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array())));
        // line 307
        echo "    <div data-page-component-module=\"oroemail/js/app/views/mailbox-update-view\"
         data-page-component-options=\"";
        // line 308
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null)), "html", null, true);
        echo "\">
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5>";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.mailbox.general.label"), "html", null, true);
        echo "</h5>
            ";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5>";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.mailbox.origin.label"), "html", null, true);
        echo "</h5>
            ";
        // line 315
        echo (isset($context["email_origin"]) ? $context["email_origin"] : null);
        echo "
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5>";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.mailbox.process.label"), "html", null, true);
        echo "</h5>
            ";
        // line 319
        echo (isset($context["process"]) ? $context["process"] : null);
        echo "
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5>";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.mailbox.access.label"), "html", null, true);
        echo "</h5>
            ";
        // line 323
        echo (isset($context["access"]) ? $context["access"] : null);
        echo "
        </fieldset>
    </div>
";
    }

    // line 335
    public function getrenderTabNavItem($__form__ = null, $__localeLabels__ = null, $__isDefault__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "localeLabels" => $__localeLabels__,
            "isDefault" => $__isDefault__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 336
            echo "    ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array());
            // line 337
            echo "
    <li ";
            // line 338
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"javascript:void(0);\" data-target=\".emailtemplate-translatation-fields-";
            // line 339
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
            echo "\" data-toggle=\"tab\" data-related=\"";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
            echo "\">";
            // line 340
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["localeLabels"]) ? $context["localeLabels"] : null), (isset($context["locale"]) ? $context["locale"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["localeLabels"]) ? $context["localeLabels"] : null), (isset($context["locale"]) ? $context["locale"] : null), array(), "array"), "N/A")) : ("N/A"))), "html", null, true);
            if ((isset($context["isDefault"]) ? $context["isDefault"] : null)) {
                echo " ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("[Default]", array(), "messages");
            }
            // line 341
            echo "</a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 350
    public function getrenderTab($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 351
            echo "    ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array());
            // line 352
            echo "
    <div class=\"emailtemplate-translatation-fields-";
            // line 353
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
            echo " tab-pane";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : null))) {
                echo " active";
            }
            echo "\">
        ";
            // line 354
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
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
        return "OroEmailBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  834 => 354,  826 => 353,  823 => 352,  820 => 351,  808 => 350,  795 => 341,  789 => 340,  784 => 339,  778 => 338,  775 => 337,  772 => 336,  758 => 335,  750 => 323,  746 => 322,  740 => 319,  736 => 318,  730 => 315,  726 => 314,  720 => 311,  716 => 310,  711 => 308,  708 => 307,  706 => 305,  704 => 304,  702 => 302,  700 => 301,  698 => 300,  696 => 299,  693 => 298,  690 => 297,  684 => 293,  682 => 292,  681 => 291,  678 => 290,  676 => 288,  675 => 287,  673 => 286,  670 => 285,  667 => 284,  658 => 277,  656 => 275,  655 => 274,  650 => 271,  647 => 270,  645 => 268,  644 => 267,  642 => 266,  639 => 265,  636 => 264,  630 => 261,  625 => 260,  622 => 259,  599 => 238,  593 => 237,  587 => 235,  584 => 234,  580 => 233,  575 => 230,  572 => 229,  564 => 225,  561 => 224,  558 => 223,  552 => 219,  546 => 216,  543 => 215,  541 => 214,  537 => 213,  533 => 212,  529 => 211,  523 => 210,  520 => 209,  517 => 208,  514 => 207,  496 => 191,  493 => 190,  490 => 189,  484 => 188,  475 => 186,  470 => 185,  465 => 184,  462 => 183,  453 => 181,  448 => 180,  445 => 179,  443 => 178,  439 => 176,  436 => 175,  433 => 174,  427 => 173,  418 => 171,  413 => 170,  408 => 169,  405 => 168,  396 => 166,  391 => 165,  388 => 164,  386 => 163,  382 => 161,  379 => 160,  372 => 156,  368 => 155,  364 => 153,  362 => 151,  361 => 150,  360 => 149,  359 => 148,  358 => 147,  355 => 146,  349 => 145,  346 => 144,  344 => 142,  343 => 141,  342 => 140,  341 => 139,  340 => 138,  338 => 137,  333 => 136,  331 => 135,  328 => 134,  322 => 133,  319 => 132,  317 => 130,  316 => 129,  315 => 128,  313 => 127,  308 => 126,  306 => 125,  291 => 113,  287 => 112,  276 => 104,  269 => 100,  263 => 97,  255 => 92,  237 => 76,  234 => 75,  228 => 72,  214 => 61,  199 => 48,  196 => 47,  190 => 44,  174 => 31,  170 => 30,  166 => 29,  160 => 26,  157 => 25,  153 => 23,  149 => 21,  147 => 20,  143 => 19,  134 => 12,  131 => 11,  120 => 7,  115 => 6,  112 => 5,  105 => 2,  102 => 1,  97 => 344,  94 => 327,  92 => 297,  89 => 296,  87 => 284,  84 => 283,  82 => 264,  79 => 263,  77 => 259,  74 => 258,  72 => 229,  69 => 228,  67 => 223,  64 => 222,  62 => 207,  59 => 206,  57 => 160,  54 => 159,  52 => 75,  49 => 74,  47 => 47,  44 => 46,  42 => 11,  39 => 10,  37 => 5,  34 => 4,  32 => 1,);
    }
}
