# Tatum/Api/XRPApi

## References

[XRP API documentation](https://apidoc.tatum.io/tag/XRP/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **accountSettingsXrpBlockchain()**](#accountsettingsxrpblockchain) 

> Modify XRP account
> 
> **POST** `/v3/xrp/account/settings`

[🔹 **accountSettingsXrpBlockchainKMS()**](#accountsettingsxrpblockchainkms) 

> Modify XRP account
> 
> **POST** `/v3/xrp/account/settings`

[🔹 **transferXrpBlockchain()**](#transferxrpblockchain) 

> Send XRP from address to address
> 
> **POST** `/v3/xrp/transaction`

[🔹 **transferXrpBlockchainAsset()**](#transferxrpblockchainasset) 

> Send XRP from address to address
> 
> **POST** `/v3/xrp/transaction`

[🔹 **transferXrpBlockchainAssetKMS()**](#transferxrpblockchainassetkms) 

> Send XRP from address to address
> 
> **POST** `/v3/xrp/transaction`

[🔹 **transferXrpBlockchainKMS()**](#transferxrpblockchainkms) 

> Send XRP from address to address
> 
> **POST** `/v3/xrp/transaction`

[🔹 **trustLineXrpBlockchain()**](#trustlinexrpblockchain) 

> Create / Update / Delete XRP trust line
> 
> **POST** `/v3/xrp/trust`

[🔹 **trustLineXrpBlockchainKMS()**](#trustlinexrpblockchainkms) 

> Create / Update / Delete XRP trust line
> 
> **POST** `/v3/xrp/trust`

[🔹 **xrpBroadcast()**](#xrpbroadcast) 

> Broadcast signed XRP transaction
> 
> **POST** `/v3/xrp/broadcast`

[🔹 **xrpGetAccountBalance()**](#xrpgetaccountbalance) 

> Get Account Balance
> 
> **GET** `/v3/xrp/account/{account}/balance`

[🔹 **xrpGetAccountInfo()**](#xrpgetaccountinfo) 

> Get Account info
> 
> **GET** `/v3/xrp/account/{account}`

[🔹 **xrpGetAccountTx()**](#xrpgetaccounttx) 

> Get Account transactions
> 
> **GET** `/v3/xrp/account/tx/{account}`

[🔹 **xrpGetFee()**](#xrpgetfee) 

> Get actual Blockchain fee
> 
> **GET** `/v3/xrp/fee`

[🔹 **xrpGetLastClosedLedger()**](#xrpgetlastclosedledger) 

> Get XRP Blockchain Information
> 
> **GET** `/v3/xrp/info`

[🔹 **xrpGetLedger()**](#xrpgetledger) 

> Get Ledger
> 
> **GET** `/v3/xrp/ledger/{i}`

[🔹 **xrpGetTransaction()**](#xrpgettransaction) 

> Get XRP Transaction by hash
> 
> **GET** `/v3/xrp/transaction/{hash}`

[🔹 **xrpWallet()**](#xrpwallet) 

> Generate XRP account
> 
> **GET** `/v3/xrp/account`



## `accountSettingsXrpBlockchain()`

> **POST** `/v3/xrp/account/settings`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->accountSettingsXrpBlockchain(
    \Tatum\Model\AccountSettingsXrpBlockchain $account_settings_xrp_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account_settings_xrp_blockchain** | [**\Tatum\Model\AccountSettingsXrpBlockchain**](../Model/AccountSettingsXrpBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Modify XRP account

<h4>10 credits per API call.</h4>

<p> <p>Modify XRP account settings. If an XRP account should be an issuer of the custom asset, this accounts should have rippling enabled to true. In order to support off-chain processing, required destination tag should be set on the account.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>


### Example

[✨ View "accountSettingsXrpBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/accountSettingsXrpBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `accountSettingsXrpBlockchainKMS()`

> **POST** `/v3/xrp/account/settings`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->accountSettingsXrpBlockchainKMS(
    \Tatum\Model\AccountSettingsXrpBlockchainKMS $account_settings_xrp_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account_settings_xrp_blockchain_kms** | [**\Tatum\Model\AccountSettingsXrpBlockchainKMS**](../Model/AccountSettingsXrpBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Modify XRP account

AccountSettingsXrpBlockchainKMS operation

### Example

[✨ View "accountSettingsXrpBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/accountSettingsXrpBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXrpBlockchain()`

> **POST** `/v3/xrp/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->transferXrpBlockchain(
    \Tatum\Model\TransferXrpBlockchain $transfer_xrp_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain** | [**\Tatum\Model\TransferXrpBlockchain**](../Model/TransferXrpBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XRP from address to address

<h4>10 credits per API call.</h4>

 <p>Send XRP from account to account.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>


### Example

[✨ View "transferXrpBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/transferXrpBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXrpBlockchainAsset()`

> **POST** `/v3/xrp/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->transferXrpBlockchainAsset(
    \Tatum\Model\TransferXrpBlockchainAsset $transfer_xrp_blockchain_asset
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain_asset** | [**\Tatum\Model\TransferXrpBlockchainAsset**](../Model/TransferXrpBlockchainAsset.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XRP from address to address

TransferXrpBlockchainAsset operation

### Example

[✨ View "transferXrpBlockchainAsset.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/transferXrpBlockchainAsset.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXrpBlockchainAssetKMS()`

> **POST** `/v3/xrp/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->transferXrpBlockchainAssetKMS(
    \Tatum\Model\TransferXrpBlockchainAssetKMS $transfer_xrp_blockchain_asset_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain_asset_kms** | [**\Tatum\Model\TransferXrpBlockchainAssetKMS**](../Model/TransferXrpBlockchainAssetKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XRP from address to address

TransferXrpBlockchainAssetKMS operation

### Example

[✨ View "transferXrpBlockchainAssetKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/transferXrpBlockchainAssetKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferXrpBlockchainKMS()`

> **POST** `/v3/xrp/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->transferXrpBlockchainKMS(
    \Tatum\Model\TransferXrpBlockchainKMS $transfer_xrp_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_blockchain_kms** | [**\Tatum\Model\TransferXrpBlockchainKMS**](../Model/TransferXrpBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Send XRP from address to address

TransferXrpBlockchainKMS operation

### Example

[✨ View "transferXrpBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/transferXrpBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `trustLineXrpBlockchain()`

> **POST** `/v3/xrp/trust`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->trustLineXrpBlockchain(
    \Tatum\Model\TrustLineXrpBlockchain $trust_line_xrp_blockchain
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xrp_blockchain** | [**\Tatum\Model\TrustLineXrpBlockchain**](../Model/TrustLineXrpBlockchain.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Create / Update / Delete XRP trust line

<h4>10 credits per API call.</h4>

<p> <p>Create / Update / Delete XRP trust line between accounts to transfer private assets. By creating trustline for the first time, the asset is created automatically and can be used in the transactions.
 Account setting rippling must be enabled on the issuer account before the trust line creation to asset work correctly. Creating a trust line will cause an additional 5 XRP to be blocked on the account.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>


### Example

[✨ View "trustLineXrpBlockchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/trustLineXrpBlockchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `trustLineXrpBlockchainKMS()`

> **POST** `/v3/xrp/trust`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->trustLineXrpBlockchainKMS(
    \Tatum\Model\TrustLineXrpBlockchainKMS $trust_line_xrp_blockchain_kms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trust_line_xrp_blockchain_kms** | [**\Tatum\Model\TrustLineXrpBlockchainKMS**](../Model/TrustLineXrpBlockchainKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Create / Update / Delete XRP trust line

TrustLineXrpBlockchainKMS operation

### Example

[✨ View "trustLineXrpBlockchainKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/trustLineXrpBlockchainKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpBroadcast()`

> **POST** `/v3/xrp/broadcast`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpBroadcast(
    \Tatum\Model\BroadcastKMS $broadcast_kms
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$broadcast_kms** | [**\Tatum\Model\BroadcastKMS**](../Model/BroadcastKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionHash**](../Model/TransactionHash.md)

### Description

Broadcast signed XRP transaction

<h4>5 credits per API call.</h4>

 <p>Broadcast signed transaction to XRP blockchain. This method is used internally from Tatum KMS or Tatum client libraries. It is possible to create custom signing mechanism and use this method only for broadcasting data to the blockchain.</p>


### Example

[✨ View "xrpBroadcast.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpBroadcast.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetAccountBalance()`

> **GET** `/v3/xrp/account/{account}/balance`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetAccountBalance(
    string $account
): \Tatum\Model\XrpAccountBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XrpAccountBalance**](../Model/XrpAccountBalance.md)

### Description

Get Account Balance

<h4>5 credits per API call.</h4>

<p>Get XRP Account Balance. Obtain balance of the XRP and other assets on the account.</p>


### Example

[✨ View "xrpGetAccountBalance.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetAccountBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetAccountInfo()`

> **GET** `/v3/xrp/account/{account}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetAccountInfo(
    string $account
): \Tatum\Model\XrpAccount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\XrpAccount**](../Model/XrpAccount.md)

### Description

Get Account info

<h4>5 credits per API call.</h4>

<p>Get XRP Account info.</p>


### Example

[✨ View "xrpGetAccountInfo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetAccountInfo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetAccountTx()`

> **GET** `/v3/xrp/account/tx/{account}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetAccountTx(
    string $account,
    [ float $min, ]
    [ string $marker ]
): \Tatum\Model\XrpAccountTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account** | **string**  | Address of XRP account. |
 **$min** | **float**  | Ledger version to start scanning for transactions from. | [optional]
 **$marker** | **string**  | Marker from the last paginated request. It is stringified JSON from previous response. | [optional]

### Return type

[**\Tatum\Model\XrpAccountTx**](../Model/XrpAccountTx.md)

### Description

Get Account transactions

<h4>5 credits per API call.</h4>

<p>List all Account transactions.</p>


### Example

[✨ View "xrpGetAccountTx.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetAccountTx.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetFee()`

> **GET** `/v3/xrp/fee`

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

<h4>5 credits per API call.</h4>

 <p>Get XRP Blockchain fee. Standard fee for the transaction is available in the drops.base_fee section and is 10 XRP drops by default. When there is a heavy traffic on the blockchain, fees are increasing according to current traffic.</p>


### Example

[✨ View "xrpGetFee.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetFee.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetLastClosedLedger()`

> **GET** `/v3/xrp/info`

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

<h4>5 credits per API call.</h4>

<p>Get XRP Blockchain last closed ledger index and hash.</p>


### Example

[✨ View "xrpGetLastClosedLedger.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetLastClosedLedger.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetLedger()`

> **GET** `/v3/xrp/ledger/{i}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetLedger(
    float $i
): \Tatum\Model\XrpLedger
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$i** | **float**  | Sequence of XRP ledger. |

### Return type

[**\Tatum\Model\XrpLedger**](../Model/XrpLedger.md)

### Description

Get Ledger

<h4>5 credits per API call.</h4>

<p>Get ledger by sequence.</p>


### Example

[✨ View "xrpGetLedger.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetLedger.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpGetTransaction()`

> **GET** `/v3/xrp/transaction/{hash}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->xRP()->xrpGetTransaction(
    string $hash
): \Tatum\Model\XrpTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |

### Return type

[**\Tatum\Model\XrpTx**](../Model/XrpTx.md)

### Description

Get XRP Transaction by hash

<h4>5 credits per API call.</h4>

<p>Get XRP Transaction by transaction hash.</p>


### Example

[✨ View "xrpGetTransaction.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpWallet()`

> **GET** `/v3/xrp/account`

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

<h4>5 credits per API call.</h4>

 <p>Generate XRP account. Tatum does not support HD wallet for XRP, only specific address and private key can be generated.</p>


### Example

[✨ View "xrpWallet.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/XRPApi/xrpWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
