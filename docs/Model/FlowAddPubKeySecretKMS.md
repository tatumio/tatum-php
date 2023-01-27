---
title: FlowAddPubKeySecretKMS
parent: Model
layout: page
---

# FlowAddPubKeySecretKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from <br>Example: `0x955cd3f17b2fd8ad` |
**getPublicKey()** | **string** | Public key to be used <br>Example: `968c3ce11e871cb2b7161b282655ee5fcb051f3c04894705d771bf11c6fbebfc6556ab8a0c04f45ea56281312336d0668529077c9d66891a6cad3db877acbe90` |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getWeight()** | **float** | Weight of the key. If not set, default 1000 will be used. <br>Example: `1000` | [optional]

