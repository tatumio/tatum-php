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
 **$bsc_estimate_gas** | [**\Tatum\Model\BscEstimateGas**](../Model/BscEstimateGas.md) |  |

### Return type

[**\Tatum\Model\PolygonEstimateGas200Response**](../Model/PolygonEstimateGas200Response.md)

### Description

Estimate BNB Smart Chain transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the BSC transaction. Gas price is obtained from <a href="https://explorer.bitquery.io/bsc/gas" target="_blank">https://explorer.bitquery.io/bsc/gas</a>. </p>

### Example

[✨ View "bscEstimateGas.php"](../../samples/Api/BlockchainFeesApi/bscEstimateGas.php)

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
 **$celo_estimate_gas** | [**\Tatum\Model\CeloEstimateGas**](../Model/CeloEstimateGas.md) |  |

### Return type

[**\Tatum\Model\CeloEstimateGas200Response**](../Model/CeloEstimateGas200Response.md)

### Description

Estimate Celo Chain transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the CELO transaction. Gas price is obtained from <a href="https://explorer.bitquery.io/celo_rc1/gas" target="_blank">https://explorer.bitquery.io/celo_rc1/gas</a>. </p>

### Example

[✨ View "celoEstimateGas.php"](../../samples/Api/BlockchainFeesApi/celoEstimateGas.php)

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
 **$transaction_fee_egld_blockchain** | [**\Tatum\Model\TransactionFeeEgldBlockchain**](../Model/TransactionFeeEgldBlockchain.md) |  |

### Return type

[**\Tatum\Model\EgldEstimateGas200Response**](../Model/EgldEstimateGas200Response.md)

### Description

Estimate EGLD transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the EGLD transaction. Gas limit is obtained from <a href="https://gateway.elrond.com/transaction/cost" target="_blank">https://gateway.elrond.com/transaction/cost</a>. Gas price is obtained from <a href="https://gateway.elrond.com/network/config" target="_blank">https://gateway.elrond.com/network/config</a>. </p>

### Example

[✨ View "egldEstimateGas.php"](../../samples/Api/BlockchainFeesApi/egldEstimateGas.php)

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
 **$estimate_fee_blockchain_request** | [**\Tatum\Model\EstimateFeeBlockchainRequest**](../Model/EstimateFeeBlockchainRequest.md) |  |

### Return type

[**\Tatum\Model\EstimateFeeBlockchain200Response**](../Model/EstimateFeeBlockchain200Response.md)

### Description

Estimate the fee for a transaction

<h4>10 credits per API call.</h4><br/> <p>Estimate current transaction fee for different operations.<br/> Supported blockchains: <ul> <li>Bitcoin</li> <li>Litecoin</li> <li>Harmony.ONE</li> <li>The XDC Network</li> <li>Ethereum</li> <li>Celo</li> <li>Klaytn</li> <li>Binance Smart Chain</li> <li>Polygon</li> </ul> </p>

### Example

[✨ View "estimateFeeBlockchain.php"](../../samples/Api/BlockchainFeesApi/estimateFeeBlockchain.php)

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
 **$eth_estimate_gas** | [**\Tatum\Model\EthEstimateGas**](../Model/EthEstimateGas.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthGasEstimation**](../Model/EthGasEstimation.md)

### Description

Estimate Ethereum transaction fees

<h4>10 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the Ethereum transaction. Gas price is obtained from multiple sources + calculated based on the latest N blocks and the current mempool state. The <b>fast</b> one is used by default. </p>

### Example

[✨ View "ethEstimateGas.php"](../../samples/Api/BlockchainFeesApi/ethEstimateGas.php)

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
 **$eth_estimate_gas_array** | [**\Tatum\Model\EthEstimateGasArray**](../Model/EthEstimateGasArray.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthGasEstimationBatch**](../Model/EthGasEstimationBatch.md)

### Description

Estimate multiple Ethereum transaction fees

