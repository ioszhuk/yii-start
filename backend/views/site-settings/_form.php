<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;

/* @var $this yii\web\View */
/* @var $model common\models\SiteSettings */
/* @var $form yii\widgets\ActiveForm */

?>

<?php $form = ActiveForm::begin(); ?>

	<div class="row justify-content-between">
		<div class="col like-box">
			<?= $form->field($model, 'phones')->widget(MultipleInput::className(), [
				'allowEmptyList'    => true,
				'enableGuessTitle'  => false,
				'sortable' => false,
				'addButtonPosition' => MultipleInput::POS_HEADER,
				'columns' => [
					[
						'name'  => 'phone_link',
						'title' => 'Телефон(ссылка)',
					],
					[
						'name'  => 'phone_anchor',
						'title' => 'Телефон(анкор)',
					]
				]
			]) ?>
		</div>
		<div class="col like-box">
            <?= $form->field($model, 'email')->textInput() ?>
		</div>
	</div>

	<div class="row justify-content-between">
		<div class="col like-box">
			<?= $form->field($model, 'addresses')->widget(MultipleInput::className(), [
				'allowEmptyList'    => true,
				'enableGuessTitle'  => false,
				'sortable' => false,
				'addButtonPosition' => MultipleInput::POS_HEADER,
			]) ?>
		</div>
	</div>

	<div class="row justify-content-between">

		<div class="col like-box">
			<?= $form->field($model, 'work_times')->widget(MultipleInput::className(), [
				'allowEmptyList'    => true,
				'enableGuessTitle'  => false,
				'sortable' => false,
				'addButtonPosition' => MultipleInput::POS_HEADER,
			]) ?>
		</div>

	</div>

    <div class="row justify-content-between">

        <div class="col like-box">
			<?= $form->field($model, 'social_networks')->widget(MultipleInput::className(), [
				'allowEmptyList'    => true,
				'enableGuessTitle'  => false,
				'sortable' => false,
				'addButtonPosition' => MultipleInput::POS_HEADER,
				'columns' => [
					[
						'name'  => 'link_url',
						'title' => 'URL',
					],
					[
						'name'  => 'link_type',
						'type' => 'dropDownList',
						'title' => 'Тип соц. сети',
						'items' => [
							'facebook' => 'Facebook',
                            'youtube' => 'YouTube',
							'instagram' => 'Instagram',
						]
					]
				]
			]) ?>
        </div>

    </div>

	<div class="row justify-content-between">
		<div class="col">
			<div class="form-group">
				<br>
				<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
			</div>
		</div>
	</div>

<?php ActiveForm::end(); ?>