# UpdateFeeRecipient

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Address of the marketplace smart contract. |
**fee_recipient** | **string** | Recipient address of the marketplace fee. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
