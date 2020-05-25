<?php
ini_set('display_errors', 'on');
require_once(__DIR__ . '/../../vendor/autoload.php');
\Microbe\Runner::run(realpath(__DIR__ . '/../../src'));

$name = \Microbe\Microbe::$ins->runner->request->getQuery('name', 'XXX');

if (\Microbe\Microbe::$ins->runner->request->isFeature('use-ie')) {
    echo "你好 {$name}, 请远离IE!\n";
} else {
    echo "你好 {$name}, 你已经远离IE!\n";
}