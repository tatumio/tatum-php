# TransferAlgoErc20

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_account_id** | **string** | The ID of the virtual account to send the ERC-20-equivalent Algorand tokens from |
**address** | **string** | The blockchain address to send the ERC-20-equivalent Algorand tokens to |
**amount** | **string** | The amount of the ERC-20-equivalent Algorand tokens to send |
**private_key** | **string** | The secret of the Algorand wallet (account). Secret, or signature Id must be present. |
**compliant** | **bool** | Compliance check; if the withdrawal is not compliant, it will not be processed | [optional]
**payment_id** | **string** | The identifier of the token transfer that is shown on the virtual account for the created transaction | [optional]
**sender_note** | **string** | The note for the recipient; must not contain spaces | [optional]

[[Back to Index]](../index.md)
