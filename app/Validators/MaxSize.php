<?php declare(strict_types=1);

namespace App\Validators;

use App\Validators\IValidator;

/**
 * Class MaxSize
 *
 * @package App\Validators
 * @author  Roman Piller
 */
final class MaxSize implements IValidator
{
    /** @inheritDoc */
    public function validate(array $attributes): array
    {
        //TODO: vykonaj validaciu MaxSize
        //  ak error vrat pole vynimku
        //  ak ok vrat prazdne pole
        echo 'Vykonal som validaciu ' . __CLASS__ . PHP_EOL;
        return [];
    }
}
