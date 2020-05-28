<?php
return [
    'rules'   => [
        '*' => 'smarty-pc',
        'Welcome' => [
            '*'     => 'phtml',
            'Sayhi' => 'json',
        ],
        'Hi'    => 'smarty-mobile',
    ],
    'engines' => [
        'smarty-pc' => [
            'class' => '\\Microbe\\Scene\\Webpage\\TemplateEngine\\Smarty',
            'config' => [
                'cache_lifetime'        => 30 * 24 * 3600,
                'caching'               => false,
                'cache_dir'             => '',
                'use_sub_dirs'          => TRUE,
                'template_dir'          => __DIR__ . '/../smarty-pc',
                'plugins_dir'           => array(),
                'compile_dir'           => __DIR__ . '/../../var/smarty-compiled/pc' ,
                'default_modifiers'     => array('escape:"html"'),
                'left_delimiter'        => '{%',
                'right_delimiter'       => '%}',
            ],
        ],
        'smarty-mobile' => [
            'class' => '\\Microbe\\Scene\\Webpage\\TemplateEngine\\Smarty',
            'config' => [
                'cache_lifetime'        => 30 * 24 * 3600,
                'caching'               => false,
                'cache_dir'             => '',
                'use_sub_dirs'          => TRUE,
                'template_dir'          => __DIR__ . '/../smarty-mobile',
                'plugins_dir'           => array(),
                'compile_dir'           => __DIR__ . '/../../var/smarty-compiled/mobile' ,
                'default_modifiers'     => array('escape:"html"'),
                'left_delimiter'        => '{%',
                'right_delimiter'       => '%}',
            ],
        ],
        'json' => [
            'class' => '\\Microbe\\Scene\\Webpage\\TemplateEngine\\Json',
            'config' => [
                'json_encode_options' => JSON_UNESCAPED_UNICODE,
            ],
        ],
        'phtml' => [
            'class' => '\\Microbe\\Scene\\Webpage\\TemplateEngine\\Phtml',
            'config' => [
                'template_dir'          => __DIR__ . '/../phtml',
            ],
        ],
    ],
];
