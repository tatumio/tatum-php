# Model/BurnNftKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTokenId()** | **string** | The ID of the NFT to burn |
**getContractAddress()** | **string** | The blockchain address of the NFT to burn |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic | [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)
