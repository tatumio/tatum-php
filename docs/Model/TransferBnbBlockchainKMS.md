---
title: TransferBnbBlockchainKMS
parent: Model
layout: page
---

# TransferBnbBlockchainKMS model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | Blockchain address to send assets. |
**getCurrency()** | **string** | Currency to transfer from Binance Blockchain Account. |
**getAmount()** | **string** | Amount to be sent in BNB. |
**getSignatureId()** | **string** | Signature hash of the mnemonic, which will be used to sign transactions locally. All signature Ids should be present, which might be used to sign transaction. |
**getFromAddress()** | **string** | Blockchain address to send from |
**getMessage()** | **string** | Message to recipient. | [optional]

