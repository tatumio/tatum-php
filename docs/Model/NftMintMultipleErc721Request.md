# NftMintMultipleErc721Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string[]** | Blockchain address to send NFT token to. |
**token_id** | **string[]** | ID of token to be created. |
**minter** | **string** | Address of NFT minter, which will be used to mint the tokens. From this address, transaction fees will be deducted. |
**url** | **string[]** | The URL pointing to the NFT metadata; for more information, see &lt;a href&#x3D;\&quot;https://eips.ethereum.org/EIPS/eip-721#specification\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EIP-721&lt;/a&gt; |
**contract_address** | **string** | Address of NFT token |
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**author_addresses** | **string[][]** | List of addresses for every token, where royalty cashback for every transfer of this NFT will be send. Royalties are paid in native blockchain currency CELO. | [optional]
**cashback_values** | **string[][]** | List of values for every token, which will be paid as a royalty for author of the NFT token with every token transfer. This is exact value in native blockchain currency. | [optional]
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**fee_limit** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |
**account** | **string** | Blockchain address of the sender account. |
**private_key** | **string** | Private key of sender address. Private key, mnemonic and index or signature Id must be present. |
**mnemonic** | **string** | Mnemonic to generate private key of sender address. |
**index** | **int** | Derivation index of sender address. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
