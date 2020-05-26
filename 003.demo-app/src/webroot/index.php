<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

$config = new \Microbe\Config\File(__DIR__ . '/../../src/conf');
\Microbe\Cgi\Runner::getInstance()->init($config);

\Microbe\Microbe::$ins->appendChain(new \MicrobeDemo\Action());

\Microbe\Cgi\Runner::getInstance()->run();