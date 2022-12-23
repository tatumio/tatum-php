# AddNftMinterKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getContractAddress()** | **string** | The blockchain address of the NFT smart contract |
**getMinter()** | **string** | The blockchain address to add to the smart contract as an NFT minter |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getFeeCurrency()** | **string** | (Celo only) The currency in which the transaction fee will be paid | [optional]

[[Back to Index]](../index.md)
