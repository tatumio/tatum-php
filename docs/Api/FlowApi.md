# Tatum/Api/FlowApi

* Flow [documentation](https://apidoc.tatum.io/tag/Flow/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**flow Add Pub Key Mnemonic()**](#flowaddpubkeymnemonic) | **PUT** `/v3 /flow /account` | Add public key to Flow address
[**flow Add Pub Key Secret()**](#flowaddpubkeysecret) | **PUT** `/v3 /flow /account` | Add public key to Flow address
[**flow Add Pub Key Secret KMS()**](#flowaddpubkeysecretkms) | **PUT** `/v3 /flow /account` | Add public key to Flow address
[**flow Create Address From Pub Key KMS()**](#flowcreateaddressfrompubkeykms) | **POST** `/v3 /flow /account` | Create Flow address from public key
[**flow Create Address From Pub Key Mnemonic()**](#flowcreateaddressfrompubkeymnemonic) | **POST** `/v3 /flow /account` | Create Flow address from public key
[**flow Create Address From Pub Key Secret()**](#flowcreateaddressfrompubkeysecret) | **POST** `/v3 /flow /account` | Create Flow address from public key
[**flow Custom Transaction KMS()**](#flowcustomtransactionkms) | **POST** `/v3 /flow /transaction /custom` | Send arbitrary transaction to blockchain
[**flow Custom Transaction Mnemonic()**](#flowcustomtransactionmnemonic) | **POST** `/v3 /flow /transaction /custom` | Send arbitrary transaction to blockchain
[**flow Custom Transaction PK()**](#flowcustomtransactionpk) | **POST** `/v3 /flow /transaction /custom` | Send arbitrary transaction to blockchain
[**flow Generate Address()**](#flowgenerateaddress) | **GET** `/v3 /flow /address /{xpub} /{index}` | Generate Flow address from Extended public key
[**flow Generate Pub Key()**](#flowgeneratepubkey) | **GET** `/v3 /flow /pubkey /{xpub} /{index}` | Generate Flow public key from Extended public key
[**flow Generate Pub Key Private Key()**](#flowgeneratepubkeyprivatekey) | **POST** `/v3 /flow /wallet /priv` | Generate Flow private key
[**flow Generate Wallet()**](#flowgeneratewallet) | **GET** `/v3 /flow /wallet` | Generate Flow wallet
[**flow Get Account()**](#flowgetaccount) | **GET** `/v3 /flow /account /{address}` | Get the balance of a Flow account
[**flow Get Block()**](#flowgetblock) | **GET** `/v3 /flow /block /{hash}` | Get Flow Block by hash or height
[**flow Get Block Chain Info()**](#flowgetblockchaininfo) | **GET** `/v3 /flow /block /current` | Get Flow current block number
[**flow Get Block Events()**](#flowgetblockevents) | **GET** `/v3 /flow /block /events` | Get Flow events from blocks
[**flow Get Raw Transaction()**](#flowgetrawtransaction) | **GET** `/v3 /flow /transaction /{hash}` | Get Flow Transaction by hash
[**flow Transaction KMS()**](#flowtransactionkms) | **POST** `/v3 /flow /transaction` | Send Flow to blockchain addresses
[**flow Transaction Mnemonic()**](#flowtransactionmnemonic) | **POST** `/v3 /flow /transaction` | Send Flow to blockchain addresses
[**flow Transaction PK()**](#flowtransactionpk) | **POST** `/v3 /flow /transaction` | Send Flow to blockchain addresses


## `flowAddPubKeyMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowAddPubKeyMnemonic(
    \Tatum\Model\FlowAddPubKeyMnemonic $flow_add_pub_key_mnemonic
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_add_pub_key_mnemonic** | [**\Tatum\Model\FlowAddPubKeyMnemonic**](../Model/FlowAddPubKeyMnemonic.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Add public key to Flow address

<h4>100 credits per API call. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.</h4><br/> <p>Add public key to existing Flow blockchain addresses. Private key for that public key can be used for signing transaction. There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul><br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "flowAddPubKeyMnemonic.php"](../../examples/Api/FlowApi/flowAddPubKeyMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowAddPubKeySecret()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowAddPubKeySecret(
    \Tatum\Model\FlowAddPubKeySecret $flow_add_pub_key_secret
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_add_pub_key_secret** | [**\Tatum\Model\FlowAddPubKeySecret**](../Model/FlowAddPubKeySecret.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Add public key to Flow address

FlowAddPubKeySecret operation

### Example

[✨ View "flowAddPubKeySecret.php"](../../examples/Api/FlowApi/flowAddPubKeySecret.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowAddPubKeySecretKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowAddPubKeySecretKMS(
    \Tatum\Model\FlowAddPubKeySecretKMS $flow_add_pub_key_secret_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_add_pub_key_secret_kms** | [**\Tatum\Model\FlowAddPubKeySecretKMS**](../Model/FlowAddPubKeySecretKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Add public key to Flow address

FlowAddPubKeySecretKMS operation

### Example

[✨ View "flowAddPubKeySecretKMS.php"](../../examples/Api/FlowApi/flowAddPubKeySecretKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowCreateAddressFromPubKeyKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowCreateAddressFromPubKeyKMS(
    \Tatum\Model\FlowCreateAddressFromPubKeyKMS $flow_create_address_from_pub_key_kms
): \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_create_address_from_pub_key_kms** | [**\Tatum\Model\FlowCreateAddressFromPubKeyKMS**](../Model/FlowCreateAddressFromPubKeyKMS.md) |  |

### Return type

[**\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response**](../Model/FlowCreateAddressFromPubKeyMnemonic200Response.md)

### Description

Create Flow address from public key

FlowCreateAddressFromPubKeyKMS operation

### Example

[✨ View "flowCreateAddressFromPubKeyKMS.php"](../../examples/Api/FlowApi/flowCreateAddressFromPubKeyKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowCreateAddressFromPubKeyMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowCreateAddressFromPubKeyMnemonic(
    \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic $flow_create_address_from_pub_key_mnemonic
): \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_create_address_from_pub_key_mnemonic** | [**\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic**](../Model/FlowCreateAddressFromPubKeyMnemonic.md) |  |

### Return type

[**\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response**](../Model/FlowCreateAddressFromPubKeyMnemonic200Response.md)

### Description

Create Flow address from public key

<h4>100 credits per API call. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.</h4><br/> <p>Create Flow blockchain addresses from public key. This will generate address on the blockchain with public key. Private key for that public key can be used for signing transaction. There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul><br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "flowCreateAddressFromPubKeyMnemonic.php"](../../examples/Api/FlowApi/flowCreateAddressFromPubKeyMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowCreateAddressFromPubKeySecret()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowCreateAddressFromPubKeySecret(
    \Tatum\Model\FlowCreateAddressFromPubKeySecret $flow_create_address_from_pub_key_secret
): \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_create_address_from_pub_key_secret** | [**\Tatum\Model\FlowCreateAddressFromPubKeySecret**](../Model/FlowCreateAddressFromPubKeySecret.md) |  |

### Return type

[**\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response**](../Model/FlowCreateAddressFromPubKeyMnemonic200Response.md)

### Description

Create Flow address from public key

FlowCreateAddressFromPubKeySecret operation

### Example

[✨ View "flowCreateAddressFromPubKeySecret.php"](../../examples/Api/FlowApi/flowCreateAddressFromPubKeySecret.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowCustomTransactionKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowCustomTransactionKMS(
    \Tatum\Model\FlowCustomTransactionKMS $flow_custom_transaction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_custom_transaction_kms** | [**\Tatum\Model\FlowCustomTransactionKMS**](../Model/FlowCustomTransactionKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send arbitrary transaction to blockchain

FlowCustomTransactionKMS operation

### Example

[✨ View "flowCustomTransactionKMS.php"](../../examples/Api/FlowApi/flowCustomTransactionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowCustomTransactionMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowCustomTransactionMnemonic(
    \Tatum\Model\FlowCustomTransactionMnemonic $flow_custom_transaction_mnemonic
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_custom_transaction_mnemonic** | [**\Tatum\Model\FlowCustomTransactionMnemonic**](../Model/FlowCustomTransactionMnemonic.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send arbitrary transaction to blockchain

<h4>100 credits per API call.</h4><br/> <p>Send arbitrary blockchain transaction to FLOW blockchain. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.<br/> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul><br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "flowCustomTransactionMnemonic.php"](../../examples/Api/FlowApi/flowCustomTransactionMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowCustomTransactionPK()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowCustomTransactionPK(
    \Tatum\Model\FlowCustomTransactionPK $flow_custom_transaction_pk
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_custom_transaction_pk** | [**\Tatum\Model\FlowCustomTransactionPK**](../Model/FlowCustomTransactionPK.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send arbitrary transaction to blockchain

FlowCustomTransactionPK operation

### Example

[✨ View "flowCustomTransactionPK.php"](../../examples/Api/FlowApi/flowCustomTransactionPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowGenerateAddress(
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

[**\Tatum\Model\FlowGenerateAddress200Response**](../Model/FlowGenerateAddress200Response.md)

### Description

Generate Flow address from Extended public key

<h4>1 credit for GET operation + 3000 credits per address.</h4><br/> <p>Generate Flow address from Extended public key. This operation internally creates public key and assings it to the newly created address on the blockchain. There is minimal amount, which must be sent to the FLOW address during creation - 0.001 FLOW, which will be used from Tatum service account.<br/> <b>This operation is allowed on any Testnet plan and only on Paid Mainnet plans.</b> Public key is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "flowGenerateAddress.php"](../../examples/Api/FlowApi/flowGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowGeneratePubKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowGeneratePubKey(
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

[**\Tatum\Model\FlowGeneratePubKey200Response**](../Model/FlowGeneratePubKey200Response.md)

### Description

Generate Flow public key from Extended public key

<h4>1 credit per API call.</h4><br/> <p>Generate Flow public key from Extended public key. This key is added to the address on the blockchain and can control the funds there. Public key is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "flowGeneratePubKey.php"](../../examples/Api/FlowApi/flowGeneratePubKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowGeneratePubKeyPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowGeneratePubKeyPrivateKey(
    \Tatum\Model\PrivKeyRequest $priv_key_request
): \Tatum\Model\PrivKey
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$priv_key_request** | [**\Tatum\Model\PrivKeyRequest**](../Model/PrivKeyRequest.md) |  |

### Return type

[**\Tatum\Model\PrivKey**](../Model/PrivKey.md)

### Description

Generate Flow private key

<h4>2 credits per API call.</h4><br/> <p>Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "flowGeneratePubKeyPrivateKey.php"](../../examples/Api/FlowApi/flowGeneratePubKeyPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowGenerateWallet(
    [ string $mnemonic ]
): \Tatum\Model\Wallet
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mnemonic** | **string**  | Mnemonic to use for generation of extended public and private keys. | [optional]

### Return type

[**\Tatum\Model\Wallet**](../Model/Wallet.md)

### Description

Generate Flow wallet

<h4>1 credit per API call.</h4><br/><p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Dogecoin wallet with derivation path m'/44'/3'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki">https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Dogecoin wallet.</p>

### Example

[✨ View "flowGenerateWallet.php"](../../examples/Api/FlowApi/flowGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowGetAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowGetAccount(
    string $address
): \Tatum\Model\FlowAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\FlowAccount**](../Model/FlowAccount.md)

### Description

Get the balance of a Flow account

<h4>1 credit per API call.</h4><br/><p>Get Flow account details.</p>

### Example

[✨ View "flowGetAccount.php"](../../examples/Api/FlowApi/flowGetAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowGetBlock(
    string $hash
): \Tatum\Model\FlowBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\FlowBlock**](../Model/FlowBlock.md)

### Description

Get Flow Block by hash or height

<h4>1 credit per API call.</h4><br/><p>Get Flow Block detail by block hash or height.</p>

### Example

[✨ View "flowGetBlock.php"](../../examples/Api/FlowApi/flowGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowGetBlockChainInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowGetBlockChainInfo(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get Flow current block number

<h4>1 credit per API call.</h4><br/><p>Get Flow current block number.</p>

### Example

[✨ View "flowGetBlockChainInfo.php"](../../examples/Api/FlowApi/flowGetBlockChainInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowGetBlockEvents()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowGetBlockEvents(
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

[**\Tatum\Model\FlowEvent[]**](../Model/FlowEvent.md)

### Description

Get Flow events from blocks

<h4>1 credit per API call.</h4><br/><p>Get Flow events from block.</p>

### Example

[✨ View "flowGetBlockEvents.php"](../../examples/Api/FlowApi/flowGetBlockEvents.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowGetRawTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowGetRawTransaction(
    string $hash
): \Tatum\Model\FlowTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\FlowTx**](../Model/FlowTx.md)

### Description

Get Flow Transaction by hash

<h4>1 credit per API call.</h4><br/><p>Get Flow Transaction detail by transaction hash.</p>

### Example

[✨ View "flowGetRawTransaction.php"](../../examples/Api/FlowApi/flowGetRawTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowTransactionKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowTransactionKMS(
    \Tatum\Model\FlowTransactionKMS $flow_transaction_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_transaction_kms** | [**\Tatum\Model\FlowTransactionKMS**](../Model/FlowTransactionKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send Flow to blockchain addresses

FlowTransactionKMS operation

### Example

[✨ View "flowTransactionKMS.php"](../../examples/Api/FlowApi/flowTransactionKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowTransactionMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowTransactionMnemonic(
    \Tatum\Model\FlowTransactionMnemonic $flow_transaction_mnemonic
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_transaction_mnemonic** | [**\Tatum\Model\FlowTransactionMnemonic**](../Model/FlowTransactionMnemonic.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send Flow to blockchain addresses

<h4>100 credits per API call.</h4><br/> <p>Send Flow or FUSD to blockchain addresses. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.<br/> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul><br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "flowTransactionMnemonic.php"](../../examples/Api/FlowApi/flowTransactionMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowTransactionPK()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->flow()->flowTransactionPK(
    \Tatum\Model\FlowTransactionPK $flow_transaction_pk
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_transaction_pk** | [**\Tatum\Model\FlowTransactionPK**](../Model/FlowTransactionPK.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send Flow to blockchain addresses

FlowTransactionPK operation

### Example

[✨ View "flowTransactionPK.php"](../../examples/Api/FlowApi/flowTransactionPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
