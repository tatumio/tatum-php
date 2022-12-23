# EstimateFeeBlockchain200Response

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFast()** | **string** | Transaction fee in BTC/LTC to be paid, if transaction should be included in next 1-2 blocks. |
**getMedium()** | **string** | Transaction fee in BTC/LTC to be paid, if transaction should be included in next 5-6 blocks. |
**getSlow()** | **string** | Transaction fee in BTC/LTC to be paid, if transaction should be included in next 7+ blocks. |
**getGasLimit()** | **float** | Gas limit for transaction in gas price. |
**getGasPrice()** | **float** | Gas price in Gwei. |

[[Back to Index]](../index.md)
