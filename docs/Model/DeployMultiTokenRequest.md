# DeployMultiTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**uri** | **string** | URI of the Multi Token contract |
**from_private_key** | **string** | Private key of account address, from which gas for deployment of ERC1155 will be paid. Private key, or signature Id must be present. |
**public_mint** | **bool** | True if the contract is publicMint type | [optional]
**nonce** | **float** |  | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**fee_currency** | **string** | Currency to pay for transaction gas |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
