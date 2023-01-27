---
title: TronAccountTx20200Response
parent: Model
layout: page
---

# TronAccountTx20200Response

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getNext()** | **string** | If present, there are more transactions for the TRON account than the 200 transactions returned in the response, and this parameter specifies the fingerprint of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API). <br>Example: `81d0524acf5967f3b361e03fd7d141ab511791cd7aad7ae406c4c8d408290991` | [optional]
**getTransactions()** | [**\Tatum\Model\TronTx20[]**](../TronTx20) | The list of transactions for the specified TRON account <br>Example: `null` |

