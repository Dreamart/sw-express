<?php

/* OroDashboardBundle:Dashboard:tabbedWidget.html.twig */
class __TwigTemplate_af6896a7007971c67315f39f68ba5c4afb882160449f28fbf672aee3817d73fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroDashboardBundle:Dashboard:tabbedWidget.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'tab_content' => array($this, 'block_tab_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"tab-container\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "                <li";
            if (((isset($context["activeTab"]) ? $context["activeTab"] : null) == $this->getAttribute($context["tab"], "name", array()))) {
                echo " class=\"active\"";
            }
            echo "><a
                    href=\"javascript:void(0);\" class=\"no-hash tab-button\"
                    data-name=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "name", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "url", array()), "html", null, true);
            echo "\">
                        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "label", array()), "html", null, true);
            echo "
                        ";
            // line 11
            if ($this->getAttribute($context["tab"], "afterHtml", array(), "any", true, true)) {
                // line 12
                echo "                            ";
                echo $this->getAttribute($context["tab"], "afterHtml", array());
                echo "
                        ";
            }
            // line 14
            echo "                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
        <div class=\"tab-content\">
            <div class=\"content\">
                ";
        // line 20
        $this->displayBlock('tab_content', $context, $blocks);
        // line 23
        echo "            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        require(['jquery', 'underscore', 'oroui/js/mediator', 'oroui/js/error', 'oroui/js/app/views/loading-mask-view'],
        function(\$, _, mediator, error, LoadingMask){
            var loadingMask = null;
            \$(document).on('click', '#";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["widgetContentId"]) ? $context["widgetContentId"] : null), "html", null, true);
        echo " .tab-button', function (e) {
                var \$el = \$(this);
                var \$prevTab = \$el.closest('.nav-tabs').find('li.active');
                var \$currentTab = \$el.closest('li');
                \$prevTab.removeClass('active');
                \$currentTab.addClass('active');

                var \$tabContent = \$el.closest('.widget-content').find('.tab-content');
                if (!loadingMask) {
                    loadingMask = new LoadingMask({container: \$tabContent});
                }

                loadingMask.show();
                \$.ajax({
                    url: \$el.data('url'),
                    dataType: 'html',
                    error: function(jqXHR) {
                        loadingMask.hide();
                        \$currentTab.removeClass('active');
                        \$prevTab.addClass('active');
                        error.handle({}, jqXHR, {enforce: true});
                    },
                    success: function(data) {
                        \$tabContent.find('.content')
                            .trigger('content:remove')
                            .html(data)
                            .trigger('content:changed');
                        loadingMask.hide();
                    }
                });
            });
        });
    </script>
    ";
        // line 63
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_tab_content($context, array $blocks = array())
    {
        // line 21
        echo "                    ";
        echo (isset($context["activeTabContent"]) ? $context["activeTabContent"] : null);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:tabbedWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 21,  132 => 20,  126 => 63,  90 => 30,  81 => 23,  79 => 20,  74 => 17,  66 => 14,  60 => 12,  58 => 11,  54 => 10,  48 => 9,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
