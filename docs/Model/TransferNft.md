# TransferNft

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getValue()** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. | [optional]
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string** | Blockchain address to send NFT token to |
**getTokenId()** | **string** | ID of the token. |
**getContractAddress()** | **string** | Address of NFT token |
**getProvenance()** | **bool** | True if the contract is provenance type | [optional]
**getProvenanceData()** | **string** | data you want to store with transaction, optional and valid only if provenance contract | [optional]
**getTokenPrice()** | **string** | current price of the token, valid only for provenance | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)
