---
title: AlgoTx
parent: Model
layout: page
---

# AlgoTx

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getCloseRewards()** | **float** | rewards applied to close-remainder-to account. <br>Example: `0` | [optional]
**getClosingAmount()** | **float** | closing amount for transaction. <br>Example: `0` | [optional]
**getConfirmedRound()** | **float** | Round when the transaction was confirmed. <br>Example: `16775567` | [optional]
**getFee()** | **float** | Transaction fee <br>Example: `0.001` | [optional]
**getFirstValid()** | **float** | First valid round for this transaction. <br>Example: `16775565` | [optional]
**getGenesisHash()** | **string** | Hash of genesis block <br>Example: `SGO1GKSzyE7IEPItTxCByw9x8FmnrCDexi9/cOUJOiI&#x3D;` | [optional]
**getGenesisId()** | **string** | genesis block ID. <br>Example: `testnet-v1.0` | [optional]
**getId()** | **string** | transaction ID <br>Example: `HNIQ76UTJYPOLZP5FWODYABBJPYPGJNEM2QEJSMDMQRWEKHEYJHQ` | [optional]
**getIntraRoundOffset()** | **float** | Offset into the round where this transaction was confirmed. <br>Example: `1` | [optional]
**getLastValid()** | **float** | Last valid round for this transaction. <br>Example: `16775571` | [optional]
**getNote()** | **string** | Free form data <br>Example: `cGluZ3Bvbmf0Jyl21QrtLw&#x3D;&#x3D;` | [optional]
**getPaymentTransaction()** | **object** | payment Transaction <br>Example: `null` | [optional]
**getReceiverRewards()** | **float** | rewards applied to receiver account. <br>Example: `0` | [optional]
**getRoundTime()** | **float** | Time when the block this transaction is in was confirmed. <br>Example: `1632167753` | [optional]
**getSender()** | **string** | Sender's address <br>Example: `U6QEM4KM7KKGCLH4FELZBGJEVVSF556ELXHUOZC4ESPFS4O4V4VQXKQRXQ` | [optional]
**getSenderRewards()** | **float** | rewards applied to sender account. <br>Example: `0` | [optional]
**getSignature()** | **object** | signature <br>Example: `null` | [optional]
**getTxType()** | **string** | indicates what type of transaction this is. Different types have differnet fields. <br>Example: `pay` | [optional]

