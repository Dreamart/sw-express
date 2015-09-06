<?php

/* OroDataAuditBundle:js:audit-condition-type-select.html.twig */
class __TwigTemplate_65e5b0e321fa9078684e5a70a7c486a4a9653bdebb122fcd5d1fb98641f64da2 extends Twig_Template
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
        echo "<script type=\"text-template\" id=\"template-audit-condition-type-select\">
    <span class=\"active-filter\">
        <div>
            <div class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><%= selected === \"changed\" ? changedLabel : changedToValueLabel %></a>
                <ul class=\"dropdown-menu\">
                    <li <%= (selected === \"changed\") ? 'class=\"active\"' : '' %>>
                        <a class=\"choice-value\" href=\"#\" data-value=\"changed\"><%= changedLabel %></a>
                    </li>
                    <li <%= (selected === \"changed_to_value\") ? 'class=\"active\"' : '' %>>
                        <a class=\"choice-value\" href=\"#\" data-value=\"changed_to_value\"><%= changedToValueLabel %></a>
                    </li>
                </ul>

                <select style=\"display: none;\">
                    <option <%= (selected === \"changed\") ? \"selected\" : \"\" %> value=\"changed\"><%= changedLabel %></option>
                    <option <%= (selected === \"changed_to_value\") ? \"selected\" : \"\" %> value=\"changed_to_value\"><%= changedToValueLabel %></option>
                </select>
                <span class=\"active-filter\">
                </span>
            </div>
        </div>
    </span>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:js:audit-condition-type-select.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
