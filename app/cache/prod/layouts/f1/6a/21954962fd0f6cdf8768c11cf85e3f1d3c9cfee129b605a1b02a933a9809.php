<?php

/**
 * Filename: /opt/lampp/htdocs/swcrm/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/layouts/embedded_default/default.yml
 */
class __Oro_Layout_Update_f16a21954962fd0f6cdf8768c11cf85e3f1d3c9cfee129b605a1b02a933a9809 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( 'OroEmbeddedFormBundle:layouts:embedded_default/form.html.twig' );
        $layoutManipulator->add( 'head', 'root', 'head', array (
          'title' => 'Form',
        ) );
        $layoutManipulator->add( 'meta_charset', 'head', 'meta', array (
          'charset' => 'utf-8',
        ) );
        $layoutManipulator->add( 'meta_x_ua_compatible', 'head', 'meta', array (
          'http_equiv' => 'X-UA-Compatible',
          'content' => 'IE=edge,chrome=1',
        ) );
        $layoutManipulator->add( 'meta_viewport', 'head', 'meta', array (
          'name' => 'viewport',
          'content' => 'width=device-width, initial-scale=1.0',
        ) );
        $layoutManipulator->add( 'base_css', 'head', 'style' );
        $layoutManipulator->add( 'form_css', 'head', 'style', array (
          'content' => 
          array (
            '@value' => '$data.embedded_form_entity.css',
          ),
        ) );
        $layoutManipulator->add( 'content', 'root', 'body' );
    }
}