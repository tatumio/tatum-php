# FlowCreateAddressFromPubKeyRequest

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccount()** | **string** | Blockchain account to send from |
**getPublicKey()** | **string** | Public key to be used; will be assigned to a newly created address and will have a weight of 1000 |
**getMnemonic()** | **string** | Mnemonic to generate private key. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. |
**getPrivateKey()** | **string** | Secret for account. Secret, or signature Id must be present. |
**getSignatureId()** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |

[[Back to Index]](../index.md)
