# [Tatum - PHP SDK](https://github.com/tatumio/tatum-php)

## Table of Contents
- [Local Endpoints](#local-endpoints)
    - [Wallet](#local-wallet)
    - [Transaction](#local-transaction)
- [API Endpoints](#api-endpoints)
    - [Account](#api-account)
    - [Algorand](#api-algorand)
    - [Auction](#api-auction)
    - [BNB Beacon Chain](#api-bnbbeaconchain)
    - [BNB Smart Chain](#api-bnbsmartchain)
    - [Bitcoin](#api-bitcoin)
    - [Bitcoin Cash](#api-bitcoincash)
    - [Blockchain addresses](#api-blockchainaddresses)
    - [Blockchain fees](#api-blockchainfees)
    - [Blockchain operations](#api-blockchainoperations)
    - [Blockchain storage](#api-blockchainstorage)
    - [Blockchain utils](#api-blockchainutils)
    - [Cardano](#api-cardano)
    - [Celo](#api-celo)
    - [Custodial managed wallets](#api-custodialmanagedwallets)
    - [Customer](#api-customer)
    - [Deposit](#api-deposit)
    - [Dogecoin](#api-dogecoin)
    - [Elrond](#api-elrond)
    - [Ethereum](#api-ethereum)
    - [Exchange rate](#api-exchangerate)
    - [Flow](#api-flow)
    - [Fungible Tokens (ERC-20 or compatible)](#api-fungibletokenserc20orcompatible)
    - [Gas pump](#api-gaspump)
    - [Harmony](#api-harmony)
    - [IPFS](#api-ipfs)
    - [Key Management System](#api-keymanagementsystem)
    - [Klaytn](#api-klaytn)
    - [KuCoin](#api-kucoin)
    - [Litecoin](#api-litecoin)
    - [Malicious address](#api-maliciousaddress)
    - [Marketplace](#api-marketplace)
    - [Multi Tokens (ERC-1155 or compatible)](#api-multitokenserc1155orcompatible)
    - [NFT (ERC-721 or compatible)](#api-nfterc721orcompatible)
    - [Node RPC](#api-noderpc)
    - [Notification subscriptions](#api-notificationsubscriptions)
    - [Order Book](#api-orderbook)
    - [Polygon](#api-polygon)
    - [Service utils](#api-serviceutils)
    - [Solana](#api-solana)
    - [Stellar](#api-stellar)
    - [Transaction](#api-transaction)
    - [Tron](#api-tron)
    - [VeChain](#api-vechain)
    - [Virtual account blockchain fees](#api-virtualaccountblockchainfees)
    - [Virtual Currency](#api-virtualcurrency)
    - [Withdrawal](#api-withdrawal)
    - [XRP](#api-xrp)
    - [XinFin](#api-xinfin)

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

[[Back to top]](#)

### **local()->wallet()->bitcoinCash()** 

[🔹 **generateWallet()**](./Local/Wallet/BitcoinCash.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/BitcoinCash.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/BitcoinCash.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/BitcoinCash.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->dogecoin()** 

[🔹 **generateWallet()**](./Local/Wallet/Dogecoin.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Dogecoin.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Dogecoin.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Dogecoin.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->litecoin()** 

[🔹 **generateWallet()**](./Local/Wallet/Litecoin.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Litecoin.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Litecoin.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Litecoin.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->ethereum()** 

[🔹 **generateWallet()**](./Local/Wallet/Ethereum.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Ethereum.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Ethereum.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Ethereum.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->bsc()** 

[🔹 **generateWallet()**](./Local/Wallet/BSC.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/BSC.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/BSC.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/BSC.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->celo()** 

[🔹 **generateWallet()**](./Local/Wallet/Celo.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Celo.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Celo.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Celo.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->harmony()** 

[🔹 **generateWallet()**](./Local/Wallet/Harmony.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Harmony.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Harmony.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Harmony.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->kcs()** 

[🔹 **generateWallet()**](./Local/Wallet/KCS.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/KCS.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/KCS.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/KCS.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->klaytn()** 

[🔹 **generateWallet()**](./Local/Wallet/Klaytn.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Klaytn.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Klaytn.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Klaytn.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->polygon()** 

[🔹 **generateWallet()**](./Local/Wallet/Polygon.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Polygon.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Polygon.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Polygon.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->tron()** 

[🔹 **generateWallet()**](./Local/Wallet/Tron.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/Tron.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/Tron.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/Tron.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

### **local()->wallet()->vechain()** 

[🔹 **generateWallet()**](./Local/Wallet/VeChain.md#generatewallet)

> Generate wallet

[🔹 **generateAddressFromXpub()**](./Local/Wallet/VeChain.md#generateaddressfromxpub)

> Generate address from xPub and index

[🔹 **generateAddressFromPrivateKey()**](./Local/Wallet/VeChain.md#generateaddressfromprivatekey)

> Generate address from xPub and index

[🔹 **generatePrivateKey()**](./Local/Wallet/VeChain.md#generateprivatekey)

> Generate private key from mnemonic and index

[[Back to top]](#)

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

[[Back to top]](#)

### **local()->transaction()->bitcoinCash()** 

[🔹 **sign()**](./Local/Transaction/BitcoinCash.md#sign)

> Sign transaction

[[Back to top]](#)

### **local()->transaction()->dogecoin()** 

[🔹 **sign()**](./Local/Transaction/Dogecoin.md#sign)

> Sign transaction

[[Back to top]](#)

### **local()->transaction()->litecoin()** 

[🔹 **sign()**](./Local/Transaction/Litecoin.md#sign)

> Sign transaction

[[Back to top]](#)

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

> Activate account
> 
> **PUT** `/v3/ledger/account/{id}/activate`

[🔹 **blockAmount()**](./Api/AccountApi.md#blockamount)

> Block an amount in an account
> 
> **POST** `/v3/ledger/account/block/{id}`

[🔹 **createAccount()**](./Api/AccountApi.md#createaccount)

> Create a virtual account
> 
> **POST** `/v3/ledger/account`

[🔹 **createAccountBatch()**](./Api/AccountApi.md#createaccountbatch)

> Create multiple accounts in a batch call
> 
> **POST** `/v3/ledger/account/batch`

[🔹 **createAccountXpub()**](./Api/AccountApi.md#createaccountxpub)

> Create a virtual account
> 
> **POST** `/v3/ledger/account`

[🔹 **deactivateAccount()**](./Api/AccountApi.md#deactivateaccount)

> Deactivate account
> 
> **PUT** `/v3/ledger/account/{id}/deactivate`

[🔹 **deleteAllBlockAmount()**](./Api/AccountApi.md#deleteallblockamount)

> Unblock all blocked amounts in an account
> 
> **DELETE** `/v3/ledger/account/block/account/{id}`

[🔹 **deleteBlockAmount()**](./Api/AccountApi.md#deleteblockamount)

> Unblock a blocked amount in an account
> 
> **DELETE** `/v3/ledger/account/block/{id}`

[🔹 **freezeAccount()**](./Api/AccountApi.md#freezeaccount)

> Freeze account
> 
> **PUT** `/v3/ledger/account/{id}/freeze`

[🔹 **getAccountBalance()**](./Api/AccountApi.md#getaccountbalance)

> Get account balance
> 
> **GET** `/v3/ledger/account/{id}/balance`

[🔹 **getAccountByAccountId()**](./Api/AccountApi.md#getaccountbyaccountid)

> Get account by ID
> 
> **GET** `/v3/ledger/account/{id}`

[🔹 **getAccounts()**](./Api/AccountApi.md#getaccounts)

> List all accounts
> 
> **GET** `/v3/ledger/account`

[🔹 **getAccountsByCustomerId()**](./Api/AccountApi.md#getaccountsbycustomerid)

> List all customer accounts
> 
> **GET** `/v3/ledger/account/customer/{id}`

[🔹 **getAccountsCount()**](./Api/AccountApi.md#getaccountscount)

> Count of found entities for get accounts request
> 
> **GET** `/v3/ledger/account/count`

[🔹 **getBlockAmount()**](./Api/AccountApi.md#getblockamount)

> Get blocked amounts in an account
> 
> **GET** `/v3/ledger/account/block/{id}`

[🔹 **getBlockAmountById()**](./Api/AccountApi.md#getblockamountbyid)

> Get blocked amount by ID
> 
> **GET** `/v3/ledger/account/block/{id}/detail`

[🔹 **unblockAmountWithTransaction()**](./Api/AccountApi.md#unblockamountwithtransaction)

> Unblock an amount in an account and perform a transaction
> 
> **PUT** `/v3/ledger/account/block/{id}`

[🔹 **unfreezeAccount()**](./Api/AccountApi.md#unfreezeaccount)

> Unfreeze account
> 
> **PUT** `/v3/ledger/account/{id}/unfreeze`

[🔹 **updateAccountByAccountId()**](./Api/AccountApi.md#updateaccountbyaccountid)

> Update account
> 
> **PUT** `/v3/ledger/account/{id}`



[[Back to top]](#)

---


### **api()->algorand()**

[🔹 **algoNodeGetDriver()**](./Api/AlgorandApi.md#algonodegetdriver)

> Access Algorand Algod GET node endpoints
> 
> **GET** `/v3/algorand/node/algod/{xApiKey}/{algodPath}`

[🔹 **algoNodeIndexerGetDriver()**](./Api/AlgorandApi.md#algonodeindexergetdriver)

> Access Algorand Indexer GET node endpoints
> 
> **GET** `/v3/algorand/node/indexer/{xApiKey}/{indexerPath}`

[🔹 **algoNodePostDriver()**](./Api/AlgorandApi.md#algonodepostdriver)

> Access Algorand Algod POST node endpoints
> 
> **POST** `/v3/algorand/node/algod/{xApiKey}/{algodPath}`

[🔹 **algoandBroadcast()**](./Api/AlgorandApi.md#algoandbroadcast)

> Broadcast signed Algorand transaction
> 
> **POST** `/v3/algorand/broadcast`

[🔹 **algorandGenerateAddress()**](./Api/AlgorandApi.md#algorandgenerateaddress)

> Generate Algorand account address from private key
> 
> **GET** `/v3/algorand/address/{priv}`

[🔹 **algorandGenerateWallet()**](./Api/AlgorandApi.md#algorandgeneratewallet)

> Generate Algorand wallet
> 
> **GET** `/v3/algorand/wallet`

[🔹 **algorandGetBalance()**](./Api/AlgorandApi.md#algorandgetbalance)

> Get Algorand Account balance
> 
> **GET** `/v3/algorand/account/balance/{address}`

[🔹 **algorandGetBlock()**](./Api/AlgorandApi.md#algorandgetblock)

> Get Algorand block by block round number
> 
> **GET** `/v3/algorand/block/{roundNumber}`

[🔹 **algorandGetCurrentBlock()**](./Api/AlgorandApi.md#algorandgetcurrentblock)

> Get current block number
> 
> **GET** `/v3/algorand/block/current`

[🔹 **algorandGetPayTransactionsByFromTo()**](./Api/AlgorandApi.md#algorandgetpaytransactionsbyfromto)

> Get Algorand Transactions between from and to
> 
> **GET** `/v3/algorand/transactions/{from}/{to}`

[🔹 **algorandGetTransaction()**](./Api/AlgorandApi.md#algorandgettransaction)

> Get Algorand Transaction
> 
> **GET** `/v3/algorand/transaction/{txid}`

[🔹 **receiveAlgorandAsset()**](./Api/AlgorandApi.md#receivealgorandasset)

> Enable receiving asset on account
> 
> **POST** `/v3/algorand/asset/receive`

[🔹 **receiveAlgorandAssetKMS()**](./Api/AlgorandApi.md#receivealgorandassetkms)

> Enable receiving asset on account
> 
> **POST** `/v3/algorand/asset/receive`

[🔹 **transferAlgorandBlockchain()**](./Api/AlgorandApi.md#transferalgorandblockchain)

> Send Algos to an Algorand account
> 
> **POST** `/v3/algorand/transaction`

[🔹 **transferAlgorandBlockchainKMS()**](./Api/AlgorandApi.md#transferalgorandblockchainkms)

> Send Algos to an Algorand account
> 
> **POST** `/v3/algorand/transaction`



[[Back to top]](#)

---


### **api()->auction()**

[🔹 **approveNftSpending()**](./Api/AuctionApi.md#approvenftspending)

> Allow the NFT auction or marketplace to transfer an asset
> 
> **POST** `/v3/blockchain/auction/approve`

[🔹 **approveNftSpendingCelo()**](./Api/AuctionApi.md#approvenftspendingcelo)

> Allow the NFT auction or marketplace to transfer an asset
> 
> **POST** `/v3/blockchain/auction/approve`

[🔹 **approveNftSpendingCeloKMS()**](./Api/AuctionApi.md#approvenftspendingcelokms)

> Allow the NFT auction or marketplace to transfer an asset
> 
> **POST** `/v3/blockchain/auction/approve`

[🔹 **approveNftSpendingKMS()**](./Api/AuctionApi.md#approvenftspendingkms)

> Allow the NFT auction or marketplace to transfer an asset
> 
> **POST** `/v3/blockchain/auction/approve`

[🔹 **bidOnAuction()**](./Api/AuctionApi.md#bidonauction)

> Bid for an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/bid`

[🔹 **bidOnAuctionCelo()**](./Api/AuctionApi.md#bidonauctioncelo)

> Bid for an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/bid`

[🔹 **bidOnAuctionCeloKMS()**](./Api/AuctionApi.md#bidonauctioncelokms)

> Bid for an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/bid`

[🔹 **bidOnAuctionKMS()**](./Api/AuctionApi.md#bidonauctionkms)

> Bid for an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/bid`

[🔹 **bloAucUpdateFeeRecipient()**](./Api/AuctionApi.md#bloaucupdatefeerecipient)

> Update the recipient of the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/recipient`

[🔹 **bloAucUpdateFeeRecipientCelo()**](./Api/AuctionApi.md#bloaucupdatefeerecipientcelo)

> Update the recipient of the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/recipient`

[🔹 **bloAucUpdateFeeRecipientCeloKMS()**](./Api/AuctionApi.md#bloaucupdatefeerecipientcelokms)

> Update the recipient of the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/recipient`

[🔹 **bloAucUpdateFeeRecipientKMS()**](./Api/AuctionApi.md#bloaucupdatefeerecipientkms)

> Update the recipient of the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/recipient`

[🔹 **cancelAuction()**](./Api/AuctionApi.md#cancelauction)

> Cancel the selling of an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/cancel`

[🔹 **cancelAuctionCelo()**](./Api/AuctionApi.md#cancelauctioncelo)

> Cancel the selling of an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/cancel`

[🔹 **cancelAuctionCeloKMS()**](./Api/AuctionApi.md#cancelauctioncelokms)

> Cancel the selling of an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/cancel`

[🔹 **cancelAuctionKMS()**](./Api/AuctionApi.md#cancelauctionkms)

> Cancel the selling of an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/cancel`

[🔹 **createAuction()**](./Api/AuctionApi.md#createauction)

> Sell an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/sell`

[🔹 **createAuctionCelo()**](./Api/AuctionApi.md#createauctioncelo)

> Sell an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/sell`

[🔹 **createAuctionCeloKMS()**](./Api/AuctionApi.md#createauctioncelokms)

> Sell an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/sell`

[🔹 **createAuctionKMS()**](./Api/AuctionApi.md#createauctionkms)

> Sell an asset at the NFT auction
> 
> **POST** `/v3/blockchain/auction/sell`

[🔹 **generateAuction()**](./Api/AuctionApi.md#generateauction)

> Create an NFT auction
> 
> **POST** `/v3/blockchain/auction`

[🔹 **generateAuctionCelo()**](./Api/AuctionApi.md#generateauctioncelo)

> Create an NFT auction
> 
> **POST** `/v3/blockchain/auction`

[🔹 **generateAuctionCeloKMS()**](./Api/AuctionApi.md#generateauctioncelokms)

> Create an NFT auction
> 
> **POST** `/v3/blockchain/auction`

[🔹 **generateAuctionKMS()**](./Api/AuctionApi.md#generateauctionkms)

> Create an NFT auction
> 
> **POST** `/v3/blockchain/auction`

[🔹 **getAuction()**](./Api/AuctionApi.md#getauction)

> Get information about an auctioned asset at the NFT auction
> 
> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/{id}`

[🔹 **getAuctionFee()**](./Api/AuctionApi.md#getauctionfee)

> Get the NFT auction fee
> 
> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/fee`

[🔹 **getAuctionFeeRecipient()**](./Api/AuctionApi.md#getauctionfeerecipient)

> Get the recipient of the NFT auction fee
> 
> **GET** `/v3/blockchain/auction/{chain}/{contractAddress}/recipient`

[🔹 **settleAuction()**](./Api/AuctionApi.md#settleauction)

> Settle an NFT auction
> 
> **POST** `/v3/blockchain/auction/settle`

[🔹 **settleAuctionCelo()**](./Api/AuctionApi.md#settleauctioncelo)

> Settle an NFT auction
> 
> **POST** `/v3/blockchain/auction/settle`

[🔹 **settleAuctionCeloKMS()**](./Api/AuctionApi.md#settleauctioncelokms)

> Settle an NFT auction
> 
> **POST** `/v3/blockchain/auction/settle`

[🔹 **settleAuctionKMS()**](./Api/AuctionApi.md#settleauctionkms)

> Settle an NFT auction
> 
> **POST** `/v3/blockchain/auction/settle`

[🔹 **updateFeeAuction()**](./Api/AuctionApi.md#updatefeeauction)

> Update the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/fee`

[🔹 **updateFeeAuctionCelo()**](./Api/AuctionApi.md#updatefeeauctioncelo)

> Update the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/fee`

[🔹 **updateFeeAuctionCeloKMS()**](./Api/AuctionApi.md#updatefeeauctioncelokms)

> Update the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/fee`

[🔹 **updateFeeAuctionKMS()**](./Api/AuctionApi.md#updatefeeauctionkms)

> Update the NFT auction fee
> 
> **PUT** `/v3/blockchain/auction/fee`



[[Back to top]](#)

---


### **api()->bNBBeaconChain()**

[🔹 **bnbBroadcast()**](./Api/BNBBeaconChainApi.md#bnbbroadcast)

> Broadcast signed BNB transaction
> 
> **POST** `/v3/bnb/broadcast`

[🔹 **bnbGenerateWallet()**](./Api/BNBBeaconChainApi.md#bnbgeneratewallet)

> Generate Binance wallet
> 
> **GET** `/v3/bnb/account`

[🔹 **bnbGetAccount()**](./Api/BNBBeaconChainApi.md#bnbgetaccount)

> Get Binance Account
> 
> **GET** `/v3/bnb/account/{address}`

[🔹 **bnbGetBlock()**](./Api/BNBBeaconChainApi.md#bnbgetblock)

> Get Binance Transactions in Block
> 
> **GET** `/v3/bnb/block/{height}`

[🔹 **bnbGetCurrentBlock()**](./Api/BNBBeaconChainApi.md#bnbgetcurrentblock)

> Get Binance current block
> 
> **GET** `/v3/bnb/block/current`

[🔹 **bnbGetTransaction()**](./Api/BNBBeaconChainApi.md#bnbgettransaction)

> Get Binance Transaction
> 
> **GET** `/v3/bnb/transaction/{hash}`

[🔹 **bnbGetTxByAccount()**](./Api/BNBBeaconChainApi.md#bnbgettxbyaccount)

> Get Binance Transactions By Address
> 
> **GET** `/v3/bnb/account/transaction/{address}`

[🔹 **transferBnbBlockchain()**](./Api/BNBBeaconChainApi.md#transferbnbblockchain)

> Send Binance / Binance Token from account to account
> 
> **POST** `/v3/bnb/transaction`

[🔹 **transferBnbBlockchainKMS()**](./Api/BNBBeaconChainApi.md#transferbnbblockchainkms)

> Send Binance / Binance Token from account to account
> 
> **POST** `/v3/bnb/transaction`



[[Back to top]](#)

---


### **api()->bNBSmartChain()**

[🔹 **bscBroadcast()**](./Api/BNBSmartChainApi.md#bscbroadcast)

> Broadcast signed BSC transaction
> 
> **POST** `/v3/bsc/broadcast`

[🔹 **bscGenerateAddress()**](./Api/BNBSmartChainApi.md#bscgenerateaddress)

> Generate BSC account address from Extended public key
> 
> **GET** `/v3/bsc/address/{xpub}/{index}`

[🔹 **bscGenerateAddressPrivateKey()**](./Api/BNBSmartChainApi.md#bscgenerateaddressprivatekey)

> Generate BSC private key
> 
> **POST** `/v3/bsc/wallet/priv`

[🔹 **bscGenerateWallet()**](./Api/BNBSmartChainApi.md#bscgeneratewallet)

> Generate BSC wallet
> 
> **GET** `/v3/bsc/wallet`

[🔹 **bscGetBalance()**](./Api/BNBSmartChainApi.md#bscgetbalance)

> Get BSC Account balance
> 
> **GET** `/v3/bsc/account/balance/{address}`

[🔹 **bscGetBlock()**](./Api/BNBSmartChainApi.md#bscgetblock)

> Get BSC block by hash
> 
> **GET** `/v3/bsc/block/{hash}`

[🔹 **bscGetCurrentBlock()**](./Api/BNBSmartChainApi.md#bscgetcurrentblock)

> Get current block number
> 
> **GET** `/v3/bsc/block/current`

[🔹 **bscGetTransaction()**](./Api/BNBSmartChainApi.md#bscgettransaction)

> Get BSC Transaction
> 
> **GET** `/v3/bsc/transaction/{hash}`

[🔹 **bscGetTransactionCount()**](./Api/BNBSmartChainApi.md#bscgettransactioncount)

> Get count of outgoing BSC transactions
> 
> **GET** `/v3/bsc/transaction/count/{address}`

[🔹 **bscWeb3Driver()**](./Api/BNBSmartChainApi.md#bscweb3driver)

> Web3 HTTP driver
> 
> **POST** `/v3/bsc/web3/{xApiKey}`

[🔹 **callBscSmartContractMethod()**](./Api/BNBSmartChainApi.md#callbscsmartcontractmethod)

> Invoke a method in a smart contract on BNB Smart Chain
> 
> **POST** `/v3/bsc/smartcontract`

[🔹 **callBscSmartContractMethodKMS()**](./Api/BNBSmartChainApi.md#callbscsmartcontractmethodkms)

> Invoke a method in a smart contract on BNB Smart Chain
> 
> **POST** `/v3/bsc/smartcontract`

[🔹 **callBscSmartContractReadMethod()**](./Api/BNBSmartChainApi.md#callbscsmartcontractreadmethod)

> Invoke a method in a smart contract on BNB Smart Chain
> 
> **POST** `/v3/bsc/smartcontract`

[🔹 **transferBscBlockchain()**](./Api/BNBSmartChainApi.md#transferbscblockchain)

> Send BSC / BEP20 from account to account
> 
> **POST** `/v3/bsc/transaction`

[🔹 **transferBscBlockchainKMS()**](./Api/BNBSmartChainApi.md#transferbscblockchainkms)

> Send BSC / BEP20 from account to account
> 
> **POST** `/v3/bsc/transaction`



[[Back to top]](#)

---


### **api()->bitcoin()**

[🔹 **btcBroadcast()**](./Api/BitcoinApi.md#btcbroadcast)

> Broadcast a signed Bitcoin transaction
> 
> **POST** `/v3/bitcoin/broadcast`

[🔹 **btcGenerateAddress()**](./Api/BitcoinApi.md#btcgenerateaddress)

> Generate a Bitcoin address from the wallet's extended public key
> 
> **GET** `/v3/bitcoin/address/{xpub}/{index}`

[🔹 **btcGenerateAddressPrivateKey()**](./Api/BitcoinApi.md#btcgenerateaddressprivatekey)

> Generate the private key for a Bitcoin address
> 
> **POST** `/v3/bitcoin/wallet/priv`

[🔹 **btcGenerateWallet()**](./Api/BitcoinApi.md#btcgeneratewallet)

> Generate a Bitcoin wallet
> 
> **GET** `/v3/bitcoin/wallet`

[🔹 **btcGetBalanceOfAddress()**](./Api/BitcoinApi.md#btcgetbalanceofaddress)

> Get the balance of a Bitcoin address
> 
> **GET** `/v3/bitcoin/address/balance/{address}`

[🔹 **btcGetBlock()**](./Api/BitcoinApi.md#btcgetblock)

> Get a Bitcoin block by its hash or height
> 
> **GET** `/v3/bitcoin/block/{hash}`

[🔹 **btcGetBlockChainInfo()**](./Api/BitcoinApi.md#btcgetblockchaininfo)

> Get Bitcoin blockchain information
> 
> **GET** `/v3/bitcoin/info`

[🔹 **btcGetBlockHash()**](./Api/BitcoinApi.md#btcgetblockhash)

> Get the hash of a Bitcoin block
> 
> **GET** `/v3/bitcoin/block/hash/{i}`

[🔹 **btcGetMempool()**](./Api/BitcoinApi.md#btcgetmempool)

> Get transactions from the Bitcoin mempool
> 
> **GET** `/v3/bitcoin/mempool`

[🔹 **btcGetRawTransaction()**](./Api/BitcoinApi.md#btcgetrawtransaction)

> Get a Bitcoin transaction by its hash
> 
> **GET** `/v3/bitcoin/transaction/{hash}`

[🔹 **btcGetTxByAddress()**](./Api/BitcoinApi.md#btcgettxbyaddress)

> Get all transactions for a Bitcoin address
> 
> **GET** `/v3/bitcoin/transaction/address/{address}`

[🔹 **btcGetUTXO()**](./Api/BitcoinApi.md#btcgetutxo)

> Get information about a transaction output (UTXO) in a Bitcoin transaction
> 
> **GET** `/v3/bitcoin/utxo/{hash}/{index}`

[🔹 **btcRpcDriver()**](./Api/BitcoinApi.md#btcrpcdriver)

> Connect to a Bitcoin node through an RPC driver
> 
> **POST** `/v3/bitcoin/node`

[🔹 **btcTransactionFromAddress()**](./Api/BitcoinApi.md#btctransactionfromaddress)

> Send BTC to Bitcoin addresses
> 
> **POST** `/v3/bitcoin/transaction`

[🔹 **btcTransactionFromAddressKMS()**](./Api/BitcoinApi.md#btctransactionfromaddresskms)

> Send BTC to Bitcoin addresses
> 
> **POST** `/v3/bitcoin/transaction`

[🔹 **btcTransactionFromUTXO()**](./Api/BitcoinApi.md#btctransactionfromutxo)

> Send BTC to Bitcoin addresses
> 
> **POST** `/v3/bitcoin/transaction`

[🔹 **btcTransactionFromUTXOKMS()**](./Api/BitcoinApi.md#btctransactionfromutxokms)

> Send BTC to Bitcoin addresses
> 
> **POST** `/v3/bitcoin/transaction`



[[Back to top]](#)

---


### **api()->bitcoinCash()**

[🔹 **bchBroadcast()**](./Api/BitcoinCashApi.md#bchbroadcast)

> Broadcast signed Bitcoin Cash transaction
> 
> **POST** `/v3/bcash/broadcast`

[🔹 **bchGenerateAddress()**](./Api/BitcoinCashApi.md#bchgenerateaddress)

> Generate Bitcoin Cash deposit address from Extended public key
> 
> **GET** `/v3/bcash/address/{xpub}/{index}`

[🔹 **bchGenerateAddressPrivateKey()**](./Api/BitcoinCashApi.md#bchgenerateaddressprivatekey)

> Generate Bitcoin Cash private key
> 
> **POST** `/v3/bcash/wallet/priv`

[🔹 **bchGenerateWallet()**](./Api/BitcoinCashApi.md#bchgeneratewallet)

> Generate Bitcoin Cash wallet
> 
> **GET** `/v3/bcash/wallet`

[🔹 **bchGetBlock()**](./Api/BitcoinCashApi.md#bchgetblock)

> Get Bitcoin Cash Block by hash
> 
> **GET** `/v3/bcash/block/{hash}`

[🔹 **bchGetBlockChainInfo()**](./Api/BitcoinCashApi.md#bchgetblockchaininfo)

> Get Bitcoin Cash Blockchain Information
> 
> **GET** `/v3/bcash/info`

[🔹 **bchGetBlockHash()**](./Api/BitcoinCashApi.md#bchgetblockhash)

> Get Bitcoin Cash Block hash
> 
> **GET** `/v3/bcash/block/hash/{i}`

[🔹 **bchGetRawTransaction()**](./Api/BitcoinCashApi.md#bchgetrawtransaction)

> Get Bitcoin Cash Transaction by hash
> 
> **GET** `/v3/bcash/transaction/{hash}`

[🔹 **bchGetTxByAddress()**](./Api/BitcoinCashApi.md#bchgettxbyaddress)

> Get Bitcoin Cash Transactions by address
> 
> **GET** `/v3/bcash/transaction/address/{address}`

[🔹 **bchRpcDriver()**](./Api/BitcoinCashApi.md#bchrpcdriver)

> JSON RPC HTTP driver
> 
> **POST** `/v3/bcash/node`

[🔹 **bchTransaction()**](./Api/BitcoinCashApi.md#bchtransaction)

> Send BCH to Bitcoin Cash addresses
> 
> **POST** `/v3/bcash/transaction`

[🔹 **bchTransactionKMS()**](./Api/BitcoinCashApi.md#bchtransactionkms)

> Send BCH to Bitcoin Cash addresses
> 
> **POST** `/v3/bcash/transaction`



[[Back to top]](#)

---


### **api()->blockchainAddresses()**

[🔹 **addressExists()**](./Api/BlockchainAddressesApi.md#addressexists)

> Check whether a blockchain address is assigned to a virtual account
> 
> **GET** `/v3/offchain/account/address/{address}/{currency}`

[🔹 **assignAddress()**](./Api/BlockchainAddressesApi.md#assignaddress)

> Assign a blockchain address to a virtual account
> 
> **POST** `/v3/offchain/account/{id}/address/{address}`

[🔹 **generateDepositAddress()**](./Api/BlockchainAddressesApi.md#generatedepositaddress)

> Create a deposit address for a virtual account
> 
> **POST** `/v3/offchain/account/{id}/address`

[🔹 **generateDepositAddressesBatch()**](./Api/BlockchainAddressesApi.md#generatedepositaddressesbatch)

> Create multiple deposit addresses for a virtual account
> 
> **POST** `/v3/offchain/account/address/batch`

[🔹 **getAllDepositAddresses()**](./Api/BlockchainAddressesApi.md#getalldepositaddresses)

> Get all deposit addresses for a virtual account
> 
> **GET** `/v3/offchain/account/{id}/address`

[🔹 **removeAddress()**](./Api/BlockchainAddressesApi.md#removeaddress)

> Remove a deposit address from a virtual account
> 
> **DELETE** `/v3/offchain/account/{id}/address/{address}`



[[Back to top]](#)

---


### **api()->blockchainFees()**

[🔹 **bscEstimateGas()**](./Api/BlockchainFeesApi.md#bscestimategas)

> Estimate BNB Smart Chain transaction fees
> 
> **POST** `/v3/bsc/gas`

[🔹 **celoEstimateGas()**](./Api/BlockchainFeesApi.md#celoestimategas)

> Estimate Celo Chain transaction fees
> 
> **POST** `/v3/celo/gas`

[🔹 **egldEstimateGas()**](./Api/BlockchainFeesApi.md#egldestimategas)

> Estimate EGLD transaction fees
> 
> **POST** `/v3/egld/gas`

[🔹 **estimateFee()**](./Api/BlockchainFeesApi.md#estimatefee)

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeBatchMintNft()**](./Api/BlockchainFeesApi.md#estimatefeebatchmintnft)

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeDeployCustodialWallet()**](./Api/BlockchainFeesApi.md#estimatefeedeploycustodialwallet)

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeFromAddress()**](./Api/BlockchainFeesApi.md#estimatefeefromaddress)

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeFromUTXO()**](./Api/BlockchainFeesApi.md#estimatefeefromutxo)

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **estimateFeeTransferFromCustodial()**](./Api/BlockchainFeesApi.md#estimatefeetransferfromcustodial)

> Estimate the fee for a transaction
> 
> **POST** `/v3/blockchain/estimate`

[🔹 **ethEstimateGas()**](./Api/BlockchainFeesApi.md#ethestimategas)

> Estimate Ethereum transaction fees
> 
> **POST** `/v3/ethereum/gas`

[🔹 **ethEstimateGasBatch()**](./Api/BlockchainFeesApi.md#ethestimategasbatch)

> Estimate multiple Ethereum transaction fees
> 
> **POST** `/v3/ethereum/gas/batch`

[🔹 **getBlockchainFee()**](./Api/BlockchainFeesApi.md#getblockchainfee)

> Get recommended blockchain fee / gas price
> 
> **GET** `/v3/blockchain/fee/{chain}`

[🔹 **kcsEstimateGas()**](./Api/BlockchainFeesApi.md#kcsestimategas)

> Estimate KuCoin Community Chain transaction fees
> 
> **POST** `/v3/kcs/gas`

[🔹 **klaytnEstimateGas()**](./Api/BlockchainFeesApi.md#klaytnestimategas)

> Estimate Klaytn transaction fees
> 
> **POST** `/v3/klaytn/gas`

[🔹 **polygonEstimateGas()**](./Api/BlockchainFeesApi.md#polygonestimategas)

> Estimate Polygon transaction fees
> 
> **POST** `/v3/polygon/gas`

[🔹 **vetEstimateGas()**](./Api/BlockchainFeesApi.md#vetestimategas)

> Estimate VeChain Gas for transaction
> 
> **POST** `/v3/vet/transaction/gas`

[🔹 **xdcEstimateGas()**](./Api/BlockchainFeesApi.md#xdcestimategas)

> Estimate XinFin transaction fees
> 
> **POST** `/v3/xdc/gas`



[[Back to top]](#)

---


### **api()->blockchainOperations()**

[🔹 **bnbAssetOffchain()**](./Api/BlockchainOperationsApi.md#bnbassetoffchain)

> Create a BNB-based asset
> 
> **POST** `/v3/offchain/bnb/asset`

[🔹 **deployAlgoErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deployalgoerc20offchainkmsaddress)

> Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/algo/erc20/deploy`

[🔹 **deployAlgoErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deployalgoerc20offchainmnemonicaddress)

> Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/algo/erc20/deploy`

[🔹 **deployAlgoErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deployalgoerc20offchainpkaddress)

> Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/algo/erc20/deploy`

[🔹 **deployCeloErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainkmsaddress)

> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/celo/erc20/deploy`

[🔹 **deployCeloErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainkmsxpub)

> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/celo/erc20/deploy`

[🔹 **deployCeloErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainmnemxpub)

> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/celo/erc20/deploy`

[🔹 **deployCeloErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainmnemonicaddress)

> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/celo/erc20/deploy`

[🔹 **deployCeloErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainpkaddress)

> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/celo/erc20/deploy`

[🔹 **deployCeloErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainpkxpub)

> Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/celo/erc20/deploy`

[🔹 **deployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deployerc20offchainkmsaddress)

> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/ethereum/erc20/deploy`

[🔹 **deployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#deployerc20offchainkmsxpub)

> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/ethereum/erc20/deploy`

[🔹 **deployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#deployerc20offchainmnemxpub)

> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/ethereum/erc20/deploy`

[🔹 **deployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deployerc20offchainmnemonicaddress)

> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/ethereum/erc20/deploy`

[🔹 **deployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deployerc20offchainpkaddress)

> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/ethereum/erc20/deploy`

[🔹 **deployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#deployerc20offchainpkxpub)

> Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/ethereum/erc20/deploy`

[🔹 **deployKCSErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainkmsaddress)

> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/kcs/erc20/deploy`

[🔹 **deployKCSErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainkmsxpub)

> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/kcs/erc20/deploy`

[🔹 **deployKCSErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainmnemxpub)

> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/kcs/erc20/deploy`

[🔹 **deployKCSErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainmnemonicaddress)

> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/kcs/erc20/deploy`

[🔹 **deployKCSErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainpkaddress)

> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/kcs/erc20/deploy`

[🔹 **deployKCSErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainpkxpub)

> Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/kcs/erc20/deploy`

[🔹 **deployTrcOffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainkmsaddress)

> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/tron/trc/deploy`

[🔹 **deployTrcOffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainkmsxpub)

> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/tron/trc/deploy`

[🔹 **deployTrcOffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainmnemxpub)

> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/tron/trc/deploy`

[🔹 **deployTrcOffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainmnemonicaddress)

> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/tron/trc/deploy`

[🔹 **deployTrcOffchainPKAddress()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainpkaddress)

> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/tron/trc/deploy`

[🔹 **deployTrcOffchainPKXpub()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainpkxpub)

> Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/tron/trc/deploy`

[🔹 **erc20()**](./Api/BlockchainOperationsApi.md#erc20)

> Register a new Ethereum ERC-20 token in the virtual account
> 
> **POST** `/v3/offchain/ethereum/erc20`

[🔹 **erc20Address()**](./Api/BlockchainOperationsApi.md#erc20address)

> Register a new Ethereum ERC-20 token in the virtual account
> 
> **POST** `/v3/offchain/ethereum/erc20`

[🔹 **offBscDeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainkmsaddress)

> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/bsc/bep20/deploy`

[🔹 **offBscDeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainkmsxpub)

> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/bsc/bep20/deploy`

[🔹 **offBscDeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainmnemxpub)

> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/bsc/bep20/deploy`

[🔹 **offBscDeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainmnemonicaddress)

> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/bsc/bep20/deploy`

[🔹 **offBscDeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainpkaddress)

> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/bsc/bep20/deploy`

[🔹 **offBscDeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainpkxpub)

> Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/bsc/bep20/deploy`

[🔹 **offBscErc20()**](./Api/BlockchainOperationsApi.md#offbscerc20)

> Register a new BNB Smart Chain BEP-20 token in the virtual account
> 
> **POST** `/v3/offchain/bsc/bep20`

[🔹 **offBscErc20Address()**](./Api/BlockchainOperationsApi.md#offbscerc20address)

> Register a new BNB Smart Chain BEP-20 token in the virtual account
> 
> **POST** `/v3/offchain/bsc/bep20`

[🔹 **offCelErc20()**](./Api/BlockchainOperationsApi.md#offcelerc20)

> Register a new Celo ERC-20-equivalent token in the virtual account
> 
> **POST** `/v3/offchain/celo/erc20`

[🔹 **offCelErc20Address()**](./Api/BlockchainOperationsApi.md#offcelerc20address)

> Register a new Celo ERC-20-equivalent token in the virtual account
> 
> **POST** `/v3/offchain/celo/erc20`

[🔹 **offEglTransferEth()**](./Api/BlockchainOperationsApi.md#offegltransfereth)

> Send EGLD from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/egld/transfer`

[🔹 **offEglTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offegltransferethkms)

> Send EGLD from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/egld/transfer`

[🔹 **offEglTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offegltransferethmnemonic)

> Send EGLD from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/egld/transfer`

[🔹 **offKlaDeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainkmsaddress)

> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/klaytn/erc20/deploy`

[🔹 **offKlaDeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainkmsxpub)

> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/klaytn/erc20/deploy`

[🔹 **offKlaDeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainmnemxpub)

> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/klaytn/erc20/deploy`

[🔹 **offKlaDeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainmnemonicaddress)

> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/klaytn/erc20/deploy`

[🔹 **offKlaDeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainpkaddress)

> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/klaytn/erc20/deploy`

[🔹 **offKlaDeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainpkxpub)

> Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/klaytn/erc20/deploy`

[🔹 **offKlaTransferEth()**](./Api/BlockchainOperationsApi.md#offklatransfereth)

> Send KLAY from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/klaytn/transfer`

[🔹 **offKlaTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offklatransferethkms)

> Send KLAY from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/klaytn/transfer`

[🔹 **offKlaTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offklatransferethmnemonic)

> Send KLAY from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/klaytn/transfer`

[🔹 **offOneDeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainkmsaddress)

> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/one/hrm20/deploy`

[🔹 **offOneDeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainkmsxpub)

> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/one/hrm20/deploy`

[🔹 **offOneDeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainmnemxpub)

> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/one/hrm20/deploy`

[🔹 **offOneDeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainmnemonicaddress)

> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/one/hrm20/deploy`

[🔹 **offOneDeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainpkaddress)

> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/one/hrm20/deploy`

[🔹 **offOneDeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainpkxpub)

> Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/one/hrm20/deploy`

[🔹 **offOneErc20()**](./Api/BlockchainOperationsApi.md#offoneerc20)

> Register a new Harmony HRM-20 token in the virtual account
> 
> **POST** `/v3/offchain/one/hrm20`

[🔹 **offOneErc20Address()**](./Api/BlockchainOperationsApi.md#offoneerc20address)

> Register a new Harmony HRM-20 token in the virtual account
> 
> **POST** `/v3/offchain/one/hrm20`

[🔹 **offOneTransferEth()**](./Api/BlockchainOperationsApi.md#offonetransfereth)

> Send ONE from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/one/transfer`

[🔹 **offOneTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offonetransferethkms)

> Send ONE from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/one/transfer`

[🔹 **offOneTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offonetransferethmnemonic)

> Send ONE from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/one/transfer`

[🔹 **offPolTransferEth()**](./Api/BlockchainOperationsApi.md#offpoltransfereth)

> Send MATIC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/polygon/transfer`

[🔹 **offPolTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offpoltransferethkms)

> Send MATIC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/polygon/transfer`

[🔹 **offPolTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offpoltransferethmnemonic)

> Send MATIC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/polygon/transfer`

[🔹 **offTokErc20()**](./Api/BlockchainOperationsApi.md#offtokerc20)

> Register a new ERC-20 or ERC-20-equivalent token in the virtual account
> 
> **POST** `/v3/offchain/token/{chain}`

[🔹 **offTokErc20Address()**](./Api/BlockchainOperationsApi.md#offtokerc20address)

> Register a new ERC-20 or ERC-20-equivalent token in the virtual account
> 
> **POST** `/v3/offchain/token/{chain}`

[🔹 **offXdcDeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainkmsaddress)

> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/xdc/erc20/deploy`

[🔹 **offXdcDeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainkmsxpub)

> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/xdc/erc20/deploy`

[🔹 **offXdcDeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainmnemxpub)

> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/xdc/erc20/deploy`

[🔹 **offXdcDeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainmnemonicaddress)

> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/xdc/erc20/deploy`

[🔹 **offXdcDeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainpkaddress)

> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/xdc/erc20/deploy`

[🔹 **offXdcDeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainpkxpub)

> Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
> 
> **POST** `/v3/offchain/xdc/erc20/deploy`

[🔹 **offXdcErc20()**](./Api/BlockchainOperationsApi.md#offxdcerc20)

> Register a new XinFin ERC-20-equivalent token in the virtual account
> 
> **POST** `/v3/offchain/xdc/erc20`

[🔹 **offXdcErc20Address()**](./Api/BlockchainOperationsApi.md#offxdcerc20address)

> Register a new XinFin ERC-20-equivalent token in the virtual account
> 
> **POST** `/v3/offchain/xdc/erc20`

[🔹 **offXdcTransferEth()**](./Api/BlockchainOperationsApi.md#offxdctransfereth)

> Send XDC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/xdc/transfer`

[🔹 **offXdcTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offxdctransferethkms)

> Send XDC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/xdc/transfer`

[🔹 **offXdcTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offxdctransferethmnemonic)

> Send XDC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/xdc/transfer`

[🔹 **storeCeloErc20Address()**](./Api/BlockchainOperationsApi.md#storeceloerc20address)

> Set the contract address of a Celo ERC-20-equivalent token
> 
> **POST** `/v3/offchain/celo/erc20/{name}/{address}`

[🔹 **storeTokenAddress()**](./Api/BlockchainOperationsApi.md#storetokenaddress)

> Set the contract address of an ERC-20, ERC-20-equivalent, or TRC-10 token
> 
> **POST** `/v3/offchain/token/{name}/{address}`

[🔹 **storeTrcAddress()**](./Api/BlockchainOperationsApi.md#storetrcaddress)

> Set the contract address of a TRC-10 or TRC-20 token
> 
> **POST** `/v3/offchain/tron/trc/{name}/{address}`

[🔹 **transferAdaKMS()**](./Api/BlockchainOperationsApi.md#transferadakms)

> Send ADA from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/ada/transfer`

[🔹 **transferAdaKeyPair()**](./Api/BlockchainOperationsApi.md#transferadakeypair)

> Send ADA from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/ada/transfer`

[🔹 **transferAdaMnemonic()**](./Api/BlockchainOperationsApi.md#transferadamnemonic)

> Send ADA from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/ada/transfer`

[🔹 **transferAlgo()**](./Api/BlockchainOperationsApi.md#transferalgo)

> Send ALGO from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/algorand/transfer`

[🔹 **transferAlgoErc20()**](./Api/BlockchainOperationsApi.md#transferalgoerc20)

> Send ALGO from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/algorand/transfer`

[🔹 **transferAlgoKMS()**](./Api/BlockchainOperationsApi.md#transferalgokms)

> Send ALGO from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/algorand/transfer`

[🔹 **transferBchKMS()**](./Api/BlockchainOperationsApi.md#transferbchkms)

> Send BCH from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bcash/transfer`

[🔹 **transferBchKeyPair()**](./Api/BlockchainOperationsApi.md#transferbchkeypair)

> Send BCH from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bcash/transfer`

[🔹 **transferBchMnemonic()**](./Api/BlockchainOperationsApi.md#transferbchmnemonic)

> Send BCH from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bcash/transfer`

[🔹 **transferBnb()**](./Api/BlockchainOperationsApi.md#transferbnb)

> Send BNB from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bnb/transfer`

[🔹 **transferBnbKMS()**](./Api/BlockchainOperationsApi.md#transferbnbkms)

> Send BNB from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bnb/transfer`

[🔹 **transferBsc()**](./Api/BlockchainOperationsApi.md#transferbsc)

> Send BSC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bsc/transfer`

[🔹 **transferBscKMS()**](./Api/BlockchainOperationsApi.md#transferbsckms)

> Send BSC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bsc/transfer`

[🔹 **transferBscMnemonic()**](./Api/BlockchainOperationsApi.md#transferbscmnemonic)

> Send BSC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bsc/transfer`

[🔹 **transferBtcKMS()**](./Api/BlockchainOperationsApi.md#transferbtckms)

> Send BTC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bitcoin/transfer`

[🔹 **transferBtcKeyPair()**](./Api/BlockchainOperationsApi.md#transferbtckeypair)

> Send BTC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bitcoin/transfer`

[🔹 **transferBtcMnemonic()**](./Api/BlockchainOperationsApi.md#transferbtcmnemonic)

> Send BTC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/bitcoin/transfer`

[🔹 **transferCelo()**](./Api/BlockchainOperationsApi.md#transfercelo)

> Send CELO from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/celo/transfer`

[🔹 **transferCeloKMS()**](./Api/BlockchainOperationsApi.md#transfercelokms)

> Send CELO from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/celo/transfer`

[🔹 **transferCeloMnemonic()**](./Api/BlockchainOperationsApi.md#transfercelomnemonic)

> Send CELO from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/celo/transfer`

[🔹 **transferDogeKMS()**](./Api/BlockchainOperationsApi.md#transferdogekms)

> Send DOGE from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/dogecoin/transfer`

[🔹 **transferDogeKeyPair()**](./Api/BlockchainOperationsApi.md#transferdogekeypair)

> Send DOGE from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/dogecoin/transfer`

[🔹 **transferDogeMnemonic()**](./Api/BlockchainOperationsApi.md#transferdogemnemonic)

> Send DOGE from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/dogecoin/transfer`

[🔹 **transferErc20()**](./Api/BlockchainOperationsApi.md#transfererc20)

> Send Ethereum ERC-20 tokens from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/ethereum/erc20/transfer`

[🔹 **transferErc20KMS()**](./Api/BlockchainOperationsApi.md#transfererc20kms)

> Send Ethereum ERC-20 tokens from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/ethereum/erc20/transfer`

[🔹 **transferErc20Mnemonic()**](./Api/BlockchainOperationsApi.md#transfererc20mnemonic)

> Send Ethereum ERC-20 tokens from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/ethereum/erc20/transfer`

[🔹 **transferEth()**](./Api/BlockchainOperationsApi.md#transfereth)

> Send ETH from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/ethereum/transfer`

[🔹 **transferEthKMS()**](./Api/BlockchainOperationsApi.md#transferethkms)

> Send ETH from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/ethereum/transfer`

[🔹 **transferEthMnemonic()**](./Api/BlockchainOperationsApi.md#transferethmnemonic)

> Send ETH from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/ethereum/transfer`

[🔹 **transferFlowKMS()**](./Api/BlockchainOperationsApi.md#transferflowkms)

> Send FLOW from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/flow/transfer`

[🔹 **transferFlowMnemonic()**](./Api/BlockchainOperationsApi.md#transferflowmnemonic)

> Send FLOW from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/flow/transfer`

[🔹 **transferFlowPK()**](./Api/BlockchainOperationsApi.md#transferflowpk)

> Send FLOW from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/flow/transfer`

[🔹 **transferKCS()**](./Api/BlockchainOperationsApi.md#transferkcs)

> Send KCS from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/kcs/transfer`

[🔹 **transferKCSKMS()**](./Api/BlockchainOperationsApi.md#transferkcskms)

> Send KCS from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/kcs/transfer`

[🔹 **transferKCSMnemonic()**](./Api/BlockchainOperationsApi.md#transferkcsmnemonic)

> Send KCS from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/kcs/transfer`

[🔹 **transferLtcKMS()**](./Api/BlockchainOperationsApi.md#transferltckms)

> Send LTC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/litecoin/transfer`

[🔹 **transferLtcKeyPair()**](./Api/BlockchainOperationsApi.md#transferltckeypair)

> Send LTC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/litecoin/transfer`

[🔹 **transferLtcMnemonic()**](./Api/BlockchainOperationsApi.md#transferltcmnemonic)

> Send LTC from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/litecoin/transfer`

[🔹 **transferSol()**](./Api/BlockchainOperationsApi.md#transfersol)

> Send SOL from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/solana/transfer`

[🔹 **transferSolKMS()**](./Api/BlockchainOperationsApi.md#transfersolkms)

> Send SOL from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/solana/transfer`

[🔹 **transferTron()**](./Api/BlockchainOperationsApi.md#transfertron)

> Send TRON from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/tron/transfer`

[🔹 **transferTronKMS()**](./Api/BlockchainOperationsApi.md#transfertronkms)

> Send TRON from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/tron/transfer`

[🔹 **transferTronMnemonic()**](./Api/BlockchainOperationsApi.md#transfertronmnemonic)

> Send TRON from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/tron/transfer`

[🔹 **transferXlm()**](./Api/BlockchainOperationsApi.md#transferxlm)

> Send XLM from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/xlm/transfer`

[🔹 **transferXlmKMS()**](./Api/BlockchainOperationsApi.md#transferxlmkms)

> Send XLM from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/xlm/transfer`

[🔹 **transferXrp()**](./Api/BlockchainOperationsApi.md#transferxrp)

> Send XRP from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/xrp/transfer`

[🔹 **transferXrpKMS()**](./Api/BlockchainOperationsApi.md#transferxrpkms)

> Send XRP from a virtual account to the blockchain
> 
> **POST** `/v3/offchain/xrp/transfer`

[🔹 **trcAddress()**](./Api/BlockchainOperationsApi.md#trcaddress)

> Register a new TRON TRC-10 or TRC-20 token in the virtual account
> 
> **POST** `/v3/offchain/tron/trc`

[🔹 **trcXpub()**](./Api/BlockchainOperationsApi.md#trcxpub)

> Register a new TRON TRC-10 or TRC-20 token in the virtual account
> 
> **POST** `/v3/offchain/tron/trc`

[🔹 **xlmAssetOffchain()**](./Api/BlockchainOperationsApi.md#xlmassetoffchain)

> Create an XLM-based asset
> 
> **POST** `/v3/offchain/xlm/asset`

[🔹 **xrpAssetOffchain()**](./Api/BlockchainOperationsApi.md#xrpassetoffchain)

> Create XRP based Asset
> 
> **POST** `/v3/offchain/xrp/asset`



[[Back to top]](#)

---


### **api()->blockchainStorage()**

[🔹 **createRecord()**](./Api/BlockchainStorageApi.md#createrecord)

> Store a log record
> 
> **POST** `/v3/record`

[🔹 **createRecordCelo()**](./Api/BlockchainStorageApi.md#createrecordcelo)

> Store a log record
> 
> **POST** `/v3/record`

[🔹 **createRecordKMS()**](./Api/BlockchainStorageApi.md#createrecordkms)

> Store a log record
> 
> **POST** `/v3/record`

[🔹 **getLog()**](./Api/BlockchainStorageApi.md#getlog)

> Get a log record
> 
> **GET** `/v3/record`



[[Back to top]](#)

---


### **api()->blockchainUtils()**

[🔹 **getAuctionEstimatedTime()**](./Api/BlockchainUtilsApi.md#getauctionestimatedtime)

> Estimate the block height for a future point in time
> 
> **GET** `/v3/blockchain/auction/time/{chain}/{date}`

[🔹 **sCGetContractAddress()**](./Api/BlockchainUtilsApi.md#scgetcontractaddress)

> Get the blockchain address of a smart contract by the deployment transaction ID
> 
> **GET** `/v3/blockchain/sc/address/{chain}/{hash}`



[[Back to top]](#)

---


### **api()->cardano()**

[🔹 **adaBroadcast()**](./Api/CardanoApi.md#adabroadcast)

> Broadcast signed Ada transaction
> 
> **POST** `/v3/ada/broadcast`

[🔹 **adaGenerateAddress()**](./Api/CardanoApi.md#adagenerateaddress)

> Generate Ada deposit address from Extended public key
> 
> **GET** `/v3/ada/address/{xpub}/{index}`

[🔹 **adaGenerateAddressPrivateKey()**](./Api/CardanoApi.md#adagenerateaddressprivatekey)

> Generate Ada private key
> 
> **POST** `/v3/ada/wallet/priv`

[🔹 **adaGenerateWallet()**](./Api/CardanoApi.md#adageneratewallet)

> Generate Ada wallet
> 
> **GET** `/v3/ada/wallet`

[🔹 **adaGetAccount()**](./Api/CardanoApi.md#adagetaccount)

> Gets a Ada account by address
> 
> **GET** `/v3/ada/account/{address}`

[🔹 **adaGetBlock()**](./Api/CardanoApi.md#adagetblock)

> Get Block by hash or height
> 
> **GET** `/v3/ada/block/{hash}`

[🔹 **adaGetBlockChainInfo()**](./Api/CardanoApi.md#adagetblockchaininfo)

> Get Blockchain information
> 
> **GET** `/v3/ada/info`

[🔹 **adaGetRawTransaction()**](./Api/CardanoApi.md#adagetrawtransaction)

> Get transaction by hash
> 
> **GET** `/v3/ada/transaction/{hash}`

[🔹 **adaGetTxByAddress()**](./Api/CardanoApi.md#adagettxbyaddress)

> Get transactions by address
> 
> **GET** `/v3/ada/transaction/address/{address}`

[🔹 **adaGetUTXOByAddress()**](./Api/CardanoApi.md#adagetutxobyaddress)

> Get UTXOs by address
> 
> **GET** `/v3/ada/{address}/utxos`

[🔹 **adaTransactionFromAddress()**](./Api/CardanoApi.md#adatransactionfromaddress)

> Send ADA to Cardano addresses
> 
> **POST** `/v3/ada/transaction`

[🔹 **adaTransactionFromAddressKMS()**](./Api/CardanoApi.md#adatransactionfromaddresskms)

> Send ADA to Cardano addresses
> 
> **POST** `/v3/ada/transaction`

[🔹 **adaTransactionFromUTXO()**](./Api/CardanoApi.md#adatransactionfromutxo)

> Send ADA to Cardano addresses
> 
> **POST** `/v3/ada/transaction`

[🔹 **adaTransactionFromUTXOKMS()**](./Api/CardanoApi.md#adatransactionfromutxokms)

> Send ADA to Cardano addresses
> 
> **POST** `/v3/ada/transaction`



[[Back to top]](#)

---


### **api()->celo()**

[🔹 **callCeloReadSmartContractMethod()**](./Api/CeloApi.md#callceloreadsmartcontractmethod)

> Invoke a method in a smart contract on Celo
> 
> **POST** `/v3/celo/smartcontract`

[🔹 **callCeloSmartContractMethod()**](./Api/CeloApi.md#callcelosmartcontractmethod)

> Invoke a method in a smart contract on Celo
> 
> **POST** `/v3/celo/smartcontract`

[🔹 **callCeloSmartContractMethodKMS()**](./Api/CeloApi.md#callcelosmartcontractmethodkms)

> Invoke a method in a smart contract on Celo
> 
> **POST** `/v3/celo/smartcontract`

[🔹 **celoBroadcast()**](./Api/CeloApi.md#celobroadcast)

> Broadcast signed Celo transaction
> 
> **POST** `/v3/celo/broadcast`

[🔹 **celoGenerateAddress()**](./Api/CeloApi.md#celogenerateaddress)

> Generate Celo account address from Extended public key
> 
> **GET** `/v3/celo/address/{xpub}/{index}`

[🔹 **celoGenerateAddressPrivateKey()**](./Api/CeloApi.md#celogenerateaddressprivatekey)

> Generate Celo private key
> 
> **POST** `/v3/celo/wallet/priv`

[🔹 **celoGenerateWallet()**](./Api/CeloApi.md#celogeneratewallet)

> Generate Celo wallet
> 
> **GET** `/v3/celo/wallet`

[🔹 **celoGetBalance()**](./Api/CeloApi.md#celogetbalance)

> Get Celo Account balance
> 
> **GET** `/v3/celo/account/balance/{address}`

[🔹 **celoGetBlock()**](./Api/CeloApi.md#celogetblock)

> Get Celo block by hash
> 
> **GET** `/v3/celo/block/{hash}`

[🔹 **celoGetCurrentBlock()**](./Api/CeloApi.md#celogetcurrentblock)

> Get current block number
> 
> **GET** `/v3/celo/block/current`

[🔹 **celoGetTransaction()**](./Api/CeloApi.md#celogettransaction)

> Get Celo Transaction
> 
> **GET** `/v3/celo/transaction/{hash}`

[🔹 **celoGetTransactionByAddress()**](./Api/CeloApi.md#celogettransactionbyaddress)

> Get Celo transactions by address
> 
> **GET** `/v3/celo/account/transaction/{address}`

[🔹 **celoGetTransactionCount()**](./Api/CeloApi.md#celogettransactioncount)

> Get count of outgoing Celo transactions
> 
> **GET** `/v3/celo/transaction/count/{address}`

[🔹 **celoWeb3Driver()**](./Api/CeloApi.md#celoweb3driver)

> Web3 HTTP driver
> 
> **POST** `/v3/celo/web3/{xApiKey}`

[🔹 **transferCeloBlockchain()**](./Api/CeloApi.md#transferceloblockchain)

> Send Celo / ERC20 from account to account
> 
> **POST** `/v3/celo/transaction`

[🔹 **transferCeloBlockchainKMS()**](./Api/CeloApi.md#transferceloblockchainkms)

> Send Celo / ERC20 from account to account
> 
> **POST** `/v3/celo/transaction`



[[Back to top]](#)

---


### **api()->custodialManagedWallets()**

[🔹 **custodialCreateWallet()**](./Api/CustodialManagedWalletsApi.md#custodialcreatewallet)

> Create managed address
> 
> **POST** `/v3/custodial/wallet`

[🔹 **custodialDeleteWallet()**](./Api/CustodialManagedWalletsApi.md#custodialdeletewallet)

> Delete managed address
> 
> **DELETE** `/v3/custodial/wallet/{id}`

[🔹 **custodialGetWallet()**](./Api/CustodialManagedWalletsApi.md#custodialgetwallet)

> Get managed address
> 
> **GET** `/v3/custodial/wallet/{id}`

[🔹 **custodialGetWallets()**](./Api/CustodialManagedWalletsApi.md#custodialgetwallets)

> Get managed addresses
> 
> **GET** `/v3/custodial/wallet`

[🔹 **custodialTransferManagedAddress()**](./Api/CustodialManagedWalletsApi.md#custodialtransfermanagedaddress)

> Sign and transfer using managed address
> 
> **POST** `/v3/custodial/transaction`



[[Back to top]](#)

---


### **api()->customer()**

[🔹 **activateCustomer()**](./Api/CustomerApi.md#activatecustomer)

> Activate customer
> 
> **PUT** `/v3/ledger/customer/{id}/activate`

[🔹 **deactivateCustomer()**](./Api/CustomerApi.md#deactivatecustomer)

> Deactivate customer
> 
> **PUT** `/v3/ledger/customer/{id}/deactivate`

[🔹 **disableCustomer()**](./Api/CustomerApi.md#disablecustomer)

> Disable customer
> 
> **PUT** `/v3/ledger/customer/{id}/disable`

[🔹 **enableCustomer()**](./Api/CustomerApi.md#enablecustomer)

> Enable customer
> 
> **PUT** `/v3/ledger/customer/{id}/enable`

[🔹 **findAllCustomers()**](./Api/CustomerApi.md#findallcustomers)

> List all customers
> 
> **GET** `/v3/ledger/customer`

[🔹 **getCustomerByExternalOrInternalId()**](./Api/CustomerApi.md#getcustomerbyexternalorinternalid)

> Get customer details
> 
> **GET** `/v3/ledger/customer/{id}`

[🔹 **updateCustomer()**](./Api/CustomerApi.md#updatecustomer)

> Update customer
> 
> **PUT** `/v3/ledger/customer/{id}`



[[Back to top]](#)

---


### **api()->deposit()**

[🔹 **getDeposits()**](./Api/DepositApi.md#getdeposits)

> List all deposits for product
> 
> **GET** `/v3/ledger/deposits`

[🔹 **getDepositsCount()**](./Api/DepositApi.md#getdepositscount)

> Count of found entities for get deposits request
> 
> **GET** `/v3/ledger/deposits/count`



[[Back to top]](#)

---


### **api()->dogecoin()**

[🔹 **dogeBroadcast()**](./Api/DogecoinApi.md#dogebroadcast)

> Broadcast signed Dogecoin transaction
> 
> **POST** `/v3/dogecoin/broadcast`

[🔹 **dogeGenerateAddress()**](./Api/DogecoinApi.md#dogegenerateaddress)

> Generate Dogecoin deposit address from Extended public key
> 
> **GET** `/v3/dogecoin/address/{xpub}/{index}`

[🔹 **dogeGenerateAddressPrivateKey()**](./Api/DogecoinApi.md#dogegenerateaddressprivatekey)

> Generate Dogecoin private key
> 
> **POST** `/v3/dogecoin/wallet/priv`

[🔹 **dogeGenerateWallet()**](./Api/DogecoinApi.md#dogegeneratewallet)

> Generate Dogecoin wallet
> 
> **GET** `/v3/dogecoin/wallet`

[🔹 **dogeGetBlock()**](./Api/DogecoinApi.md#dogegetblock)

> Get Dogecoin Block by hash or height
> 
> **GET** `/v3/dogecoin/block/{hash}`

[🔹 **dogeGetBlockChainInfo()**](./Api/DogecoinApi.md#dogegetblockchaininfo)

> Get Dogecoin Blockchain Information
> 
> **GET** `/v3/dogecoin/info`

[🔹 **dogeGetBlockHash()**](./Api/DogecoinApi.md#dogegetblockhash)

> Get Dogecoin Block hash
> 
> **GET** `/v3/dogecoin/block/hash/{i}`

[🔹 **dogeGetMempool()**](./Api/DogecoinApi.md#dogegetmempool)

> Get Mempool Transactions
> 
> **GET** `/v3/dogecoin/mempool`

[🔹 **dogeGetRawTransaction()**](./Api/DogecoinApi.md#dogegetrawtransaction)

> Get Dogecoin Transaction by hash
> 
> **GET** `/v3/dogecoin/transaction/{hash}`

[🔹 **dogeGetUTXO()**](./Api/DogecoinApi.md#dogegetutxo)

> Get information about a transaction output (UTXO) in a Dogecoin transaction
> 
> **GET** `/v3/dogecoin/utxo/{hash}/{index}`

[🔹 **dogeRpcDriver()**](./Api/DogecoinApi.md#dogerpcdriver)

> JSON RPC HTTP driver
> 
> **POST** `/v3/dogecoin/node`

[🔹 **dogeTransactionUTXO()**](./Api/DogecoinApi.md#dogetransactionutxo)

> Send DOGE to Dogecoin addresses
> 
> **POST** `/v3/dogecoin/transaction`

[🔹 **dogeTransactionUTXOKMS()**](./Api/DogecoinApi.md#dogetransactionutxokms)

> Send DOGE to Dogecoin addresses
> 
> **POST** `/v3/dogecoin/transaction`



[[Back to top]](#)

---


### **api()->elrond()**

[🔹 **eGldGetCurrentBlock()**](./Api/ElrondApi.md#egldgetcurrentblock)

> Get current block number
> 
> **GET** `/v3/egld/block/current`

[🔹 **egldBroadcast()**](./Api/ElrondApi.md#egldbroadcast)

> Broadcast signed EGLD transaction
> 
> **POST** `/v3/egld/broadcast`

[🔹 **egldGenerateAddress()**](./Api/ElrondApi.md#egldgenerateaddress)

> Generate EGLD account address from mnemonic
> 
> **GET** `/v3/egld/address/{mnemonic}/{index}`

[🔹 **egldGenerateAddressPrivateKey()**](./Api/ElrondApi.md#egldgenerateaddressprivatekey)

> Generate EGLD private key
> 
> **POST** `/v3/egld/wallet/priv`

[🔹 **egldGenerateWallet()**](./Api/ElrondApi.md#egldgeneratewallet)

> Generate EGLD wallet
> 
> **GET** `/v3/egld/wallet`

[🔹 **egldGetBalance()**](./Api/ElrondApi.md#egldgetbalance)

> Get EGLD Account balance
> 
> **GET** `/v3/egld/account/balance/{address}`

[🔹 **egldGetBlock()**](./Api/ElrondApi.md#egldgetblock)

> Get EGLD block by hash
> 
> **GET** `/v3/egld/block/{hash}`

[🔹 **egldGetTransaction()**](./Api/ElrondApi.md#egldgettransaction)

> Get EGLD Transaction
> 
> **GET** `/v3/egld/transaction/{hash}`

[🔹 **egldGetTransactionAddress()**](./Api/ElrondApi.md#egldgettransactionaddress)

> Get count of outgoing EGLD transactions
> 
> **GET** `/v3/egld/transaction/address/{address}`

[🔹 **egldGetTransactionCount()**](./Api/ElrondApi.md#egldgettransactioncount)

> Get count of outgoing EGLD transactions
> 
> **GET** `/v3/egld/transaction/count/{address}`

[🔹 **egldNodeGet()**](./Api/ElrondApi.md#egldnodeget)

> Node HTTP driver
> 
> **GET** `/v3/egld/node/{xApiKey}/*`

[🔹 **egldNodePost()**](./Api/ElrondApi.md#egldnodepost)

> Node HTTP driver
> 
> **POST** `/v3/egld/node/{xApiKey}/*`

[🔹 **transferEgldBlockchain()**](./Api/ElrondApi.md#transferegldblockchain)

> Send EGLD from account to account
> 
> **POST** `/v3/egld/transaction`

[🔹 **transferEgldBlockchainKMS()**](./Api/ElrondApi.md#transferegldblockchainkms)

> Send EGLD from account to account
> 
> **POST** `/v3/egld/transaction`



[[Back to top]](#)

---


### **api()->ethereum()**

[🔹 **callReadSmartContractMethod()**](./Api/EthereumApi.md#callreadsmartcontractmethod)

> Invoke a method in a smart contract on Ethereum
> 
> **POST** `/v3/ethereum/smartcontract`

[🔹 **callSmartContractMethod()**](./Api/EthereumApi.md#callsmartcontractmethod)

> Invoke a method in a smart contract on Ethereum
> 
> **POST** `/v3/ethereum/smartcontract`

[🔹 **callSmartContractMethodKMS()**](./Api/EthereumApi.md#callsmartcontractmethodkms)

> Invoke a method in a smart contract on Ethereum
> 
> **POST** `/v3/ethereum/smartcontract`

[🔹 **ethBroadcast()**](./Api/EthereumApi.md#ethbroadcast)

> Broadcast signed Ethereum transaction
> 
> **POST** `/v3/ethereum/broadcast`

[🔹 **ethGenerateAddress()**](./Api/EthereumApi.md#ethgenerateaddress)

> Generate Ethereum account address from Extended public key
> 
> **GET** `/v3/ethereum/address/{xpub}/{index}`

[🔹 **ethGenerateAddressPrivateKey()**](./Api/EthereumApi.md#ethgenerateaddressprivatekey)

> Generate Ethereum private key
> 
> **POST** `/v3/ethereum/wallet/priv`

[🔹 **ethGenerateWallet()**](./Api/EthereumApi.md#ethgeneratewallet)

> Generate Ethereum wallet
> 
> **GET** `/v3/ethereum/wallet`

[🔹 **ethGetBalance()**](./Api/EthereumApi.md#ethgetbalance)

> Get the ETH balance of an Ethereum account
> 
> **GET** `/v3/ethereum/account/balance/{address}`

[🔹 **ethGetBlock()**](./Api/EthereumApi.md#ethgetblock)

> Get Ethereum block by hash
> 
> **GET** `/v3/ethereum/block/{hash}`

[🔹 **ethGetCurrentBlock()**](./Api/EthereumApi.md#ethgetcurrentblock)

> Get current block number
> 
> **GET** `/v3/ethereum/block/current`

[🔹 **ethGetInternalTransactionByAddress()**](./Api/EthereumApi.md#ethgetinternaltransactionbyaddress)

> Get Ethereum internal transactions by address
> 
> **GET** `/v3/ethereum/account/transaction/erc20/internal/{address}`

[🔹 **ethGetTransaction()**](./Api/EthereumApi.md#ethgettransaction)

> Get Ethereum Transaction
> 
> **GET** `/v3/ethereum/transaction/{hash}`

[🔹 **ethGetTransactionByAddress()**](./Api/EthereumApi.md#ethgettransactionbyaddress)

> Get Ethereum transactions by address
> 
> **GET** `/v3/ethereum/account/transaction/{address}`

[🔹 **ethGetTransactionCount()**](./Api/EthereumApi.md#ethgettransactioncount)

> Get count of outgoing Ethereum transactions
> 
> **GET** `/v3/ethereum/transaction/count/{address}`

[🔹 **ethWeb3Driver()**](./Api/EthereumApi.md#ethweb3driver)

> Web3 HTTP driver
> 
> **POST** `/v3/ethereum/web3/{xApiKey}`

[🔹 **transferEthBlockchain()**](./Api/EthereumApi.md#transferethblockchain)

> Send Ethereum / ERC20 from account to account
> 
> **POST** `/v3/ethereum/transaction`

[🔹 **transferEthBlockchainKMS()**](./Api/EthereumApi.md#transferethblockchainkms)

> Send Ethereum / ERC20 from account to account
> 
> **POST** `/v3/ethereum/transaction`



[[Back to top]](#)

---


### **api()->exchangeRate()**

[🔹 **getExchangeRate()**](./Api/ExchangeRateApi.md#getexchangerate)

> Get the current exchange rate for exchanging fiat/crypto assets
> 
> **GET** `/v3/tatum/rate/{currency}`



[[Back to top]](#)

---


### **api()->flow()**

[🔹 **flowAddPubKeyMnemonic()**](./Api/FlowApi.md#flowaddpubkeymnemonic)

> Add public key to Flow address
> 
> **PUT** `/v3/flow/account`

[🔹 **flowAddPubKeySecret()**](./Api/FlowApi.md#flowaddpubkeysecret)

> Add public key to Flow address
> 
> **PUT** `/v3/flow/account`

[🔹 **flowAddPubKeySecretKMS()**](./Api/FlowApi.md#flowaddpubkeysecretkms)

> Add public key to Flow address
> 
> **PUT** `/v3/flow/account`

[🔹 **flowCreateAddressFromPubKeyKMS()**](./Api/FlowApi.md#flowcreateaddressfrompubkeykms)

> Create Flow address from public key
> 
> **POST** `/v3/flow/account`

[🔹 **flowCreateAddressFromPubKeyMnemonic()**](./Api/FlowApi.md#flowcreateaddressfrompubkeymnemonic)

> Create Flow address from public key
> 
> **POST** `/v3/flow/account`

[🔹 **flowCreateAddressFromPubKeySecret()**](./Api/FlowApi.md#flowcreateaddressfrompubkeysecret)

> Create Flow address from public key
> 
> **POST** `/v3/flow/account`

[🔹 **flowCustomTransactionKMS()**](./Api/FlowApi.md#flowcustomtransactionkms)

> Send arbitrary transaction to blockchain
> 
> **POST** `/v3/flow/transaction/custom`

[🔹 **flowCustomTransactionMnemonic()**](./Api/FlowApi.md#flowcustomtransactionmnemonic)

> Send arbitrary transaction to blockchain
> 
> **POST** `/v3/flow/transaction/custom`

[🔹 **flowCustomTransactionPK()**](./Api/FlowApi.md#flowcustomtransactionpk)

> Send arbitrary transaction to blockchain
> 
> **POST** `/v3/flow/transaction/custom`

[🔹 **flowGenerateAddress()**](./Api/FlowApi.md#flowgenerateaddress)

> Generate Flow address from Extended public key
> 
> **GET** `/v3/flow/address/{xpub}/{index}`

[🔹 **flowGeneratePubKey()**](./Api/FlowApi.md#flowgeneratepubkey)

> Generate Flow public key from Extended public key
> 
> **GET** `/v3/flow/pubkey/{xpub}/{index}`

[🔹 **flowGeneratePubKeyPrivateKey()**](./Api/FlowApi.md#flowgeneratepubkeyprivatekey)

> Generate Flow private key
> 
> **POST** `/v3/flow/wallet/priv`

[🔹 **flowGenerateWallet()**](./Api/FlowApi.md#flowgeneratewallet)

> Generate Flow wallet
> 
> **GET** `/v3/flow/wallet`

[🔹 **flowGetAccount()**](./Api/FlowApi.md#flowgetaccount)

> Get the balance of a Flow account
> 
> **GET** `/v3/flow/account/{address}`

[🔹 **flowGetBlock()**](./Api/FlowApi.md#flowgetblock)

> Get Flow Block by hash or height
> 
> **GET** `/v3/flow/block/{hash}`

[🔹 **flowGetBlockChainInfo()**](./Api/FlowApi.md#flowgetblockchaininfo)

> Get Flow current block number
> 
> **GET** `/v3/flow/block/current`

[🔹 **flowGetBlockEvents()**](./Api/FlowApi.md#flowgetblockevents)

> Get Flow events from blocks
> 
> **GET** `/v3/flow/block/events`

[🔹 **flowGetRawTransaction()**](./Api/FlowApi.md#flowgetrawtransaction)

> Get Flow Transaction by hash
> 
> **GET** `/v3/flow/transaction/{hash}`

[🔹 **flowTransactionKMS()**](./Api/FlowApi.md#flowtransactionkms)

> Send Flow to blockchain addresses
> 
> **POST** `/v3/flow/transaction`

[🔹 **flowTransactionMnemonic()**](./Api/FlowApi.md#flowtransactionmnemonic)

> Send Flow to blockchain addresses
> 
> **POST** `/v3/flow/transaction`

[🔹 **flowTransactionPK()**](./Api/FlowApi.md#flowtransactionpk)

> Send Flow to blockchain addresses
> 
> **POST** `/v3/flow/transaction`



[[Back to top]](#)

---


### **api()->fungibleTokensERC20OrCompatible()**

[🔹 **approveCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveceloerc20)

> Allow a blockchain address to transfer and burn fungible tokens
> 
> **POST** `/v3/blockchain/token/approve`

[🔹 **approveCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveceloerc20kms)

> Allow a blockchain address to transfer and burn fungible tokens
> 
> **POST** `/v3/blockchain/token/approve`

[🔹 **approveErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveerc20)

> Allow a blockchain address to transfer and burn fungible tokens
> 
> **POST** `/v3/blockchain/token/approve`

[🔹 **approveErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveerc20kms)

> Allow a blockchain address to transfer and burn fungible tokens
> 
> **POST** `/v3/blockchain/token/approve`

[🔹 **chainBurnCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnceloerc20)

> Burn fungible tokens
> 
> **POST** `/v3/blockchain/token/burn`

[🔹 **chainBurnCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnceloerc20kms)

> Burn fungible tokens
> 
> **POST** `/v3/blockchain/token/burn`

[🔹 **chainBurnErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnerc20)

> Burn fungible tokens
> 
> **POST** `/v3/blockchain/token/burn`

[🔹 **chainBurnErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnerc20kms)

> Burn fungible tokens
> 
> **POST** `/v3/blockchain/token/burn`

[🔹 **chainBurnKcsErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnkcserc20)

> Burn fungible tokens
> 
> **POST** `/v3/blockchain/token/burn`

[🔹 **chainBurnKcsErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnkcserc20kms)

> Burn fungible tokens
> 
> **POST** `/v3/blockchain/token/burn`

[🔹 **chainDeployAlgoErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployalgoerc20)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainDeployAlgoErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployalgoerc20kms)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainDeployCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployceloerc20)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainDeployCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployceloerc20kms)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainDeployErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployerc20)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainDeployErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployerc20kms)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainDeployKcsErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploykcserc20)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainDeployKcsErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploykcserc20kms)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainDeploySolanaSpl()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploysolanaspl)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainDeploySolanaSplKMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploysolanasplkms)

> Deploy a fungible token smart contract
> 
> **POST** `/v3/blockchain/token/deploy`

[🔹 **chainMintCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintceloerc20)

> Mint fungible tokens
> 
> **POST** `/v3/blockchain/token/mint`

[🔹 **chainMintCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintceloerc20kms)

> Mint fungible tokens
> 
> **POST** `/v3/blockchain/token/mint`

[🔹 **chainMintErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainminterc20)

> Mint fungible tokens
> 
> **POST** `/v3/blockchain/token/mint`

[🔹 **chainMintErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainminterc20kms)

> Mint fungible tokens
> 
> **POST** `/v3/blockchain/token/mint`

[🔹 **chainMintKcsErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintkcserc20)

> Mint fungible tokens
> 
> **POST** `/v3/blockchain/token/mint`

[🔹 **chainMintKcsErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintkcserc20kms)

> Mint fungible tokens
> 
> **POST** `/v3/blockchain/token/mint`

[🔹 **chainTransferAlgoErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferalgoerc20)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferAlgoErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferalgoerc20kms)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferBscBep20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferbscbep20)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferBscBep20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferbscbep20kms)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferCeloErc20Token()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferceloerc20token)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferCeloErc20TokenKMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferceloerc20tokenkms)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferEthErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferetherc20)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferEthErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferetherc20kms)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferKcsEthErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferkcsetherc20)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferKcsEthErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferkcsetherc20kms)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferSolanaSpl()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransfersolanaspl)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **chainTransferSolanaSplKMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransfersolanasplkms)

> Transfer fungible tokens
> 
> **POST** `/v3/blockchain/token/transaction`

[🔹 **erc20GetBalance()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalance)

> Get the number of fungible tokens that a blockchain address holds in a smart contract
> 
> **GET** `/v3/blockchain/token/balance/{chain}/{contractAddress}/{address}`

[🔹 **erc20GetBalanceAddress()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalanceaddress)

> Get the total number of fungible tokens that a blockchain address holds
> 
> **GET** `/v3/blockchain/token/address/{chain}/{address}`

[🔹 **erc20GetTransactionByAddress()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20gettransactionbyaddress)

> Get fungible token transactions on a blockchain address
> 
> **GET** `/v3/blockchain/token/transaction/{chain}/{address}/{tokenAddress}`



[[Back to top]](#)

---


### **api()->gasPump()**

[🔹 **activateGasPump()**](./Api/GasPumpApi.md#activategaspump)

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpCelo()**](./Api/GasPumpApi.md#activategaspumpcelo)

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpCeloKMS()**](./Api/GasPumpApi.md#activategaspumpcelokms)

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpKMS()**](./Api/GasPumpApi.md#activategaspumpkms)

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpTatum()**](./Api/GasPumpApi.md#activategaspumptatum)

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpTron()**](./Api/GasPumpApi.md#activategaspumptron)

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activateGasPumpTronKMS()**](./Api/GasPumpApi.md#activategaspumptronkms)

> Activate gas pump addresses
> 
> **POST** `/v3/gas-pump/activate`

[🔹 **activatedNotActivatedGasPumpAddresses()**](./Api/GasPumpApi.md#activatednotactivatedgaspumpaddresses)

> Get the results of the address activation transaction
> 
> **GET** `/v3/gas-pump/address/{chain}/{txId}`

[🔹 **approveTransferCustodialWallet()**](./Api/GasPumpApi.md#approvetransfercustodialwallet)

> Approve the transfer of an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/approve`

[🔹 **approveTransferCustodialWalletCelo()**](./Api/GasPumpApi.md#approvetransfercustodialwalletcelo)

> Approve the transfer of an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/approve`

[🔹 **approveTransferCustodialWalletCeloKMS()**](./Api/GasPumpApi.md#approvetransfercustodialwalletcelokms)

> Approve the transfer of an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/approve`

[🔹 **approveTransferCustodialWalletKMS()**](./Api/GasPumpApi.md#approvetransfercustodialwalletkms)

> Approve the transfer of an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/approve`

[🔹 **gasPumpAddressesActivatedOrNot()**](./Api/GasPumpApi.md#gaspumpaddressesactivatedornot)

> Check whether the gas pump address with a specified index is activated
> 
> **GET** `/v3/gas-pump/activated/{chain}/{owner}/{index}`

[🔹 **generateCustodialWallet()**](./Api/GasPumpApi.md#generatecustodialwallet)

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletBatch()**](./Api/GasPumpApi.md#generatecustodialwalletbatch)

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchCelo()**](./Api/GasPumpApi.md#generatecustodialwalletbatchcelo)

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchCeloKMS()**](./Api/GasPumpApi.md#generatecustodialwalletbatchcelokms)

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchKMS()**](./Api/GasPumpApi.md#generatecustodialwalletbatchkms)

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchPayer()**](./Api/GasPumpApi.md#generatecustodialwalletbatchpayer)

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchTron()**](./Api/GasPumpApi.md#generatecustodialwalletbatchtron)

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletBatchTronKMS()**](./Api/GasPumpApi.md#generatecustodialwalletbatchtronkms)

> Generate a gas pump wallet address
> 
> **POST** `/v3/blockchain/sc/custodial/batch`

[🔹 **generateCustodialWalletCelo()**](./Api/GasPumpApi.md#generatecustodialwalletcelo)

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletCeloKMS()**](./Api/GasPumpApi.md#generatecustodialwalletcelokms)

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletKMS()**](./Api/GasPumpApi.md#generatecustodialwalletkms)

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletTron()**](./Api/GasPumpApi.md#generatecustodialwallettron)

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **generateCustodialWalletTronKMS()**](./Api/GasPumpApi.md#generatecustodialwallettronkms)

> Generate a custodial wallet address
> 
> **POST** `/v3/blockchain/sc/custodial`

[🔹 **precalculateGasPumpAddresses()**](./Api/GasPumpApi.md#precalculategaspumpaddresses)

> Precalculate gas pump addresses
> 
> **POST** `/v3/gas-pump`

[🔹 **sCGetCustodialAddresses()**](./Api/GasPumpApi.md#scgetcustodialaddresses)

> Get the custodial wallet address from the transaction
> 
> **GET** `/v3/blockchain/sc/custodial/{chain}/{hash}`

[🔹 **transferCustodialWallet()**](./Api/GasPumpApi.md#transfercustodialwallet)

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletBatch()**](./Api/GasPumpApi.md#transfercustodialwalletbatch)

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchCelo()**](./Api/GasPumpApi.md#transfercustodialwalletbatchcelo)

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchCeloKMS()**](./Api/GasPumpApi.md#transfercustodialwalletbatchcelokms)

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchKMS()**](./Api/GasPumpApi.md#transfercustodialwalletbatchkms)

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchTron()**](./Api/GasPumpApi.md#transfercustodialwalletbatchtron)

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletBatchTronKMS()**](./Api/GasPumpApi.md#transfercustodialwalletbatchtronkms)

> Transfer multiple assets from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer/batch`

[🔹 **transferCustodialWalletCelo()**](./Api/GasPumpApi.md#transfercustodialwalletcelo)

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletCeloKMS()**](./Api/GasPumpApi.md#transfercustodialwalletcelokms)

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletKMS()**](./Api/GasPumpApi.md#transfercustodialwalletkms)

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletTron()**](./Api/GasPumpApi.md#transfercustodialwallettron)

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`

[🔹 **transferCustodialWalletTronKMS()**](./Api/GasPumpApi.md#transfercustodialwallettronkms)

> Transfer an asset from a gas pump address
> 
> **POST** `/v3/blockchain/sc/custodial/transfer`



[[Back to top]](#)

---


### **api()->harmony()**

[🔹 **callOneReadSmartContractMethod()**](./Api/HarmonyApi.md#callonereadsmartcontractmethod)

> Invoke a method in a smart contract on Harmony
> 
> **POST** `/v3/one/smartcontract`

[🔹 **callOneSmartContractMethod()**](./Api/HarmonyApi.md#callonesmartcontractmethod)

> Invoke a method in a smart contract on Harmony
> 
> **POST** `/v3/one/smartcontract`

[🔹 **callOneSmartContractMethodKMS()**](./Api/HarmonyApi.md#callonesmartcontractmethodkms)

> Invoke a method in a smart contract on Harmony
> 
> **POST** `/v3/one/smartcontract`

[🔹 **oneBroadcast()**](./Api/HarmonyApi.md#onebroadcast)

> Broadcast signed ONE transaction
> 
> **POST** `/v3/one/broadcast`

[🔹 **oneFormatAddress()**](./Api/HarmonyApi.md#oneformataddress)

> Transform HEX address to Bech32 ONE address format
> 
> **GET** `/v3/one/address/format/{address}`

[🔹 **oneGenerateAddress()**](./Api/HarmonyApi.md#onegenerateaddress)

> Generate ONE account address from Extended public key
> 
> **GET** `/v3/one/address/{xpub}/{index}`

[🔹 **oneGenerateAddressPrivateKey()**](./Api/HarmonyApi.md#onegenerateaddressprivatekey)

> Generate ONE private key
> 
> **POST** `/v3/one/wallet/priv`

[🔹 **oneGenerateWallet()**](./Api/HarmonyApi.md#onegeneratewallet)

> Generate ONE wallet
> 
> **GET** `/v3/one/wallet`

[🔹 **oneGetBalance()**](./Api/HarmonyApi.md#onegetbalance)

> Get ONE Account balance
> 
> **GET** `/v3/one/account/balance/{address}`

[🔹 **oneGetBlock()**](./Api/HarmonyApi.md#onegetblock)

> Get ONE block by hash
> 
> **GET** `/v3/one/block/{hash}`

[🔹 **oneGetCurrentBlock()**](./Api/HarmonyApi.md#onegetcurrentblock)

> Get current block number
> 
> **GET** `/v3/one/block/current`

[🔹 **oneGetTransaction()**](./Api/HarmonyApi.md#onegettransaction)

> Get ONE Transaction
> 
> **GET** `/v3/one/transaction/{hash}`

[🔹 **oneGetTransactionCount()**](./Api/HarmonyApi.md#onegettransactioncount)

> Get count of outgoing ONE transactions
> 
> **GET** `/v3/one/transaction/count/{address}`

[🔹 **oneWeb3Driver()**](./Api/HarmonyApi.md#oneweb3driver)

> Web3 HTTP driver
> 
> **POST** `/v3/one/web3/{xApiKey}`

[🔹 **transferOneBlockchain()**](./Api/HarmonyApi.md#transferoneblockchain)

> Send ONE / HRM20 from account to account
> 
> **POST** `/v3/one/transaction`

[🔹 **transferOneBlockchainKMS()**](./Api/HarmonyApi.md#transferoneblockchainkms)

> Send ONE / HRM20 from account to account
> 
> **POST** `/v3/one/transaction`



[[Back to top]](#)

---


### **api()->iPFS()**

[🔹 **getIPFSData()**](./Api/IPFSApi.md#getipfsdata)

> Get file from IPFS
> 
> **GET** `/v3/ipfs/{id}`

[🔹 **storeIPFS()**](./Api/IPFSApi.md#storeipfs)

> Store data to IPFS
> 
> **POST** `/v3/ipfs`



[[Back to top]](#)

---


### **api()->keyManagementSystem()**

[🔹 **completePendingSignature()**](./Api/KeyManagementSystemApi.md#completependingsignature)

> Complete pending transaction to sign
> 
> **PUT** `/v3/kms/{id}/{txId}`

[🔹 **deletePendingTransactionToSign()**](./Api/KeyManagementSystemApi.md#deletependingtransactiontosign)

> Delete transaction
> 
> **DELETE** `/v3/kms/{id}`

[🔹 **getPendingTransactionToSign()**](./Api/KeyManagementSystemApi.md#getpendingtransactiontosign)

> Get transaction details
> 
> **GET** `/v3/kms/{id}`

[🔹 **getPendingTransactionsToSign()**](./Api/KeyManagementSystemApi.md#getpendingtransactionstosign)

> Get pending transactions to sign
> 
> **GET** `/v3/kms/pending/{chain}`

[🔹 **receivePendingTransactionsToSign()**](./Api/KeyManagementSystemApi.md#receivependingtransactionstosign)

> Get pending transactions to sign
> 
> **POST** `/v3/kms/pending/{chain}`



[[Back to top]](#)

---


### **api()->klaytn()**

[🔹 **callKlaytnSmartContractMethod()**](./Api/KlaytnApi.md#callklaytnsmartcontractmethod)

> Invoke a method in a smart contract on Klaytn
> 
> **POST** `/v3/klaytn/smartcontract`

[🔹 **callKlaytnSmartContractMethodKMS()**](./Api/KlaytnApi.md#callklaytnsmartcontractmethodkms)

> Invoke a method in a smart contract on Klaytn
> 
> **POST** `/v3/klaytn/smartcontract`

[🔹 **callKlaytnSmartContractReadMethod()**](./Api/KlaytnApi.md#callklaytnsmartcontractreadmethod)

> Invoke a method in a smart contract on Klaytn
> 
> **POST** `/v3/klaytn/smartcontract`

[🔹 **klaytnBroadcast()**](./Api/KlaytnApi.md#klaytnbroadcast)

> Broadcast signed Klaytn transaction
> 
> **POST** `/v3/klaytn/broadcast`

[🔹 **klaytnGenerateAddress()**](./Api/KlaytnApi.md#klaytngenerateaddress)

> Generate Klaytn account address from Extended public key
> 
> **GET** `/v3/klaytn/address/{xpub}/{index}`

[🔹 **klaytnGenerateAddressPrivateKey()**](./Api/KlaytnApi.md#klaytngenerateaddressprivatekey)

> Generate Klaytn private key
> 
> **POST** `/v3/klaytn/wallet/priv`

[🔹 **klaytnGenerateWallet()**](./Api/KlaytnApi.md#klaytngeneratewallet)

> Generate Klaytn wallet
> 
> **GET** `/v3/klaytn/wallet`

[🔹 **klaytnGetBalance()**](./Api/KlaytnApi.md#klaytngetbalance)

> Get Klaytn Account balance
> 
> **GET** `/v3/klaytn/account/balance/{address}`

[🔹 **klaytnGetBlock()**](./Api/KlaytnApi.md#klaytngetblock)

> Get Klaytn block by hash
> 
> **GET** `/v3/klaytn/block/{hash}`

[🔹 **klaytnGetCurrentBlock()**](./Api/KlaytnApi.md#klaytngetcurrentblock)

> Get current block number
> 
> **GET** `/v3/klaytn/block/current`

[🔹 **klaytnGetTransaction()**](./Api/KlaytnApi.md#klaytngettransaction)

> Get Klaytn Transaction
> 
> **GET** `/v3/klaytn/transaction/{hash}`

[🔹 **klaytnGetTransactionCount()**](./Api/KlaytnApi.md#klaytngettransactioncount)

> Get count of outgoing Klaytn transactions
> 
> **GET** `/v3/klaytn/transaction/count/{address}`

[🔹 **klaytnWeb3Driver()**](./Api/KlaytnApi.md#klaytnweb3driver)

> Web3 HTTP driver
> 
> **POST** `/v3/klaytn/web3/{xApiKey}`

[🔹 **transferKlaytnBlockchain()**](./Api/KlaytnApi.md#transferklaytnblockchain)

> Send KLAY from account to account
> 
> **POST** `/v3/klaytn/transaction`

[🔹 **transferKlaytnBlockchainKMS()**](./Api/KlaytnApi.md#transferklaytnblockchainkms)

> Send KLAY from account to account
> 
> **POST** `/v3/klaytn/transaction`



[[Back to top]](#)

---


### **api()->kuCoin()**

[🔹 **callKcsSmartContractMethod()**](./Api/KuCoinApi.md#callkcssmartcontractmethod)

> Invoke a method in a smart contract on KuCoin Community Chain
> 
> **POST** `/v3/kcs/smartcontract`

[🔹 **callKcsSmartContractMethodKMS()**](./Api/KuCoinApi.md#callkcssmartcontractmethodkms)

> Invoke a method in a smart contract on KuCoin Community Chain
> 
> **POST** `/v3/kcs/smartcontract`

[🔹 **callKcsSmartContractReadMethod()**](./Api/KuCoinApi.md#callkcssmartcontractreadmethod)

> Invoke a method in a smart contract on KuCoin Community Chain
> 
> **POST** `/v3/kcs/smartcontract`

[🔹 **kcsBroadcast()**](./Api/KuCoinApi.md#kcsbroadcast)

> Broadcast signed Kcs transaction
> 
> **POST** `/v3/kcs/broadcast`

[🔹 **kcsGenerateAddress()**](./Api/KuCoinApi.md#kcsgenerateaddress)

> Generate Kcs account address from Extended public key
> 
> **GET** `/v3/kcs/address/{xpub}/{index}`

[🔹 **kcsGenerateAddressPrivateKey()**](./Api/KuCoinApi.md#kcsgenerateaddressprivatekey)

> Generate Kcs private key
> 
> **POST** `/v3/kcs/wallet/priv`

[🔹 **kcsGenerateWallet()**](./Api/KuCoinApi.md#kcsgeneratewallet)

> Generate Kcs wallet
> 
> **GET** `/v3/kcs/wallet`

[🔹 **kcsGetBalance()**](./Api/KuCoinApi.md#kcsgetbalance)

> Get Kcs Account balance
> 
> **GET** `/v3/kcs/account/balance/{address}`

[🔹 **kcsGetBlock()**](./Api/KuCoinApi.md#kcsgetblock)

> Get Kcs block by hash
> 
> **GET** `/v3/kcs/block/{hash}`

[🔹 **kcsGetCurrentBlock()**](./Api/KuCoinApi.md#kcsgetcurrentblock)

> Get current block number
> 
> **GET** `/v3/kcs/block/current`

[🔹 **kcsGetTransaction()**](./Api/KuCoinApi.md#kcsgettransaction)

> Get Kcs Transaction
> 
> **GET** `/v3/kcs/transaction/{hash}`

[🔹 **kcsGetTransactionCount()**](./Api/KuCoinApi.md#kcsgettransactioncount)

> Get count of outgoing Kcs transactions
> 
> **GET** `/v3/kcs/transaction/count/{address}`

[🔹 **kcsWeb3Driver()**](./Api/KuCoinApi.md#kcsweb3driver)

> Web3 HTTP driver
> 
> **POST** `/v3/kcs/web3/{xApiKey}`

[🔹 **transferKcsBlockchain()**](./Api/KuCoinApi.md#transferkcsblockchain)

> Send KCS from account to account
> 
> **POST** `/v3/kcs/transaction`

[🔹 **transferKcsBlockchainKMS()**](./Api/KuCoinApi.md#transferkcsblockchainkms)

> Send KCS from account to account
> 
> **POST** `/v3/kcs/transaction`



[[Back to top]](#)

---


### **api()->litecoin()**

[🔹 **ltcBroadcast()**](./Api/LitecoinApi.md#ltcbroadcast)

> Broadcast signed Litecoin transaction
> 
> **POST** `/v3/litecoin/broadcast`

[🔹 **ltcGenerateAddress()**](./Api/LitecoinApi.md#ltcgenerateaddress)

> Generate Litecoin deposit address from Extended public key
> 
> **GET** `/v3/litecoin/address/{xpub}/{index}`

[🔹 **ltcGenerateAddressPrivateKey()**](./Api/LitecoinApi.md#ltcgenerateaddressprivatekey)

> Generate Litecoin private key
> 
> **POST** `/v3/litecoin/wallet/priv`

[🔹 **ltcGenerateWallet()**](./Api/LitecoinApi.md#ltcgeneratewallet)

> Generate Litecoin wallet
> 
> **GET** `/v3/litecoin/wallet`

[🔹 **ltcGetBalanceOfAddress()**](./Api/LitecoinApi.md#ltcgetbalanceofaddress)

> Get the balance of a Litecoin address
> 
> **GET** `/v3/litecoin/address/balance/{address}`

[🔹 **ltcGetBlock()**](./Api/LitecoinApi.md#ltcgetblock)

> Get Litecoin Block by hash or height
> 
> **GET** `/v3/litecoin/block/{hash}`

[🔹 **ltcGetBlockChainInfo()**](./Api/LitecoinApi.md#ltcgetblockchaininfo)

> Get Litecoin Blockchain Information
> 
> **GET** `/v3/litecoin/info`

[🔹 **ltcGetBlockHash()**](./Api/LitecoinApi.md#ltcgetblockhash)

> Get Litecoin Block hash
> 
> **GET** `/v3/litecoin/block/hash/{i}`

[🔹 **ltcGetMempool()**](./Api/LitecoinApi.md#ltcgetmempool)

> Get Mempool Transactions
> 
> **GET** `/v3/litecoin/mempool`

[🔹 **ltcGetRawTransaction()**](./Api/LitecoinApi.md#ltcgetrawtransaction)

> Get Litecoin Transaction by hash
> 
> **GET** `/v3/litecoin/transaction/{hash}`

[🔹 **ltcGetTxByAddress()**](./Api/LitecoinApi.md#ltcgettxbyaddress)

> Get Litecoin Transactions by address
> 
> **GET** `/v3/litecoin/transaction/address/{address}`

[🔹 **ltcGetUTXO()**](./Api/LitecoinApi.md#ltcgetutxo)

> Get information about a transaction output (UTXO) in a Litecoin transaction
> 
> **GET** `/v3/litecoin/utxo/{hash}/{index}`

[🔹 **ltcRpcDriver()**](./Api/LitecoinApi.md#ltcrpcdriver)

> JSON RPC HTTP driver
> 
> **POST** `/v3/litecoin/node`

[🔹 **ltcTransactionAddress()**](./Api/LitecoinApi.md#ltctransactionaddress)

> Send LTC to Litecoin addresses
> 
> **POST** `/v3/litecoin/transaction`

[🔹 **ltcTransactionAddressKMS()**](./Api/LitecoinApi.md#ltctransactionaddresskms)

> Send LTC to Litecoin addresses
> 
> **POST** `/v3/litecoin/transaction`

[🔹 **ltcTransactionUTXO()**](./Api/LitecoinApi.md#ltctransactionutxo)

> Send LTC to Litecoin addresses
> 
> **POST** `/v3/litecoin/transaction`

[🔹 **ltcTransactionUTXOKMS()**](./Api/LitecoinApi.md#ltctransactionutxokms)

> Send LTC to Litecoin addresses
> 
> **POST** `/v3/litecoin/transaction`



[[Back to top]](#)

---


### **api()->maliciousAddress()**

[🔹 **checkMalicousAddress()**](./Api/MaliciousAddressApi.md#checkmalicousaddress)

> Check malicous address
> 
> **GET** `/v3/security/address/{address}`



[[Back to top]](#)

---


### **api()->marketplace()**

[🔹 **bloMarWithdrawFromMarketplaceSolana()**](./Api/MarketplaceApi.md#blomarwithdrawfrommarketplacesolana)

> Withdraw funds from the marketplace treasury account on Solana
> 
> **POST** `/v3/blockchain/marketplace/withdraw/treasury`

[🔹 **bloMarWithdrawFromMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#blomarwithdrawfrommarketplacesolanakms)

> Withdraw funds from the marketplace treasury account on Solana
> 
> **POST** `/v3/blockchain/marketplace/withdraw/treasury`

[🔹 **buyAssetOnMarketplace()**](./Api/MarketplaceApi.md#buyassetonmarketplace)

> Buy an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/buy`

[🔹 **buyAssetOnMarketplaceCelo()**](./Api/MarketplaceApi.md#buyassetonmarketplacecelo)

> Buy an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/buy`

[🔹 **buyAssetOnMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#buyassetonmarketplacecelokms)

> Buy an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/buy`

[🔹 **buyAssetOnMarketplaceKMS()**](./Api/MarketplaceApi.md#buyassetonmarketplacekms)

> Buy an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/buy`

[🔹 **buyAssetOnMarketplaceSolana()**](./Api/MarketplaceApi.md#buyassetonmarketplacesolana)

> Buy an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/buy`

[🔹 **buyAssetOnMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#buyassetonmarketplacesolanakms)

> Buy an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/buy`

[🔹 **cancelSellAssetOnMarketplace()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplace)

> Cancel the selling of an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/cancel`

[🔹 **cancelSellAssetOnMarketplaceCelo()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacecelo)

> Cancel the selling of an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/cancel`

[🔹 **cancelSellAssetOnMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacecelokms)

> Cancel the selling of an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/cancel`

[🔹 **cancelSellAssetOnMarketplaceKMS()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacekms)

> Cancel the selling of an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/cancel`

[🔹 **cancelSellAssetOnMarketplaceSolana()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacesolana)

> Cancel the selling of an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/cancel`

[🔹 **cancelSellAssetOnMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacesolanakms)

> Cancel the selling of an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/cancel`

[🔹 **generateMarketplace()**](./Api/MarketplaceApi.md#generatemarketplace)

> Create an NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing`

[🔹 **generateMarketplaceCelo()**](./Api/MarketplaceApi.md#generatemarketplacecelo)

> Create an NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing`

[🔹 **generateMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#generatemarketplacecelokms)

> Create an NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing`

[🔹 **generateMarketplaceKMS()**](./Api/MarketplaceApi.md#generatemarketplacekms)

> Create an NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing`

[🔹 **generateMarketplaceSolana()**](./Api/MarketplaceApi.md#generatemarketplacesolana)

> Create an NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing`

[🔹 **generateMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#generatemarketplacesolanakms)

> Create an NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing`

[🔹 **getMarketplaceFee()**](./Api/MarketplaceApi.md#getmarketplacefee)

> Get the NFT marketplace fee
> 
> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/fee`

[🔹 **getMarketplaceFeeRecipient()**](./Api/MarketplaceApi.md#getmarketplacefeerecipient)

> Get the recipient of the NFT marketplace fee
> 
> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/recipient`

[🔹 **getMarketplaceInfo()**](./Api/MarketplaceApi.md#getmarketplaceinfo)

> Get information about an NFT marketplace on Solana
> 
> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}`

[🔹 **getMarketplaceListing()**](./Api/MarketplaceApi.md#getmarketplacelisting)

> Get information about a listing on the NFT marketplace
> 
> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/listing/{id}`

[🔹 **getMarketplaceListings()**](./Api/MarketplaceApi.md#getmarketplacelistings)

> Get the listings of a certain type from the NFT marketplace
> 
> **GET** `/v3/blockchain/marketplace/listing/{chain}/{contractAddress}/{type}`

[🔹 **sellAssetOnMarketplace()**](./Api/MarketplaceApi.md#sellassetonmarketplace)

> Sell an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/sell`

[🔹 **sellAssetOnMarketplaceCelo()**](./Api/MarketplaceApi.md#sellassetonmarketplacecelo)

> Sell an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/sell`

[🔹 **sellAssetOnMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#sellassetonmarketplacecelokms)

> Sell an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/sell`

[🔹 **sellAssetOnMarketplaceKMS()**](./Api/MarketplaceApi.md#sellassetonmarketplacekms)

> Sell an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/sell`

[🔹 **sellAssetOnMarketplaceSolana()**](./Api/MarketplaceApi.md#sellassetonmarketplacesolana)

> Sell an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/sell`

[🔹 **sellAssetOnMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#sellassetonmarketplacesolanakms)

> Sell an asset on the NFT marketplace
> 
> **POST** `/v3/blockchain/marketplace/listing/sell`

[🔹 **updateFee()**](./Api/MarketplaceApi.md#updatefee)

> Update the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/fee`

[🔹 **updateFeeCelo()**](./Api/MarketplaceApi.md#updatefeecelo)

> Update the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/fee`

[🔹 **updateFeeCeloKMS()**](./Api/MarketplaceApi.md#updatefeecelokms)

> Update the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/fee`

[🔹 **updateFeeKMS()**](./Api/MarketplaceApi.md#updatefeekms)

> Update the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/fee`

[🔹 **updateFeeRecipient()**](./Api/MarketplaceApi.md#updatefeerecipient)

> Update the recipient of the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/recipient`

[🔹 **updateFeeRecipientCelo()**](./Api/MarketplaceApi.md#updatefeerecipientcelo)

> Update the recipient of the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/recipient`

[🔹 **updateFeeRecipientCeloKMS()**](./Api/MarketplaceApi.md#updatefeerecipientcelokms)

> Update the recipient of the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/recipient`

[🔹 **updateFeeRecipientKMS()**](./Api/MarketplaceApi.md#updatefeerecipientkms)

> Update the recipient of the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/recipient`

[🔹 **updateFeeRecipientSolana()**](./Api/MarketplaceApi.md#updatefeerecipientsolana)

> Update the recipient of the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/recipient`

[🔹 **updateFeeRecipientSolanaKMS()**](./Api/MarketplaceApi.md#updatefeerecipientsolanakms)

> Update the recipient of the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/recipient`

[🔹 **updateFeeSolana()**](./Api/MarketplaceApi.md#updatefeesolana)

> Update the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/fee`

[🔹 **updateFeeSolanaKMS()**](./Api/MarketplaceApi.md#updatefeesolanakms)

> Update the NFT marketplace fee
> 
> **PUT** `/v3/blockchain/marketplace/listing/fee`

[🔹 **updateMarketplaceSolana()**](./Api/MarketplaceApi.md#updatemarketplacesolana)

> Update an NFT marketplace on Solana
> 
> **PUT** `/v3/blockchain/marketplace/listing`

[🔹 **updateMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#updatemarketplacesolanakms)

> Update an NFT marketplace on Solana
> 
> **PUT** `/v3/blockchain/marketplace/listing`

[🔹 **withdrawFromMarketplaceSolana()**](./Api/MarketplaceApi.md#withdrawfrommarketplacesolana)

> Withdraw funds from the marketplace fee account on Solana
> 
> **POST** `/v3/blockchain/marketplace/withdraw/fee`

[🔹 **withdrawFromMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#withdrawfrommarketplacesolanakms)

> Withdraw funds from the marketplace fee account on Solana
> 
> **POST** `/v3/blockchain/marketplace/withdraw/fee`



[[Back to top]](#)

---


### **api()->multiTokensERC1155OrCompatible()**

[🔹 **addMultiTokenMinter()**](./Api/MultiTokensERC1155OrCompatibleApi.md#addmultitokenminter)

> Add a Multi Token minter
> 
> **POST** `/v3/multitoken/mint/add`

[🔹 **addMultiTokenMinterKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#addmultitokenminterkms)

> Add a Multi Token minter
> 
> **POST** `/v3/multitoken/mint/add`

[🔹 **burnMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitoken)

> Burn a Multi Token
> 
> **POST** `/v3/multitoken/burn`

[🔹 **burnMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatch)

> Burn multiple Multi Tokens
> 
> **POST** `/v3/multitoken/burn/batch`

[🔹 **burnMultiTokenBatchCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatchcelo)

> Burn multiple Multi Tokens
> 
> **POST** `/v3/multitoken/burn/batch`

[🔹 **burnMultiTokenBatchKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatchkms)

> Burn multiple Multi Tokens
> 
> **POST** `/v3/multitoken/burn/batch`

[🔹 **burnMultiTokenBatchKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatchkmscelo)

> Burn multiple Multi Tokens
> 
> **POST** `/v3/multitoken/burn/batch`

[🔹 **burnMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokencelo)

> Burn a Multi Token
> 
> **POST** `/v3/multitoken/burn`

[🔹 **burnMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenkms)

> Burn a Multi Token
> 
> **POST** `/v3/multitoken/burn`

[🔹 **burnMultiTokenKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenkmscelo)

> Burn a Multi Token
> 
> **POST** `/v3/multitoken/burn`

[🔹 **deployMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitoken)

> Deploy a Multi Token smart contract
> 
> **POST** `/v3/multitoken/deploy`

[🔹 **deployMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokencelo)

> Deploy a Multi Token smart contract
> 
> **POST** `/v3/multitoken/deploy`

[🔹 **deployMultiTokenCeloKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokencelokms)

> Deploy a Multi Token smart contract
> 
> **POST** `/v3/multitoken/deploy`

[🔹 **deployMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokenkms)

> Deploy a Multi Token smart contract
> 
> **POST** `/v3/multitoken/deploy`

[🔹 **mintMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitoken)

> Mint a Multi Token
> 
> **POST** `/v3/multitoken/mint`

[🔹 **mintMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatch)

> Mint multiple Multi Tokens
> 
> **POST** `/v3/multitoken/mint/batch`

[🔹 **mintMultiTokenBatchCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatchcelo)

> Mint multiple Multi Tokens
> 
> **POST** `/v3/multitoken/mint/batch`

[🔹 **mintMultiTokenBatchKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatchkms)

> Mint multiple Multi Tokens
> 
> **POST** `/v3/multitoken/mint/batch`

[🔹 **mintMultiTokenBatchKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatchkmscelo)

> Mint multiple Multi Tokens
> 
> **POST** `/v3/multitoken/mint/batch`

[🔹 **mintMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokencelo)

> Mint a Multi Token
> 
> **POST** `/v3/multitoken/mint`

[🔹 **mintMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenkms)

> Mint a Multi Token
> 
> **POST** `/v3/multitoken/mint`

[🔹 **mintMultiTokenKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenkmscelo)

> Mint a Multi Token
> 
> **POST** `/v3/multitoken/mint`

[🔹 **multiTokenGetAddressBalance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetaddressbalance)

> Get all Multi Tokens that a blockchain address holds
> 
> **GET** `/v3/multitoken/address/balance/{chain}/{address}`

[🔹 **multiTokenGetBalance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalance)

> Get the amount of a specific MultiToken that a blockchain address holds
> 
> **GET** `/v3/multitoken/balance/{chain}/{contractAddress}/{address}/{tokenId}`

[🔹 **multiTokenGetBalanceBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalancebatch)

> Get the amount of one or multiple Multi Tokens for multiple blockchain addresses
> 
> **GET** `/v3/multitoken/balance/batch/{chain}/{contractAddress}`

[🔹 **multiTokenGetContractAddress()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetcontractaddress)

> Get the address of a Multi Token smart contract by its transaction hash
> 
> **GET** `/v3/multitoken/address/{chain}/{hash}`

[🔹 **multiTokenGetMetadata()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetmetadata)

> Get Multi Token metadata
> 
> **GET** `/v3/multitoken/metadata/{chain}/{contractAddress}/{token}`

[🔹 **multiTokenGetTransaction()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransaction)

> Get a Multi Token transaction by its hash
> 
> **GET** `/v3/multitoken/transaction/{chain}/{hash}`

[🔹 **multiTokenGetTransactionByAddress()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransactionbyaddress)

> Get Multi Token transactions on a blockchain address
> 
> **GET** `/v3/multitoken/transaction/{chain}/{address}/{tokenAddress}`

[🔹 **transferMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitoken)

> Transfer a Multi Token
> 
> **POST** `/v3/multitoken/transaction`

[🔹 **transferMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatch)

> Transfer multiple Multi Tokens
> 
> **POST** `/v3/multitoken/transaction/batch`

[🔹 **transferMultiTokenBatchCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatchcelo)

> Transfer multiple Multi Tokens
> 
> **POST** `/v3/multitoken/transaction/batch`

[🔹 **transferMultiTokenBatchKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatchkms)

> Transfer multiple Multi Tokens
> 
> **POST** `/v3/multitoken/transaction/batch`

[🔹 **transferMultiTokenBatchKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatchkmscelo)

> Transfer multiple Multi Tokens
> 
> **POST** `/v3/multitoken/transaction/batch`

[🔹 **transferMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokencelo)

> Transfer a Multi Token
> 
> **POST** `/v3/multitoken/transaction`

[🔹 **transferMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenkms)

> Transfer a Multi Token
> 
> **POST** `/v3/multitoken/transaction`

[🔹 **transferMultiTokenKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenkmscelo)

> Transfer a Multi Token
> 
> **POST** `/v3/multitoken/transaction`



[[Back to top]](#)

---


### **api()->nFTERC721OrCompatible()**

[🔹 **addNftMinter()**](./Api/NFTERC721OrCompatibleApi.md#addnftminter)

> Add a blockchain address as an NFT minter to an NFT smart contract
> 
> **POST** `/v3/nft/mint/add`

[🔹 **addNftMinterKMS()**](./Api/NFTERC721OrCompatibleApi.md#addnftminterkms)

> Add a blockchain address as an NFT minter to an NFT smart contract
> 
> **POST** `/v3/nft/mint/add`

[🔹 **burnNft()**](./Api/NFTERC721OrCompatibleApi.md#burnnft)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftAlgo()**](./Api/NFTERC721OrCompatibleApi.md#burnnftalgo)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#burnnftcelo)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#burnnftflowkms)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#burnnftflowmnemonic)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#burnnftflowpk)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#burnnftkms)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#burnnftkmscelo)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#burnnftkmstron)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftTron()**](./Api/NFTERC721OrCompatibleApi.md#burnnfttron)

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **deployNft()**](./Api/NFTERC721OrCompatibleApi.md#deploynft)

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#deploynftcelo)

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftCeloKMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynftcelokms)

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynftflowkms)

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#deploynftflowmnemonic)

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#deploynftflowpk)

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynftkms)

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftTron()**](./Api/NFTERC721OrCompatibleApi.md#deploynfttron)

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftTronKMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynfttronkms)

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **mintMultipleNft()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenft)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftcelo)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftflowkms)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftflowmnemonic)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftflowpk)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftkms)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftkmscelo)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftkmstron)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftMinter()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftminter)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftTron()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenfttron)

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintNft()**](./Api/NFTERC721OrCompatibleApi.md#mintnft)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftAlgorand()**](./Api/NFTERC721OrCompatibleApi.md#mintnftalgorand)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftAlgorandKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftalgorandkms)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintnftcelo)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftExpress()**](./Api/NFTERC721OrCompatibleApi.md#mintnftexpress)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftExpressAlgorand()**](./Api/NFTERC721OrCompatibleApi.md#mintnftexpressalgorand)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftExpressSolana()**](./Api/NFTERC721OrCompatibleApi.md#mintnftexpresssolana)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftflowkms)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#mintnftflowmnemonic)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#mintnftflowpk)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftkms)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintnftkmscelo)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#mintnftkmstron)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftMinter()**](./Api/NFTERC721OrCompatibleApi.md#mintnftminter)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftSolana()**](./Api/NFTERC721OrCompatibleApi.md#mintnftsolana)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftSolanaKMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftsolanakms)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftTron()**](./Api/NFTERC721OrCompatibleApi.md#mintnfttron)

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **nftGetBalanceErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetbalanceerc721)

> Get the NFTs from a specific smart contract that a blockchain address holds
> 
> **GET** `/v3/nft/balance/{chain}/{contractAddress}/{address}`

[🔹 **nftGetContractAddress()**](./Api/NFTERC721OrCompatibleApi.md#nftgetcontractaddress)

> Get the address of an NFT smart contract by its transaction hash
> 
> **GET** `/v3/nft/address/{chain}/{hash}`

[🔹 **nftGetMetadataErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetmetadataerc721)

> Get NFT metadata
> 
> **GET** `/v3/nft/metadata/{chain}/{contractAddress}/{tokenId}`

[🔹 **nftGetProvenanceDataErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetprovenancedataerc721)

> Get NFT provenance information
> 
> **GET** `/v3/nft/provenance/{chain}/{contractAddress}/{tokenId}`

[🔹 **nftGetRoyaltyErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetroyaltyerc721)

> Get NFT royalty information
> 
> **GET** `/v3/nft/royalty/{chain}/{contractAddress}/{tokenId}`

[🔹 **nftGetTokensByAddressErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettokensbyaddresserc721)

> Get all NFTs that a blockchain address holds
> 
> **GET** `/v3/nft/address/balance/{chain}/{address}`

[🔹 **nftGetTokensByCollectionErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettokensbycollectionerc721)

> Get all NFTs from a collection
> 
> **GET** `/v3/nft/collection/{chain}/{address}`

[🔹 **nftGetTransactErc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransacterc721)

> Get an NFT transaction by its hash
> 
> **GET** `/v3/nft/transaction/{chain}/{hash}`

[🔹 **nftGetTransactionByAddress()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransactionbyaddress)

> Get NFT transactions on a blockchain address
> 
> **GET** `/v3/nft/transaction/{chain}/{address}/{tokenAddress}`

[🔹 **nftGetTransactionByToken()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransactionbytoken)

> Get NFT transactions for an NFT
> 
> **GET** `/v3/nft/transaction/tokenId/{chain}/{tokenAddress}/{tokenId}`

[🔹 **transferNft()**](./Api/NFTERC721OrCompatibleApi.md#transfernft)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftAlgo()**](./Api/NFTERC721OrCompatibleApi.md#transfernftalgo)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftAlgoExpress()**](./Api/NFTERC721OrCompatibleApi.md#transfernftalgoexpress)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftAlgoKMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftalgokms)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#transfernftcelo)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftflowkms)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#transfernftflowmnemonic)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#transfernftflowpk)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftkms)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#transfernftkmscelo)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#transfernftkmstron)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftSolana()**](./Api/NFTERC721OrCompatibleApi.md#transfernftsolana)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftSolanaKMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftsolanakms)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftTron()**](./Api/NFTERC721OrCompatibleApi.md#transfernfttron)

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **updateCashbackValueForAuthorNft()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornft)

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftcelo)

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftkms)

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftkmscelo)

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftkmstron)

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftTron()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornfttron)

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **verifySolanaNFT()**](./Api/NFTERC721OrCompatibleApi.md#verifysolananft)

> Verify an NFT in an NFT collection on Solana
> 
> **POST** `/v3/nft/verify`

[🔹 **verifySolanaNFTKMS()**](./Api/NFTERC721OrCompatibleApi.md#verifysolananftkms)

> Verify an NFT in an NFT collection on Solana
> 
> **POST** `/v3/nft/verify`



[[Back to top]](#)

---


### **api()->nodeRPC()**

[🔹 **nodeJsonPostRpcDriver()**](./Api/NodeRPCApi.md#nodejsonpostrpcdriver)

> Connect to the blockchain node through an RPC driver
> 
> **POST** `/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}`

[🔹 **nodeJsonRpcGetDriver()**](./Api/NodeRPCApi.md#nodejsonrpcgetdriver)

> Connect to the blockchain node through an RPC driver
> 
> **GET** `/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}`

[🔹 **nodeJsonRpcPutDriver()**](./Api/NodeRPCApi.md#nodejsonrpcputdriver)

> Connect to the blockchain node through an RPC driver
> 
> **PUT** `/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}`



[[Back to top]](#)

---


### **api()->notificationSubscriptions()**

[🔹 **createSubscriptionBalance()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionbalance)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionContractLogEvent()**](./Api/NotificationSubscriptionsApi.md#createsubscriptioncontractlogevent)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionIncoming()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionincoming)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionInterval()**](./Api/NotificationSubscriptionsApi.md#createsubscriptioninterval)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionKMSError()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionkmserror)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionKMSSuccess()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionkmssuccess)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionMultiTokenTransferEvent()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionmultitokentransferevent)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionNftTransferEvent()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionnfttransferevent)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionNotification()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionnotification)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionPartialTradeMatch()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionpartialtradematch)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionPending()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionpending)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionTradeMatch()**](./Api/NotificationSubscriptionsApi.md#createsubscriptiontradematch)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **createSubscriptionTxInTheBlock()**](./Api/NotificationSubscriptionsApi.md#createsubscriptiontxintheblock)

> Create a subscription
> 
> **POST** `/v3/subscription`

[🔹 **deleteSubscription()**](./Api/NotificationSubscriptionsApi.md#deletesubscription)

> Cancel existing subscription
> 
> **DELETE** `/v3/subscription/{id}`

[🔹 **disableWebHookHmac()**](./Api/NotificationSubscriptionsApi.md#disablewebhookhmac)

> Disable HMAC webhook digest
> 
> **DELETE** `/v3/subscription`

[🔹 **enableWebHookHmac()**](./Api/NotificationSubscriptionsApi.md#enablewebhookhmac)

> Enable HMAC webhook digest
> 
> **PUT** `/v3/subscription`

[🔹 **getAllWebhooks()**](./Api/NotificationSubscriptionsApi.md#getallwebhooks)

> List all executed webhooks
> 
> **GET** `/v3/subscription/webhook`

[🔹 **getAllWebhooksCount()**](./Api/NotificationSubscriptionsApi.md#getallwebhookscount)

> Count of found entities for get webhook request
> 
> **GET** `/v3/subscription/webhook/count`

[🔹 **getSubscriptionReport()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionreport)

> Obtain report for subscription
> 
> **GET** `/v3/subscription/report/{id}`

[🔹 **getSubscriptions()**](./Api/NotificationSubscriptionsApi.md#getsubscriptions)

> List all active subscriptions
> 
> **GET** `/v3/subscription`

[🔹 **getSubscriptionsCount()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionscount)

> Count of found entities for get webhook request
> 
> **GET** `/v3/subscription/count`



[[Back to top]](#)

---


### **api()->orderBook()**

[🔹 **chartRequest()**](./Api/OrderBookApi.md#chartrequest)

> Obtain chart data from historical closed trades
> 
> **POST** `/v3/trade/chart`

[🔹 **createFutureTrade()**](./Api/OrderBookApi.md#createfuturetrade)

> Store buy / sell trade
> 
> **POST** `/v3/trade`

[🔹 **createTrade()**](./Api/OrderBookApi.md#createtrade)

> Store buy / sell trade
> 
> **POST** `/v3/trade`

[🔹 **deleteAccountTrades()**](./Api/OrderBookApi.md#deleteaccounttrades)

> Cancel all existing trades for account
> 
> **DELETE** `/v3/trade/account/{id}`

[🔹 **deleteTrade()**](./Api/OrderBookApi.md#deletetrade)

> Cancel existing trade
> 
> **DELETE** `/v3/trade/{id}`

[🔹 **getBuyTrades()**](./Api/OrderBookApi.md#getbuytrades)

> List all active buy trades
> 
> **GET** `/v3/trade/buy`

[🔹 **getBuyTradesBody()**](./Api/OrderBookApi.md#getbuytradesbody)

> List all active buy trades
> 
> **POST** `/v3/trade/buy`

[🔹 **getHistoricalTrades()**](./Api/OrderBookApi.md#gethistoricaltrades)

> List all historical trades
> 
> **GET** `/v3/trade/history`

[🔹 **getHistoricalTradesBody()**](./Api/OrderBookApi.md#gethistoricaltradesbody)

> List all historical trades
> 
> **POST** `/v3/trade/history`

[🔹 **getMatchedTrades()**](./Api/OrderBookApi.md#getmatchedtrades)

> List all matched orders from FUTURE_SELL/FUTURE_BUY trades
> 
> **POST** `/v3/trade/matched`

[🔹 **getSellTrades()**](./Api/OrderBookApi.md#getselltrades)

> List all active sell trades
> 
> **GET** `/v3/trade/sell`

[🔹 **getSellTradesBody()**](./Api/OrderBookApi.md#getselltradesbody)

> List all active sell trades
> 
> **POST** `/v3/trade/sell`

[🔹 **getTradeById()**](./Api/OrderBookApi.md#gettradebyid)

> Get existing trade
> 
> **GET** `/v3/trade/{id}`



[[Back to top]](#)

---


### **api()->polygon()**

[🔹 **callPolygonSmartContractMethod()**](./Api/PolygonApi.md#callpolygonsmartcontractmethod)

> Invoke a method in a smart contract on Polygon
> 
> **POST** `/v3/polygon/smartcontract`

[🔹 **callPolygonSmartContractMethodCaller()**](./Api/PolygonApi.md#callpolygonsmartcontractmethodcaller)

> Invoke a method in a smart contract on Polygon
> 
> **POST** `/v3/polygon/smartcontract`

[🔹 **callPolygonSmartContractMethodKMS()**](./Api/PolygonApi.md#callpolygonsmartcontractmethodkms)

> Invoke a method in a smart contract on Polygon
> 
> **POST** `/v3/polygon/smartcontract`

[🔹 **callPolygonSmartContractReadMethod()**](./Api/PolygonApi.md#callpolygonsmartcontractreadmethod)

> Invoke a method in a smart contract on Polygon
> 
> **POST** `/v3/polygon/smartcontract`

[🔹 **polygonBroadcast()**](./Api/PolygonApi.md#polygonbroadcast)

> Broadcast signed Polygon transaction
> 
> **POST** `/v3/polygon/broadcast`

[🔹 **polygonGenerateAddress()**](./Api/PolygonApi.md#polygongenerateaddress)

> Generate Polygon account address from Extended public key
> 
> **GET** `/v3/polygon/address/{xpub}/{index}`

[🔹 **polygonGenerateAddressPrivateKey()**](./Api/PolygonApi.md#polygongenerateaddressprivatekey)

> Generate Polygon private key
> 
> **POST** `/v3/polygon/wallet/priv`

[🔹 **polygonGenerateWallet()**](./Api/PolygonApi.md#polygongeneratewallet)

> Generate Polygon wallet
> 
> **GET** `/v3/polygon/wallet`

[🔹 **polygonGetBalance()**](./Api/PolygonApi.md#polygongetbalance)

> Get Polygon Account balance
> 
> **GET** `/v3/polygon/account/balance/{address}`

[🔹 **polygonGetBlock()**](./Api/PolygonApi.md#polygongetblock)

> Get Polygon block by hash
> 
> **GET** `/v3/polygon/block/{hash}`

[🔹 **polygonGetCurrentBlock()**](./Api/PolygonApi.md#polygongetcurrentblock)

> Get current block number
> 
> **GET** `/v3/polygon/block/current`

[🔹 **polygonGetTransaction()**](./Api/PolygonApi.md#polygongettransaction)

> Get Polygon Transaction
> 
> **GET** `/v3/polygon/transaction/{hash}`

[🔹 **polygonGetTransactionByAddress()**](./Api/PolygonApi.md#polygongettransactionbyaddress)

> Get Polygon transactions by address
> 
> **GET** `/v3/polygon/account/transaction/{address}`

[🔹 **polygonGetTransactionCount()**](./Api/PolygonApi.md#polygongettransactioncount)

> Get count of outgoing Polygon transactions
> 
> **GET** `/v3/polygon/transaction/count/{address}`

[🔹 **polygonWeb3Driver()**](./Api/PolygonApi.md#polygonweb3driver)

> Web3 HTTP driver
> 
> **POST** `/v3/polygon/web3/{xApiKey}`

[🔹 **transferPolygonBlockchain()**](./Api/PolygonApi.md#transferpolygonblockchain)

> Send MATIC from account to account
> 
> **POST** `/v3/polygon/transaction`

[🔹 **transferPolygonBlockchainKMS()**](./Api/PolygonApi.md#transferpolygonblockchainkms)

> Send MATIC from account to account
> 
> **POST** `/v3/polygon/transaction`



[[Back to top]](#)

---


### **api()->serviceUtils()**

[🔹 **freezeApiKey()**](./Api/ServiceUtilsApi.md#freezeapikey)

> Freeze API Key
> 
> **PUT** `/v3/tatum/freeze`

[🔹 **getCredits()**](./Api/ServiceUtilsApi.md#getcredits)

> Get information about your credit consumption for the last month
> 
> **GET** `/v3/tatum/usage`

[🔹 **getVersion()**](./Api/ServiceUtilsApi.md#getversion)

> Get API version
> 
> **GET** `/v3/tatum/version`

[🔹 **unfreezeApiKey()**](./Api/ServiceUtilsApi.md#unfreezeapikey)

> Unfreeze API Key
> 
> **DELETE** `/v3/tatum/freeze`



[[Back to top]](#)

---


### **api()->solana()**

[🔹 **solanaBroadcastConfirm()**](./Api/SolanaApi.md#solanabroadcastconfirm)

> Broadcast and confirm signed Solana transaction
> 
> **POST** `/v3/solana/broadcast/confirm`

[🔹 **solanaGenerateWallet()**](./Api/SolanaApi.md#solanageneratewallet)

> Generate Solana wallet
> 
> **GET** `/v3/solana/wallet`

[🔹 **solanaGetBalance()**](./Api/SolanaApi.md#solanagetbalance)

> Get Solana Account balance
> 
> **GET** `/v3/solana/account/balance/{address}`

[🔹 **solanaGetBlock()**](./Api/SolanaApi.md#solanagetblock)

> Get Solana block by number
> 
> **GET** `/v3/solana/block/{height}`

[🔹 **solanaGetCurrentBlock()**](./Api/SolanaApi.md#solanagetcurrentblock)

> Get current block number
> 
> **GET** `/v3/solana/block/current`

[🔹 **solanaGetTransaction()**](./Api/SolanaApi.md#solanagettransaction)

> Get Solana Transaction
> 
> **GET** `/v3/solana/transaction/{hash}`

[🔹 **solanaWeb3Driver()**](./Api/SolanaApi.md#solanaweb3driver)

> JSON RPC HTTP driver
> 
> **POST** `/v3/solana/web3/{xApiKey}`

[🔹 **transferSolanaBlockchain()**](./Api/SolanaApi.md#transfersolanablockchain)

> Send SOL from account to account
> 
> **POST** `/v3/solana/transaction`

[🔹 **transferSolanaBlockchainKMS()**](./Api/SolanaApi.md#transfersolanablockchainkms)

> Send SOL from account to account
> 
> **POST** `/v3/solana/transaction`



[[Back to top]](#)

---


### **api()->stellar()**

[🔹 **transferXlmBlockchain()**](./Api/StellarApi.md#transferxlmblockchain)

> Send XLM from address to address
> 
> **POST** `/v3/xlm/transaction`

[🔹 **transferXlmBlockchainAsset()**](./Api/StellarApi.md#transferxlmblockchainasset)

> Send XLM from address to address
> 
> **POST** `/v3/xlm/transaction`

[🔹 **transferXlmBlockchainKMS()**](./Api/StellarApi.md#transferxlmblockchainkms)

> Send XLM from address to address
> 
> **POST** `/v3/xlm/transaction`

[🔹 **transferXlmBlockchainKMSAsset()**](./Api/StellarApi.md#transferxlmblockchainkmsasset)

> Send XLM from address to address
> 
> **POST** `/v3/xlm/transaction`

[🔹 **trustLineXlmBlockchain()**](./Api/StellarApi.md#trustlinexlmblockchain)

> Create / Update / Delete XLM trust line
> 
> **POST** `/v3/xlm/trust`

[🔹 **trustLineXlmBlockchainKMS()**](./Api/StellarApi.md#trustlinexlmblockchainkms)

> Create / Update / Delete XLM trust line
> 
> **POST** `/v3/xlm/trust`

[🔹 **xlmBroadcast()**](./Api/StellarApi.md#xlmbroadcast)

> Broadcast signed XLM transaction
> 
> **POST** `/v3/xlm/broadcast`

[🔹 **xlmGetAccountInfo()**](./Api/StellarApi.md#xlmgetaccountinfo)

> Get XLM Account info
> 
> **GET** `/v3/xlm/account/{account}`

[🔹 **xlmGetAccountTx()**](./Api/StellarApi.md#xlmgetaccounttx)

> Get XLM Account transactions
> 
> **GET** `/v3/xlm/account/tx/{account}`

[🔹 **xlmGetFee()**](./Api/StellarApi.md#xlmgetfee)

> Get actual XLM fee
> 
> **GET** `/v3/xlm/fee`

[🔹 **xlmGetLastClosedLedger()**](./Api/StellarApi.md#xlmgetlastclosedledger)

> Get XLM Blockchain Information
> 
> **GET** `/v3/xlm/info`

[🔹 **xlmGetLedger()**](./Api/StellarApi.md#xlmgetledger)

> Get XLM Blockchain Ledger by sequence
> 
> **GET** `/v3/xlm/ledger/{sequence}`

[🔹 **xlmGetLedgerTx()**](./Api/StellarApi.md#xlmgetledgertx)

> Get XLM Blockchain Transactions in Ledger
> 
> **GET** `/v3/xlm/ledger/{sequence}/transaction`

[🔹 **xlmGetTransaction()**](./Api/StellarApi.md#xlmgettransaction)

> Get XLM Transaction by hash
> 
> **GET** `/v3/xlm/transaction/{hash}`

[🔹 **xlmWallet()**](./Api/StellarApi.md#xlmwallet)

> Generate XLM account
> 
> **GET** `/v3/xlm/account`



[[Back to top]](#)

---


### **api()->transaction()**

[🔹 **getTransactions()**](./Api/TransactionApi.md#gettransactions)

> Find transactions within the ledger.
> 
> **POST** `/v3/ledger/transaction/ledger`

[🔹 **getTransactionsByAccountId()**](./Api/TransactionApi.md#gettransactionsbyaccountid)

> Find transactions for account.
> 
> **POST** `/v3/ledger/transaction/account`

[🔹 **getTransactionsByCustomerId()**](./Api/TransactionApi.md#gettransactionsbycustomerid)

> Find transactions for a customer across all of the customer's accounts.
> 
> **POST** `/v3/ledger/transaction/customer`

[🔹 **getTransactionsByReference()**](./Api/TransactionApi.md#gettransactionsbyreference)

> Find transactions with a given reference across all accounts.
> 
> **GET** `/v3/ledger/transaction/reference/{reference}`

[🔹 **sendTransaction()**](./Api/TransactionApi.md#sendtransaction)

> Send payment
> 
> **POST** `/v3/ledger/transaction`

[🔹 **sendTransactionBatch()**](./Api/TransactionApi.md#sendtransactionbatch)

> Send payment in batch
> 
> **POST** `/v3/ledger/transaction/batch`



[[Back to top]](#)

---


### **api()->tron()**

[🔹 **createTronTrc10Blockchain()**](./Api/TronApi.md#createtrontrc10blockchain)

> Create a TRC-10 token
> 
> **POST** `/v3/tron/trc10/deploy`

[🔹 **createTronTrc10BlockchainKMS()**](./Api/TronApi.md#createtrontrc10blockchainkms)

> Create a TRC-10 token
> 
> **POST** `/v3/tron/trc10/deploy`

[🔹 **createTronTrc20Blockchain()**](./Api/TronApi.md#createtrontrc20blockchain)

> Create a TRC-20 token
> 
> **POST** `/v3/tron/trc20/deploy`

[🔹 **createTronTrc20BlockchainKMS()**](./Api/TronApi.md#createtrontrc20blockchainkms)

> Create a TRC-20 token
> 
> **POST** `/v3/tron/trc20/deploy`

[🔹 **freezeTron()**](./Api/TronApi.md#freezetron)

> Freeze the balance of a TRON account
> 
> **POST** `/v3/tron/freezeBalance`

[🔹 **freezeTronKMS()**](./Api/TronApi.md#freezetronkms)

> Freeze the balance of a TRON account
> 
> **POST** `/v3/tron/freezeBalance`

[🔹 **generateTronwallet()**](./Api/TronApi.md#generatetronwallet)

> Generate a TRON wallet
> 
> **GET** `/v3/tron/wallet`

[🔹 **transferTronBlockchain()**](./Api/TronApi.md#transfertronblockchain)

> Send TRX to a TRON account
> 
> **POST** `/v3/tron/transaction`

[🔹 **transferTronBlockchainKMS()**](./Api/TronApi.md#transfertronblockchainkms)

> Send TRX to a TRON account
> 
> **POST** `/v3/tron/transaction`

[🔹 **transferTronTrc10Blockchain()**](./Api/TronApi.md#transfertrontrc10blockchain)

> Send TRC-10 tokens to a TRON account
> 
> **POST** `/v3/tron/trc10/transaction`

[🔹 **transferTronTrc10BlockchainKMS()**](./Api/TronApi.md#transfertrontrc10blockchainkms)

> Send TRC-10 tokens to a TRON account
> 
> **POST** `/v3/tron/trc10/transaction`

[🔹 **transferTronTrc20Blockchain()**](./Api/TronApi.md#transfertrontrc20blockchain)

> Send TRC-20 tokens to a TRON account
> 
> **POST** `/v3/tron/trc20/transaction`

[🔹 **transferTronTrc20BlockchainKMS()**](./Api/TronApi.md#transfertrontrc20blockchainkms)

> Send TRC-20 tokens to a TRON account
> 
> **POST** `/v3/tron/trc20/transaction`

[🔹 **tronAccountTx()**](./Api/TronApi.md#tronaccounttx)

> Get all transactions for a TRON account
> 
> **GET** `/v3/tron/transaction/account/{address}`

[🔹 **tronAccountTx20()**](./Api/TronApi.md#tronaccounttx20)

> Get TRC-20 transactions for a TRON account
> 
> **GET** `/v3/tron/transaction/account/{address}/trc20`

[🔹 **tronBroadcast()**](./Api/TronApi.md#tronbroadcast)

> Broadcast a TRON transaction
> 
> **POST** `/v3/tron/broadcast`

[🔹 **tronGenerateAddress()**](./Api/TronApi.md#trongenerateaddress)

> Generate a TRON address from the wallet's extended public key
> 
> **GET** `/v3/tron/address/{xpub}/{index}`

[🔹 **tronGenerateAddressPrivateKey()**](./Api/TronApi.md#trongenerateaddressprivatekey)

> Generate the private key for a TRON address
> 
> **POST** `/v3/tron/wallet/priv`

[🔹 **tronGetAccount()**](./Api/TronApi.md#trongetaccount)

> Get the TRON account by its address
> 
> **GET** `/v3/tron/account/{address}`

[🔹 **tronGetBlock()**](./Api/TronApi.md#trongetblock)

> Get a TRON block by its hash or height
> 
> **GET** `/v3/tron/block/{hash}`

[🔹 **tronGetCurrentBlock()**](./Api/TronApi.md#trongetcurrentblock)

> Get the current TRON block
> 
> **GET** `/v3/tron/info`

[🔹 **tronGetTransaction()**](./Api/TronApi.md#trongettransaction)

> Get a TRON transaction by its hash
> 
> **GET** `/v3/tron/transaction/{hash}`

[🔹 **tronTrc10Detail()**](./Api/TronApi.md#trontrc10detail)

> Get information about a TRC-10 token
> 
> **GET** `/v3/tron/trc10/detail/{idOrOwnerAddress}`



[[Back to top]](#)

---


### **api()->veChain()**

[🔹 **transferVetBlockchain()**](./Api/VeChainApi.md#transfervetblockchain)

> Send VeChain from account to account
> 
> **POST** `/v3/vet/transaction`

[🔹 **transferVetBlockchainKMS()**](./Api/VeChainApi.md#transfervetblockchainkms)

> Send VeChain from account to account
> 
> **POST** `/v3/vet/transaction`

[🔹 **vetBroadcast()**](./Api/VeChainApi.md#vetbroadcast)

> Broadcast signed VeChain transaction
> 
> **POST** `/v3/vet/broadcast`

[🔹 **vetGenerateAddress()**](./Api/VeChainApi.md#vetgenerateaddress)

> Generate VeChain account address from Extended public key
> 
> **GET** `/v3/vet/address/{xpub}/{index}`

[🔹 **vetGenerateAddressPrivateKey()**](./Api/VeChainApi.md#vetgenerateaddressprivatekey)

> Generate VeChain private key
> 
> **POST** `/v3/vet/wallet/priv`

[🔹 **vetGenerateWallet()**](./Api/VeChainApi.md#vetgeneratewallet)

> Generate VeChain wallet
> 
> **GET** `/v3/vet/wallet`

[🔹 **vetGetBalance()**](./Api/VeChainApi.md#vetgetbalance)

> Get VeChain Account balance
> 
> **GET** `/v3/vet/account/balance/{address}`

[🔹 **vetGetBlock()**](./Api/VeChainApi.md#vetgetblock)

> Get VeChain Block by hash
> 
> **GET** `/v3/vet/block/{hash}`

[🔹 **vetGetCurrentBlock()**](./Api/VeChainApi.md#vetgetcurrentblock)

> Get VeChain current block
> 
> **GET** `/v3/vet/block/current`

[🔹 **vetGetEnergy()**](./Api/VeChainApi.md#vetgetenergy)

> Get VeChain Account energy (VTHO)
> 
> **GET** `/v3/vet/account/energy/{address}`

[🔹 **vetGetTransaction()**](./Api/VeChainApi.md#vetgettransaction)

> Get VeChain Transaction
> 
> **GET** `/v3/vet/transaction/{hash}`

[🔹 **vetGetTransactionReceipt()**](./Api/VeChainApi.md#vetgettransactionreceipt)

> Get VeChain Transaction Receipt
> 
> **GET** `/v3/vet/transaction/{hash}/receipt`



[[Back to top]](#)

---


### **api()->virtualAccountBlockchainFees()**

[🔹 **offchainEstimateFee()**](./Api/VirtualAccountBlockchainFeesApi.md#offchainestimatefee)

> Estimate ledger to blockchain transaction fee
> 
> **POST** `/v3/offchain/blockchain/estimate`



[[Back to top]](#)

---


### **api()->virtualCurrency()**

[🔹 **createCurrency()**](./Api/VirtualCurrencyApi.md#createcurrency)

> Create new virtual currency
> 
> **POST** `/v3/ledger/virtualCurrency`

[🔹 **getCurrency()**](./Api/VirtualCurrencyApi.md#getcurrency)

> Get virtual currency
> 
> **GET** `/v3/ledger/virtualCurrency/{name}`

[🔹 **mintCurrency()**](./Api/VirtualCurrencyApi.md#mintcurrency)

> Create new supply of virtual currency
> 
> **PUT** `/v3/ledger/virtualCurrency/mint`

[🔹 **revokeCurrency()**](./Api/VirtualCurrencyApi.md#revokecurrency)

> Destroy supply of virtual currency
> 
> **PUT** `/v3/ledger/virtualCurrency/revoke`

[🔹 **updateCurrency()**](./Api/VirtualCurrencyApi.md#updatecurrency)

> Update virtual currency
> 
> **PUT** `/v3/ledger/virtualCurrency`



[[Back to top]](#)

---


### **api()->withdrawal()**

[🔹 **broadcastBlockchainTransaction()**](./Api/WithdrawalApi.md#broadcastblockchaintransaction)

> Broadcast signed transaction and complete withdrawal
> 
> **POST** `/v3/offchain/withdrawal/broadcast`

[🔹 **cancelInProgressWithdrawal()**](./Api/WithdrawalApi.md#cancelinprogresswithdrawal)

> Cancel withdrawal
> 
> **DELETE** `/v3/offchain/withdrawal/{id}`

[🔹 **completeWithdrawal()**](./Api/WithdrawalApi.md#completewithdrawal)

> Complete withdrawal
> 
> **PUT** `/v3/offchain/withdrawal/{id}/{txId}`

[🔹 **getWithdrawals()**](./Api/WithdrawalApi.md#getwithdrawals)

> Get withdrawals
> 
> **GET** `/v3/offchain/withdrawal`

[🔹 **storeWithdrawal()**](./Api/WithdrawalApi.md#storewithdrawal)

> Store withdrawal
> 
> **POST** `/v3/offchain/withdrawal`



[[Back to top]](#)

---


### **api()->xRP()**

[🔹 **accountSettingsXrpBlockchain()**](./Api/XRPApi.md#accountsettingsxrpblockchain)

> Modify XRP account
> 
> **POST** `/v3/xrp/account/settings`

[🔹 **accountSettingsXrpBlockchainKMS()**](./Api/XRPApi.md#accountsettingsxrpblockchainkms)

> Modify XRP account
> 
> **POST** `/v3/xrp/account/settings`

[🔹 **transferXrpBlockchain()**](./Api/XRPApi.md#transferxrpblockchain)

> Send XRP from address to address
> 
> **POST** `/v3/xrp/transaction`

[🔹 **transferXrpBlockchainAsset()**](./Api/XRPApi.md#transferxrpblockchainasset)

> Send XRP from address to address
> 
> **POST** `/v3/xrp/transaction`

[🔹 **transferXrpBlockchainAssetKMS()**](./Api/XRPApi.md#transferxrpblockchainassetkms)

> Send XRP from address to address
> 
> **POST** `/v3/xrp/transaction`

[🔹 **transferXrpBlockchainKMS()**](./Api/XRPApi.md#transferxrpblockchainkms)

> Send XRP from address to address
> 
> **POST** `/v3/xrp/transaction`

[🔹 **trustLineXrpBlockchain()**](./Api/XRPApi.md#trustlinexrpblockchain)

> Create / Update / Delete XRP trust line
> 
> **POST** `/v3/xrp/trust`

[🔹 **trustLineXrpBlockchainKMS()**](./Api/XRPApi.md#trustlinexrpblockchainkms)

> Create / Update / Delete XRP trust line
> 
> **POST** `/v3/xrp/trust`

[🔹 **xrpBroadcast()**](./Api/XRPApi.md#xrpbroadcast)

> Broadcast signed XRP transaction
> 
> **POST** `/v3/xrp/broadcast`

[🔹 **xrpGetAccountBalance()**](./Api/XRPApi.md#xrpgetaccountbalance)

> Get Account Balance
> 
> **GET** `/v3/xrp/account/{account}/balance`

[🔹 **xrpGetAccountInfo()**](./Api/XRPApi.md#xrpgetaccountinfo)

> Get Account info
> 
> **GET** `/v3/xrp/account/{account}`

[🔹 **xrpGetAccountTx()**](./Api/XRPApi.md#xrpgetaccounttx)

> Get Account transactions
> 
> **GET** `/v3/xrp/account/tx/{account}`

[🔹 **xrpGetFee()**](./Api/XRPApi.md#xrpgetfee)

> Get actual Blockchain fee
> 
> **GET** `/v3/xrp/fee`

[🔹 **xrpGetLastClosedLedger()**](./Api/XRPApi.md#xrpgetlastclosedledger)

> Get XRP Blockchain Information
> 
> **GET** `/v3/xrp/info`

[🔹 **xrpGetLedger()**](./Api/XRPApi.md#xrpgetledger)

> Get Ledger
> 
> **GET** `/v3/xrp/ledger/{i}`

[🔹 **xrpGetTransaction()**](./Api/XRPApi.md#xrpgettransaction)

> Get XRP Transaction by hash
> 
> **GET** `/v3/xrp/transaction/{hash}`

[🔹 **xrpWallet()**](./Api/XRPApi.md#xrpwallet)

> Generate XRP account
> 
> **GET** `/v3/xrp/account`



[[Back to top]](#)

---


### **api()->xinFin()**

[🔹 **callXdcReadSmartContractMethod()**](./Api/XinFinApi.md#callxdcreadsmartcontractmethod)

> Invoke a method in a smart contract on XinFin
> 
> **POST** `/v3/xdc/smartcontract`

[🔹 **callXdcSmartContractMethod()**](./Api/XinFinApi.md#callxdcsmartcontractmethod)

> Invoke a method in a smart contract on XinFin
> 
> **POST** `/v3/xdc/smartcontract`

[🔹 **callXdcSmartContractMethodKMS()**](./Api/XinFinApi.md#callxdcsmartcontractmethodkms)

> Invoke a method in a smart contract on XinFin
> 
> **POST** `/v3/xdc/smartcontract`

[🔹 **transferXdcBlockchain()**](./Api/XinFinApi.md#transferxdcblockchain)

> Send XDC / ERC20 from account to account
> 
> **POST** `/v3/xdc/transaction`

[🔹 **transferXdcBlockchainKMS()**](./Api/XinFinApi.md#transferxdcblockchainkms)

> Send XDC / ERC20 from account to account
> 
> **POST** `/v3/xdc/transaction`

[🔹 **xdcBroadcast()**](./Api/XinFinApi.md#xdcbroadcast)

> Broadcast signed XDC transaction
> 
> **POST** `/v3/xdc/broadcast`

[🔹 **xdcGenerateAddress()**](./Api/XinFinApi.md#xdcgenerateaddress)

> Generate XDC account address from Extended public key
> 
> **GET** `/v3/xdc/address/{xpub}/{index}`

[🔹 **xdcGenerateAddressPrivateKey()**](./Api/XinFinApi.md#xdcgenerateaddressprivatekey)

> Generate XDC private key
> 
> **POST** `/v3/xdc/wallet/priv`

[🔹 **xdcGenerateWallet()**](./Api/XinFinApi.md#xdcgeneratewallet)

> Generate XDC wallet
> 
> **GET** `/v3/xdc/wallet`

[🔹 **xdcGetBalance()**](./Api/XinFinApi.md#xdcgetbalance)

> Get XDC Account balance
> 
> **GET** `/v3/xdc/account/balance/{address}`

[🔹 **xdcGetBlock()**](./Api/XinFinApi.md#xdcgetblock)

> Get XDC block by hash
> 
> **GET** `/v3/xdc/block/{hash}`

[🔹 **xdcGetCurrentBlock()**](./Api/XinFinApi.md#xdcgetcurrentblock)

> Get current block number
> 
> **GET** `/v3/xdc/block/current`

[🔹 **xdcGetTransaction()**](./Api/XinFinApi.md#xdcgettransaction)

> Get XDC Transaction
> 
> **GET** `/v3/xdc/transaction/{hash}`

[🔹 **xdcGetTransactionCount()**](./Api/XinFinApi.md#xdcgettransactioncount)

> Get count of outgoing XDC transactions
> 
> **GET** `/v3/xdc/transaction/count/{address}`

[🔹 **xdcWeb3Driver()**](./Api/XinFinApi.md#xdcweb3driver)

> Web3 HTTP driver
> 
> **POST** `/v3/xdc/web3/{xApiKey}`



[[Back to top]](#)

---

