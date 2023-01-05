<?php

/**
 * VC Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;

/**
 * VC Model
 */
class VC extends AbstractModel {

    public const _D = null;
    public const TRC_TYPE_TRC10 = 'TRC10';
    public const TRC_TYPE_TRC20 = 'TRC20';
    public const BASE_PAIR_AED = 'AED';
    public const BASE_PAIR_AFN = 'AFN';
    public const BASE_PAIR_ALL = 'ALL';
    public const BASE_PAIR_AMD = 'AMD';
    public const BASE_PAIR_ANG = 'ANG';
    public const BASE_PAIR_AOA = 'AOA';
    public const BASE_PAIR_ARS = 'ARS';
    public const BASE_PAIR_AUD = 'AUD';
    public const BASE_PAIR_AWG = 'AWG';
    public const BASE_PAIR_AZN = 'AZN';
    public const BASE_PAIR_BAM = 'BAM';
    public const BASE_PAIR_BAT = 'BAT';
    public const BASE_PAIR_BBD = 'BBD';
    public const BASE_PAIR_BCH = 'BCH';
    public const BASE_PAIR_BDT = 'BDT';
    public const BASE_PAIR_BGN = 'BGN';
    public const BASE_PAIR_BHD = 'BHD';
    public const BASE_PAIR_BIF = 'BIF';
    public const BASE_PAIR_BMD = 'BMD';
    public const BASE_PAIR_BND = 'BND';
    public const BASE_PAIR_BOB = 'BOB';
    public const BASE_PAIR_BRL = 'BRL';
    public const BASE_PAIR_BSD = 'BSD';
    public const BASE_PAIR_BTC = 'BTC';
    public const BASE_PAIR_BTN = 'BTN';
    public const BASE_PAIR_BWP = 'BWP';
    public const BASE_PAIR_BYN = 'BYN';
    public const BASE_PAIR_BYR = 'BYR';
    public const BASE_PAIR_BZD = 'BZD';
    public const BASE_PAIR_CAD = 'CAD';
    public const BASE_PAIR_CDF = 'CDF';
    public const BASE_PAIR_CHF = 'CHF';
    public const BASE_PAIR_CLF = 'CLF';
    public const BASE_PAIR_CLP = 'CLP';
    public const BASE_PAIR_CNY = 'CNY';
    public const BASE_PAIR_COP = 'COP';
    public const BASE_PAIR_CRC = 'CRC';
    public const BASE_PAIR_CUC = 'CUC';
    public const BASE_PAIR_CUP = 'CUP';
    public const BASE_PAIR_CVE = 'CVE';
    public const BASE_PAIR_CZK = 'CZK';
    public const BASE_PAIR_DJF = 'DJF';
    public const BASE_PAIR_DKK = 'DKK';
    public const BASE_PAIR_DOP = 'DOP';
    public const BASE_PAIR_DOGE = 'DOGE';
    public const BASE_PAIR_DZD = 'DZD';
    public const BASE_PAIR_EGP = 'EGP';
    public const BASE_PAIR_ERN = 'ERN';
    public const BASE_PAIR_ETB = 'ETB';
    public const BASE_PAIR_ETH = 'ETH';
    public const BASE_PAIR_EUR = 'EUR';
    public const BASE_PAIR_FJD = 'FJD';
    public const BASE_PAIR_FKP = 'FKP';
    public const BASE_PAIR_FLOW = 'FLOW';
    public const BASE_PAIR_FUSD = 'FUSD';
    public const BASE_PAIR_FREE = 'FREE';
    public const BASE_PAIR_GMC = 'GMC';
    public const BASE_PAIR_GMC_BSC = 'GMC_BSC';
    public const BASE_PAIR_RMD = 'RMD';
    public const BASE_PAIR_GBP = 'GBP';
    public const BASE_PAIR_GEL = 'GEL';
    public const BASE_PAIR_GGP = 'GGP';
    public const BASE_PAIR_GHS = 'GHS';
    public const BASE_PAIR_GIP = 'GIP';
    public const BASE_PAIR_GMD = 'GMD';
    public const BASE_PAIR_GNF = 'GNF';
    public const BASE_PAIR_GTQ = 'GTQ';
    public const BASE_PAIR_GYD = 'GYD';
    public const BASE_PAIR_HKD = 'HKD';
    public const BASE_PAIR_HNL = 'HNL';
    public const BASE_PAIR_HRK = 'HRK';
    public const BASE_PAIR_HTG = 'HTG';
    public const BASE_PAIR_HUF = 'HUF';
    public const BASE_PAIR_IDR = 'IDR';
    public const BASE_PAIR_ILS = 'ILS';
    public const BASE_PAIR_IMP = 'IMP';
    public const BASE_PAIR_INR = 'INR';
    public const BASE_PAIR_IQD = 'IQD';
    public const BASE_PAIR_IRR = 'IRR';
    public const BASE_PAIR_ISK = 'ISK';
    public const BASE_PAIR_JEP = 'JEP';
    public const BASE_PAIR_JMD = 'JMD';
    public const BASE_PAIR_JOD = 'JOD';
    public const BASE_PAIR_JPY = 'JPY';
    public const BASE_PAIR_KES = 'KES';
    public const BASE_PAIR_KGS = 'KGS';
    public const BASE_PAIR_KHR = 'KHR';
    public const BASE_PAIR_KMF = 'KMF';
    public const BASE_PAIR_KPW = 'KPW';
    public const BASE_PAIR_KRW = 'KRW';
    public const BASE_PAIR_KWD = 'KWD';
    public const BASE_PAIR_KYD = 'KYD';
    public const BASE_PAIR_KZT = 'KZT';
    public const BASE_PAIR_LAK = 'LAK';
    public const BASE_PAIR_LBP = 'LBP';
    public const BASE_PAIR_LEO = 'LEO';
    public const BASE_PAIR_LINK = 'LINK';
    public const BASE_PAIR_LKR = 'LKR';
    public const BASE_PAIR_LRD = 'LRD';
    public const BASE_PAIR_LSL = 'LSL';
    public const BASE_PAIR_LTC = 'LTC';
    public const BASE_PAIR_LTL = 'LTL';
    public const BASE_PAIR_LVL = 'LVL';
    public const BASE_PAIR_LYD = 'LYD';
    public const BASE_PAIR_MAD = 'MAD';
    public const BASE_PAIR_MDL = 'MDL';
    public const BASE_PAIR_MGA = 'MGA';
    public const BASE_PAIR_MKD = 'MKD';
    public const BASE_PAIR_MKR = 'MKR';
    public const BASE_PAIR_MMK = 'MMK';
    public const BASE_PAIR_MMY = 'MMY';
    public const BASE_PAIR_MNT = 'MNT';
    public const BASE_PAIR_MOP = 'MOP';
    public const BASE_PAIR_MRO = 'MRO';
    public const BASE_PAIR_MUR = 'MUR';
    public const BASE_PAIR_MVR = 'MVR';
    public const BASE_PAIR_MWK = 'MWK';
    public const BASE_PAIR_MXN = 'MXN';
    public const BASE_PAIR_MYR = 'MYR';
    public const BASE_PAIR_MZN = 'MZN';
    public const BASE_PAIR_NAD = 'NAD';
    public const BASE_PAIR_NGN = 'NGN';
    public const BASE_PAIR_NIO = 'NIO';
    public const BASE_PAIR_NOK = 'NOK';
    public const BASE_PAIR_NPR = 'NPR';
    public const BASE_PAIR_NZD = 'NZD';
    public const BASE_PAIR_OMR = 'OMR';
    public const BASE_PAIR_PAB = 'PAB';
    public const BASE_PAIR_PAX = 'PAX';
    public const BASE_PAIR_PAXG = 'PAXG';
    public const BASE_PAIR_PEN = 'PEN';
    public const BASE_PAIR_PGK = 'PGK';
    public const BASE_PAIR_PHP = 'PHP';
    public const BASE_PAIR_PKR = 'PKR';
    public const BASE_PAIR_PLN = 'PLN';
    public const BASE_PAIR_PYG = 'PYG';
    public const BASE_PAIR_QAR = 'QAR';
    public const BASE_PAIR_RON = 'RON';
    public const BASE_PAIR_RSD = 'RSD';
    public const BASE_PAIR_RUB = 'RUB';
    public const BASE_PAIR_RWF = 'RWF';
    public const BASE_PAIR_SAR = 'SAR';
    public const BASE_PAIR_SBD = 'SBD';
    public const BASE_PAIR_SCR = 'SCR';
    public const BASE_PAIR_SDG = 'SDG';
    public const BASE_PAIR_SEK = 'SEK';
    public const BASE_PAIR_SGD = 'SGD';
    public const BASE_PAIR_SHP = 'SHP';
    public const BASE_PAIR_SLL = 'SLL';
    public const BASE_PAIR_SOS = 'SOS';
    public const BASE_PAIR_SRD = 'SRD';
    public const BASE_PAIR_STD = 'STD';
    public const BASE_PAIR_SVC = 'SVC';
    public const BASE_PAIR_SYP = 'SYP';
    public const BASE_PAIR_SZL = 'SZL';
    public const BASE_PAIR_THB = 'THB';
    public const BASE_PAIR_TJS = 'TJS';
    public const BASE_PAIR_TMT = 'TMT';
    public const BASE_PAIR_TND = 'TND';
    public const BASE_PAIR_TOP = 'TOP';
    public const BASE_PAIR__TRY = 'TRY';
    public const BASE_PAIR_TTD = 'TTD';
    public const BASE_PAIR_TRON = 'TRON';
    public const BASE_PAIR_TUSD = 'TUSD';
    public const BASE_PAIR_BUSD = 'BUSD';
    public const BASE_PAIR_TWD = 'TWD';
    public const BASE_PAIR_TZS = 'TZS';
    public const BASE_PAIR_UAH = 'UAH';
    public const BASE_PAIR_UGX = 'UGX';
    public const BASE_PAIR_UNI = 'UNI';
    public const BASE_PAIR_USD = 'USD';
    public const BASE_PAIR_USDC = 'USDC';
    public const BASE_PAIR_USDT = 'USDT';
    public const BASE_PAIR_USDT_TRON = 'USDT_TRON';
    public const BASE_PAIR_USDT_MATIC = 'USDT_MATIC';
    public const BASE_PAIR_UYU = 'UYU';
    public const BASE_PAIR_UZS = 'UZS';
    public const BASE_PAIR_VEF = 'VEF';
    public const BASE_PAIR_VND = 'VND';
    public const BASE_PAIR_VUV = 'VUV';
    public const BASE_PAIR_WST = 'WST';
    public const BASE_PAIR_XAF = 'XAF';
    public const BASE_PAIR_XAG = 'XAG';
    public const BASE_PAIR_XAU = 'XAU';
    public const BASE_PAIR_WBTC = 'WBTC';
    public const BASE_PAIR_XCD = 'XCD';
    public const BASE_PAIR_XCON = 'XCON';
    public const BASE_PAIR_XDR = 'XDR';
    public const BASE_PAIR_XLM = 'XLM';
    public const BASE_PAIR_XOF = 'XOF';
    public const BASE_PAIR_XPF = 'XPF';
    public const BASE_PAIR_XRP = 'XRP';
    public const BASE_PAIR_YER = 'YER';
    public const BASE_PAIR_ZAR = 'ZAR';
    public const BASE_PAIR_ZMK = 'ZMK';
    public const BASE_PAIR_ZMW = 'ZMW';
    public const BASE_PAIR_ZWL = 'ZWL';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_XRP = 'XRP';
    public const CHAIN_XLM = 'XLM';
    protected static $_name = "VC";
    protected static $_definition = [
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 1]], 
        "supply" => ["supply", "string", null, "getSupply", "setSupply", null, ["r" => 1]], 
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId", null, ["r" => 1]], 
        "base_rate" => ["baseRate", "float", null, "getBaseRate", "setBaseRate", 1, ["r" => 1]], 
        "precision" => ["precision", "float", null, "getPrecision", "setPrecision", null, ["r" => 0]], 
        "trc_type" => ["trcType", "string", null, "getTrcType", "setTrcType", null, ["r" => 0, "e" => 1]], 
        "base_pair" => ["basePair", "string", null, "getBasePair", "setBasePair", null, ["r" => 1, "e" => 1]], 
        "customer_id" => ["customerId", "string", null, "getCustomerId", "setCustomerId", null, ["r" => 0]], 
        "description" => ["description", "string", null, "getDescription", "setDescription", null, ["r" => 0]], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address", null, ["r" => 0]], 
        "issuer_account" => ["issuerAccount", "string", null, "getIssuerAccount", "setIssuerAccount", null, ["r" => 0]], 
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 0, "e" => 1]], 
        "initial_address" => ["initialAddress", "string", null, "getInitialAddress", "setInitialAddress", null, ["r" => 0]]
    ];

    /**
     * VC
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getTrcTypeAllowableValues(): array {
        return [
            self::TRC_TYPE_TRC10,
            self::TRC_TYPE_TRC20,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getBasePairAllowableValues(): array {
        return [
            self::BASE_PAIR_AED,
            self::BASE_PAIR_AFN,
            self::BASE_PAIR_ALL,
            self::BASE_PAIR_AMD,
            self::BASE_PAIR_ANG,
            self::BASE_PAIR_AOA,
            self::BASE_PAIR_ARS,
            self::BASE_PAIR_AUD,
            self::BASE_PAIR_AWG,
            self::BASE_PAIR_AZN,
            self::BASE_PAIR_BAM,
            self::BASE_PAIR_BAT,
            self::BASE_PAIR_BBD,
            self::BASE_PAIR_BCH,
            self::BASE_PAIR_BDT,
            self::BASE_PAIR_BGN,
            self::BASE_PAIR_BHD,
            self::BASE_PAIR_BIF,
            self::BASE_PAIR_BMD,
            self::BASE_PAIR_BND,
            self::BASE_PAIR_BOB,
            self::BASE_PAIR_BRL,
            self::BASE_PAIR_BSD,
            self::BASE_PAIR_BTC,
            self::BASE_PAIR_BTN,
            self::BASE_PAIR_BWP,
            self::BASE_PAIR_BYN,
            self::BASE_PAIR_BYR,
            self::BASE_PAIR_BZD,
            self::BASE_PAIR_CAD,
            self::BASE_PAIR_CDF,
            self::BASE_PAIR_CHF,
            self::BASE_PAIR_CLF,
            self::BASE_PAIR_CLP,
            self::BASE_PAIR_CNY,
            self::BASE_PAIR_COP,
            self::BASE_PAIR_CRC,
            self::BASE_PAIR_CUC,
            self::BASE_PAIR_CUP,
            self::BASE_PAIR_CVE,
            self::BASE_PAIR_CZK,
            self::BASE_PAIR_DJF,
            self::BASE_PAIR_DKK,
            self::BASE_PAIR_DOP,
            self::BASE_PAIR_DOGE,
            self::BASE_PAIR_DZD,
            self::BASE_PAIR_EGP,
            self::BASE_PAIR_ERN,
            self::BASE_PAIR_ETB,
            self::BASE_PAIR_ETH,
            self::BASE_PAIR_EUR,
            self::BASE_PAIR_FJD,
            self::BASE_PAIR_FKP,
            self::BASE_PAIR_FLOW,
            self::BASE_PAIR_FUSD,
            self::BASE_PAIR_FREE,
            self::BASE_PAIR_GMC,
            self::BASE_PAIR_GMC_BSC,
            self::BASE_PAIR_RMD,
            self::BASE_PAIR_GBP,
            self::BASE_PAIR_GEL,
            self::BASE_PAIR_GGP,
            self::BASE_PAIR_GHS,
            self::BASE_PAIR_GIP,
            self::BASE_PAIR_GMD,
            self::BASE_PAIR_GNF,
            self::BASE_PAIR_GTQ,
            self::BASE_PAIR_GYD,
            self::BASE_PAIR_HKD,
            self::BASE_PAIR_HNL,
            self::BASE_PAIR_HRK,
            self::BASE_PAIR_HTG,
            self::BASE_PAIR_HUF,
            self::BASE_PAIR_IDR,
            self::BASE_PAIR_ILS,
            self::BASE_PAIR_IMP,
            self::BASE_PAIR_INR,
            self::BASE_PAIR_IQD,
            self::BASE_PAIR_IRR,
            self::BASE_PAIR_ISK,
            self::BASE_PAIR_JEP,
            self::BASE_PAIR_JMD,
            self::BASE_PAIR_JOD,
            self::BASE_PAIR_JPY,
            self::BASE_PAIR_KES,
            self::BASE_PAIR_KGS,
            self::BASE_PAIR_KHR,
            self::BASE_PAIR_KMF,
            self::BASE_PAIR_KPW,
            self::BASE_PAIR_KRW,
            self::BASE_PAIR_KWD,
            self::BASE_PAIR_KYD,
            self::BASE_PAIR_KZT,
            self::BASE_PAIR_LAK,
            self::BASE_PAIR_LBP,
            self::BASE_PAIR_LEO,
            self::BASE_PAIR_LINK,
            self::BASE_PAIR_LKR,
            self::BASE_PAIR_LRD,
            self::BASE_PAIR_LSL,
            self::BASE_PAIR_LTC,
            self::BASE_PAIR_LTL,
            self::BASE_PAIR_LVL,
            self::BASE_PAIR_LYD,
            self::BASE_PAIR_MAD,
            self::BASE_PAIR_MDL,
            self::BASE_PAIR_MGA,
            self::BASE_PAIR_MKD,
            self::BASE_PAIR_MKR,
            self::BASE_PAIR_MMK,
            self::BASE_PAIR_MMY,
            self::BASE_PAIR_MNT,
            self::BASE_PAIR_MOP,
            self::BASE_PAIR_MRO,
            self::BASE_PAIR_MUR,
            self::BASE_PAIR_MVR,
            self::BASE_PAIR_MWK,
            self::BASE_PAIR_MXN,
            self::BASE_PAIR_MYR,
            self::BASE_PAIR_MZN,
            self::BASE_PAIR_NAD,
            self::BASE_PAIR_NGN,
            self::BASE_PAIR_NIO,
            self::BASE_PAIR_NOK,
            self::BASE_PAIR_NPR,
            self::BASE_PAIR_NZD,
            self::BASE_PAIR_OMR,
            self::BASE_PAIR_PAB,
            self::BASE_PAIR_PAX,
            self::BASE_PAIR_PAXG,
            self::BASE_PAIR_PEN,
            self::BASE_PAIR_PGK,
            self::BASE_PAIR_PHP,
            self::BASE_PAIR_PKR,
            self::BASE_PAIR_PLN,
            self::BASE_PAIR_PYG,
            self::BASE_PAIR_QAR,
            self::BASE_PAIR_RON,
            self::BASE_PAIR_RSD,
            self::BASE_PAIR_RUB,
            self::BASE_PAIR_RWF,
            self::BASE_PAIR_SAR,
            self::BASE_PAIR_SBD,
            self::BASE_PAIR_SCR,
            self::BASE_PAIR_SDG,
            self::BASE_PAIR_SEK,
            self::BASE_PAIR_SGD,
            self::BASE_PAIR_SHP,
            self::BASE_PAIR_SLL,
            self::BASE_PAIR_SOS,
            self::BASE_PAIR_SRD,
            self::BASE_PAIR_STD,
            self::BASE_PAIR_SVC,
            self::BASE_PAIR_SYP,
            self::BASE_PAIR_SZL,
            self::BASE_PAIR_THB,
            self::BASE_PAIR_TJS,
            self::BASE_PAIR_TMT,
            self::BASE_PAIR_TND,
            self::BASE_PAIR_TOP,
            self::BASE_PAIR__TRY,
            self::BASE_PAIR_TTD,
            self::BASE_PAIR_TRON,
            self::BASE_PAIR_TUSD,
            self::BASE_PAIR_BUSD,
            self::BASE_PAIR_TWD,
            self::BASE_PAIR_TZS,
            self::BASE_PAIR_UAH,
            self::BASE_PAIR_UGX,
            self::BASE_PAIR_UNI,
            self::BASE_PAIR_USD,
            self::BASE_PAIR_USDC,
            self::BASE_PAIR_USDT,
            self::BASE_PAIR_USDT_TRON,
            self::BASE_PAIR_USDT_MATIC,
            self::BASE_PAIR_UYU,
            self::BASE_PAIR_UZS,
            self::BASE_PAIR_VEF,
            self::BASE_PAIR_VND,
            self::BASE_PAIR_VUV,
            self::BASE_PAIR_WST,
            self::BASE_PAIR_XAF,
            self::BASE_PAIR_XAG,
            self::BASE_PAIR_XAU,
            self::BASE_PAIR_WBTC,
            self::BASE_PAIR_XCD,
            self::BASE_PAIR_XCON,
            self::BASE_PAIR_XDR,
            self::BASE_PAIR_XLM,
            self::BASE_PAIR_XOF,
            self::BASE_PAIR_XPF,
            self::BASE_PAIR_XRP,
            self::BASE_PAIR_YER,
            self::BASE_PAIR_ZAR,
            self::BASE_PAIR_ZMK,
            self::BASE_PAIR_ZMW,
            self::BASE_PAIR_ZWL,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ETH,
            self::CHAIN_XRP,
            self::CHAIN_XLM,
        ];
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name Virtual currency name. Must be prefixed with 'VC_'.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setName(string $name) {
        return $this->_set("name", $name);
    }

    /**
     * Get supply
     *
     * @return string
     */
    public function getSupply(): string {
        return $this->_data["supply"];
    }

    /**
     * Set supply
     * 
     * @param string $supply Supply of virtual currency.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSupply(string $supply) {
        return $this->_set("supply", $supply);
    }

    /**
     * Get account_id
     *
     * @return string
     */
    public function getAccountId(): string {
        return $this->_data["account_id"];
    }

    /**
     * Set account_id
     * 
     * @param string $account_id Virtual currency account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountId(string $account_id) {
        return $this->_set("account_id", $account_id);
    }

    /**
     * Get base_rate
     *
     * @return float
     */
    public function getBaseRate(): float {
        return $this->_data["base_rate"];
    }

    /**
     * Set base_rate
     * 
     * @param float $base_rate Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBaseRate(float $base_rate) {
        return $this->_set("base_rate", $base_rate);
    }

    /**
     * Get precision
     *
     * @return float|null
     */
    public function getPrecision(): ?float {
        return $this->_data["precision"];
    }

    /**
     * Set precision
     * 
     * @param float|null $precision Number of decimal places of this virtual currency.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrecision(?float $precision) {
        return $this->_set("precision", $precision);
    }

    /**
     * Get trc_type
     *
     * @return string|null
     */
    public function getTrcType(): ?string {
        return $this->_data["trc_type"];
    }

    /**
     * Set trc_type
     * 
     * @param string|null $trc_type Type of Tron token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTrcType(?string $trc_type) {
        return $this->_set("trc_type", $trc_type);
    }

    /**
     * Get base_pair
     *
     * @return string
     */
    public function getBasePair(): string {
        return $this->_data["base_pair"];
    }

    /**
     * Set base_pair
     * 
     * @param string $base_pair Base pair for virtual currency. Transaction value will be calculated according to this base pair. e.g. 1 VC_VIRTUAL is equal to 1 BTC, if basePair is set to BTC.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBasePair(string $base_pair) {
        return $this->_set("base_pair", $base_pair);
    }

    /**
     * Get customer_id
     *
     * @return string|null
     */
    public function getCustomerId(): ?string {
        return $this->_data["customer_id"];
    }

    /**
     * Set customer_id
     * 
     * @param string|null $customer_id ID of customer associated with virtual currency.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustomerId(?string $customer_id) {
        return $this->_set("customer_id", $customer_id);
    }

    /**
     * Get description
     *
     * @return string|null
     */
    public function getDescription(): ?string {
        return $this->_data["description"];
    }

    /**
     * Set description
     * 
     * @param string|null $description Used as a description within Tatum system.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDescription(?string $description) {
        return $this->_set("description", $description);
    }

    /**
     * Get erc20_address
     *
     * @return string|null
     */
    public function getErc20Address(): ?string {
        return $this->_data["erc20_address"];
    }

    /**
     * Set erc20_address
     * 
     * @param string|null $erc20_address Address of ERC20 token, when virtual currency is based on the Ethereum blockchain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        return $this->_set("erc20_address", $erc20_address);
    }

    /**
     * Get issuer_account
     *
     * @return string|null
     */
    public function getIssuerAccount(): ?string {
        return $this->_data["issuer_account"];
    }

    /**
     * Set issuer_account
     * 
     * @param string|null $issuer_account Blockchain account for XLM or XRP based virtual currencies, which is marked as the issuer of the custom blockchain asset.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIssuerAccount(?string $issuer_account) {
        return $this->_set("issuer_account", $issuer_account);
    }

    /**
     * Get chain
     *
     * @return string|null
     */
    public function getChain(): ?string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string|null $chain Blockchain, on which this virtual currency is paired on. Not present, when Tatum's private ledger is used as a base ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(?string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get initial_address
     *
     * @return string|null
     */
    public function getInitialAddress(): ?string {
        return $this->_data["initial_address"];
    }

    /**
     * Set initial_address
     * 
     * @param string|null $initial_address Ethereum address, where initial supply was minted, when virtual currency is based on the Ethereum blockchain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInitialAddress(?string $initial_address) {
        return $this->_set("initial_address", $initial_address);
    }
}
