<?php declare(strict_types=1);

namespace App\Example;

/**
 * Class Baz
 *
 * @package App
 */
final class Baz
{
    /**
     * Constructor
     *
     * @param Bar $bar
     */
    public function __construct(private Bar $bar)
    {
    }

    /**
     * Info
     */
    public function info(): void
    {
        $this->bar->info();
        echo 'Trieda Baz' . PHP_EOL;
    }
}
