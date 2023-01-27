---
title: FlowAddPubKeyMnemonic
parent: Model
layout: page
---

# FlowAddPubKeyMnemonic

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from <br>Example: `0x955cd3f17b2fd8ad` |
**getPublicKey()** | **string** | Public key to be used <br>Example: `968c3ce11e871cb2b7161b282655ee5fcb051f3c04894705d771bf11c6fbebfc6556ab8a0c04f45ea56281312336d0668529077c9d66891a6cad3db877acbe90` |
**getMnemonic()** | **string** | Mnemonic to generate private key. <br>Example: `urge pulp usage sister evidence arrest palm math please chief egg abuse` |
**getIndex()** | **float** | Index to the specific address from mnemonic. <br>Example: `null` |
**getWeight()** | **float** | Weight of the key. If not set, default 1000 will be used. <br>Example: `1000` | [optional]

