---
title: Virtual Currency
parent: API
layout: page
---

# Api/VirtualCurrencyApi

[Virtual Currency API Reference](https://apidoc.tatum.io/tag/Virtual-Currency/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->virtualCurrency();

// TestNet API Call
$sdk->testnet()->api()->virtualCurrency();
```

## Methods

Method | Description
------------- | -------------
[**createCurrency()**](#createcurrency) | Create new virtual currency
[**getCurrency()**](#getcurrency) | Get virtual currency
[**mintCurrency()**](#mintcurrency) | Create new supply of virtual currency
[**revokeCurrency()**](#revokecurrency) | Destroy supply of virtual currency
[**updateCurrency()**](#updatecurrency) | Update virtual currency


## `createCurrency()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **createCurrency.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VirtualCurrencyApi/createCurrency.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/ledger/virtualCurrency`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->virtualCurrency()->createCurrency(
    \Tatum\Model\VirtualCurrency $virtual_currency
): \Tatum\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency** | [**\Tatum\Model\VirtualCurrency**](../../Model/VirtualCurrency) |  |

### Return type

[**\Tatum\Model\Account**](../../Model/Account)

### Description

> Create new virtual currency

**2 credits per API call**

Create new virtual currency with given supply stored in account. This will create Tatum internal virtual currency. Every virtual currency must be prefixed with **VC\_**.

Every virtual currency must be pegged to existing FIAT or supported cryptocurrency. 1 unit of virtual currency has then the same amount as 1 unit of the base currency it is pegged to. It is possible to set a custom base rate for the virtual currency. (baseRate = 2 => 1 VC unit = 2 basePair units)

Tatum virtual currency acts as any other asset within Tatum. To create a fungible token, see the [API for deploying a fungible token smart contract](https://apidoc.tatum.io/tag/Fungible-Tokens-%28ERC-20-or-compatible%29#operation/Erc20Deploy).

This operation returns the newly created Tatum Ledger account with an initial balance set to the virtual currency's total supply. Total supply can be changed in the future.

[Back to top](#top){: .btn .btn-purple }

---


## `getCurrency()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **getCurrency.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VirtualCurrencyApi/getCurrency.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/ledger/virtualCurrency/{name}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->virtualCurrency()->getCurrency(
    string $name
): \Tatum\Model\VC
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$name** | **string**  |  |

### Return type

[**\Tatum\Model\VC**](../../Model/VC)

### Description

> Get virtual currency

**1 credit per API call**

Get detail of virtual currency.

[Back to top](#top){: .btn .btn-purple }

---


## `mintCurrency()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **mintCurrency.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VirtualCurrencyApi/mintCurrency.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/ledger/virtualCurrency/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->virtualCurrency()->mintCurrency(
    \Tatum\Model\VirtualCurrencyOperation $virtual_currency_operation
): \Tatum\Model\TransactionResult
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency_operation** | [**\Tatum\Model\VirtualCurrencyOperation**](../../Model/VirtualCurrencyOperation) |  |

### Return type

[**\Tatum\Model\TransactionResult**](../../Model/TransactionResult)

### Description

> Create new supply of virtual currency

**2 credits per API call**

Create new supply of virtual currency linked on the given accountId. Method increases the total supply of the currency.

This method creates Ledger transaction with operationType MINT with undefined counterAccountId.

[Back to top](#top){: .btn .btn-purple }

---


## `revokeCurrency()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **revokeCurrency.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VirtualCurrencyApi/revokeCurrency.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/ledger/virtualCurrency/revoke`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->virtualCurrency()->revokeCurrency(
    \Tatum\Model\VirtualCurrencyOperation $virtual_currency_operation
): \Tatum\Model\TransactionResult
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency_operation** | [**\Tatum\Model\VirtualCurrencyOperation**](../../Model/VirtualCurrencyOperation) |  |

### Return type

[**\Tatum\Model\TransactionResult**](../../Model/TransactionResult)

### Description

> Destroy supply of virtual currency

#### 2 credits per API call.

Destroy supply of virtual currency linked on the given accountId. Method decreases the total supply of the currency. This method creates Ledger transaction with operationType REVOKE with undefined counterAccountId.

[Back to top](#top){: .btn .btn-purple }

---


## `updateCurrency()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **updateCurrency.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/VirtualCurrencyApi/updateCurrency.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/ledger/virtualCurrency`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->virtualCurrency()->updateCurrency(
    \Tatum\Model\VirtualCurrencyUpdate $virtual_currency_update
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency_update** | [**\Tatum\Model\VirtualCurrencyUpdate**](../../Model/VirtualCurrencyUpdate) |  |

### Return type

void (empty response body)

### Description

> Update virtual currency

#### 2 credits per API call.

Change base pair and/or base rate of existing virtual currency.

[Back to top](#top){: .btn .btn-purple }

---
