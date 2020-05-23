<?php
return [
    'engines' => [
        'json' => [
            'adapter' => '\\Microbe\\TemplateEngine\\Adapter\\Json',
            'config'  => [
                'headers'             => ['Content-Type: text/json;CHARSET=UTF-8'],
                'json_encode_options' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
            ],
        ],
        'smarty' => [
            'adapter' => '\\Microbe\\TemplateEngine\\Adapter\\Smarty',
            'config' => [
                'ext_name'              => '.tpl',
                'cache_lifetime'        => 30 * 24 * 3600,
                'caching'               => false,
                'cache_dir'             => '',
                'use_sub_dirs'          => TRUE,
                'template_dir'          => $root_path . '/smarty-tpl',
                'plugins_dir'           => array(),
                'compile_dir'           => $run_path . '/smarty-compiled/' ,
                'default_modifiers'     => array('escape:"html"'),
                'left_delimiter'        => '{%',
                'right_delimiter'       => '%}',
            ],
        ],
    ],
    'routes' => [
        '*' => 'json',
        'Welcome' => [
            '*'        => 'smarty',
            'Sayhello' => 'json',
        ],
    ],
];
