# UpdateCashbackValueForAuthorNftKMSCelo

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTokenId()** | **string** | The ID of the NFT to update royalty information for |
**getContractAddress()** | **string** | The blockchain address of the NFT to update royalty information for |
**getCashbackValue()** | **string** | The new value of the royalty cashback to be set for the author of the NFT; to disable the royalties for the NFT completely, set this parameter to 0 |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getSignatureId()** | **string** | The KMS identifier of the private key of the NFT author's address |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the NFT author's address that was generated from the mnemonic | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
