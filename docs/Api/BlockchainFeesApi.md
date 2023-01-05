# Tatum/Api/BlockchainFeesApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**blockchainEstimateFee()**](#blockchainestimatefee) | **POST** [/v3/blockchain/estimate](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/blockchainEstimateFee) | Estimate the fee for a transaction
[**blockchainEstimateFeeBatchMintNft()**](#blockchainestimatefeebatchmintnft) | **POST** [/v3/blockchain/estimate](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/blockchainEstimateFeeBatchMintNft) | Estimate the fee for a transaction
[**blockchainEstimateFeeDeployCustodialWallet()**](#blockchainestimatefeedeploycustodialwallet) | **POST** [/v3/blockchain/estimate](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/blockchainEstimateFeeDeployCustodialWallet) | Estimate the fee for a transaction
[**blockchainEstimateFeeFromAddress()**](#blockchainestimatefeefromaddress) | **POST** [/v3/blockchain/estimate](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/blockchainEstimateFeeFromAddress) | Estimate the fee for a transaction
[**blockchainEstimateFeeFromUTXO()**](#blockchainestimatefeefromutxo) | **POST** [/v3/blockchain/estimate](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/blockchainEstimateFeeFromUTXO) | Estimate the fee for a transaction
[**blockchainEstimateFeeTransferFromCustodial()**](#blockchainestimatefeetransferfromcustodial) | **POST** [/v3/blockchain/estimate](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/blockchainEstimateFeeTransferFromCustodial) | Estimate the fee for a transaction
[**bscEstimateGas()**](#bscestimategas) | **POST** [/v3/bsc/gas](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/BscEstimateGas) | Estimate BNB Smart Chain transaction fees
[**celoEstimateGas()**](#celoestimategas) | **POST** [/v3/celo/gas](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/CeloEstimateGas) | Estimate Celo Chain transaction fees
[**egldEstimateGas()**](#egldestimategas) | **POST** [/v3/egld/gas](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/EgldEstimateGas) | Estimate EGLD transaction fees
[**ethEstimateGas()**](#ethestimategas) | **POST** [/v3/ethereum/gas](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/EthEstimateGas) | Estimate Ethereum transaction fees
[**ethEstimateGasBatch()**](#ethestimategasbatch) | **POST** [/v3/ethereum/gas/batch](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/EthEstimateGasBatch) | Estimate multiple Ethereum transaction fees
[**getBlockchainFee()**](#getblockchainfee) | **GET** [/v3/blockchain/fee/{chain}](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/getBlockchainFee) | Get recommended blockchain fee / gas price
[**kcsEstimateGas()**](#kcsestimategas) | **POST** [/v3/kcs/gas](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/KcsEstimateGas) | Estimate KuCoin Community Chain transaction fees
[**klaytnEstimateGas()**](#klaytnestimategas) | **POST** [/v3/klaytn/gas](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/KlaytnEstimateGas) | Estimate Klaytn transaction fees
[**polygonEstimateGas()**](#polygonestimategas) | **POST** [/v3/polygon/gas](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/PolygonEstimateGas) | Estimate Polygon transaction fees
[**vetEstimateGas()**](#vetestimategas) | **POST** [/v3/vet/transaction/gas](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/VetEstimateGas) | Estimate VeChain Gas for transaction
[**xdcEstimateGas()**](#xdcestimategas) | **POST** [/v3/xdc/gas](https://apidoc.tatum.io/tag/Blockchain-fees/#operation/XdcEstimateGas) | Estimate XinFin transaction fees


## `blockchainEstimateFee()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->blockchainEstimateFee(
    \Tatum\Model\EstimateFee $estimate_fee
): \Tatum\Model\BlockchainEstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee** | [**\Tatum\Model\EstimateFee**](../Model/EstimateFee.md) |  |

### Return type

[**\Tatum\Model\BlockchainEstimateFee200Response**](../Model/BlockchainEstimateFee200Response.md)

### Description

Estimate the fee for a transaction

<h4>10 credits per API call.</h4><br/> <p>Estimate current transaction fee for different operations.<br/> Supported blockchains: <ul> <li>Bitcoin</li> <li>Litecoin</li> <li>Harmony.ONE</li> <li>The XDC Network</li> <li>Ethereum</li> <li>Celo</li> <li>Klaytn</li> <li>Binance Smart Chain</li> <li>Polygon</li> </ul> </p>

### Example

[✨ View "blockchainEstimateFee.php"](../../examples/Api/BlockchainFeesApi/blockchainEstimateFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainEstimateFeeBatchMintNft()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->blockchainEstimateFeeBatchMintNft(
    \Tatum\Model\EstimateFeeBatchMintNft $estimate_fee_batch_mint_nft
): \Tatum\Model\BlockchainEstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_batch_mint_nft** | [**\Tatum\Model\EstimateFeeBatchMintNft**](../Model/EstimateFeeBatchMintNft.md) |  |

### Return type

[**\Tatum\Model\BlockchainEstimateFee200Response**](../Model/BlockchainEstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeBatchMintNft operation

### Example

[✨ View "blockchainEstimateFeeBatchMintNft.php"](../../examples/Api/BlockchainFeesApi/blockchainEstimateFeeBatchMintNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainEstimateFeeDeployCustodialWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->blockchainEstimateFeeDeployCustodialWallet(
    \Tatum\Model\EstimateFeeDeployCustodialWallet $estimate_fee_deploy_custodial_wallet
): \Tatum\Model\BlockchainEstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_deploy_custodial_wallet** | [**\Tatum\Model\EstimateFeeDeployCustodialWallet**](../Model/EstimateFeeDeployCustodialWallet.md) |  |

### Return type

[**\Tatum\Model\BlockchainEstimateFee200Response**](../Model/BlockchainEstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeDeployCustodialWallet operation

### Example

[✨ View "blockchainEstimateFeeDeployCustodialWallet.php"](../../examples/Api/BlockchainFeesApi/blockchainEstimateFeeDeployCustodialWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainEstimateFeeFromAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->blockchainEstimateFeeFromAddress(
    \Tatum\Model\EstimateFeeFromAddress $estimate_fee_from_address
): \Tatum\Model\BlockchainEstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_from_address** | [**\Tatum\Model\EstimateFeeFromAddress**](../Model/EstimateFeeFromAddress.md) |  |

### Return type

[**\Tatum\Model\BlockchainEstimateFee200Response**](../Model/BlockchainEstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeFromAddress operation

### Example

[✨ View "blockchainEstimateFeeFromAddress.php"](../../examples/Api/BlockchainFeesApi/blockchainEstimateFeeFromAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainEstimateFeeFromUTXO()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->blockchainEstimateFeeFromUTXO(
    \Tatum\Model\EstimateFeeFromUTXO $estimate_fee_from_utxo
): \Tatum\Model\BlockchainEstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_from_utxo** | [**\Tatum\Model\EstimateFeeFromUTXO**](../Model/EstimateFeeFromUTXO.md) |  |

### Return type

[**\Tatum\Model\BlockchainEstimateFee200Response**](../Model/BlockchainEstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeFromUTXO operation

### Example

[✨ View "blockchainEstimateFeeFromUTXO.php"](../../examples/Api/BlockchainFeesApi/blockchainEstimateFeeFromUTXO.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainEstimateFeeTransferFromCustodial()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainFees()->blockchainEstimateFeeTransferFromCustodial(
    \Tatum\Model\EstimateFeeTransferFromCustodial $estimate_fee_transfer_from_custodial
): \Tatum\Model\BlockchainEstimateFee200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$estimate_fee_transfer_from_custodial** | [**\Tatum\Model\EstimateFeeTransferFromCustodial**](../Model/EstimateFeeTransferFromCustodial.md) |  |

### Return type

[**\Tatum\Model\BlockchainEstimateFee200Response**](../Model/BlockchainEstimateFee200Response.md)

### Description

Estimate the fee for a transaction

EstimateFeeTransferFromCustodial operation

### Example

[✨ View "blockchainEstimateFeeTransferFromCustodial.php"](../../examples/Api/BlockchainFeesApi/blockchainEstimateFeeTransferFromCustodial.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

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

[✨ View "bscEstimateGas.php"](../../examples/Api/BlockchainFeesApi/bscEstimateGas.php)

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

[✨ View "celoEstimateGas.php"](../../examples/Api/BlockchainFeesApi/celoEstimateGas.php)

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

[✨ View "egldEstimateGas.php"](../../examples/Api/BlockchainFeesApi/egldEstimateGas.php)

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

[✨ View "ethEstimateGas.php"](../../examples/Api/BlockchainFeesApi/ethEstimateGas.php)

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

[✨ View "ethEstimateGasBatch.php"](../../examples/Api/BlockchainFeesApi/ethEstimateGasBatch.php)

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

[✨ View "getBlockchainFee.php"](../../examples/Api/BlockchainFeesApi/getBlockchainFee.php)

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

[✨ View "kcsEstimateGas.php"](../../examples/Api/BlockchainFeesApi/kcsEstimateGas.php)

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

[✨ View "klaytnEstimateGas.php"](../../examples/Api/BlockchainFeesApi/klaytnEstimateGas.php)

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

[✨ View "polygonEstimateGas.php"](../../examples/Api/BlockchainFeesApi/polygonEstimateGas.php)

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

[✨ View "vetEstimateGas.php"](../../examples/Api/BlockchainFeesApi/vetEstimateGas.php)

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

[✨ View "xdcEstimateGas.php"](../../examples/Api/BlockchainFeesApi/xdcEstimateGas.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
