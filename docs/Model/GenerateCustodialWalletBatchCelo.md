# GenerateCustodialWalletBatchCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**fee_currency** | **string** | Currency to pay for transaction gas |
**from_private_key** | **string** | Private key of account, from which the transaction will be initiated. |
**batch_count** | **float** | Number of addresses to generate. |
**owner** | **string** | Owner of the addresses. |
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**nonce** | **float** | Nonce to be set to the transaction. If not present, last known nonce will be used. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
