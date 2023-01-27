---
title: NftRoyaltyErc721
parent: Model
layout: page
---

# NftRoyaltyErc721

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAddresses()** | **string[]** | The blockchain addresses where the royalty cashback will be sent every time the NFT is transferred <br>Example: `null` | [optional]
**getValues()** | **string[]** | The amounts of the royalties that will be paid to the authors of the NFT every time the NFT is transferred; the royalties are paid as a percentage of the NFT price (on Solana) or in a native blockchain currency (on the other supported blockchains) <br>Example: `null` | [optional]

