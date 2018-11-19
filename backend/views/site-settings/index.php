<?php

/* @var $this yii\web\View */
/* @var $model common\models\SiteSettings */

$__params = require __DIR__ .'/__params.php';

$this->title = $__params['items'];
$this->params['breadcrumbs'][] = ['label' => $__params['items'], 'url' => ['site-settings/index']];

?>

<div class="custom-form-section">
	<div class="custom-form-section-box">

		<?= $this->render('_form', [
			'model' => $model,
		]) ?>

	</div>
</div>