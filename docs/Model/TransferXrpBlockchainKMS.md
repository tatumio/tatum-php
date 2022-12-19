# TransferXrpBlockchainKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_account** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**to** | **string** | Blockchain address to send assets |
**amount** | **string** | Amount to be sent, in XRP. |
**signature_id** | **string** | Identifier of the secret associated in signing application. Secret, or signature Id must be present. |
**fee** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | [optional]
**source_tag** | **int** | Source tag of sender account, if any. | [optional]
**destination_tag** | **int** | Destination tag of recipient account, if any. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
