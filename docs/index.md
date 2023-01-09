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

// TestNet
(new \Tatum\Sdk())->testnet()->local()->wallet();

// MainNet
(new \Tatum\Sdk())->mainnet()->local()->wallet();
```

Blockchain | Method | Description
------------ | ------------- | -------------
*bitcoin()* | [**generate Wallet()**](./Local/Wallet/Bitcoin.md#generatewallet) | Generate wallet
*bitcoin()* | [**generate Address From Xpub()**](./Local/Wallet/Bitcoin.md#generateaddressfromxpub) | Generate address from xPub and index
*bitcoin()* | [**generate Address From Private Key()**](./Local/Wallet/Bitcoin.md#generateaddressfromprivatekey) | Generate address from xPub and index
*bitcoin()* | [**generate Private Key()**](./Local/Wallet/Bitcoin.md#generateprivatekey) | Generate private key from mnemonic and index
*bitcoinCash()* | [**generate Wallet()**](./Local/Wallet/BitcoinCash.md#generatewallet) | Generate wallet
*bitcoinCash()* | [**generate Address From Xpub()**](./Local/Wallet/BitcoinCash.md#generateaddressfromxpub) | Generate address from xPub and index
*bitcoinCash()* | [**generate Address From Private Key()**](./Local/Wallet/BitcoinCash.md#generateaddressfromprivatekey) | Generate address from xPub and index
*bitcoinCash()* | [**generate Private Key()**](./Local/Wallet/BitcoinCash.md#generateprivatekey) | Generate private key from mnemonic and index
*dogecoin()* | [**generate Wallet()**](./Local/Wallet/Dogecoin.md#generatewallet) | Generate wallet
*dogecoin()* | [**generate Address From Xpub()**](./Local/Wallet/Dogecoin.md#generateaddressfromxpub) | Generate address from xPub and index
*dogecoin()* | [**generate Address From Private Key()**](./Local/Wallet/Dogecoin.md#generateaddressfromprivatekey) | Generate address from xPub and index
*dogecoin()* | [**generate Private Key()**](./Local/Wallet/Dogecoin.md#generateprivatekey) | Generate private key from mnemonic and index
*litecoin()* | [**generate Wallet()**](./Local/Wallet/Litecoin.md#generatewallet) | Generate wallet
*litecoin()* | [**generate Address From Xpub()**](./Local/Wallet/Litecoin.md#generateaddressfromxpub) | Generate address from xPub and index
*litecoin()* | [**generate Address From Private Key()**](./Local/Wallet/Litecoin.md#generateaddressfromprivatekey) | Generate address from xPub and index
*litecoin()* | [**generate Private Key()**](./Local/Wallet/Litecoin.md#generateprivatekey) | Generate private key from mnemonic and index
*ethereum()* | [**generate Wallet()**](./Local/Wallet/Ethereum.md#generatewallet) | Generate wallet
*ethereum()* | [**generate Address From Xpub()**](./Local/Wallet/Ethereum.md#generateaddressfromxpub) | Generate address from xPub and index
*ethereum()* | [**generate Address From Private Key()**](./Local/Wallet/Ethereum.md#generateaddressfromprivatekey) | Generate address from xPub and index
*ethereum()* | [**generate Private Key()**](./Local/Wallet/Ethereum.md#generateprivatekey) | Generate private key from mnemonic and index
*bsc()* | [**generate Wallet()**](./Local/Wallet/BSC.md#generatewallet) | Generate wallet
*bsc()* | [**generate Address From Xpub()**](./Local/Wallet/BSC.md#generateaddressfromxpub) | Generate address from xPub and index
*bsc()* | [**generate Address From Private Key()**](./Local/Wallet/BSC.md#generateaddressfromprivatekey) | Generate address from xPub and index
*bsc()* | [**generate Private Key()**](./Local/Wallet/BSC.md#generateprivatekey) | Generate private key from mnemonic and index
*celo()* | [**generate Wallet()**](./Local/Wallet/Celo.md#generatewallet) | Generate wallet
*celo()* | [**generate Address From Xpub()**](./Local/Wallet/Celo.md#generateaddressfromxpub) | Generate address from xPub and index
*celo()* | [**generate Address From Private Key()**](./Local/Wallet/Celo.md#generateaddressfromprivatekey) | Generate address from xPub and index
*celo()* | [**generate Private Key()**](./Local/Wallet/Celo.md#generateprivatekey) | Generate private key from mnemonic and index
*harmony()* | [**generate Wallet()**](./Local/Wallet/Harmony.md#generatewallet) | Generate wallet
*harmony()* | [**generate Address From Xpub()**](./Local/Wallet/Harmony.md#generateaddressfromxpub) | Generate address from xPub and index
*harmony()* | [**generate Address From Private Key()**](./Local/Wallet/Harmony.md#generateaddressfromprivatekey) | Generate address from xPub and index
*harmony()* | [**generate Private Key()**](./Local/Wallet/Harmony.md#generateprivatekey) | Generate private key from mnemonic and index
*kcs()* | [**generate Wallet()**](./Local/Wallet/KCS.md#generatewallet) | Generate wallet
*kcs()* | [**generate Address From Xpub()**](./Local/Wallet/KCS.md#generateaddressfromxpub) | Generate address from xPub and index
*kcs()* | [**generate Address From Private Key()**](./Local/Wallet/KCS.md#generateaddressfromprivatekey) | Generate address from xPub and index
*kcs()* | [**generate Private Key()**](./Local/Wallet/KCS.md#generateprivatekey) | Generate private key from mnemonic and index
*klaytn()* | [**generate Wallet()**](./Local/Wallet/Klaytn.md#generatewallet) | Generate wallet
*klaytn()* | [**generate Address From Xpub()**](./Local/Wallet/Klaytn.md#generateaddressfromxpub) | Generate address from xPub and index
*klaytn()* | [**generate Address From Private Key()**](./Local/Wallet/Klaytn.md#generateaddressfromprivatekey) | Generate address from xPub and index
*klaytn()* | [**generate Private Key()**](./Local/Wallet/Klaytn.md#generateprivatekey) | Generate private key from mnemonic and index
*polygon()* | [**generate Wallet()**](./Local/Wallet/Polygon.md#generatewallet) | Generate wallet
*polygon()* | [**generate Address From Xpub()**](./Local/Wallet/Polygon.md#generateaddressfromxpub) | Generate address from xPub and index
*polygon()* | [**generate Address From Private Key()**](./Local/Wallet/Polygon.md#generateaddressfromprivatekey) | Generate address from xPub and index
*polygon()* | [**generate Private Key()**](./Local/Wallet/Polygon.md#generateprivatekey) | Generate private key from mnemonic and index
*tron()* | [**generate Wallet()**](./Local/Wallet/Tron.md#generatewallet) | Generate wallet
*tron()* | [**generate Address From Xpub()**](./Local/Wallet/Tron.md#generateaddressfromxpub) | Generate address from xPub and index
*tron()* | [**generate Address From Private Key()**](./Local/Wallet/Tron.md#generateaddressfromprivatekey) | Generate address from xPub and index
*tron()* | [**generate Private Key()**](./Local/Wallet/Tron.md#generateprivatekey) | Generate private key from mnemonic and index
*vechain()* | [**generate Wallet()**](./Local/Wallet/VeChain.md#generatewallet) | Generate wallet
*vechain()* | [**generate Address From Xpub()**](./Local/Wallet/VeChain.md#generateaddressfromxpub) | Generate address from xPub and index
*vechain()* | [**generate Address From Private Key()**](./Local/Wallet/VeChain.md#generateaddressfromprivatekey) | Generate address from xPub and index
*vechain()* | [**generate Private Key()**](./Local/Wallet/VeChain.md#generateprivatekey) | Generate private key from mnemonic and index
*xdc()* | [**generate Wallet()**](./Local/Wallet/XDC.md#generatewallet) | Generate wallet
*xdc()* | [**generate Address From Xpub()**](./Local/Wallet/XDC.md#generateaddressfromxpub) | Generate address from xPub and index
*xdc()* | [**generate Address From Private Key()**](./Local/Wallet/XDC.md#generateaddressfromprivatekey) | Generate address from xPub and index
*xdc()* | [**generate Private Key()**](./Local/Wallet/XDC.md#generateprivatekey) | Generate private key from mnemonic and index

[[Back to top]](#) 

### Local Transaction

Local Transaction Signing

You can access any of the Local Transaction endpoints with the following syntax:

```php
<?php

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
*account()* | [**activate Account()**](./Api/AccountApi.md#activateaccount) | Activate account
*account()* | [**block Amount()**](./Api/AccountApi.md#blockamount) | Block an amount in an account
*account()* | [**create Account()**](./Api/AccountApi.md#createaccount) | Create a virtual account
*account()* | [**create Account Batch()**](./Api/AccountApi.md#createaccountbatch) | Create multiple accounts in a batch call
*account()* | [**create Account Xpub()**](./Api/AccountApi.md#createaccountxpub) | Create a virtual account
*account()* | [**deactivate Account()**](./Api/AccountApi.md#deactivateaccount) | Deactivate account
*account()* | [**delete All Block Amount()**](./Api/AccountApi.md#deleteallblockamount) | Unblock all blocked amounts in an account
*account()* | [**delete Block Amount()**](./Api/AccountApi.md#deleteblockamount) | Unblock a blocked amount in an account
*account()* | [**freeze Account()**](./Api/AccountApi.md#freezeaccount) | Freeze account
*account()* | [**get Account Balance()**](./Api/AccountApi.md#getaccountbalance) | Get account balance
*account()* | [**get Account By Account Id()**](./Api/AccountApi.md#getaccountbyaccountid) | Get account by ID
*account()* | [**get Accounts()**](./Api/AccountApi.md#getaccounts) | List all accounts
*account()* | [**get Accounts By Customer Id()**](./Api/AccountApi.md#getaccountsbycustomerid) | List all customer accounts
*account()* | [**get Accounts Count()**](./Api/AccountApi.md#getaccountscount) | Count of found entities for get accounts request
*account()* | [**get Block Amount()**](./Api/AccountApi.md#getblockamount) | Get blocked amounts in an account
*account()* | [**get Block Amount By Id()**](./Api/AccountApi.md#getblockamountbyid) | Get blocked amount by ID
*account()* | [**unblock Amount With Transaction()**](./Api/AccountApi.md#unblockamountwithtransaction) | Unblock an amount in an account and perform a transaction
*account()* | [**unfreeze Account()**](./Api/AccountApi.md#unfreezeaccount) | Unfreeze account
*account()* | [**update Account By Account Id()**](./Api/AccountApi.md#updateaccountbyaccountid) | Update account
*algorand()* | [**algo Node Get Driver()**](./Api/AlgorandApi.md#algonodegetdriver) | Access Algorand Algod GET node endpoints
*algorand()* | [**algo Node Indexer Get Driver()**](./Api/AlgorandApi.md#algonodeindexergetdriver) | Access Algorand Indexer GET node endpoints
*algorand()* | [**algo Node Post Driver()**](./Api/AlgorandApi.md#algonodepostdriver) | Access Algorand Algod POST node endpoints
*algorand()* | [**algoand Broadcast()**](./Api/AlgorandApi.md#algoandbroadcast) | Broadcast signed Algorand transaction
*algorand()* | [**algorand Generate Address()**](./Api/AlgorandApi.md#algorandgenerateaddress) | Generate Algorand account address from private key
*algorand()* | [**algorand Generate Wallet()**](./Api/AlgorandApi.md#algorandgeneratewallet) | Generate Algorand wallet
*algorand()* | [**algorand Get Balance()**](./Api/AlgorandApi.md#algorandgetbalance) | Get Algorand Account balance
*algorand()* | [**algorand Get Block()**](./Api/AlgorandApi.md#algorandgetblock) | Get Algorand block by block round number
*algorand()* | [**algorand Get Current Block()**](./Api/AlgorandApi.md#algorandgetcurrentblock) | Get current block number
*algorand()* | [**algorand Get Pay Transactions By From To()**](./Api/AlgorandApi.md#algorandgetpaytransactionsbyfromto) | Get Algorand Transactions between from and to
*algorand()* | [**algorand Get Transaction()**](./Api/AlgorandApi.md#algorandgettransaction) | Get Algorand Transaction
*algorand()* | [**receive Algorand Asset()**](./Api/AlgorandApi.md#receivealgorandasset) | Enable receiving asset on account
*algorand()* | [**receive Algorand Asset KMS()**](./Api/AlgorandApi.md#receivealgorandassetkms) | Enable receiving asset on account
*algorand()* | [**transfer Algorand Blockchain()**](./Api/AlgorandApi.md#transferalgorandblockchain) | Send Algos to an Algorand account
*algorand()* | [**transfer Algorand Blockchain KMS()**](./Api/AlgorandApi.md#transferalgorandblockchainkms) | Send Algos to an Algorand account
*auction()* | [**approve Nft Spending()**](./Api/AuctionApi.md#approvenftspending) | Allow the NFT auction or marketplace to transfer an asset
*auction()* | [**approve Nft Spending Celo()**](./Api/AuctionApi.md#approvenftspendingcelo) | Allow the NFT auction or marketplace to transfer an asset
*auction()* | [**approve Nft Spending Celo KMS()**](./Api/AuctionApi.md#approvenftspendingcelokms) | Allow the NFT auction or marketplace to transfer an asset
*auction()* | [**approve Nft Spending KMS()**](./Api/AuctionApi.md#approvenftspendingkms) | Allow the NFT auction or marketplace to transfer an asset
*auction()* | [**bid On Auction()**](./Api/AuctionApi.md#bidonauction) | Bid for an asset at the NFT auction
*auction()* | [**bid On Auction Celo()**](./Api/AuctionApi.md#bidonauctioncelo) | Bid for an asset at the NFT auction
*auction()* | [**bid On Auction Celo KMS()**](./Api/AuctionApi.md#bidonauctioncelokms) | Bid for an asset at the NFT auction
*auction()* | [**bid On Auction KMS()**](./Api/AuctionApi.md#bidonauctionkms) | Bid for an asset at the NFT auction
*auction()* | [**blo Auc Update Fee Recipient()**](./Api/AuctionApi.md#bloaucupdatefeerecipient) | Update the recipient of the NFT auction fee
*auction()* | [**blo Auc Update Fee Recipient Celo()**](./Api/AuctionApi.md#bloaucupdatefeerecipientcelo) | Update the recipient of the NFT auction fee
*auction()* | [**blo Auc Update Fee Recipient Celo KMS()**](./Api/AuctionApi.md#bloaucupdatefeerecipientcelokms) | Update the recipient of the NFT auction fee
*auction()* | [**blo Auc Update Fee Recipient KMS()**](./Api/AuctionApi.md#bloaucupdatefeerecipientkms) | Update the recipient of the NFT auction fee
*auction()* | [**cancel Auction()**](./Api/AuctionApi.md#cancelauction) | Cancel the selling of an asset at the NFT auction
*auction()* | [**cancel Auction Celo()**](./Api/AuctionApi.md#cancelauctioncelo) | Cancel the selling of an asset at the NFT auction
*auction()* | [**cancel Auction Celo KMS()**](./Api/AuctionApi.md#cancelauctioncelokms) | Cancel the selling of an asset at the NFT auction
*auction()* | [**cancel Auction KMS()**](./Api/AuctionApi.md#cancelauctionkms) | Cancel the selling of an asset at the NFT auction
*auction()* | [**create Auction()**](./Api/AuctionApi.md#createauction) | Sell an asset at the NFT auction
*auction()* | [**create Auction Celo()**](./Api/AuctionApi.md#createauctioncelo) | Sell an asset at the NFT auction
*auction()* | [**create Auction Celo KMS()**](./Api/AuctionApi.md#createauctioncelokms) | Sell an asset at the NFT auction
*auction()* | [**create Auction KMS()**](./Api/AuctionApi.md#createauctionkms) | Sell an asset at the NFT auction
*auction()* | [**generate Auction()**](./Api/AuctionApi.md#generateauction) | Create an NFT auction
*auction()* | [**generate Auction Celo()**](./Api/AuctionApi.md#generateauctioncelo) | Create an NFT auction
*auction()* | [**generate Auction Celo KMS()**](./Api/AuctionApi.md#generateauctioncelokms) | Create an NFT auction
*auction()* | [**generate Auction KMS()**](./Api/AuctionApi.md#generateauctionkms) | Create an NFT auction
*auction()* | [**get Auction()**](./Api/AuctionApi.md#getauction) | Get information about an auctioned asset at the NFT auction
*auction()* | [**get Auction Fee()**](./Api/AuctionApi.md#getauctionfee) | Get the NFT auction fee
*auction()* | [**get Auction Fee Recipient()**](./Api/AuctionApi.md#getauctionfeerecipient) | Get the recipient of the NFT auction fee
*auction()* | [**settle Auction()**](./Api/AuctionApi.md#settleauction) | Settle an NFT auction
*auction()* | [**settle Auction Celo()**](./Api/AuctionApi.md#settleauctioncelo) | Settle an NFT auction
*auction()* | [**settle Auction Celo KMS()**](./Api/AuctionApi.md#settleauctioncelokms) | Settle an NFT auction
*auction()* | [**settle Auction KMS()**](./Api/AuctionApi.md#settleauctionkms) | Settle an NFT auction
*auction()* | [**update Fee Auction()**](./Api/AuctionApi.md#updatefeeauction) | Update the NFT auction fee
*auction()* | [**update Fee Auction Celo()**](./Api/AuctionApi.md#updatefeeauctioncelo) | Update the NFT auction fee
*auction()* | [**update Fee Auction Celo KMS()**](./Api/AuctionApi.md#updatefeeauctioncelokms) | Update the NFT auction fee
*auction()* | [**update Fee Auction KMS()**](./Api/AuctionApi.md#updatefeeauctionkms) | Update the NFT auction fee
*bNBBeaconChain()* | [**bnb Broadcast()**](./Api/BNBBeaconChainApi.md#bnbbroadcast) | Broadcast signed BNB transaction
*bNBBeaconChain()* | [**bnb Generate Wallet()**](./Api/BNBBeaconChainApi.md#bnbgeneratewallet) | Generate Binance wallet
*bNBBeaconChain()* | [**bnb Get Account()**](./Api/BNBBeaconChainApi.md#bnbgetaccount) | Get Binance Account
*bNBBeaconChain()* | [**bnb Get Block()**](./Api/BNBBeaconChainApi.md#bnbgetblock) | Get Binance Transactions in Block
*bNBBeaconChain()* | [**bnb Get Current Block()**](./Api/BNBBeaconChainApi.md#bnbgetcurrentblock) | Get Binance current block
*bNBBeaconChain()* | [**bnb Get Transaction()**](./Api/BNBBeaconChainApi.md#bnbgettransaction) | Get Binance Transaction
*bNBBeaconChain()* | [**bnb Get Tx By Account()**](./Api/BNBBeaconChainApi.md#bnbgettxbyaccount) | Get Binance Transactions By Address
*bNBBeaconChain()* | [**transfer Bnb Blockchain()**](./Api/BNBBeaconChainApi.md#transferbnbblockchain) | Send Binance / Binance Token from account to account
*bNBBeaconChain()* | [**transfer Bnb Blockchain KMS()**](./Api/BNBBeaconChainApi.md#transferbnbblockchainkms) | Send Binance / Binance Token from account to account
*bNBSmartChain()* | [**bsc Broadcast()**](./Api/BNBSmartChainApi.md#bscbroadcast) | Broadcast signed BSC transaction
*bNBSmartChain()* | [**bsc Generate Address()**](./Api/BNBSmartChainApi.md#bscgenerateaddress) | Generate BSC account address from Extended public key
*bNBSmartChain()* | [**bsc Generate Address Private Key()**](./Api/BNBSmartChainApi.md#bscgenerateaddressprivatekey) | Generate BSC private key
*bNBSmartChain()* | [**bsc Generate Wallet()**](./Api/BNBSmartChainApi.md#bscgeneratewallet) | Generate BSC wallet
*bNBSmartChain()* | [**bsc Get Balance()**](./Api/BNBSmartChainApi.md#bscgetbalance) | Get BSC Account balance
*bNBSmartChain()* | [**bsc Get Block()**](./Api/BNBSmartChainApi.md#bscgetblock) | Get BSC block by hash
*bNBSmartChain()* | [**bsc Get Current Block()**](./Api/BNBSmartChainApi.md#bscgetcurrentblock) | Get current block number
*bNBSmartChain()* | [**bsc Get Transaction()**](./Api/BNBSmartChainApi.md#bscgettransaction) | Get BSC Transaction
*bNBSmartChain()* | [**bsc Get Transaction Count()**](./Api/BNBSmartChainApi.md#bscgettransactioncount) | Get count of outgoing BSC transactions
*bNBSmartChain()* | [**bsc Web3 Driver()**](./Api/BNBSmartChainApi.md#bscweb3driver) | Web3 HTTP driver
*bNBSmartChain()* | [**call Bsc Smart Contract Method()**](./Api/BNBSmartChainApi.md#callbscsmartcontractmethod) | Invoke a method in a smart contract on BNB Smart Chain
*bNBSmartChain()* | [**call Bsc Smart Contract Method KMS()**](./Api/BNBSmartChainApi.md#callbscsmartcontractmethodkms) | Invoke a method in a smart contract on BNB Smart Chain
*bNBSmartChain()* | [**call Bsc Smart Contract Read Method()**](./Api/BNBSmartChainApi.md#callbscsmartcontractreadmethod) | Invoke a method in a smart contract on BNB Smart Chain
*bNBSmartChain()* | [**transfer Bsc Blockchain()**](./Api/BNBSmartChainApi.md#transferbscblockchain) | Send BSC / BEP20 from account to account
*bNBSmartChain()* | [**transfer Bsc Blockchain KMS()**](./Api/BNBSmartChainApi.md#transferbscblockchainkms) | Send BSC / BEP20 from account to account
*bitcoin()* | [**btc Broadcast()**](./Api/BitcoinApi.md#btcbroadcast) | Broadcast a signed Bitcoin transaction
*bitcoin()* | [**btc Generate Address()**](./Api/BitcoinApi.md#btcgenerateaddress) | Generate a Bitcoin address from the wallet&#39;s extended public key
*bitcoin()* | [**btc Generate Address Private Key()**](./Api/BitcoinApi.md#btcgenerateaddressprivatekey) | Generate the private key for a Bitcoin address
*bitcoin()* | [**btc Generate Wallet()**](./Api/BitcoinApi.md#btcgeneratewallet) | Generate a Bitcoin wallet
*bitcoin()* | [**btc Get Balance Of Address()**](./Api/BitcoinApi.md#btcgetbalanceofaddress) | Get the balance of a Bitcoin address
*bitcoin()* | [**btc Get Block()**](./Api/BitcoinApi.md#btcgetblock) | Get a Bitcoin block by its hash or height
*bitcoin()* | [**btc Get Block Chain Info()**](./Api/BitcoinApi.md#btcgetblockchaininfo) | Get Bitcoin blockchain information
*bitcoin()* | [**btc Get Block Hash()**](./Api/BitcoinApi.md#btcgetblockhash) | Get the hash of a Bitcoin block
*bitcoin()* | [**btc Get Mempool()**](./Api/BitcoinApi.md#btcgetmempool) | Get transactions from the Bitcoin mempool
*bitcoin()* | [**btc Get Raw Transaction()**](./Api/BitcoinApi.md#btcgetrawtransaction) | Get a Bitcoin transaction by its hash
*bitcoin()* | [**btc Get Tx By Address()**](./Api/BitcoinApi.md#btcgettxbyaddress) | Get all transactions for a Bitcoin address
*bitcoin()* | [**btc Get UTXO()**](./Api/BitcoinApi.md#btcgetutxo) | Get information about a transaction output (UTXO) in a Bitcoin transaction
*bitcoin()* | [**btc Rpc Driver()**](./Api/BitcoinApi.md#btcrpcdriver) | Connect to a Bitcoin node through an RPC driver
*bitcoin()* | [**btc Transaction From Address()**](./Api/BitcoinApi.md#btctransactionfromaddress) | Send BTC to Bitcoin addresses
*bitcoin()* | [**btc Transaction From Address KMS()**](./Api/BitcoinApi.md#btctransactionfromaddresskms) | Send BTC to Bitcoin addresses
*bitcoin()* | [**btc Transaction From UTXO()**](./Api/BitcoinApi.md#btctransactionfromutxo) | Send BTC to Bitcoin addresses
*bitcoin()* | [**btc Transaction From UTXOKMS()**](./Api/BitcoinApi.md#btctransactionfromutxokms) | Send BTC to Bitcoin addresses
*bitcoinCash()* | [**bch Broadcast()**](./Api/BitcoinCashApi.md#bchbroadcast) | Broadcast signed Bitcoin Cash transaction
*bitcoinCash()* | [**bch Generate Address()**](./Api/BitcoinCashApi.md#bchgenerateaddress) | Generate Bitcoin Cash deposit address from Extended public key
*bitcoinCash()* | [**bch Generate Address Private Key()**](./Api/BitcoinCashApi.md#bchgenerateaddressprivatekey) | Generate Bitcoin Cash private key
*bitcoinCash()* | [**bch Generate Wallet()**](./Api/BitcoinCashApi.md#bchgeneratewallet) | Generate Bitcoin Cash wallet
*bitcoinCash()* | [**bch Get Block()**](./Api/BitcoinCashApi.md#bchgetblock) | Get Bitcoin Cash Block by hash
*bitcoinCash()* | [**bch Get Block Chain Info()**](./Api/BitcoinCashApi.md#bchgetblockchaininfo) | Get Bitcoin Cash Blockchain Information
*bitcoinCash()* | [**bch Get Block Hash()**](./Api/BitcoinCashApi.md#bchgetblockhash) | Get Bitcoin Cash Block hash
*bitcoinCash()* | [**bch Get Raw Transaction()**](./Api/BitcoinCashApi.md#bchgetrawtransaction) | Get Bitcoin Cash Transaction by hash
*bitcoinCash()* | [**bch Get Tx By Address()**](./Api/BitcoinCashApi.md#bchgettxbyaddress) | Get Bitcoin Cash Transactions by address
*bitcoinCash()* | [**bch Rpc Driver()**](./Api/BitcoinCashApi.md#bchrpcdriver) | JSON RPC HTTP driver
*bitcoinCash()* | [**bch Transaction()**](./Api/BitcoinCashApi.md#bchtransaction) | Send BCH to Bitcoin Cash addresses
*bitcoinCash()* | [**bch Transaction KMS()**](./Api/BitcoinCashApi.md#bchtransactionkms) | Send BCH to Bitcoin Cash addresses
*blockchainAddresses()* | [**address Exists()**](./Api/BlockchainAddressesApi.md#addressexists) | Check whether a blockchain address is assigned to a virtual account
*blockchainAddresses()* | [**assign Address()**](./Api/BlockchainAddressesApi.md#assignaddress) | Assign a blockchain address to a virtual account
*blockchainAddresses()* | [**generate Deposit Address()**](./Api/BlockchainAddressesApi.md#generatedepositaddress) | Create a deposit address for a virtual account
*blockchainAddresses()* | [**generate Deposit Addresses Batch()**](./Api/BlockchainAddressesApi.md#generatedepositaddressesbatch) | Create multiple deposit addresses for a virtual account
*blockchainAddresses()* | [**get All Deposit Addresses()**](./Api/BlockchainAddressesApi.md#getalldepositaddresses) | Get all deposit addresses for a virtual account
*blockchainAddresses()* | [**remove Address()**](./Api/BlockchainAddressesApi.md#removeaddress) | Remove a deposit address from a virtual account
*blockchainFees()* | [**bsc Estimate Gas()**](./Api/BlockchainFeesApi.md#bscestimategas) | Estimate BNB Smart Chain transaction fees
*blockchainFees()* | [**celo Estimate Gas()**](./Api/BlockchainFeesApi.md#celoestimategas) | Estimate Celo Chain transaction fees
*blockchainFees()* | [**egld Estimate Gas()**](./Api/BlockchainFeesApi.md#egldestimategas) | Estimate EGLD transaction fees
*blockchainFees()* | [**estimate Fee()**](./Api/BlockchainFeesApi.md#estimatefee) | Estimate the fee for a transaction
*blockchainFees()* | [**estimate Fee Batch Mint Nft()**](./Api/BlockchainFeesApi.md#estimatefeebatchmintnft) | Estimate the fee for a transaction
*blockchainFees()* | [**estimate Fee Deploy Custodial Wallet()**](./Api/BlockchainFeesApi.md#estimatefeedeploycustodialwallet) | Estimate the fee for a transaction
*blockchainFees()* | [**estimate Fee From Address()**](./Api/BlockchainFeesApi.md#estimatefeefromaddress) | Estimate the fee for a transaction
*blockchainFees()* | [**estimate Fee From UTXO()**](./Api/BlockchainFeesApi.md#estimatefeefromutxo) | Estimate the fee for a transaction
*blockchainFees()* | [**estimate Fee Transfer From Custodial()**](./Api/BlockchainFeesApi.md#estimatefeetransferfromcustodial) | Estimate the fee for a transaction
*blockchainFees()* | [**eth Estimate Gas()**](./Api/BlockchainFeesApi.md#ethestimategas) | Estimate Ethereum transaction fees
*blockchainFees()* | [**eth Estimate Gas Batch()**](./Api/BlockchainFeesApi.md#ethestimategasbatch) | Estimate multiple Ethereum transaction fees
*blockchainFees()* | [**get Blockchain Fee()**](./Api/BlockchainFeesApi.md#getblockchainfee) | Get recommended blockchain fee / gas price
*blockchainFees()* | [**kcs Estimate Gas()**](./Api/BlockchainFeesApi.md#kcsestimategas) | Estimate KuCoin Community Chain transaction fees
*blockchainFees()* | [**klaytn Estimate Gas()**](./Api/BlockchainFeesApi.md#klaytnestimategas) | Estimate Klaytn transaction fees
*blockchainFees()* | [**polygon Estimate Gas()**](./Api/BlockchainFeesApi.md#polygonestimategas) | Estimate Polygon transaction fees
*blockchainFees()* | [**vet Estimate Gas()**](./Api/BlockchainFeesApi.md#vetestimategas) | Estimate VeChain Gas for transaction
*blockchainFees()* | [**xdc Estimate Gas()**](./Api/BlockchainFeesApi.md#xdcestimategas) | Estimate XinFin transaction fees
*blockchainOperations()* | [**bnb Asset Offchain()**](./Api/BlockchainOperationsApi.md#bnbassetoffchain) | Create a BNB-based asset
*blockchainOperations()* | [**deploy Algo Erc20 Offchain KMSAddress()**](./Api/BlockchainOperationsApi.md#deployalgoerc20offchainkmsaddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Algo Erc20 Offchain Mnemonic Address()**](./Api/BlockchainOperationsApi.md#deployalgoerc20offchainmnemonicaddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Algo Erc20 Offchain PKAddress()**](./Api/BlockchainOperationsApi.md#deployalgoerc20offchainpkaddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Celo Erc20 Offchain KMSAddress()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainkmsaddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Celo Erc20 Offchain KMSXpub()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainkmsxpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Celo Erc20 Offchain Mnem Xpub()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainmnemxpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Celo Erc20 Offchain Mnemonic Address()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainmnemonicaddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Celo Erc20 Offchain PKAddress()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainpkaddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Celo Erc20 Offchain PKXpub()**](./Api/BlockchainOperationsApi.md#deployceloerc20offchainpkxpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Erc20 Offchain KMSAddress()**](./Api/BlockchainOperationsApi.md#deployerc20offchainkmsaddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Erc20 Offchain KMSXpub()**](./Api/BlockchainOperationsApi.md#deployerc20offchainkmsxpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Erc20 Offchain Mnem Xpub()**](./Api/BlockchainOperationsApi.md#deployerc20offchainmnemxpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Erc20 Offchain Mnemonic Address()**](./Api/BlockchainOperationsApi.md#deployerc20offchainmnemonicaddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Erc20 Offchain PKAddress()**](./Api/BlockchainOperationsApi.md#deployerc20offchainpkaddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Erc20 Offchain PKXpub()**](./Api/BlockchainOperationsApi.md#deployerc20offchainpkxpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy KCSErc20 Offchain KMSAddress()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainkmsaddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy KCSErc20 Offchain KMSXpub()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainkmsxpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy KCSErc20 Offchain Mnem Xpub()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainmnemxpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy KCSErc20 Offchain Mnemonic Address()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainmnemonicaddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy KCSErc20 Offchain PKAddress()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainpkaddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy KCSErc20 Offchain PKXpub()**](./Api/BlockchainOperationsApi.md#deploykcserc20offchainpkxpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Trc Offchain KMSAddress()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainkmsaddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Trc Offchain KMSXpub()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainkmsxpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Trc Offchain Mnem Xpub()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainmnemxpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Trc Offchain Mnemonic Address()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainmnemonicaddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Trc Offchain PKAddress()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainpkaddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**deploy Trc Offchain PKXpub()**](./Api/BlockchainOperationsApi.md#deploytrcoffchainpkxpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**erc20()**](./Api/BlockchainOperationsApi.md#erc20) | Register a new Ethereum ERC-20 token in the virtual account
*blockchainOperations()* | [**erc20 Address()**](./Api/BlockchainOperationsApi.md#erc20address) | Register a new Ethereum ERC-20 token in the virtual account
*blockchainOperations()* | [**off Bsc Deploy Erc20 Offchain KMSAddress()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainkmsaddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Bsc Deploy Erc20 Offchain KMSXpub()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainkmsxpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Bsc Deploy Erc20 Offchain Mnem Xpub()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainmnemxpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Bsc Deploy Erc20 Offchain Mnemonic Address()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainmnemonicaddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Bsc Deploy Erc20 Offchain PKAddress()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainpkaddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Bsc Deploy Erc20 Offchain PKXpub()**](./Api/BlockchainOperationsApi.md#offbscdeployerc20offchainpkxpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Bsc Erc20()**](./Api/BlockchainOperationsApi.md#offbscerc20) | Register a new BNB Smart Chain BEP-20 token in the virtual account
*blockchainOperations()* | [**off Bsc Erc20 Address()**](./Api/BlockchainOperationsApi.md#offbscerc20address) | Register a new BNB Smart Chain BEP-20 token in the virtual account
*blockchainOperations()* | [**off Cel Erc20()**](./Api/BlockchainOperationsApi.md#offcelerc20) | Register a new Celo ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**off Cel Erc20 Address()**](./Api/BlockchainOperationsApi.md#offcelerc20address) | Register a new Celo ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**off Egl Transfer Eth()**](./Api/BlockchainOperationsApi.md#offegltransfereth) | Send EGLD from a virtual account to the blockchain
*blockchainOperations()* | [**off Egl Transfer Eth KMS()**](./Api/BlockchainOperationsApi.md#offegltransferethkms) | Send EGLD from a virtual account to the blockchain
*blockchainOperations()* | [**off Egl Transfer Eth Mnemonic()**](./Api/BlockchainOperationsApi.md#offegltransferethmnemonic) | Send EGLD from a virtual account to the blockchain
*blockchainOperations()* | [**off Kla Deploy Erc20 Offchain KMSAddress()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainkmsaddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Kla Deploy Erc20 Offchain KMSXpub()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainkmsxpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Kla Deploy Erc20 Offchain Mnem Xpub()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainmnemxpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Kla Deploy Erc20 Offchain Mnemonic Address()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainmnemonicaddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Kla Deploy Erc20 Offchain PKAddress()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainpkaddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Kla Deploy Erc20 Offchain PKXpub()**](./Api/BlockchainOperationsApi.md#offkladeployerc20offchainpkxpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Kla Transfer Eth()**](./Api/BlockchainOperationsApi.md#offklatransfereth) | Send KLAY from a virtual account to the blockchain
*blockchainOperations()* | [**off Kla Transfer Eth KMS()**](./Api/BlockchainOperationsApi.md#offklatransferethkms) | Send KLAY from a virtual account to the blockchain
*blockchainOperations()* | [**off Kla Transfer Eth Mnemonic()**](./Api/BlockchainOperationsApi.md#offklatransferethmnemonic) | Send KLAY from a virtual account to the blockchain
*blockchainOperations()* | [**off One Deploy Erc20 Offchain KMSAddress()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainkmsaddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off One Deploy Erc20 Offchain KMSXpub()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainkmsxpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off One Deploy Erc20 Offchain Mnem Xpub()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainmnemxpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off One Deploy Erc20 Offchain Mnemonic Address()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainmnemonicaddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off One Deploy Erc20 Offchain PKAddress()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainpkaddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off One Deploy Erc20 Offchain PKXpub()**](./Api/BlockchainOperationsApi.md#offonedeployerc20offchainpkxpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off One Erc20()**](./Api/BlockchainOperationsApi.md#offoneerc20) | Register a new Harmony HRM-20 token in the virtual account
*blockchainOperations()* | [**off One Erc20 Address()**](./Api/BlockchainOperationsApi.md#offoneerc20address) | Register a new Harmony HRM-20 token in the virtual account
*blockchainOperations()* | [**off One Transfer Eth()**](./Api/BlockchainOperationsApi.md#offonetransfereth) | Send ONE from a virtual account to the blockchain
*blockchainOperations()* | [**off One Transfer Eth KMS()**](./Api/BlockchainOperationsApi.md#offonetransferethkms) | Send ONE from a virtual account to the blockchain
*blockchainOperations()* | [**off One Transfer Eth Mnemonic()**](./Api/BlockchainOperationsApi.md#offonetransferethmnemonic) | Send ONE from a virtual account to the blockchain
*blockchainOperations()* | [**off Pol Transfer Eth()**](./Api/BlockchainOperationsApi.md#offpoltransfereth) | Send MATIC from a virtual account to the blockchain
*blockchainOperations()* | [**off Pol Transfer Eth KMS()**](./Api/BlockchainOperationsApi.md#offpoltransferethkms) | Send MATIC from a virtual account to the blockchain
*blockchainOperations()* | [**off Pol Transfer Eth Mnemonic()**](./Api/BlockchainOperationsApi.md#offpoltransferethmnemonic) | Send MATIC from a virtual account to the blockchain
*blockchainOperations()* | [**off Tok Erc20()**](./Api/BlockchainOperationsApi.md#offtokerc20) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**off Tok Erc20 Address()**](./Api/BlockchainOperationsApi.md#offtokerc20address) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**off Xdc Deploy Erc20 Offchain KMSAddress()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainkmsaddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Xdc Deploy Erc20 Offchain KMSXpub()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainkmsxpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Xdc Deploy Erc20 Offchain Mnem Xpub()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainmnemxpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Xdc Deploy Erc20 Offchain Mnemonic Address()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainmnemonicaddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Xdc Deploy Erc20 Offchain PKAddress()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainpkaddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Xdc Deploy Erc20 Offchain PKXpub()**](./Api/BlockchainOperationsApi.md#offxdcdeployerc20offchainpkxpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**off Xdc Erc20()**](./Api/BlockchainOperationsApi.md#offxdcerc20) | Register a new XinFin ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**off Xdc Erc20 Address()**](./Api/BlockchainOperationsApi.md#offxdcerc20address) | Register a new XinFin ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**off Xdc Transfer Eth()**](./Api/BlockchainOperationsApi.md#offxdctransfereth) | Send XDC from a virtual account to the blockchain
*blockchainOperations()* | [**off Xdc Transfer Eth KMS()**](./Api/BlockchainOperationsApi.md#offxdctransferethkms) | Send XDC from a virtual account to the blockchain
*blockchainOperations()* | [**off Xdc Transfer Eth Mnemonic()**](./Api/BlockchainOperationsApi.md#offxdctransferethmnemonic) | Send XDC from a virtual account to the blockchain
*blockchainOperations()* | [**store Celo Erc20 Address()**](./Api/BlockchainOperationsApi.md#storeceloerc20address) | Set the contract address of a Celo ERC-20-equivalent token
*blockchainOperations()* | [**store Token Address()**](./Api/BlockchainOperationsApi.md#storetokenaddress) | Set the contract address of an ERC-20, ERC-20-equivalent, or TRC-10 token
*blockchainOperations()* | [**store Trc Address()**](./Api/BlockchainOperationsApi.md#storetrcaddress) | Set the contract address of a TRC-10 or TRC-20 token
*blockchainOperations()* | [**transfer Ada KMS()**](./Api/BlockchainOperationsApi.md#transferadakms) | Send ADA from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Ada Key Pair()**](./Api/BlockchainOperationsApi.md#transferadakeypair) | Send ADA from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Ada Mnemonic()**](./Api/BlockchainOperationsApi.md#transferadamnemonic) | Send ADA from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Algo()**](./Api/BlockchainOperationsApi.md#transferalgo) | Send ALGO from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Algo Erc20()**](./Api/BlockchainOperationsApi.md#transferalgoerc20) | Send ALGO from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Algo KMS()**](./Api/BlockchainOperationsApi.md#transferalgokms) | Send ALGO from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Bch KMS()**](./Api/BlockchainOperationsApi.md#transferbchkms) | Send BCH from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Bch Key Pair()**](./Api/BlockchainOperationsApi.md#transferbchkeypair) | Send BCH from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Bch Mnemonic()**](./Api/BlockchainOperationsApi.md#transferbchmnemonic) | Send BCH from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Bnb()**](./Api/BlockchainOperationsApi.md#transferbnb) | Send BNB from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Bnb KMS()**](./Api/BlockchainOperationsApi.md#transferbnbkms) | Send BNB from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Bsc()**](./Api/BlockchainOperationsApi.md#transferbsc) | Send BSC from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Bsc KMS()**](./Api/BlockchainOperationsApi.md#transferbsckms) | Send BSC from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Bsc Mnemonic()**](./Api/BlockchainOperationsApi.md#transferbscmnemonic) | Send BSC from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Btc KMS()**](./Api/BlockchainOperationsApi.md#transferbtckms) | Send BTC from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Btc Key Pair()**](./Api/BlockchainOperationsApi.md#transferbtckeypair) | Send BTC from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Btc Mnemonic()**](./Api/BlockchainOperationsApi.md#transferbtcmnemonic) | Send BTC from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Celo()**](./Api/BlockchainOperationsApi.md#transfercelo) | Send CELO from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Celo KMS()**](./Api/BlockchainOperationsApi.md#transfercelokms) | Send CELO from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Celo Mnemonic()**](./Api/BlockchainOperationsApi.md#transfercelomnemonic) | Send CELO from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Doge KMS()**](./Api/BlockchainOperationsApi.md#transferdogekms) | Send DOGE from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Doge Key Pair()**](./Api/BlockchainOperationsApi.md#transferdogekeypair) | Send DOGE from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Doge Mnemonic()**](./Api/BlockchainOperationsApi.md#transferdogemnemonic) | Send DOGE from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Erc20()**](./Api/BlockchainOperationsApi.md#transfererc20) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Erc20 KMS()**](./Api/BlockchainOperationsApi.md#transfererc20kms) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Erc20 Mnemonic()**](./Api/BlockchainOperationsApi.md#transfererc20mnemonic) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Eth()**](./Api/BlockchainOperationsApi.md#transfereth) | Send ETH from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Eth KMS()**](./Api/BlockchainOperationsApi.md#transferethkms) | Send ETH from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Eth Mnemonic()**](./Api/BlockchainOperationsApi.md#transferethmnemonic) | Send ETH from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Flow KMS()**](./Api/BlockchainOperationsApi.md#transferflowkms) | Send FLOW from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Flow Mnemonic()**](./Api/BlockchainOperationsApi.md#transferflowmnemonic) | Send FLOW from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Flow PK()**](./Api/BlockchainOperationsApi.md#transferflowpk) | Send FLOW from a virtual account to the blockchain
*blockchainOperations()* | [**transfer KCS()**](./Api/BlockchainOperationsApi.md#transferkcs) | Send KCS from a virtual account to the blockchain
*blockchainOperations()* | [**transfer KCSKMS()**](./Api/BlockchainOperationsApi.md#transferkcskms) | Send KCS from a virtual account to the blockchain
*blockchainOperations()* | [**transfer KCSMnemonic()**](./Api/BlockchainOperationsApi.md#transferkcsmnemonic) | Send KCS from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Ltc KMS()**](./Api/BlockchainOperationsApi.md#transferltckms) | Send LTC from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Ltc Key Pair()**](./Api/BlockchainOperationsApi.md#transferltckeypair) | Send LTC from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Ltc Mnemonic()**](./Api/BlockchainOperationsApi.md#transferltcmnemonic) | Send LTC from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Sol()**](./Api/BlockchainOperationsApi.md#transfersol) | Send SOL from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Sol KMS()**](./Api/BlockchainOperationsApi.md#transfersolkms) | Send SOL from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Tron()**](./Api/BlockchainOperationsApi.md#transfertron) | Send TRON from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Tron KMS()**](./Api/BlockchainOperationsApi.md#transfertronkms) | Send TRON from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Tron Mnemonic()**](./Api/BlockchainOperationsApi.md#transfertronmnemonic) | Send TRON from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Xlm()**](./Api/BlockchainOperationsApi.md#transferxlm) | Send XLM from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Xlm KMS()**](./Api/BlockchainOperationsApi.md#transferxlmkms) | Send XLM from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Xrp()**](./Api/BlockchainOperationsApi.md#transferxrp) | Send XRP from a virtual account to the blockchain
*blockchainOperations()* | [**transfer Xrp KMS()**](./Api/BlockchainOperationsApi.md#transferxrpkms) | Send XRP from a virtual account to the blockchain
*blockchainOperations()* | [**trc Address()**](./Api/BlockchainOperationsApi.md#trcaddress) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
*blockchainOperations()* | [**trc Xpub()**](./Api/BlockchainOperationsApi.md#trcxpub) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
*blockchainOperations()* | [**xlm Asset Offchain()**](./Api/BlockchainOperationsApi.md#xlmassetoffchain) | Create an XLM-based asset
*blockchainOperations()* | [**xrp Asset Offchain()**](./Api/BlockchainOperationsApi.md#xrpassetoffchain) | Create XRP based Asset
*blockchainStorage()* | [**create Record()**](./Api/BlockchainStorageApi.md#createrecord) | Store a log record
*blockchainStorage()* | [**create Record Celo()**](./Api/BlockchainStorageApi.md#createrecordcelo) | Store a log record
*blockchainStorage()* | [**get Log()**](./Api/BlockchainStorageApi.md#getlog) | Get a log record
*blockchainUtils()* | [**get Auction Estimated Time()**](./Api/BlockchainUtilsApi.md#getauctionestimatedtime) | Estimate the block height for a future point in time
*blockchainUtils()* | [**s CGet Contract Address()**](./Api/BlockchainUtilsApi.md#scgetcontractaddress) | Get the blockchain address of a smart contract by the deployment transaction ID
*cardano()* | [**ada Broadcast()**](./Api/CardanoApi.md#adabroadcast) | Broadcast signed Ada transaction
*cardano()* | [**ada Generate Address()**](./Api/CardanoApi.md#adagenerateaddress) | Generate Ada deposit address from Extended public key
*cardano()* | [**ada Generate Address Private Key()**](./Api/CardanoApi.md#adagenerateaddressprivatekey) | Generate Ada private key
*cardano()* | [**ada Generate Wallet()**](./Api/CardanoApi.md#adageneratewallet) | Generate Ada wallet
*cardano()* | [**ada Get Account()**](./Api/CardanoApi.md#adagetaccount) | Gets a Ada account by address
*cardano()* | [**ada Get Block()**](./Api/CardanoApi.md#adagetblock) | Get Block by hash or height
*cardano()* | [**ada Get Block Chain Info()**](./Api/CardanoApi.md#adagetblockchaininfo) | Get Blockchain information
*cardano()* | [**ada Get Raw Transaction()**](./Api/CardanoApi.md#adagetrawtransaction) | Get transaction by hash
*cardano()* | [**ada Get Tx By Address()**](./Api/CardanoApi.md#adagettxbyaddress) | Get transactions by address
*cardano()* | [**ada Get UTXOBy Address()**](./Api/CardanoApi.md#adagetutxobyaddress) | Get UTXOs by address
*cardano()* | [**ada Transaction From Address()**](./Api/CardanoApi.md#adatransactionfromaddress) | Send ADA to Cardano addresses
*cardano()* | [**ada Transaction From Address KMS()**](./Api/CardanoApi.md#adatransactionfromaddresskms) | Send ADA to Cardano addresses
*cardano()* | [**ada Transaction From UTXO()**](./Api/CardanoApi.md#adatransactionfromutxo) | Send ADA to Cardano addresses
*cardano()* | [**ada Transaction From UTXOKMS()**](./Api/CardanoApi.md#adatransactionfromutxokms) | Send ADA to Cardano addresses
*celo()* | [**call Celo Read Smart Contract Method()**](./Api/CeloApi.md#callceloreadsmartcontractmethod) | Invoke a method in a smart contract on Celo
*celo()* | [**call Celo Smart Contract Method()**](./Api/CeloApi.md#callcelosmartcontractmethod) | Invoke a method in a smart contract on Celo
*celo()* | [**call Celo Smart Contract Method KMS()**](./Api/CeloApi.md#callcelosmartcontractmethodkms) | Invoke a method in a smart contract on Celo
*celo()* | [**celo Broadcast()**](./Api/CeloApi.md#celobroadcast) | Broadcast signed Celo transaction
*celo()* | [**celo Generate Address()**](./Api/CeloApi.md#celogenerateaddress) | Generate Celo account address from Extended public key
*celo()* | [**celo Generate Address Private Key()**](./Api/CeloApi.md#celogenerateaddressprivatekey) | Generate Celo private key
*celo()* | [**celo Generate Wallet()**](./Api/CeloApi.md#celogeneratewallet) | Generate Celo wallet
*celo()* | [**celo Get Balance()**](./Api/CeloApi.md#celogetbalance) | Get Celo Account balance
*celo()* | [**celo Get Block()**](./Api/CeloApi.md#celogetblock) | Get Celo block by hash
*celo()* | [**celo Get Current Block()**](./Api/CeloApi.md#celogetcurrentblock) | Get current block number
*celo()* | [**celo Get Transaction()**](./Api/CeloApi.md#celogettransaction) | Get Celo Transaction
*celo()* | [**celo Get Transaction By Address()**](./Api/CeloApi.md#celogettransactionbyaddress) | Get Celo transactions by address
*celo()* | [**celo Get Transaction Count()**](./Api/CeloApi.md#celogettransactioncount) | Get count of outgoing Celo transactions
*celo()* | [**celo Web3 Driver()**](./Api/CeloApi.md#celoweb3driver) | Web3 HTTP driver
*celo()* | [**transfer Celo Blockchain()**](./Api/CeloApi.md#transferceloblockchain) | Send Celo / ERC20 from account to account
*celo()* | [**transfer Celo Blockchain KMS()**](./Api/CeloApi.md#transferceloblockchainkms) | Send Celo / ERC20 from account to account
*custodialManagedWallets()* | [**custodial Create Wallet()**](./Api/CustodialManagedWalletsApi.md#custodialcreatewallet) | Create managed address
*custodialManagedWallets()* | [**custodial Delete Wallet()**](./Api/CustodialManagedWalletsApi.md#custodialdeletewallet) | Delete managed address
*custodialManagedWallets()* | [**custodial Get Wallet()**](./Api/CustodialManagedWalletsApi.md#custodialgetwallet) | Get managed address
*custodialManagedWallets()* | [**custodial Get Wallets()**](./Api/CustodialManagedWalletsApi.md#custodialgetwallets) | Get managed addresses
*custodialManagedWallets()* | [**custodial Transfer Managed Address()**](./Api/CustodialManagedWalletsApi.md#custodialtransfermanagedaddress) | Sign and transfer using managed address
*customer()* | [**activate Customer()**](./Api/CustomerApi.md#activatecustomer) | Activate customer
*customer()* | [**deactivate Customer()**](./Api/CustomerApi.md#deactivatecustomer) | Deactivate customer
*customer()* | [**disable Customer()**](./Api/CustomerApi.md#disablecustomer) | Disable customer
*customer()* | [**enable Customer()**](./Api/CustomerApi.md#enablecustomer) | Enable customer
*customer()* | [**find All Customers()**](./Api/CustomerApi.md#findallcustomers) | List all customers
*customer()* | [**get Customer By External Or Internal Id()**](./Api/CustomerApi.md#getcustomerbyexternalorinternalid) | Get customer details
*customer()* | [**update Customer()**](./Api/CustomerApi.md#updatecustomer) | Update customer
*deposit()* | [**get Deposits()**](./Api/DepositApi.md#getdeposits) | List all deposits for product
*deposit()* | [**get Deposits Count()**](./Api/DepositApi.md#getdepositscount) | Count of found entities for get deposits request
*dogecoin()* | [**doge Broadcast()**](./Api/DogecoinApi.md#dogebroadcast) | Broadcast signed Dogecoin transaction
*dogecoin()* | [**doge Generate Address()**](./Api/DogecoinApi.md#dogegenerateaddress) | Generate Dogecoin deposit address from Extended public key
*dogecoin()* | [**doge Generate Address Private Key()**](./Api/DogecoinApi.md#dogegenerateaddressprivatekey) | Generate Dogecoin private key
*dogecoin()* | [**doge Generate Wallet()**](./Api/DogecoinApi.md#dogegeneratewallet) | Generate Dogecoin wallet
*dogecoin()* | [**doge Get Block()**](./Api/DogecoinApi.md#dogegetblock) | Get Dogecoin Block by hash or height
*dogecoin()* | [**doge Get Block Chain Info()**](./Api/DogecoinApi.md#dogegetblockchaininfo) | Get Dogecoin Blockchain Information
*dogecoin()* | [**doge Get Block Hash()**](./Api/DogecoinApi.md#dogegetblockhash) | Get Dogecoin Block hash
*dogecoin()* | [**doge Get Mempool()**](./Api/DogecoinApi.md#dogegetmempool) | Get Mempool Transactions
*dogecoin()* | [**doge Get Raw Transaction()**](./Api/DogecoinApi.md#dogegetrawtransaction) | Get Dogecoin Transaction by hash
*dogecoin()* | [**doge Get UTXO()**](./Api/DogecoinApi.md#dogegetutxo) | Get information about a transaction output (UTXO) in a Dogecoin transaction
*dogecoin()* | [**doge Rpc Driver()**](./Api/DogecoinApi.md#dogerpcdriver) | JSON RPC HTTP driver
*dogecoin()* | [**doge Transaction UTXO()**](./Api/DogecoinApi.md#dogetransactionutxo) | Send DOGE to Dogecoin addresses
*dogecoin()* | [**doge Transaction UTXOKMS()**](./Api/DogecoinApi.md#dogetransactionutxokms) | Send DOGE to Dogecoin addresses
*elrond()* | [**e Gld Get Current Block()**](./Api/ElrondApi.md#egldgetcurrentblock) | Get current block number
*elrond()* | [**egld Broadcast()**](./Api/ElrondApi.md#egldbroadcast) | Broadcast signed EGLD transaction
*elrond()* | [**egld Generate Address()**](./Api/ElrondApi.md#egldgenerateaddress) | Generate EGLD account address from mnemonic
*elrond()* | [**egld Generate Address Private Key()**](./Api/ElrondApi.md#egldgenerateaddressprivatekey) | Generate EGLD private key
*elrond()* | [**egld Generate Wallet()**](./Api/ElrondApi.md#egldgeneratewallet) | Generate EGLD wallet
*elrond()* | [**egld Get Balance()**](./Api/ElrondApi.md#egldgetbalance) | Get EGLD Account balance
*elrond()* | [**egld Get Block()**](./Api/ElrondApi.md#egldgetblock) | Get EGLD block by hash
*elrond()* | [**egld Get Transaction()**](./Api/ElrondApi.md#egldgettransaction) | Get EGLD Transaction
*elrond()* | [**egld Get Transaction Address()**](./Api/ElrondApi.md#egldgettransactionaddress) | Get count of outgoing EGLD transactions
*elrond()* | [**egld Get Transaction Count()**](./Api/ElrondApi.md#egldgettransactioncount) | Get count of outgoing EGLD transactions
*elrond()* | [**egld Node Get()**](./Api/ElrondApi.md#egldnodeget) | Node HTTP driver
*elrond()* | [**egld Node Post()**](./Api/ElrondApi.md#egldnodepost) | Node HTTP driver
*elrond()* | [**transfer Egld Blockchain()**](./Api/ElrondApi.md#transferegldblockchain) | Send EGLD from account to account
*elrond()* | [**transfer Egld Blockchain KMS()**](./Api/ElrondApi.md#transferegldblockchainkms) | Send EGLD from account to account
*ethereum()* | [**call Read Smart Contract Method()**](./Api/EthereumApi.md#callreadsmartcontractmethod) | Invoke a method in a smart contract on Ethereum
*ethereum()* | [**call Smart Contract Method()**](./Api/EthereumApi.md#callsmartcontractmethod) | Invoke a method in a smart contract on Ethereum
*ethereum()* | [**call Smart Contract Method KMS()**](./Api/EthereumApi.md#callsmartcontractmethodkms) | Invoke a method in a smart contract on Ethereum
*ethereum()* | [**eth Broadcast()**](./Api/EthereumApi.md#ethbroadcast) | Broadcast signed Ethereum transaction
*ethereum()* | [**eth Generate Address()**](./Api/EthereumApi.md#ethgenerateaddress) | Generate Ethereum account address from Extended public key
*ethereum()* | [**eth Generate Address Private Key()**](./Api/EthereumApi.md#ethgenerateaddressprivatekey) | Generate Ethereum private key
*ethereum()* | [**eth Generate Wallet()**](./Api/EthereumApi.md#ethgeneratewallet) | Generate Ethereum wallet
*ethereum()* | [**eth Get Balance()**](./Api/EthereumApi.md#ethgetbalance) | Get the ETH balance of an Ethereum account
*ethereum()* | [**eth Get Block()**](./Api/EthereumApi.md#ethgetblock) | Get Ethereum block by hash
*ethereum()* | [**eth Get Current Block()**](./Api/EthereumApi.md#ethgetcurrentblock) | Get current block number
*ethereum()* | [**eth Get Internal Transaction By Address()**](./Api/EthereumApi.md#ethgetinternaltransactionbyaddress) | Get Ethereum internal transactions by address
*ethereum()* | [**eth Get Transaction()**](./Api/EthereumApi.md#ethgettransaction) | Get Ethereum Transaction
*ethereum()* | [**eth Get Transaction By Address()**](./Api/EthereumApi.md#ethgettransactionbyaddress) | Get Ethereum transactions by address
*ethereum()* | [**eth Get Transaction Count()**](./Api/EthereumApi.md#ethgettransactioncount) | Get count of outgoing Ethereum transactions
*ethereum()* | [**eth Web3 Driver()**](./Api/EthereumApi.md#ethweb3driver) | Web3 HTTP driver
*ethereum()* | [**transfer Eth Blockchain()**](./Api/EthereumApi.md#transferethblockchain) | Send Ethereum / ERC20 from account to account
*ethereum()* | [**transfer Eth Blockchain KMS()**](./Api/EthereumApi.md#transferethblockchainkms) | Send Ethereum / ERC20 from account to account
*exchangeRate()* | [**get Exchange Rate()**](./Api/ExchangeRateApi.md#getexchangerate) | Get the current exchange rate for exchanging fiat/crypto assets
*flow()* | [**flow Add Pub Key Mnemonic()**](./Api/FlowApi.md#flowaddpubkeymnemonic) | Add public key to Flow address
*flow()* | [**flow Add Pub Key Secret()**](./Api/FlowApi.md#flowaddpubkeysecret) | Add public key to Flow address
*flow()* | [**flow Add Pub Key Secret KMS()**](./Api/FlowApi.md#flowaddpubkeysecretkms) | Add public key to Flow address
*flow()* | [**flow Create Address From Pub Key KMS()**](./Api/FlowApi.md#flowcreateaddressfrompubkeykms) | Create Flow address from public key
*flow()* | [**flow Create Address From Pub Key Mnemonic()**](./Api/FlowApi.md#flowcreateaddressfrompubkeymnemonic) | Create Flow address from public key
*flow()* | [**flow Create Address From Pub Key Secret()**](./Api/FlowApi.md#flowcreateaddressfrompubkeysecret) | Create Flow address from public key
*flow()* | [**flow Custom Transaction KMS()**](./Api/FlowApi.md#flowcustomtransactionkms) | Send arbitrary transaction to blockchain
*flow()* | [**flow Custom Transaction Mnemonic()**](./Api/FlowApi.md#flowcustomtransactionmnemonic) | Send arbitrary transaction to blockchain
*flow()* | [**flow Custom Transaction PK()**](./Api/FlowApi.md#flowcustomtransactionpk) | Send arbitrary transaction to blockchain
*flow()* | [**flow Generate Address()**](./Api/FlowApi.md#flowgenerateaddress) | Generate Flow address from Extended public key
*flow()* | [**flow Generate Pub Key()**](./Api/FlowApi.md#flowgeneratepubkey) | Generate Flow public key from Extended public key
*flow()* | [**flow Generate Pub Key Private Key()**](./Api/FlowApi.md#flowgeneratepubkeyprivatekey) | Generate Flow private key
*flow()* | [**flow Generate Wallet()**](./Api/FlowApi.md#flowgeneratewallet) | Generate Flow wallet
*flow()* | [**flow Get Account()**](./Api/FlowApi.md#flowgetaccount) | Get the balance of a Flow account
*flow()* | [**flow Get Block()**](./Api/FlowApi.md#flowgetblock) | Get Flow Block by hash or height
*flow()* | [**flow Get Block Chain Info()**](./Api/FlowApi.md#flowgetblockchaininfo) | Get Flow current block number
*flow()* | [**flow Get Block Events()**](./Api/FlowApi.md#flowgetblockevents) | Get Flow events from blocks
*flow()* | [**flow Get Raw Transaction()**](./Api/FlowApi.md#flowgetrawtransaction) | Get Flow Transaction by hash
*flow()* | [**flow Transaction KMS()**](./Api/FlowApi.md#flowtransactionkms) | Send Flow to blockchain addresses
*flow()* | [**flow Transaction Mnemonic()**](./Api/FlowApi.md#flowtransactionmnemonic) | Send Flow to blockchain addresses
*flow()* | [**flow Transaction PK()**](./Api/FlowApi.md#flowtransactionpk) | Send Flow to blockchain addresses
*fungibleTokensERC20OrCompatible()* | [**approve Celo Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveceloerc20) | Allow a blockchain address to transfer and burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**approve Celo Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveceloerc20kms) | Allow a blockchain address to transfer and burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**approve Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveerc20) | Allow a blockchain address to transfer and burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**approve Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#approveerc20kms) | Allow a blockchain address to transfer and burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Burn Celo Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnceloerc20) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Burn Celo Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnceloerc20kms) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Burn Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnerc20) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Burn Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnerc20kms) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Burn Kcs Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnkcserc20) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Burn Kcs Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainburnkcserc20kms) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Algo Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployalgoerc20) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Algo Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployalgoerc20kms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Celo Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployceloerc20) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Celo Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployceloerc20kms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployerc20) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeployerc20kms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Kcs Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploykcserc20) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Kcs Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploykcserc20kms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Solana Spl()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploysolanaspl) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Deploy Solana Spl KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaindeploysolanasplkms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**chain Mint Celo Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintceloerc20) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Mint Celo Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintceloerc20kms) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Mint Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainminterc20) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Mint Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainminterc20kms) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Mint Kcs Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintkcserc20) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Mint Kcs Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chainmintkcserc20kms) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Algo Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferalgoerc20) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Algo Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferalgoerc20kms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Bsc Bep20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferbscbep20) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Bsc Bep20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferbscbep20kms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Celo Erc20 Token()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferceloerc20token) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Celo Erc20 Token KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferceloerc20tokenkms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Eth Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferetherc20) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Eth Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferetherc20kms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Kcs Eth Erc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferkcsetherc20) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Kcs Eth Erc20 KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferkcsetherc20kms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Solana Spl()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransfersolanaspl) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**chain Transfer Solana Spl KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#chaintransfersolanasplkms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**erc20 Get Balance()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalance) | Get the number of fungible tokens that a blockchain address holds in a smart contract
*fungibleTokensERC20OrCompatible()* | [**erc20 Get Balance Address()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalanceaddress) | Get the total number of fungible tokens that a blockchain address holds
*fungibleTokensERC20OrCompatible()* | [**erc20 Get Transaction By Address()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20gettransactionbyaddress) | Get fungible token transactions on a blockchain address
*gasPump()* | [**activate Gas Pump()**](./Api/GasPumpApi.md#activategaspump) | Activate gas pump addresses
*gasPump()* | [**activate Gas Pump Celo()**](./Api/GasPumpApi.md#activategaspumpcelo) | Activate gas pump addresses
*gasPump()* | [**activate Gas Pump Celo KMS()**](./Api/GasPumpApi.md#activategaspumpcelokms) | Activate gas pump addresses
*gasPump()* | [**activate Gas Pump KMS()**](./Api/GasPumpApi.md#activategaspumpkms) | Activate gas pump addresses
*gasPump()* | [**activate Gas Pump Tatum()**](./Api/GasPumpApi.md#activategaspumptatum) | Activate gas pump addresses
*gasPump()* | [**activate Gas Pump Tron()**](./Api/GasPumpApi.md#activategaspumptron) | Activate gas pump addresses
*gasPump()* | [**activate Gas Pump Tron KMS()**](./Api/GasPumpApi.md#activategaspumptronkms) | Activate gas pump addresses
*gasPump()* | [**activated Not Activated Gas Pump Addresses()**](./Api/GasPumpApi.md#activatednotactivatedgaspumpaddresses) | Get the results of the address activation transaction
*gasPump()* | [**approve Transfer Custodial Wallet()**](./Api/GasPumpApi.md#approvetransfercustodialwallet) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**approve Transfer Custodial Wallet Celo()**](./Api/GasPumpApi.md#approvetransfercustodialwalletcelo) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**approve Transfer Custodial Wallet Celo KMS()**](./Api/GasPumpApi.md#approvetransfercustodialwalletcelokms) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**approve Transfer Custodial Wallet KMS()**](./Api/GasPumpApi.md#approvetransfercustodialwalletkms) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**gas Pump Addresses Activated Or Not()**](./Api/GasPumpApi.md#gaspumpaddressesactivatedornot) | Check whether the gas pump address with a specified index is activated
*gasPump()* | [**generate Custodial Wallet()**](./Api/GasPumpApi.md#generatecustodialwallet) | Generate a custodial wallet address
*gasPump()* | [**generate Custodial Wallet Batch()**](./Api/GasPumpApi.md#generatecustodialwalletbatch) | Generate a gas pump wallet address
*gasPump()* | [**generate Custodial Wallet Batch Celo()**](./Api/GasPumpApi.md#generatecustodialwalletbatchcelo) | Generate a gas pump wallet address
*gasPump()* | [**generate Custodial Wallet Batch Celo KMS()**](./Api/GasPumpApi.md#generatecustodialwalletbatchcelokms) | Generate a gas pump wallet address
*gasPump()* | [**generate Custodial Wallet Batch KMS()**](./Api/GasPumpApi.md#generatecustodialwalletbatchkms) | Generate a gas pump wallet address
*gasPump()* | [**generate Custodial Wallet Batch Payer()**](./Api/GasPumpApi.md#generatecustodialwalletbatchpayer) | Generate a gas pump wallet address
*gasPump()* | [**generate Custodial Wallet Batch Tron()**](./Api/GasPumpApi.md#generatecustodialwalletbatchtron) | Generate a gas pump wallet address
*gasPump()* | [**generate Custodial Wallet Batch Tron KMS()**](./Api/GasPumpApi.md#generatecustodialwalletbatchtronkms) | Generate a gas pump wallet address
*gasPump()* | [**generate Custodial Wallet Celo()**](./Api/GasPumpApi.md#generatecustodialwalletcelo) | Generate a custodial wallet address
*gasPump()* | [**generate Custodial Wallet Celo KMS()**](./Api/GasPumpApi.md#generatecustodialwalletcelokms) | Generate a custodial wallet address
*gasPump()* | [**generate Custodial Wallet KMS()**](./Api/GasPumpApi.md#generatecustodialwalletkms) | Generate a custodial wallet address
*gasPump()* | [**generate Custodial Wallet Tron()**](./Api/GasPumpApi.md#generatecustodialwallettron) | Generate a custodial wallet address
*gasPump()* | [**generate Custodial Wallet Tron KMS()**](./Api/GasPumpApi.md#generatecustodialwallettronkms) | Generate a custodial wallet address
*gasPump()* | [**precalculate Gas Pump Addresses()**](./Api/GasPumpApi.md#precalculategaspumpaddresses) | Precalculate gas pump addresses
*gasPump()* | [**s CGet Custodial Addresses()**](./Api/GasPumpApi.md#scgetcustodialaddresses) | Get the custodial wallet address from the transaction
*gasPump()* | [**transfer Custodial Wallet()**](./Api/GasPumpApi.md#transfercustodialwallet) | Transfer an asset from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Batch()**](./Api/GasPumpApi.md#transfercustodialwalletbatch) | Transfer multiple assets from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Batch Celo()**](./Api/GasPumpApi.md#transfercustodialwalletbatchcelo) | Transfer multiple assets from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Batch Celo KMS()**](./Api/GasPumpApi.md#transfercustodialwalletbatchcelokms) | Transfer multiple assets from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Batch KMS()**](./Api/GasPumpApi.md#transfercustodialwalletbatchkms) | Transfer multiple assets from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Batch Tron()**](./Api/GasPumpApi.md#transfercustodialwalletbatchtron) | Transfer multiple assets from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Batch Tron KMS()**](./Api/GasPumpApi.md#transfercustodialwalletbatchtronkms) | Transfer multiple assets from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Celo()**](./Api/GasPumpApi.md#transfercustodialwalletcelo) | Transfer an asset from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Celo KMS()**](./Api/GasPumpApi.md#transfercustodialwalletcelokms) | Transfer an asset from a gas pump address
*gasPump()* | [**transfer Custodial Wallet KMS()**](./Api/GasPumpApi.md#transfercustodialwalletkms) | Transfer an asset from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Tron()**](./Api/GasPumpApi.md#transfercustodialwallettron) | Transfer an asset from a gas pump address
*gasPump()* | [**transfer Custodial Wallet Tron KMS()**](./Api/GasPumpApi.md#transfercustodialwallettronkms) | Transfer an asset from a gas pump address
*harmony()* | [**call One Read Smart Contract Method()**](./Api/HarmonyApi.md#callonereadsmartcontractmethod) | Invoke a method in a smart contract on Harmony
*harmony()* | [**call One Smart Contract Method()**](./Api/HarmonyApi.md#callonesmartcontractmethod) | Invoke a method in a smart contract on Harmony
*harmony()* | [**call One Smart Contract Method KMS()**](./Api/HarmonyApi.md#callonesmartcontractmethodkms) | Invoke a method in a smart contract on Harmony
*harmony()* | [**one Broadcast()**](./Api/HarmonyApi.md#onebroadcast) | Broadcast signed ONE transaction
*harmony()* | [**one Format Address()**](./Api/HarmonyApi.md#oneformataddress) | Transform HEX address to Bech32 ONE address format
*harmony()* | [**one Generate Address()**](./Api/HarmonyApi.md#onegenerateaddress) | Generate ONE account address from Extended public key
*harmony()* | [**one Generate Address Private Key()**](./Api/HarmonyApi.md#onegenerateaddressprivatekey) | Generate ONE private key
*harmony()* | [**one Generate Wallet()**](./Api/HarmonyApi.md#onegeneratewallet) | Generate ONE wallet
*harmony()* | [**one Get Balance()**](./Api/HarmonyApi.md#onegetbalance) | Get ONE Account balance
*harmony()* | [**one Get Block()**](./Api/HarmonyApi.md#onegetblock) | Get ONE block by hash
*harmony()* | [**one Get Current Block()**](./Api/HarmonyApi.md#onegetcurrentblock) | Get current block number
*harmony()* | [**one Get Transaction()**](./Api/HarmonyApi.md#onegettransaction) | Get ONE Transaction
*harmony()* | [**one Get Transaction Count()**](./Api/HarmonyApi.md#onegettransactioncount) | Get count of outgoing ONE transactions
*harmony()* | [**one Web3 Driver()**](./Api/HarmonyApi.md#oneweb3driver) | Web3 HTTP driver
*harmony()* | [**transfer One Blockchain()**](./Api/HarmonyApi.md#transferoneblockchain) | Send ONE / HRM20 from account to account
*harmony()* | [**transfer One Blockchain KMS()**](./Api/HarmonyApi.md#transferoneblockchainkms) | Send ONE / HRM20 from account to account
*iPFS()* | [**get IPFSData()**](./Api/IPFSApi.md#getipfsdata) | Get file from IPFS
*iPFS()* | [**store IPFS()**](./Api/IPFSApi.md#storeipfs) | Store data to IPFS
*keyManagementSystem()* | [**complete Pending Signature()**](./Api/KeyManagementSystemApi.md#completependingsignature) | Complete pending transaction to sign
*keyManagementSystem()* | [**delete Pending Transaction To Sign()**](./Api/KeyManagementSystemApi.md#deletependingtransactiontosign) | Delete transaction
*keyManagementSystem()* | [**get Pending Transaction To Sign()**](./Api/KeyManagementSystemApi.md#getpendingtransactiontosign) | Get transaction details
*keyManagementSystem()* | [**get Pending Transactions To Sign()**](./Api/KeyManagementSystemApi.md#getpendingtransactionstosign) | Get pending transactions to sign
*keyManagementSystem()* | [**receive Pending Transactions To Sign()**](./Api/KeyManagementSystemApi.md#receivependingtransactionstosign) | Get pending transactions to sign
*klaytn()* | [**call Klaytn Smart Contract Method()**](./Api/KlaytnApi.md#callklaytnsmartcontractmethod) | Invoke a method in a smart contract on Klaytn
*klaytn()* | [**call Klaytn Smart Contract Method KMS()**](./Api/KlaytnApi.md#callklaytnsmartcontractmethodkms) | Invoke a method in a smart contract on Klaytn
*klaytn()* | [**call Klaytn Smart Contract Read Method()**](./Api/KlaytnApi.md#callklaytnsmartcontractreadmethod) | Invoke a method in a smart contract on Klaytn
*klaytn()* | [**klaytn Broadcast()**](./Api/KlaytnApi.md#klaytnbroadcast) | Broadcast signed Klaytn transaction
*klaytn()* | [**klaytn Generate Address()**](./Api/KlaytnApi.md#klaytngenerateaddress) | Generate Klaytn account address from Extended public key
*klaytn()* | [**klaytn Generate Address Private Key()**](./Api/KlaytnApi.md#klaytngenerateaddressprivatekey) | Generate Klaytn private key
*klaytn()* | [**klaytn Generate Wallet()**](./Api/KlaytnApi.md#klaytngeneratewallet) | Generate Klaytn wallet
*klaytn()* | [**klaytn Get Balance()**](./Api/KlaytnApi.md#klaytngetbalance) | Get Klaytn Account balance
*klaytn()* | [**klaytn Get Block()**](./Api/KlaytnApi.md#klaytngetblock) | Get Klaytn block by hash
*klaytn()* | [**klaytn Get Current Block()**](./Api/KlaytnApi.md#klaytngetcurrentblock) | Get current block number
*klaytn()* | [**klaytn Get Transaction()**](./Api/KlaytnApi.md#klaytngettransaction) | Get Klaytn Transaction
*klaytn()* | [**klaytn Get Transaction Count()**](./Api/KlaytnApi.md#klaytngettransactioncount) | Get count of outgoing Klaytn transactions
*klaytn()* | [**klaytn Web3 Driver()**](./Api/KlaytnApi.md#klaytnweb3driver) | Web3 HTTP driver
*klaytn()* | [**transfer Klaytn Blockchain()**](./Api/KlaytnApi.md#transferklaytnblockchain) | Send KLAY from account to account
*klaytn()* | [**transfer Klaytn Blockchain KMS()**](./Api/KlaytnApi.md#transferklaytnblockchainkms) | Send KLAY from account to account
*kuCoin()* | [**call Kcs Smart Contract Method()**](./Api/KuCoinApi.md#callkcssmartcontractmethod) | Invoke a method in a smart contract on KuCoin Community Chain
*kuCoin()* | [**call Kcs Smart Contract Method KMS()**](./Api/KuCoinApi.md#callkcssmartcontractmethodkms) | Invoke a method in a smart contract on KuCoin Community Chain
*kuCoin()* | [**call Kcs Smart Contract Read Method()**](./Api/KuCoinApi.md#callkcssmartcontractreadmethod) | Invoke a method in a smart contract on KuCoin Community Chain
*kuCoin()* | [**kcs Broadcast()**](./Api/KuCoinApi.md#kcsbroadcast) | Broadcast signed Kcs transaction
*kuCoin()* | [**kcs Generate Address()**](./Api/KuCoinApi.md#kcsgenerateaddress) | Generate Kcs account address from Extended public key
*kuCoin()* | [**kcs Generate Address Private Key()**](./Api/KuCoinApi.md#kcsgenerateaddressprivatekey) | Generate Kcs private key
*kuCoin()* | [**kcs Generate Wallet()**](./Api/KuCoinApi.md#kcsgeneratewallet) | Generate Kcs wallet
*kuCoin()* | [**kcs Get Balance()**](./Api/KuCoinApi.md#kcsgetbalance) | Get Kcs Account balance
*kuCoin()* | [**kcs Get Block()**](./Api/KuCoinApi.md#kcsgetblock) | Get Kcs block by hash
*kuCoin()* | [**kcs Get Current Block()**](./Api/KuCoinApi.md#kcsgetcurrentblock) | Get current block number
*kuCoin()* | [**kcs Get Transaction()**](./Api/KuCoinApi.md#kcsgettransaction) | Get Kcs Transaction
*kuCoin()* | [**kcs Get Transaction Count()**](./Api/KuCoinApi.md#kcsgettransactioncount) | Get count of outgoing Kcs transactions
*kuCoin()* | [**kcs Web3 Driver()**](./Api/KuCoinApi.md#kcsweb3driver) | Web3 HTTP driver
*kuCoin()* | [**transfer Kcs Blockchain()**](./Api/KuCoinApi.md#transferkcsblockchain) | Send KCS from account to account
*kuCoin()* | [**transfer Kcs Blockchain KMS()**](./Api/KuCoinApi.md#transferkcsblockchainkms) | Send KCS from account to account
*litecoin()* | [**ltc Broadcast()**](./Api/LitecoinApi.md#ltcbroadcast) | Broadcast signed Litecoin transaction
*litecoin()* | [**ltc Generate Address()**](./Api/LitecoinApi.md#ltcgenerateaddress) | Generate Litecoin deposit address from Extended public key
*litecoin()* | [**ltc Generate Address Private Key()**](./Api/LitecoinApi.md#ltcgenerateaddressprivatekey) | Generate Litecoin private key
*litecoin()* | [**ltc Generate Wallet()**](./Api/LitecoinApi.md#ltcgeneratewallet) | Generate Litecoin wallet
*litecoin()* | [**ltc Get Balance Of Address()**](./Api/LitecoinApi.md#ltcgetbalanceofaddress) | Get the balance of a Litecoin address
*litecoin()* | [**ltc Get Block()**](./Api/LitecoinApi.md#ltcgetblock) | Get Litecoin Block by hash or height
*litecoin()* | [**ltc Get Block Chain Info()**](./Api/LitecoinApi.md#ltcgetblockchaininfo) | Get Litecoin Blockchain Information
*litecoin()* | [**ltc Get Block Hash()**](./Api/LitecoinApi.md#ltcgetblockhash) | Get Litecoin Block hash
*litecoin()* | [**ltc Get Mempool()**](./Api/LitecoinApi.md#ltcgetmempool) | Get Mempool Transactions
*litecoin()* | [**ltc Get Raw Transaction()**](./Api/LitecoinApi.md#ltcgetrawtransaction) | Get Litecoin Transaction by hash
*litecoin()* | [**ltc Get Tx By Address()**](./Api/LitecoinApi.md#ltcgettxbyaddress) | Get Litecoin Transactions by address
*litecoin()* | [**ltc Get UTXO()**](./Api/LitecoinApi.md#ltcgetutxo) | Get information about a transaction output (UTXO) in a Litecoin transaction
*litecoin()* | [**ltc Rpc Driver()**](./Api/LitecoinApi.md#ltcrpcdriver) | JSON RPC HTTP driver
*litecoin()* | [**ltc Transaction Address()**](./Api/LitecoinApi.md#ltctransactionaddress) | Send LTC to Litecoin addresses
*litecoin()* | [**ltc Transaction Address KMS()**](./Api/LitecoinApi.md#ltctransactionaddresskms) | Send LTC to Litecoin addresses
*litecoin()* | [**ltc Transaction UTXO()**](./Api/LitecoinApi.md#ltctransactionutxo) | Send LTC to Litecoin addresses
*litecoin()* | [**ltc Transaction UTXOKMS()**](./Api/LitecoinApi.md#ltctransactionutxokms) | Send LTC to Litecoin addresses
*maliciousAddress()* | [**check Malicous Address()**](./Api/MaliciousAddressApi.md#checkmalicousaddress) | Check malicous address
*marketplace()* | [**blo Mar Withdraw From Marketplace Solana()**](./Api/MarketplaceApi.md#blomarwithdrawfrommarketplacesolana) | Withdraw funds from the marketplace treasury account on Solana
*marketplace()* | [**blo Mar Withdraw From Marketplace Solana KMS()**](./Api/MarketplaceApi.md#blomarwithdrawfrommarketplacesolanakms) | Withdraw funds from the marketplace treasury account on Solana
*marketplace()* | [**buy Asset On Marketplace()**](./Api/MarketplaceApi.md#buyassetonmarketplace) | Buy an asset on the NFT marketplace
*marketplace()* | [**buy Asset On Marketplace Celo()**](./Api/MarketplaceApi.md#buyassetonmarketplacecelo) | Buy an asset on the NFT marketplace
*marketplace()* | [**buy Asset On Marketplace Celo KMS()**](./Api/MarketplaceApi.md#buyassetonmarketplacecelokms) | Buy an asset on the NFT marketplace
*marketplace()* | [**buy Asset On Marketplace KMS()**](./Api/MarketplaceApi.md#buyassetonmarketplacekms) | Buy an asset on the NFT marketplace
*marketplace()* | [**buy Asset On Marketplace Solana()**](./Api/MarketplaceApi.md#buyassetonmarketplacesolana) | Buy an asset on the NFT marketplace
*marketplace()* | [**buy Asset On Marketplace Solana KMS()**](./Api/MarketplaceApi.md#buyassetonmarketplacesolanakms) | Buy an asset on the NFT marketplace
*marketplace()* | [**cancel Sell Asset On Marketplace()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplace) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**cancel Sell Asset On Marketplace Celo()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacecelo) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**cancel Sell Asset On Marketplace Celo KMS()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacecelokms) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**cancel Sell Asset On Marketplace KMS()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacekms) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**cancel Sell Asset On Marketplace Solana()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacesolana) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**cancel Sell Asset On Marketplace Solana KMS()**](./Api/MarketplaceApi.md#cancelsellassetonmarketplacesolanakms) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**generate Marketplace()**](./Api/MarketplaceApi.md#generatemarketplace) | Create an NFT marketplace
*marketplace()* | [**generate Marketplace Celo()**](./Api/MarketplaceApi.md#generatemarketplacecelo) | Create an NFT marketplace
*marketplace()* | [**generate Marketplace Celo KMS()**](./Api/MarketplaceApi.md#generatemarketplacecelokms) | Create an NFT marketplace
*marketplace()* | [**generate Marketplace KMS()**](./Api/MarketplaceApi.md#generatemarketplacekms) | Create an NFT marketplace
*marketplace()* | [**generate Marketplace Solana()**](./Api/MarketplaceApi.md#generatemarketplacesolana) | Create an NFT marketplace
*marketplace()* | [**generate Marketplace Solana KMS()**](./Api/MarketplaceApi.md#generatemarketplacesolanakms) | Create an NFT marketplace
*marketplace()* | [**get Marketplace Fee()**](./Api/MarketplaceApi.md#getmarketplacefee) | Get the NFT marketplace fee
*marketplace()* | [**get Marketplace Fee Recipient()**](./Api/MarketplaceApi.md#getmarketplacefeerecipient) | Get the recipient of the NFT marketplace fee
*marketplace()* | [**get Marketplace Info()**](./Api/MarketplaceApi.md#getmarketplaceinfo) | Get information about an NFT marketplace on Solana
*marketplace()* | [**get Marketplace Listing()**](./Api/MarketplaceApi.md#getmarketplacelisting) | Get information about a listing on the NFT marketplace
*marketplace()* | [**get Marketplace Listings()**](./Api/MarketplaceApi.md#getmarketplacelistings) | Get the listings of a certain type from the NFT marketplace
*marketplace()* | [**sell Asset On Marketplace()**](./Api/MarketplaceApi.md#sellassetonmarketplace) | Sell an asset on the NFT marketplace
*marketplace()* | [**sell Asset On Marketplace Celo()**](./Api/MarketplaceApi.md#sellassetonmarketplacecelo) | Sell an asset on the NFT marketplace
*marketplace()* | [**sell Asset On Marketplace Celo KMS()**](./Api/MarketplaceApi.md#sellassetonmarketplacecelokms) | Sell an asset on the NFT marketplace
*marketplace()* | [**sell Asset On Marketplace KMS()**](./Api/MarketplaceApi.md#sellassetonmarketplacekms) | Sell an asset on the NFT marketplace
*marketplace()* | [**sell Asset On Marketplace Solana()**](./Api/MarketplaceApi.md#sellassetonmarketplacesolana) | Sell an asset on the NFT marketplace
*marketplace()* | [**sell Asset On Marketplace Solana KMS()**](./Api/MarketplaceApi.md#sellassetonmarketplacesolanakms) | Sell an asset on the NFT marketplace
*marketplace()* | [**update Fee()**](./Api/MarketplaceApi.md#updatefee) | Update the NFT marketplace fee
*marketplace()* | [**update Fee Celo()**](./Api/MarketplaceApi.md#updatefeecelo) | Update the NFT marketplace fee
*marketplace()* | [**update Fee Celo KMS()**](./Api/MarketplaceApi.md#updatefeecelokms) | Update the NFT marketplace fee
*marketplace()* | [**update Fee KMS()**](./Api/MarketplaceApi.md#updatefeekms) | Update the NFT marketplace fee
*marketplace()* | [**update Fee Recipient()**](./Api/MarketplaceApi.md#updatefeerecipient) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**update Fee Recipient Celo()**](./Api/MarketplaceApi.md#updatefeerecipientcelo) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**update Fee Recipient Celo KMS()**](./Api/MarketplaceApi.md#updatefeerecipientcelokms) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**update Fee Recipient KMS()**](./Api/MarketplaceApi.md#updatefeerecipientkms) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**update Fee Recipient Solana()**](./Api/MarketplaceApi.md#updatefeerecipientsolana) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**update Fee Recipient Solana KMS()**](./Api/MarketplaceApi.md#updatefeerecipientsolanakms) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**update Fee Solana()**](./Api/MarketplaceApi.md#updatefeesolana) | Update the NFT marketplace fee
*marketplace()* | [**update Fee Solana KMS()**](./Api/MarketplaceApi.md#updatefeesolanakms) | Update the NFT marketplace fee
*marketplace()* | [**update Marketplace Solana()**](./Api/MarketplaceApi.md#updatemarketplacesolana) | Update an NFT marketplace on Solana
*marketplace()* | [**update Marketplace Solana KMS()**](./Api/MarketplaceApi.md#updatemarketplacesolanakms) | Update an NFT marketplace on Solana
*marketplace()* | [**withdraw From Marketplace Solana()**](./Api/MarketplaceApi.md#withdrawfrommarketplacesolana) | Withdraw funds from the marketplace fee account on Solana
*marketplace()* | [**withdraw From Marketplace Solana KMS()**](./Api/MarketplaceApi.md#withdrawfrommarketplacesolanakms) | Withdraw funds from the marketplace fee account on Solana
*multiTokensERC1155OrCompatible()* | [**add Multi Token Minter()**](./Api/MultiTokensERC1155OrCompatibleApi.md#addmultitokenminter) | Add a Multi Token minter
*multiTokensERC1155OrCompatible()* | [**add Multi Token Minter KMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#addmultitokenminterkms) | Add a Multi Token minter
*multiTokensERC1155OrCompatible()* | [**burn Multi Token()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitoken) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**burn Multi Token Batch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatch) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**burn Multi Token Batch Celo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatchcelo) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**burn Multi Token Batch KMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatchkms) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**burn Multi Token Batch KMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatchkmscelo) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**burn Multi Token Celo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokencelo) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**burn Multi Token KMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenkms) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**burn Multi Token KMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenkmscelo) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**deploy Multi Token()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitoken) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**deploy Multi Token Celo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokencelo) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**deploy Multi Token Celo KMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokencelokms) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**deploy Multi Token KMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#deploymultitokenkms) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**mint Multi Token()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitoken) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**mint Multi Token Batch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatch) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**mint Multi Token Batch Celo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatchcelo) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**mint Multi Token Batch KMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatchkms) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**mint Multi Token Batch KMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenbatchkmscelo) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**mint Multi Token Celo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokencelo) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**mint Multi Token KMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenkms) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**mint Multi Token KMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#mintmultitokenkmscelo) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**multi Token Get Address Balance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetaddressbalance) | Get all Multi Tokens that a blockchain address holds
*multiTokensERC1155OrCompatible()* | [**multi Token Get Balance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalance) | Get the amount of a specific MultiToken that a blockchain address holds
*multiTokensERC1155OrCompatible()* | [**multi Token Get Balance Batch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalancebatch) | Get the amount of one or multiple Multi Tokens for multiple blockchain addresses
*multiTokensERC1155OrCompatible()* | [**multi Token Get Contract Address()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetcontractaddress) | Get the address of a Multi Token smart contract by its transaction hash
*multiTokensERC1155OrCompatible()* | [**multi Token Get Metadata()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetmetadata) | Get Multi Token metadata
*multiTokensERC1155OrCompatible()* | [**multi Token Get Transaction()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransaction) | Get a Multi Token transaction by its hash
*multiTokensERC1155OrCompatible()* | [**multi Token Get Transaction By Address()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransactionbyaddress) | Get Multi Token transactions on a blockchain address
*multiTokensERC1155OrCompatible()* | [**transfer Multi Token()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitoken) | Transfer a Multi Token
*multiTokensERC1155OrCompatible()* | [**transfer Multi Token Batch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatch) | Transfer multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**transfer Multi Token Batch Celo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatchcelo) | Transfer multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**transfer Multi Token Batch KMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatchkms) | Transfer multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**transfer Multi Token Batch KMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenbatchkmscelo) | Transfer multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**transfer Multi Token Celo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokencelo) | Transfer a Multi Token
*multiTokensERC1155OrCompatible()* | [**transfer Multi Token KMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenkms) | Transfer a Multi Token
*multiTokensERC1155OrCompatible()* | [**transfer Multi Token KMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenkmscelo) | Transfer a Multi Token
*nFTERC721OrCompatible()* | [**add Nft Minter()**](./Api/NFTERC721OrCompatibleApi.md#addnftminter) | Add an NFT minter to an NFT smart contract
*nFTERC721OrCompatible()* | [**add Nft Minter KMS()**](./Api/NFTERC721OrCompatibleApi.md#addnftminterkms) | Add an NFT minter to an NFT smart contract
*nFTERC721OrCompatible()* | [**burn Nft()**](./Api/NFTERC721OrCompatibleApi.md#burnnft) | Burn an NFT
*nFTERC721OrCompatible()* | [**burn Nft Algo()**](./Api/NFTERC721OrCompatibleApi.md#burnnftalgo) | Burn an NFT
*nFTERC721OrCompatible()* | [**burn Nft Celo()**](./Api/NFTERC721OrCompatibleApi.md#burnnftcelo) | Burn an NFT
*nFTERC721OrCompatible()* | [**burn Nft Flow KMS()**](./Api/NFTERC721OrCompatibleApi.md#burnnftflowkms) | Burn an NFT
*nFTERC721OrCompatible()* | [**burn Nft Flow Mnemonic()**](./Api/NFTERC721OrCompatibleApi.md#burnnftflowmnemonic) | Burn an NFT
*nFTERC721OrCompatible()* | [**burn Nft Flow PK()**](./Api/NFTERC721OrCompatibleApi.md#burnnftflowpk) | Burn an NFT
*nFTERC721OrCompatible()* | [**burn Nft KMS()**](./Api/NFTERC721OrCompatibleApi.md#burnnftkms) | Burn an NFT
*nFTERC721OrCompatible()* | [**burn Nft KMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#burnnftkmscelo) | Burn an NFT
*nFTERC721OrCompatible()* | [**burn Nft KMSTron()**](./Api/NFTERC721OrCompatibleApi.md#burnnftkmstron) | Burn an NFT
*nFTERC721OrCompatible()* | [**burn Nft Tron()**](./Api/NFTERC721OrCompatibleApi.md#burnnfttron) | Burn an NFT
*nFTERC721OrCompatible()* | [**deploy Nft()**](./Api/NFTERC721OrCompatibleApi.md#deploynft) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**deploy Nft Celo()**](./Api/NFTERC721OrCompatibleApi.md#deploynftcelo) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**deploy Nft Celo KMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynftcelokms) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**deploy Nft Flow KMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynftflowkms) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**deploy Nft Flow Mnemonic()**](./Api/NFTERC721OrCompatibleApi.md#deploynftflowmnemonic) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**deploy Nft Flow PK()**](./Api/NFTERC721OrCompatibleApi.md#deploynftflowpk) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**deploy Nft KMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynftkms) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**deploy Nft Tron()**](./Api/NFTERC721OrCompatibleApi.md#deploynfttron) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**deploy Nft Tron KMS()**](./Api/NFTERC721OrCompatibleApi.md#deploynfttronkms) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**mint Multiple Nft()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenft) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Multiple Nft Celo()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftcelo) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Multiple Nft Flow KMS()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftflowkms) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Multiple Nft Flow Mnemonic()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftflowmnemonic) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Multiple Nft Flow PK()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftflowpk) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Multiple Nft KMS()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftkms) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Multiple Nft KMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftkmscelo) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Multiple Nft KMSTron()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftkmstron) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Multiple Nft Minter()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenftminter) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Multiple Nft Tron()**](./Api/NFTERC721OrCompatibleApi.md#mintmultiplenfttron) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**mint Nft()**](./Api/NFTERC721OrCompatibleApi.md#mintnft) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Algorand()**](./Api/NFTERC721OrCompatibleApi.md#mintnftalgorand) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Algorand KMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftalgorandkms) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Celo()**](./Api/NFTERC721OrCompatibleApi.md#mintnftcelo) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Express()**](./Api/NFTERC721OrCompatibleApi.md#mintnftexpress) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Express Algorand()**](./Api/NFTERC721OrCompatibleApi.md#mintnftexpressalgorand) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Express Solana()**](./Api/NFTERC721OrCompatibleApi.md#mintnftexpresssolana) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Flow KMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftflowkms) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Flow Mnemonic()**](./Api/NFTERC721OrCompatibleApi.md#mintnftflowmnemonic) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Flow PK()**](./Api/NFTERC721OrCompatibleApi.md#mintnftflowpk) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft KMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftkms) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft KMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#mintnftkmscelo) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft KMSTron()**](./Api/NFTERC721OrCompatibleApi.md#mintnftkmstron) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Minter()**](./Api/NFTERC721OrCompatibleApi.md#mintnftminter) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Solana()**](./Api/NFTERC721OrCompatibleApi.md#mintnftsolana) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Solana KMS()**](./Api/NFTERC721OrCompatibleApi.md#mintnftsolanakms) | Mint an NFT
*nFTERC721OrCompatible()* | [**mint Nft Tron()**](./Api/NFTERC721OrCompatibleApi.md#mintnfttron) | Mint an NFT
*nFTERC721OrCompatible()* | [**nft Get Balance Erc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetbalanceerc721) | Get the NFTs from a specific smart contract that a blockchain address holds
*nFTERC721OrCompatible()* | [**nft Get Contract Address()**](./Api/NFTERC721OrCompatibleApi.md#nftgetcontractaddress) | Get the address of an NFT smart contract by its transaction hash
*nFTERC721OrCompatible()* | [**nft Get Metadata Erc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetmetadataerc721) | Get NFT metadata
*nFTERC721OrCompatible()* | [**nft Get Provenance Data Erc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetprovenancedataerc721) | Get NFT provenance information
*nFTERC721OrCompatible()* | [**nft Get Royalty Erc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgetroyaltyerc721) | Get NFT royalty information
*nFTERC721OrCompatible()* | [**nft Get Tokens By Address Erc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettokensbyaddresserc721) | Get all NFTs that a blockchain address holds
*nFTERC721OrCompatible()* | [**nft Get Tokens By Collection Erc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettokensbycollectionerc721) | Get all NFTs from a collection
*nFTERC721OrCompatible()* | [**nft Get Transact Erc721()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransacterc721) | Get an NFT transaction by its hash
*nFTERC721OrCompatible()* | [**nft Get Transaction By Address()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransactionbyaddress) | Get NFT transactions on a blockchain address
*nFTERC721OrCompatible()* | [**nft Get Transaction By Token()**](./Api/NFTERC721OrCompatibleApi.md#nftgettransactionbytoken) | Get NFT transactions for an NFT
*nFTERC721OrCompatible()* | [**transfer Nft()**](./Api/NFTERC721OrCompatibleApi.md#transfernft) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Algo()**](./Api/NFTERC721OrCompatibleApi.md#transfernftalgo) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Algo Express()**](./Api/NFTERC721OrCompatibleApi.md#transfernftalgoexpress) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Algo KMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftalgokms) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Celo()**](./Api/NFTERC721OrCompatibleApi.md#transfernftcelo) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Flow KMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftflowkms) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Flow Mnemonic()**](./Api/NFTERC721OrCompatibleApi.md#transfernftflowmnemonic) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Flow PK()**](./Api/NFTERC721OrCompatibleApi.md#transfernftflowpk) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft KMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftkms) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft KMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#transfernftkmscelo) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft KMSTron()**](./Api/NFTERC721OrCompatibleApi.md#transfernftkmstron) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Solana()**](./Api/NFTERC721OrCompatibleApi.md#transfernftsolana) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Solana KMS()**](./Api/NFTERC721OrCompatibleApi.md#transfernftsolanakms) | Transfer an NFT
*nFTERC721OrCompatible()* | [**transfer Nft Tron()**](./Api/NFTERC721OrCompatibleApi.md#transfernfttron) | Transfer an NFT
*nFTERC721OrCompatible()* | [**update Cashback Value For Author Nft()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornft) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**update Cashback Value For Author Nft Celo()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftcelo) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**update Cashback Value For Author Nft KMS()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftkms) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**update Cashback Value For Author Nft KMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftkmscelo) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**update Cashback Value For Author Nft KMSTron()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornftkmstron) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**update Cashback Value For Author Nft Tron()**](./Api/NFTERC721OrCompatibleApi.md#updatecashbackvalueforauthornfttron) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**verify Solana NFT()**](./Api/NFTERC721OrCompatibleApi.md#verifysolananft) | Verify an NFT in an NFT collection on Solana
*nFTERC721OrCompatible()* | [**verify Solana NFTKMS()**](./Api/NFTERC721OrCompatibleApi.md#verifysolananftkms) | Verify an NFT in an NFT collection on Solana
*nodeRPC()* | [**node Json Post Rpc Driver()**](./Api/NodeRPCApi.md#nodejsonpostrpcdriver) | Connect to the blockchain node through an RPC driver
*nodeRPC()* | [**node Json Rpc Get Driver()**](./Api/NodeRPCApi.md#nodejsonrpcgetdriver) | Connect to the blockchain node through an RPC driver
*nodeRPC()* | [**node Json Rpc Put Driver()**](./Api/NodeRPCApi.md#nodejsonrpcputdriver) | Connect to the blockchain node through an RPC driver
*notificationSubscriptions()* | [**create Subscription Balance()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionbalance) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Contract Log Event()**](./Api/NotificationSubscriptionsApi.md#createsubscriptioncontractlogevent) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Incoming()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionincoming) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Interval()**](./Api/NotificationSubscriptionsApi.md#createsubscriptioninterval) | Create a subscription
*notificationSubscriptions()* | [**create Subscription KMSError()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionkmserror) | Create a subscription
*notificationSubscriptions()* | [**create Subscription KMSSuccess()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionkmssuccess) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Multi Token Transfer Event()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionmultitokentransferevent) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Nft Transfer Event()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionnfttransferevent) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Notification()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionnotification) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Partial Trade Match()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionpartialtradematch) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Pending()**](./Api/NotificationSubscriptionsApi.md#createsubscriptionpending) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Trade Match()**](./Api/NotificationSubscriptionsApi.md#createsubscriptiontradematch) | Create a subscription
*notificationSubscriptions()* | [**create Subscription Tx In The Block()**](./Api/NotificationSubscriptionsApi.md#createsubscriptiontxintheblock) | Create a subscription
*notificationSubscriptions()* | [**delete Subscription()**](./Api/NotificationSubscriptionsApi.md#deletesubscription) | Cancel existing subscription
*notificationSubscriptions()* | [**disable Web Hook Hmac()**](./Api/NotificationSubscriptionsApi.md#disablewebhookhmac) | Disable HMAC webhook digest
*notificationSubscriptions()* | [**enable Web Hook Hmac()**](./Api/NotificationSubscriptionsApi.md#enablewebhookhmac) | Enable HMAC webhook digest
*notificationSubscriptions()* | [**get All Webhooks()**](./Api/NotificationSubscriptionsApi.md#getallwebhooks) | List all executed webhooks
*notificationSubscriptions()* | [**get All Webhooks Count()**](./Api/NotificationSubscriptionsApi.md#getallwebhookscount) | Count of found entities for get webhook request
*notificationSubscriptions()* | [**get Subscription Report()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionreport) | Obtain report for subscription
*notificationSubscriptions()* | [**get Subscriptions()**](./Api/NotificationSubscriptionsApi.md#getsubscriptions) | List all active subscriptions
*notificationSubscriptions()* | [**get Subscriptions Count()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionscount) | Count of found entities for get webhook request
*orderBook()* | [**chart Request()**](./Api/OrderBookApi.md#chartrequest) | Obtain chart data from historical closed trades
*orderBook()* | [**create Future Trade()**](./Api/OrderBookApi.md#createfuturetrade) | Store buy / sell trade
*orderBook()* | [**create Trade()**](./Api/OrderBookApi.md#createtrade) | Store buy / sell trade
*orderBook()* | [**delete Account Trades()**](./Api/OrderBookApi.md#deleteaccounttrades) | Cancel all existing trades for account
*orderBook()* | [**delete Trade()**](./Api/OrderBookApi.md#deletetrade) | Cancel existing trade
*orderBook()* | [**get Buy Trades()**](./Api/OrderBookApi.md#getbuytrades) | List all active buy trades
*orderBook()* | [**get Buy Trades Body()**](./Api/OrderBookApi.md#getbuytradesbody) | List all active buy trades
*orderBook()* | [**get Historical Trades()**](./Api/OrderBookApi.md#gethistoricaltrades) | List all historical trades
*orderBook()* | [**get Historical Trades Body()**](./Api/OrderBookApi.md#gethistoricaltradesbody) | List all historical trades
*orderBook()* | [**get Matched Trades()**](./Api/OrderBookApi.md#getmatchedtrades) | List all matched orders from FUTURE_SELL/FUTURE_BUY trades
*orderBook()* | [**get Sell Trades()**](./Api/OrderBookApi.md#getselltrades) | List all active sell trades
*orderBook()* | [**get Sell Trades Body()**](./Api/OrderBookApi.md#getselltradesbody) | List all active sell trades
*orderBook()* | [**get Trade By Id()**](./Api/OrderBookApi.md#gettradebyid) | Get existing trade
*polygon()* | [**call Polygon Smart Contract Method()**](./Api/PolygonApi.md#callpolygonsmartcontractmethod) | Invoke a method in a smart contract on Polygon
*polygon()* | [**call Polygon Smart Contract Method Caller()**](./Api/PolygonApi.md#callpolygonsmartcontractmethodcaller) | Invoke a method in a smart contract on Polygon
*polygon()* | [**call Polygon Smart Contract Method KMS()**](./Api/PolygonApi.md#callpolygonsmartcontractmethodkms) | Invoke a method in a smart contract on Polygon
*polygon()* | [**call Polygon Smart Contract Read Method()**](./Api/PolygonApi.md#callpolygonsmartcontractreadmethod) | Invoke a method in a smart contract on Polygon
*polygon()* | [**polygon Broadcast()**](./Api/PolygonApi.md#polygonbroadcast) | Broadcast signed Polygon transaction
*polygon()* | [**polygon Generate Address()**](./Api/PolygonApi.md#polygongenerateaddress) | Generate Polygon account address from Extended public key
*polygon()* | [**polygon Generate Address Private Key()**](./Api/PolygonApi.md#polygongenerateaddressprivatekey) | Generate Polygon private key
*polygon()* | [**polygon Generate Wallet()**](./Api/PolygonApi.md#polygongeneratewallet) | Generate Polygon wallet
*polygon()* | [**polygon Get Balance()**](./Api/PolygonApi.md#polygongetbalance) | Get Polygon Account balance
*polygon()* | [**polygon Get Block()**](./Api/PolygonApi.md#polygongetblock) | Get Polygon block by hash
*polygon()* | [**polygon Get Current Block()**](./Api/PolygonApi.md#polygongetcurrentblock) | Get current block number
*polygon()* | [**polygon Get Transaction()**](./Api/PolygonApi.md#polygongettransaction) | Get Polygon Transaction
*polygon()* | [**polygon Get Transaction By Address()**](./Api/PolygonApi.md#polygongettransactionbyaddress) | Get Polygon transactions by address
*polygon()* | [**polygon Get Transaction Count()**](./Api/PolygonApi.md#polygongettransactioncount) | Get count of outgoing Polygon transactions
*polygon()* | [**polygon Web3 Driver()**](./Api/PolygonApi.md#polygonweb3driver) | Web3 HTTP driver
*polygon()* | [**transfer Polygon Blockchain()**](./Api/PolygonApi.md#transferpolygonblockchain) | Send MATIC from account to account
*polygon()* | [**transfer Polygon Blockchain KMS()**](./Api/PolygonApi.md#transferpolygonblockchainkms) | Send MATIC from account to account
*serviceUtils()* | [**freeze Api Key()**](./Api/ServiceUtilsApi.md#freezeapikey) | Freeze API Key
*serviceUtils()* | [**get Credits()**](./Api/ServiceUtilsApi.md#getcredits) | Get information about your credit consumption for the last month
*serviceUtils()* | [**get Version()**](./Api/ServiceUtilsApi.md#getversion) | Get API version
*serviceUtils()* | [**unfreeze Api Key()**](./Api/ServiceUtilsApi.md#unfreezeapikey) | Unfreeze API Key
*solana()* | [**solana Broadcast Confirm()**](./Api/SolanaApi.md#solanabroadcastconfirm) | Broadcast and confirm signed Solana transaction
*solana()* | [**solana Generate Wallet()**](./Api/SolanaApi.md#solanageneratewallet) | Generate Solana wallet
*solana()* | [**solana Get Balance()**](./Api/SolanaApi.md#solanagetbalance) | Get Solana Account balance
*solana()* | [**solana Get Block()**](./Api/SolanaApi.md#solanagetblock) | Get Solana block by number
*solana()* | [**solana Get Current Block()**](./Api/SolanaApi.md#solanagetcurrentblock) | Get current block number
*solana()* | [**solana Get Transaction()**](./Api/SolanaApi.md#solanagettransaction) | Get Solana Transaction
*solana()* | [**solana Web3 Driver()**](./Api/SolanaApi.md#solanaweb3driver) | JSON RPC HTTP driver
*solana()* | [**transfer Solana Blockchain()**](./Api/SolanaApi.md#transfersolanablockchain) | Send SOL from account to account
*solana()* | [**transfer Solana Blockchain KMS()**](./Api/SolanaApi.md#transfersolanablockchainkms) | Send SOL from account to account
*stellar()* | [**transfer Xlm Blockchain()**](./Api/StellarApi.md#transferxlmblockchain) | Send XLM from address to address
*stellar()* | [**transfer Xlm Blockchain Asset()**](./Api/StellarApi.md#transferxlmblockchainasset) | Send XLM from address to address
*stellar()* | [**transfer Xlm Blockchain KMS()**](./Api/StellarApi.md#transferxlmblockchainkms) | Send XLM from address to address
*stellar()* | [**transfer Xlm Blockchain KMSAsset()**](./Api/StellarApi.md#transferxlmblockchainkmsasset) | Send XLM from address to address
*stellar()* | [**trust Line Xlm Blockchain()**](./Api/StellarApi.md#trustlinexlmblockchain) | Create / Update / Delete XLM trust line
*stellar()* | [**trust Line Xlm Blockchain KMS()**](./Api/StellarApi.md#trustlinexlmblockchainkms) | Create / Update / Delete XLM trust line
*stellar()* | [**xlm Broadcast()**](./Api/StellarApi.md#xlmbroadcast) | Broadcast signed XLM transaction
*stellar()* | [**xlm Get Account Info()**](./Api/StellarApi.md#xlmgetaccountinfo) | Get XLM Account info
*stellar()* | [**xlm Get Account Tx()**](./Api/StellarApi.md#xlmgetaccounttx) | Get XLM Account transactions
*stellar()* | [**xlm Get Fee()**](./Api/StellarApi.md#xlmgetfee) | Get actual XLM fee
*stellar()* | [**xlm Get Last Closed Ledger()**](./Api/StellarApi.md#xlmgetlastclosedledger) | Get XLM Blockchain Information
*stellar()* | [**xlm Get Ledger()**](./Api/StellarApi.md#xlmgetledger) | Get XLM Blockchain Ledger by sequence
*stellar()* | [**xlm Get Ledger Tx()**](./Api/StellarApi.md#xlmgetledgertx) | Get XLM Blockchain Transactions in Ledger
*stellar()* | [**xlm Get Transaction()**](./Api/StellarApi.md#xlmgettransaction) | Get XLM Transaction by hash
*stellar()* | [**xlm Wallet()**](./Api/StellarApi.md#xlmwallet) | Generate XLM account
*transaction()* | [**get Transactions()**](./Api/TransactionApi.md#gettransactions) | Find transactions within the ledger.
*transaction()* | [**get Transactions By Account Id()**](./Api/TransactionApi.md#gettransactionsbyaccountid) | Find transactions for account.
*transaction()* | [**get Transactions By Customer Id()**](./Api/TransactionApi.md#gettransactionsbycustomerid) | Find transactions for a customer across all of the customer&#39;s accounts.
*transaction()* | [**get Transactions By Reference()**](./Api/TransactionApi.md#gettransactionsbyreference) | Find transactions with a given reference across all accounts.
*transaction()* | [**send Transaction()**](./Api/TransactionApi.md#sendtransaction) | Send payment
*transaction()* | [**send Transaction Batch()**](./Api/TransactionApi.md#sendtransactionbatch) | Send payment in batch
*tron()* | [**create Tron Trc10 Blockchain()**](./Api/TronApi.md#createtrontrc10blockchain) | Create a TRC-10 token
*tron()* | [**create Tron Trc10 Blockchain KMS()**](./Api/TronApi.md#createtrontrc10blockchainkms) | Create a TRC-10 token
*tron()* | [**create Tron Trc20 Blockchain()**](./Api/TronApi.md#createtrontrc20blockchain) | Create a TRC-20 token
*tron()* | [**create Tron Trc20 Blockchain KMS()**](./Api/TronApi.md#createtrontrc20blockchainkms) | Create a TRC-20 token
*tron()* | [**freeze Tron()**](./Api/TronApi.md#freezetron) | Freeze the balance of a TRON account
*tron()* | [**freeze Tron KMS()**](./Api/TronApi.md#freezetronkms) | Freeze the balance of a TRON account
*tron()* | [**generate Tronwallet()**](./Api/TronApi.md#generatetronwallet) | Generate a TRON wallet
*tron()* | [**transfer Tron Blockchain()**](./Api/TronApi.md#transfertronblockchain) | Send TRX to a TRON account
*tron()* | [**transfer Tron Blockchain KMS()**](./Api/TronApi.md#transfertronblockchainkms) | Send TRX to a TRON account
*tron()* | [**transfer Tron Trc10 Blockchain()**](./Api/TronApi.md#transfertrontrc10blockchain) | Send TRC-10 tokens to a TRON account
*tron()* | [**transfer Tron Trc10 Blockchain KMS()**](./Api/TronApi.md#transfertrontrc10blockchainkms) | Send TRC-10 tokens to a TRON account
*tron()* | [**transfer Tron Trc20 Blockchain()**](./Api/TronApi.md#transfertrontrc20blockchain) | Send TRC-20 tokens to a TRON account
*tron()* | [**transfer Tron Trc20 Blockchain KMS()**](./Api/TronApi.md#transfertrontrc20blockchainkms) | Send TRC-20 tokens to a TRON account
*tron()* | [**tron Account Tx()**](./Api/TronApi.md#tronaccounttx) | Get all transactions for a TRON account
*tron()* | [**tron Account Tx20()**](./Api/TronApi.md#tronaccounttx20) | Get TRC-20 transactions for a TRON account
*tron()* | [**tron Broadcast()**](./Api/TronApi.md#tronbroadcast) | Broadcast a TRON transaction
*tron()* | [**tron Generate Address()**](./Api/TronApi.md#trongenerateaddress) | Generate a TRON address from the wallet&#39;s extended public key
*tron()* | [**tron Generate Address Private Key()**](./Api/TronApi.md#trongenerateaddressprivatekey) | Generate the private key for a TRON address
*tron()* | [**tron Get Account()**](./Api/TronApi.md#trongetaccount) | Get the TRON account by its address
*tron()* | [**tron Get Block()**](./Api/TronApi.md#trongetblock) | Get a TRON block by its hash or height
*tron()* | [**tron Get Current Block()**](./Api/TronApi.md#trongetcurrentblock) | Get the current TRON block
*tron()* | [**tron Get Transaction()**](./Api/TronApi.md#trongettransaction) | Get a TRON transaction by its hash
*tron()* | [**tron Trc10 Detail()**](./Api/TronApi.md#trontrc10detail) | Get information about a TRC-10 token
*veChain()* | [**transfer Vet Blockchain()**](./Api/VeChainApi.md#transfervetblockchain) | Send VeChain from account to account
*veChain()* | [**transfer Vet Blockchain KMS()**](./Api/VeChainApi.md#transfervetblockchainkms) | Send VeChain from account to account
*veChain()* | [**vet Broadcast()**](./Api/VeChainApi.md#vetbroadcast) | Broadcast signed VeChain transaction
*veChain()* | [**vet Generate Address()**](./Api/VeChainApi.md#vetgenerateaddress) | Generate VeChain account address from Extended public key
*veChain()* | [**vet Generate Address Private Key()**](./Api/VeChainApi.md#vetgenerateaddressprivatekey) | Generate VeChain private key
*veChain()* | [**vet Generate Wallet()**](./Api/VeChainApi.md#vetgeneratewallet) | Generate VeChain wallet
*veChain()* | [**vet Get Balance()**](./Api/VeChainApi.md#vetgetbalance) | Get VeChain Account balance
*veChain()* | [**vet Get Block()**](./Api/VeChainApi.md#vetgetblock) | Get VeChain Block by hash
*veChain()* | [**vet Get Current Block()**](./Api/VeChainApi.md#vetgetcurrentblock) | Get VeChain current block
*veChain()* | [**vet Get Energy()**](./Api/VeChainApi.md#vetgetenergy) | Get VeChain Account energy (VTHO)
*veChain()* | [**vet Get Transaction()**](./Api/VeChainApi.md#vetgettransaction) | Get VeChain Transaction
*veChain()* | [**vet Get Transaction Receipt()**](./Api/VeChainApi.md#vetgettransactionreceipt) | Get VeChain Transaction Receipt
*virtualAccountBlockchainFees()* | [**offchain Estimate Fee()**](./Api/VirtualAccountBlockchainFeesApi.md#offchainestimatefee) | Estimate ledger to blockchain transaction fee
*virtualCurrency()* | [**create Currency()**](./Api/VirtualCurrencyApi.md#createcurrency) | Create new virtual currency
*virtualCurrency()* | [**get Currency()**](./Api/VirtualCurrencyApi.md#getcurrency) | Get virtual currency
*virtualCurrency()* | [**mint Currency()**](./Api/VirtualCurrencyApi.md#mintcurrency) | Create new supply of virtual currency
*virtualCurrency()* | [**revoke Currency()**](./Api/VirtualCurrencyApi.md#revokecurrency) | Destroy supply of virtual currency
*virtualCurrency()* | [**update Currency()**](./Api/VirtualCurrencyApi.md#updatecurrency) | Update virtual currency
*withdrawal()* | [**broadcast Blockchain Transaction()**](./Api/WithdrawalApi.md#broadcastblockchaintransaction) | Broadcast signed transaction and complete withdrawal
*withdrawal()* | [**cancel In Progress Withdrawal()**](./Api/WithdrawalApi.md#cancelinprogresswithdrawal) | Cancel withdrawal
*withdrawal()* | [**complete Withdrawal()**](./Api/WithdrawalApi.md#completewithdrawal) | Complete withdrawal
*withdrawal()* | [**get Withdrawals()**](./Api/WithdrawalApi.md#getwithdrawals) | Get withdrawals
*withdrawal()* | [**store Withdrawal()**](./Api/WithdrawalApi.md#storewithdrawal) | Store withdrawal
*xRP()* | [**account Settings Xrp Blockchain()**](./Api/XRPApi.md#accountsettingsxrpblockchain) | Modify XRP account
*xRP()* | [**account Settings Xrp Blockchain KMS()**](./Api/XRPApi.md#accountsettingsxrpblockchainkms) | Modify XRP account
*xRP()* | [**transfer Xrp Blockchain()**](./Api/XRPApi.md#transferxrpblockchain) | Send XRP from address to address
*xRP()* | [**transfer Xrp Blockchain Asset()**](./Api/XRPApi.md#transferxrpblockchainasset) | Send XRP from address to address
*xRP()* | [**transfer Xrp Blockchain Asset KMS()**](./Api/XRPApi.md#transferxrpblockchainassetkms) | Send XRP from address to address
*xRP()* | [**transfer Xrp Blockchain KMS()**](./Api/XRPApi.md#transferxrpblockchainkms) | Send XRP from address to address
*xRP()* | [**trust Line Xrp Blockchain()**](./Api/XRPApi.md#trustlinexrpblockchain) | Create / Update / Delete XRP trust line
*xRP()* | [**trust Line Xrp Blockchain KMS()**](./Api/XRPApi.md#trustlinexrpblockchainkms) | Create / Update / Delete XRP trust line
*xRP()* | [**xrp Broadcast()**](./Api/XRPApi.md#xrpbroadcast) | Broadcast signed XRP transaction
*xRP()* | [**xrp Get Account Balance()**](./Api/XRPApi.md#xrpgetaccountbalance) | Get Account Balance
*xRP()* | [**xrp Get Account Info()**](./Api/XRPApi.md#xrpgetaccountinfo) | Get Account info
*xRP()* | [**xrp Get Account Tx()**](./Api/XRPApi.md#xrpgetaccounttx) | Get Account transactions
*xRP()* | [**xrp Get Fee()**](./Api/XRPApi.md#xrpgetfee) | Get actual Blockchain fee
*xRP()* | [**xrp Get Last Closed Ledger()**](./Api/XRPApi.md#xrpgetlastclosedledger) | Get XRP Blockchain Information
*xRP()* | [**xrp Get Ledger()**](./Api/XRPApi.md#xrpgetledger) | Get Ledger
*xRP()* | [**xrp Get Transaction()**](./Api/XRPApi.md#xrpgettransaction) | Get XRP Transaction by hash
*xRP()* | [**xrp Wallet()**](./Api/XRPApi.md#xrpwallet) | Generate XRP account
*xinFin()* | [**call Xdc Read Smart Contract Method()**](./Api/XinFinApi.md#callxdcreadsmartcontractmethod) | Invoke a method in a smart contract on XinFin
*xinFin()* | [**call Xdc Smart Contract Method()**](./Api/XinFinApi.md#callxdcsmartcontractmethod) | Invoke a method in a smart contract on XinFin
*xinFin()* | [**call Xdc Smart Contract Method KMS()**](./Api/XinFinApi.md#callxdcsmartcontractmethodkms) | Invoke a method in a smart contract on XinFin
*xinFin()* | [**transfer Xdc Blockchain()**](./Api/XinFinApi.md#transferxdcblockchain) | Send XDC / ERC20 from account to account
*xinFin()* | [**transfer Xdc Blockchain KMS()**](./Api/XinFinApi.md#transferxdcblockchainkms) | Send XDC / ERC20 from account to account
*xinFin()* | [**xdc Broadcast()**](./Api/XinFinApi.md#xdcbroadcast) | Broadcast signed XDC transaction
*xinFin()* | [**xdc Generate Address()**](./Api/XinFinApi.md#xdcgenerateaddress) | Generate XDC account address from Extended public key
*xinFin()* | [**xdc Generate Address Private Key()**](./Api/XinFinApi.md#xdcgenerateaddressprivatekey) | Generate XDC private key
*xinFin()* | [**xdc Generate Wallet()**](./Api/XinFinApi.md#xdcgeneratewallet) | Generate XDC wallet
*xinFin()* | [**xdc Get Balance()**](./Api/XinFinApi.md#xdcgetbalance) | Get XDC Account balance
*xinFin()* | [**xdc Get Block()**](./Api/XinFinApi.md#xdcgetblock) | Get XDC block by hash
*xinFin()* | [**xdc Get Current Block()**](./Api/XinFinApi.md#xdcgetcurrentblock) | Get current block number
*xinFin()* | [**xdc Get Transaction()**](./Api/XinFinApi.md#xdcgettransaction) | Get XDC Transaction
*xinFin()* | [**xdc Get Transaction Count()**](./Api/XinFinApi.md#xdcgettransactioncount) | Get count of outgoing XDC transactions
*xinFin()* | [**xdc Web3 Driver()**](./Api/XinFinApi.md#xdcweb3driver) | Web3 HTTP driver


[[Back to top]](#) 