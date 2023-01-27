---
title: TransferManagedAddressWalletIdsInner
parent: Model
layout: page
---

# TransferManagedAddressWalletIdsInner

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getKey()** | **string** | Wallet ID of wallet, which should be used for signing. In case of RAW type of the wallet, this represents the private key which will be used for signatures. <br>Example: `0b1eae3d-2520-4903-8bbf-5dec3ad2a5d4` |
**getType()** | **string** | Type of the wallet to be used - RAW represents native private key, MANAGED represents ID of the managed wallet. <br>Example: `MANAGED` |

