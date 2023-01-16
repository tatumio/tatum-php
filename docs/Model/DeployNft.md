# Model/DeployNft

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getName()** | **string** | Name of the NFT token |
**getSymbol()** | **string** | Symbol of the NFT token |
**getFromPrivateKey()** | **string** | Private key of account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. |
**getProvenance()** | **bool** | True if the contract is provenance percentage royalty type. False by default. <a href="https://github.com/tatumio/smart-contracts" target="_blank">Details and sources available here.</a> | [optional]
**getCashback()** | **bool** | True if the contract is fixed price royalty type. False by default. <a href="https://github.com/tatumio/smart-contracts" target="_blank">Details and sources available here.</a> | [optional]
**getPublicMint()** | **bool** | True if the contract is publicMint type. False by default. | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)
