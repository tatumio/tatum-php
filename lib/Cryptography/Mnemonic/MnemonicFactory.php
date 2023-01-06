<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Mnemonic;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Mnemonic\Bip39\Bip39Mnemonic;
use Tatum\Cryptography\Mnemonic\Bip39\Bip39WordListInterface;
use Tatum\Cryptography\Mnemonic\Electrum\ElectrumMnemonic;
use Tatum\Cryptography\Mnemonic\Electrum\ElectrumWordListInterface;

class MnemonicFactory {
    /**
     * @param ElectrumWordListInterface $wordList
     * @param EcAdapterInterface $ecAdapter
     * @return ElectrumMnemonic
     */
    public static function electrum(
        ElectrumWordListInterface $wordList = null,
        EcAdapterInterface $ecAdapter = null
    ): ElectrumMnemonic {
        return new ElectrumMnemonic(
            $ecAdapter ?: Bitcoin::getEcAdapter(),
            $wordList ?: new \Tatum\Cryptography\Mnemonic\Electrum\Wordlist\EnglishWordList()
        );
    }

    /**
     * @param \Tatum\Cryptography\Mnemonic\Bip39\Bip39WordListInterface $wordList
     * @param EcAdapterInterface $ecAdapter
     * @return Bip39Mnemonic
     */
    public static function bip39(
        Bip39WordListInterface $wordList = null,
        EcAdapterInterface $ecAdapter = null
    ): Bip39Mnemonic {
        return new Bip39Mnemonic(
            $ecAdapter ?: Bitcoin::getEcAdapter(),
            $wordList ?: new Bip39\Wordlist\EnglishWordList()
        );
    }
}
