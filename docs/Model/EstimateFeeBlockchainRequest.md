# EstimateFeeBlockchainRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Blockchain to estimate fee for. |
**type** | **string** | Type of transaction |
**sender** | **string** | Sender address |
**recipient** | **string** | Blockchain address to send assets |
**contract_address** | **string** | Contract address of the token |
**amount** | **string** | Amount to be sent in native asset, ERC20 or ERC1155 |
**recipients** | **string[]** | Blockchain addresses to mint tokens to |
**token_ids** | **string[]** | Token IDs |
**urls** | **string[]** | Metadata URLs |
**batch_count** | **float** | Number of addresses to create |
**custodial_address** | **string** | Contract address of custodial wallet contract |
**token_type** | **float** | Type of the token to transfer from gas pump wallet. 0 - ERC20, 1 - ERC721, 2 - ERC1155, 3 - native asset |
**from_address** | **string[]** | Array of addresses. Tatum will automatically scan last 100 transactions for each address and will use all of the unspent values. We advise to use this option if you have 1 address per 1 transaction only. |
**to** | [**\Tatum\Model\EstimateFeeFromAddressToInner[]**](EstimateFeeFromAddressToInner.md) | Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee. |
**from_utxo** | [**\Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[]**](EstimateFeeFromUTXOFromUTXOInner.md) | Array of transaction hashes, index of UTXO in it and corresponding private keys. Use this option if you want to calculate amount to send manually. Either fromUTXO or fromAddress must be present. |

[[Back to Index]](../index.md)
