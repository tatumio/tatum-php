---
title: AdaTransactionFromUTXOInner
parent: Model
layout: page
---

# AdaTransactionFromUTXOInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxHash()** | **string** | Transaction hash of the UTXO to be spent. <br>Example: `53faa103e8217e1520f5149a4e8c84aeb58e55bdab11164a95e69a8ca50f8fcc` |
**getIndex()** | **float** | Index of the UTXO to be spent. <br>Example: `0` |
**getPrivateKey()** | **string** | Private key of the UTXO to be spent. Private key, or signature Id must be present. <br>Example: `7808a501e1bbc9926ac8ac6981e47cb0401288ae331a1f2333d1bed46c5b3051b5f875c39477b05bc3a43a3800b763f616ae3646f21df0ab5d95db944e71f5cfa8082d5c4e6241d49b17b2b6173f01bb3fd03be012cc8908ceea9e559e33e4fc` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` | [optional]

