# AddMultiTokenMinter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**contract_address** | **string** | Address of MultiToken token |
**minter** | **string** | Address of MultiToken minter |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas, only valid for CELO chain. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
