# NftMintErc721Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string** | The blockchain address to send the NFT to |
**url** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**name** | **string** | The name of the NFT |
**attr** | [**\Tatum\Model\MintNftExpressAlgorandAttr**](MintNftExpressAlgorandAttr.md) |  | [optional]
**metadata** | [**\Tatum\Model\SolanaNftMetadataKMS**](SolanaNftMetadataKMS.md) |  |
**contract_address** | **string** | The blockchain address of the smart contract to build the NFT on |
**minter** | **string** | The blockchain address of the Tatum NFT minter; this is the address that you added as an NFT minter to your NFT smart contract |
**token_id** | **string** | The ID of the NFT |
**from_private_key** | **string** | The private key of the blockchain address that will pay the fee for the transaction |
**erc20** | **string** | The blockchain address of the custom fungible token | [optional]
**provenance** | **bool** | Set to "true" if the NFT smart contract is of the <a href="#operation/NftDeployErc721">provenance type</a>; otherwise, set to "false". | [optional]
**author_addresses** | **string[]** | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, TRX | [optional]
**cashback_values** | **string[]** | The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency | [optional]
**fixed_values** | **string[]** | The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be compared to; if the fixed amount specified in this parameter is greater than the amount of the cashback royalties, this fixed amount will be sent to the NFT authors instead of the cashback royalties | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address that will pay the fee for the transaction |
**index** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic |
**from** | **string** | The blockchain address that will pay the fee for the transaction |
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**account** | **string** | The blockchain address that will pay the fee for the transaction |
**private_key** | **string** | Private key of sender address. Private key, mnemonic and index or signature Id must be present. |
**mnemonic** | **string** | Mnemonic to generate private key of sender address. |
**collection_verifier_private_key** | **string** | The private key of the collection verifier (owner) who will verify the NFT in the NFT collection where the NFT is minted in. The blockchain address of this collection is specified in the <code>collection</code> parameter in the <code>metadata</code> section of the request body. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>. | [optional]
**fee_limit** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |

[[Back to Index]](../index.md)
