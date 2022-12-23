# Tatum/Api/BlockchainFeesApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bscEstimateGas()**](#bscestimategas) | **POST** /v3/bsc/gas | Estimate BNB Smart Chain transaction fees
[**celoEstimateGas()**](#celoestimategas) | **POST** /v3/celo/gas | Estimate Celo Chain transaction fees
[**egldEstimateGas()**](#egldestimategas) | **POST** /v3/egld/gas | Estimate EGLD transaction fees
[**estimateFeeBlockchain()**](#estimatefeeblockchain) | **POST** /v3/blockchain/estimate | Estimate the fee for a transaction
[**ethEstimateGas()**](#ethestimategas) | **POST** /v3/ethereum/gas | Estimate Ethereum transaction fees
[**ethEstimateGasBatch()**](#ethestimategasbatch) | **POST** /v3/ethereum/gas/batch | Estimate multiple Ethereum transaction fees
[**getBlockchainFee()**](#getblockchainfee) | **GET** /v3/blockchain/fee/{chain} | Get recommended blockchain fee / gas price
[**kcsEstimateGas()**](#kcsestimategas) | **POST** /v3/kcs/gas | Estimate KuCoin Community Chain transaction fees
[**klaytnEstimateGas()**](#klaytnestimategas) | **POST** /v3/klaytn/gas | Estimate Klaytn transaction fees
[**polygonEstimateGas()**](#polygonestimategas) | **POST** /v3/polygon/gas | Estimate Polygon transaction fees
[**vetEstimateGas()**](#vetestimategas) | **POST** /v3/vet/transaction/gas | Estimate VeChain Gas for transaction
[**xdcEstimateGas()**](#xdcestimategas) | **POST** /v3/xdc/gas | Estimate XinFin transaction fees


## `bscEstimateGas()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->bscEstimateGas(
    \Tatum\Model\BscEstimateGas $bsc_estimate_gas
): \Tatum\Model\PolygonEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bsc_estimate_gas** | [**\Tatum\Model\BscEstimateGas**](../Model/BscEstimateGas.md)|  |

### Return type

[**\Tatum\Model\PolygonEstimateGas200Response**](../Model/PolygonEstimateGas200Response.md)

### Description

Estimate BNB Smart Chain transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the BSC transaction. Gas price is obtained from <a href="https://explorer.bitquery.io/bsc/gas" target="_blank">https://explorer.bitquery.io/bsc/gas</a>. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$bsc_estimate_gas = new \Tatum\Model\BscEstimateGas();

try {
    /** @var \Tatum\Model\PolygonEstimateGas200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->bscEstimateGas($bsc_estimate_gas);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->bscEstimateGas(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->bscEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoEstimateGas()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->celoEstimateGas(
    \Tatum\Model\CeloEstimateGas $celo_estimate_gas
): \Tatum\Model\CeloEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$celo_estimate_gas** | [**\Tatum\Model\CeloEstimateGas**](../Model/CeloEstimateGas.md)|  |

### Return type

[**\Tatum\Model\CeloEstimateGas200Response**](../Model/CeloEstimateGas200Response.md)

### Description

Estimate Celo Chain transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the CELO transaction. Gas price is obtained from <a href="https://explorer.bitquery.io/celo_rc1/gas" target="_blank">https://explorer.bitquery.io/celo_rc1/gas</a>. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$celo_estimate_gas = new \Tatum\Model\CeloEstimateGas();

try {
    /** @var \Tatum\Model\CeloEstimateGas200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->celoEstimateGas($celo_estimate_gas);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->celoEstimateGas(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->celoEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldEstimateGas()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->egldEstimateGas(
    \Tatum\Model\TransactionFeeEgldBlockchain $transaction_fee_egld_blockchain
): \Tatum\Model\EgldEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_fee_egld_blockchain** | [**\Tatum\Model\TransactionFeeEgldBlockchain**](../Model/TransactionFeeEgldBlockchain.md)|  |

### Return type

[**\Tatum\Model\EgldEstimateGas200Response**](../Model/EgldEstimateGas200Response.md)

### Description

Estimate EGLD transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the EGLD transaction. Gas limit is obtained from <a href="https://gateway.elrond.com/transaction/cost" target="_blank">https://gateway.elrond.com/transaction/cost</a>. Gas price is obtained from <a href="https://gateway.elrond.com/network/config" target="_blank">https://gateway.elrond.com/network/config</a>. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$transaction_fee_egld_blockchain = new \Tatum\Model\TransactionFeeEgldBlockchain();

try {
    /** @var \Tatum\Model\EgldEstimateGas200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->egldEstimateGas($transaction_fee_egld_blockchain);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->egldEstimateGas(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->egldEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `estimateFeeBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeBlockchain(
    \Tatum\Model\EstimateFeeBlockchainRequest $estimate_fee_blockchain_request
): \Tatum\Model\EstimateFeeBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_blockchain_request** | [**\Tatum\Model\EstimateFeeBlockchainRequest**](../Model/EstimateFeeBlockchainRequest.md)|  |

### Return type

[**\Tatum\Model\EstimateFeeBlockchain200Response**](../Model/EstimateFeeBlockchain200Response.md)

### Description

Estimate the fee for a transaction

<h4>10 credits per API call.</h4><br/> <p>Estimate current transaction fee for different operations.<br/> Supported blockchains: <ul> <li>Bitcoin</li> <li>Litecoin</li> <li>Harmony.ONE</li> <li>The XDC Network</li> <li>Ethereum</li> <li>Celo</li> <li>Klaytn</li> <li>Binance Smart Chain</li> <li>Polygon</li> </ul> </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$estimate_fee_blockchain_request = new \Tatum\Model\EstimateFeeBlockchainRequest();

try {
    /** @var \Tatum\Model\EstimateFeeBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->estimateFeeBlockchain($estimate_fee_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->estimateFeeBlockchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->estimateFeeBlockchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethEstimateGas()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->ethEstimateGas(
    \Tatum\Model\EthEstimateGas $eth_estimate_gas,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthGasEstimation
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_estimate_gas** | [**\Tatum\Model\EthEstimateGas**](../Model/EthEstimateGas.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthGasEstimation**](../Model/EthGasEstimation.md)

### Description

Estimate Ethereum transaction fees

<h4>10 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the Ethereum transaction. Gas price is obtained from multiple sources + calculated based on the latest N blocks and the current mempool state. The <b>fast</b> one is used by default. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$eth_estimate_gas = new \Tatum\Model\EthEstimateGas();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\EthGasEstimation $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->ethEstimateGas($eth_estimate_gas, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->ethEstimateGas(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->ethEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethEstimateGasBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->ethEstimateGasBatch(
    \Tatum\Model\EthEstimateGasArray $eth_estimate_gas_array,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthGasEstimationBatch
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_estimate_gas_array** | [**\Tatum\Model\EthEstimateGasArray**](../Model/EthEstimateGasArray.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthGasEstimationBatch**](../Model/EthGasEstimationBatch.md)

### Description

Estimate multiple Ethereum transaction fees

<h4>10 credits per API call + 10 credits per each gas estimation.</h4><br/> <p>Estimate gasLimit and gasPrice of the Ethereum transaction. Gas price is obtained from multiple sources + calculated based on the latest N blocks and the current mempool state. The <b>fast</b> one is used by default.<br/> Result is calculated  in the order of the request array items. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$eth_estimate_gas_array = new \Tatum\Model\EthEstimateGasArray();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\EthGasEstimationBatch $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->ethEstimateGasBatch($eth_estimate_gas_array, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->ethEstimateGasBatch(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->ethEstimateGasBatch(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getBlockchainFee()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->getBlockchainFee(
    string $chain
): \Tatum\Model\BlockchainFee
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Chain |

### Return type

[**\Tatum\Model\BlockchainFee**](../Model/BlockchainFee.md)

### Description

Get recommended blockchain fee / gas price

<p><b>1 credit per API call</b></p> <p>Get recommended blockchain fee / gas price</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Chain
$chain = 'BTC';

try {
    /** @var \Tatum\Model\BlockchainFee $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->getBlockchainFee($chain);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->getBlockchainFee(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->getBlockchainFee(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsEstimateGas()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->kcsEstimateGas(
    \Tatum\Model\KcsEstimateGas $kcs_estimate_gas
): \Tatum\Model\PolygonEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$kcs_estimate_gas** | [**\Tatum\Model\KcsEstimateGas**](../Model/KcsEstimateGas.md)|  |

### Return type

[**\Tatum\Model\PolygonEstimateGas200Response**](../Model/PolygonEstimateGas200Response.md)

### Description

Estimate KuCoin Community Chain transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the Kcs transaction. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$kcs_estimate_gas = new \Tatum\Model\KcsEstimateGas();

try {
    /** @var \Tatum\Model\PolygonEstimateGas200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->kcsEstimateGas($kcs_estimate_gas);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->kcsEstimateGas(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->kcsEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnEstimateGas()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->klaytnEstimateGas(
    \Tatum\Model\KlaytnEstimateGas $klaytn_estimate_gas
): \Tatum\Model\KlaytnEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$klaytn_estimate_gas** | [**\Tatum\Model\KlaytnEstimateGas**](../Model/KlaytnEstimateGas.md)|  |

### Return type

[**\Tatum\Model\KlaytnEstimateGas200Response**](../Model/KlaytnEstimateGas200Response.md)

### Description

Estimate Klaytn transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the Klaytn transaction. Gas price is obtained from <a href="https://explorer.bitquery.io/klaytn/gas" target="_blank">https://explorer.bitquery.io/klaytn/gas</a>. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$klaytn_estimate_gas = new \Tatum\Model\KlaytnEstimateGas();

try {
    /** @var \Tatum\Model\KlaytnEstimateGas200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->klaytnEstimateGas($klaytn_estimate_gas);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->klaytnEstimateGas(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->klaytnEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonEstimateGas()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->polygonEstimateGas(
    \Tatum\Model\PolygonEstimateGas $polygon_estimate_gas
): \Tatum\Model\PolygonEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$polygon_estimate_gas** | [**\Tatum\Model\PolygonEstimateGas**](../Model/PolygonEstimateGas.md)|  |

### Return type

[**\Tatum\Model\PolygonEstimateGas200Response**](../Model/PolygonEstimateGas200Response.md)

### Description

Estimate Polygon transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the Polygon transaction. Gas price is obtained from <a href="https://gasstation-mainnet.matic.network/" target="_blank">https://gasstation-mainnet.matic.network/</a>. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$polygon_estimate_gas = new \Tatum\Model\PolygonEstimateGas();

try {
    /** @var \Tatum\Model\PolygonEstimateGas200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->polygonEstimateGas($polygon_estimate_gas);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->polygonEstimateGas(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->polygonEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetEstimateGas()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->vetEstimateGas(
    \Tatum\Model\VetEstimateGas $vet_estimate_gas
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$vet_estimate_gas** | [**\Tatum\Model\VetEstimateGas**](../Model/VetEstimateGas.md)|  |

### Return type

**float**

### Description

Estimate VeChain Gas for transaction

<h4>5 credits per API call.</h4><br/><p>Estimate gas required for transaction.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$vet_estimate_gas = new \Tatum\Model\VetEstimateGas();

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->vetEstimateGas($vet_estimate_gas);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->vetEstimateGas(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->vetEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcEstimateGas()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->xdcEstimateGas(
    \Tatum\Model\XdcEstimateGas $xdc_estimate_gas
): \Tatum\Model\XdcEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xdc_estimate_gas** | [**\Tatum\Model\XdcEstimateGas**](../Model/XdcEstimateGas.md)|  |

### Return type

[**\Tatum\Model\XdcEstimateGas200Response**](../Model/XdcEstimateGas200Response.md)

### Description

Estimate XinFin transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the XDC transaction. Gas price is obtained from <a href="https://rpc.xinfin.network/gasPrice" target="_blank">https://rpc.xinfin.network/gasPrice</a>. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$xdc_estimate_gas = new \Tatum\Model\XdcEstimateGas();

try {
    /** @var \Tatum\Model\XdcEstimateGas200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainFees()
        ->xdcEstimateGas($xdc_estimate_gas);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainFees()->xdcEstimateGas(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainFees()->xdcEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