<h4>10 credits per API call + 10 credits per each gas estimation.</h4><br/> <p>Estimate gasLimit and gasPrice of the Ethereum transaction. Gas price is obtained from multiple sources + calculated based on the latest N blocks and the current mempool state. The <b>fast</b> one is used by default.<br/> Result is calculated  in the order of the request array items. </p>

### Example

[✨ View "ethEstimateGasBatch.php"](../../samples/Api/BlockchainFeesApi/ethEstimateGasBatch.php)

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
 **$chain** | **string**  | Chain |

### Return type

[**\Tatum\Model\BlockchainFee**](../Model/BlockchainFee.md)

### Description

Get recommended blockchain fee / gas price

<p><b>1 credit per API call</b></p> <p>Get recommended blockchain fee / gas price</p>

### Example

[✨ View "getBlockchainFee.php"](../../samples/Api/BlockchainFeesApi/getBlockchainFee.php)

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
 **$kcs_estimate_gas** | [**\Tatum\Model\KcsEstimateGas**](../Model/KcsEstimateGas.md) |  |

### Return type

[**\Tatum\Model\PolygonEstimateGas200Response**](../Model/PolygonEstimateGas200Response.md)

### Description

Estimate KuCoin Community Chain transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the Kcs transaction. </p>

### Example

[✨ View "kcsEstimateGas.php"](../../samples/Api/BlockchainFeesApi/kcsEstimateGas.php)

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
 **$klaytn_estimate_gas** | [**\Tatum\Model\KlaytnEstimateGas**](../Model/KlaytnEstimateGas.md) |  |

### Return type

[**\Tatum\Model\KlaytnEstimateGas200Response**](../Model/KlaytnEstimateGas200Response.md)

### Description

Estimate Klaytn transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the Klaytn transaction. Gas price is obtained from <a href="https://explorer.bitquery.io/klaytn/gas" target="_blank">https://explorer.bitquery.io/klaytn/gas</a>. </p>

### Example

[✨ View "klaytnEstimateGas.php"](../../samples/Api/BlockchainFeesApi/klaytnEstimateGas.php)

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
 **$polygon_estimate_gas** | [**\Tatum\Model\PolygonEstimateGas**](../Model/PolygonEstimateGas.md) |  |

### Return type

[**\Tatum\Model\PolygonEstimateGas200Response**](../Model/PolygonEstimateGas200Response.md)

### Description

Estimate Polygon transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the Polygon transaction. Gas price is obtained from <a href="https://gasstation-mainnet.matic.network/" target="_blank">https://gasstation-mainnet.matic.network/</a>. </p>

### Example

[✨ View "polygonEstimateGas.php"](../../samples/Api/BlockchainFeesApi/polygonEstimateGas.php)

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
 **$vet_estimate_gas** | [**\Tatum\Model\VetEstimateGas**](../Model/VetEstimateGas.md) |  |

### Return type

**float**

### Description

Estimate VeChain Gas for transaction

<h4>5 credits per API call.</h4><br/><p>Estimate gas required for transaction.</p>

### Example

[✨ View "vetEstimateGas.php"](../../samples/Api/BlockchainFeesApi/vetEstimateGas.php)

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
 **$xdc_estimate_gas** | [**\Tatum\Model\XdcEstimateGas**](../Model/XdcEstimateGas.md) |  |

### Return type

[**\Tatum\Model\XdcEstimateGas200Response**](../Model/XdcEstimateGas200Response.md)

### Description

Estimate XinFin transaction fees

<h4>2 credits per API call.</h4><br/> <p>Estimate gasLimit and gasPrice of the XDC transaction. Gas price is obtained from <a href="https://rpc.xinfin.network/gasPrice" target="_blank">https://rpc.xinfin.network/gasPrice</a>. </p>

### Example

[✨ View "xdcEstimateGas.php"](../../samples/Api/BlockchainFeesApi/xdcEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
