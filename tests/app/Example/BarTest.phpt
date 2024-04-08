<?php declare(strict_types=1);

namespace App\Tests\Example;

require_once __DIR__ . '/../../bootstrap.php';

use App\Example\Bar;
use App\Example\Foo;
use Mockery;
use Tester\Assert;
use Tester\TestCase;

/**
 * Class BarTest
 *
 * @package App\Tests\Example
 * @testCase
 */
final class BarTest extends TestCase
{
    /**
     * Test info
     */
    public function testInfo(): void
    {
        $fooMock = Mockery::mock(Foo::class);
        $fooMock->shouldReceive('info');

        /** @var Foo $foo */
        $foo = $fooMock;

        $bar = new Bar($foo);
        ob_start();
        $bar->info();
        $output = (string)ob_get_flush();
        Assert::same('Trieda Bar' . PHP_EOL, $output);
    }
}

(new BarTest())->run();
