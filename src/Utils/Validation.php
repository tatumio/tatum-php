<?php

namespace Tatum\Utils;

use Respect\Validation\Validator as v;
use UnexpectedValueException;

class Validation
{
    /**
     * @param string|null $value
     * @param string $message
     * @return void
     */
    public static function isNotEmpty(?string $value, string $message)
    {
        if (!v::notEmpty()->validate($value)) {
            throw new UnexpectedValueException($message);
        }
    }
}
