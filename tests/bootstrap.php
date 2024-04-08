<?php declare(strict_types=1);

use Nette\DI\Container;

require_once __DIR__ . '/../vendor/autoload.php';

Tester\Environment::setup();
Tester\Environment::bypassFinals();
date_default_timezone_set('Europe/Bratislava');

/**
 * Create DI container for tests
 *
 * @return Container
 */
function create_container(): Container
{
    $containerLoader = new Nette\DI\ContainerLoader(__DIR__ . '/../tmp', true);

    /** @var Container $container */
    $container = $containerLoader->load(function ($compiler) {
        $compiler->loadConfig(__DIR__ . '/../app/config/config.neon');
        $compiler->loadConfig(__DIR__ . '/app/config/config.local.test.neon');
    });

    return new $container();
}
