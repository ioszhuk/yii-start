<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'modules' => [
	    'gridview' =>  [
		    'class' => '\kartik\grid\Module',
		    'i18n' => [
			    'class' => 'yii\i18n\PhpMessageSource',
			    'basePath' => '@kvgrid/messages',
			    'forceTranslation' => true
		    ]
	    ],
    ],
    'components' => [
        'request' => [
        	'baseUrl' => '/admin',
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
	        'identityClass' => 'common\models\User',
	        'enableAutoLogin' => true,
	        'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            'name' => 'advanced-backend',
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
        'assetManager' => [
	        'bundles' => [
		        'yii\web\JqueryAsset' => [
			        'sourcePath' => null,
			        'basePath' => '@webroot',
			        'baseUrl' => '@web',
			        'js' => [
				        'metronic-admin/vendors/base/vendors.bundle.js',
				        'metronic-admin/custom/js/jquery-migrate.min.js',
				        'metronic-admin/demo/default/base/scripts.bundle.js',
				        'metronic-admin/components-bundle/js/bootstrap-select.js',
			        ]
		        ]
	        ]
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
	        'enablePrettyUrl' => true,
	        'showScriptName' => false,
	        'rules' => require (__DIR__ . '/routes.php'),
        ],
        'componentHelper' => [
	        'class' => 'backend\components\ComponentHelper'
        ],
    ],
    'params' => $params,
];
