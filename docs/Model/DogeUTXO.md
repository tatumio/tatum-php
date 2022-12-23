# DogeUTXO

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getScriptPubKey()** | [**\Tatum\Model\DogeTxVoutInnerScriptPubKey**](DogeTxVoutInnerScriptPubKey.md) |  | [optional]
**getVersion()** | **float** | The version of the transaction | [optional]
**getHeight()** | **float** | The height (number) of the block where the transaction is included in | [optional]
**getValue()** | **float** | The amount of the UTXO (in 1/1000000 DOGE) | [optional]
**getCoinbase()** | **bool** | If set to "true", the transaction is a coinbase transaction (a transaction created by a Bitcoin miner to collect their reward) | [optional]
**getBestblock()** | **string** | The block hash | [optional]

[[Back to Index]](../index.md)
