# Tatum/Api/AuctionApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveNftAuctionSpending()**](#approveNftAuctionSpending) | **POST** /v3/blockchain/auction/approve | Approve NFT token spending for the Auction / Marketplace
[**bidOnAuction()**](#bidOnAuction) | **POST** /v3/blockchain/auction/bid | Bid for asset on the NFT Auction
[**cancelAuction()**](#cancelAuction) | **POST** /v3/blockchain/auction/cancel | Cancel auction of the asset on the NFT Auction
[**createAuction()**](#createAuction) | **POST** /v3/blockchain/auction/sell | Sell asset on the NFT Auction
[**generateAuction()**](#generateAuction) | **POST** /v3/blockchain/auction | Create NFT Auction
[**getAuction()**](#getAuction) | **GET** /v3/blockchain/auction/{chain}/{contractAddress}/{id} | Get auction details from the NFT Auction
[**getAuctionFee()**](#getAuctionFee) | **GET** /v3/blockchain/auction/{chain}/{contractAddress}/fee | Get NFT Auction fee
[**getAuctionFeeRecipient()**](#getAuctionFeeRecipient) | **GET** /v3/blockchain/auction/{chain}/{contractAddress}/recipient | Get NFT Auction fee recipient
[**settleAuction()**](#settleAuction) | **POST** /v3/blockchain/auction/settle | Settle auction of the asset on the NFT Auction
[**updateAuctionFee()**](#updateAuctionFee) | **PUT** /v3/blockchain/auction/fee | Update NFT Auction fee
[**updateAuctionFeeRecipient()**](#updateAuctionFeeRecipient) | **PUT** /v3/blockchain/auction/recipient | Update NFT Auction fee recipient


## `approveNftAuctionSpending()`

```php
api()->auction()->approveNftAuctionSpending(
    ?\Tatum\Model\ApproveNftAuctionSpendingRequest $approve_nft_auction_spending_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Approve NFT token spending for the Auction / Marketplace

<h4>2 credits per API call.</h4><br/> <p>Approve NFT transfer for auction to perform listing of the asset.<br/> Supported blockchains: <ul> <li>Binance Smart Chain</li> <li>Harmony.ONE</li> <li>Ethereum</li> <li>Celo</li> <li>Polygon (Matic)</li> <li>Klaytn</li> </ul> </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$approve_nft_auction_spending_request = new \Tatum\Model\ApproveNftAuctionSpendingRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->approveNftAuctionSpending($approve_nft_auction_spending_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->approveNftAuctionSpending(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->approveNftAuctionSpending(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_nft_auction_spending_request** | [**\Tatum\Model\ApproveNftAuctionSpendingRequest**](../Model/ApproveNftAuctionSpendingRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `bidOnAuction()`

```php
api()->auction()->bidOnAuction(
    ?\Tatum\Model\BidOnAuctionRequest $bid_on_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Bid for asset on the NFT Auction

<h4>2 credits per API call.</h4><br/> <p>Bid on the auction. Buyer must either send native assets with this operation, or <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">approve ERC20 token spending</a> in advance.</p> <p>After auction is sold, it's in a pending state to be processed by the auction. Noone receives the assets unless the auction operator processes that.</p> Supported blockchains: <ul> <li>Binance Smart Chain</li> <li>Harmony.ONE</li> <li>Ethereum</li> <li>Celo</li> <li>Polygon (Matic)</li> <li>Klaytn</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$bid_on_auction_request = new \Tatum\Model\BidOnAuctionRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->bidOnAuction($bid_on_auction_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->bidOnAuction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->bidOnAuction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bid_on_auction_request** | [**\Tatum\Model\BidOnAuctionRequest**](../Model/BidOnAuctionRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `cancelAuction()`

```php
api()->auction()->cancelAuction(
    ?\Tatum\Model\CancelAuctionRequest $cancel_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Cancel auction of the asset on the NFT Auction

<h4>2 credits per API call.</h4><br/> <p>Cancel auction on the auction. Only possible for the seller or the operator. There must be no buyer present for that auction. NFT asset is sent back to the seller.<br/> Supported blockchains: <ul> <li>Binance Smart Chain</li> <li>Harmony.ONE</li> <li>Ethereum</li> <li>Celo</li> <li>Polygon (Matic)</li> <li>Klaytn</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$cancel_auction_request = new \Tatum\Model\CancelAuctionRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->cancelAuction($cancel_auction_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->cancelAuction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->cancelAuction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_request** | [**\Tatum\Model\CancelAuctionRequest**](../Model/CancelAuctionRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `createAuction()`

```php
api()->auction()->createAuction(
    ?\Tatum\Model\CreateAuctionRequest $create_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Sell asset on the NFT Auction

<h4>2 credits per API call.</h4><br/> <p>Create new auction on the auction contract. Before operation, seller must approve spending of the NFT token for the Auction contract using <a href="#operation/ApproveNftAuctionSpending">Approve NFT</a>. After auction is created, auction contract transfers the asset to the auction smart contract. Only auction for existing NFTs can be created - seller must be owner of the NFT asset.<br/> Supported blockchains: <ul> <li>Binance Smart Chain</li> <li>Harmony.ONE</li> <li>Ethereum</li> <li>Celo</li> <li>Polygon (Matic)</li> <li>Klaytn</li> </ul> </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_auction_request = new \Tatum\Model\CreateAuctionRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->createAuction($create_auction_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->createAuction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->createAuction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_auction_request** | [**\Tatum\Model\CreateAuctionRequest**](../Model/CreateAuctionRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `generateAuction()`

```php
api()->auction()->generateAuction(
    ?\Tatum\Model\GenerateAuctionRequest $generate_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Create NFT Auction

<h4>2 credits per API call.</h4><br/> <p>Deploy new smart contract for NFT auction logic. Smart contract enables auction operator to create new auction for NFT (ERC-721/1155). Operator can set a fee in percentage, which will be paid on top of the price of the asset. can be offered for native asset - ETH, BSC, etc. - or any ERC20 token - this is configurable during auction creation. Before auction is created, seller must approve transfer of the NFT to the auction contract. Buyer will bid for the asset from the auction using native asset - send assets along the gid() smart contract call, or via ERC20 token. Buyer of the auction must perform approval for the smart contract to access ERC20 token, before the actual bid() method is called. Once there is higher bid then the actual one, the previous bidder's funds will be returned to him and new bidder will be the current winning one. When auction ends, anyone can settle the auction - NFT will be sent to the bidder, assets to the seller and fee to the operator.<br/> This operation deploys a smart contract on the blockchain.<br/> Supported blockchains: <ul> <li>Binance Smart Chain</li> <li>Harmony.ONE</li> <li>Ethereum</li> <li>Celo</li> <li>Polygon (Matic)</li> <li>Klaytn</li> </ul> </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$generate_auction_request = new \Tatum\Model\GenerateAuctionRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->generateAuction($generate_auction_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->generateAuction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->generateAuction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_auction_request** | [**\Tatum\Model\GenerateAuctionRequest**](../Model/GenerateAuctionRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getAuction()`

```php
api()->auction()->getAuction(
    ?string $chain, 
    ?string $contract_address, 
    ?string $id
): \Tatum\Model\GetAuction200Response
```

Get auction details from the NFT Auction

<h4>1 credit per API call.</h4><br/><p>Get detail of the specific auction.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Blockchain to work with
$chain = 'chain_example';

// Contract address
$contract_address = '0xe6e7340394958674cdf8606936d292f565e4ecc4';

// Auction ID
$id = 123456;

try {
    /** @var \Tatum\Model\GetAuction200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->getAuction($chain, $contract_address, $id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->getAuction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->getAuction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$contract_address** | **string**| Contract address |
 **$id** | **string**| Auction ID |

### Return type

[**\Tatum\Model\GetAuction200Response**](../Model/GetAuction200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getAuctionFee()`

```php
api()->auction()->getAuctionFee(
    ?string $chain, 
    ?string $contract_address
): float
```

Get NFT Auction fee

<h4>1 credit per API call.</h4><br/><p>Get fee of the auction.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Blockchain to work with
$chain = 'chain_example';

// Contract address
$contract_address = '0xe6e7340394958674cdf8606936d292f565e4ecc4';

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->getAuctionFee($chain, $contract_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->getAuctionFee(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->getAuctionFee(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$contract_address** | **string**| Contract address |

### Return type

**float**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getAuctionFeeRecipient()`

```php
api()->auction()->getAuctionFeeRecipient(
    ?string $chain, 
    ?string $contract_address
): \Tatum\Model\GetAuctionFeeRecipient200Response
```

Get NFT Auction fee recipient

<h4>1 credit per API call.</h4><br/><p>Get fee recipient of the auction.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Blockchain to work with
$chain = 'chain_example';

// Contract address
$contract_address = '0xe6e7340394958674cdf8606936d292f565e4ecc4';

try {
    /** @var \Tatum\Model\GetAuctionFeeRecipient200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->getAuctionFeeRecipient($chain, $contract_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->getAuctionFeeRecipient(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->getAuctionFeeRecipient(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$contract_address** | **string**| Contract address |

### Return type

[**\Tatum\Model\GetAuctionFeeRecipient200Response**](../Model/GetAuctionFeeRecipient200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `settleAuction()`

```php
api()->auction()->settleAuction(
    ?\Tatum\Model\CancelAuctionRequest $cancel_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Settle auction of the asset on the NFT Auction

<h4>2 credits per API call.</h4><br/> <p>Settle auction. There must be buyer present for that auction. NFT will be sent to the bidder, assets to the seller and fee to the operator.<br/> Supported blockchains: <ul> <li>Binance Smart Chain</li> <li>Harmony.ONE</li> <li>Ethereum</li> <li>Celo</li> <li>Polygon (Matic)</li> <li>Klaytn</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$cancel_auction_request = new \Tatum\Model\CancelAuctionRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->settleAuction($cancel_auction_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->settleAuction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->settleAuction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$cancel_auction_request** | [**\Tatum\Model\CancelAuctionRequest**](../Model/CancelAuctionRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `updateAuctionFee()`

```php
api()->auction()->updateAuctionFee(
    ?\Tatum\Model\UpdateFeeRequest $update_fee_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Update NFT Auction fee

<h4>2 credits per API call.</h4><br/> <p>Update fee of the auction.<br/> Supported blockchains: <ul> <li>Binance Smart Chain</li> <li>Harmony.ONE</li> <li>Ethereum</li> <li>Celo</li> <li>Polygon (Matic)</li> <li>Klaytn</li> </ul> </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$update_fee_request = new \Tatum\Model\UpdateFeeRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->updateAuctionFee($update_fee_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->updateAuctionFee(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->updateAuctionFee(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_request** | [**\Tatum\Model\UpdateFeeRequest**](../Model/UpdateFeeRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `updateAuctionFeeRecipient()`

```php
api()->auction()->updateAuctionFeeRecipient(
    ?\Tatum\Model\UpdateFeeRecipientRequest $update_fee_recipient_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Update NFT Auction fee recipient

<h4>2 credits per API call.</h4><br/> <p>Update fee recipient of the auction.<br/> Supported blockchains: <ul> <li>Binance Smart Chain</li> <li>Harmony.ONE</li> <li>Ethereum</li> <li>Celo</li> <li>Polygon (Matic)</li> <li>Klaytn</li> </ul> </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$update_fee_recipient_request = new \Tatum\Model\UpdateFeeRecipientRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->updateAuctionFeeRecipient($update_fee_recipient_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling auction()->updateAuctionFeeRecipient(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling auction()->updateAuctionFeeRecipient(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_fee_recipient_request** | [**\Tatum\Model\UpdateFeeRecipientRequest**](../Model/UpdateFeeRecipientRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)
