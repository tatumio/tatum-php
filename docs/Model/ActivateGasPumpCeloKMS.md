# Model/ActivateGasPumpCeloKMS

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getOwner()** | **string** | The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as "master address" |
**getFrom()** | **int** | The start index of the range of gas pump addresses to activate |
**getTo()** | **int** | The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the <code>from</code> parameter |
**getFeeCurrency()** | **string** | The currency in which the gas fee will be paid |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that will pay the gas fee for the activation transaction |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address that will pay the gas fee that was generated from the mnemonic | [optional]

[[Back to Index]](../index.md)
