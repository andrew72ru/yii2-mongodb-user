<?php


namespace andrew72ru\user\traits;

use andrew72ru\user\Module;

/**
 * Trait ModuleTrait
 * @property-read Module $module
 * @package andrew72ru\user\traits
 */
trait ModuleTrait
{
    /**
     * @return Module
     */
    public function getModule()
    {
        return \Yii::$app->getModule('user');
    }
}
