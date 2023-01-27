---
title: TransferAlgorandBlockchainKMS
parent: Model
layout: page
---

# TransferAlgorandBlockchainKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | The blockchain address of the sender | ex.: `TMETT6BXL3QUH7AH5TS6IONU7LVTLKIGG54CFCNPMQXWGRIZFIESZBYWP4`
**getTo()** | **string** | The blockchain address of the recipient | ex.: `NTAESFCB3WOD7SAOL42KSPVARLB3JFA3MNX3AESWHYVT2RMYDVZI6YLG4Y`
**getFee()** | **string** | The transaction fee in Algos | ex.: `0.001`
**getAmount()** | **string** | The amount to send in Algos | ex.: `1`
**getNote()** | **string** | The note for the recipient; must not contain spaces | ex.: `Helloworld` [optional]
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | ex.: `null` [optional]
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`

