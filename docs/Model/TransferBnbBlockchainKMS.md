---
title: TransferBnbBlockchainKMS
parent: Model
layout: page
---

# TransferBnbBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTo()** | **string** | Blockchain address to send assets. | ex.: `tbnb138u9djee6fwphhd2a3628q2h0j5w97yx48zqex`
**getCurrency()** | **string** | Currency to transfer from Binance Blockchain Account. | ex.: `BNB`
**getAmount()** | **string** | Amount to be sent in BNB. | ex.: `100000`
**getSignatureId()** | **string** | Signature hash of the mnemonic, which will be used to sign transactions locally. All signature Ids should be present, which might be used to sign transaction. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`
**getFromAddress()** | **string** | Blockchain address to send from | ex.: `tbnb1q82g2h9q0kfe7sysnj5w7nlak92csfjztymp39`
**getMessage()** | **string** | Message to recipient. | ex.: `Message to recipient` [optional]

