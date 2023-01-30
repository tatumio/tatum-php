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
[**precalculateGasPumpAddresses()**](#precalculategaspumpaddresses) | Precalculate gas pump addresses
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

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **activateGasPump.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPump.php){: .btn .btn-green .mt-4}

### Request

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

> Activate gas pump addresses



[Back to top](#top){: .btn .btn-purple }

---


## `activateGasPumpCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **activateGasPumpCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpCelo.php){: .btn .btn-green .mt-4}

### Request

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

> Activate gas pump addresses



[Back to top](#top){: .btn .btn-purple }

---


## `activateGasPumpCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **activateGasPumpCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpCeloKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Activate gas pump addresses



[Back to top](#top){: .btn .btn-purple }

---


## `activateGasPumpKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **activateGasPumpKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Activate gas pump addresses



[Back to top](#top){: .btn .btn-purple }

---


## `activateGasPumpTatum()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **activateGasPumpTatum.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpTatum.php){: .btn .btn-green .mt-4}

### Request

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

> Activate gas pump addresses

**2 credits per API call**

Activate the [precalulated gas pump addresses](https://apidoc.tatum.io/tag/Gas-pump/#operation/precalculategaspumpaddresses). Activating a gas pump address allows this address to send funds to other addresses.

You can activate up to 270 addresses in one call. If you need to activate more than 270 addresses, make several API calls. For example, if you need to activate 500 addresses, make an API call with 270 addresses (set up the range of their index values accordingly in the `from` and `to` request body parameters) and then make another API call with the remaining 230 addresses.

**When to activate a gas pump address** Because activating a gas pump address costs some amount of gas on a blockchain, you want to activate only those addresses that will be used for sending funds to other addresses. If you know that a gas pump address will not be used for sending funds, you can leave this address not activated. The customer who uses this address will still be able to receive funds.

Depending on your business needs and requirements, you can choose when to activate the gas pump addresses. If you know for sure that all the precalculated addresses will be sending funds, you can activate all the addresses right after they have been precalculated.

Alternatively, you can set up the activation in such a way so that a gas pump address gets activated only when a specific event is triggered. For example, you can activate a gas pump address:

* When it receives an asset for the first time
* When the customer tries to send an asset from this address for the first time

After you make an API call to activate gas pump addresses, use the [API for getting the results of the address activation transaction](https://apidoc.tatum.io/tag/Gas-pump/#operation/activatednotactivatedgaspumpaddresses).

**Paying the gas fee for activating gas pump addresses** You can pay the gas fees for each activation transaction yourself, or Tatum can cover it for you.

* When **paying the gas fees yourself**, you must sign the transaction with either the private key of the blockchain address from which you want to pay the fees or the signature ID of that private key (if you use [Key Management System](https://apidoc.tatum.io/tag/Key-Management-System), KMS). To pay the fees yourself, use this API with any schema of the request body except for `ActivateGasPumpTatum`. For example, if you are activating gas pump addresses on Ethereum and you use KMS, use the `ActivateGasPumpKMS` schema.
* If you want **Tatum to cover the fees**, use this API with the `ActivateGasPumpTatum` schema of the request body. 
 * On the **mainnet**, you have to have a [paid pricing plan](https://tatum.io/pricing). Tatum pays the fees from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. The transaction fees and the corresponding numbers of credits deducted from your allowance vary depending on what blockchain you activate the addresses. 
 * On the **testnet**, no credits are deducted from the monthly credit allowance. You can activate gas pump addresses regardless of your pricing plan.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* TRON

[Back to top](#top){: .btn .btn-purple }

---


## `activateGasPumpTron()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **activateGasPumpTron.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpTron.php){: .btn .btn-green .mt-4}

### Request

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

> Activate gas pump addresses



[Back to top](#top){: .btn .btn-purple }

---


## `activateGasPumpTronKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **activateGasPumpTronKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activateGasPumpTronKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Activate gas pump addresses



[Back to top](#top){: .btn .btn-purple }

---


## `activatedNotActivatedGasPumpAddresses()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **activatedNotActivatedGasPumpAddresses.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/activatedNotActivatedGasPumpAddresses.php){: .btn .btn-green .mt-4}

### Request

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

> Get the results of the address activation transaction

**1 credit per API call**

Get the results of the activation transaction after [activating gas pump addresses](https://apidoc.tatum.io/tag/Gas-pump/#operation/activategaspumpaddresses).

If the activation transaction got recorded into a block, the API returns two arrays:

* `valid`, with the activated gas pump addresses
* `invalid`, with the gas pump addresses that for some reason did not get activated together with the reason why

If the transaction is still being processed, the API returns an error message. In this case, repeat the call later.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* TRON

[Back to top](#top){: .btn .btn-purple }

---


## `approveTransferCustodialWallet()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveTransferCustodialWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWallet.php){: .btn .btn-green .mt-4}

### Request

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

> Approve the transfer of an asset from a gas pump address

**2 credits per API call**

Allow another blockchain address (the `spender` parameter in the request body) to transfer the asset from a gas pump address on behalf of the master address.

Use this API when the customer using the gas pump address sells assets on a marketplace or auction. After the customer creates a listing of the asset, they have to allow the marketplace/auction smart contract to transfer the asset to the buyer after the asset has been bought.

The asset can be one of the following types:

* Fungible token (ERC-20 or equivalent)
* NFT (ERC-721 or equivalent)
* Multi Token (ERC-1155 or equivalent)

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* XinFin

**Signing a transaction** When approving the transfer of an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `approveTransferCustodialWalletCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveTransferCustodialWalletCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWalletCelo.php){: .btn .btn-green .mt-4}

### Request

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

> Approve the transfer of an asset from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `approveTransferCustodialWalletCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveTransferCustodialWalletCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWalletCeloKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Approve the transfer of an asset from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `approveTransferCustodialWalletKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **approveTransferCustodialWalletKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/approveTransferCustodialWalletKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Approve the transfer of an asset from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `gasPumpAddressesActivatedOrNot()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **gasPumpAddressesActivatedOrNot.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/gasPumpAddressesActivatedOrNot.php){: .btn .btn-green .mt-4}

### Request

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

> Check whether the gas pump address with a specified index is activated

**1 credit per API call**

Check whether the gas pump address with a specified index is [activated](https://apidoc.tatum.io/tag/Gas-pump/#operation/activategaspumpaddresses) and can send funds to other addresses.

You can use this API when a customer initiates a fund transfer and you need to check whether their gas pump address is allowed to send funds.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* TRON

[Back to top](#top){: .btn .btn-purple }

---


## `precalculateGasPumpAddresses()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **precalculateGasPumpAddresses.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/precalculateGasPumpAddresses.php){: .btn .btn-green .mt-4}

### Request

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

> Precalculate gas pump addresses

**2 credits per API call**

Precalculate (generate) gas pump addresses that you can assign to the customers of your custodial application.

This API does not make any changes on the blockchain itself, just generates addresses that follow the blockchain's requirements for the address format; therefore, no gas fee is applied.

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* TRON

**Address index** Each address should be associated with its own index. Use the `from` and `to` request body parameters to set a range of index values for the addresses to precalculate. You can start with any number, but we recommend that you start from 0.

In one API call, you can precalculate:

* Up to 4,000 addresses for Harmony
* Up to 500 addresses for TRON
* Up to 5,000 addresses for the other supported blockchains

If you need more addresses than one API call can precalculate, make several API calls. For example, if you need 10,000 addresses on Ethereum, make an API call with an index range from 0 through 4,999 and then make another API call with an index range from 5,000 through 9,999.

The order in which the precalculated addresses are returned in the API response is the order of the values in the index range, and the index values are assigned to the addresses accordingly. For example, you precalculated three gas pump addresses with a range of index values from 3 to 5\. The first address in the returned arrray is assigned the index value "3", the second one - "4", and the third one - "5".

` [ "0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea", // index is 3 "0x5c6079c14e9cd3d2ea8cb76aed9c5e336ef96126", // index is 4 "0xc5e336ef9612614e9cd3d2ea8cb76aed95c6079c" // index is 5 ] ` 

**The owner of the gas pump addresses** The owner (also referred to as "master address") is the blockchain address that will own the precalculated gas pump addresses. The owner will also be paying gas fees for operations made on the gas pump addresses. You have to make sure that the owner always has enough funds to cover these gas fees.

**Activated and not activated addresses** The precalculated addresses can be immediately assigned to customers and can **receive** funds. However, they cannot be used to **send** funds to other addresses. This is because the addresses are not activated. To make the addresses be able to send funds, [activate them](https://apidoc.tatum.io/tag/Gas-pump/#operation/activategaspumpaddresses).

[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWallet()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWallet.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer an asset from a gas pump address

**2 credits per API call**

Transfer (send) an asset from a gas pump address to the other address.

This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer an asset to some address on the blockchain.

The gas fee for sending the asset will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.

To be able to send the asset:

* The gas pump address must be [activated](https://apidoc.tatum.io/tag/Gas-pump/#operation/activategaspumpaddresses). To check whether the gas pump address is activated, use [this API](https://apidoc.tatum.io/tag/Gas-pump/#operation/gaspumpaddressesactivatedornot).
* The gas pump address must be the owner of the asset.

With this API, you can send only one asset per API call. If you want to send multiple assets, use the [API for transferring multiple assets from a gas pump account](https://apidoc.tatum.io/tag/Gas-pump/#operation/transfercustodialwalletbatch).

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* TRON
* XinFin

**Signing a transaction** When transferring an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletBatch()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletBatch.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatch.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer multiple assets from a gas pump address

**2 credits per API call**

Transfer (send) multiple assets from a gas pump address to one or more addresses.

This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer multiple assets to one or more addresses on the blockchain.

The gas fee for sending the assets will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.

To be able to send the assets:

* The gas pump address must be [activated](https://apidoc.tatum.io/tag/Gas-pump/#operation/activategaspumpaddresses). To check whether the gas pump address is activated, use [this API](https://apidoc.tatum.io/tag/Gas-pump/#operation/gaspumpaddressesactivatedornot).
* The gas pump address must be the owner of the assets.

If you want to send only one asset, you can also use the [API for transferring an asset from a gas pump account](https://apidoc.tatum.io/tag/Gas-pump/#operation/transfercustodialwallet).

This API is supported for the following blockchains:

* BNB Smart Chain
* Celo
* Ethereum
* Harmony
* Klaytn
* Polygon
* TRON
* XinFin

**Signing a transaction** When transferring assets, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum [Key Management System (KMS)](https://github.com/tatumio/tatum-kms) and provide the signature ID instead of the private key in the API. Alternatively, you can use the [Tatum JavaScript client](https://github.com/tatumio/tatum-js).

[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletBatchCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletBatchCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchCelo.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer multiple assets from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletBatchCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletBatchCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchCeloKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer multiple assets from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletBatchKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletBatchKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer multiple assets from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletBatchTron()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletBatchTron.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchTron.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer multiple assets from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletBatchTronKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletBatchTronKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletBatchTronKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer multiple assets from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletCelo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletCelo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletCelo.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer an asset from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletCeloKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletCeloKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletCeloKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer an asset from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer an asset from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletTron()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletTron.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletTron.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer an asset from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---


## `transferCustodialWalletTronKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **transferCustodialWalletTronKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/GasPumpApi/transferCustodialWalletTronKMS.php){: .btn .btn-green .mt-4}

### Request

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

> Transfer an asset from a gas pump address



[Back to top](#top){: .btn .btn-purple }

---
