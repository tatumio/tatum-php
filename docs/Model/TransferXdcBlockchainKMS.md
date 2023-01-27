---
title: TransferXdcBlockchainKMS
parent: Model
layout: page
---

# TransferXdcBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format <br>Example: `4d79206e6f746520746f2074686520726563697069656e74` | [optional]
**getNonce()** | **float** | Nonce to be set to XDC transaction. If not present, last known nonce will be used. <br>Example: `null` | [optional]
**getCurrency()** | **string** | Currency of the transfer. <br>Example: `XDC` |
**getTo()** | **string** | Blockchain address to send assets <br>Example: `xdc687422eEA2cB73B5d3e242bA5456b782919AFc85` |
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  <br>Example: `null` | [optional]
**getAmount()** | **string** | Amount to be sent in XDC. <br>Example: `100000` |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. <br>Example: `null` | [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |

