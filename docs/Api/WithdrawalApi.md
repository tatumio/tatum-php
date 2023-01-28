---
title: Withdrawal
parent: API
layout: page
---

# Api/WithdrawalApi

[Withdrawal API Reference](https://apidoc.tatum.io/tag/Withdrawal/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->withdrawal();

// TestNet API Call
$sdk->testnet()->api()->withdrawal();
```

## Methods

Method | Description
------------- | -------------
[**broadcastBlockchainTransaction()**](#broadcastblockchaintransaction) | Broadcast signed transaction and complete withdrawal
[**cancelInProgressWithdrawal()**](#cancelinprogresswithdrawal) | Cancel withdrawal
[**completeWithdrawal()**](#completewithdrawal) | Complete withdrawal
[**getWithdrawals()**](#getwithdrawals) | Get withdrawals
[**storeWithdrawal()**](#storewithdrawal) | Store withdrawal


## `broadcastBlockchainTransaction()`

### Example

[👉 View "**broadcastBlockchainTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/WithdrawalApi/broadcastBlockchainTransaction.php)

### Request

> **POST** `/v3/offchain/withdrawal/broadcast`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->withdrawal()->broadcastBlockchainTransaction(
    \Tatum\Model\BroadcastWithdrawal $broadcast_withdrawal
): \Tatum\Model\BroadcastResponse
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_withdrawal** | [**\Tatum\Model\BroadcastWithdrawal**](../../Model/BroadcastWithdrawal) |  |

### Return type

[**\Tatum\Model\BroadcastResponse**](../../Model/BroadcastResponse)

### Description

Broadcast signed transaction and complete withdrawal

<h4>2 credits per API call.</h4>

 Broadcast signed raw transaction end complete withdrawal associated with it. When broadcast succeeded but it is impossible to complete withdrawal, transaction id of transaction is returned and withdrawal must be completed manually.

[Back to top](#top)



## `cancelInProgressWithdrawal()`

### Example

[👉 View "**cancelInProgressWithdrawal.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/WithdrawalApi/cancelInProgressWithdrawal.php)

### Request

> **DELETE** `/v3/offchain/withdrawal/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->withdrawal()->cancelInProgressWithdrawal(
    string $id,
    [ bool $revert = true ]
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | ID of created withdrawal |
 **$revert** | **bool**  | Defines whether fee should be reverted to account balance as well as amount. Defaults to true. Revert true would be typically used when withdrawal was not broadcast to blockchain. False is used usually for Ethereum based currencies when gas was consumed but transaction was reverted. | [optional] [default to true]

### Return type

void (empty response body)

### Description

Cancel withdrawal

<h4>1 credit per API call.</h4>

 This method is helpful if you need to cancel the withdrawal if the blockchain transaction fails or is not yet processed. This does not cancel already broadcast blockchain transaction, only Tatum internal withdrawal, and the ledger transaction, that was linked to this withdrawal.

 By default, the transaction fee is included in the reverted transaction. There are situations, like sending ERC20 on ETH, TRC token on TRON, XLM or XRP based assets, when the fee should not be reverted, because e.g. the fee is in calculated in Ethereum and transaction was in ERC20 currency. In this situation, only the transaction amount should be reverted, not the fee.

[Back to top](#top)



## `completeWithdrawal()`

### Example

[👉 View "**completeWithdrawal.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/WithdrawalApi/completeWithdrawal.php)

### Request

> **PUT** `/v3/offchain/withdrawal/{id}/{txId}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->withdrawal()->completeWithdrawal(
    string $id,
    string $tx_id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | ID of created withdrawal |
 **$tx_id** | **string**  | Blockchain transaction ID of created withdrawal |

### Return type

void (empty response body)

### Description

Complete withdrawal

<h4>2 credits per API call.</h4>

 Invoke complete withdrawal as soon as blockchain transaction ID is available. All other withdrawals for the same currency will be pending unless the last one is processed and marked as completed.

[Back to top](#top)



## `getWithdrawals()`

### Example

[👉 View "**getWithdrawals.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/WithdrawalApi/getWithdrawals.php)

### Request

> **GET** `/v3/offchain/withdrawal`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->withdrawal()->getWithdrawals(
    float $page_size,
    [ string $currency, ]
    [ string $status, ]
    [ float $offset ]
): \Tatum\Model\WithdrawalObject[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$currency** | **string**  | Currency of the withdrawal | [optional]
 **$status** | **string**  | Status of the withdrawal | [optional]
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]

### Return type

[**\Tatum\Model\WithdrawalObject[]**](../../Model/WithdrawalObject)

### Description

Get withdrawals

<h4>1 credit per API call.</h4>

Get withdrawals.

[Back to top](#top)



## `storeWithdrawal()`

### Example

[👉 View "**storeWithdrawal.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/WithdrawalApi/storeWithdrawal.php)

### Request

> **POST** `/v3/offchain/withdrawal`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->withdrawal()->storeWithdrawal(
    \Tatum\Model\Withdrawal $withdrawal
): \Tatum\Model\WithdrawalResponse
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$withdrawal** | [**\Tatum\Model\Withdrawal**](../../Model/Withdrawal) |  |

### Return type

[**\Tatum\Model\WithdrawalResponse**](../../Model/WithdrawalResponse)

### Description

Store withdrawal

<h4>2 credits per API call</h4>

 Create a withdrawal from Tatum Ledger account to the blockchain.

 <h4>BTC, LTC, DOGE, BCH</h4>

 When withdrawal from Tatum is executed, all deposits, which are not processed yet are used as an input and change is moved to pool address 0 of wallet for defined account's xpub. If there are no unspent deposits, only last pool address 0 UTXO is used. If balance of wallet is not sufficient, it is impossible to perform withdrawal from this account -> funds were transferred to another linked wallet within system or outside of Tatum visibility.

 For the first time of withdrawal from wallet, there must be some deposit made and funds are obtained from that. Since there is no withdrawal, there was no transfer to pool address 0 and thus it is not present in vIn. Pool transfer is identified by missing data.address property in response. When last not cancelled withdrawal is not completed and thus there is no tx id of output transaction given, we cannot perform next withdrawal. 

 <h4>ETH</h4>

 Withdrawal from Tatum can be processed only from 1 account. In Ethereum Blockchain, each address is recognized as an account and only funds from that account can be sent in 1 transaction. Example: Account A has 0.5 ETH, Account B has 0.3 ETH. Account A is linked to Tatum Account 1, Account B is linked to Tatum Account 2. Tatum Account 1 has balance 0.7 Ethereum and Tatum Account 2 has 0.1 ETH. Withdrawal from Tatum Account 1 can be at most 0.5 ETH, even though balance in Tatum Private Ledger is 0.7 ETH. Because of this Ethereum Blockchain limitation, withdrawal request should always contain sourceAddress, from which withdrawal will be made. To get available balances for Ethereum wallet accounts, use hint endpoint. 

 <h4>XRP</h4>

 XRP withdrawal can contain DestinationTag except of address, which is placed in attr parameter of withdrawal request. SourceTag of the blockchain transaction should be withdrawal ID for autocomplete purposes of withdrawals. 

 <h4>XLM</h4>

 XLM withdrawal can contain memo except of address, which is placed in attr parameter of withdrawal request. XLM blockchain does not have possibility to enter source account information. It is possible to create memo in format 'destination|source', which is supported way of memo in Tatum and also there is information about the sender account in the blockchain. 

 When withdrawal is created, all other withdrawals with the same currency are pending, unless the current one is marked as complete or cancelled.

 Tatum ledger transaction is created for every withdrawal request with operation type WITHDRAWAL. The value of the transaction is the withdrawal amount + blockchain fee, which should be paid. In the situation, when there is withdrawal for ERC20, XLM, or XRP based custom assets, the fee is not included in the transaction because it is paid in different assets than the withdrawal itself.

[Back to top](#top)

