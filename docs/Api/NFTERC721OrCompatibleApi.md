# Tatum/Api/NFTERC721OrCompatibleApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**nftAddMinter()**](#nftaddminter) | **POST** /v3/nft/mint/add | Add an NFT minter to an NFT smart contract
[**nftBurnErc721()**](#nftburnerc721) | **POST** /v3/nft/burn | Burn an NFT
[**nftDeployErc721()**](#nftdeployerc721) | **POST** /v3/nft/deploy | Deploy an NFT smart contract
[**nftGetBalanceErc721()**](#nftgetbalanceerc721) | **GET** /v3/nft/balance/{chain}/{contractAddress}/{address} | Get the NFTs from a specific smart contract that a blockchain address holds
[**nftGetContractAddress()**](#nftgetcontractaddress) | **GET** /v3/nft/address/{chain}/{hash} | Get the address of an NFT smart contract by its transaction hash
[**nftGetMetadataErc721()**](#nftgetmetadataerc721) | **GET** /v3/nft/metadata/{chain}/{contractAddress}/{tokenId} | Get NFT metadata
[**nftGetProvenanceDataErc721()**](#nftgetprovenancedataerc721) | **GET** /v3/nft/provenance/{chain}/{contractAddress}/{tokenId} | Get NFT provenance information
[**nftGetRoyaltyErc721()**](#nftgetroyaltyerc721) | **GET** /v3/nft/royalty/{chain}/{contractAddress}/{tokenId} | Get NFT royalty information
[**nftGetTokensByAddressErc721()**](#nftgettokensbyaddresserc721) | **GET** /v3/nft/address/balance/{chain}/{address} | Get all NFTs that a blockchain address holds
[**nftGetTokensByCollectionErc721()**](#nftgettokensbycollectionerc721) | **GET** /v3/nft/collection/{chain}/{address} | Get all NFTs from a collection
[**nftGetTransactErc721()**](#nftgettransacterc721) | **GET** /v3/nft/transaction/{chain}/{hash} | Get an NFT transaction by its hash
[**nftGetTransactionByAddress()**](#nftgettransactionbyaddress) | **GET** /v3/nft/transaction/{chain}/{address}/{tokenAddress} | Get NFT transactions on a blockchain address
[**nftGetTransactionByToken()**](#nftgettransactionbytoken) | **GET** /v3/nft/transaction/tokenId/{chain}/{tokenAddress}/{tokenId} | Get NFT transactions for an NFT
[**nftMintErc721()**](#nftminterc721) | **POST** /v3/nft/mint | Mint an NFT
[**nftMintMultipleErc721()**](#nftmintmultipleerc721) | **POST** /v3/nft/mint/batch | Mint multiple NFTs
[**nftTransferErc721()**](#nfttransfererc721) | **POST** /v3/nft/transaction | Transfer an NFT
[**nftUpdateCashbackErc721()**](#nftupdatecashbackerc721) | **PUT** /v3/nft/royalty | Update NFT royalty information
[**nftVerifyInCollection()**](#nftverifyincollection) | **POST** /v3/nft/verify | Verify an NFT in an NFT collection on Solana


## `nftAddMinter()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftAddMinter(
    ?\Tatum\Model\NftAddMinterRequest $nft_add_minter_request, 
    ?string $x_testnet_type
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$nft_add_minter_request** | [**\Tatum\Model\NftAddMinterRequest**](../Model/NftAddMinterRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Add an NFT minter to an NFT smart contract

<p><b>2 credits per API call</b></p> <p>Allow a blockchain address (the <code>minter</code> parameter in the request body) to mint NFTs on the NFT smart contract (the <code>contractAddress</code> parameter in the request body). </br>Use this API when you are using NFT Express with your own smart contract to mint NFTs and need to add the Tatum NFT minter's address as an NFT minter to your smart contract. For more information about the Tatum NFT minter, see "Use your own smart contract to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When adding an NFT minter, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$nft_add_minter_request = new \Tatum\Model\NftAddMinterRequest();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftAddMinter($nft_add_minter_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftAddMinter(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftAddMinter(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnErc721(
    ?\Tatum\Model\NftBurnErc721Request $nft_burn_erc721_request, 
    ?string $x_testnet_type
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$nft_burn_erc721_request** | [**\Tatum\Model\NftBurnErc721Request**](../Model/NftBurnErc721Request.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Burn an NFT

<p><b>100 credits per API call on Flow<br/> 2 credits per API call on the other blockchains</b></p> <p>Destroy an NFT. Burning the NFT transfers it to an un-spendable blockchain address that no one can access.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>Burning NFTs on Algorand</b><br/> You can burn only the NFTs that were minted with the address of the manager account specified in the <code>manager</code> parameter in the <a href="#operation/NftMintErc721">minting call</a> (see the <code>MintNftExpressAlgorand</code>, <code>MintNftAlgorand</code>, and <code>MintNftAlgorandKMS</code> schemas of the request body).</p> <p><b>Signing a transaction</b><br/> When burning an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$nft_burn_erc721_request = new \Tatum\Model\NftBurnErc721Request();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftBurnErc721($nft_burn_erc721_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftBurnErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftBurnErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployErc721(
    ?\Tatum\Model\NftDeployErc721Request $nft_deploy_erc721_request, 
    ?string $x_testnet_type
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$nft_deploy_erc721_request** | [**\Tatum\Model\NftDeployErc721Request**](../Model/NftDeployErc721Request.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Deploy an NFT smart contract

<p><b>100 credits per API call on Flow<br/> 2 credits per API call on the other blockchains</b></p> <p>Deploy an NFT smart contract on the blockchain. In a deployed NFT smart contract, you can mint NFTs (one NFT at a time or multiple NFTs at once), burn, and transfer NFTs.</p> <p>Smart contracts are standardized and audited. You can review the code of a deployed NFT smart contract <a href="https://github.com/tatumio/flow-contracts" target="_blank">here</a> (if the contract is deployed on Flow) or <a href="https://github.com/tatumio/smart-contracts/tree/master/contracts/tatum" target="_blank">here</a> (if the contract is deployed on any other supported blockchain).</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>General NFT smart contracts</b><br/> By default, an NFT smart contract is deployed as a <b>general NFT smart contract compatible with OpenSea royalties</b>. This is a standard NFT contract with <code>AccessControl</code> and <code>Ownable</code>, enhanced with NFT batch minting. NFTs minted on this smart contract are compatible with OpenSea and its royalty structure.<p> <p><b>Cashback and provenance NFT smart contracts</b><br/> In addition to the general NFT contract, you can deploy the following types of NFT smart contracts for the supported blockchains <b>except for Flow and TRON</b>:<p> <ul> <li><b>Cashback NFT smart contract</b> is an NFT smart contract that forces on-chain royalties to be paid every time an NFT is transferred, and the royalties are defined as a <b>fixed value</b>. The royalties are <b>not</b> OpenSea-compatible.<br /> To deploy an NFT smart contract as a cashback contract, deploy the contract with the <code>cashback</code> parameter set to <code>true</code> in the request body.</li> <li><b>Provenance NFT smart contract</b> is an NFT smart contract that forces on-chain royalties to be paid every time an NFT is transferred, and the royalties are defined as a <b>percentage of the NFT price</b>. The royalties are <b>not</b> OpenSea-compatible.<br /> To deploy an NFT smart contract as a provenance contract, deploy the contract with the <code>provenance</code> parameter set to <code>true</code> in the request body.</li> </ul> <p>You can enable <b>public minting</b> for cashback and provenance smart contracts. By default, public minting is disabled, which means that only the blockchain address whose private key was used to create the smart contract or the blockchain addresses <a href="#operation/NftAddMinter">added to the smart contract as NFT minters</a> will be able to mint NFTs for the contract. To enable public minting and allow anyone to mint NFTs on top of the smart contract, deploy the contract with the <code>publicMint</code> parameter set to <code>true</code> in the request body.</p> <p><b>NFT smart contracts and NFT Express</b><br/> If you want to use NFT Express to mint NFTs on the deployed smart contract, deploy the smart contract as a general NFT smart contract (that is, deploy the contract with the <code>cashback</code>, <code>provenance</code>, and <code>publicMint</code> parameters either set to <code>false</code> or not set at all in the request body).<br/> After you have deployed the NFT smart contract, <a href="#operation/NftAddMinter">add the Tatum minter address as an NFT minter to your smart contract</a>.</p> <p>For the complete information about using NFT Express on your smart contract, see "Use your own smart contract to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p> <p><b>Signing a transaction</b><br/> When deploying an NFT smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$nft_deploy_erc721_request = new \Tatum\Model\NftDeployErc721Request();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftDeployErc721($nft_deploy_erc721_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftDeployErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftDeployErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetBalanceErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetBalanceErc721(
    ?string $chain, 
    ?string $address, 
    ?string $contract_address, 
    ?string $x_testnet_type
): \Tatum\Model\NftGetBalanceErc721200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$address** | **string**| The blockchain address that you want to get the token balance of |
 **$contract_address** | **string**| The address of the NFT smart contract |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftGetBalanceErc721200Response**](../Model/NftGetBalanceErc721200Response.md)

### Description

Get the NFTs from a specific smart contract that a blockchain address holds

<p><b>1 credit per API call</b></p> <p>Get the NFTs minted on a specific smart contract (the <code>contractAddress</code> path parameter in the request endpoint URL) that a blockchain address holds.</p> <p><b>NOTE:</b> This API works only for the NFT smart contracts deployed using the <a href="#operation/NftDeployErc721">Tatum smart contract API</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'chain_example';

// The blockchain address that you want to get the token balance of
$address = '0x3223AEB8404C7525FcAA6C512f91e287AE9FfE7B';

// The address of the NFT smart contract
$contract_address = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\NftGetBalanceErc721200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetBalanceErc721($chain, $address, $contract_address, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetBalanceErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetBalanceErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetContractAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetContractAddress(
    ?string $chain, 
    ?string $hash, 
    ?string $x_testnet_type
): \Tatum\Model\NftGetContractAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$hash** | **string**| Transaction hash |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftGetContractAddress200Response**](../Model/NftGetContractAddress200Response.md)

### Description

Get the address of an NFT smart contract by its transaction hash

<p><p>This endpoint is deprecated. Do not use it.<br/> Instead, use <a href="https://apidoc.tatum.io/tag/Blockchain-utils#operation/SCGetContractAddress" target="_blank">this API</a>.</b></p><br/> <p><b>1 credit per API call</b></p> <p>Get NFT contract address from deploy transaction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'chain_example';

// Transaction hash
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\NftGetContractAddress200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetContractAddress($chain, $hash, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetContractAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetContractAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetMetadataErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetMetadataErc721(
    ?string $chain, 
    ?string $contract_address, 
    ?string $token_id, 
    ?string $account, 
    ?string $x_testnet_type
): \Tatum\Model\NftMetadataErc721
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$contract_address** | **string**| The blockchain address of the NFT to get metadata for |
 **$token_id** | **string**| The ID of the NFT to get metadata for&lt;br/&gt;Do &lt;b&gt;not&lt;/b&gt; use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana. |
 **$account** | **string**| (Flow only) The account that holds the NFT | [optional]
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMetadataErc721**](../Model/NftMetadataErc721.md)

### Description

Get NFT metadata

<p><b>1 credit per API call</b></p> <p>Get metadata of an NFT.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'chain_example';

// The blockchain address of the NFT to get metadata for
$contract_address = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

// The ID of the NFT to get metadata for<br/>Do <b>not</b> use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana.
$token_id = 123;

// (Flow only) The account that holds the NFT
$account = '0xc1b45bc27b9c61c3';

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\NftMetadataErc721 $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetMetadataErc721($chain, $contract_address, $token_id, $account, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetMetadataErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetMetadataErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetProvenanceDataErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetProvenanceDataErc721(
    ?string $chain, 
    ?string $contract_address, 
    ?string $token_id, 
    ?string $x_testnet_type
): \Tatum\Model\NftProvenanceDataErc721[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$contract_address** | **string**| The blockchain address of the NFT to get provenance information for |
 **$token_id** | **string**| The ID of the NFT to get provenance information for |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftProvenanceDataErc721[]**](../Model/NftProvenanceDataErc721.md)

### Description

Get NFT provenance information

<p><b>1 credit per API call</b></p> <p>Get provenance information for an NFT.</p> <p><b>NOTE:</b> This API works only for <a href="#operation/NftDeployErc721">provenance NFT smart contracts</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'chain_example';

// The blockchain address of the NFT to get provenance information for
$contract_address = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

// The ID of the NFT to get provenance information for
$token_id = 123;

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\NftProvenanceDataErc721[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetProvenanceDataErc721($chain, $contract_address, $token_id, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetProvenanceDataErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetProvenanceDataErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetRoyaltyErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetRoyaltyErc721(
    ?string $chain, 
    ?string $contract_address, 
    ?string $token_id, 
    ?string $x_testnet_type
): \Tatum\Model\NftRoyaltyErc721
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$contract_address** | **string**| The blockchain address of the NFT to get royalty information for |
 **$token_id** | **string**| The ID of the NFT to get royalty information for&lt;br/&gt;Do &lt;b&gt;not&lt;/b&gt; use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana. |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftRoyaltyErc721**](../Model/NftRoyaltyErc721.md)

### Description

Get NFT royalty information

<p><b>1 credit per API call</b></p> <p>Get information about royalties for an NFT.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'chain_example';

// The blockchain address of the NFT to get royalty information for
$contract_address = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

// The ID of the NFT to get royalty information for<br/>Do <b>not</b> use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana.
$token_id = 123;

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\NftRoyaltyErc721 $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetRoyaltyErc721($chain, $contract_address, $token_id, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetRoyaltyErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetRoyaltyErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTokensByAddressErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTokensByAddressErc721(
    ?string $chain, 
    ?string $address
): \Tatum\Model\NftTokenByAddressErc721[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$address** | **string**| The blockchain address that you want to get the token balance of |

### Return type

[**\Tatum\Model\NftTokenByAddressErc721[]**](../Model/NftTokenByAddressErc721.md)

### Description

Get all NFTs that a blockchain address holds

<p><b>1 credit per API call + 5 credits for each owned NFT</b></p> <p>Get all NFTs that a blockchain address holds. The NFTs are returned grouped by the smart contracts they were minted on.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain - mainnet only</li> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> <li>Solana</li> </ul> <p>On Solana and Algorand, if a blockchain address holds fewer than 50 NFTs, the API also returns each NFT's metadata. If the metadata is not returned, you can obtain it using the <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/NftGetMetadataErc721">API for getting NFT metadata</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'SOL';

// The blockchain address that you want to get the token balance of
$address = 'FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ';

try {
    /** @var \Tatum\Model\NftTokenByAddressErc721[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetTokensByAddressErc721($chain, $address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetTokensByAddressErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetTokensByAddressErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTokensByCollectionErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTokensByCollectionErc721(
    ?string $chain, 
    ?float $page_size, 
    ?string $address, 
    ?float $offset
): \Tatum\Model\NftTokenByCollectionErc721[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$address** | **string**| The blockchain address of the collection |
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]

### Return type

[**\Tatum\Model\NftTokenByCollectionErc721[]**](../Model/NftTokenByCollectionErc721.md)

### Description

Get all NFTs from a collection

<p><b>1 credit per API call + 5 credits for each listed NFT</b></p> <p>Get all NFTs from a collection (all the NFTs that were minted on the smart contract).</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'ETH';

// Max number of items per page is 50.
$page_size = 10;

// The blockchain address of the collection
$address = '0x80d8bac9a6901698b3749fe336bbd1385c1f98f2';

// Offset to obtain next page of the data.
$offset = 0;

try {
    /** @var \Tatum\Model\NftTokenByCollectionErc721[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetTokensByCollectionErc721($chain, $page_size, $address, $offset);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetTokensByCollectionErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetTokensByCollectionErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTransactErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTransactErc721(
    ?string $chain, 
    ?string $hash, 
    ?string $x_testnet_type
): \Tatum\Model\NftGetTransactErc721200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$hash** | **string**| The hash (ID) of the NFT transaction |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftGetTransactErc721200Response**](../Model/NftGetTransactErc721200Response.md)

### Description

Get an NFT transaction by its hash

<p><b>1 credit per API call</b></p> <p>Get an NFT transaction by its hash.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'chain_example';

// The hash (ID) of the NFT transaction
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\NftGetTransactErc721200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetTransactErc721($chain, $hash, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetTransactErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetTransactErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTransactionByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTransactionByAddress(
    ?string $chain, 
    ?string $address, 
    ?string $token_address, 
    ?float $page_size, 
    ?float $offset, 
    ?float $from, 
    ?float $to
): \Tatum\Model\NftTx[]
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

### Return type

[**\Tatum\Model\NftTx[]**](../Model/NftTx.md)

### Description

Get NFT transactions on a blockchain address

<p><b>1 credit per API call</b></p> <p>Get incoming and outgoing NFT transactions on a blockchain address.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

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

try {
    /** @var \Tatum\Model\NftTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetTransactionByAddress($chain, $address, $token_address, $page_size, $offset, $from, $to);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetTransactionByAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetTransactionByAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTransactionByToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTransactionByToken(
    ?string $chain, 
    ?string $token_id, 
    ?string $token_address, 
    ?float $page_size, 
    ?float $offset, 
    ?float $from, 
    ?float $to
): \Tatum\Model\NftTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$token_id** | **string**| NFT Token ID. |
 **$token_address** | **string**| Address of the token smart contract |
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]
 **$from** | **float**| Transactions from this block onwards will be included. | [optional]
 **$to** | **float**| Transactions up to this block will be included. | [optional]

### Return type

[**\Tatum\Model\NftTx[]**](../Model/NftTx.md)

### Description

Get NFT transactions for an NFT

<p><b>1 credit per API call</b></p> <p>Get incoming and outgoing transactions for an NFT.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'CELO';

// NFT Token ID.
$token_id = 123;

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
    /** @var \Tatum\Model\NftTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftGetTransactionByToken($chain, $token_id, $token_address, $page_size, $offset, $from, $to);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftGetTransactionByToken(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftGetTransactionByToken(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintErc721(
    ?\Tatum\Model\NftMintErc721Request $nft_mint_erc721_request, 
    ?string $x_testnet_type
): \Tatum\Model\NftMintErc721200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$nft_mint_erc721_request** | [**\Tatum\Model\NftMintErc721Request**](../Model/NftMintErc721Request.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintErc721200Response**](../Model/NftMintErc721200Response.md)

### Description

Mint an NFT

<p><b>100 credits per API call on Flow<br/> 2 credits per API call on the other blockchains</b></p> <p>You can mint NFTs using either of the following methods:</p> <ul> <li><a href="#NftExpress">Using NFT Express</a></li> <li><a href="#NftNative">Natively on a blockchain</a></li> </ul> <h3 id="NftExpress">Minting NFTs using NFT Express</h3> <p>NFT Express is Tatum's feature that helps you mint NFTs easier than minting natively on a blockchain.</p> <ul> <li><b>You do not need to enter your private key or signature ID.</b><br/>NFT Express uses the private key provided by Tatum.</li> <li><b>You do not need to hold crypto or keep addresses topped up with crypto to pay for minting transactions.</b> <ul> <li>To use NFT Express on the <b>mainnet</b>, you have to have a <a href="https://tatum.io/pricing" target="_blank">paid pricing plan</a>.<br/>Tatum covers your transaction fees for NFT minting and pays for them from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan.<br/>The transaction fees and the corresponding numbers of credits deducted from your allowance vary depending on what blockchain you mint NFTs on.</li> <li>On the <b>testnet</b>, no credits are deducted from the monthly credit allowance. You can mint NFTs with NFT Express regardless of your pricing plan.</li> </ul> </li> </ul> <p>With NFT Express, you can choose whether to mint NFTs on the <a href="#NftExpressPrebuilt">pre-built NFT smart contract provided by Tatum</a> or on <a href="#NftExpressOwn">your own smart contract</a>.</p> <h4 id="NftExpressPrebuilt">Use the pre-built smart contract provided by Tatum to mint NFTs</h4> <p>If you want to mint NFTs using the pre-built smart contract, you do not need to deploy your own NFT smart contract. You do not need to provide the address of the NFT smart contract and the token ID in the request body either. The address of the smart contract and the token ID are provided automatically by Tatum.<br/>The token ID is autogenerated. It starts with 0 and is increased by 1 for each new NFT. The token ID is calculated separately for each supported blockchain and its mainnet and testnet.<br/> For more information, see <a href="https://docs.tatum.io/nft-express/mint-nfts-with-tatums-nft-express" target="_blank">our user documentation</a>.</p> <p>You can mint NFTs on the pre-built smart contract provided by Tatum on the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana</li> </ul> <p>Depending on what blockchain you use, choose the request body schema to use in the API call.</p> <ul> <li>To mint NFTs on <b>BNB Smart Chain</b>, <b>Celo</b>, <b>Ethereum</b>, <b>Harmony</b>, <b>Klaytn</b>, or <b>Polygon</b>, use this API with the <code>MintNftExpress</code> schema of the request body.</li> <li>To mint NFTs on <b>Algorand</b>, use this API with the <code>MintNftExpressAlgorand</code> schema of the request body.<br/>To be able to <a href="#operation/NftBurnErc721">burn the minted NFTs</a> any time later, specify the address of the manager account in the <code>manager</code> parameter.<br/>An NFT minted on Algorand is automatically transferred to your blockchain address. After the NFT is minted, you have to transfer it to the recipient's address. The recipient has to agree in advance to receive your NFT because Algorand charges users for storing NFTs on their addresses, and an Algorand blockchain address by default does not receive NFTs unless explicitly agreed.<br/>This how it works: <ol> <li>The recipient <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset" target="_blank">agrees to receive the NFT</a> to their address.</li> <li>You <a href="#operation/NftTransferErc721">transfer the NFT</a> to the recipient's address (use the <code>transferNftAlgoExpress</code> schema of the request body).<br /><b>NOTE:</b> On the <b>mainnet</b>, Tatum covers your transaction fees for the NFT transfer and pays for them from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. On the <b>testnet</b>, no credits are deducted from the monthly credit allowance.</li> </ol></li> <li>To mint NFTs on <b>Solana</b>, use this API with the <code>MintNftExpressSolana</code> schema of the request body.<br/>Solana uses the <a href="https://www.metaplex.com/" target="_blank">Metaplex Protocol</a>, a smart contract and metadata standard for creating and working with NFTs. When you mint an NFT on Solana with NFT Express, the pre-built smart contract based on the Metaplex Protocol is used.<br/>When an NFT is minted on Solana, a new blockchain address is created to receive the NFT under the recipient's account address (the one in the <code>to</code> parameter of the request body). This address is returned in the <code>nftAccountAddress</code> parameter in the response body, is owned by the recipient's address, and has the same private key.<br/>The response body also returns the address of the minted NFT itself, which is held in the <code>nftAddress</code> parameter.<br/>After the NFT is minted, you have to <a href="#operation/NftTransferErc721">transfer it</a> to the recipient's address (use the <code>transferNftSolana</code> or <code>transferNftSolanaKMS</code> schema of the request body). In the request body of the transfer call: <ul> <li>Set the <code>from</code> parameter to the address that you used in the <code>to</code> parameter in the request body of the minting call.</li> <li>Set the <code>to</code> parameter to the recipient's address.</li> <li>Set the <code>contractAddress</code> parameter to the address from the <code>nftAddress</code> parameter returned in the response body of the minting call.</li> <li>Set the <code>fromPrivateKey</code>/<code>signatureId</code> parameter to the private key/signature ID of the blockchain address that you specified in the <code>from</code> parameter.</li> </ul></li></ul> <h4 id="NftExpressOwn">Use your own smart contract to mint NFTs</h4> <p>If you want to mint NFTs using your own smart contract, you are going to use an <b>NTF minter</b>, a special blockchain address provided by Tatum that will cover the minting fees. The number of credits equivalent to the fees will be then deducted from the monthly credit allowance of your paid pricing plan.</br> <b>IMPORTANT!</b> Your smart contract must be deployed as a <a href="#operation/NftDeployErc721">general NFT smart contract</a>. You cannot use cashback and provenance smart contracts with NFT Express.</p> <p>For more information, see <a href="https://docs.tatum.io/nft-express/use-nft-express-with-your-own-smart-contract" target="_blank">our user documentation</a> and the <a href="https://blog.tatum.io/how-to-mint-nfts-using-tatums-nft-minter-965194d53c9f" target="_blank">article in the Tatum blog</a>.</p> <p>You can mint NFTs on your own smart contract on the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p>To mint NFTs using your own smart contract, do the following:</p> <ol> <li>In the table located under this section, find the blockchain address of the Tatum NFT minter for your blockchain and network (mainnet or testnet).</li> <li><a href="#operation/NftAddMinter">Add the minter address as an NFT minter to your smart contract</a>.</li> <li>Use this API with the <code>MintNftMinter</code> schema of the request body.<br />In the request body, enter the following information: <ul> <li><code>chain</code> is the blockchain that you use.</li> <li><code>to</code> is the blockchain address where to send the minted NFT to.</li> <li><code>url</code> is the URL of the NFT metadata.</li> <li><code>minter</code> is the address of the NFT minter that you found in Step 1.</li> <li><code>contractAddress</code> is the address of your NFT smart contract.</li> <li><code>tokenId</code> is the the token ID of the NFT.<br />For example: <pre> {   "chain": "CELO",   "to": "0x8ce4e40889a13971681391aad29e88efaf91f784",   "url": "ipfs://QmXJJ6UF5WkF4WTJvsdhiA1etGwBLfpva7Vr9AudGMe3pj",   "contractAddress": "0x687422eEA2cB73B5d3e242bA5456b782919AFc85",   "tokenId": "0123",   "minter": "0xBC2eBA680EE50d685cc4Fe65f102AA70AfB27D3F" } </pre> When you make an API call with this request body, the private key of the NFT minter will be added to the request body automatically: <pre> {   "chain": "CELO",   "to": "0x8ce4e40889a13971681391aad29e88efaf91f784",   "url": "ipfs://QmXJJ6UF5WkF4WTJvsdhiA1etGwBLfpva7Vr9AudGMe3pj",   "contractAddress": "0x687422eEA2cB73B5d3e242bA5456b782919AFc85",   "tokenId": "0123",   "minter": "0xBC2eBA680EE50d685cc4Fe65f102AA70AfB27D3F",   "fromPrivateKey": "0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2" } </pre>                                </li></ul></li> </ol> <p>The following table lists the blockchain addresses of the Tatum NFT minters for the testnet and mainnet of the supported blockchains:</p> <table>   <tr>     <th>Blockchain</th>     <th>Minter address - testnet*</th>     <th>Minter address - mainnet</th>   </tr>   <tr>     <td>BNB Smart Chain</td>     <td>0xc16ae5e8c985b906935a0cadf4e24f0400531883</td>     <td>0x49678AAB11E001eb3cB2cBD9aA96b36DC2461A94</td>   </tr>   <tr>     <td>Celo</td>     <td>0xBC2eBA680EE50d685cc4Fe65f102AA70AfB27D3F</td>     <td>0x49678AAB11E001eb3cB2cBD9aA96b36DC2461A94</td>   </tr>   <tr>     <td>Ethereum</td>     <td>0x53e8577C4347C365E4e0DA5B57A589cB6f2AB848</td>     <td>0x49678AAB11E001eb3cB2cBD9aA96b36DC2461A94</td>   </tr>   <tr>     <td>Harmony</td>     <td>0x8906f62d40293ddca77fdf6714c3f63265deddf0</td>     <td>0x49678AAB11E001eb3cB2cBD9aA96b36DC2461A94</td>   </tr>   <tr>     <td>Klaytn</td>     <td>0x80d8bac9a6901698b3749fe336bbd1385c1f98f2</td>     <td>0x49678AAB11E001eb3cB2cBD9aA96b36DC2461A94</td>   </tr>   <tr>     <td>Polygon</td>     <td>0x542b9ac4945a3836fd12ad98acbc76a0c8b743f5</td>     <td>0x49678AAB11E001eb3cB2cBD9aA96b36DC2461A94</td>   </tr> </table> <p>*If a minter blockchain address on the testnet does not have sufficient funds to cover the transaction fee, add some amount to it using a crypto faucet of the blockchain.</p> <h3 id="NftNative">Minting NFTs natively on a blockchain</h3> <p>When minting an NFT natively on a blockchain, you are using your own smart contract. You are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p> <p>You can mint NFTs natively on the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>         <p>Depending on what blockchain you use, choose the request body schema to use in the API call.</p> <ul> <li>To mint NFTs natively on <b>Algorand</b> and: <ul><li>To sign the transaction with your <b>private key</b>, use this API with the <code>MintNftAlgorand</code> schema of the request body.</li> <li>To sign the transaction with your <b>signature ID</b>, use this API the <code>MintNftAlgorandKMS</code> schema of the request body.<br/><b>NOTE:</b><ul><li>To be able to <a href="#operation/NftBurnErc721">burn the minted NFTs</a> any time later, specify the address of the manager account in the <code>manager</code> parameter.</li><li>An NFT minted on Algorand is automatically transferred to your blockchain address. After the NFT is minted, you have to transfer it to the recipient's address. The recipient has to agree in advance to receive your NFT because Algorand charges users for storing NFTs on their addresses, and an Algorand blockchain address by default does not receive NFTs unless explicitly agreed. For more information about how it works, see the section about minting NFTs on Algorand using the <a href="#NftExpressPrebuilt">pre-built NFT smart contract provided by Tatum</a>.</li></ul></li></ul></li> <li>To mint NFTs natively on <b>BNB Smart Chain</b>, <b>Ethereum</b>, <b>Harmony</b>, <b>Klaytn</b>, <b>KuCoin Community Chain</b>, or <b>Polygon</b>, and: <ul><li>To sign the transaction with your <b>private key</b>, use this API with the <code>MintNft</code> schema of the request body.</li> <li>To sign the transaction with your <b>signature ID</b>, use this API the <code>MintNftKMS</code> schema of the request body.</li></ul></li> <li>To mint NFTs natively on <b>Celo</b> and: <ul><li>To sign the transaction with your <b>private key</b>, use this API with the <code>MintNftCelo</code> schema of the request body.</li> <li>To sign the transaction with your <b>signature ID</b>, use this API the <code>MintNftKMSCelo</code> schema of the request body.</li></ul></li> <li>To mint NFTs natively on <b>Flow</b> and: <ul><li>To sign the transaction with your <b>private key</b>, use this API with the <code>MintNftFlowPK</code> schema of the request body.</li> <li>To sign the transaction with your <b>signature ID</b>, use this API the <code>MintNftFlowMnemonic</code> schema of the request body.</li> <li>To sign the transaction with your <b>wallet mnemonic</b>, use this API the <code>MintNftFlowKMS</code> schema of the request body.</li></ul></li> <li>To mint NFTs natively on <b>Solana</b> and: <ul><li>To sign the transaction with your <b>private key</b>, use this API with the <code>MintNftSolana</code> schema of the request body.</li> <li>To sign the transaction with your <b>signature ID</b>, use this API the <code>MintNftSolanaKMS</code> schema of the request body.<br/><b>NOTE:</b> When an NFT is minted on Solana, a new blockchain address is created to receive the NFT under the recipient's account address. After the NFT is minted, you have to transfer it to the recipient's address. For more information about how it works, see the section about minting NFTs on Solana using the <a href="#NftExpressPrebuilt">pre-built NFT smart contract provided by Tatum</a>.</li></ul></li> <li>To mint NFTs natively on <b>TRON</b> and: <ul><li>To sign the transaction with your <b>private key</b>, use this API with the <code>MintNftTron</code> schema of the request body.</li> <li>To sign the transaction with your <b>signature ID</b>, use this API the <code>MintNftKMSTron</code> schema of the request body.</li></ul></li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$nft_mint_erc721_request = new \Tatum\Model\NftMintErc721Request();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\NftMintErc721200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftMintErc721($nft_mint_erc721_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftMintErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftMintErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintMultipleErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintMultipleErc721(
    ?\Tatum\Model\NftMintMultipleErc721Request $nft_mint_multiple_erc721_request, 
    ?string $x_testnet_type
): \Tatum\Model\NftMintMultipleErc721200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$nft_mint_multiple_erc721_request** | [**\Tatum\Model\NftMintMultipleErc721Request**](../Model/NftMintMultipleErc721Request.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintMultipleErc721200Response**](../Model/NftMintMultipleErc721200Response.md)

### Description

Mint multiple NFTs

<p><b>100 credits per API call on Flow<br/> 2 credits per API call on the other blockchains</b></p> <p>Create multiple NFT Tokens and transfer them to destination account. Create and transfer any NFT tokens from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> This operation works in two modes.  First mode works just like other NFT endpoints. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.  Second mode enables you to mint on any custom NFT ERC-721 smart contract, on which specified minter address is approved as a minter. You don't specify private key or signatureId, only minter address, from which the NFT will be minted.<br/> It means you perform mint multiple NFT request with following body: <pre>{    "to": ["0x80d8bac9a6901698b3749fe336bbd1385c1f98f2"],    "url": ["ipfs://QmXJJ6UF5WkF4WTJvsdhiA1etGwBLfpva7Vr9AudGMe3pj"],    "tokenId": ["9876541124516"],    "contractAddress":"0xcd2ada00c48a27faa5cc67f9a1ed55b89ddf7f77",    "minter": "0x542b9ac4945a3836fd12ad98acbc76a0c8b743f5",    "chain": "MATIC" }</pre> The blockchain fee of the performed transaction is paid from the address connected with built-in private key and is debited in form of credits. The credits are debited only if NFT mint requests are performed with paid API key plan. We transform fee to the credits in accordance to the rates provided by the Tatum. If you want to batch mint on ERC-721 contract which is not deployed via Tatum API, your smart contract must contain this method: <pre>mintMultiple(address[] to, uint256[] tokenId, string[] uri): boolean</pre> You can use addresses specified in the bellow table to be used as a minter. <table>   <tr>     <th>Chain</th>     <th>Testnet address</th>     <th>Mainnet Address</th>   </tr>   <tr>     <td>MATIC</td>     <td>0x542b9ac4945a3836fd12ad98acbc76a0c8b743f5</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>BSC</td>     <td>0xc16ae5e8c985b906935a0cadf4e24f0400531883</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>ONE</td>     <td>0x8906f62d40293ddca77fdf6714c3f63265deddf0</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>ETH</td>     <td>0x53e8577C4347C365E4e0DA5B57A589cB6f2AB848</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>CELO</td>     <td>0xBC2eBA680EE50d685cc4Fe65f102AA70AfB27D3F</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>KLAY</td>     <td>0x80d8bac9a6901698b3749fe336bbd1385c1f98f2</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr> </table> If there are not enough coins on any testnet address, feel free to send coins there.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$nft_mint_multiple_erc721_request = new \Tatum\Model\NftMintMultipleErc721Request();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\NftMintMultipleErc721200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftMintMultipleErc721($nft_mint_multiple_erc721_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftMintMultipleErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftMintMultipleErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransferErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransferErc721(
    ?\Tatum\Model\NftTransferErc721Request $nft_transfer_erc721_request, 
    ?string $x_testnet_type
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$nft_transfer_erc721_request** | [**\Tatum\Model\NftTransferErc721Request**](../Model/NftTransferErc721Request.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Transfer an NFT

<p><b>100 credits per API call on Flow<br/> 2 credits per API call on the other blockchains</b></p> <p>Transfer an NFT from the smart contract (the <code>contractAddress</code> parameter in the request body) to the specified blockchain address (the <code>to</code> parameter in the request body).</p> <p>In one API call, you can transfer only one NFT.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul> <p>For Ethereum, Celo, and BNB Smart Chain, transferring NFTs invokes the <code>safeTransfer()</code> method.</p> <p><b>Transferring NFTs on Algorand</b></p> <ul> <li>On Algorand, the recipient has to agree in advance to receive your NFT because Algorand charges users for storing NFTs on their addresses, and an Algorand blockchain address by default does not receive NFTs unless explicitly agreed. Before transferring an NFT, make sure that the recipient <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset" target="_blank">has agreed to receive the NFT</a> to their address.</li> <li>If you want to transfer an NFT that <a href="#operation/NftMintErc721">was minted using NFT Express</a>, use the <code>transferNftAlgoExpress</code> schema of the request body.<br /><b>NOTE:</b> On the <b>mainnet</b>, Tatum covers your transaction fees for the NFT transfer and pays for them from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. On the <b>testnet</b>, no credits are deducted from the monthly credit allowance.</li> </ul> <p><b>Transferring NFTs on Solana</b><br/> If you want to transfer an NFT that <a href="#operation/NftMintErc721">was minted using NFT Express</a>, see the section about minting NFTs on Solana using the <a href="#operation/NftMintErc721">pre-built NFT smart contract provided by Tatum</a> for the information about how to set up the parameters in the request body.</p> <p><b>Signing a transaction</b><br/> When transferring an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p> <p><b>NOTE:</b> This does not apply to transferring NFTs that were minted on Algorand using NFT Express (see earlier in this section).</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$nft_transfer_erc721_request = new \Tatum\Model\NftTransferErc721Request();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftTransferErc721($nft_transfer_erc721_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftTransferErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftTransferErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftUpdateCashbackErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftUpdateCashbackErc721(
    ?\Tatum\Model\NftUpdateCashbackErc721Request $nft_update_cashback_erc721_request, 
    ?string $x_testnet_type
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$nft_update_cashback_erc721_request** | [**\Tatum\Model\NftUpdateCashbackErc721Request**](../Model/NftUpdateCashbackErc721Request.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Update NFT royalty information

<p><b>2 credits per API call</b></p> <p>Update the value of the royalty cashback set for an NFT.</p> <p>The royalty cashback value can be updated only from the address of the NFT author (the address that is listed as a royalty cashback receiver in the NFT royalty information). The royalty cashback value cannot be updated from the address of the NFT owner.<br/> In one API call, you can update the first value of the royalty cashback for the NFT author for one NFT.</p> <p>To disable the royalties for the NFT completely, set it to 0.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>Signing a transaction</b><br/> When updating NFT royalty, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$nft_update_cashback_erc721_request = new \Tatum\Model\NftUpdateCashbackErc721Request();

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftUpdateCashbackErc721($nft_update_cashback_erc721_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftUpdateCashbackErc721(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftUpdateCashbackErc721(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftVerifyInCollection()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftVerifyInCollection(
    ?\Tatum\Model\NftVerifyInCollectionRequest $nft_verify_in_collection_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$nft_verify_in_collection_request** | [**\Tatum\Model\NftVerifyInCollectionRequest**](../Model/NftVerifyInCollectionRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Verify an NFT in an NFT collection on Solana

<p><b>2 credits per API call</b></p> <p>Verify an NFT in an NFT collection on Solana. Verifying an NFT sets the <code>Verified</code> parameter to <code>true</code> for the NFT, which means that the NFT is really a part of the collection. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>.</p> <p>The collection must be a sized collection that was introduced in <a href="https://docs.metaplex.com/programs/token-metadata/changelog/v1.3" target="_blank">Version 1.3</a> of the Metaplex Token Metadata program. The NFT must have been <a href="#operation/NftMintErc721">minted in this collection</a>.</p> <p>This API is supported only for Solana.</p> <p><b>Signing a transaction</b><br/> When verifying an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$nft_verify_in_collection_request = new \Tatum\Model\NftVerifyInCollectionRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->nftVerifyInCollection($nft_verify_in_collection_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling nFTERC721OrCompatible()->nftVerifyInCollection(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling nFTERC721OrCompatible()->nftVerifyInCollection(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
