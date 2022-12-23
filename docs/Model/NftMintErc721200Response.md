# NftMintErc721200Response

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getTxId()** | **string** | The ID of the transaction |
**getTokenId()** | **string** | ID of the token. | [optional]
**getNftAddress()** | **string** | The blockchain address of the minted NFT | [optional]
**getNftAccountAddress()** | **string** | The blockchain address that received the minted NFT; this address was created under the recipient's account address (the one in the <code>to</code> parameter of the request body), is owned by the recipient's address, and has the same private key | [optional]
**getAssetIndex()** | **float** | The ID of the minted NFT | [optional]
**getConfirmed()** | **bool** | If set to "true", the transaction was included in the block within five rounds; otherwise, returned set to "false". "false" does not mean that the transaction was not included in the block; the Tatum API just does not wait for that much time to return the response. | [optional]
**getSignatureId()** | **string** | The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS. |

[[Back to Index]](../index.md)
