---
title: TransferPolygonBlockchain
parent: Model
layout: page
---

# TransferPolygonBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getData()** | **string** | Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format | ex.: `4d79206e6f746520746f2074686520726563697069656e74` [optional]
**getNonce()** | **float** | Nonce to be set to Polygon transaction. If not present, last known nonce will be used. | ex.: `null` [optional]
**getTo()** | **string** | Blockchain address to send assets | ex.: `0x687422eEA2cB73B5d3e242bA5456b782919AFc85`
**getCurrency()** | **string** | Currency to transfer from Polygon Blockchain Account. ERC20 tokens USDC and USDT are available only for mainnet use. | ex.: `MATIC`
**getFee()** | [**\Tatum\Model\CustomFee**](../CustomFee) |  | ex.: `null` [optional]
**getAmount()** | **string** | Amount to be sent. | ex.: `100000`
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. | ex.: `0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2`

