# Api/CustomerApi

## References

[Customer API documentation](https://apidoc.tatum.io/tag/Customer/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **activateCustomer()**](#activatecustomer) 

> Activate customer
> 
> **PUT** `/v3/ledger/customer/{id}/activate`

[🔹 **deactivateCustomer()**](#deactivatecustomer) 

> Deactivate customer
> 
> **PUT** `/v3/ledger/customer/{id}/deactivate`

[🔹 **disableCustomer()**](#disablecustomer) 

> Disable customer
> 
> **PUT** `/v3/ledger/customer/{id}/disable`

[🔹 **enableCustomer()**](#enablecustomer) 

> Enable customer
> 
> **PUT** `/v3/ledger/customer/{id}/enable`

[🔹 **findAllCustomers()**](#findallcustomers) 

> List all customers
> 
> **GET** `/v3/ledger/customer`

[🔹 **getCustomerByExternalOrInternalId()**](#getcustomerbyexternalorinternalid) 

> Get customer details
> 
> **GET** `/v3/ledger/customer/{id}`

[🔹 **updateCustomer()**](#updatecustomer) 

> Update customer
> 
> **PUT** `/v3/ledger/customer/{id}`



## `activateCustomer()`

> **PUT** `/v3/ledger/customer/{id}/activate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->customer()->activateCustomer(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Customer internal ID |

### Return type

void (empty response body)

### Description

Activate customer

<h4>2 credits per API call.</h4>

Activated customer is able to do any operation.

### Example

[✨ View "activateCustomer.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/activateCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deactivateCustomer()`

> **PUT** `/v3/ledger/customer/{id}/deactivate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->customer()->deactivateCustomer(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Customer internal ID |

### Return type

void (empty response body)

### Description

Deactivate customer

<h4>2 credits per API call.</h4>

Deactivate customer is not able to do any operation. Customer can be deactivated only when all their accounts are already deactivated.

### Example

[✨ View "deactivateCustomer.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/deactivateCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `disableCustomer()`

> **PUT** `/v3/ledger/customer/{id}/disable`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->customer()->disableCustomer(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Customer internal ID |

### Return type

void (empty response body)

### Description

Disable customer

<h4>2 credits per API call.</h4>

Disabled customer cannot perform end-user operations, such as create new accounts or send transactions. Available balance on all accounts is set to 0. Account balance will stay untouched.

### Example

[✨ View "disableCustomer.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/disableCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `enableCustomer()`

> **PUT** `/v3/ledger/customer/{id}/enable`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->customer()->enableCustomer(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Customer internal ID |

### Return type

void (empty response body)

### Description

Enable customer

<h4>2 credits per API call.</h4>

Enabled customer can perform all operations. By default all customers are enabled. All previously blocked account balances will be unblocked.

### Example

[✨ View "enableCustomer.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/enableCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `findAllCustomers()`

> **GET** `/v3/ledger/customer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->customer()->findAllCustomers(
    float $page_size,
    [ float $offset ]
): \Tatum\Model\Customer[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]

### Return type

[**\Tatum\Model\Customer[]**](../Model/Customer.md)

### Description

List all customers

<h4>1 credit per API call.</h4>

 List of all customers. Also inactive an disabled customers are present.

### Example

[✨ View "findAllCustomers.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/findAllCustomers.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getCustomerByExternalOrInternalId()`

> **GET** `/v3/ledger/customer/{id}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->customer()->getCustomerByExternalOrInternalId(
    string $id
): \Tatum\Model\Customer
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Customer external or internal ID |

### Return type

[**\Tatum\Model\Customer**](../Model/Customer.md)

### Description

Get customer details

<h4>1 credit per API call.</h4>

Using anonymized external ID or internal customer ID you can access customer detail information. Internal ID is needed to call other customer related methods.

### Example

[✨ View "getCustomerByExternalOrInternalId.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/getCustomerByExternalOrInternalId.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateCustomer()`

> **PUT** `/v3/ledger/customer/{id}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->customer()->updateCustomer(
    string $id,
    \Tatum\Model\CustomerUpdate $customer_update
): \Tatum\Model\Customer
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Customer internal ID |
 **$customer_update** | [**\Tatum\Model\CustomerUpdate**](../Model/CustomerUpdate.md) |  |

### Return type

[**\Tatum\Model\Customer**](../Model/Customer.md)

### Description

Update customer

<h4>2 credits per API call.</h4>

This method is helpful in case your primary system will change ID's or customer will change the country he/she is supposed to be in compliance with.

### Example

[✨ View "updateCustomer.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/updateCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
