# Tatum/Api/VirtualCurrencyApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCurrency()**](#createcurrency) | **POST** /v3/ledger/virtualCurrency | Create new virtual currency
[**getCurrency()**](#getcurrency) | **GET** /v3/ledger/virtualCurrency/{name} | Get virtual currency
[**mintCurrency()**](#mintcurrency) | **PUT** /v3/ledger/virtualCurrency/mint | Create new supply of virtual currency
[**revokeCurrency()**](#revokecurrency) | **PUT** /v3/ledger/virtualCurrency/revoke | Destroy supply of virtual currency
[**updateCurrency()**](#updatecurrency) | **PUT** /v3/ledger/virtualCurrency | Update virtual currency


## `createCurrency()`

```php
api()->virtualCurrency()->createCurrency(
    ?\Tatum\Model\VirtualCurrency $virtual_currency
): \Tatum\Model\Account
```

Create new virtual currency

<h4>2 credits per API call.</h4><br/> <p>Create new virtual currency with given supply stored in account. This will create Tatum internal virtual currency. Every virtual currency must be prefixed with <b>VC_</b>.<br/> Every virtual currency must be pegged to existing FIAT or supported cryptocurrency. 1 unit of virtual currency has then the same amount as 1 unit of the base currency it is pegged to. It is possible to set a custom base rate for the virtual currency. (baseRate = 2 => 1 VC unit = 2 basePair units)<br/> Tatum virtual currency acts as any other asset within Tatum. To create a fungible token, see the <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy" target="_blank">API for deploying a fungible token smart contract</a>.<br/> This operation returns the newly created Tatum Ledger account with an initial balance set to the virtual currency's total supply. Total supply can be changed in the future.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$virtual_currency = new \Tatum\Model\VirtualCurrency();

try {
    /** @var \Tatum\Model\Account $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->virtualCurrency()
        ->createCurrency($virtual_currency);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling virtualCurrency()->createCurrency(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling virtualCurrency()->createCurrency(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency** | [**\Tatum\Model\VirtualCurrency**](../Model/VirtualCurrency.md)|  |

### Return type

[**\Tatum\Model\Account**](../Model/Account.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `getCurrency()`

```php
api()->virtualCurrency()->getCurrency(
    ?string $name
): \Tatum\Model\VC
```

Get virtual currency

<h4>1 credit per API call.</h4><br/><p>Get detail of virtual currency.<p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$name = 'name_example';

try {
    /** @var \Tatum\Model\VC $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->virtualCurrency()
        ->getCurrency($name);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling virtualCurrency()->getCurrency(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling virtualCurrency()->getCurrency(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$name** | **string**|  |

### Return type

[**\Tatum\Model\VC**](../Model/VC.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `mintCurrency()`

```php
api()->virtualCurrency()->mintCurrency(
    ?\Tatum\Model\VirtualCurrencyOperation $virtual_currency_operation
): \Tatum\Model\TransactionResult
```

Create new supply of virtual currency

<h4>2 credits per API call.</h4><br/> <p>Create new supply of virtual currency linked on the given accountId. Method increases the total supply of the currency.<br/> This method creates Ledger transaction with operationType MINT with undefined counterAccountId.<p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$virtual_currency_operation = new \Tatum\Model\VirtualCurrencyOperation();

try {
    /** @var \Tatum\Model\TransactionResult $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->virtualCurrency()
        ->mintCurrency($virtual_currency_operation);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling virtualCurrency()->mintCurrency(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling virtualCurrency()->mintCurrency(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency_operation** | [**\Tatum\Model\VirtualCurrencyOperation**](../Model/VirtualCurrencyOperation.md)|  |

### Return type

[**\Tatum\Model\TransactionResult**](../Model/TransactionResult.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `revokeCurrency()`

```php
api()->virtualCurrency()->revokeCurrency(
    ?\Tatum\Model\VirtualCurrencyOperation $virtual_currency_operation
): \Tatum\Model\TransactionResult
```

Destroy supply of virtual currency

<h4>2 credits per API call.</h4><br/> <p>Destroy supply of virtual currency linked on the given accountId. Method decreases the total supply of the currency.<br/> This method creates Ledger transaction with operationType REVOKE with undefined counterAccountId.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$virtual_currency_operation = new \Tatum\Model\VirtualCurrencyOperation();

try {
    /** @var \Tatum\Model\TransactionResult $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->virtualCurrency()
        ->revokeCurrency($virtual_currency_operation);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling virtualCurrency()->revokeCurrency(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling virtualCurrency()->revokeCurrency(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency_operation** | [**\Tatum\Model\VirtualCurrencyOperation**](../Model/VirtualCurrencyOperation.md)|  |

### Return type

[**\Tatum\Model\TransactionResult**](../Model/TransactionResult.md)

[[Back to top]](#) | [[Back to Index]](../index.md)

## `updateCurrency()`

```php
api()->virtualCurrency()->updateCurrency(
    ?\Tatum\Model\VirtualCurrencyUpdate $virtual_currency_update
)
```

Update virtual currency

<h4>2 credits per API call.</h4><br/><p>Change base pair and/or base rate of existing virtual currency.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$virtual_currency_update = new \Tatum\Model\VirtualCurrencyUpdate();

try {
        $sdk
        ->mainnet()
        ->api()
        ->virtualCurrency()
        ->updateCurrency($virtual_currency_update);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling virtualCurrency()->updateCurrency(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling virtualCurrency()->updateCurrency(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$virtual_currency_update** | [**\Tatum\Model\VirtualCurrencyUpdate**](../Model/VirtualCurrencyUpdate.md)|  |

### Return type

void (empty response body)

[[Back to top]](#) | [[Back to Index]](../index.md)
