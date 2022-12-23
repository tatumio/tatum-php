# GenerateCustodialWalletRequest

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getFromPrivateKey()** | **string** | Private key of account, from which the transaction will be initiated. |
**getEnableFungibleTokens()** | **bool** | If address should support ERC20 tokens, it should be marked as true. |
**getEnableNonFungibleTokens()** | **bool** | If address should support ERC721 tokens, it should be marked as true. |
**getEnableSemiFungibleTokens()** | **bool** | If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON. |
**getEnableBatchTransactions()** | **bool** | If address should support batch transfers of the assets, it should be marked as true. |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getFeeLimit()** | **float** | Fee in TRX to be paid. |
**getFrom()** | **string** | Sender address of TRON account in Base58 format. |

[[Back to Index]](../index.md)
