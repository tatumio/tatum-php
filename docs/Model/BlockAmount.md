---
title: BlockAmount
parent: Model
layout: page
---

# BlockAmount

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getAmount()** | **string** | The amount to be blocked on the account | ex.: `5`
**getType()** | **string** | The type of the blockage that you are applying; can be a code or an identifier from an external system or a short description of the blockage | ex.: `DEBIT_CARD_OP`
**getDescription()** | **string** | The description of the blockage that you are applying | ex.: `Card payment in the shop.` [optional]

