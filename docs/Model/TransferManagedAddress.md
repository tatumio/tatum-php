---
title: TransferManagedAddress
parent: Model
layout: page
---

# TransferManagedAddress

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to work on <br>Example: `SOL` |
**getTxData()** | **string** | Hex serialized data representing transaction, which should be signed using one of the managed wallets. <br>Example: `020001044a22af97a838a504e6f7c0b18d779afcea612da50794cc1dac641861fc1ab14afa5cacaf91c298694e64bb5496916c3c68a32affb92d4bcd2736fbb00169d57bd840de2a454960308f688cd3ee308c1fa01ecfa0b03770aaaf3b52d71d46c31d000000000000000000000000000000000000000000000000000000000000000060d38e0da20dc5900b7e902c918eae6a95e2d90af154b53a422f4ab26b050f4f01030201020c02000000e803000000000000` |
**getWalletIds()** | [**\Tatum\Model\TransferManagedAddressWalletIdsInner[]**](../TransferManagedAddressWalletIdsInner) |  <br>Example: `null` |

