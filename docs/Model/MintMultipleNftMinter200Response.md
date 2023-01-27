---
title: MintMultipleNftMinter200Response
parent: Model
layout: page
---

# MintMultipleNftMinter200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | Transaction ID <br>Example: `d67787399d205139f4d6f42c2aa4fffdf6f247411fae3706e874fbba0ce04b1b` |
**getTokenId()** | **string[]** |  <br>Example: `null` | [optional]
**getSignatureId()** | **string** | The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |

