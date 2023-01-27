---
title: BtcTx
parent: Model
layout: page
---

# BtcTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getHash()** | **string** | Transaction hash. <br>Example: `4c7846a8ff8415945e96937dea27bdb3144c15d793648d725602784826052586` | [optional]
**getHex()** | **string** | Transaction hex. <br>Example: `020000000001072840e4f49e088d9ab233f6209aede5d91c44ecb59f490dbf289e7ef5028bc6aa0000000000ffffffffada5ca08d78992fac3bd48e1ac197c2b4bbd98b349d706ba7dd38c7c3dceed940000000000ffffffff0265691f1374c79a164186b6290a6bdf785561dcf5e3c155599dbaa646e2f06e0000000000ffffffff4f0b53ff85e10ff33c3cf95a1b650729c83b75d6b894d8224b40ca00b944a3ff0000000000ffffffff30aa398d22fd3b60534389c926093863d560eaeca4c6f85454b5fa0222f96db30000000000ffffffff9c02daa47a879222fc7e9d3c0ec7158d4853d3cc4a4465001412e5fc0371e7470100000000ffffffff78bdc156966a07d09f9bdb45ccb2e21765657f806b7e2ab7b7bb9dad5d5b5bc30000000000ffffffff010c2845000000000016001490a446c7f165cfd99dd5dd87a6bb83a17fd9e9f1024730440220384fa3d7935db56a637cf6c662dfc6990957e2838afa5db29e7569c996ba24930220567d4ed8ec36a940d871bc26d292656690e55bd10567c823af2c6ffab9a7868f012103ccb40d87b4e847b970a9dd23c3d5078964213cf6a78257796d801316bb7bb60c0247304402206b6db0dd0dd158835618613b952056327113374a8dec6be5f41c41a8ce552fe2022027c356009488123c27c98aa66080f6898484b7c098dc366540be8f6935feeefe012103ccb40d87b4e847b970a9dd23c3d5078964213cf6a78257796d801316bb7bb60c0247304402200baf8a00f9f767cc83c35e3a29a03a4f054c886fc07828481b83ae858eb5853902202f6d82ef65f64ac5db1db947aa03e1ed5f3b19710cf4c3e4448cd5a7f25277df012103ccb40d87b4e847b970a9dd23c3d5078964213cf6a78257796d801316bb7bb60c02483045022100b7d574102ede6a4d556269129592faa8f7ff54ca846c2516804811e06aca380202206a0e519a911e3fe130f1d446f5fd16b951fd25136b2f9b2980dd9eefe4f3a860012103ccb40d87b4e847b970a9dd23c3d5078964213cf6a78257796d801316bb7bb60c02473044022008548dc3eff2713011d3fad3e661918f51cd4a3b688f90326f5febf4dbb34c8f0220245e37520b501a7c429f9428c4892034d398c8198006fedd9fdb45790c8d0d23012103ccb40d87b4e847b970a9dd23c3d5078964213cf6a78257796d801316bb7bb60c02473044022044bd3552b24b49b2c9bc2acee7a8d587407070cb80e7c65cdefff78fe7df0f99022067581ae9d54d2fdedb9bcf69c2281830e165f9df631f6c889f98dfb7c1e4a78a012103ccb40d87b4e847b970a9dd23c3d5078964213cf6a78257796d801316bb7bb60c02483045022100a141642697ba55407e4d6d2b6d3d1b2f93d5126794e77028c00307835a4c71ce02202658200b9d779d0f6f169bdd27dc81cbbb10718e57754349e57e020ea6bf5cfb012103ccb40d87b4e847b970a9dd23c3d5078964213cf6a78257796d801316bb7bb60c00000000` | [optional]
**getWitnessHash()** | **string** | Witness hash in case of a SegWit transaction. <br>Example: `4c7846a8ff8415945e96937dea27bdb3144c15d793648d725602784826052586` | [optional]
**getFee()** | **float** | Fee paid for this transaction, in satoshis. <br>Example: `4540` | [optional]
**getRate()** | **float** |  <br>Example: `20088` | [optional]
**getMtime()** | **float** |  <br>Example: `1575663337` | [optional]
**getBlockNumber()** | **float** | Height of the block this transaction belongs to. <br>Example: `1611609` | [optional]
**getBlock()** | **string** | Hash of the block this transaction belongs to. <br>Example: `00000000000001e13fe1eb3977f3379e3d0f6577fc6e087d27db46597ebddb8b` | [optional]
**getTime()** | **float** | Time of the transaction. <br>Example: `1575663091` | [optional]
**getIndex()** | **float** | Index of the transaction in the block. <br>Example: `1` | [optional]
**getVersion()** | **float** | Index of the transaction. <br>Example: `2` | [optional]
**getInputs()** | [**\Tatum\Model\BtcTxInput[]**](../BtcTxInput) | List of transactions, from which assets are being sent. <br>Example: `null` | [optional]
**getOutputs()** | [**\Tatum\Model\BtcTxOutput[]**](../BtcTxOutput) | List of recipient addresses and amounts to send to each of them. <br>Example: `null` | [optional]
**getLocktime()** | **float** | Block this transaction was included in. <br>Example: `1611608` | [optional]

