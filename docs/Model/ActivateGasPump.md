# ActivateGasPump

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getOwner()** | **string** | The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as "master address" |
**getFrom()** | **int** | The start index of the range of gas pump addresses to activate |
**getTo()** | **int** | The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the <code>from</code> parameter |
**getFromPrivateKey()** | **string** | The private key of the blockchain address that will pay the gas fee for the activation transaction |

[[Back to Index]](../index.md)
