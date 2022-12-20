# TronAccountTx200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next** | **string** | If present, there are more transactions for the TRON account than the 200 transactions returned in the response, and this parameter specifies the ID of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API). | [optional]
**transactions** | [**\Tatum\Model\TronTx[]**](TronTx.md) | The list of transactions for the specified TRON account |

[[Back to Index]](../index.md)