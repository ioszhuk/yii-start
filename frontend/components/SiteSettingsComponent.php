<?php
namespace frontend\components;

use Yii;
use \yii\base\Component;

class SiteSettingsComponent extends Component
{
	public static $SECTION = 'SiteSettings';

//	public function getPhones()
//	{
//		if( ($phones = unserialize(Yii::$app->settings->get('phones', self::$SECTION))) ) {
//			return $phones;
//		} else {
//			return [];
//		}
//	}
//
//	public function getEmail()
//	{
//		return Yii::$app->settings->get('email', self::$SECTION);
//	}
//
//	public function getAddresses()
//	{
//		if( ($addresses = unserialize(Yii::$app->settings->get('addresses', self::$SECTION))) ) {
//			return $addresses;
//		} else {
//			return [];
//		}
//	}
//
//	public function getWorkTimes()
//	{
//		if( ($work_times = unserialize(Yii::$app->settings->get('work_times', self::$SECTION))) ) {
//			return $work_times;
//		} else {
//			return [];
//		}
//	}
//
//	public function getSocialNetworks()
//	{
//		if( ($social_networks = unserialize(Yii::$app->settings->get('social_networks', self::$SECTION))) ) {
//			return $social_networks;
//		} else {
//			return [];
//		}
//	}
}