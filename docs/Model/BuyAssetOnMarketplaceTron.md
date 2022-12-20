# BuyAssetOnMarketplaceTron

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Address of the marketplace smart contract. |
**erc20_address** | **string** | Optional address of the TRC20 token, which will be used as a selling currency of the NFT. | [optional]
**buyer** | **string** | In case of the ERC20 listing, it&#39;s possible to buy on behalf of someone else. This value is the address of the buyer, which should approve spending of the ERC20 tokens for the Marketplace contract. This could be used for a buying from the custodial wallet address. | [optional]
**listing_id** | **string** | ID of the listing. It&#39;s up to the developer to generate unique ID |
**amount** | **string** | Amount of the assets to be sent. For ERC-721 tokens, enter 1. | [optional]
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**fee_limit** | **float** | Fee in TRX to be paid. |

[[Back to Index]](../index.md)
