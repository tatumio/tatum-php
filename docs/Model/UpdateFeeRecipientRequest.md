# UpdateFeeRecipientRequest

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work with. |
**getContractAddress()** | **string** | Blockchain address of the smart contract |
**getFeeRecipient()** | **string** | Recipient address of the marketplace fee. |
**getFromPrivateKey()** | **string** | The private key of the marketspace authority |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the marketspace authority |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getTreasuryWithdrawalDestination()** | **string** | The blockchain address of the new marketplace fee recipient |
**getFrom()** | **string** | The blockchain address of the marketplace authority |

[[Back to Index]](../index.md)
