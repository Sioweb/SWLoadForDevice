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

$GLOBALS['TL_HOOKS']['getContentElement'][] = array('ContentDevice', 'loadContentForDevice');
$GLOBALS['TL_HOOKS']['getFrontendModule'][] = array('ModuleDevice', 'loadModuleForDevice');