# Tatum/Api/BlockchainOperationsApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adaTransferOffchain()**](#adatransferoffchain) | **POST** /v3/offchain/ada/transfer | Send ADA from a virtual account to the blockchain
[**algoDeployErc20Ledger()**](#algodeployerc20ledger) | **POST** /v3/offchain/algo/erc20/deploy | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
[**algoTransfer()**](#algotransfer) | **POST** /v3/offchain/algorand/transfer | Send ALGO from a virtual account to the blockchain
[**bchTransfer()**](#bchtransfer) | **POST** /v3/offchain/bcash/transfer | Send BCH from a virtual account to the blockchain
[**bnbAssetOffchain()**](#bnbassetoffchain) | **POST** /v3/offchain/bnb/asset | Create a BNB-based asset
[**bnbTransfer()**](#bnbtransfer) | **POST** /v3/offchain/bnb/transfer | Send BNB from a virtual account to the blockchain
[**bscDeployBep20()**](#bscdeploybep20) | **POST** /v3/offchain/bsc/bep20/deploy | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**bscOrBepTransfer()**](#bscorbeptransfer) | **POST** /v3/offchain/bsc/transfer | Send BSC from a virtual account to the blockchain
[**btcTransfer()**](#btctransfer) | **POST** /v3/offchain/bitcoin/transfer | Send BTC from a virtual account to the blockchain
[**celoDeployErc20Ledger()**](#celodeployerc20ledger) | **POST** /v3/offchain/celo/erc20/deploy | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**celoOrErc20Transfer()**](#celoorerc20transfer) | **POST** /v3/offchain/celo/transfer | Send CELO from a virtual account to the blockchain
[**createBep20()**](#createbep20) | **POST** /v3/offchain/bsc/bep20 | Register a new BNB Smart Chain BEP-20 token in the virtual account
[**createCeloErc20()**](#createceloerc20) | **POST** /v3/offchain/celo/erc20 | Register a new Celo ERC-20-equivalent token in the virtual account
[**createErc20()**](#createerc20) | **POST** /v3/offchain/ethereum/erc20 | Register a new Ethereum ERC-20 token in the virtual account
[**createHrm20()**](#createhrm20) | **POST** /v3/offchain/one/hrm20 | Register a new Harmony HRM-20 token in the virtual account
[**createTrc()**](#createtrc) | **POST** /v3/offchain/tron/trc | Register a new TRON TRC-10 or TRC-20 token in the virtual account
[**createXdc20()**](#createxdc20) | **POST** /v3/offchain/xdc/erc20 | Register a new XinFin ERC-20-equivalent token in the virtual account
[**dogeTransfer()**](#dogetransfer) | **POST** /v3/offchain/dogecoin/transfer | Send DOGE from a virtual account to the blockchain
[**egldTransfer()**](#egldtransfer) | **POST** /v3/offchain/egld/transfer | Send EGLD from a virtual account to the blockchain
[**ethDeployErc20()**](#ethdeployerc20) | **POST** /v3/offchain/ethereum/erc20/deploy | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**ethTransfer()**](#ethtransfer) | **POST** /v3/offchain/ethereum/transfer | Send ETH from a virtual account to the blockchain
[**ethTransferErc20()**](#ethtransfererc20) | **POST** /v3/offchain/ethereum/erc20/transfer | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
[**flowTransfer()**](#flowtransfer) | **POST** /v3/offchain/flow/transfer | Send FLOW from a virtual account to the blockchain
[**kcsDeployErc20Ledger()**](#kcsdeployerc20ledger) | **POST** /v3/offchain/kcs/erc20/deploy | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**kcsTransfer()**](#kcstransfer) | **POST** /v3/offchain/kcs/transfer | Send KCS from a virtual account to the blockchain
[**klayDeployErc20()**](#klaydeployerc20) | **POST** /v3/offchain/klaytn/erc20/deploy | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**klayTransfer()**](#klaytransfer) | **POST** /v3/offchain/klaytn/transfer | Send KLAY from a virtual account to the blockchain
[**ltcTransfer()**](#ltctransfer) | **POST** /v3/offchain/litecoin/transfer | Send LTC from a virtual account to the blockchain
[**oneDeployHrm20()**](#onedeployhrm20) | **POST** /v3/offchain/one/hrm20/deploy | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**oneTransfer()**](#onetransfer) | **POST** /v3/offchain/one/transfer | Send ONE from a virtual account to the blockchain
[**polygonTransfer()**](#polygontransfer) | **POST** /v3/offchain/polygon/transfer | Send MATIC from a virtual account to the blockchain
[**registerErc20Token()**](#registererc20token) | **POST** /v3/offchain/token/{chain} | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
[**solTransfer()**](#soltransfer) | **POST** /v3/offchain/solana/transfer | Send SOL from a virtual account to the blockchain
[**storeCeloErc20Address()**](#storeceloerc20address) | **POST** /v3/offchain/celo/erc20/{name}/{address} | Set the contract address of a Celo ERC-20-equivalent token
[**storeTokenAddress()**](#storetokenaddress) | **POST** /v3/offchain/token/{name}/{address} | Set the contract address of an ERC-20 or ERC-20-equivalent token
[**storeTrcAddress()**](#storetrcaddress) | **POST** /v3/offchain/tron/trc/{name}/{address} | Set the contract address of a TRC-10 or TRC-20 token
[**tronDeployTrc()**](#trondeploytrc) | **POST** /v3/offchain/tron/trc/deploy | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**tronTransferOffchain()**](#trontransferoffchain) | **POST** /v3/offchain/tron/transfer | Send TRON from a virtual account to the blockchain
[**xdcDeployErc20()**](#xdcdeployerc20) | **POST** /v3/offchain/xdc/erc20/deploy | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**xdcTransfer()**](#xdctransfer) | **POST** /v3/offchain/xdc/transfer | Send XDC from a virtual account to the blockchain
[**xlmAssetOffchain()**](#xlmassetoffchain) | **POST** /v3/offchain/xlm/asset | Create an XLM-based asset
[**xlmTransfer()**](#xlmtransfer) | **POST** /v3/offchain/xlm/transfer | Send XLM from a virtual account to the blockchain
[**xrpAssetOffchain()**](#xrpassetoffchain) | **POST** /v3/offchain/xrp/asset | Create XRP based Asset
[**xrpTransfer()**](#xrptransfer) | **POST** /v3/offchain/xrp/transfer | Send XRP from a virtual account to the blockchain


## `adaTransferOffchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->adaTransferOffchain(
    ?\Tatum\Model\AdaTransferOffchainRequest $ada_transfer_offchain_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ada_transfer_offchain_request** | [**\Tatum\Model\AdaTransferOffchainRequest**](../Model/AdaTransferOffchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send ADA from a virtual account to the blockchain

<p><b>Support for Cardano is deprecated.</b></p><br/> <h4>10 credits per API call.</h4><p>Send ADA (Cardano) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If ADA server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$ada_transfer_offchain_request = new \Tatum\Model\AdaTransferOffchainRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->adaTransferOffchain($ada_transfer_offchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->adaTransferOffchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->adaTransferOffchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algoDeployErc20Ledger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->algoDeployErc20Ledger(
    ?\Tatum\Model\AlgoDeployErc20LedgerRequest $algo_deploy_erc20_ledger_request
): \Tatum\Model\AlgoDeployErc20Ledger200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$algo_deploy_erc20_ledger_request** | [**\Tatum\Model\AlgoDeployErc20LedgerRequest**](../Model/AlgoDeployErc20LedgerRequest.md)|  |

### Return type

[**\Tatum\Model\AlgoDeployErc20Ledger200Response**](../Model/AlgoDeployErc20Ledger200Response.md)

### Description

Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy an Algorand ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new Algorand ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$algo_deploy_erc20_ledger_request = new \Tatum\Model\AlgoDeployErc20LedgerRequest();

try {
    /** @var \Tatum\Model\AlgoDeployErc20Ledger200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->algoDeployErc20Ledger($algo_deploy_erc20_ledger_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->algoDeployErc20Ledger(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->algoDeployErc20Ledger(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `algoTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->algoTransfer(
    ?\Tatum\Model\AlgoTransferRequest $algo_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$algo_transfer_request** | [**\Tatum\Model\AlgoTransferRequest**](../Model/AlgoTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send ALGO from a virtual account to the blockchain

<p><b>4 credits per API call</b></p> <p>Send Algos or ERC-20-equivalent Algorand tokens from a virtual account (even from a virtual account without deposit addresses adssigned) to the Algorand blockchain.</p> <p>The recipient has to agree in advance to receive assets because Algorand charges users for storing assets on their addresses, and an Algorand blockchain address by default does not receive assets unless explicitly agreed. Before sending any asset from a virtual account to the blockchain, make sure that the recipient <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset" target="_blank">has agreed to receive the assets</a> to their address.</p> <p>Sending Algorand assets creates an internal Tatum withdrawal request with an ID. If everything works as expected, the withdrawal request is marked as complete and a transaction ID is assigned to it.</p> <ul> <li>If a server connection is unavailable, the withdrawal request is cancelled.</li> <li>If the transfer to the blockchain is successful, but the Tatum infrastructure cannot be accesses, the ID of the blockchain transaction is returned and you have to <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal" target="_blank">complete the withdrawal request manually</a>. Otherwise, all other withdrawals will be pending.</li> </ul> <p><b>Signing a transaction</b><br/> When sending Algos or ERC-20-equivalent Algorand tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$algo_transfer_request = new \Tatum\Model\AlgoTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->algoTransfer($algo_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->algoTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->algoTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bchTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->bchTransfer(
    ?\Tatum\Model\BchTransferRequest $bch_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bch_transfer_request** | [**\Tatum\Model\BchTransferRequest**](../Model/BchTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send BCH from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/> <p>Send BCH (Bitcoin Cash) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Bitcoin Cash server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field <b>attr</b> should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Bitcoin-Cash#operation/BchTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$bch_transfer_request = new \Tatum\Model\BchTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->bchTransfer($bch_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->bchTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->bchTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bnbAssetOffchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->bnbAssetOffchain(
    ?\Tatum\Model\CreateBnbAsset $create_bnb_asset
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_bnb_asset** | [**\Tatum\Model\CreateBnbAsset**](../Model/CreateBnbAsset.md)|  |

### Return type

void (empty response body)

### Description

Create a BNB-based asset

<h4>2 credits per API call.</h4><br/><p>         <p>Create a BNB-based asset in a virtual account. The asset must first be <a href="https://docs.bnbchain.org/docs/beaconchain/learn/BEP8" target="_blank">created and configured on BNB Beacon Chain blockhain</a>.</p> <p>This API call will create an internal virtual currency. You can create virtual accounts with off-chain support.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_bnb_asset = new \Tatum\Model\CreateBnbAsset();

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->bnbAssetOffchain($create_bnb_asset);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->bnbAssetOffchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->bnbAssetOffchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bnbTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->bnbTransfer(
    ?\Tatum\Model\BnbTransferRequest $bnb_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bnb_transfer_request** | [**\Tatum\Model\BnbTransferRequest**](../Model/BnbTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send BNB from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p> <p>Send BNB (BNB Beacon Chain) or BNB assets from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If BNB server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$bnb_transfer_request = new \Tatum\Model\BnbTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->bnbTransfer($bnb_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->bnbTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->bnbTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscDeployBep20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->bscDeployBep20(
    ?\Tatum\Model\EthDeployErc20Request $eth_deploy_erc20_request
): \Tatum\Model\EthDeployErc20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_deploy_erc20_request** | [**\Tatum\Model\EthDeployErc20Request**](../Model/EthDeployErc20Request.md)|  |

### Return type

[**\Tatum\Model\EthDeployErc20200Response**](../Model/EthDeployErc20200Response.md)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a BNB Smart Chain BEP-20 smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new BEP20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_deploy_erc20_request = new \Tatum\Model\EthDeployErc20Request();

try {
    /** @var \Tatum\Model\EthDeployErc20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->bscDeployBep20($eth_deploy_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->bscDeployBep20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->bscDeployBep20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `bscOrBepTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->bscOrBepTransfer(
    ?\Tatum\Model\BscOrBepTransferRequest $bsc_or_bep_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$bsc_or_bep_transfer_request** | [**\Tatum\Model\BscOrBepTransferRequest**](../Model/BscOrBepTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send BSC from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send BSC (BNB Smart Chain) or BEP-20 tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If BSC server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$bsc_or_bep_transfer_request = new \Tatum\Model\BscOrBepTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->bscOrBepTransfer($bsc_or_bep_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->bscOrBepTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->bscOrBepTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `btcTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->btcTransfer(
    ?\Tatum\Model\BtcTransferRequest $btc_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$btc_transfer_request** | [**\Tatum\Model\BtcTransferRequest**](../Model/BtcTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send BTC from a virtual account to the blockchain

<h4>2 credits per API call.</h4><br/> <p>Send BTC (Bitcoin) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Bitcoin server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field <b>attr</b> should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Bitcoin#operation/BtcTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> When some of the steps fails, <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/cancelInProgressWithdrawal">Cancel withdrawal</a> operation is used, which cancels withdrawal and creates refund transaction to the sender account.</li> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$btc_transfer_request = new \Tatum\Model\BtcTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->btcTransfer($btc_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->btcTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->btcTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoDeployErc20Ledger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->celoDeployErc20Ledger(
    ?\Tatum\Model\CeloDeployErc20LedgerRequest $celo_deploy_erc20_ledger_request
): \Tatum\Model\EthDeployErc20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$celo_deploy_erc20_ledger_request** | [**\Tatum\Model\CeloDeployErc20LedgerRequest**](../Model/CeloDeployErc20LedgerRequest.md)|  |

### Return type

[**\Tatum\Model\EthDeployErc20200Response**](../Model/EthDeployErc20200Response.md)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a Celo ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new Celo ERC-20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$celo_deploy_erc20_ledger_request = new \Tatum\Model\CeloDeployErc20LedgerRequest();

try {
    /** @var \Tatum\Model\EthDeployErc20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->celoDeployErc20Ledger($celo_deploy_erc20_ledger_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->celoDeployErc20Ledger(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->celoDeployErc20Ledger(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `celoOrErc20Transfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->celoOrErc20Transfer(
    ?\Tatum\Model\CeloOrErc20TransferRequest $celo_or_erc20_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$celo_or_erc20_transfer_request** | [**\Tatum\Model\CeloOrErc20TransferRequest**](../Model/CeloOrErc20TransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send CELO from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send CELO (Celo), ERC-20-equivalent Celo tokens, cUSD, or cEUR from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If Celo server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$celo_or_erc20_transfer_request = new \Tatum\Model\CeloOrErc20TransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->celoOrErc20Transfer($celo_or_erc20_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->celoOrErc20Transfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->celoOrErc20Transfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createBep20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->createBep20(
    ?\Tatum\Model\CreateErc20Request $create_erc20_request
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_erc20_request** | [**\Tatum\Model\CreateErc20Request**](../Model/CreateErc20Request.md)|  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new BNB Smart Chain BEP-20 token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new BEP20 token with given supply on BSC blockchain with support of Tatum's private ledger.<br/> <br/> <br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of BEP20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with BEP20 token name as account's currency.<br/> Newly created account is frozen until the specific BEP20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create BEP20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Register BEP20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/BscDeployErc20Blockchain">Deploy BEP20 smart contract</a> - create new BEP20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store BEP20 smart contract address</a> - link newly created BEP20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for BEP20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/EthDeployErc20">Deploy BSC BEP20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_erc20_request = new \Tatum\Model\CreateErc20Request();

try {
    /** @var \Tatum\Model\Erc20Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->createBep20($create_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->createBep20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->createBep20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createCeloErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->createCeloErc20(
    ?\Tatum\Model\CreateErc20Request $create_erc20_request
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_erc20_request** | [**\Tatum\Model\CreateErc20Request**](../Model/CreateErc20Request.md)|  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new Celo ERC-20-equivalent token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new ERC-20 token with given supply on Celo blockchain with support of Tatum's private ledger.<br/> <br/> <br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of ERC-20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with ERC-20 token name as account's currency.<br/> Newly created account is frozen until the specific ERC-20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create ERC-20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Register Celo ERC-20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/CeloDeployErc20">Deploy Celo ERC-20 smart contract</a> - create new ERC-20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store Celo ERC-20 smart contract address</a> - link newly created ERC-20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for ERC-20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/CeloDeployErc20Ledger">Deploy Celo ERC-20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_erc20_request = new \Tatum\Model\CreateErc20Request();

try {
    /** @var \Tatum\Model\Erc20Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->createCeloErc20($create_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->createCeloErc20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->createCeloErc20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->createErc20(
    ?\Tatum\Model\CreateErc20Request $create_erc20_request
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_erc20_request** | [**\Tatum\Model\CreateErc20Request**](../Model/CreateErc20Request.md)|  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new Ethereum ERC-20 token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new ERC20 token with given supply on Ethereum blockchain with support of Tatum's private ledger.<br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of ERC20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with ERC20 token name as account's currency.<br/> Newly created account is frozen until the specific ERC20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create ERC20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Create ERC20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/EthDeployErc20Blockchain">Deploy ERC20 smart contract</a> - create new ERC20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store ERC20 smart contract address</a> - link newly created ERC20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for ERC20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/EthDeployErc20">Deploy Ethereum ERC20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_erc20_request = new \Tatum\Model\CreateErc20Request();

try {
    /** @var \Tatum\Model\Erc20Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->createErc20($create_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->createErc20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->createErc20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createHrm20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->createHrm20(
    ?\Tatum\Model\CreateErc20Request $create_erc20_request
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_erc20_request** | [**\Tatum\Model\CreateErc20Request**](../Model/CreateErc20Request.md)|  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new Harmony HRM-20 token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new HRM20 token with given supply on ONE blockchain with support of Tatum's private ledger.<br/> <br/> <br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of HRM20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with HRM20 token name as account's currency.<br/> Newly created account is frozen until the specific HRM20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create HRM20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Register HRM20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/Erc20Deploy">Deploy HRM20 smart contract</a> - create new HRM20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store HRM20 smart contract address</a> - link newly created HRM20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for HRM20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/Erc20Deploy">Deploy ONE HRM20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_erc20_request = new \Tatum\Model\CreateErc20Request();

try {
    /** @var \Tatum\Model\Erc20Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->createHrm20($create_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->createHrm20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->createHrm20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createTrc()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->createTrc(
    ?\Tatum\Model\CreateTrcRequest $create_trc_request
): \Tatum\Model\Trc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_trc_request** | [**\Tatum\Model\CreateTrcRequest**](../Model/CreateTrcRequest.md)|  |

### Return type

[**\Tatum\Model\Trc20Response**](../Model/Trc20Response.md)

### Description

Register a new TRON TRC-10 or TRC-20 token in the virtual account

<h4>10 credits per API call.</h4><br/> <p>First step to create new TRC 10/20 token with given supply on the Tron blockchain with support of Tatum's private ledger.<br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of TRC 10/20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with TRC 10/20 token name as account's currency.<br/> Newly created account is frozen until the specific TRC 10/20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create TRC 10/20 smart contract with Tatum private ledger support: <ol> <li>Create TRC 10/20 token (this API) - creates a virtual currency within Tatum</li> <li><a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc10">Deploy TRC 10</a> or <a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc20">TRC 20 smart contract</a> - create new TRC 10/20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store TRC 10/20 smart contract address</a> - link newly created TRC 10/20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for TRC 10/20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/TronDeployTrc">Deploy TRC 10/20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_trc_request = new \Tatum\Model\CreateTrcRequest();

try {
    /** @var \Tatum\Model\Trc20Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->createTrc($create_trc_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->createTrc(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->createTrc(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createXdc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->createXdc20(
    ?\Tatum\Model\CreateErc20Request $create_erc20_request
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_erc20_request** | [**\Tatum\Model\CreateErc20Request**](../Model/CreateErc20Request.md)|  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new XinFin ERC-20-equivalent token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new ERC20 token with given supply on XDC blockchain with support of Tatum's private ledger.<br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of ERC20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with ERC20 token name as account's currency.<br/> Newly created account is frozen until the specific ERC20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create ERC20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Register ERC20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/Erc20Deploy">Deploy ERC20 smart contract</a> - create new ERC20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store ERC20 smart contract address</a> - link newly created ERC20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for ERC20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/Erc20Deploy">Deploy XDC ERC20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_erc20_request = new \Tatum\Model\CreateErc20Request();

try {
    /** @var \Tatum\Model\Erc20Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->createXdc20($create_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->createXdc20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->createXdc20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `dogeTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->dogeTransfer(
    ?\Tatum\Model\DogeTransferRequest $doge_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$doge_transfer_request** | [**\Tatum\Model\DogeTransferRequest**](../Model/DogeTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send DOGE from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send DOGE (Dogecoin) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Dogecoin server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field <b>attr</b> should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Dogecoin#operation/DogeTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$doge_transfer_request = new \Tatum\Model\DogeTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->dogeTransfer($doge_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->dogeTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->dogeTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `egldTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->egldTransfer(
    ?\Tatum\Model\EthTransferRequest $eth_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_transfer_request** | [**\Tatum\Model\EthTransferRequest**](../Model/EthTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send EGLD from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send EGLD from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_transfer_request = new \Tatum\Model\EthTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->egldTransfer($eth_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->egldTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->egldTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethDeployErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->ethDeployErc20(
    ?\Tatum\Model\EthDeployErc20Request $eth_deploy_erc20_request
): \Tatum\Model\EthDeployErc20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_deploy_erc20_request** | [**\Tatum\Model\EthDeployErc20Request**](../Model/EthDeployErc20Request.md)|  |

### Return type

[**\Tatum\Model\EthDeployErc20200Response**](../Model/EthDeployErc20200Response.md)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy an Ethereum ERC-20 smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_deploy_erc20_request = new \Tatum\Model\EthDeployErc20Request();

try {
    /** @var \Tatum\Model\EthDeployErc20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->ethDeployErc20($eth_deploy_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->ethDeployErc20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->ethDeployErc20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->ethTransfer(
    ?\Tatum\Model\EthTransferRequest $eth_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_transfer_request** | [**\Tatum\Model\EthTransferRequest**](../Model/EthTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send ETH from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send ETH (Ethereum) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Ethereum server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_transfer_request = new \Tatum\Model\EthTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->ethTransfer($eth_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->ethTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->ethTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ethTransferErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->ethTransferErc20(
    ?\Tatum\Model\EthTransferErc20Request $eth_transfer_erc20_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_transfer_erc20_request** | [**\Tatum\Model\EthTransferErc20Request**](../Model/EthTransferErc20Request.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send Ethereum ERC-20 tokens from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send Ethereum ERC-20 tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Ethereum server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_transfer_erc20_request = new \Tatum\Model\EthTransferErc20Request();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->ethTransferErc20($eth_transfer_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->ethTransferErc20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->ethTransferErc20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `flowTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->flowTransfer(
    ?\Tatum\Model\FlowTransferRequest $flow_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$flow_transfer_request** | [**\Tatum\Model\FlowTransferRequest**](../Model/FlowTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send FLOW from a virtual account to the blockchain

<h4>100 credits per API call. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.</h4><br/> <p>Send FLOW (Flow) or FUSD from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Flow server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Flow#operation/FlowTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$flow_transfer_request = new \Tatum\Model\FlowTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->flowTransfer($flow_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->flowTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->flowTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsDeployErc20Ledger()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->kcsDeployErc20Ledger(
    ?\Tatum\Model\KcsDeployErc20LedgerRequest $kcs_deploy_erc20_ledger_request
): \Tatum\Model\EthDeployErc20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$kcs_deploy_erc20_ledger_request** | [**\Tatum\Model\KcsDeployErc20LedgerRequest**](../Model/KcsDeployErc20LedgerRequest.md)|  |

### Return type

[**\Tatum\Model\EthDeployErc20200Response**](../Model/EthDeployErc20200Response.md)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new Kcs ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$kcs_deploy_erc20_ledger_request = new \Tatum\Model\KcsDeployErc20LedgerRequest();

try {
    /** @var \Tatum\Model\EthDeployErc20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->kcsDeployErc20Ledger($kcs_deploy_erc20_ledger_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->kcsDeployErc20Ledger(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->kcsDeployErc20Ledger(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `kcsTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->kcsTransfer(
    ?\Tatum\Model\KcsTransferRequest $kcs_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$kcs_transfer_request** | [**\Tatum\Model\KcsTransferRequest**](../Model/KcsTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send KCS from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send KCS (KuCoin Community Chain (KCC)) or ERC-20-equivalent KCC tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If KCS server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$kcs_transfer_request = new \Tatum\Model\KcsTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->kcsTransfer($kcs_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->kcsTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->kcsTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klayDeployErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->klayDeployErc20(
    ?\Tatum\Model\EthDeployErc20Request $eth_deploy_erc20_request
): \Tatum\Model\EthDeployErc20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_deploy_erc20_request** | [**\Tatum\Model\EthDeployErc20Request**](../Model/EthDeployErc20Request.md)|  |

### Return type

[**\Tatum\Model\EthDeployErc20200Response**](../Model/EthDeployErc20200Response.md)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a Klaytn ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_deploy_erc20_request = new \Tatum\Model\EthDeployErc20Request();

try {
    /** @var \Tatum\Model\EthDeployErc20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->klayDeployErc20($eth_deploy_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->klayDeployErc20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->klayDeployErc20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `klayTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->klayTransfer(
    ?\Tatum\Model\EthTransferRequest $eth_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_transfer_request** | [**\Tatum\Model\EthTransferRequest**](../Model/EthTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send KLAY from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send KLAY or ERC-20-equivalent tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If KLAY server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_transfer_request = new \Tatum\Model\EthTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->klayTransfer($eth_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->klayTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->klayTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ltcTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->ltcTransfer(
    ?\Tatum\Model\LtcTransferRequest $ltc_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$ltc_transfer_request** | [**\Tatum\Model\LtcTransferRequest**](../Model/LtcTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send LTC from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/> <p>Send LTC (Litecoin) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Litecoin server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field <b>attr</b> should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Litecoin#operation/LtcTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$ltc_transfer_request = new \Tatum\Model\LtcTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->ltcTransfer($ltc_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->ltcTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->ltcTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneDeployHrm20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->oneDeployHrm20(
    ?\Tatum\Model\EthDeployErc20Request $eth_deploy_erc20_request, 
    ?float $shard_id
): \Tatum\Model\EthDeployErc20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_deploy_erc20_request** | [**\Tatum\Model\EthDeployErc20Request**](../Model/EthDeployErc20Request.md)|  |
 **$shard_id** | **float**| Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\EthDeployErc20200Response**](../Model/EthDeployErc20200Response.md)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a Harmony HRM-20 smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new HRM20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_deploy_erc20_request = new \Tatum\Model\EthDeployErc20Request();

// Shard to operate on
$shard_id = 0;

try {
    /** @var \Tatum\Model\EthDeployErc20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->oneDeployHrm20($eth_deploy_erc20_request, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->oneDeployHrm20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->oneDeployHrm20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `oneTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->oneTransfer(
    ?\Tatum\Model\EthTransferRequest $eth_transfer_request, 
    ?float $shard_id
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_transfer_request** | [**\Tatum\Model\EthTransferRequest**](../Model/EthTransferRequest.md)|  |
 **$shard_id** | **float**| Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send ONE from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send ONE (Harmony) or HRM-20 tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If ONE server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_transfer_request = new \Tatum\Model\EthTransferRequest();

// Shard to operate on
$shard_id = 0;

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->oneTransfer($eth_transfer_request, $shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->oneTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->oneTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `polygonTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->polygonTransfer(
    ?\Tatum\Model\EthTransferRequest $eth_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_transfer_request** | [**\Tatum\Model\EthTransferRequest**](../Model/EthTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send MATIC from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send MATIC (Polygon) or ERC-20-equivalent Polygon tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Polygon server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_transfer_request = new \Tatum\Model\EthTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->polygonTransfer($eth_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->polygonTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->polygonTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `registerErc20Token()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->registerErc20Token(
    ?string $chain, 
    ?\Tatum\Model\CreateErc20Request $create_erc20_request
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$create_erc20_request** | [**\Tatum\Model\CreateErc20Request**](../Model/CreateErc20Request.md)|  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new ERC-20 or ERC-20-equivalent token in the virtual account

<h4>2 credits per API call.</h4><br/> <p>This is the first step to create a new ERC-20 or ERC-20 equivalent token with some supply in a virtual account.<br/> <br/> <br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with token name as account's currency.<br/> Newly created account is frozen until the specific smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create smart contract with Tatum private ledger support: <ol> <li>Register token</a> (this API) - creates a virtual currency within Tatum</li> <li><a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy smart contract</a> - create new smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store smart contract address</a> - link newly created smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for Tatum accounts</li> </ol> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Blockchain to work with
$chain = 'ETH';

$create_erc20_request = new \Tatum\Model\CreateErc20Request();

try {
    /** @var \Tatum\Model\Erc20Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->registerErc20Token($chain, $create_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->registerErc20Token(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->registerErc20Token(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `solTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->solTransfer(
    ?\Tatum\Model\SolTransferRequest $sol_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$sol_transfer_request** | [**\Tatum\Model\SolTransferRequest**](../Model/SolTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send SOL from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p> <p>Send SOL (Solana), USDC_SOL, or custom SPL tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If SOL server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$sol_transfer_request = new \Tatum\Model\SolTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->solTransfer($sol_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->solTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->solTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `storeCeloErc20Address()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->storeCeloErc20Address(
    ?string $address, 
    ?string $name
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| ERC-20 contract address |
 **$name** | **string**| ERC-20 symbol name. |

### Return type

void (empty response body)

### Description

Set the contract address of a Celo ERC-20-equivalent token

<p><b>This method is deprecated.<br/>Use <a href="#operation/storeTokenAddress">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// ERC-20 contract address
$address = '0x687422eEA2cB73B5d3e242bA5456b782919AFc85';

// ERC-20 symbol name.
$name = 'MY_TOKEN';

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->storeCeloErc20Address($address, $name);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->storeCeloErc20Address(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->storeCeloErc20Address(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `storeTokenAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->storeTokenAddress(
    ?string $address, 
    ?string $name
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| Contract address |
 **$name** | **string**| Symbol name. |

### Return type

void (empty response body)

### Description

Set the contract address of an ERC-20 or ERC-20-equivalent token

<h4>2 credits per API call.</h4><br/> <p>Set the contract address of an ERC-20 or ERC-20-equivalent token (for example, BEP-20, HRM-20, and so on) to be able to communicate with the smart contract. <br/> <br/> <p>After creating and deploying an ERC-20 or ERC-20-equivalent token to the blockchain, the smart contract address is generated and must be set within Tatum. If the address is not set, the Tatum platform will not be able to detect incoming deposits of the tokens and transfer the tokens from virtual accounts to blockchain addresses.</p> <p><b>NOTE:</b> For Algorand, the contract address should be the token asset ID (AssetID), for example, <code>55351976</code>.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Contract address
$address = '0x687422eEA2cB73B5d3e242bA5456b782919AFc85';

// Symbol name.
$name = 'MY_TOKEN';

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->storeTokenAddress($address, $name);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->storeTokenAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->storeTokenAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `storeTrcAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->storeTrcAddress(
    ?string $address, 
    ?string $name
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**| TRC-10 Token ID or TRC-20 contract address |
 **$name** | **string**| TRC 10/20 symbol name. |

### Return type

void (empty response body)

### Description

Set the contract address of a TRC-10 or TRC-20 token

<p><b>This method is deprecated.<br/>Use <a href="#operation/storeTokenAddress">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// TRC-10 Token ID or TRC-20 contract address
$address = 'TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW';

// TRC 10/20 symbol name.
$name = 'MY_TOKEN';

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->storeTrcAddress($address, $name);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->storeTrcAddress(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->storeTrcAddress(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronDeployTrc()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->tronDeployTrc(
    ?\Tatum\Model\TronDeployTrcRequest $tron_deploy_trc_request
): \Tatum\Model\EthDeployErc20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_deploy_trc_request** | [**\Tatum\Model\TronDeployTrcRequest**](../Model/TronDeployTrcRequest.md)|  |

### Return type

[**\Tatum\Model\EthDeployErc20200Response**](../Model/EthDeployErc20200Response.md)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

<h4>10 credits per API call.</h4><br/> <p>Deploy a TRON TRC-10 or TRC-20 smart contract. This is a helper method, which is combination of <a href="#operation/createTrc">Register new TRC-10/20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc20">Deploy blockchain TRC20</a> or <a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc10">Deploy blockchain TRC10</a>.<br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$tron_deploy_trc_request = new \Tatum\Model\TronDeployTrcRequest();

try {
    /** @var \Tatum\Model\EthDeployErc20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->tronDeployTrc($tron_deploy_trc_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->tronDeployTrc(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->tronDeployTrc(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `tronTransferOffchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->tronTransferOffchain(
    ?\Tatum\Model\TronTransferOffchainRequest $tron_transfer_offchain_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$tron_transfer_offchain_request** | [**\Tatum\Model\TronTransferOffchainRequest**](../Model/TronTransferOffchainRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send TRON from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p>Send TRON or TRX assets from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Tron server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$tron_transfer_offchain_request = new \Tatum\Model\TronTransferOffchainRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->tronTransferOffchain($tron_transfer_offchain_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->tronTransferOffchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->tronTransferOffchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcDeployErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xdcDeployErc20(
    ?\Tatum\Model\EthDeployErc20Request $eth_deploy_erc20_request
): \Tatum\Model\EthDeployErc20200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_deploy_erc20_request** | [**\Tatum\Model\EthDeployErc20Request**](../Model/EthDeployErc20Request.md)|  |

### Return type

[**\Tatum\Model\EthDeployErc20200Response**](../Model/EthDeployErc20200Response.md)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a XinFin ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_deploy_erc20_request = new \Tatum\Model\EthDeployErc20Request();

try {
    /** @var \Tatum\Model\EthDeployErc20200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->xdcDeployErc20($eth_deploy_erc20_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->xdcDeployErc20(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->xdcDeployErc20(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xdcTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xdcTransfer(
    ?\Tatum\Model\EthTransferRequest $eth_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$eth_transfer_request** | [**\Tatum\Model\EthTransferRequest**](../Model/EthTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send XDC from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send XDC (XinFin) or ERC-20-equivalent XinFin tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If XDC server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$eth_transfer_request = new \Tatum\Model\EthTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->xdcTransfer($eth_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->xdcTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->xdcTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmAssetOffchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xlmAssetOffchain(
    ?\Tatum\Model\CreateXlmAsset $create_xlm_asset
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_xlm_asset** | [**\Tatum\Model\CreateXlmAsset**](../Model/CreateXlmAsset.md)|  |

### Return type

void (empty response body)

### Description

Create an XLM-based asset

<h4>2 credits per API call.</h4><br/> <p>Create an XLM-based asset in a virtual account. The asset must be created and configured on the Stellar blockchain before <a href="https://apidoc.tatum.io/tag/Stellar#operation/XlmTrustLineBlockchain">creating a trust line</a>.</p> <p>This API call will create an internal virtual currency. You can create virtual accounts with off-chain support.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_xlm_asset = new \Tatum\Model\CreateXlmAsset();

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->xlmAssetOffchain($create_xlm_asset);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->xlmAssetOffchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->xlmAssetOffchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xlmTransfer(
    ?\Tatum\Model\XlmTransferRequest $xlm_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xlm_transfer_request** | [**\Tatum\Model\XlmTransferRequest**](../Model/XlmTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send XLM from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p> <p>Send XLM (Stellar) or XLM-based assets from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If XLM server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$xlm_transfer_request = new \Tatum\Model\XlmTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->xlmTransfer($xlm_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->xlmTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->xlmTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpAssetOffchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xrpAssetOffchain(
    ?\Tatum\Model\CreateXrpAsset $create_xrp_asset
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_xrp_asset** | [**\Tatum\Model\CreateXrpAsset**](../Model/CreateXrpAsset.md)|  |

### Return type

void (empty response body)

### Description

Create XRP based Asset

<h4>2 credits per API call.</h4><br/><p> <p>Create an XRP-based asset in a virtual account. The asset must be created and configured on the Ripple blockchain before <a href="https://apidoc.tatum.io/tag/XRP#operation/XrpTrustLineBlockchain">creating a trust line</a>.</p> <p>This API call will create an internal virtual currency. You can create virtual accounts with off-chain support.</p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_xrp_asset = new \Tatum\Model\CreateXrpAsset();

try {
        $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->xrpAssetOffchain($create_xrp_asset);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->xrpAssetOffchain(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->xrpAssetOffchain(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpTransfer()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xrpTransfer(
    ?\Tatum\Model\XrpTransferRequest $xrp_transfer_request
): \Tatum\Model\BtcTransfer200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$xrp_transfer_request** | [**\Tatum\Model\XrpTransferRequest**](../Model/XrpTransferRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransfer200Response**](../Model/BtcTransfer200Response.md)

### Description

Send XRP from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p> <p>Send XRP (Ripple) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If XRP server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

```php
<?php

require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$xrp_transfer_request = new \Tatum\Model\XrpTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->xrpTransfer($xrp_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling blockchainOperations()->xrpTransfer(): ",
        var_export($apiExc->getResponseBody(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling blockchainOperations()->xrpTransfer(): " . $exc->getMessage() . PHP_EOL;
}
```

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
