# MintErc721KMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token_id** | **string** | ID of token to be created. |
**to** | **string** | Blockchain address to send ERC721 token to |
**contract_address** | **string** | Address of ERC721 token |
**url** | **string** | Metadata of the token. See https://eips.ethereum.org/EIPS/eip-721#specification for more details. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
