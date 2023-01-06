<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction\Factory;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Transaction\Factory\ScriptInfo\CheckLocktimeVerify;
use Tatum\Cryptography\Transaction\Factory\ScriptInfo\CheckSequenceVerify;

class TimeLock {
    /**
     * @var CheckLocktimeVerify|CheckSequenceVerify
     */
    private $info;

    /**
     * TimeLock constructor.
     * @param CheckLocktimeVerify|CheckSequenceVerify $info
     */
    public function __construct($info) {
        if (is_object($info)) {
            $class = get_class($info);
            if ($class !== CheckLocktimeVerify::class && $class !== CheckSequenceVerify::class) {
                throw new \RuntimeException("Invalid script info for TimeLock, must be CLTV/CSV");
            }
        } else {
            throw new \RuntimeException("Invalid script info for TimeLock, must be a script info object");
        }

        $this->info = $info;
    }

    /**
     * @return CheckLocktimeVerify|CheckSequenceVerify
     */
    public function getInfo() {
        return $this->info;
    }
}
