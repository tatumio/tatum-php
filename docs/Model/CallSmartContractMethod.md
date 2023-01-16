# Model/CallSmartContractMethod

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getContractAddress()** | **string** | The address of the smart contract |
**getMethodName()** | **string** | Name of the method to invoke on smart contract. |
**getMethodAbi()** | **object** | ABI of the method to invoke. |
**getParams()** | **object[]** | Parameters of the method to be invoked. |
**getAmount()** | **string** | Amount of the assets to be sent. | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)
