<?php

/**
 * Created by PhpStorm.
 * User: lars
 * Date: 18.03.15
 * Time: 19:52.
 */
namespace BrlReCaptcha;

/**
 * Class Module
 * @package BrlReCaptcha
 */
class Module
{
    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__.'/config/module.config.php';
    }
}
