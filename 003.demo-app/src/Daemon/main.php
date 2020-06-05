<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

$config = new \Microbe\Config\File(__DIR__ . '/../conf');

\Microbe\Scene\Daemon\Runner::getInstance()->init($config);

\Microbe\Scene\Daemon\Runner::getInstance()->run();
