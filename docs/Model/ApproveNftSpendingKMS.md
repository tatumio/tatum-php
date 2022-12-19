# ApproveNftSpendingKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**spender** | **string** | The blockchain address of the auction/marketplace smart contract |
**is_erc721** | **bool** | Set to \&quot;true\&quot; if the asset is an NFT; set to \&quot;false\&quot; is the asset is a Multi Token |
**token_id** | **string** | The ID of the asset (NFT or Multi Token) |
**contract_address** | **string** | The blockchain address of the smart contract from which the asset (NFT or Multi Token) was minted |
**signature_id** | **string** | The KMS identifier of the private key of the blockchain address from which the fee will be deducted |
**index** | **float** | (Only if the signature ID is mnemonic-based) The index of the address from which the fee will be deducted that was generated from the mnemonic | [optional]
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]

[[Back to API list]](../../README.md#api-endpoints)
