---
title: Customer
parent: API
layout: page
---

# Api/CustomerApi

[Customer API Reference](https://apidoc.tatum.io/tag/Customer/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->customer();

// TestNet API Call
$sdk->testnet()->api()->customer();
```

## Methods

Method | Description
------------- | -------------
[**activateCustomer()**](#activatecustomer) | Activate customer
[**deactivateCustomer()**](#deactivatecustomer) | Deactivate customer
[**disableCustomer()**](#disablecustomer) | Disable customer
[**enableCustomer()**](#enablecustomer) | Enable customer
[**findAllCustomers()**](#findallcustomers) | List all customers
[**getCustomerByExternalOrInternalId()**](#getcustomerbyexternalorinternalid) | Get customer details
[**updateCustomer()**](#updatecustomer) | Update customer


## `activateCustomer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **activateCustomer.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/activateCustomer.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/ledger/customer/{id}/activate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->customer()->activateCustomer(
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

> Activate customer

#### 2 credits per API call.

Activated customer is able to do any operation.

[Back to top](#top){: .btn .btn-purple }

---


## `deactivateCustomer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **deactivateCustomer.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/deactivateCustomer.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/ledger/customer/{id}/deactivate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->customer()->deactivateCustomer(
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

> Deactivate customer

#### 2 credits per API call.

Deactivate customer is not able to do any operation. Customer can be deactivated only when all their accounts are already deactivated.

[Back to top](#top){: .btn .btn-purple }

---


## `disableCustomer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **disableCustomer.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/disableCustomer.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/ledger/customer/{id}/disable`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->customer()->disableCustomer(
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

> Disable customer

#### 2 credits per API call.

Disabled customer cannot perform end-user operations, such as create new accounts or send transactions. Available balance on all accounts is set to 0\. Account balance will stay untouched.

[Back to top](#top){: .btn .btn-purple }

---


## `enableCustomer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **enableCustomer.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/enableCustomer.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/ledger/customer/{id}/enable`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->customer()->enableCustomer(
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

> Enable customer

#### 2 credits per API call.

Enabled customer can perform all operations. By default all customers are enabled. All previously blocked account balances will be unblocked.

[Back to top](#top){: .btn .btn-purple }

---


## `findAllCustomers()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **findAllCustomers.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/findAllCustomers.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/ledger/customer`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->customer()->findAllCustomers(
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

[**\Tatum\Model\Customer[]**](../../Model/Customer)

### Description

> List all customers

#### 1 credit per API call.

List of all customers. Also inactive an disabled customers are present.

[Back to top](#top){: .btn .btn-purple }

---


## `getCustomerByExternalOrInternalId()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getCustomerByExternalOrInternalId.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/getCustomerByExternalOrInternalId.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/ledger/customer/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->customer()->getCustomerByExternalOrInternalId(
    string $id
): \Tatum\Model\Customer
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Customer external or internal ID |

### Return type

[**\Tatum\Model\Customer**](../../Model/Customer)

### Description

> Get customer details

#### 1 credit per API call.

Using anonymized external ID or internal customer ID you can access customer detail information. Internal ID is needed to call other customer related methods.

[Back to top](#top){: .btn .btn-purple }

---


## `updateCustomer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateCustomer.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustomerApi/updateCustomer.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/ledger/customer/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->customer()->updateCustomer(
    string $id,
    \Tatum\Model\CustomerUpdate $customer_update
): \Tatum\Model\Customer
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Customer internal ID |
 **$customer_update** | [**\Tatum\Model\CustomerUpdate**](../../Model/CustomerUpdate) |  |

### Return type

[**\Tatum\Model\Customer**](../../Model/Customer)

### Description

> Update customer

#### 2 credits per API call.

This method is helpful in case your primary system will change ID's or customer will change the country he/she is supposed to be in compliance with.

[Back to top](#top){: .btn .btn-purple }

---
