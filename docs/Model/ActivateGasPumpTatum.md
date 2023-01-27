---
title: ActivateGasPumpTatum
parent: Model
layout: page
---

# ActivateGasPumpTatum

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ETH` |
**getOwner()** | **string** | The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as "master address" <br>Example: `0x2b5a0bE5940B63dE1eDdCCCa7bd977357e2488eD` |
**getFrom()** | **int** | The start index of the range of gas pump addresses to activate <br>Example: `0` |
**getTo()** | **int** | The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the <code>from</code> parameter <br>Example: `200` |
**getFeesCovered()** | **bool** | Set to "true" to cover the gas fee by credits from your monthly credit allowance. <br>Example: `true` |

