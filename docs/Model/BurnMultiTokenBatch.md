# BurnMultiTokenBatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**account** | **string** | Address of holder |
**token_id** | **string[]** | The IDs of the Multi Tokens to be destroyed. |
**amounts** | **string[]** | The amounts of the Multi Tokens to be destroyed. |
**data** | **string** | Data in bytes | [optional]
**contract_address** | **string** | The address of the Multi Token smart contract |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
