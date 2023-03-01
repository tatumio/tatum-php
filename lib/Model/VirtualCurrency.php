<?php

/**
 * VirtualCurrency Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * VirtualCurrency Model
 */
class VirtualCurrency extends AbstractModel {

    public const _D = null;
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
    public const BASE_PAIR_WBTC = 'WBTC';
    public const BASE_PAIR_WST = 'WST';
    public const BASE_PAIR_XAF = 'XAF';
    public const BASE_PAIR_XAG = 'XAG';
    public const BASE_PAIR_XAU = 'XAU';
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
    public const ACCOUNTING_CURRENCY_AED = 'AED';
    public const ACCOUNTING_CURRENCY_AFN = 'AFN';
    public const ACCOUNTING_CURRENCY_ALL = 'ALL';
    public const ACCOUNTING_CURRENCY_AMD = 'AMD';
    public const ACCOUNTING_CURRENCY_ANG = 'ANG';
    public const ACCOUNTING_CURRENCY_AOA = 'AOA';
    public const ACCOUNTING_CURRENCY_ARS = 'ARS';
    public const ACCOUNTING_CURRENCY_AUD = 'AUD';
    public const ACCOUNTING_CURRENCY_AWG = 'AWG';
    public const ACCOUNTING_CURRENCY_AZN = 'AZN';
    public const ACCOUNTING_CURRENCY_BAM = 'BAM';
    public const ACCOUNTING_CURRENCY_BBD = 'BBD';
    public const ACCOUNTING_CURRENCY_BDT = 'BDT';
    public const ACCOUNTING_CURRENCY_BGN = 'BGN';
    public const ACCOUNTING_CURRENCY_BHD = 'BHD';
    public const ACCOUNTING_CURRENCY_BIF = 'BIF';
    public const ACCOUNTING_CURRENCY_BMD = 'BMD';
    public const ACCOUNTING_CURRENCY_BND = 'BND';
    public const ACCOUNTING_CURRENCY_BOB = 'BOB';
    public const ACCOUNTING_CURRENCY_BRL = 'BRL';
    public const ACCOUNTING_CURRENCY_BSD = 'BSD';
    public const ACCOUNTING_CURRENCY_BTN = 'BTN';
    public const ACCOUNTING_CURRENCY_BWP = 'BWP';
    public const ACCOUNTING_CURRENCY_BYN = 'BYN';
    public const ACCOUNTING_CURRENCY_BYR = 'BYR';
    public const ACCOUNTING_CURRENCY_BZD = 'BZD';
    public const ACCOUNTING_CURRENCY_CAD = 'CAD';
    public const ACCOUNTING_CURRENCY_CDF = 'CDF';
    public const ACCOUNTING_CURRENCY_CHF = 'CHF';
    public const ACCOUNTING_CURRENCY_CLF = 'CLF';
    public const ACCOUNTING_CURRENCY_CLP = 'CLP';
    public const ACCOUNTING_CURRENCY_CNY = 'CNY';
    public const ACCOUNTING_CURRENCY_COP = 'COP';
    public const ACCOUNTING_CURRENCY_CRC = 'CRC';
    public const ACCOUNTING_CURRENCY_CUC = 'CUC';
    public const ACCOUNTING_CURRENCY_CUP = 'CUP';
    public const ACCOUNTING_CURRENCY_CVE = 'CVE';
    public const ACCOUNTING_CURRENCY_CZK = 'CZK';
    public const ACCOUNTING_CURRENCY_DJF = 'DJF';
    public const ACCOUNTING_CURRENCY_DKK = 'DKK';
    public const ACCOUNTING_CURRENCY_DOP = 'DOP';
    public const ACCOUNTING_CURRENCY_DOGE = 'DOGE';
    public const ACCOUNTING_CURRENCY_DZD = 'DZD';
    public const ACCOUNTING_CURRENCY_EGP = 'EGP';
    public const ACCOUNTING_CURRENCY_ERN = 'ERN';
    public const ACCOUNTING_CURRENCY_ETB = 'ETB';
    public const ACCOUNTING_CURRENCY_EUR = 'EUR';
    public const ACCOUNTING_CURRENCY_FJD = 'FJD';
    public const ACCOUNTING_CURRENCY_FKP = 'FKP';
    public const ACCOUNTING_CURRENCY_FLOW = 'FLOW';
    public const ACCOUNTING_CURRENCY_FUSD = 'FUSD';
    public const ACCOUNTING_CURRENCY_GBP = 'GBP';
    public const ACCOUNTING_CURRENCY_GEL = 'GEL';
    public const ACCOUNTING_CURRENCY_GGP = 'GGP';
    public const ACCOUNTING_CURRENCY_GHS = 'GHS';
    public const ACCOUNTING_CURRENCY_GIP = 'GIP';
    public const ACCOUNTING_CURRENCY_GMD = 'GMD';
    public const ACCOUNTING_CURRENCY_GNF = 'GNF';
    public const ACCOUNTING_CURRENCY_GTQ = 'GTQ';
    public const ACCOUNTING_CURRENCY_GYD = 'GYD';
    public const ACCOUNTING_CURRENCY_HKD = 'HKD';
    public const ACCOUNTING_CURRENCY_HNL = 'HNL';
    public const ACCOUNTING_CURRENCY_HRK = 'HRK';
    public const ACCOUNTING_CURRENCY_HTG = 'HTG';
    public const ACCOUNTING_CURRENCY_HUF = 'HUF';
    public const ACCOUNTING_CURRENCY_IDR = 'IDR';
    public const ACCOUNTING_CURRENCY_ILS = 'ILS';
    public const ACCOUNTING_CURRENCY_IMP = 'IMP';
    public const ACCOUNTING_CURRENCY_INR = 'INR';
    public const ACCOUNTING_CURRENCY_IQD = 'IQD';
    public const ACCOUNTING_CURRENCY_IRR = 'IRR';
    public const ACCOUNTING_CURRENCY_ISK = 'ISK';
    public const ACCOUNTING_CURRENCY_JEP = 'JEP';
    public const ACCOUNTING_CURRENCY_JMD = 'JMD';
    public const ACCOUNTING_CURRENCY_JOD = 'JOD';
    public const ACCOUNTING_CURRENCY_JPY = 'JPY';
    public const ACCOUNTING_CURRENCY_KES = 'KES';
    public const ACCOUNTING_CURRENCY_KGS = 'KGS';
    public const ACCOUNTING_CURRENCY_KHR = 'KHR';
    public const ACCOUNTING_CURRENCY_KMF = 'KMF';
    public const ACCOUNTING_CURRENCY_KPW = 'KPW';
    public const ACCOUNTING_CURRENCY_KRW = 'KRW';
    public const ACCOUNTING_CURRENCY_KWD = 'KWD';
    public const ACCOUNTING_CURRENCY_KYD = 'KYD';
    public const ACCOUNTING_CURRENCY_KZT = 'KZT';
    public const ACCOUNTING_CURRENCY_LAK = 'LAK';
    public const ACCOUNTING_CURRENCY_LBP = 'LBP';
    public const ACCOUNTING_CURRENCY_LKR = 'LKR';
    public const ACCOUNTING_CURRENCY_LRD = 'LRD';
    public const ACCOUNTING_CURRENCY_LSL = 'LSL';
    public const ACCOUNTING_CURRENCY_LTL = 'LTL';
    public const ACCOUNTING_CURRENCY_LVL = 'LVL';
    public const ACCOUNTING_CURRENCY_LYD = 'LYD';
    public const ACCOUNTING_CURRENCY_MAD = 'MAD';
    public const ACCOUNTING_CURRENCY_MDL = 'MDL';
    public const ACCOUNTING_CURRENCY_MGA = 'MGA';
    public const ACCOUNTING_CURRENCY_MKD = 'MKD';
    public const ACCOUNTING_CURRENCY_MMK = 'MMK';
    public const ACCOUNTING_CURRENCY_MNT = 'MNT';
    public const ACCOUNTING_CURRENCY_MOP = 'MOP';
    public const ACCOUNTING_CURRENCY_MRO = 'MRO';
    public const ACCOUNTING_CURRENCY_MUR = 'MUR';
    public const ACCOUNTING_CURRENCY_MVR = 'MVR';
    public const ACCOUNTING_CURRENCY_MWK = 'MWK';
    public const ACCOUNTING_CURRENCY_MXN = 'MXN';
    public const ACCOUNTING_CURRENCY_MYR = 'MYR';
    public const ACCOUNTING_CURRENCY_MZN = 'MZN';
    public const ACCOUNTING_CURRENCY_NAD = 'NAD';
    public const ACCOUNTING_CURRENCY_NGN = 'NGN';
    public const ACCOUNTING_CURRENCY_NIO = 'NIO';
    public const ACCOUNTING_CURRENCY_NOK = 'NOK';
    public const ACCOUNTING_CURRENCY_NPR = 'NPR';
    public const ACCOUNTING_CURRENCY_NZD = 'NZD';
    public const ACCOUNTING_CURRENCY_OMR = 'OMR';
    public const ACCOUNTING_CURRENCY_PAB = 'PAB';
    public const ACCOUNTING_CURRENCY_PEN = 'PEN';
    public const ACCOUNTING_CURRENCY_PGK = 'PGK';
    public const ACCOUNTING_CURRENCY_PHP = 'PHP';
    public const ACCOUNTING_CURRENCY_PKR = 'PKR';
    public const ACCOUNTING_CURRENCY_PLN = 'PLN';
    public const ACCOUNTING_CURRENCY_PYG = 'PYG';
    public const ACCOUNTING_CURRENCY_QAR = 'QAR';
    public const ACCOUNTING_CURRENCY_RON = 'RON';
    public const ACCOUNTING_CURRENCY_RSD = 'RSD';
    public const ACCOUNTING_CURRENCY_RUB = 'RUB';
    public const ACCOUNTING_CURRENCY_RWF = 'RWF';
    public const ACCOUNTING_CURRENCY_SAR = 'SAR';
    public const ACCOUNTING_CURRENCY_SBD = 'SBD';
    public const ACCOUNTING_CURRENCY_SCR = 'SCR';
    public const ACCOUNTING_CURRENCY_SDG = 'SDG';
    public const ACCOUNTING_CURRENCY_SEK = 'SEK';
    public const ACCOUNTING_CURRENCY_SGD = 'SGD';
    public const ACCOUNTING_CURRENCY_SHP = 'SHP';
    public const ACCOUNTING_CURRENCY_SLL = 'SLL';
    public const ACCOUNTING_CURRENCY_SOS = 'SOS';
    public const ACCOUNTING_CURRENCY_SRD = 'SRD';
    public const ACCOUNTING_CURRENCY_STD = 'STD';
    public const ACCOUNTING_CURRENCY_SVC = 'SVC';
    public const ACCOUNTING_CURRENCY_SYP = 'SYP';
    public const ACCOUNTING_CURRENCY_SZL = 'SZL';
    public const ACCOUNTING_CURRENCY_THB = 'THB';
    public const ACCOUNTING_CURRENCY_TJS = 'TJS';
    public const ACCOUNTING_CURRENCY_TMT = 'TMT';
    public const ACCOUNTING_CURRENCY_TND = 'TND';
    public const ACCOUNTING_CURRENCY_TOP = 'TOP';
    public const ACCOUNTING_CURRENCY__TRY = 'TRY';
    public const ACCOUNTING_CURRENCY_TTD = 'TTD';
    public const ACCOUNTING_CURRENCY_TWD = 'TWD';
    public const ACCOUNTING_CURRENCY_TZS = 'TZS';
    public const ACCOUNTING_CURRENCY_UAH = 'UAH';
    public const ACCOUNTING_CURRENCY_UGX = 'UGX';
    public const ACCOUNTING_CURRENCY_USD = 'USD';
    public const ACCOUNTING_CURRENCY_UYU = 'UYU';
    public const ACCOUNTING_CURRENCY_UZS = 'UZS';
    public const ACCOUNTING_CURRENCY_VEF = 'VEF';
    public const ACCOUNTING_CURRENCY_VND = 'VND';
    public const ACCOUNTING_CURRENCY_VUV = 'VUV';
    public const ACCOUNTING_CURRENCY_WST = 'WST';
    public const ACCOUNTING_CURRENCY_XAF = 'XAF';
    public const ACCOUNTING_CURRENCY_XAG = 'XAG';
    public const ACCOUNTING_CURRENCY_XAU = 'XAU';
    public const ACCOUNTING_CURRENCY_XCD = 'XCD';
    public const ACCOUNTING_CURRENCY_XDR = 'XDR';
    public const ACCOUNTING_CURRENCY_XOF = 'XOF';
    public const ACCOUNTING_CURRENCY_XPF = 'XPF';
    public const ACCOUNTING_CURRENCY_YER = 'YER';
    public const ACCOUNTING_CURRENCY_ZAR = 'ZAR';
    public const ACCOUNTING_CURRENCY_ZMK = 'ZMK';
    public const ACCOUNTING_CURRENCY_ZMW = 'ZMW';
    public const ACCOUNTING_CURRENCY_ZWL = 'ZWL';
    protected static $_name = "VirtualCurrency";
    protected static $_definition = [
        "name" => ["name", "string", null, "getName", "setName", null, ["r" => 1, "p" => "/^[a-zA-Z0-9_]+$/", "nl" => 1, "xl" => 30]], 
        "supply" => ["supply", "string", null, "getSupply", "setSupply", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "nl" => 1, "xl" => 38]], 
        "base_pair" => ["basePair", "string", null, "getBasePair", "setBasePair", null, ["r" => 1, "e" => 1, "nl" => 3, "xl" => 50]], 
        "base_rate" => ["baseRate", "float", null, "getBaseRate", "setBaseRate", 1, ["r" => 0, "n" => [0]]], 
        "customer" => ["customer", "\Tatum\Model\CustomerRegistration", null, "getCustomer", "setCustomer", null, ["r" => 0]], 
        "description" => ["description", "string", null, "getDescription", "setDescription", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "account_code" => ["accountCode", "string", null, "getAccountCode", "setAccountCode", null, ["r" => 0, "nl" => 1, "xl" => 50]], 
        "account_number" => ["accountNumber", "string", null, "getAccountNumber", "setAccountNumber", null, ["r" => 0, "nl" => 1, "xl" => 50]], 
        "accounting_currency" => ["accountingCurrency", "string", null, "getAccountingCurrency", "setAccountingCurrency", null, ["r" => 0, "e" => 1, "nl" => 3, "xl" => 3]]
    ];

