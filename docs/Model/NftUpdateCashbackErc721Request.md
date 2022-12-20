# NftUpdateCashbackErc721Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**token_id** | **string** | The ID of the NFT to update royalty information for |
**contract_address** | **string** | The blockchain address of the NFT to update royalty information for |
**cashback_value** | **string** | The new value of the royalty cashback to be set for the author of the NFT; to disable the royalties for the NFT completely, set this parameter to 0 |
**from_private_key** | **string** | The private key of the NFT author&#39;s address |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee** | [**\Tatum\Model\CustomFee**](CustomFee.md) |  | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |
**fee_limit** | **float** | The maximum amount to be paid as the transaction fee (in TRX) |
**signature_id** | **string** | The KMS identifier of the private key of the NFT author&#39;s address |
**index** | **float** | (Only if the signature ID is mnemonic-based) The index of the NFT author&#39;s address that was generated from the mnemonic | [optional]
**account** | **string** | The blockchain address of the NFT author from which the transaction will be performed |

[[Back to Index]](../index.md)
