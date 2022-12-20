# Tatum/Api/AuctionApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveNftAuctionSpending()**](#approvenftauctionspending) | **POST** /v3/blockchain/auction/approve | Allow the NFT auction or marketplace to transfer an asset
[**bidOnAuction()**](#bidonauction) | **POST** /v3/blockchain/auction/bid | Bid for an asset at the NFT auction
[**cancelAuction()**](#cancelauction) | **POST** /v3/blockchain/auction/cancel | Cancel the selling of an asset at the NFT auction
[**createAuction()**](#createauction) | **POST** /v3/blockchain/auction/sell | Sell an asset at the NFT auction
[**generateAuction()**](#generateauction) | **POST** /v3/blockchain/auction | Create an NFT auction
[**getAuction()**](#getauction) | **GET** /v3/blockchain/auction/{chain}/{contractAddress}/{id} | Get information about an auctioned asset at the NFT auction
[**getAuctionFee()**](#getauctionfee) | **GET** /v3/blockchain/auction/{chain}/{contractAddress}/fee | Get the NFT auction fee
[**getAuctionFeeRecipient()**](#getauctionfeerecipient) | **GET** /v3/blockchain/auction/{chain}/{contractAddress}/recipient | Get the recipient of the NFT auction fee
[**settleAuction()**](#settleauction) | **POST** /v3/blockchain/auction/settle | Settle an NFT auction
[**updateAuctionFee()**](#updateauctionfee) | **PUT** /v3/blockchain/auction/fee | Update the NFT auction fee
[**updateAuctionFeeRecipient()**](#updateauctionfeerecipient) | **PUT** /v3/blockchain/auction/recipient | Update the recipient of the NFT auction fee


## `approveNftAuctionSpending()`

```php
api()->auction()->approveNftAuctionSpending(
    ?\Tatum\Model\ApproveNftAuctionSpendingRequest $approve_nft_auction_spending_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Allow the NFT auction or marketplace to transfer an asset

<p><b>2 credits per API call</b></p> <p>Allow the NFT auction/marketplace smart contract to transfer the asset (NFT or Multi Token) that is listed for selling.<br/>The auction/marketplace smart contract will transfer the asset to the buyer after the asset is purchased.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When allowing the NFT auction/marketplace smart contract to transfer the asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

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

[[Back to top]](#) | [[Back to Index]](../index.md)

## `bidOnAuction()`

```php
api()->auction()->bidOnAuction(
    ?\Tatum\Model\BidOnAuctionRequest $bid_on_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Bid for an asset at the NFT auction

<p><b>2 credits per API call</b></p> <p>Bid for an asset listed on the NFT auction.</p> <p>You can buy the asset either for the native blockchain assets (for example, ETH, BSC, and so on) or for the fungible tokens of the blockchain.</p> <ul> <li>If you want to pay for the asset with the <b>native assets</b>, send the required amount of the assets with the API call.</li> <li>If you want to pay with the <b>fungible tokens</b>, <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Approve" target="_blank">allow the auction smart contract to access your tokens</a> before bidding for the asset. When you make the API call, the auction smart contract will deduct the required amount of the tokens from the smart contract where you hold the tokens.</li> </ul> <p>After you have purchased the asset, it is in a pending state until <a href="#operation/SettleAuction" target="_blank">the auction is settled</a>. Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction.</p> For the complete information about how the bidding/purchase process at an auction works, see the API for <a href="#operation/GenerateAuction" target="_blank">creating an NFT auction</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When bidding for an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

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

[[Back to top]](#) | [[Back to Index]](../index.md)

## `cancelAuction()`

```php
api()->auction()->cancelAuction(
    ?\Tatum\Model\CancelAuctionRequest $cancel_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Cancel the selling of an asset at the NFT auction

<p><b>2 credits per API call</b></p> <p>Cancel the selling of an asset at the NFT auction.</p> <p>You can cancel the selling only if you are the seller of the asset or the auction operator. Once the selling is canceled, the asset is returned to the seller.</p> <p>You cannot cancel the selling if the asset has already been purchased.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When cancelling the selling of an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

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

[[Back to top]](#) | [[Back to Index]](../index.md)

## `createAuction()`

```php
api()->auction()->createAuction(
    ?\Tatum\Model\CreateAuctionRequest $create_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Sell an asset at the NFT auction

<p><b>2 credits per API call</b></p> <p>Create new auction on the auction contract. Before operation, seller must approve spending of the NFT token for the Auction contract using <a href="#operation/ApproveNftAuctionSpending">Approve NFT</a>. After auction is created, auction contract transfers the asset to the auction smart contract. Only auction for existing NFTs can be created - seller must be owner of the NFT asset. <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When selling an asset at the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

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

[[Back to top]](#) | [[Back to Index]](../index.md)

## `generateAuction()`

```php
api()->auction()->generateAuction(
    ?\Tatum\Model\GenerateAuctionRequest $generate_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Create an NFT auction

<p><b>2 credits per API call</b></p> <p>Deploy new smart contract for NFT auction logic. Smart contract enables auction operator to create new auction for NFT (ERC-721/1155). Operator can set a fee in percentage, which will be paid on top of the price of the asset. can be offered for native asset - ETH, BSC, etc. - or any ERC20 token - this is configurable during auction creation. Before auction is created, seller must approve transfer of the NFT to the auction contract. Buyer will bid for the asset from the auction using native asset - send assets along the gid() smart contract call, or via ERC20 token. Buyer of the auction must perform approval for the smart contract to access ERC20 token, before the actual bid() method is called. Once there is higher bid then the actual one, the previous bidder's funds will be returned to him and new bidder will be the current winning one. When auction ends, anyone can settle the auction - NFT will be sent to the bidder, assets to the seller and fee to the operator.<br/> This operation deploys a smart contract on the blockchain. <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When creating an NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

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

[[Back to top]](#) | [[Back to Index]](../index.md)

## `getAuction()`

```php
api()->auction()->getAuction(
    ?string $chain, 
    ?string $contract_address, 
    ?string $id
): \Tatum\Model\GetAuction200Response
```

Get information about an auctioned asset at the NFT auction

<p><b>1 credit per API call</b></p> <p>Get information about a specific auctioned asset at the NFT auction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> </ul>

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

[[Back to top]](#) | [[Back to Index]](../index.md)

## `getAuctionFee()`

```php
api()->auction()->getAuctionFee(
    ?string $chain, 
    ?string $contract_address
): float
```

Get the NFT auction fee

<p><b>1 credit per API call</b></p> <p>Get the NFT auction fee.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> </ul>

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

[[Back to top]](#) | [[Back to Index]](../index.md)

## `getAuctionFeeRecipient()`

```php
api()->auction()->getAuctionFeeRecipient(
    ?string $chain, 
    ?string $contract_address
): \Tatum\Model\GetAuctionFeeRecipient200Response
```

Get the recipient of the NFT auction fee

<p><b>1 credit per API call</b></p> <p>Get the recipient of the NFT auction fee.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> </ul>

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

[[Back to top]](#) | [[Back to Index]](../index.md)

## `settleAuction()`

```php
api()->auction()->settleAuction(
    ?\Tatum\Model\SettleAuctionRequest $settle_auction_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Settle an NFT auction

<p><b>2 credits per API call</b></p> <p>Settle an auction once it has ended and there is a buyer of the asset at this auction. Settling the auction means that the asset is transferred to the buyer, the amount is transferred to the seller, and the fee is transferred to the fee recipient of the auction.<br/>Both seller and buyer can settle the auction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>NOTE:</b> When making this API call, you may get the following message:<br/> <code>Although one or more Error Occurred [execution reverted] Contract Execution Completed</code><br/> This message is a result of the auction version check and has no impact on completing the API call. You can safely ignore it.</p> <p><b>Signing a transaction</b><br/> When settling the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$settle_auction_request = new \Tatum\Model\SettleAuctionRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->settleAuction($settle_auction_request);
    
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
 **$settle_auction_request** | [**\Tatum\Model\SettleAuctionRequest**](../Model/SettleAuctionRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `updateAuctionFee()`

```php
api()->auction()->updateAuctionFee(
    ?\Tatum\Model\UpdateAuctionFeeRequest $update_auction_fee_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Update the NFT auction fee

<p><b>2 credits per API call</b></p> <p>Update the NFT auction fee.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When updating the NFT auction fee, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$update_auction_fee_request = new \Tatum\Model\UpdateAuctionFeeRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->updateAuctionFee($update_auction_fee_request);
    
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
 **$update_auction_fee_request** | [**\Tatum\Model\UpdateAuctionFeeRequest**](../Model/UpdateAuctionFeeRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `updateAuctionFeeRecipient()`

```php
api()->auction()->updateAuctionFeeRecipient(
    ?\Tatum\Model\UpdateAuctionFeeRecipientRequest $update_auction_fee_recipient_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Update the recipient of the NFT auction fee

<p><b>2 credits per API call</b></p> <p>Update the recipient of the NFT auction fee.<br/> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When updating the recipient of the NFT auction, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$update_auction_fee_recipient_request = new \Tatum\Model\UpdateAuctionFeeRecipientRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->auction()
        ->updateAuctionFeeRecipient($update_auction_fee_recipient_request);
    
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
 **$update_auction_fee_recipient_request** | [**\Tatum\Model\UpdateAuctionFeeRecipientRequest**](../Model/UpdateAuctionFeeRecipientRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)
