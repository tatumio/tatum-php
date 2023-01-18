---
title: Account
parent: Model
layout: page
---

# Account model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | The ID of the virtual account |
**getBalance()** | [**\Tatum\Model\AccountBalance**](../AccountBalance) |  |
**getCurrency()** | **string** | The currency of the virtual account |
**getFrozen()** | **bool** | If set to "true", the virtual account is frozen |
**getActive()** | **bool** | If set to "true", the virtual account is active |
**getCustomerId()** | **string** | The ID of the customer (newly created or existing one) associated with the virtual account | [optional]
**getAccountNumber()** | **string** | The number associated with the virtual account in an external system | [optional]
**getAccountCode()** | **string** | The code associated with the virtual account in an external system to designate the purpose of the account in bookkeeping | [optional]
**getAccountingCurrency()** | **string** | The currency in which all the transactions for all accounts will be accounted | [optional]
**getXpub()** | **string** | The extended public key of the blockchain wallet associated with the virtual account; used to generate deposit addresses for the virtual account | [optional]

