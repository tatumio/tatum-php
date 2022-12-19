# TransferErc721

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Blockchain address to send ERC721 token to |
**token_id** | **string** | ID of token. |
**contract_address** | **string** | Address of ERC721 token |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
