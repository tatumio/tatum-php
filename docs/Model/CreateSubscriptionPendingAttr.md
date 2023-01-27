---
title: CreateSubscriptionPendingAttr
parent: Model
layout: page
---

# CreateSubscriptionPendingAttr

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | ID of the account, on which the webhook will be applied, when new incoming pending blockchain transaction with 0 confirmations will be credited. <br>Example: `5e6be8e9e6aa436299950c41` |
**getUrl()** | **string** | URL of the endpoint, where HTTP POST request will be sent, when new incoming pending blockchain transaction with 0 confirmations will be credited. <br>Example: `https://dashboard.tatum.io/webhook-handler` |

