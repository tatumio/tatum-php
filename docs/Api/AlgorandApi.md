# Tatum/Api/AlgorandApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**algoNodeGetDriver()**](#algonodegetdriver) | **GET** /v3/algorand/node/algod/{xApiKey}/{algodPath} | Access Algorand Algod GET node endpoints
[**algoNodeIndexerGetDriver()**](#algonodeindexergetdriver) | **GET** /v3/algorand/node/indexer/{xApiKey}/{indexerPath} | Access Algorand Indexer GET node endpoints
[**algoNodePostDriver()**](#algonodepostdriver) | **POST** /v3/algorand/node/algod/{xApiKey}/{algodPath} | Access Algorand Algod POST node endpoints
[**algoandBroadcast()**](#algoandbroadcast) | **POST** /v3/algorand/broadcast | Broadcast signed Algorand transaction
[**algorandBlockchainReceiveAsset()**](#algorandblockchainreceiveasset) | **POST** /v3/algorand/asset/receive | Enable receiving asset on account
[**algorandBlockchainTransfer()**](#algorandblockchaintransfer) | **POST** /v3/algorand/transaction | Send Algos to an Algorand account
[**algorandGenerateAddress()**](#algorandgenerateaddress) | **GET** /v3/algorand/address/{priv} | Generate Algorand account address from private key
[**algorandGenerateWallet()**](#algorandgeneratewallet) | **GET** /v3/algorand/wallet | Generate Algorand wallet
[**algorandGetBalance()**](#algorandgetbalance) | **GET** /v3/algorand/account/balance/{address} | Get Algorand Account balance
[**algorandGetBlock()**](#algorandgetblock) | **GET** /v3/algorand/block/{roundNumber} | Get Algorand block by block round number
[**algorandGetCurrentBlock()**](#algorandgetcurrentblock) | **GET** /v3/algorand/block/current | Get current block number
[**algorandGetPayTransactionsByFromTo()**](#algorandgetpaytransactionsbyfromto) | **GET** /v3/algorand/transactions/{from}/{to} | Get Algorand Transactions between from and to
[**algorandGetTransaction()**](#algorandgettransaction) | **GET** /v3/algorand/transaction/{txid} | Get Algorand Transaction


## `algoNodeGetDriver()`

```php
api()->algorand()->algoNodeGetDriver(
    ?string $x_api_key, 
    ?string $algod_path
): \Tatum\Model\AlgoBlock
```

Access Algorand Algod GET node endpoints

<p><b>1 credit per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based url to connect directly to the Algorand node provided by Tatum. You can check al available APIs here - <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/</a>. <br/> Example call for Get Block is described in the response. <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/#get-v2blocksround" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/#get-v2blocksround</a>. <br/> URL used for this call would be <pre>https://api.tatum.io/v3/algorand/node/algod/YOUR_API_KEY/v2/blocks/16775567</pre> </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Tatum X-API-Key used for authorization.
$x_api_key = 'asdlkfjnqunalkwjfnq2oi303294857k';

// `**` path of algod.
$algod_path = v2/accounts;

try {
    /** @var \Tatum\Model\AlgoBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algoNodeGetDriver($x_api_key, $algod_path);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algoNodeGetDriver(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algoNodeGetDriver(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |
 **$algod_path** | **string**| &#x60;**&#x60; path of algod. |

### Return type

[**\Tatum\Model\AlgoBlock**](../Model/AlgoBlock.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algoNodeIndexerGetDriver()`

```php
api()->algorand()->algoNodeIndexerGetDriver(
    ?string $x_api_key, 
    ?string $indexer_path
): \Tatum\Model\AlgoTx
```

Access Algorand Indexer GET node endpoints

<p><b>1 credit per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based url to connect directly to the Algorand node provided by Tatum. You can check all available APIs here - <a href="https://developer.algorand.org/docs/rest-apis/indexer/" target="_blank">https://developer.algorand.org/docs/rest-apis/indexer/</a>. <br/> Example call for Get Tx By ID is described in the response. <a href="https://developer.algorand.org/docs/rest-apis/indexer/#get-v2transactionstxid" target="_blank">https://developer.algorand.org/docs/rest-apis/indexer/#get-v2transactionstxid</a>. <br/> URL used for this call would be <pre>https://api.tatum.io/v3/algorand/node/indexer/YOUR_API_KEY/v2/transactions/HNIQ76UTJYPOLZP5FWODYABBJPYPGJNEM2QEJSMDMQRWEKHEYJHQ</pre></p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Tatum X-API-Key used for authorization.
$x_api_key = 'asdlkfjnqunalkwjfnq2oi303294857k';

// `**` path of indexer.
$indexer_path = v2/accounts;

try {
    /** @var \Tatum\Model\AlgoTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algoNodeIndexerGetDriver($x_api_key, $indexer_path);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algoNodeIndexerGetDriver(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algoNodeIndexerGetDriver(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |
 **$indexer_path** | **string**| &#x60;**&#x60; path of indexer. |

### Return type

[**\Tatum\Model\AlgoTx**](../Model/AlgoTx.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algoNodePostDriver()`

```php
api()->algorand()->algoNodePostDriver(
    ?string $x_api_key, 
    ?string $algod_path, 
    ?\Tatum\Model\AlgoNodePostDriverRequest $algo_node_post_driver_request
): \Tatum\Model\AlgoNodePostDriver200Response
```

Access Algorand Algod POST node endpoints

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based url to connect directly to the Algorand node provided by Tatum.  You can check al available APIs here - <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/</a>.  <br/>  Example call for Broadcast a raw transaction is described in the response. <a href="https://developer.algorand.org/docs/rest-apis/algod/v2/#post-v2transactions" target="_blank">https://developer.algorand.org/docs/rest-apis/algod/v2/#post-v2transactions</a>.  <br/>  URL used for this call would be <pre>https://api.tatum.io/v3/algorand/node/algod/YOUR_API_KEY/v2/transactions</pre>  </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Tatum X-API-Key used for authorization.
$x_api_key = 'asdlkfjnqunalkwjfnq2oi303294857k';

// `**` path of algod.
$algod_path = v2/accounts;

$algo_node_post_driver_request = new \Tatum\Model\AlgoNodePostDriverRequest();

try {
    /** @var \Tatum\Model\AlgoNodePostDriver200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algoNodePostDriver($x_api_key, $algod_path, $algo_node_post_driver_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algoNodePostDriver(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algoNodePostDriver(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |
 **$algod_path** | **string**| &#x60;**&#x60; path of algod. |
 **$algo_node_post_driver_request** | [**\Tatum\Model\AlgoNodePostDriverRequest**](../Model/AlgoNodePostDriverRequest.md)|  |

### Return type

[**\Tatum\Model\AlgoNodePostDriver200Response**](../Model/AlgoNodePostDriver200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algoandBroadcast()`

```php
api()->algorand()->algoandBroadcast(
    ?\Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\AlgoTransactionHashKMS
```

Broadcast signed Algorand transaction

<h4>2 credits per API call.</h4><br/> <p>Broadcast signed transaction to Algorand blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$broadcast_kms = new \Tatum\Model\BroadcastKMS();

try {
    /** @var \Tatum\Model\AlgoTransactionHashKMS $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algoandBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algoandBroadcast(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algoandBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |

### Return type

[**\Tatum\Model\AlgoTransactionHashKMS**](../Model/AlgoTransactionHashKMS.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algorandBlockchainReceiveAsset()`

```php
api()->algorand()->algorandBlockchainReceiveAsset(
    ?\Tatum\Model\AlgorandBlockchainReceiveAssetRequest $algorand_blockchain_receive_asset_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Enable receiving asset on account

<h4>2 credits per API call.</h4><br/> <p>Enable accepting Algorand asset on the sender account.<br/><br/> This operation needs the private key of the blockchain address. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$algorand_blockchain_receive_asset_request = new \Tatum\Model\AlgorandBlockchainReceiveAssetRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandBlockchainReceiveAsset($algorand_blockchain_receive_asset_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algorandBlockchainReceiveAsset(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algorandBlockchainReceiveAsset(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$algorand_blockchain_receive_asset_request** | [**\Tatum\Model\AlgorandBlockchainReceiveAssetRequest**](../Model/AlgorandBlockchainReceiveAssetRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algorandBlockchainTransfer()`

```php
api()->algorand()->algorandBlockchainTransfer(
    ?\Tatum\Model\AlgorandBlockchainTransferRequest $algorand_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Send Algos to an Algorand account

<p><b>2 credits per API call</b></p> <p>Send Algos from one Algorand address to the other one.</p> <p><b>Signing a transaction</b></p> <p>When sending Algos, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$algorand_blockchain_transfer_request = new \Tatum\Model\AlgorandBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandBlockchainTransfer($algorand_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algorandBlockchainTransfer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algorandBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$algorand_blockchain_transfer_request** | [**\Tatum\Model\AlgorandBlockchainTransferRequest**](../Model/AlgorandBlockchainTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algorandGenerateAddress()`

```php
api()->algorand()->algorandGenerateAddress(
    ?string $priv
): \Tatum\Model\AlgorandGenerateAddress200Response
```

Generate Algorand account address from private key

<h4>1 credit per API call.</h4><br/> <p>Generate Algorand account deposit address from private key.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// private key of wallet.
$priv = 'NBYMCVEEDFYV3TPWVRE6APE7PKHUJD4XAKXCKNCLKGUXOC3LFNJGZQCJCRA53HB7ZAHF6NFJH2QIVQ5USQNWG35QCJLD4KZ5IWMB24Q';

try {
    /** @var \Tatum\Model\AlgorandGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandGenerateAddress($priv);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algorandGenerateAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algorandGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv** | **string**| private key of wallet. |

### Return type

[**\Tatum\Model\AlgorandGenerateAddress200Response**](../Model/AlgorandGenerateAddress200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algorandGenerateWallet()`

```php
api()->algorand()->algorandGenerateWallet(
    ?string $mnemonic
): \Tatum\Model\AlgoWallet
```

Generate Algorand wallet

<h4>1 credit per API call.</h4><br/><p>Tatum supports Algorand wallets.</p>

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
    /** @var \Tatum\Model\AlgoWallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algorandGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algorandGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\AlgoWallet**](../Model/AlgoWallet.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algorandGetBalance()`

```php
api()->algorand()->algorandGetBalance(
    ?string $address
): \Tatum\Model\AlgorandGetBalance200Response
```

Get Algorand Account balance

<h4>1 credit per API call.</h4><br/> <p>Get Algorand account balance in ALGO.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = 'TMETT6BXL3QUH7AH5TS6IONU7LVTLKIGG54CFCNPMQXWGRIZFIESZBYWP4';

try {
    /** @var \Tatum\Model\AlgorandGetBalance200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandGetBalance($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algorandGetBalance(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algorandGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\AlgorandGetBalance200Response**](../Model/AlgorandGetBalance200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algorandGetBlock()`

```php
api()->algorand()->algorandGetBlock(
    ?float $round_number
): \Tatum\Model\AlgoBlock
```

Get Algorand block by block round number

<h4>1 credit per API call.</h4><br/><p>Get Algorand block by block round number.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block round number
$round_number = 16775567;

try {
    /** @var \Tatum\Model\AlgoBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandGetBlock($round_number);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algorandGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algorandGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$round_number** | **float**| Block round number |

### Return type

[**\Tatum\Model\AlgoBlock**](../Model/AlgoBlock.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algorandGetCurrentBlock()`

```php
api()->algorand()->algorandGetCurrentBlock(
): float
```

Get current block number

<h4>1 credit per API call.</h4><br/><p>Get Algorand current block number. This is the number of the latest block in the blockchain.</p>

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
        ->algorand()
        ->algorandGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algorandGetCurrentBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algorandGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algorandGetPayTransactionsByFromTo()`

```php
api()->algorand()->algorandGetPayTransactionsByFromTo(
    ?string $from, 
    ?string $to, 
    ?string $limit, 
    ?string $next
): \Tatum\Model\AlgoTxsWithPagination
```

Get Algorand Transactions between from and to

<p><b>1 credit per API call</b></p> <p><b>This endpoint is deprecated.</b></p><br/> <p>Get Algorand transaction by specified period of time.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Start timestamp in specified period of time
$from = 2021-05-01T20:44:39Z;

// End timestamp in specified period of time
$to = 2021-06-01T20:44:39Z;

// page size for pagination
$limit = 5;

// Algorand Next Token for getting the next page results
$next = 'ywAAAAAAAAAAAAAA';

try {
    /** @var \Tatum\Model\AlgoTxsWithPagination $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandGetPayTransactionsByFromTo($from, $to, $limit, $next);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algorandGetPayTransactionsByFromTo(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algorandGetPayTransactionsByFromTo(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$from** | **string**| Start timestamp in specified period of time |
 **$to** | **string**| End timestamp in specified period of time |
 **$limit** | **string**| page size for pagination | [optional]
 **$next** | **string**| Algorand Next Token for getting the next page results | [optional]

### Return type

[**\Tatum\Model\AlgoTxsWithPagination**](../Model/AlgoTxsWithPagination.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `algorandGetTransaction()`

```php
api()->algorand()->algorandGetTransaction(
    ?string $txid
): \Tatum\Model\AlgoTx
```

Get Algorand Transaction

<h4>1 credit per API call.</h4><br/><p>Get Algorand transaction by transaction id.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction id
$txid = 'LXEBXIBDAIF72NRI76SU252QSOGFCKEHTG7AI4P6W25V35PETU3Q';

try {
    /** @var \Tatum\Model\AlgoTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->algorandGetTransaction($txid);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling algorand()->algorandGetTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling algorand()->algorandGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$txid** | **string**| Transaction id |

### Return type

[**\Tatum\Model\AlgoTx**](../Model/AlgoTx.md)

[[Back to top]](#) | [[Back to Index]](../index.md)
