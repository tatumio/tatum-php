# GenerateAuctionCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**fee_recipient** | **string** | Address of the recipient of the fee for the trade. |
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**auction_fee** | **float** | Percentage of the selling amount of the NFT asset. 100 - 1% |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
