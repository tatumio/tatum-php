# Tatum/Local/Transaction/Ethereum

Ethereum Transaction

Method | Description
------------- | -------------
[**sign()**](#sign) | Sign transaction

## `sign()`

```php
local()->transaction()->ethereum()->sign(
    ?\Tatum\Model\EthBlockchainTransferRequest $transfer
): string
```
Sign transaction

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Transfer request
$transfer = (new \Tatum\Model\EthBlockchainTransferRequest())
  ->setFromPrivateKey('0xad25407b6dba3907b1d001ddfecf909ba94fcdf4f4aead108709598b125e9585')
  ->setTo('0x9266045eea878f35e0041d3140f0d79f8606f04c')
  ->setAmount(1)
  ->setNonce(0)
  ->setFee((new \Tatum\Model\CustomFee())->setGasPrice(55)->setGasLimit(60));

try {
    /** @var string $result */
    $result = $sdk
        ->testnet()
        ->local()->transaction()
        ->ethereum()
        ->sign($transfer);
    
    var_dump($result);
} catch (\Exception $exc) {
    echo 'Exception when calling local()->transaction()->ethereum()->sign(): ', $exc->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$transfer** | [**\Tatum\Model\EthBlockchainTransferRequest**](../../Model/EthBlockchainTransferRequest.md) | Transfer request | 

### Return type

Signed transaction hex (`string`)

[[Back to top]](#) | [[Back to Local Transaction]](../../index.md#local-transaction)
