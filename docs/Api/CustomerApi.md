# Tatum/Api/CustomerApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateCustomer()**](#activateCustomer) | **PUT** /v3/ledger/customer/{id}/activate | Activate customer
[**deactivateCustomer()**](#deactivateCustomer) | **PUT** /v3/ledger/customer/{id}/deactivate | Deactivate customer
[**disableCustomer()**](#disableCustomer) | **PUT** /v3/ledger/customer/{id}/disable | Disable customer
[**enableCustomer()**](#enableCustomer) | **PUT** /v3/ledger/customer/{id}/enable | Enable customer
[**findAllCustomers()**](#findAllCustomers) | **GET** /v3/ledger/customer | List all customers
[**getCustomerByExternalOrInternalId()**](#getCustomerByExternalOrInternalId) | **GET** /v3/ledger/customer/{id} | Get customer details
[**updateCustomer()**](#updateCustomer) | **PUT** /v3/ledger/customer/{id} | Update customer


## `activateCustomer()`

```php
api()->customer()->activateCustomer(
    ?string $id
)
```

Activate customer

<h4>2 credits per API call.</h4><br/><p>Activated customer is able to do any operation.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Customer internal ID
$id = 'id_example';

try {
        $sdk
        ->mainnet()
        ->api()
        ->customer()
        ->activateCustomer($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling customer()->activateCustomer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling customer()->activateCustomer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Customer internal ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `deactivateCustomer()`

```php
api()->customer()->deactivateCustomer(
    ?string $id
)
```

Deactivate customer

<h4>2 credits per API call.</h4><br/><p>Deactivate customer is not able to do any operation. Customer can be deactivated only when all their accounts are already deactivated.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Customer internal ID
$id = 'id_example';

try {
        $sdk
        ->mainnet()
        ->api()
        ->customer()
        ->deactivateCustomer($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling customer()->deactivateCustomer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling customer()->deactivateCustomer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Customer internal ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `disableCustomer()`

```php
api()->customer()->disableCustomer(
    ?string $id
)
```

Disable customer

<h4>2 credits per API call.</h4><br/><p>Disabled customer cannot perform end-user operations, such as create new accounts or send transactions. Available balance on all accounts is set to 0. Account balance will stay untouched.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Customer internal ID
$id = 'id_example';

try {
        $sdk
        ->mainnet()
        ->api()
        ->customer()
        ->disableCustomer($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling customer()->disableCustomer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling customer()->disableCustomer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Customer internal ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `enableCustomer()`

```php
api()->customer()->enableCustomer(
    ?string $id
)
```

Enable customer

<h4>2 credits per API call.</h4><br/><p>Enabled customer can perform all operations. By default all customers are enabled. All previously blocked account balances will be unblocked.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Customer internal ID
$id = 'id_example';

try {
        $sdk
        ->mainnet()
        ->api()
        ->customer()
        ->enableCustomer($id);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling customer()->enableCustomer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling customer()->enableCustomer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Customer internal ID |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `findAllCustomers()`

```php
api()->customer()->findAllCustomers(
    ?float $page_size, 
    ?float $offset
): \Tatum\Model\Customer[]
```

List all customers

<h4>1 credit per API call.</h4><br/> <p>List of all customers. Also inactive an disabled customers are present.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Max number of items per page is 50.
$page_size = 10;

// Offset to obtain next page of the data.
$offset = 0;

try {
    /** @var \Tatum\Model\Customer[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->customer()
        ->findAllCustomers($page_size, $offset);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling customer()->findAllCustomers(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling customer()->findAllCustomers(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**| Max number of items per page is 50. |
 **$offset** | **float**| Offset to obtain next page of the data. | [optional]

### Return type

[**\Tatum\Model\Customer[]**](../Model/Customer.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `getCustomerByExternalOrInternalId()`

```php
api()->customer()->getCustomerByExternalOrInternalId(
    ?string $id
): \Tatum\Model\Customer
```

Get customer details

<h4>1 credit per API call.</h4><br/><p>Using anonymized external ID or internal customer ID you can access customer detail information. Internal ID is needed to call other customer related methods.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Customer external or internal ID
$id = 'id_example';

try {
    /** @var \Tatum\Model\Customer $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->customer()
        ->getCustomerByExternalOrInternalId($id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling customer()->getCustomerByExternalOrInternalId(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling customer()->getCustomerByExternalOrInternalId(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Customer external or internal ID |

### Return type

[**\Tatum\Model\Customer**](../Model/Customer.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `updateCustomer()`

```php
api()->customer()->updateCustomer(
    ?string $id, 
    ?\Tatum\Model\CustomerUpdate $customer_update
): \Tatum\Model\Customer
```

Update customer

<h4>2 credits per API call.</h4><br/><p>This method is helpful in case your primary system will change ID's or customer will change the country he/she is supposed to be in compliance with.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Customer internal ID
$id = 'id_example';

$customer_update = new \Tatum\Model\CustomerUpdate();

try {
    /** @var \Tatum\Model\Customer $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->customer()
        ->updateCustomer($id, $customer_update);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling customer()->updateCustomer(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling customer()->updateCustomer(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**| Customer internal ID |
 **$customer_update** | [**\Tatum\Model\CustomerUpdate**](../Model/CustomerUpdate.md)|  |

### Return type

[**\Tatum\Model\Customer**](../Model/Customer.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)
