---
title: ExchangeRate
parent: Model
layout: page
---

# ExchangeRate

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | FIAT or crypto asset. | ex.: `BTC`
**getValue()** | **string** | FIAT value of the asset in given base pair. | ex.: `1235.56`
**getBasePair()** | **string** | Base pair. | ex.: `EUR` [default to 'EUR']
**getTimestamp()** | **float** | Date of validity of rate in UTC. | ex.: `1572031674384`
**getSource()** | **string** | Source of base pair. | ex.: `fixer.io`

