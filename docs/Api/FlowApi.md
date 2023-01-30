---
title: Flow
parent: API
layout: page
---

# Api/FlowApi

[Flow API Reference](https://apidoc.tatum.io/tag/Flow/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->flow();

// TestNet API Call
$sdk->testnet()->api()->flow();
```

## Methods

Method | Description
------------- | -------------
[**flowAddPubKeyMnemonic()**](#flowaddpubkeymnemonic) | Add public key to Flow address
[**flowAddPubKeySecret()**](#flowaddpubkeysecret) | Add public key to Flow address
[**flowAddPubKeySecretKMS()**](#flowaddpubkeysecretkms) | Add public key to Flow address
[**flowCreateAddressFromPubKeyKMS()**](#flowcreateaddressfrompubkeykms) | Create Flow address from public key
[**flowCreateAddressFromPubKeyMnemonic()**](#flowcreateaddressfrompubkeymnemonic) | Create Flow address from public key
[**flowCreateAddressFromPubKeySecret()**](#flowcreateaddressfrompubkeysecret) | Create Flow address from public key
[**flowCustomTransactionKMS()**](#flowcustomtransactionkms) | Send arbitrary transaction to blockchain
[**flowCustomTransactionMnemonic()**](#flowcustomtransactionmnemonic) | Send arbitrary transaction to blockchain
[**flowCustomTransactionPK()**](#flowcustomtransactionpk) | Send arbitrary transaction to blockchain
[**flowGenerateAddress()**](#flowgenerateaddress) | Generate Flow address from Extended public key
[**flowGeneratePubKey()**](#flowgeneratepubkey) | Generate Flow public key from Extended public key
[**flowGeneratePubKeyPrivateKey()**](#flowgeneratepubkeyprivatekey) | Generate Flow private key
[**flowGenerateWallet()**](#flowgeneratewallet) | Generate Flow wallet
[**flowGetAccount()**](#flowgetaccount) | Get the balance of a Flow account
[**flowGetBlock()**](#flowgetblock) | Get Flow Block by hash or height
[**flowGetBlockChainInfo()**](#flowgetblockchaininfo) | Get Flow current block number
[**flowGetBlockEvents()**](#flowgetblockevents) | Get Flow events from blocks
[**flowGetRawTransaction()**](#flowgetrawtransaction) | Get Flow Transaction by hash
[**flowTransactionKMS()**](#flowtransactionkms) | Send Flow to blockchain addresses
[**flowTransactionMnemonic()**](#flowtransactionmnemonic) | Send Flow to blockchain addresses
[**flowTransactionPK()**](#flowtransactionpk) | Send Flow to blockchain addresses


## `flowAddPubKeyMnemonic()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowAddPubKeyMnemonic.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowAddPubKeyMnemonic.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/flow/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowAddPubKeyMnemonic(
    \Tatum\Model\FlowAddPubKeyMnemonic $flow_add_pub_key_mnemonic
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_add_pub_key_mnemonic** | [**\Tatum\Model\FlowAddPubKeyMnemonic**](../../Model/FlowAddPubKeyMnemonic) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Add public key to Flow address

#### 100 credits per API call. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.

Add public key to existing Flow blockchain addresses. Private key for that public key can be used for signing transaction. There are two possibilites how the transaction on the blockchain can be created: 
* Using mnemonic and index - private key is generated based on the index in the mnemonic.
* Using secret - private keys is entered manually.
 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, [Tatum KMS](https://github.com/tatumio/tatum-kms) should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top){: .btn .btn-purple }

---


## `flowAddPubKeySecret()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowAddPubKeySecret.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowAddPubKeySecret.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/flow/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowAddPubKeySecret(
    \Tatum\Model\FlowAddPubKeySecret $flow_add_pub_key_secret
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_add_pub_key_secret** | [**\Tatum\Model\FlowAddPubKeySecret**](../../Model/FlowAddPubKeySecret) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Add public key to Flow address



[Back to top](#top){: .btn .btn-purple }

---


## `flowAddPubKeySecretKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowAddPubKeySecretKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowAddPubKeySecretKMS.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/v3/flow/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowAddPubKeySecretKMS(
    \Tatum\Model\FlowAddPubKeySecretKMS $flow_add_pub_key_secret_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_add_pub_key_secret_kms** | [**\Tatum\Model\FlowAddPubKeySecretKMS**](../../Model/FlowAddPubKeySecretKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Add public key to Flow address



[Back to top](#top){: .btn .btn-purple }

---


## `flowCreateAddressFromPubKeyKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowCreateAddressFromPubKeyKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowCreateAddressFromPubKeyKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowCreateAddressFromPubKeyKMS(
    \Tatum\Model\FlowCreateAddressFromPubKeyKMS $flow_create_address_from_pub_key_kms
): \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_create_address_from_pub_key_kms** | [**\Tatum\Model\FlowCreateAddressFromPubKeyKMS**](../../Model/FlowCreateAddressFromPubKeyKMS) |  |

### Return type

[**\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response**](../../Model/FlowCreateAddressFromPubKeyMnemonic200Response)

### Description

> Create Flow address from public key



[Back to top](#top){: .btn .btn-purple }

---


## `flowCreateAddressFromPubKeyMnemonic()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowCreateAddressFromPubKeyMnemonic.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowCreateAddressFromPubKeyMnemonic.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowCreateAddressFromPubKeyMnemonic(
    \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic $flow_create_address_from_pub_key_mnemonic
): \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_create_address_from_pub_key_mnemonic** | [**\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic**](../../Model/FlowCreateAddressFromPubKeyMnemonic) |  |

### Return type

[**\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response**](../../Model/FlowCreateAddressFromPubKeyMnemonic200Response)

### Description

> Create Flow address from public key

#### 100 credits per API call. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.

Create Flow blockchain addresses from public key. This will generate address on the blockchain with public key. Private key for that public key can be used for signing transaction. There are two possibilites how the transaction on the blockchain can be created: 
* Using mnemonic and index - private key is generated based on the index in the mnemonic.
* Using secret - private keys is entered manually.
 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, [Tatum KMS](https://github.com/tatumio/tatum-kms) should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top){: .btn .btn-purple }

---


## `flowCreateAddressFromPubKeySecret()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowCreateAddressFromPubKeySecret.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowCreateAddressFromPubKeySecret.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/account`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowCreateAddressFromPubKeySecret(
    \Tatum\Model\FlowCreateAddressFromPubKeySecret $flow_create_address_from_pub_key_secret
): \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_create_address_from_pub_key_secret** | [**\Tatum\Model\FlowCreateAddressFromPubKeySecret**](../../Model/FlowCreateAddressFromPubKeySecret) |  |

### Return type

[**\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response**](../../Model/FlowCreateAddressFromPubKeyMnemonic200Response)

### Description

> Create Flow address from public key



[Back to top](#top){: .btn .btn-purple }

---


## `flowCustomTransactionKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowCustomTransactionKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowCustomTransactionKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/transaction/custom`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowCustomTransactionKMS(
    \Tatum\Model\FlowCustomTransactionKMS $flow_custom_transaction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_custom_transaction_kms** | [**\Tatum\Model\FlowCustomTransactionKMS**](../../Model/FlowCustomTransactionKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send arbitrary transaction to blockchain



[Back to top](#top){: .btn .btn-purple }

---


## `flowCustomTransactionMnemonic()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowCustomTransactionMnemonic.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowCustomTransactionMnemonic.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/transaction/custom`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowCustomTransactionMnemonic(
    \Tatum\Model\FlowCustomTransactionMnemonic $flow_custom_transaction_mnemonic
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_custom_transaction_mnemonic** | [**\Tatum\Model\FlowCustomTransactionMnemonic**](../../Model/FlowCustomTransactionMnemonic) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send arbitrary transaction to blockchain

#### 100 credits per API call.

Send arbitrary blockchain transaction to FLOW blockchain. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans. There are two possibilites how the transaction on the blockchain can be created: 
* Using mnemonic and index - private key is generated based on the index in the mnemonic.
* Using secret - private keys is entered manually.
 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, [Tatum KMS](https://github.com/tatumio/tatum-kms) should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top){: .btn .btn-purple }

---


## `flowCustomTransactionPK()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowCustomTransactionPK.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowCustomTransactionPK.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/transaction/custom`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowCustomTransactionPK(
    \Tatum\Model\FlowCustomTransactionPK $flow_custom_transaction_pk
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_custom_transaction_pk** | [**\Tatum\Model\FlowCustomTransactionPK**](../../Model/FlowCustomTransactionPK) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send arbitrary transaction to blockchain



[Back to top](#top){: .btn .btn-purple }

---


## `flowGenerateAddress()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowGenerateAddress.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowGenerateAddress.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/flow/address/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\FlowGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\FlowGenerateAddress200Response**](../../Model/FlowGenerateAddress200Response)

### Description

> Generate Flow address from Extended public key

#### 1 credit for GET operation + 3000 credits per address.

Generate Flow address from Extended public key. This operation internally creates public key and assings it to the newly created address on the blockchain. There is minimal amount, which must be sent to the FLOW address during creation - 0.001 FLOW, which will be used from Tatum service account.**This operation is allowed on any Testnet plan and only on Paid Mainnet plans.** Public key is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.

[Back to top](#top){: .btn .btn-purple }

---


## `flowGeneratePubKey()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowGeneratePubKey.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowGeneratePubKey.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/flow/pubkey/{xpub}/{index}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowGeneratePubKey(
    string $xpub,
    float $index
): \Tatum\Model\FlowGeneratePubKey200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\FlowGeneratePubKey200Response**](../../Model/FlowGeneratePubKey200Response)

### Description

> Generate Flow public key from Extended public key

#### 1 credit per API call.

Generate Flow public key from Extended public key. This key is added to the address on the blockchain and can control the funds there. Public key is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.

[Back to top](#top){: .btn .btn-purple }

---


## `flowGeneratePubKeyPrivateKey()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowGeneratePubKeyPrivateKey.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowGeneratePubKeyPrivateKey.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/wallet/priv`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowGeneratePubKeyPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../../Model/PrivKeyRequest) |  |

### Return type

[**\Tatum\Model\PrivKey**](../../Model/PrivKey)

### Description

> Generate Flow private key

#### 2 credits per API call.

Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.

[Back to top](#top){: .btn .btn-purple }

---


## `flowGenerateWallet()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowGenerateWallet.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowGenerateWallet.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/flow/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../../Model/Wallet)

### Description

> Generate Flow wallet

#### 1 credit per API call.

Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys. Each address is identified by 3 main values:
* Private Key - your secret value, which should never be revealed
* Public Key - public address to be published
* Derivation index - index of generated address

Tatum follows BIP44 specification and generates for Dogecoin wallet with derivation path m'/44'/3'/0'/0\. More about BIP44 HD wallets can be found here - [https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki](https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki). Generate BIP44 compatible Dogecoin wallet.

[Back to top](#top){: .btn .btn-purple }

---


## `flowGetAccount()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowGetAccount.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowGetAccount.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/flow/account/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowGetAccount(
    string $address
): \Tatum\Model\FlowAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\FlowAccount**](../../Model/FlowAccount)

### Description

> Get the balance of a Flow account

#### 1 credit per API call.

Get Flow account details.

[Back to top](#top){: .btn .btn-purple }

---


## `flowGetBlock()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowGetBlock.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowGetBlock.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/flow/block/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowGetBlock(
    string $hash
): \Tatum\Model\FlowBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\FlowBlock**](../../Model/FlowBlock)

### Description

> Get Flow Block by hash or height

#### 1 credit per API call.

Get Flow Block detail by block hash or height.

[Back to top](#top){: .btn .btn-purple }

---


## `flowGetBlockChainInfo()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowGetBlockChainInfo.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowGetBlockChainInfo.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/flow/block/current`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowGetBlockChainInfo(): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

> Get Flow current block number

#### 1 credit per API call.

Get Flow current block number.

[Back to top](#top){: .btn .btn-purple }

---


## `flowGetBlockEvents()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowGetBlockEvents.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowGetBlockEvents.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/flow/block/events`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowGetBlockEvents(
    string $type,
    float $from,
    float $to
): \Tatum\Model\FlowEvent[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$type** | **string**  | Event type to search for |
 **$from** | **float**  | Block height to start searching |
 **$to** | **float**  | Block height to end searching |

### Return type

[**\Tatum\Model\FlowEvent[]**](../../Model/FlowEvent)

### Description

> Get Flow events from blocks

#### 1 credit per API call.

Get Flow events from block.

[Back to top](#top){: .btn .btn-purple }

---


## `flowGetRawTransaction()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowGetRawTransaction.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowGetRawTransaction.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/v3/flow/transaction/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowGetRawTransaction(
    string $hash
): \Tatum\Model\FlowTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\FlowTx**](../../Model/FlowTx)

### Description

> Get Flow Transaction by hash

#### 1 credit per API call.

Get Flow Transaction detail by transaction hash.

[Back to top](#top){: .btn .btn-purple }

---


## `flowTransactionKMS()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowTransactionKMS.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowTransactionKMS.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowTransactionKMS(
    \Tatum\Model\FlowTransactionKMS $flow_transaction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_transaction_kms** | [**\Tatum\Model\FlowTransactionKMS**](../../Model/FlowTransactionKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send Flow to blockchain addresses



[Back to top](#top){: .btn .btn-purple }

---


## `flowTransactionMnemonic()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowTransactionMnemonic.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowTransactionMnemonic.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowTransactionMnemonic(
    \Tatum\Model\FlowTransactionMnemonic $flow_transaction_mnemonic
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_transaction_mnemonic** | [**\Tatum\Model\FlowTransactionMnemonic**](../../Model/FlowTransactionMnemonic) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send Flow to blockchain addresses

#### 100 credits per API call.

Send Flow or FUSD to blockchain addresses. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans. There are two possibilites how the transaction on the blockchain can be created: 
* Using mnemonic and index - private key is generated based on the index in the mnemonic.
* Using secret - private keys is entered manually.
 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, [Tatum KMS](https://github.com/tatumio/tatum-kms) should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

[Back to top](#top){: .btn .btn-purple }

---


## `flowTransactionPK()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **flowTransactionPK.php**](https://github.com/tatumio/tatum-php/blob/master/examples/Api/FlowApi/flowTransactionPK.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/v3/flow/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->flow()->flowTransactionPK(
    \Tatum\Model\FlowTransactionPK $flow_transaction_pk
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_transaction_pk** | [**\Tatum\Model\FlowTransactionPK**](../../Model/FlowTransactionPK) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

> Send Flow to blockchain addresses



[Back to top](#top){: .btn .btn-purple }

---
