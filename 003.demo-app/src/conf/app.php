<?php
$vendor_path = __DIR__ . '/../../vendor';
$service = [
    'service' => [
        'proxy'  => 'composer',
        'config' => [
            'group'   => 'microbe-dep',
            'project' => 'service',
        ],
    ],
];
$resource = include(__DIR__ . '/resource.inc');
