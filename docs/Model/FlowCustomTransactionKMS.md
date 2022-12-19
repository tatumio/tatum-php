# FlowCustomTransactionKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Blockchain account to send from |
**transaction** | **string** | Transaction string to send to the chain. |
**args** | [**\Tatum\Model\FlowCustomTransactionPKArgsInner[]**](FlowCustomTransactionPKArgsInner.md) |  |
**signature_id** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
