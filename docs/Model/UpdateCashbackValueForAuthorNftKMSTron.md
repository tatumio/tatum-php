# Model/UpdateCashbackValueForAuthorNftKMSTron

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTokenId()** | **string** | The ID of the NFT to update royalty information for |
**getContractAddress()** | **string** | The blockchain address of the NFT to update royalty information for |
**getCashbackValue()** | **string** | The new value of the royalty cashback to be set for the author of the NFT; to disable the royalties for the NFT completely, set this parameter to 0 |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |
**getAccount()** | **string** | The blockchain address of the NFT author from which the transaction will be performed |
**getSignatureId()** | **string** | The KMS identifier of the private key of the NFT author's address |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the NFT author's address that was generated from the mnemonic | [optional]

[[Back to Index]](../index.md)
