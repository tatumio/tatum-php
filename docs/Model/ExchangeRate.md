---
title: ExchangeRate
parent: Model
layout: page
---

# ExchangeRate

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | FIAT or crypto asset. <br>Example: `BTC` |
**getValue()** | **string** | FIAT value of the asset in given base pair. <br>Example: `1235.56` |
**getBasePair()** | **string** | Base pair. <br>Example: `EUR` | [default to 'EUR']
**getTimestamp()** | **float** | Date of validity of rate in UTC. <br>Example: `1572031674384` |
**getSource()** | **string** | Source of base pair. <br>Example: `fixer.io` |

