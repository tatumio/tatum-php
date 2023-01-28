---
title: Notification subscriptions
parent: API
layout: page
---

# Api/NotificationSubscriptionsApi

[Notification subscriptions API Reference](https://apidoc.tatum.io/tag/Notification-subscriptions/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->notificationSubscriptions();

// TestNet API Call
$sdk->testnet()->api()->notificationSubscriptions();
```

## Methods

Method | Description
------------- | -------------
[**createSubscriptionBalance()**](#createsubscriptionbalance) | Create a subscription
[**createSubscriptionContractLogEvent()**](#createsubscriptioncontractlogevent) | Create a subscription
[**createSubscriptionIncoming()**](#createsubscriptionincoming) | Create a subscription
[**createSubscriptionInterval()**](#createsubscriptioninterval) | Create a subscription
[**createSubscriptionKMSError()**](#createsubscriptionkmserror) | Create a subscription
[**createSubscriptionKMSSuccess()**](#createsubscriptionkmssuccess) | Create a subscription
[**createSubscriptionMultiTokenTransferEvent()**](#createsubscriptionmultitokentransferevent) | Create a subscription
[**createSubscriptionNftTransferEvent()**](#createsubscriptionnfttransferevent) | Create a subscription
[**createSubscriptionNotification()**](#createsubscriptionnotification) | Create a subscription
[**createSubscriptionPartialTradeMatch()**](#createsubscriptionpartialtradematch) | Create a subscription
[**createSubscriptionPending()**](#createsubscriptionpending) | Create a subscription
[**createSubscriptionTradeMatch()**](#createsubscriptiontradematch) | Create a subscription
[**createSubscriptionTxInTheBlock()**](#createsubscriptiontxintheblock) | Create a subscription
[**deleteSubscription()**](#deletesubscription) | Cancel existing subscription
[**disableWebHookHmac()**](#disablewebhookhmac) | Disable HMAC webhook digest
[**enableWebHookHmac()**](#enablewebhookhmac) | Enable HMAC webhook digest
[**getAllWebhooks()**](#getallwebhooks) | List all executed webhooks
[**getAllWebhooksCount()**](#getallwebhookscount) | Count of found entities for get webhook request
[**getSubscriptionReport()**](#getsubscriptionreport) | Obtain report for subscription
[**getSubscriptions()**](#getsubscriptions) | List all active subscriptions
[**getSubscriptionsCount()**](#getsubscriptionscount) | Count of found entities for get webhook request


## `createSubscriptionBalance()`

### Example

[👉 View "**createSubscriptionBalance.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionBalance.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionBalance(
    \Tatum\Model\CreateSubscriptionBalance $create_subscription_balance,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_balance** | [**\Tatum\Model\CreateSubscriptionBalance**](../../Model/CreateSubscriptionBalance) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionBalance operation

[Back to top](#top)



## `createSubscriptionContractLogEvent()`

### Example

[👉 View "**createSubscriptionContractLogEvent.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionContractLogEvent.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionContractLogEvent(
    \Tatum\Model\CreateSubscriptionContractLogEvent $create_subscription_contract_log_event,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_contract_log_event** | [**\Tatum\Model\CreateSubscriptionContractLogEvent**](../../Model/CreateSubscriptionContractLogEvent) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionContractLogEvent operation

[Back to top](#top)



## `createSubscriptionIncoming()`

### Example

[👉 View "**createSubscriptionIncoming.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionIncoming.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionIncoming(
    \Tatum\Model\CreateSubscriptionIncoming $create_subscription_incoming,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_incoming** | [**\Tatum\Model\CreateSubscriptionIncoming**](../../Model/CreateSubscriptionIncoming) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionIncoming operation

[Back to top](#top)



## `createSubscriptionInterval()`

### Example

[👉 View "**createSubscriptionInterval.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionInterval.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionInterval(
    \Tatum\Model\CreateSubscriptionInterval $create_subscription_interval,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_interval** | [**\Tatum\Model\CreateSubscriptionInterval**](../../Model/CreateSubscriptionInterval) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionInterval operation

[Back to top](#top)



## `createSubscriptionKMSError()`

### Example

[👉 View "**createSubscriptionKMSError.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionKMSError.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionKMSError(
    \Tatum\Model\CreateSubscriptionKMSError $create_subscription_kms_error,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_kms_error** | [**\Tatum\Model\CreateSubscriptionKMSError**](../../Model/CreateSubscriptionKMSError) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionKMSError operation

[Back to top](#top)



## `createSubscriptionKMSSuccess()`

### Example

[👉 View "**createSubscriptionKMSSuccess.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionKMSSuccess.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionKMSSuccess(
    \Tatum\Model\CreateSubscriptionKMSSuccess $create_subscription_kms_success,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_kms_success** | [**\Tatum\Model\CreateSubscriptionKMSSuccess**](../../Model/CreateSubscriptionKMSSuccess) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionKMSSuccess operation

[Back to top](#top)



## `createSubscriptionMultiTokenTransferEvent()`

### Example

[👉 View "**createSubscriptionMultiTokenTransferEvent.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionMultiTokenTransferEvent.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionMultiTokenTransferEvent(
    \Tatum\Model\CreateSubscriptionMultiTokenTransferEvent $create_subscription_multi_token_transfer_event,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_multi_token_transfer_event** | [**\Tatum\Model\CreateSubscriptionMultiTokenTransferEvent**](../../Model/CreateSubscriptionMultiTokenTransferEvent) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionMultiTokenTransferEvent operation

[Back to top](#top)



## `createSubscriptionNftTransferEvent()`

### Example

[👉 View "**createSubscriptionNftTransferEvent.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionNftTransferEvent.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionNftTransferEvent(
    \Tatum\Model\CreateSubscriptionNftTransferEvent $create_subscription_nft_transfer_event,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_nft_transfer_event** | [**\Tatum\Model\CreateSubscriptionNftTransferEvent**](../../Model/CreateSubscriptionNftTransferEvent) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionNftTransferEvent operation

[Back to top](#top)



## `createSubscriptionNotification()`

### Example

[👉 View "**createSubscriptionNotification.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionNotification.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionNotification(
    \Tatum\Model\CreateSubscriptionNotification $create_subscription_notification,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_notification** | [**\Tatum\Model\CreateSubscriptionNotification**](../../Model/CreateSubscriptionNotification) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

**2 credits per API call + credits spent on subscriptions themselves

 Each subscription type consumes a different number of credits.**

 For Free plans, there is a monthly limit of sent webhooks, which is **1000**.

 If the webhook is sent unsuccessfully, it will be retried. The number of retries depends on the plan. 

 

<ul> <li>**Free Plan** - 3 retries</li> <li>**Paid plans** - 10 retries</li> </ul>

 Create a subscription as an HTTP web hook.

 The following subscription types are available:

 

<ul> <li>**ADDRESS_TRANSACTION** - Enable HTTP POST JSON notifications for any blockchain transaction (both incoming and outgoing) at a specified address. This notification applies to transactions in the native blockchain currency or with any type of blockchain tokens.

 - For **EVM-based blockchains** (ETH), this web hook is first invoked when a transaction appears in the mempool, and then it is invoked again once the transaction is added to a block.

 - For the **other blockchains**, this webhook is invoked when a transaction is added to a block.

 Free community plans can monitor up to 10 addresses per plan.

 The following table describes the availability of this notification type on different blockchains and the credit consumption:

 

<table> 
<tr> <th>Chain</th> <th>Testnet/Mainnet</th> <th>Token assets support</th> <th>Plan limitation</th> <th>Credit consumption / day / address</th> </tr>
 
<tr> <td>Solana</td> <td>Yes/Yes</td> <td>SOL, SPL and NFTs</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>50 credits / day / address</td> </tr>
 
<tr> <td>Ethereum</td> <td>Yes (Sepolia, Goerli)/Yes</td> <td>ETH, Internal transfers, ERC20, ERC721, ERC1155</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>25 credits / day / address</td> </tr>
 
<tr> <td>Polygon</td> <td>Yes/Yes</td> <td>MATIC, ERC20, ERC721, ERC1155</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>40 credits / day / address</td> </tr>
 
<tr> <td>Celo</td> <td>Yes/Yes</td> <td>CELO, Internal transfers, ERC20, ERC721, ERC1155</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>25 credits / day / address</td> </tr>
 
<tr> <td>Klaytn</td> <td>Yes/Yes</td> <td>Klay, ERC20, ERC721, ERC1155</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>25 credits / day / address</td> </tr>
 
<tr> <td>Bitcoin</td> <td>Yes/Yes</td> <td>BTC</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>5 credits / day / address</td> </tr>
 
<tr> <td>Litecoin</td> <td>Yes/Yes</td> <td>LTC</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>7 credits / day / address</td> </tr>
 
<tr> <td>Bitcoin Cash</td> <td>Yes/Yes</td> <td>BCH, only incoming transactions</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>5 credits / day / address</td> </tr>
 
<tr> <td>Dogecoin</td> <td>Yes/Yes</td> <td>DOGE, only incoming transactions</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>7 credits / day / address</td> </tr>
 
<tr> <td>Tron</td> <td>Yes/Yes</td> <td>Tron, TRC10/TRC20</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>30 credits / day / address</td> </tr>
 
<tr> <td>Binance Smart Chain</td> <td>Yes/Yes</td> <td>BSC, BEP20, ERC721, ERC1155</td> <td>Free plans - 10 addresses across all blockchains, Paid plans - unlimited addresses across all blockchains</td> <td>40 credits / day / address</td> </tr>
 </table>

 The request body of the POST request is a JSON object with the following structure:

 <pre>{ "address": "FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ", // the address on which the transaction occurs; for EVM-based chains, this is the recipient's address "txId": "2rdy3YCZHSwvpWtuDom1d4Jjy5UU9STLxF3ffXau6GToReDkfw8wEgX541fvzvh6btVC5D8iNapcKTXfPsoDBk7A", // the transaction ID "blockNumber": 110827114, // the block number; does not appear if the transaction is in the mempool (for EVM-based blockchains) "asset": "3gUeeR3BfVhukYJMwtHownRtRkGcf1bvwiV8TbKMZBVz", // the asset of the transaction: for token assets, this is the token address; for native blochckain assets, this is the name of the asset (for example, SOL) "amount": "1", // the amount of the asset that was credited to (+) or debited from (-) the address; for EVM-based chains, when "counterAddress" is present, the amount is always positive "tokenId": "1", // (ERC-721 / ERC-1155 only) the ID of the transferred token "type": "token", // the type of the transaction; can be either "native" or "token" "mempool": true, // (EVM-based blockchains only) if appears and set to "true", the transaction is in the mempool; if set to "false" or does not appear at all, the transaction has been added to a block "counterAddress": undefined // an optional counter party address of the transaction; for EVM-based blockchains, this is the recipient's address "addressesRiskRatio": [ // (optional, subject to change; for Solana mainnet only) risk levels assigned to the addresses with which the address communicated within the transaction; the addresses are assessed using the AML/CFT solution by blockmate.io, see https://docs.blockmate.io/docs/risk-API/sources {"vTEfAhXTmvgFmepgfhzBbRrJ4EtUP9adbMJjpzLsDMk": 0}, {"zBbRrJ4EtUP9adbMJjpzLsDMkvTEfAhXTmvgFmepgfh": 100} ] }</pre> **5 credits are debited for each fired web hook.**

</li> <li>**CONTRACT_NFT_TXS_PER_BLOCK** - Enable HTTP POST JSON notifications for any event of minting, transferring, or burning an NFT that was emitted from any smart contract. This notification is fired as a batch notification per block: it includes all NFT minting, transferring, or burning events from all smart contracts that got recorded into a block.

 Free community plans can monitor 1 event across all blockchains per plan.

 The following table describes the availability of this notification type on different blockchains and the credit consumption:

 

<table> 
<tr> <th>Chain</th> <th>Available chains (the "chain" parameter in the response payload)</th> <th>Credit consumption / day</th> </tr>
 
<tr> <td>Ethereum</td> <td>ethereum-sepolia / ethereum-goerli / ethereum-mainnet</td> <td>500,000 credits / day</td> </tr>
 
<tr> <td>Polygon</td> <td>polygon-mumbai / polygon-mainnet</td> <td>500,000 credits / day</td> </tr>
 
<tr> <td>Celo</td> <td>celo-testnet / celo-mainnet</td> <td>500,000 credits / day</td> </tr>
 
<tr> <td>Klaytn</td> <td>klaytn-baobab / klaytn-cypress</td> <td>500,000 credits / day</td> </tr>
 
<tr> <td>BNB Smart Chain</td> <td>bsc-testnet / bsc-mainnet</td> <td>500,000 credits / day</td> </tr>
 </table>

 The request body of the POST request is a JSON object with the following structure:

 <pre>{ "events": [ { "timestamp": 1661961758000, "from": "0x0000000000000000000000000000000000000000", "to": "0xfa4e7035b34294407e5df1603215983d65e5a773", "tokenId": "14671", "txId": "0x916fcf878656f7a3772317697e6d2740ac8b1b7dbe6d029aa79592fd72f3fb0b", "contractAddress": "0x55a2430e32dcebc3649120f26f917d1f0686f74c", "type": "erc721", "amount": "1", "logIndex": 578, "metadataURI": "https://graphigo.prd.galaxy.eco/metadata/0x55a2430e32dcebc3649120f26f917d1f0686f74c/14671.json" } ], "blockNumber": 32522207, "chain": "polygon-mainnet", "subscriptionType": "CONTRACT_NFT_TXS_PER_BLOCK" }</pre> **1 credit is debited for each fired web hook.**

</li> <li>**CONTRACT_MULTITOKEN_TXS_PER_BLOCK** - Enable HTTP POST JSON notifications for any event of minting, transferring, or burning a Multi-Token that was emitted from any smart contract. This notification is fired as a batch notification per block: it includes all Multi Token minting, transferring, or burning events from all smart contracts that got recorded into a block.

 Free community plans can monitor 1 event across all blockchains per plan.

 The following table describes the availability of this notification type on different blockchains and the credit consumption:

 

<table> 
<tr> <th>Chain</th> <th>Available chains (the "chain" parameter in the response payload)</th> <th>Credit consumption / day</th> </tr>
 
<tr> <td>Ethereum</td> <td>ethereum-sepolia / ethereum-goerli / ethereum-mainnet</td> <td>500,000 credits / day</td> </tr>
 
<tr> <td>Polygon</td> <td>polygon-mumbai / polygon-mainnet</td> <td>500,000 credits / day</td> </tr>
 
<tr> <td>Celo</td> <td>celo-testnet / celo-mainnet</td> <td>500,000 credits / day</td> </tr>
 
<tr> <td>Klaytn</td> <td>klaytn-baobab / klaytn-cypress</td> <td>500,000 credits / day</td> </tr>
 
<tr> <td>BNB Smart Chain</td> <td>bsc-testnet / bsc-mainnet</td> <td>500,000 credits / day</td> </tr>
 </table>

 The request body of the POST request is a JSON object with the following structure:

 <pre>{ "events": [ { "timestamp": 1661961758000, "from": "0x85bd970cf0e49acd572f9c2d608713bc55b5ee0e", "to": "0x9ab31230d5413e4af01af9bb697651a3c70c95c9", "tokenId": "1450000023306", "txId": "0x565b9ca6b7b5ff1b1ce0725acd785dbf5ff0930d5ff547bad044c0960291555f", "contractAddress": "0xdb6290f355a528a7284bdd528b05a78fb05226ca", "type": "erc1155", "amount": "1", "logIndex": 571, "metadataURI": "https://touhao.bj.bcebos.com/nft/metadata/1450000023306.json" } ], "blockNumber": 32522207, "chain": "polygon-mainnet", "subscriptionType": "CONTRACT_MULTITOKEN_TXS_PER_BLOCK" }</pre> **1 credit is debited for each fired web hook.**

</li> <li>**CONTRACT_LOG_EVENT** - Enable HTTP POST JSON notifications for any event that was emitted from any smart contract. This notification is fired as a batch notification per block: it includes all events from all smart contracts that got recorded into a block.

 Free community plans can monitor 1 event across all blockchains per plan.

 The following table describes the availability of this notification type on different blockchains and the credit consumption:

 

<table> 
<tr> <th>Chain</th> <th>Available chains (the "chain" parameter in the response payload)</th> <th>Credit consumption / day</th> </tr>
 
<tr> <td>Ethereum</td> <td>ethereum-sepolia / ethereum-goerli / ethereum-mainnet</td> <td>50,000 credits / day</td> </tr>
 
<tr> <td>Polygon</td> <td>polygon-mumbai / polygon-mainnet</td> <td>50,000 credits / day</td> </tr>
 
<tr> <td>Celo</td> <td>celo-testnet / celo-mainnet</td> <td>50,000 credits / day</td> </tr>
 
<tr> <td>Klaytn</td> <td>klaytn-baobab / klaytn-cypress</td> <td>50,000 credits / day</td> </tr>
 
<tr> <td>BNB Smart Chain</td> <td>bsc-testnet / bsc-mainnet</td> <td>50,000 credits / day</td> </tr>
 </table>

 The request body of the POST request is a JSON object with the following structure:

 <pre>{ "events": [ { "txId": "0xc98307f09ed527d5cff8305e8f65226b790e3317ded10b9e58f6f07286dcf8f1", "logIndex": 326, "timestamp": 1661774265000, "address": "0xc2132d05d31c914a87c6611c10748aeb04b58e8f", "topic_0": "0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef", "topic_1": "0x000000000000000000000000a91ab7d77892a559d2a95baaf1d748fc97c65d29", "topic_2": "0x0000000000000000000000009b08288c3be4f62bbf8d1c20ac9c5e6f9467d8b7", "topic_3": null, "data": "0x0000000000000000000000000000000000000000000000000000000002c9e3e4" } ], "blockNumber": 32447538, "chain": "polygon-mumbai", "subscriptionType": "CONTRACT_LOG_EVENT" }</pre> **1 credit is debited for each fired web hook.**

</li> <li>**ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION** - Enable HTTP POST JSON notifications about incoming blockchain transactions on virtual accounts. This web hook is invoked when an incoming transaction is reflected on the balance of the virtual account (the balance is credited with the transaction amount). This happens when the transaction has the sufficient number of blockchain confirmations: two confirmations for BTC, LTC, BCH, and DOGE, and one confirmation for the other blockchains.

 The request body of the POST request is a JSON object with the following structure: <pre>{ "date": 1619176527481, "amount": "0.005", "currency": "BTC", "subscriptionType":"ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION", "accountId": "6082ab462936b4478117c6a0", "reference: "c9875708-4ba3-41c9-a4cd-271048b41b9a", // the reference of the transaction in the virtual account "txId": "45af182a0ffab58e5ba32fee57b297b2260c6e23a1de5ddc76c7ee22d72dea99", "blockHash": "45af182a0ffab58e5ba32fee57b297b2260c6e23a1de5ddc76c7ee22d72dea99", // the hash of the block, might not be present every time "blockHeight": 12345, "from": "SENDER_ADDRESS", // might not be present every time; not present for UTXO-based blockchains "to": "RECIPIENT_ADDRESS_CONNECTED_TO_LEDGER_ACCOUNT", // the blockchain address of the recipient "index": 5 // for UTXO-based blockchains (BCH, BTC, DOGE, LTC), this is the index of the output in the transaction }</pre> 1 credit is debited for each monitored account every day.</li> <li>**ACCOUNT_PENDING_BLOCKCHAIN_TRANSACTION** - Enable HTTP POST JSON notifications about incoming blockchain transactions on virtual accounts.

 This web hook is supported only for BCH, BTC, DOGE, ETH, and LTC accounts.

 - For **BTC-based blockchains** (BCH, BTC, DOGE, and LTC), this web hook is invoked when an incoming transaction appears in a block for the first time. At that time, the transaction has one confirmation but this is not enough for the transaction to be reflected on the balance of the virtual account yet. Instead, a deposit corresponding to the pending transaction with a status of "in progress" appears on the virtual account. Once the transaction is added to the block, the deposit's status changes to "done", and the account balance gets updated.

 - For **EVM-based blockchains** (ETH), this web hook is invoked when an incoming transaction appears in the mempool. The virtual account balance is not updated until the transaction is added to a block. Instead, a deposit corresponding to the pending transaction with a status of "in progress" appears on the virtual account. Once the transaction is added to the block, the deposit's status changes to "done", and the account balance gets updated.

 The request body of the POST request is a JSON object with the following structure:

 <pre>{ "date": 1619176527481, "amount": "0.005", "currency": "BTC", "accountId": "6082ab462936b4478117c6a0", "reference: "c9875708-4ba3-41c9-a4cd-271048b41b9a", // the reference of the transaction in the virtual account "txId": "45af182a0ffab58e5ba32fee57b297b2260c6e23a1de5ddc76c7ee22d72dea99", "blockHash": "45af182a0ffab58e5ba32fee57b297b2260c6e23a1de5ddc76c7ee22d72dea99", // the hash of the block, might not be present every time; if set to "null", the transaction is in the mempool (for EVM-based blockchains) "blockHeight": 12345, // if set to "null", the transaction is in the mempool (for EVM-based blockchains) "from": "SENDER_ADDRESS", // might not be present every time; not present for UTXO-based blockchains (BCH, BTC, DOGE, LTC) "to": "RECIPIENT_ADDRESS_CONNECTED_TO_LEDGER_ACCOUNT", // the blockchain address of the recipient "index": 5 // for UTXO-based blockchains (BCH, BTC, DOGE, LTC), this is the index of the output in the transaction }</pre> 1 credit is debited for each monitored account every day.</li> <li>**CUSTOMER_TRADE_MATCH** - Enable HTTP POST JSON notifications on closed trade, which occurs on any customer account. This web hook will be invoked, when the open trade is filled and closed. Works also for the Trade Futures. If is triggered by the futures, bool field expiredWithoutMatch is present. Request body of the POST request will be JSON object with attributes:

 <pre>{ "created": 1619176527481, "amount": "0.005", "price": "0.02", "type": "SELL", "pair": "VC_CHF/VC_CHF3", "id": "6082ab462936b4478117c6a0", // id of the trade "currency1AccountId": "6082ab462936b4478117c6a0", "currency2AccountId": "6082ab512936b4478117c6a2", "fee": null, "feeAccountId": null, "isMaker": true, "expiredWithoutMatch": false }</pre> 10 credits will be debited for every monitored customer every day.</li> <li>**CUSTOMER_PARTIAL_TRADE_MATCH** - Enable HTTP POST JSON notifications on partialy filled trade, which occurs on any customer account. This web hook will be invoked, when the open trade is partialy filled. Request body of the POST request will be JSON object with attributes:

 <pre>{ "created": 1619176527481, "amount": "0.005", "orderAmount": "0.1", "price": "0.02", "type": "SELL", "pair": "VC_CHF/VC_CHF3", "id": "6082ab462936b4478117c6a0", // id of the trade "currency1AccountId": "6082ab462936b4478117c6a0", "currency2AccountId": "6082ab512936b4478117c6a2", "fee": null, "feeAccountId": null, "isMaker": true, "expiredWithoutMatch": false }</pre> 10 credits will be debited for every monitored customer every day.</li> <li>**TRANSACTION_IN_THE_BLOCK** - Enable HTTP POST JSON notifications on ledger => blockchain transaction, when transaction is included in the block. This web hook will be invoked, when the outgoing transaction is included in the block. Request body of the POST request will be JSON object with attributes:

 <pre> { "txId": "0x026f4f05b972c09279111da13dfd20d8df04eff436d7f604cd97b9ffaa690567", "reference": "90270634-5b07-4fad-b17b-f82899953533", "accountId": "6086ed0744c45b24d4fbd039", "currency": "BSC", "withdrawalId": "608fe5b73a893234ba379ab2", "address": "0x8ce4e40889a13971681391AAd29E88eFAF91f784", "amount": "0.1", "blockHeight": 8517664 }</pre> 10 credits will be debited every day, 1 credit for every included transaction notified via web hook.</li> <li>**KMS_FAILED_TX** - Enable HTTP POST JSON notifications on error during KMS signature process. This web hook will be invoked, when the Tatum KMS receives error during processing transactions. Request body of the POST request will be JSON object with attributes:

 <pre>{ "signatureId": "6082ab462936b4478117c6a0", "error": "Error message from the KMS" }</pre> 10 credits will be debited every day.</li> <li>**KMS_COMPLETED_TX** - Enable HTTP POST JSON notifications on successful completion of KMS signature process. This web hook will be invoked, when the Tatum KMS successfully completes the signature during processing transactions. Request body of the POST request will be JSON object with attributes:

 <pre>{ "signatureId": "6082ab462936b4478117c6a0", "txId": "0x7bb7d3b90567e89f999f2e3d263bc3738a018dbbcfa9f5397678cf17cdf0235f" }</pre> 10 credits will be debited every day.</li> <li>**ACCOUNT_BALANCE_LIMIT** - Report with all account balances above desired limit.</li> <li>**TRANSACTION_HISTORY_REPORT** - Report with all ledger transactions for last X hours, where X is set by the subscription attribute as interval. Maximum number of transactions returned by this report is 20000. Transactions are obtained from the time of the invocation of the GET method to obtain report - X hours.</li> </ul>

 In case of unsuccesful web hook response status - other then 2xx - web hook is repeated 9 more times with exponential backoff. Parameters are T = 15 * 2.7925^9, where 15 is interval in s, backoff rate is 2.7925 and 9 is current number of retries. Last web hook is fired after 24 hours approximatelly. After last failed attempt, web hook is deleted from our system. The 2xx response must be returned in 10 seconds after web hook is fired.

 Result of the operation is subscription ID, which can be used to cancel subscription or obtain additional data connected to it like reports.

[Back to top](#top)



## `createSubscriptionPartialTradeMatch()`

### Example

[👉 View "**createSubscriptionPartialTradeMatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionPartialTradeMatch.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionPartialTradeMatch(
    \Tatum\Model\CreateSubscriptionPartialTradeMatch $create_subscription_partial_trade_match,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_partial_trade_match** | [**\Tatum\Model\CreateSubscriptionPartialTradeMatch**](../../Model/CreateSubscriptionPartialTradeMatch) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionPartialTradeMatch operation

[Back to top](#top)



## `createSubscriptionPending()`

### Example

[👉 View "**createSubscriptionPending.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionPending.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionPending(
    \Tatum\Model\CreateSubscriptionPending $create_subscription_pending,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_pending** | [**\Tatum\Model\CreateSubscriptionPending**](../../Model/CreateSubscriptionPending) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionPending operation

[Back to top](#top)



## `createSubscriptionTradeMatch()`

### Example

[👉 View "**createSubscriptionTradeMatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionTradeMatch.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionTradeMatch(
    \Tatum\Model\CreateSubscriptionTradeMatch $create_subscription_trade_match,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_trade_match** | [**\Tatum\Model\CreateSubscriptionTradeMatch**](../../Model/CreateSubscriptionTradeMatch) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionTradeMatch operation

[Back to top](#top)



## `createSubscriptionTxInTheBlock()`

### Example

[👉 View "**createSubscriptionTxInTheBlock.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/createSubscriptionTxInTheBlock.php)

### Request

> **POST** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->createSubscriptionTxInTheBlock(
    \Tatum\Model\CreateSubscriptionTxInTheBlock $create_subscription_tx_in_the_block,
    [ string $testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_subscription_tx_in_the_block** | [**\Tatum\Model\CreateSubscriptionTxInTheBlock**](../../Model/CreateSubscriptionTxInTheBlock) |  |
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\Id**](../../Model/Id)

### Description

Create a subscription

CreateSubscriptionTxInTheBlock operation

[Back to top](#top)



## `deleteSubscription()`

### Example

[👉 View "**deleteSubscription.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/deleteSubscription.php)

### Request

> **DELETE** `/v3/subscription/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->deleteSubscription(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Subscription ID |

### Return type

void (empty response body)

### Description

Cancel existing subscription

<h4>1 credit for API call</h4>

Cancel existing subscription.

[Back to top](#top)



## `disableWebHookHmac()`

### Example

[👉 View "**disableWebHookHmac.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/disableWebHookHmac.php)

### Request

> **DELETE** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->disableWebHookHmac()
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Description

Disable HMAC webhook digest

<h4>2 credits per API call.</h4>

Disable HMAC hash ID on the fired webhooks from Tatum API.

[Back to top](#top)



## `enableWebHookHmac()`

### Example

[👉 View "**enableWebHookHmac.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/enableWebHookHmac.php)

### Request

> **PUT** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->enableWebHookHmac(
    \Tatum\Model\HmacWebHook $hmac_web_hook
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hmac_web_hook** | [**\Tatum\Model\HmacWebHook**](../../Model/HmacWebHook) |  |

### Return type

void (empty response body)

### Description

Enable HMAC webhook digest

<h4>2 credits per API call.</h4>

Enable HMAC hash ID on the fired webhooks from Tatum API. In order to make sure that a webhook is sent by us, we have the possibility to sign it with the HMAC Sha512 Hex algorithm.

 To verify that a webhook is sent by us 

<ol> <li>Get a webhook **x-payload-hash** header value and payload as it is as a JSON file.</li> <li>Convert the HTTP webhook body to stringify JSON without any spaces. In JavaScript, you would do it like this <pre>JSON.stringify(req.body)</pre></li> <li>Perform calculations on your side to create a digest using Secret Key, webhook payload in bytes and HMAC SHA512 algorithm. JavaScript example: <pre>require('crypto').createHmac('sha512', hmacSecret).update(JSON.stringify(req.body)).digest('base64')</pre>.</li> <li>Compare x-payload-hash header value with calculated digest as a Base64 string.</li>

[Back to top](#top)



## `getAllWebhooks()`

### Example

[👉 View "**getAllWebhooks.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/getAllWebhooks.php)

### Request

> **GET** `/v3/subscription/webhook`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->getAllWebhooks(
    float $page_size,
    [ float $offset, ]
    [ string $direction, ]
    [ bool $failed ]
): \Tatum\Model\WebHook[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$direction** | **string**  | Direction of sorting | [optional]
 **$failed** | **bool**  | Flag indicating whether the webhook was successful or not | [optional]

### Return type

[**\Tatum\Model\WebHook[]**](../../Model/WebHook)

### Description

List all executed webhooks

<h4>1 credit per API call.</h4>

List all webhooks.

[Back to top](#top)



## `getAllWebhooksCount()`

### Example

[👉 View "**getAllWebhooksCount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/getAllWebhooksCount.php)

### Request

> **GET** `/v3/subscription/webhook/count`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->getAllWebhooksCount(
    float $page_size,
    [ float $offset, ]
    [ string $direction, ]
    [ bool $failed ]
): \Tatum\Model\EntitiesCount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$direction** | **string**  | Direction of sorting | [optional]
 **$failed** | **bool**  | Flag indicating whether the webhook was successful or not | [optional]

### Return type

[**\Tatum\Model\EntitiesCount**](../../Model/EntitiesCount)

### Description

Count of found entities for get webhook request

<h4>1 credit per API call.</h4>

Count of webhooks that were found from /v3/subscription/webhook

[Back to top](#top)



## `getSubscriptionReport()`

### Example

[👉 View "**getSubscriptionReport.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/getSubscriptionReport.php)

### Request

> **GET** `/v3/subscription/report/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->getSubscriptionReport(
    string $id
): \Tatum\Model\GetSubscriptionReport200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Subscription ID |

### Return type

[**\Tatum\Model\GetSubscriptionReport200Response**](../../Model/GetSubscriptionReport200Response)

### Description

Obtain report for subscription

<h4>1 credit for API call. Based on the required report type, additional credits may be charged.</h4>

 Obtain report from subscription based on its type. Following reports are supported: 

<ul> <li>**ACCOUNT_BALANCE_LIMIT** - obtain list of all ledger accounts with account balance above the limit. 1 credit per 50 returned records is charged.</li> <li>**TRANSACTION_HISTORY_REPORT** - obtain list of all ledger transaction for last X hours from the time of invocation. 1 credit per 50 returned records is charged.</li> </ul>

[Back to top](#top)



## `getSubscriptions()`

### Example

[👉 View "**getSubscriptions.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/getSubscriptions.php)

### Request

> **GET** `/v3/subscription`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->getSubscriptions(
    float $page_size,
    [ float $offset, ]
    [ string $address ]
): \Tatum\Model\Subscription[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$address** | **string**  | Value for filtering by address | [optional]

### Return type

[**\Tatum\Model\Subscription[]**](../../Model/Subscription)

### Description

List all active subscriptions

<h4>1 credit per API call.</h4>

List all active subscriptions.

[Back to top](#top)



## `getSubscriptionsCount()`

### Example

[👉 View "**getSubscriptionsCount.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NotificationSubscriptionsApi/getSubscriptionsCount.php)

### Request

> **GET** `/v3/subscription/count`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->notificationSubscriptions()->getSubscriptionsCount(
    float $page_size,
    [ float $offset, ]
    [ string $address ]
): \Tatum\Model\EntitiesCount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$address** | **string**  | Value for filtering by address | [optional]

### Return type

[**\Tatum\Model\EntitiesCount**](../../Model/EntitiesCount)

### Description

Count of found entities for get webhook request

<h4>1 credit per API call.</h4>

Count of subscriptions that were found from /v3/subscription

[Back to top](#top)

