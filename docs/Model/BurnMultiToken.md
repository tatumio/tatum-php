# BurnMultiToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**account** | **string** | Address of holder |
**token_id** | **string** | ID of token to be destroyed. |
**contract_address** | **string** | Address of Multi Token token |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**data** | **string** | Data in bytes | [optional]
**amount** | **string** | amount of token to be destroyed. |
**nonce** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)
