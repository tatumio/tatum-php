# DeployNftCeloKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**name** | **string** | Name of the NFT token |
**symbol** | **string** | Symbol of the NFT token |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**provenance** | **bool** | True if the contract is provenance percentage royalty type. False by default. &lt;a href&#x3D;\&quot;https://github.com/tatumio/smart-contracts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Details and sources available here.&lt;/a&gt; | [optional]
**cashback** | **bool** | True if the contract is fixed price royalty type. False by default. &lt;a href&#x3D;\&quot;https://github.com/tatumio/smart-contracts\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Details and sources available here.&lt;/a&gt; | [optional]
**public_mint** | **bool** | True if the contract is publicMint type. False by default. | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |

[[Back to Index]](../index.md)
