---
title: SolanaBlock
parent: Model
layout: page
---

# SolanaBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBlockHeight()** | **float** |  | ex.: `94778421` [optional]
**getBlockTime()** | **float** |  | ex.: `1638279333` [optional]
**getBlockhash()** | **string** |  | ex.: `Ch7qVhCkSqEvhWE8xzJZbJKRcsH6wtTjfiMJdt9eKiD7` [optional]
**getParentSlot()** | **float** |  | ex.: `97742681` [optional]
**getPreviousBlockhash()** | **string** |  | ex.: `C3vsoVwVWx7yPRhsNoKpcm2CJTrnVcvimdC4bd3jTPbj` [optional]
**getRewards()** | [**\Tatum\Model\SolanaBlockReward[]**](../SolanaBlockReward) |  | ex.: `null` [optional]
**getTransactions()** | [**\Tatum\Model\SolanaBlockTx[]**](../SolanaBlockTx) |  | ex.: `null` [optional]

