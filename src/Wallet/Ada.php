<?php

namespace Tatum\Wallet;

use BitWasp\Bitcoin\Key\Factory\HierarchicalKeyFactory;
use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;

class Ada
{
    /**
     * @param $mnemonic
     */
    private static function generateEntropyFromMnemonic($mnemonic): \BitWasp\Buffertools\BufferInterface
    {
        $bip39 = MnemonicFactory::bip39();
        return $bip39->mnemonicToEntropy($mnemonic);
    }

    public function generateAdaWallet(string $mnemonic) : array
    {
        $entropy = self::generateEntropyFromMnemonic($mnemonic);
        $xprv = hash_pbkdf2('sha512', '', $entropy->getHex(), 4096, 96);

        $xprv[0] &= 248;
        $xprv[31] &= 31;
        $xprv[31] |= 64;

    }
}