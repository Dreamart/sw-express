<?php

/* OroFilterBundle:Js:container.js.twig */
class __TwigTemplate_6822ced165d274055a0699145ad9edf91695e757bbee85def99779787e77d4cc extends Twig_Template
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
        // line 1
        echo "<script type=\"text/html\" id=\"filter-container\">
    <% if (!_.isEmpty(filters)) { %>
        ";
        // line 3
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            // line 4
            echo "            <div class=\"filter-box oro-clearfix-width\">
                <div class=\"dropdown\">
                    <a href=\"javascript:void(0);\" class=\"btn btn-large dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Filter Results"), "html");
            echo "</a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"filter-container\">
                                <a class=\"reset-filter-button\" href=\"javascript:void(0);\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html");
            echo "</a>
                                <select data-action=\"add-filter-select\" multiple>
                                    <% _.each(filters, function (filter, name) { %>
                                    <option title=\"<%- filter.label %>\" value=\"<%- name %>\" <% if (filter.enabled) { %>selected<% } %>>
                                    <%- filter.label %>
                                    </option>
                                    <% }); %>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        ";
        } else {
            // line 24
            echo "            <div class=\"filter-box oro-clearfix-width\">
                <div class=\"filter-container\">
                    <select data-action=\"add-filter-select\" multiple>
                        <% _.each(filters, function (filter, name) { %>
                        <option title=\"<%- filter.label %>\" value=\"<%- name %>\" <% if (filter.enabled) { %>selected<% } %>>
                        <%- filter.label %>
                        </option>
                        <% }); %>
                    </select>
                </div>
            </div>
        ";
        }
        // line 36
        echo "    <% } %>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroFilterBundle:Js:container.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 36,  53 => 24,  36 => 10,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
