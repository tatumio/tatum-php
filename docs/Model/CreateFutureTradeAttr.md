---
title: CreateFutureTradeAttr
parent: Model
layout: page
---

# CreateFutureTradeAttr

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSealDate()** | **float** | Time in UTC when the future will be filled. <br>Example: `1572031674384` |
**getPercentBlock()** | **mixed** | Percentage of the future amount which selling or buying account must have available on future creation. This amount will be blocked till future is filled or expires. <br>Example: `1.5` | [optional]
**getPercentPenalty()** | **mixed** | If one of the parties dont have filled full amount of the future at the time of expiration, the party will be penalized. Penalty is sent to opposite party in exchanged crypto. <br>Example: `1.5` | [optional]

