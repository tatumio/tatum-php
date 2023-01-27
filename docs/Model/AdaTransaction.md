---
title: AdaTransaction
parent: Model
layout: page
---

# AdaTransaction

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFromAddress()** | [**\Tatum\Model\AdaTransactionFromAddressInner[]**](../AdaTransactionFromAddressInner) | Array of addresses and corresponding private keys. Tatum will automatically scan last unspent transactions for each address and will use all of the unspent values. We advise to use this option if you have 1 address per 1 transaction only. <br>Example: `null` | [optional]
**getFromUtxo()** | [**\Tatum\Model\AdaTransactionFromUTXOInner[]**](../AdaTransactionFromUTXOInner) | Array of transaction hashes, index of UTXO in it and corresponding private keys. Use this option if you want to calculate amount to send manually. Either fromUTXO or fromAddress must be present. <br>Example: `null` | [optional]
**getTo()** | [**\Tatum\Model\AdaTransactionToInner[]**](../AdaTransactionToInner) | Array of addresses and values to send Litecoins to. Values must be set in LTC. Difference between from and to is transaction fee. <br>Example: `null` |

