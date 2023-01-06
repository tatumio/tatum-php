<?php

namespace Tatum\Cryptography\Exceptions;
!defined("TATUM-SDK") && exit();

class ScriptRuntimeException extends \Exception {
    /**
     * @var int|string
     */
    private $failureFlag;

    /**
     * @param int|string $failureFlag
     * @param string $message
     */
    public function __construct($failureFlag, $message) {
        $this->failureFlag = $failureFlag;
        parent::__construct($message);
    }

    /**
     * var int|string
     */
    public function getFailureFlag() {
        return $this->failureFlag;
    }
}
