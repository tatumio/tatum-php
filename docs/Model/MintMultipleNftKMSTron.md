# MintMultipleNftKMSTron

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**to** | **string[]** | Blockchain address to send NFT token to. |
**account** | **string** | Blockchain address to perform transaction from |
**token_id** | **string[]** | ID of token to be created. |
**url** | **string[]** | The URL pointing to the NFT metadata; for more information, see <a href="https://eips.ethereum.org/EIPS/eip-721#specification" target="_blank">EIP-721</a> |
**contract_address** | **string** | Address of NFT token |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**fee_limit** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |

[[Back to Index]](../index.md)
