# AddNftMinter

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getContractAddress()** | **string** | The blockchain address of the NFT smart contract |
**getMinter()** | **string** | The blockchain address to add to the smart contract as an NFT minter |
**getFromPrivateKey()** | **string** | The private key of the blockchain address from which the fee will be deducted |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getFeeCurrency()** | **string** | (Celo only) The currency in which the transaction fee will be paid | [optional]

[[Back to Index]](../index.md)
