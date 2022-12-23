# NftMintMultipleErc721Request

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string[]** | Blockchain address to send NFT token to. |
**getTokenId()** | **string[]** | ID of token to be created. |
**getMinter()** | **string** | Address of NFT minter, which will be used to mint the tokens. From this address, transaction fees will be deducted. |
**getUrl()** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**getContractAddress()** | **string** | Address of NFT token |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getAuthorAddresses()** | **string[][]** | List of addresses for every token, where royalty cashback for every transfer of this NFT will be send. Royalties are paid in native blockchain currency CELO. | [optional]
**getCashbackValues()** | **string[][]** | List of values for every token, which will be paid as a royalty for author of the NFT token with every token transfer. This is exact value in native blockchain currency. | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |
**getAccount()** | **string** | Blockchain address of the sender account. |
**getPrivateKey()** | **string** | Private key of sender address. Private key, mnemonic and index or signature Id must be present. |
**getMnemonic()** | **string** | Mnemonic to generate private key of sender address. |
**getIndex()** | **int** | Derivation index of sender address. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
