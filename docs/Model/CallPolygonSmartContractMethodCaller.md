# CallPolygonSmartContractMethodCaller

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**caller** | **string** | The address of the account, which will be sender and fee payer of this transaction |
**contract_address** | **string** | The address of the smart contract |
**amount** | **string** | Amount of the assets to be sent. | [optional]
**method_name** | **string** | Name of the method to invoke on smart contract. |
**method_abi** | **object** | ABI of the method to invoke. |
**params** | **string[]** |  |
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)