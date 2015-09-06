<?php

/* OroDashboardBundle:Dashboard:quickLaunchpad.html.twig */
class __TwigTemplate_24d9fe89759695a3200496358a932aefbce4ca60f7cb7cd8be9578828b4f3690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroDashboardBundle:Dashboard:quickLaunchpad.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["widgetType"] = "quick-launchpad";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <ul class=\"quick-launchpad-toolbar\">
        ";
        // line 7
        $context["itemWidth"] = (((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 0)) ? (twig_round((100 / twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null))), 1)) : (100));
        // line 8
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            <li style=\"width: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "last", array())) ? ((100 - ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) - 1) * (isset($context["itemWidth"]) ? $context["itemWidth"] : null)))) : ((isset($context["itemWidth"]) ? $context["itemWidth"] : null))), "html", null, true);
            echo "%\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["item"], "route", array()), $this->getAttribute($context["item"], "route_parameters", array())), "html", null, true);
            echo "\">
                    <span class=\"title-box\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["item"], "label", array())), "html", null, true);
            echo "</span>
                    <span class=\"list-content\">
                        <i class=\"icon-";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo "\"></i>
                    </span>
                </a>
            </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
    ";
        // line 19
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:quickLaunchpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  90 => 18,  71 => 13,  66 => 11,  62 => 10,  57 => 9,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
