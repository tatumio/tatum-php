---
title: Transaction
parent: API
layout: page
---

# Api/TransactionApi

[Transaction API Reference](https://apidoc.tatum.io/tag/Transaction/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->transaction();

// TestNet API Call
$sdk->testnet()->api()->transaction();
```

## Methods

Method | Description
------------- | -------------
[**getTransactions()**](#gettransactions) | Find transactions within the ledger.
[**getTransactionsByAccountId()**](#gettransactionsbyaccountid) | Find transactions for account.
[**getTransactionsByCustomerId()**](#gettransactionsbycustomerid) | Find transactions for a customer across all of the customer's accounts.
[**getTransactionsByReference()**](#gettransactionsbyreference) | Find transactions with a given reference across all accounts.
[**sendTransaction()**](#sendtransaction) | Send payment
[**sendTransactionBatch()**](#sendtransactionbatch) | Send payment in batch


## `getTransactions()`

### Example

[👉 View "**getTransactions.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TransactionApi/getTransactions.php)

### Request

> **POST** `/v3/ledger/transaction/ledger`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->transaction()->getTransactions(
    \Tatum\Model\TransactionFilterLedger $transaction_filter_ledger,
    [ float $page_size, ]
    [ float $offset, ]
    [ bool $count ]
): \Tatum\Model\GetTransactionsByAccountId200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_filter_ledger** | [**\Tatum\Model\TransactionFilterLedger**](../../Model/TransactionFilterLedger) |  |
 **$page_size** | **float**  | Max number of items per page is 50. Either count or pageSize is accepted. | [optional]
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$count** | **bool**  | Get the total transaction count based on the filter. Either count or pageSize is accepted. | [optional]

### Return type

[**\Tatum\Model\GetTransactionsByAccountId200Response**](../../Model/GetTransactionsByAccountId200Response)

### Description

Find transactions within the ledger.

<h4>1 credit per API call.</h4>

Find transactions across whole ledger.

[Back to top](#top)



## `getTransactionsByAccountId()`

### Example

[👉 View "**getTransactionsByAccountId.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TransactionApi/getTransactionsByAccountId.php)

### Request

> **POST** `/v3/ledger/transaction/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->transaction()->getTransactionsByAccountId(
    \Tatum\Model\TransactionFilter $transaction_filter,
    [ float $page_size, ]
    [ float $offset, ]
    [ bool $count ]
): \Tatum\Model\GetTransactionsByAccountId200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_filter** | [**\Tatum\Model\TransactionFilter**](../../Model/TransactionFilter) |  |
 **$page_size** | **float**  | Max number of items per page is 50. Either count or pageSize is accepted. | [optional]
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$count** | **bool**  | Get the total transaction count based on the filter. Either count or pageSize is accepted. | [optional]

### Return type

[**\Tatum\Model\GetTransactionsByAccountId200Response**](../../Model/GetTransactionsByAccountId200Response)

### Description

Find transactions for account.

<h4>1 credit per API call.</h4>

Finds transactions for the account identified by the given account ID.

[Back to top](#top)



## `getTransactionsByCustomerId()`

### Example

[👉 View "**getTransactionsByCustomerId.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TransactionApi/getTransactionsByCustomerId.php)

### Request

> **POST** `/v3/ledger/transaction/customer`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->transaction()->getTransactionsByCustomerId(
    \Tatum\Model\TransactionFilterCustomer $transaction_filter_customer,
    [ float $page_size, ]
    [ float $offset, ]
    [ bool $count ]
): \Tatum\Model\GetTransactionsByAccountId200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_filter_customer** | [**\Tatum\Model\TransactionFilterCustomer**](../../Model/TransactionFilterCustomer) |  |
 **$page_size** | **float**  | Max number of items per page is 50. Either count or pageSize is accepted. | [optional]
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$count** | **bool**  | Get total transaction count based on the filter. Either count or pageSize is accepted. | [optional]

### Return type

[**\Tatum\Model\GetTransactionsByAccountId200Response**](../../Model/GetTransactionsByAccountId200Response)

### Description

Find transactions for a customer across all of the customer's accounts.

<h4>1 credit per API call.</h4>

Finds transactions for all accounts of the customer identified by the given internal customer ID.

[Back to top](#top)



## `getTransactionsByReference()`

### Example

[👉 View "**getTransactionsByReference.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TransactionApi/getTransactionsByReference.php)

### Request

> **GET** `/v3/ledger/transaction/reference/{reference}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->transaction()->getTransactionsByReference(
    string $reference
): \Tatum\Model\Transaction[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$reference** | **string**  |  |

### Return type

[**\Tatum\Model\Transaction[]**](../../Model/Transaction)

### Description

Find transactions with a given reference across all accounts.

<h4>1 credit per API call.</h4>

Finds transactions for all accounts with the given reference.

[Back to top](#top)



## `sendTransaction()`

### Example

[👉 View "**sendTransaction.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TransactionApi/sendTransaction.php)

### Request

> **POST** `/v3/ledger/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->transaction()->sendTransaction(
    \Tatum\Model\CreateTransaction $create_transaction
): \Tatum\Model\TransactionResult
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_transaction** | [**\Tatum\Model\CreateTransaction**](../../Model/CreateTransaction) |  |

### Return type

[**\Tatum\Model\TransactionResult**](../../Model/TransactionResult)

### Description

Send payment

<h4>4 credits per API call.</h4>

 Sends a payment within Tatum Private Ledger. All assets are settled instantly.

 When a transaction is settled, 2 transaction records are created, 1 for each of the participants. These 2 records are connected via a transaction reference, which is the same for both of them.

 This method is only used for transferring assets between accounts within Tatum and will not send any funds to blockchain addresses.

 If there is an insufficient balance in the sender account, no transaction is recorded.

 It is possible to perform an anonymous transaction where the sender account is not visible for the recipient.

 The FIAT currency value of every transaction is calculated automatically. The FIAT value is based on the accountingCurrency of the account connected to the transaction and is available in the marketValue parameter of the transaction.

[Back to top](#top)



## `sendTransactionBatch()`

### Example

[👉 View "**sendTransactionBatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/TransactionApi/sendTransactionBatch.php)

### Request

> **POST** `/v3/ledger/transaction/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->transaction()->sendTransactionBatch(
    \Tatum\Model\BatchCreateTransaction $batch_create_transaction
): string[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$batch_create_transaction** | [**\Tatum\Model\BatchCreateTransaction**](../../Model/BatchCreateTransaction) |  |

### Return type

**string[]**

### Description

Send payment in batch

<h4>2 + 2 * N per API call. (N - count of transactions)</h4>

 Sends the N payments within Tatum Private Ledger. All assets are settled instantly.

 When a transaction is settled, 2 transaction records are created, 1 for each of the participants. These 2 records are connected via a transaction reference, which is the same for both of them.

 This method is only used for transferring assets between accounts within Tatum and will not send any funds to blockchain addresses.

 If there is an insufficient balance in the sender account, no transaction is recorded.

 It is possible to perform an anonymous transaction where the sender account is not visible for the recipient.

 The FIAT currency value of every transaction is calculated automatically. The FIAT value is based on the accountingCurrency of the account connected to the transaction and is available in the marketValue parameter of the transaction.

[Back to top](#top)

