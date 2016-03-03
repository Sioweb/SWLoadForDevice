<?php
/**
* Contao Open Source CMS
*  
* @file tl_module.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.device
* @copyright Sascha Weidner, Sioweb
*/

foreach($GLOBALS['TL_DCA']['tl_module']['palettes'] as $pKey => &$palette) {
  if(is_array($palette))
    continue;
  $semicolon = substr($palette, -1, 1);
  if($semicolon != ';')
    $semicolon = ';';
  $palette = $palette.$semicolon.'{device_legend},sw_device';
}

$GLOBALS['TL_DCA']['tl_module']['fields']['sw_device'] = array(
  'label'       => &$GLOBALS['TL_LANG']['tl_module']['sw_device'],
  'default'     => 'all',
  'exclude'     => true,
  'inputType'   => 'select',
  'reference'   => &$GLOBALS['TL_LANG']['tl_module']['sw_devices'],
  'options'     => array('all','desktop','mobile','mobile&ipad','desktop&ipad'),
  'sql'         => "varchar(50) NOT NULL default 'all'"
);