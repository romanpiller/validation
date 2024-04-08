<?php declare(strict_types=1);

namespace App\Tests;

require_once __DIR__ . '/../bootstrap.php';

use App\Application;
use Tester\Assert;
use Tester\TestCase;

/**
 * Class ApplicationTest
 *
 * @package App\Tests
 * @testCase
 */
final class ApplicationTest extends TestCase
{
    /**
     * Test Application
     */
    public function testRun(): void
    {
        $container = create_container();

        /** @var Application $application */
        $application = $container->getByName('application');

        Assert::same(0, $application->run());
    }
}

(new ApplicationTest())->run();
