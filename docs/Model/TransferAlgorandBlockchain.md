---
title: TransferAlgorandBlockchain
parent: Model
layout: page
---

# TransferAlgorandBlockchain

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getFrom()** | **string** | The blockchain address of the sender <br>Example: `TMETT6BXL3QUH7AH5TS6IONU7LVTLKIGG54CFCNPMQXWGRIZFIESZBYWP4` |
**getTo()** | **string** | The blockchain address of the recipient <br>Example: `NTAESFCB3WOD7SAOL42KSPVARLB3JFA3MNX3AESWHYVT2RMYDVZI6YLG4Y` |
**getFee()** | **string** | The transaction fee in Algos <br>Example: `0.001` |
**getAmount()** | **string** | The amount to send in Algos <br>Example: `1` |
**getNote()** | **string** | The note for the recipient; must not contain spaces <br>Example: `Helloworld` | [optional]
**getFromPrivateKey()** | **string** | Private key of sender address. Private key, or signature Id must be present. <br>Example: `72TCV5BRQPBMSAFPYO3CPWVDBYWNGAYNMTW5QHENOMQF7I6QLNMJWCJZ7A3V5YKD7QD6ZZPEHG2PV2ZVVEDDO6BCRGXWIL3DIUMSUCI` |

