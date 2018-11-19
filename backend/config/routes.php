<?php

return [
	'' => 'site/index',
	'<controller>/<id:\d+>/<action>' => '<controller>/<action>',
	'<controller>/<id:\d+>' => '<controller>/view',
	'<controller>' => '<controller>/index',
	'<module:\w+>/<controller:\w+>/<action:(\w|-)+>' => '<module>/<controller>/<action>',
	'<module:\w+>/<controller:\w+>/<action:(\w|-)+>/<id:\d+>' => '<module>/<controller>/<action>',
];