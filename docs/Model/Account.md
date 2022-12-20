# Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the virtual account |
**balance** | [**\Tatum\Model\AccountBalance**](AccountBalance.md) |  |
**currency** | **string** | The currency of the virtual account |
**frozen** | **bool** | If set to \&quot;true\&quot;, the virtual account is frozen |
**active** | **bool** | If set to \&quot;true\&quot;, the virtual account is active |
**customer_id** | **string** | The ID of the customer (newly created or existing one) associated with the virtual account | [optional]
**account_number** | **string** | The number associated with the virtual account in an external system | [optional]
**account_code** | **string** | The code associated with the virtual account in an external system to designate the purpose of the account in bookkeeping | [optional]
**accounting_currency** | **string** | The currency in which all the transactions for all accounts will be accounted | [optional]
**xpub** | **string** | The extended public key of the blockchain wallet associated with the virtual account; used to generate deposit addresses for the virtual account | [optional]

[[Back to Index]](../index.md)
