<?php

namespace BrlReCaptcha;

/**
 * Created by PhpStorm.
 * User: lars
 * Date: 18.03.15
 * Time: 20:00.
 */

return [
    'service_manager' => array(
        'invokeables' => array(
            'BrlReCaptcha\Service\ReCaptcha' => Service\ReCaptchaService::class,
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'browserlife/recaptcha' => Helper\ReCaptcha::class,

        ),
    ),
];
