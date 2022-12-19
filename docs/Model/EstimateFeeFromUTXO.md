# EstimateFeeFromUTXO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to estimate fee for. |
**type** | **string** | Type of transaction |
**from_utxo** | [**\Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[]**](EstimateFeeFromUTXOFromUTXOInner.md) | Array of transaction hashes, index of UTXO in it and corresponding private keys. Use this option if you want to calculate amount to send manually. Either fromUTXO or fromAddress must be present. |
**to** | [**\Tatum\Model\EstimateFeeFromAddressToInner[]**](EstimateFeeFromAddressToInner.md) | Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee. |

[[Back to API list]](../../README.md#api-endpoints)
