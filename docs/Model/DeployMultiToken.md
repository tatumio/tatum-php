# DeployMultiToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**uri** | **string** | URI of the Multi Token token |
**from_private_key** | **string** | Private key of account address, from which gas for deployment of ERC1155 will be paid. Private key, or signature Id must be present. |
**public_mint** | **bool** | True if the contract is publicMint type | [optional]
**nonce** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
