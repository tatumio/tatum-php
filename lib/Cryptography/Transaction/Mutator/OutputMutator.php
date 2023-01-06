<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction\Mutator;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Transaction\TransactionOutput;
use Tatum\Cryptography\Transaction\TransactionOutputInterface;

class OutputMutator {
    /**
     * @var TransactionOutputInterface
     */
    private $output;

    /**
     * @param TransactionOutputInterface $output
     */
    public function __construct(TransactionOutputInterface $output) {
        $this->output = $output;
    }

    /**
     * @return TransactionOutputInterface
     */
    public function done(): TransactionOutputInterface {
        return $this->output;
    }

    /**
     * @param array $array
     * @return $this
     */
    private function replace(array $array) {
        $this->output = new TransactionOutput(
            array_key_exists("value", $array) ? $array["value"] : $this->output->getValue(),
            array_key_exists("script", $array) ? $array["script"] : $this->output->getScript()
        );

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function value(int $value) {
        return $this->replace(["value" => $value]);
    }

    /**
     * @param ScriptInterface $script
     * @return $this
     */
    public function script(ScriptInterface $script) {
        return $this->replace(["script" => $script]);
    }
}
