<?php

$rootDir = realpath(__DIR__ . '/..');

require $rootDir . '/vendor/autoload.php';

$kernel = new JzIT\Kernel\Kernel($rootDir);
$application = new \JzIT\Application\Http($kernel);

$application->run();
