<?php

/**
 * This file is part of the tatumio/tatum-php library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Lukas Kotol <lukas.kotol@tatum.io>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace Tatum;

/**
 * 
 */
class Tatum
{
    /**
     * Returns a simple and friendly message.
     *
     * @return string
     */
    public function getHello(): string
    {
        return 'Hello, World!';
    }
}
