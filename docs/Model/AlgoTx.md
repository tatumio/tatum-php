---
title: AlgoTx
parent: Model
layout: page
---

# AlgoTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getCloseRewards()** | **float** | rewards applied to close-remainder-to account. | ex.: `0` [optional]
**getClosingAmount()** | **float** | closing amount for transaction. | ex.: `0` [optional]
**getConfirmedRound()** | **float** | Round when the transaction was confirmed. | ex.: `16775567` [optional]
**getFee()** | **float** | Transaction fee | ex.: `0.001` [optional]
**getFirstValid()** | **float** | First valid round for this transaction. | ex.: `16775565` [optional]
**getGenesisHash()** | **string** | Hash of genesis block | ex.: `SGO1GKSzyE7IEPItTxCByw9x8FmnrCDexi9/cOUJOiI&#x3D;` [optional]
**getGenesisId()** | **string** | genesis block ID. | ex.: `testnet-v1.0` [optional]
**getId()** | **string** | transaction ID | ex.: `HNIQ76UTJYPOLZP5FWODYABBJPYPGJNEM2QEJSMDMQRWEKHEYJHQ` [optional]
**getIntraRoundOffset()** | **float** | Offset into the round where this transaction was confirmed. | ex.: `1` [optional]
**getLastValid()** | **float** | Last valid round for this transaction. | ex.: `16775571` [optional]
**getNote()** | **string** | Free form data | ex.: `cGluZ3Bvbmf0Jyl21QrtLw&#x3D;&#x3D;` [optional]
**getPaymentTransaction()** | **object** | payment Transaction | ex.: `null` [optional]
**getReceiverRewards()** | **float** | rewards applied to receiver account. | ex.: `0` [optional]
**getRoundTime()** | **float** | Time when the block this transaction is in was confirmed. | ex.: `1632167753` [optional]
**getSender()** | **string** | Sender's address | ex.: `U6QEM4KM7KKGCLH4FELZBGJEVVSF556ELXHUOZC4ESPFS4O4V4VQXKQRXQ` [optional]
**getSenderRewards()** | **float** | rewards applied to sender account. | ex.: `0` [optional]
**getSignature()** | **object** | signature | ex.: `null` [optional]
**getTxType()** | **string** | indicates what type of transaction this is. Different types have differnet fields. | ex.: `pay` [optional]

