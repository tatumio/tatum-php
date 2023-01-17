---
title: EstimateFeeTransferFromCustodial
parent: Model
layout: page
---

# Model Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to estimate fee for. |
**getType()** | **string** | Type of transaction |
**getSender()** | **string** | Sender address |
**getRecipient()** | **string** | Blockchain address to send assets |
**getContractAddress()** | **string** | Contract address of the token |
**getCustodialAddress()** | **string** | Contract address of custodial wallet contract |
**getAmount()** | **string** | Amount to be sent in native asset, ERC20 or ERC1155 |
**getTokenType()** | **float** | Type of the token to transfer from gas pump wallet. 0 - ERC20, 1 - ERC721, 2 - ERC1155, 3 - native asset |

