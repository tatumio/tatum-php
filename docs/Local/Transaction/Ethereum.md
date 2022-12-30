# Tatum/Local/Transaction/Ethereum

Ethereum Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

## `sign()`

### Type signature

```php
$sdk->{mainnet/testnet}()->local()->transaction()->ethereum()->sign(
    \Tatum\Model\EthBlockchainTransferRequest $transfer
): string
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$transfer** | [**\Tatum\Model\EthBlockchainTransferRequest**](../../Model/EthBlockchainTransferRequest.md) | Transfer request | 

### Return type

Signed transaction hex (`string`)

### Description

Sign transaction

### Example

[✨ View "sign.php"](../../../samples/Local/Transaction/Ethereum/sign.php)

[[Back to top]](#) | [[Back to Local Transaction]](../../index.md#local-transaction)

