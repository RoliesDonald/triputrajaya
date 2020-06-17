<?php

/** @var \yii\web\View $this */
/** @var string $directoryAsset */
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?= \yii\helpers\Html::a('<img class="brand-image img-circle elevation-3" src="' . ($directoryAsset . '/img/AdminLTELogo.png') . '" alt="APP"><span class="brand-text font-weight-light">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'brand-link']) ?>
    <div class="sidebar">

        <nav class="mt-2">
            <?= dmstr\adminlte\widgets\Menu::widget(
                [
                    'options' => ['class' => 'nav nav-pills nav-sidebar flex-column', 'data-widget' => 'treeview'],
                    'items' => [
                        ['label' => 'Update Website', 'header' => true],
                        ['label' => 'Add Image', 'iconType' => 'far', 'icon' => 'file-code', 'url' => ['/gii']],
                        ['label' => 'Employee Section', 'header' => true],
                        ['label' => 'Debug', 'icon' => 'tachometer-alt', 'url' => ['/debug']],
                        ['label' => 'Warehouse Management System', 'header' => true],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        [
                            'label' => 'Some tools',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'iconType' => 'far', 'icon' => 'file-code', 'url' => ['@vendor/almasaeed2010/adminlte/pages/example/404.html'],],
                                ['label' => 'Debug', 'icon' => 'tachometer-alt', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'iconType' => 'far',
                                    'icon' => 'circle',
                                    'url' => '#',
                                    'badge' => '<span class="badge badge-info right">123</span>',
                                    'items' => [
                                        ['label' => 'Level Two', 'iconType' => 'far', 'icon' => 'dot-circle', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'iconType' => 'far',
                                            'icon' => 'dot-circle',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],

                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
            ) ?>
        </nav>

    </div>

</aside>
