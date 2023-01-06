<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Network\Slip132;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Key\Deterministic\Slip132\PrefixRegistry;
use Tatum\Cryptography\Script\ScriptType;

class BitcoinTestnetRegistry extends PrefixRegistry {
    public function __construct() {
        $map = [];
        foreach (
            [
                // private, public
                [["04358394", "043587cf"], /* xpub */ [ScriptType::P2PKH]],
                [["04358394", "043587cf"], /* xpub */ [ScriptType::P2SH, ScriptType::P2PKH]],
                [["044a4e28", "044a5262"], /* ypub */ [ScriptType::P2SH, ScriptType::P2WKH]],
                [["045f18bc", "045f1cf6"], /* zpub */ [ScriptType::P2WKH]],
                [["02575048", "02575483"], /* Zpub */ [ScriptType::P2WSH, ScriptType::P2PKH]]
            ]
            as $row
        ) {
            [$prefixList, $scriptType] = $row;
            $type = implode("|", $scriptType);
            $map[$type] = $prefixList;
        }

        parent::__construct($map);
    }
}
