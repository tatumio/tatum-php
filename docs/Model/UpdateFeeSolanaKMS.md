---
title: UpdateFeeSolanaKMS
parent: Model
layout: page
---

# UpdateFeeSolanaKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with | ex.: `SOL`
**getContractAddress()** | **string** | The blockchain address of the marketplace smart contract | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getMarketplaceFee()** | **float** | The new percentage of the amount that an NFT was sold for that will be sent to the marketplace as a fee. To set the fee to 1%, set this parameter to <code>100</code>; to set 10%, set this parameter to <code>1000</code>; to set 50%, set this parameter to <code>5000</code>, and so on. | ex.: `150`
**getFrom()** | **string** | The blockchain address of the marketplace authority | ex.: `FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU`
**getSignatureId()** | **string** | The KMS identifier of the private key of the marketspace authority | ex.: `26d3883e-4e17-48b3-a0ee-09a3e484ac83`

