<?php
return [
    'scheme' => [],
    'resource' => [
        'mysqli' => [
            ':connect_timeout' => 1,
            'default' => [
                'master' => [
                    ['host' => '127.0.0.1', 'port' => 3306, 'user' => 'microbe', 'passwd' => 'microbe', 'dbname' => 'microbe'],
                ],
                'slave' => [
                    ['host' => '127.0.0.1', 'port' => 3306, 'user' => 'microbe', 'passwd' => 'microbe', 'dbname' => 'microbe'],
                ],
            ],
        ],
    ],
];
