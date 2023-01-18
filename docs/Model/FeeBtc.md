---
title: FeeBtc
parent: Model
layout: page
---

# FeeBtc model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFast()** | **string** | Transaction fee in BTC/LTC to be paid, if transaction should be included in next 1-2 blocks. |
**getMedium()** | **string** | Transaction fee in BTC/LTC to be paid, if transaction should be included in next 5-6 blocks. |
**getSlow()** | **string** | Transaction fee in BTC/LTC to be paid, if transaction should be included in next 7+ blocks. |

