<?php
ini_set('display_errors', 'on');
require_once(__DIR__ . '/../../vendor/autoload.php');

$config = new \Microbe\Config\File(__DIR__ . '/../conf');

\Microbe\Runner\Webpage::getInstance()->init($config);
\Microbe\Microbe::$ins->appendChain(new \MicrobeDemo\Action(), 'action');

\Microbe\Runner\Webpage::getInstance()->run();