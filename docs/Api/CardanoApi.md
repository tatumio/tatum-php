---
title: Cardano
parent: API
layout: page
---

# Api/CardanoApi

[Cardano API Reference](https://apidoc.tatum.io/tag/Cardano/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->cardano();

// TestNet API Call
$sdk->testnet()->api()->cardano();
```

## Methods

Method | Description
------------- | -------------
[**~~adaBroadcast()~~**](#adabroadcast) | (`deprecated`)
[**~~adaGenerateAddress()~~**](#adagenerateaddress) | (`deprecated`)
[**~~adaGenerateAddressPrivateKey()~~**](#adagenerateaddressprivatekey) | (`deprecated`)
[**~~adaGenerateWallet()~~**](#adageneratewallet) | (`deprecated`)
[**~~adaGetAccount()~~**](#adagetaccount) | (`deprecated`)
[**~~adaGetBlock()~~**](#adagetblock) | (`deprecated`)
[**~~adaGetBlockChainInfo()~~**](#adagetblockchaininfo) | (`deprecated`)
[**~~adaGetRawTransaction()~~**](#adagetrawtransaction) | (`deprecated`)
[**~~adaGetTxByAddress()~~**](#adagettxbyaddress) | (`deprecated`)
[**~~adaGetUTXOByAddress()~~**](#adagetutxobyaddress) | (`deprecated`)
[**~~adaTransactionFromAddress()~~**](#adatransactionfromaddress) | (`deprecated`)
[**~~adaTransactionFromAddressKMS()~~**](#adatransactionfromaddresskms) | (`deprecated`)
[**~~adaTransactionFromUTXO()~~**](#adatransactionfromutxo) | (`deprecated`)
[**~~adaTransactionFromUTXOKMS()~~**](#adatransactionfromutxokms) | (`deprecated`)


## ~~`adaBroadcast()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/broadcast`~~
> 
> This method is no longer supported.

Broadcast signed Ada transaction

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>2 credits per API call.</h4>

 Broadcasts a signed transaction to the Ada blockchain. This method is used internally from Tatum KMS or Tatum Client Libraries. It is possible to create a custom signing mechanism and only use this method for broadcasting data to the blockchain.


[Back to top](#top)



## ~~`adaGenerateAddress()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/address/{xpub}/{index}`~~
> 
> This method is no longer supported.

Generate Ada deposit address from Extended public key

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>1 credit per API call.</h4>

 Generates a Ada deposit address from an Extended public key. The deposit address is generated for the specific index - each extended public key can generate up to 2^31 addresses starting from index 0 until 2^31 - 1.


[Back to top](#top)



## ~~`adaGenerateAddressPrivateKey()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/wallet/priv`~~
> 
> This method is no longer supported.

Generate Ada private key

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>1 credit per API call.</h4>

 Generates a private key for an address from a mnemonic for a given derivation path index. The private key is generated for the specific index - each mnemonic can generate up to 2^32 private keys starting from index 0 until 2^31 - 1.


[Back to top](#top)



## ~~`adaGenerateWallet()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/wallet`~~
> 
> This method is no longer supported.

Generate Ada wallet

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>1 credit per API call.</h4>

Tatum supports BIP44 HD wallets. Because they can generate 2^31 addresses from 1 mnemonic phrase, they are very convenient and secure. A mnemonic phrase consists of 24 special words in a defined order and can restore access to all generated addresses and private keys.

Each address is identified by 3 main values:

<ul><li>Private Key - your secret value, which should never be revealed</li><li>Public Key - public address to be published</li><li>Derivation index - index of generated address</li></ul>

Tatum follows BIP44 specification and generates for ADA wallet with derivation path m/1852'/1815'/0'. More about BIP44 HD wallets can be found here - <a target="_blank" href="https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki">https://github.com/bitcoin/bips/blob/master/bip-0044.mediawiki</a>. Generate BIP44 compatible Ada wallet.


[Back to top](#top)



## ~~`adaGetAccount()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/account/{address}`~~
> 
> This method is no longer supported.

Gets a Ada account by address

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 <h4>2 credits per API call.</h4>

 Gets a Ada account by address.


[Back to top](#top)



## ~~`adaGetBlock()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/block/{hash}`~~
> 
> This method is no longer supported.

Get Block by hash or height

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Gets Ada block detail by block hash or height.


[Back to top](#top)



## ~~`adaGetBlockChainInfo()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/info`~~
> 
> This method is no longer supported.

Get Blockchain information

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Gets Ada blockchain information. Obtains basic info like the testnet / mainnet version of the chain, the current block number and its hash.


[Back to top](#top)



## ~~`adaGetRawTransaction()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/transaction/{hash}`~~
> 
> This method is no longer supported.

Get transaction by hash

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Get Ada Transaction detail by transaction hash.


[Back to top](#top)



## ~~`adaGetTxByAddress()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/transaction/address/{address}`~~
> 
> This method is no longer supported.

Get transactions by address

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Gets a Ada transaction by address.


[Back to top](#top)



## ~~`adaGetUTXOByAddress()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/{address}/utxos`~~
> 
> This method is no longer supported.

Get UTXOs by address

**Support for Cardano is deprecated.

You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

<h4>1 credit per API call.</h4>

Gets a Ada UTXOs by address.


[Back to top](#top)



## ~~`adaTransactionFromAddress()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/transaction`~~
> 
> This method is no longer supported.

Send ADA to Cardano addresses

**Support for Cardano is deprecated.

 You can work with Cardano by <a href="https://apidoc.tatum.io/tag/Node-RPC#operation/NodeJsonPostRpcDriver" target="_blank">connecting directly to a blockchain node provided by Tatum</a>.**

 **2 credits per API call**

 Send ADA to blockchain addresses.

 Cardano transactions are based on UTXOs. "UTXO" stands for "Unspent Transaction Output". A UTXO is the amount of ADA that remains at a Cardano address after a cryptocurrency transaction involving this address has been performed. The UTXO can then be used as input for a new cryptocurrency transaction. For more information about the UTXO, see the <a href="https://developer.bitcoin.org/devguide/transactions.html" target="_blank">Bitcoin user documentation</a>.

 You can build an ADA transaction by one of the following methods:

 

<ul> <li>**Sending ADA from blockchain addresses**

The assets are sent from a list of addresses. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. For easier control over the assets to be sent, we recommend that you use this method only if you have one address to send the assets from.

 To use this method, use the <code>AdaTransactionFromAddress</code> or <code>AdaTransactionFromAddressKMS</code> schema of the request body.</li> <li>**Sending ADA from UTXOs**

The assets are sent from a list of UTXOs. Each UTXO is included in the transaction. Use this method if you want to manually calculate the amount to send.

 To use this method, use the <code>AdaTransactionFromUTXO</code> or <code>AdaTransactionFromUTXOKMS</code> schema of the request body.</li> </ul>

 When an UTXO is entered into a transaction, the whole UTXO amount is included and must be spent. For example, address A receives two transactions, T1 with 1 ADA and T2 with 2 ADA. A transaction that consumes the UTXOs from both T1 and T2 will have an available amount of 3 ADA to spend:

<code>1 ADA (from T1) + 2 ADA (from T2) = 3 ADA (to spend in total)</code>

 You can send the assets to one or multiple recipients in one transaction. If you send the assets to multiple addresses, each address must have its own amount to receive.

 **Paying the gas fee and receiving the change**

 When the amount that the recipients should receive is lower than the amount from the UTXOs, the difference between these two amounts is by default used as the gas fee for the transaction. Because this amount may be considerable and you may not want to spend it all on the gas fee, you can explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent (the <code>fee</code> and <code>changeAddress</code> parameters in the request body, correspondingly).

 **Signing a transaction**

 When sending ADA, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.


[Back to top](#top)



## ~~`adaTransactionFromAddressKMS()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/transaction`~~
> 
> This method is no longer supported.

Send ADA to Cardano addresses

AdaTransactionFromAddressKMS operation


[Back to top](#top)



## ~~`adaTransactionFromUTXO()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/transaction`~~
> 
> This method is no longer supported.

Send ADA to Cardano addresses

AdaTransactionFromUTXO operation


[Back to top](#top)



## ~~`adaTransactionFromUTXOKMS()`~~


### Description

{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/transaction`~~
> 
> This method is no longer supported.

Send ADA to Cardano addresses

AdaTransactionFromUTXOKMS operation


[Back to top](#top)

