# Tatum - PHP SDK

[![Total Downloads][badge-downloads]][packagist]
[![Release Version][badge-release]][packagist]
[![OpenAPI Version][badge-openapi]][openapi]
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
- [Examples](#examples)
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

Please note that both **api keys** are optional when creating a new instance of `\Tatum\Sdk()`.

If you don't provide an API key, a new one is generated automatically for you based on your IP address.

> Please note that some parts of the API require using your own API key with either a free or paid plan.

## Documentation

Learn more about [available methods](./docs/index.md).

## Examples

To run the examples, use:

```bash
php -f ./examples/{path-to-example-file}.php
```

For security reaons you cannot execute these files from a server request.

## Tests

To run the unit tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Debugging

The debugger allows you to get detailed information on API requests made by the SDK.

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
################# < Tatum API REQUEST TestNet-63b5524b8bfd7 > ##################
curl -i -X GET \
    https://api.tatum.io/v3/bitcoin/wallet?mnemonic=pol---ven&type=testnet \
    -H 'Host: api.tatum.io' \
    -H 'User-Agent: Tatum_SDK_PHP_DebugMode/2.0.0' \
    -H 'Content-Type: application/json' \
    -H 'x-api-key: abc---def' \
    -H 'Accept: application/json'
################# </ Tatum API REQUEST TestNet-63b5524b8bfd7 > #################

################# < Tatum API RESPONSE TestNet-63b5524b8bfd7 > #################
Status code: 200
Headers:
 * Content-Type: application/json; charset=utf-8
 * Content-Length: 294
 * Connection: keep-alive
Body:
{
    "mnemonic": "pol---ven",
    "xpub": "tpubDExxmbZbZ8hvcykrL66zGKsWy8p8CUmV4vUErffboQoahPr4goABNmaZnnRgmh8ePRcJ3eHuivEG87HBdsquU3FQJstbxJjKwhtjGiWrpB2"
}
################ </ Tatum API RESPONSE TestNet-63b5524b8bfd7 > #################
```

> Providing these logs to Tatum Support can help us identify the issue faster

**WARNING**: Never share logs that were produced with the `debug sanitizer` turned off!

```php
$sdk->mainnet()->config()->setDebugSanitizer(false);
$sdk->testnet()->config()->setDebugSanitizer(false);
```

## About this repository

This PHP SDK is automatically generated by the [Tatum SDK Generator](https://github.com/tatumio):

- PHP [Versions](https://www.php.net/supported-versions.php): `7.3`, `7.4`, `8.0`, `8.1`, `8.2`

[badge-downloads]: https://img.shields.io/packagist/dt/tatumio/tatum-php.svg?style=flat&colorB=green
[badge-release]: https://img.shields.io/packagist/v/tatumio/tatum-php.svg?style=flat&label=release&color=blue
[badge-php]: https://img.shields.io/packagist/php-v/tatumio/tatum-php.svg?style=flat
[badge-license]: https://img.shields.io/packagist/l/tatumio/tatum-php.svg?style=flat&color=blue
[badge-openapi]: https://img.shields.io/badge/openapi-v3.17.2-blue

[packagist]: https://packagist.org/packages/tatumio/tatum-php
[php]: https://www.php.net/supported-versions.php
[license]: https://github.com/tatumio/tatum-php/blob/master/LICENSE.txt
[openapi]: https://apidoc.tatum.io
