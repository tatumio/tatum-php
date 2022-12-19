# GenerateCustodialWalletBatchCeloKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**fee_currency** | **string** | Currency to pay for transaction gas |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**batch_count** | **float** | Number of addresses to generate. |
**owner** | **string** | Owner of the addresses. |
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**nonce** | **float** | Nonce to be set to the transaction. If not present, last known nonce will be used. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
