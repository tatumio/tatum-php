<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Script\Classifier;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Script\ScriptType;

class OutputData {
    /**
     * @var string
     */
    private $type;

    /**
     * @var ScriptInterface
     */
    private $script;

    /**
     * @var mixed
     */
    private $solution;

    /**
     * OutputData constructor.
     * @param string $type
     * @param ScriptInterface $script
     * @param mixed $solution
     */
    public function __construct(string $type, ScriptInterface $script, $solution) {
        $this->type = $type;
        $this->script = $script;
        $this->solution = $solution;
    }

    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * @return ScriptInterface
     */
    public function getScript(): ScriptInterface {
        return $this->script;
    }

    /**
     * @return mixed
     */
    public function getSolution() {
        return $this->solution;
    }

    /**
     * @return bool
     */
    public function canSign(): bool {
        return in_array($this->type, [ScriptType::MULTISIG, ScriptType::P2PK, ScriptType::P2PKH]);
    }
}
