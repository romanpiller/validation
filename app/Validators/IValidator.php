<?php declare(strict_types=1);

namespace App\Validators;

/**
 * Interface IValidator
 *
 * @package App\Validators
 * @author  Roman Piller
 */
interface IValidator
{
    /**
     * Validuje attribut
     *
     * @param array<int, string> $attributes
     *
     * @return array<int, string> vrati pole najdenych vynimiek
     */
    public function validate(array $attributes): array;
}
