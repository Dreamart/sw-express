<?php

/**
 * Filename: /opt/lampp/htdocs/swcrm/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/oro_embedded_form_success/default.yml
 */
class __Oro_Layout_Update_4e9111678efcaeb6b40946f3c249e9ec655373f48a9e9e92f0e522b8c49fecc0 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->add( 'success_message', 'content', 'embed_form_success', array (
          'message' => 
          array (
            '@value' => '$data.embedded_form_entity.successMessage',
          ),
          'form_id' => 
          array (
            '@value' => '$data.embedded_form_entity.id',
          ),
        ) );
    }
}