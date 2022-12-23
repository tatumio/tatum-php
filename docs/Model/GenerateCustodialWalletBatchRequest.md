# GenerateCustodialWalletBatchRequest

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getFeesCovered()** | **bool** | If set to true, blockchain fees will be covered from credits. |
**getBatchCount()** | **float** | Number of addresses to generate. |
**getOwner()** | **string** | Owner of the addresses. |
**getFromPrivateKey()** | **string** | Private key of account, from which the transaction will be initiated. |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getFeeLimit()** | **float** | Fee limit to be set, in TRX |
**getFrom()** | **string** | Sender address. |

[[Back to Index]](../index.md)
