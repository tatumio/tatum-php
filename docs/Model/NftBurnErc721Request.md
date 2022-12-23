# NftBurnErc721Request

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTokenId()** | **string** | ID of token to be destroyed. |
**getContractAddress()** | **string** | Address of NFT token |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getIndex()** | **int** | Derivation index of sender address. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |
**getAccount()** | **string** | Blockchain address of the sender account. |
**getPrivateKey()** | **string** | Private key of sender address. Private key, mnemonic and index or signature Id must be present. |
**getMnemonic()** | **string** | Mnemonic to generate private key of sender address. |

[[Back to Index]](../index.md)
