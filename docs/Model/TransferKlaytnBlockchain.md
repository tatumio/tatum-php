---
title: TransferKlaytnBlockchain
parent: Model
layout: page
---

# TransferKlaytnBlockchain model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | Nonce to be set to Klaytn transaction. If not present, last known nonce will be used. | [optional]
**getTo()** | **string** | Blockchain address to send assets |
**getCurrency()** | **string** | Currency to transfer from Klaytn Blockchain Account. |
**getFee()** | [**\Tatum\Model\TransferKlay20BlockchainFee**](../TransferKlay20BlockchainFee) |  | [optional]
**getAmount()** | **string** | Amount to be sent. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |

