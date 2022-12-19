# XlmAccountBalancesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**balance** | **string** | The number of units of an asset held by this account. | [optional]
**limit** | **string** | The maximum amount of this asset that this account is willing to accept. Specified when opening a trustline. | [optional]
**buying_liabilities** | **string** | The sum of all buy offers owned by this account for this asset. | [optional]
**selling_liabilities** | **string** | The sum of all sell offers owned by this account for this asset. | [optional]
**asset_type** | **string** | Either native, credit_alphanum4, or credit_alphanum12. | [optional]
**asset_code** | **string** | The code for this asset. | [optional]
**asset_issuer** | **string** | The Stellar address of this asset’s issuer. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
