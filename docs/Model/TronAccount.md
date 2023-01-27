---
title: TronAccount
parent: Model
layout: page
---

# TronAccount

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddress()** | **string** | Account address <br>Example: `TGDqQAP5bduoPKVgdbk7fGyW4DwEt3RRn8` |
**getBalance()** | **float** | Balance of the TRX, in SUN. SUN is 1/1000000 TRX. <br>Example: `2342342` |
**getTrc10()** | [**\Tatum\Model\TronAccountTrc10Inner[]**](../TronAccountTrc10Inner) |  <br>Example: `null` |
**getTrc20()** | **object[]** |  <br>Example: `null` |
**getCreateTime()** | **float** | Date of creation of the account in UTC millis. <br>Example: `1602848895000` |
**getAssetIssuedId()** | **string** | ID of the issued TRC10 token, if any. <br>Example: `1003475` | [optional]
**getAssetIssuedName()** | **float** | Balance of the issued TRC10 token, if any. <br>Example: `100` | [optional]
**getFreeNetUsage()** | **float** | Free usage of the network. <br>Example: `1000` |
**getFreeNetLimit()** | **float** | Free usage limit of the network. <br>Example: `1500` | [optional]
**getNetUsage()** | **float** | Extra usage of the network. <br>Example: `5000` | [optional]
**getNetLimit()** | **float** | Extra usage limit of the network. <br>Example: `5000` | [optional]
**getBandwidth()** | **float** | Remaining usage of the network, equal to freeNetLimit - freeNetUsed + netLimit - netUsed. <br>Example: `1500` |

