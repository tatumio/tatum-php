# Tatum/Api/VirtualAccountBlockchainFeesApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**offchainEstimateFee()**](#offchainestimatefee) | **POST** /v3/offchain/blockchain/estimate | Estimate ledger to blockchain transaction fee


## `offchainEstimateFee()`

```php
api()->virtualAccountBlockchainFees()->offchainEstimateFee(
    ?\Tatum\Model\OffchainEstimateFee $offchain_estimate_fee
): \Tatum\Model\FeeBtc
```

Estimate ledger to blockchain transaction fee

<h4>2 credits per API call.</h4><br/> <p>Estimate current transaction fee for ledger to blockchain transaction.<br/> Supported blockchains: <ul> <li>Bitcoin</li> <li>Litecoin</li> <li>Dogecoin</li> </ul> </p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$offchain_estimate_fee = new \Tatum\Model\OffchainEstimateFee();

try {
    /** @var \Tatum\Model\FeeBtc $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->virtualAccountBlockchainFees()
        ->offchainEstimateFee($offchain_estimate_fee);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling virtualAccountBlockchainFees()->offchainEstimateFee(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling virtualAccountBlockchainFees()->offchainEstimateFee(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$offchain_estimate_fee** | [**\Tatum\Model\OffchainEstimateFee**](../Model/OffchainEstimateFee.md)|  |

### Return type

[**\Tatum\Model\FeeBtc**](../Model/FeeBtc.md)

[[Back to top]](#) | [[Back to Index]](../index.md)
