# Tatum/Api/CardanoApi

* Cardano [documentation](https://apidoc.tatum.io/tag/Cardano/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**ada Broadcast()**](#adabroadcast) | **POST** `/v3 /ada /broadcast` | Broadcast signed Ada transaction
[**ada Generate Address()**](#adagenerateaddress) | **GET** `/v3 /ada /address /{xpub} /{index}` | Generate Ada deposit address from Extended public key
[**ada Generate Address Private Key()**](#adagenerateaddressprivatekey) | **POST** `/v3 /ada /wallet /priv` | Generate Ada private key
[**ada Generate Wallet()**](#adageneratewallet) | **GET** `/v3 /ada /wallet` | Generate Ada wallet
[**ada Get Account()**](#adagetaccount) | **GET** `/v3 /ada /account /{address}` | Gets a Ada account by address
[**ada Get Block()**](#adagetblock) | **GET** `/v3 /ada /block /{hash}` | Get Block by hash or height
[**ada Get Block Chain Info()**](#adagetblockchaininfo) | **GET** `/v3 /ada /info` | Get Blockchain information
[**ada Get Raw Transaction()**](#adagetrawtransaction) | **GET** `/v3 /ada /transaction /{hash}` | Get transaction by hash
[**ada Get Tx By Address()**](#adagettxbyaddress) | **GET** `/v3 /ada /transaction /address /{address}` | Get transactions by address
[**ada Get UTXOBy Address()**](#adagetutxobyaddress) | **GET** `/v3 /ada /{address} /utxos` | Get UTXOs by address
[**ada Transaction From Address()**](#adatransactionfromaddress) | **POST** `/v3 /ada /transaction` | Send ADA to Cardano addresses
[**ada Transaction From Address KMS()**](#adatransactionfromaddresskms) | **POST** `/v3 /ada /transaction` | Send ADA to Cardano addresses
[**ada Transaction From UTXO()**](#adatransactionfromutxo) | **POST** `/v3 /ada /transaction` | Send ADA to Cardano addresses
[**ada Transaction From UTXOKMS()**](#adatransactionfromutxokms) | **POST** `/v3 /ada /transaction` | Send ADA to Cardano addresses


## `adaBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed Ada transaction

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>2 credits per API call.</h4> <p>Broadcasts a signed transaction to the Ada blockchain. This method is used internally from Tatum KMS or Tatum Client Libraries. It is possible to create a custom signing mechanism and only use this method for broadcasting data to the blockchain.</p>

### Example

[✨ View "adaBroadcast.php"](../../examples/Api/CardanoApi/adaBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\AdaGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of a wallet. |
 **$index** | **float**  | Derivation index of the desired address to be generated. |

### Return type

[**\Tatum\Model\AdaGenerateAddress200Response**](../Model/AdaGenerateAddress200Response.md)

### Description

Generate Ada deposit address from Extended public key

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>1 credit per API call.</h4> <p>Generates a Ada deposit address from an Extended public key. The deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "adaGenerateAddress.php"](../../examples/Api/CardanoApi/adaGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGenerateAddressPrivateKey(
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

Generate Ada private key

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>1 credit per API call.</h4> <p>Generates a private key for an address from a mnemonic for a given derivation path index. The private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "adaGenerateAddressPrivateKey.php"](../../examples/Api/CardanoApi/adaGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGenerateWallet(
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

Generate Ada wallet

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>1 credit per API call.</h4><p>Tatum supports BIP44 HD wallets. Because they can generate 2^31 addresses from 1 mnemonic phrase, they are very convenient and secure. A mnemonic phrase consists of 24 special words in a defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for ADA wallet with derivation path m/1852'/1815'/0'. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Ada wallet.</p>

### Example

[✨ View "adaGenerateWallet.php"](../../examples/Api/CardanoApi/adaGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaGetAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetAccount(
    string $address
): array[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |

### Return type

**array[]**

### Description

Gets a Ada account by address

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <h4>2 credits per API call.</h4> <p>Gets a Ada account by address.</p>

### Example

[✨ View "adaGetAccount.php"](../../examples/Api/CardanoApi/adaGetAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetBlock(
    string $hash
): \Tatum\Model\AdaBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\AdaBlock**](../Model/AdaBlock.md)

### Description

Get Block by hash or height

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Gets Ada block detail by block hash or height.</p>

### Example

[✨ View "adaGetBlock.php"](../../examples/Api/CardanoApi/adaGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaGetBlockChainInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetBlockChainInfo(
): \Tatum\Model\AdaInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\AdaInfo**](../Model/AdaInfo.md)

### Description

Get Blockchain information

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Gets Ada blockchain information. Obtains basic info like the testnet / mainnet version of the chain, the current block number and its hash.</p>

### Example

[✨ View "adaGetBlockChainInfo.php"](../../examples/Api/CardanoApi/adaGetBlockChainInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaGetRawTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetRawTransaction(
    string $hash
): \Tatum\Model\AdaTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\AdaTx**](../Model/AdaTx.md)

### Description

Get transaction by hash

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Get Ada Transaction detail by transaction hash.</p>

### Example

[✨ View "adaGetRawTransaction.php"](../../examples/Api/CardanoApi/adaGetRawTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaGetTxByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetTxByAddress(
    string $address,
    float $page_size,
    [ float $offset ]
): \Tatum\Model\AdaTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]

### Return type

[**\Tatum\Model\AdaTx[]**](../Model/AdaTx.md)

### Description

Get transactions by address

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Gets a Ada transaction by address.</p>

### Example

[✨ View "adaGetTxByAddress.php"](../../examples/Api/CardanoApi/adaGetTxByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaGetUTXOByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaGetUTXOByAddress(
    string $address
): \Tatum\Model\AdaUTXO[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |

### Return type

[**\Tatum\Model\AdaUTXO[]**](../Model/AdaUTXO.md)

### Description

Get UTXOs by address

<p><b>Support for Cardano is deprecated.<br/>You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/><h4>1 credit per API call.</h4><p>Gets a Ada UTXOs by address.</p>

### Example

[✨ View "adaGetUTXOByAddress.php"](../../examples/Api/CardanoApi/adaGetUTXOByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaTransactionFromAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaTransactionFromAddress(
    \Tatum\Model\AdaTransactionFromAddress $ada_transaction_from_address
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transaction_from_address** | [**\Tatum\Model\AdaTransactionFromAddress**](../Model/AdaTransactionFromAddress.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send ADA to Cardano addresses

<p><b>Support for Cardano is deprecated.<br/> You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.</b></p><br/> <p><b>2 credits per API call</b></p> <p>Send ADA to blockchain addresses.</p> <p>Cardano transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of ADA that remains at a Cardano address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.</p> <p>You can build an ADA transaction by one of the following methods:</p> <ul> <li><b>Sending ADA from blockchain addresses</b><br/>The assets are sent from a list of addresses. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. For easier control over the assets to be sent, we recommend that you use this method only if you have one address to send the assets from.<br/> To use this method, use the <code>AdaTransactionFromAddress</code> or <code>AdaTransactionFromAddressKMS</code> schema of the request body.</li> <li><b>Sending ADA from UTXOs</b><br/>The assets are sent from a list of UTXOs. Each UTXO is included in the transaction. Use this method if you want to manually calculate the amount to send.<br/> To use this method, use the <code>AdaTransactionFromUTXO</code> or <code>AdaTransactionFromUTXOKMS</code> schema of the request body.</li> </ul> <p>When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 ADA and T2 with 2 ADA. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 ADA to spend:<br/><code>1 ADA (from T1) + 2 ADA (from T2) = 3 ADA (to spend in total)</code></p> <p>You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.</p> <p><b>Paying the gas fee and receiving the change</b><br/> When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).</p> <p><b>Signing a transaction</b><br/> When sending ADA, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "adaTransactionFromAddress.php"](../../examples/Api/CardanoApi/adaTransactionFromAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaTransactionFromAddressKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaTransactionFromAddressKMS(
    \Tatum\Model\AdaTransactionFromAddressKMS $ada_transaction_from_address_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transaction_from_address_kms** | [**\Tatum\Model\AdaTransactionFromAddressKMS**](../Model/AdaTransactionFromAddressKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send ADA to Cardano addresses

AdaTransactionFromAddressKMS operation

### Example

[✨ View "adaTransactionFromAddressKMS.php"](../../examples/Api/CardanoApi/adaTransactionFromAddressKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaTransactionFromUTXO()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaTransactionFromUTXO(
    \Tatum\Model\AdaTransactionFromUTXO $ada_transaction_from_utxo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transaction_from_utxo** | [**\Tatum\Model\AdaTransactionFromUTXO**](../Model/AdaTransactionFromUTXO.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send ADA to Cardano addresses

AdaTransactionFromUTXO operation

### Example

[✨ View "adaTransactionFromUTXO.php"](../../examples/Api/CardanoApi/adaTransactionFromUTXO.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `adaTransactionFromUTXOKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->cardano()->adaTransactionFromUTXOKMS(
    \Tatum\Model\AdaTransactionFromUTXOKMS $ada_transaction_from_utxokms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transaction_from_utxokms** | [**\Tatum\Model\AdaTransactionFromUTXOKMS**](../Model/AdaTransactionFromUTXOKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send ADA to Cardano addresses

AdaTransactionFromUTXOKMS operation

### Example

[✨ View "adaTransactionFromUTXOKMS.php"](../../examples/Api/CardanoApi/adaTransactionFromUTXOKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
