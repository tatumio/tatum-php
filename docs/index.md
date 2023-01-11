# [Tatum - PHP SDK](https://github.com/tatumio/tatum-php)

## Table of Contents
- [Local Endpoints](#local-endpoints)
    - [Wallet](#local-wallet)
    - [Transaction](#local-transaction)
- [API Endpoints](#api-endpoints)

The Tatum SDK uses a [fluent interface](https://en.wikipedia.org/wiki/Fluent_interface) so that you can jump right into 
building your application without having to go back to the documentation.

The SDK is built like a tree with its root in ```new \Tatum\Sdk()```. 

Tree branches are populated as needed just-in-time so the memory footprint is tiny.

## Local Endpoints

You can perform certain operations locally without exposing any private information to Tatum's API.

### Local Wallet

Local Wallet operations

You can access any of the Local Wallet endpoints with the following syntax:

```php
<?php
(new \Tatum\Sdk())->{testnet/mainnet}()->local()->wallet();
```

### **local()->wallet()->bitcoin()** 

[🔹 **generateWallet()**](./Local/Wallet/Bitcoin.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Bitcoin.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Bitcoin.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Bitcoin.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->bitcoinCash()** 

[🔹 **generateWallet()**](./Local/Wallet/BitcoinCash.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/BitcoinCash.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/BitcoinCash.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/BitcoinCash.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->dogecoin()** 

[🔹 **generateWallet()**](./Local/Wallet/Dogecoin.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Dogecoin.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Dogecoin.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Dogecoin.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->litecoin()** 

[🔹 **generateWallet()**](./Local/Wallet/Litecoin.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Litecoin.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Litecoin.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Litecoin.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->ethereum()** 

[🔹 **generateWallet()**](./Local/Wallet/Ethereum.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Ethereum.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Ethereum.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Ethereum.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->bsc()** 

[🔹 **generateWallet()**](./Local/Wallet/BSC.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/BSC.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/BSC.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/BSC.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->celo()** 

[🔹 **generateWallet()**](./Local/Wallet/Celo.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Celo.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Celo.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Celo.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->harmony()** 

[🔹 **generateWallet()**](./Local/Wallet/Harmony.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Harmony.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Harmony.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Harmony.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->kcs()** 

[🔹 **generateWallet()**](./Local/Wallet/KCS.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/KCS.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/KCS.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/KCS.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->klaytn()** 

[🔹 **generateWallet()**](./Local/Wallet/Klaytn.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Klaytn.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Klaytn.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Klaytn.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->polygon()** 

[🔹 **generateWallet()**](./Local/Wallet/Polygon.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Polygon.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Polygon.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Polygon.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->tron()** 

[🔹 **generateWallet()**](./Local/Wallet/Tron.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Tron.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Tron.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Tron.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->vechain()** 

[🔹 **generateWallet()**](./Local/Wallet/VeChain.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/VeChain.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/VeChain.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/VeChain.md#generateprivatekey)

> Generate private key from mnemonic and index

### **local()->wallet()->xdc()** 

[🔹 **generateWallet()**](./Local/Wallet/XDC.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/XDC.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/XDC.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/XDC.md#generateprivatekey)

> Generate private key from mnemonic and index


[[Back to top]](#) 

### Local Transaction

Local Transaction Signing

You can access any of the Local Transaction endpoints with the following syntax:

```php
<?php
(new \Tatum\Sdk())->{testnet/mainnet}()->local()->transaction();
```

### **local()->transaction()->bitcoin()** 

[🔹 **sign()**](./Local/Transaction/Bitcoin.md#sign)

> Sign transaction

### **local()->transaction()->bitcoinCash()** 

[🔹 **sign()**](./Local/Transaction/BitcoinCash.md#sign)

> Sign transaction

### **local()->transaction()->dogecoin()** 

[🔹 **sign()**](./Local/Transaction/Dogecoin.md#sign)

> Sign transaction

### **local()->transaction()->litecoin()** 

[🔹 **sign()**](./Local/Transaction/Litecoin.md#sign)

> Sign transaction

### **local()->transaction()->ethereum()** 

[🔹 **sign()**](./Local/Transaction/Ethereum.md#sign)

> Sign transaction


[[Back to top]](#) 

## API Endpoints

You can access any of the API endpoints with the following syntax:

```php
<?php
(new \Tatum\Sdk())->{testnet/mainnet}()->api();
```


### **api()->account()**

[🔹 **activateAccount()**](./Api/AccountApi.md#activateaccount)

> **PUT** `/v3/ledger/account/{id}/activate`
> 
> Activate account

[🔹 **blockAmount()**](./Api/AccountApi.md#blockamount)

> **POST** `/v3/ledger/account/block/{id}`
> 
> Block an amount in an account

[🔹 **createAccount()**](./Api/AccountApi.md#createaccount)

> **POST** `/v3/ledger/account`
> 
> Create a virtual account

[🔹 **createAccountBatch()**](./Api/AccountApi.md#createaccountbatch)

> **POST** `/v3/ledger/account/batch`
> 
> Create multiple accounts in a batch call

[🔹 **createAccountXpub()**](./Api/AccountApi.md#createaccountxpub)

> **POST** `/v3/ledger/account`
> 
> Create a virtual account

[🔹 **deactivateAccount()**](./Api/AccountApi.md#deactivateaccount)

> **PUT** `/v3/ledger/account/{id}/deactivate`
> 
> Deactivate account

[🔹 **deleteAllBlockAmount()**](./Api/AccountApi.md#deleteallblockamount)

> **DELETE** `/v3/ledger/account/block/account/{id}`
> 
> Unblock all blocked amounts in an account

[🔹 **deleteBlockAmount()**](./Api/AccountApi.md#deleteblockamount)

> **DELETE** `/v3/ledger/account/block/{id}`
> 
> Unblock a blocked amount in an account

[🔹 **freezeAccount()**](./Api/AccountApi.md#freezeaccount)

> **PUT** `/v3/ledger/account/{id}/freeze`
> 
> Freeze account

[🔹 **getAccountBalance()**](./Api/AccountApi.md#getaccountbalance)

> **GET** `/v3/ledger/account/{id}/balance`
> 
> Get account balance

[🔹 **getAccountByAccountId()**](./Api/AccountApi.md#getaccountbyaccountid)

> **GET** `/v3/ledger/account/{id}`
> 
> Get account by ID

[🔹 **getAccounts()**](./Api/AccountApi.md#getaccounts)

> **GET** `/v3/ledger/account`
> 
> List all accounts

[🔹 **getAccountsByCustomerId()**](./Api/AccountApi.md#getaccountsbycustomerid)

> **GET** `/v3/ledger/account/customer/{id}`
> 
> List all customer accounts

[🔹 **getAccountsCount()**](./Api/AccountApi.md#getaccountscount)

> **GET** `/v3/ledger/account/count`
> 
> Count of found entities for get accounts request

[🔹 **getBlockAmount()**](./Api/AccountApi.md#getblockamount)

> **GET** `/v3/ledger/account/block/{id}`
> 
> Get blocked amounts in an account

[🔹 **getBlockAmountById()**](./Api/AccountApi.md#getblockamountbyid)

> **GET** `/v3/ledger/account/block/{id}/detail`
> 
> Get blocked amount by ID

[🔹 **unblockAmountWithTransaction()**](./Api/AccountApi.md#unblockamountwithtransaction)

> **PUT** `/v3/ledger/account/block/{id}`
> 
> Unblock an amount in an account and perform a transaction

[🔹 **unfreezeAccount()**](./Api/AccountApi.md#unfreezeaccount)

> **PUT** `/v3/ledger/account/{id}/unfreeze`
> 
> Unfreeze account

[🔹 **updateAccountByAccountId()**](./Api/AccountApi.md#updateaccountbyaccountid)

> **PUT** `/v3/ledger/account/{id}`
> 
> Update account


### **api()->algorand()**

[🔹 **algoNodeGetDriver()**](./Api/AlgorandApi.md#algonodegetdriver)

> **GET** `/v3/algorand/node/algod/{xApiKey}/{algodPath}`
> 
> Access Algorand Algod GET node endpoints

[🔹 **algoNodeIndexerGetDriver()**](./Api/AlgorandApi.md#algonodeindexergetdriver)

> **GET** `/v3/algorand/node/indexer/{xApiKey}/{indexerPath}`
> 
> Access Algorand Indexer GET node endpoints

[🔹 **algoNodePostDriver()**](./Api/AlgorandApi.md#algonodepostdriver)

> **POST** `/v3/algorand/node/algod/{xApiKey}/{algodPath}`
> 
> Access Algorand Algod POST node endpoints

[🔹 **algoandBroadcast()**](./Api/AlgorandApi.md#algoandbroadcast)

> **POST** `/v3/algorand/broadcast`
> 
> Broadcast signed Algorand transaction

[🔹 **algorandGenerateAddress()**](./Api/AlgorandApi.md#algorandgenerateaddress)

> **GET** `/v3/algorand/address/{priv}`
> 
> Generate Algorand account address from private key

[🔹 **algorandGenerateWallet()**](./Api/AlgorandApi.md#algorandgeneratewallet)

> **GET** `/v3/algorand/wallet`
> 
> Generate Algorand wallet

[🔹 **algorandGetBalance()**](./Api/AlgorandApi.md#algorandgetbalance)

> **GET** `/v3/algorand/account/balance/{address}`
> 
> Get Algorand Account balance

[🔹 **algorandGetBlock()**](./Api/AlgorandApi.md#algorandgetblock)

> **GET** `/v3/algorand/block/{roundNumber}`
> 
> Get Algorand block by block round number

[🔹 **algorandGetCurrentBlock()**](./Api/AlgorandApi.md#algorandgetcurrentblock)

> **GET** `/v3/algorand/block/current`
> 
> Get current block number

[🔹 **algorandGetPayTransactionsByFromTo()**](./Api/AlgorandApi.md#algorandgetpaytransactionsbyfromto)

> **GET** `/v3/algorand/transactions/{from}/{to}`
> 
> Get Algorand Transactions between from and to

[🔹 **algorandGetTransaction()**](./Api/AlgorandApi.md#algorandgettransaction)

> **GET** `/v3/algorand/transaction/{txid}`
> 
> Get Algorand Transaction

[🔹 **receiveAlgorandAsset()**](./Api/AlgorandApi.md#receivealgorandasset)

> **POST** `/v3/algorand/asset/receive`
> 
> Enable receiving asset on account

[🔹 **receiveAlgorandAssetKMS()**](./Api/AlgorandApi.md#receivealgorandassetkms)

> **POST** `/v3/algorand/asset/receive`
> 
> Enable receiving asset on account

[🔹 **transferAlgorandBlockchain()**](./Api/AlgorandApi.md#transferalgorandblockchain)

> **POST** `/v3/algorand/transaction`
> 
> Send Algos to an Algorand account

[🔹 **transferAlgorandBlockchainKMS()**](./Api/AlgorandApi.md#transferalgorandblockchainkms)

> **POST** `/v3/algorand/transaction`
> 
> Send Algos to an Algorand account


### **api()->auction()**

[🔹 **approveNftSpending()**](./Api/AuctionApi.md#approvenftspending)

> **POST** `/v3/blockchain/auction/approve`
> 
> Allow the NFT auction or marketplace to transfer an asset

[🔹 **approveNftSpendingCelo()**](./Api/AuctionApi.md#approvenftspendingcelo)

> **POST** `/v3/blockchain/auction/approve`
> 
> Allow the NFT auction or marketplace to transfer an asset

[🔹 **approveNftSpendingCeloKMS()**](./Api/AuctionApi.md#approvenftspendingcelokms)

> **POST** `/v3/blockchain/auction/approve`
> 
> Allow the NFT auction or marketplace to transfer an asset

[🔹 **approveNftSpendingKMS()**](./Api/AuctionApi.md#approvenftspendingkms)

> **POST** `/v3/blockchain/auction/approve`
> 
> Allow the NFT auction or marketplace to transfer an asset

[🔹 **bidOnAuction()**](./Api/AuctionApi.md#bidonauction)

> **POST** `/v3/blockchain/auction/bid`
> 
> Bid for an asset at the NFT auction

[🔹 **bidOnAuctionCelo()**](./Api/AuctionApi.md#bidonauctioncelo)

> **POST** `/v3/blockchain/auction/bid`
> 
> Bid for an asset at the NFT auction

[🔹 **bidOnAuctionCeloKMS()**](./Api/AuctionApi.md#bidonauctioncelokms)

> **POST** `/v3/blockchain/auction/bid`
> 
> Bid for an asset at the NFT auction

[🔹 **bidOnAuctionKMS()**](./Api/AuctionApi.md#bidonauctionkms)

> **POST** `/v3/blockchain/auction/bid`
> 
> Bid for an asset at the NFT auction

[🔹 **bloAucUpdateFeeRecipient()**](./Api/AuctionApi.md#bloaucupdatefeerecipient)

> **PUT** `/v3/blockchain/auction/recipient`
> 
> Update the recipient of the NFT auction fee

[🔹 **bloAucUpdateFeeRecipientCelo()**](./Api/AuctionApi.md#bloaucupdatefeerecipientcelo)

> **PUT** `/v3/blockchain/auction/recipient`
> 
> Update the recipient of the NFT auction fee

[🔹 **bloAucUpdateFeeRecipientCeloKMS()**](./Api/AuctionApi.md#bloaucupdatefeerecipientcelokms)

> **PUT** `/v3/blockchain/auction/recipient`
> 
> Update the recipient of the NFT auction fee

[🔹 **bloAucUpdateFeeRecipientKMS()**](./Api/AuctionApi.md#bloaucupdatefeerecipientkms)

> **PUT** `/v3/blockchain/auction/recipient`
> 
> Update the recipient of the NFT auction fee

[🔹 **cancelAuction()**](./Api/AuctionApi.md#cancelauction)

> **POST** `/v3/blockchain/auction/cancel`
> 
> Cancel the selling of an asset at the NFT auction

[🔹 **cancelAuctionCelo()**](./Api/AuctionApi.md#cancelauctioncelo)

> **POST** `/v3/blockchain/auction/cancel`
> 
> Cancel the selling of an asset at the NFT auction

[🔹 **cancelAuctionCeloKMS()**](./Api/AuctionApi.md#cancelauctioncelokms)

> **POST** `/v3/blockchain/auction/cancel`
> 
> Cancel the selling of an asset at the NFT auction

[🔹 **cancelAuctionKMS()**](./Api/AuctionApi.md#cancelauctionkms)

> **POST** `/v3/blockchain/auction/cancel`
> 
> Cancel the selling of an asset at the NFT auction

[🔹 **createAuction()**](./Api/AuctionApi.md#createauction)

> **POST** `/v3/blockchain/auction/sell`
> 
> Sell an asset at the NFT auction

[🔹 **createAuctionCelo()**](./Api/AuctionApi.md#createauctioncelo)

> **POST** `/v3/blockchain/auction/sell`
> 
> Sell an asset at the NFT auction

[🔹 **createAuctionCeloKMS()**](./Api/AuctionApi.md#createauctioncelokms)

> **POST** `/v3/blockchain/auction/sell`
> 
> Sell an asset at the NFT auction

[🔹 **createAuctionKMS()**](./Api/AuctionApi.md#createauctionkms)

> **POST** `/v3/blockchain/auction/sell`
> 
> Sell an asset at the NFT auction

[🔹 **generateAuction()**](./Api/AuctionApi.md#generateauction)

> **POST** `/v3/blockchain/auction`
> 
> Create an NFT auction

[🔹 **generateAuctionCelo()**](./Api/AuctionApi.md#generateauctioncelo)

> **POST** `/v3/blockchain/auction`
> 
> Create an NFT auction

[🔹 **generateAuctionCeloKMS()**](./Api/AuctionApi.md#generateauctioncelokms)

> **POST** `/v3/blockchain/auction`
> 
> Create an NFT auction

[🔹 **generateAuctionKMS()**](./Api/AuctionApi.md#generateauctionkms)

> **POST** `/v3/blockchain/auction`
> 
> Create an NFT auction

[🔹 **getAuction()**](./Api/AuctionApi.md#getauction)

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/{id}`
> 
> Get information about an auctioned asset at the NFT auction

[🔹 **getAuctionFee()**](./Api/AuctionApi.md#getauctionfee)

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/fee`
> 
> Get the NFT auction fee

[🔹 **getAuctionFeeRecipient()**](./Api/AuctionApi.md#getauctionfeerecipient)

> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/recipient`
> 
> Get the recipient of the NFT auction fee

[🔹 **settleAuction()**](./Api/AuctionApi.md#settleauction)

> **POST** `/v3/blockchain/auction/settle`
> 
> Settle an NFT auction

[🔹 **settleAuctionCelo()**](./Api/AuctionApi.md#settleauctioncelo)

> **POST** `/v3/blockchain/auction/settle`
> 
> Settle an NFT auction

[🔹 **settleAuctionCeloKMS()**](./Api/AuctionApi.md#settleauctioncelokms)

> **POST** `/v3/blockchain/auction/settle`
> 
> Settle an NFT auction

[🔹 **settleAuctionKMS()**](./Api/AuctionApi.md#settleauctionkms)

> **POST** `/v3/blockchain/auction/settle`
> 
> Settle an NFT auction

[🔹 **updateFeeAuction()**](./Api/AuctionApi.md#updatefeeauction)

> **PUT** `/v3/blockchain/auction/fee`
> 
> Update the NFT auction fee

[🔹 **updateFeeAuctionCelo()**](./Api/AuctionApi.md#updatefeeauctioncelo)

> **PUT** `/v3/blockchain/auction/fee`
> 
> Update the NFT auction fee

[🔹 **updateFeeAuctionCeloKMS()**](./Api/AuctionApi.md#updatefeeauctioncelokms)

> **PUT** `/v3/blockchain/auction/fee`
> 
> Update the NFT auction fee

[🔹 **updateFeeAuctionKMS()**](./Api/AuctionApi.md#updatefeeauctionkms)

> **PUT** `/v3/blockchain/auction/fee`
> 
> Update the NFT auction fee


### **api()->bNBBeaconChain()**

[🔹 **bnbBroadcast()**](./Api/BNBBeaconChainApi.md#bnbbroadcast)

> **POST** `/v3/bnb/broadcast`
> 
> Broadcast signed BNB transaction

[🔹 **bnbGenerateWallet()**](./Api/BNBBeaconChainApi.md#bnbgeneratewallet)

> **GET** `/v3/bnb/account`
> 
> Generate Binance wallet

[🔹 **bnbGetAccount()**](./Api/BNBBeaconChainApi.md#bnbgetaccount)

> **GET** `/v3/bnb/account/{address}`
> 
> Get Binance Account

[🔹 **bnbGetBlock()**](./Api/BNBBeaconChainApi.md#bnbgetblock)

> **GET** `/v3/bnb/block/{height}`
> 
> Get Binance Transactions in Block

[🔹 **bnbGetCurrentBlock()**](./Api/BNBBeaconChainApi.md#bnbgetcurrentblock)

> **GET** `/v3/bnb/block/current`
> 
> Get Binance current block

[🔹 **bnbGetTransaction()**](./Api/BNBBeaconChainApi.md#bnbgettransaction)

> **GET** `/v3/bnb/transaction/{hash}`
> 
> Get Binance Transaction

[🔹 **bnbGetTxByAccount()**](./Api/BNBBeaconChainApi.md#bnbgettxbyaccount)

> **GET** `/v3/bnb/account/transaction/{address}`
> 
> Get Binance Transactions By Address

[🔹 **transferBnbBlockchain()**](./Api/BNBBeaconChainApi.md#transferbnbblockchain)

> **POST** `/v3/bnb/transaction`
> 
> Send Binance / Binance Token from account to account

[🔹 **transferBnbBlockchainKMS()**](./Api/BNBBeaconChainApi.md#transferbnbblockchainkms)

> **POST** `/v3/bnb/transaction`
> 
> Send Binance / Binance Token from account to account


### **api()->bNBSmartChain()**

[🔹 **bscBroadcast()**](./Api/BNBSmartChainApi.md#bscbroadcast)

> **POST** `/v3/bsc/broadcast`
> 
> Broadcast signed BSC transaction

[🔹 **bscGenerateAddress()**](./Api/BNBSmartChainApi.md#bscgenerateaddress)

> **GET** `/v3/bsc/address/{xpub}/{index}`
> 
> Generate BSC account address from Extended public key

[🔹 **bscGenerateAddressPrivateKey()**](./Api/BNBSmartChainApi.md#bscgenerateaddressprivatekey)

> **POST** `/v3/bsc/wallet/priv`
> 
> Generate BSC private key

[🔹 **bscGenerateWallet()**](./Api/BNBSmartChainApi.md#bscgeneratewallet)

> **GET** `/v3/bsc/wallet`
> 
> Generate BSC wallet

[🔹 **bscGetBalance()**](./Api/BNBSmartChainApi.md#bscgetbalance)

> **GET** `/v3/bsc/account/balance/{address}`
> 
> Get BSC Account balance

[🔹 **bscGetBlock()**](./Api/BNBSmartChainApi.md#bscgetblock)

> **GET** `/v3/bsc/block/{hash}`
> 
> Get BSC block by hash

[🔹 **bscGetCurrentBlock()**](./Api/BNBSmartChainApi.md#bscgetcurrentblock)

> **GET** `/v3/bsc/block/current`
> 
> Get current block number

[🔹 **bscGetTransaction()**](./Api/BNBSmartChainApi.md#bscgettransaction)

> **GET** `/v3/bsc/transaction/{hash}`
> 
> Get BSC Transaction

[🔹 **bscGetTransactionCount()**](./Api/BNBSmartChainApi.md#bscgettransactioncount)

> **GET** `/v3/bsc/transaction/count/{address}`
> 
> Get count of outgoing BSC transactions

[🔹 **bscWeb3Driver()**](./Api/BNBSmartChainApi.md#bscweb3driver)

> **POST** `/v3/bsc/web3/{xApiKey}`
> 
> Web3 HTTP driver

[🔹 **callBscSmartContractMethod()**](./Api/BNBSmartChainApi.md#callbscsmartcontractmethod)

> **POST** `/v3/bsc/smartcontract`
> 
> Invoke a method in a smart contract on BNB Smart Chain

[🔹 **callBscSmartContractMethodKMS()**](./Api/BNBSmartChainApi.md#callbscsmartcontractmethodkms)

> **POST** `/v3/bsc/smartcontract`
> 
> Invoke a method in a smart contract on BNB Smart Chain

[🔹 **callBscSmartContractReadMethod()**](./Api/BNBSmartChainApi.md#callbscsmartcontractreadmethod)

> **POST** `/v3/bsc/smartcontract`
> 
> Invoke a method in a smart contract on BNB Smart Chain

[🔹 **transferBscBlockchain()**](./Api/BNBSmartChainApi.md#transferbscblockchain)

> **POST** `/v3/bsc/transaction`
> 
> Send BSC / BEP20 from account to account

[🔹 **transferBscBlockchainKMS()**](./Api/BNBSmartChainApi.md#transferbscblockchainkms)

> **POST** `/v3/bsc/transaction`
> 
> Send BSC / BEP20 from account to account


### **api()->bitcoin()**

[🔹 **btcBroadcast()**](./Api/BitcoinApi.md#btcbroadcast)

> **POST** `/v3/bitcoin/broadcast`
> 
> Broadcast a signed Bitcoin transaction

[🔹 **btcGenerateAddress()**](./Api/BitcoinApi.md#btcgenerateaddress)

> **GET** `/v3/bitcoin/address/{xpub}/{index}`
> 
> Generate a Bitcoin address from the wallet's extended public key

[🔹 **btcGenerateAddressPrivateKey()**](./Api/BitcoinApi.md#btcgenerateaddressprivatekey)

> **POST** `/v3/bitcoin/wallet/priv`
> 
> Generate the private key for a Bitcoin address

[🔹 **btcGenerateWallet()**](./Api/BitcoinApi.md#btcgeneratewallet)

> **GET** `/v3/bitcoin/wallet`
> 
> Generate a Bitcoin wallet

[🔹 **btcGetBalanceOfAddress()**](./Api/BitcoinApi.md#btcgetbalanceofaddress)

> **GET** `/v3/bitcoin/address/balance/{address}`
> 
> Get the balance of a Bitcoin address

[🔹 **btcGetBlock()**](./Api/BitcoinApi.md#btcgetblock)

> **GET** `/v3/bitcoin/block/{hash}`
> 
> Get a Bitcoin block by its hash or height

[🔹 **btcGetBlockChainInfo()**](./Api/BitcoinApi.md#btcgetblockchaininfo)

> **GET** `/v3/bitcoin/info`
> 
> Get Bitcoin blockchain information

[🔹 **btcGetBlockHash()**](./Api/BitcoinApi.md#btcgetblockhash)

> **GET** `/v3/bitcoin/block/hash/{i}`
> 
> Get the hash of a Bitcoin block

[🔹 **btcGetMempool()**](./Api/BitcoinApi.md#btcgetmempool)

> **GET** `/v3/bitcoin/mempool`
> 
> Get transactions from the Bitcoin mempool

[🔹 **btcGetRawTransaction()**](./Api/BitcoinApi.md#btcgetrawtransaction)

> **GET** `/v3/bitcoin/transaction/{hash}`
> 
> Get a Bitcoin transaction by its hash

[🔹 **btcGetTxByAddress()**](./Api/BitcoinApi.md#btcgettxbyaddress)

> **GET** `/v3/bitcoin/transaction/address/{address}`
> 
> Get all transactions for a Bitcoin address

[🔹 **btcGetUTXO()**](./Api/BitcoinApi.md#btcgetutxo)

> **GET** `/v3/bitcoin/utxo/{hash}/{index}`
> 
> Get information about a transaction output (UTXO) in a Bitcoin transaction

[🔹 **btcRpcDriver()**](./Api/BitcoinApi.md#btcrpcdriver)

> **POST** `/v3/bitcoin/node`
> 
> Connect to a Bitcoin node through an RPC driver

[🔹 **btcTransactionFromAddress()**](./Api/BitcoinApi.md#btctransactionfromaddress)

> **POST** `/v3/bitcoin/transaction`
> 
> Send BTC to Bitcoin addresses

[🔹 **btcTransactionFromAddressKMS()**](./Api/BitcoinApi.md#btctransactionfromaddresskms)

> **POST** `/v3/bitcoin/transaction`
> 
> Send BTC to Bitcoin addresses

[🔹 **btcTransactionFromUTXO()**](./Api/BitcoinApi.md#btctransactionfromutxo)

> **POST** `/v3/bitcoin/transaction`
> 
> Send BTC to Bitcoin addresses

[🔹 **btcTransactionFromUTXOKMS()**](./Api/BitcoinApi.md#btctransactionfromutxokms)

> **POST** `/v3/bitcoin/transaction`
> 
> Send BTC to Bitcoin addresses


### **api()->bitcoinCash()**

[🔹 **bchBroadcast()**](./Api/BitcoinCashApi.md#bchbroadcast)

> **POST** `/v3/bcash/broadcast`
> 
> Broadcast signed Bitcoin Cash transaction

[🔹 **bchGenerateAddress()**](./Api/BitcoinCashApi.md#bchgenerateaddress)

> **GET** `/v3/bcash/address/{xpub}/{index}`
> 
> Generate Bitcoin Cash deposit address from Extended public key

[🔹 **bchGenerateAddressPrivateKey()**](./Api/BitcoinCashApi.md#bchgenerateaddressprivatekey)

> **POST** `/v3/bcash/wallet/priv`
> 
> Generate Bitcoin Cash private key

[🔹 **bchGenerateWallet()**](./Api/BitcoinCashApi.md#bchgeneratewallet)

> **GET** `/v3/bcash/wallet`
> 
> Generate Bitcoin Cash wallet

[🔹 **bchGetBlock()**](./Api/BitcoinCashApi.md#bchgetblock)

> **GET** `/v3/bcash/block/{hash}`
> 
> Get Bitcoin Cash Block by hash

[🔹 **bchGetBlockChainInfo()**](./Api/BitcoinCashApi.md#bchgetblockchaininfo)

> **GET** `/v3/bcash/info`
> 
> Get Bitcoin Cash Blockchain Information

[🔹 **bchGetBlockHash()**](./Api/BitcoinCashApi.md#bchgetblockhash)

> **GET** `/v3/bcash/block/hash/{i}`
> 
> Get Bitcoin Cash Block hash

[🔹 **bchGetRawTransaction()**](./Api/BitcoinCashApi.md#bchgetrawtransaction)

> **GET** `/v3/bcash/transaction/{hash}`
> 
> Get Bitcoin Cash Transaction by hash

[🔹 **bchGetTxByAddress()**](./Api/BitcoinCashApi.md#bchgettxbyaddress)

> **GET** `/v3/bcash/transaction/address/{address}`
> 
> Get Bitcoin Cash Transactions by address

[🔹 **bchRpcDriver()**](./Api/BitcoinCashApi.md#bchrpcdriver)

> **POST** `/v3/bcash/node`
> 
> JSON RPC HTTP driver

[🔹 **bchTransaction()**](./Api/BitcoinCashApi.md#bchtransaction)

> **POST** `/v3/bcash/transaction`
> 
> Send BCH to Bitcoin Cash addresses

[🔹 **bchTransactionKMS()**](./Api/BitcoinCashApi.md#bchtransactionkms)

> **POST** `/v3/bcash/transaction`
> 
> Send BCH to Bitcoin Cash addresses


### **api()->blockchainAddresses()**

[🔹 **addressExists()**](./Api/BlockchainAddressesApi.md#addressexists)

> **GET** `/v3/offchain/account/address/{address}/{currency}`
> 
> Check whether a blockchain address is assigned to a virtual account

[🔹 **assignAddress()**](./Api/BlockchainAddressesApi.md#assignaddress)

> **POST** `/v3/offchain/account/{id}/address/{address}`
> 
> Assign a blockchain address to a virtual account

[🔹 **generateDepositAddress()**](./Api/BlockchainAddressesApi.md#generatedepositaddress)

> **POST** `/v3/offchain/account/{id}/address`
> 
> Create a deposit address for a virtual account

[🔹 **generateDepositAddressesBatch()**](./Api/BlockchainAddressesApi.md#generatedepositaddressesbatch)

> **POST** `/v3/offchain/account/address/batch`
> 
> Create multiple deposit addresses for a virtual account

[🔹 **getAllDepositAddresses()**](./Api/BlockchainAddressesApi.md#getalldepositaddresses)

> **GET** `/v3/offchain/account/{id}/address`
> 
> Get all deposit addresses for a virtual account

[🔹 **removeAddress()**](./Api/BlockchainAddressesApi.md#removeaddress)

> **DELETE** `/v3/offchain/account/{id}/address/{address}`
> 
> Remove a deposit address from a virtual account


### **api()->blockchainFees()**

[🔹 **bscEstimateGas()**](./Api/BlockchainFeesApi.md#bscestimategas)

> **POST** `/v3/bsc/gas`
> 
> Estimate BNB Smart Chain transaction fees

[🔹 **celoEstimateGas()**](./Api/BlockchainFeesApi.md#celoestimategas)

> **POST** `/v3/celo/gas`
> 
> Estimate Celo Chain transaction fees

[🔹 **egldEstimateGas()**](./Api/BlockchainFeesApi.md#egldestimategas)

> **POST** `/v3/egld/gas`
> 
> Estimate EGLD transaction fees

[🔹 **estimateFee()**](./Api/BlockchainFeesApi.md#estimatefee)

> **POST** `/v3/blockchain/estimate`
> 
> Estimate the fee for a transaction

[🔹 **estimateFeeBatchMintNft()**](./Api/BlockchainFeesApi.md#estimatefeebatchmintnft)

> **POST** `/v3/blockchain/estimate`
> 
> Estimate the fee for a transaction

[🔹 **estimateFeeDeployCustodialWallet()**](./Api/BlockchainFeesApi.md#estimatefeedeploycustodialwallet)

> **POST** `/v3/blockchain/estimate`
> 
> Estimate the fee for a transaction

[🔹 **estimateFeeFromAddress()**](./Api/BlockchainFeesApi.md#estimatefeefromaddress)

> **POST** `/v3/blockchain/estimate`
> 
> Estimate the fee for a transaction

[🔹 **estimateFeeFromUTXO()**](./Api/BlockchainFeesApi.md#estimatefeefromutxo)

> **POST** `/v3/blockchain/estimate`
> 
> Estimate the fee for a transaction

[🔹 **estimateFeeTransferFromCustodial()**](./Api/BlockchainFeesApi.md#estimatefeetransferfromcustodial)

> **POST** `/v3/blockchain/estimate`
> 
> Estimate the fee for a transaction

[🔹 **ethEstimateGas()**](./Api/BlockchainFeesApi.md#ethestimategas)

> **POST** `/v3/ethereum/gas`
> 
> Estimate Ethereum transaction fees

[🔹 **ethEstimateGasBatch()**](./Api/BlockchainFeesApi.md#ethestimategasbatch)

> **POST** `/v3/ethereum/gas/batch`
> 
> Estimate multiple Ethereum transaction fees

[🔹 **getBlockchainFee()**](./Api/BlockchainFeesApi.md#getblockchainfee)

> **GET** `/v3/blockchain/fee/{chain}`
> 
> Get recommended blockchain fee / gas price

[🔹 **kcsEstimateGas()**](./Api/BlockchainFeesApi.md#kcsestimategas)

> **POST** `/v3/kcs/gas`
> 
> Estimate KuCoin Community Chain transaction fees

[🔹 **klaytnEstimateGas()**](./Api/BlockchainFeesApi.md#klaytnestimategas)

> **POST** `/v3/klaytn/gas`
> 
> Estimate Klaytn transaction fees

[🔹 **polygonEstimateGas()**](./Api/BlockchainFeesApi.md#polygonestimategas)

> **POST** `/v3/polygon/gas`
> 
> Estimate Polygon transaction fees

[🔹 **vetEstimateGas()**](./Api/BlockchainFeesApi.md#vetestimategas)

> **POST** `/v3/vet/transaction/gas`
> 
> Estimate VeChain Gas for transaction

[🔹 **xdcEstimateGas()**](./Api/BlockchainFeesApi.md#xdcestimategas)

> **POST** `/v3/xdc/gas`
> 
> Estimate XinFin transaction fees


### **api()->blockchainOperations()**

[🔹 **bnbAssetOffchain()**](./Api/BlockchainOperationsApi.md#bnbassetoffchain)

> **POST** `/v3/offchain/bnb/asset`
> 
> Create a BNB-based asset

[🔹 **deployAlgoErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deployalgoerc20offchainkmsaddress)

> **POST** `/v3/offchain/algo/erc20/deploy`
> 
> Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployAlgoErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deployalgoerc20offchainmnemonicaddress)

> **POST** `/v3/offchain/algo/erc20/deploy`
> 
> Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployAlgoErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deployalgoerc20offchainpkaddress)

> **POST** `/v3/offchain/algo/erc20/deploy`
> 
> Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployCeloErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainkmsaddress)

> **POST** `/v3/offchain/celo/erc20/deploy`
> 
> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployCeloErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainkmsxpub)

> **POST** `/v3/offchain/celo/erc20/deploy`
> 
> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployCeloErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainmnemxpub)

> **POST** `/v3/offchain/celo/erc20/deploy`
> 
> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployCeloErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainmnemonicaddress)

> **POST** `/v3/offchain/celo/erc20/deploy`
> 
> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployCeloErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainpkaddress)

> **POST** `/v3/offchain/celo/erc20/deploy`
> 
> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployCeloErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainpkxpub)

> **POST** `/v3/offchain/celo/erc20/deploy`
> 
> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deployerc20offchainkmsaddress)

> **POST** `/v3/offchain/ethereum/erc20/deploy`
> 
> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

[🔹 **deployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#deployerc20offchainkmsxpub)

> **POST** `/v3/offchain/ethereum/erc20/deploy`
> 
> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

[🔹 **deployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#deployerc20offchainmnemxpub)

> **POST** `/v3/offchain/ethereum/erc20/deploy`
> 
> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

[🔹 **deployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deployerc20offchainmnemonicaddress)

> **POST** `/v3/offchain/ethereum/erc20/deploy`
> 
> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

[🔹 **deployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deployerc20offchainpkaddress)

> **POST** `/v3/offchain/ethereum/erc20/deploy`
> 
> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

[🔹 **deployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#deployerc20offchainpkxpub)

> **POST** `/v3/offchain/ethereum/erc20/deploy`
> 
> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

[🔹 **deployKCSErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainkmsaddress)

> **POST** `/v3/offchain/kcs/erc20/deploy`
> 
> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployKCSErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainkmsxpub)

> **POST** `/v3/offchain/kcs/erc20/deploy`
> 
> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployKCSErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainmnemxpub)

> **POST** `/v3/offchain/kcs/erc20/deploy`
> 
> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployKCSErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainmnemonicaddress)

> **POST** `/v3/offchain/kcs/erc20/deploy`
> 
> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployKCSErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainpkaddress)

> **POST** `/v3/offchain/kcs/erc20/deploy`
> 
> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployKCSErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainpkxpub)

> **POST** `/v3/offchain/kcs/erc20/deploy`
> 
> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **deployTrcOffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainkmsaddress)

> **POST** `/v3/offchain/tron/trc/deploy`
> 
> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

[🔹 **deployTrcOffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainkmsxpub)

> **POST** `/v3/offchain/tron/trc/deploy`
> 
> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

[🔹 **deployTrcOffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainmnemxpub)

> **POST** `/v3/offchain/tron/trc/deploy`
> 
> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

[🔹 **deployTrcOffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainmnemonicaddress)

> **POST** `/v3/offchain/tron/trc/deploy`
> 
> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

[🔹 **deployTrcOffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainpkaddress)

> **POST** `/v3/offchain/tron/trc/deploy`
> 
> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

[🔹 **deployTrcOffchainPKXpub()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainpkxpub)

> **POST** `/v3/offchain/tron/trc/deploy`
> 
> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

[🔹 **erc20()**](./Api/BlockchainOperationsApi.md#erc20)

> **POST** `/v3/offchain/ethereum/erc20`
> 
> Register a new Ethereum ERC-20 token in the virtual account

[🔹 **erc20Address()**](./Api/BlockchainOperationsApi.md#erc20address)

> **POST** `/v3/offchain/ethereum/erc20`
> 
> Register a new Ethereum ERC-20 token in the virtual account

[🔹 **offBscDeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainkmsaddress)

> **POST** `/v3/offchain/bsc/bep20/deploy`
> 
> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

[🔹 **offBscDeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainkmsxpub)

> **POST** `/v3/offchain/bsc/bep20/deploy`
> 
> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

[🔹 **offBscDeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainmnemxpub)

> **POST** `/v3/offchain/bsc/bep20/deploy`
> 
> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

[🔹 **offBscDeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainmnemonicaddress)

> **POST** `/v3/offchain/bsc/bep20/deploy`
> 
> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

[🔹 **offBscDeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainpkaddress)

> **POST** `/v3/offchain/bsc/bep20/deploy`
> 
> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

[🔹 **offBscDeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainpkxpub)

> **POST** `/v3/offchain/bsc/bep20/deploy`
> 
> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

[🔹 **offBscErc20()**](./Api/BlockchainOperationsApi.md#offbscerc20)

> **POST** `/v3/offchain/bsc/bep20`
> 
> Register a new BNB Smart Chain BEP-20 token in the virtual account

[🔹 **offBscErc20Address()**](./Api/BlockchainOperationsApi.md#offbscerc20address)

> **POST** `/v3/offchain/bsc/bep20`
> 
> Register a new BNB Smart Chain BEP-20 token in the virtual account

[🔹 **offCelErc20()**](./Api/BlockchainOperationsApi.md#offcelerc20)

> **POST** `/v3/offchain/celo/erc20`
> 
> Register a new Celo ERC-20-equivalent token in the virtual account

[🔹 **offCelErc20Address()**](./Api/BlockchainOperationsApi.md#offcelerc20address)

> **POST** `/v3/offchain/celo/erc20`
> 
> Register a new Celo ERC-20-equivalent token in the virtual account

[🔹 **offEglTransferEth()**](./Api/BlockchainOperationsApi.md#offegltransfereth)

> **POST** `/v3/offchain/egld/transfer`
> 
> Send EGLD from a virtual account to the blockchain

[🔹 **offEglTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offegltransferethkms)

> **POST** `/v3/offchain/egld/transfer`
> 
> Send EGLD from a virtual account to the blockchain

[🔹 **offEglTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offegltransferethmnemonic)

> **POST** `/v3/offchain/egld/transfer`
> 
> Send EGLD from a virtual account to the blockchain

[🔹 **offKlaDeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainkmsaddress)

> **POST** `/v3/offchain/klaytn/erc20/deploy`
> 
> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offKlaDeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainkmsxpub)

> **POST** `/v3/offchain/klaytn/erc20/deploy`
> 
> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offKlaDeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainmnemxpub)

> **POST** `/v3/offchain/klaytn/erc20/deploy`
> 
> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offKlaDeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainmnemonicaddress)

> **POST** `/v3/offchain/klaytn/erc20/deploy`
> 
> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offKlaDeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainpkaddress)

> **POST** `/v3/offchain/klaytn/erc20/deploy`
> 
> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offKlaDeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainpkxpub)

> **POST** `/v3/offchain/klaytn/erc20/deploy`
> 
> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offKlaTransferEth()**](./Api/BlockchainOperationsApi.md#offklatransfereth)

> **POST** `/v3/offchain/klaytn/transfer`
> 
> Send KLAY from a virtual account to the blockchain

[🔹 **offKlaTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offklatransferethkms)

> **POST** `/v3/offchain/klaytn/transfer`
> 
> Send KLAY from a virtual account to the blockchain

[🔹 **offKlaTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offklatransferethmnemonic)

> **POST** `/v3/offchain/klaytn/transfer`
> 
> Send KLAY from a virtual account to the blockchain

[🔹 **offOneDeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainkmsaddress)

> **POST** `/v3/offchain/one/hrm20/deploy`
> 
> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

[🔹 **offOneDeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainkmsxpub)

> **POST** `/v3/offchain/one/hrm20/deploy`
> 
> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

[🔹 **offOneDeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainmnemxpub)

> **POST** `/v3/offchain/one/hrm20/deploy`
> 
> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

[🔹 **offOneDeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainmnemonicaddress)

> **POST** `/v3/offchain/one/hrm20/deploy`
> 
> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

[🔹 **offOneDeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainpkaddress)

> **POST** `/v3/offchain/one/hrm20/deploy`
> 
> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

[🔹 **offOneDeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainpkxpub)

> **POST** `/v3/offchain/one/hrm20/deploy`
> 
> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

[🔹 **offOneErc20()**](./Api/BlockchainOperationsApi.md#offoneerc20)

> **POST** `/v3/offchain/one/hrm20`
> 
> Register a new Harmony HRM-20 token in the virtual account

[🔹 **offOneErc20Address()**](./Api/BlockchainOperationsApi.md#offoneerc20address)

> **POST** `/v3/offchain/one/hrm20`
> 
> Register a new Harmony HRM-20 token in the virtual account

[🔹 **offOneTransferEth()**](./Api/BlockchainOperationsApi.md#offonetransfereth)

> **POST** `/v3/offchain/one/transfer`
> 
> Send ONE from a virtual account to the blockchain

[🔹 **offOneTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offonetransferethkms)

> **POST** `/v3/offchain/one/transfer`
> 
> Send ONE from a virtual account to the blockchain

[🔹 **offOneTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offonetransferethmnemonic)

> **POST** `/v3/offchain/one/transfer`
> 
> Send ONE from a virtual account to the blockchain

[🔹 **offPolTransferEth()**](./Api/BlockchainOperationsApi.md#offpoltransfereth)

> **POST** `/v3/offchain/polygon/transfer`
> 
> Send MATIC from a virtual account to the blockchain

[🔹 **offPolTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offpoltransferethkms)

> **POST** `/v3/offchain/polygon/transfer`
> 
> Send MATIC from a virtual account to the blockchain

[🔹 **offPolTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offpoltransferethmnemonic)

> **POST** `/v3/offchain/polygon/transfer`
> 
> Send MATIC from a virtual account to the blockchain

[🔹 **offTokErc20()**](./Api/BlockchainOperationsApi.md#offtokerc20)

> **POST** `/v3/offchain/token/{chain}`
> 
> Register a new ERC-20 or ERC-20-equivalent token in the virtual account

[🔹 **offTokErc20Address()**](./Api/BlockchainOperationsApi.md#offtokerc20address)

> **POST** `/v3/offchain/token/{chain}`
> 
> Register a new ERC-20 or ERC-20-equivalent token in the virtual account

[🔹 **offXdcDeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainkmsaddress)

> **POST** `/v3/offchain/xdc/erc20/deploy`
> 
> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offXdcDeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainkmsxpub)

> **POST** `/v3/offchain/xdc/erc20/deploy`
> 
> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offXdcDeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainmnemxpub)

> **POST** `/v3/offchain/xdc/erc20/deploy`
> 
> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offXdcDeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainmnemonicaddress)

> **POST** `/v3/offchain/xdc/erc20/deploy`
> 
> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offXdcDeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainpkaddress)

> **POST** `/v3/offchain/xdc/erc20/deploy`
> 
> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offXdcDeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainpkxpub)

> **POST** `/v3/offchain/xdc/erc20/deploy`
> 
> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

[🔹 **offXdcErc20()**](./Api/BlockchainOperationsApi.md#offxdcerc20)

> **POST** `/v3/offchain/xdc/erc20`
> 
> Register a new XinFin ERC-20-equivalent token in the virtual account

[🔹 **offXdcErc20Address()**](./Api/BlockchainOperationsApi.md#offxdcerc20address)

> **POST** `/v3/offchain/xdc/erc20`
> 
> Register a new XinFin ERC-20-equivalent token in the virtual account

[🔹 **offXdcTransferEth()**](./Api/BlockchainOperationsApi.md#offxdctransfereth)

> **POST** `/v3/offchain/xdc/transfer`
> 
> Send XDC from a virtual account to the blockchain

[🔹 **offXdcTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offxdctransferethkms)

> **POST** `/v3/offchain/xdc/transfer`
> 
> Send XDC from a virtual account to the blockchain

[🔹 **offXdcTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offxdctransferethmnemonic)

> **POST** `/v3/offchain/xdc/transfer`
> 
> Send XDC from a virtual account to the blockchain

[🔹 **storeCeloErc20Address()**](./Api/BlockchainOperationsApi.md#storeceloerc20address)

> **POST** `/v3/offchain/celo/erc20/{name}/{address}`
> 
> Set the contract address of a Celo ERC-20-equivalent token

[🔹 **storeTokenAddress()**](./Api/BlockchainOperationsApi.md#storetokenaddress)

> **POST** `/v3/offchain/token/{name}/{address}`
> 
> Set the contract address of an ERC-20, ERC-20-equivalent, or TRC-10 token

[🔹 **storeTrcAddress()**](./Api/BlockchainOperationsApi.md#storetrcaddress)

> **POST** `/v3/offchain/tron/trc/{name}/{address}`
> 
> Set the contract address of a TRC-10 or TRC-20 token

[🔹 **transferAdaKMS()**](./Api/BlockchainOperationsApi.md#transferadakms)

> **POST** `/v3/offchain/ada/transfer`
> 
> Send ADA from a virtual account to the blockchain

[🔹 **transferAdaKeyPair()**](./Api/BlockchainOperationsApi.md#transferadakeypair)

> **POST** `/v3/offchain/ada/transfer`
> 
> Send ADA from a virtual account to the blockchain

[🔹 **transferAdaMnemonic()**](./Api/BlockchainOperationsApi.md#transferadamnemonic)

> **POST** `/v3/offchain/ada/transfer`
> 
> Send ADA from a virtual account to the blockchain

[🔹 **transferAlgo()**](./Api/BlockchainOperationsApi.md#transferalgo)

> **POST** `/v3/offchain/algorand/transfer`
> 
> Send ALGO from a virtual account to the blockchain

[🔹 **transferAlgoErc20()**](./Api/BlockchainOperationsApi.md#transferalgoerc20)

> **POST** `/v3/offchain/algorand/transfer`
> 
> Send ALGO from a virtual account to the blockchain

[🔹 **transferAlgoKMS()**](./Api/BlockchainOperationsApi.md#transferalgokms)

> **POST** `/v3/offchain/algorand/transfer`
> 
> Send ALGO from a virtual account to the blockchain

[🔹 **transferBchKMS()**](./Api/BlockchainOperationsApi.md#transferbchkms)

> **POST** `/v3/offchain/bcash/transfer`
> 
> Send BCH from a virtual account to the blockchain

[🔹 **transferBchKeyPair()**](./Api/BlockchainOperationsApi.md#transferbchkeypair)

> **POST** `/v3/offchain/bcash/transfer`
> 
> Send BCH from a virtual account to the blockchain

[🔹 **transferBchMnemonic()**](./Api/BlockchainOperationsApi.md#transferbchmnemonic)

> **POST** `/v3/offchain/bcash/transfer`
> 
> Send BCH from a virtual account to the blockchain

[🔹 **transferBnb()**](./Api/BlockchainOperationsApi.md#transferbnb)

> **POST** `/v3/offchain/bnb/transfer`
> 
> Send BNB from a virtual account to the blockchain

[🔹 **transferBnbKMS()**](./Api/BlockchainOperationsApi.md#transferbnbkms)

> **POST** `/v3/offchain/bnb/transfer`
> 
> Send BNB from a virtual account to the blockchain

[🔹 **transferBsc()**](./Api/BlockchainOperationsApi.md#transferbsc)

> **POST** `/v3/offchain/bsc/transfer`
> 
> Send BSC from a virtual account to the blockchain

[🔹 **transferBscKMS()**](./Api/BlockchainOperationsApi.md#transferbsckms)

> **POST** `/v3/offchain/bsc/transfer`
> 
> Send BSC from a virtual account to the blockchain

[🔹 **transferBscMnemonic()**](./Api/BlockchainOperationsApi.md#transferbscmnemonic)

> **POST** `/v3/offchain/bsc/transfer`
> 
> Send BSC from a virtual account to the blockchain

[🔹 **transferBtcKMS()**](./Api/BlockchainOperationsApi.md#transferbtckms)

> **POST** `/v3/offchain/bitcoin/transfer`
> 
> Send BTC from a virtual account to the blockchain

[🔹 **transferBtcKeyPair()**](./Api/BlockchainOperationsApi.md#transferbtckeypair)

> **POST** `/v3/offchain/bitcoin/transfer`
> 
> Send BTC from a virtual account to the blockchain

[🔹 **transferBtcMnemonic()**](./Api/BlockchainOperationsApi.md#transferbtcmnemonic)

> **POST** `/v3/offchain/bitcoin/transfer`
> 
> Send BTC from a virtual account to the blockchain

[🔹 **transferCelo()**](./Api/BlockchainOperationsApi.md#transfercelo)

> **POST** `/v3/offchain/celo/transfer`
> 
> Send CELO from a virtual account to the blockchain

[🔹 **transferCeloKMS()**](./Api/BlockchainOperationsApi.md#transfercelokms)

> **POST** `/v3/offchain/celo/transfer`
> 
> Send CELO from a virtual account to the blockchain

[🔹 **transferCeloMnemonic()**](./Api/BlockchainOperationsApi.md#transfercelomnemonic)

> **POST** `/v3/offchain/celo/transfer`
> 
> Send CELO from a virtual account to the blockchain

[🔹 **transferDogeKMS()**](./Api/BlockchainOperationsApi.md#transferdogekms)

> **POST** `/v3/offchain/dogecoin/transfer`
> 
> Send DOGE from a virtual account to the blockchain

[🔹 **transferDogeKeyPair()**](./Api/BlockchainOperationsApi.md#transferdogekeypair)

> **POST** `/v3/offchain/dogecoin/transfer`
> 
> Send DOGE from a virtual account to the blockchain

[🔹 **transferDogeMnemonic()**](./Api/BlockchainOperationsApi.md#transferdogemnemonic)

> **POST** `/v3/offchain/dogecoin/transfer`
> 
> Send DOGE from a virtual account to the blockchain

[🔹 **transferErc20()**](./Api/BlockchainOperationsApi.md#transfererc20)

> **POST** `/v3/offchain/ethereum/erc20/transfer`
> 
> Send Ethereum ERC-20 tokens from a virtual account to the blockchain

[🔹 **transferErc20KMS()**](./Api/BlockchainOperationsApi.md#transfererc20kms)

> **POST** `/v3/offchain/ethereum/erc20/transfer`
> 
> Send Ethereum ERC-20 tokens from a virtual account to the blockchain

[🔹 **transferErc20Mnemonic()**](./Api/BlockchainOperationsApi.md#transfererc20mnemonic)

> **POST** `/v3/offchain/ethereum/erc20/transfer`
> 
> Send Ethereum ERC-20 tokens from a virtual account to the blockchain

[🔹 **transferEth()**](./Api/BlockchainOperationsApi.md#transfereth)

> **POST** `/v3/offchain/ethereum/transfer`
> 
> Send ETH from a virtual account to the blockchain

[🔹 **transferEthKMS()**](./Api/BlockchainOperationsApi.md#transferethkms)

> **POST** `/v3/offchain/ethereum/transfer`
> 
> Send ETH from a virtual account to the blockchain

[🔹 **transferEthMnemonic()**](./Api/BlockchainOperationsApi.md#transferethmnemonic)

> **POST** `/v3/offchain/ethereum/transfer`
> 
> Send ETH from a virtual account to the blockchain

[🔹 **transferFlowKMS()**](./Api/BlockchainOperationsApi.md#transferflowkms)

> **POST** `/v3/offchain/flow/transfer`
> 
> Send FLOW from a virtual account to the blockchain

[🔹 **transferFlowMnemonic()**](./Api/BlockchainOperationsApi.md#transferflowmnemonic)

> **POST** `/v3/offchain/flow/transfer`
> 
> Send FLOW from a virtual account to the blockchain

[🔹 **transferFlowPK()**](./Api/BlockchainOperationsApi.md#transferflowpk)

> **POST** `/v3/offchain/flow/transfer`
> 
> Send FLOW from a virtual account to the blockchain

[🔹 **transferKCS()**](./Api/BlockchainOperationsApi.md#transferkcs)

> **POST** `/v3/offchain/kcs/transfer`
> 
> Send KCS from a virtual account to the blockchain

[🔹 **transferKCSKMS()**](./Api/BlockchainOperationsApi.md#transferkcskms)

> **POST** `/v3/offchain/kcs/transfer`
> 
> Send KCS from a virtual account to the blockchain

[🔹 **transferKCSMnemonic()**](./Api/BlockchainOperationsApi.md#transferkcsmnemonic)

> **POST** `/v3/offchain/kcs/transfer`
> 
> Send KCS from a virtual account to the blockchain

[🔹 **transferLtcKMS()**](./Api/BlockchainOperationsApi.md#transferltckms)

> **POST** `/v3/offchain/litecoin/transfer`
> 
> Send LTC from a virtual account to the blockchain

[🔹 **transferLtcKeyPair()**](./Api/BlockchainOperationsApi.md#transferltckeypair)

> **POST** `/v3/offchain/litecoin/transfer`
> 
> Send LTC from a virtual account to the blockchain

[🔹 **transferLtcMnemonic()**](./Api/BlockchainOperationsApi.md#transferltcmnemonic)

> **POST** `/v3/offchain/litecoin/transfer`
> 
> Send LTC from a virtual account to the blockchain

[🔹 **transferSol()**](./Api/BlockchainOperationsApi.md#transfersol)

> **POST** `/v3/offchain/solana/transfer`
> 
> Send SOL from a virtual account to the blockchain

[🔹 **transferSolKMS()**](./Api/BlockchainOperationsApi.md#transfersolkms)

> **POST** `/v3/offchain/solana/transfer`
> 
> Send SOL from a virtual account to the blockchain

[🔹 **transferTron()**](./Api/BlockchainOperationsApi.md#transfertron)

> **POST** `/v3/offchain/tron/transfer`
> 
> Send TRON from a virtual account to the blockchain

[🔹 **transferTronKMS()**](./Api/BlockchainOperationsApi.md#transfertronkms)

> **POST** `/v3/offchain/tron/transfer`
> 
> Send TRON from a virtual account to the blockchain

[🔹 **transferTronMnemonic()**](./Api/BlockchainOperationsApi.md#transfertronmnemonic)

> **POST** `/v3/offchain/tron/transfer`
> 
> Send TRON from a virtual account to the blockchain

[🔹 **transferXlm()**](./Api/BlockchainOperationsApi.md#transferxlm)

> **POST** `/v3/offchain/xlm/transfer`
> 
> Send XLM from a virtual account to the blockchain

[🔹 **transferXlmKMS()**](./Api/BlockchainOperationsApi.md#transferxlmkms)

> **POST** `/v3/offchain/xlm/transfer`
> 
> Send XLM from a virtual account to the blockchain

[🔹 **transferXrp()**](./Api/BlockchainOperationsApi.md#transferxrp)

> **POST** `/v3/offchain/xrp/transfer`
> 
> Send XRP from a virtual account to the blockchain

[🔹 **transferXrpKMS()**](./Api/BlockchainOperationsApi.md#transferxrpkms)

> **POST** `/v3/offchain/xrp/transfer`
> 
> Send XRP from a virtual account to the blockchain

[🔹 **trcAddress()**](./Api/BlockchainOperationsApi.md#trcaddress)

> **POST** `/v3/offchain/tron/trc`
> 
> Register a new TRON TRC-10 or TRC-20 token in the virtual account

[🔹 **trcXpub()**](./Api/BlockchainOperationsApi.md#trcxpub)

> **POST** `/v3/offchain/tron/trc`
> 
> Register a new TRON TRC-10 or TRC-20 token in the virtual account

[🔹 **xlmAssetOffchain()**](./Api/BlockchainOperationsApi.md#xlmassetoffchain)

> **POST** `/v3/offchain/xlm/asset`
> 
> Create an XLM-based asset

[🔹 **xrpAssetOffchain()**](./Api/BlockchainOperationsApi.md#xrpassetoffchain)

> **POST** `/v3/offchain/xrp/asset`
> 
> Create XRP based Asset


### **api()->blockchainStorage()**

[🔹 **createRecord()**](./Api/BlockchainStorageApi.md#createrecord)

> **POST** `/v3/record`
> 
> Store a log record

[🔹 **createRecordCelo()**](./Api/BlockchainStorageApi.md#createrecordcelo)

> **POST** `/v3/record`
> 
> Store a log record

[🔹 **getLog()**](./Api/BlockchainStorageApi.md#getlog)

> **GET** `/v3/record`
> 
> Get a log record


### **api()->blockchainUtils()**

[🔹 **getAuctionEstimatedTime()**](./Api/BlockchainUtilsApi.md#getauctionestimatedtime)

> **GET** `/v3/blockchain/auction/time/{chain}/{date}`
> 
> Estimate the block height for a future point in time

[🔹 **sCGetContractAddress()**](./Api/BlockchainUtilsApi.md#scgetcontractaddress)

> **GET** `/v3/blockchain/sc/address/{chain}/{hash}`
> 
> Get the blockchain address of a smart contract by the deployment transaction ID


### **api()->cardano()**

[🔹 **adaBroadcast()**](./Api/CardanoApi.md#adabroadcast)

> **POST** `/v3/ada/broadcast`
> 
> Broadcast signed Ada transaction

[🔹 **adaGenerateAddress()**](./Api/CardanoApi.md#adagenerateaddress)

> **GET** `/v3/ada/address/{xpub}/{index}`
> 
> Generate Ada deposit address from Extended public key

[🔹 **adaGenerateAddressPrivateKey()**](./Api/CardanoApi.md#adagenerateaddressprivatekey)

> **POST** `/v3/ada/wallet/priv`
> 
> Generate Ada private key

[🔹 **adaGenerateWallet()**](./Api/CardanoApi.md#adageneratewallet)

> **GET** `/v3/ada/wallet`
> 
> Generate Ada wallet

[🔹 **adaGetAccount()**](./Api/CardanoApi.md#adagetaccount)

> **GET** `/v3/ada/account/{address}`
> 
> Gets a Ada account by address

[🔹 **adaGetBlock()**](./Api/CardanoApi.md#adagetblock)

> **GET** `/v3/ada/block/{hash}`
> 
> Get Block by hash or height

[🔹 **adaGetBlockChainInfo()**](./Api/CardanoApi.md#adagetblockchaininfo)

> **GET** `/v3/ada/info`
> 
> Get Blockchain information

[🔹 **adaGetRawTransaction()**](./Api/CardanoApi.md#adagetrawtransaction)

> **GET** `/v3/ada/transaction/{hash}`
> 
> Get transaction by hash

[🔹 **adaGetTxByAddress()**](./Api/CardanoApi.md#adagettxbyaddress)

> **GET** `/v3/ada/transaction/address/{address}`
> 
> Get transactions by address

[🔹 **adaGetUTXOByAddress()**](./Api/CardanoApi.md#adagetutxobyaddress)

> **GET** `/v3/ada/{address}/utxos`
> 
> Get UTXOs by address

[🔹 **adaTransactionFromAddress()**](./Api/CardanoApi.md#adatransactionfromaddress)

> **POST** `/v3/ada/transaction`
> 
> Send ADA to Cardano addresses

[🔹 **adaTransactionFromAddressKMS()**](./Api/CardanoApi.md#adatransactionfromaddresskms)

> **POST** `/v3/ada/transaction`
> 
> Send ADA to Cardano addresses

[🔹 **adaTransactionFromUTXO()**](./Api/CardanoApi.md#adatransactionfromutxo)

> **POST** `/v3/ada/transaction`
> 
> Send ADA to Cardano addresses

[🔹 **adaTransactionFromUTXOKMS()**](./Api/CardanoApi.md#adatransactionfromutxokms)

> **POST** `/v3/ada/transaction`
> 
> Send ADA to Cardano addresses


### **api()->celo()**

[🔹 **callCeloReadSmartContractMethod()**](./Api/CeloApi.md#callceloreadsmartcontractmethod)

> **POST** `/v3/celo/smartcontract`
> 
> Invoke a method in a smart contract on Celo

[🔹 **callCeloSmartContractMethod()**](./Api/CeloApi.md#callcelosmartcontractmethod)

> **POST** `/v3/celo/smartcontract`
> 
> Invoke a method in a smart contract on Celo

[🔹 **callCeloSmartContractMethodKMS()**](./Api/CeloApi.md#callcelosmartcontractmethodkms)

> **POST** `/v3/celo/smartcontract`
> 
> Invoke a method in a smart contract on Celo

[🔹 **celoBroadcast()**](./Api/CeloApi.md#celobroadcast)

> **POST** `/v3/celo/broadcast`
> 
> Broadcast signed Celo transaction

[🔹 **celoGenerateAddress()**](./Api/CeloApi.md#celogenerateaddress)

> **GET** `/v3/celo/address/{xpub}/{index}`
> 
> Generate Celo account address from Extended public key

[🔹 **celoGenerateAddressPrivateKey()**](./Api/CeloApi.md#celogenerateaddressprivatekey)

> **POST** `/v3/celo/wallet/priv`
> 
> Generate Celo private key

[🔹 **celoGenerateWallet()**](./Api/CeloApi.md#celogeneratewallet)

> **GET** `/v3/celo/wallet`
> 
> Generate Celo wallet

[🔹 **celoGetBalance()**](./Api/CeloApi.md#celogetbalance)

> **GET** `/v3/celo/account/balance/{address}`
> 
> Get Celo Account balance

[🔹 **celoGetBlock()**](./Api/CeloApi.md#celogetblock)

> **GET** `/v3/celo/block/{hash}`
> 
> Get Celo block by hash

[🔹 **celoGetCurrentBlock()**](./Api/CeloApi.md#celogetcurrentblock)

> **GET** `/v3/celo/block/current`
> 
> Get current block number

[🔹 **celoGetTransaction()**](./Api/CeloApi.md#celogettransaction)

> **GET** `/v3/celo/transaction/{hash}`
> 
> Get Celo Transaction

[🔹 **celoGetTransactionByAddress()**](./Api/CeloApi.md#celogettransactionbyaddress)

> **GET** `/v3/celo/account/transaction/{address}`
> 
> Get Celo transactions by address

[🔹 **celoGetTransactionCount()**](./Api/CeloApi.md#celogettransactioncount)

> **GET** `/v3/celo/transaction/count/{address}`
> 
> Get count of outgoing Celo transactions

[🔹 **celoWeb3Driver()**](./Api/CeloApi.md#celoweb3driver)

> **POST** `/v3/celo/web3/{xApiKey}`
> 
> Web3 HTTP driver

[🔹 **transferCeloBlockchain()**](./Api/CeloApi.md#transferceloblockchain)

> **POST** `/v3/celo/transaction`
> 
> Send Celo / ERC20 from account to account

[🔹 **transferCeloBlockchainKMS()**](./Api/CeloApi.md#transferceloblockchainkms)

> **POST** `/v3/celo/transaction`
> 
> Send Celo / ERC20 from account to account


### **api()->custodialManagedWallets()**

[🔹 **custodialCreateWallet()**](./Api/CustodialManagedWalletsApi.md#custodialcreatewallet)

> **POST** `/v3/custodial/wallet`
> 
> Create managed address

[🔹 **custodialDeleteWallet()**](./Api/CustodialManagedWalletsApi.md#custodialdeletewallet)

> **DELETE** `/v3/custodial/wallet/{id}`
> 
> Delete managed address

[🔹 **custodialGetWallet()**](./Api/CustodialManagedWalletsApi.md#custodialgetwallet)

> **GET** `/v3/custodial/wallet/{id}`
> 
> Get managed address

[🔹 **custodialGetWallets()**](./Api/CustodialManagedWalletsApi.md#custodialgetwallets)

> **GET** `/v3/custodial/wallet`
> 
> Get managed addresses

[🔹 **custodialTransferManagedAddress()**](./Api/CustodialManagedWalletsApi.md#custodialtransfermanagedaddress)

> **POST** `/v3/custodial/transaction`
> 
> Sign and transfer using managed address


### **api()->customer()**

[🔹 **activateCustomer()**](./Api/CustomerApi.md#activatecustomer)

> **PUT** `/v3/ledger/customer/{id}/activate`
> 
> Activate customer

[🔹 **deactivateCustomer()**](./Api/CustomerApi.md#deactivatecustomer)

> **PUT** `/v3/ledger/customer/{id}/deactivate`
> 
> Deactivate customer

[🔹 **disableCustomer()**](./Api/CustomerApi.md#disablecustomer)

> **PUT** `/v3/ledger/customer/{id}/disable`
> 
> Disable customer

[🔹 **enableCustomer()**](./Api/CustomerApi.md#enablecustomer)

> **PUT** `/v3/ledger/customer/{id}/enable`
> 
> Enable customer

[🔹 **findAllCustomers()**](./Api/CustomerApi.md#findallcustomers)

> **GET** `/v3/ledger/customer`
> 
> List all customers

[🔹 **getCustomerByExternalOrInternalId()**](./Api/CustomerApi.md#getcustomerbyexternalorinternalid)

> **GET** `/v3/ledger/customer/{id}`
> 
> Get customer details

[🔹 **updateCustomer()**](./Api/CustomerApi.md#updatecustomer)

> **PUT** `/v3/ledger/customer/{id}`
> 
> Update customer


### **api()->deposit()**

[🔹 **getDeposits()**](./Api/DepositApi.md#getdeposits)

> **GET** `/v3/ledger/deposits`
> 
> List all deposits for product

[🔹 **getDepositsCount()**](./Api/DepositApi.md#getdepositscount)

> **GET** `/v3/ledger/deposits/count`
> 
> Count of found entities for get deposits request


### **api()->dogecoin()**

[🔹 **dogeBroadcast()**](./Api/DogecoinApi.md#dogebroadcast)

> **POST** `/v3/dogecoin/broadcast`
> 
> Broadcast signed Dogecoin transaction

[🔹 **dogeGenerateAddress()**](./Api/DogecoinApi.md#dogegenerateaddress)

> **GET** `/v3/dogecoin/address/{xpub}/{index}`
> 
> Generate Dogecoin deposit address from Extended public key

[🔹 **dogeGenerateAddressPrivateKey()**](./Api/DogecoinApi.md#dogegenerateaddressprivatekey)

> **POST** `/v3/dogecoin/wallet/priv`
> 
> Generate Dogecoin private key

[🔹 **dogeGenerateWallet()**](./Api/DogecoinApi.md#dogegeneratewallet)

> **GET** `/v3/dogecoin/wallet`
> 
> Generate Dogecoin wallet

[🔹 **dogeGetBlock()**](./Api/DogecoinApi.md#dogegetblock)

> **GET** `/v3/dogecoin/block/{hash}`
> 
> Get Dogecoin Block by hash or height

[🔹 **dogeGetBlockChainInfo()**](./Api/DogecoinApi.md#dogegetblockchaininfo)

> **GET** `/v3/dogecoin/info`
> 
> Get Dogecoin Blockchain Information

[🔹 **dogeGetBlockHash()**](./Api/DogecoinApi.md#dogegetblockhash)

> **GET** `/v3/dogecoin/block/hash/{i}`
> 
> Get Dogecoin Block hash

[🔹 **dogeGetMempool()**](./Api/DogecoinApi.md#dogegetmempool)

> **GET** `/v3/dogecoin/mempool`
> 
> Get Mempool Transactions

[🔹 **dogeGetRawTransaction()**](./Api/DogecoinApi.md#dogegetrawtransaction)

> **GET** `/v3/dogecoin/transaction/{hash}`
> 
> Get Dogecoin Transaction by hash

[🔹 **dogeGetUTXO()**](./Api/DogecoinApi.md#dogegetutxo)

> **GET** `/v3/dogecoin/utxo/{hash}/{index}`
> 
> Get information about a transaction output (UTXO) in a Dogecoin transaction

[🔹 **dogeRpcDriver()**](./Api/DogecoinApi.md#dogerpcdriver)

> **POST** `/v3/dogecoin/node`
> 
> JSON RPC HTTP driver

[🔹 **dogeTransactionUTXO()**](./Api/DogecoinApi.md#dogetransactionutxo)

> **POST** `/v3/dogecoin/transaction`
> 
> Send DOGE to Dogecoin addresses

[🔹 **dogeTransactionUTXOKMS()**](./Api/DogecoinApi.md#dogetransactionutxokms)

> **POST** `/v3/dogecoin/transaction`
> 
> Send DOGE to Dogecoin addresses


### **api()->elrond()**

[🔹 **eGldGetCurrentBlock()**](./Api/ElrondApi.md#egldgetcurrentblock)

> **GET** `/v3/egld/block/current`
> 
> Get current block number

[🔹 **egldBroadcast()**](./Api/ElrondApi.md#egldbroadcast)

> **POST** `/v3/egld/broadcast`
> 
> Broadcast signed EGLD transaction

[🔹 **egldGenerateAddress()**](./Api/ElrondApi.md#egldgenerateaddress)

> **GET** `/v3/egld/address/{mnemonic}/{index}`
> 
> Generate EGLD account address from mnemonic

[🔹 **egldGenerateAddressPrivateKey()**](./Api/ElrondApi.md#egldgenerateaddressprivatekey)

> **POST** `/v3/egld/wallet/priv`
> 
> Generate EGLD private key

[🔹 **egldGenerateWallet()**](./Api/ElrondApi.md#egldgeneratewallet)

> **GET** `/v3/egld/wallet`
> 
> Generate EGLD wallet

[🔹 **egldGetBalance()**](./Api/ElrondApi.md#egldgetbalance)

> **GET** `/v3/egld/account/balance/{address}`
> 
> Get EGLD Account balance

[🔹 **egldGetBlock()**](./Api/ElrondApi.md#egldgetblock)

> **GET** `/v3/egld/block/{hash}`
> 
> Get EGLD block by hash

[🔹 **egldGetTransaction()**](./Api/ElrondApi.md#egldgettransaction)

> **GET** `/v3/egld/transaction/{hash}`
> 
> Get EGLD Transaction

[🔹 **egldGetTransactionAddress()**](./Api/ElrondApi.md#egldgettransactionaddress)

> **GET** `/v3/egld/transaction/address/{address}`
> 
> Get count of outgoing EGLD transactions

[🔹 **egldGetTransactionCount()**](./Api/ElrondApi.md#egldgettransactioncount)

> **GET** `/v3/egld/transaction/count/{address}`
> 
> Get count of outgoing EGLD transactions

[🔹 **egldNodeGet()**](./Api/ElrondApi.md#egldnodeget)

> **GET** `/v3/egld/node/{xApiKey}/*`
> 
> Node HTTP driver

[🔹 **egldNodePost()**](./Api/ElrondApi.md#egldnodepost)

> **POST** `/v3/egld/node/{xApiKey}/*`
> 
> Node HTTP driver

[🔹 **transferEgldBlockchain()**](./Api/ElrondApi.md#transferegldblockchain)

> **POST** `/v3/egld/transaction`
> 
> Send EGLD from account to account

[🔹 **transferEgldBlockchainKMS()**](./Api/ElrondApi.md#transferegldblockchainkms)

> **POST** `/v3/egld/transaction`
> 
> Send EGLD from account to account


### **api()->ethereum()**

[🔹 **callReadSmartContractMethod()**](./Api/EthereumApi.md#callreadsmartcontractmethod)

> **POST** `/v3/ethereum/smartcontract`
> 
> Invoke a method in a smart contract on Ethereum

[🔹 **callSmartContractMethod()**](./Api/EthereumApi.md#callsmartcontractmethod)

> **POST** `/v3/ethereum/smartcontract`
> 
> Invoke a method in a smart contract on Ethereum

[🔹 **callSmartContractMethodKMS()**](./Api/EthereumApi.md#callsmartcontractmethodkms)

> **POST** `/v3/ethereum/smartcontract`
> 
> Invoke a method in a smart contract on Ethereum

[🔹 **ethBroadcast()**](./Api/EthereumApi.md#ethbroadcast)

> **POST** `/v3/ethereum/broadcast`
> 
> Broadcast signed Ethereum transaction

[🔹 **ethGenerateAddress()**](./Api/EthereumApi.md#ethgenerateaddress)

> **GET** `/v3/ethereum/address/{xpub}/{index}`
> 
> Generate Ethereum account address from Extended public key

[🔹 **ethGenerateAddressPrivateKey()**](./Api/EthereumApi.md#ethgenerateaddressprivatekey)

> **POST** `/v3/ethereum/wallet/priv`
> 
> Generate Ethereum private key

[🔹 **ethGenerateWallet()**](./Api/EthereumApi.md#ethgeneratewallet)

> **GET** `/v3/ethereum/wallet`
> 
> Generate Ethereum wallet

[🔹 **ethGetBalance()**](./Api/EthereumApi.md#ethgetbalance)

> **GET** `/v3/ethereum/account/balance/{address}`
> 
> Get the ETH balance of an Ethereum account

[🔹 **ethGetBlock()**](./Api/EthereumApi.md#ethgetblock)

> **GET** `/v3/ethereum/block/{hash}`
> 
> Get Ethereum block by hash

[🔹 **ethGetCurrentBlock()**](./Api/EthereumApi.md#ethgetcurrentblock)

> **GET** `/v3/ethereum/block/current`
> 
> Get current block number

[🔹 **ethGetInternalTransactionByAddress()**](./Api/EthereumApi.md#ethgetinternaltransactionbyaddress)

> **GET** `/v3/ethereum/account/transaction/erc20/internal/{address}`
> 
> Get Ethereum internal transactions by address

[🔹 **ethGetTransaction()**](./Api/EthereumApi.md#ethgettransaction)

> **GET** `/v3/ethereum/transaction/{hash}`
> 
> Get Ethereum Transaction

[🔹 **ethGetTransactionByAddress()**](./Api/EthereumApi.md#ethgettransactionbyaddress)

> **GET** `/v3/ethereum/account/transaction/{address}`
> 
> Get Ethereum transactions by address

[🔹 **ethGetTransactionCount()**](./Api/EthereumApi.md#ethgettransactioncount)

> **GET** `/v3/ethereum/transaction/count/{address}`
> 
> Get count of outgoing Ethereum transactions

[🔹 **ethWeb3Driver()**](./Api/EthereumApi.md#ethweb3driver)

> **POST** `/v3/ethereum/web3/{xApiKey}`
> 
> Web3 HTTP driver

[🔹 **transferEthBlockchain()**](./Api/EthereumApi.md#transferethblockchain)

> **POST** `/v3/ethereum/transaction`
> 
> Send Ethereum / ERC20 from account to account

[🔹 **transferEthBlockchainKMS()**](./Api/EthereumApi.md#transferethblockchainkms)

> **POST** `/v3/ethereum/transaction`
> 
> Send Ethereum / ERC20 from account to account


### **api()->exchangeRate()**

[🔹 **getExchangeRate()**](./Api/ExchangeRateApi.md#getexchangerate)

> **GET** `/v3/tatum/rate/{currency}`
> 
> Get the current exchange rate for exchanging fiat/crypto assets


### **api()->flow()**

[🔹 **flowAddPubKeyMnemonic()**](./Api/FlowApi.md#flowaddpubkeymnemonic)

> **PUT** `/v3/flow/account`
> 
> Add public key to Flow address

[🔹 **flowAddPubKeySecret()**](./Api/FlowApi.md#flowaddpubkeysecret)

> **PUT** `/v3/flow/account`
> 
> Add public key to Flow address

[🔹 **flowAddPubKeySecretKMS()**](./Api/FlowApi.md#flowaddpubkeysecretkms)

> **PUT** `/v3/flow/account`
> 
> Add public key to Flow address

[🔹 **flowCreateAddressFromPubKeyKMS()**](./Api/FlowApi.md#flowcreateaddressfrompubkeykms)

> **POST** `/v3/flow/account`
> 
> Create Flow address from public key

[🔹 **flowCreateAddressFromPubKeyMnemonic()**](./Api/FlowApi.md#flowcreateaddressfrompubkeymnemonic)

> **POST** `/v3/flow/account`
> 
> Create Flow address from public key

[🔹 **flowCreateAddressFromPubKeySecret()**](./Api/FlowApi.md#flowcreateaddressfrompubkeysecret)

> **POST** `/v3/flow/account`
> 
> Create Flow address from public key

[🔹 **flowCustomTransactionKMS()**](./Api/FlowApi.md#flowcustomtransactionkms)

> **POST** `/v3/flow/transaction/custom`
> 
> Send arbitrary transaction to blockchain

[🔹 **flowCustomTransactionMnemonic()**](./Api/FlowApi.md#flowcustomtransactionmnemonic)

> **POST** `/v3/flow/transaction/custom`
> 
> Send arbitrary transaction to blockchain

[🔹 **flowCustomTransactionPK()**](./Api/FlowApi.md#flowcustomtransactionpk)

> **POST** `/v3/flow/transaction/custom`
> 
> Send arbitrary transaction to blockchain

[🔹 **flowGenerateAddress()**](./Api/FlowApi.md#flowgenerateaddress)

> **GET** `/v3/flow/address/{xpub}/{index}`
> 
> Generate Flow address from Extended public key

[🔹 **flowGeneratePubKey()**](./Api/FlowApi.md#flowgeneratepubkey)

> **GET** `/v3/flow/pubkey/{xpub}/{index}`
> 
> Generate Flow public key from Extended public key

[🔹 **flowGeneratePubKeyPrivateKey()**](./Api/FlowApi.md#flowgeneratepubkeyprivatekey)

> **POST** `/v3/flow/wallet/priv`
> 
> Generate Flow private key

[🔹 **flowGenerateWallet()**](./Api/FlowApi.md#flowgeneratewallet)

> **GET** `/v3/flow/wallet`
> 
> Generate Flow wallet

[🔹 **flowGetAccount()**](./Api/FlowApi.md#flowgetaccount)

> **GET** `/v3/flow/account/{address}`
> 
> Get the balance of a Flow account

[🔹 **flowGetBlock()**](./Api/FlowApi.md#flowgetblock)

> **GET** `/v3/flow/block/{hash}`
> 
> Get Flow Block by hash or height

[🔹 **flowGetBlockChainInfo()**](./Api/FlowApi.md#flowgetblockchaininfo)

> **GET** `/v3/flow/block/current`
> 
> Get Flow current block number

[🔹 **flowGetBlockEvents()**](./Api/FlowApi.md#flowgetblockevents)

> **GET** `/v3/flow/block/events`
> 
> Get Flow events from blocks

[🔹 **flowGetRawTransaction()**](./Api/FlowApi.md#flowgetrawtransaction)

> **GET** `/v3/flow/transaction/{hash}`
> 
> Get Flow Transaction by hash

[🔹 **flowTransactionKMS()**](./Api/FlowApi.md#flowtransactionkms)

> **POST** `/v3/flow/transaction`
> 
> Send Flow to blockchain addresses

[🔹 **flowTransactionMnemonic()**](./Api/FlowApi.md#flowtransactionmnemonic)

> **POST** `/v3/flow/transaction`
> 
> Send Flow to blockchain addresses

[🔹 **flowTransactionPK()**](./Api/FlowApi.md#flowtransactionpk)

> **POST** `/v3/flow/transaction`
> 
> Send Flow to blockchain addresses


### **api()->fungibleTokensERC20OrCompatible()**

[🔹 **approveCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveceloerc20)

> **POST** `/v3/blockchain/token/approve`
> 
> Allow a blockchain address to transfer and burn fungible tokens

[🔹 **approveCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveceloerc20kms)

> **POST** `/v3/blockchain/token/approve`
> 
> Allow a blockchain address to transfer and burn fungible tokens

[🔹 **approveErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveerc20)

> **POST** `/v3/blockchain/token/approve`
> 
> Allow a blockchain address to transfer and burn fungible tokens

[🔹 **approveErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveerc20kms)

> **POST** `/v3/blockchain/token/approve`
> 
> Allow a blockchain address to transfer and burn fungible tokens

[🔹 **chainBurnCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnceloerc20)

> **POST** `/v3/blockchain/token/burn`
> 
> Burn fungible tokens

[🔹 **chainBurnCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnceloerc20kms)

> **POST** `/v3/blockchain/token/burn`
> 
> Burn fungible tokens

[🔹 **chainBurnErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnerc20)

> **POST** `/v3/blockchain/token/burn`
> 
> Burn fungible tokens

[🔹 **chainBurnErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnerc20kms)

> **POST** `/v3/blockchain/token/burn`
> 
> Burn fungible tokens

[🔹 **chainBurnKcsErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnkcserc20)

> **POST** `/v3/blockchain/token/burn`
> 
> Burn fungible tokens

[🔹 **chainBurnKcsErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnkcserc20kms)

> **POST** `/v3/blockchain/token/burn`
> 
> Burn fungible tokens

[🔹 **chainDeployAlgoErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployalgoerc20)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainDeployAlgoErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployalgoerc20kms)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainDeployCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployceloerc20)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainDeployCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployceloerc20kms)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainDeployErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployerc20)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainDeployErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployerc20kms)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainDeployKcsErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploykcserc20)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainDeployKcsErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploykcserc20kms)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainDeploySolanaSpl()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploysolanaspl)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainDeploySolanaSplKMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploysolanasplkms)

> **POST** `/v3/blockchain/token/deploy`
> 
> Deploy a fungible token smart contract

[🔹 **chainMintCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintceloerc20)

> **POST** `/v3/blockchain/token/mint`
> 
> Mint fungible tokens

[🔹 **chainMintCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintceloerc20kms)

> **POST** `/v3/blockchain/token/mint`
> 
> Mint fungible tokens

[🔹 **chainMintErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainminterc20)

> **POST** `/v3/blockchain/token/mint`
> 
> Mint fungible tokens

[🔹 **chainMintErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainminterc20kms)

> **POST** `/v3/blockchain/token/mint`
> 
> Mint fungible tokens

[🔹 **chainMintKcsErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintkcserc20)

> **POST** `/v3/blockchain/token/mint`
> 
> Mint fungible tokens

[🔹 **chainMintKcsErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintkcserc20kms)

> **POST** `/v3/blockchain/token/mint`
> 
> Mint fungible tokens

[🔹 **chainTransferAlgoErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferalgoerc20)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferAlgoErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferalgoerc20kms)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferBscBep20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferbscbep20)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferBscBep20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferbscbep20kms)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferCeloErc20Token()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferceloerc20token)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferCeloErc20TokenKMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferceloerc20tokenkms)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferEthErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferetherc20)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferEthErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferetherc20kms)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferKcsEthErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferkcsetherc20)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferKcsEthErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferkcsetherc20kms)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferSolanaSpl()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransfersolanaspl)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **chainTransferSolanaSplKMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransfersolanasplkms)

> **POST** `/v3/blockchain/token/transaction`
> 
> Transfer fungible tokens

[🔹 **erc20GetBalance()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalance)

> **GET** `/v3/blockchain/token/balance/{chain}/{contractAddress}/{address}`
> 
> Get the number of fungible tokens that a blockchain address holds in a smart contract

[🔹 **erc20GetBalanceAddress()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalanceaddress)

> **GET** `/v3/blockchain/token/address/{chain}/{address}`
> 
> Get the total number of fungible tokens that a blockchain address holds

[🔹 **erc20GetTransactionByAddress()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20gettransactionbyaddress)

> **GET** `/v3/blockchain/token/transaction/{chain}/{address}/{tokenAddress}`
> 
> Get fungible token transactions on a blockchain address


### **api()->gasPump()**

[🔹 **activateGasPump()**](./Api/GasPumpApi.md#activategaspump)

> **POST** `/v3/gas-pump/activate`
> 
> Activate gas pump addresses

[🔹 **activateGasPumpCelo()**](./Api/GasPumpApi.md#activategaspumpcelo)

> **POST** `/v3/gas-pump/activate`
> 
> Activate gas pump addresses

[🔹 **activateGasPumpCeloKMS()**](./Api/GasPumpApi.md#activategaspumpcelokms)

> **POST** `/v3/gas-pump/activate`
> 
> Activate gas pump addresses

[🔹 **activateGasPumpKMS()**](./Api/GasPumpApi.md#activategaspumpkms)

> **POST** `/v3/gas-pump/activate`
> 
> Activate gas pump addresses

[🔹 **activateGasPumpTatum()**](./Api/GasPumpApi.md#activategaspumptatum)

> **POST** `/v3/gas-pump/activate`
> 
> Activate gas pump addresses

[🔹 **activateGasPumpTron()**](./Api/GasPumpApi.md#activategaspumptron)

> **POST** `/v3/gas-pump/activate`
> 
> Activate gas pump addresses

[🔹 **activateGasPumpTronKMS()**](./Api/GasPumpApi.md#activategaspumptronkms)

> **POST** `/v3/gas-pump/activate`
> 
> Activate gas pump addresses

[🔹 **activatedNotActivatedGasPumpAddresses()**](./Api/GasPumpApi.md#activatednotactivatedgaspumpaddresses)

> **GET** `/v3/gas-pump/address/{chain}/{txId}`
> 
> Get the results of the address activation transaction

[🔹 **approveTransferCustodialWallet()**](./Api/GasPumpApi.md#approvetransfercustodialwallet)

> **POST** `/v3/blockchain/sc/custodial/approve`
> 
> Approve the transfer of an asset from a gas pump address

[🔹 **approveTransferCustodialWalletCelo()**](./Api/GasPumpApi.md#approvetransfercustodialwalletcelo)

> **POST** `/v3/blockchain/sc/custodial/approve`
> 
> Approve the transfer of an asset from a gas pump address

[🔹 **approveTransferCustodialWalletCeloKMS()**](./Api/GasPumpApi.md#approvetransfercustodialwalletcelokms)

> **POST** `/v3/blockchain/sc/custodial/approve`
> 
> Approve the transfer of an asset from a gas pump address

[🔹 **approveTransferCustodialWalletKMS()**](./Api/GasPumpApi.md#approvetransfercustodialwalletkms)

> **POST** `/v3/blockchain/sc/custodial/approve`
> 
> Approve the transfer of an asset from a gas pump address

[🔹 **gasPumpAddressesActivatedOrNot()**](./Api/GasPumpApi.md#gaspumpaddressesactivatedornot)

> **GET** `/v3/gas-pump/activated/{chain}/{owner}/{index}`
> 
> Check whether the gas pump address with a specified index is activated

[🔹 **generateCustodialWallet()**](./Api/GasPumpApi.md#generatecustodialwallet)

> **POST** `/v3/blockchain/sc/custodial`
> 
> Generate a custodial wallet address

[🔹 **generateCustodialWalletBatch()**](./Api/GasPumpApi.md#generatecustodialwalletbatch)

> **POST** `/v3/blockchain/sc/custodial/batch`
> 
> Generate a gas pump wallet address

[🔹 **generateCustodialWalletBatchCelo()**](./Api/GasPumpApi.md#generatecustodialwalletbatchcelo)

> **POST** `/v3/blockchain/sc/custodial/batch`
> 
> Generate a gas pump wallet address

[🔹 **generateCustodialWalletBatchCeloKMS()**](./Api/GasPumpApi.md#generatecustodialwalletbatchcelokms)

> **POST** `/v3/blockchain/sc/custodial/batch`
> 
> Generate a gas pump wallet address

[🔹 **generateCustodialWalletBatchKMS()**](./Api/GasPumpApi.md#generatecustodialwalletbatchkms)

> **POST** `/v3/blockchain/sc/custodial/batch`
> 
> Generate a gas pump wallet address

[🔹 **generateCustodialWalletBatchPayer()**](./Api/GasPumpApi.md#generatecustodialwalletbatchpayer)

> **POST** `/v3/blockchain/sc/custodial/batch`
> 
> Generate a gas pump wallet address

[🔹 **generateCustodialWalletBatchTron()**](./Api/GasPumpApi.md#generatecustodialwalletbatchtron)

> **POST** `/v3/blockchain/sc/custodial/batch`
> 
> Generate a gas pump wallet address

[🔹 **generateCustodialWalletBatchTronKMS()**](./Api/GasPumpApi.md#generatecustodialwalletbatchtronkms)

> **POST** `/v3/blockchain/sc/custodial/batch`
> 
> Generate a gas pump wallet address

[🔹 **generateCustodialWalletCelo()**](./Api/GasPumpApi.md#generatecustodialwalletcelo)

> **POST** `/v3/blockchain/sc/custodial`
> 
> Generate a custodial wallet address

[🔹 **generateCustodialWalletCeloKMS()**](./Api/GasPumpApi.md#generatecustodialwalletcelokms)

> **POST** `/v3/blockchain/sc/custodial`
> 
> Generate a custodial wallet address

[🔹 **generateCustodialWalletKMS()**](./Api/GasPumpApi.md#generatecustodialwalletkms)

> **POST** `/v3/blockchain/sc/custodial`
> 
> Generate a custodial wallet address

[🔹 **generateCustodialWalletTron()**](./Api/GasPumpApi.md#generatecustodialwallettron)

> **POST** `/v3/blockchain/sc/custodial`
> 
> Generate a custodial wallet address

[🔹 **generateCustodialWalletTronKMS()**](./Api/GasPumpApi.md#generatecustodialwallettronkms)

> **POST** `/v3/blockchain/sc/custodial`
> 
> Generate a custodial wallet address

[🔹 **precalculateGasPumpAddresses()**](./Api/GasPumpApi.md#precalculategaspumpaddresses)

> **POST** `/v3/gas-pump`
> 
> Precalculate gas pump addresses

[🔹 **sCGetCustodialAddresses()**](./Api/GasPumpApi.md#scgetcustodialaddresses)

> **GET** `/v3/blockchain/sc/custodial/{chain}/{hash}`
> 
> Get the custodial wallet address from the transaction

[🔹 **transferCustodialWallet()**](./Api/GasPumpApi.md#transfercustodialwallet)

> **POST** `/v3/blockchain/sc/custodial/transfer`
> 
> Transfer an asset from a gas pump address

[🔹 **transferCustodialWalletBatch()**](./Api/GasPumpApi.md#transfercustodialwalletbatch)

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`
> 
> Transfer multiple assets from a gas pump address

[🔹 **transferCustodialWalletBatchCelo()**](./Api/GasPumpApi.md#transfercustodialwalletbatchcelo)

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`
> 
> Transfer multiple assets from a gas pump address

[🔹 **transferCustodialWalletBatchCeloKMS()**](./Api/GasPumpApi.md#transfercustodialwalletbatchcelokms)

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`
> 
> Transfer multiple assets from a gas pump address

[🔹 **transferCustodialWalletBatchKMS()**](./Api/GasPumpApi.md#transfercustodialwalletbatchkms)

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`
> 
> Transfer multiple assets from a gas pump address

[🔹 **transferCustodialWalletBatchTron()**](./Api/GasPumpApi.md#transfercustodialwalletbatchtron)

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`
> 
> Transfer multiple assets from a gas pump address

[🔹 **transferCustodialWalletBatchTronKMS()**](./Api/GasPumpApi.md#transfercustodialwalletbatchtronkms)

> **POST** `/v3/blockchain/sc/custodial/transfer/batch`
> 
> Transfer multiple assets from a gas pump address

[🔹 **transferCustodialWalletCelo()**](./Api/GasPumpApi.md#transfercustodialwalletcelo)

> **POST** `/v3/blockchain/sc/custodial/transfer`
> 
> Transfer an asset from a gas pump address

[🔹 **transferCustodialWalletCeloKMS()**](./Api/GasPumpApi.md#transfercustodialwalletcelokms)

> **POST** `/v3/blockchain/sc/custodial/transfer`
> 
> Transfer an asset from a gas pump address

[🔹 **transferCustodialWalletKMS()**](./Api/GasPumpApi.md#transfercustodialwalletkms)

> **POST** `/v3/blockchain/sc/custodial/transfer`
> 
> Transfer an asset from a gas pump address

[🔹 **transferCustodialWalletTron()**](./Api/GasPumpApi.md#transfercustodialwallettron)

> **POST** `/v3/blockchain/sc/custodial/transfer`
> 
> Transfer an asset from a gas pump address

[🔹 **transferCustodialWalletTronKMS()**](./Api/GasPumpApi.md#transfercustodialwallettronkms)

> **POST** `/v3/blockchain/sc/custodial/transfer`
> 
> Transfer an asset from a gas pump address


### **api()->harmony()**

[🔹 **callOneReadSmartContractMethod()**](./Api/HarmonyApi.md#callonereadsmartcontractmethod)

> **POST** `/v3/one/smartcontract`
> 
> Invoke a method in a smart contract on Harmony

[🔹 **callOneSmartContractMethod()**](./Api/HarmonyApi.md#callonesmartcontractmethod)

> **POST** `/v3/one/smartcontract`
> 
> Invoke a method in a smart contract on Harmony

[🔹 **callOneSmartContractMethodKMS()**](./Api/HarmonyApi.md#callonesmartcontractmethodkms)

> **POST** `/v3/one/smartcontract`
> 
> Invoke a method in a smart contract on Harmony

[🔹 **oneBroadcast()**](./Api/HarmonyApi.md#onebroadcast)

> **POST** `/v3/one/broadcast`
> 
> Broadcast signed ONE transaction

[🔹 **oneFormatAddress()**](./Api/HarmonyApi.md#oneformataddress)

> **GET** `/v3/one/address/format/{address}`
> 
> Transform HEX address to Bech32 ONE address format

[🔹 **oneGenerateAddress()**](./Api/HarmonyApi.md#onegenerateaddress)

> **GET** `/v3/one/address/{xpub}/{index}`
> 
> Generate ONE account address from Extended public key

[🔹 **oneGenerateAddressPrivateKey()**](./Api/HarmonyApi.md#onegenerateaddressprivatekey)

> **POST** `/v3/one/wallet/priv`
> 
> Generate ONE private key

[🔹 **oneGenerateWallet()**](./Api/HarmonyApi.md#onegeneratewallet)

> **GET** `/v3/one/wallet`
> 
> Generate ONE wallet

[🔹 **oneGetBalance()**](./Api/HarmonyApi.md#onegetbalance)

> **GET** `/v3/one/account/balance/{address}`
> 
> Get ONE Account balance

[🔹 **oneGetBlock()**](./Api/HarmonyApi.md#onegetblock)

> **GET** `/v3/one/block/{hash}`
> 
> Get ONE block by hash

[🔹 **oneGetCurrentBlock()**](./Api/HarmonyApi.md#onegetcurrentblock)

> **GET** `/v3/one/block/current`
> 
> Get current block number

[🔹 **oneGetTransaction()**](./Api/HarmonyApi.md#onegettransaction)

> **GET** `/v3/one/transaction/{hash}`
> 
> Get ONE Transaction

[🔹 **oneGetTransactionCount()**](./Api/HarmonyApi.md#onegettransactioncount)

> **GET** `/v3/one/transaction/count/{address}`
> 
> Get count of outgoing ONE transactions

[🔹 **oneWeb3Driver()**](./Api/HarmonyApi.md#oneweb3driver)

> **POST** `/v3/one/web3/{xApiKey}`
> 
> Web3 HTTP driver

[🔹 **transferOneBlockchain()**](./Api/HarmonyApi.md#transferoneblockchain)

> **POST** `/v3/one/transaction`
> 
> Send ONE / HRM20 from account to account

[🔹 **transferOneBlockchainKMS()**](./Api/HarmonyApi.md#transferoneblockchainkms)

> **POST** `/v3/one/transaction`
> 
> Send ONE / HRM20 from account to account


### **api()->iPFS()**

[🔹 **getIPFSData()**](./Api/IPFSApi.md#getipfsdata)

> **GET** `/v3/ipfs/{id}`
> 
> Get file from IPFS

[🔹 **storeIPFS()**](./Api/IPFSApi.md#storeipfs)

> **POST** `/v3/ipfs`
> 
> Store data to IPFS


### **api()->keyManagementSystem()**

[🔹 **completePendingSignature()**](./Api/KeyManagementSystemApi.md#completependingsignature)

> **PUT** `/v3/kms/{id}/{txId}`
> 
> Complete pending transaction to sign

[🔹 **deletePendingTransactionToSign()**](./Api/KeyManagementSystemApi.md#deletependingtransactiontosign)

> **DELETE** `/v3/kms/{id}`
> 
> Delete transaction

[🔹 **getPendingTransactionToSign()**](./Api/KeyManagementSystemApi.md#getpendingtransactiontosign)

> **GET** `/v3/kms/{id}`
> 
> Get transaction details

[🔹 **getPendingTransactionsToSign()**](./Api/KeyManagementSystemApi.md#getpendingtransactionstosign)

> **GET** `/v3/kms/pending/{chain}`
> 
> Get pending transactions to sign

[🔹 **receivePendingTransactionsToSign()**](./Api/KeyManagementSystemApi.md#receivependingtransactionstosign)

> **POST** `/v3/kms/pending/{chain}`
> 
> Get pending transactions to sign


### **api()->klaytn()**

[🔹 **callKlaytnSmartContractMethod()**](./Api/KlaytnApi.md#callklaytnsmartcontractmethod)

> **POST** `/v3/klaytn/smartcontract`
> 
> Invoke a method in a smart contract on Klaytn

[🔹 **callKlaytnSmartContractMethodKMS()**](./Api/KlaytnApi.md#callklaytnsmartcontractmethodkms)

> **POST** `/v3/klaytn/smartcontract`
> 
> Invoke a method in a smart contract on Klaytn

[🔹 **callKlaytnSmartContractReadMethod()**](./Api/KlaytnApi.md#callklaytnsmartcontractreadmethod)

> **POST** `/v3/klaytn/smartcontract`
> 
> Invoke a method in a smart contract on Klaytn

[🔹 **klaytnBroadcast()**](./Api/KlaytnApi.md#klaytnbroadcast)

> **POST** `/v3/klaytn/broadcast`
> 
> Broadcast signed Klaytn transaction

[🔹 **klaytnGenerateAddress()**](./Api/KlaytnApi.md#klaytngenerateaddress)

> **GET** `/v3/klaytn/address/{xpub}/{index}`
> 
> Generate Klaytn account address from Extended public key

[🔹 **klaytnGenerateAddressPrivateKey()**](./Api/KlaytnApi.md#klaytngenerateaddressprivatekey)

> **POST** `/v3/klaytn/wallet/priv`
> 
> Generate Klaytn private key

[🔹 **klaytnGenerateWallet()**](./Api/KlaytnApi.md#klaytngeneratewallet)

> **GET** `/v3/klaytn/wallet`
> 
> Generate Klaytn wallet

[🔹 **klaytnGetBalance()**](./Api/KlaytnApi.md#klaytngetbalance)

> **GET** `/v3/klaytn/account/balance/{address}`
> 
> Get Klaytn Account balance

[🔹 **klaytnGetBlock()**](./Api/KlaytnApi.md#klaytngetblock)

> **GET** `/v3/klaytn/block/{hash}`
> 
> Get Klaytn block by hash

[🔹 **klaytnGetCurrentBlock()**](./Api/KlaytnApi.md#klaytngetcurrentblock)

> **GET** `/v3/klaytn/block/current`
> 
> Get current block number

[🔹 **klaytnGetTransaction()**](./Api/KlaytnApi.md#klaytngettransaction)

> **GET** `/v3/klaytn/transaction/{hash}`
> 
> Get Klaytn Transaction

[🔹 **klaytnGetTransactionCount()**](./Api/KlaytnApi.md#klaytngettransactioncount)

> **GET** `/v3/klaytn/transaction/count/{address}`
> 
> Get count of outgoing Klaytn transactions

[🔹 **klaytnWeb3Driver()**](./Api/KlaytnApi.md#klaytnweb3driver)

> **POST** `/v3/klaytn/web3/{xApiKey}`
> 
> Web3 HTTP driver

[🔹 **transferKlaytnBlockchain()**](./Api/KlaytnApi.md#transferklaytnblockchain)

> **POST** `/v3/klaytn/transaction`
> 
> Send KLAY from account to account

[🔹 **transferKlaytnBlockchainKMS()**](./Api/KlaytnApi.md#transferklaytnblockchainkms)

> **POST** `/v3/klaytn/transaction`
> 
> Send KLAY from account to account


### **api()->kuCoin()**

[🔹 **callKcsSmartContractMethod()**](./Api/KuCoinApi.md#callkcssmartcontractmethod)

> **POST** `/v3/kcs/smartcontract`
> 
> Invoke a method in a smart contract on KuCoin Community Chain

[🔹 **callKcsSmartContractMethodKMS()**](./Api/KuCoinApi.md#callkcssmartcontractmethodkms)

> **POST** `/v3/kcs/smartcontract`
> 
> Invoke a method in a smart contract on KuCoin Community Chain

[🔹 **callKcsSmartContractReadMethod()**](./Api/KuCoinApi.md#callkcssmartcontractreadmethod)

> **POST** `/v3/kcs/smartcontract`
> 
> Invoke a method in a smart contract on KuCoin Community Chain

[🔹 **kcsBroadcast()**](./Api/KuCoinApi.md#kcsbroadcast)

> **POST** `/v3/kcs/broadcast`
> 
> Broadcast signed Kcs transaction

[🔹 **kcsGenerateAddress()**](./Api/KuCoinApi.md#kcsgenerateaddress)

> **GET** `/v3/kcs/address/{xpub}/{index}`
> 
> Generate Kcs account address from Extended public key

[🔹 **kcsGenerateAddressPrivateKey()**](./Api/KuCoinApi.md#kcsgenerateaddressprivatekey)

> **POST** `/v3/kcs/wallet/priv`
> 
> Generate Kcs private key

[🔹 **kcsGenerateWallet()**](./Api/KuCoinApi.md#kcsgeneratewallet)

> **GET** `/v3/kcs/wallet`
> 
> Generate Kcs wallet

[🔹 **kcsGetBalance()**](./Api/KuCoinApi.md#kcsgetbalance)

> **GET** `/v3/kcs/account/balance/{address}`
> 
> Get Kcs Account balance

[🔹 **kcsGetBlock()**](./Api/KuCoinApi.md#kcsgetblock)

> **GET** `/v3/kcs/block/{hash}`
> 
> Get Kcs block by hash

[🔹 **kcsGetCurrentBlock()**](./Api/KuCoinApi.md#kcsgetcurrentblock)

> **GET** `/v3/kcs/block/current`
> 
> Get current block number

[🔹 **kcsGetTransaction()**](./Api/KuCoinApi.md#kcsgettransaction)

> **GET** `/v3/kcs/transaction/{hash}`
> 
> Get Kcs Transaction

[🔹 **kcsGetTransactionCount()**](./Api/KuCoinApi.md#kcsgettransactioncount)

> **GET** `/v3/kcs/transaction/count/{address}`
> 
> Get count of outgoing Kcs transactions

[🔹 **kcsWeb3Driver()**](./Api/KuCoinApi.md#kcsweb3driver)

> **POST** `/v3/kcs/web3/{xApiKey}`
> 
> Web3 HTTP driver

[🔹 **transferKcsBlockchain()**](./Api/KuCoinApi.md#transferkcsblockchain)

> **POST** `/v3/kcs/transaction`
> 
> Send KCS from account to account

[🔹 **transferKcsBlockchainKMS()**](./Api/KuCoinApi.md#transferkcsblockchainkms)

> **POST** `/v3/kcs/transaction`
> 
> Send KCS from account to account


### **api()->litecoin()**

[🔹 **ltcBroadcast()**](./Api/LitecoinApi.md#ltcbroadcast)

> **POST** `/v3/litecoin/broadcast`
> 
> Broadcast signed Litecoin transaction

[🔹 **ltcGenerateAddress()**](./Api/LitecoinApi.md#ltcgenerateaddress)

> **GET** `/v3/litecoin/address/{xpub}/{index}`
> 
> Generate Litecoin deposit address from Extended public key

[🔹 **ltcGenerateAddressPrivateKey()**](./Api/LitecoinApi.md#ltcgenerateaddressprivatekey)

> **POST** `/v3/litecoin/wallet/priv`
> 
> Generate Litecoin private key

[🔹 **ltcGenerateWallet()**](./Api/LitecoinApi.md#ltcgeneratewallet)

> **GET** `/v3/litecoin/wallet`
> 
> Generate Litecoin wallet

[🔹 **ltcGetBalanceOfAddress()**](./Api/LitecoinApi.md#ltcgetbalanceofaddress)

> **GET** `/v3/litecoin/address/balance/{address}`
> 
> Get the balance of a Litecoin address

[🔹 **ltcGetBlock()**](./Api/LitecoinApi.md#ltcgetblock)

> **GET** `/v3/litecoin/block/{hash}`
> 
> Get Litecoin Block by hash or height

[🔹 **ltcGetBlockChainInfo()**](./Api/LitecoinApi.md#ltcgetblockchaininfo)

> **GET** `/v3/litecoin/info`
> 
> Get Litecoin Blockchain Information

[🔹 **ltcGetBlockHash()**](./Api/LitecoinApi.md#ltcgetblockhash)

> **GET** `/v3/litecoin/block/hash/{i}`
> 
> Get Litecoin Block hash

[🔹 **ltcGetMempool()**](./Api/LitecoinApi.md#ltcgetmempool)

> **GET** `/v3/litecoin/mempool`
> 
> Get Mempool Transactions

[🔹 **ltcGetRawTransaction()**](./Api/LitecoinApi.md#ltcgetrawtransaction)

> **GET** `/v3/litecoin/transaction/{hash}`
> 
> Get Litecoin Transaction by hash

[🔹 **ltcGetTxByAddress()**](./Api/LitecoinApi.md#ltcgettxbyaddress)

> **GET** `/v3/litecoin/transaction/address/{address}`
> 
> Get Litecoin Transactions by address

[🔹 **ltcGetUTXO()**](./Api/LitecoinApi.md#ltcgetutxo)

> **GET** `/v3/litecoin/utxo/{hash}/{index}`
> 
> Get information about a transaction output (UTXO) in a Litecoin transaction

[🔹 **ltcRpcDriver()**](./Api/LitecoinApi.md#ltcrpcdriver)

> **POST** `/v3/litecoin/node`
> 
> JSON RPC HTTP driver

[🔹 **ltcTransactionAddress()**](./Api/LitecoinApi.md#ltctransactionaddress)

> **POST** `/v3/litecoin/transaction`
> 
> Send LTC to Litecoin addresses

[🔹 **ltcTransactionAddressKMS()**](./Api/LitecoinApi.md#ltctransactionaddresskms)

> **POST** `/v3/litecoin/transaction`
> 
> Send LTC to Litecoin addresses

[🔹 **ltcTransactionUTXO()**](./Api/LitecoinApi.md#ltctransactionutxo)

> **POST** `/v3/litecoin/transaction`
> 
> Send LTC to Litecoin addresses

[🔹 **ltcTransactionUTXOKMS()**](./Api/LitecoinApi.md#ltctransactionutxokms)

> **POST** `/v3/litecoin/transaction`
> 
> Send LTC to Litecoin addresses


### **api()->maliciousAddress()**

[🔹 **checkMalicousAddress()**](./Api/MaliciousAddressApi.md#checkmalicousaddress)

> **GET** `/v3/security/address/{address}`
> 
> Check malicous address


### **api()->marketplace()**

[🔹 **bloMarWithdrawFromMarketplaceSolana()**](./Api/MarketplaceApi.md#blomarwithdrawfrommarketplacesolana)

> **POST** `/v3/blockchain/marketplace/withdraw/treasury`
> 
> Withdraw funds from the marketplace treasury account on Solana

[🔹 **bloMarWithdrawFromMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#blomarwithdrawfrommarketplacesolanakms)

> **POST** `/v3/blockchain/marketplace/withdraw/treasury`
> 
> Withdraw funds from the marketplace treasury account on Solana

[🔹 **buyAssetOnMarketplace()**](./Api/MarketplaceApi.md#buyassetonmarketplace)

> **POST** `/v3/blockchain/marketplace/listing/buy`
> 
> Buy an asset on the NFT marketplace

[🔹 **buyAssetOnMarketplaceCelo()**](./Api/MarketplaceApi.md#buyassetonmarketplacecelo)

> **POST** `/v3/blockchain/marketplace/listing/buy`
> 
> Buy an asset on the NFT marketplace

[🔹 **buyAssetOnMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#buyassetonmarketplacecelokms)

> **POST** `/v3/blockchain/marketplace/listing/buy`
> 
> Buy an asset on the NFT marketplace

[🔹 **buyAssetOnMarketplaceKMS()**](./Api/MarketplaceApi.md#buyassetonmarketplacekms)

> **POST** `/v3/blockchain/marketplace/listing/buy`
> 
> Buy an asset on the NFT marketplace

[🔹 **buyAssetOnMarketplaceSolana()**](./Api/MarketplaceApi.md#buyassetonmarketplacesolana)

> **POST** `/v3/blockchain/marketplace/listing/buy`
> 
> Buy an asset on the NFT marketplace

[🔹 **buyAssetOnMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#buyassetonmarketplacesolanakms)

> **POST** `/v3/blockchain/marketplace/listing/buy`
> 
> Buy an asset on the NFT marketplace

[🔹 **cancelSellAssetOnMarketplace()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplace)

> **POST** `/v3/blockchain/marketplace/listing/cancel`
> 
> Cancel the selling of an asset on the NFT marketplace

[🔹 **cancelSellAssetOnMarketplaceCelo()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacecelo)

> **POST** `/v3/blockchain/marketplace/listing/cancel`
> 
> Cancel the selling of an asset on the NFT marketplace

[🔹 **cancelSellAssetOnMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacecelokms)

> **POST** `/v3/blockchain/marketplace/listing/cancel`
> 
> Cancel the selling of an asset on the NFT marketplace

[🔹 **cancelSellAssetOnMarketplaceKMS()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacekms)

> **POST** `/v3/blockchain/marketplace/listing/cancel`
> 
> Cancel the selling of an asset on the NFT marketplace

[🔹 **cancelSellAssetOnMarketplaceSolana()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacesolana)

> **POST** `/v3/blockchain/marketplace/listing/cancel`
> 
> Cancel the selling of an asset on the NFT marketplace

[🔹 **cancelSellAssetOnMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacesolanakms)

> **POST** `/v3/blockchain/marketplace/listing/cancel`
> 
> Cancel the selling of an asset on the NFT marketplace

[🔹 **generateMarketplace()**](./Api/MarketplaceApi.md#generatemarketplace)

> **POST** `/v3/blockchain/marketplace/listing`
> 
> Create an NFT marketplace

[🔹 **generateMarketplaceCelo()**](./Api/MarketplaceApi.md#generatemarketplacecelo)

> **POST** `/v3/blockchain/marketplace/listing`
> 
> Create an NFT marketplace

[🔹 **generateMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#generatemarketplacecelokms)

> **POST** `/v3/blockchain/marketplace/listing`
> 
> Create an NFT marketplace

[🔹 **generateMarketplaceKMS()**](./Api/MarketplaceApi.md#generatemarketplacekms)

> **POST** `/v3/blockchain/marketplace/listing`
> 
> Create an NFT marketplace

[🔹 **generateMarketplaceSolana()**](./Api/MarketplaceApi.md#generatemarketplacesolana)

> **POST** `/v3/blockchain/marketplace/listing`
> 
> Create an NFT marketplace

[🔹 **generateMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#generatemarketplacesolanakms)

> **POST** `/v3/blockchain/marketplace/listing`
> 
> Create an NFT marketplace

[🔹 **getMarketplaceFee()**](./Api/MarketplaceApi.md#getmarketplacefee)

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/fee`
> 
> Get the NFT marketplace fee

[🔹 **getMarketplaceFeeRecipient()**](./Api/MarketplaceApi.md#getmarketplacefeerecipient)

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/recipient`
> 
> Get the recipient of the NFT marketplace fee

[🔹 **getMarketplaceInfo()**](./Api/MarketplaceApi.md#getmarketplaceinfo)

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}`
> 
> Get information about an NFT marketplace on Solana

[🔹 **getMarketplaceListing()**](./Api/MarketplaceApi.md#getmarketplacelisting)

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/listing/{id}`
> 
> Get information about a listing on the NFT marketplace

[🔹 **getMarketplaceListings()**](./Api/MarketplaceApi.md#getmarketplacelistings)

> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/{type}`
> 
> Get the listings of a certain type from the NFT marketplace

[🔹 **sellAssetOnMarketplace()**](./Api/MarketplaceApi.md#sellassetonmarketplace)

> **POST** `/v3/blockchain/marketplace/listing/sell`
> 
> Sell an asset on the NFT marketplace

[🔹 **sellAssetOnMarketplaceCelo()**](./Api/MarketplaceApi.md#sellassetonmarketplacecelo)

> **POST** `/v3/blockchain/marketplace/listing/sell`
> 
> Sell an asset on the NFT marketplace

[🔹 **sellAssetOnMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#sellassetonmarketplacecelokms)

> **POST** `/v3/blockchain/marketplace/listing/sell`
> 
> Sell an asset on the NFT marketplace

[🔹 **sellAssetOnMarketplaceKMS()**](./Api/MarketplaceApi.md#sellassetonmarketplacekms)

> **POST** `/v3/blockchain/marketplace/listing/sell`
> 
> Sell an asset on the NFT marketplace

[🔹 **sellAssetOnMarketplaceSolana()**](./Api/MarketplaceApi.md#sellassetonmarketplacesolana)

> **POST** `/v3/blockchain/marketplace/listing/sell`
> 
> Sell an asset on the NFT marketplace

[🔹 **sellAssetOnMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#sellassetonmarketplacesolanakms)

> **POST** `/v3/blockchain/marketplace/listing/sell`
> 
> Sell an asset on the NFT marketplace

[🔹 **updateFee()**](./Api/MarketplaceApi.md#updatefee)

> **PUT** `/v3/blockchain/marketplace/listing/fee`
> 
> Update the NFT marketplace fee

[🔹 **updateFeeCelo()**](./Api/MarketplaceApi.md#updatefeecelo)

> **PUT** `/v3/blockchain/marketplace/listing/fee`
> 
> Update the NFT marketplace fee

[🔹 **updateFeeCeloKMS()**](./Api/MarketplaceApi.md#updatefeecelokms)

> **PUT** `/v3/blockchain/marketplace/listing/fee`
> 
> Update the NFT marketplace fee

[🔹 **updateFeeKMS()**](./Api/MarketplaceApi.md#updatefeekms)

> **PUT** `/v3/blockchain/marketplace/listing/fee`
> 
> Update the NFT marketplace fee

[🔹 **updateFeeRecipient()**](./Api/MarketplaceApi.md#updatefeerecipient)

> **PUT** `/v3/blockchain/marketplace/listing/recipient`
> 
> Update the recipient of the NFT marketplace fee

[🔹 **updateFeeRecipientCelo()**](./Api/MarketplaceApi.md#updatefeerecipientcelo)

> **PUT** `/v3/blockchain/marketplace/listing/recipient`
> 
> Update the recipient of the NFT marketplace fee

[🔹 **updateFeeRecipientCeloKMS()**](./Api/MarketplaceApi.md#updatefeerecipientcelokms)

> **PUT** `/v3/blockchain/marketplace/listing/recipient`
> 
> Update the recipient of the NFT marketplace fee

[🔹 **updateFeeRecipientKMS()**](./Api/MarketplaceApi.md#updatefeerecipientkms)

> **PUT** `/v3/blockchain/marketplace/listing/recipient`
> 
> Update the recipient of the NFT marketplace fee

[🔹 **updateFeeRecipientSolana()**](./Api/MarketplaceApi.md#updatefeerecipientsolana)

> **PUT** `/v3/blockchain/marketplace/listing/recipient`
> 
> Update the recipient of the NFT marketplace fee

[🔹 **updateFeeRecipientSolanaKMS()**](./Api/MarketplaceApi.md#updatefeerecipientsolanakms)

> **PUT** `/v3/blockchain/marketplace/listing/recipient`
> 
> Update the recipient of the NFT marketplace fee

[🔹 **updateFeeSolana()**](./Api/MarketplaceApi.md#updatefeesolana)

> **PUT** `/v3/blockchain/marketplace/listing/fee`
> 
> Update the NFT marketplace fee

[🔹 **updateFeeSolanaKMS()**](./Api/MarketplaceApi.md#updatefeesolanakms)

> **PUT** `/v3/blockchain/marketplace/listing/fee`
> 
> Update the NFT marketplace fee

[🔹 **updateMarketplaceSolana()**](./Api/MarketplaceApi.md#updatemarketplacesolana)

> **PUT** `/v3/blockchain/marketplace/listing`
> 
> Update an NFT marketplace on Solana

[🔹 **updateMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#updatemarketplacesolanakms)

> **PUT** `/v3/blockchain/marketplace/listing`
> 
> Update an NFT marketplace on Solana

[🔹 **withdrawFromMarketplaceSolana()**](./Api/MarketplaceApi.md#withdrawfrommarketplacesolana)

> **POST** `/v3/blockchain/marketplace/withdraw/fee`
> 
> Withdraw funds from the marketplace fee account on Solana

[🔹 **withdrawFromMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#withdrawfrommarketplacesolanakms)

> **POST** `/v3/blockchain/marketplace/withdraw/fee`
> 
> Withdraw funds from the marketplace fee account on Solana


### **api()->multiTokensERC1155OrCompatible()**

[🔹 **addMultiTokenMinter()**](./Api/MultiTokensERC1155OrCompatibleApi.md#addmultitokenminter)

> **POST** `/v3/multitoken/mint/add`
> 
> Add a Multi Token minter

[🔹 **addMultiTokenMinterKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#addmultitokenminterkms)

> **POST** `/v3/multitoken/mint/add`
> 
> Add a Multi Token minter

[🔹 **burnMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitoken)

> **POST** `/v3/multitoken/burn`
> 
> Burn a Multi Token

[🔹 **burnMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatch)

> **POST** `/v3/multitoken/burn/batch`
> 
> Burn multiple Multi Tokens

[🔹 **burnMultiTokenBatchCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatchcelo)

> **POST** `/v3/multitoken/burn/batch`
> 
> Burn multiple Multi Tokens

[🔹 **burnMultiTokenBatchKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatchkms)

> **POST** `/v3/multitoken/burn/batch`
> 
> Burn multiple Multi Tokens

[🔹 **burnMultiTokenBatchKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatchkmscelo)

> **POST** `/v3/multitoken/burn/batch`
> 
> Burn multiple Multi Tokens

[🔹 **burnMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokencelo)

> **POST** `/v3/multitoken/burn`
> 
> Burn a Multi Token

[🔹 **burnMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenkms)

> **POST** `/v3/multitoken/burn`
> 
> Burn a Multi Token

[🔹 **burnMultiTokenKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenkmscelo)

> **POST** `/v3/multitoken/burn`
> 
> Burn a Multi Token

[🔹 **deployMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitoken)

> **POST** `/v3/multitoken/deploy`
> 
> Deploy a Multi Token smart contract

[🔹 **deployMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokencelo)

> **POST** `/v3/multitoken/deploy`
> 
> Deploy a Multi Token smart contract

[🔹 **deployMultiTokenCeloKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokencelokms)

> **POST** `/v3/multitoken/deploy`
> 
> Deploy a Multi Token smart contract

[🔹 **deployMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokenkms)

> **POST** `/v3/multitoken/deploy`
> 
> Deploy a Multi Token smart contract

[🔹 **mintMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitoken)

> **POST** `/v3/multitoken/mint`
> 
> Mint a Multi Token

[🔹 **mintMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatch)

> **POST** `/v3/multitoken/mint/batch`
> 
> Mint multiple Multi Tokens

[🔹 **mintMultiTokenBatchCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatchcelo)

> **POST** `/v3/multitoken/mint/batch`
> 
> Mint multiple Multi Tokens

[🔹 **mintMultiTokenBatchKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatchkms)

> **POST** `/v3/multitoken/mint/batch`
> 
> Mint multiple Multi Tokens

[🔹 **mintMultiTokenBatchKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatchkmscelo)

> **POST** `/v3/multitoken/mint/batch`
> 
> Mint multiple Multi Tokens

[🔹 **mintMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokencelo)

> **POST** `/v3/multitoken/mint`
> 
> Mint a Multi Token

[🔹 **mintMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenkms)

> **POST** `/v3/multitoken/mint`
> 
> Mint a Multi Token

[🔹 **mintMultiTokenKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenkmscelo)

> **POST** `/v3/multitoken/mint`
> 
> Mint a Multi Token

[🔹 **multiTokenGetAddressBalance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetaddressbalance)

> **GET** `/v3/multitoken/address/balance/{chain}/{address}`
> 
> Get all Multi Tokens that a blockchain address holds

[🔹 **multiTokenGetBalance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalance)

> **GET** `/v3/multitoken/balance/{chain}/{contractAddress}/{address}/{tokenId}`
> 
> Get the amount of a specific MultiToken that a blockchain address holds

[🔹 **multiTokenGetBalanceBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalancebatch)

> **GET** `/v3/multitoken/balance/batch/{chain}/{contractAddress}`
> 
> Get the amount of one or multiple Multi Tokens for multiple blockchain addresses

[🔹 **multiTokenGetContractAddress()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetcontractaddress)

> **GET** `/v3/multitoken/address/{chain}/{hash}`
> 
> Get the address of a Multi Token smart contract by its transaction hash

[🔹 **multiTokenGetMetadata()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetmetadata)

> **GET** `/v3/multitoken/metadata/{chain}/{contractAddress}/{token}`
> 
> Get Multi Token metadata

[🔹 **multiTokenGetTransaction()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransaction)

> **GET** `/v3/multitoken/transaction/{chain}/{hash}`
> 
> Get a Multi Token transaction by its hash

[🔹 **multiTokenGetTransactionByAddress()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransactionbyaddress)

> **GET** `/v3/multitoken/transaction/{chain}/{address}/{tokenAddress}`
> 
> Get Multi Token transactions on a blockchain address

[🔹 **transferMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitoken)

> **POST** `/v3/multitoken/transaction`
> 
> Transfer a Multi Token

[🔹 **transferMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatch)

> **POST** `/v3/multitoken/transaction/batch`
> 
> Transfer multiple Multi Tokens

[🔹 **transferMultiTokenBatchCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatchcelo)

> **POST** `/v3/multitoken/transaction/batch`
> 
> Transfer multiple Multi Tokens

[🔹 **transferMultiTokenBatchKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatchkms)

> **POST** `/v3/multitoken/transaction/batch`
> 
> Transfer multiple Multi Tokens

[🔹 **transferMultiTokenBatchKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatchkmscelo)

> **POST** `/v3/multitoken/transaction/batch`
> 
> Transfer multiple Multi Tokens

[🔹 **transferMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokencelo)

> **POST** `/v3/multitoken/transaction`
> 
> Transfer a Multi Token

[🔹 **transferMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenkms)

> **POST** `/v3/multitoken/transaction`
> 
> Transfer a Multi Token

[🔹 **transferMultiTokenKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenkmscelo)

> **POST** `/v3/multitoken/transaction`
> 
> Transfer a Multi Token


### **api()->nFTERC721OrCompatible()**

[🔹 **addNftMinter()**](./Api/NFTERC721OrCompatibleApi.md#addnftminter)

> **POST** `/v3/nft/mint/add`
> 
> Add an NFT minter to an NFT smart contract

[🔹 **addNftMinterKMS()**](./Api/NFTERC721OrCompatibleApi.md#addnftminterkms)

> **POST** `/v3/nft/mint/add`
> 
> Add an NFT minter to an NFT smart contract

[🔹 **burnNft()**](./Api/NFTERC721OrCompatibleApi.md#burnnft)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **burnNftAlgo()**](./Api/NFTERC721OrCompatibleApi.md#burnnftalgo)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **burnNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#burnnftcelo)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **burnNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#burnnftflowkms)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **burnNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#burnnftflowmnemonic)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **burnNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#burnnftflowpk)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **burnNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#burnnftkms)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **burnNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#burnnftkmscelo)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **burnNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#burnnftkmstron)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **burnNftTron()**](./Api/NFTERC721OrCompatibleApi.md#burnnfttron)

> **POST** `/v3/nft/burn`
> 
> Burn an NFT

[🔹 **deployNft()**](./Api/NFTERC721OrCompatibleApi.md#deploynft)

> **POST** `/v3/nft/deploy`
> 
> Deploy an NFT smart contract

[🔹 **deployNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#deploynftcelo)

> **POST** `/v3/nft/deploy`
> 
> Deploy an NFT smart contract

[🔹 **deployNftCeloKMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynftcelokms)

> **POST** `/v3/nft/deploy`
> 
> Deploy an NFT smart contract

[🔹 **deployNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynftflowkms)

> **POST** `/v3/nft/deploy`
> 
> Deploy an NFT smart contract

[🔹 **deployNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#deploynftflowmnemonic)

> **POST** `/v3/nft/deploy`
> 
> Deploy an NFT smart contract

[🔹 **deployNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#deploynftflowpk)

> **POST** `/v3/nft/deploy`
> 
> Deploy an NFT smart contract

[🔹 **deployNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynftkms)

> **POST** `/v3/nft/deploy`
> 
> Deploy an NFT smart contract

[🔹 **deployNftTron()**](./Api/NFTERC721OrCompatibleApi.md#deploynfttron)

> **POST** `/v3/nft/deploy`
> 
> Deploy an NFT smart contract

[🔹 **deployNftTronKMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynfttronkms)

> **POST** `/v3/nft/deploy`
> 
> Deploy an NFT smart contract

[🔹 **mintMultipleNft()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenft)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintMultipleNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftcelo)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintMultipleNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftflowkms)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintMultipleNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftflowmnemonic)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintMultipleNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftflowpk)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintMultipleNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftkms)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintMultipleNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftkmscelo)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintMultipleNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftkmstron)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintMultipleNftMinter()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftminter)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintMultipleNftTron()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenfttron)

> **POST** `/v3/nft/mint/batch`
> 
> Mint multiple NFTs

[🔹 **mintNft()**](./Api/NFTERC721OrCompatibleApi.md#mintnft)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftAlgorand()**](./Api/NFTERC721OrCompatibleApi.md#mintnftalgorand)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftAlgorandKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftalgorandkms)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintnftcelo)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftExpress()**](./Api/NFTERC721OrCompatibleApi.md#mintnftexpress)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftExpressAlgorand()**](./Api/NFTERC721OrCompatibleApi.md#mintnftexpressalgorand)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftExpressSolana()**](./Api/NFTERC721OrCompatibleApi.md#mintnftexpresssolana)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftflowkms)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#mintnftflowmnemonic)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#mintnftflowpk)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftkms)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintnftkmscelo)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#mintnftkmstron)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftMinter()**](./Api/NFTERC721OrCompatibleApi.md#mintnftminter)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftSolana()**](./Api/NFTERC721OrCompatibleApi.md#mintnftsolana)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftSolanaKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftsolanakms)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **mintNftTron()**](./Api/NFTERC721OrCompatibleApi.md#mintnfttron)

> **POST** `/v3/nft/mint`
> 
> Mint an NFT

[🔹 **nftGetBalanceErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetbalanceerc721)

> **GET** `/v3/nft/balance/{chain}/{contractAddress}/{address}`
> 
> Get the NFTs from a specific smart contract that a blockchain address holds

[🔹 **nftGetContractAddress()**](./Api/NFTERC721OrCompatibleApi.md#nftgetcontractaddress)

> **GET** `/v3/nft/address/{chain}/{hash}`
> 
> Get the address of an NFT smart contract by its transaction hash

[🔹 **nftGetMetadataErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetmetadataerc721)

> **GET** `/v3/nft/metadata/{chain}/{contractAddress}/{tokenId}`
> 
> Get NFT metadata

[🔹 **nftGetProvenanceDataErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetprovenancedataerc721)

> **GET** `/v3/nft/provenance/{chain}/{contractAddress}/{tokenId}`
> 
> Get NFT provenance information

[🔹 **nftGetRoyaltyErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetroyaltyerc721)

> **GET** `/v3/nft/royalty/{chain}/{contractAddress}/{tokenId}`
> 
> Get NFT royalty information

[🔹 **nftGetTokensByAddressErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettokensbyaddresserc721)

> **GET** `/v3/nft/address/balance/{chain}/{address}`
> 
> Get all NFTs that a blockchain address holds

[🔹 **nftGetTokensByCollectionErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettokensbycollectionerc721)

> **GET** `/v3/nft/collection/{chain}/{address}`
> 
> Get all NFTs from a collection

[🔹 **nftGetTransactErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransacterc721)

> **GET** `/v3/nft/transaction/{chain}/{hash}`
> 
> Get an NFT transaction by its hash

[🔹 **nftGetTransactionByAddress()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransactionbyaddress)

> **GET** `/v3/nft/transaction/{chain}/{address}/{tokenAddress}`
> 
> Get NFT transactions on a blockchain address

[🔹 **nftGetTransactionByToken()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransactionbytoken)

> **GET** `/v3/nft/transaction/tokenId/{chain}/{tokenAddress}/{tokenId}`
> 
> Get NFT transactions for an NFT

[🔹 **transferNft()**](./Api/NFTERC721OrCompatibleApi.md#transfernft)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftAlgo()**](./Api/NFTERC721OrCompatibleApi.md#transfernftalgo)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftAlgoExpress()**](./Api/NFTERC721OrCompatibleApi.md#transfernftalgoexpress)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftAlgoKMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftalgokms)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#transfernftcelo)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftflowkms)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#transfernftflowmnemonic)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#transfernftflowpk)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftkms)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#transfernftkmscelo)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#transfernftkmstron)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftSolana()**](./Api/NFTERC721OrCompatibleApi.md#transfernftsolana)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftSolanaKMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftsolanakms)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **transferNftTron()**](./Api/NFTERC721OrCompatibleApi.md#transfernfttron)

> **POST** `/v3/nft/transaction`
> 
> Transfer an NFT

[🔹 **updateCashbackValueForAuthorNft()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornft)

> **PUT** `/v3/nft/royalty`
> 
> Update NFT royalty information

[🔹 **updateCashbackValueForAuthorNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftcelo)

> **PUT** `/v3/nft/royalty`
> 
> Update NFT royalty information

[🔹 **updateCashbackValueForAuthorNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftkms)

> **PUT** `/v3/nft/royalty`
> 
> Update NFT royalty information

[🔹 **updateCashbackValueForAuthorNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftkmscelo)

> **PUT** `/v3/nft/royalty`
> 
> Update NFT royalty information

[🔹 **updateCashbackValueForAuthorNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftkmstron)

> **PUT** `/v3/nft/royalty`
> 
> Update NFT royalty information

[🔹 **updateCashbackValueForAuthorNftTron()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornfttron)

> **PUT** `/v3/nft/royalty`
> 
> Update NFT royalty information

[🔹 **verifySolanaNFT()**](./Api/NFTERC721OrCompatibleApi.md#verifysolananft)

> **POST** `/v3/nft/verify`
> 
> Verify an NFT in an NFT collection on Solana

[🔹 **verifySolanaNFTKMS()**](./Api/NFTERC721OrCompatibleApi.md#verifysolananftkms)

> **POST** `/v3/nft/verify`
> 
> Verify an NFT in an NFT collection on Solana


### **api()->nodeRPC()**

[🔹 **nodeJsonPostRpcDriver()**](./Api/NodeRPCApi.md#nodejsonpostrpcdriver)

> **POST** `/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}`
> 
> Connect to the blockchain node through an RPC driver

[🔹 **nodeJsonRpcGetDriver()**](./Api/NodeRPCApi.md#nodejsonrpcgetdriver)

> **GET** `/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}`
> 
> Connect to the blockchain node through an RPC driver

[🔹 **nodeJsonRpcPutDriver()**](./Api/NodeRPCApi.md#nodejsonrpcputdriver)

> **PUT** `/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}`
> 
> Connect to the blockchain node through an RPC driver


### **api()->notificationSubscriptions()**

[🔹 **createSubscriptionBalance()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionbalance)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionContractLogEvent()**](./Api/NotificationSubscriptionsApi.md#createsubscriptioncontractlogevent)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionIncoming()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionincoming)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionInterval()**](./Api/NotificationSubscriptionsApi.md#createsubscriptioninterval)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionKMSError()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionkmserror)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionKMSSuccess()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionkmssuccess)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionMultiTokenTransferEvent()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionmultitokentransferevent)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionNftTransferEvent()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionnfttransferevent)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionNotification()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionnotification)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionPartialTradeMatch()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionpartialtradematch)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionPending()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionpending)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionTradeMatch()**](./Api/NotificationSubscriptionsApi.md#createsubscriptiontradematch)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **createSubscriptionTxInTheBlock()**](./Api/NotificationSubscriptionsApi.md#createsubscriptiontxintheblock)

> **POST** `/v3/subscription`
> 
> Create a subscription

[🔹 **deleteSubscription()**](./Api/NotificationSubscriptionsApi.md#deletesubscription)

> **DELETE** `/v3/subscription/{id}`
> 
> Cancel existing subscription

[🔹 **disableWebHookHmac()**](./Api/NotificationSubscriptionsApi.md#disablewebhookhmac)

> **DELETE** `/v3/subscription`
> 
> Disable HMAC webhook digest

[🔹 **enableWebHookHmac()**](./Api/NotificationSubscriptionsApi.md#enablewebhookhmac)

> **PUT** `/v3/subscription`
> 
> Enable HMAC webhook digest

[🔹 **getAllWebhooks()**](./Api/NotificationSubscriptionsApi.md#getallwebhooks)

> **GET** `/v3/subscription/webhook`
> 
> List all executed webhooks

[🔹 **getAllWebhooksCount()**](./Api/NotificationSubscriptionsApi.md#getallwebhookscount)

> **GET** `/v3/subscription/webhook/count`
> 
> Count of found entities for get webhook request

[🔹 **getSubscriptionReport()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionreport)

> **GET** `/v3/subscription/report/{id}`
> 
> Obtain report for subscription

[🔹 **getSubscriptions()**](./Api/NotificationSubscriptionsApi.md#getsubscriptions)

> **GET** `/v3/subscription`
> 
> List all active subscriptions

[🔹 **getSubscriptionsCount()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionscount)

> **GET** `/v3/subscription/count`
> 
> Count of found entities for get webhook request


### **api()->orderBook()**

[🔹 **chartRequest()**](./Api/OrderBookApi.md#chartrequest)

> **POST** `/v3/trade/chart`
> 
> Obtain chart data from historical closed trades

[🔹 **createFutureTrade()**](./Api/OrderBookApi.md#createfuturetrade)

> **POST** `/v3/trade`
> 
> Store buy / sell trade

[🔹 **createTrade()**](./Api/OrderBookApi.md#createtrade)

> **POST** `/v3/trade`
> 
> Store buy / sell trade

[🔹 **deleteAccountTrades()**](./Api/OrderBookApi.md#deleteaccounttrades)

> **DELETE** `/v3/trade/account/{id}`
> 
> Cancel all existing trades for account

[🔹 **deleteTrade()**](./Api/OrderBookApi.md#deletetrade)

> **DELETE** `/v3/trade/{id}`
> 
> Cancel existing trade

[🔹 **getBuyTrades()**](./Api/OrderBookApi.md#getbuytrades)

> **GET** `/v3/trade/buy`
> 
> List all active buy trades

[🔹 **getBuyTradesBody()**](./Api/OrderBookApi.md#getbuytradesbody)

> **POST** `/v3/trade/buy`
> 
> List all active buy trades

[🔹 **getHistoricalTrades()**](./Api/OrderBookApi.md#gethistoricaltrades)

> **GET** `/v3/trade/history`
> 
> List all historical trades

[🔹 **getHistoricalTradesBody()**](./Api/OrderBookApi.md#gethistoricaltradesbody)

> **POST** `/v3/trade/history`
> 
> List all historical trades

[🔹 **getMatchedTrades()**](./Api/OrderBookApi.md#getmatchedtrades)

> **POST** `/v3/trade/matched`
> 
> List all matched orders from FUTURE_SELL/FUTURE_BUY trades

[🔹 **getSellTrades()**](./Api/OrderBookApi.md#getselltrades)

> **GET** `/v3/trade/sell`
> 
> List all active sell trades

[🔹 **getSellTradesBody()**](./Api/OrderBookApi.md#getselltradesbody)

> **POST** `/v3/trade/sell`
> 
> List all active sell trades

[🔹 **getTradeById()**](./Api/OrderBookApi.md#gettradebyid)

> **GET** `/v3/trade/{id}`
> 
> Get existing trade


### **api()->polygon()**

[🔹 **callPolygonSmartContractMethod()**](./Api/PolygonApi.md#callpolygonsmartcontractmethod)

> **POST** `/v3/polygon/smartcontract`
> 
> Invoke a method in a smart contract on Polygon

[🔹 **callPolygonSmartContractMethodCaller()**](./Api/PolygonApi.md#callpolygonsmartcontractmethodcaller)

> **POST** `/v3/polygon/smartcontract`
> 
> Invoke a method in a smart contract on Polygon

[🔹 **callPolygonSmartContractMethodKMS()**](./Api/PolygonApi.md#callpolygonsmartcontractmethodkms)

> **POST** `/v3/polygon/smartcontract`
> 
> Invoke a method in a smart contract on Polygon

[🔹 **callPolygonSmartContractReadMethod()**](./Api/PolygonApi.md#callpolygonsmartcontractreadmethod)

> **POST** `/v3/polygon/smartcontract`
> 
> Invoke a method in a smart contract on Polygon

[🔹 **polygonBroadcast()**](./Api/PolygonApi.md#polygonbroadcast)

> **POST** `/v3/polygon/broadcast`
> 
> Broadcast signed Polygon transaction

[🔹 **polygonGenerateAddress()**](./Api/PolygonApi.md#polygongenerateaddress)

> **GET** `/v3/polygon/address/{xpub}/{index}`
> 
> Generate Polygon account address from Extended public key

[🔹 **polygonGenerateAddressPrivateKey()**](./Api/PolygonApi.md#polygongenerateaddressprivatekey)

> **POST** `/v3/polygon/wallet/priv`
> 
> Generate Polygon private key

[🔹 **polygonGenerateWallet()**](./Api/PolygonApi.md#polygongeneratewallet)

> **GET** `/v3/polygon/wallet`
> 
> Generate Polygon wallet

[🔹 **polygonGetBalance()**](./Api/PolygonApi.md#polygongetbalance)

> **GET** `/v3/polygon/account/balance/{address}`
> 
> Get Polygon Account balance

[🔹 **polygonGetBlock()**](./Api/PolygonApi.md#polygongetblock)

> **GET** `/v3/polygon/block/{hash}`
> 
> Get Polygon block by hash

[🔹 **polygonGetCurrentBlock()**](./Api/PolygonApi.md#polygongetcurrentblock)

> **GET** `/v3/polygon/block/current`
> 
> Get current block number

[🔹 **polygonGetTransaction()**](./Api/PolygonApi.md#polygongettransaction)

> **GET** `/v3/polygon/transaction/{hash}`
> 
> Get Polygon Transaction

[🔹 **polygonGetTransactionByAddress()**](./Api/PolygonApi.md#polygongettransactionbyaddress)

> **GET** `/v3/polygon/account/transaction/{address}`
> 
> Get Polygon transactions by address

[🔹 **polygonGetTransactionCount()**](./Api/PolygonApi.md#polygongettransactioncount)

> **GET** `/v3/polygon/transaction/count/{address}`
> 
> Get count of outgoing Polygon transactions

[🔹 **polygonWeb3Driver()**](./Api/PolygonApi.md#polygonweb3driver)

> **POST** `/v3/polygon/web3/{xApiKey}`
> 
> Web3 HTTP driver

[🔹 **transferPolygonBlockchain()**](./Api/PolygonApi.md#transferpolygonblockchain)

> **POST** `/v3/polygon/transaction`
> 
> Send MATIC from account to account

[🔹 **transferPolygonBlockchainKMS()**](./Api/PolygonApi.md#transferpolygonblockchainkms)

> **POST** `/v3/polygon/transaction`
> 
> Send MATIC from account to account


### **api()->serviceUtils()**

[🔹 **freezeApiKey()**](./Api/ServiceUtilsApi.md#freezeapikey)

> **PUT** `/v3/tatum/freeze`
> 
> Freeze API Key

[🔹 **getCredits()**](./Api/ServiceUtilsApi.md#getcredits)

> **GET** `/v3/tatum/usage`
> 
> Get information about your credit consumption for the last month

[🔹 **getVersion()**](./Api/ServiceUtilsApi.md#getversion)

> **GET** `/v3/tatum/version`
> 
> Get API version

[🔹 **unfreezeApiKey()**](./Api/ServiceUtilsApi.md#unfreezeapikey)

> **DELETE** `/v3/tatum/freeze`
> 
> Unfreeze API Key


### **api()->solana()**

[🔹 **solanaBroadcastConfirm()**](./Api/SolanaApi.md#solanabroadcastconfirm)

> **POST** `/v3/solana/broadcast/confirm`
> 
> Broadcast and confirm signed Solana transaction

[🔹 **solanaGenerateWallet()**](./Api/SolanaApi.md#solanageneratewallet)

> **GET** `/v3/solana/wallet`
> 
> Generate Solana wallet

[🔹 **solanaGetBalance()**](./Api/SolanaApi.md#solanagetbalance)

> **GET** `/v3/solana/account/balance/{address}`
> 
> Get Solana Account balance

[🔹 **solanaGetBlock()**](./Api/SolanaApi.md#solanagetblock)

> **GET** `/v3/solana/block/{height}`
> 
> Get Solana block by number

[🔹 **solanaGetCurrentBlock()**](./Api/SolanaApi.md#solanagetcurrentblock)

> **GET** `/v3/solana/block/current`
> 
> Get current block number

[🔹 **solanaGetTransaction()**](./Api/SolanaApi.md#solanagettransaction)

> **GET** `/v3/solana/transaction/{hash}`
> 
> Get Solana Transaction

[🔹 **solanaWeb3Driver()**](./Api/SolanaApi.md#solanaweb3driver)

> **POST** `/v3/solana/web3/{xApiKey}`
> 
> JSON RPC HTTP driver

[🔹 **transferSolanaBlockchain()**](./Api/SolanaApi.md#transfersolanablockchain)

> **POST** `/v3/solana/transaction`
> 
> Send SOL from account to account

[🔹 **transferSolanaBlockchainKMS()**](./Api/SolanaApi.md#transfersolanablockchainkms)

> **POST** `/v3/solana/transaction`
> 
> Send SOL from account to account


### **api()->stellar()**

[🔹 **transferXlmBlockchain()**](./Api/StellarApi.md#transferxlmblockchain)

> **POST** `/v3/xlm/transaction`
> 
> Send XLM from address to address

[🔹 **transferXlmBlockchainAsset()**](./Api/StellarApi.md#transferxlmblockchainasset)

> **POST** `/v3/xlm/transaction`
> 
> Send XLM from address to address

[🔹 **transferXlmBlockchainKMS()**](./Api/StellarApi.md#transferxlmblockchainkms)

> **POST** `/v3/xlm/transaction`
> 
> Send XLM from address to address

[🔹 **transferXlmBlockchainKMSAsset()**](./Api/StellarApi.md#transferxlmblockchainkmsasset)

> **POST** `/v3/xlm/transaction`
> 
> Send XLM from address to address

[🔹 **trustLineXlmBlockchain()**](./Api/StellarApi.md#trustlinexlmblockchain)

> **POST** `/v3/xlm/trust`
> 
> Create / Update / Delete XLM trust line

[🔹 **trustLineXlmBlockchainKMS()**](./Api/StellarApi.md#trustlinexlmblockchainkms)

> **POST** `/v3/xlm/trust`
> 
> Create / Update / Delete XLM trust line

[🔹 **xlmBroadcast()**](./Api/StellarApi.md#xlmbroadcast)

> **POST** `/v3/xlm/broadcast`
> 
> Broadcast signed XLM transaction

[🔹 **xlmGetAccountInfo()**](./Api/StellarApi.md#xlmgetaccountinfo)

> **GET** `/v3/xlm/account/{account}`
> 
> Get XLM Account info

[🔹 **xlmGetAccountTx()**](./Api/StellarApi.md#xlmgetaccounttx)

> **GET** `/v3/xlm/account/tx/{account}`
> 
> Get XLM Account transactions

[🔹 **xlmGetFee()**](./Api/StellarApi.md#xlmgetfee)

> **GET** `/v3/xlm/fee`
> 
> Get actual XLM fee

[🔹 **xlmGetLastClosedLedger()**](./Api/StellarApi.md#xlmgetlastclosedledger)

> **GET** `/v3/xlm/info`
> 
> Get XLM Blockchain Information

[🔹 **xlmGetLedger()**](./Api/StellarApi.md#xlmgetledger)

> **GET** `/v3/xlm/ledger/{sequence}`
> 
> Get XLM Blockchain Ledger by sequence

[🔹 **xlmGetLedgerTx()**](./Api/StellarApi.md#xlmgetledgertx)

> **GET** `/v3/xlm/ledger/{sequence}/transaction`
> 
> Get XLM Blockchain Transactions in Ledger

[🔹 **xlmGetTransaction()**](./Api/StellarApi.md#xlmgettransaction)

> **GET** `/v3/xlm/transaction/{hash}`
> 
> Get XLM Transaction by hash

[🔹 **xlmWallet()**](./Api/StellarApi.md#xlmwallet)

> **GET** `/v3/xlm/account`
> 
> Generate XLM account


### **api()->transaction()**

[🔹 **getTransactions()**](./Api/TransactionApi.md#gettransactions)

> **POST** `/v3/ledger/transaction/ledger`
> 
> Find transactions within the ledger.

[🔹 **getTransactionsByAccountId()**](./Api/TransactionApi.md#gettransactionsbyaccountid)

> **POST** `/v3/ledger/transaction/account`
> 
> Find transactions for account.

[🔹 **getTransactionsByCustomerId()**](./Api/TransactionApi.md#gettransactionsbycustomerid)

> **POST** `/v3/ledger/transaction/customer`
> 
> Find transactions for a customer across all of the customer's accounts.

[🔹 **getTransactionsByReference()**](./Api/TransactionApi.md#gettransactionsbyreference)

> **GET** `/v3/ledger/transaction/reference/{reference}`
> 
> Find transactions with a given reference across all accounts.

[🔹 **sendTransaction()**](./Api/TransactionApi.md#sendtransaction)

> **POST** `/v3/ledger/transaction`
> 
> Send payment

[🔹 **sendTransactionBatch()**](./Api/TransactionApi.md#sendtransactionbatch)

> **POST** `/v3/ledger/transaction/batch`
> 
> Send payment in batch


### **api()->tron()**

[🔹 **createTronTrc10Blockchain()**](./Api/TronApi.md#createtrontrc10blockchain)

> **POST** `/v3/tron/trc10/deploy`
> 
> Create a TRC-10 token

[🔹 **createTronTrc10BlockchainKMS()**](./Api/TronApi.md#createtrontrc10blockchainkms)

> **POST** `/v3/tron/trc10/deploy`
> 
> Create a TRC-10 token

[🔹 **createTronTrc20Blockchain()**](./Api/TronApi.md#createtrontrc20blockchain)

> **POST** `/v3/tron/trc20/deploy`
> 
> Create a TRC-20 token

[🔹 **createTronTrc20BlockchainKMS()**](./Api/TronApi.md#createtrontrc20blockchainkms)

> **POST** `/v3/tron/trc20/deploy`
> 
> Create a TRC-20 token

[🔹 **freezeTron()**](./Api/TronApi.md#freezetron)

> **POST** `/v3/tron/freezeBalance`
> 
> Freeze the balance of a TRON account

[🔹 **freezeTronKMS()**](./Api/TronApi.md#freezetronkms)

> **POST** `/v3/tron/freezeBalance`
> 
> Freeze the balance of a TRON account

[🔹 **generateTronwallet()**](./Api/TronApi.md#generatetronwallet)

> **GET** `/v3/tron/wallet`
> 
> Generate a TRON wallet

[🔹 **transferTronBlockchain()**](./Api/TronApi.md#transfertronblockchain)

> **POST** `/v3/tron/transaction`
> 
> Send TRX to a TRON account

[🔹 **transferTronBlockchainKMS()**](./Api/TronApi.md#transfertronblockchainkms)

> **POST** `/v3/tron/transaction`
> 
> Send TRX to a TRON account

[🔹 **transferTronTrc10Blockchain()**](./Api/TronApi.md#transfertrontrc10blockchain)

> **POST** `/v3/tron/trc10/transaction`
> 
> Send TRC-10 tokens to a TRON account

[🔹 **transferTronTrc10BlockchainKMS()**](./Api/TronApi.md#transfertrontrc10blockchainkms)

> **POST** `/v3/tron/trc10/transaction`
> 
> Send TRC-10 tokens to a TRON account

[🔹 **transferTronTrc20Blockchain()**](./Api/TronApi.md#transfertrontrc20blockchain)

> **POST** `/v3/tron/trc20/transaction`
> 
> Send TRC-20 tokens to a TRON account

[🔹 **transferTronTrc20BlockchainKMS()**](./Api/TronApi.md#transfertrontrc20blockchainkms)

> **POST** `/v3/tron/trc20/transaction`
> 
> Send TRC-20 tokens to a TRON account

[🔹 **tronAccountTx()**](./Api/TronApi.md#tronaccounttx)

> **GET** `/v3/tron/transaction/account/{address}`
> 
> Get all transactions for a TRON account

[🔹 **tronAccountTx20()**](./Api/TronApi.md#tronaccounttx20)

> **GET** `/v3/tron/transaction/account/{address}/trc20`
> 
> Get TRC-20 transactions for a TRON account

[🔹 **tronBroadcast()**](./Api/TronApi.md#tronbroadcast)

> **POST** `/v3/tron/broadcast`
> 
> Broadcast a TRON transaction

[🔹 **tronGenerateAddress()**](./Api/TronApi.md#trongenerateaddress)

> **GET** `/v3/tron/address/{xpub}/{index}`
> 
> Generate a TRON address from the wallet's extended public key

[🔹 **tronGenerateAddressPrivateKey()**](./Api/TronApi.md#trongenerateaddressprivatekey)

> **POST** `/v3/tron/wallet/priv`
> 
> Generate the private key for a TRON address

[🔹 **tronGetAccount()**](./Api/TronApi.md#trongetaccount)

> **GET** `/v3/tron/account/{address}`
> 
> Get the TRON account by its address

[🔹 **tronGetBlock()**](./Api/TronApi.md#trongetblock)

> **GET** `/v3/tron/block/{hash}`
> 
> Get a TRON block by its hash or height

[🔹 **tronGetCurrentBlock()**](./Api/TronApi.md#trongetcurrentblock)

> **GET** `/v3/tron/info`
> 
> Get the current TRON block

[🔹 **tronGetTransaction()**](./Api/TronApi.md#trongettransaction)

> **GET** `/v3/tron/transaction/{hash}`
> 
> Get a TRON transaction by its hash

[🔹 **tronTrc10Detail()**](./Api/TronApi.md#trontrc10detail)

> **GET** `/v3/tron/trc10/detail/{idOrOwnerAddress}`
> 
> Get information about a TRC-10 token


### **api()->veChain()**

[🔹 **transferVetBlockchain()**](./Api/VeChainApi.md#transfervetblockchain)

> **POST** `/v3/vet/transaction`
> 
> Send VeChain from account to account

[🔹 **transferVetBlockchainKMS()**](./Api/VeChainApi.md#transfervetblockchainkms)

> **POST** `/v3/vet/transaction`
> 
> Send VeChain from account to account

[🔹 **vetBroadcast()**](./Api/VeChainApi.md#vetbroadcast)

> **POST** `/v3/vet/broadcast`
> 
> Broadcast signed VeChain transaction

[🔹 **vetGenerateAddress()**](./Api/VeChainApi.md#vetgenerateaddress)

> **GET** `/v3/vet/address/{xpub}/{index}`
> 
> Generate VeChain account address from Extended public key

[🔹 **vetGenerateAddressPrivateKey()**](./Api/VeChainApi.md#vetgenerateaddressprivatekey)

> **POST** `/v3/vet/wallet/priv`
> 
> Generate VeChain private key

[🔹 **vetGenerateWallet()**](./Api/VeChainApi.md#vetgeneratewallet)

> **GET** `/v3/vet/wallet`
> 
> Generate VeChain wallet

[🔹 **vetGetBalance()**](./Api/VeChainApi.md#vetgetbalance)

> **GET** `/v3/vet/account/balance/{address}`
> 
> Get VeChain Account balance

[🔹 **vetGetBlock()**](./Api/VeChainApi.md#vetgetblock)

> **GET** `/v3/vet/block/{hash}`
> 
> Get VeChain Block by hash

[🔹 **vetGetCurrentBlock()**](./Api/VeChainApi.md#vetgetcurrentblock)

> **GET** `/v3/vet/block/current`
> 
> Get VeChain current block

[🔹 **vetGetEnergy()**](./Api/VeChainApi.md#vetgetenergy)

> **GET** `/v3/vet/account/energy/{address}`
> 
> Get VeChain Account energy (VTHO)

[🔹 **vetGetTransaction()**](./Api/VeChainApi.md#vetgettransaction)

> **GET** `/v3/vet/transaction/{hash}`
> 
> Get VeChain Transaction

[🔹 **vetGetTransactionReceipt()**](./Api/VeChainApi.md#vetgettransactionreceipt)

> **GET** `/v3/vet/transaction/{hash}/receipt`
> 
> Get VeChain Transaction Receipt


### **api()->virtualAccountBlockchainFees()**

[🔹 **offchainEstimateFee()**](./Api/VirtualAccountBlockchainFeesApi.md#offchainestimatefee)

> **POST** `/v3/offchain/blockchain/estimate`
> 
> Estimate ledger to blockchain transaction fee


### **api()->virtualCurrency()**

[🔹 **createCurrency()**](./Api/VirtualCurrencyApi.md#createcurrency)

> **POST** `/v3/ledger/virtualCurrency`
> 
> Create new virtual currency

[🔹 **getCurrency()**](./Api/VirtualCurrencyApi.md#getcurrency)

> **GET** `/v3/ledger/virtualCurrency/{name}`
> 
> Get virtual currency

[🔹 **mintCurrency()**](./Api/VirtualCurrencyApi.md#mintcurrency)

> **PUT** `/v3/ledger/virtualCurrency/mint`
> 
> Create new supply of virtual currency

[🔹 **revokeCurrency()**](./Api/VirtualCurrencyApi.md#revokecurrency)

> **PUT** `/v3/ledger/virtualCurrency/revoke`
> 
> Destroy supply of virtual currency

[🔹 **updateCurrency()**](./Api/VirtualCurrencyApi.md#updatecurrency)

> **PUT** `/v3/ledger/virtualCurrency`
> 
> Update virtual currency


### **api()->withdrawal()**

[🔹 **broadcastBlockchainTransaction()**](./Api/WithdrawalApi.md#broadcastblockchaintransaction)

> **POST** `/v3/offchain/withdrawal/broadcast`
> 
> Broadcast signed transaction and complete withdrawal

[🔹 **cancelInProgressWithdrawal()**](./Api/WithdrawalApi.md#cancelinprogresswithdrawal)

> **DELETE** `/v3/offchain/withdrawal/{id}`
> 
> Cancel withdrawal

[🔹 **completeWithdrawal()**](./Api/WithdrawalApi.md#completewithdrawal)

> **PUT** `/v3/offchain/withdrawal/{id}/{txId}`
> 
> Complete withdrawal

[🔹 **getWithdrawals()**](./Api/WithdrawalApi.md#getwithdrawals)

> **GET** `/v3/offchain/withdrawal`
> 
> Get withdrawals

[🔹 **storeWithdrawal()**](./Api/WithdrawalApi.md#storewithdrawal)

> **POST** `/v3/offchain/withdrawal`
> 
> Store withdrawal


### **api()->xRP()**

[🔹 **accountSettingsXrpBlockchain()**](./Api/XRPApi.md#accountsettingsxrpblockchain)

> **POST** `/v3/xrp/account/settings`
> 
> Modify XRP account

[🔹 **accountSettingsXrpBlockchainKMS()**](./Api/XRPApi.md#accountsettingsxrpblockchainkms)

> **POST** `/v3/xrp/account/settings`
> 
> Modify XRP account

[🔹 **transferXrpBlockchain()**](./Api/XRPApi.md#transferxrpblockchain)

> **POST** `/v3/xrp/transaction`
> 
> Send XRP from address to address

[🔹 **transferXrpBlockchainAsset()**](./Api/XRPApi.md#transferxrpblockchainasset)

> **POST** `/v3/xrp/transaction`
> 
> Send XRP from address to address

[🔹 **transferXrpBlockchainAssetKMS()**](./Api/XRPApi.md#transferxrpblockchainassetkms)

> **POST** `/v3/xrp/transaction`
> 
> Send XRP from address to address

[🔹 **transferXrpBlockchainKMS()**](./Api/XRPApi.md#transferxrpblockchainkms)

> **POST** `/v3/xrp/transaction`
> 
> Send XRP from address to address

[🔹 **trustLineXrpBlockchain()**](./Api/XRPApi.md#trustlinexrpblockchain)

> **POST** `/v3/xrp/trust`
> 
> Create / Update / Delete XRP trust line

[🔹 **trustLineXrpBlockchainKMS()**](./Api/XRPApi.md#trustlinexrpblockchainkms)

> **POST** `/v3/xrp/trust`
> 
> Create / Update / Delete XRP trust line

[🔹 **xrpBroadcast()**](./Api/XRPApi.md#xrpbroadcast)

> **POST** `/v3/xrp/broadcast`
> 
> Broadcast signed XRP transaction

[🔹 **xrpGetAccountBalance()**](./Api/XRPApi.md#xrpgetaccountbalance)

> **GET** `/v3/xrp/account/{account}/balance`
> 
> Get Account Balance

[🔹 **xrpGetAccountInfo()**](./Api/XRPApi.md#xrpgetaccountinfo)

> **GET** `/v3/xrp/account/{account}`
> 
> Get Account info

[🔹 **xrpGetAccountTx()**](./Api/XRPApi.md#xrpgetaccounttx)

> **GET** `/v3/xrp/account/tx/{account}`
> 
> Get Account transactions

[🔹 **xrpGetFee()**](./Api/XRPApi.md#xrpgetfee)

> **GET** `/v3/xrp/fee`
> 
> Get actual Blockchain fee

[🔹 **xrpGetLastClosedLedger()**](./Api/XRPApi.md#xrpgetlastclosedledger)

> **GET** `/v3/xrp/info`
> 
> Get XRP Blockchain Information

[🔹 **xrpGetLedger()**](./Api/XRPApi.md#xrpgetledger)

> **GET** `/v3/xrp/ledger/{i}`
> 
> Get Ledger

[🔹 **xrpGetTransaction()**](./Api/XRPApi.md#xrpgettransaction)

> **GET** `/v3/xrp/transaction/{hash}`
> 
> Get XRP Transaction by hash

[🔹 **xrpWallet()**](./Api/XRPApi.md#xrpwallet)

> **GET** `/v3/xrp/account`
> 
> Generate XRP account


### **api()->xinFin()**

[🔹 **callXdcReadSmartContractMethod()**](./Api/XinFinApi.md#callxdcreadsmartcontractmethod)

> **POST** `/v3/xdc/smartcontract`
> 
> Invoke a method in a smart contract on XinFin

[🔹 **callXdcSmartContractMethod()**](./Api/XinFinApi.md#callxdcsmartcontractmethod)

> **POST** `/v3/xdc/smartcontract`
> 
> Invoke a method in a smart contract on XinFin

[🔹 **callXdcSmartContractMethodKMS()**](./Api/XinFinApi.md#callxdcsmartcontractmethodkms)

> **POST** `/v3/xdc/smartcontract`
> 
> Invoke a method in a smart contract on XinFin

[🔹 **transferXdcBlockchain()**](./Api/XinFinApi.md#transferxdcblockchain)

> **POST** `/v3/xdc/transaction`
> 
> Send XDC / ERC20 from account to account

[🔹 **transferXdcBlockchainKMS()**](./Api/XinFinApi.md#transferxdcblockchainkms)

> **POST** `/v3/xdc/transaction`
> 
> Send XDC / ERC20 from account to account

[🔹 **xdcBroadcast()**](./Api/XinFinApi.md#xdcbroadcast)

> **POST** `/v3/xdc/broadcast`
> 
> Broadcast signed XDC transaction

[🔹 **xdcGenerateAddress()**](./Api/XinFinApi.md#xdcgenerateaddress)

> **GET** `/v3/xdc/address/{xpub}/{index}`
> 
> Generate XDC account address from Extended public key

[🔹 **xdcGenerateAddressPrivateKey()**](./Api/XinFinApi.md#xdcgenerateaddressprivatekey)

> **POST** `/v3/xdc/wallet/priv`
> 
> Generate XDC private key

[🔹 **xdcGenerateWallet()**](./Api/XinFinApi.md#xdcgeneratewallet)

> **GET** `/v3/xdc/wallet`
> 
> Generate XDC wallet

[🔹 **xdcGetBalance()**](./Api/XinFinApi.md#xdcgetbalance)

> **GET** `/v3/xdc/account/balance/{address}`
> 
> Get XDC Account balance

[🔹 **xdcGetBlock()**](./Api/XinFinApi.md#xdcgetblock)

> **GET** `/v3/xdc/block/{hash}`
> 
> Get XDC block by hash

[🔹 **xdcGetCurrentBlock()**](./Api/XinFinApi.md#xdcgetcurrentblock)

> **GET** `/v3/xdc/block/current`
> 
> Get current block number

[🔹 **xdcGetTransaction()**](./Api/XinFinApi.md#xdcgettransaction)

> **GET** `/v3/xdc/transaction/{hash}`
> 
> Get XDC Transaction

[🔹 **xdcGetTransactionCount()**](./Api/XinFinApi.md#xdcgettransactioncount)

> **GET** `/v3/xdc/transaction/count/{address}`
> 
> Get count of outgoing XDC transactions

[🔹 **xdcWeb3Driver()**](./Api/XinFinApi.md#xdcweb3driver)

> **POST** `/v3/xdc/web3/{xApiKey}`
> 
> Web3 HTTP driver



[[Back to top]](#) 