<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'wkhtmltopdf' => function ($sm) {
                return new Wkhtmlto\Wkhtmltopdf();
            },
            'wkhtmltoimage' => function ($sm) {
                return new Wkhtmlto\Wkhtmltoimage();
            }
        )
    )
);