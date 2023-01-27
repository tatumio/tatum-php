---
title: TransferNftAlgoExpress
parent: Model
layout: page
---

# TransferNftAlgoExpress

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `ALGO` |
**getTo()** | **string** | The blockchain address to transfer the NFT to <br>Example: `TMETT6BXL3QUH7AH5TS6IONU7LVTLKIGG54CFCNPMQXWGRIZFIESZBYWP4` |
**getContractAddress()** | **string** | The asset ID (the ID of the NFT) <br>Example: `100000` |
**getAmount()** | **float** | (For <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional NFTs</a> only) The number of NFT fractions to transfer; if not set, defaults to 1, which means that one fraction of the NFT will be transferred <br>Example: `1` | [optional] [default to 1]

