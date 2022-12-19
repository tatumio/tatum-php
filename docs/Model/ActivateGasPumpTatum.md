# ActivateGasPumpTatum

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**owner** | **string** | The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as \&quot;master address\&quot; |
**from** | **int** | The start index of the range of gas pump addresses to activate |
**to** | **int** | The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the &lt;code&gt;from&lt;/code&gt; parameter |
**fees_covered** | **bool** | Set to \&quot;true\&quot; to cover the gas fee by credits from your monthly credit allowance. |

[[Back to API list]](../../README.md#api-endpoints)
