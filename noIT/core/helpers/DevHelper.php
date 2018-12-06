<?php
namespace noIT\core\helpers;

use Yii;
use yii\db\Migration;

class DevHelper {
    const FIELDNAME_PK = 'id';
    const FIELDNAME_SORT = 'sort_order';
    const FIELDNAME_STATUS = 'status';

    public static function migrateTableOptions($driverName, $engine = 'InnoDB') {
        $tableOptions = null;

        if ($driverName === 'mysql') {
            $tableOptions = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=$engine";
        }

        return $tableOptions;
    }

    /**
     * @var Migration $migrate
     */
    public static function migrateTablePK($migrate, $fieldName = null) {
        if ($fieldName === null) {
            $fieldName = self::FIELDNAME_PK;
        }
        return [
            $fieldName => $migrate->primaryKey(),
        ];
    }

    /**
     * @var Migration $migrate
     */
    public static function migrateTableStatus($migrate, $defaultValue, $fieldName = null, $fieldLength = 2) {
        if ($fieldName === null) {
            $fieldName = self::FIELDNAME_STATUS;
        }
        return [
            $fieldName => $migrate->smallInteger($fieldLength)->notNull()->defaultValue($defaultValue),
        ];
    }

    /**
     * @var Migration $migrate
     */
    public static function migrateTableTS($migrate) {
        return [
            'created_at' => $migrate->integer()->notNull(),
            'updated_at' => $migrate->integer()->notNull(),
        ];
    }

    /**
     * @var Migration $migrate
     */
    public static function migrateTableLangs($fieldName, $type, $languages = null) {
        if ($languages === null) {
            $languages = Yii::$app->languages->languages;
        } elseif (!is_array($languages)) {
            $languages = [$languages];
        }
        $fields = [];
        foreach ($languages as $language) {
            $fields[self::getLangField($fieldName, $language)] = $type;
        }
        return $fields;
    }

    public static function getLangField($fieldName, $language = null) {
        if (null === $language) {
            $language = Yii::$app->languages->current;
        } elseif (is_string($language)) {
            if (!array_key_exists($language, Yii::$app->languages->languages)) {
                return;
            }
            $language = Yii::$app->languages->languages[$language];
        }
        return "{$fieldName}_{$language->suffix}";
    }

    public static function LangsFieldLabel($fieldName, $language) {
        return Yii::t('app', $fieldName) ." ". Yii::t('app', $language->code);
    }
    
    public static function LangsField($fieldName, $languages = null) {
        if ($languages === null) {
            $languages = Yii::$app->languages->languages;
        } elseif (!is_array($languages)) {
            $languages = [$languages];
        }
        $fieldName = is_array($fieldName) ? $fieldName : [$fieldName];

        $result = [];
        foreach ($fieldName as $_field) {
            foreach ($languages as $language) {
                $result[] = self::getLangField($_field, $language);
            }
        }

        return $result;
    }
}