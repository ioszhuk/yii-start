<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
	        'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
	        'enablePrettyUrl' => true,
	        'showScriptName' => false,
	        'rules' => require (__DIR__ . '/routes.php'),
        ],
        'assetManager' => [
	        'bundles' => [
		        'yii\web\JqueryAsset' => [
			        'sourcePath' => null,
			        'basePath' => '@webroot',
			        'baseUrl' => '@web',
			        'js' => [
				        'js/bundle.js',
			        ]
		        ]
	        ]
        ],
        'siteSettingsComponent' => [
	        'class' => 'frontend\components\SiteSettingsComponent'
        ],
    ],
    'params' => $params,
];
