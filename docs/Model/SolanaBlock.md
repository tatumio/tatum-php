---
title: SolanaBlock
parent: Model
layout: page
---

# SolanaBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getBlockHeight()** | **float** |  <br>Example: `94778421` | [optional]
**getBlockTime()** | **float** |  <br>Example: `1638279333` | [optional]
**getBlockhash()** | **string** |  <br>Example: `Ch7qVhCkSqEvhWE8xzJZbJKRcsH6wtTjfiMJdt9eKiD7` | [optional]
**getParentSlot()** | **float** |  <br>Example: `97742681` | [optional]
**getPreviousBlockhash()** | **string** |  <br>Example: `C3vsoVwVWx7yPRhsNoKpcm2CJTrnVcvimdC4bd3jTPbj` | [optional]
**getRewards()** | [**\Tatum\Model\SolanaBlockReward[]**](../SolanaBlockReward) |  <br>Example: `null` | [optional]
**getTransactions()** | [**\Tatum\Model\SolanaBlockTx[]**](../SolanaBlockTx) |  <br>Example: `null` | [optional]

