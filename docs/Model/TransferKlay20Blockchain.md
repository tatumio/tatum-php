# TransferKlay20Blockchain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Blockchain address to send ERC20 token to |
**amount** | **string** | Amount to be sent. |
**contract_address** | **string** | Address of ERC20 token |
**digits** | **float** | Number of decimal points that ERC20 token has. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Klaytn transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\TransferKlay20BlockchainFee**](TransferKlay20BlockchainFee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
