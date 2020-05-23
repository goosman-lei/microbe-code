<?php
$namespace = '\\MicrobeDemo';

$root_path = __DIR__ . '/..';
$var_path  = $root_path . '/../var';
$run_path  = $var_path . '/run';

$base_uri  = '/003.demo-app';

$feature = include(__DIR__ . '/feature.inc');

$template_engine = include(__DIR__ . '/template_engine.inc');
