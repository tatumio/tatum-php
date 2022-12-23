# NftTransferErc721Request

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getValue()** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. | [optional]
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string** | Blockchain address to send NFT token to |
**getTokenId()** | **string** | ID of the token. |
**getContractAddress()** | **string** | Address of NFT token |
**getProvenance()** | **bool** | True if the contract is provenance type | [optional]
**getProvenanceData()** | **string** | data you want to store with transaction, optional and valid only if provenance contract | [optional]
**getTokenPrice()** | **string** | current price of the token, valid only for provenance | [optional]
**getFromPrivateKey()** | **string** | The private key of the sender's blockchain address |
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |
**getFrom()** | **string** | The blockchain address to send the NFT from; this is the address that you used in the <code>to</code> parameter in the request body of the <a href="#operation/NftMintErc721">minting call</a>; from this address, the transaction fee will be paid |
**getAmount()** | **float** | (For <a href="https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts" target="_blank">fractional NFTs</a> only) The number of NFT fractions to transfer; if not set, defaults to 1, which means that one fraction of the NFT will be transferred | [optional] [default to 1]
**getAccount()** | **string** | Blockchain address to perform transaction from |
**getPrivateKey()** | **string** | Private key of sender address. Private key, mnemonic and index or signature Id must be present. |
**getMnemonic()** | **string** | Mnemonic to generate private key of sender address. |
**getIndex()** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. |
**getSignatureId()** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to Index]](../index.md)
