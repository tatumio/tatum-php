# Tatum/Api/GasPumpApi

* Gas pump [documentation](https://apidoc.tatum.io/tag/Gas-pump/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**activatedNotActivatedGasPumpAddresses()**](#activatednotactivatedgaspumpaddresses) | **GET** `/v3/gas-pump/address/{chain}/{txId}` | Get the results of the address activation transaction
[**blockchainScCustodialApproveTransferCustodialWallet()**](#blockchainsccustodialapprovetransfercustodialwallet) | **POST** `/v3/blockchain/sc/custodial/approve` | Approve the transfer of an asset from a gas pump address
[**blockchainScCustodialApproveTransferCustodialWalletCelo()**](#blockchainsccustodialapprovetransfercustodialwalletcelo) | **POST** `/v3/blockchain/sc/custodial/approve` | Approve the transfer of an asset from a gas pump address
[**blockchainScCustodialApproveTransferCustodialWalletCeloKMS()**](#blockchainsccustodialapprovetransfercustodialwalletcelokms) | **POST** `/v3/blockchain/sc/custodial/approve` | Approve the transfer of an asset from a gas pump address
[**blockchainScCustodialApproveTransferCustodialWalletKMS()**](#blockchainsccustodialapprovetransfercustodialwalletkms) | **POST** `/v3/blockchain/sc/custodial/approve` | Approve the transfer of an asset from a gas pump address
[**blockchainScCustodialBatchGenerateCustodialWalletBatch()**](#blockchainsccustodialbatchgeneratecustodialwalletbatch) | **POST** `/v3/blockchain/sc/custodial/batch` | Generate a gas pump wallet address
[**blockchainScCustodialBatchGenerateCustodialWalletBatchCelo()**](#blockchainsccustodialbatchgeneratecustodialwalletbatchcelo) | **POST** `/v3/blockchain/sc/custodial/batch` | Generate a gas pump wallet address
[**blockchainScCustodialBatchGenerateCustodialWalletBatchCeloKMS()**](#blockchainsccustodialbatchgeneratecustodialwalletbatchcelokms) | **POST** `/v3/blockchain/sc/custodial/batch` | Generate a gas pump wallet address
[**blockchainScCustodialBatchGenerateCustodialWalletBatchKMS()**](#blockchainsccustodialbatchgeneratecustodialwalletbatchkms) | **POST** `/v3/blockchain/sc/custodial/batch` | Generate a gas pump wallet address
[**blockchainScCustodialBatchGenerateCustodialWalletBatchPayer()**](#blockchainsccustodialbatchgeneratecustodialwalletbatchpayer) | **POST** `/v3/blockchain/sc/custodial/batch` | Generate a gas pump wallet address
[**blockchainScCustodialBatchGenerateCustodialWalletBatchTron()**](#blockchainsccustodialbatchgeneratecustodialwalletbatchtron) | **POST** `/v3/blockchain/sc/custodial/batch` | Generate a gas pump wallet address
[**blockchainScCustodialBatchGenerateCustodialWalletBatchTronKMS()**](#blockchainsccustodialbatchgeneratecustodialwalletbatchtronkms) | **POST** `/v3/blockchain/sc/custodial/batch` | Generate a gas pump wallet address
[**blockchainScCustodialGenerateCustodialWallet()**](#blockchainsccustodialgeneratecustodialwallet) | **POST** `/v3/blockchain/sc/custodial` | Generate a custodial wallet address
[**blockchainScCustodialGenerateCustodialWalletCelo()**](#blockchainsccustodialgeneratecustodialwalletcelo) | **POST** `/v3/blockchain/sc/custodial` | Generate a custodial wallet address
[**blockchainScCustodialGenerateCustodialWalletCeloKMS()**](#blockchainsccustodialgeneratecustodialwalletcelokms) | **POST** `/v3/blockchain/sc/custodial` | Generate a custodial wallet address
[**blockchainScCustodialGenerateCustodialWalletKMS()**](#blockchainsccustodialgeneratecustodialwalletkms) | **POST** `/v3/blockchain/sc/custodial` | Generate a custodial wallet address
[**blockchainScCustodialGenerateCustodialWalletTron()**](#blockchainsccustodialgeneratecustodialwallettron) | **POST** `/v3/blockchain/sc/custodial` | Generate a custodial wallet address
[**blockchainScCustodialGenerateCustodialWalletTronKMS()**](#blockchainsccustodialgeneratecustodialwallettronkms) | **POST** `/v3/blockchain/sc/custodial` | Generate a custodial wallet address
[**blockchainScCustodialTransferBatchTransferCustodialWalletBatch()**](#blockchainsccustodialtransferbatchtransfercustodialwalletbatch) | **POST** `/v3/blockchain/sc/custodial/transfer/batch` | Transfer multiple assets from a gas pump address
[**blockchainScCustodialTransferBatchTransferCustodialWalletBatchCelo()**](#blockchainsccustodialtransferbatchtransfercustodialwalletbatchcelo) | **POST** `/v3/blockchain/sc/custodial/transfer/batch` | Transfer multiple assets from a gas pump address
[**blockchainScCustodialTransferBatchTransferCustodialWalletBatchCeloKMS()**](#blockchainsccustodialtransferbatchtransfercustodialwalletbatchcelokms) | **POST** `/v3/blockchain/sc/custodial/transfer/batch` | Transfer multiple assets from a gas pump address
[**blockchainScCustodialTransferBatchTransferCustodialWalletBatchKMS()**](#blockchainsccustodialtransferbatchtransfercustodialwalletbatchkms) | **POST** `/v3/blockchain/sc/custodial/transfer/batch` | Transfer multiple assets from a gas pump address
[**blockchainScCustodialTransferBatchTransferCustodialWalletBatchTron()**](#blockchainsccustodialtransferbatchtransfercustodialwalletbatchtron) | **POST** `/v3/blockchain/sc/custodial/transfer/batch` | Transfer multiple assets from a gas pump address
[**blockchainScCustodialTransferBatchTransferCustodialWalletBatchTronKMS()**](#blockchainsccustodialtransferbatchtransfercustodialwalletbatchtronkms) | **POST** `/v3/blockchain/sc/custodial/transfer/batch` | Transfer multiple assets from a gas pump address
[**blockchainScCustodialTransferCustodialWallet()**](#blockchainsccustodialtransfercustodialwallet) | **POST** `/v3/blockchain/sc/custodial/transfer` | Transfer an asset from a gas pump address
[**blockchainScCustodialTransferCustodialWalletCelo()**](#blockchainsccustodialtransfercustodialwalletcelo) | **POST** `/v3/blockchain/sc/custodial/transfer` | Transfer an asset from a gas pump address
[**blockchainScCustodialTransferCustodialWalletCeloKMS()**](#blockchainsccustodialtransfercustodialwalletcelokms) | **POST** `/v3/blockchain/sc/custodial/transfer` | Transfer an asset from a gas pump address
[**blockchainScCustodialTransferCustodialWalletKMS()**](#blockchainsccustodialtransfercustodialwalletkms) | **POST** `/v3/blockchain/sc/custodial/transfer` | Transfer an asset from a gas pump address
[**blockchainScCustodialTransferCustodialWalletTron()**](#blockchainsccustodialtransfercustodialwallettron) | **POST** `/v3/blockchain/sc/custodial/transfer` | Transfer an asset from a gas pump address
[**blockchainScCustodialTransferCustodialWalletTronKMS()**](#blockchainsccustodialtransfercustodialwallettronkms) | **POST** `/v3/blockchain/sc/custodial/transfer` | Transfer an asset from a gas pump address
[**gasPumpActivateGasPump()**](#gaspumpactivategaspump) | **POST** `/v3/gas-pump/activate` | Activate gas pump addresses
[**gasPumpActivateGasPumpCelo()**](#gaspumpactivategaspumpcelo) | **POST** `/v3/gas-pump/activate` | Activate gas pump addresses
[**gasPumpActivateGasPumpCeloKMS()**](#gaspumpactivategaspumpcelokms) | **POST** `/v3/gas-pump/activate` | Activate gas pump addresses
[**gasPumpActivateGasPumpKMS()**](#gaspumpactivategaspumpkms) | **POST** `/v3/gas-pump/activate` | Activate gas pump addresses
[**gasPumpActivateGasPumpTatum()**](#gaspumpactivategaspumptatum) | **POST** `/v3/gas-pump/activate` | Activate gas pump addresses
[**gasPumpActivateGasPumpTron()**](#gaspumpactivategaspumptron) | **POST** `/v3/gas-pump/activate` | Activate gas pump addresses
[**gasPumpActivateGasPumpTronKMS()**](#gaspumpactivategaspumptronkms) | **POST** `/v3/gas-pump/activate` | Activate gas pump addresses
[**gasPumpAddressesActivatedOrNot()**](#gaspumpaddressesactivatedornot) | **GET** `/v3/gas-pump/activated/{chain}/{owner}/{index}` | Check whether the gas pump address with a specified index is activated
[**precalculateGasPumpAddresses()**](#precalculategaspumpaddresses) | **POST** `/v3/gas-pump` | Precalculate gas pump addresses
[**sCGetCustodialAddresses()**](#scgetcustodialaddresses) | **GET** `/v3/blockchain/sc/custodial/{chain}/{hash}` | Get the custodial wallet address from the transaction


## `activatedNotActivatedGasPumpAddresses()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->activatedNotActivatedGasPumpAddresses(
    string $chain,
    string $tx_id
): \Tatum\Model\GasPumpTrxOut
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$tx_id** | **string**  | The ID of the address activation transaction |

### Return type

[**\Tatum\Model\GasPumpTrxOut**](../Model/GasPumpTrxOut.md)

### Description

Get the results of the address activation transaction

<p><b>1 credit per API call</b></p> <p>Get the results of the activation transaction after <a href="#operation/ActivateGasPumpAddresses">activating gas pump addresses</a>.</p> <p>If the activation transaction got recorded into a block, the API returns two arrays:</p> <ul> <li><code>valid</code>, with the activated gas pump addresses</li> <li><code>invalid</code>, with the gas pump addresses that for some reason did not get activated together with the reason why</li> </ul> <p>If the transaction is still being processed, the API returns an error message. In this case, repeat the call later.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "activatedNotActivatedGasPumpAddresses.php"](../../examples/Api/GasPumpApi/activatedNotActivatedGasPumpAddresses.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialApproveTransferCustodialWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialApproveTransferCustodialWallet(
    \Tatum\Model\ApproveTransferCustodialWallet $approve_transfer_custodial_wallet
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet** | [**\Tatum\Model\ApproveTransferCustodialWallet**](../Model/ApproveTransferCustodialWallet.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Approve the transfer of an asset from a gas pump address

<p><b>2 credits per API call</b></p> <p>Allow another blockchain address (the <code>spender</code> parameter in the request body) to transfer the asset from a gas pump address on behalf of the master address.</p> <p>Use this API when the customer using the gas pump address sells assets on a marketplace or auction. After the customer creates a listing of the asset, they have to allow the marketplace/auction smart contract to transfer the asset to the buyer after the asset has been bought.</p> <p>The asset can be one of the following types:</p> <ul> <li>Fungible token (ERC-20 or equivalent)</li> <li>NFT (ERC-721 or equivalent)</li> <li>Multi Token (ERC-1155 or equivalent)</li> </ul> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b><br/> When approving the transfer of an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainScCustodialApproveTransferCustodialWallet.php"](../../examples/Api/GasPumpApi/blockchainScCustodialApproveTransferCustodialWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialApproveTransferCustodialWalletCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialApproveTransferCustodialWalletCelo(
    \Tatum\Model\ApproveTransferCustodialWalletCelo $approve_transfer_custodial_wallet_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_celo** | [**\Tatum\Model\ApproveTransferCustodialWalletCelo**](../Model/ApproveTransferCustodialWalletCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Approve the transfer of an asset from a gas pump address

ApproveTransferCustodialWalletCelo operation

### Example

[✨ View "blockchainScCustodialApproveTransferCustodialWalletCelo.php"](../../examples/Api/GasPumpApi/blockchainScCustodialApproveTransferCustodialWalletCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialApproveTransferCustodialWalletCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialApproveTransferCustodialWalletCeloKMS(
    \Tatum\Model\ApproveTransferCustodialWalletCeloKMS $approve_transfer_custodial_wallet_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_celo_kms** | [**\Tatum\Model\ApproveTransferCustodialWalletCeloKMS**](../Model/ApproveTransferCustodialWalletCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Approve the transfer of an asset from a gas pump address

ApproveTransferCustodialWalletCeloKMS operation

### Example

[✨ View "blockchainScCustodialApproveTransferCustodialWalletCeloKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialApproveTransferCustodialWalletCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialApproveTransferCustodialWalletKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialApproveTransferCustodialWalletKMS(
    \Tatum\Model\ApproveTransferCustodialWalletKMS $approve_transfer_custodial_wallet_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_kms** | [**\Tatum\Model\ApproveTransferCustodialWalletKMS**](../Model/ApproveTransferCustodialWalletKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Approve the transfer of an asset from a gas pump address

ApproveTransferCustodialWalletKMS operation

### Example

[✨ View "blockchainScCustodialApproveTransferCustodialWalletKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialApproveTransferCustodialWalletKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialBatchGenerateCustodialWalletBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialBatchGenerateCustodialWalletBatch(
    \Tatum\Model\GenerateCustodialWalletBatch $generate_custodial_wallet_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch** | [**\Tatum\Model\GenerateCustodialWalletBatch**](../Model/GenerateCustodialWalletBatch.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatch operation

### Example

[✨ View "blockchainScCustodialBatchGenerateCustodialWalletBatch.php"](../../examples/Api/GasPumpApi/blockchainScCustodialBatchGenerateCustodialWalletBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialBatchGenerateCustodialWalletBatchCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialBatchGenerateCustodialWalletBatchCelo(
    \Tatum\Model\GenerateCustodialWalletBatchCelo $generate_custodial_wallet_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_celo** | [**\Tatum\Model\GenerateCustodialWalletBatchCelo**](../Model/GenerateCustodialWalletBatchCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchCelo operation

### Example

[✨ View "blockchainScCustodialBatchGenerateCustodialWalletBatchCelo.php"](../../examples/Api/GasPumpApi/blockchainScCustodialBatchGenerateCustodialWalletBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialBatchGenerateCustodialWalletBatchCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialBatchGenerateCustodialWalletBatchCeloKMS(
    \Tatum\Model\GenerateCustodialWalletBatchCeloKMS $generate_custodial_wallet_batch_celo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_celo_kms** | [**\Tatum\Model\GenerateCustodialWalletBatchCeloKMS**](../Model/GenerateCustodialWalletBatchCeloKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchCeloKMS operation

### Example

[✨ View "blockchainScCustodialBatchGenerateCustodialWalletBatchCeloKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialBatchGenerateCustodialWalletBatchCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialBatchGenerateCustodialWalletBatchKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialBatchGenerateCustodialWalletBatchKMS(
    \Tatum\Model\GenerateCustodialWalletBatchKMS $generate_custodial_wallet_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_kms** | [**\Tatum\Model\GenerateCustodialWalletBatchKMS**](../Model/GenerateCustodialWalletBatchKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchKMS operation

### Example

[✨ View "blockchainScCustodialBatchGenerateCustodialWalletBatchKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialBatchGenerateCustodialWalletBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialBatchGenerateCustodialWalletBatchPayer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialBatchGenerateCustodialWalletBatchPayer(
    \Tatum\Model\GenerateCustodialWalletBatchPayer $generate_custodial_wallet_batch_payer,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_payer** | [**\Tatum\Model\GenerateCustodialWalletBatchPayer**](../Model/GenerateCustodialWalletBatchPayer.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a gas pump wallet address

<p><b>This API is deprecated.<br/>To start with the gas pump, use the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a>.</b></p><br/> <p><b>2 credits per API call</b></p> <p>Generate new gas pump smart contract address on the blockchain. This address enables custodial providers to receive native assets, ERC20 / ERC721 / ERC1155 tokens on behalf of their customers on dedicated blockchain address, but in the same time it can initiate transfer of those assets away. Gas required for the transfer from that address is going to be deducted from the providers address - the one, which was used to generate the address on the blockchain.<br/> This operation deploys a smart contract on the blockchain.<br/> For paid plans, it is possible to pay for the gas costs - you don't have to provide private key or signatureId. Blockchain fees will be covered by your credits. <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul>

### Example

[✨ View "blockchainScCustodialBatchGenerateCustodialWalletBatchPayer.php"](../../examples/Api/GasPumpApi/blockchainScCustodialBatchGenerateCustodialWalletBatchPayer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialBatchGenerateCustodialWalletBatchTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialBatchGenerateCustodialWalletBatchTron(
    \Tatum\Model\GenerateCustodialWalletBatchTron $generate_custodial_wallet_batch_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_tron** | [**\Tatum\Model\GenerateCustodialWalletBatchTron**](../Model/GenerateCustodialWalletBatchTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchTron operation

### Example

[✨ View "blockchainScCustodialBatchGenerateCustodialWalletBatchTron.php"](../../examples/Api/GasPumpApi/blockchainScCustodialBatchGenerateCustodialWalletBatchTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialBatchGenerateCustodialWalletBatchTronKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialBatchGenerateCustodialWalletBatchTronKMS(
    \Tatum\Model\GenerateCustodialWalletBatchTronKMS $generate_custodial_wallet_batch_tron_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_tron_kms** | [**\Tatum\Model\GenerateCustodialWalletBatchTronKMS**](../Model/GenerateCustodialWalletBatchTronKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchTronKMS operation

### Example

[✨ View "blockchainScCustodialBatchGenerateCustodialWalletBatchTronKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialBatchGenerateCustodialWalletBatchTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialGenerateCustodialWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialGenerateCustodialWallet(
    \Tatum\Model\GenerateCustodialWallet $generate_custodial_wallet
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet** | [**\Tatum\Model\GenerateCustodialWallet**](../Model/GenerateCustodialWallet.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a custodial wallet address

<p><b>This API is deprecated.<br/>To start with the gas pump, use the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a>.</b></p> <p><b>If you built your gas pump solution using this API and the <a href="#operation/GenerateCustodialWalletBatch">API for generating a gas pump wallet address</a>, you can still use this API for creating more custodial addresses for your solution. However, we recommend that you switch to the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a></b>.</p><br/> <p><b>2 credits per API call</b></p> <p>Generate new gas pump smart contract address on the blockchain. It's possible to enable tokens, which should be detected and supported on that address. This address enables custodial providers to receive native assets, ERC20 / ERC721 / ERC1155 tokens on behalf of their customers on dedicated blockchain address, but in the same time it can initiate transfer of those assets away.</p> <p>Gas required for the transfer from that address is going to be deducted from the providers address - the one, which was used to generate the address on the blockchain.</p> <p>There are multiple options, how this address can be setup - it cannot be changed in the future:</p> <ul> <li>Native assets only - ETH, BSC, CELO, MATIC, ONE, TRX</li> <li>Native assets + ERC20 tokens</li> <li>Native assets + ERC721 tokens</li> <li>Native assets + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC20 + ERC721 tokens</li> <li>Native assets + ERC20 + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC721 + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC20 + ERC721 + ERC1155 tokens - TRON does not support 1155 standard</li> </ul> <p>All of these options could be enabled with a batch mode as well - in 1 transaction, it is possible to transfer multiple different assets from that address, e.g. ETH + USDC + ERC721 token. Without batch mode, 3 separate transaction must have been performed.</p> <p>This operation deploys a smart contract on the blockchain. More assets you will support, more intial gas will be used for address creation. Batch mode adds more gas for every type.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> <li>TRON (except for Multi Tokens)</li> </ul>

### Example

[✨ View "blockchainScCustodialGenerateCustodialWallet.php"](../../examples/Api/GasPumpApi/blockchainScCustodialGenerateCustodialWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialGenerateCustodialWalletCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialGenerateCustodialWalletCelo(
    \Tatum\Model\GenerateCustodialWalletCelo $generate_custodial_wallet_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_celo** | [**\Tatum\Model\GenerateCustodialWalletCelo**](../Model/GenerateCustodialWalletCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletCelo operation

### Example

[✨ View "blockchainScCustodialGenerateCustodialWalletCelo.php"](../../examples/Api/GasPumpApi/blockchainScCustodialGenerateCustodialWalletCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialGenerateCustodialWalletCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialGenerateCustodialWalletCeloKMS(
    \Tatum\Model\GenerateCustodialWalletCeloKMS $generate_custodial_wallet_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_celo_kms** | [**\Tatum\Model\GenerateCustodialWalletCeloKMS**](../Model/GenerateCustodialWalletCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletCeloKMS operation

### Example

[✨ View "blockchainScCustodialGenerateCustodialWalletCeloKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialGenerateCustodialWalletCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialGenerateCustodialWalletKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialGenerateCustodialWalletKMS(
    \Tatum\Model\GenerateCustodialWalletKMS $generate_custodial_wallet_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_kms** | [**\Tatum\Model\GenerateCustodialWalletKMS**](../Model/GenerateCustodialWalletKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletKMS operation

### Example

[✨ View "blockchainScCustodialGenerateCustodialWalletKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialGenerateCustodialWalletKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialGenerateCustodialWalletTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialGenerateCustodialWalletTron(
    \Tatum\Model\GenerateCustodialWalletTron $generate_custodial_wallet_tron
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_tron** | [**\Tatum\Model\GenerateCustodialWalletTron**](../Model/GenerateCustodialWalletTron.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletTron operation

### Example

[✨ View "blockchainScCustodialGenerateCustodialWalletTron.php"](../../examples/Api/GasPumpApi/blockchainScCustodialGenerateCustodialWalletTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialGenerateCustodialWalletTronKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialGenerateCustodialWalletTronKMS(
    \Tatum\Model\GenerateCustodialWalletTronKMS $generate_custodial_wallet_tron_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_tron_kms** | [**\Tatum\Model\GenerateCustodialWalletTronKMS**](../Model/GenerateCustodialWalletTronKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletTronKMS operation

### Example

[✨ View "blockchainScCustodialGenerateCustodialWalletTronKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialGenerateCustodialWalletTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferBatchTransferCustodialWalletBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferBatchTransferCustodialWalletBatch(
    \Tatum\Model\TransferCustodialWalletBatch $transfer_custodial_wallet_batch
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch** | [**\Tatum\Model\TransferCustodialWalletBatch**](../Model/TransferCustodialWalletBatch.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple assets from a gas pump address

<p><b>2 credits per API call</b></p> <p>Transfer (send) multiple assets from a gas pump address to one or more addresses.</p> <p>This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer multiple assets to one or more addresses on the blockchain.</p> <p>The gas fee for sending the assets will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.</p> <p>To be able to send the assets:</p> <ul> <li>The gas pump address must be <a href="#operation/ActivateGasPumpAddresses">activated</a>.<br/>To check whether the gas pump address is activated, use <a href="#operation/GasPumpAddressesActivatedOrNot">this API</a>.</li> <li>The gas pump address must be the owner of the assets.</li> </ul> <p>If you want to send only one asset, you can also use the <a href="#operation/TransferCustodialWallet">API for transferring an asset from a gas pump account</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b><br/> When transferring assets, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainScCustodialTransferBatchTransferCustodialWalletBatch.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferBatchTransferCustodialWalletBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferBatchTransferCustodialWalletBatchCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferBatchTransferCustodialWalletBatchCelo(
    \Tatum\Model\TransferCustodialWalletBatchCelo $transfer_custodial_wallet_batch_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_celo** | [**\Tatum\Model\TransferCustodialWalletBatchCelo**](../Model/TransferCustodialWalletBatchCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchCelo operation

### Example

[✨ View "blockchainScCustodialTransferBatchTransferCustodialWalletBatchCelo.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferBatchTransferCustodialWalletBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferBatchTransferCustodialWalletBatchCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferBatchTransferCustodialWalletBatchCeloKMS(
    \Tatum\Model\TransferCustodialWalletBatchCeloKMS $transfer_custodial_wallet_batch_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_celo_kms** | [**\Tatum\Model\TransferCustodialWalletBatchCeloKMS**](../Model/TransferCustodialWalletBatchCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchCeloKMS operation

### Example

[✨ View "blockchainScCustodialTransferBatchTransferCustodialWalletBatchCeloKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferBatchTransferCustodialWalletBatchCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferBatchTransferCustodialWalletBatchKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferBatchTransferCustodialWalletBatchKMS(
    \Tatum\Model\TransferCustodialWalletBatchKMS $transfer_custodial_wallet_batch_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_kms** | [**\Tatum\Model\TransferCustodialWalletBatchKMS**](../Model/TransferCustodialWalletBatchKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchKMS operation

### Example

[✨ View "blockchainScCustodialTransferBatchTransferCustodialWalletBatchKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferBatchTransferCustodialWalletBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferBatchTransferCustodialWalletBatchTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferBatchTransferCustodialWalletBatchTron(
    \Tatum\Model\TransferCustodialWalletBatchTron $transfer_custodial_wallet_batch_tron
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_tron** | [**\Tatum\Model\TransferCustodialWalletBatchTron**](../Model/TransferCustodialWalletBatchTron.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchTron operation

### Example

[✨ View "blockchainScCustodialTransferBatchTransferCustodialWalletBatchTron.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferBatchTransferCustodialWalletBatchTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferBatchTransferCustodialWalletBatchTronKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferBatchTransferCustodialWalletBatchTronKMS(
    \Tatum\Model\TransferCustodialWalletBatchTronKMS $transfer_custodial_wallet_batch_tron_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_tron_kms** | [**\Tatum\Model\TransferCustodialWalletBatchTronKMS**](../Model/TransferCustodialWalletBatchTronKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchTronKMS operation

### Example

[✨ View "blockchainScCustodialTransferBatchTransferCustodialWalletBatchTronKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferBatchTransferCustodialWalletBatchTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferCustodialWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferCustodialWallet(
    \Tatum\Model\TransferCustodialWallet $transfer_custodial_wallet
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet** | [**\Tatum\Model\TransferCustodialWallet**](../Model/TransferCustodialWallet.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an asset from a gas pump address

<p><b>2 credits per API call</b></p> <p>Transfer (send) an asset from a gas pump address to the other address.</p> <p>This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer an asset to some address on the blockchain.</p> <p>The gas fee for sending the asset will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.</p> <p>To be able to send the asset:</p> <ul> <li>The gas pump address must be <a href="#operation/ActivateGasPumpAddresses">activated</a>.<br/>To check whether the gas pump address is activated, use <a href="#operation/GasPumpAddressesActivatedOrNot">this API</a>.</li> <li>The gas pump address must be the owner of the asset.</li> </ul> <p>With this API, you can send only one asset per API call. If you want to send multiple assets, use the <a href="#operation/TransferCustodialWalletBatch">API for transferring multiple assets from a gas pump account</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b><br/> When transferring an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "blockchainScCustodialTransferCustodialWallet.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferCustodialWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferCustodialWalletCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferCustodialWalletCelo(
    \Tatum\Model\TransferCustodialWalletCelo $transfer_custodial_wallet_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_celo** | [**\Tatum\Model\TransferCustodialWalletCelo**](../Model/TransferCustodialWalletCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletCelo operation

### Example

[✨ View "blockchainScCustodialTransferCustodialWalletCelo.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferCustodialWalletCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferCustodialWalletCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferCustodialWalletCeloKMS(
    \Tatum\Model\TransferCustodialWalletCeloKMS $transfer_custodial_wallet_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_celo_kms** | [**\Tatum\Model\TransferCustodialWalletCeloKMS**](../Model/TransferCustodialWalletCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletCeloKMS operation

### Example

[✨ View "blockchainScCustodialTransferCustodialWalletCeloKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferCustodialWalletCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferCustodialWalletKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferCustodialWalletKMS(
    \Tatum\Model\TransferCustodialWalletKMS $transfer_custodial_wallet_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_kms** | [**\Tatum\Model\TransferCustodialWalletKMS**](../Model/TransferCustodialWalletKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletKMS operation

### Example

[✨ View "blockchainScCustodialTransferCustodialWalletKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferCustodialWalletKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferCustodialWalletTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferCustodialWalletTron(
    \Tatum\Model\TransferCustodialWalletTron $transfer_custodial_wallet_tron
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_tron** | [**\Tatum\Model\TransferCustodialWalletTron**](../Model/TransferCustodialWalletTron.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletTron operation

### Example

[✨ View "blockchainScCustodialTransferCustodialWalletTron.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferCustodialWalletTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockchainScCustodialTransferCustodialWalletTronKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->blockchainScCustodialTransferCustodialWalletTronKMS(
    \Tatum\Model\TransferCustodialWalletTronKMS $transfer_custodial_wallet_tron_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_tron_kms** | [**\Tatum\Model\TransferCustodialWalletTronKMS**](../Model/TransferCustodialWalletTronKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletTronKMS operation

### Example

[✨ View "blockchainScCustodialTransferCustodialWalletTronKMS.php"](../../examples/Api/GasPumpApi/blockchainScCustodialTransferCustodialWalletTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `gasPumpActivateGasPump()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->gasPumpActivateGasPump(
    \Tatum\Model\ActivateGasPump $activate_gas_pump
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump** | [**\Tatum\Model\ActivateGasPump**](../Model/ActivateGasPump.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Activate gas pump addresses

ActivateGasPump operation

### Example

[✨ View "gasPumpActivateGasPump.php"](../../examples/Api/GasPumpApi/gasPumpActivateGasPump.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `gasPumpActivateGasPumpCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->gasPumpActivateGasPumpCelo(
    \Tatum\Model\ActivateGasPumpCelo $activate_gas_pump_celo
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_celo** | [**\Tatum\Model\ActivateGasPumpCelo**](../Model/ActivateGasPumpCelo.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Activate gas pump addresses

ActivateGasPumpCelo operation

### Example

[✨ View "gasPumpActivateGasPumpCelo.php"](../../examples/Api/GasPumpApi/gasPumpActivateGasPumpCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `gasPumpActivateGasPumpCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->gasPumpActivateGasPumpCeloKMS(
    \Tatum\Model\ActivateGasPumpCeloKMS $activate_gas_pump_celo_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_celo_kms** | [**\Tatum\Model\ActivateGasPumpCeloKMS**](../Model/ActivateGasPumpCeloKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Activate gas pump addresses

ActivateGasPumpCeloKMS operation

### Example

[✨ View "gasPumpActivateGasPumpCeloKMS.php"](../../examples/Api/GasPumpApi/gasPumpActivateGasPumpCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `gasPumpActivateGasPumpKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->gasPumpActivateGasPumpKMS(
    \Tatum\Model\ActivateGasPumpKMS $activate_gas_pump_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_kms** | [**\Tatum\Model\ActivateGasPumpKMS**](../Model/ActivateGasPumpKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Activate gas pump addresses

ActivateGasPumpKMS operation

### Example

[✨ View "gasPumpActivateGasPumpKMS.php"](../../examples/Api/GasPumpApi/gasPumpActivateGasPumpKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `gasPumpActivateGasPumpTatum()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->gasPumpActivateGasPumpTatum(
    \Tatum\Model\ActivateGasPumpTatum $activate_gas_pump_tatum
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_tatum** | [**\Tatum\Model\ActivateGasPumpTatum**](../Model/ActivateGasPumpTatum.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Activate gas pump addresses

<p><b>2 credits per API call</b></p> <p>Activate the <a href="#operation/PrecalculateGasPumpAddresses">precalulated gas pump addresses</a>. Activating a gas pump address allows this address to send funds to other addresses.</p> <p>You can activate up to 270 addresses in one call. If you need to activate more than 270 addresses, make several API calls. For example, if you need to activate 500 addresses, make an API call with 270 addresses (set up the range of their index values accordingly in the <code>from</code> and <code>to</code> request body parameters) and then make another API call with the remaining 230 addresses.</p> <p><b>When to activate a gas pump address</b><br/> Because activating a gas pump address costs some amount of gas on a blockchain, you want to activate only those addresses that will be used for sending funds to other addresses. If you know that a gas pump address will not be used for sending funds, you can leave this address not activated. The customer who uses this address will still be able to receive funds.</p> <p>Depending on your business needs and requirements, you can choose when to activate the gas pump addresses. If you know for sure that all the precalculated addresses will be sending funds, you can activate all the addresses right after they have been precalculated.</p> <p>Alternatively, you can set up the activation in such a way so that a gas pump address gets activated only when a specific event is triggered. For example, you can activate a gas pump address:</p> <ul> <li>When it receives an asset for the first time</li> <li>When the customer tries to send an asset from this address for the first time</li> </ul> <p>After you make an API call to activate gas pump addresses, use the <a href="#operation/ActivatedNotActivatedGasPumpAddresses">API for getting the results of the address activation transaction</a>.</p> <p><b>Paying the gas fee for activating gas pump addresses</b><br/> You can pay the gas fees for each activation transaction yourself, or Tatum can cover it for you.</p> <ul> <li>When <b>paying the gas fees yourself</b>, you must sign the transaction with either the private key of the blockchain address from which you want to pay the fees or the signature ID of that private key (if you use <a href="https://apidoc.tatum.io/tag/Key-Management-System" target="_blank">Key Management System</a>, KMS).<br/> To pay the fees yourself, use this API with any schema of the request body except for <code>ActivateGasPumpTatum</code>. For example, if you are activating gas pump addresses on Ethereum and you use KMS, use the <code>ActivateGasPumpKMS</code> schema. </li> <li>If you want <b>Tatum to cover the fees</b>, use this API with the <code>ActivateGasPumpTatum</code> schema of the request body. <ul> <li>On the <b>mainnet</b>, you have to have a <a href="https://tatum.io/pricing" target="_blank">paid pricing plan</a>.<br/> Tatum pays the fees from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. The transaction fees and the corresponding numbers of credits deducted from your allowance vary depending on what blockchain you activate the addresses.</li> <li>On the <b>testnet</b>, no credits are deducted from the monthly credit allowance. You can activate gas pump addresses regardless of your pricing plan.</li> </ul> </li> </ul> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "gasPumpActivateGasPumpTatum.php"](../../examples/Api/GasPumpApi/gasPumpActivateGasPumpTatum.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `gasPumpActivateGasPumpTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->gasPumpActivateGasPumpTron(
    \Tatum\Model\ActivateGasPumpTron $activate_gas_pump_tron
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_tron** | [**\Tatum\Model\ActivateGasPumpTron**](../Model/ActivateGasPumpTron.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Activate gas pump addresses

ActivateGasPumpTron operation

### Example

[✨ View "gasPumpActivateGasPumpTron.php"](../../examples/Api/GasPumpApi/gasPumpActivateGasPumpTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `gasPumpActivateGasPumpTronKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->gasPumpActivateGasPumpTronKMS(
    \Tatum\Model\ActivateGasPumpTronKMS $activate_gas_pump_tron_kms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_tron_kms** | [**\Tatum\Model\ActivateGasPumpTronKMS**](../Model/ActivateGasPumpTronKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Activate gas pump addresses

ActivateGasPumpTronKMS operation

### Example

[✨ View "gasPumpActivateGasPumpTronKMS.php"](../../examples/Api/GasPumpApi/gasPumpActivateGasPumpTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `gasPumpAddressesActivatedOrNot()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->gasPumpAddressesActivatedOrNot(
    string $chain,
    string $owner,
    float $index
): \Tatum\Model\Activated
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$owner** | **string**  | The blockchain address that owns the gas pump address to check; can be referred to as \&quot;master address\&quot; |
 **$index** | **float**  | The index of the gas pump address to check |

### Return type

[**\Tatum\Model\Activated**](../Model/Activated.md)

### Description

Check whether the gas pump address with a specified index is activated

<p><b>1 credit per API call</b></p> <p>Check whether the gas pump address with a specified index is <a href="#operation/ActivateGasPumpAddresses">activated</a> and can send funds to other addresses.</p> <p>You can use this API when a customer initiates a fund transfer and you need to check whether their gas pump address is allowed to send funds.</p>  <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "gasPumpAddressesActivatedOrNot.php"](../../examples/Api/GasPumpApi/gasPumpAddressesActivatedOrNot.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `precalculateGasPumpAddresses()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->precalculateGasPumpAddresses(
    [ \Tatum\Model\CreateGasPump $create_gas_pump ]
): string[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_gas_pump** | [**\Tatum\Model\CreateGasPump**](../Model/CreateGasPump.md) |  | [optional]

### Return type

**string[]**

### Description

Precalculate gas pump addresses

<p><b>2 credits per API call</b></p> <p>Precalculate (generate) gas pump addresses that you can assign to the customers of your custodial application.</p> <p>This API does not make any changes on the blockchain itself, just generates addresses that follow the blockchain's requirements for the address format; therefore, no gas fee is applied.</p><p/> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>Address index</b><br/> Each address should be associated with its own index. Use the <code>from</code> and <code>to</code> request body parameters to set a range of index values for the addresses to precalculate. You can start with any number, but we recommend that you start from 0.</p> <p>In one API call, you can precalculate:</p> <ul> <li>Up to 4,000 addresses for Harmony</li> <li>Up to 500 addresses for TRON</li> <li>Up to 5,000 addresses for the other supported blockchains</li> </ul> <p>If you need more addresses than one API call can precalculate, make several API calls. For example, if you need 10,000 addresses on Ethereum, make an API call with an index range from 0 through 4,999 and then make another API call with an index range from 5,000 through 9,999.</p> <p>The order in which the precalculated addresses are returned in the API response is the order of the values in the index range, and the index values are assigned to the addresses accordingly.<br/>For example, you precalculated three gas pump addresses with a range of index values from 3 to 5. The first address in the returned arrray is assigned the index value "3", the second one - "4", and the third one - "5".</p> <pre> [   "0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea", // index is 3   "0x5c6079c14e9cd3d2ea8cb76aed9c5e336ef96126", // index is 4   "0xc5e336ef9612614e9cd3d2ea8cb76aed95c6079c"  // index is 5 ] </pre> <p><b>The owner of the gas pump addresses</b><br/> The owner (also referred to as "master address") is the blockchain address that will own the precalculated gas pump addresses. The owner will also be paying gas fees for operations made on the gas pump addresses. You have to make sure that the owner always has enough funds to cover these gas fees.</p> <p><b>Activated and not activated addresses</b><br/> The precalculated addresses can be immediately assigned to customers and can <b>receive</b> funds. However, they cannot be used to <b>send</b> funds to other addresses. This is because the addresses are not activated. To make the addresses be able to send funds, <a href="#operation/ActivateGasPumpAddresses">activate them</a>.</p>

### Example

[✨ View "precalculateGasPumpAddresses.php"](../../examples/Api/GasPumpApi/precalculateGasPumpAddresses.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `sCGetCustodialAddresses()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->sCGetCustodialAddresses(
    string $chain,
    string $hash
): string[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$hash** | **string**  | Transaction hash |

### Return type

**string[]**

### Description

Get the custodial wallet address from the transaction

<p><b>This API is deprecated.<br/>To start with the gas pump, use the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a>.</b></p> <p><b>If you built your gas pump solution using the <a href="#operation/GenerateCustodialWalletBatch">API for generating a gas pump wallet address</a> and <a href="#operation/GenerateCustodialWallet">API for generating a custodial wallet address</a>, you can still use this API for getting the custodial wallet address from the transaction. However, we recommend that you switch to the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a></b>.</p><br/> <p><b>1 credit per API call</b></p> <p>Get gas pump smart contract addresses from deploy transaction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "sCGetCustodialAddresses.php"](../../examples/Api/GasPumpApi/sCGetCustodialAddresses.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
