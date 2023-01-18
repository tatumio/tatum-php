---
title: Blockchain operations
parent: API
layout: page
---

# Api/BlockchainOperationsApi

[Blockchain operations API Reference](https://apidoc.tatum.io/tag/Blockchain-operations/)

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()
```

## Methods

Method | Description
------------- | -------------
[**bnbAssetOffchain()**](#bnbassetoffchain) | Create a BNB-based asset
[**deployAlgoErc20OffchainKMSAddress()**](#deployalgoerc20offchainkmsaddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
[**deployAlgoErc20OffchainMnemonicAddress()**](#deployalgoerc20offchainmnemonicaddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
[**deployAlgoErc20OffchainPKAddress()**](#deployalgoerc20offchainpkaddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
[**deployCeloErc20OffchainKMSAddress()**](#deployceloerc20offchainkmsaddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**deployCeloErc20OffchainKMSXpub()**](#deployceloerc20offchainkmsxpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**deployCeloErc20OffchainMnemXpub()**](#deployceloerc20offchainmnemxpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**deployCeloErc20OffchainMnemonicAddress()**](#deployceloerc20offchainmnemonicaddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**deployCeloErc20OffchainPKAddress()**](#deployceloerc20offchainpkaddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**deployCeloErc20OffchainPKXpub()**](#deployceloerc20offchainpkxpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**deployErc20OffchainKMSAddress()**](#deployerc20offchainkmsaddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**deployErc20OffchainKMSXpub()**](#deployerc20offchainkmsxpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**deployErc20OffchainMnemXpub()**](#deployerc20offchainmnemxpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**deployErc20OffchainMnemonicAddress()**](#deployerc20offchainmnemonicaddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**deployErc20OffchainPKAddress()**](#deployerc20offchainpkaddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**deployErc20OffchainPKXpub()**](#deployerc20offchainpkxpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**deployTrcOffchainKMSAddress()**](#deploytrcoffchainkmsaddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**deployTrcOffchainKMSXpub()**](#deploytrcoffchainkmsxpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**deployTrcOffchainMnemXpub()**](#deploytrcoffchainmnemxpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**deployTrcOffchainMnemonicAddress()**](#deploytrcoffchainmnemonicaddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**deployTrcOffchainPKAddress()**](#deploytrcoffchainpkaddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**deployTrcOffchainPKXpub()**](#deploytrcoffchainpkxpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**erc20()**](#erc20) | Register a new Ethereum ERC-20 token in the virtual account
[**erc20Address()**](#erc20address) | Register a new Ethereum ERC-20 token in the virtual account
[**offBscDeployErc20OffchainKMSAddress()**](#offbscdeployerc20offchainkmsaddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offBscDeployErc20OffchainKMSXpub()**](#offbscdeployerc20offchainkmsxpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offBscDeployErc20OffchainMnemXpub()**](#offbscdeployerc20offchainmnemxpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offBscDeployErc20OffchainMnemonicAddress()**](#offbscdeployerc20offchainmnemonicaddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offBscDeployErc20OffchainPKAddress()**](#offbscdeployerc20offchainpkaddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offBscDeployErc20OffchainPKXpub()**](#offbscdeployerc20offchainpkxpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offBscErc20()**](#offbscerc20) | Register a new BNB Smart Chain BEP-20 token in the virtual account
[**offBscErc20Address()**](#offbscerc20address) | Register a new BNB Smart Chain BEP-20 token in the virtual account
[**offCelErc20()**](#offcelerc20) | Register a new Celo ERC-20-equivalent token in the virtual account
[**offCelErc20Address()**](#offcelerc20address) | Register a new Celo ERC-20-equivalent token in the virtual account
[**offEglTransferEth()**](#offegltransfereth) | Send EGLD from a virtual account to the blockchain
[**offEglTransferEthKMS()**](#offegltransferethkms) | Send EGLD from a virtual account to the blockchain
[**offEglTransferEthMnemonic()**](#offegltransferethmnemonic) | Send EGLD from a virtual account to the blockchain
[**offKcsDeployErc20OffchainKMSAddress()**](#offkcsdeployerc20offchainkmsaddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKcsDeployErc20OffchainKMSXpub()**](#offkcsdeployerc20offchainkmsxpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKcsDeployErc20OffchainMnemXpub()**](#offkcsdeployerc20offchainmnemxpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKcsDeployErc20OffchainMnemonicAddress()**](#offkcsdeployerc20offchainmnemonicaddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKcsDeployErc20OffchainPKAddress()**](#offkcsdeployerc20offchainpkaddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKcsDeployErc20OffchainPKXpub()**](#offkcsdeployerc20offchainpkxpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKlaDeployErc20OffchainKMSAddress()**](#offkladeployerc20offchainkmsaddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKlaDeployErc20OffchainKMSXpub()**](#offkladeployerc20offchainkmsxpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKlaDeployErc20OffchainMnemXpub()**](#offkladeployerc20offchainmnemxpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKlaDeployErc20OffchainMnemonicAddress()**](#offkladeployerc20offchainmnemonicaddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKlaDeployErc20OffchainPKAddress()**](#offkladeployerc20offchainpkaddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKlaDeployErc20OffchainPKXpub()**](#offkladeployerc20offchainpkxpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offKlaTransferEth()**](#offklatransfereth) | Send KLAY from a virtual account to the blockchain
[**offKlaTransferEthKMS()**](#offklatransferethkms) | Send KLAY from a virtual account to the blockchain
[**offKlaTransferEthMnemonic()**](#offklatransferethmnemonic) | Send KLAY from a virtual account to the blockchain
[**offOneDeployErc20OffchainKMSAddress()**](#offonedeployerc20offchainkmsaddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offOneDeployErc20OffchainKMSXpub()**](#offonedeployerc20offchainkmsxpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offOneDeployErc20OffchainMnemXpub()**](#offonedeployerc20offchainmnemxpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offOneDeployErc20OffchainMnemonicAddress()**](#offonedeployerc20offchainmnemonicaddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offOneDeployErc20OffchainPKAddress()**](#offonedeployerc20offchainpkaddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offOneDeployErc20OffchainPKXpub()**](#offonedeployerc20offchainpkxpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offOneErc20()**](#offoneerc20) | Register a new Harmony HRM-20 token in the virtual account
[**offOneErc20Address()**](#offoneerc20address) | Register a new Harmony HRM-20 token in the virtual account
[**offOneTransferEth()**](#offonetransfereth) | Send ONE from a virtual account to the blockchain
[**offOneTransferEthKMS()**](#offonetransferethkms) | Send ONE from a virtual account to the blockchain
[**offOneTransferEthMnemonic()**](#offonetransferethmnemonic) | Send ONE from a virtual account to the blockchain
[**offPolTransferEth()**](#offpoltransfereth) | Send MATIC from a virtual account to the blockchain
[**offPolTransferEthKMS()**](#offpoltransferethkms) | Send MATIC from a virtual account to the blockchain
[**offPolTransferEthMnemonic()**](#offpoltransferethmnemonic) | Send MATIC from a virtual account to the blockchain
[**offTokErc20()**](#offtokerc20) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
[**offTokErc20Address()**](#offtokerc20address) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
[**offXdcDeployErc20OffchainKMSAddress()**](#offxdcdeployerc20offchainkmsaddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offXdcDeployErc20OffchainKMSXpub()**](#offxdcdeployerc20offchainkmsxpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offXdcDeployErc20OffchainMnemXpub()**](#offxdcdeployerc20offchainmnemxpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offXdcDeployErc20OffchainMnemonicAddress()**](#offxdcdeployerc20offchainmnemonicaddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offXdcDeployErc20OffchainPKAddress()**](#offxdcdeployerc20offchainpkaddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offXdcDeployErc20OffchainPKXpub()**](#offxdcdeployerc20offchainpkxpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offXdcErc20()**](#offxdcerc20) | Register a new XinFin ERC-20-equivalent token in the virtual account
[**offXdcErc20Address()**](#offxdcerc20address) | Register a new XinFin ERC-20-equivalent token in the virtual account
[**offXdcTransferEth()**](#offxdctransfereth) | Send XDC from a virtual account to the blockchain
[**offXdcTransferEthKMS()**](#offxdctransferethkms) | Send XDC from a virtual account to the blockchain
[**offXdcTransferEthMnemonic()**](#offxdctransferethmnemonic) | Send XDC from a virtual account to the blockchain
[**storeCeloErc20Address()**](#storeceloerc20address) | Set the contract address of a Celo ERC-20-equivalent token
[**storeTokenAddress()**](#storetokenaddress) | Set the contract address of an ERC-20, ERC-20-equivalent, or TRC-10 token
[**storeTrcAddress()**](#storetrcaddress) | Set the contract address of a TRC-10 or TRC-20 token
[**transferAdaKMS()**](#transferadakms) | Send ADA from a virtual account to the blockchain
[**transferAdaKeyPair()**](#transferadakeypair) | Send ADA from a virtual account to the blockchain
[**transferAdaMnemonic()**](#transferadamnemonic) | Send ADA from a virtual account to the blockchain
[**transferAlgo()**](#transferalgo) | Send ALGO from a virtual account to the blockchain
[**transferAlgoErc20()**](#transferalgoerc20) | Send ALGO from a virtual account to the blockchain
[**transferAlgoKMS()**](#transferalgokms) | Send ALGO from a virtual account to the blockchain
[**transferBchKMS()**](#transferbchkms) | Send BCH from a virtual account to the blockchain
[**transferBchKeyPair()**](#transferbchkeypair) | Send BCH from a virtual account to the blockchain
[**transferBchMnemonic()**](#transferbchmnemonic) | Send BCH from a virtual account to the blockchain
[**transferBnb()**](#transferbnb) | Send BNB from a virtual account to the blockchain
[**transferBnbKMS()**](#transferbnbkms) | Send BNB from a virtual account to the blockchain
[**transferBsc()**](#transferbsc) | Send BSC from a virtual account to the blockchain
[**transferBscKMS()**](#transferbsckms) | Send BSC from a virtual account to the blockchain
[**transferBscMnemonic()**](#transferbscmnemonic) | Send BSC from a virtual account to the blockchain
[**transferBtcKMS()**](#transferbtckms) | Send BTC from a virtual account to the blockchain
[**transferBtcKeyPair()**](#transferbtckeypair) | Send BTC from a virtual account to the blockchain
[**transferBtcMnemonic()**](#transferbtcmnemonic) | Send BTC from a virtual account to the blockchain
[**transferCelo()**](#transfercelo) | Send CELO from a virtual account to the blockchain
[**transferCeloKMS()**](#transfercelokms) | Send CELO from a virtual account to the blockchain
[**transferCeloMnemonic()**](#transfercelomnemonic) | Send CELO from a virtual account to the blockchain
[**transferDogeKMS()**](#transferdogekms) | Send DOGE from a virtual account to the blockchain
[**transferDogeKeyPair()**](#transferdogekeypair) | Send DOGE from a virtual account to the blockchain
[**transferDogeMnemonic()**](#transferdogemnemonic) | Send DOGE from a virtual account to the blockchain
[**transferErc20()**](#transfererc20) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
[**transferErc20KMS()**](#transfererc20kms) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
[**transferErc20Mnemonic()**](#transfererc20mnemonic) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
[**transferEth()**](#transfereth) | Send ETH from a virtual account to the blockchain
[**transferEthKMS()**](#transferethkms) | Send ETH from a virtual account to the blockchain
[**transferEthMnemonic()**](#transferethmnemonic) | Send ETH from a virtual account to the blockchain
[**transferFlowKMS()**](#transferflowkms) | Send FLOW from a virtual account to the blockchain
[**transferFlowMnemonic()**](#transferflowmnemonic) | Send FLOW from a virtual account to the blockchain
[**transferFlowPK()**](#transferflowpk) | Send FLOW from a virtual account to the blockchain
[**transferKCS()**](#transferkcs) | Send KCS from a virtual account to the blockchain
[**transferKCSKMS()**](#transferkcskms) | Send KCS from a virtual account to the blockchain
[**transferKCSMnemonic()**](#transferkcsmnemonic) | Send KCS from a virtual account to the blockchain
[**transferLtcKMS()**](#transferltckms) | Send LTC from a virtual account to the blockchain
[**transferLtcKeyPair()**](#transferltckeypair) | Send LTC from a virtual account to the blockchain
[**transferLtcMnemonic()**](#transferltcmnemonic) | Send LTC from a virtual account to the blockchain
[**transferSol()**](#transfersol) | Send SOL from a virtual account to the blockchain
[**transferSolKMS()**](#transfersolkms) | Send SOL from a virtual account to the blockchain
[**transferTron()**](#transfertron) | Send TRON from a virtual account to the blockchain
[**transferTronKMS()**](#transfertronkms) | Send TRON from a virtual account to the blockchain
[**transferTronMnemonic()**](#transfertronmnemonic) | Send TRON from a virtual account to the blockchain
[**transferXlm()**](#transferxlm) | Send XLM from a virtual account to the blockchain
[**transferXlmKMS()**](#transferxlmkms) | Send XLM from a virtual account to the blockchain
[**transferXrp()**](#transferxrp) | Send XRP from a virtual account to the blockchain
[**transferXrpKMS()**](#transferxrpkms) | Send XRP from a virtual account to the blockchain
[**trcAddress()**](#trcaddress) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
[**trcXpub()**](#trcxpub) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
[**xlmAssetOffchain()**](#xlmassetoffchain) | Create an XLM-based asset
[**xrpAssetOffchain()**](#xrpassetoffchain) | Create XRP based Asset


## `bnbAssetOffchain()`

> **POST** `/v3/offchain/bnb/asset`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->bnbAssetOffchain(
    \Tatum\Model\CreateBnbAsset $create_bnb_asset
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_bnb_asset** | [**\Tatum\Model\CreateBnbAsset**](../../Model/CreateBnbAsset) |  |

### Return type

void (empty response body)

### Description

Create a BNB-based asset

<h4>2 credits per API call.</h4>

 Create a BNB-based asset in a virtual account. The asset must first be <a href="https://docs.bnbchain.org/docs/beaconchain/learn/BEP8" target="_blank">created and configured on BNB Beacon Chain blockhain</a>.

 This API call will create an internal virtual currency. You can create virtual accounts with off-chain support.

### Example

[✨ View "bnbAssetOffchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/bnbAssetOffchain.php)

[Back to top](#top)



## `deployAlgoErc20OffchainKMSAddress()`

> **POST** `/v3/offchain/algo/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployAlgoErc20OffchainKMSAddress(
    \Tatum\Model\DeployAlgoErc20OffchainKMSAddress $deploy_algo_erc20_offchain_kms_address
): \Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_algo_erc20_offchain_kms_address** | [**\Tatum\Model\DeployAlgoErc20OffchainKMSAddress**](../../Model/DeployAlgoErc20OffchainKMSAddress) |  |

### Return type

[**\Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress200Response**](../../Model/DeployAlgoErc20OffchainMnemonicAddress200Response)

### Description

Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployAlgoErc20OffchainKMSAddress operation

### Example

[✨ View "deployAlgoErc20OffchainKMSAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployAlgoErc20OffchainKMSAddress.php)

[Back to top](#top)



## `deployAlgoErc20OffchainMnemonicAddress()`

> **POST** `/v3/offchain/algo/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployAlgoErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress $deploy_algo_erc20_offchain_mnemonic_address
): \Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_algo_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress**](../../Model/DeployAlgoErc20OffchainMnemonicAddress) |  |

### Return type

[**\Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress200Response**](../../Model/DeployAlgoErc20OffchainMnemonicAddress200Response)

### Description

Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

**4 credits per API call**

 Deploy an Algorand ERC-20-equivalent smart contract. This is a helper method, which is combination of Register new Algorand ERC20 token in the ledger and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.

 After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.

 **Signing a transaction**

 When deploying an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "deployAlgoErc20OffchainMnemonicAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployAlgoErc20OffchainMnemonicAddress.php)

[Back to top](#top)



## `deployAlgoErc20OffchainPKAddress()`

> **POST** `/v3/offchain/algo/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployAlgoErc20OffchainPKAddress(
    \Tatum\Model\DeployAlgoErc20OffchainPKAddress $deploy_algo_erc20_offchain_pk_address
): \Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_algo_erc20_offchain_pk_address** | [**\Tatum\Model\DeployAlgoErc20OffchainPKAddress**](../../Model/DeployAlgoErc20OffchainPKAddress) |  |

### Return type

[**\Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress200Response**](../../Model/DeployAlgoErc20OffchainMnemonicAddress200Response)

### Description

Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployAlgoErc20OffchainPKAddress operation

### Example

[✨ View "deployAlgoErc20OffchainPKAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployAlgoErc20OffchainPKAddress.php)

[Back to top](#top)



## `deployCeloErc20OffchainKMSAddress()`

> **POST** `/v3/offchain/celo/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployCeloErc20OffchainKMSAddress(
    \Tatum\Model\DeployCeloErc20OffchainKMSAddress $deploy_celo_erc20_offchain_kms_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_kms_address** | [**\Tatum\Model\DeployCeloErc20OffchainKMSAddress**](../../Model/DeployCeloErc20OffchainKMSAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainKMSAddress operation

### Example

[✨ View "deployCeloErc20OffchainKMSAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployCeloErc20OffchainKMSAddress.php)

[Back to top](#top)



## `deployCeloErc20OffchainKMSXpub()`

> **POST** `/v3/offchain/celo/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployCeloErc20OffchainKMSXpub(
    \Tatum\Model\DeployCeloErc20OffchainKMSXpub $deploy_celo_erc20_offchain_kms_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployCeloErc20OffchainKMSXpub**](../../Model/DeployCeloErc20OffchainKMSXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainKMSXpub operation

### Example

[✨ View "deployCeloErc20OffchainKMSXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployCeloErc20OffchainKMSXpub.php)

[Back to top](#top)



## `deployCeloErc20OffchainMnemXpub()`

> **POST** `/v3/offchain/celo/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployCeloErc20OffchainMnemXpub(
    \Tatum\Model\DeployCeloErc20OffchainMnemXpub $deploy_celo_erc20_offchain_mnem_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployCeloErc20OffchainMnemXpub**](../../Model/DeployCeloErc20OffchainMnemXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainMnemXpub operation

### Example

[✨ View "deployCeloErc20OffchainMnemXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployCeloErc20OffchainMnemXpub.php)

[Back to top](#top)



## `deployCeloErc20OffchainMnemonicAddress()`

> **POST** `/v3/offchain/celo/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployCeloErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployCeloErc20OffchainMnemonicAddress $deploy_celo_erc20_offchain_mnemonic_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployCeloErc20OffchainMnemonicAddress**](../../Model/DeployCeloErc20OffchainMnemonicAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

**4 credits per API call**

 Deploy a Celo ERC-20-equivalent smart contract. This is a helper method, which is combination of Register new Celo ERC-20 token in the ledger and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.

 After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.

 **Signing a transaction**

 When deploying a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "deployCeloErc20OffchainMnemonicAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployCeloErc20OffchainMnemonicAddress.php)

[Back to top](#top)



## `deployCeloErc20OffchainPKAddress()`

> **POST** `/v3/offchain/celo/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployCeloErc20OffchainPKAddress(
    \Tatum\Model\DeployCeloErc20OffchainPKAddress $deploy_celo_erc20_offchain_pk_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_pk_address** | [**\Tatum\Model\DeployCeloErc20OffchainPKAddress**](../../Model/DeployCeloErc20OffchainPKAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainPKAddress operation

### Example

[✨ View "deployCeloErc20OffchainPKAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployCeloErc20OffchainPKAddress.php)

[Back to top](#top)



## `deployCeloErc20OffchainPKXpub()`

> **POST** `/v3/offchain/celo/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployCeloErc20OffchainPKXpub(
    \Tatum\Model\DeployCeloErc20OffchainPKXpub $deploy_celo_erc20_offchain_pk_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployCeloErc20OffchainPKXpub**](../../Model/DeployCeloErc20OffchainPKXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainPKXpub operation

### Example

[✨ View "deployCeloErc20OffchainPKXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployCeloErc20OffchainPKXpub.php)

[Back to top](#top)



## `deployErc20OffchainKMSAddress()`

> **POST** `/v3/offchain/ethereum/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../../Model/DeployErc20OffchainKMSAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "deployErc20OffchainKMSAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployErc20OffchainKMSAddress.php)

[Back to top](#top)



## `deployErc20OffchainKMSXpub()`

> **POST** `/v3/offchain/ethereum/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../../Model/DeployErc20OffchainKMSXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "deployErc20OffchainKMSXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployErc20OffchainKMSXpub.php)

[Back to top](#top)



## `deployErc20OffchainMnemXpub()`

> **POST** `/v3/offchain/ethereum/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../../Model/DeployErc20OffchainMnemXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "deployErc20OffchainMnemXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployErc20OffchainMnemXpub.php)

[Back to top](#top)



## `deployErc20OffchainMnemonicAddress()`

> **POST** `/v3/offchain/ethereum/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../../Model/DeployErc20OffchainMnemonicAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

**4 credits per API call**

 Deploy an Ethereum ERC-20 smart contract. This is a helper method, which is combination of Register new ERC20 token in the ledger and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.

 After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.

 **Signing a transaction**

 When deploying an Ethereum ERC-20 smart contract to the blockchain and a virtual account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "deployErc20OffchainMnemonicAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployErc20OffchainMnemonicAddress.php)

[Back to top](#top)



## `deployErc20OffchainPKAddress()`

> **POST** `/v3/offchain/ethereum/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../../Model/DeployErc20OffchainPKAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "deployErc20OffchainPKAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployErc20OffchainPKAddress.php)

[Back to top](#top)



## `deployErc20OffchainPKXpub()`

> **POST** `/v3/offchain/ethereum/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../../Model/DeployErc20OffchainPKXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "deployErc20OffchainPKXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployErc20OffchainPKXpub.php)

[Back to top](#top)



## `deployTrcOffchainKMSAddress()`

> **POST** `/v3/offchain/tron/trc/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployTrcOffchainKMSAddress(
    \Tatum\Model\DeployTrcOffchainKMSAddress $deploy_trc_offchain_kms_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_kms_address** | [**\Tatum\Model\DeployTrcOffchainKMSAddress**](../../Model/DeployTrcOffchainKMSAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainKMSAddress operation

### Example

[✨ View "deployTrcOffchainKMSAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployTrcOffchainKMSAddress.php)

[Back to top](#top)



## `deployTrcOffchainKMSXpub()`

> **POST** `/v3/offchain/tron/trc/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployTrcOffchainKMSXpub(
    \Tatum\Model\DeployTrcOffchainKMSXpub $deploy_trc_offchain_kms_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_kms_xpub** | [**\Tatum\Model\DeployTrcOffchainKMSXpub**](../../Model/DeployTrcOffchainKMSXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainKMSXpub operation

### Example

[✨ View "deployTrcOffchainKMSXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployTrcOffchainKMSXpub.php)

[Back to top](#top)



## `deployTrcOffchainMnemXpub()`

> **POST** `/v3/offchain/tron/trc/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployTrcOffchainMnemXpub(
    \Tatum\Model\DeployTrcOffchainMnemXpub $deploy_trc_offchain_mnem_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_mnem_xpub** | [**\Tatum\Model\DeployTrcOffchainMnemXpub**](../../Model/DeployTrcOffchainMnemXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainMnemXpub operation

### Example

[✨ View "deployTrcOffchainMnemXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployTrcOffchainMnemXpub.php)

[Back to top](#top)



## `deployTrcOffchainMnemonicAddress()`

> **POST** `/v3/offchain/tron/trc/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployTrcOffchainMnemonicAddress(
    \Tatum\Model\DeployTrcOffchainMnemonicAddress $deploy_trc_offchain_mnemonic_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_mnemonic_address** | [**\Tatum\Model\DeployTrcOffchainMnemonicAddress**](../../Model/DeployTrcOffchainMnemonicAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

**10 credits per API call**

 Deploy a TRON TRC-10 or TRC-20 smart contract. This is a helper method, which is combination of Register new TRC-10/20 token in the ledger and <a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc20">Deploy blockchain TRC20</a> or <a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc10">Deploy blockchain TRC10</a>.

 After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.

 **Signing a transaction**

 When deploying a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "deployTrcOffchainMnemonicAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployTrcOffchainMnemonicAddress.php)

[Back to top](#top)



## `deployTrcOffchainPKAddress()`

> **POST** `/v3/offchain/tron/trc/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployTrcOffchainPKAddress(
    \Tatum\Model\DeployTrcOffchainPKAddress $deploy_trc_offchain_pk_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_pk_address** | [**\Tatum\Model\DeployTrcOffchainPKAddress**](../../Model/DeployTrcOffchainPKAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainPKAddress operation

### Example

[✨ View "deployTrcOffchainPKAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployTrcOffchainPKAddress.php)

[Back to top](#top)



## `deployTrcOffchainPKXpub()`

> **POST** `/v3/offchain/tron/trc/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->deployTrcOffchainPKXpub(
    \Tatum\Model\DeployTrcOffchainPKXpub $deploy_trc_offchain_pk_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_pk_xpub** | [**\Tatum\Model\DeployTrcOffchainPKXpub**](../../Model/DeployTrcOffchainPKXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainPKXpub operation

### Example

[✨ View "deployTrcOffchainPKXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/deployTrcOffchainPKXpub.php)

[Back to top](#top)



## `erc20()`

> **POST** `/v3/offchain/ethereum/erc20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->erc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../../Model/Erc20) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new Ethereum ERC-20 token in the virtual account

**This method is deprecated.

Use this method instead.**

 <h4>2 credits per API call.</h4>

 First step to create new ERC20 token with given supply on Ethereum blockchain with support of Tatum's private ledger.

 This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.

 The whole supply of ERC20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with ERC20 token name as account's currency.

 Newly created account is frozen until the specific ERC20 smart contract address is linked with the Tatum virtual currency, representing the token.

 Order of the steps to create ERC20 smart contract with Tatum private ledger support: 

<ol> <li>Create ERC20 token - creates a virtual currency within Tatum</li> <li>Deploy ERC20 smart contract - create new ERC20 smart contract on the blockchain</li> <li>Store ERC20 smart contract address - link newly created ERC20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for ERC20 Tatum accounts</li> </ol>

 There is a helper method Deploy Ethereum ERC20 Smart Contract to Blockchain and Ledger, which wraps first 2 steps into 1 method.

 Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub.

### Example

[✨ View "erc20.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/erc20.php)

[Back to top](#top)



## `erc20Address()`

> **POST** `/v3/offchain/ethereum/erc20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->erc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../../Model/Erc20Address) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new Ethereum ERC-20 token in the virtual account

Erc20Address operation

### Example

[✨ View "erc20Address.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/erc20Address.php)

[Back to top](#top)



## `offBscDeployErc20OffchainKMSAddress()`

> **POST** `/v3/offchain/bsc/bep20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offBscDeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../../Model/DeployErc20OffchainKMSAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offBscDeployErc20OffchainKMSAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offBscDeployErc20OffchainKMSAddress.php)

[Back to top](#top)



## `offBscDeployErc20OffchainKMSXpub()`

> **POST** `/v3/offchain/bsc/bep20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offBscDeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../../Model/DeployErc20OffchainKMSXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offBscDeployErc20OffchainKMSXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offBscDeployErc20OffchainKMSXpub.php)

[Back to top](#top)



## `offBscDeployErc20OffchainMnemXpub()`

> **POST** `/v3/offchain/bsc/bep20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offBscDeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../../Model/DeployErc20OffchainMnemXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offBscDeployErc20OffchainMnemXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offBscDeployErc20OffchainMnemXpub.php)

[Back to top](#top)



## `offBscDeployErc20OffchainMnemonicAddress()`

> **POST** `/v3/offchain/bsc/bep20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offBscDeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../../Model/DeployErc20OffchainMnemonicAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

**4 credits per API call**

 Deploy a BNB Smart Chain BEP-20 smart contract. This is a helper method, which is combination of Register new BEP20 token in the ledger and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.

 After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.

 **Signing a transaction**

 When deploying a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "offBscDeployErc20OffchainMnemonicAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offBscDeployErc20OffchainMnemonicAddress.php)

[Back to top](#top)



## `offBscDeployErc20OffchainPKAddress()`

> **POST** `/v3/offchain/bsc/bep20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offBscDeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../../Model/DeployErc20OffchainPKAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offBscDeployErc20OffchainPKAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offBscDeployErc20OffchainPKAddress.php)

[Back to top](#top)



## `offBscDeployErc20OffchainPKXpub()`

> **POST** `/v3/offchain/bsc/bep20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offBscDeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../../Model/DeployErc20OffchainPKXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offBscDeployErc20OffchainPKXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offBscDeployErc20OffchainPKXpub.php)

[Back to top](#top)



## `offBscErc20()`

> **POST** `/v3/offchain/bsc/bep20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offBscErc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../../Model/Erc20) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new BNB Smart Chain BEP-20 token in the virtual account

**This method is deprecated.

Use this method instead.**

 <h4>2 credits per API call.</h4>

 First step to create new BEP20 token with given supply on BSC blockchain with support of Tatum's private ledger.

 

 

 This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.

 The whole supply of BEP20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with BEP20 token name as account's currency.

 Newly created account is frozen until the specific BEP20 smart contract address is linked with the Tatum virtual currency, representing the token.

 Order of the steps to create BEP20 smart contract with Tatum private ledger support: 

<ol> <li>Register BEP20 token - creates a virtual currency within Tatum</li> <li>Deploy BEP20 smart contract - create new BEP20 smart contract on the blockchain</li> <li>Store BEP20 smart contract address - link newly created BEP20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for BEP20 Tatum accounts</li> </ol>

 There is a helper method Deploy BSC BEP20 Smart Contract to Blockchain and Ledger, which wraps first 2 steps into 1 method.

 Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub.

### Example

[✨ View "offBscErc20.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offBscErc20.php)

[Back to top](#top)



## `offBscErc20Address()`

> **POST** `/v3/offchain/bsc/bep20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offBscErc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../../Model/Erc20Address) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new BNB Smart Chain BEP-20 token in the virtual account

Erc20Address operation

### Example

[✨ View "offBscErc20Address.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offBscErc20Address.php)

[Back to top](#top)



## `offCelErc20()`

> **POST** `/v3/offchain/celo/erc20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offCelErc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../../Model/Erc20) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new Celo ERC-20-equivalent token in the virtual account

**This method is deprecated.

Use this method instead.**

 <h4>2 credits per API call.</h4>

 First step to create new ERC-20 token with given supply on Celo blockchain with support of Tatum's private ledger.

 

 

 This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.

 The whole supply of ERC-20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with ERC-20 token name as account's currency.

 Newly created account is frozen until the specific ERC-20 smart contract address is linked with the Tatum virtual currency, representing the token.

 Order of the steps to create ERC-20 smart contract with Tatum private ledger support: 

<ol> <li>Register Celo ERC-20 token - creates a virtual currency within Tatum</li> <li>Deploy Celo ERC-20 smart contract - create new ERC-20 smart contract on the blockchain</li> <li>Store Celo ERC-20 smart contract address - link newly created ERC-20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for ERC-20 Tatum accounts</li> </ol>

 There is a helper method Deploy Celo ERC-20 Smart Contract to Blockchain and Ledger, which wraps first 2 steps into 1 method.

 Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub.

### Example

[✨ View "offCelErc20.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offCelErc20.php)

[Back to top](#top)



## `offCelErc20Address()`

> **POST** `/v3/offchain/celo/erc20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offCelErc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../../Model/Erc20Address) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new Celo ERC-20-equivalent token in the virtual account

Erc20Address operation

### Example

[✨ View "offCelErc20Address.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offCelErc20Address.php)

[Back to top](#top)



## `offEglTransferEth()`

> **POST** `/v3/offchain/egld/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offEglTransferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../../Model/TransferEth) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send EGLD from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send EGLD from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

 

 

<ul> <li>If server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "offEglTransferEth.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offEglTransferEth.php)

[Back to top](#top)



## `offEglTransferEthKMS()`

> **POST** `/v3/offchain/egld/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offEglTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../../Model/TransferEthKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send EGLD from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offEglTransferEthKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offEglTransferEthKMS.php)

[Back to top](#top)



## `offEglTransferEthMnemonic()`

> **POST** `/v3/offchain/egld/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offEglTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../../Model/TransferEthMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send EGLD from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offEglTransferEthMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offEglTransferEthMnemonic.php)

[Back to top](#top)



## `offKcsDeployErc20OffchainKMSAddress()`

> **POST** `/v3/offchain/kcs/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKcsDeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../../Model/DeployErc20OffchainKMSAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offKcsDeployErc20OffchainKMSAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKcsDeployErc20OffchainKMSAddress.php)

[Back to top](#top)



## `offKcsDeployErc20OffchainKMSXpub()`

> **POST** `/v3/offchain/kcs/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKcsDeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../../Model/DeployErc20OffchainKMSXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offKcsDeployErc20OffchainKMSXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKcsDeployErc20OffchainKMSXpub.php)

[Back to top](#top)



## `offKcsDeployErc20OffchainMnemXpub()`

> **POST** `/v3/offchain/kcs/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKcsDeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../../Model/DeployErc20OffchainMnemXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offKcsDeployErc20OffchainMnemXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKcsDeployErc20OffchainMnemXpub.php)

[Back to top](#top)



## `offKcsDeployErc20OffchainMnemonicAddress()`

> **POST** `/v3/offchain/kcs/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKcsDeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../../Model/DeployErc20OffchainMnemonicAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

**4 credits per API call**

 Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract. This is a helper method, which is combination of Register new Kcs ERC20 token in the ledger and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.

 After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.

 **Signing a transaction**

 When deploying a KCC ERC-20-equivalent smart contract to the blockchain and a virtual account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "offKcsDeployErc20OffchainMnemonicAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKcsDeployErc20OffchainMnemonicAddress.php)

[Back to top](#top)



## `offKcsDeployErc20OffchainPKAddress()`

> **POST** `/v3/offchain/kcs/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKcsDeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../../Model/DeployErc20OffchainPKAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offKcsDeployErc20OffchainPKAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKcsDeployErc20OffchainPKAddress.php)

[Back to top](#top)



## `offKcsDeployErc20OffchainPKXpub()`

> **POST** `/v3/offchain/kcs/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKcsDeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../../Model/DeployErc20OffchainPKXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offKcsDeployErc20OffchainPKXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKcsDeployErc20OffchainPKXpub.php)

[Back to top](#top)



## `offKlaDeployErc20OffchainKMSAddress()`

> **POST** `/v3/offchain/klaytn/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKlaDeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../../Model/DeployErc20OffchainKMSAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offKlaDeployErc20OffchainKMSAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKlaDeployErc20OffchainKMSAddress.php)

[Back to top](#top)



## `offKlaDeployErc20OffchainKMSXpub()`

> **POST** `/v3/offchain/klaytn/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKlaDeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../../Model/DeployErc20OffchainKMSXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offKlaDeployErc20OffchainKMSXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKlaDeployErc20OffchainKMSXpub.php)

[Back to top](#top)



## `offKlaDeployErc20OffchainMnemXpub()`

> **POST** `/v3/offchain/klaytn/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKlaDeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../../Model/DeployErc20OffchainMnemXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offKlaDeployErc20OffchainMnemXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKlaDeployErc20OffchainMnemXpub.php)

[Back to top](#top)



## `offKlaDeployErc20OffchainMnemonicAddress()`

> **POST** `/v3/offchain/klaytn/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKlaDeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../../Model/DeployErc20OffchainMnemonicAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

**4 credits per API call**

 Deploy a Klaytn ERC-20-equivalent smart contract. This is a helper method, which is combination of Register new ERC20 token in the ledger and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.

 After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.

 **Signing a transaction**

 When deploying a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "offKlaDeployErc20OffchainMnemonicAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKlaDeployErc20OffchainMnemonicAddress.php)

[Back to top](#top)



## `offKlaDeployErc20OffchainPKAddress()`

> **POST** `/v3/offchain/klaytn/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKlaDeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../../Model/DeployErc20OffchainPKAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offKlaDeployErc20OffchainPKAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKlaDeployErc20OffchainPKAddress.php)

[Back to top](#top)



## `offKlaDeployErc20OffchainPKXpub()`

> **POST** `/v3/offchain/klaytn/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKlaDeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../../Model/DeployErc20OffchainPKXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offKlaDeployErc20OffchainPKXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKlaDeployErc20OffchainPKXpub.php)

[Back to top](#top)



## `offKlaTransferEth()`

> **POST** `/v3/offchain/klaytn/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKlaTransferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../../Model/TransferEth) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send KLAY from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send KLAY or ERC-20-equivalent tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

 

 

<ul> <li>If KLAY server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "offKlaTransferEth.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKlaTransferEth.php)

[Back to top](#top)



## `offKlaTransferEthKMS()`

> **POST** `/v3/offchain/klaytn/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKlaTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../../Model/TransferEthKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send KLAY from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offKlaTransferEthKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKlaTransferEthKMS.php)

[Back to top](#top)



## `offKlaTransferEthMnemonic()`

> **POST** `/v3/offchain/klaytn/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offKlaTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../../Model/TransferEthMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send KLAY from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offKlaTransferEthMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offKlaTransferEthMnemonic.php)

[Back to top](#top)



## `offOneDeployErc20OffchainKMSAddress()`

> **POST** `/v3/offchain/one/hrm20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneDeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address,
    [ float $shard_id = 0 ]
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../../Model/DeployErc20OffchainKMSAddress) |  |
 **$shard_id** | **float**  | The ID of the shard to operate | [optional] [default to 0]

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offOneDeployErc20OffchainKMSAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneDeployErc20OffchainKMSAddress.php)

[Back to top](#top)



## `offOneDeployErc20OffchainKMSXpub()`

> **POST** `/v3/offchain/one/hrm20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneDeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub,
    [ float $shard_id = 0 ]
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../../Model/DeployErc20OffchainKMSXpub) |  |
 **$shard_id** | **float**  | The ID of the shard to operate | [optional] [default to 0]

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offOneDeployErc20OffchainKMSXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneDeployErc20OffchainKMSXpub.php)

[Back to top](#top)



## `offOneDeployErc20OffchainMnemXpub()`

> **POST** `/v3/offchain/one/hrm20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneDeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub,
    [ float $shard_id = 0 ]
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../../Model/DeployErc20OffchainMnemXpub) |  |
 **$shard_id** | **float**  | The ID of the shard to operate | [optional] [default to 0]

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offOneDeployErc20OffchainMnemXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneDeployErc20OffchainMnemXpub.php)

[Back to top](#top)



## `offOneDeployErc20OffchainMnemonicAddress()`

> **POST** `/v3/offchain/one/hrm20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneDeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address,
    [ float $shard_id = 0 ]
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../../Model/DeployErc20OffchainMnemonicAddress) |  |
 **$shard_id** | **float**  | The ID of the shard to operate | [optional] [default to 0]

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

**4 credits per API call**

 Deploy a Harmony HRM-20 smart contract. This is a helper method, which is combination of Register new HRM20 token in the ledger and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.

 After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.

 **Signing a transaction**

 When deploying a Harmony HRM-20 smart contract to the blockchain and a virtual account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "offOneDeployErc20OffchainMnemonicAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneDeployErc20OffchainMnemonicAddress.php)

[Back to top](#top)



## `offOneDeployErc20OffchainPKAddress()`

> **POST** `/v3/offchain/one/hrm20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneDeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address,
    [ float $shard_id = 0 ]
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../../Model/DeployErc20OffchainPKAddress) |  |
 **$shard_id** | **float**  | The ID of the shard to operate | [optional] [default to 0]

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offOneDeployErc20OffchainPKAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneDeployErc20OffchainPKAddress.php)

[Back to top](#top)



## `offOneDeployErc20OffchainPKXpub()`

> **POST** `/v3/offchain/one/hrm20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneDeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub,
    [ float $shard_id = 0 ]
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../../Model/DeployErc20OffchainPKXpub) |  |
 **$shard_id** | **float**  | The ID of the shard to operate | [optional] [default to 0]

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offOneDeployErc20OffchainPKXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneDeployErc20OffchainPKXpub.php)

[Back to top](#top)



## `offOneErc20()`

> **POST** `/v3/offchain/one/hrm20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneErc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../../Model/Erc20) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new Harmony HRM-20 token in the virtual account

**This method is deprecated.

Use this method instead.**

 <h4>2 credits per API call.</h4>

 First step to create new HRM20 token with given supply on ONE blockchain with support of Tatum's private ledger.

 

 

 This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.

 The whole supply of HRM20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with HRM20 token name as account's currency.

 Newly created account is frozen until the specific HRM20 smart contract address is linked with the Tatum virtual currency, representing the token.

 Order of the steps to create HRM20 smart contract with Tatum private ledger support: 

<ol> <li>Register HRM20 token - creates a virtual currency within Tatum</li> <li>Deploy HRM20 smart contract - create new HRM20 smart contract on the blockchain</li> <li>Store HRM20 smart contract address - link newly created HRM20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for HRM20 Tatum accounts</li> </ol>

 There is a helper method Deploy ONE HRM20 Smart Contract to Blockchain and Ledger, which wraps first 2 steps into 1 method.

 Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub.

### Example

[✨ View "offOneErc20.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneErc20.php)

[Back to top](#top)



## `offOneErc20Address()`

> **POST** `/v3/offchain/one/hrm20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneErc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../../Model/Erc20Address) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new Harmony HRM-20 token in the virtual account

Erc20Address operation

### Example

[✨ View "offOneErc20Address.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneErc20Address.php)

[Back to top](#top)



## `offOneTransferEth()`

> **POST** `/v3/offchain/one/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneTransferEth(
    \Tatum\Model\TransferEth $transfer_eth,
    [ float $shard_id = 0 ]
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../../Model/TransferEth) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ONE from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send ONE (Harmony) or HRM-20 tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

 

 

<ul> <li>If ONE server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "offOneTransferEth.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneTransferEth.php)

[Back to top](#top)



## `offOneTransferEthKMS()`

> **POST** `/v3/offchain/one/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms,
    [ float $shard_id = 0 ]
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../../Model/TransferEthKMS) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ONE from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offOneTransferEthKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneTransferEthKMS.php)

[Back to top](#top)



## `offOneTransferEthMnemonic()`

> **POST** `/v3/offchain/one/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offOneTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic,
    [ float $shard_id = 0 ]
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../../Model/TransferEthMnemonic) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ONE from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offOneTransferEthMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offOneTransferEthMnemonic.php)

[Back to top](#top)



## `offPolTransferEth()`

> **POST** `/v3/offchain/polygon/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offPolTransferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../../Model/TransferEth) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send MATIC from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send MATIC (Polygon) or ERC-20-equivalent Polygon tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If Polygon server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "offPolTransferEth.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offPolTransferEth.php)

[Back to top](#top)



## `offPolTransferEthKMS()`

> **POST** `/v3/offchain/polygon/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offPolTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../../Model/TransferEthKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send MATIC from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offPolTransferEthKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offPolTransferEthKMS.php)

[Back to top](#top)



## `offPolTransferEthMnemonic()`

> **POST** `/v3/offchain/polygon/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offPolTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../../Model/TransferEthMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send MATIC from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offPolTransferEthMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offPolTransferEthMnemonic.php)

[Back to top](#top)



## `offTokErc20()`

> **POST** `/v3/offchain/token/{chain}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offTokErc20(
    string $chain,
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$erc20** | [**\Tatum\Model\Erc20**](../../Model/Erc20) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new ERC-20 or ERC-20-equivalent token in the virtual account

<h4>2 credits per API call.</h4>

 This is the first step to create a new ERC-20 or ERC-20 equivalent token with some supply in a virtual account.

 

 

 This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.

 The whole supply of token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with token name as account's currency.

 Newly created account is frozen until the specific smart contract address is linked with the Tatum virtual currency, representing the token.

 Order of the steps to create smart contract with Tatum private ledger support: 

<ol> <li>Register token</a> (this API) - creates a virtual currency within Tatum</li> <li><a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy smart contract</a> - create new smart contract on the blockchain</li> <li>Store smart contract address - link newly created smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for Tatum accounts</li> </ol>

 Blockchain address will be assigned to the virtual account as a deposit address. It can be defined via the address explicitly or by using xpub and derivationIndex.

### Example

[✨ View "offTokErc20.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offTokErc20.php)

[Back to top](#top)



## `offTokErc20Address()`

> **POST** `/v3/offchain/token/{chain}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offTokErc20Address(
    string $chain,
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../../Model/Erc20Address) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new ERC-20 or ERC-20-equivalent token in the virtual account

Erc20Address operation

### Example

[✨ View "offTokErc20Address.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offTokErc20Address.php)

[Back to top](#top)



## `offXdcDeployErc20OffchainKMSAddress()`

> **POST** `/v3/offchain/xdc/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcDeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../../Model/DeployErc20OffchainKMSAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offXdcDeployErc20OffchainKMSAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcDeployErc20OffchainKMSAddress.php)

[Back to top](#top)



## `offXdcDeployErc20OffchainKMSXpub()`

> **POST** `/v3/offchain/xdc/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcDeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../../Model/DeployErc20OffchainKMSXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offXdcDeployErc20OffchainKMSXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcDeployErc20OffchainKMSXpub.php)

[Back to top](#top)



## `offXdcDeployErc20OffchainMnemXpub()`

> **POST** `/v3/offchain/xdc/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcDeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../../Model/DeployErc20OffchainMnemXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offXdcDeployErc20OffchainMnemXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcDeployErc20OffchainMnemXpub.php)

[Back to top](#top)



## `offXdcDeployErc20OffchainMnemonicAddress()`

> **POST** `/v3/offchain/xdc/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcDeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../../Model/DeployErc20OffchainMnemonicAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

**4 credits per API call**

 Deploy a XinFin ERC-20-equivalent smart contract. This is a helper method, which is combination of Register new ERC20 token in the ledger and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.

 After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.

 **Signing a transaction**

 When deploying a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "offXdcDeployErc20OffchainMnemonicAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcDeployErc20OffchainMnemonicAddress.php)

[Back to top](#top)



## `offXdcDeployErc20OffchainPKAddress()`

> **POST** `/v3/offchain/xdc/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcDeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../../Model/DeployErc20OffchainPKAddress) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offXdcDeployErc20OffchainPKAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcDeployErc20OffchainPKAddress.php)

[Back to top](#top)



## `offXdcDeployErc20OffchainPKXpub()`

> **POST** `/v3/offchain/xdc/erc20/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcDeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub
): \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../../Model/DeployErc20OffchainPKXpub) |  |

### Return type

[**\Tatum\Model\DeployErc20OffchainMnemonicAddress200Response**](../../Model/DeployErc20OffchainMnemonicAddress200Response)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offXdcDeployErc20OffchainPKXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcDeployErc20OffchainPKXpub.php)

[Back to top](#top)



## `offXdcErc20()`

> **POST** `/v3/offchain/xdc/erc20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcErc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../../Model/Erc20) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new XinFin ERC-20-equivalent token in the virtual account

**This method is deprecated.

Use this method instead.**

 <h4>2 credits per API call.</h4>

 First step to create new ERC20 token with given supply on XDC blockchain with support of Tatum's private ledger.

 This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.

 The whole supply of ERC20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with ERC20 token name as account's currency.

 Newly created account is frozen until the specific ERC20 smart contract address is linked with the Tatum virtual currency, representing the token.

 Order of the steps to create ERC20 smart contract with Tatum private ledger support: 

<ol> <li>Register ERC20 token - creates a virtual currency within Tatum</li> <li>Deploy ERC20 smart contract - create new ERC20 smart contract on the blockchain</li> <li>Store ERC20 smart contract address - link newly created ERC20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for ERC20 Tatum accounts</li> </ol>

 There is a helper method Deploy XDC ERC20 Smart Contract to Blockchain and Ledger, which wraps first 2 steps into 1 method.

 Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub.

### Example

[✨ View "offXdcErc20.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcErc20.php)

[Back to top](#top)



## `offXdcErc20Address()`

> **POST** `/v3/offchain/xdc/erc20`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcErc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../../Model/Erc20Address) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../../Model/Erc20Response)

### Description

Register a new XinFin ERC-20-equivalent token in the virtual account

Erc20Address operation

### Example

[✨ View "offXdcErc20Address.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcErc20Address.php)

[Back to top](#top)



## `offXdcTransferEth()`

> **POST** `/v3/offchain/xdc/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcTransferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../../Model/TransferEth) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send XDC from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send XDC (XinFin) or ERC-20-equivalent XinFin tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

 

 

<ul> <li>If XDC server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "offXdcTransferEth.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcTransferEth.php)

[Back to top](#top)



## `offXdcTransferEthKMS()`

> **POST** `/v3/offchain/xdc/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../../Model/TransferEthKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send XDC from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offXdcTransferEthKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcTransferEthKMS.php)

[Back to top](#top)



## `offXdcTransferEthMnemonic()`

> **POST** `/v3/offchain/xdc/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offXdcTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../../Model/TransferEthMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send XDC from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offXdcTransferEthMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/offXdcTransferEthMnemonic.php)

[Back to top](#top)



## `storeCeloErc20Address()`

> **POST** `/v3/offchain/celo/erc20/{name}/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->storeCeloErc20Address(
    string $address,
    string $name
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | ERC-20 contract address |
 **$name** | **string**  | ERC-20 symbol name. |

### Return type

void (empty response body)

### Description

Set the contract address of a Celo ERC-20-equivalent token

**This method is deprecated.

Use this method instead.**

 <h4>2 credits per API call.</h4>

### Example

[✨ View "storeCeloErc20Address.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/storeCeloErc20Address.php)

[Back to top](#top)



## `storeTokenAddress()`

> **POST** `/v3/offchain/token/{name}/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->storeTokenAddress(
    string $address,
    string $name
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | On Algorand, this is the asset ID; on TRON, this is the token ID; on the other blockchains, this is the address of the smart contract. |
 **$name** | **string**  | The name of the token (the token symbol) |

### Return type

void (empty response body)

### Description

Set the contract address of an ERC-20, ERC-20-equivalent, or TRC-10 token

**2 credits per API call**

 Set the contract address of an ERC-20, ERC-20-equivalent (for example, BEP-20, HRM-20, and so on), or TRC-10 token to be able to communicate with the smart contract.

 After creating and deploying the token to the blockchain, the smart contract address is generated and must be set within Tatum. If the address is not set, the Tatum platform will not be able to detect incoming deposits of the tokens and transfer the tokens from virtual accounts to blockchain addresses.

 **NOTE:**

 

<ul> <li>For **Algorand**, the contract address is the asset ID (`assetId`), for example, `55351976`.</li> <li>For **TRON**, the contract address is the token ID (`tokenId`), for example, `1234567`.</li> </ul>

### Example

[✨ View "storeTokenAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/storeTokenAddress.php)

[Back to top](#top)



## `storeTrcAddress()`

> **POST** `/v3/offchain/tron/trc/{name}/{address}`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->storeTrcAddress(
    string $address,
    string $name
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$address** | **string**  | TRC-10 Token ID or TRC-20 contract address |
 **$name** | **string**  | TRC 10/20 symbol name. |

### Return type

void (empty response body)

### Description

Set the contract address of a TRC-10 or TRC-20 token

**This method is deprecated.

Use this method instead.**

 <h4>2 credits per API call.</h4>

### Example

[✨ View "storeTrcAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/storeTrcAddress.php)

[Back to top](#top)



## `transferAdaKMS()`

> **POST** `/v3/offchain/ada/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferAdaKMS(
    \Tatum\Model\TransferAdaKMS $transfer_ada_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ada_kms** | [**\Tatum\Model\TransferAdaKMS**](../../Model/TransferAdaKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ADA from a virtual account to the blockchain

TransferAdaKMS operation

### Example

[✨ View "transferAdaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferAdaKMS.php)

[Back to top](#top)



## `transferAdaKeyPair()`

> **POST** `/v3/offchain/ada/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferAdaKeyPair(
    \Tatum\Model\TransferAdaKeyPair $transfer_ada_key_pair
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ada_key_pair** | [**\Tatum\Model\TransferAdaKeyPair**](../../Model/TransferAdaKeyPair) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ADA from a virtual account to the blockchain

**Support for Cardano is deprecated.**

 <h4>10 credits per API call.</h4>

Send ADA (Cardano) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If ADA server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferAdaKeyPair.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferAdaKeyPair.php)

[Back to top](#top)



## `transferAdaMnemonic()`

> **POST** `/v3/offchain/ada/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferAdaMnemonic(
    \Tatum\Model\TransferAdaMnemonic $transfer_ada_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ada_mnemonic** | [**\Tatum\Model\TransferAdaMnemonic**](../../Model/TransferAdaMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ADA from a virtual account to the blockchain

TransferAdaMnemonic operation

### Example

[✨ View "transferAdaMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferAdaMnemonic.php)

[Back to top](#top)



## `transferAlgo()`

> **POST** `/v3/offchain/algorand/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferAlgo(
    \Tatum\Model\TransferAlgo $transfer_algo
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algo** | [**\Tatum\Model\TransferAlgo**](../../Model/TransferAlgo) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ALGO from a virtual account to the blockchain

**4 credits per API call**

 Send Algos or ERC-20-equivalent Algorand tokens from a virtual account (even from a virtual account without deposit addresses adssigned) to the Algorand blockchain.

 The recipient has to agree in advance to receive assets because Algorand charges users for storing assets on their addresses, and an Algorand blockchain address by default does not receive assets unless explicitly agreed. Before sending any asset from a virtual account to the blockchain, make sure that the recipient <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset" target="_blank">has agreed to receive the assets</a> to their address.

 Sending Algorand assets creates an internal Tatum withdrawal request with an ID. If everything works as expected, the withdrawal request is marked as complete and a transaction ID is assigned to it.

 

<ul> <li>If a server connection is unavailable, the withdrawal request is cancelled.</li> <li>If the transfer to the blockchain is successful, but the Tatum infrastructure cannot be accesses, the ID of the blockchain transaction is returned and you have to <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal" target="_blank">complete the withdrawal request manually</a>. Otherwise, all other withdrawals will be pending.</li> </ul>

 **Signing a transaction**

 When sending Algos or ERC-20-equivalent Algorand tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

### Example

[✨ View "transferAlgo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferAlgo.php)

[Back to top](#top)



## `transferAlgoErc20()`

> **POST** `/v3/offchain/algorand/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferAlgoErc20(
    \Tatum\Model\TransferAlgoErc20 $transfer_algo_erc20
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algo_erc20** | [**\Tatum\Model\TransferAlgoErc20**](../../Model/TransferAlgoErc20) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ALGO from a virtual account to the blockchain

TransferAlgoErc20 operation

### Example

[✨ View "transferAlgoErc20.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferAlgoErc20.php)

[Back to top](#top)



## `transferAlgoKMS()`

> **POST** `/v3/offchain/algorand/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferAlgoKMS(
    \Tatum\Model\TransferAlgoKMS $transfer_algo_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algo_kms** | [**\Tatum\Model\TransferAlgoKMS**](../../Model/TransferAlgoKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ALGO from a virtual account to the blockchain

TransferAlgoKMS operation

### Example

[✨ View "transferAlgoKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferAlgoKMS.php)

[Back to top](#top)



## `transferBchKMS()`

> **POST** `/v3/offchain/bcash/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBchKMS(
    \Tatum\Model\TransferBchKMS $transfer_bch_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bch_kms** | [**\Tatum\Model\TransferBchKMS**](../../Model/TransferBchKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BCH from a virtual account to the blockchain

TransferBchKMS operation

### Example

[✨ View "transferBchKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBchKMS.php)

[Back to top](#top)



## `transferBchKeyPair()`

> **POST** `/v3/offchain/bcash/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBchKeyPair(
    \Tatum\Model\TransferBchKeyPair $transfer_bch_key_pair
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bch_key_pair** | [**\Tatum\Model\TransferBchKeyPair**](../../Model/TransferBchKeyPair) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BCH from a virtual account to the blockchain

TransferBchKeyPair operation

### Example

[✨ View "transferBchKeyPair.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBchKeyPair.php)

[Back to top](#top)



## `transferBchMnemonic()`

> **POST** `/v3/offchain/bcash/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBchMnemonic(
    \Tatum\Model\TransferBchMnemonic $transfer_bch_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bch_mnemonic** | [**\Tatum\Model\TransferBchMnemonic**](../../Model/TransferBchMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BCH from a virtual account to the blockchain

<h4>10 credits per API call.</h4>

 Send BCH (Bitcoin Cash) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If Bitcoin Cash server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 There are two possibilites how the transaction on the blockchain can be created: 

<ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field **attr** should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This method is a helper method, which internally wraps these steps: 

<ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Bitcoin-Cash#operation/BchTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol>

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferBchMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBchMnemonic.php)

[Back to top](#top)



## `transferBnb()`

> **POST** `/v3/offchain/bnb/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBnb(
    \Tatum\Model\TransferBnb $transfer_bnb
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bnb** | [**\Tatum\Model\TransferBnb**](../../Model/TransferBnb) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BNB from a virtual account to the blockchain

<h4>10 credits per API call.</h4>

 Send BNB (BNB Beacon Chain) or BNB assets from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If BNB server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferBnb.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBnb.php)

[Back to top](#top)



## `transferBnbKMS()`

> **POST** `/v3/offchain/bnb/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBnbKMS(
    \Tatum\Model\TransferBnbKMS $transfer_bnb_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bnb_kms** | [**\Tatum\Model\TransferBnbKMS**](../../Model/TransferBnbKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BNB from a virtual account to the blockchain

TransferBnbKMS operation

### Example

[✨ View "transferBnbKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBnbKMS.php)

[Back to top](#top)



## `transferBsc()`

> **POST** `/v3/offchain/bsc/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBsc(
    \Tatum\Model\TransferBsc $transfer_bsc
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc** | [**\Tatum\Model\TransferBsc**](../../Model/TransferBsc) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BSC from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send BSC (BNB Smart Chain) or BEP-20 tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

 

 

<ul> <li>If BSC server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferBsc.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBsc.php)

[Back to top](#top)



## `transferBscKMS()`

> **POST** `/v3/offchain/bsc/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBscKMS(
    \Tatum\Model\TransferBscKMS $transfer_bsc_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc_kms** | [**\Tatum\Model\TransferBscKMS**](../../Model/TransferBscKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BSC from a virtual account to the blockchain

TransferBscKMS operation

### Example

[✨ View "transferBscKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBscKMS.php)

[Back to top](#top)



## `transferBscMnemonic()`

> **POST** `/v3/offchain/bsc/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBscMnemonic(
    \Tatum\Model\TransferBscMnemonic $transfer_bsc_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc_mnemonic** | [**\Tatum\Model\TransferBscMnemonic**](../../Model/TransferBscMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BSC from a virtual account to the blockchain

TransferBscMnemonic operation

### Example

[✨ View "transferBscMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBscMnemonic.php)

[Back to top](#top)



## `transferBtcKMS()`

> **POST** `/v3/offchain/bitcoin/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBtcKMS(
    \Tatum\Model\TransferBtcKMS $transfer_btc_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_btc_kms** | [**\Tatum\Model\TransferBtcKMS**](../../Model/TransferBtcKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BTC from a virtual account to the blockchain

TransferBtcKMS operation

### Example

[✨ View "transferBtcKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBtcKMS.php)

[Back to top](#top)



## `transferBtcKeyPair()`

> **POST** `/v3/offchain/bitcoin/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBtcKeyPair(
    \Tatum\Model\TransferBtcKeyPair $transfer_btc_key_pair
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_btc_key_pair** | [**\Tatum\Model\TransferBtcKeyPair**](../../Model/TransferBtcKeyPair) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BTC from a virtual account to the blockchain

TransferBtcKeyPair operation

### Example

[✨ View "transferBtcKeyPair.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBtcKeyPair.php)

[Back to top](#top)



## `transferBtcMnemonic()`

> **POST** `/v3/offchain/bitcoin/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferBtcMnemonic(
    \Tatum\Model\TransferBtcMnemonic $transfer_btc_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_btc_mnemonic** | [**\Tatum\Model\TransferBtcMnemonic**](../../Model/TransferBtcMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send BTC from a virtual account to the blockchain

<h4>2 credits per API call.</h4>

 Send BTC (Bitcoin) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If Bitcoin server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 There are two possibilites how the transaction on the blockchain can be created: 

<ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field **attr** should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This method is a helper method, which internally wraps these steps: 

<ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Bitcoin#operation/BtcTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol>

 When some of the steps fails, <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/cancelInProgressWithdrawal">Cancel withdrawal</a> operation is used, which cancels withdrawal and creates refund transaction to the sender account.</li> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferBtcMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferBtcMnemonic.php)

[Back to top](#top)



## `transferCelo()`

> **POST** `/v3/offchain/celo/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferCelo(
    \Tatum\Model\TransferCelo $transfer_celo
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo** | [**\Tatum\Model\TransferCelo**](../../Model/TransferCelo) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send CELO from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send CELO (Celo), ERC-20-equivalent Celo tokens, cUSD, or cEUR from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

 

 

<ul> <li>If Celo server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferCelo.php)

[Back to top](#top)



## `transferCeloKMS()`

> **POST** `/v3/offchain/celo/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferCeloKMS(
    \Tatum\Model\TransferCeloKMS $transfer_celo_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo_kms** | [**\Tatum\Model\TransferCeloKMS**](../../Model/TransferCeloKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send CELO from a virtual account to the blockchain

TransferCeloKMS operation

### Example

[✨ View "transferCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferCeloKMS.php)

[Back to top](#top)



## `transferCeloMnemonic()`

> **POST** `/v3/offchain/celo/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferCeloMnemonic(
    \Tatum\Model\TransferCeloMnemonic $transfer_celo_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo_mnemonic** | [**\Tatum\Model\TransferCeloMnemonic**](../../Model/TransferCeloMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send CELO from a virtual account to the blockchain

TransferCeloMnemonic operation

### Example

[✨ View "transferCeloMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferCeloMnemonic.php)

[Back to top](#top)



## `transferDogeKMS()`

> **POST** `/v3/offchain/dogecoin/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferDogeKMS(
    \Tatum\Model\TransferDogeKMS $transfer_doge_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_doge_kms** | [**\Tatum\Model\TransferDogeKMS**](../../Model/TransferDogeKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send DOGE from a virtual account to the blockchain

TransferDogeKMS operation

### Example

[✨ View "transferDogeKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferDogeKMS.php)

[Back to top](#top)



## `transferDogeKeyPair()`

> **POST** `/v3/offchain/dogecoin/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferDogeKeyPair(
    \Tatum\Model\TransferDogeKeyPair $transfer_doge_key_pair
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_doge_key_pair** | [**\Tatum\Model\TransferDogeKeyPair**](../../Model/TransferDogeKeyPair) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send DOGE from a virtual account to the blockchain

TransferDogeKeyPair operation

### Example

[✨ View "transferDogeKeyPair.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferDogeKeyPair.php)

[Back to top](#top)



## `transferDogeMnemonic()`

> **POST** `/v3/offchain/dogecoin/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferDogeMnemonic(
    \Tatum\Model\TransferDogeMnemonic $transfer_doge_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_doge_mnemonic** | [**\Tatum\Model\TransferDogeMnemonic**](../../Model/TransferDogeMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send DOGE from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send DOGE (Dogecoin) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If Dogecoin server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 There are two possibilites how the transaction on the blockchain can be created: 

<ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field **attr** should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This method is a helper method, which internally wraps these steps: 

<ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Dogecoin#operation/DogeTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol>

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferDogeMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferDogeMnemonic.php)

[Back to top](#top)



## `transferErc20()`

> **POST** `/v3/offchain/ethereum/erc20/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferErc20(
    \Tatum\Model\TransferErc20 $transfer_erc20
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_erc20** | [**\Tatum\Model\TransferErc20**](../../Model/TransferErc20) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send Ethereum ERC-20 tokens from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send Ethereum ERC-20 tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If Ethereum server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferErc20.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferErc20.php)

[Back to top](#top)



## `transferErc20KMS()`

> **POST** `/v3/offchain/ethereum/erc20/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferErc20KMS(
    \Tatum\Model\TransferErc20KMS $transfer_erc20_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_erc20_kms** | [**\Tatum\Model\TransferErc20KMS**](../../Model/TransferErc20KMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send Ethereum ERC-20 tokens from a virtual account to the blockchain

TransferErc20KMS operation

### Example

[✨ View "transferErc20KMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferErc20KMS.php)

[Back to top](#top)



## `transferErc20Mnemonic()`

> **POST** `/v3/offchain/ethereum/erc20/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferErc20Mnemonic(
    \Tatum\Model\TransferErc20Mnemonic $transfer_erc20_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_erc20_mnemonic** | [**\Tatum\Model\TransferErc20Mnemonic**](../../Model/TransferErc20Mnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send Ethereum ERC-20 tokens from a virtual account to the blockchain

TransferErc20Mnemonic operation

### Example

[✨ View "transferErc20Mnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferErc20Mnemonic.php)

[Back to top](#top)



## `transferEth()`

> **POST** `/v3/offchain/ethereum/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../../Model/TransferEth) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ETH from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send ETH (Ethereum) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If Ethereum server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferEth.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferEth.php)

[Back to top](#top)



## `transferEthKMS()`

> **POST** `/v3/offchain/ethereum/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../../Model/TransferEthKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ETH from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "transferEthKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferEthKMS.php)

[Back to top](#top)



## `transferEthMnemonic()`

> **POST** `/v3/offchain/ethereum/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../../Model/TransferEthMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send ETH from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "transferEthMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferEthMnemonic.php)

[Back to top](#top)



## `transferFlowKMS()`

> **POST** `/v3/offchain/flow/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferFlowKMS(
    \Tatum\Model\TransferFlowKMS $transfer_flow_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_flow_kms** | [**\Tatum\Model\TransferFlowKMS**](../../Model/TransferFlowKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send FLOW from a virtual account to the blockchain

TransferFlowKMS operation

### Example

[✨ View "transferFlowKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferFlowKMS.php)

[Back to top](#top)



## `transferFlowMnemonic()`

> **POST** `/v3/offchain/flow/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferFlowMnemonic(
    \Tatum\Model\TransferFlowMnemonic $transfer_flow_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_flow_mnemonic** | [**\Tatum\Model\TransferFlowMnemonic**](../../Model/TransferFlowMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send FLOW from a virtual account to the blockchain

<h4>100 credits per API call. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.</h4>

 Send FLOW (Flow) or FUSD from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If Flow server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 There are two possibilites how the transaction on the blockchain can be created: 

<ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This method is a helper method, which internally wraps these steps: 

<ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Flow#operation/FlowTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol>

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferFlowMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferFlowMnemonic.php)

[Back to top](#top)



## `transferFlowPK()`

> **POST** `/v3/offchain/flow/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferFlowPK(
    \Tatum\Model\TransferFlowPK $transfer_flow_pk
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_flow_pk** | [**\Tatum\Model\TransferFlowPK**](../../Model/TransferFlowPK) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send FLOW from a virtual account to the blockchain

TransferFlowPK operation

### Example

[✨ View "transferFlowPK.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferFlowPK.php)

[Back to top](#top)



## `transferKCS()`

> **POST** `/v3/offchain/kcs/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferKCS(
    \Tatum\Model\TransferKCS $transfer_kcs
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_kcs** | [**\Tatum\Model\TransferKCS**](../../Model/TransferKCS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send KCS from a virtual account to the blockchain

<h4>4 credits per API call.</h4>

 Send KCS (KuCoin Community Chain (KCC)) or ERC-20-equivalent KCC tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If KCS server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferKCS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferKCS.php)

[Back to top](#top)



## `transferKCSKMS()`

> **POST** `/v3/offchain/kcs/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferKCSKMS(
    \Tatum\Model\TransferKCSKMS $transfer_kcskms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_kcskms** | [**\Tatum\Model\TransferKCSKMS**](../../Model/TransferKCSKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send KCS from a virtual account to the blockchain

TransferKCSKMS operation

### Example

[✨ View "transferKCSKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferKCSKMS.php)

[Back to top](#top)



## `transferKCSMnemonic()`

> **POST** `/v3/offchain/kcs/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferKCSMnemonic(
    \Tatum\Model\TransferKCSMnemonic $transfer_kcs_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_kcs_mnemonic** | [**\Tatum\Model\TransferKCSMnemonic**](../../Model/TransferKCSMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send KCS from a virtual account to the blockchain

TransferKCSMnemonic operation

### Example

[✨ View "transferKCSMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferKCSMnemonic.php)

[Back to top](#top)



## `transferLtcKMS()`

> **POST** `/v3/offchain/litecoin/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferLtcKMS(
    \Tatum\Model\TransferLtcKMS $transfer_ltc_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ltc_kms** | [**\Tatum\Model\TransferLtcKMS**](../../Model/TransferLtcKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send LTC from a virtual account to the blockchain

TransferLtcKMS operation

### Example

[✨ View "transferLtcKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferLtcKMS.php)

[Back to top](#top)



## `transferLtcKeyPair()`

> **POST** `/v3/offchain/litecoin/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferLtcKeyPair(
    \Tatum\Model\TransferLtcKeyPair $transfer_ltc_key_pair
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ltc_key_pair** | [**\Tatum\Model\TransferLtcKeyPair**](../../Model/TransferLtcKeyPair) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send LTC from a virtual account to the blockchain

TransferLtcKeyPair operation

### Example

[✨ View "transferLtcKeyPair.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferLtcKeyPair.php)

[Back to top](#top)



## `transferLtcMnemonic()`

> **POST** `/v3/offchain/litecoin/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferLtcMnemonic(
    \Tatum\Model\TransferLtcMnemonic $transfer_ltc_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ltc_mnemonic** | [**\Tatum\Model\TransferLtcMnemonic**](../../Model/TransferLtcMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send LTC from a virtual account to the blockchain

<h4>10 credits per API call.</h4>

 Send LTC (Litecoin) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If Litecoin server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 There are two possibilites how the transaction on the blockchain can be created: 

<ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field **attr** should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This method is a helper method, which internally wraps these steps: 

<ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Litecoin#operation/LtcTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol>

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferLtcMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferLtcMnemonic.php)

[Back to top](#top)



## `transferSol()`

> **POST** `/v3/offchain/solana/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferSol(
    \Tatum\Model\TransferSol $transfer_sol
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_sol** | [**\Tatum\Model\TransferSol**](../../Model/TransferSol) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send SOL from a virtual account to the blockchain

<h4>10 credits per API call.</h4>

 Send SOL (Solana), USDC_SOL, or custom SPL tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If SOL server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferSol.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferSol.php)

[Back to top](#top)



## `transferSolKMS()`

> **POST** `/v3/offchain/solana/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferSolKMS(
    \Tatum\Model\TransferSolKMS $transfer_sol_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_sol_kms** | [**\Tatum\Model\TransferSolKMS**](../../Model/TransferSolKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send SOL from a virtual account to the blockchain

TransferSolKMS operation

### Example

[✨ View "transferSolKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferSolKMS.php)

[Back to top](#top)



## `transferTron()`

> **POST** `/v3/offchain/tron/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferTron(
    \Tatum\Model\TransferTron $transfer_tron
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron** | [**\Tatum\Model\TransferTron**](../../Model/TransferTron) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send TRON from a virtual account to the blockchain

<h4>10 credits per API call.</h4>

Send TRON or TRX assets from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If Tron server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferTron.php)

[Back to top](#top)



## `transferTronKMS()`

> **POST** `/v3/offchain/tron/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferTronKMS(
    \Tatum\Model\TransferTronKMS $transfer_tron_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_kms** | [**\Tatum\Model\TransferTronKMS**](../../Model/TransferTronKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send TRON from a virtual account to the blockchain

TransferTronKMS operation

### Example

[✨ View "transferTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferTronKMS.php)

[Back to top](#top)



## `transferTronMnemonic()`

> **POST** `/v3/offchain/tron/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferTronMnemonic(
    \Tatum\Model\TransferTronMnemonic $transfer_tron_mnemonic
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_mnemonic** | [**\Tatum\Model\TransferTronMnemonic**](../../Model/TransferTronMnemonic) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send TRON from a virtual account to the blockchain

TransferTronMnemonic operation

### Example

[✨ View "transferTronMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferTronMnemonic.php)

[Back to top](#top)



## `transferXlm()`

> **POST** `/v3/offchain/xlm/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferXlm(
    \Tatum\Model\TransferXlm $transfer_xlm
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm** | [**\Tatum\Model\TransferXlm**](../../Model/TransferXlm) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send XLM from a virtual account to the blockchain

<h4>10 credits per API call.</h4>

 Send XLM (Stellar) or XLM-based assets from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If XLM server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferXlm.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferXlm.php)

[Back to top](#top)



## `transferXlmKMS()`

> **POST** `/v3/offchain/xlm/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferXlmKMS(
    \Tatum\Model\TransferXlmKMS $transfer_xlm_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_kms** | [**\Tatum\Model\TransferXlmKMS**](../../Model/TransferXlmKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send XLM from a virtual account to the blockchain

TransferXlmKMS operation

### Example

[✨ View "transferXlmKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferXlmKMS.php)

[Back to top](#top)



## `transferXrp()`

> **POST** `/v3/offchain/xrp/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferXrp(
    \Tatum\Model\TransferXrp $transfer_xrp
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp** | [**\Tatum\Model\TransferXrp**](../../Model/TransferXrp) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send XRP from a virtual account to the blockchain

<h4>10 credits per API call.</h4>

 Send XRP (Ripple) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. 

<ul> <li>If XRP server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul>

 It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.

 This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.

### Example

[✨ View "transferXrp.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferXrp.php)

[Back to top](#top)



## `transferXrpKMS()`

> **POST** `/v3/offchain/xrp/transfer`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->transferXrpKMS(
    \Tatum\Model\TransferXrpKMS $transfer_xrp_kms
): \Tatum\Model\TransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_kms** | [**\Tatum\Model\TransferXrpKMS**](../../Model/TransferXrpKMS) |  |

### Return type

[**\Tatum\Model\TransferBtcMnemonic200Response**](../../Model/TransferBtcMnemonic200Response)

### Description

Send XRP from a virtual account to the blockchain

TransferXrpKMS operation

### Example

[✨ View "transferXrpKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/transferXrpKMS.php)

[Back to top](#top)



## `trcAddress()`

> **POST** `/v3/offchain/tron/trc`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->trcAddress(
    \Tatum\Model\TrcAddress $trc_address
): \Tatum\Model\Trc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trc_address** | [**\Tatum\Model\TrcAddress**](../../Model/TrcAddress) |  |

### Return type

[**\Tatum\Model\Trc20Response**](../../Model/Trc20Response)

### Description

Register a new TRON TRC-10 or TRC-20 token in the virtual account

<h4>10 credits per API call.</h4>

 First step to create new TRC 10/20 token with given supply on the Tron blockchain with support of Tatum's private ledger.

 This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.

 The whole supply of TRC 10/20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with TRC 10/20 token name as account's currency.

 Newly created account is frozen until the specific TRC 10/20 smart contract address is linked with the Tatum virtual currency, representing the token.

 Order of the steps to create TRC 10/20 smart contract with Tatum private ledger support: 

<ol> <li>Create TRC 10/20 token (this API) - creates a virtual currency within Tatum</li> <li><a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc10">Deploy TRC 10</a> or <a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc20">TRC 20 smart contract</a> - create new TRC 10/20 smart contract on the blockchain</li> <li>Store TRC 10/20 smart contract address - link newly created TRC 10/20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for TRC 10/20 Tatum accounts</li> </ol>

 Blockchain address will be assigned to the virtual account as a deposit address. It can be defined via the address explicitly or by using xpub and derivationIndex. There is a helper method Deploy TRC 10/20 Smart Contract to Blockchain and Ledger, which wraps first 2 steps into 1 method.

### Example

[✨ View "trcAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/trcAddress.php)

[Back to top](#top)



## `trcXpub()`

> **POST** `/v3/offchain/tron/trc`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->trcXpub(
    \Tatum\Model\TrcXpub $trc_xpub
): \Tatum\Model\Trc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trc_xpub** | [**\Tatum\Model\TrcXpub**](../../Model/TrcXpub) |  |

### Return type

[**\Tatum\Model\Trc20Response**](../../Model/Trc20Response)

### Description

Register a new TRON TRC-10 or TRC-20 token in the virtual account

TrcXpub operation

### Example

[✨ View "trcXpub.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/trcXpub.php)

[Back to top](#top)



## `xlmAssetOffchain()`

> **POST** `/v3/offchain/xlm/asset`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xlmAssetOffchain(
    \Tatum\Model\CreateXlmAsset $create_xlm_asset
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_xlm_asset** | [**\Tatum\Model\CreateXlmAsset**](../../Model/CreateXlmAsset) |  |

### Return type

void (empty response body)

### Description

Create an XLM-based asset

<h4>2 credits per API call.</h4>

 Create an XLM-based asset in a virtual account. The asset must be created and configured on the Stellar blockchain before <a href="https://apidoc.tatum.io/tag/Stellar#operation/XlmTrustLineBlockchain">creating a trust line</a>.

 This API call will create an internal virtual currency. You can create virtual accounts with off-chain support.

### Example

[✨ View "xlmAssetOffchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/xlmAssetOffchain.php)

[Back to top](#top)



## `xrpAssetOffchain()`

> **POST** `/v3/offchain/xrp/asset`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xrpAssetOffchain(
    \Tatum\Model\CreateXrpAsset $create_xrp_asset
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_xrp_asset** | [**\Tatum\Model\CreateXrpAsset**](../../Model/CreateXrpAsset) |  |

### Return type

void (empty response body)

### Description

Create XRP based Asset

<h4>2 credits per API call.</h4>

 Create an XRP-based asset in a virtual account. The asset must be created and configured on the Ripple blockchain before <a href="https://apidoc.tatum.io/tag/XRP#operation/XrpTrustLineBlockchain">creating a trust line</a>.

 This API call will create an internal virtual currency. You can create virtual accounts with off-chain support.

### Example

[✨ View "xrpAssetOffchain.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainOperationsApi/xrpAssetOffchain.php)

[Back to top](#top)

