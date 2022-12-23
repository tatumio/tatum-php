# TransferNftKMS

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getValue()** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. | [optional]
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string** | Blockchain address to send NFT token to |
**getTokenId()** | **string** | ID of the token. |
**getContractAddress()** | **string** | Address of NFT token |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getProvenance()** | **bool** | True if the contract is provenance type | [optional]
**getProvenanceData()** | **string** | data you want to store with transaction, optional and valid only if provenance contract | [optional]
**getTokenPrice()** | **string** | current price of the token, valid only for provenance | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)
