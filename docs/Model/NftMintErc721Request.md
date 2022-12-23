# NftMintErc721Request

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | The blockchain to work with |
**getTo()** | **string** | The blockchain address to send the NFT to |
**getUrl()** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**getName()** | **string** | The name of the NFT |
**getAttr()** | [**\Tatum\Model\MintNftExpressAlgorandAttr**](MintNftExpressAlgorandAttr.md) |  | [optional]
**getMetadata()** | [**\Tatum\Model\SolanaNftMetadataKMS**](SolanaNftMetadataKMS.md) |  |
**getContractAddress()** | **string** | The blockchain address of the smart contract to build the NFT on |
**getMinter()** | **string** | The blockchain address of the Tatum NFT minter; this is the address that you added as an NFT minter to your NFT smart contract |
**getTokenId()** | **string** | The ID of the NFT |
**getFromPrivateKey()** | **string** | The private key of the blockchain address that will pay the fee for the transaction |
**getErc20()** | **string** | The blockchain address of the custom fungible token | [optional]
**getProvenance()** | **bool** | Set to "true" if the NFT smart contract is of the <a href="#operation/NftDeployErc721">provenance type</a>; otherwise, set to "false". | [optional]
**getAuthorAddresses()** | **string[]** | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, TRX | [optional]
**getCashbackValues()** | **string[]** | The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency | [optional]
**getFixedValues()** | **string[]** | The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be compared to; if the fixed amount specified in this parameter is greater than the amount of the cashback royalties, this fixed amount will be sent to the NFT authors instead of the cashback royalties | [optional]
**getNonce()** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**getFee()** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**getSignatureId()** | **string** | The KMS identifier of the private key of the blockchain address that will pay the fee for the transaction |
**getIndex()** | **float** | (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic |
**getFrom()** | **string** | The blockchain address that will pay the fee for the transaction |
**getFeeCurrency()** | **string** | The currency in which the transaction fee will be paid |
**getAccount()** | **string** | The blockchain address that will pay the fee for the transaction |
**getPrivateKey()** | **string** | Private key of sender address. Private key, mnemonic and index or signature Id must be present. |
**getMnemonic()** | **string** | Mnemonic to generate private key of sender address. |
**getCollectionVerifierPrivateKey()** | **string** | The private key of the collection verifier (owner) who will verify the NFT in the NFT collection where the NFT is minted in. The blockchain address of this collection is specified in the <code>collection</code> parameter in the <code>metadata</code> section of the request body. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>. | [optional]
**getFeeLimit()** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |

[[Back to Index]](../index.md)
