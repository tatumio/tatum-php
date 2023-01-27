---
title: VetBlock
parent: Model
layout: page
---

# VetBlock

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNumber()** | **int** | block number (height) | ex.: `325324` [optional]
**getId()** | **string** | block identifier | ex.: `0x0004f6cc88bb4626a92907718e82f255b8fa511453a78e8797eb8cea3393b215` [optional]
**getSize()** | **int** | RLP encoded block size in bytes | ex.: `373` [optional]
**getParentId()** | **string** | parent block ID | ex.: `0x0004f6cb730dbd90fed09d165bfdf33cc0eed47ec068938f6ee7b7c12a4ea98d` [optional]
**getTimestamp()** | **int** | block unix timestamp | ex.: `1533267900` [optional]
**getGasLimit()** | **int** | block gas limit (max allowed accumulative gas usage of transactions) | ex.: `11253579` [optional]
**getBeneficiary()** | **string** | Address of account to receive block reward | ex.: `0xb4094c25f86d628fdd571afc4077f0d0196afb48` [optional]
**getGasUsed()** | **int** | accumulative gas usage of transactions | ex.: `21000` [optional]
**getTotalScore()** | **int** | sum of all ancestral blocks' score | ex.: `1029988` [optional]
**getTxsRoot()** | **string** | root hash of transactions in the block | ex.: `0x89dfd9fcd10c9e53d68592cf8b540b280b72d381b868523223992f3e09a806bb` [optional]
**getTxsFeatures()** | **int** | supported txs features bitset | ex.: `0` [optional]
**getStateRoot()** | **string** | root hash of accounts state | ex.: `0x86bcc6d214bc9d8d0dedba1012a63c8317d19ce97f60c8a2ef5c59bbd40d4261` [optional]
**getReceiptsRoot()** | **string** | root hash of transaction receipts | ex.: `0x15787e2533c470e8a688e6cd17a1ee12d8457778d5f82d2c109e2d6226d8e54e` [optional]
**getSigner()** | **string** | the one who signed this block | ex.: `0xab7b27fc9e7d29f9f2e5bd361747a5515d0cc2d1` [optional]
**getTransactions()** | **string[]** | transactions IDs | ex.: `null` [optional]

