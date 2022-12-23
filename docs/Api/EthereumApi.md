# Tatum/Api/EthereumApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ethBlockchainSmartContractInvocation()**](#ethblockchainsmartcontractinvocation) | **POST** /v3/ethereum/smartcontract | Invoke a method in a smart contract on Ethereum
[**ethBlockchainTransfer()**](#ethblockchaintransfer) | **POST** /v3/ethereum/transaction | Send Ethereum / ERC20 from account to account
[**ethBroadcast()**](#ethbroadcast) | **POST** /v3/ethereum/broadcast | Broadcast signed Ethereum transaction
[**ethGenerateAddress()**](#ethgenerateaddress) | **GET** /v3/ethereum/address/{xpub}/{index} | Generate Ethereum account address from Extended public key
[**ethGenerateAddressPrivateKey()**](#ethgenerateaddressprivatekey) | **POST** /v3/ethereum/wallet/priv | Generate Ethereum private key
[**ethGenerateWallet()**](#ethgeneratewallet) | **GET** /v3/ethereum/wallet | Generate Ethereum wallet
[**ethGetBalance()**](#ethgetbalance) | **GET** /v3/ethereum/account/balance/{address} | Get the ETH balance of an Ethereum account
[**ethGetBlock()**](#ethgetblock) | **GET** /v3/ethereum/block/{hash} | Get Ethereum block by hash
[**ethGetCurrentBlock()**](#ethgetcurrentblock) | **GET** /v3/ethereum/block/current | Get current block number
[**ethGetInternalTransactionByAddress()**](#ethgetinternaltransactionbyaddress) | **GET** /v3/ethereum/account/transaction/erc20/internal/{address} | Get Ethereum internal transactions by address
[**ethGetTransaction()**](#ethgettransaction) | **GET** /v3/ethereum/transaction/{hash} | Get Ethereum Transaction
[**ethGetTransactionByAddress()**](#ethgettransactionbyaddress) | **GET** /v3/ethereum/account/transaction/{address} | Get Ethereum transactions by address
[**ethGetTransactionCount()**](#ethgettransactioncount) | **GET** /v3/ethereum/transaction/count/{address} | Get count of outgoing Ethereum transactions
[**ethWeb3Driver()**](#ethweb3driver) | **POST** /v3/ethereum/web3/{xApiKey} | Web3 HTTP driver


## `ethBlockchainSmartContractInvocation()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethBlockchainSmartContractInvocation(
    \Tatum\Model\EthBlockchainSmartContractInvocationRequest $eth_blockchain_smart_contract_invocation_request, 
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthBlockchainSmartContractInvocation200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_blockchain_smart_contract_invocation_request** | [**\Tatum\Model\EthBlockchainSmartContractInvocationRequest**](../Model/EthBlockchainSmartContractInvocationRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthBlockchainSmartContractInvocation200Response**](../Model/EthBlockchainSmartContractInvocation200Response.md)

### Description

Invoke a method in a smart contract on Ethereum

<p><b>2 credits per API call</b></p> <p>Invoke a method in an existing smart contract on Ethereum.</p> <p>You can call a read-only or write method.</p> <ul> <li>For <b>read-only</b> methods, the output of the invoked method is returned.</li> <li>For <b>write</b> methods, the ID of the associated transaction is returned.</li> </ul> <p><b>Troubleshooting a failed transaction</b><br/> Tatum ensures that this API works against the blockchain (accesses the blockchain, finds the specified smart contract, and executes the specified ABI method with the provided parameters).<br/>However, because this API can be run against any smart contract on the blockchain, Tatum cannot in any way guarantee that the method itself will be executed successfully.</p> <p>If you have issues with invoking the method, refer to the user documentation for this method, or contact the author of the smart contract.</p> <p>For more information about invoking methods in smart contracts, see <a href="https://support.tatum.io/support/solutions/articles/80001052441" target="_blank">this article</a> on our Support Portal.</p> <p><b>Signing a transaction</b><br/> When invoking a method in a smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$eth_blockchain_smart_contract_invocation_request = new \Tatum\Model\EthBlockchainSmartContractInvocationRequest();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\EthBlockchainSmartContractInvocation200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethBlockchainSmartContractInvocation($eth_blockchain_smart_contract_invocation_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethBlockchainSmartContractInvocation(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethBlockchainSmartContractInvocation(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethBlockchainTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethBlockchainTransfer(
    \Tatum\Model\EthBlockchainTransferRequest $eth_blockchain_transfer_request, 
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_blockchain_transfer_request** | [**\Tatum\Model\EthBlockchainTransferRequest**](../Model/EthBlockchainTransferRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send Ethereum / ERC20 from account to account

<p><b>2 credits per API call</b></p> <p>Send Ethereum or Tatum supported ERC20 token from account to account.<br/><br/> <p><b>Signing a transaction</b></p> <p>When sending ETH, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$eth_blockchain_transfer_request = new \Tatum\Model\EthBlockchainTransferRequest();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethBlockchainTransfer($eth_blockchain_transfer_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethBlockchainTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethBlockchainTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms, 
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed Ethereum transaction

<p><b>2 credits per API call</b></p> <p>Broadcast signed transaction to Ethereum blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$broadcast_kms = new \Tatum\Model\BroadcastKMS();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethBroadcast($broadcast_kms, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethBroadcast(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGenerateAddress(
    string $xpub, 
    float $index, 
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\GeneratedAddressEth
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**| Extended public key of wallet. |
 **$index** | **float**| Derivation index of the address to be generated. |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\GeneratedAddressEth**](../Model/GeneratedAddressEth.md)

### Description

Generate Ethereum account address from Extended public key

<h4>1 credit per API call.</h4><br/> <p>Generates an Ethereum account deposit address from an Extended public key. The deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Extended public key of wallet.
$xpub = 'xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid';

// Derivation index of the address to be generated.
$index = 0;

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\GeneratedAddressEth $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGenerateAddress($xpub, $index, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGenerateAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGenerateAddressPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request, 
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

### Description

Generate Ethereum private key

<h4>1 credit per API call.</h4><br/> <p>Generates the private key of an address from a mnemonic for a given derivation path index. The private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$priv_key_request = new \Tatum\Model\PrivKeyRequest();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\PrivKey $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGenerateAddressPrivateKey($priv_key_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGenerateAddressPrivateKey(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGenerateAddressPrivateKey(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGenerateWallet(
    [ string $mnemonic,  ]
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**| Mnemonic to use for generating extended public and private keys. | [optional]
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

### Description

Generate Ethereum wallet

<h4>1 credit per API call.</h4><br/><p>Tatum supports BIP44 HD wallets. Because they can generate 2^31 addresses from 1 mnemonic phrase, they are very convenient and secure. A mnemonic phrase consists of 24 special words in a defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value which should never be revealed</li><li>Public Key - a public address to be published</li><li>Derivation index - an index of generated address</li></ul></p><p>Tatum follows the BIP44 specification and generates for Ethereum wallets with the derivation path m/44'/60'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generates a BIP44 compatible Ethereum wallet.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Mnemonic to use for generating extended public and private keys.
$mnemonic = 'mnemonic_example';

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\Wallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGenerateWallet($mnemonic, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGenerateWallet(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetBalance(
    string $address, 
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthBalance**](../Model/EthBalance.md)

### Description

Get the ETH balance of an Ethereum account

<p><b>1 credit per API call</b></p> <p>Get the balance of <b>ETH</b> of an Ethereum account.</p> <p>To get the balance of <b>tokens</b>, use the APIs for getting the balance of <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20GetBalanceAddress" target="_blank">fungible tokens (ERC-20)</a> and <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)#operation/NftGetTokensByAddressErc721" target="_blank">NFTs (ERC-721)</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\EthBalance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGetBalance($address, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGetBalance(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetBlock(
    string $hash, 
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Block hash or block number |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthBlock**](../Model/EthBlock.md)

### Description

Get Ethereum block by hash

<h4>1 credit per API call.</h4><br/><p>Gets an Ethereum block-by-block hash or block number.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Block hash or block number
$hash = 6470657;

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\EthBlock $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGetBlock($hash, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGetBlock(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGetBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetCurrentBlock(
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

**float**

### Description

Get current block number

<h4>1 credit per API call.</h4><br/><p>Gets the current Ethereum block number. This is the number of the latest block in the blockchain.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGetCurrentBlock($x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGetCurrentBlock(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGetCurrentBlock(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetInternalTransactionByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetInternalTransactionByAddress(
    string $address, 
    float $page_size, 
    [ float $offset,  ]
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthTxInternal[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthTxInternal[]**](../Model/EthTxInternal.md)

### Description

Get Ethereum internal transactions by address

<h4>1 credit per API call.</h4><br/> <p>Get Ethereum internal transactions by address.<br/></p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$address = '0x8ce4e40889a13971681391aad29e88efaf91f784';

// Max number of items per page is 50.
$page_size = 10;

// Offset to obtain next page of the data.
$offset = 0;

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\EthTxInternal[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGetInternalTransactionByAddress($address, $page_size, $offset, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGetInternalTransactionByAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGetInternalTransactionByAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetTransaction(
    string $hash, 
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthTx**](../Model/EthTx.md)

### Description

Get Ethereum Transaction

<h4>1 credit per API call.</h4><br/><p>Get Ethereum transaction by transaction hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transaction hash
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\EthTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGetTransaction($hash, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGetTransaction(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetTransactionByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetTransactionByAddress(
    string $address, 
    float $page_size, 
    [ float $offset,  ]
    [ float $from,  ]
    [ float $to,  ]
    [ string $sort = 'DESC',  ]
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Account address you want to get balance of |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]
 **$from** | **float**| Transactions from this block onwards will be included. | [optional]
 **$to** | **float**| Transactions up to this block will be included. | [optional]
 **$sort** | **string**| Sorting of the data. ASC - oldest first, DESC - newest first. | [optional] [default to &#39;DESC&#39;]
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthTx[]**](../Model/EthTx.md)

### Description

Get Ethereum transactions by address

<h4>1 credit per API call.</h4><br/><p>Get Ethereum transactions by address. This includes incoming and outgoing transactions for the address.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$address = '0x8ce4e40889a13971681391aad29e88efaf91f784';

// Max number of items per page is 50.
$page_size = 10;

// Offset to obtain next page of the data.
$offset = 0;

// Transactions from this block onwards will be included.
$from = 1087623;

// Transactions up to this block will be included.
$to = 1087823;

// Sorting of the data. ASC - oldest first, DESC - newest first.
$sort = 'ASC';

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\EthTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGetTransactionByAddress($address, $page_size, $offset, $from, $to, $sort, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGetTransactionByAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGetTransactionByAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethGetTransactionCount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethGetTransactionCount(
    string $address, 
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| address |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

**float**

### Description

Get count of outgoing Ethereum transactions

<h4>1 credit per API call.</h4><br/> <p>Get a number of outgoing Ethereum transactions for the address. When a transaction is sent, there can be multiple outgoing transactions, which are not yet processed by the blockchain. To distinguish between them, there is a counter called a nonce, which represents the order of the transaction in the list of outgoing transactions.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// address
$address = '0xdac17f958d2ee523a2206206994597c13d831ec7';

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethGetTransactionCount($address, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethGetTransactionCount(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethGetTransactionCount(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethWeb3Driver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->ethereum()->ethWeb3Driver(
    string $x_api_key, 
    object $body, 
    [ string $testnet_type = 'ethereum-sepolia' ]
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**| Tatum X-API-Key used for authorization. |
 **$body** | **object**|  |
 **$testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

**object**

### Description

Web3 HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as an http-based web3 driver to connect directly to the Ethereum node provided by Tatum. To learn more about Ethereum Web3, visit the <a href="https://ethereum.org/en/developers/" target="_blank">Ethereum developers' guide</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Tatum X-API-Key used for authorization.
$x_api_key = 'asdlkfjnqunalkwjfnq2oi303294857k';

$body = array('key' => new \stdClass);

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$testnet_type = 'ethereum-sepolia';

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->ethereum()
        ->ethWeb3Driver($x_api_key, $body, $testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling ethereum()->ethWeb3Driver(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling ethereum()->ethWeb3Driver(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
