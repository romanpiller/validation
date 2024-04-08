<?php declare(strict_types=1);

namespace App\Tests\Example;

require_once __DIR__ . '/../../bootstrap.php';

use App\Example\Bar;
use App\Example\Baz;
use Mockery;
use Tester\Assert;
use Tester\TestCase;

/**
 * Class BazTest
 *
 * @package App\Tests\Example
 * @testCase
 */
final class BazTest extends TestCase
{
    /**
     * Test info
     */
    public function testInfo(): void
    {
        $barMock = Mockery::mock(Bar::class);
        $barMock->shouldReceive('info');

        /** @var Bar $bar */
        $bar = $barMock;

        $baz = new Baz($bar);
        ob_start();
        $baz->info();
        $output = (string)ob_get_flush();
        Assert::same('Trieda Baz' . PHP_EOL, $output);
    }
}

(new BazTest())->run();
