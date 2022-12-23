# EstimateFeeBlockchainRequest

## Getters

Method | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getChain()** | **string** | Blockchain to estimate fee for. |
**getType()** | **string** | Type of transaction |
**getSender()** | **string** | Sender address |
**getRecipient()** | **string** | Blockchain address to send assets |
**getContractAddress()** | **string** | Contract address of the token |
**getAmount()** | **string** | Amount to be sent in native asset, ERC20 or ERC1155 |
**getRecipients()** | **string[]** | Blockchain addresses to mint tokens to |
**getTokenIds()** | **string[]** | Token IDs |
**getUrls()** | **string[]** | Metadata URLs |
**getBatchCount()** | **float** | Number of addresses to create |
**getCustodialAddress()** | **string** | Contract address of custodial wallet contract |
**getTokenType()** | **float** | Type of the token to transfer from gas pump wallet. 0 - ERC20, 1 - ERC721, 2 - ERC1155, 3 - native asset |
**getFromAddress()** | **string[]** | Array of addresses. Tatum will automatically scan last 100 transactions for each address and will use all of the unspent values. We advise to use this option if you have 1 address per 1 transaction only. |
**getTo()** | [**\Tatum\Model\EstimateFeeFromAddressToInner[]**](EstimateFeeFromAddressToInner.md) | Array of addresses and values to send bitcoins to. Values must be set in BTC. Difference between from and to is transaction fee. |
**getFromUtxo()** | [**\Tatum\Model\EstimateFeeFromUTXOFromUTXOInner[]**](EstimateFeeFromUTXOFromUTXOInner.md) | Array of transaction hashes, index of UTXO in it and corresponding private keys. Use this option if you want to calculate amount to send manually. Either fromUTXO or fromAddress must be present. |

[[Back to Index]](../index.md)
