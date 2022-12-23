# Tatum/Api/MultiTokensERC1155OrCompatibleApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMultiTokenMinter()**](#addmultitokenminter) | **POST** /v3/multitoken/mint/add | Add a Multi Token minter
[**burnMultiToken()**](#burnmultitoken) | **POST** /v3/multitoken/burn | Burn a Multi Token
[**burnMultiTokenBatch()**](#burnmultitokenbatch) | **POST** /v3/multitoken/burn/batch | Burn multiple Multi Tokens
[**deployMultiToken()**](#deploymultitoken) | **POST** /v3/multitoken/deploy | Deploy a Multi Token smart contract
[**mintMultiToken()**](#mintmultitoken) | **POST** /v3/multitoken/mint | Mint a Multi Token
[**mintMultiTokenBatch()**](#mintmultitokenbatch) | **POST** /v3/multitoken/mint/batch | Mint multiple Multi Tokens
[**multiTokenGetAddressBalance()**](#multitokengetaddressbalance) | **GET** /v3/multitoken/address/balance/{chain}/{address} | Get all Multi Tokens that a blockchain address holds
[**multiTokenGetBalance()**](#multitokengetbalance) | **GET** /v3/multitoken/balance/{chain}/{contractAddress}/{address}/{tokenId} | Get the amount of a specific MultiToken that a blockchain address holds
[**multiTokenGetBalanceBatch()**](#multitokengetbalancebatch) | **GET** /v3/multitoken/balance/batch/{chain}/{contractAddress} | Get the amount of one or multiple Multi Tokens for multiple blockchain addresses
[**multiTokenGetContractAddress()**](#multitokengetcontractaddress) | **GET** /v3/multitoken/address/{chain}/{hash} | Get the address of a Multi Token smart contract by its transaction hash
[**multiTokenGetMetadata()**](#multitokengetmetadata) | **GET** /v3/multitoken/metadata/{chain}/{contractAddress}/{token} | Get Multi Token metadata
[**multiTokenGetTransaction()**](#multitokengettransaction) | **GET** /v3/multitoken/transaction/{chain}/{hash} | Get a Multi Token transaction by its hash
[**multiTokenGetTransactionByAddress()**](#multitokengettransactionbyaddress) | **GET** /v3/multitoken/transaction/{chain}/{address}/{tokenAddress} | Get Multi Token transactions on a blockchain address
[**transferMultiToken()**](#transfermultitoken) | **POST** /v3/multitoken/transaction | Transfer a Multi Token
[**transferMultiTokenBatch()**](#transfermultitokenbatch) | **POST** /v3/multitoken/transaction/batch | Transfer multiple Multi Tokens


## `addMultiTokenMinter()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->addMultiTokenMinter(
    \Tatum\Model\AddMultiTokenMinterRequest $add_multi_token_minter_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_multi_token_minter_request** | [**\Tatum\Model\AddMultiTokenMinterRequest**](../Model/AddMultiTokenMinterRequest.md)|  |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Add a Multi Token minter

<p><b>2 credits per API call</b></p> <p>Add Multi Token minter.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When adding a Multi Token minter, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$add_multi_token_minter_request = new \Tatum\Model\AddMultiTokenMinterRequest();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->addMultiTokenMinter($add_multi_token_minter_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->addMultiTokenMinter(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->addMultiTokenMinter(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiToken(
    \Tatum\Model\BurnMultiTokenRequest $burn_multi_token_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_request** | [**\Tatum\Model\BurnMultiTokenRequest**](../Model/BurnMultiTokenRequest.md)|  |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Burn a Multi Token

<p><b>2 credits per API call</b></p> <p>Burn a fixed amount of Multi Tokens by id. This method destroys Multi Tokens from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When burning a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$burn_multi_token_request = new \Tatum\Model\BurnMultiTokenRequest();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->burnMultiToken($burn_multi_token_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->burnMultiToken(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->burnMultiToken(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnMultiTokenBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatch(
    \Tatum\Model\BurnMultiTokenBatchRequest $burn_multi_token_batch_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_multi_token_batch_request** | [**\Tatum\Model\BurnMultiTokenBatchRequest**](../Model/BurnMultiTokenBatchRequest.md)|  |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Burn multiple Multi Tokens

<p><b>2 credits per API call</b></p> <p>Burn multiple Multi Token Tokens by id assigned to same address in one transaction. This method destroys any Multi Tokens token from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When burning multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$burn_multi_token_batch_request = new \Tatum\Model\BurnMultiTokenBatchRequest();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->burnMultiTokenBatch($burn_multi_token_batch_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->burnMultiTokenBatch(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->burnMultiTokenBatch(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->deployMultiToken(
    \Tatum\Model\DeployMultiTokenRequest $deploy_multi_token_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_multi_token_request** | [**\Tatum\Model\DeployMultiTokenRequest**](../Model/DeployMultiTokenRequest.md)|  |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Deploy a Multi Token smart contract

<p><b>2 credits per API call</b></p> <p>Deploy Multi Token Smart Contract. This method creates new ERC1155 Smart Contract (Multi Tokens) on the blockchain. Smart contract is standardized and audited. It is possible to mint, burn and transfer tokens. It is also possible to mint multiple tokens at once.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When deploying a Multi Token smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$deploy_multi_token_request = new \Tatum\Model\DeployMultiTokenRequest();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->deployMultiToken($deploy_multi_token_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->deployMultiToken(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->deployMultiToken(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiToken(
    \Tatum\Model\MintMultiTokenRequest $mint_multi_token_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_request** | [**\Tatum\Model\MintMultiTokenRequest**](../Model/MintMultiTokenRequest.md)|  |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Mint a Multi Token

<p><b>2 credits per API call</b></p> <p>Mint a fixed amount of Multi Token and transfer it to destination account. Create and transfer any Multi Token token from smart contract defined in contractAddress. It is possible to add Metadata to the created token with a more detailed information about instead.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When minting a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$mint_multi_token_request = new \Tatum\Model\MintMultiTokenRequest();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->mintMultiToken($mint_multi_token_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->mintMultiToken(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->mintMultiToken(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultiTokenBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->mintMultiTokenBatch(
    \Tatum\Model\MintMultiTokenBatchRequest $mint_multi_token_batch_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multi_token_batch_request** | [**\Tatum\Model\MintMultiTokenBatchRequest**](../Model/MintMultiTokenBatchRequest.md)|  |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Mint multiple Multi Tokens

<p><b>2 credits per API call</b></p> <p>Create a fixed amount of multiple Multi Tokens Tokens and transfer them to destination account in one transaction. Create and transfer Multi Tokens tokens from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When minting multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$mint_multi_token_batch_request = new \Tatum\Model\MintMultiTokenBatchRequest();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->mintMultiTokenBatch($mint_multi_token_batch_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->mintMultiTokenBatch(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->mintMultiTokenBatch(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetAddressBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetAddressBalance(
    string $chain,
    string $address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetAddressBalance200ResponseInner[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$address** | **string**| Blockchain address |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetAddressBalance200ResponseInner[]**](../Model/MultiTokenGetAddressBalance200ResponseInner.md)

### Description

Get all Multi Tokens that a blockchain address holds

<p><b>1 credit per API call</b></p> <p>Get all Multi Tokens that a blockchain address holds. The Multi Tokens are returned grouped by the smart contracts they were minted on.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'ETH';

// Blockchain address
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\MultiTokenGetAddressBalance200ResponseInner[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->multiTokenGetAddressBalance($chain, $address, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetAddressBalance(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetAddressBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetBalance(
    string $chain,
    string $address,
    string $contract_address,
    string $token_id,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetBalance200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$address** | **string**| The blockchain address that you want to get the token balance of |
 **$contract_address** | **string**| The address of the Multi Token smart contract |
 **$token_id** | **string**| The ID of the Multi Token |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetBalance200Response**](../Model/MultiTokenGetBalance200Response.md)

### Description

Get the amount of a specific MultiToken that a blockchain address holds

<p><b>1 credit per API call</b></p> <p>Get the amount of a specific Multi Token (minted on the smart contract specified by the <code>contractAddress</code> path parameter in the request endpoint URL) that a blockchain address holds.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'chain_example';

// The blockchain address that you want to get the token balance of
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

// The address of the Multi Token smart contract
$contract_address = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

// The ID of the Multi Token
$token_id = 100;

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\MultiTokenGetBalance200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->multiTokenGetBalance($chain, $address, $contract_address, $token_id, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetBalance(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetBalanceBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetBalanceBatch(
    string $chain,
    string $contract_address,
    string $token_id,
    string $address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): string[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$contract_address** | **string**| The address of the Multi Token smart contract |
 **$token_id** | **string**| Comma-separated IDs of the Multi Tokens to get the amounts for |
 **$address** | **string**| Comma-separated blockchain addresses to get the token balance for |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

**string[]**

### Description

Get the amount of one or multiple Multi Tokens for multiple blockchain addresses

<p><b>1 credit per API call</b></p> <p>For multiple blockchain addresses, get the amount of one or multiple Multi Tokens (minted on the smart contract specified by the <code>contractAddress</code> path parameter in the request endpoint URL) that those addresses hold.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'chain_example';

// The address of the Multi Token smart contract
$contract_address = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

// Comma-separated IDs of the Multi Tokens to get the amounts for
$token_id = 1,2,3;

// Comma-separated blockchain addresses to get the token balance for
$address = 0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B,0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B,0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B;

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var string[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->multiTokenGetBalanceBatch($chain, $contract_address, $token_id, $address, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetBalanceBatch(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetBalanceBatch(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetContractAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetContractAddress(
    string $chain,
    string $hash,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetContractAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$hash** | **string**| Transaction hash |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetContractAddress200Response**](../Model/MultiTokenGetContractAddress200Response.md)

### Description

Get the address of a Multi Token smart contract by its transaction hash

<p><p>This endpoint is deprecated. Do not use it.<br/> Instead, use <a href="https://apidoc.tatum.io/tag/Blockchain-utils#operation/SCGetContractAddress" target="_blank">this API</a>.</b></p><br/> <p><b>1 credit per API call</b></p> <p>Get Multi Token contract address from deploy transaction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'chain_example';

// Transaction hash
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\MultiTokenGetContractAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->multiTokenGetContractAddress($chain, $hash, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetContractAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetContractAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetMetadata()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetMetadata(
    string $chain,
    string $token,
    string $contract_address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetMetadata200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$token** | **string**| Token ID |
 **$contract_address** | **string**| Multi Token contract address |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetMetadata200Response**](../Model/MultiTokenGetMetadata200Response.md)

### Description

Get Multi Token metadata

<p><b>1 credit per API call</b></p> <p>Get Multi Token metadata.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'chain_example';

// Token ID
$token = 1;

// Multi Token contract address
$contract_address = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\MultiTokenGetMetadata200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->multiTokenGetMetadata($chain, $token, $contract_address, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetMetadata(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetMetadata(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetTransaction(
    string $chain,
    string $hash,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MultiTokenGetTransaction200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$hash** | **string**| Transaction hash |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MultiTokenGetTransaction200Response**](../Model/MultiTokenGetTransaction200Response.md)

### Description

Get a Multi Token transaction by its hash

<p><b>1 credit per API call</b></p> <p>Get Multi Token transaction by transaction hash.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'chain_example';

// Transaction hash
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\MultiTokenGetTransaction200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->multiTokenGetTransaction($chain, $hash, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetTransaction(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `multiTokenGetTransactionByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->multiTokenGetTransactionByAddress(
    string $chain,
    string $address,
    string $token_address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to ]
): \Tatum\Model\MultiTokenGetTransactionByAddress200ResponseInner[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$address** | **string**| Account address you want to get balance of |
 **$token_address** | **string**| Address of the token smart contract |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]
 **$from** | **float**| Transactions from this block onwards will be included. | [optional]
 **$to** | **float**| Transactions up to this block will be included. | [optional]

### Return type

[**\Tatum\Model\MultiTokenGetTransactionByAddress200ResponseInner[]**](../Model/MultiTokenGetTransactionByAddress200ResponseInner.md)

### Description

Get Multi Token transactions on a blockchain address

<p><b>1 credit per API call</b></p> <p>Get incoming and outgoing Multi Token transactions on a blockchain address.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'CELO';

// Account address you want to get balance of
$address = '0x8ce4e40889a13971681391aad29e88efaf91f784';

// Address of the token smart contract
$token_address = '0x1ce4e40889a13971681391aad29e88efaf91f784';

// Max number of items per page is 50.
$page_size = 10;

// Offset to obtain next page of the data.
$offset = 0;

// Transactions from this block onwards will be included.
$from = 1087623;

// Transactions up to this block will be included.
$to = 1087823;

try {
    /** @var \Tatum\Model\MultiTokenGetTransactionByAddress200ResponseInner[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->multiTokenGetTransactionByAddress($chain, $address, $token_address, $page_size, $offset, $from, $to);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetTransactionByAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->multiTokenGetTransactionByAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferMultiToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiToken(
    \Tatum\Model\TransferMultiTokenRequest $transfer_multi_token_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_request** | [**\Tatum\Model\TransferMultiTokenRequest**](../Model/TransferMultiTokenRequest.md)|  |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Transfer a Multi Token

<p><b>2 credits per API call</b></p> <p>Transfer a certain amount of Multi Token from account to another account. Transfer Multi Tokens token from smart contract defined in contractAddress.</p> <p>Only 1 specific token with specified tokenId and value can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and blockchains.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When transferring a Multi Token, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$transfer_multi_token_request = new \Tatum\Model\TransferMultiTokenRequest();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->transferMultiToken($transfer_multi_token_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->transferMultiToken(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->transferMultiToken(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferMultiTokenBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->multiTokensERC1155OrCompatible()->transferMultiTokenBatch(
    \Tatum\Model\TransferMultiTokenBatchRequest $transfer_multi_token_batch_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_multi_token_batch_request** | [**\Tatum\Model\TransferMultiTokenBatchRequest**](../Model/TransferMultiTokenBatchRequest.md)|  |
 **$x_testnet_type** | **string**| Type of testnet. Defaults to Sepolia. Valid only for ETH invocations. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Transfer multiple Multi Tokens

<p><b>2 credits per API call</b></p> <p>Transfer Multi Token Batch from account to various other accounts in one transaction. Transfer multiple Multi Tokens token from smart contract defined in contractAddress.</p> <p>Multiple token with specified tokenIds and values can be transferred. This method invokes ERC1155 method safeTransfer() to transfer the token in case of ETH, Celo and BSC.</b> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b></p> <p>When transferring multiple Multi Tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$transfer_multi_token_batch_request = new \Tatum\Model\TransferMultiTokenBatchRequest();

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->transferMultiTokenBatch($transfer_multi_token_batch_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling multiTokensERC1155OrCompatible()->transferMultiTokenBatch(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling multiTokensERC1155OrCompatible()->transferMultiTokenBatch(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
