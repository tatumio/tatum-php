<?php

/*
 * This file is part of composer/semver.
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tatum\Cryptography\Semver\Constraint;
!defined("TATUM-SDK") && exit();

interface ConstraintInterface {
    /**
     * @param ConstraintInterface $provider
     *
     * @return bool
     */
    public function matches(ConstraintInterface $provider);

    /**
     * @return string
     */
    public function getPrettyString();

    /**
     * @return string
     */
    public function __toString();
}
