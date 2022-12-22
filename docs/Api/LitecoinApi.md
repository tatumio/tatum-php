# Tatum/Api/LitecoinApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ltcBroadcast()**](#ltcbroadcast) | **POST** /v3/litecoin/broadcast | Broadcast signed Litecoin transaction
[**ltcGenerateAddress()**](#ltcgenerateaddress) | **GET** /v3/litecoin/address/{xpub}/{index} | Generate Litecoin deposit address from Extended public key
[**ltcGenerateAddressPrivateKey()**](#ltcgenerateaddressprivatekey) | **POST** /v3/litecoin/wallet/priv | Generate Litecoin private key
[**ltcGenerateWallet()**](#ltcgeneratewallet) | **GET** /v3/litecoin/wallet | Generate Litecoin wallet
[**ltcGetBalanceOfAddress()**](#ltcgetbalanceofaddress) | **GET** /v3/litecoin/address/balance/{address} | Get the balance of a Litecoin address
[**ltcGetBlock()**](#ltcgetblock) | **GET** /v3/litecoin/block/{hash} | Get Litecoin Block by hash or height
[**ltcGetBlockChainInfo()**](#ltcgetblockchaininfo) | **GET** /v3/litecoin/info | Get Litecoin Blockchain Information
[**ltcGetBlockHash()**](#ltcgetblockhash) | **GET** /v3/litecoin/block/hash/{i} | Get Litecoin Block hash
[**ltcGetMempool()**](#ltcgetmempool) | **GET** /v3/litecoin/mempool | Get Mempool Transactions
[**ltcGetRawTransaction()**](#ltcgetrawtransaction) | **GET** /v3/litecoin/transaction/{hash} | Get Litecoin Transaction by hash
[**ltcGetTxByAddress()**](#ltcgettxbyaddress) | **GET** /v3/litecoin/transaction/address/{address} | Get Litecoin Transactions by address
[**ltcGetUTXO()**](#ltcgetutxo) | **GET** /v3/litecoin/utxo/{hash}/{index} | Get information about a transaction output (UTXO) in a Litecoin transaction
[**ltcRpcDriver()**](#ltcrpcdriver) | **POST** /v3/litecoin/node | JSON RPC HTTP driver
[**ltcTransferBlockchain()**](#ltctransferblockchain) | **POST** /v3/litecoin/transaction | Send LTC to Litecoin addresses


## `ltcBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcBroadcast(
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

Broadcast signed Litecoin transaction

<h4>5 credits per API call.</h4><br/> <p>Broadcast signed transaction to Litecoin blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

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
        ->litecoin()
        ->ltcBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcBroadcast(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGenerateAddress(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\LtcGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\LtcGenerateAddress200Response**](../Model/LtcGenerateAddress200Response.md)

### Description

Generate Litecoin deposit address from Extended public key

<h4>5 credits per API call.</h4><br/> <p>Generate Litecoin deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

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
    /** @var \Tatum\Model\LtcGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGenerateAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGenerateAddressPrivateKey(
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

Generate Litecoin private key

<h4>5 credits per API call.</h4><br/> <p>Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

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
        ->litecoin()
        ->ltcGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGenerateWallet(
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

Generate Litecoin wallet

<h4>5 credits per API call.</h4><br/><p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Litecoin wallet with derivation path m'/44'/2'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki">https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Litecoin wallet.</p>

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
        ->litecoin()
        ->ltcGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetBalanceOfAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetBalanceOfAddress(
    ?string $address
): \Tatum\Model\BtcBasedBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Address |

### Return type

[**\Tatum\Model\BtcBasedBalance**](../Model/BtcBasedBalance.md)

### Description

Get the balance of a Litecoin address

<p><b>5 credits per API call</b></p> <p>Get the balance of a Litecoin address.</p> <p>The API returns the balance only if the address has up to 50,000 UTXOs (Unspent Transaction Outputs). For an address with more than 50,000 UTXOs, the API returns an error with the <code>403</code> response code.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Address
$address = 'n4YNG8q5JyxkeWf7zMi1bMyRZbRKK1W7or';

try {
    /** @var \Tatum\Model\BtcBasedBalance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetBalanceOfAddress($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGetBalanceOfAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGetBalanceOfAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetBlock(
    ?string $hash
): \Tatum\Model\LtcBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or height. |

### Return type

[**\Tatum\Model\LtcBlock**](../Model/LtcBlock.md)

### Description

Get Litecoin Block by hash or height

<h4>5 credits per API call.</h4><br/><p>Get Litecoin Block detail by block hash or height.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block hash or height.
$hash = 1234314;

try {
    /** @var \Tatum\Model\LtcBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetBlockChainInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetBlockChainInfo(
): \Tatum\Model\LtcInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\LtcInfo**](../Model/LtcInfo.md)

### Description

Get Litecoin Blockchain Information

<h4>5 credits per API call.</h4><br/><p>Get Litecoin Blockchain Information. Obtain basic info like testnet / mainnet version of the chain, current block number and it's hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var \Tatum\Model\LtcInfo $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetBlockChainInfo();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGetBlockChainInfo(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGetBlockChainInfo(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetBlockHash()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetBlockHash(
    ?float $i
): \Tatum\Model\LtcGetBlockHash200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**| The number of blocks preceding a particular block on a block chain. |

### Return type

[**\Tatum\Model\LtcGetBlockHash200Response**](../Model/LtcGetBlockHash200Response.md)

### Description

Get Litecoin Block hash

<h4>5 credits per API call.</h4><br/><p>Get Litecoin Block hash. Returns hash of the block to get the block detail.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The number of blocks preceding a particular block on a block chain.
$i = 1234314;

try {
    /** @var \Tatum\Model\LtcGetBlockHash200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetBlockHash($i);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGetBlockHash(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGetBlockHash(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetMempool()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetMempool(
): string[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Description

Get Mempool Transactions

<h4>1 credit per API call.</h4><br/><p>Get Litecoin Transaction ids in the mempool.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var string[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetMempool();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGetMempool(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGetMempool(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetRawTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetRawTransaction(
    ?string $hash
): \Tatum\Model\LtcTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\LtcTx**](../Model/LtcTx.md)

### Description

Get Litecoin Transaction by hash

<h4>5 credits per API call.</h4><br/><p>Get Litecoin Transaction detail by transaction hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash
$hash = 'd60631d8e5c8b6eb0557b5181cf28564d771c628a08abc414e87ad7c05ff2fc2';

try {
    /** @var \Tatum\Model\LtcTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetRawTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGetRawTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGetRawTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetTxByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetTxByAddress(
    ?string $address, 
    ?float $page_size, 
    ?float $offset
): \Tatum\Model\LtcTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Address |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]

### Return type

[**\Tatum\Model\LtcTx[]**](../Model/LtcTx.md)

### Description

Get Litecoin Transactions by address

<h4>5 credits per API call.</h4><br/><p>Get Litecoin Transaction by address.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Address
$address = 'n4YNG8q5JyxkeWf7zMi1bMyRZbRKK1W7or';

// Max number of items per page is 50.
$page_size = 10;

// Offset to obtain next page of the data.
$offset = 0;

try {
    /** @var \Tatum\Model\LtcTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetTxByAddress($address, $page_size, $offset);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGetTxByAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGetTxByAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetUTXO()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetUTXO(
    ?string $hash, 
    ?float $index
): \Tatum\Model\LtcUTXO
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| The transaction hash |
 **$index** | **float**| The index of the transaction output that you want to check for the UTXO |

### Return type

[**\Tatum\Model\LtcUTXO**](../Model/LtcUTXO.md)

### Description

Get information about a transaction output (UTXO) in a Litecoin transaction

<p><b>5 credits per API call</b></p> <p>Get information about a transaction output in a transaction and check whether this output is a UTXO or has been spent.</p> <p>"UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of LTC that remains at a Litecoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.</p> <ul> <li>If the transaction output is an UTXO, the API returns data about it.</li> <li>If the transaction output has been spent and there is no UTXO to return, the API returns an error with the <code>404</code> response code.</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The transaction hash
$hash = '5f83d51c8d3054012cea3011fa626b85d89442788721afd60719ab1f9ab8f78a';

// The index of the transaction output that you want to check for the UTXO
$index = 0;

try {
    /** @var \Tatum\Model\LtcUTXO $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetUTXO($hash, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcGetUTXO(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcGetUTXO(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcRpcDriver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcRpcDriver(
    ?\Tatum\Model\BchRpcDriverRequest $bch_rpc_driver_request
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bch_rpc_driver_request** | [**\Tatum\Model\BchRpcDriverRequest**](../Model/BchRpcDriverRequest.md)|  |

### Return type

**object**

### Description

JSON RPC HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as an http-based JSON RPC driver to connect directly to the node provided by Tatum.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$bch_rpc_driver_request = new \Tatum\Model\BchRpcDriverRequest();

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcRpcDriver($bch_rpc_driver_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcRpcDriver(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcRpcDriver(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcTransferBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcTransferBlockchain(
    ?\Tatum\Model\LtcTransferBlockchainRequest $ltc_transfer_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transfer_blockchain_request** | [**\Tatum\Model\LtcTransferBlockchainRequest**](../Model/LtcTransferBlockchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send LTC to Litecoin addresses

<p><b>10 credits per API call</b></p> <p>Send LTC to blockchain addresses.</p> <p>Litecoin transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of LTC that remains at a Litecoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>. To check UTXOs in a transaction, see the <a href="#operation/LtcGetUTXO">API for getting information about a transaction output (UTXO) in a Litecoin transaction</a>.</p> <p>You can build a LTC transaction by one of the following methods:</p> <ul> <li><b>Sending LTC from blockchain addresses</b><br/>The assets are sent from a list of addresses. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. For easier control over the assets to be sent, we recommend that you use this method only if you have one address to send the assets from.<br/> To use this method, use the <code>LtcTransactionAddress</code> or <code>LtcTransactionAddressKMS</code> schema of the request body.</li> <li><b>Sending LTC from UTXOs</b><br/>The assets are sent from a list of UTXOs. Each UTXO is included in the transaction. Use this method if you want to manually calculate the amount to send.<br/> To use this method, use the <code>LtcTransactionFromUTXO</code> or <code>LtcTransactionFromUTXOKMS</code> schema of the request body.</li> </ul> <p>When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 LTC and T2 with 2 LTC. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 LTC to spend:<br/><code>1 LTC (from T1) + 2 LTC (from T2) = 3 LTC (to spend in total)</code></p> <p>You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.</p> <p><b>Paying the gas fee and receiving the change</b><br/> When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).</p> <p><b>Signing a transaction</b><br/> When sending LTC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$ltc_transfer_blockchain_request = new \Tatum\Model\LtcTransferBlockchainRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcTransferBlockchain($ltc_transfer_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling litecoin()->ltcTransferBlockchain(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling litecoin()->ltcTransferBlockchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
