<?php
return [
    'use-ie' => [
        'summary' => '用户使用IE访问',
        'rules' => [
            [
                'user-agent match ;msie;i',
            ],
        ],
    ],
];
