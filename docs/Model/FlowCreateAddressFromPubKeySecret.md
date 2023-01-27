---
title: FlowCreateAddressFromPubKeySecret
parent: Model
layout: page
---

# FlowCreateAddressFromPubKeySecret

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from <br>Example: `0x955cd3f17b2fd8ad` |
**getPublicKey()** | **string** | Public key to be used; will be assigned to a newly created address and will have a weight of 1000 <br>Example: `968c3ce11e871cb2b7161b282655ee5fcb051f3c04894705d771bf11c6fbebfc6556ab8a0c04f45ea56281312336d0668529077c9d66891a6cad3db877acbe90` |
**getPrivateKey()** | **string** | Secret for account. Secret, or signature Id must be present. <br>Example: `37afa218d41d9cd6a2c6f2b96d9eaa3ad96c598252bc50e4d45d62f9356a51f8` |

