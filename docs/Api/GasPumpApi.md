# Tatum/Api/GasPumpApi

## References

[Gas pump API documentation](https://apidoc.tatum.io/tag/Gas-pump/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **activateGasPump()**](#activategaspump) 

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpCelo()**](#activategaspumpcelo) 

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpCeloKMS()**](#activategaspumpcelokms) 

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpKMS()**](#activategaspumpkms) 

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpTatum()**](#activategaspumptatum) 

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpTron()**](#activategaspumptron) 

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpTronKMS()**](#activategaspumptronkms) 

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activatedNotActivatedGasPumpAddresses()**](#activatednotactivatedgaspumpaddresses) 

> Get the results of the address activation transaction
> 
> **GET** `/v3/gas-pump/address/{chain}/{txId}`

[🔹 **approveTransferCustodialWallet()**](#approvetransfercustodialwallet) 

> Approve the transfer of an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/approve`

[🔹 **approveTransferCustodialWalletCelo()**](#approvetransfercustodialwalletcelo) 

> Approve the transfer of an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/approve`

[🔹 **approveTransferCustodialWalletCeloKMS()**](#approvetransfercustodialwalletcelokms) 

> Approve the transfer of an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/approve`

[🔹 **approveTransferCustodialWalletKMS()**](#approvetransfercustodialwalletkms) 

> Approve the transfer of an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/approve`

[🔹 **gasPumpAddressesActivatedOrNot()**](#gaspumpaddressesactivatedornot) 

> Check whether the gas pump address with a specified index is activated
> 
> **GET** `/v3/gas-pump/activated/{chain}/{owner}/{index}`

[🔹 **generateCustodialWallet()**](#generatecustodialwallet) 

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletBatch()**](#generatecustodialwalletbatch) 

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchCelo()**](#generatecustodialwalletbatchcelo) 

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchCeloKMS()**](#generatecustodialwalletbatchcelokms) 

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchKMS()**](#generatecustodialwalletbatchkms) 

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchPayer()**](#generatecustodialwalletbatchpayer) 

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchTron()**](#generatecustodialwalletbatchtron) 

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchTronKMS()**](#generatecustodialwalletbatchtronkms) 

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletCelo()**](#generatecustodialwalletcelo) 

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletCeloKMS()**](#generatecustodialwalletcelokms) 

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletKMS()**](#generatecustodialwalletkms) 

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletTron()**](#generatecustodialwallettron) 

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletTronKMS()**](#generatecustodialwallettronkms) 

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **precalculateGasPumpAddresses()**](#precalculategaspumpaddresses) 

> Precalculate gas pump addresses
> 
> **POST** `/v3/gas-pump`

[🔹 **sCGetCustodialAddresses()**](#scgetcustodialaddresses) 

> Get the custodial wallet address from the transaction
> 
> **GET** `/v3/blockchain/sc/custodial/{chain}/{hash}`

[🔹 **transferCustodialWallet()**](#transfercustodialwallet) 

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletBatch()**](#transfercustodialwalletbatch) 

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchCelo()**](#transfercustodialwalletbatchcelo) 

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchCeloKMS()**](#transfercustodialwalletbatchcelokms) 

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchKMS()**](#transfercustodialwalletbatchkms) 

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchTron()**](#transfercustodialwalletbatchtron) 

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchTronKMS()**](#transfercustodialwalletbatchtronkms) 

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletCelo()**](#transfercustodialwalletcelo) 

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletCeloKMS()**](#transfercustodialwalletcelokms) 

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletKMS()**](#transfercustodialwalletkms) 

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletTron()**](#transfercustodialwallettron) 

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletTronKMS()**](#transfercustodialwallettronkms) 

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`



## `activateGasPump()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->activateGasPump(
    \Tatum\Model\ActivateGasPump $activate_gas_pump
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump** | [**\Tatum\Model\ActivateGasPump**](../Model/ActivateGasPump.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Activate gas pump addresses

ActivateGasPump operation

### Example

[✨ View "activateGasPump.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPump.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `activateGasPumpCelo()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->activateGasPumpCelo(
    \Tatum\Model\ActivateGasPumpCelo $activate_gas_pump_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_celo** | [**\Tatum\Model\ActivateGasPumpCelo**](../Model/ActivateGasPumpCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Activate gas pump addresses

ActivateGasPumpCelo operation

### Example

[✨ View "activateGasPumpCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `activateGasPumpCeloKMS()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->activateGasPumpCeloKMS(
    \Tatum\Model\ActivateGasPumpCeloKMS $activate_gas_pump_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_celo_kms** | [**\Tatum\Model\ActivateGasPumpCeloKMS**](../Model/ActivateGasPumpCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Activate gas pump addresses

ActivateGasPumpCeloKMS operation

### Example

[✨ View "activateGasPumpCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `activateGasPumpKMS()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->activateGasPumpKMS(
    \Tatum\Model\ActivateGasPumpKMS $activate_gas_pump_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_kms** | [**\Tatum\Model\ActivateGasPumpKMS**](../Model/ActivateGasPumpKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Activate gas pump addresses

ActivateGasPumpKMS operation

### Example

[✨ View "activateGasPumpKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `activateGasPumpTatum()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->activateGasPumpTatum(
    \Tatum\Model\ActivateGasPumpTatum $activate_gas_pump_tatum
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_tatum** | [**\Tatum\Model\ActivateGasPumpTatum**](../Model/ActivateGasPumpTatum.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Activate gas pump addresses

<p><b>2 credits per API call</b></p>
 <p>Activate the <a href="#operation/PrecalculateGasPumpAddresses">precalulated gas pump addresses</a>. Activating a gas pump address allows this address to send funds to other addresses.</p>
 <p>You can activate up to 270 addresses in one call. If you need to activate more than 270 addresses, make several API calls. For example, if you need to activate 500 addresses, make an API call with 270 addresses (set up the range of their index values accordingly in the <code>from</code> and <code>to</code> request body parameters) and then make another API call with the remaining 230 addresses.</p>
 <p><b>When to activate a gas pump address</b>
 Because activating a gas pump address costs some amount of gas on a blockchain, you want to activate only those addresses that will be used for sending funds to other addresses. If you know that a gas pump address will not be used for sending funds, you can leave this address not activated. The customer who uses this address will still be able to receive funds.</p>
 <p>Depending on your business needs and requirements, you can choose when to activate the gas pump addresses. If you know for sure that all the precalculated addresses will be sending funds, you can activate all the addresses right after they have been precalculated.</p>
 <p>Alternatively, you can set up the activation in such a way so that a gas pump address gets activated only when a specific event is triggered. For example, you can activate a gas pump address:</p>
 <ul> <li>When it receives an asset for the first time</li> <li>When the customer tries to send an asset from this address for the first time</li> </ul> <p>After you make an API call to activate gas pump addresses, use the <a href="#operation/ActivatedNotActivatedGasPumpAddresses">API for getting the results of the address activation transaction</a>.</p>
 <p><b>Paying the gas fee for activating gas pump addresses</b>
 You can pay the gas fees for each activation transaction yourself, or Tatum can cover it for you.</p>
 <ul> <li>When <b>paying the gas fees yourself</b>, you must sign the transaction with either the private key of the blockchain address from which you want to pay the fees or the signature ID of that private key (if you use <a href="https://apidoc.tatum.io/tag/Key-Management-System" target="_blank">Key Management System</a>, KMS).
 To pay the fees yourself, use this API with any schema of the request body except for <code>ActivateGasPumpTatum</code>. For example, if you are activating gas pump addresses on Ethereum and you use KMS, use the <code>ActivateGasPumpKMS</code> schema. </li> <li>If you want <b>Tatum to cover the fees</b>, use this API with the <code>ActivateGasPumpTatum</code> schema of the request body. <ul> <li>On the <b>mainnet</b>, you have to have a <a href="https://tatum.io/pricing" target="_blank">paid pricing plan</a>.
 Tatum pays the fees from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. The transaction fees and the corresponding numbers of credits deducted from your allowance vary depending on what blockchain you activate the addresses.</li> <li>On the <b>testnet</b>, no credits are deducted from the monthly credit allowance. You can activate gas pump addresses regardless of your pricing plan.</li> </ul> </li> </ul> <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "activateGasPumpTatum.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpTatum.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `activateGasPumpTron()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->activateGasPumpTron(
    \Tatum\Model\ActivateGasPumpTron $activate_gas_pump_tron
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_tron** | [**\Tatum\Model\ActivateGasPumpTron**](../Model/ActivateGasPumpTron.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Activate gas pump addresses

ActivateGasPumpTron operation

### Example

[✨ View "activateGasPumpTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `activateGasPumpTronKMS()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->activateGasPumpTronKMS(
    \Tatum\Model\ActivateGasPumpTronKMS $activate_gas_pump_tron_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_tron_kms** | [**\Tatum\Model\ActivateGasPumpTronKMS**](../Model/ActivateGasPumpTronKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Activate gas pump addresses

ActivateGasPumpTronKMS operation

### Example

[✨ View "activateGasPumpTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `activatedNotActivatedGasPumpAddresses()`

> **GET** `/v3/gas-pump/address/{chain}/{txId}`

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

<p><b>1 credit per API call</b></p>
 <p>Get the results of the activation transaction after <a href="#operation/ActivateGasPumpAddresses">activating gas pump addresses</a>.</p>
 <p>If the activation transaction got recorded into a block, the API returns two arrays:</p>
 <ul> <li><code>valid</code>, with the activated gas pump addresses</li> <li><code>invalid</code>, with the gas pump addresses that for some reason did not get activated together with the reason why</li> </ul> <p>If the transaction is still being processed, the API returns an error message. In this case, repeat the call later.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "activatedNotActivatedGasPumpAddresses.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activatedNotActivatedGasPumpAddresses.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveTransferCustodialWallet()`

> **POST** `/v3/blockchain/sc/custodial/approve`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->approveTransferCustodialWallet(
    \Tatum\Model\ApproveTransferCustodialWallet $approve_transfer_custodial_wallet
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet** | [**\Tatum\Model\ApproveTransferCustodialWallet**](../Model/ApproveTransferCustodialWallet.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Approve the transfer of an asset from a gas pump address

<p><b>2 credits per API call</b></p>
 <p>Allow another blockchain address (the <code>spender</code> parameter in the request body) to transfer the asset from a gas pump address on behalf of the master address.</p>
 <p>Use this API when the customer using the gas pump address sells assets on a marketplace or auction. After the customer creates a listing of the asset, they have to allow the marketplace/auction smart contract to transfer the asset to the buyer after the asset has been bought.</p>
 <p>The asset can be one of the following types:</p>
 <ul> <li>Fungible token (ERC-20 or equivalent)</li> <li>NFT (ERC-721 or equivalent)</li> <li>Multi Token (ERC-1155 or equivalent)</li> </ul> <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b>
 When approving the transfer of an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "approveTransferCustodialWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveTransferCustodialWalletCelo()`

> **POST** `/v3/blockchain/sc/custodial/approve`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->approveTransferCustodialWalletCelo(
    \Tatum\Model\ApproveTransferCustodialWalletCelo $approve_transfer_custodial_wallet_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_celo** | [**\Tatum\Model\ApproveTransferCustodialWalletCelo**](../Model/ApproveTransferCustodialWalletCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Approve the transfer of an asset from a gas pump address

ApproveTransferCustodialWalletCelo operation

### Example

[✨ View "approveTransferCustodialWalletCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWalletCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveTransferCustodialWalletCeloKMS()`

> **POST** `/v3/blockchain/sc/custodial/approve`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->approveTransferCustodialWalletCeloKMS(
    \Tatum\Model\ApproveTransferCustodialWalletCeloKMS $approve_transfer_custodial_wallet_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_celo_kms** | [**\Tatum\Model\ApproveTransferCustodialWalletCeloKMS**](../Model/ApproveTransferCustodialWalletCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Approve the transfer of an asset from a gas pump address

ApproveTransferCustodialWalletCeloKMS operation

### Example

[✨ View "approveTransferCustodialWalletCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWalletCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `approveTransferCustodialWalletKMS()`

> **POST** `/v3/blockchain/sc/custodial/approve`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->approveTransferCustodialWalletKMS(
    \Tatum\Model\ApproveTransferCustodialWalletKMS $approve_transfer_custodial_wallet_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_kms** | [**\Tatum\Model\ApproveTransferCustodialWalletKMS**](../Model/ApproveTransferCustodialWalletKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Approve the transfer of an asset from a gas pump address

ApproveTransferCustodialWalletKMS operation

### Example

[✨ View "approveTransferCustodialWalletKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWalletKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `gasPumpAddressesActivatedOrNot()`

> **GET** `/v3/gas-pump/activated/{chain}/{owner}/{index}`

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

<p><b>1 credit per API call</b></p>
 <p>Check whether the gas pump address with a specified index is <a href="#operation/ActivateGasPumpAddresses">activated</a> and can send funds to other addresses.</p>
 <p>You can use this API when a customer initiates a fund transfer and you need to check whether their gas pump address is allowed to send funds.</p>
  <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "gasPumpAddressesActivatedOrNot.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/gasPumpAddressesActivatedOrNot.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWallet()`

> **POST** `/v3/blockchain/sc/custodial`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWallet(
    \Tatum\Model\GenerateCustodialWallet $generate_custodial_wallet
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet** | [**\Tatum\Model\GenerateCustodialWallet**](../Model/GenerateCustodialWallet.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a custodial wallet address

<p><b>This API is deprecated.
To start with the gas pump, use the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a>.</b></p>
 <p><b>If you built your gas pump solution using this API and the <a href="#operation/GenerateCustodialWalletBatch">API for generating a gas pump wallet address</a>, you can still use this API for creating more custodial addresses for your solution. However, we recommend that you switch to the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a></b>.</p>

 <p><b>2 credits per API call</b></p>
 <p>Generate new gas pump smart contract address on the blockchain. It's possible to enable tokens, which should be detected and supported on that address. This address enables custodial providers to receive native assets, ERC20 / ERC721 / ERC1155 tokens on behalf of their customers on dedicated blockchain address, but in the same time it can initiate transfer of those assets away.</p>
 <p>Gas required for the transfer from that address is going to be deducted from the providers address - the one, which was used to generate the address on the blockchain.</p>
 <p>There are multiple options, how this address can be setup - it cannot be changed in the future:</p>
 <ul> <li>Native assets only - ETH, BSC, CELO, MATIC, ONE, TRX</li> <li>Native assets + ERC20 tokens</li> <li>Native assets + ERC721 tokens</li> <li>Native assets + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC20 + ERC721 tokens</li> <li>Native assets + ERC20 + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC721 + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC20 + ERC721 + ERC1155 tokens - TRON does not support 1155 standard</li> </ul> <p>All of these options could be enabled with a batch mode as well - in 1 transaction, it is possible to transfer multiple different assets from that address, e.g. ETH + USDC + ERC721 token. Without batch mode, 3 separate transaction must have been performed.</p>
 <p>This operation deploys a smart contract on the blockchain. More assets you will support, more intial gas will be used for address creation. Batch mode adds more gas for every type.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> <li>TRON (except for Multi Tokens)</li> </ul>

### Example

[✨ View "generateCustodialWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletBatch()`

> **POST** `/v3/blockchain/sc/custodial/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletBatch(
    \Tatum\Model\GenerateCustodialWalletBatch $generate_custodial_wallet_batch,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch** | [**\Tatum\Model\GenerateCustodialWalletBatch**](../Model/GenerateCustodialWalletBatch.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatch operation

### Example

[✨ View "generateCustodialWalletBatch.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletBatchCelo()`

> **POST** `/v3/blockchain/sc/custodial/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletBatchCelo(
    \Tatum\Model\GenerateCustodialWalletBatchCelo $generate_custodial_wallet_batch_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_celo** | [**\Tatum\Model\GenerateCustodialWalletBatchCelo**](../Model/GenerateCustodialWalletBatchCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchCelo operation

### Example

[✨ View "generateCustodialWalletBatchCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletBatchCeloKMS()`

> **POST** `/v3/blockchain/sc/custodial/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletBatchCeloKMS(
    \Tatum\Model\GenerateCustodialWalletBatchCeloKMS $generate_custodial_wallet_batch_celo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_celo_kms** | [**\Tatum\Model\GenerateCustodialWalletBatchCeloKMS**](../Model/GenerateCustodialWalletBatchCeloKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchCeloKMS operation

### Example

[✨ View "generateCustodialWalletBatchCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletBatchCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletBatchKMS()`

> **POST** `/v3/blockchain/sc/custodial/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletBatchKMS(
    \Tatum\Model\GenerateCustodialWalletBatchKMS $generate_custodial_wallet_batch_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_kms** | [**\Tatum\Model\GenerateCustodialWalletBatchKMS**](../Model/GenerateCustodialWalletBatchKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchKMS operation

### Example

[✨ View "generateCustodialWalletBatchKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletBatchPayer()`

> **POST** `/v3/blockchain/sc/custodial/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletBatchPayer(
    \Tatum\Model\GenerateCustodialWalletBatchPayer $generate_custodial_wallet_batch_payer,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_payer** | [**\Tatum\Model\GenerateCustodialWalletBatchPayer**](../Model/GenerateCustodialWalletBatchPayer.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a gas pump wallet address

<p><b>This API is deprecated.
To start with the gas pump, use the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a>.</b></p>

 <p><b>2 credits per API call</b></p>
 <p>Generate new gas pump smart contract address on the blockchain. This address enables custodial providers to receive native assets, ERC20 / ERC721 / ERC1155 tokens on behalf of their customers on dedicated blockchain address, but in the same time it can initiate transfer of those assets away. Gas required for the transfer from that address is going to be deducted from the providers address - the one, which was used to generate the address on the blockchain.
 This operation deploys a smart contract on the blockchain.
 For paid plans, it is possible to pay for the gas costs - you don't have to provide private key or signatureId. Blockchain fees will be covered by your credits. <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul>

### Example

[✨ View "generateCustodialWalletBatchPayer.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletBatchPayer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletBatchTron()`

> **POST** `/v3/blockchain/sc/custodial/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletBatchTron(
    \Tatum\Model\GenerateCustodialWalletBatchTron $generate_custodial_wallet_batch_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_tron** | [**\Tatum\Model\GenerateCustodialWalletBatchTron**](../Model/GenerateCustodialWalletBatchTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchTron operation

### Example

[✨ View "generateCustodialWalletBatchTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletBatchTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletBatchTronKMS()`

> **POST** `/v3/blockchain/sc/custodial/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletBatchTronKMS(
    \Tatum\Model\GenerateCustodialWalletBatchTronKMS $generate_custodial_wallet_batch_tron_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_tron_kms** | [**\Tatum\Model\GenerateCustodialWalletBatchTronKMS**](../Model/GenerateCustodialWalletBatchTronKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a gas pump wallet address

GenerateCustodialWalletBatchTronKMS operation

### Example

[✨ View "generateCustodialWalletBatchTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletBatchTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletCelo()`

> **POST** `/v3/blockchain/sc/custodial`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletCelo(
    \Tatum\Model\GenerateCustodialWalletCelo $generate_custodial_wallet_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_celo** | [**\Tatum\Model\GenerateCustodialWalletCelo**](../Model/GenerateCustodialWalletCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletCelo operation

### Example

[✨ View "generateCustodialWalletCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletCeloKMS()`

> **POST** `/v3/blockchain/sc/custodial`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletCeloKMS(
    \Tatum\Model\GenerateCustodialWalletCeloKMS $generate_custodial_wallet_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_celo_kms** | [**\Tatum\Model\GenerateCustodialWalletCeloKMS**](../Model/GenerateCustodialWalletCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletCeloKMS operation

### Example

[✨ View "generateCustodialWalletCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletKMS()`

> **POST** `/v3/blockchain/sc/custodial`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletKMS(
    \Tatum\Model\GenerateCustodialWalletKMS $generate_custodial_wallet_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_kms** | [**\Tatum\Model\GenerateCustodialWalletKMS**](../Model/GenerateCustodialWalletKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletKMS operation

### Example

[✨ View "generateCustodialWalletKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletTron()`

> **POST** `/v3/blockchain/sc/custodial`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletTron(
    \Tatum\Model\GenerateCustodialWalletTron $generate_custodial_wallet_tron
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_tron** | [**\Tatum\Model\GenerateCustodialWalletTron**](../Model/GenerateCustodialWalletTron.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletTron operation

### Example

[✨ View "generateCustodialWalletTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateCustodialWalletTronKMS()`

> **POST** `/v3/blockchain/sc/custodial`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->generateCustodialWalletTronKMS(
    \Tatum\Model\GenerateCustodialWalletTronKMS $generate_custodial_wallet_tron_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_tron_kms** | [**\Tatum\Model\GenerateCustodialWalletTronKMS**](../Model/GenerateCustodialWalletTronKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Generate a custodial wallet address

GenerateCustodialWalletTronKMS operation

### Example

[✨ View "generateCustodialWalletTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/generateCustodialWalletTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `precalculateGasPumpAddresses()`

> **POST** `/v3/gas-pump`

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

<p><b>2 credits per API call</b></p>
 <p>Precalculate (generate) gas pump addresses that you can assign to the customers of your custodial application.</p>
 <p>This API does not make any changes on the blockchain itself, just generates addresses that follow the blockchain's requirements for the address format; therefore, no gas fee is applied.</p>
<p/> <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>Address index</b>
 Each address should be associated with its own index. Use the <code>from</code> and <code>to</code> request body parameters to set a range of index values for the addresses to precalculate. You can start with any number, but we recommend that you start from 0.</p>
 <p>In one API call, you can precalculate:</p>
 <ul> <li>Up to 4,000 addresses for Harmony</li> <li>Up to 500 addresses for TRON</li> <li>Up to 5,000 addresses for the other supported blockchains</li> </ul> <p>If you need more addresses than one API call can precalculate, make several API calls. For example, if you need 10,000 addresses on Ethereum, make an API call with an index range from 0 through 4,999 and then make another API call with an index range from 5,000 through 9,999.</p>
 <p>The order in which the precalculated addresses are returned in the API response is the order of the values in the index range, and the index values are assigned to the addresses accordingly.
For example, you precalculated three gas pump addresses with a range of index values from 3 to 5. The first address in the returned arrray is assigned the index value "3", the second one - "4", and the third one - "5".</p>
 <pre> [   "0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea", // index is 3   "0x5c6079c14e9cd3d2ea8cb76aed9c5e336ef96126", // index is 4   "0xc5e336ef9612614e9cd3d2ea8cb76aed95c6079c"  // index is 5 ] </pre> <p><b>The owner of the gas pump addresses</b>
 The owner (also referred to as "master address") is the blockchain address that will own the precalculated gas pump addresses. The owner will also be paying gas fees for operations made on the gas pump addresses. You have to make sure that the owner always has enough funds to cover these gas fees.</p>
 <p><b>Activated and not activated addresses</b>
 The precalculated addresses can be immediately assigned to customers and can <b>receive</b> funds. However, they cannot be used to <b>send</b> funds to other addresses. This is because the addresses are not activated. To make the addresses be able to send funds, <a href="#operation/ActivateGasPumpAddresses">activate them</a>.</p>


### Example

[✨ View "precalculateGasPumpAddresses.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/precalculateGasPumpAddresses.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `sCGetCustodialAddresses()`

> **GET** `/v3/blockchain/sc/custodial/{chain}/{hash}`

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

<p><b>This API is deprecated.
To start with the gas pump, use the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a>.</b></p>
 <p><b>If you built your gas pump solution using the <a href="#operation/GenerateCustodialWalletBatch">API for generating a gas pump wallet address</a> and <a href="#operation/GenerateCustodialWallet">API for generating a custodial wallet address</a>, you can still use this API for getting the custodial wallet address from the transaction. However, we recommend that you switch to the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a></b>.</p>

 <p><b>1 credit per API call</b></p>
 <p>Get gas pump smart contract addresses from deploy transaction.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "sCGetCustodialAddresses.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/sCGetCustodialAddresses.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWallet()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWallet(
    \Tatum\Model\TransferCustodialWallet $transfer_custodial_wallet
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet** | [**\Tatum\Model\TransferCustodialWallet**](../Model/TransferCustodialWallet.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an asset from a gas pump address

<p><b>2 credits per API call</b></p>
 <p>Transfer (send) an asset from a gas pump address to the other address.</p>
 <p>This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer an asset to some address on the blockchain.</p>
 <p>The gas fee for sending the asset will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.</p>
 <p>To be able to send the asset:</p>
 <ul> <li>The gas pump address must be <a href="#operation/ActivateGasPumpAddresses">activated</a>.
To check whether the gas pump address is activated, use <a href="#operation/GasPumpAddressesActivatedOrNot">this API</a>.</li> <li>The gas pump address must be the owner of the asset.</li> </ul> <p>With this API, you can send only one asset per API call. If you want to send multiple assets, use the <a href="#operation/TransferCustodialWalletBatch">API for transferring multiple assets from a gas pump account</a>.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b>
 When transferring an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "transferCustodialWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletBatch()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatch(
    \Tatum\Model\TransferCustodialWalletBatch $transfer_custodial_wallet_batch
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch** | [**\Tatum\Model\TransferCustodialWalletBatch**](../Model/TransferCustodialWalletBatch.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple assets from a gas pump address

<p><b>2 credits per API call</b></p>
 <p>Transfer (send) multiple assets from a gas pump address to one or more addresses.</p>
 <p>This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer multiple assets to one or more addresses on the blockchain.</p>
 <p>The gas fee for sending the assets will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.</p>
 <p>To be able to send the assets:</p>
 <ul> <li>The gas pump address must be <a href="#operation/ActivateGasPumpAddresses">activated</a>.
To check whether the gas pump address is activated, use <a href="#operation/GasPumpAddressesActivatedOrNot">this API</a>.</li> <li>The gas pump address must be the owner of the assets.</li> </ul> <p>If you want to send only one asset, you can also use the <a href="#operation/TransferCustodialWallet">API for transferring an asset from a gas pump account</a>.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b>
 When transferring assets, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "transferCustodialWalletBatch.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletBatchCelo()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchCelo(
    \Tatum\Model\TransferCustodialWalletBatchCelo $transfer_custodial_wallet_batch_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_celo** | [**\Tatum\Model\TransferCustodialWalletBatchCelo**](../Model/TransferCustodialWalletBatchCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchCelo operation

### Example

[✨ View "transferCustodialWalletBatchCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletBatchCeloKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchCeloKMS(
    \Tatum\Model\TransferCustodialWalletBatchCeloKMS $transfer_custodial_wallet_batch_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_celo_kms** | [**\Tatum\Model\TransferCustodialWalletBatchCeloKMS**](../Model/TransferCustodialWalletBatchCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchCeloKMS operation

### Example

[✨ View "transferCustodialWalletBatchCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletBatchKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchKMS(
    \Tatum\Model\TransferCustodialWalletBatchKMS $transfer_custodial_wallet_batch_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_kms** | [**\Tatum\Model\TransferCustodialWalletBatchKMS**](../Model/TransferCustodialWalletBatchKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchKMS operation

### Example

[✨ View "transferCustodialWalletBatchKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletBatchTron()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchTron(
    \Tatum\Model\TransferCustodialWalletBatchTron $transfer_custodial_wallet_batch_tron
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_tron** | [**\Tatum\Model\TransferCustodialWalletBatchTron**](../Model/TransferCustodialWalletBatchTron.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchTron operation

### Example

[✨ View "transferCustodialWalletBatchTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletBatchTronKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchTronKMS(
    \Tatum\Model\TransferCustodialWalletBatchTronKMS $transfer_custodial_wallet_batch_tron_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_tron_kms** | [**\Tatum\Model\TransferCustodialWalletBatchTronKMS**](../Model/TransferCustodialWalletBatchTronKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchTronKMS operation

### Example

[✨ View "transferCustodialWalletBatchTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletCelo()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletCelo(
    \Tatum\Model\TransferCustodialWalletCelo $transfer_custodial_wallet_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_celo** | [**\Tatum\Model\TransferCustodialWalletCelo**](../Model/TransferCustodialWalletCelo.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletCelo operation

### Example

[✨ View "transferCustodialWalletCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletCeloKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletCeloKMS(
    \Tatum\Model\TransferCustodialWalletCeloKMS $transfer_custodial_wallet_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_celo_kms** | [**\Tatum\Model\TransferCustodialWalletCeloKMS**](../Model/TransferCustodialWalletCeloKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletCeloKMS operation

### Example

[✨ View "transferCustodialWalletCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletKMS(
    \Tatum\Model\TransferCustodialWalletKMS $transfer_custodial_wallet_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_kms** | [**\Tatum\Model\TransferCustodialWalletKMS**](../Model/TransferCustodialWalletKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletKMS operation

### Example

[✨ View "transferCustodialWalletKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletTron()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletTron(
    \Tatum\Model\TransferCustodialWalletTron $transfer_custodial_wallet_tron
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_tron** | [**\Tatum\Model\TransferCustodialWalletTron**](../Model/TransferCustodialWalletTron.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletTron operation

### Example

[✨ View "transferCustodialWalletTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferCustodialWalletTronKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletTronKMS(
    \Tatum\Model\TransferCustodialWalletTronKMS $transfer_custodial_wallet_tron_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_tron_kms** | [**\Tatum\Model\TransferCustodialWalletTronKMS**](../Model/TransferCustodialWalletTronKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletTronKMS operation

### Example

[✨ View "transferCustodialWalletTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
