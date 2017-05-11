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


class MobileDetect extends \Mobile_Detect {

	public function __construct(array $headers = null,$userAgent = null) {

		if(!empty($GLOBALS['MobileDetect']['phoneDevices'])) {
			if(!empty($GLOBALS['MobileDetect']['replace']) && in_array('phoneDevices',$GLOBALS['MobileDetect']['replace'])) {
				static::$phoneDevices = $GLOBALS['MobileDetect']['phoneDevices'];
			} else {
				static::$phoneDevices = array_merge(static::$phoneDevices,$GLOBALS['MobileDetect']['phoneDevices']);
			}
		}

		if(!empty($GLOBALS['MobileDetect']['properties'])) {
			if(!empty($GLOBALS['MobileDetect']['replace']) && in_array('properties',$GLOBALS['MobileDetect']['replace'])) {
				static::$properties = $GLOBALS['MobileDetect']['properties'];
			} else {
				static::$properties = array_merge(static::$properties,$GLOBALS['MobileDetect']['properties']);
			}
		}

		if(!empty($GLOBALS['MobileDetect']['browsers'])) {
			if(!empty($GLOBALS['MobileDetect']['replace']) && in_array('browsers',$GLOBALS['MobileDetect']['replace'])) {
				static::$browsers = $GLOBALS['MobileDetect']['browsers'];
			} else {
				static::$browsers = array_merge(static::$browsers,$GLOBALS['MobileDetect']['browsers']);
			}
		}

		if(!empty($GLOBALS['MobileDetect']['tabletDevices'])) {
			if(!empty($GLOBALS['MobileDetect']['replace']) && in_array('tabletDevices',$GLOBALS['MobileDetect']['replace'])) {
				static::$tabletDevices = $GLOBALS['MobileDetect']['tabletDevices'];
			} else {
				static::$tabletDevices = array_merge(static::$tabletDevices,$GLOBALS['MobileDetect']['tabletDevices']);
			}
		}

		if(!empty($GLOBALS['MobileDetect']['operatingSystems'])) {
			if(!empty($GLOBALS['MobileDetect']['replace']) && in_array('operatingSystems',$GLOBALS['MobileDetect']['replace'])) {
				static::$operatingSystems = $GLOBALS['MobileDetect']['operatingSystems'];
			} else {
				static::$operatingSystems = array_merge(static::$operatingSystems,$GLOBALS['MobileDetect']['operatingSystems']);
			}
		}

		if(!empty($GLOBALS['MobileDetect']['utilities'])) {
			if(!empty($GLOBALS['MobileDetect']['replace']) && in_array('utilities',$GLOBALS['MobileDetect']['replace'])) {
				static::$utilities = $GLOBALS['MobileDetect']['utilities'];
			} else {
				static::$utilities = array_merge(static::$utilities,$GLOBALS['MobileDetect']['utilities']);
			}
		}

		parent::__construct($headers,$userAgent);
	}
}