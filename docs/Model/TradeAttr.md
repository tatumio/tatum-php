# TradeAttr

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSealDate()** | **float** | Time in UTC when the future will be filled. |
**getPercentBlock()** | **float** | Percentage of the future amount which the selling or buying account must have available for the future’s creation. This amount will be blocked until the future is filled or expires. | [optional]
**getPercentPenalty()** | **float** | If one of the parties doesn’t have the full amount of the future at the time of expiration filled, the party will be penalized. | [optional]

[[Back to Index]](../index.md)
