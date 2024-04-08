<?php declare(strict_types=1);

namespace App\Example;

/**
 * Class Bar
 *
 * @package App
 */
final class Bar
{
    /**
     * Constructor
     *
     * @param Foo $foo
     */
    public function __construct(private Foo $foo)
    {
    }

    /**
     * Info
     */
    public function info(): void
    {
        $this->foo->info();
        echo 'Trieda Bar' . PHP_EOL;
    }
}
