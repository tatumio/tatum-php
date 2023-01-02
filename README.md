# Tatum - PHP SDK

[![Total Downloads][badge-downloads]][packagist]
[![Latest Version][badge-release]][packagist]
[![PHP Version][badge-php]][php]
[![Software License][badge-license]][license]

## Table of Contents
- [Welcome!](#welcome)
  - [What is Tatum?](#what-is-tatum)
  - [Need help?](#need-help)
- [Installation \& Usage](#installation--usage)
  - [Requirements](#requirements)
- [Getting Started](#getting-started)
- [Documentation](#documentation)
- [Tests](#tests)
  - [Debugging](#debugging)
- [About](#about-this-repository)

## Welcome!

This is the official Tatum SDK for PHP version `2.0.0` based on API version `3.17.2`.

### What is Tatum?

Tatum offers a flexible framework to build, run, and scale blockchain apps fast. To learn more about the
Tatum blockchain development framework, visit [our website](https://tatum.io/framework).

The Tatum API features powerful endpoints that simplify a complex blockchain into single API requests. Code for all
supported blockchains using unified API calls.

### Need help?

To chat with other developers, get help from the Support team, and engage with the thriving Tatum community, join 
our [Discord server](https://discord.com/invite/tatum). For more information about how to work with Tatum,
review the [online documentation](https://docs.tatum.io/).

## Installation & Usage

To install the Tatum SDK, simply clone this repository and load it with a [PSR-4](https://www.php-fig.org/psr/psr-4/) autoloader.
If you're having doubts, you can use the provided `autoload.php` file.

You can also install the latest version of `Tatum PHP SDK` by issuing the following command:

```
composer require tatumio/tatum-php
```

This SDK has no external dependencies in production. This means you can use this library in any PHP project even when you don't have access to Composer.

### Requirements

This SDK requires `64-bit` `PHP 7.3` or later with the following extensions:

 * `ext-curl`
 * `ext-json`
 * `ext-gmp`
 * `ext-bcmath`
 * `ext-mbstring`

## Getting Started

Please follow the [installation procedure](#installation--usage) then create an entrypoint PHP file with the following:

```php
<?php

// Import a PSR-4 autoloader
require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
    /** @var $walletTestnet \Tatum\Model\Wallet */
    $walletTestnet = $sdk
        ->testnet()
        ->api()
        ->bitcoin()
        ->btcGenerateWallet();

    /** @var $walletTestnetLocal \Tatum\Model\Wallet */
    $walletTestnetLocal = $sdk
        ->testnet()
        ->local()
        ->wallet()
        ->bitcoin()
        ->generateWallet($walletTestnet->getMnemonic());

    /** @var $walletMainnet \Tatum\Model\Wallet */
    $walletMainnet = $sdk
        ->mainnet()
        ->api()
        ->bitcoin()
        ->btcGenerateWallet();

    /** @var $walletMainnetLocal \Tatum\Model\Wallet */
    $walletMainnetLocal = $sdk
        ->mainnet()
        ->local()
        ->wallet()
        ->bitcoin()
        ->generateWallet($walletMainnet->getMnemonic());

    // Get the extended public key
    var_dump("TestNet", $walletTestnet->getXpub(), $walletTestnetLocal->getXpub());
    echo PHP_EOL;
    var_dump("MainNet", $walletMainnet->getXpub(), $walletMainnetLocal->getXpub());

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bitcoin()->btcGenerateWallet(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bitcoin()->btcGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

## Documentation

Learn more about [available methods](./docs/index.md).

## Tests

To run the unit tests, use:

```bash
composer install
vendor/bin/phpunit
```

### Debugging

Debugging is disabled by default but you can enable it with ease:

```php
$sdk->mainnet()->config()->setDebug(true);
$sdk->testnet()->config()->setDebug(true);
```

Notice that the debugger functionality is strictly tied to your `$sdk` instance and you can have
different debugger behaviors on the mainnet and testnet.

If you have enabled debugging, additional information will be written to the specified location.

By default, the write location for the `debugger` is your standard CLI output, or `php://output`.

You can redirect the output of the debugger to any other file:

```php
$sdk->mainnet()->config()->setDebugFile('/path/to/file.log');
$sdk->testnet()->config()->setDebugFile('/path/to/file.log');
```

Example debugger output for CURL requests:
```
######################## <Tatum API Call - 1672654686123> #########################
REQUEST:
curl --location --request GET 'https://api.tatum.io/v3/bitcoin/address/xpub6EpS4SGGLmDmVJLLbuAudraunFMMJo1gGxmeVkbvp1VBCjCiqmxvrtfaLHQZ33k8Ag5mrwGppgHe38HMaDyTFhCfZ2C7EH2Vc8PMZsEkuh3/1'
--header 'Host: api.tatum.io'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'User-Agent: Tatum_SDK_PHP/2.0.0'
--header 'x-api-key: ********'

RESPONSE:
Status code: 200
Headers:
 * Content-Type: application/json; charset=utf-8
 * Content-Length: 56
Body:
{
    "address": "bc1q7v70d7pt6zfxdz6hh7w07qyfk4hwev2v4chmj5"
}
######################## </Tatum API Call - 1672654686123> ########################
```

**When contacting Tatum Support providing these logs can help us identify the issue faster.**

**WARNING**: please **hide any private information** such as your private keys when sharing logs with Tatum Support!
The `x-api-key` header value is automatically removed from the logs.

## About this repository

This PHP SDK is automatically generated by the [Tatum SDK Generator](https://github.com/tatumio):

- API version: `3.17.2`
- Package version: `2.0.0`
- PHP [Versions](https://www.php.net/supported-versions.php): `7.3`, `7.4`, `8.0`, `8.1`, `8.2`

[badge-downloads]: https://img.shields.io/packagist/dt/tatumio/tatum-php.svg?style=flat&colorB=green
[badge-release]: https://img.shields.io/packagist/v/tatumio/tatum-php.svg?style=flat&label=release&color=green
[badge-php]: https://img.shields.io/packagist/php-v/tatumio/tatum-php.svg?style=flat
[badge-license]: https://img.shields.io/packagist/l/tatumio/tatum-php.svg?style=flat&color=blue

[packagist]: https://packagist.org/packages/tatumio/tatum-php
[php]: https://www.php.net/supported-versions.php
[license]: https://github.com/tatumio/tatum-php/blob/master/LICENSE.txt