# Tatum/Api/BitcoinApi

## References

[Bitcoin API documentation](https://apidoc.tatum.io/tag/Bitcoin/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **btcBroadcast()**](#btcbroadcast) 

> **POST** `/v3/bitcoin/broadcast`
> 
> Broadcast a signed Bitcoin transaction

[🔹 **btcGenerateAddress()**](#btcgenerateaddress) 

> **GET** `/v3/bitcoin/address/{xpub}/{index}`
> 
> Generate a Bitcoin address from the wallet's extended public key

[🔹 **btcGenerateAddressPrivateKey()**](#btcgenerateaddressprivatekey) 

> **POST** `/v3/bitcoin/wallet/priv`
> 
> Generate the private key for a Bitcoin address

[🔹 **btcGenerateWallet()**](#btcgeneratewallet) 

> **GET** `/v3/bitcoin/wallet`
> 
> Generate a Bitcoin wallet

[🔹 **btcGetBalanceOfAddress()**](#btcgetbalanceofaddress) 

> **GET** `/v3/bitcoin/address/balance/{address}`
> 
> Get the balance of a Bitcoin address

[🔹 **btcGetBlock()**](#btcgetblock) 

> **GET** `/v3/bitcoin/block/{hash}`
> 
> Get a Bitcoin block by its hash or height

[🔹 **btcGetBlockChainInfo()**](#btcgetblockchaininfo) 

> **GET** `/v3/bitcoin/info`
> 
> Get Bitcoin blockchain information

[🔹 **btcGetBlockHash()**](#btcgetblockhash) 

> **GET** `/v3/bitcoin/block/hash/{i}`
> 
> Get the hash of a Bitcoin block

[🔹 **btcGetMempool()**](#btcgetmempool) 

> **GET** `/v3/bitcoin/mempool`
> 
> Get transactions from the Bitcoin mempool

[🔹 **btcGetRawTransaction()**](#btcgetrawtransaction) 

> **GET** `/v3/bitcoin/transaction/{hash}`
> 
> Get a Bitcoin transaction by its hash

[🔹 **btcGetTxByAddress()**](#btcgettxbyaddress) 

> **GET** `/v3/bitcoin/transaction/address/{address}`
> 
> Get all transactions for a Bitcoin address

[🔹 **btcGetUTXO()**](#btcgetutxo) 

> **GET** `/v3/bitcoin/utxo/{hash}/{index}`
> 
> Get information about a transaction output (UTXO) in a Bitcoin transaction

[🔹 **btcRpcDriver()**](#btcrpcdriver) 

> **POST** `/v3/bitcoin/node`
> 
> Connect to a Bitcoin node through an RPC driver

[🔹 **btcTransactionFromAddress()**](#btctransactionfromaddress) 

> **POST** `/v3/bitcoin/transaction`
> 
> Send BTC to Bitcoin addresses

[🔹 **btcTransactionFromAddressKMS()**](#btctransactionfromaddresskms) 

> **POST** `/v3/bitcoin/transaction`
> 
> Send BTC to Bitcoin addresses

[🔹 **btcTransactionFromUTXO()**](#btctransactionfromutxo) 

> **POST** `/v3/bitcoin/transaction`
> 
> Send BTC to Bitcoin addresses

[🔹 **btcTransactionFromUTXOKMS()**](#btctransactionfromutxokms) 

> **POST** `/v3/bitcoin/transaction`
> 
> Send BTC to Bitcoin addresses



## `btcBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcBroadcast(
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

Broadcast a signed Bitcoin transaction

<p><b>2 credits per API call</b></p> <p>Broadcasts a signed transaction to the Bitcoin blockchain. This method is used internally from Tatum KMS or Tatum Client Libraries. It is possible to create a custom signing mechanism and only use this method for broadcasting data to the blockchain.</p>

### Example

[✨ View "btcBroadcast.php"](../../examples/Api/BitcoinApi/btcBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\GeneratedAddressBtc
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of a wallet. |
 **$index** | **float**  | Derivation index of the desired address to be generated. |

### Return type

[**\Tatum\Model\GeneratedAddressBtc**](../Model/GeneratedAddressBtc.md)

### Description

Generate a Bitcoin address from the wallet's extended public key

<p><b>1 credit per API call</b></p> <p>Generate a Bitcoin address from the extended public key of the wallet. The address is generated for the specific index - each extended public key can generate up to 2^32 addresses with the index starting from 0 up to 2^31 - 1.</p>

### Example

[✨ View "btcGenerateAddress.php"](../../examples/Api/BitcoinApi/btcGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGenerateAddressPrivateKey(
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

Generate the private key for a Bitcoin address

<p><b>1 credit per API call</b></p> <p>Generates a private key for an address from a mnemonic for a given derivation path index. The private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "btcGenerateAddressPrivateKey.php"](../../examples/Api/BitcoinApi/btcGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGenerateWallet(
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

Generate a Bitcoin wallet

<p><b>1 credit per API call</b></p> <p>Tatum supports BIP44 HD wallets. Because they can generate 2^31 addresses from 1 mnemonic phrase, they are very convenient and secure. A mnemonic phrase consists of 24 special words in a defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Bitcoin wallet with derivation path m'/44'/0'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Bitcoin wallet.</p>

### Example

[✨ View "btcGenerateWallet.php"](../../examples/Api/BitcoinApi/btcGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGetBalanceOfAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGetBalanceOfAddress(
    string $address
): \Tatum\Model\BtcBasedBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | The blockchain address to get the balance for |

### Return type

[**\Tatum\Model\BtcBasedBalance**](../Model/BtcBasedBalance.md)

### Description

Get the balance of a Bitcoin address

<p><b>1 credit per API call</b></p> <p>Get the balance of a Bitcoin address.</p> <p>The API returns the balance only if the address has up to 50,000 UTXOs (Unspent Transaction Outputs). For an address with more than 50,000 UTXOs, the API returns an error with the <code>403</code> response code.</p>

### Example

[✨ View "btcGetBalanceOfAddress.php"](../../examples/Api/BitcoinApi/btcGetBalanceOfAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGetBlock(
    string $hash
): \Tatum\Model\BtcBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\BtcBlock**](../Model/BtcBlock.md)

### Description

Get a Bitcoin block by its hash or height

<p><b>1 credit per API call</b></p> <p>Gets Bitcoin block detail by block hash or height.</p>

### Example

[✨ View "btcGetBlock.php"](../../examples/Api/BitcoinApi/btcGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGetBlockChainInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGetBlockChainInfo(
): \Tatum\Model\BtcInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\BtcInfo**](../Model/BtcInfo.md)

### Description

Get Bitcoin blockchain information

<p><b>1 credit per API call</b></p> <p>Gets Bitcoin blockchain information. Obtains basic info like the testnet / mainnet version of the chain, the current block number and its hash.</p>

### Example

[✨ View "btcGetBlockChainInfo.php"](../../examples/Api/BitcoinApi/btcGetBlockChainInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGetBlockHash()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGetBlockHash(
    float $i
): \Tatum\Model\BtcBlockHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**  | The number of blocks preceding a particular block on a blockchain. |

### Return type

[**\Tatum\Model\BtcBlockHash**](../Model/BtcBlockHash.md)

### Description

Get the hash of a Bitcoin block

<p><b>1 credit per API call</b></p> <p>Gets a Bitcoin block hash. Returns the hash of the block to get the block's details.</p>

### Example

[✨ View "btcGetBlockHash.php"](../../examples/Api/BitcoinApi/btcGetBlockHash.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGetMempool()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGetMempool(
): string[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Description

Get transactions from the Bitcoin mempool

<p><b>1 credit per API call</b></p> <p>Gets Bitcoin transaction IDs in the mempool.</p>

### Example

[✨ View "btcGetMempool.php"](../../examples/Api/BitcoinApi/btcGetMempool.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGetRawTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGetRawTransaction(
    string $hash
): \Tatum\Model\BtcTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\BtcTx**](../Model/BtcTx.md)

### Description

Get a Bitcoin transaction by its hash

<p><b>1 credit per API call</b></p> <p>Get Bitcoin Transaction detail by transaction hash.</p>

### Example

[✨ View "btcGetRawTransaction.php"](../../examples/Api/BitcoinApi/btcGetRawTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGetTxByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGetTxByAddress(
    string $address,
    float $page_size,
    [ float $offset ]
): \Tatum\Model\BtcTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]

### Return type

[**\Tatum\Model\BtcTx[]**](../Model/BtcTx.md)

### Description

Get all transactions for a Bitcoin address

<p><b>1 credit per API call</b></p> <p>Get all transactions for a Bitcoin address.</p>

### Example

[✨ View "btcGetTxByAddress.php"](../../examples/Api/BitcoinApi/btcGetTxByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcGetUTXO()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcGetUTXO(
    string $hash,
    float $index
): \Tatum\Model\BtcUTXO
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | The transaction hash |
 **$index** | **float**  | The index of the transaction output that you want to check for the UTXO |

### Return type

[**\Tatum\Model\BtcUTXO**](../Model/BtcUTXO.md)

### Description

Get information about a transaction output (UTXO) in a Bitcoin transaction

<p><b>1 credit per API call</b></p> <p>Get information about a transaction output in a transaction and check whether this output is a UTXO or has been spent.</p> <p>"UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of BTC/satoshis that remains at a Bitcoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about Bitcoin transactions and UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.</p> <ul> <li>If the transaction output is an UTXO, the API returns data about it.</li> <li>If the transaction output has been spent and there is no UTXO to return, the API returns an error with the <code>404</code> response code.</li> </ul>

### Example

[✨ View "btcGetUTXO.php"](../../examples/Api/BitcoinApi/btcGetUTXO.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcRpcDriver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcRpcDriver(
    \Tatum\Model\BtcRpcDriverRequest $btc_rpc_driver_request
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_rpc_driver_request** | [**\Tatum\Model\BtcRpcDriverRequest**](../Model/BtcRpcDriverRequest.md) |  |

### Return type

**object**

### Description

Connect to a Bitcoin node through an RPC driver

<p>This endpoint is deprecated. Do not use it.<br/> Instead, use <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">this API</a>.</b></p><br/> <p><b>2 credits per API call</b></p> <p>Use this endpoint URL as an http-based JSON RPC driver to connect directly to the node provided by Tatum. To learn more about JSON RPC, visit the <a href="https://developer.bitcoin.org/reference/rpc/index.html" target="_blank">Bitcoin developers' guide</a>.</p>

### Example

[✨ View "btcRpcDriver.php"](../../examples/Api/BitcoinApi/btcRpcDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcTransactionFromAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcTransactionFromAddress(
    \Tatum\Model\BtcTransactionFromAddress $btc_transaction_from_address
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_transaction_from_address** | [**\Tatum\Model\BtcTransactionFromAddress**](../Model/BtcTransactionFromAddress.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send BTC to Bitcoin addresses

<p><b>2 credits per API call</b></p> <p>Send BTC to blockchain addresses.</p> <p>Bitcoin transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of BTC/satoshis that remains at a Bitcoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about Bitcoin transactions and UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>. To check UTXOs in a transaction, see the <a href="#operation/BtcGetUTXO">API for getting information about a transaction output (UTXO) in a Bitcoin transaction</a>.</p> <p>You can build a BTC transaction by one of the following methods:</p> <ul> <li><b>Sending BTC from blockchain addresses</b><br/>The assets are sent from a list of addresses. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. For easier control over the assets to be sent, we recommend that you use this method only if you have one address to send the assets from.<br/> To use this method, use the <code>BtcTransactionFromAddress</code> or <code>BtcTransactionFromAddressKMS</code> schema of the request body.</li> <li><b>Sending BTC from UTXOs</b><br/>The assets are sent from a list of UTXOs. Each UTXO is included in the transaction. Use this method if you want to manually calculate the amount to send.<br/> To use this method, use the <code>BtcTransactionFromUTXO</code> or <code>BtcTransactionFromUTXOKMS</code> schema of the request body.</li> </ul> <p>When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 BTC and T2 with 2 BTC. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 BTC to spend:<br/><code>1 BTC (from T1) + 2 BTC (from T2) = 3 BTC (to spend in total)</code></p> <p>You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.</p> <p><b>Paying the gas fee and receiving the change</b><br/> When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).</p> <p><b>Signing a transaction</b><br/> When sending BTC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "btcTransactionFromAddress.php"](../../examples/Api/BitcoinApi/btcTransactionFromAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcTransactionFromAddressKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcTransactionFromAddressKMS(
    \Tatum\Model\BtcTransactionFromAddressKMS $btc_transaction_from_address_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_transaction_from_address_kms** | [**\Tatum\Model\BtcTransactionFromAddressKMS**](../Model/BtcTransactionFromAddressKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send BTC to Bitcoin addresses

BtcTransactionFromAddressKMS operation

### Example

[✨ View "btcTransactionFromAddressKMS.php"](../../examples/Api/BitcoinApi/btcTransactionFromAddressKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcTransactionFromUTXO()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcTransactionFromUTXO(
    \Tatum\Model\BtcTransactionFromUTXO $btc_transaction_from_utxo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_transaction_from_utxo** | [**\Tatum\Model\BtcTransactionFromUTXO**](../Model/BtcTransactionFromUTXO.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send BTC to Bitcoin addresses

BtcTransactionFromUTXO operation

### Example

[✨ View "btcTransactionFromUTXO.php"](../../examples/Api/BitcoinApi/btcTransactionFromUTXO.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcTransactionFromUTXOKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoin()->btcTransactionFromUTXOKMS(
    \Tatum\Model\BtcTransactionFromUTXOKMS $btc_transaction_from_utxokms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_transaction_from_utxokms** | [**\Tatum\Model\BtcTransactionFromUTXOKMS**](../Model/BtcTransactionFromUTXOKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send BTC to Bitcoin addresses

BtcTransactionFromUTXOKMS operation

### Example

[✨ View "btcTransactionFromUTXOKMS.php"](../../examples/Api/BitcoinApi/btcTransactionFromUTXOKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
