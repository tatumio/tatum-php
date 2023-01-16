# Local/Transaction/Ethereum

Ethereum Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

## `sign()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->transaction()->ethereum()->sign(
    \Tatum\Model\TransferEthBlockchain $transfer
): string
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$transfer** | [**\Tatum\Model\TransferEthBlockchain**](../../Model/TransferEthBlockchain.md) | Transfer request | 

### Return type

Signed transaction hex (`string`)

### Description

Sign transaction

### Example

[✨ View "sign.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Local/Transaction/Ethereum/sign.php)

[[Back to top]](#) | [[Back to Local Transaction]](../../index.md#local-transaction)

