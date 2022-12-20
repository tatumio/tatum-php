# Tatum/Api/FlowApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**flowAddPubKeyToAddress()**](#flowaddpubkeytoaddress) | **PUT** /v3/flow/account | Add public key to Flow address
[**flowCreateAddressFromPubKey()**](#flowcreateaddressfrompubkey) | **POST** /v3/flow/account | Create Flow address from public key
[**flowGenerateAddress()**](#flowgenerateaddress) | **GET** /v3/flow/address/{xpub}/{index} | Generate Flow address from Extended public key
[**flowGeneratePubKey()**](#flowgeneratepubkey) | **GET** /v3/flow/pubkey/{xpub}/{index} | Generate Flow public key from Extended public key
[**flowGeneratePubKeyPrivateKey()**](#flowgeneratepubkeyprivatekey) | **POST** /v3/flow/wallet/priv | Generate Flow private key
[**flowGenerateWallet()**](#flowgeneratewallet) | **GET** /v3/flow/wallet | Generate Flow wallet
[**flowGetAccount()**](#flowgetaccount) | **GET** /v3/flow/account/{address} | Get the balance of a Flow account
[**flowGetBlock()**](#flowgetblock) | **GET** /v3/flow/block/{hash} | Get Flow Block by hash or height
[**flowGetBlockChainInfo()**](#flowgetblockchaininfo) | **GET** /v3/flow/block/current | Get Flow current block number
[**flowGetBlockEvents()**](#flowgetblockevents) | **GET** /v3/flow/block/events | Get Flow events from blocks
[**flowGetRawTransaction()**](#flowgetrawtransaction) | **GET** /v3/flow/transaction/{hash} | Get Flow Transaction by hash
[**flowTransferBlockchain()**](#flowtransferblockchain) | **POST** /v3/flow/transaction | Send Flow to blockchain addresses
[**flowTransferCustomBlockchain()**](#flowtransfercustomblockchain) | **POST** /v3/flow/transaction/custom | Send arbitrary transaction to blockchain


## `flowAddPubKeyToAddress()`

```php
api()->flow()->flowAddPubKeyToAddress(
    ?\Tatum\Model\FlowAddPubKeyToAddressRequest $flow_add_pub_key_to_address_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Add public key to Flow address

<h4>100 credits per API call. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.</h4><br/> <p>Add public key to existing Flow blockchain addresses. Private key for that public key can be used for signing transaction. There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul><br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$flow_add_pub_key_to_address_request = new \Tatum\Model\FlowAddPubKeyToAddressRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowAddPubKeyToAddress($flow_add_pub_key_to_address_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowAddPubKeyToAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowAddPubKeyToAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_add_pub_key_to_address_request** | [**\Tatum\Model\FlowAddPubKeyToAddressRequest**](../Model/FlowAddPubKeyToAddressRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowCreateAddressFromPubKey()`

```php
api()->flow()->flowCreateAddressFromPubKey(
    ?\Tatum\Model\FlowCreateAddressFromPubKeyRequest $flow_create_address_from_pub_key_request
): \Tatum\Model\FlowCreateAddressFromPubKey200Response
```

Create Flow address from public key

<h4>100 credits per API call. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.</h4><br/> <p>Create Flow blockchain addresses from public key. This will generate address on the blockchain with public key. Private key for that public key can be used for signing transaction. There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul><br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$flow_create_address_from_pub_key_request = new \Tatum\Model\FlowCreateAddressFromPubKeyRequest();

try {
    /** @var \Tatum\Model\FlowCreateAddressFromPubKey200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowCreateAddressFromPubKey($flow_create_address_from_pub_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowCreateAddressFromPubKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowCreateAddressFromPubKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_create_address_from_pub_key_request** | [**\Tatum\Model\FlowCreateAddressFromPubKeyRequest**](../Model/FlowCreateAddressFromPubKeyRequest.md)|  |

### Return type

[**\Tatum\Model\FlowCreateAddressFromPubKey200Response**](../Model/FlowCreateAddressFromPubKey200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowGenerateAddress()`

```php
api()->flow()->flowGenerateAddress(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\FlowGenerateAddress200Response
```

Generate Flow address from Extended public key

<h4>1 credit for GET operation + 3000 credits per address.</h4><br/> <p>Generate Flow address from Extended public key. This operation internally creates public key and assings it to the newly created address on the blockchain. There is minimal amount, which must be sent to the FLOW address during creation - 0.001 FLOW, which will be used from Tatum service account.<br/> <b>This operation is allowed on any Testnet plan and only on Paid Mainnet plans.</b> Public key is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

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
    /** @var \Tatum\Model\FlowGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowGenerateAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\FlowGenerateAddress200Response**](../Model/FlowGenerateAddress200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowGeneratePubKey()`

```php
api()->flow()->flowGeneratePubKey(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\FlowGeneratePubKey200Response
```

Generate Flow public key from Extended public key

<h4>1 credit per API call.</h4><br/> <p>Generate Flow public key from Extended public key. This key is added to the address on the blockchain and can control the funds there. Public key is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

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
    /** @var \Tatum\Model\FlowGeneratePubKey200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowGeneratePubKey($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowGeneratePubKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowGeneratePubKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\FlowGeneratePubKey200Response**](../Model/FlowGeneratePubKey200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowGeneratePubKeyPrivateKey()`

```php
api()->flow()->flowGeneratePubKeyPrivateKey(
    ?\Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

Generate Flow private key

<h4>2 credits per API call.</h4><br/> <p>Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

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
        ->flow()
        ->flowGeneratePubKeyPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowGeneratePubKeyPrivateKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowGeneratePubKeyPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md)|  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowGenerateWallet()`

```php
api()->flow()->flowGenerateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```

Generate Flow wallet

<h4>1 credit per API call.</h4><br/><p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Dogecoin wallet with derivation path m'/44'/3'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki">https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Dogecoin wallet.</p>

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
        ->flow()
        ->flowGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowGetAccount()`

```php
api()->flow()->flowGetAccount(
    ?string $address
): \Tatum\Model\FlowAccount
```

Get the balance of a Flow account

<h4>1 credit per API call.</h4><br/><p>Get Flow account details.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = '0x955cd3f17b2fd8ad';

try {
    /** @var \Tatum\Model\FlowAccount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowGetAccount($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowGetAccount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowGetAccount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\FlowAccount**](../Model/FlowAccount.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowGetBlock()`

```php
api()->flow()->flowGetBlock(
    ?string $hash
): \Tatum\Model\FlowBlock
```

Get Flow Block by hash or height

<h4>1 credit per API call.</h4><br/><p>Get Flow Block detail by block hash or height.</p>

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
    /** @var \Tatum\Model\FlowBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or height. |

### Return type

[**\Tatum\Model\FlowBlock**](../Model/FlowBlock.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowGetBlockChainInfo()`

```php
api()->flow()->flowGetBlockChainInfo(
): float
```

Get Flow current block number

<h4>1 credit per API call.</h4><br/><p>Get Flow current block number.</p>

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
        ->flow()
        ->flowGetBlockChainInfo();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowGetBlockChainInfo(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowGetBlockChainInfo(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowGetBlockEvents()`

```php
api()->flow()->flowGetBlockEvents(
    ?string $type, 
    ?float $from, 
    ?float $to
): \Tatum\Model\FlowEvent[]
```

Get Flow events from blocks

<h4>1 credit per API call.</h4><br/><p>Get Flow events from block.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Event type to search for
$type = A.7e60df042a9c0868.FlowToken.TokensWithdrawn;

// Block height to start searching
$from = 654321;

// Block height to end searching
$to = 654326;

try {
    /** @var \Tatum\Model\FlowEvent[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowGetBlockEvents($type, $from, $to);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowGetBlockEvents(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowGetBlockEvents(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$type** | **string**| Event type to search for |
 **$from** | **float**| Block height to start searching |
 **$to** | **float**| Block height to end searching |

### Return type

[**\Tatum\Model\FlowEvent[]**](../Model/FlowEvent.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowGetRawTransaction()`

```php
api()->flow()->flowGetRawTransaction(
    ?string $hash
): \Tatum\Model\FlowTx
```

Get Flow Transaction by hash

<h4>1 credit per API call.</h4><br/><p>Get Flow Transaction detail by transaction hash.</p>

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
    /** @var \Tatum\Model\FlowTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowGetRawTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowGetRawTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowGetRawTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\FlowTx**](../Model/FlowTx.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowTransferBlockchain()`

```php
api()->flow()->flowTransferBlockchain(
    ?\Tatum\Model\FlowTransferBlockchainRequest $flow_transfer_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Send Flow to blockchain addresses

<h4>100 credits per API call.</h4><br/> <p>Send Flow or FUSD to blockchain addresses. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.<br/> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul><br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$flow_transfer_blockchain_request = new \Tatum\Model\FlowTransferBlockchainRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowTransferBlockchain($flow_transfer_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowTransferBlockchain(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowTransferBlockchain(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_transfer_blockchain_request** | [**\Tatum\Model\FlowTransferBlockchainRequest**](../Model/FlowTransferBlockchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `flowTransferCustomBlockchain()`

```php
api()->flow()->flowTransferCustomBlockchain(
    ?\Tatum\Model\FlowTransferCustomBlockchainRequest $flow_transfer_custom_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Send arbitrary transaction to blockchain

<h4>100 credits per API call.</h4><br/> <p>Send arbitrary blockchain transaction to FLOW blockchain. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.<br/> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul><br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$flow_transfer_custom_blockchain_request = new \Tatum\Model\FlowTransferCustomBlockchainRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->flow()
        ->flowTransferCustomBlockchain($flow_transfer_custom_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling flow()->flowTransferCustomBlockchain(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling flow()->flowTransferCustomBlockchain(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_transfer_custom_blockchain_request** | [**\Tatum\Model\FlowTransferCustomBlockchainRequest**](../Model/FlowTransferCustomBlockchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)
