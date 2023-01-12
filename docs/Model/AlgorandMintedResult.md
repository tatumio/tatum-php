# AlgorandMintedResult

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | The ID of the transaction | [optional]
**getAssetIndex()** | **float** | The ID of the minted NFT | [optional]
**getConfirmed()** | **bool** | If set to "true", the transaction was included in the block within five rounds; otherwise, returned set to "false". "false" does not mean that the transaction was not included in the block; the Tatum API just does not wait for that much time to return the response. | [optional]

[[Back to Index]](../index.md)
