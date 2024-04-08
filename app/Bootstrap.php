<?php declare(strict_types=1);

namespace App;

use Nette\DI\Container;
use Nette\DI\ContainerLoader;

/**
 * Class Bootstrap
 *
 * @package App
 * @author  Roman Piller
 */
final class Bootstrap
{
    /**
     * Vytvorí kontajner
     *
     * @return Container
     */
    public static function getContainer(): Container
    {
        $containerLoader = new ContainerLoader(__DIR__ . '/../tmp', true);

        /** @var Container $container */
        $container = $containerLoader->load(function ($compiler) {
            $compiler->loadConfig(__DIR__ . '/../app/config/config.neon');
        });

        return new $container();
    }

    /**
     * Vytvorí kontajner pre testy
     *
     * @return Container
     */
    public static function getContainerForTest(): Container
    {

        $containerLoader = new ContainerLoader(__DIR__ . '/../tmp', true);
        /** @var Container $container */
        $container = $containerLoader->load(function ($compiler) {
            $compiler->loadConfig(__DIR__ . '/../app/config/config.neon');
            $compiler->loadConfig(__DIR__ . '/app/config/config.local.test.neon');
        });

        return new $container();
    }
}
