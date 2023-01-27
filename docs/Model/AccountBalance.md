---
title: AccountBalance
parent: Model
layout: page
---

# AccountBalance

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAccountBalance()** | **string** | All assets on the account, both available and blocked <br>Example: `1000000` |
**getAvailableBalance()** | **string** | The account balance minus the blocked assets; use the available balance to determine how much a customer can send or withdraw from their virtual account <br>Example: `1000000` |

