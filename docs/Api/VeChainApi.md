# Tatum/Api/VeChainApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**vetBlockchainTransfer()**](#vetblockchaintransfer) | **POST** /v3/vet/transaction | Send VeChain from account to account
[**vetBroadcast()**](#vetbroadcast) | **POST** /v3/vet/broadcast | Broadcast signed VeChain transaction
[**vetGenerateAddress()**](#vetgenerateaddress) | **GET** /v3/vet/address/{xpub}/{index} | Generate VeChain account address from Extended public key
[**vetGenerateAddressPrivateKey()**](#vetgenerateaddressprivatekey) | **POST** /v3/vet/wallet/priv | Generate VeChain private key
[**vetGenerateWallet()**](#vetgeneratewallet) | **GET** /v3/vet/wallet | Generate VeChain wallet
[**vetGetBalance()**](#vetgetbalance) | **GET** /v3/vet/account/balance/{address} | Get VeChain Account balance
[**vetGetBlock()**](#vetgetblock) | **GET** /v3/vet/block/{hash} | Get VeChain Block by hash
[**vetGetCurrentBlock()**](#vetgetcurrentblock) | **GET** /v3/vet/block/current | Get VeChain current block
[**vetGetEnergy()**](#vetgetenergy) | **GET** /v3/vet/account/energy/{address} | Get VeChain Account energy (VTHO)
[**vetGetTransaction()**](#vetgettransaction) | **GET** /v3/vet/transaction/{hash} | Get VeChain Transaction
[**vetGetTransactionReceipt()**](#vetgettransactionreceipt) | **GET** /v3/vet/transaction/{hash}/receipt | Get VeChain Transaction Receipt


## `vetBlockchainTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetBlockchainTransfer(
    ?\Tatum\Model\VetBlockchainTransferRequest $vet_blockchain_transfer_request
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$vet_blockchain_transfer_request** | [**\Tatum\Model\VetBlockchainTransferRequest**](../Model/VetBlockchainTransferRequest.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Send VeChain from account to account

<h4>10 credits per API call.</h4><br/> <p>Send VET from account to account. Fee for the transaction is paid in VTHO.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$vet_blockchain_transfer_request = new \Tatum\Model\VetBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetBlockchainTransfer($vet_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetBlockchainTransfer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetBroadcast(
    ?\Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed VeChain transaction

<h4>5 credits per API call.</h4><br/> <p>Broadcast signed transaction to VeChain blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$broadcast_kms = new \Tatum\Model\BroadcastKMS();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetBroadcast(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGenerateAddress(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\VetGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\VetGenerateAddress200Response**](../Model/VetGenerateAddress200Response.md)

### Description

Generate VeChain account address from Extended public key

<h4>5 credits per API call.</h4><br/> <p>Generate VeChain account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Extended public key of wallet.
$xpub = 'xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid';

// Derivation index of desired address to be generated.
$index = 0;

try {
    /** @var \Tatum\Model\VetGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetGenerateAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGenerateAddressPrivateKey(
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

Generate VeChain private key

<h4>5 credits per API call.</h4><br/> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

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
        ->veChain()
        ->vetGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGenerateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

### Description

Generate VeChain wallet

<h4>5 credits per API call.</h4><br/><p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for VeChain wallet with derivation path m'/44'/818'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible VeChain wallet.</p>

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
    /** @var \Tatum\Model\Wallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetBalance(
    ?string $address
): \Tatum\Model\VetGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\VetGetBalance200Response**](../Model/VetGetBalance200Response.md)

### Description

Get VeChain Account balance

<h4>5 credits per API call.</h4><br/><p>Get VeChain Account balance in VET.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = '0x5034aa590125b64023a0262112b98d72e3c8e40e';

try {
    /** @var \Tatum\Model\VetGetBalance200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetGetBalance($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetGetBalance(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetBlock(
    ?string $hash
): \Tatum\Model\VetBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or block number |

### Return type

[**\Tatum\Model\VetBlock**](../Model/VetBlock.md)

### Description

Get VeChain Block by hash

<h4>5 credits per API call.</h4><br/><p>Get VeChain Block by block hash or block number.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block hash or block number
$hash = 325324;

try {
    /** @var \Tatum\Model\VetBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get VeChain current block

<h4>5 credits per API call.</h4><br/><p>Get VeChain current block number.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetGetCurrentBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetEnergy()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetEnergy(
    ?string $address
): \Tatum\Model\VetGetEnergy200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\VetGetEnergy200Response**](../Model/VetGetEnergy200Response.md)

### Description

Get VeChain Account energy (VTHO)

<h4>5 credits per API call.</h4><br/><p>Get VeChain Account energy in VTHO. VTHO is used for paying for the transaction fee.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = '0x5034aa590125b64023a0262112b98d72e3c8e40e';

try {
    /** @var \Tatum\Model\VetGetEnergy200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetGetEnergy($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetGetEnergy(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetGetEnergy(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetTransaction(
    ?string $hash
): \Tatum\Model\VetTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\VetTx**](../Model/VetTx.md)

### Description

Get VeChain Transaction

<h4>10 credits per API call.</h4><br/><p>Get VeChain Transaction by transaction hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash
$hash = '0x24f691abab680972437028af22bc7a43c3fbe8d6d7eefc420dea2daf554758a7';

try {
    /** @var \Tatum\Model\VetTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetGetTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetGetTransactionReceipt()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->veChain()->vetGetTransactionReceipt(
    ?string $hash
): \Tatum\Model\VetTxReceipt
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\VetTxReceipt**](../Model/VetTxReceipt.md)

### Description

Get VeChain Transaction Receipt

<h4>5 credits per API call.</h4><br/> <p>Get VeChain Transaction Receipt by transaction hash. Transaction receipt is available only after transaction is included in the block and contains information about paid fee or created contract address and much more.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash
$hash = '0x24f691abab680972437028af22bc7a43c3fbe8d6d7eefc420dea2daf554758a7';

try {
    /** @var \Tatum\Model\VetTxReceipt $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->veChain()
        ->vetGetTransactionReceipt($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling veChain()->vetGetTransactionReceipt(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling veChain()->vetGetTransactionReceipt(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
