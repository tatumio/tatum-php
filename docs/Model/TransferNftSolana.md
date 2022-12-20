# TransferNftSolana

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**from** | **string** | The blockchain address to send the NFT from; this is the address that you used in the <code>to</code> parameter in the request body of the <a href="#operation/NftMintErc721">minting call</a>; from this address, the transaction fee will be paid |
**to** | **string** | The blockchain address to send the NFT to |
**contract_address** | **string** | The blockchain address of the NFT; this is the address from the <code>nftAddress</code> parameter returned in the response body of the <a href="#operation/NftMintErc721">minting call</a> |
**from_private_key** | **string** | The private key of the blockchain address that you are sending the NFT from (the address that you specified in the <code>from</code> parameter) |

[[Back to Index]](../index.md)
