# ResponseData

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | [**\Tatum\Model\Address**](Address.md) |  | [optional]
**getAmount()** | **float** | Amount of unprocessed transaction outputs, that can be used for withdrawal. Bitcoin, Litecoin, Bitcoin Cash only. | [optional]
**getVIn()** | **string** | Last used unprocessed transaction output, that can be used. Bitcoin, Litecoin, Bitcoin Cash only. If -1, it indicates prepared vOut with amount to be transferred to pool address. | [optional]
**getVInIndex()** | **int** | Index of last used unprocessed transaction output in raw transaction, that can be used. Bitcoin, Litecoin, Bitcoin Cash only. | [optional]
**getScriptPubKey()** | **string** | Script of last unprocessed UTXO. Bitcoin SV only. | [optional]

[[Back to Index]](../index.md)
