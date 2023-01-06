<?php

namespace Tatum\Cryptography\Transaction\SignatureHash\BitcoinCash;
!defined("TATUM-SDK") && exit();

class SigHash {
    /**
     * Default procedure: Sign ALL of the outputs.
     */
    const ALL = 1;

    /**
     * Sign NONE of the outputs, I don't care where the bitcoins go.
     */
    const NONE = 2;

    /**
     * Sign ONE of the outputs, I don't care where the others go.
     */
    const SINGLE = 3;

    /**
     * Let other people add inputs to this transaction paying X. I don't
     * care who else pays. (can be used with other sighash flags)
     */
    const ANYONECANPAY = 128;

    /**
     * Bitcoin Cash optional sighash flag
     */
    const BITCOINCASH = 0x40;
}
