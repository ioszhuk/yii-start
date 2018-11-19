<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@cache', dirname(__DIR__) . '/cache');
Yii::setAlias('@noIT', dirname(dirname(__DIR__)) . '/noIT');

Yii::setAlias('@cdn', dirname(dirname(__DIR__)) . '/cdn');
Yii::setAlias('@cdnUrl', '/cdn');
