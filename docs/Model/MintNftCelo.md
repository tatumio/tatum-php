# MintNftCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string** | The blockchain address to send the NFT to |
**contract_address** | **string** | The blockchain address of the smart contract to build the NFT on |
**token_id** | **string** | The ID of the NFT |
**url** | **string** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**from_private_key** | **string** | The private key of the blockchain address that will pay the fee for the transaction |
**erc20** | **string** | The blockchain address of the custom fungible token | [optional]
**provenance** | **bool** | Set to "true" if the NFT smart contract is of the <a href="#operation/NftDeployErc721">provenance type</a>; otherwise, set to "false". | [optional]
**author_addresses** | **string[]** | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, CELO | [optional]
**cashback_values** | **string[]** | The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency for <a href="#operation/NftDeployErc721">cashback smart contracts</a> or as a percentage of the NFT price for <a href="#operation/NftDeployErc721">provenance smart contracts</a> | [optional]
**fixed_values** | **string[]** | The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be compared to; if the fixed amount specified in this parameter is greater than the amount of the cashback royalties, this fixed amount will be sent to the NFT authors instead of the cashback royalties | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to Index]](../index.md)
