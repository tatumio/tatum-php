# BlockchainFee

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFast()** | **float** | Fast transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei |
**getMedium()** | **float** | Medium transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei |
**getSlow()** | **float** | Slow transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei |
**getBaseFee()** | **float** | (evm-based only) This is the minimum fee needs to paid in order for the tx to be accepted into block. | [optional]
**getTime()** | **string** | Last time fees were recalculated |
**getBlock()** | **float** | Last used to calculate fee from |

[[Back to Index]](../index.md)
