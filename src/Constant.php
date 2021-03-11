<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

const TATUM_API_URL = 'https://api-eu1.tatum.io/v3';

const TEST_VET_URL = 'https://sync-testnet.vechain.org/';
const VET_URL = 'https://sync-mainnet.vechain.org/';

const ETH_DERIVATION_PATH = "44'/60'/0'/0";
const VET_DERIVATION_PATH = "44'/818'/0'/0";
const BTC_DERIVATION_PATH = "44'/0'/0'/0";
const LTC_DERIVATION_PATH = "44'/2'/0'/0";
const BCH_DERIVATION_PATH = "44'/145'/0'/0";
const LYRA_DERIVATION_PATH = "44'/497'/0'/0";
const TESTNET_DERIVATION_PATH = "44'/1'/0'/0";

const CONTRACT_ADDRESSES = array(
    ['USDT' => '0xdac17f958d2ee523a2206206994597c13d831ec7'],
    ['LEO' => '0x2af5d2ad76741191d15dfe7bf6ac92d4bd912ca3'],
    ['UNI' => '0x1f9840a85d5af5bf1d1762f925bdaddc4201f984'],
    ['LINK' => '0x514910771af9ca656af840dff83e8264ecf986ca'],
    ['WBTC' => '0x2260fac5e5542a773aa44fbcfedf7c193bc2c599'],
    ['FREE' => '0x2f141ce366a2462f02cea3d12cf93e4dca49e4fd'],
    ['MKR' => '0x9f8f72aa9304c8b593d555f12ef6589cc3a579a2'],
    ['USDC' => '0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48'],
    ['BAT' => '0x0d8775f648430679a709e98d2b0cb6250d2887ef'],
    ['TUSD' => '0x0000000000085d4780B73119b644AE5ecd22b376'],
    ['PAX' => '0x8e870d67f660d95d5be530380d0ec0bd388289e1'],
    ['PAXG' => '0x45804880de22913dafe09f4980848ece6ecbaf78'],
    ['PLTC' => '0x429d83bb0dcb8cdd5311e34680adc8b12070a07f'],
    ['MMY' => '0x385ddf50c3de724f6b8ecb41745c29f9dd3c6d75'],
    ['XCON' => '0x0f237d5ea7876e0e2906034d98fdb20d43666ad4'],
    ['USDT_TRON' => 'TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t'],
);

const CONTRACT_DECIMALS = array(
    ['USDT' => 6],
    ['USDT_TRON' => 6],
    ['WBTC' => 8],
    ['LEO' => 18],
    ['LINK' => 18],
    ['UNI' => 18],
    ['FREE' => 18],
    ['MKR' => 18],
    ['USDC' => 6],
    ['BAT' => 18],
    ['TUSD' => 18],
    ['PAX' => 18],
    ['PAXG' => 18],
    ['PLTC' => 18],
    ['MMY' => 18],
    ['XCON' => 18],
);

const TRANSFER_METHOD_ABI = array(
    ['constant' => false],
    'inputs' => [
        array(
            'name' => 'to',
            'type' => 'address',
        ),
        array(
            'name' => 'value',
            'type' => 'uint256',
        ),
    ],
    'name' => 'transfer',
    'outputs' => [
        array(
            'name' => '',
            'type' => 'bool',
    ),
    ],
    'payable' => false,
    'stateMutability' => 'nonpayable',
    'type' => 'function',
);
