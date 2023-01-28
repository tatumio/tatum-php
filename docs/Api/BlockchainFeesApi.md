---
title: Blockchain fees
parent: API
layout: page
---

# Api/BlockchainFeesApi

[Blockchain fees API Reference](https://apidoc.tatum.io/tag/Blockchain-fees/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->blockchainFees();

// TestNet API Call
$sdk->testnet()->api()->blockchainFees();
```

## Methods

Method | Description
------------- | -------------
[**bscEstimateGas()**](#bscestimategas) | Estimate the fee for a BNB Smart Chain transaction
[**celoEstimateGas()**](#celoestimategas) | Estimate the fee for a Celo transaction
[**egldEstimateGas()**](#egldestimategas) | Estimate the fee for an Elrond transaction
[**estimateFee()**](#estimatefee) | Estimate the fee for a transaction on a blockchain
[**estimateFeeBatchMintNft()**](#estimatefeebatchmintnft) | Estimate the fee for a transaction on a blockchain
[**estimateFeeDeployCustodialWallet()**](#estimatefeedeploycustodialwallet) | Estimate the fee for a transaction on a blockchain
[**estimateFeeFromAddress()**](#estimatefeefromaddress) | Estimate the fee for a transaction on a blockchain
[**estimateFeeFromUTXO()**](#estimatefeefromutxo) | Estimate the fee for a transaction on a blockchain
[**estimateFeeTransferFromCustodial()**](#estimatefeetransferfromcustodial) | Estimate the fee for a transaction on a blockchain
[**ethEstimateGas()**](#ethestimategas) | Estimate the fee for an Ethereum transaction
[**ethEstimateGasBatch()**](#ethestimategasbatch) | Estimate the fee for multiple Ethereum transactions
[**getBlockchainFee()**](#getblockchainfee) | Get the recommended fee/gas price for a blockchain
[**kcsEstimateGas()**](#kcsestimategas) | Estimate the fee for a KuCoin Community Chain transaction
[**klaytnEstimateGas()**](#klaytnestimategas) | Estimate the fee for a Klaytn transaction
[**polygonEstimateGas()**](#polygonestimategas) | Estimate the fee for a Polygon transaction
[**vetEstimateGas()**](#vetestimategas) | Estimate the gas needed for a VeChain transaction
[**xdcEstimateGas()**](#xdcestimategas) | Estimate the fee for a XinFin transaction


## `bscEstimateGas()`

### Example

[👉 View "**bscEstimateGas.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/bscEstimateGas.php)

### Request

> **POST** `/v3/bsc/gas`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->bscEstimateGas(
    \Tatum\Model\BscEstimateGas $bsc_estimate_gas
): \Tatum\Model\GasEstimated
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bsc_estimate_gas** | [**\Tatum\Model\BscEstimateGas**](../../Model/BscEstimateGas) |  |

### Return type

[**\Tatum\Model\GasEstimated**](../../Model/GasEstimated)

### Description

Estimate the fee for a BNB Smart Chain transaction

**2 credits per API call**

 Get an estimated gas price and the number of gas units needed for a BNB Smart Chain transaction. The gas price is obtained from <a href="https://explorer.bitquery.io/bsc/gas" target="_blank">https://explorer.bitquery.io/bsc/gas</a>.

 <p style="border:4px solid DeepSkyBlue;">**NOTE:** The estimated gas price is returned in **wei**. However, when <a href="https://apidoc.tatum.io/tag/BNB-Smart-Chain#operation/BscBlockchainTransfer" target="_blank">making the transaction itself</a> and providing the custom fee, you have to provide the gas price in **Gwei**. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

[Back to top](#top)



## `celoEstimateGas()`

### Example

[👉 View "**celoEstimateGas.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/celoEstimateGas.php)

### Request

> **POST** `/v3/celo/gas`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->celoEstimateGas(
    \Tatum\Model\CeloEstimateGas $celo_estimate_gas
): \Tatum\Model\GasEstimated
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$celo_estimate_gas** | [**\Tatum\Model\CeloEstimateGas**](../../Model/CeloEstimateGas) |  |

### Return type

[**\Tatum\Model\GasEstimated**](../../Model/GasEstimated)

### Description

Estimate the fee for a Celo transaction

**2 credits per API call**

 Get an estimated gas price and the number of gas units needed for a Celo transaction. The gas price is obtained from <a href="https://explorer.bitquery.io/celo_rc1/gas" target="_blank">https://explorer.bitquery.io/celo_rc1/gas</a>.

 <p style="border:4px solid DeepSkyBlue;">**NOTE:** The estimated gas price is returned in **wei**. However, when <a href="https://apidoc.tatum.io/tag/Celo#operation/CeloBlockchainTransfer" target="_blank">making the transaction itself</a> and providing the custom fee, you have to provide the gas price in **Gwei**. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

[Back to top](#top)



## `egldEstimateGas()`

### Example

[👉 View "**egldEstimateGas.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/egldEstimateGas.php)

### Request

> **POST** `/v3/egld/gas`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->egldEstimateGas(
    \Tatum\Model\TransactionFeeEgldBlockchain $transaction_fee_egld_blockchain
): \Tatum\Model\EgldEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transaction_fee_egld_blockchain** | [**\Tatum\Model\TransactionFeeEgldBlockchain**](../../Model/TransactionFeeEgldBlockchain) |  |

### Return type

[**\Tatum\Model\EgldEstimateGas200Response**](../../Model/EgldEstimateGas200Response)

### Description

Estimate the fee for an Elrond transaction

**2 credits per API call**

 Get an estimated gas price and the number of gas units needed for an Elrond transaction. The gas price is obtained from <a href="https://gateway.elrond.com/network/config" target="_blank">https://gateway.elrond.com/network/config</a>. The gas limit is obtains from <a href="https://gateway.elrond.com/transaction/cost" target="_blank">https://gateway.elrond.com/transaction/cost</a>.

[Back to top](#top)



## `estimateFee()`

### Example

[👉 View "**estimateFee.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFee.php)

### Request

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->estimateFee(
    \Tatum\Model\EstimateFee $estimate_fee
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee** | [**\Tatum\Model\EstimateFee**](../../Model/EstimateFee) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../../Model/EstimateFee200Response)

### Description

Estimate the fee for a transaction on a blockchain

**10 credits per API call**

 Estimate the current fee for different types of transactions.

 This API is supported for the following blockchains:

 

<ul> <li>Bitcoin</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Litecoin</li> <li>Polygon</li> <li>XinFin</li> </ul>

[Back to top](#top)



## `estimateFeeBatchMintNft()`

### Example

[👉 View "**estimateFeeBatchMintNft.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeBatchMintNft.php)

### Request

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeBatchMintNft(
    \Tatum\Model\EstimateFeeBatchMintNft $estimate_fee_batch_mint_nft
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_batch_mint_nft** | [**\Tatum\Model\EstimateFeeBatchMintNft**](../../Model/EstimateFeeBatchMintNft) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../../Model/EstimateFee200Response)

### Description

Estimate the fee for a transaction on a blockchain

EstimateFeeBatchMintNft operation

[Back to top](#top)



## `estimateFeeDeployCustodialWallet()`

### Example

[👉 View "**estimateFeeDeployCustodialWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeDeployCustodialWallet.php)

### Request

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeDeployCustodialWallet(
    \Tatum\Model\EstimateFeeDeployCustodialWallet $estimate_fee_deploy_custodial_wallet
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_deploy_custodial_wallet** | [**\Tatum\Model\EstimateFeeDeployCustodialWallet**](../../Model/EstimateFeeDeployCustodialWallet) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../../Model/EstimateFee200Response)

### Description

Estimate the fee for a transaction on a blockchain

EstimateFeeDeployCustodialWallet operation

[Back to top](#top)



## `estimateFeeFromAddress()`

### Example

[👉 View "**estimateFeeFromAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeFromAddress.php)

### Request

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeFromAddress(
    \Tatum\Model\EstimateFeeFromAddress $estimate_fee_from_address
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_from_address** | [**\Tatum\Model\EstimateFeeFromAddress**](../../Model/EstimateFeeFromAddress) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../../Model/EstimateFee200Response)

### Description

Estimate the fee for a transaction on a blockchain

EstimateFeeFromAddress operation

[Back to top](#top)



## `estimateFeeFromUTXO()`

### Example

[👉 View "**estimateFeeFromUTXO.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeFromUTXO.php)

### Request

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeFromUTXO(
    \Tatum\Model\EstimateFeeFromUTXO $estimate_fee_from_utxo
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_from_utxo** | [**\Tatum\Model\EstimateFeeFromUTXO**](../../Model/EstimateFeeFromUTXO) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../../Model/EstimateFee200Response)

### Description

Estimate the fee for a transaction on a blockchain

EstimateFeeFromUTXO operation

[Back to top](#top)



## `estimateFeeTransferFromCustodial()`

### Example

[👉 View "**estimateFeeTransferFromCustodial.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/estimateFeeTransferFromCustodial.php)

### Request

> **POST** `/v3/blockchain/estimate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->estimateFeeTransferFromCustodial(
    \Tatum\Model\EstimateFeeTransferFromCustodial $estimate_fee_transfer_from_custodial
): \Tatum\Model\EstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_transfer_from_custodial** | [**\Tatum\Model\EstimateFeeTransferFromCustodial**](../../Model/EstimateFeeTransferFromCustodial) |  |

### Return type

[**\Tatum\Model\EstimateFee200Response**](../../Model/EstimateFee200Response)

### Description

Estimate the fee for a transaction on a blockchain

EstimateFeeTransferFromCustodial operation

[Back to top](#top)



## `ethEstimateGas()`

### Example

[👉 View "**ethEstimateGas.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/ethEstimateGas.php)

### Request

> **POST** `/v3/ethereum/gas`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->ethEstimateGas(
    \Tatum\Model\EthEstimateGas $eth_estimate_gas,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthGasEstimation
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_estimate_gas** | [**\Tatum\Model\EthEstimateGas**](../../Model/EthEstimateGas) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthGasEstimation**](../../Model/EthGasEstimation)

### Description

Estimate the fee for an Ethereum transaction

**10 credits per API call**

 Get an estimated gas price and the number of gas units needed for an Ethereum transaction. The gas price is obtained from multiple sources and calculated based on the latest N blocks and the current mempool state.

 The <code>fast</code> gas price is used by default.

 <p style="border:4px solid DeepSkyBlue;">**NOTE:** The estimated gas price is returned in **wei**. However, when <a href="https://apidoc.tatum.io/tag/Ethereum#operation/EthBlockchainTransfer" target="_blank">making the transaction itself</a> and providing the custom fee, you have to provide the gas price in **Gwei**. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

[Back to top](#top)



## `ethEstimateGasBatch()`

### Example

[👉 View "**ethEstimateGasBatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/ethEstimateGasBatch.php)

### Request

> **POST** `/v3/ethereum/gas/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->ethEstimateGasBatch(
    \Tatum\Model\EthEstimateGasArray $eth_estimate_gas_array,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\EthGasEstimationBatch
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_estimate_gas_array** | [**\Tatum\Model\EthEstimateGasArray**](../../Model/EthEstimateGasArray) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\EthGasEstimationBatch**](../../Model/EthGasEstimationBatch)

### Description

Estimate the fee for multiple Ethereum transactions

**10 credits per API call + 10 credits per each gas estimation**

 Get an estimated gas price and the number of gas units needed for multiple Ethereum transactions. The gas price is obtained from multiple sources and calculated based on the latest N blocks and the current mempool state.

 The estimations are returned in the same order as the transactions were submitted in the request.

 The <code>fast</code> gas price is used by default.

 <p style="border:4px solid DeepSkyBlue;">**NOTE:** The estimated gas price is returned in **wei**. However, when <a href="https://apidoc.tatum.io/tag/Ethereum#operation/EthBlockchainTransfer" target="_blank">making a transaction itself</a> and providing the custom fee, you have to provide the gas price in **Gwei**. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

[Back to top](#top)



## `getBlockchainFee()`

### Example

[👉 View "**getBlockchainFee.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/getBlockchainFee.php)

### Request

> **GET** `/v3/blockchain/fee/{chain}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->getBlockchainFee(
    string $chain
): \Tatum\Model\BlockchainFee
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Chain |

### Return type

[**\Tatum\Model\BlockchainFee**](../../Model/BlockchainFee)

### Description

Get the recommended fee/gas price for a blockchain

**1 credit per API call**

 Get the recommended fee/gas price for a blockchain.

 This API is supported for the following blockchains:

 

<ul> <li>Bitcoin</li> <li>Dogecoin</li> <li>Ethereum</li> <li>Litecoin</li> </ul>

[Back to top](#top)



## `kcsEstimateGas()`

### Example

[👉 View "**kcsEstimateGas.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/kcsEstimateGas.php)

### Request

> **POST** `/v3/kcs/gas`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->kcsEstimateGas(
    \Tatum\Model\KcsEstimateGas $kcs_estimate_gas
): \Tatum\Model\GasEstimated
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$kcs_estimate_gas** | [**\Tatum\Model\KcsEstimateGas**](../../Model/KcsEstimateGas) |  |

### Return type

[**\Tatum\Model\GasEstimated**](../../Model/GasEstimated)

### Description

Estimate the fee for a KuCoin Community Chain transaction

**2 credits per API call**

 Get an estimated gas price and the number of gas units needed for a KuCoin Community Chain transaction.

 <p style="border:4px solid DeepSkyBlue;">**NOTE:** The estimated gas price is returned in **wei**. However, when <a href="https://apidoc.tatum.io/tag/KuCoin#operation/KcsBlockchainTransfer" target="_blank">making the transaction itself</a> and providing the custom fee, you have to provide the gas price in **Gwei**. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

[Back to top](#top)



## `klaytnEstimateGas()`

### Example

[👉 View "**klaytnEstimateGas.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/klaytnEstimateGas.php)

### Request

> **POST** `/v3/klaytn/gas`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->klaytnEstimateGas(
    \Tatum\Model\KlaytnEstimateGas $klaytn_estimate_gas
): \Tatum\Model\KlaytnEstimateGas200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$klaytn_estimate_gas** | [**\Tatum\Model\KlaytnEstimateGas**](../../Model/KlaytnEstimateGas) |  |

### Return type

[**\Tatum\Model\KlaytnEstimateGas200Response**](../../Model/KlaytnEstimateGas200Response)

### Description

Estimate the fee for a Klaytn transaction

**2 credits per API call**

 Get an estimated gas price and the number of gas units needed for a Klaytn transaction. The gas price is obtained from <a href="https://explorer.bitquery.io/klaytn/gas" target="_blank">https://explorer.bitquery.io/klaytn/gas</a>.

 <p style="border:4px solid DeepSkyBlue;">**NOTE:** The estimated gas price is returned in **peb**. However, when <a href="https://apidoc.tatum.io/tag/Klaytn#operation/KlaytnBlockchainTransfer" target="_blank">making the transaction itself</a> and providing the custom fee, you have to provide the gas price in **Gpeb**. Make sure to convert the estimated gas price from peb to Gpeb before submitting your transaction.

[Back to top](#top)



## `polygonEstimateGas()`

### Example

[👉 View "**polygonEstimateGas.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/polygonEstimateGas.php)

### Request

> **POST** `/v3/polygon/gas`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->polygonEstimateGas(
    \Tatum\Model\PolygonEstimateGas $polygon_estimate_gas
): \Tatum\Model\GasEstimated
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$polygon_estimate_gas** | [**\Tatum\Model\PolygonEstimateGas**](../../Model/PolygonEstimateGas) |  |

### Return type

[**\Tatum\Model\GasEstimated**](../../Model/GasEstimated)

### Description

Estimate the fee for a Polygon transaction

**2 credits per API call**

 Get an estimated gas price and the number of gas units needed for a Polygon transaction. The gas price is obtained from <a href="https://gasstation-mainnet.matic.network/" target="_blank">https://gasstation-mainnet.matic.network/</a>.

 <p style="border:4px solid DeepSkyBlue;">**NOTE:** The estimated gas price is returned in **wei**. However, when <a href="https://apidoc.tatum.io/tag/Polygon#operation/PolygonBlockchainTransfer" target="_blank">making the transaction itself</a> and providing the custom fee, you have to provide the gas price in **Gwei**. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

[Back to top](#top)



## `vetEstimateGas()`

### Example

[👉 View "**vetEstimateGas.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/vetEstimateGas.php)

### Request

> **POST** `/v3/vet/transaction/gas`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->vetEstimateGas(
    \Tatum\Model\VetEstimateGas $vet_estimate_gas
): float
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$vet_estimate_gas** | [**\Tatum\Model\VetEstimateGas**](../../Model/VetEstimateGas) |  |

### Return type

**float**

### Description

Estimate the gas needed for a VeChain transaction

**5 credits per API call**

 Get an estimated amount of gas needed for a VeChain transaction.

[Back to top](#top)



## `xdcEstimateGas()`

### Example

[👉 View "**xdcEstimateGas.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainFeesApi/xdcEstimateGas.php)

### Request

> **POST** `/v3/xdc/gas`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainFees()->xdcEstimateGas(
    \Tatum\Model\XdcEstimateGas $xdc_estimate_gas
): \Tatum\Model\GasEstimated
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xdc_estimate_gas** | [**\Tatum\Model\XdcEstimateGas**](../../Model/XdcEstimateGas) |  |

### Return type

[**\Tatum\Model\GasEstimated**](../../Model/GasEstimated)

### Description

Estimate the fee for a XinFin transaction

**2 credits per API call**

 Get an estimated gas price and the number of gas units needed for a XinFin transaction. The gas price is obtained from <a href="https://rpc.xinfin.network/gasPrice" target="_blank">https://rpc.xinfin.network/gasPrice</a>.

 <p style="border:4px solid DeepSkyBlue;">**NOTE:** The estimated gas price is returned in **wei**. However, when <a href="https://apidoc.tatum.io/tag/XinFin#operation/XdcBlockchainTransfer" target="_blank">making the transaction itself</a> and providing the custom fee, you have to provide the gas price in **Gwei**. Make sure to convert the estimated gas price from wei to Gwei before submitting your transaction.

[Back to top](#top)

