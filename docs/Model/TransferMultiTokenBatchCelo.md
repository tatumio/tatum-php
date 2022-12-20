# TransferMultiTokenBatchCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**to** | **string** | Blockchain address to send Multi Token token to |
**token_id** | **string[]** | ID of token. |
**amounts** | **string[]** | Amount of token to be transferred |
**data** | **string** | Data in bytes | [optional]
**contract_address** | **string** | Address of Multi Token token |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Celo transaction. If not present, last known nonce will be used. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas | [optional]

[[Back to Index]](../index.md)
