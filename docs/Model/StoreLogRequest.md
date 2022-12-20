# StoreLogRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | The data to be stored on the blockchain |
**chain** | **string** | The blockchain to store the data on |
**from_private_key** | **string** | The private key of the blockchain address from which the transaction will be made and the transaction fee will be deducted |
**from** | **string** | (Elrond only; required) The blockchain address from which the transaction will be made&lt;br/&gt;This is a mandatory parameter for Elrond. Do not use it with any other blockchain. | [optional]
**to** | **string** | The blockchain address to store the data on&lt;br/&gt;If not provided, the data will be stored on the address from which the transaction is made. | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**from_shard_id** | **float** | (Harmony only) The ID of the shard from which the data should be read | [optional]
**to_shard_id** | **float** | (Harmony only) The ID of the shard to which the data should be recorded | [optional]
**eth_fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |

[[Back to Index]](../index.md)
