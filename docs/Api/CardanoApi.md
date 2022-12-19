# Tatum/Api/CardanoApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adaBroadcast()**](#adaBroadcast) | **POST** /v3/ada/broadcast | Broadcast signed Ada transaction
[**adaGenerateAddress()**](#adaGenerateAddress) | **GET** /v3/ada/address/{xpub}/{index} | Generate Ada deposit address from Extended public key
[**adaGenerateAddressPrivateKey()**](#adaGenerateAddressPrivateKey) | **POST** /v3/ada/wallet/priv | Generate Ada private key
[**adaGenerateWallet()**](#adaGenerateWallet) | **GET** /v3/ada/wallet | Generate Ada wallet
[**adaGetAccount()**](#adaGetAccount) | **GET** /v3/ada/account/{address} | Gets a Ada account by address
[**adaGetBlock()**](#adaGetBlock) | **GET** /v3/ada/block/{hash} | Get Block by hash or height
[**adaGetBlockChainInfo()**](#adaGetBlockChainInfo) | **GET** /v3/ada/info | Get Blockchain information
[**adaGetRawTransaction()**](#adaGetRawTransaction) | **GET** /v3/ada/transaction/{hash} | Get transaction by hash
[**adaGetTxByAddress()**](#adaGetTxByAddress) | **GET** /v3/ada/transaction/address/{address} | Get transactions by address
[**adaGetUTXOByAddress()**](#adaGetUTXOByAddress) | **GET** /v3/ada/{address}/utxos | Get UTXOs by address
[**adaTransferBlockchain()**](#adaTransferBlockchain) | **POST** /v3/ada/transaction | Send ADA to Cardano addresses


## `adaBroadcast()`

```php
api()->cardano()->adaBroadcast(
    ?\Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

Broadcast signed Ada transaction

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>2 credits per API call.</h4> <p>Broadcasts a signed transaction to the Ada blockchain. This method is used internally from Tatum KMS or Tatum Client Libraries. It is possible to create a custom signing mechanism and only use this method for broadcasting data to the blockchain.</p>

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
        ->cardano()
        ->adaBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaBroadcast(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaGenerateAddress()`

```php
api()->cardano()->adaGenerateAddress(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\AdaGenerateAddress200Response
```

Generate Ada deposit address from Extended public key

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>1 credit per API call.</h4> <p>Generates a Ada deposit address from an Extended public key. The deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Extended public key of a wallet.
$xpub = '30e96a57be6235c686da968c1860f69d1871a692b29626b7ebb923aff8c6731cb9fef3a26b7eba8a07653483d06427d0c07966c5f81c69a7925d714530bedb1ef9e9103547b54ad0954b3569785ca70e1fd08313f92a3a9d31efa216b2b9adac4678455e66c97b53cd589f9da70a14265cf15cd4c1e0ce914407008f4a65f316';

// Derivation index of the desired address to be generated.
$index = 0;

try {
    /** @var \Tatum\Model\AdaGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaGenerateAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of a wallet. |
 **$index** | **float**| Derivation index of the desired address to be generated. |

### Return type

[**\Tatum\Model\AdaGenerateAddress200Response**](../Model/AdaGenerateAddress200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaGenerateAddressPrivateKey()`

```php
api()->cardano()->adaGenerateAddressPrivateKey(
    ?\Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

Generate Ada private key

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>1 credit per API call.</h4> <p>Generates a private key for an address from a mnemonic for a given derivation path index. The private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

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
        ->cardano()
        ->adaGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md)|  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaGenerateWallet()`

```php
api()->cardano()->adaGenerateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```

Generate Ada wallet

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>1 credit per API call.</h4><p>Tatum supports BIP44 HD wallets. Because they can generate 2^31 addresses from 1 mnemonic phrase, they are very convenient and secure. A mnemonic phrase consists of 24 special words in a defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for ADA wallet with derivation path m/1852'/1815'/0'. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Ada wallet.</p>

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
        ->cardano()
        ->adaGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaGetAccount()`

```php
api()->cardano()->adaGetAccount(
    ?string $address
): array[]
```

Gets a Ada account by address

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>2 credits per API call.</h4> <p>Gets a Ada account by address.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Address
$address = 'Ae2tdPwUPEZMmrkRoduJW9w7wRvnTcdeMbw7yyyjwPqo6zuaeJaDEkHUJSz';

try {
    /** @var array[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGetAccount($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaGetAccount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaGetAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Address |

### Return type

**array[]**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaGetBlock()`

```php
api()->cardano()->adaGetBlock(
    ?string $hash
): \Tatum\Model\AdaBlock
```

Get Block by hash or height

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Gets Ada block detail by block hash or height.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block hash or height.
$hash = '00000000ca231a439a5c0a86a5a5dd6dc1918a8e897b96522fa9499288e70183';

try {
    /** @var \Tatum\Model\AdaBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or height. |

### Return type

[**\Tatum\Model\AdaBlock**](../Model/AdaBlock.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaGetBlockChainInfo()`

```php
api()->cardano()->adaGetBlockChainInfo(
): \Tatum\Model\AdaInfo
```

Get Blockchain information

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Gets Ada blockchain information. Obtains basic info like the testnet / mainnet version of the chain, the current block number and its hash.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var \Tatum\Model\AdaInfo $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGetBlockChainInfo();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaGetBlockChainInfo(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaGetBlockChainInfo(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\AdaInfo**](../Model/AdaInfo.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaGetRawTransaction()`

```php
api()->cardano()->adaGetRawTransaction(
    ?string $hash
): \Tatum\Model\AdaTx
```

Get transaction by hash

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Get Ada Transaction detail by transaction hash.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash
$hash = '1451692ebbfbea1a2d2ec6fe6782596b6aa2e46c0589d04c406f491b5b46bc6a';

try {
    /** @var \Tatum\Model\AdaTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGetRawTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaGetRawTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaGetRawTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\AdaTx**](../Model/AdaTx.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaGetTxByAddress()`

```php
api()->cardano()->adaGetTxByAddress(
    ?string $address, 
    ?float $page_size, 
    ?float $offset
): \Tatum\Model\AdaTx[]
```

Get transactions by address

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Gets a Ada transaction by address.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Address
$address = 'Ae2tdPwUPEZMmrkRoduJW9w7wRvnTcdeMbw7yyyjwPqo6zuaeJaDEkHUJSz';

// Max number of items per page is 50.
$page_size = 10;

// Offset to obtain the next page of data.
$offset = 0;

try {
    /** @var \Tatum\Model\AdaTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGetTxByAddress($address, $page_size, $offset);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaGetTxByAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaGetTxByAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Address |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain the next page of data. | [optional]

### Return type

[**\Tatum\Model\AdaTx[]**](../Model/AdaTx.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaGetUTXOByAddress()`

```php
api()->cardano()->adaGetUTXOByAddress(
    ?string $address
): \Tatum\Model\AdaUTXO[]
```

Get UTXOs by address

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Gets a Ada UTXOs by address.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Address
$address = 'Ae2tdPwUPEZMmrkRoduJW9w7wRvnTcdeMbw7yyyjwPqo6zuaeJaDEkHUJSz';

try {
    /** @var \Tatum\Model\AdaUTXO[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaGetUTXOByAddress($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaGetUTXOByAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaGetUTXOByAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Address |

### Return type

[**\Tatum\Model\AdaUTXO[]**](../Model/AdaUTXO.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `adaTransferBlockchain()`

```php
api()->cardano()->adaTransferBlockchain(
    ?\Tatum\Model\AdaTransferBlockchainRequest $ada_transfer_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Send ADA to Cardano addresses

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <p><b>2 credits per API call</b></p> <p>Send ADA to blockchain addresses.</p> <p>Cardano transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of ADA that remains at a Cardano address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.</p> <p>You can build an ADA transaction by one of the following methods:</p> <ul> <li><b>Sending ADA from blockchain addresses</b><br/>The assets are sent from a list of addresses. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. For easier control over the assets to be sent, we recommend that you use this method only if you have one address to send the assets from.<br/> To use this method, use the <code>AdaTransactionFromAddress</code> or <code>AdaTransactionFromAddressKMS</code> schema of the request body.</li> <li><b>Sending ADA from UTXOs</b><br/>The assets are sent from a list of UTXOs. Each UTXO is included in the transaction. Use this method if you want to manually calculate the amount to send.<br/> To use this method, use the <code>AdaTransactionFromUTXO</code> or <code>AdaTransactionFromUTXOKMS</code> schema of the request body.</li> </ul> <p>When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 ADA and T2 with 2 ADA. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 ADA to spend:<br/><code>1 ADA (from T1) + 2 ADA (from T2) = 3 ADA (to spend in total)</code></p> <p>You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.</p> <p><b>Paying the gas fee and receiving the change</b><br/> When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).</p> <p><b>Signing a transaction</b><br/> When sending ADA, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$ada_transfer_blockchain_request = new \Tatum\Model\AdaTransferBlockchainRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->cardano()
        ->adaTransferBlockchain($ada_transfer_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling cardano()->adaTransferBlockchain(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling cardano()->adaTransferBlockchain(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transfer_blockchain_request** | [**\Tatum\Model\AdaTransferBlockchainRequest**](../Model/AdaTransferBlockchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)
