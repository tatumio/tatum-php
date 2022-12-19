# TransferEthBlockchainKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | Additinal data, that can be passed to blockchain transaction as data property. Only for ETH transactions. | [optional]
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**to** | **string** | Blockchain address to send assets |
**currency** | **string** | Currency to transfer from Ethereum Blockchain Account. |
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**amount** | **string** | Amount to be sent in Ether. |
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
