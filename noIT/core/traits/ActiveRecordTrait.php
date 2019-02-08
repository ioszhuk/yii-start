<?php

namespace noIT\core\traits;

use backend\models\Country;
use yii\helpers\ArrayHelper;

trait ActiveRecordTrait
{
	public static $keyAttribute = 'id';
	public static $labelAttribute = 'name';

    /**
     * Get all items for
     */
    public static function getFlatArray($conditions = []) {
        return ArrayHelper::map(static::find()->all(), static::$keyAttribute, static::$labelAttribute);
    }
}