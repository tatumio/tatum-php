# EstimateFeeFromUTXO

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to estimate fee for. |
**getType()** | **string** | Type of transaction |
**getFromUtxo()** | [**\Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[]**](EstimateFeeFromUTXOFromUTXOInner.md) | Array of transaction hashes, index of UTXO in it and corresponding private keys. Use this option if you want to calculate amount to send manually. Either fromUTXO or fromAddress must be present. |
**getTo()** | [**\Tatum\Model\EstimateFeeFromAddressToInner[]**](EstimateFeeFromAddressToInner.md) | Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee. |

[[Back to Index]](../index.md)
