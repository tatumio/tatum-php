---
title: CreateSubscriptionContractLogEventAttr
parent: Model
layout: page
---

# CreateSubscriptionContractLogEventAttr model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getEvent()** | **string** | Hexadecimal data representing the event emitted from the smart contract; represents "topic[0]" from the event log. |
**getChain()** | **string** | The blockchain on which events should be monitored. |
**getUrl()** | **string** | The URL of the endpoint where an HTTP POST request will be sent when the block where the events from the smart contracts are reflected gets completed. |

