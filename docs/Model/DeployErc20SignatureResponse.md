---
title: DeployErc20SignatureResponse
parent: Model
layout: page
---

# DeployErc20SignatureResponse

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountId()** | **string** | Account ID with the type of currency as created ERC20/BEP20 token symbol. Account will be unfrozen when ERC20/BEP20 contract address will be set. <br>Example: `5e68c66581f2ee32bc354087` |
**getSignatureId()** | **string** | ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |

