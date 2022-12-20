# Tatum - PHP SDK

## Table of Contents
- [API Endpoints](#api-endpoints)
- [Local Endpoints](#local-endpoints)
    - [Wallet](#local-wallet)
    - [Transaction](#local-transaction)

The Tatum SDK uses a [fluent interface](https://en.wikipedia.org/wiki/Fluent_interface) so that you can jump right into 
building your application without having to go back to the documentation.

The SDK is built like a tree with its root in ```new \Tatum\Sdk()```. 

Tree branches are populated as needed just-in-time so the memory footprint is tiny.

## API Endpoints

You can access any of the API endpoints with the following syntax:

```php
<?php

// TestNet
(new \Tatum\Sdk())->testnet()->api();

// MainNet
(new \Tatum\Sdk())->mainnet()->api();
```

API | Method | Description
------------ | ------------- | -------------
*account()* | [**activateAccount()**](./Api/AccountApi.md#activateaccount) | Activate account
*account()* | [**blockAmount()**](./Api/AccountApi.md#blockamount) | Block an amount in an account
*account()* | [**createAccount()**](./Api/AccountApi.md#createaccount) | Create a virtual account
*account()* | [**createAccountBatch()**](./Api/AccountApi.md#createaccountbatch) | Create multiple accounts in a batch call
*account()* | [**deactivateAccount()**](./Api/AccountApi.md#deactivateaccount) | Deactivate account
*account()* | [**deleteAllBlockAmount()**](./Api/AccountApi.md#deleteallblockamount) | Unblock all blocked amounts in an account
*account()* | [**deleteBlockAmount()**](./Api/AccountApi.md#deleteblockamount) | Unblock a blocked amount in an account
*account()* | [**freezeAccount()**](./Api/AccountApi.md#freezeaccount) | Freeze account
*account()* | [**getAccountBalance()**](./Api/AccountApi.md#getaccountbalance) | Get account balance
*account()* | [**getAccountByAccountId()**](./Api/AccountApi.md#getaccountbyaccountid) | Get account by ID
*account()* | [**getAccounts()**](./Api/AccountApi.md#getaccounts) | List all accounts
*account()* | [**getAccountsByCustomerId()**](./Api/AccountApi.md#getaccountsbycustomerid) | List all customer accounts
*account()* | [**getAccountsCount()**](./Api/AccountApi.md#getaccountscount) | Count of found entities for get accounts request
*account()* | [**getBlockAmount()**](./Api/AccountApi.md#getblockamount) | Get blocked amounts in an account
*account()* | [**getBlockAmountById()**](./Api/AccountApi.md#getblockamountbyid) | Get blocked amount by ID
*account()* | [**unblockAmountWithTransaction()**](./Api/AccountApi.md#unblockamountwithtransaction) | Unblock an amount in an account and perform a transaction
*account()* | [**unfreezeAccount()**](./Api/AccountApi.md#unfreezeaccount) | Unfreeze account
*account()* | [**updateAccountByAccountId()**](./Api/AccountApi.md#updateaccountbyaccountid) | Update account
*algorand()* | [**algoNodeGetDriver()**](./Api/AlgorandApi.md#algonodegetdriver) | Access Algorand Algod GET node endpoints
*algorand()* | [**algoNodeIndexerGetDriver()**](./Api/AlgorandApi.md#algonodeindexergetdriver) | Access Algorand Indexer GET node endpoints
*algorand()* | [**algoNodePostDriver()**](./Api/AlgorandApi.md#algonodepostdriver) | Access Algorand Algod POST node endpoints
*algorand()* | [**algoandBroadcast()**](./Api/AlgorandApi.md#algoandbroadcast) | Broadcast signed Algorand transaction
*algorand()* | [**algorandBlockchainReceiveAsset()**](./Api/AlgorandApi.md#algorandblockchainreceiveasset) | Enable receiving asset on account
*algorand()* | [**algorandBlockchainTransfer()**](./Api/AlgorandApi.md#algorandblockchaintransfer) | Send Algos to an Algorand account
*algorand()* | [**algorandGenerateAddress()**](./Api/AlgorandApi.md#algorandgenerateaddress) | Generate Algorand account address from private key
*algorand()* | [**algorandGenerateWallet()**](./Api/AlgorandApi.md#algorandgeneratewallet) | Generate Algorand wallet
*algorand()* | [**algorandGetBalance()**](./Api/AlgorandApi.md#algorandgetbalance) | Get Algorand Account balance
*algorand()* | [**algorandGetBlock()**](./Api/AlgorandApi.md#algorandgetblock) | Get Algorand block by block round number
*algorand()* | [**algorandGetCurrentBlock()**](./Api/AlgorandApi.md#algorandgetcurrentblock) | Get current block number
*algorand()* | [**algorandGetPayTransactionsByFromTo()**](./Api/AlgorandApi.md#algorandgetpaytransactionsbyfromto) | Get Algorand Transactions between from and to
*algorand()* | [**algorandGetTransaction()**](./Api/AlgorandApi.md#algorandgettransaction) | Get Algorand Transaction
*auction()* | [**approveNftAuctionSpending()**](./Api/AuctionApi.md#approvenftauctionspending) | Allow the NFT auction or marketplace to transfer an asset
*auction()* | [**bidOnAuction()**](./Api/AuctionApi.md#bidonauction) | Bid for an asset at the NFT auction
*auction()* | [**cancelAuction()**](./Api/AuctionApi.md#cancelauction) | Cancel the selling of an asset at the NFT auction
*auction()* | [**createAuction()**](./Api/AuctionApi.md#createauction) | Sell an asset at the NFT auction
*auction()* | [**generateAuction()**](./Api/AuctionApi.md#generateauction) | Create an NFT auction
*auction()* | [**getAuction()**](./Api/AuctionApi.md#getauction) | Get information about an auctioned asset at the NFT auction
*auction()* | [**getAuctionFee()**](./Api/AuctionApi.md#getauctionfee) | Get the NFT auction fee
*auction()* | [**getAuctionFeeRecipient()**](./Api/AuctionApi.md#getauctionfeerecipient) | Get the recipient of the NFT auction fee
*auction()* | [**settleAuction()**](./Api/AuctionApi.md#settleauction) | Settle an NFT auction
*auction()* | [**updateAuctionFee()**](./Api/AuctionApi.md#updateauctionfee) | Update the NFT auction fee
*auction()* | [**updateAuctionFeeRecipient()**](./Api/AuctionApi.md#updateauctionfeerecipient) | Update the recipient of the NFT auction fee
*bNBBeaconChain()* | [**bnbBlockchainTransfer()**](./Api/BNBBeaconChainApi.md#bnbblockchaintransfer) | Send Binance / Binance Token from account to account
*bNBBeaconChain()* | [**bnbBroadcast()**](./Api/BNBBeaconChainApi.md#bnbbroadcast) | Broadcast signed BNB transaction
*bNBBeaconChain()* | [**bnbGenerateWallet()**](./Api/BNBBeaconChainApi.md#bnbgeneratewallet) | Generate Binance wallet
*bNBBeaconChain()* | [**bnbGetAccount()**](./Api/BNBBeaconChainApi.md#bnbgetaccount) | Get Binance Account
*bNBBeaconChain()* | [**bnbGetBlock()**](./Api/BNBBeaconChainApi.md#bnbgetblock) | Get Binance Transactions in Block
*bNBBeaconChain()* | [**bnbGetCurrentBlock()**](./Api/BNBBeaconChainApi.md#bnbgetcurrentblock) | Get Binance current block
*bNBBeaconChain()* | [**bnbGetTransaction()**](./Api/BNBBeaconChainApi.md#bnbgettransaction) | Get Binance Transaction
*bNBBeaconChain()* | [**bnbGetTxByAccount()**](./Api/BNBBeaconChainApi.md#bnbgettxbyaccount) | Get Binance Transactions By Address
*bNBSmartChain()* | [**bscBlockchainSmartContractInvocation()**](./Api/BNBSmartChainApi.md#bscblockchainsmartcontractinvocation) | Invoke a method in a smart contract on BNB Smart Chain
*bNBSmartChain()* | [**bscBlockchainTransfer()**](./Api/BNBSmartChainApi.md#bscblockchaintransfer) | Send BSC / BEP20 from account to account
*bNBSmartChain()* | [**bscBroadcast()**](./Api/BNBSmartChainApi.md#bscbroadcast) | Broadcast signed BSC transaction
*bNBSmartChain()* | [**bscGenerateAddress()**](./Api/BNBSmartChainApi.md#bscgenerateaddress) | Generate BSC account address from Extended public key
*bNBSmartChain()* | [**bscGenerateAddressPrivateKey()**](./Api/BNBSmartChainApi.md#bscgenerateaddressprivatekey) | Generate BSC private key
*bNBSmartChain()* | [**bscGenerateWallet()**](./Api/BNBSmartChainApi.md#bscgeneratewallet) | Generate BSC wallet
*bNBSmartChain()* | [**bscGetBalance()**](./Api/BNBSmartChainApi.md#bscgetbalance) | Get BSC Account balance
*bNBSmartChain()* | [**bscGetBlock()**](./Api/BNBSmartChainApi.md#bscgetblock) | Get BSC block by hash
*bNBSmartChain()* | [**bscGetCurrentBlock()**](./Api/BNBSmartChainApi.md#bscgetcurrentblock) | Get current block number
*bNBSmartChain()* | [**bscGetTransaction()**](./Api/BNBSmartChainApi.md#bscgettransaction) | Get BSC Transaction
*bNBSmartChain()* | [**bscGetTransactionCount()**](./Api/BNBSmartChainApi.md#bscgettransactioncount) | Get count of outgoing BSC transactions
*bNBSmartChain()* | [**bscWeb3Driver()**](./Api/BNBSmartChainApi.md#bscweb3driver) | Web3 HTTP driver
*bitcoin()* | [**btcBroadcast()**](./Api/BitcoinApi.md#btcbroadcast) | Broadcast a signed Bitcoin transaction
*bitcoin()* | [**btcGenerateAddress()**](./Api/BitcoinApi.md#btcgenerateaddress) | Generate a Bitcoin address from the wallet&#39;s extended public key
*bitcoin()* | [**btcGenerateAddressPrivateKey()**](./Api/BitcoinApi.md#btcgenerateaddressprivatekey) | Generate the private key for a Bitcoin address
*bitcoin()* | [**btcGenerateWallet()**](./Api/BitcoinApi.md#btcgeneratewallet) | Generate a Bitcoin wallet
*bitcoin()* | [**btcGetBalanceOfAddress()**](./Api/BitcoinApi.md#btcgetbalanceofaddress) | Get the balance of a Bitcoin address
*bitcoin()* | [**btcGetBlock()**](./Api/BitcoinApi.md#btcgetblock) | Get a Bitcoin block by its hash or height
*bitcoin()* | [**btcGetBlockChainInfo()**](./Api/BitcoinApi.md#btcgetblockchaininfo) | Get Bitcoin blockchain information
*bitcoin()* | [**btcGetBlockHash()**](./Api/BitcoinApi.md#btcgetblockhash) | Get the hash of a Bitcoin block
*bitcoin()* | [**btcGetMempool()**](./Api/BitcoinApi.md#btcgetmempool) | Get transactions from the Bitcoin mempool
*bitcoin()* | [**btcGetRawTransaction()**](./Api/BitcoinApi.md#btcgetrawtransaction) | Get a Bitcoin transaction by its hash
*bitcoin()* | [**btcGetTxByAddress()**](./Api/BitcoinApi.md#btcgettxbyaddress) | Get all transactions for a Bitcoin address
*bitcoin()* | [**btcGetUTXO()**](./Api/BitcoinApi.md#btcgetutxo) | Get information about a transaction output (UTXO) in a Bitcoin transaction
*bitcoin()* | [**btcRpcDriver()**](./Api/BitcoinApi.md#btcrpcdriver) | Connect to a Bitcoin node through an RPC driver
*bitcoin()* | [**btcTransferBlockchain()**](./Api/BitcoinApi.md#btctransferblockchain) | Send BTC to Bitcoin addresses
*bitcoinCash()* | [**bchBroadcast()**](./Api/BitcoinCashApi.md#bchbroadcast) | Broadcast signed Bitcoin Cash transaction
*bitcoinCash()* | [**bchGenerateAddress()**](./Api/BitcoinCashApi.md#bchgenerateaddress) | Generate Bitcoin Cash deposit address from Extended public key
*bitcoinCash()* | [**bchGenerateAddressPrivateKey()**](./Api/BitcoinCashApi.md#bchgenerateaddressprivatekey) | Generate Bitcoin Cash private key
*bitcoinCash()* | [**bchGenerateWallet()**](./Api/BitcoinCashApi.md#bchgeneratewallet) | Generate Bitcoin Cash wallet
*bitcoinCash()* | [**bchGetBlock()**](./Api/BitcoinCashApi.md#bchgetblock) | Get Bitcoin Cash Block by hash
*bitcoinCash()* | [**bchGetBlockChainInfo()**](./Api/BitcoinCashApi.md#bchgetblockchaininfo) | Get Bitcoin Cash Blockchain Information
*bitcoinCash()* | [**bchGetBlockHash()**](./Api/BitcoinCashApi.md#bchgetblockhash) | Get Bitcoin Cash Block hash
*bitcoinCash()* | [**bchGetRawTransaction()**](./Api/BitcoinCashApi.md#bchgetrawtransaction) | Get Bitcoin Cash Transaction by hash
*bitcoinCash()* | [**bchGetTxByAddress()**](./Api/BitcoinCashApi.md#bchgettxbyaddress) | Get Bitcoin Cash Transactions by address
*bitcoinCash()* | [**bchRpcDriver()**](./Api/BitcoinCashApi.md#bchrpcdriver) | JSON RPC HTTP driver
*bitcoinCash()* | [**bchTransferBlockchain()**](./Api/BitcoinCashApi.md#bchtransferblockchain) | Send BCH to Bitcoin Cash addresses
*blockchainAddresses()* | [**addressExists()**](./Api/BlockchainAddressesApi.md#addressexists) | Check whether a blockchain address is assigned to a virtual account
*blockchainAddresses()* | [**assignAddress()**](./Api/BlockchainAddressesApi.md#assignaddress) | Assign a blockchain address to a virtual account
*blockchainAddresses()* | [**generateDepositAddress()**](./Api/BlockchainAddressesApi.md#generatedepositaddress) | Create a deposit address for a virtual account
*blockchainAddresses()* | [**generateDepositAddressesBatch()**](./Api/BlockchainAddressesApi.md#generatedepositaddressesbatch) | Create multiple deposit addresses for a virtual account
*blockchainAddresses()* | [**getAllDepositAddresses()**](./Api/BlockchainAddressesApi.md#getalldepositaddresses) | Get all deposit addresses for a virtual account
*blockchainAddresses()* | [**removeAddress()**](./Api/BlockchainAddressesApi.md#removeaddress) | Remove a deposit address from a virtual account
*blockchainFees()* | [**bscEstimateGas()**](./Api/BlockchainFeesApi.md#bscestimategas) | Estimate BNB Smart Chain transaction fees
*blockchainFees()* | [**celoEstimateGas()**](./Api/BlockchainFeesApi.md#celoestimategas) | Estimate Celo Chain transaction fees
*blockchainFees()* | [**egldEstimateGas()**](./Api/BlockchainFeesApi.md#egldestimategas) | Estimate EGLD transaction fees
*blockchainFees()* | [**estimateFeeBlockchain()**](./Api/BlockchainFeesApi.md#estimatefeeblockchain) | Estimate the fee for a transaction
*blockchainFees()* | [**ethEstimateGas()**](./Api/BlockchainFeesApi.md#ethestimategas) | Estimate Ethereum transaction fees
*blockchainFees()* | [**ethEstimateGasBatch()**](./Api/BlockchainFeesApi.md#ethestimategasbatch) | Estimate multiple Ethereum transaction fees
*blockchainFees()* | [**getBlockchainFee()**](./Api/BlockchainFeesApi.md#getblockchainfee) | Get recommended blockchain fee / gas price
*blockchainFees()* | [**kcsEstimateGas()**](./Api/BlockchainFeesApi.md#kcsestimategas) | Estimate KuCoin Community Chain transaction fees
*blockchainFees()* | [**klaytnEstimateGas()**](./Api/BlockchainFeesApi.md#klaytnestimategas) | Estimate Klaytn transaction fees
*blockchainFees()* | [**polygonEstimateGas()**](./Api/BlockchainFeesApi.md#polygonestimategas) | Estimate Polygon transaction fees
*blockchainFees()* | [**vetEstimateGas()**](./Api/BlockchainFeesApi.md#vetestimategas) | Estimate VeChain Gas for transaction
*blockchainFees()* | [**xdcEstimateGas()**](./Api/BlockchainFeesApi.md#xdcestimategas) | Estimate XinFin transaction fees
*blockchainOperations()* | [**adaTransferOffchain()**](./Api/BlockchainOperationsApi.md#adatransferoffchain) | Send ADA from a virtual account to the blockchain
*blockchainOperations()* | [**algoDeployErc20Ledger()**](./Api/BlockchainOperationsApi.md#algodeployerc20ledger) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**algoTransfer()**](./Api/BlockchainOperationsApi.md#algotransfer) | Send ALGO from a virtual account to the blockchain
*blockchainOperations()* | [**bchTransfer()**](./Api/BlockchainOperationsApi.md#bchtransfer) | Send BCH from a virtual account to the blockchain
*blockchainOperations()* | [**bnbAssetOffchain()**](./Api/BlockchainOperationsApi.md#bnbassetoffchain) | Create a BNB-based asset
*blockchainOperations()* | [**bnbTransfer()**](./Api/BlockchainOperationsApi.md#bnbtransfer) | Send BNB from a virtual account to the blockchain
*blockchainOperations()* | [**bscDeployBep20()**](./Api/BlockchainOperationsApi.md#bscdeploybep20) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**bscOrBepTransfer()**](./Api/BlockchainOperationsApi.md#bscorbeptransfer) | Send BSC from a virtual account to the blockchain
*blockchainOperations()* | [**btcTransfer()**](./Api/BlockchainOperationsApi.md#btctransfer) | Send BTC from a virtual account to the blockchain
*blockchainOperations()* | [**celoDeployErc20Ledger()**](./Api/BlockchainOperationsApi.md#celodeployerc20ledger) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**celoOrErc20Transfer()**](./Api/BlockchainOperationsApi.md#celoorerc20transfer) | Send CELO from a virtual account to the blockchain
*blockchainOperations()* | [**createBep20()**](./Api/BlockchainOperationsApi.md#createbep20) | Register a new BNB Smart Chain BEP-20 token in the virtual account
*blockchainOperations()* | [**createCeloErc20()**](./Api/BlockchainOperationsApi.md#createceloerc20) | Register a new Celo ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**createErc20()**](./Api/BlockchainOperationsApi.md#createerc20) | Register a new Ethereum ERC-20 token in the virtual account
*blockchainOperations()* | [**createHrm20()**](./Api/BlockchainOperationsApi.md#createhrm20) | Register a new Harmony HRM-20 token in the virtual account
*blockchainOperations()* | [**createTrc()**](./Api/BlockchainOperationsApi.md#createtrc) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
*blockchainOperations()* | [**createXdc20()**](./Api/BlockchainOperationsApi.md#createxdc20) | Register a new XinFin ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**dogeTransfer()**](./Api/BlockchainOperationsApi.md#dogetransfer) | Send DOGE from a virtual account to the blockchain
*blockchainOperations()* | [**egldTransfer()**](./Api/BlockchainOperationsApi.md#egldtransfer) | Send EGLD from a virtual account to the blockchain
*blockchainOperations()* | [**ethDeployErc20()**](./Api/BlockchainOperationsApi.md#ethdeployerc20) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**ethTransfer()**](./Api/BlockchainOperationsApi.md#ethtransfer) | Send ETH from a virtual account to the blockchain
*blockchainOperations()* | [**ethTransferErc20()**](./Api/BlockchainOperationsApi.md#ethtransfererc20) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
*blockchainOperations()* | [**flowTransfer()**](./Api/BlockchainOperationsApi.md#flowtransfer) | Send FLOW from a virtual account to the blockchain
*blockchainOperations()* | [**kcsDeployErc20Ledger()**](./Api/BlockchainOperationsApi.md#kcsdeployerc20ledger) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**kcsTransfer()**](./Api/BlockchainOperationsApi.md#kcstransfer) | Send KCS from a virtual account to the blockchain
*blockchainOperations()* | [**klayDeployErc20()**](./Api/BlockchainOperationsApi.md#klaydeployerc20) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**klayTransfer()**](./Api/BlockchainOperationsApi.md#klaytransfer) | Send KLAY from a virtual account to the blockchain
*blockchainOperations()* | [**ltcTransfer()**](./Api/BlockchainOperationsApi.md#ltctransfer) | Send LTC from a virtual account to the blockchain
*blockchainOperations()* | [**oneDeployHrm20()**](./Api/BlockchainOperationsApi.md#onedeployhrm20) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**oneTransfer()**](./Api/BlockchainOperationsApi.md#onetransfer) | Send ONE from a virtual account to the blockchain
*blockchainOperations()* | [**polygonTransfer()**](./Api/BlockchainOperationsApi.md#polygontransfer) | Send MATIC from a virtual account to the blockchain
*blockchainOperations()* | [**registerErc20Token()**](./Api/BlockchainOperationsApi.md#registererc20token) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**solTransfer()**](./Api/BlockchainOperationsApi.md#soltransfer) | Send SOL from a virtual account to the blockchain
*blockchainOperations()* | [**storeCeloErc20Address()**](./Api/BlockchainOperationsApi.md#storeceloerc20address) | Set the contract address of a Celo ERC-20-equivalent token
*blockchainOperations()* | [**storeTokenAddress()**](./Api/BlockchainOperationsApi.md#storetokenaddress) | Set the contract address of an ERC-20 or ERC-20-equivalent token
*blockchainOperations()* | [**storeTrcAddress()**](./Api/BlockchainOperationsApi.md#storetrcaddress) | Set the contract address of a TRC-10 or TRC-20 token
*blockchainOperations()* | [**tronDeployTrc()**](./Api/BlockchainOperationsApi.md#trondeploytrc) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**tronTransferOffchain()**](./Api/BlockchainOperationsApi.md#trontransferoffchain) | Send TRON from a virtual account to the blockchain
*blockchainOperations()* | [**xdcDeployErc20()**](./Api/BlockchainOperationsApi.md#xdcdeployerc20) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**xdcTransfer()**](./Api/BlockchainOperationsApi.md#xdctransfer) | Send XDC from a virtual account to the blockchain
*blockchainOperations()* | [**xlmAssetOffchain()**](./Api/BlockchainOperationsApi.md#xlmassetoffchain) | Create an XLM-based asset
*blockchainOperations()* | [**xlmTransfer()**](./Api/BlockchainOperationsApi.md#xlmtransfer) | Send XLM from a virtual account to the blockchain
*blockchainOperations()* | [**xrpAssetOffchain()**](./Api/BlockchainOperationsApi.md#xrpassetoffchain) | Create XRP based Asset
*blockchainOperations()* | [**xrpTransfer()**](./Api/BlockchainOperationsApi.md#xrptransfer) | Send XRP from a virtual account to the blockchain
*blockchainStorage()* | [**getLog()**](./Api/BlockchainStorageApi.md#getlog) | Get a log record
*blockchainStorage()* | [**storeLog()**](./Api/BlockchainStorageApi.md#storelog) | Store a log record
*blockchainUtils()* | [**getAuctionEstimatedTime()**](./Api/BlockchainUtilsApi.md#getauctionestimatedtime) | Estimate the block height for a future point in time
*blockchainUtils()* | [**sCGetContractAddress()**](./Api/BlockchainUtilsApi.md#scgetcontractaddress) | Get the blockchain address of a smart contract by the deployment transaction ID
*cardano()* | [**adaBroadcast()**](./Api/CardanoApi.md#adabroadcast) | Broadcast signed Ada transaction
*cardano()* | [**adaGenerateAddress()**](./Api/CardanoApi.md#adagenerateaddress) | Generate Ada deposit address from Extended public key
*cardano()* | [**adaGenerateAddressPrivateKey()**](./Api/CardanoApi.md#adagenerateaddressprivatekey) | Generate Ada private key
*cardano()* | [**adaGenerateWallet()**](./Api/CardanoApi.md#adageneratewallet) | Generate Ada wallet
*cardano()* | [**adaGetAccount()**](./Api/CardanoApi.md#adagetaccount) | Gets a Ada account by address
*cardano()* | [**adaGetBlock()**](./Api/CardanoApi.md#adagetblock) | Get Block by hash or height
*cardano()* | [**adaGetBlockChainInfo()**](./Api/CardanoApi.md#adagetblockchaininfo) | Get Blockchain information
*cardano()* | [**adaGetRawTransaction()**](./Api/CardanoApi.md#adagetrawtransaction) | Get transaction by hash
*cardano()* | [**adaGetTxByAddress()**](./Api/CardanoApi.md#adagettxbyaddress) | Get transactions by address
*cardano()* | [**adaGetUTXOByAddress()**](./Api/CardanoApi.md#adagetutxobyaddress) | Get UTXOs by address
*cardano()* | [**adaTransferBlockchain()**](./Api/CardanoApi.md#adatransferblockchain) | Send ADA to Cardano addresses
*celo()* | [**celoBlockchainSmartContractInvocation()**](./Api/CeloApi.md#celoblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Celo
*celo()* | [**celoBlockchainTransfer()**](./Api/CeloApi.md#celoblockchaintransfer) | Send Celo / ERC20 from account to account
*celo()* | [**celoBroadcast()**](./Api/CeloApi.md#celobroadcast) | Broadcast signed Celo transaction
*celo()* | [**celoGenerateAddress()**](./Api/CeloApi.md#celogenerateaddress) | Generate Celo account address from Extended public key
*celo()* | [**celoGenerateAddressPrivateKey()**](./Api/CeloApi.md#celogenerateaddressprivatekey) | Generate Celo private key
*celo()* | [**celoGenerateWallet()**](./Api/CeloApi.md#celogeneratewallet) | Generate Celo wallet
*celo()* | [**celoGetBalance()**](./Api/CeloApi.md#celogetbalance) | Get Celo Account balance
*celo()* | [**celoGetBlock()**](./Api/CeloApi.md#celogetblock) | Get Celo block by hash
*celo()* | [**celoGetCurrentBlock()**](./Api/CeloApi.md#celogetcurrentblock) | Get current block number
*celo()* | [**celoGetTransaction()**](./Api/CeloApi.md#celogettransaction) | Get Celo Transaction
*celo()* | [**celoGetTransactionByAddress()**](./Api/CeloApi.md#celogettransactionbyaddress) | Get Celo transactions by address
*celo()* | [**celoGetTransactionCount()**](./Api/CeloApi.md#celogettransactioncount) | Get count of outgoing Celo transactions
*celo()* | [**celoWeb3Driver()**](./Api/CeloApi.md#celoweb3driver) | Web3 HTTP driver
*custodialManagedWallets()* | [**custodialCreateWallet()**](./Api/CustodialManagedWalletsApi.md#custodialcreatewallet) | Create managed address
*custodialManagedWallets()* | [**custodialDeleteWallet()**](./Api/CustodialManagedWalletsApi.md#custodialdeletewallet) | Delete managed address
*custodialManagedWallets()* | [**custodialGetWallet()**](./Api/CustodialManagedWalletsApi.md#custodialgetwallet) | Get managed address
*custodialManagedWallets()* | [**custodialGetWallets()**](./Api/CustodialManagedWalletsApi.md#custodialgetwallets) | Get managed addresses
*custodialManagedWallets()* | [**custodialTransferManagedAddress()**](./Api/CustodialManagedWalletsApi.md#custodialtransfermanagedaddress) | Sign and transfer using managed address
*customer()* | [**activateCustomer()**](./Api/CustomerApi.md#activatecustomer) | Activate customer
*customer()* | [**deactivateCustomer()**](./Api/CustomerApi.md#deactivatecustomer) | Deactivate customer
*customer()* | [**disableCustomer()**](./Api/CustomerApi.md#disablecustomer) | Disable customer
*customer()* | [**enableCustomer()**](./Api/CustomerApi.md#enablecustomer) | Enable customer
*customer()* | [**findAllCustomers()**](./Api/CustomerApi.md#findallcustomers) | List all customers
*customer()* | [**getCustomerByExternalOrInternalId()**](./Api/CustomerApi.md#getcustomerbyexternalorinternalid) | Get customer details
*customer()* | [**updateCustomer()**](./Api/CustomerApi.md#updatecustomer) | Update customer
*deposit()* | [**getDeposits()**](./Api/DepositApi.md#getdeposits) | List all deposits for product
*deposit()* | [**getDepositsCount()**](./Api/DepositApi.md#getdepositscount) | Count of found entities for get deposits request
*dogecoin()* | [**dogeBroadcast()**](./Api/DogecoinApi.md#dogebroadcast) | Broadcast signed Dogecoin transaction
*dogecoin()* | [**dogeGenerateAddress()**](./Api/DogecoinApi.md#dogegenerateaddress) | Generate Dogecoin deposit address from Extended public key
*dogecoin()* | [**dogeGenerateAddressPrivateKey()**](./Api/DogecoinApi.md#dogegenerateaddressprivatekey) | Generate Dogecoin private key
*dogecoin()* | [**dogeGenerateWallet()**](./Api/DogecoinApi.md#dogegeneratewallet) | Generate Dogecoin wallet
*dogecoin()* | [**dogeGetBlock()**](./Api/DogecoinApi.md#dogegetblock) | Get Dogecoin Block by hash or height
*dogecoin()* | [**dogeGetBlockChainInfo()**](./Api/DogecoinApi.md#dogegetblockchaininfo) | Get Dogecoin Blockchain Information
*dogecoin()* | [**dogeGetBlockHash()**](./Api/DogecoinApi.md#dogegetblockhash) | Get Dogecoin Block hash
*dogecoin()* | [**dogeGetMempool()**](./Api/DogecoinApi.md#dogegetmempool) | Get Mempool Transactions
*dogecoin()* | [**dogeGetRawTransaction()**](./Api/DogecoinApi.md#dogegetrawtransaction) | Get Dogecoin Transaction by hash
*dogecoin()* | [**dogeGetUTXO()**](./Api/DogecoinApi.md#dogegetutxo) | Get information about a transaction output (UTXO) in a Dogecoin transaction
*dogecoin()* | [**dogeRpcDriver()**](./Api/DogecoinApi.md#dogerpcdriver) | JSON RPC HTTP driver
*dogecoin()* | [**dogeTransferBlockchain()**](./Api/DogecoinApi.md#dogetransferblockchain) | Send DOGE to Dogecoin addresses
*elrond()* | [**eGldGetCurrentBlock()**](./Api/ElrondApi.md#egldgetcurrentblock) | Get current block number
*elrond()* | [**egldBlockchainTransfer()**](./Api/ElrondApi.md#egldblockchaintransfer) | Send EGLD from account to account
*elrond()* | [**egldBroadcast()**](./Api/ElrondApi.md#egldbroadcast) | Broadcast signed EGLD transaction
*elrond()* | [**egldGenerateAddress()**](./Api/ElrondApi.md#egldgenerateaddress) | Generate EGLD account address from mnemonic
*elrond()* | [**egldGenerateAddressPrivateKey()**](./Api/ElrondApi.md#egldgenerateaddressprivatekey) | Generate EGLD private key
*elrond()* | [**egldGenerateWallet()**](./Api/ElrondApi.md#egldgeneratewallet) | Generate EGLD wallet
*elrond()* | [**egldGetBalance()**](./Api/ElrondApi.md#egldgetbalance) | Get EGLD Account balance
*elrond()* | [**egldGetBlock()**](./Api/ElrondApi.md#egldgetblock) | Get EGLD block by hash
*elrond()* | [**egldGetTransaction()**](./Api/ElrondApi.md#egldgettransaction) | Get EGLD Transaction
*elrond()* | [**egldGetTransactionAddress()**](./Api/ElrondApi.md#egldgettransactionaddress) | Get count of outgoing EGLD transactions
*elrond()* | [**egldGetTransactionCount()**](./Api/ElrondApi.md#egldgettransactioncount) | Get count of outgoing EGLD transactions
*elrond()* | [**egldNodeGet()**](./Api/ElrondApi.md#egldnodeget) | Node HTTP driver
*elrond()* | [**egldNodePost()**](./Api/ElrondApi.md#egldnodepost) | Node HTTP driver
*ethereum()* | [**ethBlockchainSmartContractInvocation()**](./Api/EthereumApi.md#ethblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Ethereum
*ethereum()* | [**ethBlockchainTransfer()**](./Api/EthereumApi.md#ethblockchaintransfer) | Send Ethereum / ERC20 from account to account
*ethereum()* | [**ethBroadcast()**](./Api/EthereumApi.md#ethbroadcast) | Broadcast signed Ethereum transaction
*ethereum()* | [**ethGenerateAddress()**](./Api/EthereumApi.md#ethgenerateaddress) | Generate Ethereum account address from Extended public key
*ethereum()* | [**ethGenerateAddressPrivateKey()**](./Api/EthereumApi.md#ethgenerateaddressprivatekey) | Generate Ethereum private key
*ethereum()* | [**ethGenerateWallet()**](./Api/EthereumApi.md#ethgeneratewallet) | Generate Ethereum wallet
*ethereum()* | [**ethGetBalance()**](./Api/EthereumApi.md#ethgetbalance) | Get the ETH balance of an Ethereum account
*ethereum()* | [**ethGetBlock()**](./Api/EthereumApi.md#ethgetblock) | Get Ethereum block by hash
*ethereum()* | [**ethGetCurrentBlock()**](./Api/EthereumApi.md#ethgetcurrentblock) | Get current block number
*ethereum()* | [**ethGetInternalTransactionByAddress()**](./Api/EthereumApi.md#ethgetinternaltransactionbyaddress) | Get Ethereum internal transactions by address
*ethereum()* | [**ethGetTransaction()**](./Api/EthereumApi.md#ethgettransaction) | Get Ethereum Transaction
*ethereum()* | [**ethGetTransactionByAddress()**](./Api/EthereumApi.md#ethgettransactionbyaddress) | Get Ethereum transactions by address
*ethereum()* | [**ethGetTransactionCount()**](./Api/EthereumApi.md#ethgettransactioncount) | Get count of outgoing Ethereum transactions
*ethereum()* | [**ethWeb3Driver()**](./Api/EthereumApi.md#ethweb3driver) | Web3 HTTP driver
*exchangeRate()* | [**getExchangeRate()**](./Api/ExchangeRateApi.md#getexchangerate) | Get the current exchange rate for exchanging fiat/crypto assets
*flow()* | [**flowAddPubKeyToAddress()**](./Api/FlowApi.md#flowaddpubkeytoaddress) | Add public key to Flow address
*flow()* | [**flowCreateAddressFromPubKey()**](./Api/FlowApi.md#flowcreateaddressfrompubkey) | Create Flow address from public key
*flow()* | [**flowGenerateAddress()**](./Api/FlowApi.md#flowgenerateaddress) | Generate Flow address from Extended public key
*flow()* | [**flowGeneratePubKey()**](./Api/FlowApi.md#flowgeneratepubkey) | Generate Flow public key from Extended public key
*flow()* | [**flowGeneratePubKeyPrivateKey()**](./Api/FlowApi.md#flowgeneratepubkeyprivatekey) | Generate Flow private key
*flow()* | [**flowGenerateWallet()**](./Api/FlowApi.md#flowgeneratewallet) | Generate Flow wallet
*flow()* | [**flowGetAccount()**](./Api/FlowApi.md#flowgetaccount) | Get the balance of a Flow account
*flow()* | [**flowGetBlock()**](./Api/FlowApi.md#flowgetblock) | Get Flow Block by hash or height
*flow()* | [**flowGetBlockChainInfo()**](./Api/FlowApi.md#flowgetblockchaininfo) | Get Flow current block number
*flow()* | [**flowGetBlockEvents()**](./Api/FlowApi.md#flowgetblockevents) | Get Flow events from blocks
*flow()* | [**flowGetRawTransaction()**](./Api/FlowApi.md#flowgetrawtransaction) | Get Flow Transaction by hash
*flow()* | [**flowTransferBlockchain()**](./Api/FlowApi.md#flowtransferblockchain) | Send Flow to blockchain addresses
*flow()* | [**flowTransferCustomBlockchain()**](./Api/FlowApi.md#flowtransfercustomblockchain) | Send arbitrary transaction to blockchain
*fungibleTokensERC20OrCompatible()* | [**erc20Approve()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20approve) | Allow a blockchain address to transfer and burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**erc20Burn()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20burn) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**erc20Deploy()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20deploy) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**erc20GetBalance()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalance) | Get the number of fungible tokens that a blockchain address holds in a smart contract
*fungibleTokensERC20OrCompatible()* | [**erc20GetBalanceAddress()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalanceaddress) | Get the total number of fungible tokens that a blockchain address holds
*fungibleTokensERC20OrCompatible()* | [**erc20GetTransactionByAddress()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20gettransactionbyaddress) | Get fungible token transactions on a blockchain address
*fungibleTokensERC20OrCompatible()* | [**erc20Mint()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20mint) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**erc20Transfer()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20transfer) | Transfer fungible tokens
*gasPump()* | [**activateGasPumpAddresses()**](./Api/GasPumpApi.md#activategaspumpaddresses) | Activate gas pump addresses
*gasPump()* | [**activatedNotActivatedGasPumpAddresses()**](./Api/GasPumpApi.md#activatednotactivatedgaspumpaddresses) | Get the results of the address activation transaction
*gasPump()* | [**approveTransferCustodialWallet()**](./Api/GasPumpApi.md#approvetransfercustodialwallet) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**gasPumpAddressesActivatedOrNot()**](./Api/GasPumpApi.md#gaspumpaddressesactivatedornot) | Check whether the gas pump address with a specified index is activated
*gasPump()* | [**generateCustodialWallet()**](./Api/GasPumpApi.md#generatecustodialwallet) | Generate a custodial wallet address
*gasPump()* | [**generateCustodialWalletBatch()**](./Api/GasPumpApi.md#generatecustodialwalletbatch) | Generate a gas pump wallet address
*gasPump()* | [**precalculateGasPumpAddresses()**](./Api/GasPumpApi.md#precalculategaspumpaddresses) | Precalculate gas pump addresses
*gasPump()* | [**sCGetCustodialAddresses()**](./Api/GasPumpApi.md#scgetcustodialaddresses) | Get the custodial wallet address from the transaction
*gasPump()* | [**transferCustodialWallet()**](./Api/GasPumpApi.md#transfercustodialwallet) | Transfer an asset from a gas pump address
*gasPump()* | [**transferCustodialWalletBatch()**](./Api/GasPumpApi.md#transfercustodialwalletbatch) | Transfer multiple assets from a gas pump address
*harmony()* | [**oneBlockchainSmartContractInvocation()**](./Api/HarmonyApi.md#oneblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Harmony
*harmony()* | [**oneBlockchainTransfer()**](./Api/HarmonyApi.md#oneblockchaintransfer) | Send ONE / HRM20 from account to account
*harmony()* | [**oneBroadcast()**](./Api/HarmonyApi.md#onebroadcast) | Broadcast signed ONE transaction
*harmony()* | [**oneFormatAddress()**](./Api/HarmonyApi.md#oneformataddress) | Transform HEX address to Bech32 ONE address format
*harmony()* | [**oneGenerateAddress()**](./Api/HarmonyApi.md#onegenerateaddress) | Generate ONE account address from Extended public key
*harmony()* | [**oneGenerateAddressPrivateKey()**](./Api/HarmonyApi.md#onegenerateaddressprivatekey) | Generate ONE private key
*harmony()* | [**oneGenerateWallet()**](./Api/HarmonyApi.md#onegeneratewallet) | Generate ONE wallet
*harmony()* | [**oneGetBalance()**](./Api/HarmonyApi.md#onegetbalance) | Get ONE Account balance
*harmony()* | [**oneGetBlock()**](./Api/HarmonyApi.md#onegetblock) | Get ONE block by hash
*harmony()* | [**oneGetCurrentBlock()**](./Api/HarmonyApi.md#onegetcurrentblock) | Get current block number
*harmony()* | [**oneGetTransaction()**](./Api/HarmonyApi.md#onegettransaction) | Get ONE Transaction
*harmony()* | [**oneGetTransactionCount()**](./Api/HarmonyApi.md#onegettransactioncount) | Get count of outgoing ONE transactions
*harmony()* | [**oneWeb3Driver()**](./Api/HarmonyApi.md#oneweb3driver) | Web3 HTTP driver
*iPFS()* | [**getIPFSData()**](./Api/IPFSApi.md#getipfsdata) | Get file from IPFS
*iPFS()* | [**storeIPFS()**](./Api/IPFSApi.md#storeipfs) | Store data to IPFS
*keyManagementSystem()* | [**completePendingSignature()**](./Api/KeyManagementSystemApi.md#completependingsignature) | Complete pending transaction to sign
*keyManagementSystem()* | [**deletePendingTransactionToSign()**](./Api/KeyManagementSystemApi.md#deletependingtransactiontosign) | Delete transaction
*keyManagementSystem()* | [**getPendingTransactionToSign()**](./Api/KeyManagementSystemApi.md#getpendingtransactiontosign) | Get transaction details
*keyManagementSystem()* | [**getPendingTransactionsToSign()**](./Api/KeyManagementSystemApi.md#getpendingtransactionstosign) | Get pending transactions to sign
*keyManagementSystem()* | [**receivePendingTransactionsToSign()**](./Api/KeyManagementSystemApi.md#receivependingtransactionstosign) | Get pending transactions to sign
*klaytn()* | [**klaytnBlockchainSmartContractInvocation()**](./Api/KlaytnApi.md#klaytnblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Klaytn
*klaytn()* | [**klaytnBlockchainTransfer()**](./Api/KlaytnApi.md#klaytnblockchaintransfer) | Send KLAY from account to account
*klaytn()* | [**klaytnBroadcast()**](./Api/KlaytnApi.md#klaytnbroadcast) | Broadcast signed Klaytn transaction
*klaytn()* | [**klaytnGenerateAddress()**](./Api/KlaytnApi.md#klaytngenerateaddress) | Generate Klaytn account address from Extended public key
*klaytn()* | [**klaytnGenerateAddressPrivateKey()**](./Api/KlaytnApi.md#klaytngenerateaddressprivatekey) | Generate Klaytn private key
*klaytn()* | [**klaytnGenerateWallet()**](./Api/KlaytnApi.md#klaytngeneratewallet) | Generate Klaytn wallet
*klaytn()* | [**klaytnGetBalance()**](./Api/KlaytnApi.md#klaytngetbalance) | Get Klaytn Account balance
*klaytn()* | [**klaytnGetBlock()**](./Api/KlaytnApi.md#klaytngetblock) | Get Klaytn block by hash
*klaytn()* | [**klaytnGetCurrentBlock()**](./Api/KlaytnApi.md#klaytngetcurrentblock) | Get current block number
*klaytn()* | [**klaytnGetTransaction()**](./Api/KlaytnApi.md#klaytngettransaction) | Get Klaytn Transaction
*klaytn()* | [**klaytnGetTransactionCount()**](./Api/KlaytnApi.md#klaytngettransactioncount) | Get count of outgoing Klaytn transactions
*klaytn()* | [**klaytnWeb3Driver()**](./Api/KlaytnApi.md#klaytnweb3driver) | Web3 HTTP driver
*kuCoin()* | [**kcsBlockchainSmartContractInvocation()**](./Api/KuCoinApi.md#kcsblockchainsmartcontractinvocation) | Invoke a method in a smart contract on KuCoin Community Chain
*kuCoin()* | [**kcsBlockchainTransfer()**](./Api/KuCoinApi.md#kcsblockchaintransfer) | Send KCS from account to account
*kuCoin()* | [**kcsBroadcast()**](./Api/KuCoinApi.md#kcsbroadcast) | Broadcast signed Kcs transaction
*kuCoin()* | [**kcsGenerateAddress()**](./Api/KuCoinApi.md#kcsgenerateaddress) | Generate Kcs account address from Extended public key
*kuCoin()* | [**kcsGenerateAddressPrivateKey()**](./Api/KuCoinApi.md#kcsgenerateaddressprivatekey) | Generate Kcs private key
*kuCoin()* | [**kcsGenerateWallet()**](./Api/KuCoinApi.md#kcsgeneratewallet) | Generate Kcs wallet
*kuCoin()* | [**kcsGetBalance()**](./Api/KuCoinApi.md#kcsgetbalance) | Get Kcs Account balance
*kuCoin()* | [**kcsGetBlock()**](./Api/KuCoinApi.md#kcsgetblock) | Get Kcs block by hash
*kuCoin()* | [**kcsGetCurrentBlock()**](./Api/KuCoinApi.md#kcsgetcurrentblock) | Get current block number
*kuCoin()* | [**kcsGetTransaction()**](./Api/KuCoinApi.md#kcsgettransaction) | Get Kcs Transaction
*kuCoin()* | [**kcsGetTransactionCount()**](./Api/KuCoinApi.md#kcsgettransactioncount) | Get count of outgoing Kcs transactions
*kuCoin()* | [**kcsWeb3Driver()**](./Api/KuCoinApi.md#kcsweb3driver) | Web3 HTTP driver
*litecoin()* | [**ltcBroadcast()**](./Api/LitecoinApi.md#ltcbroadcast) | Broadcast signed Litecoin transaction
*litecoin()* | [**ltcGenerateAddress()**](./Api/LitecoinApi.md#ltcgenerateaddress) | Generate Litecoin deposit address from Extended public key
*litecoin()* | [**ltcGenerateAddressPrivateKey()**](./Api/LitecoinApi.md#ltcgenerateaddressprivatekey) | Generate Litecoin private key
*litecoin()* | [**ltcGenerateWallet()**](./Api/LitecoinApi.md#ltcgeneratewallet) | Generate Litecoin wallet
*litecoin()* | [**ltcGetBalanceOfAddress()**](./Api/LitecoinApi.md#ltcgetbalanceofaddress) | Get the balance of a Litecoin address
*litecoin()* | [**ltcGetBlock()**](./Api/LitecoinApi.md#ltcgetblock) | Get Litecoin Block by hash or height
*litecoin()* | [**ltcGetBlockChainInfo()**](./Api/LitecoinApi.md#ltcgetblockchaininfo) | Get Litecoin Blockchain Information
*litecoin()* | [**ltcGetBlockHash()**](./Api/LitecoinApi.md#ltcgetblockhash) | Get Litecoin Block hash
*litecoin()* | [**ltcGetMempool()**](./Api/LitecoinApi.md#ltcgetmempool) | Get Mempool Transactions
*litecoin()* | [**ltcGetRawTransaction()**](./Api/LitecoinApi.md#ltcgetrawtransaction) | Get Litecoin Transaction by hash
*litecoin()* | [**ltcGetTxByAddress()**](./Api/LitecoinApi.md#ltcgettxbyaddress) | Get Litecoin Transactions by address
*litecoin()* | [**ltcGetUTXO()**](./Api/LitecoinApi.md#ltcgetutxo) | Get information about a transaction output (UTXO) in a Litecoin transaction
*litecoin()* | [**ltcRpcDriver()**](./Api/LitecoinApi.md#ltcrpcdriver) | JSON RPC HTTP driver
*litecoin()* | [**ltcTransferBlockchain()**](./Api/LitecoinApi.md#ltctransferblockchain) | Send LTC to Litecoin addresses
*maliciousAddress()* | [**checkMalicousAddress()**](./Api/MaliciousAddressApi.md#checkmalicousaddress) | Check malicous address
*marketplace()* | [**buyAssetOnMarketplace()**](./Api/MarketplaceApi.md#buyassetonmarketplace) | Buy an asset on the NFT marketplace
*marketplace()* | [**cancelSellMarketplaceListing()**](./Api/MarketplaceApi.md#cancelsellmarketplacelisting) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**generateMarketplace()**](./Api/MarketplaceApi.md#generatemarketplace) | Create an NFT marketplace
*marketplace()* | [**getMarketplaceFee()**](./Api/MarketplaceApi.md#getmarketplacefee) | Get the NFT marketplace fee
*marketplace()* | [**getMarketplaceFeeRecipient()**](./Api/MarketplaceApi.md#getmarketplacefeerecipient) | Get the recipient of the NFT marketplace fee
*marketplace()* | [**getMarketplaceInfo()**](./Api/MarketplaceApi.md#getmarketplaceinfo) | Get information about an NFT marketplace on Solana
*marketplace()* | [**getMarketplaceListing()**](./Api/MarketplaceApi.md#getmarketplacelisting) | Get information about a listing on the NFT marketplace
*marketplace()* | [**getMarketplaceListings()**](./Api/MarketplaceApi.md#getmarketplacelistings) | Get the listings of a certain type from the NFT marketplace
*marketplace()* | [**sellAssetOnMarketplace()**](./Api/MarketplaceApi.md#sellassetonmarketplace) | Sell an asset on the NFT marketplace
*marketplace()* | [**updateFee()**](./Api/MarketplaceApi.md#updatefee) | Update the NFT marketplace fee
*marketplace()* | [**updateFeeRecipient()**](./Api/MarketplaceApi.md#updatefeerecipient) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**updateMarketplace()**](./Api/MarketplaceApi.md#updatemarketplace) | Update an NFT marketplace on Solana
*marketplace()* | [**withdrawFeeFromMarketplace()**](./Api/MarketplaceApi.md#withdrawfeefrommarketplace) | Withdraw funds from the marketplace fee account on Solana
*marketplace()* | [**withdrawTreasuryFromMarketplace()**](./Api/MarketplaceApi.md#withdrawtreasuryfrommarketplace) | Withdraw funds from the marketplace treasury account on Solana
*multiTokensERC1155OrCompatible()* | [**addMultiTokenMinter()**](./Api/MultiTokensERC1155OrCompatibleApi.md#addmultitokenminter) | Add a Multi Token minter
*multiTokensERC1155OrCompatible()* | [**burnMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitoken) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**burnMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatch) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**deployMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitoken) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**mintMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitoken) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**mintMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatch) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multiTokenGetAddressBalance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetaddressbalance) | Get all Multi Tokens that a blockchain address holds
*multiTokensERC1155OrCompatible()* | [**multiTokenGetBalance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalance) | Get the amount of a specific MultiToken that a blockchain address holds
*multiTokensERC1155OrCompatible()* | [**multiTokenGetBalanceBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalancebatch) | Get the amount of one or multiple Multi Tokens for multiple blockchain addresses
*multiTokensERC1155OrCompatible()* | [**multiTokenGetContractAddress()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetcontractaddress) | Get the address of a Multi Token smart contract by its transaction hash
*multiTokensERC1155OrCompatible()* | [**multiTokenGetMetadata()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetmetadata) | Get Multi Token metadata
*multiTokensERC1155OrCompatible()* | [**multiTokenGetTransaction()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransaction) | Get a Multi Token transaction by its hash
*multiTokensERC1155OrCompatible()* | [**multiTokenGetTransactionByAddress()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransactionbyaddress) | Get Multi Token transactions on a blockchain address
*multiTokensERC1155OrCompatible()* | [**transferMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitoken) | Transfer a Multi Token
*multiTokensERC1155OrCompatible()* | [**transferMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatch) | Transfer multiple Multi Tokens
*nFTERC721OrCompatible()* | [**nftAddMinter()**](./Api/NFTERC721OrCompatibleApi.md#nftaddminter) | Add an NFT minter to an NFT smart contract
*nFTERC721OrCompatible()* | [**nftBurnErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftburnerc721) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftDeployErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftdeployerc721) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftGetBalanceErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetbalanceerc721) | Get the NFTs from a specific smart contract that a blockchain address holds
*nFTERC721OrCompatible()* | [**nftGetContractAddress()**](./Api/NFTERC721OrCompatibleApi.md#nftgetcontractaddress) | Get the address of an NFT smart contract by its transaction hash
*nFTERC721OrCompatible()* | [**nftGetMetadataErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetmetadataerc721) | Get NFT metadata
*nFTERC721OrCompatible()* | [**nftGetProvenanceDataErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetprovenancedataerc721) | Get NFT provenance information
*nFTERC721OrCompatible()* | [**nftGetRoyaltyErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetroyaltyerc721) | Get NFT royalty information
*nFTERC721OrCompatible()* | [**nftGetTokensByAddressErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettokensbyaddresserc721) | Get all NFTs that a blockchain address holds
*nFTERC721OrCompatible()* | [**nftGetTokensByCollectionErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettokensbycollectionerc721) | Get all NFTs from a collection
*nFTERC721OrCompatible()* | [**nftGetTransactErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransacterc721) | Get an NFT transaction by its hash
*nFTERC721OrCompatible()* | [**nftGetTransactionByAddress()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransactionbyaddress) | Get NFT transactions on a blockchain address
*nFTERC721OrCompatible()* | [**nftGetTransactionByToken()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransactionbytoken) | Get NFT transactions for an NFT
*nFTERC721OrCompatible()* | [**nftMintErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftminterc721) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintMultipleErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftmintmultipleerc721) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftTransferErc721()**](./Api/NFTERC721OrCompatibleApi.md#nfttransfererc721) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftUpdateCashbackErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftupdatecashbackerc721) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**nftVerifyInCollection()**](./Api/NFTERC721OrCompatibleApi.md#nftverifyincollection) | Verify an NFT in an NFT collection on Solana
*nodeRPC()* | [**nodeJsonPostRpcDriver()**](./Api/NodeRPCApi.md#nodejsonpostrpcdriver) | Connect to the blockchain node through an RPC driver
*nodeRPC()* | [**nodeJsonRpcGetDriver()**](./Api/NodeRPCApi.md#nodejsonrpcgetdriver) | Connect to the blockchain node through an RPC driver
*nodeRPC()* | [**nodeJsonRpcPutDriver()**](./Api/NodeRPCApi.md#nodejsonrpcputdriver) | Connect to the blockchain node through an RPC driver
*notificationSubscriptions()* | [**createSubscription()**](./Api/NotificationSubscriptionsApi.md#createsubscription) | Create a subscription
*notificationSubscriptions()* | [**deleteSubscription()**](./Api/NotificationSubscriptionsApi.md#deletesubscription) | Cancel existing subscription
*notificationSubscriptions()* | [**disableWebHookHmac()**](./Api/NotificationSubscriptionsApi.md#disablewebhookhmac) | Disable HMAC webhook digest
*notificationSubscriptions()* | [**enableWebHookHmac()**](./Api/NotificationSubscriptionsApi.md#enablewebhookhmac) | Enable HMAC webhook digest
*notificationSubscriptions()* | [**getAllWebhooks()**](./Api/NotificationSubscriptionsApi.md#getallwebhooks) | List all executed webhooks
*notificationSubscriptions()* | [**getAllWebhooksCount()**](./Api/NotificationSubscriptionsApi.md#getallwebhookscount) | Count of found entities for get webhook request
*notificationSubscriptions()* | [**getSubscriptionReport()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionreport) | Obtain report for subscription
*notificationSubscriptions()* | [**getSubscriptions()**](./Api/NotificationSubscriptionsApi.md#getsubscriptions) | List all active subscriptions
*notificationSubscriptions()* | [**getSubscriptionsCount()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionscount) | Count of found entities for get webhook request
*orderBook()* | [**chartRequest()**](./Api/OrderBookApi.md#chartrequest) | Obtain chart data from historical closed trades
*orderBook()* | [**deleteAccountTrades()**](./Api/OrderBookApi.md#deleteaccounttrades) | Cancel all existing trades for account
*orderBook()* | [**deleteTrade()**](./Api/OrderBookApi.md#deletetrade) | Cancel existing trade
*orderBook()* | [**getBuyTrades()**](./Api/OrderBookApi.md#getbuytrades) | List all active buy trades
*orderBook()* | [**getBuyTradesBody()**](./Api/OrderBookApi.md#getbuytradesbody) | List all active buy trades
*orderBook()* | [**getHistoricalTrades()**](./Api/OrderBookApi.md#gethistoricaltrades) | List all historical trades
*orderBook()* | [**getHistoricalTradesBody()**](./Api/OrderBookApi.md#gethistoricaltradesbody) | List all historical trades
*orderBook()* | [**getMatchedTrades()**](./Api/OrderBookApi.md#getmatchedtrades) | List all matched orders from FUTURE_SELL/FUTURE_BUY trades
*orderBook()* | [**getSellTrades()**](./Api/OrderBookApi.md#getselltrades) | List all active sell trades
*orderBook()* | [**getSellTradesBody()**](./Api/OrderBookApi.md#getselltradesbody) | List all active sell trades
*orderBook()* | [**getTradeById()**](./Api/OrderBookApi.md#gettradebyid) | Get existing trade
*orderBook()* | [**storeTrade()**](./Api/OrderBookApi.md#storetrade) | Store buy / sell trade
*polygon()* | [**polygonBlockchainSmartContractInvocation()**](./Api/PolygonApi.md#polygonblockchainsmartcontractinvocation) | Invoke a method in a smart contract on Polygon
*polygon()* | [**polygonBlockchainTransfer()**](./Api/PolygonApi.md#polygonblockchaintransfer) | Send MATIC from account to account
*polygon()* | [**polygonBroadcast()**](./Api/PolygonApi.md#polygonbroadcast) | Broadcast signed Polygon transaction
*polygon()* | [**polygonGenerateAddress()**](./Api/PolygonApi.md#polygongenerateaddress) | Generate Polygon account address from Extended public key
*polygon()* | [**polygonGenerateAddressPrivateKey()**](./Api/PolygonApi.md#polygongenerateaddressprivatekey) | Generate Polygon private key
*polygon()* | [**polygonGenerateWallet()**](./Api/PolygonApi.md#polygongeneratewallet) | Generate Polygon wallet
*polygon()* | [**polygonGetBalance()**](./Api/PolygonApi.md#polygongetbalance) | Get Polygon Account balance
*polygon()* | [**polygonGetBlock()**](./Api/PolygonApi.md#polygongetblock) | Get Polygon block by hash
*polygon()* | [**polygonGetCurrentBlock()**](./Api/PolygonApi.md#polygongetcurrentblock) | Get current block number
*polygon()* | [**polygonGetTransaction()**](./Api/PolygonApi.md#polygongettransaction) | Get Polygon Transaction
*polygon()* | [**polygonGetTransactionByAddress()**](./Api/PolygonApi.md#polygongettransactionbyaddress) | Get Polygon transactions by address
*polygon()* | [**polygonGetTransactionCount()**](./Api/PolygonApi.md#polygongettransactioncount) | Get count of outgoing Polygon transactions
*polygon()* | [**polygonWeb3Driver()**](./Api/PolygonApi.md#polygonweb3driver) | Web3 HTTP driver
*serviceUtils()* | [**freezeApiKey()**](./Api/ServiceUtilsApi.md#freezeapikey) | Freeze API Key
*serviceUtils()* | [**getCredits()**](./Api/ServiceUtilsApi.md#getcredits) | Get information about your credit consumption for the last month
*serviceUtils()* | [**getVersion()**](./Api/ServiceUtilsApi.md#getversion) | Get API version
*serviceUtils()* | [**unfreezeApiKey()**](./Api/ServiceUtilsApi.md#unfreezeapikey) | Unfreeze API Key
*solana()* | [**solanaBlockchainTransfer()**](./Api/SolanaApi.md#solanablockchaintransfer) | Send SOL from account to account
*solana()* | [**solanaBroadcastConfirm()**](./Api/SolanaApi.md#solanabroadcastconfirm) | Broadcast and confirm signed Solana transaction
*solana()* | [**solanaGenerateWallet()**](./Api/SolanaApi.md#solanageneratewallet) | Generate Solana wallet
*solana()* | [**solanaGetBalance()**](./Api/SolanaApi.md#solanagetbalance) | Get Solana Account balance
*solana()* | [**solanaGetBlock()**](./Api/SolanaApi.md#solanagetblock) | Get Solana block by number
*solana()* | [**solanaGetCurrentBlock()**](./Api/SolanaApi.md#solanagetcurrentblock) | Get current block number
*solana()* | [**solanaGetTransaction()**](./Api/SolanaApi.md#solanagettransaction) | Get Solana Transaction
*solana()* | [**solanaWeb3Driver()**](./Api/SolanaApi.md#solanaweb3driver) | JSON RPC HTTP driver
*stellar()* | [**xlmBroadcast()**](./Api/StellarApi.md#xlmbroadcast) | Broadcast signed XLM transaction
*stellar()* | [**xlmGetAccountInfo()**](./Api/StellarApi.md#xlmgetaccountinfo) | Get XLM Account info
*stellar()* | [**xlmGetAccountTx()**](./Api/StellarApi.md#xlmgetaccounttx) | Get XLM Account transactions
*stellar()* | [**xlmGetFee()**](./Api/StellarApi.md#xlmgetfee) | Get actual XLM fee
*stellar()* | [**xlmGetLastClosedLedger()**](./Api/StellarApi.md#xlmgetlastclosedledger) | Get XLM Blockchain Information
*stellar()* | [**xlmGetLedger()**](./Api/StellarApi.md#xlmgetledger) | Get XLM Blockchain Ledger by sequence
*stellar()* | [**xlmGetLedgerTx()**](./Api/StellarApi.md#xlmgetledgertx) | Get XLM Blockchain Transactions in Ledger
*stellar()* | [**xlmGetTransaction()**](./Api/StellarApi.md#xlmgettransaction) | Get XLM Transaction by hash
*stellar()* | [**xlmTransferBlockchain()**](./Api/StellarApi.md#xlmtransferblockchain) | Send XLM from address to address
*stellar()* | [**xlmTrustLineBlockchain()**](./Api/StellarApi.md#xlmtrustlineblockchain) | Create / Update / Delete XLM trust line
*stellar()* | [**xlmWallet()**](./Api/StellarApi.md#xlmwallet) | Generate XLM account
*transaction()* | [**getTransactions()**](./Api/TransactionApi.md#gettransactions) | Find transactions within the ledger.
*transaction()* | [**getTransactionsByAccountId()**](./Api/TransactionApi.md#gettransactionsbyaccountid) | Find transactions for account.
*transaction()* | [**getTransactionsByCustomerId()**](./Api/TransactionApi.md#gettransactionsbycustomerid) | Find transactions for a customer across all of the customer&#39;s accounts.
*transaction()* | [**getTransactionsByReference()**](./Api/TransactionApi.md#gettransactionsbyreference) | Find transactions with a given reference across all accounts.
*transaction()* | [**sendTransaction()**](./Api/TransactionApi.md#sendtransaction) | Send payment
*transaction()* | [**sendTransactionBatch()**](./Api/TransactionApi.md#sendtransactionbatch) | Send payment in batch
*tron()* | [**generateTronwallet()**](./Api/TronApi.md#generatetronwallet) | Generate a TRON wallet
*tron()* | [**tronAccountTx()**](./Api/TronApi.md#tronaccounttx) | Get all transactions for a TRON account
*tron()* | [**tronAccountTx20()**](./Api/TronApi.md#tronaccounttx20) | Get TRC-20 transactions for a TRON account
*tron()* | [**tronBroadcast()**](./Api/TronApi.md#tronbroadcast) | Broadcast a TRON transaction
*tron()* | [**tronCreateTrc10()**](./Api/TronApi.md#troncreatetrc10) | Create a TRC-10 token
*tron()* | [**tronCreateTrc20()**](./Api/TronApi.md#troncreatetrc20) | Create a TRC-20 token
*tron()* | [**tronFreeze()**](./Api/TronApi.md#tronfreeze) | Freeze the balance of a TRON account
*tron()* | [**tronGenerateAddress()**](./Api/TronApi.md#trongenerateaddress) | Generate a TRON address from the wallet&#39;s extended public key
*tron()* | [**tronGenerateAddressPrivateKey()**](./Api/TronApi.md#trongenerateaddressprivatekey) | Generate the private key for a TRON address
*tron()* | [**tronGetAccount()**](./Api/TronApi.md#trongetaccount) | Get the TRON account by its address
*tron()* | [**tronGetBlock()**](./Api/TronApi.md#trongetblock) | Get a TRON block by its hash or height
*tron()* | [**tronGetCurrentBlock()**](./Api/TronApi.md#trongetcurrentblock) | Get the current TRON block
*tron()* | [**tronGetTransaction()**](./Api/TronApi.md#trongettransaction) | Get a TRON transaction by its hash
*tron()* | [**tronTransfer()**](./Api/TronApi.md#trontransfer) | Send TRX to a TRON account
*tron()* | [**tronTransferTrc10()**](./Api/TronApi.md#trontransfertrc10) | Send TRC-10 tokens to a TRON account
*tron()* | [**tronTransferTrc20()**](./Api/TronApi.md#trontransfertrc20) | Send TRC-20 tokens to a TRON account
*tron()* | [**tronTrc10Detail()**](./Api/TronApi.md#trontrc10detail) | Get information about a TRC-10 token
*veChain()* | [**vetBlockchainTransfer()**](./Api/VeChainApi.md#vetblockchaintransfer) | Send VeChain from account to account
*veChain()* | [**vetBroadcast()**](./Api/VeChainApi.md#vetbroadcast) | Broadcast signed VeChain transaction
*veChain()* | [**vetGenerateAddress()**](./Api/VeChainApi.md#vetgenerateaddress) | Generate VeChain account address from Extended public key
*veChain()* | [**vetGenerateAddressPrivateKey()**](./Api/VeChainApi.md#vetgenerateaddressprivatekey) | Generate VeChain private key
*veChain()* | [**vetGenerateWallet()**](./Api/VeChainApi.md#vetgeneratewallet) | Generate VeChain wallet
*veChain()* | [**vetGetBalance()**](./Api/VeChainApi.md#vetgetbalance) | Get VeChain Account balance
*veChain()* | [**vetGetBlock()**](./Api/VeChainApi.md#vetgetblock) | Get VeChain Block by hash
*veChain()* | [**vetGetCurrentBlock()**](./Api/VeChainApi.md#vetgetcurrentblock) | Get VeChain current block
*veChain()* | [**vetGetEnergy()**](./Api/VeChainApi.md#vetgetenergy) | Get VeChain Account energy (VTHO)
*veChain()* | [**vetGetTransaction()**](./Api/VeChainApi.md#vetgettransaction) | Get VeChain Transaction
*veChain()* | [**vetGetTransactionReceipt()**](./Api/VeChainApi.md#vetgettransactionreceipt) | Get VeChain Transaction Receipt
*virtualAccountBlockchainFees()* | [**offchainEstimateFee()**](./Api/VirtualAccountBlockchainFeesApi.md#offchainestimatefee) | Estimate ledger to blockchain transaction fee
*virtualCurrency()* | [**createCurrency()**](./Api/VirtualCurrencyApi.md#createcurrency) | Create new virtual currency
*virtualCurrency()* | [**getCurrency()**](./Api/VirtualCurrencyApi.md#getcurrency) | Get virtual currency
*virtualCurrency()* | [**mintCurrency()**](./Api/VirtualCurrencyApi.md#mintcurrency) | Create new supply of virtual currency
*virtualCurrency()* | [**revokeCurrency()**](./Api/VirtualCurrencyApi.md#revokecurrency) | Destroy supply of virtual currency
*virtualCurrency()* | [**updateCurrency()**](./Api/VirtualCurrencyApi.md#updatecurrency) | Update virtual currency
*withdrawal()* | [**broadcastBlockchainTransaction()**](./Api/WithdrawalApi.md#broadcastblockchaintransaction) | Broadcast signed transaction and complete withdrawal
*withdrawal()* | [**cancelInProgressWithdrawal()**](./Api/WithdrawalApi.md#cancelinprogresswithdrawal) | Cancel withdrawal
*withdrawal()* | [**completeWithdrawal()**](./Api/WithdrawalApi.md#completewithdrawal) | Complete withdrawal
*withdrawal()* | [**getWithdrawals()**](./Api/WithdrawalApi.md#getwithdrawals) | Get withdrawals
*withdrawal()* | [**storeWithdrawal()**](./Api/WithdrawalApi.md#storewithdrawal) | Store withdrawal
*xRP()* | [**xrpAccountSettings()**](./Api/XRPApi.md#xrpaccountsettings) | Modify XRP account
*xRP()* | [**xrpBroadcast()**](./Api/XRPApi.md#xrpbroadcast) | Broadcast signed XRP transaction
*xRP()* | [**xrpGetAccountBalance()**](./Api/XRPApi.md#xrpgetaccountbalance) | Get Account Balance
*xRP()* | [**xrpGetAccountInfo()**](./Api/XRPApi.md#xrpgetaccountinfo) | Get Account info
*xRP()* | [**xrpGetAccountTx()**](./Api/XRPApi.md#xrpgetaccounttx) | Get Account transactions
*xRP()* | [**xrpGetFee()**](./Api/XRPApi.md#xrpgetfee) | Get actual Blockchain fee
*xRP()* | [**xrpGetLastClosedLedger()**](./Api/XRPApi.md#xrpgetlastclosedledger) | Get XRP Blockchain Information
*xRP()* | [**xrpGetLedger()**](./Api/XRPApi.md#xrpgetledger) | Get Ledger
*xRP()* | [**xrpGetTransaction()**](./Api/XRPApi.md#xrpgettransaction) | Get XRP Transaction by hash
*xRP()* | [**xrpTransferBlockchain()**](./Api/XRPApi.md#xrptransferblockchain) | Send XRP from address to address
*xRP()* | [**xrpTrustLineBlockchain()**](./Api/XRPApi.md#xrptrustlineblockchain) | Create / Update / Delete XRP trust line
*xRP()* | [**xrpWallet()**](./Api/XRPApi.md#xrpwallet) | Generate XRP account
*xinFin()* | [**xdcBlockchainSmartContractInvocation()**](./Api/XinFinApi.md#xdcblockchainsmartcontractinvocation) | Invoke a method in a smart contract on XinFin
*xinFin()* | [**xdcBlockchainTransfer()**](./Api/XinFinApi.md#xdcblockchaintransfer) | Send XDC / ERC20 from account to account
*xinFin()* | [**xdcBroadcast()**](./Api/XinFinApi.md#xdcbroadcast) | Broadcast signed XDC transaction
*xinFin()* | [**xdcGenerateAddress()**](./Api/XinFinApi.md#xdcgenerateaddress) | Generate XDC account address from Extended public key
*xinFin()* | [**xdcGenerateAddressPrivateKey()**](./Api/XinFinApi.md#xdcgenerateaddressprivatekey) | Generate XDC private key
*xinFin()* | [**xdcGenerateWallet()**](./Api/XinFinApi.md#xdcgeneratewallet) | Generate XDC wallet
*xinFin()* | [**xdcGetBalance()**](./Api/XinFinApi.md#xdcgetbalance) | Get XDC Account balance
*xinFin()* | [**xdcGetBlock()**](./Api/XinFinApi.md#xdcgetblock) | Get XDC block by hash
*xinFin()* | [**xdcGetCurrentBlock()**](./Api/XinFinApi.md#xdcgetcurrentblock) | Get current block number
*xinFin()* | [**xdcGetTransaction()**](./Api/XinFinApi.md#xdcgettransaction) | Get XDC Transaction
*xinFin()* | [**xdcGetTransactionCount()**](./Api/XinFinApi.md#xdcgettransactioncount) | Get count of outgoing XDC transactions
*xinFin()* | [**xdcWeb3Driver()**](./Api/XinFinApi.md#xdcweb3driver) | Web3 HTTP driver


## Local Endpoints

You can perform certain operations without exposing any private information to Tatum's API.

### Local Wallet

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
*bitcoin()* | [**generateWallet()**](./Local/Wallet/Bitcoin.md#generatewallet) | Generate wallet
*bitcoin()* | [**generateAddressFromXpub()**](./Local/Wallet/Bitcoin.md#generateaddressfromxpub) | Generate address from xPub and index
*bitcoin()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/Bitcoin.md#generateaddressfromprivatekey) | Generate address from xPub and index
*bitcoin()* | [**generatePrivateKey()**](./Local/Wallet/Bitcoin.md#generateprivatekey) | Generate private key from mnemonic and index
*bitcoinCash()* | [**generateWallet()**](./Local/Wallet/BitcoinCash.md#generatewallet) | Generate wallet
*bitcoinCash()* | [**generateAddressFromXpub()**](./Local/Wallet/BitcoinCash.md#generateaddressfromxpub) | Generate address from xPub and index
*bitcoinCash()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/BitcoinCash.md#generateaddressfromprivatekey) | Generate address from xPub and index
*bitcoinCash()* | [**generatePrivateKey()**](./Local/Wallet/BitcoinCash.md#generateprivatekey) | Generate private key from mnemonic and index
*dogecoin()* | [**generateWallet()**](./Local/Wallet/Dogecoin.md#generatewallet) | Generate wallet
*dogecoin()* | [**generateAddressFromXpub()**](./Local/Wallet/Dogecoin.md#generateaddressfromxpub) | Generate address from xPub and index
*dogecoin()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/Dogecoin.md#generateaddressfromprivatekey) | Generate address from xPub and index
*dogecoin()* | [**generatePrivateKey()**](./Local/Wallet/Dogecoin.md#generateprivatekey) | Generate private key from mnemonic and index
*litecoin()* | [**generateWallet()**](./Local/Wallet/Litecoin.md#generatewallet) | Generate wallet
*litecoin()* | [**generateAddressFromXpub()**](./Local/Wallet/Litecoin.md#generateaddressfromxpub) | Generate address from xPub and index
*litecoin()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/Litecoin.md#generateaddressfromprivatekey) | Generate address from xPub and index
*litecoin()* | [**generatePrivateKey()**](./Local/Wallet/Litecoin.md#generateprivatekey) | Generate private key from mnemonic and index
*ethereum()* | [**generateWallet()**](./Local/Wallet/Ethereum.md#generatewallet) | Generate wallet
*ethereum()* | [**generateAddressFromXpub()**](./Local/Wallet/Ethereum.md#generateaddressfromxpub) | Generate address from xPub and index
*ethereum()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/Ethereum.md#generateaddressfromprivatekey) | Generate address from xPub and index
*ethereum()* | [**generatePrivateKey()**](./Local/Wallet/Ethereum.md#generateprivatekey) | Generate private key from mnemonic and index
*bsc()* | [**generateWallet()**](./Local/Wallet/BSC.md#generatewallet) | Generate wallet
*bsc()* | [**generateAddressFromXpub()**](./Local/Wallet/BSC.md#generateaddressfromxpub) | Generate address from xPub and index
*bsc()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/BSC.md#generateaddressfromprivatekey) | Generate address from xPub and index
*bsc()* | [**generatePrivateKey()**](./Local/Wallet/BSC.md#generateprivatekey) | Generate private key from mnemonic and index
*celo()* | [**generateWallet()**](./Local/Wallet/Celo.md#generatewallet) | Generate wallet
*celo()* | [**generateAddressFromXpub()**](./Local/Wallet/Celo.md#generateaddressfromxpub) | Generate address from xPub and index
*celo()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/Celo.md#generateaddressfromprivatekey) | Generate address from xPub and index
*celo()* | [**generatePrivateKey()**](./Local/Wallet/Celo.md#generateprivatekey) | Generate private key from mnemonic and index
*harmony()* | [**generateWallet()**](./Local/Wallet/Harmony.md#generatewallet) | Generate wallet
*harmony()* | [**generateAddressFromXpub()**](./Local/Wallet/Harmony.md#generateaddressfromxpub) | Generate address from xPub and index
*harmony()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/Harmony.md#generateaddressfromprivatekey) | Generate address from xPub and index
*harmony()* | [**generatePrivateKey()**](./Local/Wallet/Harmony.md#generateprivatekey) | Generate private key from mnemonic and index
*kcs()* | [**generateWallet()**](./Local/Wallet/KCS.md#generatewallet) | Generate wallet
*kcs()* | [**generateAddressFromXpub()**](./Local/Wallet/KCS.md#generateaddressfromxpub) | Generate address from xPub and index
*kcs()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/KCS.md#generateaddressfromprivatekey) | Generate address from xPub and index
*kcs()* | [**generatePrivateKey()**](./Local/Wallet/KCS.md#generateprivatekey) | Generate private key from mnemonic and index
*klaytn()* | [**generateWallet()**](./Local/Wallet/Klaytn.md#generatewallet) | Generate wallet
*klaytn()* | [**generateAddressFromXpub()**](./Local/Wallet/Klaytn.md#generateaddressfromxpub) | Generate address from xPub and index
*klaytn()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/Klaytn.md#generateaddressfromprivatekey) | Generate address from xPub and index
*klaytn()* | [**generatePrivateKey()**](./Local/Wallet/Klaytn.md#generateprivatekey) | Generate private key from mnemonic and index
*polygon()* | [**generateWallet()**](./Local/Wallet/Polygon.md#generatewallet) | Generate wallet
*polygon()* | [**generateAddressFromXpub()**](./Local/Wallet/Polygon.md#generateaddressfromxpub) | Generate address from xPub and index
*polygon()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/Polygon.md#generateaddressfromprivatekey) | Generate address from xPub and index
*polygon()* | [**generatePrivateKey()**](./Local/Wallet/Polygon.md#generateprivatekey) | Generate private key from mnemonic and index
*tron()* | [**generateWallet()**](./Local/Wallet/Tron.md#generatewallet) | Generate wallet
*tron()* | [**generateAddressFromXpub()**](./Local/Wallet/Tron.md#generateaddressfromxpub) | Generate address from xPub and index
*tron()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/Tron.md#generateaddressfromprivatekey) | Generate address from xPub and index
*tron()* | [**generatePrivateKey()**](./Local/Wallet/Tron.md#generateprivatekey) | Generate private key from mnemonic and index
*vechain()* | [**generateWallet()**](./Local/Wallet/VeChain.md#generatewallet) | Generate wallet
*vechain()* | [**generateAddressFromXpub()**](./Local/Wallet/VeChain.md#generateaddressfromxpub) | Generate address from xPub and index
*vechain()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/VeChain.md#generateaddressfromprivatekey) | Generate address from xPub and index
*vechain()* | [**generatePrivateKey()**](./Local/Wallet/VeChain.md#generateprivatekey) | Generate private key from mnemonic and index
*xdc()* | [**generateWallet()**](./Local/Wallet/XDC.md#generatewallet) | Generate wallet
*xdc()* | [**generateAddressFromXpub()**](./Local/Wallet/XDC.md#generateaddressfromxpub) | Generate address from xPub and index
*xdc()* | [**generateAddressFromPrivateKey()**](./Local/Wallet/XDC.md#generateaddressfromprivatekey) | Generate address from xPub and index
*xdc()* | [**generatePrivateKey()**](./Local/Wallet/XDC.md#generateprivatekey) | Generate private key from mnemonic and index


### Local Transaction

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
*bitcoin()* | [**sign()**](./Local/Transaction/Bitcoin.md#sign) | Sign transaction
*bitcoinCash()* | [**sign()**](./Local/Transaction/BitcoinCash.md#sign) | Sign transaction
*dogecoin()* | [**sign()**](./Local/Transaction/Dogecoin.md#sign) | Sign transaction
*litecoin()* | [**sign()**](./Local/Transaction/Litecoin.md#sign) | Sign transaction
*ethereum()* | [**sign()**](./Local/Transaction/Ethereum.md#sign) | Sign transaction


[[Back to top]](#) 
