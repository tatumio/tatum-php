# GenerateAuctionCelo

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getFeeRecipient()** | **string** | Address of the recipient of the fee for the trade. |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getAuctionFee()** | **float** | Percentage of the selling amount of the NFT asset. 100 - 1% |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)