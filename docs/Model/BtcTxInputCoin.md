---
title: BtcTxInputCoin
parent: Model
layout: page
---

# BtcTxInputCoin

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getVersion()** | **float** |  <br>Example: `2` | [optional]
**getBlockNumber()** | **float** |  <br>Example: `1611608` | [optional]
**getValue()** | **float** | Amount of the transaction, in Satoshis (1 BTC = 100 000 000 Satoshis) <br>Example: `1341956178` | [optional]
**getScript()** | **string** |  <br>Example: `0014049a97d91d4e1123899bf48c5ba6ce3fd959664e` | [optional]
**getAddress()** | **string** | Sender address. <br>Example: `tb1qqjdf0kgafcgj8zvm7jx9hfkw8lv4jejw6wsmjg` | [optional]
**getCoinbase()** | **bool** | Coinbase transaction - miner fee. <br>Example: `false` | [optional]

