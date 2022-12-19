# Tatum - PHP SDK

## Table of Contents
- [Welcome!](#welcome)
  - [What is Tatum?](#what-is-tatum)
  - [Need help?](#need-help)
- [Installation \& Usage](#installation--usage)
  - [Requirements](#requirements)
- [Getting Started](#getting-started)
- [SDK Structure](#sdk-structure)
    - [API Endpoints](#api-endpoints)
    - [Local Endpoints](#local-endpoints)
- [Tests](#tests)
- [About this repository](#about-this-repository)

## Welcome!

This is the official Tatum SDK for PHP version `2.0.0` based on API version `3.17.0`.

### What is Tatum?

Tatum offers a flexible framework to build, run, and scale blockchain apps fast. To learn more about the
Tatum blockchain development framework, visit [our website](https://tatum.io/framework).

The Tatum API features powerful endpoints that simplify a complex blockchain into single API requests. Code for all
supported blockchains using unified API calls.

### Need help?

To chat with other developers, get help from the Support team, and engage with the thriving Tatum community, join 
our [Discord server](https://discord.com/invite/tatum). For more information about how to work with Tatum,
review the [online documentation](https://docs.tatum.io/).

## Installation & Usage

To install the Tatum SDK, simply clone this repository and load it with a [PSR-4](https://www.php-fig.org/psr/psr-4/) autoloader.
If you're having doubts, you can use the provided `autoload.php` file.

This SDK has no external dependencies in production. This means you can use this library in any PHP project even when you don't have access to Composer.

### Requirements

Please use `PHP 7.3` or later and the PHP extensions mentioned in the [`composer.json`](/composer.json) file.

## Getting Started

Please follow the [installation procedure](#installation--usage) then create an entrypoint PHP file with the following:

```php
<?php
// Import a PSR-4 autoloader
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

try {
    /** @var $walletTestnet \Tatum\Model\Wallet */
    $walletTestnet = $sdk
        ->testnet()
        ->api()
        ->bitcoin()
        ->btcGenerateWallet();

    /** @var $walletTestnetLocal \Tatum\Model\Wallet */
    $walletTestnetLocal = $sdk
        ->testnet()
        ->local()
        ->wallet()
        ->bitcoin()
        ->generateWallet($walletTestnet->getMnemonic());

    /** @var $walletMainnet \Tatum\Model\Wallet */
    $walletMainnet = $sdk
        ->mainnet()
        ->api()
        ->bitcoin()
        ->btcGenerateWallet();

    /** @var $walletMainnetLocal \Tatum\Model\Wallet */
    $walletMainnetLocal = $sdk
        ->mainnet()
        ->local()
        ->wallet()
        ->bitcoin()
        ->generateWallet($walletMainnet->getMnemonic());

    // Get the extended public key
    var_dump("TestNet", $walletTestnet->getXpub(), $walletTestnetLocal->getXpub());
    echo PHP_EOL;
    var_dump("MainNet", $walletMainnet->getXpub(), $walletMainnetLocal->getXpub());

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling bitcoin()->btcGenerateWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling bitcoin()->btcGenerateWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

## SDK Structure

The Tatum SDK uses a [fluent interface](https://en.wikipedia.org/wiki/Fluent_interface) so that you can jump right into 
building your application without having to go back to the documentation.

The SDK is built like a tree with its root in ```new \Tatum\Sdk()```. 

Tree branches are populated as needed just-in-time so the memory footprint is tiny.

### API Endpoints

You can access any of the API endpoints with the following syntax:

```php
// TestNet
(new \Tatum\Sdk())->testnet()->api();

// MainNet
(new \Tatum\Sdk())->mainnet()->api();
```

API | Method | Description
------------ | ------------- | -------------
*account()* | [**activateAccount()**](docs/Api/AccountApi.md#activateaccount) | Activate account
*account()* | [**blockAmount()**](docs/Api/AccountApi.md#blockamount) | Block an amount in an account
*account()* | [**createAccount()**](docs/Api/AccountApi.md#createaccount) | Create a virtual account
*account()* | [**createAccountBatch()**](docs/Api/AccountApi.md#createaccountbatch) | Create multiple accounts in a batch call
*account()* | [**deactivateAccount()**](docs/Api/AccountApi.md#deactivateaccount) | Deactivate account
*account()* | [**deleteAllBlockAmount()**](docs/Api/AccountApi.md#deleteallblockamount) | Unblock all blocked amounts in an account
*account()* | [**deleteBlockAmount()**](docs/Api/AccountApi.md#deleteblockamount) | Unblock a blocked amount in an account
*account()* | [**freezeAccount()**](docs/Api/AccountApi.md#freezeaccount) | Freeze account
*account()* | [**getAccountBalance()**](docs/Api/AccountApi.md#getaccountbalance) | Get account balance
*account()* | [**getAccountByAccountId()**](docs/Api/AccountApi.md#getaccountbyaccountid) | Get account by ID
*account()* | [**getAccounts()**](docs/Api/AccountApi.md#getaccounts) | List all accounts
*account()* | [**getAccountsByCustomerId()**](docs/Api/AccountApi.md#getaccountsbycustomerid) | List all customer accounts
*account()* | [**getAccountsCount()**](docs/Api/AccountApi.md#getaccountscount) | Count of found entities for get accounts request
*account()* | [**getBlockAmount()**](docs/Api/AccountApi.md#getblockamount) | Get blocked amounts in an account
*account()* | [**getBlockAmountById()**](docs/Api/AccountApi.md#getblockamountbyid) | Get blocked amount by ID
*account()* | [**unblockAmountWithTransaction()**](docs/Api/AccountApi.md#unblockamountwithtransaction) | Unblock an amount in an account and perform a transaction
*account()* | [**unfreezeAccount()**](docs/Api/AccountApi.md#unfreezeaccount) | Unfreeze account
*account()* | [**updateAccountByAccountId()**](docs/Api/AccountApi.md#updateaccountbyaccountid) | Update account
*algorand()* | [**algoNodeGetDriver()**](docs/Api/AlgorandApi.md#algonodegetdriver) | Access Algorand Algod GET node endpoints
*algorand()* | [**algoNodeIndexerGetDriver()**](docs/Api/AlgorandApi.md#algonodeindexergetdriver) | Access Algorand Indexer GET node endpoints
*algorand()* | [**algoNodePostDriver()**](docs/Api/AlgorandApi.md#algonodepostdriver) | Access Algorand Algod POST node endpoints
*algorand()* | [**algoandBroadcast()**](docs/Api/AlgorandApi.md#algoandbroadcast) | Broadcast signed Algorand transaction
*algorand()* | [**algorandBlockchainReceiveAsset()**](docs/Api/AlgorandApi.md#algorandblockchainreceiveasset) | Enable receiving asset on account
*algorand()* | [**algorandBlockchainTransfer()**](docs/Api/AlgorandApi.md#algorandblockchaintransfer) | Send Algos to an Algorand account
*algorand()* | [**algorandGenerateAddress()**](docs/Api/AlgorandApi.md#algorandgenerateaddress) | Generate Algorand account address from private key
*algorand()* | [**algorandGenerateWallet()**](docs/Api/AlgorandApi.md#algorandgeneratewallet) | Generate Algorand wallet
*algorand()* | [**algorandGetBalance()**](docs/Api/AlgorandApi.md#algorandgetbalance) | Get Algorand Account balance
*algorand()* | [**algorandGetBlock()**](docs/Api/AlgorandApi.md#algorandgetblock) | Get Algorand block by block round number
*algorand()* | [**algorandGetCurrentBlock()**](docs/Api/AlgorandApi.md#algorandgetcurrentblock) | Get current block number
*algorand()* | [**algorandGetPayTransactionsByFromTo()**](docs/Api/AlgorandApi.md#algorandgetpaytransactionsbyfromto) | Get Algorand Transactions between from and to
*algorand()* | [**algorandGetTransaction()**](docs/Api/AlgorandApi.md#algorandgettransaction) | Get Algorand Transaction
*auction()* | [**approveNftAuctionSpending()**](docs/Api/AuctionApi.md#approvenftauctionspending) | Approve NFT token spending for the Auction / Marketplace
*auction()* | [**bidOnAuction()**](docs/Api/AuctionApi.md#bidonauction) | Bid for asset on the NFT Auction
*auction()* | [**cancelAuction()**](docs/Api/AuctionApi.md#cancelauction) | Cancel auction of the asset on the NFT Auction
*auction()* | [**createAuction()**](docs/Api/AuctionApi.md#createauction) | Sell asset on the NFT Auction
*auction()* | [**generateAuction()**](docs/Api/AuctionApi.md#generateauction) | Create NFT Auction
*auction()* | [**getAuction()**](docs/Api/AuctionApi.md#getauction) | Get auction details from the NFT Auction
*auction()* | [**getAuctionFee()**](docs/Api/AuctionApi.md#getauctionfee) | Get NFT Auction fee
*auction()* | [**getAuctionFeeRecipient()**](docs/Api/AuctionApi.md#getauctionfeerecipient) | Get NFT Auction fee recipient
*auction()* | [**settleAuction()**](docs/Api/AuctionApi.md#settleauction) | Settle auction of the asset on the NFT Auction
*auction()* | [**updateAuctionFee()**](docs/Api/AuctionApi.md#updateauctionfee) | Update NFT Auction fee
*auction()* | [**updateAuctionFeeRecipient()**](docs/Api/AuctionApi.md#updateauctionfeerecipient) | Update NFT Auction fee recipient
*bNBBeaconChain()* | [**bnbBlockchainTransfer()**](docs/Api/BNBBeaconChainApi.md#bnbblockchaintransfer) | Send Binance / Binance Token from account to account
*bNBBeaconChain()* | [**bnbBroadcast()**](docs/Api/BNBBeaconChainApi.md#bnbbroadcast) | Broadcast signed BNB transaction
*bNBBeaconChain()* | [**bnbGenerateWallet()**](docs/Api/BNBBeaconChainApi.md#bnbgeneratewallet) | Generate Binance wallet
*bNBBeaconChain()* | [**bnbGetAccount()**](docs/Api/BNBBeaconChainApi.md#bnbgetaccount) | Get Binance Account
*bNBBeaconChain()* | [**bnbGetBlock()**](docs/Api/BNBBeaconChainApi.md#bnbgetblock) | Get Binance Transactions in Block
*bNBBeaconChain()* | [**bnbGetCurrentBlock()**](docs/Api/BNBBeaconChainApi.md#bnbgetcurrentblock) | Get Binance current block
*bNBBeaconChain()* | [**bnbGetTransaction()**](docs/Api/BNBBeaconChainApi.md#bnbgettransaction) | Get Binance Transaction
*bNBBeaconChain()* | [**bnbGetTxByAccount()**](docs/Api/BNBBeaconChainApi.md#bnbgettxbyaccount) | Get Binance Transactions By Address
*bNBSmartChain()* | [**bscBlockchainSmartContractInvocation()**](docs/Api/BNBSmartChainApi.md#bscblockchainsmartcontractinvocation) | Invoke a method in a smart contract on BNB Smart Chain
*bNBSmartChain()* | [**bscBlockchainTransfer()**](docs/Api/BNBSmartChainApi.md#bscblockchaintransfer) | Send BSC / BEP20 from account to account
*bNBSmartChain()* | [**bscBroadcast()**](docs/Api/BNBSmartChainApi.md#bscbroadcast) | Broadcast signed BSC transaction
*bNBSmartChain()* | [**bscGenerateAddress()**](docs/Api/BNBSmartChainApi.md#bscgenerateaddress) | Generate BSC account address from Extended public key
*bNBSmartChain()* | [**bscGenerateAddressPrivateKey()**](docs/Api/BNBSmartChainApi.md#bscgenerateaddressprivatekey) | Generate BSC private key
*bNBSmartChain()* | [**bscGenerateWallet()**](docs/Api/BNBSmartChainApi.md#bscgeneratewallet) | Generate BSC wallet
*bNBSmartChain()* | [**bscGetBalance()**](docs/Api/BNBSmartChainApi.md#bscgetbalance) | Get BSC Account balance
*bNBSmartChain()* | [**bscGetBlock()**](docs/Api/BNBSmartChainApi.md#bscgetblock) | Get BSC block by hash
*bNBSmartChain()* | [**bscGetCurrentBlock()**](docs/Api/BNBSmartChainApi.md#bscgetcurrentblock) | Get current block number
*bNBSmartChain()* | [**bscGetTransaction()**](docs/Api/BNBSmartChainApi.md#bscgettransaction) | Get BSC Transaction
*bNBSmartChain()* | [**bscGetTransactionCount()**](docs/Api/BNBSmartChainApi.md#bscgettransactioncount) | Get count of outgoing BSC transactions
*bNBSmartChain()* | [**bscWeb3Driver()**](docs/Api/BNBSmartChainApi.md#bscweb3driver) | Web3 HTTP driver
*bitcoin()* | [**btcBroadcast()**](docs/Api/BitcoinApi.md#btcbroadcast) | Broadcast a signed Bitcoin transaction
*bitcoin()* | [**btcGenerateAddress()**](docs/Api/BitcoinApi.md#btcgenerateaddress) | Generate a Bitcoin address from the wallet&#39;s extended public key
*bitcoin()* | [**btcGenerateAddressPrivateKey()**](docs/Api/BitcoinApi.md#btcgenerateaddressprivatekey) | Generate the private key for a Bitcoin address
*bitcoin()* | [**btcGenerateWallet()**](docs/Api/BitcoinApi.md#btcgeneratewallet) | Generate a Bitcoin wallet
*bitcoin()* | [**btcGetBalanceOfAddress()**](docs/Api/BitcoinApi.md#btcgetbalanceofaddress) | Get the balance of a Bitcoin address
*bitcoin()* | [**btcGetBlock()**](docs/Api/BitcoinApi.md#btcgetblock) | Get a Bitcoin block by its hash or height
*bitcoin()* | [**btcGetBlockChainInfo()**](docs/Api/BitcoinApi.md#btcgetblockchaininfo) | Get Bitcoin blockchain information
*bitcoin()* | [**btcGetBlockHash()**](docs/Api/BitcoinApi.md#btcgetblockhash) | Get the hash of a Bitcoin block
*bitcoin()* | [**btcGetMempool()**](docs/Api/BitcoinApi.md#btcgetmempool) | Get transactions from the Bitcoin mempool
*bitcoin()* | [**btcGetRawTransaction()**](docs/Api/BitcoinApi.md#btcgetrawtransaction) | Get a Bitcoin transaction by its hash
*bitcoin()* | [**btcGetTxByAddress()**](docs/Api/BitcoinApi.md#btcgettxbyaddress) | Get all transactions for a Bitcoin address
*bitcoin()* | [**btcGetUTXO()**](docs/Api/BitcoinApi.md#btcgetutxo) | Get information about a transaction output (UTXO) in a Bitcoin transaction
*bitcoin()* | [**btcRpcDriver()**](docs/Api/BitcoinApi.md#btcrpcdriver) | Connect to a Bitcoin node through an RPC driver
*bitcoin()* | [**btcTransferBlockchain()**](docs/Api/BitcoinApi.md#btctransferblockchain) | Send BTC to Bitcoin addresses
*bitcoinCash()* | [**bchBroadcast()**](docs/Api/BitcoinCashApi.md#bchbroadcast) | Broadcast signed Bitcoin Cash transaction
*bitcoinCash()* | [**bchGenerateAddress()**](docs/Api/BitcoinCashApi.md#bchgenerateaddress) | Generate Bitcoin Cash deposit address from Extended public key
*bitcoinCash()* | [**bchGenerateAddressPrivateKey()**](docs/Api/BitcoinCashApi.md#bchgenerateaddressprivatekey) | Generate Bitcoin Cash private key
*bitcoinCash()* | [**bchGenerateWallet()**](docs/Api/BitcoinCashApi.md#bchgeneratewallet) | Generate Bitcoin Cash wallet
*bitcoinCash()* | [**bchGetBlock()**](docs/Api/BitcoinCashApi.md#bchgetblock) | Get Bitcoin Cash Block by hash
*bitcoinCash()* | [**bchGetBlockChainInfo()**](docs/Api/BitcoinCashApi.md#bchgetblockchaininfo) | Get Bitcoin Cash Blockchain Information
*bitcoinCash()* | [**bchGetBlockHash()**](docs/Api/BitcoinCashApi.md#bchgetblockhash) | Get Bitcoin Cash Block hash
*bitcoinCash()* | [**bchGetRawTransaction()**](docs/Api/BitcoinCashApi.md#bchgetrawtransaction) | Get Bitcoin Cash Transaction by hash
*bitcoinCash()* | [**bchGetTxByAddress()**](docs/Api/BitcoinCashApi.md#bchgettxbyaddress) | Get Bitcoin Cash Transactions by address
*bitcoinCash()* | [**bchRpcDriver()**](docs/Api/BitcoinCashApi.md#bchrpcdriver) | JSON RPC HTTP driver
*bitcoinCash()* | [**bchTransferBlockchain()**](docs/Api/BitcoinCashApi.md#bchtransferblockchain) | Send BCH to Bitcoin Cash addresses
*blockchainAddresses()* | [**addressExists()**](docs/Api/BlockchainAddressesApi.md#addressexists) | Check whether a blockchain address is assigned to a virtual account
*blockchainAddresses()* | [**assignAddress()**](docs/Api/BlockchainAddressesApi.md#assignaddress) | Assign a blockchain address to a virtual account
*blockchainAddresses()* | [**generateDepositAddress()**](docs/Api/BlockchainAddressesApi.md#generatedepositaddress) | Create a deposit address for a virtual account
*blockchainAddresses()* | [**generateDepositAddressesBatch()**](docs/Api/BlockchainAddressesApi.md#generatedepositaddressesbatch) | Create multiple deposit addresses for a virtual account
*blockchainAddresses()* | [**getAllDepositAddresses()**](docs/Api/BlockchainAddressesApi.md#getalldepositaddresses) | Get all deposit addresses for a virtual account
*blockchainAddresses()* | [**removeAddress()**](docs/Api/BlockchainAddressesApi.md#removeaddress) | Remove a deposit address from a virtual account
*blockchainFees()* | [**bscEstimateGas()**](docs/Api/BlockchainFeesApi.md#bscestimategas) | Estimate BNB Smart Chain transaction fees
*blockchainFees()* | [**celoEstimateGas()**](docs/Api/BlockchainFeesApi.md#celoestimategas) | Estimate Celo Chain transaction fees
*blockchainFees()* | [**egldEstimateGas()**](docs/Api/BlockchainFeesApi.md#egldestimategas) | Estimate EGLD transaction fees
*blockchainFees()* | [**estimateFeeBlockchain()**](docs/Api/BlockchainFeesApi.md#estimatefeeblockchain) | Estimate the fee for a transaction
*blockchainFees()* | [**ethEstimateGas()**](docs/Api/BlockchainFeesApi.md#ethestimategas) | Estimate Ethereum transaction fees
*blockchainFees()* | [**ethEstimateGasBatch()**](docs/Api/BlockchainFeesApi.md#ethestimategasbatch) | Estimate multiple Ethereum transaction fees
*blockchainFees()* | [**kcsEstimateGas()**](docs/Api/BlockchainFeesApi.md#kcsestimategas) | Estimate KuCoin Community Chain transaction fees
*blockchainFees()* | [**klaytnEstimateGas()**](docs/Api/BlockchainFeesApi.md#klaytnestimategas) | Estimate Klaytn transaction fees
*blockchainFees()* | [**polygonEstimateGas()**](docs/Api/BlockchainFeesApi.md#polygonestimategas) | Estimate Polygon transaction fees
*blockchainFees()* | [**vetEstimateGas()**](docs/Api/BlockchainFeesApi.md#vetestimategas) | Estimate VeChain Gas for transaction
*blockchainFees()* | [**xdcEstimateGas()**](docs/Api/BlockchainFeesApi.md#xdcestimategas) | Estimate XinFin transaction fees
*blockchainOperations()* | [**adaTransferOffchain()**](docs/Api/BlockchainOperationsApi.md#adatransferoffchain) | Send ADA from a virtual account to the blockchain
*blockchainOperations()* | [**algoDeployErc20Ledger()**](docs/Api/BlockchainOperationsApi.md#algodeployerc20ledger) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**algoTransfer()**](docs/Api/BlockchainOperationsApi.md#algotransfer) | Send Algos from a virtual account to the blockchain
*blockchainOperations()* | [**bchTransfer()**](docs/Api/BlockchainOperationsApi.md#bchtransfer) | Send BCH from a virtual account to the blockchain
*blockchainOperations()* | [**bnbAssetOffchain()**](docs/Api/BlockchainOperationsApi.md#bnbassetoffchain) | Create a BNB-based asset
*blockchainOperations()* | [**bnbTransfer()**](docs/Api/BlockchainOperationsApi.md#bnbtransfer) | Send BNB from a virtual account to the blockchain
*blockchainOperations()* | [**bscDeployBep20()**](docs/Api/BlockchainOperationsApi.md#bscdeploybep20) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**bscOrBepTransfer()**](docs/Api/BlockchainOperationsApi.md#bscorbeptransfer) | Send BSC from a virtual account to the blockchain
*blockchainOperations()* | [**btcTransfer()**](docs/Api/BlockchainOperationsApi.md#btctransfer) | Send BTC from a virtual account to the blockchain
*blockchainOperations()* | [**celoDeployErc20Ledger()**](docs/Api/BlockchainOperationsApi.md#celodeployerc20ledger) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**celoOrErc20Transfer()**](docs/Api/BlockchainOperationsApi.md#celoorerc20transfer) | Send CELO from a virtual account to the blockchain
*blockchainOperations()* | [**createBep20()**](docs/Api/BlockchainOperationsApi.md#createbep20) | Register a new BNB Smart Chain BEP-20 token in the virtual account
*blockchainOperations()* | [**createCeloErc20()**](docs/Api/BlockchainOperationsApi.md#createceloerc20) | Register a new Celo ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**createErc20()**](docs/Api/BlockchainOperationsApi.md#createerc20) | Register a new Ethereum ERC-20 token in the virtual account
*blockchainOperations()* | [**createHrm20()**](docs/Api/BlockchainOperationsApi.md#createhrm20) | Register a new Harmony HRM-20 token in the virtual account
*blockchainOperations()* | [**createTrc()**](docs/Api/BlockchainOperationsApi.md#createtrc) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
*blockchainOperations()* | [**createXdc20()**](docs/Api/BlockchainOperationsApi.md#createxdc20) | Register a new XinFin ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**dogeTransfer()**](docs/Api/BlockchainOperationsApi.md#dogetransfer) | Send DOGE from a virtual account to the blockchain
*blockchainOperations()* | [**egldTransfer()**](docs/Api/BlockchainOperationsApi.md#egldtransfer) | Send EGLD from a virtual account to the blockchain
*blockchainOperations()* | [**ethDeployErc20()**](docs/Api/BlockchainOperationsApi.md#ethdeployerc20) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**ethTransfer()**](docs/Api/BlockchainOperationsApi.md#ethtransfer) | Send ETH from a virtual account to the blockchain
*blockchainOperations()* | [**ethTransferErc20()**](docs/Api/BlockchainOperationsApi.md#ethtransfererc20) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
*blockchainOperations()* | [**flowTransfer()**](docs/Api/BlockchainOperationsApi.md#flowtransfer) | Send FLOW from a virtual account to the blockchain
*blockchainOperations()* | [**kcsDeployErc20Ledger()**](docs/Api/BlockchainOperationsApi.md#kcsdeployerc20ledger) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**kcsTransfer()**](docs/Api/BlockchainOperationsApi.md#kcstransfer) | Send KCS from a virtual account to the blockchain
*blockchainOperations()* | [**klayDeployErc20()**](docs/Api/BlockchainOperationsApi.md#klaydeployerc20) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**klayTransfer()**](docs/Api/BlockchainOperationsApi.md#klaytransfer) | Send KLAY from a virtual account to the blockchain
*blockchainOperations()* | [**ltcTransfer()**](docs/Api/BlockchainOperationsApi.md#ltctransfer) | Send LTC from a virtual account to the blockchain
*blockchainOperations()* | [**oneDeployHrm20()**](docs/Api/BlockchainOperationsApi.md#onedeployhrm20) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**oneTransfer()**](docs/Api/BlockchainOperationsApi.md#onetransfer) | Send ONE from a virtual account to the blockchain
*blockchainOperations()* | [**polygonTransfer()**](docs/Api/BlockchainOperationsApi.md#polygontransfer) | Send MATIC from a virtual account to the blockchain
*blockchainOperations()* | [**registerErc20Token()**](docs/Api/BlockchainOperationsApi.md#registererc20token) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**solTransfer()**](docs/Api/BlockchainOperationsApi.md#soltransfer) | Send SOL from a virtual account to the blockchain
*blockchainOperations()* | [**storeCeloErc20Address()**](docs/Api/BlockchainOperationsApi.md#storeceloerc20address) | Set the contract address of a Celo ERC-20-equivalent token
*blockchainOperations()* | [**storeTokenAddress()**](docs/Api/BlockchainOperationsApi.md#storetokenaddress) | Set the contract address of an ERC-20 or ERC-20-equivalent token
*blockchainOperations()* | [**storeTrcAddress()**](docs/Api/BlockchainOperationsApi.md#storetrcaddress) | Set the contract address of a TRC-10 or TRC-20 token
*blockchainOperations()* | [**tronDeployTrc()**](docs/Api/BlockchainOperationsApi.md#trondeploytrc) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**tronTransferOffchain()**](docs/Api/BlockchainOperationsApi.md#trontransferoffchain) | Send TRON from a virtual account to the blockchain
*blockchainOperations()* | [**xdcDeployErc20()**](docs/Api/BlockchainOperationsApi.md#xdcdeployerc20) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**xdcTransfer()**](docs/Api/BlockchainOperationsApi.md#xdctransfer) | Send XDC from a virtual account to the blockchain
*blockchainOperations()* | [**xlmAssetOffchain()**](docs/Api/BlockchainOperationsApi.md#xlmassetoffchain) | Create an XLM-based asset
*blockchainOperations()* | [**xlmTransfer()**](docs/Api/BlockchainOperationsApi.md#xlmtransfer) | Send XLM from a virtual account to the blockchain
*blockchainOperations()* | [**xrpAssetOffchain()**](docs/Api/BlockchainOperationsApi.md#xrpassetoffchain) | Create XRP based Asset
*blockchainOperations()* | [**xrpTransfer()**](docs/Api/BlockchainOperationsApi.md#xrptransfer) | Send XRP from a virtual account to the blockchain
*blockchainStorage()* | [**getLog()**](docs/Api/BlockchainStorageApi.md#getlog) | Get log record
*blockchainStorage()* | [**storeLog()**](docs/Api/BlockchainStorageApi.md#storelog) | Store log record
*blockchainUtils()* | [**getAuctionEstimatedTime()**](docs/Api/BlockchainUtilsApi.md#getauctionestimatedtime) | Estimate the block height for a future point in time
*blockchainUtils()* | [**sCGetContractAddress()**](docs/Api/BlockchainUtilsApi.md#scgetcontractaddress) | Get the blockchain address of a smart contract by the deployment transaction ID
*cardano()* | [**adaBroadcast()**](docs/Api/CardanoApi.md#adabroadcast) | Broadcast signed Ada transaction
*cardano()* | [**adaGenerateAddress()**](docs/Api/CardanoApi.md#adagenerateaddress) | Generate Ada deposit address from Extended public key
*cardano()* | [**adaGenerateAddressPrivateKey()**](docs/Api/CardanoApi.md#adagenerateaddressprivatekey) | Generate Ada private key
*cardano()* | [**adaGenerateWallet()**](docs/Api/CardanoApi.md#adageneratewallet) | Generate Ada wallet
*cardano()* | [**adaGetAccount()**](docs/Api/CardanoApi.md#adagetaccount) | Gets a Ada account by address
*cardano()* | [**adaGetBlock()**](docs/Api/CardanoApi.md#adagetblock) | Get Block by hash or height
*cardano()* | [**adaGetBlockChainInfo()**](docs/Api/CardanoApi.md#adagetblockchaininfo) | Get Blockchain information
*cardano()* | [**adaGetRawTransaction()**](docs/Api/CardanoApi.md#adagetrawtransaction) | Get transaction by hash
*cardano()* | [**adaGetTxByAddress()**](docs/Api/CardanoApi.md#adagettxbyaddress) | Get transactions by address
*cardano()* | [**adaGetUTXOByAddress()**](docs/Api/CardanoApi.md#adagetutxobyaddress) | Get UTXOs by address
*cardano()* | [**adaTransferBlockchain()**](docs/Api/CardanoApi.md#adatransferblockchain) | Send ADA to Cardano addresses
*celo()* | [**celoBlockchainSmartContractInvocation()**](docs/Api/CeloApi.md#celoblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Celo
*celo()* | [**celoBlockchainTransfer()**](docs/Api/CeloApi.md#celoblockchaintransfer) | Send Celo / ERC20 from account to account
*celo()* | [**celoBroadcast()**](docs/Api/CeloApi.md#celobroadcast) | Broadcast signed Celo transaction
*celo()* | [**celoGenerateAddress()**](docs/Api/CeloApi.md#celogenerateaddress) | Generate Celo account address from Extended public key
*celo()* | [**celoGenerateAddressPrivateKey()**](docs/Api/CeloApi.md#celogenerateaddressprivatekey) | Generate Celo private key
*celo()* | [**celoGenerateWallet()**](docs/Api/CeloApi.md#celogeneratewallet) | Generate Celo wallet
*celo()* | [**celoGetBalance()**](docs/Api/CeloApi.md#celogetbalance) | Get Celo Account balance
*celo()* | [**celoGetBlock()**](docs/Api/CeloApi.md#celogetblock) | Get Celo block by hash
*celo()* | [**celoGetCurrentBlock()**](docs/Api/CeloApi.md#celogetcurrentblock) | Get current block number
*celo()* | [**celoGetTransaction()**](docs/Api/CeloApi.md#celogettransaction) | Get Celo Transaction
*celo()* | [**celoGetTransactionByAddress()**](docs/Api/CeloApi.md#celogettransactionbyaddress) | Get Celo transactions by address
*celo()* | [**celoGetTransactionCount()**](docs/Api/CeloApi.md#celogettransactioncount) | Get count of outgoing Celo transactions
*celo()* | [**celoWeb3Driver()**](docs/Api/CeloApi.md#celoweb3driver) | Web3 HTTP driver
*custodialManagedWallets()* | [**custodialCreateWallet()**](docs/Api/CustodialManagedWalletsApi.md#custodialcreatewallet) | Create managed address
*custodialManagedWallets()* | [**custodialDeleteWallet()**](docs/Api/CustodialManagedWalletsApi.md#custodialdeletewallet) | Delete managed address
*custodialManagedWallets()* | [**custodialGetWallet()**](docs/Api/CustodialManagedWalletsApi.md#custodialgetwallet) | Get managed address
*custodialManagedWallets()* | [**custodialGetWallets()**](docs/Api/CustodialManagedWalletsApi.md#custodialgetwallets) | Get managed addresses
*custodialManagedWallets()* | [**custodialTransferManagedAddress()**](docs/Api/CustodialManagedWalletsApi.md#custodialtransfermanagedaddress) | Sign and transfer using managed address
*customer()* | [**activateCustomer()**](docs/Api/CustomerApi.md#activatecustomer) | Activate customer
*customer()* | [**deactivateCustomer()**](docs/Api/CustomerApi.md#deactivatecustomer) | Deactivate customer
*customer()* | [**disableCustomer()**](docs/Api/CustomerApi.md#disablecustomer) | Disable customer
*customer()* | [**enableCustomer()**](docs/Api/CustomerApi.md#enablecustomer) | Enable customer
*customer()* | [**findAllCustomers()**](docs/Api/CustomerApi.md#findallcustomers) | List all customers
*customer()* | [**getCustomerByExternalOrInternalId()**](docs/Api/CustomerApi.md#getcustomerbyexternalorinternalid) | Get customer details
*customer()* | [**updateCustomer()**](docs/Api/CustomerApi.md#updatecustomer) | Update customer
*deposit()* | [**getDeposits()**](docs/Api/DepositApi.md#getdeposits) | List all deposits for product
*deposit()* | [**getDepositsCount()**](docs/Api/DepositApi.md#getdepositscount) | Count of found entities for get deposits request
*dogecoin()* | [**dogeBroadcast()**](docs/Api/DogecoinApi.md#dogebroadcast) | Broadcast signed Dogecoin transaction
*dogecoin()* | [**dogeGenerateAddress()**](docs/Api/DogecoinApi.md#dogegenerateaddress) | Generate Dogecoin deposit address from Extended public key
*dogecoin()* | [**dogeGenerateAddressPrivateKey()**](docs/Api/DogecoinApi.md#dogegenerateaddressprivatekey) | Generate Dogecoin private key
*dogecoin()* | [**dogeGenerateWallet()**](docs/Api/DogecoinApi.md#dogegeneratewallet) | Generate Dogecoin wallet
*dogecoin()* | [**dogeGetBlock()**](docs/Api/DogecoinApi.md#dogegetblock) | Get Dogecoin Block by hash or height
*dogecoin()* | [**dogeGetBlockChainInfo()**](docs/Api/DogecoinApi.md#dogegetblockchaininfo) | Get Dogecoin Blockchain Information
*dogecoin()* | [**dogeGetBlockHash()**](docs/Api/DogecoinApi.md#dogegetblockhash) | Get Dogecoin Block hash
*dogecoin()* | [**dogeGetMempool()**](docs/Api/DogecoinApi.md#dogegetmempool) | Get Mempool Transactions
*dogecoin()* | [**dogeGetRawTransaction()**](docs/Api/DogecoinApi.md#dogegetrawtransaction) | Get Dogecoin Transaction by hash
*dogecoin()* | [**dogeGetUTXO()**](docs/Api/DogecoinApi.md#dogegetutxo) | Get information about a transaction output (UTXO) in a Dogecoin transaction
*dogecoin()* | [**dogeRpcDriver()**](docs/Api/DogecoinApi.md#dogerpcdriver) | JSON RPC HTTP driver
*dogecoin()* | [**dogeTransferBlockchain()**](docs/Api/DogecoinApi.md#dogetransferblockchain) | Send DOGE to Dogecoin addresses
*elrond()* | [**eGldGetCurrentBlock()**](docs/Api/ElrondApi.md#egldgetcurrentblock) | Get current block number
*elrond()* | [**egldBlockchainTransfer()**](docs/Api/ElrondApi.md#egldblockchaintransfer) | Send EGLD from account to account
*elrond()* | [**egldBroadcast()**](docs/Api/ElrondApi.md#egldbroadcast) | Broadcast signed EGLD transaction
*elrond()* | [**egldGenerateAddress()**](docs/Api/ElrondApi.md#egldgenerateaddress) | Generate EGLD account address from mnemonic
*elrond()* | [**egldGenerateAddressPrivateKey()**](docs/Api/ElrondApi.md#egldgenerateaddressprivatekey) | Generate EGLD private key
*elrond()* | [**egldGenerateWallet()**](docs/Api/ElrondApi.md#egldgeneratewallet) | Generate EGLD wallet
*elrond()* | [**egldGetBalance()**](docs/Api/ElrondApi.md#egldgetbalance) | Get EGLD Account balance
*elrond()* | [**egldGetBlock()**](docs/Api/ElrondApi.md#egldgetblock) | Get EGLD block by hash
*elrond()* | [**egldGetTransaction()**](docs/Api/ElrondApi.md#egldgettransaction) | Get EGLD Transaction
*elrond()* | [**egldGetTransactionAddress()**](docs/Api/ElrondApi.md#egldgettransactionaddress) | Get count of outgoing EGLD transactions
*elrond()* | [**egldGetTransactionCount()**](docs/Api/ElrondApi.md#egldgettransactioncount) | Get count of outgoing EGLD transactions
*elrond()* | [**egldNodeGet()**](docs/Api/ElrondApi.md#egldnodeget) | Node HTTP driver
*elrond()* | [**egldNodePost()**](docs/Api/ElrondApi.md#egldnodepost) | Node HTTP driver
*ethereum()* | [**ethBlockchainSmartContractInvocation()**](docs/Api/EthereumApi.md#ethblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Ethereum
*ethereum()* | [**ethBlockchainTransfer()**](docs/Api/EthereumApi.md#ethblockchaintransfer) | Send Ethereum / ERC20 from account to account
*ethereum()* | [**ethBroadcast()**](docs/Api/EthereumApi.md#ethbroadcast) | Broadcast signed Ethereum transaction
*ethereum()* | [**ethGenerateAddress()**](docs/Api/EthereumApi.md#ethgenerateaddress) | Generate Ethereum account address from Extended public key
*ethereum()* | [**ethGenerateAddressPrivateKey()**](docs/Api/EthereumApi.md#ethgenerateaddressprivatekey) | Generate Ethereum private key
*ethereum()* | [**ethGenerateWallet()**](docs/Api/EthereumApi.md#ethgeneratewallet) | Generate Ethereum wallet
*ethereum()* | [**ethGetBalance()**](docs/Api/EthereumApi.md#ethgetbalance) | Get Ethereum account balance
*ethereum()* | [**ethGetBlock()**](docs/Api/EthereumApi.md#ethgetblock) | Get Ethereum block by hash
*ethereum()* | [**ethGetCurrentBlock()**](docs/Api/EthereumApi.md#ethgetcurrentblock) | Get current block number
*ethereum()* | [**ethGetInternalTransactionByAddress()**](docs/Api/EthereumApi.md#ethgetinternaltransactionbyaddress) | Get Ethereum internal transactions by address
*ethereum()* | [**ethGetTransaction()**](docs/Api/EthereumApi.md#ethgettransaction) | Get Ethereum Transaction
*ethereum()* | [**ethGetTransactionByAddress()**](docs/Api/EthereumApi.md#ethgettransactionbyaddress) | Get Ethereum transactions by address
*ethereum()* | [**ethGetTransactionCount()**](docs/Api/EthereumApi.md#ethgettransactioncount) | Get count of outgoing Ethereum transactions
*ethereum()* | [**ethWeb3Driver()**](docs/Api/EthereumApi.md#ethweb3driver) | Web3 HTTP driver
*exchangeRate()* | [**getExchangeRate()**](docs/Api/ExchangeRateApi.md#getexchangerate) | Get the current exchange rate for exchanging fiat/crypto assets
*flow()* | [**flowAddPubKeyToAddress()**](docs/Api/FlowApi.md#flowaddpubkeytoaddress) | Add public key to Flow address
*flow()* | [**flowCreateAddressFromPubKey()**](docs/Api/FlowApi.md#flowcreateaddressfrompubkey) | Create Flow address from public key
*flow()* | [**flowGenerateAddress()**](docs/Api/FlowApi.md#flowgenerateaddress) | Generate Flow address from Extended public key
*flow()* | [**flowGeneratePubKey()**](docs/Api/FlowApi.md#flowgeneratepubkey) | Generate Flow public key from Extended public key
*flow()* | [**flowGeneratePubKeyPrivateKey()**](docs/Api/FlowApi.md#flowgeneratepubkeyprivatekey) | Generate Flow private key
*flow()* | [**flowGenerateWallet()**](docs/Api/FlowApi.md#flowgeneratewallet) | Generate Flow wallet
*flow()* | [**flowGetAccount()**](docs/Api/FlowApi.md#flowgetaccount) | Get Flow account
*flow()* | [**flowGetBlock()**](docs/Api/FlowApi.md#flowgetblock) | Get Flow Block by hash or height
*flow()* | [**flowGetBlockChainInfo()**](docs/Api/FlowApi.md#flowgetblockchaininfo) | Get Flow current block number
*flow()* | [**flowGetBlockEvents()**](docs/Api/FlowApi.md#flowgetblockevents) | Get Flow events from blocks
*flow()* | [**flowGetRawTransaction()**](docs/Api/FlowApi.md#flowgetrawtransaction) | Get Flow Transaction by hash
*flow()* | [**flowTransferBlockchain()**](docs/Api/FlowApi.md#flowtransferblockchain) | Send Flow to blockchain addresses
*flow()* | [**flowTransferCustomBlockchain()**](docs/Api/FlowApi.md#flowtransfercustomblockchain) | Send arbitrary transaction to blockchain
*fungibleTokensERC20OrCompatible()* | [**erc20Approve()**](docs/Api/FungibleTokensERC20OrCompatibleApi.md#erc20approve) | Approve spending of fungible tokens
*fungibleTokensERC20OrCompatible()* | [**erc20Burn()**](docs/Api/FungibleTokensERC20OrCompatibleApi.md#erc20burn) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**erc20Deploy()**](docs/Api/FungibleTokensERC20OrCompatibleApi.md#erc20deploy) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**erc20GetBalance()**](docs/Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalance) | Get the number of fungible tokens from a specific smart contract that a blockchain address holds
*fungibleTokensERC20OrCompatible()* | [**erc20GetBalanceAddress()**](docs/Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalanceaddress) | Get the number of fungible tokens that a blockchain address holds across a blockchain
*fungibleTokensERC20OrCompatible()* | [**erc20GetTransactionByAddress()**](docs/Api/FungibleTokensERC20OrCompatibleApi.md#erc20gettransactionbyaddress) | Get fungible token transactions on a blockchain address
*fungibleTokensERC20OrCompatible()* | [**erc20Mint()**](docs/Api/FungibleTokensERC20OrCompatibleApi.md#erc20mint) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**erc20Transfer()**](docs/Api/FungibleTokensERC20OrCompatibleApi.md#erc20transfer) | Transfer fungible tokens
*gasPump()* | [**activateGasPumpAddresses()**](docs/Api/GasPumpApi.md#activategaspumpaddresses) | Activate gas pump addresses
*gasPump()* | [**activatedNotActivatedGasPumpAddresses()**](docs/Api/GasPumpApi.md#activatednotactivatedgaspumpaddresses) | Get the results of the address activation transaction
*gasPump()* | [**approveTransferCustodialWallet()**](docs/Api/GasPumpApi.md#approvetransfercustodialwallet) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**gasPumpAddressesActivatedOrNot()**](docs/Api/GasPumpApi.md#gaspumpaddressesactivatedornot) | Check whether the gas pump address with a specified index is activated
*gasPump()* | [**generateCustodialWallet()**](docs/Api/GasPumpApi.md#generatecustodialwallet) | Generate a custodial wallet address
*gasPump()* | [**generateCustodialWalletBatch()**](docs/Api/GasPumpApi.md#generatecustodialwalletbatch) | Generate a gas pump wallet address
*gasPump()* | [**precalculateGasPumpAddresses()**](docs/Api/GasPumpApi.md#precalculategaspumpaddresses) | Precalculate gas pump addresses
*gasPump()* | [**sCGetCustodialAddresses()**](docs/Api/GasPumpApi.md#scgetcustodialaddresses) | Get the custodial wallet address from the transaction
*gasPump()* | [**transferCustodialWallet()**](docs/Api/GasPumpApi.md#transfercustodialwallet) | Transfer an asset from a gas pump address
*gasPump()* | [**transferCustodialWalletBatch()**](docs/Api/GasPumpApi.md#transfercustodialwalletbatch) | Transfer multiple assets from a gas pump address
*harmony()* | [**oneBlockchainSmartContractInvocation()**](docs/Api/HarmonyApi.md#oneblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Harmony
*harmony()* | [**oneBlockchainTransfer()**](docs/Api/HarmonyApi.md#oneblockchaintransfer) | Send ONE / HRM20 from account to account
*harmony()* | [**oneBroadcast()**](docs/Api/HarmonyApi.md#onebroadcast) | Broadcast signed ONE transaction
*harmony()* | [**oneFormatAddress()**](docs/Api/HarmonyApi.md#oneformataddress) | Transform HEX address to Bech32 ONE address format
*harmony()* | [**oneGenerateAddress()**](docs/Api/HarmonyApi.md#onegenerateaddress) | Generate ONE account address from Extended public key
*harmony()* | [**oneGenerateAddressPrivateKey()**](docs/Api/HarmonyApi.md#onegenerateaddressprivatekey) | Generate ONE private key
*harmony()* | [**oneGenerateWallet()**](docs/Api/HarmonyApi.md#onegeneratewallet) | Generate ONE wallet
*harmony()* | [**oneGetBalance()**](docs/Api/HarmonyApi.md#onegetbalance) | Get ONE Account balance
*harmony()* | [**oneGetBlock()**](docs/Api/HarmonyApi.md#onegetblock) | Get ONE block by hash
*harmony()* | [**oneGetCurrentBlock()**](docs/Api/HarmonyApi.md#onegetcurrentblock) | Get current block number
*harmony()* | [**oneGetTransaction()**](docs/Api/HarmonyApi.md#onegettransaction) | Get ONE Transaction
*harmony()* | [**oneGetTransactionCount()**](docs/Api/HarmonyApi.md#onegettransactioncount) | Get count of outgoing ONE transactions
*harmony()* | [**oneWeb3Driver()**](docs/Api/HarmonyApi.md#oneweb3driver) | Web3 HTTP driver
*iPFS()* | [**getIPFSData()**](docs/Api/IPFSApi.md#getipfsdata) | Get file from IPFS
*iPFS()* | [**storeIPFS()**](docs/Api/IPFSApi.md#storeipfs) | Store data to IPFS
*keyManagementSystem()* | [**completePendingSignature()**](docs/Api/KeyManagementSystemApi.md#completependingsignature) | Complete pending transaction to sign
*keyManagementSystem()* | [**deletePendingTransactionToSign()**](docs/Api/KeyManagementSystemApi.md#deletependingtransactiontosign) | Delete transaction
*keyManagementSystem()* | [**getPendingTransactionToSign()**](docs/Api/KeyManagementSystemApi.md#getpendingtransactiontosign) | Get transaction details
*keyManagementSystem()* | [**getPendingTransactionsToSign()**](docs/Api/KeyManagementSystemApi.md#getpendingtransactionstosign) | Get pending transactions to sign
*keyManagementSystem()* | [**receivePendingTransactionsToSign()**](docs/Api/KeyManagementSystemApi.md#receivependingtransactionstosign) | Get pending transactions to sign
*klaytn()* | [**klaytnBlockchainSmartContractInvocation()**](docs/Api/KlaytnApi.md#klaytnblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Klaytn
*klaytn()* | [**klaytnBlockchainTransfer()**](docs/Api/KlaytnApi.md#klaytnblockchaintransfer) | Send KLAY from account to account
*klaytn()* | [**klaytnBroadcast()**](docs/Api/KlaytnApi.md#klaytnbroadcast) | Broadcast signed Klaytn transaction
*klaytn()* | [**klaytnGenerateAddress()**](docs/Api/KlaytnApi.md#klaytngenerateaddress) | Generate Klaytn account address from Extended public key
*klaytn()* | [**klaytnGenerateAddressPrivateKey()**](docs/Api/KlaytnApi.md#klaytngenerateaddressprivatekey) | Generate Klaytn private key
*klaytn()* | [**klaytnGenerateWallet()**](docs/Api/KlaytnApi.md#klaytngeneratewallet) | Generate Klaytn wallet
*klaytn()* | [**klaytnGetBalance()**](docs/Api/KlaytnApi.md#klaytngetbalance) | Get Klaytn Account balance
*klaytn()* | [**klaytnGetBlock()**](docs/Api/KlaytnApi.md#klaytngetblock) | Get Klaytn block by hash
*klaytn()* | [**klaytnGetCurrentBlock()**](docs/Api/KlaytnApi.md#klaytngetcurrentblock) | Get current block number
*klaytn()* | [**klaytnGetTransaction()**](docs/Api/KlaytnApi.md#klaytngettransaction) | Get Klaytn Transaction
*klaytn()* | [**klaytnGetTransactionCount()**](docs/Api/KlaytnApi.md#klaytngettransactioncount) | Get count of outgoing Klaytn transactions
*klaytn()* | [**klaytnWeb3Driver()**](docs/Api/KlaytnApi.md#klaytnweb3driver) | Web3 HTTP driver
*kuCoin()* | [**kcsBlockchainSmartContractInvocation()**](docs/Api/KuCoinApi.md#kcsblockchainsmartcontractinvocation) | Invoke a method in a smart contract on KuCoin Community Chain
*kuCoin()* | [**kcsBlockchainTransfer()**](docs/Api/KuCoinApi.md#kcsblockchaintransfer) | Send KCS from account to account
*kuCoin()* | [**kcsBroadcast()**](docs/Api/KuCoinApi.md#kcsbroadcast) | Broadcast signed Kcs transaction
*kuCoin()* | [**kcsGenerateAddress()**](docs/Api/KuCoinApi.md#kcsgenerateaddress) | Generate Kcs account address from Extended public key
*kuCoin()* | [**kcsGenerateAddressPrivateKey()**](docs/Api/KuCoinApi.md#kcsgenerateaddressprivatekey) | Generate Kcs private key
*kuCoin()* | [**kcsGenerateWallet()**](docs/Api/KuCoinApi.md#kcsgeneratewallet) | Generate Kcs wallet
*kuCoin()* | [**kcsGetBalance()**](docs/Api/KuCoinApi.md#kcsgetbalance) | Get Kcs Account balance
*kuCoin()* | [**kcsGetBlock()**](docs/Api/KuCoinApi.md#kcsgetblock) | Get Kcs block by hash
*kuCoin()* | [**kcsGetCurrentBlock()**](docs/Api/KuCoinApi.md#kcsgetcurrentblock) | Get current block number
*kuCoin()* | [**kcsGetTransaction()**](docs/Api/KuCoinApi.md#kcsgettransaction) | Get Kcs Transaction
*kuCoin()* | [**kcsGetTransactionCount()**](docs/Api/KuCoinApi.md#kcsgettransactioncount) | Get count of outgoing Kcs transactions
*kuCoin()* | [**kcsWeb3Driver()**](docs/Api/KuCoinApi.md#kcsweb3driver) | Web3 HTTP driver
*litecoin()* | [**ltcBroadcast()**](docs/Api/LitecoinApi.md#ltcbroadcast) | Broadcast signed Litecoin transaction
*litecoin()* | [**ltcGenerateAddress()**](docs/Api/LitecoinApi.md#ltcgenerateaddress) | Generate Litecoin deposit address from Extended public key
*litecoin()* | [**ltcGenerateAddressPrivateKey()**](docs/Api/LitecoinApi.md#ltcgenerateaddressprivatekey) | Generate Litecoin private key
*litecoin()* | [**ltcGenerateWallet()**](docs/Api/LitecoinApi.md#ltcgeneratewallet) | Generate Litecoin wallet
*litecoin()* | [**ltcGetBalanceOfAddress()**](docs/Api/LitecoinApi.md#ltcgetbalanceofaddress) | Get the balance of a Litecoin address
*litecoin()* | [**ltcGetBlock()**](docs/Api/LitecoinApi.md#ltcgetblock) | Get Litecoin Block by hash or height
*litecoin()* | [**ltcGetBlockChainInfo()**](docs/Api/LitecoinApi.md#ltcgetblockchaininfo) | Get Litecoin Blockchain Information
*litecoin()* | [**ltcGetBlockHash()**](docs/Api/LitecoinApi.md#ltcgetblockhash) | Get Litecoin Block hash
*litecoin()* | [**ltcGetMempool()**](docs/Api/LitecoinApi.md#ltcgetmempool) | Get Mempool Transactions
*litecoin()* | [**ltcGetRawTransaction()**](docs/Api/LitecoinApi.md#ltcgetrawtransaction) | Get Litecoin Transaction by hash
*litecoin()* | [**ltcGetTxByAddress()**](docs/Api/LitecoinApi.md#ltcgettxbyaddress) | Get Litecoin Transactions by address
*litecoin()* | [**ltcGetUTXO()**](docs/Api/LitecoinApi.md#ltcgetutxo) | Get information about a transaction output (UTXO) in a Litecoin transaction
*litecoin()* | [**ltcRpcDriver()**](docs/Api/LitecoinApi.md#ltcrpcdriver) | JSON RPC HTTP driver
*litecoin()* | [**ltcTransferBlockchain()**](docs/Api/LitecoinApi.md#ltctransferblockchain) | Send LTC to Litecoin addresses
*maliciousAddress()* | [**checkMalicousAddress()**](docs/Api/MaliciousAddressApi.md#checkmalicousaddress) | Check malicous address
*marketplace()* | [**buyAssetOnMarketplace()**](docs/Api/MarketplaceApi.md#buyassetonmarketplace) | Buy an asset on the NFT marketplace
*marketplace()* | [**cancelSellMarketplaceListing()**](docs/Api/MarketplaceApi.md#cancelsellmarketplacelisting) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**generateMarketplace()**](docs/Api/MarketplaceApi.md#generatemarketplace) | Create an NFT marketplace
*marketplace()* | [**getMarketplaceFee()**](docs/Api/MarketplaceApi.md#getmarketplacefee) | Get the NFT marketplace fee
*marketplace()* | [**getMarketplaceFeeRecipient()**](docs/Api/MarketplaceApi.md#getmarketplacefeerecipient) | Get the recipient of the NFT marketplace fee
*marketplace()* | [**getMarketplaceListing()**](docs/Api/MarketplaceApi.md#getmarketplacelisting) | Get information about a listing on the NFT marketplace
*marketplace()* | [**getMarketplaceListings()**](docs/Api/MarketplaceApi.md#getmarketplacelistings) | Get the listings of a certain type from the NFT marketplace
*marketplace()* | [**sellAssetOnMarketplace()**](docs/Api/MarketplaceApi.md#sellassetonmarketplace) | Sell an asset on the NFT marketplace
*marketplace()* | [**updateFee()**](docs/Api/MarketplaceApi.md#updatefee) | Update the NFT marketplace fee
*marketplace()* | [**updateFeeRecipient()**](docs/Api/MarketplaceApi.md#updatefeerecipient) | Update the recipient of the NFT marketplace fee
*multiTokensERC1155OrCompatible()* | [**addMultiTokenMinter()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#addmultitokenminter) | Add a Multi Token minter
*multiTokensERC1155OrCompatible()* | [**burnMultiToken()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitoken) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**burnMultiTokenBatch()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatch) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**deployMultiToken()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitoken) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**mintMultiToken()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitoken) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**mintMultiTokenBatch()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatch) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multiTokenGetAddressBalance()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetaddressbalance) | Get all Multi Tokens that a blockchain address holds
*multiTokensERC1155OrCompatible()* | [**multiTokenGetBalance()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalance) | Get the amount of a specific MultiToken that a blockchain address holds
*multiTokensERC1155OrCompatible()* | [**multiTokenGetBalanceBatch()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalancebatch) | Get the amount of one or multiple Multi Tokens for multiple blockchain addresses
*multiTokensERC1155OrCompatible()* | [**multiTokenGetContractAddress()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetcontractaddress) | Get the address of a Multi Token smart contract by its transaction hash
*multiTokensERC1155OrCompatible()* | [**multiTokenGetMetadata()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetmetadata) | Get Multi Token metadata
*multiTokensERC1155OrCompatible()* | [**multiTokenGetTransaction()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransaction) | Get a Multi Token transaction by its hash
*multiTokensERC1155OrCompatible()* | [**multiTokenGetTransactionByAddress()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransactionbyaddress) | Get Multi Token transactions on a blockchain address
*multiTokensERC1155OrCompatible()* | [**transferMultiToken()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitoken) | Transfer a Multi Token
*multiTokensERC1155OrCompatible()* | [**transferMultiTokenBatch()**](docs/Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatch) | Transfer multiple Multi Tokens
*nFTERC721OrCompatible()* | [**nftAddMinter()**](docs/Api/NFTERC721OrCompatibleApi.md#nftaddminter) | Add an NFT minter to an NFT smart contract
*nFTERC721OrCompatible()* | [**nftBurnErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftburnerc721) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftDeployErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftdeployerc721) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftGetBalanceErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgetbalanceerc721) | Get the NFTs from a specific smart contract that a blockchain address holds
*nFTERC721OrCompatible()* | [**nftGetContractAddress()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgetcontractaddress) | Get the address of an NFT smart contract by its transaction hash
*nFTERC721OrCompatible()* | [**nftGetMetadataErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgetmetadataerc721) | Get NFT metadata
*nFTERC721OrCompatible()* | [**nftGetProvenanceDataErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgetprovenancedataerc721) | Get NFT provenance information
*nFTERC721OrCompatible()* | [**nftGetRoyaltyErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgetroyaltyerc721) | Get NFT royalty information
*nFTERC721OrCompatible()* | [**nftGetTokensByAddressErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgettokensbyaddresserc721) | Get all NFTs that a blockchain address holds
*nFTERC721OrCompatible()* | [**nftGetTokensByCollectionErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgettokensbycollectionerc721) | Get all NFTs from a collection
*nFTERC721OrCompatible()* | [**nftGetTransactErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgettransacterc721) | Get an NFT transaction by its hash
*nFTERC721OrCompatible()* | [**nftGetTransactionByAddress()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgettransactionbyaddress) | Get NFT transactions on a blockchain address
*nFTERC721OrCompatible()* | [**nftGetTransactionByToken()**](docs/Api/NFTERC721OrCompatibleApi.md#nftgettransactionbytoken) | Get NFT transactions for an NFT
*nFTERC721OrCompatible()* | [**nftMintErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftminterc721) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintMultipleErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftmintmultipleerc721) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftTransferErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nfttransfererc721) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftUpdateCashbackErc721()**](docs/Api/NFTERC721OrCompatibleApi.md#nftupdatecashbackerc721) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**nftVerifyInCollection()**](docs/Api/NFTERC721OrCompatibleApi.md#nftverifyincollection) | Verify an NFT in an NFT collection on Solana
*nodeRPC()* | [**nodeJsonPostRpcDriver()**](docs/Api/NodeRPCApi.md#nodejsonpostrpcdriver) | Connect to the blockchain node through an RPC driver
*nodeRPC()* | [**nodeJsonRpcGetDriver()**](docs/Api/NodeRPCApi.md#nodejsonrpcgetdriver) | Connect to the blockchain node through an RPC driver
*nodeRPC()* | [**nodeJsonRpcPutDriver()**](docs/Api/NodeRPCApi.md#nodejsonrpcputdriver) | Connect to the blockchain node through an RPC driver
*notificationSubscriptions()* | [**createSubscription()**](docs/Api/NotificationSubscriptionsApi.md#createsubscription) | Create a subscription
*notificationSubscriptions()* | [**deleteSubscription()**](docs/Api/NotificationSubscriptionsApi.md#deletesubscription) | Cancel existing subscription
*notificationSubscriptions()* | [**disableWebHookHmac()**](docs/Api/NotificationSubscriptionsApi.md#disablewebhookhmac) | Disable HMAC webhook digest
*notificationSubscriptions()* | [**enableWebHookHmac()**](docs/Api/NotificationSubscriptionsApi.md#enablewebhookhmac) | Enable HMAC webhook digest
*notificationSubscriptions()* | [**getAllWebhooks()**](docs/Api/NotificationSubscriptionsApi.md#getallwebhooks) | List all executed webhooks
*notificationSubscriptions()* | [**getAllWebhooksCount()**](docs/Api/NotificationSubscriptionsApi.md#getallwebhookscount) | Count of found entities for get webhook request
*notificationSubscriptions()* | [**getSubscriptionReport()**](docs/Api/NotificationSubscriptionsApi.md#getsubscriptionreport) | Obtain report for subscription
*notificationSubscriptions()* | [**getSubscriptions()**](docs/Api/NotificationSubscriptionsApi.md#getsubscriptions) | List all active subscriptions
*notificationSubscriptions()* | [**getSubscriptionsCount()**](docs/Api/NotificationSubscriptionsApi.md#getsubscriptionscount) | Count of found entities for get webhook request
*orderBook()* | [**chartRequest()**](docs/Api/OrderBookApi.md#chartrequest) | Obtain chart data from historical closed trades
*orderBook()* | [**deleteAccountTrades()**](docs/Api/OrderBookApi.md#deleteaccounttrades) | Cancel all existing trades for account
*orderBook()* | [**deleteTrade()**](docs/Api/OrderBookApi.md#deletetrade) | Cancel existing trade
*orderBook()* | [**getBuyTrades()**](docs/Api/OrderBookApi.md#getbuytrades) | List all active buy trades
*orderBook()* | [**getBuyTradesBody()**](docs/Api/OrderBookApi.md#getbuytradesbody) | List all active buy trades
*orderBook()* | [**getHistoricalTrades()**](docs/Api/OrderBookApi.md#gethistoricaltrades) | List all historical trades
*orderBook()* | [**getHistoricalTradesBody()**](docs/Api/OrderBookApi.md#gethistoricaltradesbody) | List all historical trades
*orderBook()* | [**getMatchedTrades()**](docs/Api/OrderBookApi.md#getmatchedtrades) | List all matched orders from FUTURE_SELL/FUTURE_BUY trades
*orderBook()* | [**getSellTrades()**](docs/Api/OrderBookApi.md#getselltrades) | List all active sell trades
*orderBook()* | [**getSellTradesBody()**](docs/Api/OrderBookApi.md#getselltradesbody) | List all active sell trades
*orderBook()* | [**getTradeById()**](docs/Api/OrderBookApi.md#gettradebyid) | Get existing trade
*orderBook()* | [**storeTrade()**](docs/Api/OrderBookApi.md#storetrade) | Store buy / sell trade
*polygon()* | [**polygonBlockchainSmartContractInvocation()**](docs/Api/PolygonApi.md#polygonblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Polygon
*polygon()* | [**polygonBlockchainTransfer()**](docs/Api/PolygonApi.md#polygonblockchaintransfer) | Send MATIC from account to account
*polygon()* | [**polygonBroadcast()**](docs/Api/PolygonApi.md#polygonbroadcast) | Broadcast signed Polygon transaction
*polygon()* | [**polygonGenerateAddress()**](docs/Api/PolygonApi.md#polygongenerateaddress) | Generate Polygon account address from Extended public key
*polygon()* | [**polygonGenerateAddressPrivateKey()**](docs/Api/PolygonApi.md#polygongenerateaddressprivatekey) | Generate Polygon private key
*polygon()* | [**polygonGenerateWallet()**](docs/Api/PolygonApi.md#polygongeneratewallet) | Generate Polygon wallet
*polygon()* | [**polygonGetBalance()**](docs/Api/PolygonApi.md#polygongetbalance) | Get Polygon Account balance
*polygon()* | [**polygonGetBlock()**](docs/Api/PolygonApi.md#polygongetblock) | Get Polygon block by hash
*polygon()* | [**polygonGetCurrentBlock()**](docs/Api/PolygonApi.md#polygongetcurrentblock) | Get current block number
*polygon()* | [**polygonGetTransaction()**](docs/Api/PolygonApi.md#polygongettransaction) | Get Polygon Transaction
*polygon()* | [**polygonGetTransactionByAddress()**](docs/Api/PolygonApi.md#polygongettransactionbyaddress) | Get Polygon transactions by address
*polygon()* | [**polygonGetTransactionCount()**](docs/Api/PolygonApi.md#polygongettransactioncount) | Get count of outgoing Polygon transactions
*polygon()* | [**polygonWeb3Driver()**](docs/Api/PolygonApi.md#polygonweb3driver) | Web3 HTTP driver
*serviceUtils()* | [**freezeApiKey()**](docs/Api/ServiceUtilsApi.md#freezeapikey) | Freeze API Key
*serviceUtils()* | [**getCredits()**](docs/Api/ServiceUtilsApi.md#getcredits) | Get information about your credit consumption for the last month
*serviceUtils()* | [**getVersion()**](docs/Api/ServiceUtilsApi.md#getversion) | Get API version
*serviceUtils()* | [**unfreezeApiKey()**](docs/Api/ServiceUtilsApi.md#unfreezeapikey) | Unfreeze API Key
*solana()* | [**solanaBlockchainTransfer()**](docs/Api/SolanaApi.md#solanablockchaintransfer) | Send SOL from account to account
*solana()* | [**solanaBroadcastConfirm()**](docs/Api/SolanaApi.md#solanabroadcastconfirm) | Broadcast and confirm signed Solana transaction
*solana()* | [**solanaGenerateWallet()**](docs/Api/SolanaApi.md#solanageneratewallet) | Generate Solana wallet
*solana()* | [**solanaGetBalance()**](docs/Api/SolanaApi.md#solanagetbalance) | Get Solana Account balance
*solana()* | [**solanaGetBlock()**](docs/Api/SolanaApi.md#solanagetblock) | Get Solana block by number
*solana()* | [**solanaGetCurrentBlock()**](docs/Api/SolanaApi.md#solanagetcurrentblock) | Get current block number
*solana()* | [**solanaGetTransaction()**](docs/Api/SolanaApi.md#solanagettransaction) | Get Solana Transaction
*solana()* | [**solanaWeb3Driver()**](docs/Api/SolanaApi.md#solanaweb3driver) | JSON RPC HTTP driver
*stellar()* | [**xlmBroadcast()**](docs/Api/StellarApi.md#xlmbroadcast) | Broadcast signed XLM transaction
*stellar()* | [**xlmGetAccountInfo()**](docs/Api/StellarApi.md#xlmgetaccountinfo) | Get XLM Account info
*stellar()* | [**xlmGetAccountTx()**](docs/Api/StellarApi.md#xlmgetaccounttx) | Get XLM Account transactions
*stellar()* | [**xlmGetFee()**](docs/Api/StellarApi.md#xlmgetfee) | Get actual XLM fee
*stellar()* | [**xlmGetLastClosedLedger()**](docs/Api/StellarApi.md#xlmgetlastclosedledger) | Get XLM Blockchain Information
*stellar()* | [**xlmGetLedger()**](docs/Api/StellarApi.md#xlmgetledger) | Get XLM Blockchain Ledger by sequence
*stellar()* | [**xlmGetLedgerTx()**](docs/Api/StellarApi.md#xlmgetledgertx) | Get XLM Blockchain Transactions in Ledger
*stellar()* | [**xlmGetTransaction()**](docs/Api/StellarApi.md#xlmgettransaction) | Get XLM Transaction by hash
*stellar()* | [**xlmTransferBlockchain()**](docs/Api/StellarApi.md#xlmtransferblockchain) | Send XLM from address to address
*stellar()* | [**xlmTrustLineBlockchain()**](docs/Api/StellarApi.md#xlmtrustlineblockchain) | Create / Update / Delete XLM trust line
*stellar()* | [**xlmWallet()**](docs/Api/StellarApi.md#xlmwallet) | Generate XLM account
*transaction()* | [**getTransactions()**](docs/Api/TransactionApi.md#gettransactions) | Find transactions within the ledger.
*transaction()* | [**getTransactionsByAccountId()**](docs/Api/TransactionApi.md#gettransactionsbyaccountid) | Find transactions for account.
*transaction()* | [**getTransactionsByCustomerId()**](docs/Api/TransactionApi.md#gettransactionsbycustomerid) | Find transactions for a customer across all of the customer&#39;s accounts.
*transaction()* | [**getTransactionsByReference()**](docs/Api/TransactionApi.md#gettransactionsbyreference) | Find transactions with a given reference across all accounts.
*transaction()* | [**sendTransaction()**](docs/Api/TransactionApi.md#sendtransaction) | Send payment
*transaction()* | [**sendTransactionBatch()**](docs/Api/TransactionApi.md#sendtransactionbatch) | Send payment in batch
*tron()* | [**generateTronwallet()**](docs/Api/TronApi.md#generatetronwallet) | Generate a TRON wallet
*tron()* | [**tronAccountTx()**](docs/Api/TronApi.md#tronaccounttx) | Get all transactions for a TRON account
*tron()* | [**tronAccountTx20()**](docs/Api/TronApi.md#tronaccounttx20) | Get TRC-20 transactions for a TRON account
*tron()* | [**tronBroadcast()**](docs/Api/TronApi.md#tronbroadcast) | Broadcast a TRON transaction
*tron()* | [**tronCreateTrc10()**](docs/Api/TronApi.md#troncreatetrc10) | Create a TRC-10 token
*tron()* | [**tronCreateTrc20()**](docs/Api/TronApi.md#troncreatetrc20) | Create a TRC-20 token
*tron()* | [**tronFreeze()**](docs/Api/TronApi.md#tronfreeze) | Freeze the balance of a TRON account
*tron()* | [**tronGenerateAddress()**](docs/Api/TronApi.md#trongenerateaddress) | Generate a TRON address from the wallet&#39;s extended public key
*tron()* | [**tronGenerateAddressPrivateKey()**](docs/Api/TronApi.md#trongenerateaddressprivatekey) | Generate the private key for a TRON address
*tron()* | [**tronGetAccount()**](docs/Api/TronApi.md#trongetaccount) | Get the TRON account by its address
*tron()* | [**tronGetBlock()**](docs/Api/TronApi.md#trongetblock) | Get a TRON block by its hash or height
*tron()* | [**tronGetCurrentBlock()**](docs/Api/TronApi.md#trongetcurrentblock) | Get the current TRON block
*tron()* | [**tronGetTransaction()**](docs/Api/TronApi.md#trongettransaction) | Get a TRON transaction by its hash
*tron()* | [**tronTransfer()**](docs/Api/TronApi.md#trontransfer) | Send TRX to a TRON account
*tron()* | [**tronTransferTrc10()**](docs/Api/TronApi.md#trontransfertrc10) | Send TRC-10 tokens to a TRON account
*tron()* | [**tronTransferTrc20()**](docs/Api/TronApi.md#trontransfertrc20) | Send TRC-20 tokens to a TRON account
*tron()* | [**tronTrc10Detail()**](docs/Api/TronApi.md#trontrc10detail) | Get information about a TRC-10 token
*veChain()* | [**vetBlockchainTransfer()**](docs/Api/VeChainApi.md#vetblockchaintransfer) | Send VeChain from account to account
*veChain()* | [**vetBroadcast()**](docs/Api/VeChainApi.md#vetbroadcast) | Broadcast signed VeChain transaction
*veChain()* | [**vetGenerateAddress()**](docs/Api/VeChainApi.md#vetgenerateaddress) | Generate VeChain account address from Extended public key
*veChain()* | [**vetGenerateAddressPrivateKey()**](docs/Api/VeChainApi.md#vetgenerateaddressprivatekey) | Generate VeChain private key
*veChain()* | [**vetGenerateWallet()**](docs/Api/VeChainApi.md#vetgeneratewallet) | Generate VeChain wallet
*veChain()* | [**vetGetBalance()**](docs/Api/VeChainApi.md#vetgetbalance) | Get VeChain Account balance
*veChain()* | [**vetGetBlock()**](docs/Api/VeChainApi.md#vetgetblock) | Get VeChain Block by hash
*veChain()* | [**vetGetCurrentBlock()**](docs/Api/VeChainApi.md#vetgetcurrentblock) | Get VeChain current block
*veChain()* | [**vetGetEnergy()**](docs/Api/VeChainApi.md#vetgetenergy) | Get VeChain Account energy (VTHO)
*veChain()* | [**vetGetTransaction()**](docs/Api/VeChainApi.md#vetgettransaction) | Get VeChain Transaction
*veChain()* | [**vetGetTransactionReceipt()**](docs/Api/VeChainApi.md#vetgettransactionreceipt) | Get VeChain Transaction Receipt
*virtualAccountBlockchainFees()* | [**offchainEstimateFee()**](docs/Api/VirtualAccountBlockchainFeesApi.md#offchainestimatefee) | Estimate ledger to blockchain transaction fee
*virtualCurrency()* | [**createCurrency()**](docs/Api/VirtualCurrencyApi.md#createcurrency) | Create new virtual currency
*virtualCurrency()* | [**getCurrency()**](docs/Api/VirtualCurrencyApi.md#getcurrency) | Get virtual currency
*virtualCurrency()* | [**mintCurrency()**](docs/Api/VirtualCurrencyApi.md#mintcurrency) | Create new supply of virtual currency
*virtualCurrency()* | [**revokeCurrency()**](docs/Api/VirtualCurrencyApi.md#revokecurrency) | Destroy supply of virtual currency
*virtualCurrency()* | [**updateCurrency()**](docs/Api/VirtualCurrencyApi.md#updatecurrency) | Update virtual currency
*withdrawal()* | [**broadcastBlockchainTransaction()**](docs/Api/WithdrawalApi.md#broadcastblockchaintransaction) | Broadcast signed transaction and complete withdrawal
*withdrawal()* | [**cancelInProgressWithdrawal()**](docs/Api/WithdrawalApi.md#cancelinprogresswithdrawal) | Cancel withdrawal
*withdrawal()* | [**completeWithdrawal()**](docs/Api/WithdrawalApi.md#completewithdrawal) | Complete withdrawal
*withdrawal()* | [**getWithdrawals()**](docs/Api/WithdrawalApi.md#getwithdrawals) | Get withdrawals
*withdrawal()* | [**storeWithdrawal()**](docs/Api/WithdrawalApi.md#storewithdrawal) | Store withdrawal
*xRP()* | [**xrpAccountSettings()**](docs/Api/XRPApi.md#xrpaccountsettings) | Modify XRP account
*xRP()* | [**xrpBroadcast()**](docs/Api/XRPApi.md#xrpbroadcast) | Broadcast signed XRP transaction
*xRP()* | [**xrpGetAccountBalance()**](docs/Api/XRPApi.md#xrpgetaccountbalance) | Get Account Balance
*xRP()* | [**xrpGetAccountInfo()**](docs/Api/XRPApi.md#xrpgetaccountinfo) | Get Account info
*xRP()* | [**xrpGetAccountTx()**](docs/Api/XRPApi.md#xrpgetaccounttx) | Get Account transactions
*xRP()* | [**xrpGetFee()**](docs/Api/XRPApi.md#xrpgetfee) | Get actual Blockchain fee
*xRP()* | [**xrpGetLastClosedLedger()**](docs/Api/XRPApi.md#xrpgetlastclosedledger) | Get XRP Blockchain Information
*xRP()* | [**xrpGetLedger()**](docs/Api/XRPApi.md#xrpgetledger) | Get Ledger
*xRP()* | [**xrpGetTransaction()**](docs/Api/XRPApi.md#xrpgettransaction) | Get XRP Transaction by hash
*xRP()* | [**xrpTransferBlockchain()**](docs/Api/XRPApi.md#xrptransferblockchain) | Send XRP from address to address
*xRP()* | [**xrpTrustLineBlockchain()**](docs/Api/XRPApi.md#xrptrustlineblockchain) | Create / Update / Delete XRP trust line
*xRP()* | [**xrpWallet()**](docs/Api/XRPApi.md#xrpwallet) | Generate XRP account
*xinFin()* | [**xdcBlockchainSmartContractInvocation()**](docs/Api/XinFinApi.md#xdcblockchainsmartcontractinvocation) | Invoke a method in a smart contract on XinFin
*xinFin()* | [**xdcBlockchainTransfer()**](docs/Api/XinFinApi.md#xdcblockchaintransfer) | Send XDC / ERC20 from account to account
*xinFin()* | [**xdcBroadcast()**](docs/Api/XinFinApi.md#xdcbroadcast) | Broadcast signed XDC transaction
*xinFin()* | [**xdcGenerateAddress()**](docs/Api/XinFinApi.md#xdcgenerateaddress) | Generate XDC account address from Extended public key
*xinFin()* | [**xdcGenerateAddressPrivateKey()**](docs/Api/XinFinApi.md#xdcgenerateaddressprivatekey) | Generate XDC private key
*xinFin()* | [**xdcGenerateWallet()**](docs/Api/XinFinApi.md#xdcgeneratewallet) | Generate XDC wallet
*xinFin()* | [**xdcGetBalance()**](docs/Api/XinFinApi.md#xdcgetbalance) | Get XDC Account balance
*xinFin()* | [**xdcGetBlock()**](docs/Api/XinFinApi.md#xdcgetblock) | Get XDC block by hash
*xinFin()* | [**xdcGetCurrentBlock()**](docs/Api/XinFinApi.md#xdcgetcurrentblock) | Get current block number
*xinFin()* | [**xdcGetTransaction()**](docs/Api/XinFinApi.md#xdcgettransaction) | Get XDC Transaction
*xinFin()* | [**xdcGetTransactionCount()**](docs/Api/XinFinApi.md#xdcgettransactioncount) | Get count of outgoing XDC transactions
*xinFin()* | [**xdcWeb3Driver()**](docs/Api/XinFinApi.md#xdcweb3driver) | Web3 HTTP driver


### Local Endpoints

#### Local Wallet

Local Wallet operations

You can access any of the Local Wallet endpoints with the following syntax:

```php
// TestNet
(new \Tatum\Sdk())->testnet()->local()->wallet();

// MainNet
(new \Tatum\Sdk())->mainnet()->local()->wallet();
```

Blockchain | Method | Description
------------ | ------------- | -------------
*bitcoin()* | [**generateWallet()**](docs/Local/Wallet/Bitcoin.md#generateWallet) | Generate wallet
*bitcoin()* | [**generateAddressFromXpub()**](docs/Local/Wallet/Bitcoin.md#generateAddressFromXpub) | Generate address from xPub and index
*bitcoin()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/Bitcoin.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*bitcoin()* | [**generatePrivateKey()**](docs/Local/Wallet/Bitcoin.md#generatePrivateKey) | Generate private key from mnemonic and index
*bitcoinCash()* | [**generateWallet()**](docs/Local/Wallet/BitcoinCash.md#generateWallet) | Generate wallet
*bitcoinCash()* | [**generateAddressFromXpub()**](docs/Local/Wallet/BitcoinCash.md#generateAddressFromXpub) | Generate address from xPub and index
*bitcoinCash()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/BitcoinCash.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*bitcoinCash()* | [**generatePrivateKey()**](docs/Local/Wallet/BitcoinCash.md#generatePrivateKey) | Generate private key from mnemonic and index
*dogecoin()* | [**generateWallet()**](docs/Local/Wallet/Dogecoin.md#generateWallet) | Generate wallet
*dogecoin()* | [**generateAddressFromXpub()**](docs/Local/Wallet/Dogecoin.md#generateAddressFromXpub) | Generate address from xPub and index
*dogecoin()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/Dogecoin.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*dogecoin()* | [**generatePrivateKey()**](docs/Local/Wallet/Dogecoin.md#generatePrivateKey) | Generate private key from mnemonic and index
*litecoin()* | [**generateWallet()**](docs/Local/Wallet/Litecoin.md#generateWallet) | Generate wallet
*litecoin()* | [**generateAddressFromXpub()**](docs/Local/Wallet/Litecoin.md#generateAddressFromXpub) | Generate address from xPub and index
*litecoin()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/Litecoin.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*litecoin()* | [**generatePrivateKey()**](docs/Local/Wallet/Litecoin.md#generatePrivateKey) | Generate private key from mnemonic and index
*ethereum()* | [**generateWallet()**](docs/Local/Wallet/Ethereum.md#generateWallet) | Generate wallet
*ethereum()* | [**generateAddressFromXpub()**](docs/Local/Wallet/Ethereum.md#generateAddressFromXpub) | Generate address from xPub and index
*ethereum()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/Ethereum.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*ethereum()* | [**generatePrivateKey()**](docs/Local/Wallet/Ethereum.md#generatePrivateKey) | Generate private key from mnemonic and index
*bsc()* | [**generateWallet()**](docs/Local/Wallet/BSC.md#generateWallet) | Generate wallet
*bsc()* | [**generateAddressFromXpub()**](docs/Local/Wallet/BSC.md#generateAddressFromXpub) | Generate address from xPub and index
*bsc()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/BSC.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*bsc()* | [**generatePrivateKey()**](docs/Local/Wallet/BSC.md#generatePrivateKey) | Generate private key from mnemonic and index
*celo()* | [**generateWallet()**](docs/Local/Wallet/Celo.md#generateWallet) | Generate wallet
*celo()* | [**generateAddressFromXpub()**](docs/Local/Wallet/Celo.md#generateAddressFromXpub) | Generate address from xPub and index
*celo()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/Celo.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*celo()* | [**generatePrivateKey()**](docs/Local/Wallet/Celo.md#generatePrivateKey) | Generate private key from mnemonic and index
*harmony()* | [**generateWallet()**](docs/Local/Wallet/Harmony.md#generateWallet) | Generate wallet
*harmony()* | [**generateAddressFromXpub()**](docs/Local/Wallet/Harmony.md#generateAddressFromXpub) | Generate address from xPub and index
*harmony()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/Harmony.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*harmony()* | [**generatePrivateKey()**](docs/Local/Wallet/Harmony.md#generatePrivateKey) | Generate private key from mnemonic and index
*kcs()* | [**generateWallet()**](docs/Local/Wallet/KCS.md#generateWallet) | Generate wallet
*kcs()* | [**generateAddressFromXpub()**](docs/Local/Wallet/KCS.md#generateAddressFromXpub) | Generate address from xPub and index
*kcs()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/KCS.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*kcs()* | [**generatePrivateKey()**](docs/Local/Wallet/KCS.md#generatePrivateKey) | Generate private key from mnemonic and index
*klaytn()* | [**generateWallet()**](docs/Local/Wallet/Klaytn.md#generateWallet) | Generate wallet
*klaytn()* | [**generateAddressFromXpub()**](docs/Local/Wallet/Klaytn.md#generateAddressFromXpub) | Generate address from xPub and index
*klaytn()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/Klaytn.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*klaytn()* | [**generatePrivateKey()**](docs/Local/Wallet/Klaytn.md#generatePrivateKey) | Generate private key from mnemonic and index
*polygon()* | [**generateWallet()**](docs/Local/Wallet/Polygon.md#generateWallet) | Generate wallet
*polygon()* | [**generateAddressFromXpub()**](docs/Local/Wallet/Polygon.md#generateAddressFromXpub) | Generate address from xPub and index
*polygon()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/Polygon.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*polygon()* | [**generatePrivateKey()**](docs/Local/Wallet/Polygon.md#generatePrivateKey) | Generate private key from mnemonic and index
*tron()* | [**generateWallet()**](docs/Local/Wallet/Tron.md#generateWallet) | Generate wallet
*tron()* | [**generateAddressFromXpub()**](docs/Local/Wallet/Tron.md#generateAddressFromXpub) | Generate address from xPub and index
*tron()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/Tron.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*tron()* | [**generatePrivateKey()**](docs/Local/Wallet/Tron.md#generatePrivateKey) | Generate private key from mnemonic and index
*vechain()* | [**generateWallet()**](docs/Local/Wallet/VeChain.md#generateWallet) | Generate wallet
*vechain()* | [**generateAddressFromXpub()**](docs/Local/Wallet/VeChain.md#generateAddressFromXpub) | Generate address from xPub and index
*vechain()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/VeChain.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*vechain()* | [**generatePrivateKey()**](docs/Local/Wallet/VeChain.md#generatePrivateKey) | Generate private key from mnemonic and index
*xdc()* | [**generateWallet()**](docs/Local/Wallet/XDC.md#generateWallet) | Generate wallet
*xdc()* | [**generateAddressFromXpub()**](docs/Local/Wallet/XDC.md#generateAddressFromXpub) | Generate address from xPub and index
*xdc()* | [**generateAddressFromPrivateKey()**](docs/Local/Wallet/XDC.md#generateAddressFromPrivateKey) | Generate address from xPub and index
*xdc()* | [**generatePrivateKey()**](docs/Local/Wallet/XDC.md#generatePrivateKey) | Generate private key from mnemonic and index


#### Local Transaction

Local Transaction Signing

You can access any of the Local Transaction endpoints with the following syntax:

```php
// TestNet
(new \Tatum\Sdk())->testnet()->local()->transaction();

// MainNet
(new \Tatum\Sdk())->mainnet()->local()->transaction();
```

Blockchain | Method | Description
------------ | ------------- | -------------
*bitcoin()* | [**sign()**](docs/Local/Transaction/Bitcoin.md#sign) | Sign transaction
*bitcoinCash()* | [**sign()**](docs/Local/Transaction/BitcoinCash.md#sign) | Sign transaction
*dogecoin()* | [**sign()**](docs/Local/Transaction/Dogecoin.md#sign) | Sign transaction
*litecoin()* | [**sign()**](docs/Local/Transaction/Litecoin.md#sign) | Sign transaction
*ethereum()* | [**sign()**](docs/Local/Transaction/Ethereum.md#sign) | Sign transaction


## Tests

To run the unit tests, use:

```bash
composer install
vendor/bin/phpunit
```
## About this repository

This PHP SDK is automatically generated by the [Tatum SDK Generator](https://github.com/tatumio):

- API version: `3.17.0`
- Package version: `2.0.0`
- PHP [Versions](https://www.php.net/supported-versions.php): `7.3`, `7.4`, `8.0`, `8.1`, `8.2`