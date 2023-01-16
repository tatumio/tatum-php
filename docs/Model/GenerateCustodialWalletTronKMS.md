# Model/GenerateCustodialWalletTronKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getFeeLimit()** | **float** | Fee in TRX to be paid. |
**getFrom()** | **string** | Sender address of TRON account in Base58 format. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getEnableFungibleTokens()** | **bool** | If address should support ERC20 tokens, it should be marked as true. |
**getEnableNonFungibleTokens()** | **bool** | If address should support ERC721 tokens, it should be marked as true. |
**getEnableSemiFungibleTokens()** | **bool** | If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON. |
**getEnableBatchTransactions()** | **bool** | If address should support batch transfers of the assets, it should be marked as true. |

[[Back to Index]](../index.md)
