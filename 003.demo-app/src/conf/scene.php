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
    'dispatcher' => [
        'namespace' => '\\MicrobeDemo\\Action',
    ],
];