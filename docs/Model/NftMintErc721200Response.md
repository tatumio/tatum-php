# NftMintErc721200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tx_id** | **string** | The ID of the transaction |
**token_id** | **string** | ID of the token. | [optional]
**nft_address** | **string** | The blockchain address of the minted NFT | [optional]
**nft_account_address** | **string** | The blockchain address that received the minted NFT; this address was created under the recipient's account address (the one in the <code>to</code> parameter of the request body), is owned by the recipient's address, and has the same private key | [optional]
**asset_index** | **float** | The ID of the minted NFT | [optional]
**confirmed** | **bool** | If set to "true", the transaction was included in the block within five rounds; otherwise, returned set to "false". "false" does not mean that the transaction was not included in the block; the Tatum API just does not wait for that much time to return the response. | [optional]
**signature_id** | **string** | The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS. |

[[Back to Index]](../index.md)
