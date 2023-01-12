# Tatum/Api/BlockchainFeesApi

## References

[Blockchain fees API documentation](https://apidoc.tatum.io/tag/Blockchain-fees/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **bscEstimateGas()**](#bscestimategas) 

> Estimate BNB Smart Chain transaction fees
> 
> **POST** `/v3/bsc/gas`

[🔹 **celoEstimateGas()**](#celoestimategas) 

> Estimate Celo Chain transaction fees
> 
> **POST** `/v3/celo/gas`

[🔹 **egldEstimateGas()**](#egldestimategas) 

> Estimate EGLD transaction fees
> 
> **POST** `/v3/egld/gas`

[🔹 **estimateFee()**](#estimatefee) 

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeBatchMintNft()**](#estimatefeebatchmintnft) 

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeDeployCustodialWallet()**](#estimatefeedeploycustodialwallet) 

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeFromAddress()**](#estimatefeefromaddress) 

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeFromUTXO()**](#estimatefeefromutxo) 

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeTransferFromCustodial()**](#estimatefeetransferfromcustodial) 

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **ethEstimateGas()**](#ethestimategas) 

> Estimate Ethereum transaction fees
> 
> **POST** `/v3/ethereum/gas`

[🔹 **ethEstimateGasBatch()**](#ethestimategasbatch) 

> Estimate multiple Ethereum transaction fees
> 
> **POST** `/v3/ethereum/gas/batch`

[🔹 **getBlockchainFee()**](#getblockchainfee) 

> Get recommended blockchain fee / gas price
> 
> **GET** `/v3/blockchain/fee/{chain}`

[🔹 **kcsEstimateGas()**](#kcsestimategas) 

> Estimate KuCoin Community Chain transaction fees
> 
> **POST** `/v3/kcs/gas`

[🔹 **klaytnEstimateGas()**](#klaytnestimategas) 

> Estimate Klaytn transaction fees
> 
> **POST** `/v3/klaytn/gas`

[🔹 **polygonEstimateGas()**](#polygonestimategas) 

> Estimate Polygon transaction fees
> 
> **POST** `/v3/polygon/gas`

[🔹 **vetEstimateGas()**](#vetestimategas) 

> Estimate VeChain Gas for transaction
> 
> **POST** `/v3/vet/transaction/gas`

[🔹 **xdcEstimateGas()**](#xdcestimategas) 

> Estimate XinFin transaction fees
> 
> **POST** `/v3/xdc/gas`



## `bscEstimateGas()`

> **POST** `/v3/bsc/gas`

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

<b>2 credits per API call</b>

 Get an estimated gas price and the number of gas units needed for a BNB Smart Chain transaction. The gas price is obtained from <a href="https://explorer.bitquery.io/bsc/gas" target="_blank">https://explorer.bitquery.io/bsc/gas</a>.

 <b>NOTE:</b> The estimated gas price is returned in <b>wei</b>. However, when <a href="https://apidoc.tatum.io/tag/BNB-Smart-Chain#operation/BscBlockchainTransfer" target="_blank">making the transaction itself</a>, you have to provide the gas price in <b>Gwei</b>. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

### Example

[✨ View "bscEstimateGas.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/bscEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoEstimateGas()`

> **POST** `/v3/celo/gas`

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

<b>2 credits per API call</b>

 Get an estimated gas price and the number of gas units needed for a Celo transaction. The gas price is obtained from <a href="https://explorer.bitquery.io/celo_rc1/gas" target="_blank">https://explorer.bitquery.io/celo_rc1/gas</a>.

 <b>NOTE:</b> The estimated gas price is returned in <b>wei</b>. However, when <a href="https://apidoc.tatum.io/tag/Celo#operation/CeloBlockchainTransfer" target="_blank">making the transaction itself</a>, you have to provide the gas price in <b>Gwei</b>. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

### Example

[✨ View "celoEstimateGas.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/celoEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldEstimateGas()`

> **POST** `/v3/egld/gas`

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

<h4>2 credits per API call.</h4>

 Estimate gasLimit and gasPrice of the EGLD transaction. Gas limit is obtained from <a href="https://gateway.elrond.com/transaction/cost" target="_blank">https://gateway.elrond.com/transaction/cost</a>. Gas price is obtained from <a href="https://gateway.elrond.com/network/config" target="_blank">https://gateway.elrond.com/network/config</a>.

### Example

[✨ View "egldEstimateGas.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/egldEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `estimateFee()`

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->estimateFee(
    \Tatum\Model\EstimateFee $estimate_fee
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee** | [**\Tatum\Model\EstimateFee**](../Model/EstimateFee.md) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../Model/EstimateFee200Response.md)

### Description

Estimate the fee for a transaction

<h4>10 credits per API call.</h4>

 Estimate current transaction fee for different operations.
 Supported blockchains: <ul> <li>Bitcoin</li> <li>Litecoin</li> <li>Harmony.ONE</li> <li>The XDC Network</li> <li>Ethereum</li> <li>Celo</li> <li>Klaytn</li> <li>Binance Smart Chain</li> <li>Polygon</li> </ul>

### Example

[✨ View "estimateFee.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `estimateFeeBatchMintNft()`

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeBatchMintNft(
    \Tatum\Model\EstimateFeeBatchMintNft $estimate_fee_batch_mint_nft
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_batch_mint_nft** | [**\Tatum\Model\EstimateFeeBatchMintNft**](../Model/EstimateFeeBatchMintNft.md) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../Model/EstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeBatchMintNft operation

### Example

[✨ View "estimateFeeBatchMintNft.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeBatchMintNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `estimateFeeDeployCustodialWallet()`

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeDeployCustodialWallet(
    \Tatum\Model\EstimateFeeDeployCustodialWallet $estimate_fee_deploy_custodial_wallet
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_deploy_custodial_wallet** | [**\Tatum\Model\EstimateFeeDeployCustodialWallet**](../Model/EstimateFeeDeployCustodialWallet.md) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../Model/EstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeDeployCustodialWallet operation

### Example

[✨ View "estimateFeeDeployCustodialWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeDeployCustodialWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `estimateFeeFromAddress()`

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeFromAddress(
    \Tatum\Model\EstimateFeeFromAddress $estimate_fee_from_address
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_from_address** | [**\Tatum\Model\EstimateFeeFromAddress**](../Model/EstimateFeeFromAddress.md) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../Model/EstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeFromAddress operation

### Example

[✨ View "estimateFeeFromAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeFromAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `estimateFeeFromUTXO()`

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeFromUTXO(
    \Tatum\Model\EstimateFeeFromUTXO $estimate_fee_from_utxo
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_from_utxo** | [**\Tatum\Model\EstimateFeeFromUTXO**](../Model/EstimateFeeFromUTXO.md) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../Model/EstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeFromUTXO operation

### Example

[✨ View "estimateFeeFromUTXO.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeFromUTXO.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `estimateFeeTransferFromCustodial()`

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeTransferFromCustodial(
    \Tatum\Model\EstimateFeeTransferFromCustodial $estimate_fee_transfer_from_custodial
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_transfer_from_custodial** | [**\Tatum\Model\EstimateFeeTransferFromCustodial**](../Model/EstimateFeeTransferFromCustodial.md) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../Model/EstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeTransferFromCustodial operation

### Example

[✨ View "estimateFeeTransferFromCustodial.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeTransferFromCustodial.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethEstimateGas()`

> **POST** `/v3/ethereum/gas`

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

<h4>10 credits per API call.</h4>

 Estimate gasLimit and gasPrice of the Ethereum transaction. Gas price is obtained from multiple sources + calculated based on the latest N blocks and the current mempool state. The <b>fast</b> one is used by default.

### Example

[✨ View "ethEstimateGas.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/ethEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethEstimateGasBatch()`

> **POST** `/v3/ethereum/gas/batch`

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

<h4>10 credits per API call + 10 credits per each gas estimation.</h4>

 Estimate gasLimit and gasPrice of the Ethereum transaction. Gas price is obtained from multiple sources + calculated based on the latest N blocks and the current mempool state. The <b>fast</b> one is used by default.
 Result is calculated  in the order of the request array items.

### Example

[✨ View "ethEstimateGasBatch.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/ethEstimateGasBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getBlockchainFee()`

> **GET** `/v3/blockchain/fee/{chain}`

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

<b>1 credit per API call</b>

 Get recommended blockchain fee / gas price

### Example

[✨ View "getBlockchainFee.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/getBlockchainFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsEstimateGas()`

> **POST** `/v3/kcs/gas`

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

<b>2 credits per API call</b>

 Get an estimated gas price and the number of gas units needed for a KuCoin Community Chain transaction.

 <b>NOTE:</b> The estimated gas price is returned in <b>wei</b>. However, when <a href="https://apidoc.tatum.io/tag/KuCoin#operation/KcsBlockchainTransfer" target="_blank">making the transaction itself</a>, you have to provide the gas price in <b>Gwei</b>. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

### Example

[✨ View "kcsEstimateGas.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/kcsEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klaytnEstimateGas()`

> **POST** `/v3/klaytn/gas`

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

<h4>2 credits per API call.</h4>

 Estimate gasLimit and gasPrice of the Klaytn transaction. Gas price is obtained from <a href="https://explorer.bitquery.io/klaytn/gas" target="_blank">https://explorer.bitquery.io/klaytn/gas</a>.

### Example

[✨ View "klaytnEstimateGas.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/klaytnEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonEstimateGas()`

> **POST** `/v3/polygon/gas`

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

<b>2 credits per API call</b>

 Get an estimated gas price and the number of gas units needed for a Polygon transaction. The gas price is obtained from <a href="https://gasstation-mainnet.matic.network/" target="_blank">https://gasstation-mainnet.matic.network/</a>.

 <b>NOTE:</b> The estimated gas price is returned in <b>wei</b>. However, when <a href="https://apidoc.tatum.io/tag/Polygon#operation/PolygonBlockchainTransfer" target="_blank">making the transaction itself</a>, you have to provide the gas price in <b>Gwei</b>. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

### Example

[✨ View "polygonEstimateGas.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/polygonEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `vetEstimateGas()`

> **POST** `/v3/vet/transaction/gas`

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

<h4>5 credits per API call.</h4>

Estimate gas required for transaction.

### Example

[✨ View "vetEstimateGas.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/vetEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcEstimateGas()`

> **POST** `/v3/xdc/gas`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->xdcEstimateGas(
    \Tatum\Model\XdcEstimateGas $xdc_estimate_gas
): \Tatum\Model\PolygonEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xdc_estimate_gas** | [**\Tatum\Model\XdcEstimateGas**](../Model/XdcEstimateGas.md) |  |

### Return type

[**\Tatum\Model\PolygonEstimateGas200Response**](../Model/PolygonEstimateGas200Response.md)

### Description

Estimate XinFin transaction fees

<b>2 credits per API call</b>

 Get an estimated gas price and the number of gas units needed for a XinFin transaction. The gas price is obtained from <a href="https://rpc.xinfin.network/gasPrice" target="_blank">https://rpc.xinfin.network/gasPrice</a>.

 <b>NOTE:</b> The estimated gas price is returned in <b>wei</b>. However, when <a href="https://apidoc.tatum.io/tag/XinFin#operation/XdcBlockchainTransfer" target="_blank">making the transaction itself</a>, you have to provide the gas price in <b>Gwei</b>. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

### Example

[✨ View "xdcEstimateGas.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/xdcEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
