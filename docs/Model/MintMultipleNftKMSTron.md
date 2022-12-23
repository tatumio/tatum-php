# MintMultipleNftKMSTron

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string[]** | Blockchain address to send NFT token to. |
**getAccount()** | **string** | Blockchain address to perform transaction from |
**getTokenId()** | **string[]** | ID of token to be created. |
**getUrl()** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**getContractAddress()** | **string** | Address of NFT token |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |

[[Back to Index]](../index.md)
