---
title: TransferCeloBlockchain
parent: Model
layout: page
---

# TransferCeloBlockchain model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**getTo()** | **string** | Blockchain address to send assets |
**getCurrency()** | **string** | Currency of the transaction |
**getFeeCurrency()** | **string** | Currency to pay for transaction gas |
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | [optional]
**getAmount()** | **string** | Amount to be sent. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |

