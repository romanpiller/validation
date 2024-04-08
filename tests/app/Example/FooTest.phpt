<?php declare(strict_types=1);

namespace App\Tests\Example;

require_once __DIR__ . '/../../bootstrap.php';

use App\Example\Foo;
use Tester\Assert;
use Tester\TestCase;

/**
 * Class FooTest
 *
 * @package App\Tests\Example
 * @testCase
 */
final class FooTest extends TestCase
{
    /**
     * Test info
     */
    public function testInfo(): void
    {
        $foo = new Foo();
        ob_start();
        $foo->info();
        $output = (string)ob_get_flush();
        Assert::same('Trieda Foo' . PHP_EOL, $output);
    }
}

(new FooTest())->run();
