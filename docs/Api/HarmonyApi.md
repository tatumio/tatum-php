# Tatum/Api/HarmonyApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**oneBlockchainSmartContractInvocation()**](#oneBlockchainSmartContractInvocation) | **POST** /v3/one/smartcontract | Invoke a method in a smart contract on Harmony
[**oneBlockchainTransfer()**](#oneBlockchainTransfer) | **POST** /v3/one/transaction | Send ONE / HRM20 from account to account
[**oneBroadcast()**](#oneBroadcast) | **POST** /v3/one/broadcast | Broadcast signed ONE transaction
[**oneFormatAddress()**](#oneFormatAddress) | **GET** /v3/one/address/format/{address} | Transform HEX address to Bech32 ONE address format
[**oneGenerateAddress()**](#oneGenerateAddress) | **GET** /v3/one/address/{xpub}/{index} | Generate ONE account address from Extended public key
[**oneGenerateAddressPrivateKey()**](#oneGenerateAddressPrivateKey) | **POST** /v3/one/wallet/priv | Generate ONE private key
[**oneGenerateWallet()**](#oneGenerateWallet) | **GET** /v3/one/wallet | Generate ONE wallet
[**oneGetBalance()**](#oneGetBalance) | **GET** /v3/one/account/balance/{address} | Get ONE Account balance
[**oneGetBlock()**](#oneGetBlock) | **GET** /v3/one/block/{hash} | Get ONE block by hash
[**oneGetCurrentBlock()**](#oneGetCurrentBlock) | **GET** /v3/one/block/current | Get current block number
[**oneGetTransaction()**](#oneGetTransaction) | **GET** /v3/one/transaction/{hash} | Get ONE Transaction
[**oneGetTransactionCount()**](#oneGetTransactionCount) | **GET** /v3/one/transaction/count/{address} | Get count of outgoing ONE transactions
[**oneWeb3Driver()**](#oneWeb3Driver) | **POST** /v3/one/web3/{xApiKey} | Web3 HTTP driver


## `oneBlockchainSmartContractInvocation()`

```php
api()->harmony()->oneBlockchainSmartContractInvocation(
    ?\Tatum\Model\OneBlockchainSmartContractInvocationRequest $one_blockchain_smart_contract_invocation_request, 
    ?float $shard_id
): \Tatum\Model\EthBlockchainSmartContractInvocation200Response
```

Invoke a method in a smart contract on Harmony

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on Harmony.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Signing a transaction</b></p> <p>When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$one_blockchain_smart_contract_invocation_request = new \Tatum\Model\OneBlockchainSmartContractInvocationRequest();

// Shard to read data from
$shard_id = 0;

try {
    /** @var \Tatum\Model\EthBlockchainSmartContractInvocation200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneBlockchainSmartContractInvocation($one_blockchain_smart_contract_invocation_request, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneBlockchainSmartContractInvocation(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneBlockchainSmartContractInvocation(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$one_blockchain_smart_contract_invocation_request** | [**\Tatum\Model\OneBlockchainSmartContractInvocationRequest**](../Model/OneBlockchainSmartContractInvocationRequest.md)|  |
 **$shard_id** | **float**| Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\EthBlockchainSmartContractInvocation200Response**](../Model/EthBlockchainSmartContractInvocation200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneBlockchainTransfer()`

```php
api()->harmony()->oneBlockchainTransfer(
    ?\Tatum\Model\OneBlockchainTransferRequest $one_blockchain_transfer_request, 
    ?float $shard_id
): \Tatum\Model\BtcTransferBlockchain200Response
```

Send ONE / HRM20 from account to account

<p><b>2 credits per API call</b></p> <p>Send ONE or Tatum supported HRM20 token from account to account.<br/><br/> Default shard 0 is used for sender and recipient.<br/> <p><b>Signing a transaction</b></p> <p>When sending ONE, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p> Alternatively, using the Tatum client library for supported languages.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$one_blockchain_transfer_request = new \Tatum\Model\OneBlockchainTransferRequest();

// Shard to read data from
$shard_id = 0;

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneBlockchainTransfer($one_blockchain_transfer_request, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneBlockchainTransfer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$one_blockchain_transfer_request** | [**\Tatum\Model\OneBlockchainTransferRequest**](../Model/OneBlockchainTransferRequest.md)|  |
 **$shard_id** | **float**| Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneBroadcast()`

```php
api()->harmony()->oneBroadcast(
    ?\Tatum\Model\BroadcastKMS $broadcast_kms, 
    ?float $shard_id
): \Tatum\Model\TransactionHash
```

Broadcast signed ONE transaction

<p><b>2 credits per API call</b></p> <p>Broadcast signed transaction to ONE blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$broadcast_kms = new \Tatum\Model\BroadcastKMS();

// Shard to read data from
$shard_id = 0;

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneBroadcast($broadcast_kms, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneBroadcast(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |
 **$shard_id** | **float**| Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneFormatAddress()`

```php
api()->harmony()->oneFormatAddress(
    ?string $address
): \Tatum\Model\OneFormatAddress200Response
```

Transform HEX address to Bech32 ONE address format

<p><b>1 credit per API call</b></p> <p>Transform HEX address to Bech32 format with one prefix.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Address in HEX (ETH compatible) format.
$address = '0xa7673161CbfE0116A4De9E341f8465940c2211d4';

try {
    /** @var \Tatum\Model\OneFormatAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneFormatAddress($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneFormatAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneFormatAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Address in HEX (ETH compatible) format. |

### Return type

[**\Tatum\Model\OneFormatAddress200Response**](../Model/OneFormatAddress200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneGenerateAddress()`

```php
api()->harmony()->oneGenerateAddress(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\OneGenerateAddress200Response
```

Generate ONE account address from Extended public key

<p><b>1 credit per API call</b></p> <p>Generate ONE account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

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
$index = 1;

try {
    /** @var \Tatum\Model\OneGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneGenerateAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\OneGenerateAddress200Response**](../Model/OneGenerateAddress200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneGenerateAddressPrivateKey()`

```php
api()->harmony()->oneGenerateAddressPrivateKey(
    ?\Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

Generate ONE private key

<p><b>1 credit per API call</b></p> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

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
        ->harmony()
        ->oneGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md)|  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneGenerateWallet()`

```php
api()->harmony()->oneGenerateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```

Generate ONE wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for ONE wallet with derivation path m'/44'/60'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible ONE wallet.</p>

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
        ->harmony()
        ->oneGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneGetBalance()`

```php
api()->harmony()->oneGetBalance(
    ?string $address, 
    ?float $shard_id
): \Tatum\Model\OneGetBalance200Response
```

Get ONE Account balance

<p><b>1 credit per API call</b></p> <p>Get ONE account balance in ONE. This method does not prints any balance of the HRM20 or HRM721 tokens on the account.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

// Shard to read data from
$shard_id = 0;

try {
    /** @var \Tatum\Model\OneGetBalance200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGetBalance($address, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneGetBalance(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |
 **$shard_id** | **float**| Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\OneGetBalance200Response**](../Model/OneGetBalance200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneGetBlock()`

```php
api()->harmony()->oneGetBlock(
    ?string $hash, 
    ?float $shard_id
): \Tatum\Model\EthBlock
```

Get ONE block by hash

<p><b>1 credit per API call</b></p> <p>Get ONE block by block hash or block number.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block hash or block number
$hash = 6470657;

// Shard to read data from
$shard_id = 0;

try {
    /** @var \Tatum\Model\EthBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGetBlock($hash, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or block number |
 **$shard_id** | **float**| Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\EthBlock**](../Model/EthBlock.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneGetCurrentBlock()`

```php
api()->harmony()->oneGetCurrentBlock(
): \Tatum\Model\OneGetCurrentBlock200ResponseInner[]
```

Get current block number

<p><b>1 credit per API call</b></p> <p>Get ONE current block number. This is the number of the latest block in the blockchain.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var \Tatum\Model\OneGetCurrentBlock200ResponseInner[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneGetCurrentBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\OneGetCurrentBlock200ResponseInner[]**](../Model/OneGetCurrentBlock200ResponseInner.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneGetTransaction()`

```php
api()->harmony()->oneGetTransaction(
    ?string $hash, 
    ?float $shard_id
): \Tatum\Model\OneTx
```

Get ONE Transaction

<p><b>2 credits per API call</b></p> <p>Get ONE transaction by transaction hash.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

// Shard to read data from
$shard_id = 0;

try {
    /** @var \Tatum\Model\OneTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGetTransaction($hash, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneGetTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |
 **$shard_id** | **float**| Shard to read data from | [optional] [default to 0]

### Return type

[**\Tatum\Model\OneTx**](../Model/OneTx.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneGetTransactionCount()`

```php
api()->harmony()->oneGetTransactionCount(
    ?string $address, 
    ?float $shard_id
): float
```

Get count of outgoing ONE transactions

<p><b>1 credit per API call</b></p> <p>Get a number of outgoing ONE transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// address
$address = '0xdac17f958d2ee523a2206206994597c13d831ec7';

// Shard to read data from
$shard_id = 0;

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGetTransactionCount($address, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneGetTransactionCount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneGetTransactionCount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| address |
 **$shard_id** | **float**| Shard to read data from | [optional] [default to 0]

### Return type

**float**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `oneWeb3Driver()`

```php
api()->harmony()->oneWeb3Driver(
    ?string $x_api_key, 
    ?object $body, 
    ?float $shard_id
): object
```

Web3 HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based web3 driver to connect directly to the ONE node provided by Tatum. To learn more about ONE Web3, visit the <a href="https://docs.harmony.one/home/developers/api" target="_blank">ONE developer's guide</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Tatum X-API-Key used for authorization.
$x_api_key = 'asdlkfjnqunalkwjfnq2oi303294857k';

$body = array('key' => new \stdClass);

// Shard to read data from
$shard_id = 0;

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneWeb3Driver($x_api_key, $body, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling harmony()->oneWeb3Driver(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling harmony()->oneWeb3Driver(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |
 **$body** | **object**|  |
 **$shard_id** | **float**| Shard to read data from | [optional] [default to 0]

### Return type

**object**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)
