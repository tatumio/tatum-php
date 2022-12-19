# DeployErc20KMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Symbol of the ERC20 token |
**name** | **string** | Name of the ERC20 token |
**total_cap** | **string** | Max supply of ERC20 token. | [optional]
**supply** | **string** | Max supply of ERC20 token. |
**digits** | **float** | Number of decimal points |
**address** | **string** | Address on XDC blockchain, where all created ERC20 tokens will be transferred. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to XDC transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
