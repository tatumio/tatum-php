# CallPolygonSmartContractMethodCaller

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getCaller()** | **string** | The address of the account, which will be sender and fee payer of this transaction |
**getContractAddress()** | **string** | The address of the smart contract |
**getAmount()** | **string** | Amount of the assets to be sent. | [optional]
**getMethodName()** | **string** | Name of the method to invoke on smart contract. |
**getMethodAbi()** | **object** | ABI of the method to invoke. |
**getParams()** | **string[]** |  |
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)
