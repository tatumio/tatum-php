# Tatum/Api/DogecoinApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dogeBroadcast()**](#dogebroadcast) | **POST** /v3/dogecoin/broadcast | Broadcast signed Dogecoin transaction
[**dogeGenerateAddress()**](#dogegenerateaddress) | **GET** /v3/dogecoin/address/{xpub}/{index} | Generate Dogecoin deposit address from Extended public key
[**dogeGenerateAddressPrivateKey()**](#dogegenerateaddressprivatekey) | **POST** /v3/dogecoin/wallet/priv | Generate Dogecoin private key
[**dogeGenerateWallet()**](#dogegeneratewallet) | **GET** /v3/dogecoin/wallet | Generate Dogecoin wallet
[**dogeGetBlock()**](#dogegetblock) | **GET** /v3/dogecoin/block/{hash} | Get Dogecoin Block by hash or height
[**dogeGetBlockChainInfo()**](#dogegetblockchaininfo) | **GET** /v3/dogecoin/info | Get Dogecoin Blockchain Information
[**dogeGetBlockHash()**](#dogegetblockhash) | **GET** /v3/dogecoin/block/hash/{i} | Get Dogecoin Block hash
[**dogeGetMempool()**](#dogegetmempool) | **GET** /v3/dogecoin/mempool | Get Mempool Transactions
[**dogeGetRawTransaction()**](#dogegetrawtransaction) | **GET** /v3/dogecoin/transaction/{hash} | Get Dogecoin Transaction by hash
[**dogeGetUTXO()**](#dogegetutxo) | **GET** /v3/dogecoin/utxo/{hash}/{index} | Get information about a transaction output (UTXO) in a Dogecoin transaction
[**dogeRpcDriver()**](#dogerpcdriver) | **POST** /v3/dogecoin/node | JSON RPC HTTP driver
[**dogeTransferBlockchain()**](#dogetransferblockchain) | **POST** /v3/dogecoin/transaction | Send DOGE to Dogecoin addresses


## `dogeBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeBroadcast(
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

Broadcast signed Dogecoin transaction

<h4>2 credits per API call.</h4><br/> <p>Broadcast signed transaction to Dogecoin blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "dogeBroadcast.php"](../../samples/Api/DogecoinApi/dogeBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\DogeGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\DogeGenerateAddress200Response**](../Model/DogeGenerateAddress200Response.md)

### Description

Generate Dogecoin deposit address from Extended public key

<h4>1 credit per API call.</h4><br/> <p>Generate Dogecoin deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "dogeGenerateAddress.php"](../../samples/Api/DogecoinApi/dogeGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeGenerateAddressPrivateKey(
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

Generate Dogecoin private key

<h4>2 credits per API call.</h4><br/> <p>Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "dogeGenerateAddressPrivateKey.php"](../../samples/Api/DogecoinApi/dogeGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeGenerateWallet(
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

Generate Dogecoin wallet

<h4>1 credit per API call.</h4><br/><p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Dogecoin wallet with derivation path m'/44'/3'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki">https://github.com/litecoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Dogecoin wallet.</p>

### Example

[✨ View "dogeGenerateWallet.php"](../../samples/Api/DogecoinApi/dogeGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeGetBlock(
    string $hash
): \Tatum\Model\DogeBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height. |

### Return type

[**\Tatum\Model\DogeBlock**](../Model/DogeBlock.md)

### Description

Get Dogecoin Block by hash or height

<h4>1 credit per API call.</h4><br/><p>Get Dogecoin Block detail by block hash or height.</p>

### Example

[✨ View "dogeGetBlock.php"](../../samples/Api/DogecoinApi/dogeGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeGetBlockChainInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeGetBlockChainInfo(
): \Tatum\Model\DogeInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\DogeInfo**](../Model/DogeInfo.md)

### Description

Get Dogecoin Blockchain Information

<h4>1 credit per API call.</h4><br/><p>Get Dogecoin Blockchain Information. Obtain basic info like testnet / mainnet version of the chain, current block number and it's hash.</p>

### Example

[✨ View "dogeGetBlockChainInfo.php"](../../samples/Api/DogecoinApi/dogeGetBlockChainInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeGetBlockHash()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeGetBlockHash(
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

Get Dogecoin Block hash

<h4>1 credit per API call.</h4><br/><p>Get Dogecoin Block hash. Returns hash of the block to get the block detail.</p>

### Example

[✨ View "dogeGetBlockHash.php"](../../samples/Api/DogecoinApi/dogeGetBlockHash.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeGetMempool()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeGetMempool(
): string[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Description

Get Mempool Transactions

<h4>1 credit per API call.</h4><br/><p>Get Dogecoin Transaction ids in the mempool.</p>

### Example

[✨ View "dogeGetMempool.php"](../../samples/Api/DogecoinApi/dogeGetMempool.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeGetRawTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeGetRawTransaction(
    string $hash
): \Tatum\Model\DogeTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\DogeTx**](../Model/DogeTx.md)

### Description

Get Dogecoin Transaction by hash

<h4>1 credit per API call.</h4><br/><p>Get Dogecoin Transaction detail by transaction hash.</p>

### Example

[✨ View "dogeGetRawTransaction.php"](../../samples/Api/DogecoinApi/dogeGetRawTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeGetUTXO()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeGetUTXO(
    string $hash,
    float $index
): \Tatum\Model\DogeUTXO
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | The transaction hash |
 **$index** | **float**  | The index of the transaction output that you want to check for the UTXO |

### Return type

[**\Tatum\Model\DogeUTXO**](../Model/DogeUTXO.md)

### Description

Get information about a transaction output (UTXO) in a Dogecoin transaction

<p><b>1 credit per API call</b></p> <p>Get information about a transaction output in a transaction and check whether this output is a UTXO or has been spent.</p> <p>"UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of DOGE that remains at a Dogecoin address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.</p> <ul> <li>If the transaction output is an UTXO, the API returns data about it.</li> <li>If the transaction output has been spent and there is no UTXO to return, the API returns an error with the <code>404</code> response code.</li> </ul>

### Example

[✨ View "dogeGetUTXO.php"](../../samples/Api/DogecoinApi/dogeGetUTXO.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeRpcDriver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeRpcDriver(
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

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as an http-based JSON RPC driver to connect directly to the node provided by Tatum.</p>

### Example

[✨ View "dogeRpcDriver.php"](../../samples/Api/DogecoinApi/dogeRpcDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeTransferBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->dogecoin()->dogeTransferBlockchain(
    \Tatum\Model\DogeTransferBlockchainRequest $doge_transfer_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$doge_transfer_blockchain_request** | [**\Tatum\Model\DogeTransferBlockchainRequest**](../Model/DogeTransferBlockchainRequest.md) |  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send DOGE to Dogecoin addresses

<p><b>2 credits per API call</b></p> <p>Send DOGE to blockchain addresses.</p> <p>Dogecoin transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of DOGE that remains at a Bitcoin Cash address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>. To check UTXOs in a transaction, see the <a href="#operation/DogeGetUTXO">API for getting information about a transaction output (UTXO) in a Dogecoin transaction</a></p> <p>You build a DOGE transaction by sending DOGE from UTXOs. Each UTXO is included in the transaction.</p> <p>When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 DOGE and T2 with 2 DOGE. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 DOGE to spend:<br/><code>1 DOGE (from T1) + 2 DOGE (from T2) = 3 DOGE (to spend in total)</code></p> <p>You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.</p> <p><b>Paying the gas fee and receiving the change</b><br/> When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).</p> <p><b>Signing a transaction</b><br/> When sending DOGE, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "dogeTransferBlockchain.php"](../../samples/Api/DogecoinApi/dogeTransferBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
