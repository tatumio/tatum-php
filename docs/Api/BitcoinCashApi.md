# Tatum/Api/BitcoinCashApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bchBroadcast()**](#bchbroadcast) | **POST** [/v3/bcash/broadcast](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchBroadcast) | Broadcast signed Bitcoin Cash transaction
[**bchGenerateAddress()**](#bchgenerateaddress) | **GET** [/v3/bcash/address/{xpub}/{index}](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchGenerateAddress) | Generate Bitcoin Cash deposit address from Extended public key
[**bchGenerateAddressPrivateKey()**](#bchgenerateaddressprivatekey) | **POST** [/v3/bcash/wallet/priv](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchGenerateAddressPrivateKey) | Generate Bitcoin Cash private key
[**bchGenerateWallet()**](#bchgeneratewallet) | **GET** [/v3/bcash/wallet](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchGenerateWallet) | Generate Bitcoin Cash wallet
[**bchGetBlock()**](#bchgetblock) | **GET** [/v3/bcash/block/{hash}](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchGetBlock) | Get Bitcoin Cash Block by hash
[**bchGetBlockChainInfo()**](#bchgetblockchaininfo) | **GET** [/v3/bcash/info](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchGetBlockChainInfo) | Get Bitcoin Cash Blockchain Information
[**bchGetBlockHash()**](#bchgetblockhash) | **GET** [/v3/bcash/block/hash/{i}](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchGetBlockHash) | Get Bitcoin Cash Block hash
[**bchGetRawTransaction()**](#bchgetrawtransaction) | **GET** [/v3/bcash/transaction/{hash}](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchGetRawTransaction) | Get Bitcoin Cash Transaction by hash
[**bchGetTxByAddress()**](#bchgettxbyaddress) | **GET** [/v3/bcash/transaction/address/{address}](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchGetTxByAddress) | Get Bitcoin Cash Transactions by address
[**bchRpcDriver()**](#bchrpcdriver) | **POST** [/v3/bcash/node](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchRpcDriver) | JSON RPC HTTP driver
[**bchTransferBlockchain()**](#bchtransferblockchain) | **POST** [/v3/bcash/transaction](https://apidoc.tatum.io/tag/BitcoinCash#operation/BchTransferBlockchain) | Send BCH to Bitcoin Cash addresses


## `bchBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchBroadcast(
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

Broadcast signed Bitcoin Cash transaction

<h4>5 credits per API call.</h4><br/> <p>Broadcast signed transaction to Bitcoin Cash blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

[✨ View "bchBroadcast.php"](../../examples/Api/BitcoinCashApi/bchBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchGenerateAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchGenerateAddress(
    string $xpub,
    float $index
): \Tatum\Model\BchGenerateAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xpub** | **string**  | Extended public key of wallet. |
 **$index** | **float**  | Derivation index of desired address to be generated. |

### Return type

[**\Tatum\Model\BchGenerateAddress200Response**](../Model/BchGenerateAddress200Response.md)

### Description

Generate Bitcoin Cash deposit address from Extended public key

<h4>5 credits per API call.</h4><br/> <p>Generate Bitcoin Cash deposit address from Extended public key. Deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1. Generates new format of address starting with bitcoincash: in case of mainnet, bchtest: in case of testnet..</p>

### Example

[✨ View "bchGenerateAddress.php"](../../examples/Api/BitcoinCashApi/bchGenerateAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchGenerateAddressPrivateKey()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchGenerateAddressPrivateKey(
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

Generate Bitcoin Cash private key

<h4>5 credits per API call.</h4><br/> <p>Generate private key for address from mnemonic for given derivation path index. Private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.</p>

### Example

[✨ View "bchGenerateAddressPrivateKey.php"](../../examples/Api/BitcoinCashApi/bchGenerateAddressPrivateKey.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchGenerateWallet(
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

Generate Bitcoin Cash wallet

<h4>5 credits per API call.</h4><br/><p>Tatum supports BIP44 HD wallets. It is very convenient and secure, since it can generate 2^31 addresses from 1 mnemonic phrase. Mnemonic phrase consists of 24 special words in defined order and can restore access to all generated addresses and private keys.<br/>Each address is identified by 3 main values:<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul></p><p>Tatum follows BIP44 specification and generates for Bitcoin Cash wallet with derivation path m'/44'/145'/0'/0. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Bitcoin Cash wallet.</p>

### Example

[✨ View "bchGenerateWallet.php"](../../examples/Api/BitcoinCashApi/bchGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchGetBlock(
    string $hash
): \Tatum\Model\BchBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Block hash or height |

### Return type

[**\Tatum\Model\BchBlock**](../Model/BchBlock.md)

### Description

Get Bitcoin Cash Block by hash

<h4>5 credits per API call.</h4><br/><p>Get Bitcoin Cash Block detail by block hash or height.</p>

### Example

[✨ View "bchGetBlock.php"](../../examples/Api/BitcoinCashApi/bchGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchGetBlockChainInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchGetBlockChainInfo(
): \Tatum\Model\BchInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\BchInfo**](../Model/BchInfo.md)

### Description

Get Bitcoin Cash Blockchain Information

<h4>5 credits per API call.</h4><br/><p>Get Bitcoin Cash Blockchain Information. Obtain basic info like testnet / mainnet version of the chain, current block number and it's hash.</p>

### Example

[✨ View "bchGetBlockChainInfo.php"](../../examples/Api/BitcoinCashApi/bchGetBlockChainInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchGetBlockHash()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchGetBlockHash(
    float $i
): \Tatum\Model\BchGetBlockHash200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**  | The number of blocks preceding a particular block on a block chain. |

### Return type

[**\Tatum\Model\BchGetBlockHash200Response**](../Model/BchGetBlockHash200Response.md)

### Description

Get Bitcoin Cash Block hash

<h4>5 credits per API call.</h4><br/><p>Get Bitcoin Cash Block hash. Returns hash of the block to get the block detail.</p>

### Example

[✨ View "bchGetBlockHash.php"](../../examples/Api/BitcoinCashApi/bchGetBlockHash.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchGetRawTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchGetRawTransaction(
    string $hash
): \Tatum\Model\BchTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\BchTx**](../Model/BchTx.md)

### Description

Get Bitcoin Cash Transaction by hash

<h4>5 credits per API call.</h4><br/><p>Get Bitcoin Cash Transaction by transaction hash.</p>

### Example

[✨ View "bchGetRawTransaction.php"](../../examples/Api/BitcoinCashApi/bchGetRawTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchGetTxByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchGetTxByAddress(
    string $address,
    [ int $skip ]
): \Tatum\Model\BchTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Address |
 **$skip** | **int**  | Define, how much transactions should be skipped to obtain another page. | [optional]

### Return type

[**\Tatum\Model\BchTx[]**](../Model/BchTx.md)

### Description

Get Bitcoin Cash Transactions by address

<h4>5 credits per API call.</h4><br/><p>Get Bitcoin Cash Transaction by address. Limit is 50 transaction per response.</p>

### Example

[✨ View "bchGetTxByAddress.php"](../../examples/Api/BitcoinCashApi/bchGetTxByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchRpcDriver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchRpcDriver(
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

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as an http-based JSON RPC driver to connect directly to the node provided by Tatum. To learn more about JSON RPC, visit <a href="https://github.com/gcash/bchd/blob/master/docs/json_rpc_api.md#Methods" target="_blank">Bitcoin Cash developers' guide</a>.</p>

### Example

[✨ View "bchRpcDriver.php"](../../examples/Api/BitcoinCashApi/bchRpcDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchTransferBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->bitcoinCash()->bchTransferBlockchain(
    \Tatum\Model\BchTransferBlockchainRequest $bch_transfer_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bch_transfer_blockchain_request** | [**\Tatum\Model\BchTransferBlockchainRequest**](../Model/BchTransferBlockchainRequest.md) |  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send BCH to Bitcoin Cash addresses

<p><b>10 credits per API call</b></p> <p>Send BCH to blockchain addresses.</p> <p>Bitcoin Cash transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of BCH that remains at a Bitcoin Cash address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.</p> <p>You build a BCH transaction by sending BCH from UTXOs. Each UTXO is included in the transaction.</p> <p>When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 BCH and T2 with 2 BCH. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 BCH to spend:<br/><code>1 BCH (from T1) + 2 BCH (from T2) = 3 BCH (to spend in total)</code></p> <p>You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.</p> <p><b>Paying the gas fee and receiving the change</b><br/> When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).</p> <p><b>Signing a transaction</b><br/> When sending BCH, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "bchTransferBlockchain.php"](../../examples/Api/BitcoinCashApi/bchTransferBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
