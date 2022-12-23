# Tatum/Api/FungibleTokensERC20OrCompatibleApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**erc20Approve()**](#erc20approve) | **POST** /v3/blockchain/token/approve | Allow a blockchain address to transfer and burn fungible tokens
[**erc20Burn()**](#erc20burn) | **POST** /v3/blockchain/token/burn | Burn fungible tokens
[**erc20Deploy()**](#erc20deploy) | **POST** /v3/blockchain/token/deploy | Deploy a fungible token smart contract
[**erc20GetBalance()**](#erc20getbalance) | **GET** /v3/blockchain/token/balance/{chain}/{contractAddress}/{address} | Get the number of fungible tokens that a blockchain address holds in a smart contract
[**erc20GetBalanceAddress()**](#erc20getbalanceaddress) | **GET** /v3/blockchain/token/address/{chain}/{address} | Get the total number of fungible tokens that a blockchain address holds
[**erc20GetTransactionByAddress()**](#erc20gettransactionbyaddress) | **GET** /v3/blockchain/token/transaction/{chain}/{address}/{tokenAddress} | Get fungible token transactions on a blockchain address
[**erc20Mint()**](#erc20mint) | **POST** /v3/blockchain/token/mint | Mint fungible tokens
[**erc20Transfer()**](#erc20transfer) | **POST** /v3/blockchain/token/transaction | Transfer fungible tokens


## `erc20Approve()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20Approve(
    \Tatum\Model\Erc20ApproveRequest $erc20_approve_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_approve_request** | [**\Tatum\Model\Erc20ApproveRequest**](../Model/Erc20ApproveRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Allow a blockchain address to transfer and burn fungible tokens

<p><b>2 credits per API call</b></p> <p>Allow a blockchain address (the <code>spender</code> parameter in the request body) to transfer and burn fungible tokens on behalf of the smart contract owner.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When allowing a blockchain address to transfer and burn fungible tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$erc20_approve_request = new \Tatum\Model\Erc20ApproveRequest();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->erc20Approve($erc20_approve_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling fungibleTokensERC20OrCompatible()->erc20Approve(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling fungibleTokensERC20OrCompatible()->erc20Approve(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `erc20Burn()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20Burn(
    \Tatum\Model\Erc20BurnRequest $erc20_burn_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_burn_request** | [**\Tatum\Model\Erc20BurnRequest**](../Model/Erc20BurnRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Burn fungible tokens

<p><b>2 credits per API call</b></p> <p>Burn fungible tokens. Burning fungible tokens deletes the specified supply of the tokens (the <code>amount</code> parameter in the request body) from the smart contract (the <code>contractAddress</code> parameter in the request body).</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b><br/> When burning fungible tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$erc20_burn_request = new \Tatum\Model\Erc20BurnRequest();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->erc20Burn($erc20_burn_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling fungibleTokensERC20OrCompatible()->erc20Burn(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling fungibleTokensERC20OrCompatible()->erc20Burn(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `erc20Deploy()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20Deploy(
    \Tatum\Model\Erc20DeployRequest $erc20_deploy_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_deploy_request** | [**\Tatum\Model\Erc20DeployRequest**](../Model/Erc20DeployRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Deploy a fungible token smart contract

<p><b>2 credits per API call</b></p> <p>Deploy a fungible token smart contract on the blockchain. In a deployed smart contract, you can mint and burn fungible tokens. The whole supply of fungible tokens (the <code>supply</code> parameter in the request body) will be transferred to the specified blockchain address (the <code>address</code> parameter in the request body).<br/> Smart contracts are standardized and audited.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>XinFin</li> </ul> <p>You can review the code of a deployed smart contract <a href="https://github.com/tatumio/tatum-middleware/blob/master/src/contracts/token.sol" target="_blank">here</a>.</p> <p><b>Signing a transaction</b><br/> When deploying a fungible token smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$erc20_deploy_request = new \Tatum\Model\Erc20DeployRequest();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->erc20Deploy($erc20_deploy_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling fungibleTokensERC20OrCompatible()->erc20Deploy(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling fungibleTokensERC20OrCompatible()->erc20Deploy(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `erc20GetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20GetBalance(
    string $chain,
    string $address,
    string $contract_address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Erc20Balance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Network name |
 **$address** | **string**| The blockchain address that you want to get the token balance of |
 **$contract_address** | **string**| The address of the fungible token smart contract |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Erc20Balance**](../Model/Erc20Balance.md)

### Description

Get the number of fungible tokens that a blockchain address holds in a smart contract

<p><b>1 credit per API call</b></p> <p>Get the number of the fungible tokens minted on a specific smart contract (the <code>contractAddress</code> path parameter in the request endpoint URL) that a blockchain address holds.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>XinFin</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Network name
$chain = 'CELO';

// The blockchain address that you want to get the token balance of
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

// The address of the fungible token smart contract
$contract_address = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\Erc20Balance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->erc20GetBalance($chain, $address, $contract_address, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling fungibleTokensERC20OrCompatible()->erc20GetBalance(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling fungibleTokensERC20OrCompatible()->erc20GetBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `erc20GetBalanceAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20GetBalanceAddress(
    string $chain,
    string $address
): \Tatum\Model\Erc20BalanceForAddress[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Network name |
 **$address** | **string**| The blockchain address that you want to get the token balance of |

### Return type

[**\Tatum\Model\Erc20BalanceForAddress[]**](../Model/Erc20BalanceForAddress.md)

### Description

Get the total number of fungible tokens that a blockchain address holds

<p><b>1 credit per API call</b></p> <p>Get the number of all fungible tokens that a blockchain address holds across a blockchain. The tokens are returned grouped by the smart contracts they were minted on.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> <li>Solana</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Network name
$chain = 'CELO';

// The blockchain address that you want to get the token balance of
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

try {
    /** @var \Tatum\Model\Erc20BalanceForAddress[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->erc20GetBalanceAddress($chain, $address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling fungibleTokensERC20OrCompatible()->erc20GetBalanceAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling fungibleTokensERC20OrCompatible()->erc20GetBalanceAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `erc20GetTransactionByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20GetTransactionByAddress(
    string $chain,
    string $address,
    string $token_address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to, ]
    [ string $sort = 'DESC' ]
): \Tatum\Model\FungibleTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$address** | **string**| Account address you want to get balance of |
 **$token_address** | **string**| Address of the token smart contract |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]
 **$from** | **float**| Transactions from this block onwards will be included. | [optional]
 **$to** | **float**| Transactions up to this block will be included. | [optional]
 **$sort** | **string**| Sorting of the data. ASC - oldest first, DESC - newest first. | [optional] [default to &#39;DESC&#39;]

### Return type

[**\Tatum\Model\FungibleTx[]**](../Model/FungibleTx.md)

### Description

Get fungible token transactions on a blockchain address

<p><b>1 credit per API call</b></p> <p>Get incoming and outgoing transactions related to fungible tokens on a blockchain address.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The blockchain to work with
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

// Sorting of the data. ASC - oldest first, DESC - newest first.
$sort = 'ASC';

try {
    /** @var \Tatum\Model\FungibleTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->erc20GetTransactionByAddress($chain, $address, $token_address, $page_size, $offset, $from, $to, $sort);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling fungibleTokensERC20OrCompatible()->erc20GetTransactionByAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling fungibleTokensERC20OrCompatible()->erc20GetTransactionByAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `erc20Mint()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20Mint(
    \Tatum\Model\Erc20MintRequest $erc20_mint_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_mint_request** | [**\Tatum\Model\Erc20MintRequest**](../Model/Erc20MintRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Mint fungible tokens

<p><b>2 credits per API call</b></p> <p>Create new fungible tokens in the smart contract (the <code>contractAddress</code> parameter in the request body) and transfer them to the specified blockchain address (the <code>to</code> parameter in the request body). You can mint new fungible tokens only if the current supply of tokens in the smart contract is lower than the total supply set for this contract.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b><br/> When minting fungible tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$erc20_mint_request = new \Tatum\Model\Erc20MintRequest();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->erc20Mint($erc20_mint_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling fungibleTokensERC20OrCompatible()->erc20Mint(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling fungibleTokensERC20OrCompatible()->erc20Mint(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `erc20Transfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->fungibleTokensERC20OrCompatible()->erc20Transfer(
    \Tatum\Model\Erc20TransferRequest $erc20_transfer_request,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_transfer_request** | [**\Tatum\Model\Erc20TransferRequest**](../Model/Erc20TransferRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Transfer fungible tokens

<p><b>2 credits per API call</b></p> <p>Transfer a supply of fungible tokens existing in the smart contract (the <code>contractAddress</code> parameter in the request body) to the specified blockchain address (the <code>to</code> parameter in the request body).<br/> Transferring fungible tokens invokes the <code>transfer()</code> method.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>XinFin</li> </ul> <p><b>Transferring fungible tokens on Algorand</b><br/> On Algorand, the recipient has to agree in advance to receive your fungible tokens because Algorand charges users for storing the tokens on their addresses, and an Algorand blockchain address by default does not receive the tokens unless explicitly agreed. Before transferring the fungible tokens, make sure that the recipient <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset" target="_blank">has agreed to receive the NFT</a> to their address.</p> <p><b>Blockchain-specific APIs to transfer fungible tokens</b><br/> You can also use blockchain-specific APIs for transferring fungible tokens on the following blockchains: <ul> <li><a href="https://apidoc.tatum.io/tag/BNB-Smart-Chain#operation/BscBlockchainTransfer" target="_blank">BNB Smart Chain</a></li> <li><a href="https://apidoc.tatum.io/tag/Celo#operation/CeloBlockchainTransfer" target="_blank">Celo</a></li> <li><a href="https://apidoc.tatum.io/tag/Ethereum#operation/EthBlockchainTransfer" target="_blank">Ethereum</a></li> <li><a href="https://apidoc.tatum.io/tag/Harmony#operation/OneBlockchainTransfer" target="_blank">Harmony</a></li> <li><a href="https://apidoc.tatum.io/tag/KuCoin#operation/KcsBlockchainTransfer" target="_blank">KuCoin Community Chain</a></li> <li><a href="https://apidoc.tatum.io/tag/Polygon#operation/PolygonBlockchainTransfer" target="_blank">Polygon</a></li> <li><a href="https://apidoc.tatum.io/tag/XinFin#operation/XdcBlockchainTransfer" target="_blank">XinFin</a></li> </ul> <p><b>Signing a transaction</b><br/> When transferring fungible tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$erc20_transfer_request = new \Tatum\Model\Erc20TransferRequest();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->erc20Transfer($erc20_transfer_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling fungibleTokensERC20OrCompatible()->erc20Transfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling fungibleTokensERC20OrCompatible()->erc20Transfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
