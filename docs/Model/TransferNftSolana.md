---
title: TransferNftSolana
parent: Model
layout: page
---

# TransferNftSolana

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with <br>Example: `SOL` |
**getFrom()** | **string** | The blockchain address to send the NFT from; this is the address that you used in the <code>to</code> parameter in the request body of the minting call; from this address, the transaction fee will be paid <br>Example: `FykfMwA9WNShzPJbbb9DNXsfgDgS3XZzWiFgrVXfWoPJ` |
**getTo()** | **string** | The blockchain address to send the NFT to <br>Example: `9pSkqSG71Sb25ia9WBFhoeBYjp8dhUf7fRux9xrDq89b` |
**getContractAddress()** | **string** | The blockchain address of the NFT; this is the address from the <code>nftAddress</code> parameter returned in the response body of the minting call <br>Example: `3tzudv5KaoqmieWiBUqzWokKEtTvx1wQMapVKeH7CHaq` |
**getFromPrivateKey()** | **string** | The private key of the blockchain address that you are sending the NFT from (the address that you specified in the <code>from</code> parameter) <br>Example: `3abc79a31093e4cfa4a724e94a44906cbbc3a32e2f75f985a28616676a5dbaf1de8d82a7e1d0561bb0e1b729c7a9b9b1708cf2803ad0ca928a332587ace391ad` |

