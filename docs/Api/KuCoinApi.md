# Tatum/Api/KuCoinApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**kcsBlockchainSmartContractInvocation()**](#kcsblockchainsmartcontractinvocation) | **POST** /v3/kcs/smartcontract | Invoke a method in a smart contract on KuCoin Community Chain
[**kcsBlockchainTransfer()**](#kcsblockchaintransfer) | **POST** /v3/kcs/transaction | Send KCS from account to account
[**kcsBroadcast()**](#kcsbroadcast) | **POST** /v3/kcs/broadcast | Broadcast signed Kcs transaction
[**kcsGenerateAddress()**](#kcsgenerateaddress) | **GET** /v3/kcs/address/{xpub}/{index} | Generate Kcs account address from Extended public key
[**kcsGenerateAddressPrivateKey()**](#kcsgenerateaddressprivatekey) | **POST** /v3/kcs/wallet/priv | Generate Kcs private key
[**kcsGenerateWallet()**](#kcsgeneratewallet) | **GET** /v3/kcs/wallet | Generate Kcs wallet
[**kcsGetBalance()**](#kcsgetbalance) | **GET** /v3/kcs/account/balance/{address} | Get Kcs Account balance
[**kcsGetBlock()**](#kcsgetblock) | **GET** /v3/kcs/block/{hash} | Get Kcs block by hash
[**kcsGetCurrentBlock()**](#kcsgetcurrentblock) | **GET** /v3/kcs/block/current | Get current block number
[**kcsGetTransaction()**](#kcsgettransaction) | **GET** /v3/kcs/transaction/{hash} | Get Kcs Transaction
[**kcsGetTransactionCount()**](#kcsgettransactioncount) | **GET** /v3/kcs/transaction/count/{address} | Get count of outgoing Kcs transactions
[**kcsWeb3Driver()**](#kcsweb3driver) | **POST** /v3/kcs/web3/{xApiKey} | Web3 HTTP driver


## `kcsBlockchainSmartContractInvocation()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsBlockchainSmartContractInvocation(
    \Tatum\Model\KcsBlockchainSmartContractInvocationRequest $kcs_blockchain_smart_contract_invocation_request
): \Tatum\Model\EthBlockchainSmartContractInvocation200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$kcs_blockchain_smart_contract_invocation_request** | [**\Tatum\Model\KcsBlockchainSmartContractInvocationRequest**](../Model/KcsBlockchainSmartContractInvocationRequest.md)|  |

### Return type

[**\Tatum\Model\EthBlockchainSmartContractInvocation200Response**](../Model/EthBlockchainSmartContractInvocation200Response.md)

### Description

Invoke a method in a smart contract on KuCoin Community Chain

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on KuCoin Community Chain.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Troubleshooting a failed transaction</b><br/> Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).<br/>However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p> <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p> <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p> <p><b>Signing a transaction</b><br/> When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$kcs_blockchain_smart_contract_invocation_request = new \Tatum\Model\KcsBlockchainSmartContractInvocationRequest();

try {
    /** @var \Tatum\Model\EthBlockchainSmartContractInvocation200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsBlockchainSmartContractInvocation($kcs_blockchain_smart_contract_invocation_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsBlockchainSmartContractInvocation(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsBlockchainSmartContractInvocation(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsBlockchainTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsBlockchainTransfer(
    \Tatum\Model\KcsBlockchainTransferRequest $kcs_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$kcs_blockchain_transfer_request** | [**\Tatum\Model\KcsBlockchainTransferRequest**](../Model/KcsBlockchainTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send KCS from account to account

<p><b>2 credits per API call</b></p> <p>Send KCS from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending KCS, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p> Alternatively, using the Tatum client library for supported languages.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$kcs_blockchain_transfer_request = new \Tatum\Model\KcsBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsBlockchainTransfer($kcs_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsBlockchainTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsBroadcast(
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

Broadcast signed Kcs transaction

<p><b>2 credits per API call</b></p> <p>Broadcast signed transaction to Kcs blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

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
        ->kuCoin()
        ->kcsBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsBroadcast(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGenerateAddress(
    string $xpub, 
    float $index
): \Tatum\Model\KcsGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\KcsGenerateAddress200Response**](../Model/KcsGenerateAddress200Response.md)

### Description

Generate Kcs account address from Extended public key

<p><b>1 credit per API call</b></p> <p>Generate Kcs account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Extended public key of wallet.
$xpub = 'xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid';

// Derivation index of desired address to be generated.
$index = 1;

try {
    /** @var \Tatum\Model\KcsGenerateAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsGenerateAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGenerateAddressPrivateKey(
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

Generate Kcs private key

<p><b>1 credit per API call</b></p> <p>Generate private key of address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^31 private keys starting from index 0 until 2^31.</p>

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
        ->kuCoin()
        ->kcsGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

### Description

Generate Kcs wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Kcs wallet with derivation path m'/44'/966'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Kcs wallet.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Mnemonic to use for generation of extended public and private keys.
$mnemonic = 'mnemonic_example';

try {
    /** @var \Tatum\Model\Wallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsGenerateWallet(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetBalance(
    string $address
): \Tatum\Model\KcsGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\KcsGetBalance200Response**](../Model/KcsGetBalance200Response.md)

### Description

Get Kcs Account balance

<p><b>1 credit per API call</b></p> <p>Get Kcs account balance in KCS. This method does not prints any balance of the ERC20 or ERC721 tokens on the account.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

try {
    /** @var \Tatum\Model\KcsGetBalance200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsGetBalance($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsGetBalance(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetBlock(
    string $hash
): \Tatum\Model\EthBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or block number |

### Return type

[**\Tatum\Model\EthBlock**](../Model/EthBlock.md)

### Description

Get Kcs block by hash

<p><b>1 credit per API call</b></p> <p>Get Kcs block by block hash or block number.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Block hash or block number
$hash = 6470657;

try {
    /** @var \Tatum\Model\EthBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsGetBlock(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<p><b>1 credit per API call</b></p> <p>Get Kcs current block number. This is the number of the latest block in the blockchain.</p>

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
        ->kuCoin()
        ->kcsGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsGetCurrentBlock(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetTransaction(
    string $hash
): \Tatum\Model\KcsTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\KcsTx**](../Model/KcsTx.md)

### Description

Get Kcs Transaction

<p><b>2 credits per API call</b></p> <p>Get Kcs transaction by transaction hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transaction hash
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

try {
    /** @var \Tatum\Model\KcsTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsGetTransaction(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsGetTransactionCount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsGetTransactionCount(
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

Get count of outgoing Kcs transactions

<p><b>1 credit per API call</b></p> <p>Get a number of outgoing Kcs transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// address
$address = '0xdac17f958d2ee523a2206206994597c13d831ec7';

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsGetTransactionCount($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsGetTransactionCount(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsGetTransactionCount(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsWeb3Driver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->kuCoin()->kcsWeb3Driver(
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

Web3 HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based web3 driver to connect directly to the Kcs node provided by Tatum. To learn more about Kcs Web3, visit the <a href="https://docs.kcc.io/" target="_blank">Kcs developer's guide</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Tatum X-API-Key used for authorization.
$x_api_key = 'asdlkfjnqunalkwjfnq2oi303294857k';

$body = array('key' => new \stdClass);

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->kuCoin()
        ->kcsWeb3Driver($x_api_key, $body);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling kuCoin()->kcsWeb3Driver(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling kuCoin()->kcsWeb3Driver(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
