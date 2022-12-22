# Tatum/Api/TronApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateTronwallet()**](#generatetronwallet) | **GET** /v3/tron/wallet | Generate a TRON wallet
[**tronAccountTx()**](#tronaccounttx) | **GET** /v3/tron/transaction/account/{address} | Get all transactions for a TRON account
[**tronAccountTx20()**](#tronaccounttx20) | **GET** /v3/tron/transaction/account/{address}/trc20 | Get TRC-20 transactions for a TRON account
[**tronBroadcast()**](#tronbroadcast) | **POST** /v3/tron/broadcast | Broadcast a TRON transaction
[**tronCreateTrc10()**](#troncreatetrc10) | **POST** /v3/tron/trc10/deploy | Create a TRC-10 token
[**tronCreateTrc20()**](#troncreatetrc20) | **POST** /v3/tron/trc20/deploy | Create a TRC-20 token
[**tronFreeze()**](#tronfreeze) | **POST** /v3/tron/freezeBalance | Freeze the balance of a TRON account
[**tronGenerateAddress()**](#trongenerateaddress) | **GET** /v3/tron/address/{xpub}/{index} | Generate a TRON address from the wallet's extended public key
[**tronGenerateAddressPrivateKey()**](#trongenerateaddressprivatekey) | **POST** /v3/tron/wallet/priv | Generate the private key for a TRON address
[**tronGetAccount()**](#trongetaccount) | **GET** /v3/tron/account/{address} | Get the TRON account by its address
[**tronGetBlock()**](#trongetblock) | **GET** /v3/tron/block/{hash} | Get a TRON block by its hash or height
[**tronGetCurrentBlock()**](#trongetcurrentblock) | **GET** /v3/tron/info | Get the current TRON block
[**tronGetTransaction()**](#trongettransaction) | **GET** /v3/tron/transaction/{hash} | Get a TRON transaction by its hash
[**tronTransfer()**](#trontransfer) | **POST** /v3/tron/transaction | Send TRX to a TRON account
[**tronTransferTrc10()**](#trontransfertrc10) | **POST** /v3/tron/trc10/transaction | Send TRC-10 tokens to a TRON account
[**tronTransferTrc20()**](#trontransfertrc20) | **POST** /v3/tron/trc20/transaction | Send TRC-20 tokens to a TRON account
[**tronTrc10Detail()**](#trontrc10detail) | **GET** /v3/tron/trc10/detail/{idOrOwnerAddress} | Get information about a TRC-10 token


## `generateTronwallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->generateTronwallet(
    ?string $mnemonic
): \Tatum\Model\TronWallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\TronWallet**](../Model/TronWallet.md)

### Description

Generate a TRON wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Bitcoin wallet with derivation path m'/44'/195'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/tron/bips/blob/master/bip-0044.mediawiki</a>.         Generate BIP44 compatible Tron wallet.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Mnemonic to use for generation of extended public and private keys.
$mnemonic = 'mnemonic_example';

try {
    /** @var \Tatum\Model\TronWallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->generateTronwallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->generateTronwallet(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->generateTronwallet(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronAccountTx()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronAccountTx(
    ?string $address, 
    ?string $next
): \Tatum\Model\TronAccountTx200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| The address of the TRON account to get all transactions for |
 **$next** | **string**| The ID of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API). | [optional]

### Return type

[**\Tatum\Model\TronAccountTx200Response**](../Model/TronAccountTx200Response.md)

### Description

Get all transactions for a TRON account

<p><b>5 credits per API call</b></p> <p>Get all transactions for a TRON account.</p> <p>This API returns up to 200 transactions in one API call. If there are more than 200 transactions for the TRON account, the response body will contain the <code>next</code> parameter with the ID of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list.</p> <p>To get the next 200 transactions, make another call using this API, but this time add the <code>next</code> parameter the endpoint URL and set it to the transaction ID from the <code>next</code> parameter in the response, for example:</p> <p><code>https://{region}.tatum.io/v3/tron/transaction/account/{address}?next=81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991</code></p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The address of the TRON account to get all transactions for
$address = 'TGDqQAP5bduoPKVgdbk7fGyW4DwEt3RRn8';

// The ID of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API).
$next = '81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991';

try {
    /** @var \Tatum\Model\TronAccountTx200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronAccountTx($address, $next);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronAccountTx(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronAccountTx(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronAccountTx20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronAccountTx20(
    ?string $address, 
    ?string $next
): \Tatum\Model\TronAccountTx20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| The address of the TRON account to get TRC-20 transactions for |
 **$next** | **string**| The ID of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API). | [optional]

### Return type

[**\Tatum\Model\TronAccountTx20200Response**](../Model/TronAccountTx20200Response.md)

### Description

Get TRC-20 transactions for a TRON account

<p><b>5 credits per API call</b></p> <p>Get TRC-20 transactions for a TRON account.</p> <p>This API returns up to 200 transactions in one API call. If there are more than 200 transactions for the TRON account, the response body will contain the <code>next</code> parameter with the ID of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list.</p> <p>To get the next 200 transactions, make another call using this API, but this time add the <code>next</code> parameter the endpoint URL and set it to the transaction ID from the <code>next</code> parameter in the response, for example:</p> <p><code>https://{region}.tatum.io/v3/tron/transaction/account/{address}/trc20?next=81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991</code></p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The address of the TRON account to get TRC-20 transactions for
$address = 'TGDqQAP5bduoPKVgdbk7fGyW4DwEt3RRn8';

// The ID of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API).
$next = '81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991';

try {
    /** @var \Tatum\Model\TronAccountTx20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronAccountTx20($address, $next);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronAccountTx20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronAccountTx20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronBroadcast(
    ?\Tatum\Model\TronBroadcast $tron_broadcast
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_broadcast** | [**\Tatum\Model\TronBroadcast**](../Model/TronBroadcast.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast a TRON transaction

<p><b>5 credits per API call</b></p> <p>Broadcast Tron transaction. This method is used internally from Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$tron_broadcast = new \Tatum\Model\TronBroadcast();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronBroadcast($tron_broadcast);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronBroadcast(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronCreateTrc10()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronCreateTrc10(
    ?\Tatum\Model\TronCreateTrc10Request $tron_create_trc10_request
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_create_trc10_request** | [**\Tatum\Model\TronCreateTrc10Request**](../Model/TronCreateTrc10Request.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Create a TRC-10 token

<p><b>10 credits per API call</b></p> <p>Create a TRON TRC-10 token.</p> <p>One TRON account can create only one TRC-10 token. The whole supply of the token is transferred to the issuer's account 100 seconds after the token has been created.</p> <p><b>Signing a transaction</b><br/> When creating a TRC-10 token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$tron_create_trc10_request = new \Tatum\Model\TronCreateTrc10Request();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronCreateTrc10($tron_create_trc10_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronCreateTrc10(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronCreateTrc10(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronCreateTrc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronCreateTrc20(
    ?\Tatum\Model\TronCreateTrc20Request $tron_create_trc20_request
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_create_trc20_request** | [**\Tatum\Model\TronCreateTrc20Request**](../Model/TronCreateTrc20Request.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Create a TRC-20 token

<p><b>10 credits per API call</b></p> <p>Create a TRON TRC-20 token.</p> <p><b>Signing a transaction</b><br/> When creating a TRC-20 token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$tron_create_trc20_request = new \Tatum\Model\TronCreateTrc20Request();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronCreateTrc20($tron_create_trc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronCreateTrc20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronCreateTrc20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronFreeze()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronFreeze(
    ?\Tatum\Model\TronFreezeRequest $tron_freeze_request
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_freeze_request** | [**\Tatum\Model\TronFreezeRequest**](../Model/TronFreezeRequest.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Freeze the balance of a TRON account

<p><b>10 credits per API call</b></p> <p>Freeze Tron assets on the address. By freezing assets, you can obtain energy or bandwidth to perform transactions.</p> <p><b>Signing a transaction</b></p> <p>When freezing the balance, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$tron_freeze_request = new \Tatum\Model\TronFreezeRequest();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronFreeze($tron_freeze_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronFreeze(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronFreeze(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGenerateAddress(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\TronGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| The extended public key of the wallet; can be in the base58 format (111 characters) or the hexadecimal format (130 characters) |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\TronGenerateAddress200Response**](../Model/TronGenerateAddress200Response.md)

### Description

Generate a TRON address from the wallet's extended public key

<p><b>5 credits per API call</b></p> <p>Generate a TRON address from the extended public key of the wallet. The address is generated for the specific index - each extended public key can generate up to 2^32 addresses with the index starting from 0 up to 2^31.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The extended public key of the wallet; can be in the base58 format (111 characters) or the hexadecimal format (130 characters)
$xpub = '0244b3f40c6e570ae0032f6d7be87737a6c4e5314a4a1a82e22d0460a0d0cd794936c61f0c80dc74ace4cd04690d4eeb1aa6555883be006e1748306faa7ed3a26a';

// Derivation index of desired address to be generated.
$index = 1;

try {
    /** @var \Tatum\Model\TronGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronGenerateAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGenerateAddressPrivateKey(
    ?\Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md)|  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

### Description

Generate the private key for a TRON address

<p><b>10 credits per API call</b></p> <p>Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$priv_key_request = new \Tatum\Model\PrivKeyRequest();

try {
    /** @var \Tatum\Model\PrivKey $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGetAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGetAccount(
    ?string $address
): \Tatum\Model\TronAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address. |

### Return type

[**\Tatum\Model\TronAccount**](../Model/TronAccount.md)

### Description

Get the TRON account by its address

<p><b>5 credits per API call</b></p> <p>Get Tron account by address.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address.
$address = 'TGDqQAP5bduoPKVgdbk7fGyW4DwEt3RRn8';

try {
    /** @var \Tatum\Model\TronAccount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronGetAccount($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronGetAccount(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronGetAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGetBlock(
    ?string $hash
): \Tatum\Model\TronBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or height. |

### Return type

[**\Tatum\Model\TronBlock**](../Model/TronBlock.md)

### Description

Get a TRON block by its hash or height

<p><b>5 credits per API call</b></p> <p>Get Tron block by hash or height.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block hash or height.
$hash = '000000000195a8cfe2ea4ca60ce921b30e95980a96c6bb1da4a35aa03da9c5a8';

try {
    /** @var \Tatum\Model\TronBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronGetBlock(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGetCurrentBlock(
): \Tatum\Model\TronGetCurrentBlock200Response
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\TronGetCurrentBlock200Response**](../Model/TronGetCurrentBlock200Response.md)

### Description

Get the current TRON block

<p><b>5 credits per API call</b></p> <p>Get current Tron block.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var \Tatum\Model\TronGetCurrentBlock200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronGetCurrentBlock(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronGetTransaction(
    ?string $hash
): \Tatum\Model\TronTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash. |

### Return type

[**\Tatum\Model\TronTx**](../Model/TronTx.md)

### Description

Get a TRON transaction by its hash

<p><b>5 credits per API call</b></p> <p>Get Tron transaction by hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash.
$hash = '81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991';

try {
    /** @var \Tatum\Model\TronTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronGetTransaction(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronTransfer(
    ?\Tatum\Model\TronTransferRequest $tron_transfer_request
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_transfer_request** | [**\Tatum\Model\TronTransferRequest**](../Model/TronTransferRequest.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send TRX to a TRON account

<p><b>10 credits per API call</b></p> <p>Send an amount in TRX from address to address.</p> <p><b>Signing a transaction</b></p> <p>When sending TRX to a TRON account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$tron_transfer_request = new \Tatum\Model\TronTransferRequest();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronTransfer($tron_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronTransferTrc10()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronTransferTrc10(
    ?\Tatum\Model\TronTransferTrc10Request $tron_transfer_trc10_request
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_transfer_trc10_request** | [**\Tatum\Model\TronTransferTrc10Request**](../Model/TronTransferTrc10Request.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send TRC-10 tokens to a TRON account

<p><b>10 credits per API call</b></p> <p>Send TRC-10 tokens from address to address.</p> <p><b>Signing a transaction</b></p> <p>When sending TRC-10 tokens to a TRON account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$tron_transfer_trc10_request = new \Tatum\Model\TronTransferTrc10Request();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronTransferTrc10($tron_transfer_trc10_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronTransferTrc10(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronTransferTrc10(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronTransferTrc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronTransferTrc20(
    ?\Tatum\Model\TronTransferTrc20Request $tron_transfer_trc20_request
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_transfer_trc20_request** | [**\Tatum\Model\TronTransferTrc20Request**](../Model/TronTransferTrc20Request.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send TRC-20 tokens to a TRON account

<p><b>10 credits per API call</b></p> <p>Send TRC-20 tokens from address to address.</p> <p><b>Signing a transaction</b></p> <p>When sending TRC-20 tokens to a TRON account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$tron_transfer_trc20_request = new \Tatum\Model\TronTransferTrc20Request();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronTransferTrc20($tron_transfer_trc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronTransferTrc20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronTransferTrc20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronTrc10Detail()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->tron()->tronTrc10Detail(
    ?string $id_or_owner_address
): \Tatum\Model\TronTrc10Detail
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id_or_owner_address** | **string**| The ID of the TRC-10 token or the address of the token&#39;s owner |

### Return type

[**\Tatum\Model\TronTrc10Detail**](../Model/TronTrc10Detail.md)

### Description

Get information about a TRC-10 token

<p><b>5 credits per API call</b></p> <p>Get information about a TRON TRC-10 token.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The ID of the TRC-10 token or the address of the token's owner
$id_or_owner_address = 1000540;

try {
    /** @var \Tatum\Model\TronTrc10Detail $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->tron()
        ->tronTrc10Detail($id_or_owner_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling tron()->tronTrc10Detail(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling tron()->tronTrc10Detail(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
