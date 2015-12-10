<?php
/**
 * OXID Academy Example Module
 * Widget for demonstrating the caching feature.
 *
 * 13/1/18-15/12/10
 * v0.4
 */

$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'            => 'oxac_datetime_widget',
    'title'         =>  array(
        'en'        =>  '&quot;Date and time&quot; widget',
        'de'        =>  '&bdquo;Datum und Uhrzeit&rdquo;-Widget',
    ),
    'description'    => array(
        'en'        =>  'A tiny and dynamic widget showing date and time on top of the page.',
        'de'        =>  'Dynamisches Widget, das die Uhrzeit und das Datum oben auf der Seite anzeigt.',
    ),
    'thumbnail'     =>  '',
    'version'       =>  '0.4',
    'author'        =>  'Johannes Ackermann',
    'url'           =>  'http://www.oxid-esales.com',
    'email'         =>  'johannes.ackermann@oxid-esales.com',
    'extend'        =>  array(
    ),
    'files'         =>  array(
        'oxac_datetime_widget'      =>  'oxac/oxac_datetime_widget/controllers/oxac_datetime_widget.php',
    ),
    'templates'     =>  array(
        'oxac_datetime_widget.tpl'  =>  'oxac/oxac_datetime_widget/views/widget/oxac_datetime_widget.tpl'
    ),
    'blocks'        => array(
        array(
            'template'  =>  'widget/header/servicebox.tpl',
            'block'     =>  'widget_header_servicebox_flyoutbox',
            'file'      =>  'views/blocks/oxac_datetime_header_block.tpl',
        ),
    ),
    'settings'      => array(
        array(
            'group' =>  'main',
            'name'  =>  'blDateWidgetCaching',
            'type'  =>  'bool',
            'value' =>  'false'
        ),
    ),
);
