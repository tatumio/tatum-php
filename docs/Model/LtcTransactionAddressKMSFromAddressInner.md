---
title: LtcTransactionAddressKMSFromAddressInner
parent: Model
layout: page
---

# LtcTransactionAddressKMSFromAddressInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | The blockchain address to send the assets from <br>Example: `2N9bBiH2qrTDrPCzrNhaFGdkNKS86PJAAAS` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the address to send the assets from <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based and you run KMS v6.2 or later) The index of the address to send the assets from that was generated from the mnemonic <br>Example: `0` | [optional]

