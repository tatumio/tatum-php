---
title: TransferXdcBlockchain
parent: Model
layout: page
---

# TransferXdcBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format <br>Example: `4d79206e6f746520746f2074686520726563697069656e74` | [optional]
**getCurrency()** | **string** | Currency of the transfer. <br>Example: `XDC` |
**getNonce()** | **float** | Nonce to be set to XDC transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getTo()** | **string** | Blockchain address to send assets <br>Example: `xdc687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]
**getAmount()** | **string** | Amount to be sent. <br>Example: `100000` |
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2` |

