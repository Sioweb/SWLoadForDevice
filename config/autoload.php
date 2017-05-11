<?php

/**
* Contao Open Source CMS
*  
* @file autoload.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.devices
* @copyright Sascha Weidner, Sioweb
*/


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'sioweb\contao\extensions\devices'
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
  'Mobile_Detect' => 'system/modules/SWLoadForDevice/classes/Mobile_Detect.php',
  'sioweb\contao\extensions\devices\MobileDetect' => 'system/modules/SWLoadForDevice/classes/MobileDetect.php',
  'sioweb\contao\extensions\devices\ContentDevice' => 'system/modules/SWLoadForDevice/elements/ContentDevice.php',
  'sioweb\contao\extensions\devices\ModuleDevice' => 'system/modules/SWLoadForDevice/modules/ModuleDevice.php',
));