# DeployNftTronKMS

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getAccount()** | **string** | Blockchain address to perform transaction from |
**getName()** | **string** | Name of the NFT token |
**getSymbol()** | **string** | Symbol of the NFT token |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX); deployment of a smart contract on TRON costs around 580 TRX |

[[Back to Index]](../index.md)
