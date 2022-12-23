# Tatum/Api/XRPApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**xrpAccountSettings()**](#xrpaccountsettings) | **POST** /v3/xrp/account/settings | Modify XRP account
[**xrpBroadcast()**](#xrpbroadcast) | **POST** /v3/xrp/broadcast | Broadcast signed XRP transaction
[**xrpGetAccountBalance()**](#xrpgetaccountbalance) | **GET** /v3/xrp/account/{account}/balance | Get Account Balance
[**xrpGetAccountInfo()**](#xrpgetaccountinfo) | **GET** /v3/xrp/account/{account} | Get Account info
[**xrpGetAccountTx()**](#xrpgetaccounttx) | **GET** /v3/xrp/account/tx/{account} | Get Account transactions
[**xrpGetFee()**](#xrpgetfee) | **GET** /v3/xrp/fee | Get actual Blockchain fee
[**xrpGetLastClosedLedger()**](#xrpgetlastclosedledger) | **GET** /v3/xrp/info | Get XRP Blockchain Information
[**xrpGetLedger()**](#xrpgetledger) | **GET** /v3/xrp/ledger/{i} | Get Ledger
[**xrpGetTransaction()**](#xrpgettransaction) | **GET** /v3/xrp/transaction/{hash} | Get XRP Transaction by hash
[**xrpTransferBlockchain()**](#xrptransferblockchain) | **POST** /v3/xrp/transaction | Send XRP from address to address
[**xrpTrustLineBlockchain()**](#xrptrustlineblockchain) | **POST** /v3/xrp/trust | Create / Update / Delete XRP trust line
[**xrpWallet()**](#xrpwallet) | **GET** /v3/xrp/account | Generate XRP account


## `xrpAccountSettings()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpAccountSettings(
    \Tatum\Model\XrpAccountSettingsRequest $xrp_account_settings_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xrp_account_settings_request** | [**\Tatum\Model\XrpAccountSettingsRequest**](../Model/XrpAccountSettingsRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Modify XRP account

<h4>10 credits per API call.</h4><br/><p> <p>Modify XRP account settings. If an XRP account should be an issuer of the custom asset, this accounts should have rippling enabled to true. In order to support off-chain processing, required destination tag should be set on the account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$xrp_account_settings_request = new \Tatum\Model\XrpAccountSettingsRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpAccountSettings($xrp_account_settings_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpAccountSettings(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpAccountSettings(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md)|  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed XRP transaction

<h4>5 credits per API call.</h4><br/> <p>Broadcast signed transaction to XRP blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$broadcast_kms = new \Tatum\Model\BroadcastKMS();

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpBroadcast(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetAccountBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetAccountBalance(
    string $account
): \Tatum\Model\XrpAccountBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\XrpAccountBalance**](../Model/XrpAccountBalance.md)

### Description

Get Account Balance

<h4>5 credits per API call.</h4><br/><p>Get XRP Account Balance. Obtain balance of the XRP and other assets on the account.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$account = 'rDA3DJBUBjA1X3PtLLFAEXxX31oA5nL3QF';

try {
    /** @var \Tatum\Model\XrpAccountBalance $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpGetAccountBalance($account);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpGetAccountBalance(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpGetAccountBalance(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetAccountInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetAccountInfo(
    string $account
): \Tatum\Model\XrpAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\XrpAccount**](../Model/XrpAccount.md)

### Description

Get Account info

<h4>5 credits per API call.</h4><br/><p>Get XRP Account info.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$account = 'rDA3DJBUBjA1X3PtLLFAEXxX31oA5nL3QF';

try {
    /** @var \Tatum\Model\XrpAccount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpGetAccountInfo($account);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpGetAccountInfo(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpGetAccountInfo(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetAccountTx()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetAccountTx(
    string $account, 
    [ float $min,  ]
    [ string $marker ]
): \Tatum\Model\XrpAccountTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**| Address of XRP account. |
 **$min** | **float**| Ledger version to start scanning for transactions from. | [optional]
 **$marker** | **string**| Marker from the last paginated request. It is stringified JSON from previous response. | [optional]

### Return type

[**\Tatum\Model\XrpAccountTx**](../Model/XrpAccountTx.md)

### Description

Get Account transactions

<h4>5 credits per API call.</h4><br/><p>List all Account transactions.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Address of XRP account.
$account = 'account_example';

// Ledger version to start scanning for transactions from.
$min = 3.4;

// Marker from the last paginated request. It is stringified JSON from previous response.
$marker = 'marker_example';

try {
    /** @var \Tatum\Model\XrpAccountTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpGetAccountTx($account, $min, $marker);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpGetAccountTx(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpGetAccountTx(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetFee()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetFee(
): \Tatum\Model\XrpFee
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XrpFee**](../Model/XrpFee.md)

### Description

Get actual Blockchain fee

<h4>5 credits per API call.</h4><br/> <p>Get XRP Blockchain fee. Standard fee for the transaction is available in the drops.base_fee section and is 10 XRP drops by default. When there is a heavy traffic on the blockchain, fees are increasing according to current traffic.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
    /** @var \Tatum\Model\XrpFee $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpGetFee();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpGetFee(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpGetFee(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetLastClosedLedger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetLastClosedLedger(
): \Tatum\Model\XrpInfo
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XrpInfo**](../Model/XrpInfo.md)

### Description

Get XRP Blockchain Information

<h4>5 credits per API call.</h4><br/><p>Get XRP Blockchain last closed ledger index and hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
    /** @var \Tatum\Model\XrpInfo $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpGetLastClosedLedger();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpGetLastClosedLedger(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpGetLastClosedLedger(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetLedger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetLedger(
    float $i
): \Tatum\Model\XrpLedger
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**| Sequence of XRP ledger. |

### Return type

[**\Tatum\Model\XrpLedger**](../Model/XrpLedger.md)

### Description

Get Ledger

<h4>5 credits per API call.</h4><br/><p>Get ledger by sequence.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Sequence of XRP ledger.
$i = 3.4;

try {
    /** @var \Tatum\Model\XrpLedger $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpGetLedger($i);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpGetLedger(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpGetLedger(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetTransaction(
    string $hash
): \Tatum\Model\XrpTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\XrpTx**](../Model/XrpTx.md)

### Description

Get XRP Transaction by hash

<h4>5 credits per API call.</h4><br/><p>Get XRP Transaction by transaction hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transaction hash
$hash = '1A32A054B04AC9D6814710DDCA416E72C4CD2D78D6C3DFC06CC9369CC4F6B250';

try {
    /** @var \Tatum\Model\XrpTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpGetTransaction(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpTransferBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpTransferBlockchain(
    \Tatum\Model\XrpTransferBlockchainRequest $xrp_transfer_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xrp_transfer_blockchain_request** | [**\Tatum\Model\XrpTransferBlockchainRequest**](../Model/XrpTransferBlockchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send XRP from address to address

<h4>10 credits per API call.</h4><br/> <p>Send XRP from account to account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$xrp_transfer_blockchain_request = new \Tatum\Model\XrpTransferBlockchainRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpTransferBlockchain($xrp_transfer_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpTransferBlockchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpTransferBlockchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpTrustLineBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpTrustLineBlockchain(
    \Tatum\Model\XrpTrustLineBlockchainRequest $xrp_trust_line_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xrp_trust_line_blockchain_request** | [**\Tatum\Model\XrpTrustLineBlockchainRequest**](../Model/XrpTrustLineBlockchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Create / Update / Delete XRP trust line

<h4>10 credits per API call.</h4><br/><p> <p>Create / Update / Delete XRP trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions.<br/> Account setting rippling must be enabled on the issuer account before the trust line creation to asset work correctly. Creating a trust line will cause an additional 5 XRP to be blocked on the account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$xrp_trust_line_blockchain_request = new \Tatum\Model\XrpTrustLineBlockchainRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpTrustLineBlockchain($xrp_trust_line_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpTrustLineBlockchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpTrustLineBlockchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpWallet(
): \Tatum\Model\XrpWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XrpWallet**](../Model/XrpWallet.md)

### Description

Generate XRP account

<h4>5 credits per API call.</h4><br/> <p>Generate XRP account. Tatum does not support HD wallet for XRP, only specific address and private key can be generated.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
    /** @var \Tatum\Model\XrpWallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->xRP()
        ->xrpWallet();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling xRP()->xrpWallet(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling xRP()->xrpWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
