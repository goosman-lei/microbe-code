<?php
ini_set('display_errors', 'on');
require_once(__DIR__ . '/../../vendor/autoload.php');

$config = new \Microbe\Config\File(__DIR__ . '/../conf');

\Microbe\Scene\Webpage\Runner::getInstance()->init($config);

\Microbe\Scene\Webpage\Runner::getInstance()->run();