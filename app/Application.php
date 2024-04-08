<?php declare(strict_types=1);

namespace App;

use App\Example\Baz;
use App\Example\Foo;

/**
 * Class Application
 *
 * @package App
 */
final class Application
{
    /**
     * Constructor
     *
     * @param Foo $foo
     * @param Baz $baz
     */
    public function __construct(private Foo $foo, private Baz $baz)
    {
    }

    /**
     * Run application
     *
     * @return int
     */
    public function run(): int
    {
        echo 'Spustim aplikaciu.' . PHP_EOL;
        $this->foo->info();
        $this->baz->info();
        return 0;
    }
}
