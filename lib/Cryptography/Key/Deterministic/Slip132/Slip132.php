<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\Deterministic\Slip132;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Key\Deterministic\HdPrefix\ScriptPrefix;
use Tatum\Cryptography\Key\KeyToScript\ScriptDataFactory;
use Tatum\Cryptography\Key\KeyToScript\KeyToScriptHelper;

class Slip132 {
    /**
     * @var KeyToScriptHelper
     */
    private $helper;

    public function __construct(KeyToScriptHelper $helper = null) {
        $this->helper = $helper ?: new KeyToScriptHelper(Bitcoin::getEcAdapter());
    }

    /**
     * @param PrefixRegistry $registry
     * @param ScriptDataFactory $factory
     * @return ScriptPrefix
     * @throws \Tatum\Cryptography\Exceptions\InvalidNetworkParameter
     */
    private function loadPrefix(PrefixRegistry $registry, ScriptDataFactory $factory): ScriptPrefix {
        [$private, $public] = $registry->getPrefixes($factory->getScriptType());
        return new ScriptPrefix($factory, $private, $public);
    }

    /**
     * xpub on bitcoin
     * @param PrefixRegistry $registry
     * @return ScriptPrefix
     * @throws \Tatum\Cryptography\Exceptions\InvalidNetworkParameter
     */
    public function p2pkh(PrefixRegistry $registry): ScriptPrefix {
        return $this->loadPrefix($registry, $this->helper->getP2pkhFactory());
    }

    /**
     * ypub on bitcoin
     * @param PrefixRegistry $registry
     * @return ScriptPrefix
     * @throws \Tatum\Cryptography\Exceptions\DisallowedScriptDataFactoryException
     * @throws \Tatum\Cryptography\Exceptions\InvalidNetworkParameter
     */
    public function p2shP2wpkh(PrefixRegistry $registry): ScriptPrefix {
        return $this->loadPrefix($registry, $this->helper->getP2shFactory($this->helper->getP2wpkhFactory()));
    }

    /**
     * Ypub on bitcoin
     * @param int $m
     * @param int $n
     * @param bool $sortKeys
     * @param PrefixRegistry $registry
     * @return ScriptPrefix
     * @throws \Tatum\Cryptography\Exceptions\DisallowedScriptDataFactoryException
     * @throws \Tatum\Cryptography\Exceptions\InvalidNetworkParameter
     */
    public function p2shP2wshMultisig(int $m, int $n, bool $sortKeys, PrefixRegistry $registry): ScriptPrefix {
        return $this->loadPrefix(
            $registry,
            $this->helper->getP2shP2wshFactory($this->helper->getMultisigFactory($m, $n, $sortKeys))
        );
    }

    /**
     * zpub on bitcoin
     * @param PrefixRegistry $registry
     * @return ScriptPrefix
     * @throws \Tatum\Cryptography\Exceptions\InvalidNetworkParameter
     */
    public function p2wpkh(PrefixRegistry $registry): ScriptPrefix {
        return $this->loadPrefix($registry, $this->helper->getP2wpkhFactory());
    }

    /**
     * Zpub on bitcoin
     * @param int $m
     * @param int $n
     * @param bool $sortKeys
     * @param PrefixRegistry $registry
     * @return ScriptPrefix
     * @throws \Tatum\Cryptography\Exceptions\DisallowedScriptDataFactoryException
     * @throws \Tatum\Cryptography\Exceptions\InvalidNetworkParameter
     */
    public function p2wshMultisig(int $m, int $n, bool $sortKeys, PrefixRegistry $registry): ScriptPrefix {
        return $this->loadPrefix(
            $registry,
            $this->helper->getP2wshFactory($this->helper->getMultisigFactory($m, $n, $sortKeys))
        );
    }
}
