# MintMultipleNftKMSCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string[]** | Blockchain address to send NFT token to. |
**token_id** | **string[]** | ID of token to be created. |
**url** | **string[]** | The URL pointing to the NFT metadata; for more information, see &lt;a href&#x3D;\&quot;https://eips.ethereum.org/EIPS/eip-721#specification\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EIP-721&lt;/a&gt; |
**author_addresses** | **string[][]** | List of addresses for every token, where royalty cashback for every transfer of this NFT will be send. Royalties are paid in native blockchain currency CELO. | [optional]
**cashback_values** | **string[][]** | List of values for every token, which will be paid as a royalty for author of the NFT token with every token transfer. This is exact value in native blockchain currency. | [optional]
**contract_address** | **string** | Address of NFT token |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |

[[Back to API list]](../../README.md#api-endpoints)
