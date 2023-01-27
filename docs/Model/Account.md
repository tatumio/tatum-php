---
title: Account
parent: Model
layout: page
---

# Account

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | The ID of the virtual account | ex.: `5e68c66581f2ee32bc354087`
**getBalance()** | [**\Tatum\Model\AccountBalance**](../AccountBalance) |  | ex.: `null`
**getCurrency()** | **string** | The currency of the virtual account | ex.: `BTC`
**getFrozen()** | **bool** | If set to "true", the virtual account is frozen | ex.: `false`
**getActive()** | **bool** | If set to "true", the virtual account is active | ex.: `true`
**getCustomerId()** | **string** | The ID of the customer (newly created or existing one) associated with the virtual account | ex.: `5e68c66581f2ee32bc354087` [optional]
**getAccountNumber()** | **string** | The number associated with the virtual account in an external system | ex.: `123456` [optional]
**getAccountCode()** | **string** | The code associated with the virtual account in an external system to designate the purpose of the account in bookkeeping | ex.: `03_ACC_01` [optional]
**getAccountingCurrency()** | **string** | The currency in which all the transactions for all accounts will be accounted | ex.: `EUR` [optional]
**getXpub()** | **string** | The extended public key of the blockchain wallet associated with the virtual account; used to generate deposit addresses for the virtual account | ex.: `xpub6FB4LJzdKNkkpsjggFAGS2p34G48pqjtmSktmK2Ke3k1LKqm9ULsg8bGfDakYUrdhe2EHw5uGKX9DrMbrgYnVfDwrksT4ZVQ3vmgEruo3Ka` [optional]

