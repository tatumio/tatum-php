---
title: TransferBnbBlockchainKMS
parent: Model
layout: page
---

# TransferBnbBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | Blockchain address to send assets. <br>Example: `tbnb138u9djee6fwphhd2a3628q2h0j5w97yx48zqex` |
**getCurrency()** | **string** | Currency to transfer from Binance Blockchain Account. <br>Example: `BNB` |
**getAmount()** | **string** | Amount to be sent in BNB. <br>Example: `100000` |
**getSignatureId()** | **string** | Signature hash of the mnemonic, which will be used to sign transactions locally. All signature Ids should be present, which might be used to sign transaction. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getFromAddress()** | **string** | Blockchain address to send from <br>Example: `tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39` |
**getMessage()** | **string** | Message to recipient. <br>Example: `Message to recipient` | [optional]

