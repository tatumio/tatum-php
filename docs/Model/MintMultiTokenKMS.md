# MintMultiTokenKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Chain to work with. |
**token_id** | **string** | ID of token to be created. |
**to** | **string** | Blockchain address to send Multi Token token to |
**contract_address** | **string** | Address of Multi Token token |
**amount** | **string** | amount of token to be created. |
**data** | **string** | Data in bytes | [optional]
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]

[[Back to Index]](../index.md)
