# DogeTx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Transaction hash. | [optional]
**size** | **float** | Size of the transaction. | [optional]
**vsize** | **float** |  | [optional]
**version** | **float** | Index of the transaction. | [optional]
**vin** | [**\Tatum\Model\DogeTxVinInner[]**](DogeTxVinInner.md) | List of transactions, from which assets are being sent. | [optional]
**vout** | [**\Tatum\Model\DogeTxVoutInner[]**](DogeTxVoutInner.md) | List of recipient addresses and amounts to send to each of them. | [optional]
**locktime** | **float** |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
