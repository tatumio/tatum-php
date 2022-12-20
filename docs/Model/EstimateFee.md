# EstimateFee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to estimate fee for. |
**type** | **string** | Type of transaction |
**sender** | **string** | Sender address, if type is TRANSFER_ERC20 | [optional]
**recipient** | **string** | Blockchain address to send assets, if type is TRANSFER_ERC20 | [optional]
**contract_address** | **string** | Contract address of ERC20 token, if type is TRANSFER_ERC20 | [optional]
**amount** | **string** | Amount to be sent in ERC20, if type is TRANSFER_ERC20 | [optional]

[[Back to Index]](../index.md)
