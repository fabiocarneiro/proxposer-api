<?php

use DoctrineModule\Stdlib\Hydrator\DoctrineObject;

return [
    'zf-versioning' => [
        'default_version' => 1,
    ],
    'zf-hal' => [
        'renderer' => [
            'default_hydrator' => DoctrineObject::class,
        ],
    ]
];