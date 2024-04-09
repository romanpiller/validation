<?php declare(strict_types=1);

namespace App\Package;

use App\Validators\IValidator;
use App\Validators\MaxDimension;
use App\Validators\MaxSize;
use App\Validators\MinSize;
use Exception;

/**
 * Class PackageInput
 *
 * @package App
 * @author  Roman Piller
 */
final class PackageInput
{

    /**
     * Konstruktor natiahne vsetky algoritmy ako services
     */
    public function __construct(
        private MaxDimension $maxDimension,
        private MaxSize      $maxSize,
        private MinSize      $minSize,
    )
    {
    }

    /**
     * Validacia vo vseobecnej logike
     *
     * @return void
     * @throws Exception
     */
    public function validate(): void
    {
        // validacie vo vseobecnej logike
        $packageInputExceptions = []; // uz zachytene nejake vynimky zo vseobecnej validacie

        // atributy ziskane na zaklade service z tabulky
        // value attributov budu stringy vzdy
        $validations = [
            [
                'typ_validation' => 'MAX_DIMENSION',
                'params'    => ['80', '300', '10'],
            ],
            [
                'typ_validation' => 'MAX_SIZE',
                'params'    => ['300'],
            ],
            [
                'typ_validation' => 'MIN_SIZE',
                'params'    => ['10'],
            ],
            [
                'typ_validation' => 'SUM_SIZE',
                'params'    => ['2500'],
            ],
        ];

        foreach($validations as $validation)
        {
            $packageInputException = match ($validation['typ_validation'])
            {
                'MAX_DIMENSION' => $this->maxDimension->validate($validation['params']),
                'MAX_SIZE' => $this->maxSize->validate($validation['params']),
                'MIN_SIZE' => $this->minSize->validate($validation['params']),
                default => throw new Exception('Neznama validacia ' . $validation['typ_validation']),
            };
            $packageInputExceptions[] = $packageInputException;
        }
    }
}
