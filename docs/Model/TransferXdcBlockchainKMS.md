---
title: TransferXdcBlockchainKMS
parent: Model
layout: page
---

# TransferXdcBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | ex.: `4d79206e6f746520746f2074686520726563697069656e74` [optional]
**getNonce()** | **float** | Nonce to be set to XDC transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getCurrency()** | **string** | Currency of the transfer. | ex.: `XDC`
**getTo()** | **string** | Blockchain address to send assets | ex.: `xdc687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getFee()** | [**\Tatum\Model\DeployErc20Fee**](../DeployErc20Fee) |  | ex.: `null` [optional]
**getAmount()** | **string** | Amount to be sent in XDC. | ex.: `100000`
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`

