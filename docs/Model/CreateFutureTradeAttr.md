# CreateFutureTradeAttr

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seal_date** | **float** | Time in UTC when the future will be filled. |
**percent_block** | **mixed** | Percentage of the future amount which selling or buying account must have available on future creation. This amount will be blocked till future is filled or expires. | [optional]
**percent_penalty** | **mixed** | If one of the parties dont have filled full amount of the future at the time of expiration, the party will be penalized. Penalty is sent to opposite party in exchanged crypto. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
