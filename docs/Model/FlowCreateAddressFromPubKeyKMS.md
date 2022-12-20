# FlowCreateAddressFromPubKeyKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Blockchain account to send from |
**public_key** | **string** | Public key to be used; will be assigned to a newly created address and will have a weight of 1000 |
**signature_id** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to Index]](../index.md)
