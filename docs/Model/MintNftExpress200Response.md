---
title: MintNftExpress200Response
parent: Model
layout: page
---

# MintNftExpress200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | The ID of the transaction <br>Example: `HQ32RQPJ7EAASLHPG5TTQEGETOEMN7BPND2TQMUMZWLIZBJWJ23A` |
**getTokenId()** | **string** | ID of the token. <br>Example: `123` | [optional]
**getNftAddress()** | **string** | The blockchain address of the minted NFT <br>Example: `4afZBmAneN2j6gDHH8zdrNWkCqfMC3XPH2cpFKtYMSVe` | [optional]
**getNftAccountAddress()** | **string** | The blockchain address that received the minted NFT; this address was created under the recipient's account address (the one in the <code>to</code> parameter of the request body), is owned by the recipient's address, and has the same private key <br>Example: `A8BSHPJcB5ZGCT6yo6pz2RYqnypTSpzTAFSBhtTQmsEE` | [optional]
**getAssetIndex()** | **float** | The ID of the minted NFT <br>Example: `88885810` | [optional]
**getConfirmed()** | **bool** | If set to "true", the transaction was included in the block within five rounds; otherwise, returned set to "false". "false" does not mean that the transaction was not included in the block; the Tatum API just does not wait for that much time to return the response. <br>Example: `true` | [optional]
**getSignatureId()** | **string** | The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS. <br>Example: `1f7f7c0c-3906-4aa1-9dfe-4b67c43918f6` |

