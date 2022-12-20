# TronAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Account address |
**balance** | **float** | Balance of the TRX, in SUN. SUN is 1/1000000 TRX. |
**trc10** | [**\Tatum\Model\TronAccountTrc10Inner[]**](TronAccountTrc10Inner.md) |  |
**trc20** | **object[]** |  |
**create_time** | **float** | Date of creation of the account in UTC millis. |
**asset_issued_id** | **string** | ID of the issued TRC10 token, if any. | [optional]
**asset_issued_name** | **float** | Balance of the issued TRC10 token, if any. | [optional]
**free_net_usage** | **float** | Free usage of the network. |
**free_net_limit** | **float** | Free usage limit of the network. | [optional]
**net_usage** | **float** | Extra usage of the network. | [optional]
**net_limit** | **float** | Extra usage limit of the network. | [optional]
**bandwidth** | **float** | Remaining usage of the network, equal to freeNetLimit - freeNetUsed + netLimit - netUsed. |

[[Back to Index]](../index.md)
