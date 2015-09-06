<?php

/* OroSyncBundle::maintenance_js.html.twig */
class __TwigTemplate_beaa41391ce27f5eb1df738b002d153d0fe9e790428c44579e7de53422eef781 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    require(['orosync/js/sync', 'oroui/js/modal', 'orotranslation/js/translator'],
    function(sync, Modal, __) {
        var dialog = null;

        sync.subscribe('oro/maintenance', function (response) {
            var userId = null;
            ";
        // line 8
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 9
            echo "                userId = ";
            echo $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array());
            echo ";
            ";
        }
        // line 11
        echo "
            if (response.isOn && (!userId || parseInt(userId) != parseInt(response.userId))) {
                var regExp = new RegExp('\\n', 'g');
                if (dialog) {
                    dialog.close();
                    dialog.remove();
                }
                dialog = new Modal({
                    'content': __('oro.platform.maintenance_mode_on_message').replace(regExp, '<br/>'),
                    'className': 'modal oro-modal-danger oro-modal-maintenance',
                    'allowCancel': false,
                    'title': __('oro.platform.maintenance_mode_on_title')
                });
                dialog.open();
            } else if (dialog) {
                dialog.close();
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroSyncBundle::maintenance_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
