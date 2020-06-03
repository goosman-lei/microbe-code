<?php
return [
    'feature' => [
        'class'     => '\\MicrobeDemo\\Chain\\Feature',
        'config'    => include(__DIR__ . '/feature.inc'),
        'direction' => 'append',
        'target'    => '-root',
    ],
    'error' => [
        'class'     => '\\Microbe\\Chain\\Error',
        'config'    => [],
        'direction' => 'append',
        'target'    => '-root',
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
