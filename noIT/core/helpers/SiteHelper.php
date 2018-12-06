<?php
namespace noIT\core\helpers;

use common\models\Affiliate;
use Yii;

class SiteHelper {
    /**
     * @var Affiliate[]
     */
    static protected $affiliates;
    static protected $affiliates_map;

    /**
     * @param string $string
     * @return string
     */
    public static function createdByFull($string = 'Created by <a href="{link}" target="_blank" rel="nofollow">&quot;{name}&quot;</a>') {
        return Yii::t('app', $string, ['link' => 'http://noit-group.com.ua/', 'name' => self::createdBy()]);
    }

    /**
     * @return string
     */
    public static function createdBy() {
        return "noIT Group";
    }

    public static function getUser($field = null) {
        if (Yii::$app->user->isGuest) {
            return null;
        }
        return $field ? Yii::$app->user->identity->{$field} : Yii::$app->user->identity;
    }

    static public function getErrorMessages($errors) {
        $messages = [];
        foreach($errors as $errors) {
            $messages[] = implode("\n", $errors);
        }
        return $messages;
    }
}