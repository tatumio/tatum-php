# FlowCreateAddressFromPubKeyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Blockchain account to send from |
**public_key** | **string** | Public key to be used; will be assigned to a newly created address and will have a weight of 1000 |
**mnemonic** | **string** | Mnemonic to generate private key. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. |
**private_key** | **string** | Secret for account. Secret, or signature Id must be present. |
**signature_id** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
