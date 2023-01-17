---
title: TokenBalance
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountIndex()** | **float** | Index of the account in which the token balance is provided for. | [optional]
**getMint()** | **string** | Pubkey of the token's mint. | [optional]
**getOwner()** | **string** | Pubkey of token balance's owner. | [optional]
**getProgramId()** | **string** | Pubkey of the Token program that owns the account. | [optional]
**getUiTokenAmount()** | [**\Tatum\Model\UiTokenAmount**](../UiTokenAmount) |  | [optional]

