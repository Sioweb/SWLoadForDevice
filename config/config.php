<?php
/**
* Contao Open Source CMS
*  
* @file config.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.devices
* @copyright Sascha Weidner, Sioweb
*/

$MobileDetectData = array(
	'replace' => array(), // array('phoneDevices','properties','browsers','tabletDevices','operatingSystems','utilities'),
	'phoneDevices' => array(),
	'properties' => array(),
	'browsers' => array(),
	'tabletDevices' => array(),
	'operatingSystems' => array(),
	'utilities' => array(),
);

if(empty($GLOBALS['MobileDetect']))
	$GLOBALS['MobileDetect'] = array();

$GLOBALS['MobileDetect'] = array_replace_recursive($MobileDetectData, $GLOBALS['MobileDetect']);

$GLOBALS['TL_HOOKS']['getContentElement'][] = array('ContentDevice', 'loadContentForDevice');
$GLOBALS['TL_HOOKS']['getFrontendModule'][] = array('ModuleDevice', 'loadModuleForDevice');