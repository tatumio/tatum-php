---
title: TransferNftSolanaKMS
parent: Model
layout: page
---

# TransferNftSolanaKMS

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `SOL` |
**getFrom()** | **string** | The blockchain address to send the NFT from; this is the address that you used in the <code>to</code> parameter in the request body of the minting call; from this address, the transaction fee will be paid <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getTo()** | **string** | The blockchain address to send the NFT to <br>Example: `9pSkqSG71Sb25ia9WBFhoeBYjp8dhUf7fRux9xrDq89b` |
**getContractAddress()** | **string** | The blockchain address of the NFT; this is the address from the <code>nftAddress</code> parameter returned in the response body of the minting call <br>Example: `3tzudv5KaoqmieWiBUqzWokKEtTvx1wQMapVKeH7CHaq` |
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that you are sending the NFT from (the address that you specified in the <code>from</code> parameter) <br>Example: `26d3883e-4e17-48b3-a0ee-09a3e484ac83` |

