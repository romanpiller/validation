<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Nette\DI\Container;

/**
 * Create DI container
 *
 * @return Container
 */
function create_container(): Container
{
    $containerLoader = new Nette\DI\ContainerLoader(__DIR__ . '/../tmp', true);

    /** @var Container $container */
    $container = $containerLoader->load(function ($compiler) {
        $compiler->loadConfig(__DIR__ . '/../app/config/config.neon');
    });

    return new $container();
}
