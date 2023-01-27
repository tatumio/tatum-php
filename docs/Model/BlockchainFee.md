---
title: BlockchainFee
parent: Model
layout: page
---

# BlockchainFee

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFast()** | **float** | Fast transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei <br>Example: `14766927339` |
**getMedium()** | **float** | Medium transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei <br>Example: `13333333333` |
**getSlow()** | **float** | Slow transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei <br>Example: `12953333333` |
**getBaseFee()** | **float** | (evm-based only) This is the minimum fee needs to paid in order for the tx to be accepted into block. <br>Example: `12657357496` | [optional]
**getTime()** | **string** | Last time fees were recalculated <br>Example: `2022-12-08T08:42:04.518Z` |
**getBlock()** | **float** | Last used to calculate fee from <br>Example: `16138867` |

