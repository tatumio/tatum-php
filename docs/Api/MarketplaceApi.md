# Tatum/Api/MarketplaceApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**buyAssetOnMarketplace()**](#buyassetonmarketplace) | **POST** /v3/blockchain/marketplace/listing/buy | Buy an asset on the NFT marketplace
[**cancelSellMarketplaceListing()**](#cancelsellmarketplacelisting) | **POST** /v3/blockchain/marketplace/listing/cancel | Cancel the selling of an asset on the NFT marketplace
[**generateMarketplace()**](#generatemarketplace) | **POST** /v3/blockchain/marketplace/listing | Create an NFT marketplace
[**getMarketplaceFee()**](#getmarketplacefee) | **GET** /v3/blockchain/marketplace/listing/{chain}/{contractAddress}/fee | Get the NFT marketplace fee
[**getMarketplaceFeeRecipient()**](#getmarketplacefeerecipient) | **GET** /v3/blockchain/marketplace/listing/{chain}/{contractAddress}/recipient | Get the recipient of the NFT marketplace fee
[**getMarketplaceInfo()**](#getmarketplaceinfo) | **GET** /v3/blockchain/marketplace/listing/{chain}/{contractAddress} | Get information about an NFT marketplace on Solana
[**getMarketplaceListing()**](#getmarketplacelisting) | **GET** /v3/blockchain/marketplace/listing/{chain}/{contractAddress}/listing/{id} | Get information about a listing on the NFT marketplace
[**getMarketplaceListings()**](#getmarketplacelistings) | **GET** /v3/blockchain/marketplace/listing/{chain}/{contractAddress}/{type} | Get the listings of a certain type from the NFT marketplace
[**sellAssetOnMarketplace()**](#sellassetonmarketplace) | **POST** /v3/blockchain/marketplace/listing/sell | Sell an asset on the NFT marketplace
[**updateFee()**](#updatefee) | **PUT** /v3/blockchain/marketplace/listing/fee | Update the NFT marketplace fee
[**updateFeeRecipient()**](#updatefeerecipient) | **PUT** /v3/blockchain/marketplace/listing/recipient | Update the recipient of the NFT marketplace fee
[**updateMarketplace()**](#updatemarketplace) | **PUT** /v3/blockchain/marketplace/listing | Update an NFT marketplace on Solana
[**withdrawFeeFromMarketplace()**](#withdrawfeefrommarketplace) | **POST** /v3/blockchain/marketplace/withdraw/fee | Withdraw funds from the marketplace fee account on Solana
[**withdrawTreasuryFromMarketplace()**](#withdrawtreasuryfrommarketplace) | **POST** /v3/blockchain/marketplace/withdraw/treasury | Withdraw funds from the marketplace treasury account on Solana


## `buyAssetOnMarketplace()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->buyAssetOnMarketplace(
    \Tatum\Model\BuyAssetOnMarketplaceRequest $buy_asset_on_marketplace_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$buy_asset_on_marketplace_request** | [**\Tatum\Model\BuyAssetOnMarketplaceRequest**](../Model/BuyAssetOnMarketplaceRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Buy an asset on the NFT marketplace

<p><b>2 credits per API call</b></p> <p>Buy an asset listed on the NFT marketplace.</p> <p>You can buy the asset either for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.</p> <ul> <li>If you want to pay for the asset with the <b>native assets</b>, send the required amount of the assets with the API call.</li> <li>If you want to pay with the <b>fungible tokens</b>, <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allow the marketplace smart contract to access your tokens</a> before making the purchase. When you make the API call, the marketplace smart contract will deduct the required amount of the tokens from the smart contract where you hold the tokens.</li> </ul> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When buying an asset on the NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$buy_asset_on_marketplace_request = new \Tatum\Model\BuyAssetOnMarketplaceRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->buyAssetOnMarketplace($buy_asset_on_marketplace_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->buyAssetOnMarketplace(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->buyAssetOnMarketplace(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `cancelSellMarketplaceListing()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->cancelSellMarketplaceListing(
    \Tatum\Model\CancelSellMarketplaceListingRequest $cancel_sell_marketplace_listing_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_sell_marketplace_listing_request** | [**\Tatum\Model\CancelSellMarketplaceListingRequest**](../Model/CancelSellMarketplaceListingRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Cancel the selling of an asset on the NFT marketplace

<p><b>2 credits per API call</b></p> <p>Cancel the selling of an asset on the NFT marketplace.</p> <p>You can cancel the selling only if you are the seller of the asset or the marketplace operator. Once the selling is canceled, the asset is returned to the seller.</p> <p>You cannot cancel the selling if the asset has already been purchased.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When cancelling the selling of an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$cancel_sell_marketplace_listing_request = new \Tatum\Model\CancelSellMarketplaceListingRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->cancelSellMarketplaceListing($cancel_sell_marketplace_listing_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->cancelSellMarketplaceListing(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->cancelSellMarketplaceListing(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateMarketplace()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->generateMarketplace(
    \Tatum\Model\GenerateMarketplaceRequest $generate_marketplace_request
): \Tatum\Model\GenerateMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_marketplace_request** | [**\Tatum\Model\GenerateMarketplaceRequest**](../Model/GenerateMarketplaceRequest.md)|  |

### Return type

[**\Tatum\Model\GenerateMarketplace200Response**](../Model/GenerateMarketplace200Response.md)

### Description

Create an NFT marketplace

<p><b>2 credits per API call</b></p> <p>Deploy an NFT marketplace smart contract on the blockchain. With a deployed marketplace smart contract, you and your customers can create new  listings for assets such as non-fungible tokens and combinations of token types as described by the ERC-721 and ERC-1155 standards on the Ethereum blockchain or by the equivalent standards on the other blockchains. As the marketplace operator, you can set a fee as a percentage of the asset price that will be paid on top of the asset price.</p> <p>The purchase process looks like the following:</p> <ol> <li>The seller <a href="#operation/SellAssetOnMarketplace">creates a listing for an asset on the NFT marketplace</a>. The listing can be offered for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.</li> <li>The seller <a href="https://apidoc.tatum.io/tag/Auction#operation/ApproveNftAuctionSpending" target="_blank">allows the marketplace smart contract to transfer the asset that they are selling</a>.</li> <li>A buyer buys the asset. <ul><li>If the buyer wants to pay with the <b>native blockchain assets</b>, they <a href="#operation/BuyAssetOnMarketplace">make the purchase</a> (the <code>buyAssetFromListing()</code> method is called against the marketplace smart contract) and send the required amount of the native assets to the marketplace smart contract.</li> <li>If the buyer wants to pay with the <b>fungible tokens</b>: <ol><li>The buyer <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allows the marketplace smart contract to access their tokens</a> and makes the purchase (the <code>buyAssetFromListing()</code> method is called against the marketplace smart contract).</li> <li>The marketplace smart contract deducts the required amount of tokens from the smart contract where the buyer holds the tokens.</li></ol></li></ul></li> <li>The marketplace smart contract transfers the asset to the buyer, transfers the asset price to the seller, and sends the fee to the marketplace fee recipient.</li> </ol> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul> <p><b>Signing a transaction</b><br/> When deploying an NFT marketplace smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$generate_marketplace_request = new \Tatum\Model\GenerateMarketplaceRequest();

try {
    /** @var \Tatum\Model\GenerateMarketplace200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->generateMarketplace($generate_marketplace_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->generateMarketplace(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->generateMarketplace(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getMarketplaceFee()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceFee(
    string $chain, 
    string $contract_address
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$contract_address** | **string**| Contract address |

### Return type

**float**

### Description

Get the NFT marketplace fee

<p><b>1 credit per API call</b></p> <p>Get the NFT marketplace fee.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'chain_example';

// Contract address
$contract_address = '0xe6e7340394958674cdf8606936d292f565e4ecc4';

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->getMarketplaceFee($chain, $contract_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->getMarketplaceFee(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->getMarketplaceFee(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getMarketplaceFeeRecipient()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceFeeRecipient(
    string $chain, 
    string $contract_address
): \Tatum\Model\GetMarketplaceFeeRecipient200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$contract_address** | **string**| Contract address |

### Return type

[**\Tatum\Model\GetMarketplaceFeeRecipient200Response**](../Model/GetMarketplaceFeeRecipient200Response.md)

### Description

Get the recipient of the NFT marketplace fee

<p><b>1 credit per API call</b></p> <p>Get the recipient of the NFT marketplace fee.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'chain_example';

// Contract address
$contract_address = '0xe6e7340394958674cdf8606936d292f565e4ecc4';

try {
    /** @var \Tatum\Model\GetMarketplaceFeeRecipient200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->getMarketplaceFeeRecipient($chain, $contract_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->getMarketplaceFeeRecipient(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->getMarketplaceFeeRecipient(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getMarketplaceInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceInfo(
    string $chain, 
    string $contract_address
): \Tatum\Model\GetMarketplaceInfo200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$contract_address** | **string**| Contract address |

### Return type

[**\Tatum\Model\GetMarketplaceInfo200Response**](../Model/GetMarketplaceInfo200Response.md)

### Description

Get information about an NFT marketplace on Solana

<p><b>1 credit per API call</b></p> <p>Get information about an NFT marketplace on Solana.</p> <p>This API is in <b>alpha</b> and is supported only for the mainnet on Solana.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'SOL';

// Contract address
$contract_address = '3MgkEwYY4b8iSX2yMLnbQ7n8KzNRKNAgTGJwVbEcKkUz';

try {
    /** @var \Tatum\Model\GetMarketplaceInfo200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->getMarketplaceInfo($chain, $contract_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->getMarketplaceInfo(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->getMarketplaceInfo(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getMarketplaceListing()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceListing(
    string $chain, 
    string $contract_address, 
    string $id
): \Tatum\Model\GetMarketplaceListing200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$contract_address** | **string**| Contract address |
 **$id** | **string**| Listing ID |

### Return type

[**\Tatum\Model\GetMarketplaceListing200Response**](../Model/GetMarketplaceListing200Response.md)

### Description

Get information about a listing on the NFT marketplace

<p><b>1 credit per API call</b></p> <p>Get information about a specific listing on the NFT marketplace.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'chain_example';

// Contract address
$contract_address = '0xe6e7340394958674cdf8606936d292f565e4ecc4';

// Listing ID
$id = 123456;

try {
    /** @var \Tatum\Model\GetMarketplaceListing200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->getMarketplaceListing($chain, $contract_address, $id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->getMarketplaceListing(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->getMarketplaceListing(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getMarketplaceListings()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->getMarketplaceListings(
    string $chain, 
    string $contract_address, 
    string $type
): string[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$contract_address** | **string**| Contract address |
 **$type** | **string**| The type of listings to return |

### Return type

**string[]**

### Description

Get the listings of a certain type from the NFT marketplace

<p><b>1 credit per API call</b></p> <p>Get the open, sold, or cancelled listings from the NFT marketplace.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$chain = 'CELO';

// Contract address
$contract_address = '0xe6e7340394958674cdf8606936d292f565e4ecc4';

// The type of listings to return
$type = 'INITIATED';

try {
    /** @var string[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->getMarketplaceListings($chain, $contract_address, $type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->getMarketplaceListings(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->getMarketplaceListings(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `sellAssetOnMarketplace()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->sellAssetOnMarketplace(
    \Tatum\Model\SellAssetOnMarketplaceRequest $sell_asset_on_marketplace_request
): \Tatum\Model\SellAssetOnMarketplace200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sell_asset_on_marketplace_request** | [**\Tatum\Model\SellAssetOnMarketplaceRequest**](../Model/SellAssetOnMarketplaceRequest.md)|  |

### Return type

[**\Tatum\Model\SellAssetOnMarketplace200Response**](../Model/SellAssetOnMarketplace200Response.md)

### Description

Sell an asset on the NFT marketplace

<p><b>2 credits per API call</b></p> <p>Create a new listing for an asset on the NFT marketplace. The listing can be offered for the native blockchain assets (for example, ETH, MATIC, and so on) or for any fungible tokens.</p> <p>After the listing is created, <a href="https://apidoc.tatum.io/tag/Auction#operation/ApproveNftAuctionSpending" target="_blank">allow the marketplace smart contract to transfer the asset that you are selling</a>.</p> <p>You can create a listing only for an existing asset that you own (you must be the owner of the asset).</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the marketplace version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When creating a new listing on the NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$sell_asset_on_marketplace_request = new \Tatum\Model\SellAssetOnMarketplaceRequest();

try {
    /** @var \Tatum\Model\SellAssetOnMarketplace200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->sellAssetOnMarketplace($sell_asset_on_marketplace_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->sellAssetOnMarketplace(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->sellAssetOnMarketplace(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFee()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFee(
    \Tatum\Model\UpdateFeeRequest $update_fee_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_request** | [**\Tatum\Model\UpdateFeeRequest**](../Model/UpdateFeeRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Update the NFT marketplace fee

<p><b>2 credits per API call</b></p> <p>Update the NFT marketplace fee.</p> <p>You can update the marketplace fee only if you are the marketplace operator.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul> <p><b>Signing a transaction</b><br/> When updating the NFT marketplace fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$update_fee_request = new \Tatum\Model\UpdateFeeRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->updateFee($update_fee_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->updateFee(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->updateFee(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateFeeRecipient()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateFeeRecipient(
    \Tatum\Model\UpdateFeeRecipientRequest $update_fee_recipient_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_request** | [**\Tatum\Model\UpdateFeeRecipientRequest**](../Model/UpdateFeeRecipientRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Update the recipient of the NFT marketplace fee

<p><b>2 credits per API call</b></p> <p>Update the recipient of the NFT marketplace fee.</p> <p>You can update the fee recipient only if you are the marketplace operator.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>Solana (in <b>alpha</b>)</li> </ul> <p><b>Signing a transaction</b><br/> When updating the recipient of the NFT marketplace fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$update_fee_recipient_request = new \Tatum\Model\UpdateFeeRecipientRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->updateFeeRecipient($update_fee_recipient_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->updateFeeRecipient(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->updateFeeRecipient(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateMarketplace()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->updateMarketplace(
    \Tatum\Model\UpdateMarketplaceRequest $update_marketplace_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_marketplace_request** | [**\Tatum\Model\UpdateMarketplaceRequest**](../Model/UpdateMarketplaceRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Update an NFT marketplace on Solana

<p><b>2 credits per API call</b></p> <p>Update an NFT marketplace on Solana.</p> <p>You can update it only if you are the marketplace operator.</p> <p>This API is in <b>alpha</b> and is supported only for the mainnet on Solana.</p> <p><b>Signing a transaction</b><br/> When updating an NFT marketplace, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$update_marketplace_request = new \Tatum\Model\UpdateMarketplaceRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->updateMarketplace($update_marketplace_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->updateMarketplace(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->updateMarketplace(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `withdrawFeeFromMarketplace()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->withdrawFeeFromMarketplace(
    \Tatum\Model\WithdrawFeeFromMarketplaceRequest $withdraw_fee_from_marketplace_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_fee_from_marketplace_request** | [**\Tatum\Model\WithdrawFeeFromMarketplaceRequest**](../Model/WithdrawFeeFromMarketplaceRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Withdraw funds from the marketplace fee account on Solana

<p><b>2 credits per API call</b></p> <p>Withdraw funds from the NFT marketplace fee account on Solana.</p> <p>You can withdraw the funds only if you are the marketplace fee recipient.</p> <p>This API is in <b>alpha</b> and is supported only for the mainnet on Solana.</p> <p><b>Signing a transaction</b><br/> When withdrawing the funds, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$withdraw_fee_from_marketplace_request = new \Tatum\Model\WithdrawFeeFromMarketplaceRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->withdrawFeeFromMarketplace($withdraw_fee_from_marketplace_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->withdrawFeeFromMarketplace(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->withdrawFeeFromMarketplace(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `withdrawTreasuryFromMarketplace()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->marketplace()->withdrawTreasuryFromMarketplace(
    \Tatum\Model\WithdrawFeeFromMarketplaceRequest $withdraw_fee_from_marketplace_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdraw_fee_from_marketplace_request** | [**\Tatum\Model\WithdrawFeeFromMarketplaceRequest**](../Model/WithdrawFeeFromMarketplaceRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Withdraw funds from the marketplace treasury account on Solana

<p><b>2 credits per API call</b></p> <p>Withdraw funds from the NFT marketplace treasury account on Solana.</p> <p>You can withdraw the funds only if you are the marketplace fee recipient.</p> <p>This API is in <b>alpha</b> and is supported only for the mainnet on Solana.</p> <p><b>Signing a transaction</b><br/> When withdrawing the funds, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$withdraw_fee_from_marketplace_request = new \Tatum\Model\WithdrawFeeFromMarketplaceRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->withdrawTreasuryFromMarketplace($withdraw_fee_from_marketplace_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling marketplace()->withdrawTreasuryFromMarketplace(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling marketplace()->withdrawTreasuryFromMarketplace(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
