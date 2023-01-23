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


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/broadcast`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaGenerateAddress()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/address/{xpub}/{index}`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaGenerateAddressPrivateKey()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/wallet/priv`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaGenerateWallet()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/wallet`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaGetAccount()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/account/{address}`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaGetBlock()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/block/{hash}`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaGetBlockChainInfo()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/info`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaGetRawTransaction()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/transaction/{hash}`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaGetTxByAddress()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/transaction/address/{address}`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaGetUTXOByAddress()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**GET** `/v3/ada/{address}/utxos`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaTransactionFromAddress()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/transaction`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaTransactionFromAddressKMS()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/transaction`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaTransactionFromUTXO()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/transaction`~~
> 
> This method is no longer supported.


[Back to top](#top)



## ~~`adaTransactionFromUTXOKMS()`~~


{: .warning }
> 🚫 **DEPRECATED**
> 
> ~~**POST** `/v3/ada/transaction`~~
> 
> This method is no longer supported.


[Back to top](#top)

