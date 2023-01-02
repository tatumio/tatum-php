# Tatum/Api/SolanaApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**solanaBlockchainTransfer()**](#solanablockchaintransfer) | **POST** [/v3/solana/transaction](https://apidoc.tatum.io/tag/Solana#operation/SolanaBlockchainTransfer) | Send SOL from account to account
[**solanaBroadcastConfirm()**](#solanabroadcastconfirm) | **POST** [/v3/solana/broadcast/confirm](https://apidoc.tatum.io/tag/Solana#operation/SolanaBroadcastConfirm) | Broadcast and confirm signed Solana transaction
[**solanaGenerateWallet()**](#solanageneratewallet) | **GET** [/v3/solana/wallet](https://apidoc.tatum.io/tag/Solana#operation/SolanaGenerateWallet) | Generate Solana wallet
[**solanaGetBalance()**](#solanagetbalance) | **GET** [/v3/solana/account/balance/{address}](https://apidoc.tatum.io/tag/Solana#operation/SolanaGetBalance) | Get Solana Account balance
[**solanaGetBlock()**](#solanagetblock) | **GET** [/v3/solana/block/{height}](https://apidoc.tatum.io/tag/Solana#operation/SolanaGetBlock) | Get Solana block by number
[**solanaGetCurrentBlock()**](#solanagetcurrentblock) | **GET** [/v3/solana/block/current](https://apidoc.tatum.io/tag/Solana#operation/SolanaGetCurrentBlock) | Get current block number
[**solanaGetTransaction()**](#solanagettransaction) | **GET** [/v3/solana/transaction/{hash}](https://apidoc.tatum.io/tag/Solana#operation/SolanaGetTransaction) | Get Solana Transaction
[**solanaWeb3Driver()**](#solanaweb3driver) | **POST** [/v3/solana/web3/{xApiKey}](https://apidoc.tatum.io/tag/Solana#operation/SolanaWeb3Driver) | JSON RPC HTTP driver


## `solanaBlockchainTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->solana()->solanaBlockchainTransfer(
    \Tatum\Model\SolanaBlockchainTransferRequest $solana_blockchain_transfer_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$solana_blockchain_transfer_request** | [**\Tatum\Model\SolanaBlockchainTransferRequest**](../Model/SolanaBlockchainTransferRequest.md) |  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

### Description

Send SOL from account to account

<h4>2 credits per API call.</h4><br/> <p>Send SOL from account to account.<br/><br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "solanaBlockchainTransfer.php"](../../examples/Api/SolanaApi/solanaBlockchainTransfer.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `solanaBroadcastConfirm()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->solana()->solanaBroadcastConfirm(
    \Tatum\Model\SolanaBroadcastConfirm $solana_broadcast_confirm
): \Tatum\Model\SolanaTransactionHashWithConfirm
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$solana_broadcast_confirm** | [**\Tatum\Model\SolanaBroadcastConfirm**](../Model/SolanaBroadcastConfirm.md) |  |

### Return type

[**\Tatum\Model\SolanaTransactionHashWithConfirm**](../Model/SolanaTransactionHashWithConfirm.md)

### Description

Broadcast and confirm signed Solana transaction

<h4>10 credits per API call.</h4><br/> <p>Broadcast signed custom transactions to Solana blockchain and waits for transaction confirmation depending on the commitment given. More information about commitment levels <a target="_blank" href="https://docs.solana.com/ru/developing/clients/jsonrpc-api#configuring-state-commitment">here</a></p>

### Example

[✨ View "solanaBroadcastConfirm.php"](../../examples/Api/SolanaApi/solanaBroadcastConfirm.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `solanaGenerateWallet()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->solana()->solanaGenerateWallet(
): \Tatum\Model\SolanaWallet
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\SolanaWallet**](../Model/SolanaWallet.md)

### Description

Generate Solana wallet

<h4>1 credit per API call.</h4><br/> <p>Generate Solana private key and account address.</p>

### Example

[✨ View "solanaGenerateWallet.php"](../../examples/Api/SolanaApi/solanaGenerateWallet.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `solanaGetBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->solana()->solanaGetBalance(
    string $address
): \Tatum\Model\SolBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | Account address you want to get balance of |

### Return type

[**\Tatum\Model\SolBalance**](../Model/SolBalance.md)

### Description

Get Solana Account balance

<h4>1 credit per API call.</h4><br/><p>Get Solana account balance in SOL. This method does not prints any balance of the SPL or NFT tokens on the account.</p>

### Example

[✨ View "solanaGetBalance.php"](../../examples/Api/SolanaApi/solanaGetBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `solanaGetBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->solana()->solanaGetBlock(
    float $height
): \Tatum\Model\SolanaBlock
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$height** | **float**  | Block number |

### Return type

[**\Tatum\Model\SolanaBlock**](../Model/SolanaBlock.md)

### Description

Get Solana block by number

<h4>1 credit per API call.</h4><br/> <p>Get Solana block by block hash or block number. <br/> You can find full data description here - <a target="blank" href="https://docs.solana.com/developing/clients/jsonrpc-api#getblock">https://docs.solana.com/developing/clients/jsonrpc-api#getblock</a> </p>

### Example

[✨ View "solanaGetBlock.php"](../../examples/Api/SolanaApi/solanaGetBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `solanaGetCurrentBlock()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->solana()->solanaGetCurrentBlock(
): float
```

### Parameters

This endpoint does not need any parameter.

### Return type

**float**

### Description

Get current block number

<h4>1 credit per API call.</h4><br/><p>Get Solana current block number. This is the number of the latest block in the blockchain.</p>

### Example

[✨ View "solanaGetCurrentBlock.php"](../../examples/Api/SolanaApi/solanaGetCurrentBlock.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `solanaGetTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->solana()->solanaGetTransaction(
    string $hash,
    [ string $commitment ]
): \Tatum\Model\SolanaTx
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$hash** | **string**  | Transaction hash |
 **$commitment** | **string**  | Commitment of the transaction. If not defined, all transactions are being scanned. | [optional]

### Return type

[**\Tatum\Model\SolanaTx**](../Model/SolanaTx.md)

### Description

Get Solana Transaction

<h4>2 credit per API call.</h4><br/><p>Get Solana transaction by transaction hash.<br/> You can find full data description here - <a target="blank" href="https://docs.solana.com/developing/clients/jsonrpc-api#gettransaction">https://docs.solana.com/developing/clients/jsonrpc-api#gettransaction</a> </p>

### Example

[✨ View "solanaGetTransaction.php"](../../examples/Api/SolanaApi/solanaGetTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `solanaWeb3Driver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->solana()->solanaWeb3Driver(
    string $x_api_key,
    object $body
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. |
 **$body** | **object**  |  |

### Return type

**object**

### Description

JSON RPC HTTP driver

<p><b>2 credits per API call</b></p> <p><b>This endpoint is deprecated. Use the <a href="https://apidoc.tatum.io/tag/Node-RPC" target="_blank">HTTP-based JSON RPC driver</a> instead.</b></p><br/> <p>Use this endpoint URL as a http-based JSON RPC driver to connect directly to the Solana node provided by Tatum. To learn more about Solana JSON RPC, visit the <a href="https://docs.solana.com/developing/clients/jsonrpc-api" target="_blank">Solana developer's guide</a>.</p>

### Example

[✨ View "solanaWeb3Driver.php"](../../examples/Api/SolanaApi/solanaWeb3Driver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
