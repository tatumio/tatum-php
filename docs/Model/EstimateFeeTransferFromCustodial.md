# EstimateFeeTransferFromCustodial

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to estimate fee for. |
**type** | **string** | Type of transaction |
**sender** | **string** | Sender address |
**recipient** | **string** | Blockchain address to send assets |
**contract_address** | **string** | Contract address of the token |
**custodial_address** | **string** | Contract address of custodial wallet contract |
**amount** | **string** | Amount to be sent in native asset, ERC20 or ERC1155 |
**token_type** | **float** | Type of the token to transfer from gas pump wallet. 0 - ERC20, 1 - ERC721, 2 - ERC1155, 3 - native asset |

[[Back to API list]](../../README.md#api-endpoints)
