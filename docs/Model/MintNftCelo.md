# MintNftCelo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string** | The blockchain address to send the NFT to |
**contract_address** | **string** | The blockchain address of the smart contract to build the NFT on |
**token_id** | **string** | The ID of the NFT. |
**url** | **string** | The URL pointing to the NFT metadata; for more information, see &lt;a href&#x3D;\&quot;https://eips.ethereum.org/EIPS/eip-721#specification\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EIP-721&lt;/a&gt; |
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**from_private_key** | **string** | The private key of the blockchain address that will pay the fee for the transaction |
**erc20** | **string** | The blockchain address of the custom fungible token | [optional]
**provenance** | **bool** | Set to \&quot;true\&quot; if the NFT smart contract is of the &lt;a href&#x3D;\&quot;#operation/NftDeployErc721\&quot;&gt;provenance type&lt;/a&gt;; otherwise, set to \&quot;false\&quot;. | [optional]
**author_addresses** | **string[]** | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, CELO | [optional]
**cashback_values** | **string[]** | The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency for &lt;a href&#x3D;\&quot;#operation/NftDeployErc721\&quot;&gt;cashback smart contracts&lt;/a&gt; or as a percentage of the NFT price for &lt;a href&#x3D;\&quot;#operation/NftDeployErc721\&quot;&gt;provenance smart contracts&lt;/a&gt; | [optional]
**fixed_values** | **string[]** | The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be compared to; if the fixed amount specified in this parameter is greater than the amount of the cashback royalties, this fixed amount will be sent to the NFT authors instead of the cashback royalties | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]

[[Back to API list]](../../README.md#api-endpoints)
