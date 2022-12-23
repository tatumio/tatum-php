# Tatum/Api/StellarApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**xlmBroadcast()**](#xlmbroadcast) | **POST** /v3/xlm/broadcast | Broadcast signed XLM transaction
[**xlmGetAccountInfo()**](#xlmgetaccountinfo) | **GET** /v3/xlm/account/{account} | Get XLM Account info
[**xlmGetAccountTx()**](#xlmgetaccounttx) | **GET** /v3/xlm/account/tx/{account} | Get XLM Account transactions
[**xlmGetFee()**](#xlmgetfee) | **GET** /v3/xlm/fee | Get actual XLM fee
[**xlmGetLastClosedLedger()**](#xlmgetlastclosedledger) | **GET** /v3/xlm/info | Get XLM Blockchain Information
[**xlmGetLedger()**](#xlmgetledger) | **GET** /v3/xlm/ledger/{sequence} | Get XLM Blockchain Ledger by sequence
[**xlmGetLedgerTx()**](#xlmgetledgertx) | **GET** /v3/xlm/ledger/{sequence}/transaction | Get XLM Blockchain Transactions in Ledger
[**xlmGetTransaction()**](#xlmgettransaction) | **GET** /v3/xlm/transaction/{hash} | Get XLM Transaction by hash
[**xlmTransferBlockchain()**](#xlmtransferblockchain) | **POST** /v3/xlm/transaction | Send XLM from address to address
[**xlmTrustLineBlockchain()**](#xlmtrustlineblockchain) | **POST** /v3/xlm/trust | Create / Update / Delete XLM trust line
[**xlmWallet()**](#xlmwallet) | **GET** /v3/xlm/account | Generate XLM account


## `xlmBroadcast()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmBroadcast(
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

Broadcast signed XLM transaction

<h4>5 credits per API call.</h4><br/> <p>Broadcast signed transaction to XLM blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>

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
        ->stellar()
        ->xlmBroadcast($broadcast_kms);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmBroadcast(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmBroadcast(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetAccountInfo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetAccountInfo(
    string $account
): \Tatum\Model\XlmAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**| Account address you want to get balance of |

### Return type

[**\Tatum\Model\XlmAccount**](../Model/XlmAccount.md)

### Description

Get XLM Account info

<h4>5 credits per API call.</h4><br/><p>Get XLM Account detail.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Account address you want to get balance of
$account = 'GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H';

try {
    /** @var \Tatum\Model\XlmAccount $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmGetAccountInfo($account);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmGetAccountInfo(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmGetAccountInfo(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetAccountTx()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetAccountTx(
    string $account,
    [ string $pagination ]
): \Tatum\Model\XlmTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**| Address of XLM account. |
 **$pagination** | **string**| Paging token from the last transaction gives you next page | [optional]

### Return type

[**\Tatum\Model\XlmTx[]**](../Model/XlmTx.md)

### Description

Get XLM Account transactions

<h4>5 credits per API call.</h4><br/><p>List all XLM account transactions.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Address of XLM account.
$account = 'GBRPYHIL2CI3FNQ4BXLFMNDLFJUNPU2HY3ZMFSHONUCEOASW7QC7OX2H';

// Paging token from the last transaction gives you next page
$pagination = 1348087155011584;

try {
    /** @var \Tatum\Model\XlmTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmGetAccountTx($account, $pagination);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmGetAccountTx(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmGetAccountTx(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetFee()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetFee(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get actual XLM fee

<h4>5 credits per API call.</h4><br/><p>Get XLM Blockchain fee in 1/10000000 of XLM (stroop)</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmGetFee();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmGetFee(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmGetFee(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetLastClosedLedger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetLastClosedLedger(
): \Tatum\Model\XlmLedger
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XlmLedger**](../Model/XlmLedger.md)

### Description

Get XLM Blockchain Information

<h4>5 credits per API call.</h4><br/><p>Get XLM Blockchain last closed ledger.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
    /** @var \Tatum\Model\XlmLedger $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmGetLastClosedLedger();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmGetLastClosedLedger(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmGetLastClosedLedger(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetLedger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetLedger(
    string $sequence
): \Tatum\Model\XlmLedger
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sequence** | **string**| Sequence of the ledger. |

### Return type

[**\Tatum\Model\XlmLedger**](../Model/XlmLedger.md)

### Description

Get XLM Blockchain Ledger by sequence

<h4>5 credits per API call.</h4><br/><p>Get XLM Blockchain ledger for ledger sequence.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Sequence of the ledger.
$sequence = 1;

try {
    /** @var \Tatum\Model\XlmLedger $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmGetLedger($sequence);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmGetLedger(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmGetLedger(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetLedgerTx()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetLedgerTx(
    string $sequence
): \Tatum\Model\XlmTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sequence** | **string**| Sequence of the ledger. |

### Return type

[**\Tatum\Model\XlmTx[]**](../Model/XlmTx.md)

### Description

Get XLM Blockchain Transactions in Ledger

<h4>5 credits per API call.</h4><br/><p>Get XLM Blockchain transactions in the ledger.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Sequence of the ledger.
$sequence = 1;

try {
    /** @var \Tatum\Model\XlmTx[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmGetLedgerTx($sequence);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmGetLedgerTx(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmGetLedgerTx(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmGetTransaction(
    string $hash
): \Tatum\Model\XlmTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**| Transaction hash |

### Return type

[**\Tatum\Model\XlmTx**](../Model/XlmTx.md)

### Description

Get XLM Transaction by hash

<h4>5 credits per API call.</h4><br/><p>Get XLM Transaction by transaction hash.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Transaction hash
$hash = '749e4f8933221b9942ef38a02856803f379789ec8d971f1f60535db70135673e';

try {
    /** @var \Tatum\Model\XlmTx $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmGetTransaction($hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmGetTransaction(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmGetTransaction(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmTransferBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmTransferBlockchain(
    \Tatum\Model\XlmTransferBlockchainRequest $xlm_transfer_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xlm_transfer_blockchain_request** | [**\Tatum\Model\XlmTransferBlockchainRequest**](../Model/XlmTransferBlockchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send XLM from address to address

<h4>10 credits per API call.</h4><br/> <p>Send XLM from account to account. It is possbile to send native XLM asset, or any other custom asset present on the network.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$xlm_transfer_blockchain_request = new \Tatum\Model\XlmTransferBlockchainRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmTransferBlockchain($xlm_transfer_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmTransferBlockchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmTransferBlockchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmTrustLineBlockchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmTrustLineBlockchain(
    \Tatum\Model\XlmTrustLineBlockchainRequest $xlm_trust_line_blockchain_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xlm_trust_line_blockchain_request** | [**\Tatum\Model\XlmTrustLineBlockchainRequest**](../Model/XlmTrustLineBlockchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Create / Update / Delete XLM trust line

<h4>10 credits per API call.</h4><br/><p> <p>Create / Update / Delete XLM trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

$xlm_trust_line_blockchain_request = new \Tatum\Model\XlmTrustLineBlockchainRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmTrustLineBlockchain($xlm_trust_line_blockchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmTrustLineBlockchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmTrustLineBlockchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->stellar()->xlmWallet(
): \Tatum\Model\XlmWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\XlmWallet**](../Model/XlmWallet.md)

### Description

Generate XLM account

<h4>5 credits per API call.</h4><br/> <p>Generate XLM account. Tatum does not support HD wallet for XLM, only specific address and private key can be generated.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Tatum SDK
$sdk = new \Tatum\Sdk();

try {
    /** @var \Tatum\Model\XlmWallet $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->stellar()
        ->xlmWallet();
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling stellar()->xlmWallet(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling stellar()->xlmWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
