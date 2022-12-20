# DeployNft

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**name** | **string** | Name of the NFT token |
**symbol** | **string** | Symbol of the NFT token |
**from_private_key** | **string** | Private key of account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present. |
**provenance** | **bool** | True if the contract is provenance percentage royalty type. False by default. &lt;a href&#x3D;\&quot;https://github.com/tatumio/smart-contracts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Details and sources available here.&lt;/a&gt; | [optional]
**cashback** | **bool** | True if the contract is fixed price royalty type. False by default. &lt;a href&#x3D;\&quot;https://github.com/tatumio/smart-contracts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Details and sources available here.&lt;/a&gt; | [optional]
**public_mint** | **bool** | True if the contract is publicMint type. False by default. | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to Index]](../index.md)