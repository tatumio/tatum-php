# ApproveNftAuctionSpendingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to work with. |
**spender** | **string** | Address of the auction smart contract - new spender. |
**is_erc721** | **bool** | True if asset is NFT of type ERC721, false if ERC1155. |
**token_id** | **string** | ID of token, if transaction is for ERC-721 or ERC-1155. |
**contract_address** | **string** | Address of the ERC20 token, which is used for buying NFT asset from the marketplace. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**fee_currency** | **string** | Currency to pay for transaction gas |

[[Back to API list]](../../README.md#api-endpoints)
