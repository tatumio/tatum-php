---
title: TokenBalance
parent: Model
layout: page
---

# TokenBalance

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountIndex()** | **float** | Index of the account in which the token balance is provided for. | ex.: `1` [optional]
**getMint()** | **string** | Pubkey of the token's mint. | ex.: `So11111111111111111111111111111111111111112` [optional]
**getOwner()** | **string** | Pubkey of token balance's owner. | ex.: `BYM81n8HvTJuqZU1PmTVcwZ9G8uoji7FKM6EaPkwphPt` [optional]
**getProgramId()** | **string** | Pubkey of the Token program that owns the account. | ex.: `TokenkegQfeZyiNwAJbNbGKPFXCWuBvf9Ss623VQ5DA` [optional]
**getUiTokenAmount()** | [**\Tatum\Model\UiTokenAmount**](../UiTokenAmount) |  | ex.: `null` [optional]

