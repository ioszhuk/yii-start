<?php
namespace backend\components;

class ComponentHelper extends \yii\base\Component
{
	public function getSortOrderRange()
	{
		$range = [];

		for($i = 1; $i < 101; $i++) {
			$range[$i] = [ 'value' => $i, 'label' => $i ];
		}

		return $range;
	}
	public function getProductStatus()
	{
		$status = [];

		$status[0] = [ 'value' => 0, 'label' => 'Нет в наличии'];
		$status[1] = [ 'value' => 5, 'label' => 'Под заказ'];
		$status[2] = [ 'value' => 10, 'label' => 'Быстрая доставка'];

		return $status;
	}

}