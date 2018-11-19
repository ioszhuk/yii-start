<?php

use \backend\widgets\MetronicSidebar;
use yii\helpers\Html;

?>
<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">

        <!-- SIDEBAR START -->
		<?= MetronicSidebar::widget([
			'items' => [
				[
					'label' => 'Главная',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['site/index'],
				],
				[
					'label' => 'О нас',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['about-settings/index'],
				],
				[
					'label' => 'Сертификаты',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['certificate/index'],
				],
				[
					'label' => 'Цены',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['price/index'],
				],
				[
					'label' => 'Акции',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['#'],
				],
				[
					'label' => 'Новости',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['news/index'],
				],
				[
					'label' => 'Вопрос-ответ',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['faq/index'],
				],
				[
					'label' => 'До и после',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['before-after/index'],
				],
				[
					'label' => 'Отзывы',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['testimonial/index'],
				],
                [
					'label' => 'Специалисты',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['specialist/index'],
				],
				[
					'label' => 'Настройки',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['site-settings/index'],
				],
				[
					'label' => 'Подписчики',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['subscriber/index'],
				],
                [
					'label' => 'Преимущества',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['advantage/index'],
				],
			]
		]) ?>
        <!-- SIDEBAR END -->

    </div>
    <!-- END: Aside Menu -->

</div>
<!-- END: Left Aside -->