---
title: TransferXdcBlockchain
parent: Model
layout: page
---

# TransferXdcBlockchain model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getCurrency()** | **string** | Currency of the transfer. |
**getNonce()** | **float** | Nonce to be set to XDC transaction. If not present, last known nonce will be used. | [optional]
**getTo()** | **string** | Blockchain address to send assets |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | [optional]
**getAmount()** | **string** | Amount to be sent. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |

