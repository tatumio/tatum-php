# Model/UpdateFeeTronKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Address of the marketplace smart contract. |
**getFrom()** | **string** | Address of the recipient of the fee for the trade. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getMarketplaceFee()** | **float** | The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | [optional]
**getFeeLimit()** | **float** | Fee in TRX to be paid. |

[[Back to Index]](../index.md)
