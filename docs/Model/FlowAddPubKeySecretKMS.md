# FlowAddPubKeySecretKMS

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from |
**getPublicKey()** | **string** | Public key to be used |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getWeight()** | **float** | Weight of the key. If not set, default 1000 will be used. | [optional]

[[Back to Index]](../index.md)
