<?php

namespace BrlReCaptcha;

/**
 * Created by PhpStorm.
 * User: lars
 * Date: 18.03.15
 * Time: 20:00.
 */

return [
    'service_manager' => [
        'invokeables' => [
            'BrlReCaptcha\Service\ReCaptcha' => Service\ReCaptchaService::class,
        ],
    ],
    'view_helpers' => [
        'invokables' => [
            'browserlife/recaptcha' => Helper\ReCaptcha::class,

        ],
    ],
];
