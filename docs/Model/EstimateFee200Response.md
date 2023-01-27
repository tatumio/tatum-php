---
title: EstimateFee200Response
parent: Model
layout: page
---

# EstimateFee200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFast()** | **string** | Transaction fee in BTC/LTC to be paid, if transaction should be included in next 1-2 blocks. <br>Example: `0.006584` |
**getMedium()** | **string** | Transaction fee in BTC/LTC to be paid, if transaction should be included in next 5-6 blocks. <br>Example: `0.004584` |
**getSlow()** | **string** | Transaction fee in BTC/LTC to be paid, if transaction should be included in next 7+ blocks. <br>Example: `0.002584` |
**getGasLimit()** | **float** | Gas limit for transaction in gas price. <br>Example: `40000` |
**getGasPrice()** | **float** | Gas price in Gwei. <br>Example: `20` |

