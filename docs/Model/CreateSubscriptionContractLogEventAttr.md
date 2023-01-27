---
title: CreateSubscriptionContractLogEventAttr
parent: Model
layout: page
---

# CreateSubscriptionContractLogEventAttr

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getEvent()** | **string** | Hexadecimal data representing the event emitted from the smart contract; represents "topic[0]" from the event log. <br>Example: `0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef` |
**getChain()** | **string** | The blockchain on which events should be monitored. <br>Example: `MATIC` |
**getUrl()** | **string** | The URL of the endpoint where an HTTP POST request will be sent when the block where the events from the smart contracts are reflected gets completed. <br>Example: `https://dashboard.tatum.io/webhook-handler` |

