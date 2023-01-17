---
title: AlgoTx
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getCloseRewards()** | **float** | rewards applied to close-remainder-to account. | [optional]
**getClosingAmount()** | **float** | closing amount for transaction. | [optional]
**getConfirmedRound()** | **float** | Round when the transaction was confirmed. | [optional]
**getFee()** | **float** | Transaction fee | [optional]
**getFirstValid()** | **float** | First valid round for this transaction. | [optional]
**getGenesisHash()** | **string** | Hash of genesis block | [optional]
**getGenesisId()** | **string** | genesis block ID. | [optional]
**getId()** | **string** | transaction ID | [optional]
**getIntraRoundOffset()** | **float** | Offset into the round where this transaction was confirmed. | [optional]
**getLastValid()** | **float** | Last valid round for this transaction. | [optional]
**getNote()** | **string** | Free form data | [optional]
**getPaymentTransaction()** | **object** | payment Transaction | [optional]
**getReceiverRewards()** | **float** | rewards applied to receiver account. | [optional]
**getRoundTime()** | **float** | Time when the block this transaction is in was confirmed. | [optional]
**getSender()** | **string** | Sender's address | [optional]
**getSenderRewards()** | **float** | rewards applied to sender account. | [optional]
**getSignature()** | **object** | signature | [optional]
**getTxType()** | **string** | indicates what type of transaction this is. Different types have differnet fields. | [optional]

