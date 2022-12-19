# AlgoTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | The ID of the virtual account to send Algos from |
**account** | **string** | The blockchain address of the Algorand wallet (account) associated with the virtual account |
**address** | **string** | The blockchain address to send Algos to |
**amount** | **string** | The amount to send in Algos |
**fee** | **string** | The transaction fee in Algos |
**private_key** | **string** | The secret of the Algorand wallet (account). Secret, or signature Id must be present. |
**compliant** | **bool** | Compliance check; if the withdrawal is not compliant, it will not be processed | [optional]
**payment_id** | **string** | The identifier of the Algo transfer that is shown on the virtual account for the created transaction | [optional]
**sender_note** | **string** | The note for the recipient; must not contain spaces | [optional]
**signature_id** | **string** | The identifier of the secret of the Algorand wallet (account) in the signing application. Secret, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
