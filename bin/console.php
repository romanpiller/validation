#!/usr/bin/env php
<?php declare(strict_types=1);

use App\Application;
use App\Bootstrap;

require __DIR__ . '/../vendor/autoload.php';

$container = Bootstrap::getContainer();

/** @var Application $application */
$application = $container->getByName('application');

exit($application->run());
