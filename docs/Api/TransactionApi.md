# Tatum/Api/TransactionApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactions()**](#gettransactions) | **POST** /v3/ledger/transaction/ledger | Find transactions within the ledger.
[**getTransactionsByAccountId()**](#gettransactionsbyaccountid) | **POST** /v3/ledger/transaction/account | Find transactions for account.
[**getTransactionsByCustomerId()**](#gettransactionsbycustomerid) | **POST** /v3/ledger/transaction/customer | Find transactions for a customer across all of the customer's accounts.
[**getTransactionsByReference()**](#gettransactionsbyreference) | **GET** /v3/ledger/transaction/reference/{reference} | Find transactions with a given reference across all accounts.
[**sendTransaction()**](#sendtransaction) | **POST** /v3/ledger/transaction | Send payment
[**sendTransactionBatch()**](#sendtransactionbatch) | **POST** /v3/ledger/transaction/batch | Send payment in batch


## `getTransactions()`

```php
api()->transaction()->getTransactions(
    ?\Tatum\Model\TransactionFilterLedger $transaction_filter_ledger, 
    ?float $page_size, 
    ?float $offset, 
    ?bool $count
): \Tatum\Model\GetTransactionsByAccountId200Response
```

Find transactions within the ledger.

<h4>1 credit per API call.</h4><br/><p>Find transactions across whole ledger.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$transaction_filter_ledger = new \Tatum\Model\TransactionFilterLedger();

// Max number of items per page is 50. Either count or pageSize is accepted.
$page_size = 10;

// Offset to obtain the next page of data.
$offset = 0;

// Get the total transaction count based on the filter. Either count or pageSize is accepted.
$count = 'true';

try {
    /** @var \Tatum\Model\GetTransactionsByAccountId200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->transaction()
        ->getTransactions($transaction_filter_ledger, $page_size, $offset, $count);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling transaction()->getTransactions(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling transaction()->getTransactions(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_filter_ledger** | [**\Tatum\Model\TransactionFilterLedger**](../Model/TransactionFilterLedger.md)|  |
 **$page_size** | **float**| Max number of items per page is 50. Either count or pageSize is accepted. | [optional]
 **$offset** | **float**| Offset to obtain the next page of data. | [optional]
 **$count** | **bool**| Get the total transaction count based on the filter. Either count or pageSize is accepted. | [optional]

### Return type

[**\Tatum\Model\GetTransactionsByAccountId200Response**](../Model/GetTransactionsByAccountId200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `getTransactionsByAccountId()`

```php
api()->transaction()->getTransactionsByAccountId(
    ?\Tatum\Model\TransactionFilter $transaction_filter, 
    ?float $page_size, 
    ?float $offset, 
    ?bool $count
): \Tatum\Model\GetTransactionsByAccountId200Response
```

Find transactions for account.

<h4>1 credit per API call.</h4><br/><p>Finds transactions for the account identified by the given account ID.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$transaction_filter = new \Tatum\Model\TransactionFilter();

// Max number of items per page is 50. Either count or pageSize is accepted.
$page_size = 10;

// Offset to obtain the next page of data.
$offset = 0;

// Get the total transaction count based on the filter. Either count or pageSize is accepted.
$count = 'true';

try {
    /** @var \Tatum\Model\GetTransactionsByAccountId200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->transaction()
        ->getTransactionsByAccountId($transaction_filter, $page_size, $offset, $count);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling transaction()->getTransactionsByAccountId(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling transaction()->getTransactionsByAccountId(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_filter** | [**\Tatum\Model\TransactionFilter**](../Model/TransactionFilter.md)|  |
 **$page_size** | **float**| Max number of items per page is 50. Either count or pageSize is accepted. | [optional]
 **$offset** | **float**| Offset to obtain the next page of data. | [optional]
 **$count** | **bool**| Get the total transaction count based on the filter. Either count or pageSize is accepted. | [optional]

### Return type

[**\Tatum\Model\GetTransactionsByAccountId200Response**](../Model/GetTransactionsByAccountId200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `getTransactionsByCustomerId()`

```php
api()->transaction()->getTransactionsByCustomerId(
    ?\Tatum\Model\TransactionFilterCustomer $transaction_filter_customer, 
    ?float $page_size, 
    ?float $offset, 
    ?bool $count
): \Tatum\Model\GetTransactionsByAccountId200Response
```

Find transactions for a customer across all of the customer's accounts.

<h4>1 credit per API call.</h4><br/><p>Finds transactions for all accounts of the customer identified by the given internal customer ID.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$transaction_filter_customer = new \Tatum\Model\TransactionFilterCustomer();

// Max number of items per page is 50. Either count or pageSize is accepted.
$page_size = 10;

// Offset to obtain the next page of data.
$offset = 0;

// Get total transaction count based on the filter. Either count or pageSize is accepted.
$count = 'true';

try {
    /** @var \Tatum\Model\GetTransactionsByAccountId200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->transaction()
        ->getTransactionsByCustomerId($transaction_filter_customer, $page_size, $offset, $count);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling transaction()->getTransactionsByCustomerId(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling transaction()->getTransactionsByCustomerId(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_filter_customer** | [**\Tatum\Model\TransactionFilterCustomer**](../Model/TransactionFilterCustomer.md)|  |
 **$page_size** | **float**| Max number of items per page is 50. Either count or pageSize is accepted. | [optional]
 **$offset** | **float**| Offset to obtain the next page of data. | [optional]
 **$count** | **bool**| Get total transaction count based on the filter. Either count or pageSize is accepted. | [optional]

### Return type

[**\Tatum\Model\GetTransactionsByAccountId200Response**](../Model/GetTransactionsByAccountId200Response.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `getTransactionsByReference()`

```php
api()->transaction()->getTransactionsByReference(
    ?string $reference
): \Tatum\Model\Transaction[]
```

Find transactions with a given reference across all accounts.

<h4>1 credit per API call.</h4><br/><p>Finds transactions for all accounts with the given reference.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$reference = 'reference_example';

try {
    /** @var \Tatum\Model\Transaction[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->transaction()
        ->getTransactionsByReference($reference);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling transaction()->getTransactionsByReference(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling transaction()->getTransactionsByReference(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$reference** | **string**|  |

### Return type

[**\Tatum\Model\Transaction[]**](../Model/Transaction.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `sendTransaction()`

```php
api()->transaction()->sendTransaction(
    ?\Tatum\Model\CreateTransaction $create_transaction
): \Tatum\Model\TransactionResult
```

Send payment

<h4>4 credits per API call.</h4><br/> <p>Sends a payment within Tatum Private Ledger. All assets are settled instantly.<br/> When a transaction is settled, 2 transaction records are created, 1 for each of the participants. These 2 records are connected via a transaction reference, which is the same for both of them.<br/> This method is only used for transferring assets between accounts within Tatum and will not send any funds to blockchain addresses.<br/> If there is an insufficient balance in the sender account, no transaction is recorded.<br/> It is possible to perform an anonymous transaction where the sender account is not visible for the recipient.<br/> The FIAT currency value of every transaction is calculated automatically. The FIAT value is based on the accountingCurrency of the account connected to the transaction and is available in the marketValue parameter of the transaction.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_transaction = new \Tatum\Model\CreateTransaction();

try {
    /** @var \Tatum\Model\TransactionResult $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->transaction()
        ->sendTransaction($create_transaction);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling transaction()->sendTransaction(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling transaction()->sendTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_transaction** | [**\Tatum\Model\CreateTransaction**](../Model/CreateTransaction.md)|  |

### Return type

[**\Tatum\Model\TransactionResult**](../Model/TransactionResult.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `sendTransactionBatch()`

```php
api()->transaction()->sendTransactionBatch(
    ?\Tatum\Model\BatchCreateTransaction $batch_create_transaction
): string[]
```

Send payment in batch

<h4>2 + 2 * N per API call. (N - count of transactions)</h4><br/> <p>Sends the N payments within Tatum Private Ledger. All assets are settled instantly.<br/> When a transaction is settled, 2 transaction records are created, 1 for each of the participants. These 2 records are connected via a transaction reference, which is the same for both of them.<br/> This method is only used for transferring assets between accounts within Tatum and will not send any funds to blockchain addresses.<br/> If there is an insufficient balance in the sender account, no transaction is recorded.<br/> It is possible to perform an anonymous transaction where the sender account is not visible for the recipient.<br/> The FIAT currency value of every transaction is calculated automatically. The FIAT value is based on the accountingCurrency of the account connected to the transaction and is available in the marketValue parameter of the transaction.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$batch_create_transaction = new \Tatum\Model\BatchCreateTransaction();

try {
    /** @var string[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->transaction()
        ->sendTransactionBatch($batch_create_transaction);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling transaction()->sendTransactionBatch(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling transaction()->sendTransactionBatch(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$batch_create_transaction** | [**\Tatum\Model\BatchCreateTransaction**](../Model/BatchCreateTransaction.md)|  |

### Return type

**string[]**

[[Back to top]](#) | [[Back to Index]](../index.md)