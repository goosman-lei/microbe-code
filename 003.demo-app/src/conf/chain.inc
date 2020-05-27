<?php
return [
    'feature' => [
        'class'     => '\\MicrobeDemo\\Feature',
        'config'    => include(__DIR__ . '/feature.inc'),
        'direction' => 'append',
        'target'    => '-root',
    ],
];
