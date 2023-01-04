# UpdateFeeRequest

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getContractAddress()** | **string** | The blockchain address of the marketplace smart contract |
**getMarketplaceFee()** | **float** | The new percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. |
**getFromPrivateKey()** | **string** | The private key of the marketspace authority |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the marketspace authority |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getFrom()** | **string** | The blockchain address of the marketplace authority |

[[Back to Index]](../index.md)
