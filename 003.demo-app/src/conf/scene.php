<?php
$base_uri = '/003.demo-app';
$webpage = [
    'canonicalUri' => [
        'base_uri' => '/003.demo-app',
    ],
    'router' => [
        'class'  => '\\Microbe\\Cgi\\Router\\RStatic',
        'config' => [
            'default_module' => 'index',
            'default_action' => 'index',
        ],
    ],
    'templateEngine' => include(__DIR__ . '/template_engine.inc'),
    'dispatcher' => [
        'namespace' => '\\MicrobeDemo\\Action',
    ],
];