# EstimateFeeFromAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to estimate fee for. |
**type** | **string** | Type of transaction |
**from_address** | **string[]** | Array of addresses. Tatum will automatically scan last 100 transactions for each address and will use all of the unspent values. We advise to use this option if you have 1 address per 1 transaction only. |
**to** | [**\Tatum\Model\EstimateFeeFromAddressToInner[]**](EstimateFeeFromAddressToInner.md) | Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee. |

[[Back to API list]](../../README.md#api-endpoints)
