---
title: EstimateFeeFromUTXO
parent: Model
layout: page
---

# EstimateFeeFromUTXO

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to estimate fee for. <br>Example: `null` |
**getType()** | **string** | Type of transaction <br>Example: `null` |
**getFromUtxo()** | [**\Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[]**](../EstimateFeeFromUTXOFromUTXOInner) | Array of transaction hashes, index of UTXO in it and corresponding private keys. Use this option if you want to calculate amount to send manually. Either fromUTXO or fromAddress must be present. <br>Example: `null` |
**getTo()** | [**\Tatum\Model\EstimateFeeFromAddressToInner[]**](../EstimateFeeFromAddressToInner) | Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee. <br>Example: `null` |

