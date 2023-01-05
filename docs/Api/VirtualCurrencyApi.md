# Tatum/Api/VirtualCurrencyApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCurrency()**](#createcurrency) | **POST** [/v3/ledger/virtualCurrency](https://apidoc.tatum.io/tag/Virtual-Currency/#operation/createCurrency) | Create new virtual currency
[**getCurrency()**](#getcurrency) | **GET** [/v3/ledger/virtualCurrency/{name}](https://apidoc.tatum.io/tag/Virtual-Currency/#operation/getCurrency) | Get virtual currency
[**mintCurrency()**](#mintcurrency) | **PUT** [/v3/ledger/virtualCurrency/mint](https://apidoc.tatum.io/tag/Virtual-Currency/#operation/mintCurrency) | Create new supply of virtual currency
[**revokeCurrency()**](#revokecurrency) | **PUT** [/v3/ledger/virtualCurrency/revoke](https://apidoc.tatum.io/tag/Virtual-Currency/#operation/revokeCurrency) | Destroy supply of virtual currency
[**updateCurrency()**](#updatecurrency) | **PUT** [/v3/ledger/virtualCurrency](https://apidoc.tatum.io/tag/Virtual-Currency/#operation/updateCurrency) | Update virtual currency


## `createCurrency()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->virtualCurrency()->createCurrency(
    \Tatum\Model\VirtualCurrency $virtual_currency
): \Tatum\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency** | [**\Tatum\Model\VirtualCurrency**](../Model/VirtualCurrency.md) |  |

### Return type

[**\Tatum\Model\Account**](../Model/Account.md)

### Description

Create new virtual currency

<h4>2 credits per API call.</h4><br/> <p>Create new virtual currency with given supply stored in account. This will create Tatum internal virtual currency. Every virtual currency must be prefixed with <b>VC_</b>.<br/> Every virtual currency must be pegged to existing FIAT or supported cryptocurrency. 1 unit of virtual currency has then the same amount as 1 unit of the base currency it is pegged to. It is possible to set a custom base rate for the virtual currency. (baseRate = 2 => 1 VC unit = 2 basePair units)<br/> Tatum virtual currency acts as any other asset within Tatum. To create a fungible token, see the <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy" target="_blank">API for deploying a fungible token smart contract</a>.<br/> This operation returns the newly created Tatum Ledger account with an initial balance set to the virtual currency's total supply. Total supply can be changed in the future.</p>

### Example

[✨ View "createCurrency.php"](../../examples/Api/VirtualCurrencyApi/createCurrency.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getCurrency()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->virtualCurrency()->getCurrency(
    string $name
): \Tatum\Model\VC
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$name** | **string**  |  |

### Return type

[**\Tatum\Model\VC**](../Model/VC.md)

### Description

Get virtual currency

<h4>1 credit per API call.</h4><br/><p>Get detail of virtual currency.<p>

### Example

[✨ View "getCurrency.php"](../../examples/Api/VirtualCurrencyApi/getCurrency.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintCurrency()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->virtualCurrency()->mintCurrency(
    \Tatum\Model\VirtualCurrencyOperation $virtual_currency_operation
): \Tatum\Model\TransactionResult
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency_operation** | [**\Tatum\Model\VirtualCurrencyOperation**](../Model/VirtualCurrencyOperation.md) |  |

### Return type

[**\Tatum\Model\TransactionResult**](../Model/TransactionResult.md)

### Description

Create new supply of virtual currency

<h4>2 credits per API call.</h4><br/> <p>Create new supply of virtual currency linked on the given accountId. Method increases the total supply of the currency.<br/> This method creates Ledger transaction with operationType MINT with undefined counterAccountId.<p>

### Example

[✨ View "mintCurrency.php"](../../examples/Api/VirtualCurrencyApi/mintCurrency.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `revokeCurrency()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->virtualCurrency()->revokeCurrency(
    \Tatum\Model\VirtualCurrencyOperation $virtual_currency_operation
): \Tatum\Model\TransactionResult
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency_operation** | [**\Tatum\Model\VirtualCurrencyOperation**](../Model/VirtualCurrencyOperation.md) |  |

### Return type

[**\Tatum\Model\TransactionResult**](../Model/TransactionResult.md)

### Description

Destroy supply of virtual currency

<h4>2 credits per API call.</h4><br/> <p>Destroy supply of virtual currency linked on the given accountId. Method decreases the total supply of the currency.<br/> This method creates Ledger transaction with operationType REVOKE with undefined counterAccountId.</p>

### Example

[✨ View "revokeCurrency.php"](../../examples/Api/VirtualCurrencyApi/revokeCurrency.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateCurrency()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->virtualCurrency()->updateCurrency(
    \Tatum\Model\VirtualCurrencyUpdate $virtual_currency_update
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency_update** | [**\Tatum\Model\VirtualCurrencyUpdate**](../Model/VirtualCurrencyUpdate.md) |  |

### Return type

void (empty response body)

### Description

Update virtual currency

<h4>2 credits per API call.</h4><br/><p>Change base pair and/or base rate of existing virtual currency.</p>

### Example

[✨ View "updateCurrency.php"](../../examples/Api/VirtualCurrencyApi/updateCurrency.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
