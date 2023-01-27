---
title: FlowCreateAddressFromPubKeyMnemonic200Response
parent: Model
layout: page
---

# FlowCreateAddressFromPubKeyMnemonic200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | The ID of the transaction <br>Example: `d1c75a84e4bdf0dd9bf1bcd0ce4fb25f89e2ed3c5e9574dbca2760b52c428717` |
**getAddress()** | **string** | The generated blockchain address <br>Example: `5695321609876367000` |
**getSignatureId()** | **string** | The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |

