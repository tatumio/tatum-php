# Tatum/Api/LitecoinApi

## References

[Litecoin API documentation](https://apidoc.tatum.io/tag/Litecoin/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **ltcBroadcast()**](#ltcbroadcast) 

> Broadcast signed Litecoin transaction
> 
> **POST** `/v3/litecoin/broadcast`

[🔹 **ltcGenerateAddress()**](#ltcgenerateaddress) 

> Generate Litecoin deposit address from Extended public key
> 
> **GET** `/v3/litecoin/address/{xpub}/{index}`

[🔹 **ltcGenerateAddressPrivateKey()**](#ltcgenerateaddressprivatekey) 

> Generate Litecoin private key
> 
> **POST** `/v3/litecoin/wallet/priv`

[🔹 **ltcGenerateWallet()**](#ltcgeneratewallet) 

> Generate Litecoin wallet
> 
> **GET** `/v3/litecoin/wallet`

[🔹 **ltcGetBalanceOfAddress()**](#ltcgetbalanceofaddress) 

> Get the balance of a Litecoin address
> 
> **GET** `/v3/litecoin/address/balance/{address}`

[🔹 **ltcGetBlock()**](#ltcgetblock) 

> Get Litecoin Block by hash or height
> 
> **GET** `/v3/litecoin/block/{hash}`

[🔹 **ltcGetBlockChainInfo()**](#ltcgetblockchaininfo) 

> Get Litecoin Blockchain Information
> 
> **GET** `/v3/litecoin/info`

[🔹 **ltcGetBlockHash()**](#ltcgetblockhash) 

> Get Litecoin Block hash
> 
> **GET** `/v3/litecoin/block/hash/{i}`

[🔹 **ltcGetMempool()**](#ltcgetmempool) 

> Get Mempool Transactions
> 
> **GET** `/v3/litecoin/mempool`

[🔹 **ltcGetRawTransaction()**](#ltcgetrawtransaction) 

> Get Litecoin Transaction by hash
> 
> **GET** `/v3/litecoin/transaction/{hash}`

[🔹 **ltcGetTxByAddress()**](#ltcgettxbyaddress) 

> Get Litecoin Transactions by address
> 
> **GET** `/v3/litecoin/transaction/address/{address}`

[🔹 **ltcGetUTXO()**](#ltcgetutxo) 

> Get information about a transaction output (UTXO) in a Litecoin transaction
> 
> **GET** `/v3/litecoin/utxo/{hash}/{index}`

[🔹 **ltcRpcDriver()**](#ltcrpcdriver) 

> JSON RPC HTTP driver
> 
> **POST** `/v3/litecoin/node`

[🔹 **ltcTransactionAddress()**](#ltctransactionaddress) 

> Send LTC to Litecoin addresses
> 
> **POST** `/v3/litecoin/transaction`

[🔹 **ltcTransactionAddressKMS()**](#ltctransactionaddresskms) 

> Send LTC to Litecoin addresses
> 
> **POST** `/v3/litecoin/transaction`

[🔹 **ltcTransactionUTXO()**](#ltctransactionutxo) 

> Send LTC to Litecoin addresses
> 
> **POST** `/v3/litecoin/transaction`

[🔹 **ltcTransactionUTXOKMS()**](#ltctransactionutxokms) 

> Send LTC to Litecoin addresses
> 
> **POST** `/v3/litecoin/transaction`



## `ltcBroadcast()`

> **POST** `/v3/litecoin/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcBroadcast(
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

Broadcast signed Litecoin transaction

<h4>5 credits per API call.</h4>

 <p>Broadcast signed transaction to Litecoin blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>


### Example

[✨ View "ltcBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGenerateAddress()`

> **GET** `/v3/litecoin/address/{xpub}/{index}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\LtcGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\LtcGenerateAddress200Response**](../Model/LtcGenerateAddress200Response.md)

### Description

Generate Litecoin deposit address from Extended public key

<h4>5 credits per API call.</h4>

 <p>Generate Litecoin deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>


### Example

[✨ View "ltcGenerateAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGenerateAddressPrivateKey()`

> **POST** `/v3/litecoin/wallet/priv`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGenerateAddressPrivateKey(
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

Generate Litecoin private key

<h4>5 credits per API call.</h4>

 <p>Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>


### Example

[✨ View "ltcGenerateAddressPrivateKey.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGenerateWallet()`

> **GET** `/v3/litecoin/wallet`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGenerateWallet(
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

Generate Litecoin wallet

<h4>5 credits per API call.</h4>

<p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.
Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p>
<p>Tatum follows BIP44 specification and generates for Litecoin wallet with derivation path m'/44'/2'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki">https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Litecoin wallet.</p>


### Example

[✨ View "ltcGenerateWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetBalanceOfAddress()`

> **GET** `/v3/litecoin/address/balance/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetBalanceOfAddress(
    string $address
): \Tatum\Model\BtcBasedBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |

### Return type

[**\Tatum\Model\BtcBasedBalance**](../Model/BtcBasedBalance.md)

### Description

Get the balance of a Litecoin address

<p><b>5 credits per API call</b></p>
 <p>Get the balance of a Litecoin address.</p>
 <p>The API returns the balance only if the address has up to 50,000 UTXOs (Unspent Transaction Outputs). For an address with more than 50,000 UTXOs, the API returns an error with the <code>403</code> response code.</p>


### Example

[✨ View "ltcGetBalanceOfAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetBalanceOfAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetBlock()`

> **GET** `/v3/litecoin/block/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetBlock(
    string $hash
): \Tatum\Model\LtcBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\LtcBlock**](../Model/LtcBlock.md)

### Description

Get Litecoin Block by hash or height

<h4>5 credits per API call.</h4>

<p>Get Litecoin Block detail by block hash or height.</p>


### Example

[✨ View "ltcGetBlock.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetBlockChainInfo()`

> **GET** `/v3/litecoin/info`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetBlockChainInfo(
): \Tatum\Model\LtcInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\LtcInfo**](../Model/LtcInfo.md)

### Description

Get Litecoin Blockchain Information

<h4>5 credits per API call.</h4>

<p>Get Litecoin Blockchain Information. Obtain basic info like testnet / mainnet version of the chain, current block number and it's hash.</p>


### Example

[✨ View "ltcGetBlockChainInfo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetBlockChainInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetBlockHash()`

> **GET** `/v3/litecoin/block/hash/{i}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetBlockHash(
    float $i
): \Tatum\Model\LtcGetBlockHash200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**  | The number of blocks preceding a particular block on a block chain. |

### Return type

[**\Tatum\Model\LtcGetBlockHash200Response**](../Model/LtcGetBlockHash200Response.md)

### Description

Get Litecoin Block hash

<h4>5 credits per API call.</h4>

<p>Get Litecoin Block hash. Returns hash of the block to get the block detail.</p>


### Example

[✨ View "ltcGetBlockHash.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetBlockHash.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetMempool()`

> **GET** `/v3/litecoin/mempool`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetMempool(
): string[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Description

Get Mempool Transactions

<h4>1 credit per API call.</h4>

<p>Get Litecoin Transaction ids in the mempool.</p>


### Example

[✨ View "ltcGetMempool.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetMempool.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetRawTransaction()`

> **GET** `/v3/litecoin/transaction/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetRawTransaction(
    string $hash
): \Tatum\Model\LtcTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\LtcTx**](../Model/LtcTx.md)

### Description

Get Litecoin Transaction by hash

<h4>5 credits per API call.</h4>

<p>Get Litecoin Transaction detail by transaction hash.</p>


### Example

[✨ View "ltcGetRawTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetRawTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetTxByAddress()`

> **GET** `/v3/litecoin/transaction/address/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetTxByAddress(
    string $address,
    float $page_size,
    [ float $offset ]
): \Tatum\Model\LtcTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]

### Return type

[**\Tatum\Model\LtcTx[]**](../Model/LtcTx.md)

### Description

Get Litecoin Transactions by address

<h4>5 credits per API call.</h4>

<p>Get Litecoin Transaction by address.</p>


### Example

[✨ View "ltcGetTxByAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetTxByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcGetUTXO()`

> **GET** `/v3/litecoin/utxo/{hash}/{index}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcGetUTXO(
    string $hash,
    float $index
): \Tatum\Model\LtcUTXO
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | The transaction hash |
 **$index** | **float**  | The index of the transaction output that you want to check for the UTXO |

### Return type

[**\Tatum\Model\LtcUTXO**](../Model/LtcUTXO.md)

### Description

Get information about a transaction output (UTXO) in a Litecoin transaction

<p><b>5 credits per API call</b></p>
 <p>Get information about a transaction output in a transaction and check whether this output is a UTXO or has been spent.</p>
 <p>"UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of LTC that remains at a Litecoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.</p>
 <ul> <li>If the transaction output is an UTXO, the API returns data about it.</li> <li>If the transaction output has been spent and there is no UTXO to return, the API returns an error with the <code>404</code> response code.</li> </ul>

### Example

[✨ View "ltcGetUTXO.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcGetUTXO.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcRpcDriver()`

> **POST** `/v3/litecoin/node`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcRpcDriver(
    \Tatum\Model\BchRpcDriverRequest $bch_rpc_driver_request
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bch_rpc_driver_request** | [**\Tatum\Model\BchRpcDriverRequest**](../Model/BchRpcDriverRequest.md) |  |

### Return type

**object**

### Description

JSON RPC HTTP driver

<p><b>2 credits per API call</b></p>
 <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p>

 <p>Use this endpoint URL as an http-based JSON RPC driver to connect directly to the node provided by Tatum.</p>


### Example

[✨ View "ltcRpcDriver.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcRpcDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcTransactionAddress()`

> **POST** `/v3/litecoin/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcTransactionAddress(
    \Tatum\Model\LtcTransactionAddress $ltc_transaction_address
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transaction_address** | [**\Tatum\Model\LtcTransactionAddress**](../Model/LtcTransactionAddress.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send LTC to Litecoin addresses

<p><b>10 credits per API call</b></p>
 <p>Send LTC to blockchain addresses.</p>
 <p>Litecoin transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of LTC that remains at a Litecoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>. To check UTXOs in a transaction, see the <a href="#operation/LtcGetUTXO">API for getting information about a transaction output (UTXO) in a Litecoin transaction</a>.</p>
 <p>You can build a LTC transaction by one of the following methods:</p>
 <ul> <li><b>Sending LTC from blockchain addresses</b>
The assets are sent from a list of addresses. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. For easier control over the assets to be sent, we recommend that you use this method only if you have one address to send the assets from.
 To use this method, use the <code>LtcTransactionAddress</code> or <code>LtcTransactionAddressKMS</code> schema of the request body.</li> <li><b>Sending LTC from UTXOs</b>
The assets are sent from a list of UTXOs. Each UTXO is included in the transaction. Use this method if you want to manually calculate the amount to send.
 To use this method, use the <code>LtcTransactionFromUTXO</code> or <code>LtcTransactionFromUTXOKMS</code> schema of the request body.</li> </ul> <p>When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 LTC and T2 with 2 LTC. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 LTC to spend:
<code>1 LTC (from T1) + 2 LTC (from T2) = 3 LTC (to spend in total)</code></p>
 <p>You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.</p>
 <p><b>Paying the gas fee and receiving the change</b>
 When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).</p>
 <p><b>Signing a transaction</b>
 When sending LTC, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "ltcTransactionAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcTransactionAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcTransactionAddressKMS()`

> **POST** `/v3/litecoin/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcTransactionAddressKMS(
    \Tatum\Model\LtcTransactionAddressKMS $ltc_transaction_address_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transaction_address_kms** | [**\Tatum\Model\LtcTransactionAddressKMS**](../Model/LtcTransactionAddressKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send LTC to Litecoin addresses

LtcTransactionAddressKMS operation

### Example

[✨ View "ltcTransactionAddressKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcTransactionAddressKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcTransactionUTXO()`

> **POST** `/v3/litecoin/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcTransactionUTXO(
    \Tatum\Model\LtcTransactionUTXO $ltc_transaction_utxo
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transaction_utxo** | [**\Tatum\Model\LtcTransactionUTXO**](../Model/LtcTransactionUTXO.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send LTC to Litecoin addresses

LtcTransactionUTXO operation

### Example

[✨ View "ltcTransactionUTXO.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcTransactionUTXO.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcTransactionUTXOKMS()`

> **POST** `/v3/litecoin/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->litecoin()->ltcTransactionUTXOKMS(
    \Tatum\Model\LtcTransactionUTXOKMS $ltc_transaction_utxokms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transaction_utxokms** | [**\Tatum\Model\LtcTransactionUTXOKMS**](../Model/LtcTransactionUTXOKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send LTC to Litecoin addresses

LtcTransactionUTXOKMS operation

### Example

[✨ View "ltcTransactionUTXOKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/LitecoinApi/ltcTransactionUTXOKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
