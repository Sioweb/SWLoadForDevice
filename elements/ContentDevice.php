<?php

namespace sioweb\contao\extensions\devices;
use Contao;

/**
* Contao Open Source CMS
*  
* @file ContentDevice.php
* @class ContentDevice
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.devices
* @copyright Sascha Weidner, Sioweb
*/


class ContentDevice extends \Frontend
{
	public function loadForDevice($objElement, $strBuffer)
	{
    $MobileDetect = new \MobileDetect();
		$isMobile = ($MobileDetect->isTablet() || $MobileDetect->isMobile());

		if(
      $objElement->sw_device == 'all' || 
      !$objElement->sw_device || 

      ($objElement->sw_device == 'mobile&ipad' && (preg_match('/ipad|iPad/i',\Environment::get('agent')->string) === 0 || $isMobile)) || 
      ($objElement->sw_device == 'desktop' && !$isMobile) || 
      ($objElement->sw_device == 'desktop&ipad' && $MobileDetect->isTablet()) || 
      ($objElement->sw_device == 'mobile' && $isMobile))
			return $strBuffer;
	}
}