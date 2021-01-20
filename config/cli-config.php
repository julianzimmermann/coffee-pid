<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

$rootDir = realpath(__DIR__ . '/..');

require $rootDir . '/vendor/autoload.php';

$kernel = new JzIT\Kernel\Kernel($rootDir);
$container = $kernel->getContainer();
$em = $kernel->getContainer()->get('entityManager');
return ConsoleRunner::createHelperSet($em);
