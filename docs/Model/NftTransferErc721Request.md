# NftTransferErc721Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token. | [optional]
**chain** | **string** | The blockchain to work with |
**to** | **string** | Blockchain address to send NFT token to |
**token_id** | **string** | ID of the token. |
**contract_address** | **string** | Address of NFT token |
**provenance** | **bool** | True if the contract is provenance type | [optional]
**provenance_data** | **string** | data you want to store with transaction, optional and valid only if provenance contract | [optional]
**token_price** | **string** | current price of the token, valid only for provenance | [optional]
**from_private_key** | **string** | Private key of sender address. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**fee_limit** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |
**from** | **string** | The blockchain address to send the NFT from; this is the address that you used in the &lt;code&gt;to&lt;/code&gt; parameter in the request body of the &lt;a href&#x3D;\&quot;#operation/NftMintErc721\&quot;&gt;minting call&lt;/a&gt;; from this address, the transaction fee will be paid |
**amount** | **float** | The total amount of NFT fractions to transfer. Defaults to 1 - which means 1 fraction of NFT will be transferred. This is only valid for &lt;a href&#x3D;\&quot;https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Fractional NFTs.&lt;/a&gt; | [optional] [default to 1]
**account** | **string** | Blockchain address to perform transaction from |
**private_key** | **string** | Private key of sender address. Private key, mnemonic and index or signature Id must be present. |
**mnemonic** | **string** | Mnemonic to generate private key of sender address. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
