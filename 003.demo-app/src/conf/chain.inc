<?php
return [
    'error' => [
        'class'     => '\\Microbe\\Chain\\Error',
        'config'    => [],
        'direction' => 'append',
        'target'    => '-root',
    ],
    'feature' => [
        'class'     => '\\MicrobeDemo\\Chain\\Feature',
        'config'    => include(__DIR__ . '/feature.inc'),
        'direction' => 'append',
        'target'    => 'error',
    ],
    'error-tpl' => [
        'class'     => '\\Microbe\\Scene\\Webpage\\Chain\\ErrorTemplate',
        'config'    => [
            'rules' => [
                '*' => 'error',
            ],
        ],
        'direction' => 'append',
        'target'    => '-template-engine',
    ],
];
