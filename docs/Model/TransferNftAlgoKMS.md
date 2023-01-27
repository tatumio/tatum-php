---
title: TransferNftAlgoKMS
parent: Model
layout: page
---

# TransferNftAlgoKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ALGO` |
**getFrom()** | **string** | The blockchain address to transfer the NFT from <br>Example: `TMETT6BXL3QUH7AH5TS6IONU7LVTLKIGG54CFCNPMQXWGRIZFIESZBYWP4` |
**getTo()** | **string** | The blockchain address to transfer the NFT to <br>Example: `TMETT6BXL3QUH7AH5TS6IONU7LVTLKIGG54CFCNPMQXWGRIZFIESZBYWP4` |
**getContractAddress()** | **string** | The asset ID (the ID of the NFT) <br>Example: `100000` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the sender's blockchain address <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |
**getAmount()** | **float** | (For <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional NFTs</a> only) The number of NFT fractions to transfer; if not set, defaults to 1, which means that one fraction of the NFT will be transferred <br>Example: `1` | [optional] [default to 1]

