# Tatum/Api/BNBSmartChainApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bscBlockchainSmartContractInvocation()**](#bscblockchainsmartcontractinvocation) | **POST** /v3/bsc/smartcontract | Invoke a method in a smart contract on BNB Smart Chain
[**bscBlockchainTransfer()**](#bscblockchaintransfer) | **POST** /v3/bsc/transaction | Send BSC / BEP20 from account to account
[**bscBroadcast()**](#bscbroadcast) | **POST** /v3/bsc/broadcast | Broadcast signed BSC transaction
[**bscGenerateAddress()**](#bscgenerateaddress) | **GET** /v3/bsc/address/{xpub}/{index} | Generate BSC account address from Extended public key
[**bscGenerateAddressPrivateKey()**](#bscgenerateaddressprivatekey) | **POST** /v3/bsc/wallet/priv | Generate BSC private key
[**bscGenerateWallet()**](#bscgeneratewallet) | **GET** /v3/bsc/wallet | Generate BSC wallet
[**bscGetBalance()**](#bscgetbalance) | **GET** /v3/bsc/account/balance/{address} | Get BSC Account balance
[**bscGetBlock()**](#bscgetblock) | **GET** /v3/bsc/block/{hash} | Get BSC block by hash
[**bscGetCurrentBlock()**](#bscgetcurrentblock) | **GET** /v3/bsc/block/current | Get current block number
[**bscGetTransaction()**](#bscgettransaction) | **GET** /v3/bsc/transaction/{hash} | Get BSC Transaction
[**bscGetTransactionCount()**](#bscgettransactioncount) | **GET** /v3/bsc/transaction/count/{address} | Get count of outgoing BSC transactions
[**bscWeb3Driver()**](#bscweb3driver) | **POST** /v3/bsc/web3/{xApiKey} | Web3 HTTP driver


## `bscBlockchainSmartContractInvocation()`

```php
api()->bNBSmartChain()->bscBlockchainSmartContractInvocation(
    ?\Tatum\Model\BscBlockchainSmartContractInvocationRequest $bsc_blockchain_smart_contract_invocation_request
): \Tatum\Model\EthBlockchainSmartContractInvocation200Response
```

Invoke a method in a smart contract on BNB Smart Chain

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on BNB Smart Chain.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul>         <p><b>Troubleshooting a failed transaction</b><br/> Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).<br/>However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p> <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p> <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p> <p><b>Signing a transaction</b><br/> When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$bsc_blockchain_smart_contract_invocation_request = new \Tatum\Model\BscBlockchainSmartContractInvocationRequest();

try {
    /** @var \Tatum\Model\EthBlockchainSmartContractInvocation200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBSmartChain()
        ->bscBlockchainSmartContractInvocation($bsc_blockchain_smart_contract_invocation_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscBlockchainSmartContractInvocation(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscBlockchainSmartContractInvocation(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bsc_blockchain_smart_contract_invocation_request** | [**\Tatum\Model\BscBlockchainSmartContractInvocationRequest**](../Model/BscBlockchainSmartContractInvocationRequest.md)|  |

### Return type

[**\Tatum\Model\EthBlockchainSmartContractInvocation200Response**](../Model/EthBlockchainSmartContractInvocation200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscBlockchainTransfer()`

```php
api()->bNBSmartChain()->bscBlockchainTransfer(
    ?\Tatum\Model\BscBlockchainTransferRequest $bsc_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Send BSC / BEP20 from account to account

<p><b>2 credits per API call</b></p> <p>Send BNB or Tatum supported BEP20 token from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending BNB, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$bsc_blockchain_transfer_request = new \Tatum\Model\BscBlockchainTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBSmartChain()
        ->bscBlockchainTransfer($bsc_blockchain_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscBlockchainTransfer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bsc_blockchain_transfer_request** | [**\Tatum\Model\BscBlockchainTransferRequest**](../Model/BscBlockchainTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscBroadcast()`

```php
api()->bNBSmartChain()->bscBroadcast(
    ?\Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

Broadcast signed BSC transaction

<p><b>2 credits per API call</b></p> <p>Broadcast signed transaction to BSC blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

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
        ->bNBSmartChain()
        ->bscBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscBroadcast(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscGenerateAddress()`

```php
api()->bNBSmartChain()->bscGenerateAddress(
    ?string $xpub, 
    ?float $index
): \Tatum\Model\GeneratedAddressBsc
```

Generate BSC account address from Extended public key

<p><b>1 credit per API call</b></p> <p>Generate BSC account deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31.</p>

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
    /** @var \Tatum\Model\GeneratedAddressBsc $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBSmartChain()
        ->bscGenerateAddress($xpub, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscGenerateAddress(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\GeneratedAddressBsc**](../Model/GeneratedAddressBsc.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscGenerateAddressPrivateKey()`

```php
api()->bNBSmartChain()->bscGenerateAddressPrivateKey(
    ?\Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

Generate BSC private key

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
        ->bNBSmartChain()
        ->bscGenerateAddressPrivateKey($priv_key_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md)|  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscGenerateWallet()`

```php
api()->bNBSmartChain()->bscGenerateWallet(
    ?string $mnemonic
): \Tatum\Model\Wallet
```

Generate BSC wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for BSC wallet with derivation path m'/44'/60'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible BSC wallet.</p>

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
        ->bNBSmartChain()
        ->bscGenerateWallet($mnemonic);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscGetBalance()`

```php
api()->bNBSmartChain()->bscGetBalance(
    ?string $address
): \Tatum\Model\BscBalance
```

Get BSC Account balance

<p><b>1 credit per API call</b></p> <p>Get BSC account balance in BNB. This method does not prints any balance of the BEP20 or BEP721 tokens on the account.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Account address you want to get balance of
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

try {
    /** @var \Tatum\Model\BscBalance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBSmartChain()
        ->bscGetBalance($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscGetBalance(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\BscBalance**](../Model/BscBalance.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscGetBlock()`

```php
api()->bNBSmartChain()->bscGetBlock(
    ?string $hash
): \Tatum\Model\EthBlock
```

Get BSC block by hash

<p><b>1 credit per API call</b></p> <p>Get BSC block by block hash or block number.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Block hash or block number
$hash = 6470657;

try {
    /** @var \Tatum\Model\EthBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBSmartChain()
        ->bscGetBlock($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscGetBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or block number |

### Return type

[**\Tatum\Model\EthBlock**](../Model/EthBlock.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscGetCurrentBlock()`

```php
api()->bNBSmartChain()->bscGetCurrentBlock(
): float
```

Get current block number

<p><b>1 credit per API call</b></p> <p>Get BSC current block number. This is the number of the latest block in the blockchain.</p>

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
        ->bNBSmartChain()
        ->bscGetCurrentBlock();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscGetCurrentBlock(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscGetTransaction()`

```php
api()->bNBSmartChain()->bscGetTransaction(
    ?string $hash
): \Tatum\Model\BscTx
```

Get BSC Transaction

<p><b>2 credits per API call</b></p> <p>Get BSC transaction by transaction hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transaction hash
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

try {
    /** @var \Tatum\Model\BscTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBSmartChain()
        ->bscGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscGetTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\BscTx**](../Model/BscTx.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscGetTransactionCount()`

```php
api()->bNBSmartChain()->bscGetTransactionCount(
    ?string $address
): float
```

Get count of outgoing BSC transactions

<p><b>1 credit per API call</b></p> <p>Get a number of outgoing BSC transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// address
$address = '0xdac17f958d2ee523a2206206994597c13d831ec7';

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBSmartChain()
        ->bscGetTransactionCount($address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscGetTransactionCount(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscGetTransactionCount(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| address |

### Return type

**float**

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bscWeb3Driver()`

```php
api()->bNBSmartChain()->bscWeb3Driver(
    ?string $x_api_key, 
    ?object $body
): object
```

Web3 HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based web3 driver to connect directly to the BSC node provided by Tatum. To learn more about BSC Web3, visit the <a href="https://bsc.org/en/developers/" target="_blank">BSC developer's guide.</a></p>

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

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->bNBSmartChain()
        ->bscWeb3Driver($x_api_key, $body);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bNBSmartChain()->bscWeb3Driver(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bNBSmartChain()->bscWeb3Driver(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |
 **$body** | **object**|  |

### Return type

**object**

[[Back to top]](#) | [[Back to Index]](../index.md)
