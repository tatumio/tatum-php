# BidOnAuctionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**contract_address** | **string** | Address of the auction smart contract. |
**erc20_address** | **string** | Optional address of the ERC20 token, which will be used as a selling currency of the NFT. | [optional]
**bidder** | **string** | In case of the ERC20 auction, it&#39;s possible to bid on behalf of someone else. This value is the address of the bidder, which should approve spending of the ERC20 tokens for the Auction contract. This could be used for a bidding from the custodial wallet address. | [optional]
**id** | **string** | ID of the auction. |
**bid_value** | **string** | Amount of the assets to be bid. This must include auction fee. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to API list]](../../README.md#api-endpoints)
