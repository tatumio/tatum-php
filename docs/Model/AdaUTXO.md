---
title: AdaUTXO
parent: Model
layout: page
---

# AdaUTXO

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getValue()** | **string** | Sent amount in Lovelace - 1/1000000 of ADA. <br>Example: `15000` | [optional]
**getIndex()** | **float** | Index of the output in the transaction. <br>Example: `1` | [optional]
**getTxHash()** | **string** | Transaction hash. <br>Example: `76a914fc8f50c952da910f473a0533561311ad140c989b88ac` | [optional]
**getAddress()** | **string** | Recipient address. <br>Example: `addr1qxm3vd0msv9ph8elhy7xrv975z88y6lr3d8vdgy3fwr2e22uvu2ffa2ctx3pdl4rjjja5p7al2k356x5yx8cn03am88s2807d9` | [optional]

