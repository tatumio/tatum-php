# Tatum/Api/TransactionApi

* Transaction [documentation](https://apidoc.tatum.io/tag/Transaction/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**get Transactions()**](#gettransactions) | **POST** `/v3 /ledger /transaction /ledger` | Find transactions within the ledger.
[**get Transactions By Account Id()**](#gettransactionsbyaccountid) | **POST** `/v3 /ledger /transaction /account` | Find transactions for account.
[**get Transactions By Customer Id()**](#gettransactionsbycustomerid) | **POST** `/v3 /ledger /transaction /customer` | Find transactions for a customer across all of the customer's accounts.
[**get Transactions By Reference()**](#gettransactionsbyreference) | **GET** `/v3 /ledger /transaction /reference /{reference}` | Find transactions with a given reference across all accounts.
[**send Transaction()**](#sendtransaction) | **POST** `/v3 /ledger /transaction` | Send payment
[**send Transaction Batch()**](#sendtransactionbatch) | **POST** `/v3 /ledger /transaction /batch` | Send payment in batch


## `getTransactions()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->transaction()->getTransactions(
    \Tatum\Model\TransactionFilterLedger $transaction_filter_ledger,
    [ float $page_size, ]
    [ float $offset, ]
    [ bool $count ]
): \Tatum\Model\GetTransactionsByAccountId200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_filter_ledger** | [**\Tatum\Model\TransactionFilterLedger**](../Model/TransactionFilterLedger.md) |  |
 **$page_size** | **float**  | Max number of items per page is 50. Either count or pageSize is accepted. | [optional]
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$count** | **bool**  | Get the total transaction count based on the filter. Either count or pageSize is accepted. | [optional]

### Return type

[**\Tatum\Model\GetTransactionsByAccountId200Response**](../Model/GetTransactionsByAccountId200Response.md)

### Description

Find transactions within the ledger.

<h4>1 credit per API call.</h4><br/><p>Find transactions across whole ledger.</p>

### Example

[✨ View "getTransactions.php"](../../examples/Api/TransactionApi/getTransactions.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getTransactionsByAccountId()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->transaction()->getTransactionsByAccountId(
    \Tatum\Model\TransactionFilter $transaction_filter,
    [ float $page_size, ]
    [ float $offset, ]
    [ bool $count ]
): \Tatum\Model\GetTransactionsByAccountId200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_filter** | [**\Tatum\Model\TransactionFilter**](../Model/TransactionFilter.md) |  |
 **$page_size** | **float**  | Max number of items per page is 50. Either count or pageSize is accepted. | [optional]
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$count** | **bool**  | Get the total transaction count based on the filter. Either count or pageSize is accepted. | [optional]

### Return type

[**\Tatum\Model\GetTransactionsByAccountId200Response**](../Model/GetTransactionsByAccountId200Response.md)

### Description

Find transactions for account.

<h4>1 credit per API call.</h4><br/><p>Finds transactions for the account identified by the given account ID.</p>

### Example

[✨ View "getTransactionsByAccountId.php"](../../examples/Api/TransactionApi/getTransactionsByAccountId.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getTransactionsByCustomerId()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->transaction()->getTransactionsByCustomerId(
    \Tatum\Model\TransactionFilterCustomer $transaction_filter_customer,
    [ float $page_size, ]
    [ float $offset, ]
    [ bool $count ]
): \Tatum\Model\GetTransactionsByAccountId200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_filter_customer** | [**\Tatum\Model\TransactionFilterCustomer**](../Model/TransactionFilterCustomer.md) |  |
 **$page_size** | **float**  | Max number of items per page is 50. Either count or pageSize is accepted. | [optional]
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$count** | **bool**  | Get total transaction count based on the filter. Either count or pageSize is accepted. | [optional]

### Return type

[**\Tatum\Model\GetTransactionsByAccountId200Response**](../Model/GetTransactionsByAccountId200Response.md)

### Description

Find transactions for a customer across all of the customer's accounts.

<h4>1 credit per API call.</h4><br/><p>Finds transactions for all accounts of the customer identified by the given internal customer ID.</p>

### Example

[✨ View "getTransactionsByCustomerId.php"](../../examples/Api/TransactionApi/getTransactionsByCustomerId.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getTransactionsByReference()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->transaction()->getTransactionsByReference(
    string $reference
): \Tatum\Model\Transaction[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$reference** | **string**  |  |

### Return type

[**\Tatum\Model\Transaction[]**](../Model/Transaction.md)

### Description

Find transactions with a given reference across all accounts.

<h4>1 credit per API call.</h4><br/><p>Finds transactions for all accounts with the given reference.</p>

### Example

[✨ View "getTransactionsByReference.php"](../../examples/Api/TransactionApi/getTransactionsByReference.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `sendTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->transaction()->sendTransaction(
    \Tatum\Model\CreateTransaction $create_transaction
): \Tatum\Model\TransactionResult
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_transaction** | [**\Tatum\Model\CreateTransaction**](../Model/CreateTransaction.md) |  |

### Return type

[**\Tatum\Model\TransactionResult**](../Model/TransactionResult.md)

### Description

Send payment

<h4>4 credits per API call.</h4><br/> <p>Sends a payment within Tatum Private Ledger. All assets are settled instantly.<br/> When a transaction is settled, 2 transaction records are created, 1 for each of the participants. These 2 records are connected via a transaction reference, which is the same for both of them.<br/> This method is only used for transferring assets between accounts within Tatum and will not send any funds to blockchain addresses.<br/> If there is an insufficient balance in the sender account, no transaction is recorded.<br/> It is possible to perform an anonymous transaction where the sender account is not visible for the recipient.<br/> The FIAT currency value of every transaction is calculated automatically. The FIAT value is based on the accountingCurrency of the account connected to the transaction and is available in the marketValue parameter of the transaction.</p>

### Example

[✨ View "sendTransaction.php"](../../examples/Api/TransactionApi/sendTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `sendTransactionBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->transaction()->sendTransactionBatch(
    \Tatum\Model\BatchCreateTransaction $batch_create_transaction
): string[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$batch_create_transaction** | [**\Tatum\Model\BatchCreateTransaction**](../Model/BatchCreateTransaction.md) |  |

### Return type

**string[]**

### Description

Send payment in batch

<h4>2 + 2 * N per API call. (N - count of transactions)</h4><br/> <p>Sends the N payments within Tatum Private Ledger. All assets are settled instantly.<br/> When a transaction is settled, 2 transaction records are created, 1 for each of the participants. These 2 records are connected via a transaction reference, which is the same for both of them.<br/> This method is only used for transferring assets between accounts within Tatum and will not send any funds to blockchain addresses.<br/> If there is an insufficient balance in the sender account, no transaction is recorded.<br/> It is possible to perform an anonymous transaction where the sender account is not visible for the recipient.<br/> The FIAT currency value of every transaction is calculated automatically. The FIAT value is based on the accountingCurrency of the account connected to the transaction and is available in the marketValue parameter of the transaction.</p>

### Example

[✨ View "sendTransactionBatch.php"](../../examples/Api/TransactionApi/sendTransactionBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
