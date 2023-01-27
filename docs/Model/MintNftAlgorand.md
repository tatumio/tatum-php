---
title: MintNftAlgorand
parent: Model
layout: page
---

# MintNftAlgorand

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `ALGO`
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> | ex.: `https://my_token_data.com`
**getName()** | **string** | The name of the NFT | ex.: `My Crazy NFT`
**getFromPrivateKey()** | **string** | The private key of the minting account; the transaction fee will be paid from this account | ex.: `EPD5VYFGXWNZ2PY4AQNPD3E3LMAXISKNMGR4IJ44YI74QL5AMNTAIJNQ6Q373RDANF2YERVFQY3C5CKK7VUJDJR4DT6EPP5HZQUPORQ`
**getAttr()** | [**\Tatum\Model\MintNftAlgorandAttr**](../MintNftAlgorandAttr) |  | ex.: `null` [optional]

