<?php
ini_set('display_errors', 'on');
require_once(__DIR__ . '/../../vendor/autoload.php');

\Microbe\Runner::run(realpath(__DIR__ . '/../..'));