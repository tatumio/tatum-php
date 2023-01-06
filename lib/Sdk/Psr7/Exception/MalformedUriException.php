<?php

declare(strict_types=1);

/**
 * Malformed URI exception
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */
namespace Tatum\Sdk\Psr7\Exception;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException;

/**
 * Exception thrown if a URI cannot be parsed because it's malformed.
 */
class MalformedUriException extends InvalidArgumentException {
}
