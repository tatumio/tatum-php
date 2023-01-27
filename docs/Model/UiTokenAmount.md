---
title: UiTokenAmount
parent: Model
layout: page
---

# UiTokenAmount

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | Raw amount of tokens as a string, ignoring decimals. <br>Example: `2653579503` | [optional]
**getDecimals()** | **float** | Number of decimals configured for token's mint. <br>Example: `9` | [optional]
**getUiAmount()** | **mixed** | Token amount as a float, accounting for decimals. <br>Example: `2.653579503` | [optional]
**getUiAmountString()** | **string** | Token amount as a string, accounting for decimals. <br>Example: `2.653579503` | [optional]

