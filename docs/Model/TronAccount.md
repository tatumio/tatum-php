# TronAccount

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Account address |
**getBalance()** | **float** | Balance of the TRX, in SUN. SUN is 1/1000000 TRX. |
**getTrc10()** | [**\Tatum\Model\TronAccountTrc10Inner[]**](TronAccountTrc10Inner.md) |  |
**getTrc20()** | **object[]** |  |
**getCreateTime()** | **float** | Date of creation of the account in UTC millis. |
**getAssetIssuedId()** | **string** | ID of the issued TRC10 token, if any. | [optional]
**getAssetIssuedName()** | **float** | Balance of the issued TRC10 token, if any. | [optional]
**getFreeNetUsage()** | **float** | Free usage of the network. |
**getFreeNetLimit()** | **float** | Free usage limit of the network. | [optional]
**getNetUsage()** | **float** | Extra usage of the network. | [optional]
**getNetLimit()** | **float** | Extra usage limit of the network. | [optional]
**getBandwidth()** | **float** | Remaining usage of the network, equal to freeNetLimit - freeNetUsed + netLimit - netUsed. |

[[Back to Index]](../index.md)
