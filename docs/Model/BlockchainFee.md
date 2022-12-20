# BlockchainFee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fast** | **float** | Fast transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei |
**medium** | **float** | Medium transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei |
**slow** | **float** | Slow transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei |
**base_fee** | **float** | (evm-based only) This is the minimum fee needs to paid in order for the tx to be accepted into block. | [optional]
**time** | **string** | Last time fees were recalculated |
**block** | **float** | Last used to calculate fee from |

[[Back to Index]](../index.md)
