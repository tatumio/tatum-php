# CreateGasPump

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getOwner()** | **string** | The blockchain address that will own the precalculated gas pump addresses and will be used to pay gas fees for operations made on the gas pump addresses; can be referred to as "master address" |
**getFrom()** | **int** | The start index of the range of gas pump addresses to precalculate |
**getTo()** | **int** | The end index of the range of gas pump addresses to precalculate; must be greater than or equal to the value in the <code>from</code> parameter |

[[Back to Index]](../index.md)
