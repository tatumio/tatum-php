---
title: DogeTransactionUTXOKMSFromUTXOInner
parent: Model
layout: page
---

# DogeTransactionUTXOKMSFromUTXOInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxHash()** | **string** | The transaction hash of the UTXO to be spent <br>Example: `53faa103e8217e1520f5149a4e8c84aeb58e55bdab11164a95e69a8ca50f8fcc` |
**getValue()** | **string** | The amount to send (in DOGE) <br>Example: `0.0015` |
**getAddress()** | **string** | The blockchain address to receive the assets <br>Example: `2MzNGwuKvMEvKMQogtgzSqJcH2UW3Tc5oc7` |
**getIndex()** | **float** | The index of the UTXO to be spent <br>Example: `0` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that holds the UTXO to be spent <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |

