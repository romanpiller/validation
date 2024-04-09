<?php declare(strict_types=1);

namespace App;

use App\Package\PackageInput;
use Exception;

/**
 * Class Application
 *
 * @package App
 */
final class Application
{
    /**
     * Konstruktor
     * @param PackageInput $packageInput
     */
    public function __construct(
        private readonly PackageInput $packageInput,
    )
    {
    }

    /**
     * Run application
     *
     * @return int
     */
    public function run(): int
    {
        echo 'Utikej Foreste...' . PHP_EOL;
        try
        {
            $this->packageInput->validate();
        }
        catch (Exception $e)
        {
            echo $e->getMessage() . PHP_EOL;
        }
        return 0;
    }
}
