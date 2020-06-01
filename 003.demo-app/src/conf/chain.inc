<?php
return [
    'feature' => [
        'class'     => '\\MicrobeDemo\\Chain\\Feature',
        'config'    => include(__DIR__ . '/feature.inc'),
        'direction' => 'append',
        'target'    => '-error',
    ],
];
