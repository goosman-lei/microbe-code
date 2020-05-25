<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
\Microbe\Runner::run(realpath(__DIR__ . '/../../src'));

init_client_env();

$name = \Microbe\Microbe::$ins->runner->request->getQuery('name', 'XXX');

if (\Microbe\Microbe::$ins->runner->clientEnv->is('use-ie')) {
    echo "你好 {$name}, 请远离IE!\n";
} else {
    echo "你好 {$name}, 你已经远离IE!\n";
}

function init_client_env() {
    \Microbe\Microbe::$ins->runner->clientEnv->set('user-agent', $_SERVER['HTTP_USER_AGENT']);
}