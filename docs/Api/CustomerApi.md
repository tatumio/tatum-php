# Tatum/Api/CustomerApi

* Customer [documentation](https://apidoc.tatum.io/tag/Customer/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**activate Customer()**](#activatecustomer) | **PUT** `/v3 /ledger /customer /{id} /activate` | Activate customer
[**deactivate Customer()**](#deactivatecustomer) | **PUT** `/v3 /ledger /customer /{id} /deactivate` | Deactivate customer
[**disable Customer()**](#disablecustomer) | **PUT** `/v3 /ledger /customer /{id} /disable` | Disable customer
[**enable Customer()**](#enablecustomer) | **PUT** `/v3 /ledger /customer /{id} /enable` | Enable customer
[**find All Customers()**](#findallcustomers) | **GET** `/v3 /ledger /customer` | List all customers
[**get Customer By External Or Internal Id()**](#getcustomerbyexternalorinternalid) | **GET** `/v3 /ledger /customer /{id}` | Get customer details
[**update Customer()**](#updatecustomer) | **PUT** `/v3 /ledger /customer /{id}` | Update customer


## `activateCustomer()`

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

<h4>2 credits per API call.</h4><br/><p>Activated customer is able to do any operation.</p>

### Example

[✨ View "activateCustomer.php"](../../examples/Api/CustomerApi/activateCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deactivateCustomer()`

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

<h4>2 credits per API call.</h4><br/><p>Deactivate customer is not able to do any operation. Customer can be deactivated only when all their accounts are already deactivated.</p>

### Example

[✨ View "deactivateCustomer.php"](../../examples/Api/CustomerApi/deactivateCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `disableCustomer()`

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

<h4>2 credits per API call.</h4><br/><p>Disabled customer cannot perform end-user operations, such as create new accounts or send transactions. Available balance on all accounts is set to 0. Account balance will stay untouched.</p>

### Example

[✨ View "disableCustomer.php"](../../examples/Api/CustomerApi/disableCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `enableCustomer()`

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

<h4>2 credits per API call.</h4><br/><p>Enabled customer can perform all operations. By default all customers are enabled. All previously blocked account balances will be unblocked.</p>

### Example

[✨ View "enableCustomer.php"](../../examples/Api/CustomerApi/enableCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `findAllCustomers()`

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

<h4>1 credit per API call.</h4><br/> <p>List of all customers. Also inactive an disabled customers are present.</p>

### Example

[✨ View "findAllCustomers.php"](../../examples/Api/CustomerApi/findAllCustomers.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getCustomerByExternalOrInternalId()`

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

<h4>1 credit per API call.</h4><br/><p>Using anonymized external ID or internal customer ID you can access customer detail information. Internal ID is needed to call other customer related methods.</p>

### Example

[✨ View "getCustomerByExternalOrInternalId.php"](../../examples/Api/CustomerApi/getCustomerByExternalOrInternalId.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateCustomer()`

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

<h4>2 credits per API call.</h4><br/><p>This method is helpful in case your primary system will change ID's or customer will change the country he/she is supposed to be in compliance with.</p>

### Example

[✨ View "updateCustomer.php"](../../examples/Api/CustomerApi/updateCustomer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
