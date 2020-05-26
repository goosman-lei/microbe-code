<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

$config = new \Microbe\Config\File(__DIR__ . '/../../src/conf');
\Microbe\Runner\Webpage::getInstance()->init($config);

\Microbe\Microbe::$ins->appendChain(new \MicrobeDemo\Action());

\Microbe\Runner\Webpage::getInstance()->run();