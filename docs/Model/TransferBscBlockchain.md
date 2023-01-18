---
title: TransferBscBlockchain
parent: Model
layout: page
---

# TransferBscBlockchain model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | (Only for BSC transactions) Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | [optional]
**getNonce()** | **float** | Nonce to be set to BSC transaction. If not present, last known nonce will be used. | [optional]
**getTo()** | **string** | Blockchain address to send assets |
**getCurrency()** | **string** | Currency to transfer from BSC Blockchain Account. BEP20 tokens BETH, BBTC, BADA, WBNB, BDOT, BXRP, BLTC, BBCH are available only for mainnet use. |
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | [optional]
**getAmount()** | **string** | Amount to be sent. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |

