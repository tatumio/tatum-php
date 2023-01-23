---
title: Gas pump
parent: API
layout: page
---

# Api/GasPumpApi

[Gas pump API Reference](https://apidoc.tatum.io/tag/Gas-pump/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->gasPump();

// TestNet API Call
$sdk->testnet()->api()->gasPump();
```

## Methods

Method | Description
------------- | -------------
[**activateGasPump()**](#activategaspump) | Activate gas pump addresses
[**activateGasPumpCelo()**](#activategaspumpcelo) | Activate gas pump addresses
[**activateGasPumpCeloKMS()**](#activategaspumpcelokms) | Activate gas pump addresses
[**activateGasPumpKMS()**](#activategaspumpkms) | Activate gas pump addresses
[**activateGasPumpTatum()**](#activategaspumptatum) | Activate gas pump addresses
[**activateGasPumpTron()**](#activategaspumptron) | Activate gas pump addresses
[**activateGasPumpTronKMS()**](#activategaspumptronkms) | Activate gas pump addresses
[**activatedNotActivatedGasPumpAddresses()**](#activatednotactivatedgaspumpaddresses) | Get the results of the address activation transaction
[**approveTransferCustodialWallet()**](#approvetransfercustodialwallet) | Approve the transfer of an asset from a gas pump address
[**approveTransferCustodialWalletCelo()**](#approvetransfercustodialwalletcelo) | Approve the transfer of an asset from a gas pump address
[**approveTransferCustodialWalletCeloKMS()**](#approvetransfercustodialwalletcelokms) | Approve the transfer of an asset from a gas pump address
[**approveTransferCustodialWalletKMS()**](#approvetransfercustodialwalletkms) | Approve the transfer of an asset from a gas pump address
[**gasPumpAddressesActivatedOrNot()**](#gaspumpaddressesactivatedornot) | Check whether the gas pump address with a specified index is activated
[**~~generateCustodialWallet()~~**](#generatecustodialwallet) | (`deprecated`)
[**~~generateCustodialWalletBatch()~~**](#generatecustodialwalletbatch) | (`deprecated`)
[**~~generateCustodialWalletBatchCelo()~~**](#generatecustodialwalletbatchcelo) | (`deprecated`)
[**~~generateCustodialWalletBatchCeloKMS()~~**](#generatecustodialwalletbatchcelokms) | (`deprecated`)
[**~~generateCustodialWalletBatchKMS()~~**](#generatecustodialwalletbatchkms) | (`deprecated`)
[**~~generateCustodialWalletBatchPayer()~~**](#generatecustodialwalletbatchpayer) | (`deprecated`)
[**~~generateCustodialWalletBatchTron()~~**](#generatecustodialwalletbatchtron) | (`deprecated`)
[**~~generateCustodialWalletBatchTronKMS()~~**](#generatecustodialwalletbatchtronkms) | (`deprecated`)
[**~~generateCustodialWalletCelo()~~**](#generatecustodialwalletcelo) | (`deprecated`)
[**~~generateCustodialWalletCeloKMS()~~**](#generatecustodialwalletcelokms) | (`deprecated`)
[**~~generateCustodialWalletKMS()~~**](#generatecustodialwalletkms) | (`deprecated`)
[**~~generateCustodialWalletTron()~~**](#generatecustodialwallettron) | (`deprecated`)
[**~~generateCustodialWalletTronKMS()~~**](#generatecustodialwallettronkms) | (`deprecated`)
[**precalculateGasPumpAddresses()**](#precalculategaspumpaddresses) | Precalculate gas pump addresses
[**~~sCGetCustodialAddresses()~~**](#scgetcustodialaddresses) | (`deprecated`)
[**transferCustodialWallet()**](#transfercustodialwallet) | Transfer an asset from a gas pump address
[**transferCustodialWalletBatch()**](#transfercustodialwalletbatch) | Transfer multiple assets from a gas pump address
[**transferCustodialWalletBatchCelo()**](#transfercustodialwalletbatchcelo) | Transfer multiple assets from a gas pump address
[**transferCustodialWalletBatchCeloKMS()**](#transfercustodialwalletbatchcelokms) | Transfer multiple assets from a gas pump address
[**transferCustodialWalletBatchKMS()**](#transfercustodialwalletbatchkms) | Transfer multiple assets from a gas pump address
[**transferCustodialWalletBatchTron()**](#transfercustodialwalletbatchtron) | Transfer multiple assets from a gas pump address
[**transferCustodialWalletBatchTronKMS()**](#transfercustodialwalletbatchtronkms) | Transfer multiple assets from a gas pump address
[**transferCustodialWalletCelo()**](#transfercustodialwalletcelo) | Transfer an asset from a gas pump address
[**transferCustodialWalletCeloKMS()**](#transfercustodialwalletcelokms) | Transfer an asset from a gas pump address
[**transferCustodialWalletKMS()**](#transfercustodialwalletkms) | Transfer an asset from a gas pump address
[**transferCustodialWalletTron()**](#transfercustodialwallettron) | Transfer an asset from a gas pump address
[**transferCustodialWalletTronKMS()**](#transfercustodialwallettronkms) | Transfer an asset from a gas pump address


## `activateGasPump()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->activateGasPump(
    \Tatum\Model\ActivateGasPump $activate_gas_pump
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump** | [**\Tatum\Model\ActivateGasPump**](../../Model/ActivateGasPump) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Activate gas pump addresses

ActivateGasPump operation

### Example

[✨ View "activateGasPump.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPump.php)

[Back to top](#top)



## `activateGasPumpCelo()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->activateGasPumpCelo(
    \Tatum\Model\ActivateGasPumpCelo $activate_gas_pump_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_celo** | [**\Tatum\Model\ActivateGasPumpCelo**](../../Model/ActivateGasPumpCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Activate gas pump addresses

ActivateGasPumpCelo operation

### Example

[✨ View "activateGasPumpCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpCelo.php)

[Back to top](#top)



## `activateGasPumpCeloKMS()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->activateGasPumpCeloKMS(
    \Tatum\Model\ActivateGasPumpCeloKMS $activate_gas_pump_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_celo_kms** | [**\Tatum\Model\ActivateGasPumpCeloKMS**](../../Model/ActivateGasPumpCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Activate gas pump addresses

ActivateGasPumpCeloKMS operation

### Example

[✨ View "activateGasPumpCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpCeloKMS.php)

[Back to top](#top)



## `activateGasPumpKMS()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->activateGasPumpKMS(
    \Tatum\Model\ActivateGasPumpKMS $activate_gas_pump_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_kms** | [**\Tatum\Model\ActivateGasPumpKMS**](../../Model/ActivateGasPumpKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Activate gas pump addresses

ActivateGasPumpKMS operation

### Example

[✨ View "activateGasPumpKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpKMS.php)

[Back to top](#top)



## `activateGasPumpTatum()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->activateGasPumpTatum(
    \Tatum\Model\ActivateGasPumpTatum $activate_gas_pump_tatum
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_tatum** | [**\Tatum\Model\ActivateGasPumpTatum**](../../Model/ActivateGasPumpTatum) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Activate gas pump addresses

**2 credits per API call**

 Activate the precalulated gas pump addresses. Activating a gas pump address allows this address to send funds to other addresses.

 You can activate up to 270 addresses in one call. If you need to activate more than 270 addresses, make several API calls. For example, if you need to activate 500 addresses, make an API call with 270 addresses (set up the range of their index values accordingly in the <code>from</code> and <code>to</code> request body parameters) and then make another API call with the remaining 230 addresses.

 **When to activate a gas pump address**

 Because activating a gas pump address costs some amount of gas on a blockchain, you want to activate only those addresses that will be used for sending funds to other addresses. If you know that a gas pump address will not be used for sending funds, you can leave this address not activated. The customer who uses this address will still be able to receive funds.

 Depending on your business needs and requirements, you can choose when to activate the gas pump addresses. If you know for sure that all the precalculated addresses will be sending funds, you can activate all the addresses right after they have been precalculated.

 Alternatively, you can set up the activation in such a way so that a gas pump address gets activated only when a specific event is triggered. For example, you can activate a gas pump address:

 

<ul> <li>When it receives an asset for the first time</li> <li>When the customer tries to send an asset from this address for the first time</li> </ul>

 After you make an API call to activate gas pump addresses, use the API for getting the results of the address activation transaction.

 **Paying the gas fee for activating gas pump addresses**

 You can pay the gas fees for each activation transaction yourself, or Tatum can cover it for you.

 

<ul> <li>When **paying the gas fees yourself**, you must sign the transaction with either the private key of the blockchain address from which you want to pay the fees or the signature ID of that private key (if you use <a href="https://apidoc.tatum.io/tag/Key-Management-System" target="_blank">Key Management System</a>, KMS).

 To pay the fees yourself, use this API with any schema of the request body except for <code>ActivateGasPumpTatum</code>. For example, if you are activating gas pump addresses on Ethereum and you use KMS, use the <code>ActivateGasPumpKMS</code> schema. </li> <li>If you want **Tatum to cover the fees**, use this API with the <code>ActivateGasPumpTatum</code> schema of the request body. 

<ul> <li>On the **mainnet**, you have to have a <a href="https://tatum.io/pricing" target="_blank">paid pricing plan</a>.

 Tatum pays the fees from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. The transaction fees and the corresponding numbers of credits deducted from your allowance vary depending on what blockchain you activate the addresses.</li> <li>On the **testnet**, no credits are deducted from the monthly credit allowance. You can activate gas pump addresses regardless of your pricing plan.</li> </ul>

 </li> </ul>

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "activateGasPumpTatum.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpTatum.php)

[Back to top](#top)



## `activateGasPumpTron()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->activateGasPumpTron(
    \Tatum\Model\ActivateGasPumpTron $activate_gas_pump_tron
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_tron** | [**\Tatum\Model\ActivateGasPumpTron**](../../Model/ActivateGasPumpTron) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Activate gas pump addresses

ActivateGasPumpTron operation

### Example

[✨ View "activateGasPumpTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpTron.php)

[Back to top](#top)



## `activateGasPumpTronKMS()`

> **POST** `/v3/gas-pump/activate`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->activateGasPumpTronKMS(
    \Tatum\Model\ActivateGasPumpTronKMS $activate_gas_pump_tron_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_tron_kms** | [**\Tatum\Model\ActivateGasPumpTronKMS**](../../Model/ActivateGasPumpTronKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Activate gas pump addresses

ActivateGasPumpTronKMS operation

### Example

[✨ View "activateGasPumpTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpTronKMS.php)

[Back to top](#top)



## `activatedNotActivatedGasPumpAddresses()`

> **GET** `/v3/gas-pump/address/{chain}/{txId}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->activatedNotActivatedGasPumpAddresses(
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

[**\Tatum\Model\GasPumpTrxOut**](../../Model/GasPumpTrxOut)

### Description

Get the results of the address activation transaction

**1 credit per API call**

 Get the results of the activation transaction after activating gas pump addresses.

 If the activation transaction got recorded into a block, the API returns two arrays:

 

<ul> <li><code>valid</code>, with the activated gas pump addresses</li> <li><code>invalid</code>, with the gas pump addresses that for some reason did not get activated together with the reason why</li> </ul>

 If the transaction is still being processed, the API returns an error message. In this case, repeat the call later.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "activatedNotActivatedGasPumpAddresses.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activatedNotActivatedGasPumpAddresses.php)

[Back to top](#top)



## `approveTransferCustodialWallet()`

> **POST** `/v3/blockchain/sc/custodial/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->approveTransferCustodialWallet(
    \Tatum\Model\ApproveTransferCustodialWallet $approve_transfer_custodial_wallet
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet** | [**\Tatum\Model\ApproveTransferCustodialWallet**](../../Model/ApproveTransferCustodialWallet) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Approve the transfer of an asset from a gas pump address

**2 credits per API call**

 Allow another blockchain address (the <code>spender</code> parameter in the request body) to transfer the asset from a gas pump address on behalf of the master address.

 Use this API when the customer using the gas pump address sells assets on a marketplace or auction. After the customer creates a listing of the asset, they have to allow the marketplace/auction smart contract to transfer the asset to the buyer after the asset has been bought.

 The asset can be one of the following types:

 

<ul> <li>Fungible token (ERC-20 or equivalent)</li> <li>NFT (ERC-721 or equivalent)</li> <li>Multi Token (ERC-1155 or equivalent)</li> </ul>

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>XinFin</li> </ul>

 **Signing a transaction**

 When approving the transfer of an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "approveTransferCustodialWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWallet.php)

[Back to top](#top)



## `approveTransferCustodialWalletCelo()`

> **POST** `/v3/blockchain/sc/custodial/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->approveTransferCustodialWalletCelo(
    \Tatum\Model\ApproveTransferCustodialWalletCelo $approve_transfer_custodial_wallet_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_celo** | [**\Tatum\Model\ApproveTransferCustodialWalletCelo**](../../Model/ApproveTransferCustodialWalletCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Approve the transfer of an asset from a gas pump address

ApproveTransferCustodialWalletCelo operation

### Example

[✨ View "approveTransferCustodialWalletCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWalletCelo.php)

[Back to top](#top)



## `approveTransferCustodialWalletCeloKMS()`

> **POST** `/v3/blockchain/sc/custodial/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->approveTransferCustodialWalletCeloKMS(
    \Tatum\Model\ApproveTransferCustodialWalletCeloKMS $approve_transfer_custodial_wallet_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_celo_kms** | [**\Tatum\Model\ApproveTransferCustodialWalletCeloKMS**](../../Model/ApproveTransferCustodialWalletCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Approve the transfer of an asset from a gas pump address

ApproveTransferCustodialWalletCeloKMS operation

### Example

[✨ View "approveTransferCustodialWalletCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWalletCeloKMS.php)

[Back to top](#top)



## `approveTransferCustodialWalletKMS()`

> **POST** `/v3/blockchain/sc/custodial/approve`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->approveTransferCustodialWalletKMS(
    \Tatum\Model\ApproveTransferCustodialWalletKMS $approve_transfer_custodial_wallet_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_kms** | [**\Tatum\Model\ApproveTransferCustodialWalletKMS**](../../Model/ApproveTransferCustodialWalletKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Approve the transfer of an asset from a gas pump address

ApproveTransferCustodialWalletKMS operation

### Example

[✨ View "approveTransferCustodialWalletKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWalletKMS.php)

[Back to top](#top)



## `gasPumpAddressesActivatedOrNot()`

> **GET** `/v3/gas-pump/activated/{chain}/{owner}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->gasPumpAddressesActivatedOrNot(
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

[**\Tatum\Model\Activated**](../../Model/Activated)

### Description

Check whether the gas pump address with a specified index is activated

**1 credit per API call**

 Check whether the gas pump address with a specified index is activated and can send funds to other addresses.

 You can use this API when a customer initiates a fund transfer and you need to check whether their gas pump address is allowed to send funds.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "gasPumpAddressesActivatedOrNot.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/gasPumpAddressesActivatedOrNot.php)

[Back to top](#top)



## ~~`generateCustodialWallet()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial`~~
> 
> This method is no longer supported.

Generate a custodial wallet address

**This API is deprecated.

To start with the gas pump, use the API for precalculating the gas pump addresses.**

 **If you built your gas pump solution using this API and the API for generating a gas pump wallet address, you can still use this API for creating more custodial addresses for your solution. However, we recommend that you switch to the API for precalculating the gas pump addresses**.

 **2 credits per API call**

 Generate new gas pump smart contract address on the blockchain. It's possible to enable tokens, which should be detected and supported on that address. This address enables custodial providers to receive native assets, ERC20 / ERC721 / ERC1155 tokens on behalf of their customers on dedicated blockchain address, but in the same time it can initiate transfer of those assets away.

 Gas required for the transfer from that address is going to be deducted from the providers address - the one, which was used to generate the address on the blockchain.

 There are multiple options, how this address can be setup - it cannot be changed in the future:

 

<ul> <li>Native assets only - ETH, BSC, CELO, MATIC, ONE, TRX</li> <li>Native assets + ERC20 tokens</li> <li>Native assets + ERC721 tokens</li> <li>Native assets + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC20 + ERC721 tokens</li> <li>Native assets + ERC20 + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC721 + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC20 + ERC721 + ERC1155 tokens - TRON does not support 1155 standard</li> </ul>

 All of these options could be enabled with a batch mode as well - in 1 transaction, it is possible to transfer multiple different assets from that address, e.g. ETH + USDC + ERC721 token. Without batch mode, 3 separate transaction must have been performed.

 This operation deploys a smart contract on the blockchain. More assets you will support, more intial gas will be used for address creation. Batch mode adds more gas for every type.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> <li>TRON (except for Multi Tokens)</li> </ul>


[Back to top](#top)



## ~~`generateCustodialWalletBatch()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial/batch`~~
> 
> This method is no longer supported.

Generate a gas pump wallet address

GenerateCustodialWalletBatch operation


[Back to top](#top)



## ~~`generateCustodialWalletBatchCelo()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial/batch`~~
> 
> This method is no longer supported.

Generate a gas pump wallet address

GenerateCustodialWalletBatchCelo operation


[Back to top](#top)



## ~~`generateCustodialWalletBatchCeloKMS()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial/batch`~~
> 
> This method is no longer supported.

Generate a gas pump wallet address

GenerateCustodialWalletBatchCeloKMS operation


[Back to top](#top)



## ~~`generateCustodialWalletBatchKMS()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial/batch`~~
> 
> This method is no longer supported.

Generate a gas pump wallet address

GenerateCustodialWalletBatchKMS operation


[Back to top](#top)



## ~~`generateCustodialWalletBatchPayer()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial/batch`~~
> 
> This method is no longer supported.

Generate a gas pump wallet address

**This API is deprecated.

To start with the gas pump, use the API for precalculating the gas pump addresses.**

 **2 credits per API call**

 Generate new gas pump smart contract address on the blockchain. This address enables custodial providers to receive native assets, ERC20 / ERC721 / ERC1155 tokens on behalf of their customers on dedicated blockchain address, but in the same time it can initiate transfer of those assets away. Gas required for the transfer from that address is going to be deducted from the providers address - the one, which was used to generate the address on the blockchain.

 This operation deploys a smart contract on the blockchain.

 For paid plans, it is possible to pay for the gas costs - you don't have to provide private key or signatureId. Blockchain fees will be covered by your credits. This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul>


[Back to top](#top)



## ~~`generateCustodialWalletBatchTron()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial/batch`~~
> 
> This method is no longer supported.

Generate a gas pump wallet address

GenerateCustodialWalletBatchTron operation


[Back to top](#top)



## ~~`generateCustodialWalletBatchTronKMS()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial/batch`~~
> 
> This method is no longer supported.

Generate a gas pump wallet address

GenerateCustodialWalletBatchTronKMS operation


[Back to top](#top)



## ~~`generateCustodialWalletCelo()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial`~~
> 
> This method is no longer supported.

Generate a custodial wallet address

GenerateCustodialWalletCelo operation


[Back to top](#top)



## ~~`generateCustodialWalletCeloKMS()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial`~~
> 
> This method is no longer supported.

Generate a custodial wallet address

GenerateCustodialWalletCeloKMS operation


[Back to top](#top)



## ~~`generateCustodialWalletKMS()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial`~~
> 
> This method is no longer supported.

Generate a custodial wallet address

GenerateCustodialWalletKMS operation


[Back to top](#top)



## ~~`generateCustodialWalletTron()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial`~~
> 
> This method is no longer supported.

Generate a custodial wallet address

GenerateCustodialWalletTron operation


[Back to top](#top)



## ~~`generateCustodialWalletTronKMS()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/blockchain/sc/custodial`~~
> 
> This method is no longer supported.

Generate a custodial wallet address

GenerateCustodialWalletTronKMS operation


[Back to top](#top)



## `precalculateGasPumpAddresses()`

> **POST** `/v3/gas-pump`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->precalculateGasPumpAddresses(
    [ \Tatum\Model\CreateGasPump $create_gas_pump ]
): string[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_gas_pump** | [**\Tatum\Model\CreateGasPump**](../../Model/CreateGasPump) |  | [optional]

### Return type

**string[]**

### Description

Precalculate gas pump addresses

**2 credits per API call**

 Precalculate (generate) gas pump addresses that you can assign to the customers of your custodial application.

 This API does not make any changes on the blockchain itself, just generates addresses that follow the blockchain's requirements for the address format; therefore, no gas fee is applied.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

 **Address index**

 Each address should be associated with its own index. Use the <code>from</code> and <code>to</code> request body parameters to set a range of index values for the addresses to precalculate. You can start with any number, but we recommend that you start from 0.

 In one API call, you can precalculate:

 

<ul> <li>Up to 4,000 addresses for Harmony</li> <li>Up to 500 addresses for TRON</li> <li>Up to 5,000 addresses for the other supported blockchains</li> </ul>

 If you need more addresses than one API call can precalculate, make several API calls. For example, if you need 10,000 addresses on Ethereum, make an API call with an index range from 0 through 4,999 and then make another API call with an index range from 5,000 through 9,999.

 The order in which the precalculated addresses are returned in the API response is the order of the values in the index range, and the index values are assigned to the addresses accordingly.

For example, you precalculated three gas pump addresses with a range of index values from 3 to 5. The first address in the returned arrray is assigned the index value "3", the second one - "4", and the third one - "5".

 <pre> [ "0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea", // index is 3 "0x5c6079c14e9cd3d2ea8cb76aed9c5e336ef96126", // index is 4 "0xc5e336ef9612614e9cd3d2ea8cb76aed95c6079c" // index is 5 ] </pre> **The owner of the gas pump addresses**

 The owner (also referred to as "master address") is the blockchain address that will own the precalculated gas pump addresses. The owner will also be paying gas fees for operations made on the gas pump addresses. You have to make sure that the owner always has enough funds to cover these gas fees.

 **Activated and not activated addresses**

 The precalculated addresses can be immediately assigned to customers and can **receive** funds. However, they cannot be used to **send** funds to other addresses. This is because the addresses are not activated. To make the addresses be able to send funds, activate them.

### Example

[✨ View "precalculateGasPumpAddresses.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/precalculateGasPumpAddresses.php)

[Back to top](#top)



## ~~`sCGetCustodialAddresses()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/blockchain/sc/custodial/{chain}/{hash}`~~
> 
> This method is no longer supported.

Get the custodial wallet address from the transaction

**This API is deprecated.

To start with the gas pump, use the API for precalculating the gas pump addresses.**

 **If you built your gas pump solution using the API for generating a gas pump wallet address and API for generating a custodial wallet address, you can still use this API for getting the custodial wallet address from the transaction. However, we recommend that you switch to the API for precalculating the gas pump addresses**.

 **1 credit per API call**

 Get gas pump smart contract addresses from deploy transaction.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>


[Back to top](#top)



## `transferCustodialWallet()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWallet(
    \Tatum\Model\TransferCustodialWallet $transfer_custodial_wallet
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet** | [**\Tatum\Model\TransferCustodialWallet**](../../Model/TransferCustodialWallet) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an asset from a gas pump address

**2 credits per API call**

 Transfer (send) an asset from a gas pump address to the other address.

 This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer an asset to some address on the blockchain.

 The gas fee for sending the asset will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.

 To be able to send the asset:

 

<ul> <li>The gas pump address must be activated.

To check whether the gas pump address is activated, use this API.</li> <li>The gas pump address must be the owner of the asset.</li> </ul>

 With this API, you can send only one asset per API call. If you want to send multiple assets, use the API for transferring multiple assets from a gas pump account.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul>

 **Signing a transaction**

 When transferring an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "transferCustodialWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWallet.php)

[Back to top](#top)



## `transferCustodialWalletBatch()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatch(
    \Tatum\Model\TransferCustodialWalletBatch $transfer_custodial_wallet_batch
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch** | [**\Tatum\Model\TransferCustodialWalletBatch**](../../Model/TransferCustodialWalletBatch) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple assets from a gas pump address

**2 credits per API call**

 Transfer (send) multiple assets from a gas pump address to one or more addresses.

 This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer multiple assets to one or more addresses on the blockchain.

 The gas fee for sending the assets will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.

 To be able to send the assets:

 

<ul> <li>The gas pump address must be activated.

To check whether the gas pump address is activated, use this API.</li> <li>The gas pump address must be the owner of the assets.</li> </ul>

 If you want to send only one asset, you can also use the API for transferring an asset from a gas pump account.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul>

 **Signing a transaction**

 When transferring assets, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "transferCustodialWalletBatch.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatch.php)

[Back to top](#top)



## `transferCustodialWalletBatchCelo()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchCelo(
    \Tatum\Model\TransferCustodialWalletBatchCelo $transfer_custodial_wallet_batch_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_celo** | [**\Tatum\Model\TransferCustodialWalletBatchCelo**](../../Model/TransferCustodialWalletBatchCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchCelo operation

### Example

[✨ View "transferCustodialWalletBatchCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchCelo.php)

[Back to top](#top)



## `transferCustodialWalletBatchCeloKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchCeloKMS(
    \Tatum\Model\TransferCustodialWalletBatchCeloKMS $transfer_custodial_wallet_batch_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_celo_kms** | [**\Tatum\Model\TransferCustodialWalletBatchCeloKMS**](../../Model/TransferCustodialWalletBatchCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchCeloKMS operation

### Example

[✨ View "transferCustodialWalletBatchCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchCeloKMS.php)

[Back to top](#top)



## `transferCustodialWalletBatchKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchKMS(
    \Tatum\Model\TransferCustodialWalletBatchKMS $transfer_custodial_wallet_batch_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_kms** | [**\Tatum\Model\TransferCustodialWalletBatchKMS**](../../Model/TransferCustodialWalletBatchKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchKMS operation

### Example

[✨ View "transferCustodialWalletBatchKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchKMS.php)

[Back to top](#top)



## `transferCustodialWalletBatchTron()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchTron(
    \Tatum\Model\TransferCustodialWalletBatchTron $transfer_custodial_wallet_batch_tron
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_tron** | [**\Tatum\Model\TransferCustodialWalletBatchTron**](../../Model/TransferCustodialWalletBatchTron) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchTron operation

### Example

[✨ View "transferCustodialWalletBatchTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchTron.php)

[Back to top](#top)



## `transferCustodialWalletBatchTronKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletBatchTronKMS(
    \Tatum\Model\TransferCustodialWalletBatchTronKMS $transfer_custodial_wallet_batch_tron_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_tron_kms** | [**\Tatum\Model\TransferCustodialWalletBatchTronKMS**](../../Model/TransferCustodialWalletBatchTronKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer multiple assets from a gas pump address

TransferCustodialWalletBatchTronKMS operation

### Example

[✨ View "transferCustodialWalletBatchTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchTronKMS.php)

[Back to top](#top)



## `transferCustodialWalletCelo()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletCelo(
    \Tatum\Model\TransferCustodialWalletCelo $transfer_custodial_wallet_celo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_celo** | [**\Tatum\Model\TransferCustodialWalletCelo**](../../Model/TransferCustodialWalletCelo) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletCelo operation

### Example

[✨ View "transferCustodialWalletCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletCelo.php)

[Back to top](#top)



## `transferCustodialWalletCeloKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletCeloKMS(
    \Tatum\Model\TransferCustodialWalletCeloKMS $transfer_custodial_wallet_celo_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_celo_kms** | [**\Tatum\Model\TransferCustodialWalletCeloKMS**](../../Model/TransferCustodialWalletCeloKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletCeloKMS operation

### Example

[✨ View "transferCustodialWalletCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletCeloKMS.php)

[Back to top](#top)



## `transferCustodialWalletKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletKMS(
    \Tatum\Model\TransferCustodialWalletKMS $transfer_custodial_wallet_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_kms** | [**\Tatum\Model\TransferCustodialWalletKMS**](../../Model/TransferCustodialWalletKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletKMS operation

### Example

[✨ View "transferCustodialWalletKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletKMS.php)

[Back to top](#top)



## `transferCustodialWalletTron()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletTron(
    \Tatum\Model\TransferCustodialWalletTron $transfer_custodial_wallet_tron
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_tron** | [**\Tatum\Model\TransferCustodialWalletTron**](../../Model/TransferCustodialWalletTron) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletTron operation

### Example

[✨ View "transferCustodialWalletTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletTron.php)

[Back to top](#top)



## `transferCustodialWalletTronKMS()`

> **POST** `/v3/blockchain/sc/custodial/transfer`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->gasPump()->transferCustodialWalletTronKMS(
    \Tatum\Model\TransferCustodialWalletTronKMS $transfer_custodial_wallet_tron_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_tron_kms** | [**\Tatum\Model\TransferCustodialWalletTronKMS**](../../Model/TransferCustodialWalletTronKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an asset from a gas pump address

TransferCustodialWalletTronKMS operation

### Example

[✨ View "transferCustodialWalletTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletTronKMS.php)

[Back to top](#top)

