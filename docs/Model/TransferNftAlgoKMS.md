# TransferNftAlgoKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**from** | **string** | The blockchain address to transfer the NFT from |
**to** | **string** | The blockchain address to transfer the NFT to |
**contract_address** | **string** | The asset ID (the ID of the NFT) |
**signature_id** | **string** | The KMS identifier of the private key of the sender's blockchain address |
**amount** | **float** | (For <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional NFTs</a> only) The number of NFT fractions to transfer; if not set, defaults to 1, which means that one fraction of the NFT will be transferred | [optional] [default to 1]

[[Back to Index]](../index.md)
