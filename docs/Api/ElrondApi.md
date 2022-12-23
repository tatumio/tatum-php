# Tatum/Api/ElrondApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**eGldGetCurrentBlock()**](#egldgetcurrentblock) | **GET** /v3/egld/block/current | Get current block number
[**egldBlockchainTransfer()**](#egldblockchaintransfer) | **POST** /v3/egld/transaction | Send EGLD from account to account
[**egldBroadcast()**](#egldbroadcast) | **POST** /v3/egld/broadcast | Broadcast signed EGLD transaction
[**egldGenerateAddress()**](#egldgenerateaddress) | **GET** /v3/egld/address/{mnemonic}/{index} | Generate EGLD account address from mnemonic
[**egldGenerateAddressPrivateKey()**](#egldgenerateaddressprivatekey) | **POST** /v3/egld/wallet/priv | Generate EGLD private key
[**egldGenerateWallet()**](#egldgeneratewallet) | **GET** /v3/egld/wallet | Generate EGLD wallet
[**egldGetBalance()**](#egldgetbalance) | **GET** /v3/egld/account/balance/{address} | Get EGLD Account balance
[**egldGetBlock()**](#egldgetblock) | **GET** /v3/egld/block/{hash} | Get EGLD block by hash
[**egldGetTransaction()**](#egldgettransaction) | **GET** /v3/egld/transaction/{hash} | Get EGLD Transaction
[**egldGetTransactionAddress()**](#egldgettransactionaddress) | **GET** /v3/egld/transaction/address/{address} | Get count of outgoing EGLD transactions
[**egldGetTransactionCount()**](#egldgettransactioncount) | **GET** /v3/egld/transaction/count/{address} | Get count of outgoing EGLD transactions
[**egldNodeGet()**](#egldnodeget) | **GET** /v3/egld/node/{xApiKey}/* | Node HTTP driver
[**egldNodePost()**](#egldnodepost) | **POST** /v3/egld/node/{xApiKey}/* | Node HTTP driver


## `eGldGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->eGldGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<h4>1 credit per API call.</h4><br/> <p>Get EGLD current block number. This is the number of the latest block in the blockchain.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->eGldGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->eGldGetCurrentBlock(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->eGldGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldBlockchainTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldBlockchainTransfer(
    \Tatum\Model\EgldBlockchainTransferRequest $egld_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$egld_blockchain_transfer_request** | [**\Tatum\Model\EgldBlockchainTransferRequest**](../Model/EgldBlockchainTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send EGLD from account to account

<h4>2 credits per API call.</h4><br/> <p>Send EGLD from account to account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on devnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$egld_blockchain_transfer_request = new \Tatum\Model\EgldBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldBlockchainTransfer($egld_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldBlockchainTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed EGLD transaction

<h4>2 credits per API call.</h4><br/> <p>Broadcast signed transaction to EGLD blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$broadcast_kms = new \Tatum\Model\BroadcastKMS();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldBroadcast(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGenerateAddress(
    string $mnemonic,
    float $index
): \Tatum\Model\EgldGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of address. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\EgldGenerateAddress200Response**](../Model/EgldGenerateAddress200Response.md)

### Description

Generate EGLD account address from mnemonic

<h4>1 credit per API call.</h4><br/> <p>Generate EGLD account deposit address from mnemonic phrase. Deposit address is generated for the specific index - each mnemonic phrase can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Mnemonic to use for generation of address.
$mnemonic = quantum tobacco key they maid mean crime youth chief jungle mind design broken tilt bus shoulder leaf good forward erupt split divert bread kitten;

// Derivation index of desired address to be generated.
$index = 1;

try {
    /** @var \Tatum\Model\EgldGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldGenerateAddress($mnemonic, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldGenerateAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGenerateAddressPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md)|  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

### Description

Generate EGLD private key

<h4>1 credit per API call.</h4><br/> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$priv_key_request = new \Tatum\Model\PrivKeyRequest();

try {
    /** @var \Tatum\Model\PrivKey $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\EgldGenerateWallet200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of private key. | [optional]

### Return type

[**\Tatum\Model\EgldGenerateWallet200Response**](../Model/EgldGenerateWallet200Response.md)

### Description

Generate EGLD wallet

<h4>1 credit per API call.</h4><br/> <p>The Elrond Address format is bech32, specified by the BIP 0173. The address always starts with an erd1. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys. <br/> Each address is identified by 3 main values: <ul><li>Private Key - your secret value, which should never be revealed</li> <li>Public Key - public address to be published</li> <li>Derivation index - index of generated address</li></ul> </p> <p>Tatum follows BIP44 specification and generates for EGLD wallet with derivation path m'/44'/508'/0'/0'. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible EGLD wallet.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Mnemonic to use for generation of private key.
$mnemonic = 'mnemonic_example';

try {
    /** @var \Tatum\Model\EgldGenerateWallet200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldGenerateWallet(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetBalance(
    string $address
): \Tatum\Model\EgldGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\EgldGetBalance200Response**](../Model/EgldGetBalance200Response.md)

### Description

Get EGLD Account balance

<h4>1 credit per API call.</h4><br/> <p>Get account balance in EGLD.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$address = 'erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7';

try {
    /** @var \Tatum\Model\EgldGetBalance200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldGetBalance($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldGetBalance(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetBlock(
    string $hash
): \Tatum\Model\EgldBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or nonce |

### Return type

[**\Tatum\Model\EgldBlock**](../Model/EgldBlock.md)

### Description

Get EGLD block by hash

<h4>1 credit per API call.</h4><br/> <p>Get EGLD block by block hash or block number. <a href='https://docs.elrond.com/sdk-and-tools/rest-api/blocks/' target='_blank'> EGLD docs </a></p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Block hash or nonce
$hash = 'a6f2ac15a6b1bafdde9afff2297cef49c4c523c516f8ee12fed54be070e9512b';

try {
    /** @var \Tatum\Model\EgldBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldGetBlock(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetTransaction(
    string $hash
): \Tatum\Model\EgldTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\EgldTx**](../Model/EgldTx.md)

### Description

Get EGLD Transaction

<h4>1 credit per API call.</h4><br/> <p>Get EGLD transaction by transaction hash. Detail result please find here <a href='https://docs.elrond.com/sdk-and-tools/rest-api/transactions/#get-transaction' target='_blank'> EGLD docs </a></p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transaction hash
$hash = '99996224823736c1e9b8484ed74c1573049478f871d6f94b86811fb1c7b2addd';

try {
    /** @var \Tatum\Model\EgldTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldGetTransaction(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetTransactionAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetTransactionAddress(
    string $address
): object[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| address |

### Return type

**object[]**

### Description

Get count of outgoing EGLD transactions

<h4>1 credit per API call.</h4><br/> <p>This endpoint allows one to retrieve the latest 20 transactions sent from an address.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// address
$address = 'erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7';

try {
    /** @var object[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldGetTransactionAddress($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldGetTransactionAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldGetTransactionAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldGetTransactionCount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldGetTransactionCount(
    string $address
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| address |

### Return type

**float**

### Description

Get count of outgoing EGLD transactions

<h4>1 credit per API call.</h4><br/> <p>Get a number of outgoing EGLD transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// address
$address = 'erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7';

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldGetTransactionCount($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldGetTransactionCount(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldGetTransactionCount(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldNodeGet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldNodeGet(
    string $x_api_key
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |

### Return type

**object**

### Description

Node HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based driver to connect directly to the EGLD node provided by Tatum. To learn more about EGLD, visit the <a href="https://docs.elrond.com/sdk-and-tools/rest-api/nodes/" target="_blank">EGLD developer's guide</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Tatum X-API-Key used for authorization.
$x_api_key = /v3/egld/node/asdlkfjnqunalkwjf12341kljl/network/config;

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldNodeGet($x_api_key);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldNodeGet(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldNodeGet(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldNodePost()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->elrond()->egldNodePost(
    string $x_api_key,
    object $body
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |
 **$body** | **object**|  |

### Return type

**object**

### Description

Node HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based driver to connect directly to the EGLD node provided by Tatum. To learn more about EGLD, visit the <a href="https://docs.elrond.com/sdk-and-tools/rest-api/nodes/" target="_blank">EGLD developer's guide</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Tatum X-API-Key used for authorization.
$x_api_key = /v3/egld/node/asdlkfjnqunalkwjf124387ad/transaction/cost;

$body = array('key' => new \stdClass);

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->elrond()
        ->egldNodePost($x_api_key, $body);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling elrond()->egldNodePost(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling elrond()->egldNodePost(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
