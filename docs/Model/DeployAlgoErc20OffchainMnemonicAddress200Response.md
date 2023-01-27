---
title: DeployAlgoErc20OffchainMnemonicAddress200Response
parent: Model
layout: page
---

# DeployAlgoErc20OffchainMnemonicAddress200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountId()** | **string** | Account ID with the type of currency as created ERC20 token symbol. Account will be unfrozen when ERC20 contract address will be set. <br>Example: `5e68c66581f2ee32bc354087` |
**getTxId()** | **string** | TX hash of successful transaction. From this transaction receipt contract address can be obtained. <br>Example: `JGDMW6F6BUWQLFXDEPZIUO5WCTQOL3QV7KZ2SBV44K5WE6SSNN7Q` |
**getSignatureId()** | **string** | ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |

