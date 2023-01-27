---
title: KcsBlock
parent: Model
layout: page
---

# KcsBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getDifficulty()** | **string** | Difficulty for this block. <br>Example: `3296820833` | [optional]
**getExtraData()** | **string** | The 'extra data' field of this block. <br>Example: `0x` | [optional]
**getGasLimit()** | **float** | The maximum gas allowed in this block. <br>Example: `8000000` | [optional]
**getGasUsed()** | **float** | The total used gas by all transactions in this block. <br>Example: `7985124` | [optional]
**getHash()** | **string** | Hash of the block. 'null' when its pending block. <br>Example: `0x5d40698ee1b1ec589035f2a39c6162287e9056868cc79d66cfb248ba9f66c3fc` | [optional]
**getLogsBloom()** | **string** | The bloom filter for the logs of the block. 'null' when its pending block. <br>Example: `0x042080004210492080800001610060ad9600005bc81502020800000043e302020381a404000100409102040240300641108004000400007000008000c049558055a800000a0001800748900806502004200400108205005418c0218802281a0408060000533210462021050470810a010140102809011814018281115020090201068401847000a04010000c00084062000485640d00020220181150020008589105a41c0880001112034100010882545410240011402a3480050104004c310204000002009490d0012022a040c20c20011020401020140250805100410060008280200008181a220114102800001648640828200c00a94c1003a2060e001000` | [optional]
**getMiner()** | **string** | The address of the beneficiary to whom the mining rewards were given. <br>Example: `0xD8869d9E3d497323561Fbca2319a9FC3F6f10c4B` | [optional]
**getMixHash()** | **string** |  <br>Example: `0x7a44a1f56f12ae825fdc04550d7c3af2344daab987691771c06235f25fafcaa6` | [optional]
**getNonce()** | **string** | Hash of the generated proof-of-work. 'null' when its pending block. <br>Example: `0xfa1692f52a7ac672` | [optional]
**getNumber()** | **float** | The block number. 'null' when its pending block. <br>Example: `6470657` | [optional]
**getParentHash()** | **string** | Hash of the parent block. <br>Example: `0xd34aab8a455027086ac54034e68608c84d984401a883b7b5d91f9ae0bbefda15` | [optional]
**getReceiptsRoot()** | **string** |  <br>Example: `0x4a496b6b7f2a1c5850bf9eebbea7193807be0067b1c06f17b9dde4eef7b2f960` | [optional]
**getSha3Uncles()** | **string** | SHA3 of the uncles data in the block. <br>Example: `0x1dcc4de8dec75d7aab85b567b6ccd41ad312451b948a7413f0a142fd40d49347` | [optional]
**getSize()** | **float** | The size of this block in bytes. <br>Example: `15296` | [optional]
**getStateRoot()** | **string** | The root of the final state trie of the block. <br>Example: `0x32757c92f10c6c5a106c6fb4b9ca3ff301e413a59ca3d0513b4bf98c72efddba` | [optional]
**getTimestamp()** | **float** | The unix timestamp for when the block was collated. <br>Example: `1569600592` | [optional]
**getTotalDifficulty()** | **string** | Total difficulty of the chain until this block. <br>Example: `23329673338013873` | [optional]
**getTransactions()** | [**\Tatum\Model\KcsTx[]**](../KcsTx) | Array of transactions. <br>Example: `null` | [optional]
**getTransactionsRoot()** | **string** | The root of the transaction trie of the block. <br>Example: `0x5990081ef8515d561b50255af03c5d505f7725ddef27405dc67d23bfd0f47704` | [optional]

