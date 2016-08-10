<?php

/*
 * This file is part of the Dektrium project
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\bootstrap\Nav;

?>

<?= Nav::widget([
    'options' => [
        'class' => 'nav-tabs',
        'style' => 'margin-bottom: 15px',
    ],
    'items' => [
        [
            'label'   => Yii::t('user', 'Users'),
            'url'     => ['/user/admin/index'],
        ],
        [
            'label'   => Yii::t('user', 'Roles'),
            'url'     => ['/rbac/role/index'],
            'visible' => (Yii::$app->hasModule('rbac') && Yii::$app->getModule('rbac')->className()) == 'andrew72ru\rbac\RbacWebModule',
        ],
        [
            'label' => Yii::t('user', 'Permissions'),
            'url'   => ['/rbac/permission/index'],
            'visible' => (Yii::$app->hasModule('rbac') && Yii::$app->getModule('rbac')->className()) == 'andrew72ru\rbac\RbacWebModule',
        ],
        [
            'label' => Yii::t('user', 'Create'),
            'items' => [
                [
                    'label'   => Yii::t('user', 'New user'),
                    'url'     => ['/user/admin/create'],
                ],
                [
                    'label' => Yii::t('user', 'New role'),
                    'url'   => ['/rbac/role/create'],
                    'visible' => (Yii::$app->hasModule('rbac') && Yii::$app->getModule('rbac')->className()) == 'andrew72ru\rbac\RbacWebModule',
                ],
                [
                    'label' => Yii::t('user', 'New permission'),
                    'url'   => ['/rbac/permission/create'],
                    'visible' => (Yii::$app->hasModule('rbac') && Yii::$app->getModule('rbac')->className()) == 'andrew72ru\rbac\RbacWebModule',
                ],
            ],
        ],
    ],
]) ?>