    /**
     * VirtualCurrency
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
    public function getBasePairAllowableValues(): ?array {
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
            self::BASE_PAIR_WBTC,
            self::BASE_PAIR_WST,
            self::BASE_PAIR_XAF,
            self::BASE_PAIR_XAG,
            self::BASE_PAIR_XAU,
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
    public function getAccountingCurrencyAllowableValues(): ?array {
        return [
            self::ACCOUNTING_CURRENCY_AED,
            self::ACCOUNTING_CURRENCY_AFN,
            self::ACCOUNTING_CURRENCY_ALL,
            self::ACCOUNTING_CURRENCY_AMD,
            self::ACCOUNTING_CURRENCY_ANG,
            self::ACCOUNTING_CURRENCY_AOA,
            self::ACCOUNTING_CURRENCY_ARS,
            self::ACCOUNTING_CURRENCY_AUD,
            self::ACCOUNTING_CURRENCY_AWG,
            self::ACCOUNTING_CURRENCY_AZN,
            self::ACCOUNTING_CURRENCY_BAM,
            self::ACCOUNTING_CURRENCY_BBD,
            self::ACCOUNTING_CURRENCY_BDT,
            self::ACCOUNTING_CURRENCY_BGN,
            self::ACCOUNTING_CURRENCY_BHD,
            self::ACCOUNTING_CURRENCY_BIF,
            self::ACCOUNTING_CURRENCY_BMD,
            self::ACCOUNTING_CURRENCY_BND,
            self::ACCOUNTING_CURRENCY_BOB,
            self::ACCOUNTING_CURRENCY_BRL,
            self::ACCOUNTING_CURRENCY_BSD,
            self::ACCOUNTING_CURRENCY_BTN,
            self::ACCOUNTING_CURRENCY_BWP,
            self::ACCOUNTING_CURRENCY_BYN,
            self::ACCOUNTING_CURRENCY_BYR,
            self::ACCOUNTING_CURRENCY_BZD,
            self::ACCOUNTING_CURRENCY_CAD,
            self::ACCOUNTING_CURRENCY_CDF,
            self::ACCOUNTING_CURRENCY_CHF,
            self::ACCOUNTING_CURRENCY_CLF,
            self::ACCOUNTING_CURRENCY_CLP,
            self::ACCOUNTING_CURRENCY_CNY,
            self::ACCOUNTING_CURRENCY_COP,
            self::ACCOUNTING_CURRENCY_CRC,
            self::ACCOUNTING_CURRENCY_CUC,
            self::ACCOUNTING_CURRENCY_CUP,
            self::ACCOUNTING_CURRENCY_CVE,
            self::ACCOUNTING_CURRENCY_CZK,
            self::ACCOUNTING_CURRENCY_DJF,
            self::ACCOUNTING_CURRENCY_DKK,
            self::ACCOUNTING_CURRENCY_DOP,
            self::ACCOUNTING_CURRENCY_DOGE,
            self::ACCOUNTING_CURRENCY_DZD,
            self::ACCOUNTING_CURRENCY_EGP,
            self::ACCOUNTING_CURRENCY_ERN,
            self::ACCOUNTING_CURRENCY_ETB,
            self::ACCOUNTING_CURRENCY_EUR,
            self::ACCOUNTING_CURRENCY_FJD,
            self::ACCOUNTING_CURRENCY_FKP,
            self::ACCOUNTING_CURRENCY_FLOW,
            self::ACCOUNTING_CURRENCY_FUSD,
            self::ACCOUNTING_CURRENCY_GBP,
            self::ACCOUNTING_CURRENCY_GEL,
            self::ACCOUNTING_CURRENCY_GGP,
            self::ACCOUNTING_CURRENCY_GHS,
            self::ACCOUNTING_CURRENCY_GIP,
            self::ACCOUNTING_CURRENCY_GMD,
            self::ACCOUNTING_CURRENCY_GNF,
            self::ACCOUNTING_CURRENCY_GTQ,
            self::ACCOUNTING_CURRENCY_GYD,
            self::ACCOUNTING_CURRENCY_HKD,
            self::ACCOUNTING_CURRENCY_HNL,
            self::ACCOUNTING_CURRENCY_HRK,
            self::ACCOUNTING_CURRENCY_HTG,
            self::ACCOUNTING_CURRENCY_HUF,
            self::ACCOUNTING_CURRENCY_IDR,
            self::ACCOUNTING_CURRENCY_ILS,
            self::ACCOUNTING_CURRENCY_IMP,
            self::ACCOUNTING_CURRENCY_INR,
            self::ACCOUNTING_CURRENCY_IQD,
            self::ACCOUNTING_CURRENCY_IRR,
            self::ACCOUNTING_CURRENCY_ISK,
            self::ACCOUNTING_CURRENCY_JEP,
            self::ACCOUNTING_CURRENCY_JMD,
            self::ACCOUNTING_CURRENCY_JOD,
            self::ACCOUNTING_CURRENCY_JPY,
            self::ACCOUNTING_CURRENCY_KES,
            self::ACCOUNTING_CURRENCY_KGS,
            self::ACCOUNTING_CURRENCY_KHR,
            self::ACCOUNTING_CURRENCY_KMF,
            self::ACCOUNTING_CURRENCY_KPW,
            self::ACCOUNTING_CURRENCY_KRW,
            self::ACCOUNTING_CURRENCY_KWD,
            self::ACCOUNTING_CURRENCY_KYD,
            self::ACCOUNTING_CURRENCY_KZT,
            self::ACCOUNTING_CURRENCY_LAK,
            self::ACCOUNTING_CURRENCY_LBP,
            self::ACCOUNTING_CURRENCY_LKR,
            self::ACCOUNTING_CURRENCY_LRD,
            self::ACCOUNTING_CURRENCY_LSL,
            self::ACCOUNTING_CURRENCY_LTL,
            self::ACCOUNTING_CURRENCY_LVL,
            self::ACCOUNTING_CURRENCY_LYD,
            self::ACCOUNTING_CURRENCY_MAD,
            self::ACCOUNTING_CURRENCY_MDL,
            self::ACCOUNTING_CURRENCY_MGA,
            self::ACCOUNTING_CURRENCY_MKD,
            self::ACCOUNTING_CURRENCY_MMK,
            self::ACCOUNTING_CURRENCY_MNT,
            self::ACCOUNTING_CURRENCY_MOP,
            self::ACCOUNTING_CURRENCY_MRO,
            self::ACCOUNTING_CURRENCY_MUR,
            self::ACCOUNTING_CURRENCY_MVR,
            self::ACCOUNTING_CURRENCY_MWK,
            self::ACCOUNTING_CURRENCY_MXN,
            self::ACCOUNTING_CURRENCY_MYR,
            self::ACCOUNTING_CURRENCY_MZN,
            self::ACCOUNTING_CURRENCY_NAD,
            self::ACCOUNTING_CURRENCY_NGN,
            self::ACCOUNTING_CURRENCY_NIO,
            self::ACCOUNTING_CURRENCY_NOK,
            self::ACCOUNTING_CURRENCY_NPR,
            self::ACCOUNTING_CURRENCY_NZD,
            self::ACCOUNTING_CURRENCY_OMR,
            self::ACCOUNTING_CURRENCY_PAB,
            self::ACCOUNTING_CURRENCY_PEN,
            self::ACCOUNTING_CURRENCY_PGK,
            self::ACCOUNTING_CURRENCY_PHP,
            self::ACCOUNTING_CURRENCY_PKR,
            self::ACCOUNTING_CURRENCY_PLN,
            self::ACCOUNTING_CURRENCY_PYG,
            self::ACCOUNTING_CURRENCY_QAR,
            self::ACCOUNTING_CURRENCY_RON,
            self::ACCOUNTING_CURRENCY_RSD,
            self::ACCOUNTING_CURRENCY_RUB,
            self::ACCOUNTING_CURRENCY_RWF,
            self::ACCOUNTING_CURRENCY_SAR,
            self::ACCOUNTING_CURRENCY_SBD,
            self::ACCOUNTING_CURRENCY_SCR,
            self::ACCOUNTING_CURRENCY_SDG,
            self::ACCOUNTING_CURRENCY_SEK,
            self::ACCOUNTING_CURRENCY_SGD,
            self::ACCOUNTING_CURRENCY_SHP,
            self::ACCOUNTING_CURRENCY_SLL,
            self::ACCOUNTING_CURRENCY_SOS,
            self::ACCOUNTING_CURRENCY_SRD,
            self::ACCOUNTING_CURRENCY_STD,
            self::ACCOUNTING_CURRENCY_SVC,
            self::ACCOUNTING_CURRENCY_SYP,
            self::ACCOUNTING_CURRENCY_SZL,
            self::ACCOUNTING_CURRENCY_THB,
            self::ACCOUNTING_CURRENCY_TJS,
            self::ACCOUNTING_CURRENCY_TMT,
            self::ACCOUNTING_CURRENCY_TND,
            self::ACCOUNTING_CURRENCY_TOP,
            self::ACCOUNTING_CURRENCY__TRY,
            self::ACCOUNTING_CURRENCY_TTD,
            self::ACCOUNTING_CURRENCY_TWD,
            self::ACCOUNTING_CURRENCY_TZS,
            self::ACCOUNTING_CURRENCY_UAH,
            self::ACCOUNTING_CURRENCY_UGX,
            self::ACCOUNTING_CURRENCY_USD,
            self::ACCOUNTING_CURRENCY_UYU,
            self::ACCOUNTING_CURRENCY_UZS,
            self::ACCOUNTING_CURRENCY_VEF,
            self::ACCOUNTING_CURRENCY_VND,
            self::ACCOUNTING_CURRENCY_VUV,
            self::ACCOUNTING_CURRENCY_WST,
            self::ACCOUNTING_CURRENCY_XAF,
            self::ACCOUNTING_CURRENCY_XAG,
            self::ACCOUNTING_CURRENCY_XAU,
            self::ACCOUNTING_CURRENCY_XCD,
            self::ACCOUNTING_CURRENCY_XDR,
            self::ACCOUNTING_CURRENCY_XOF,
            self::ACCOUNTING_CURRENCY_XPF,
            self::ACCOUNTING_CURRENCY_YER,
            self::ACCOUNTING_CURRENCY_ZAR,
            self::ACCOUNTING_CURRENCY_ZMK,
            self::ACCOUNTING_CURRENCY_ZMW,
            self::ACCOUNTING_CURRENCY_ZWL,
        ];
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): ?string {
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
    public function getSupply(): ?string {
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
     * Get base_pair
     *
     * @return string
     */
    public function getBasePair(): ?string {
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
     * Get base_rate
     *
     * @return float|null
     */
    public function getBaseRate(): ?float {
        return $this->_data["base_rate"];
    }

    /**
     * Set base_rate
     * 
     * @param float|null $base_rate Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBaseRate(?float $base_rate) {
        return $this->_set("base_rate", $base_rate);
    }

    /**
     * Get customer
     *
     * @return \Tatum\Model\CustomerRegistration|null
     */
    public function getCustomer(): ?\Tatum\Model\CustomerRegistration {
        return $this->_data["customer"];
    }

    /**
     * Set customer
     * 
     * @param \Tatum\Model\CustomerRegistration|null $customer customer
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustomer(?\Tatum\Model\CustomerRegistration $customer) {
        return $this->_set("customer", $customer);
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
     * Get account_code
     *
     * @return string|null
     */
    public function getAccountCode(): ?string {
        return $this->_data["account_code"];
    }

    /**
     * Set account_code
     * 
     * @param string|null $account_code For bookkeeping to distinct account purpose.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountCode(?string $account_code) {
        return $this->_set("account_code", $account_code);
    }

    /**
     * Get account_number
     *
     * @return string|null
     */
    public function getAccountNumber(): ?string {
        return $this->_data["account_number"];
    }

    /**
     * Set account_number
     * 
     * @param string|null $account_number Account number from external system.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountNumber(?string $account_number) {
        return $this->_set("account_number", $account_number);
    }

    /**
     * Get accounting_currency
     *
     * @return string|null
     */
    public function getAccountingCurrency(): ?string {
        return $this->_data["accounting_currency"];
    }

    /**
     * Set accounting_currency
     * 
     * @param string|null $accounting_currency All transaction will be billed in this currency for created account associated with this currency. If not set, EUR is used. ISO-4217
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountingCurrency(?string $accounting_currency) {
        return $this->_set("accounting_currency", $accounting_currency);
    }
}
