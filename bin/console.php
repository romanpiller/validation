#!/usr/bin/env php
<?php declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

$container = create_container();

$application = $container->getByName('application');

exit($application->run());
