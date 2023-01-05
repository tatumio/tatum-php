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
*account()* | [**activateAccount()**](./Api/AccountApi.md#activateaccount) | Activate account
*account()* | [**blockAmount()**](./Api/AccountApi.md#blockamount) | Block an amount in an account
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
*account()* | [**ledgerAccountCreateAccount()**](./Api/AccountApi.md#ledgeraccountcreateaccount) | Create a virtual account
*account()* | [**ledgerAccountCreateAccountXpub()**](./Api/AccountApi.md#ledgeraccountcreateaccountxpub) | Create a virtual account
*account()* | [**unblockAmountWithTransaction()**](./Api/AccountApi.md#unblockamountwithtransaction) | Unblock an amount in an account and perform a transaction
*account()* | [**unfreezeAccount()**](./Api/AccountApi.md#unfreezeaccount) | Unfreeze account
*account()* | [**updateAccountByAccountId()**](./Api/AccountApi.md#updateaccountbyaccountid) | Update account
*algorand()* | [**algoNodeGetDriver()**](./Api/AlgorandApi.md#algonodegetdriver) | Access Algorand Algod GET node endpoints
*algorand()* | [**algoNodeIndexerGetDriver()**](./Api/AlgorandApi.md#algonodeindexergetdriver) | Access Algorand Indexer GET node endpoints
*algorand()* | [**algoNodePostDriver()**](./Api/AlgorandApi.md#algonodepostdriver) | Access Algorand Algod POST node endpoints
*algorand()* | [**algoandBroadcast()**](./Api/AlgorandApi.md#algoandbroadcast) | Broadcast signed Algorand transaction
*algorand()* | [**algorandAssetReceiveAlgorandAsset()**](./Api/AlgorandApi.md#algorandassetreceivealgorandasset) | Enable receiving asset on account
*algorand()* | [**algorandAssetReceiveAlgorandAssetKMS()**](./Api/AlgorandApi.md#algorandassetreceivealgorandassetkms) | Enable receiving asset on account
*algorand()* | [**algorandGenerateAddress()**](./Api/AlgorandApi.md#algorandgenerateaddress) | Generate Algorand account address from private key
*algorand()* | [**algorandGenerateWallet()**](./Api/AlgorandApi.md#algorandgeneratewallet) | Generate Algorand wallet
*algorand()* | [**algorandGetBalance()**](./Api/AlgorandApi.md#algorandgetbalance) | Get Algorand Account balance
*algorand()* | [**algorandGetBlock()**](./Api/AlgorandApi.md#algorandgetblock) | Get Algorand block by block round number
*algorand()* | [**algorandGetCurrentBlock()**](./Api/AlgorandApi.md#algorandgetcurrentblock) | Get current block number
*algorand()* | [**algorandGetPayTransactionsByFromTo()**](./Api/AlgorandApi.md#algorandgetpaytransactionsbyfromto) | Get Algorand Transactions between from and to
*algorand()* | [**algorandGetTransaction()**](./Api/AlgorandApi.md#algorandgettransaction) | Get Algorand Transaction
*algorand()* | [**algorandTransactionTransferAlgorandBlockchain()**](./Api/AlgorandApi.md#algorandtransactiontransferalgorandblockchain) | Send Algos to an Algorand account
*algorand()* | [**algorandTransactionTransferAlgorandBlockchainKMS()**](./Api/AlgorandApi.md#algorandtransactiontransferalgorandblockchainkms) | Send Algos to an Algorand account
*auction()* | [**blockchainAuctionApproveNftSpending()**](./Api/AuctionApi.md#blockchainauctionapprovenftspending) | Allow the NFT auction or marketplace to transfer an asset
*auction()* | [**blockchainAuctionApproveNftSpendingCelo()**](./Api/AuctionApi.md#blockchainauctionapprovenftspendingcelo) | Allow the NFT auction or marketplace to transfer an asset
*auction()* | [**blockchainAuctionApproveNftSpendingCeloKMS()**](./Api/AuctionApi.md#blockchainauctionapprovenftspendingcelokms) | Allow the NFT auction or marketplace to transfer an asset
*auction()* | [**blockchainAuctionApproveNftSpendingKMS()**](./Api/AuctionApi.md#blockchainauctionapprovenftspendingkms) | Allow the NFT auction or marketplace to transfer an asset
*auction()* | [**blockchainAuctionBidOnAuction()**](./Api/AuctionApi.md#blockchainauctionbidonauction) | Bid for an asset at the NFT auction
*auction()* | [**blockchainAuctionBidOnAuctionCelo()**](./Api/AuctionApi.md#blockchainauctionbidonauctioncelo) | Bid for an asset at the NFT auction
*auction()* | [**blockchainAuctionBidOnAuctionCeloKMS()**](./Api/AuctionApi.md#blockchainauctionbidonauctioncelokms) | Bid for an asset at the NFT auction
*auction()* | [**blockchainAuctionBidOnAuctionKMS()**](./Api/AuctionApi.md#blockchainauctionbidonauctionkms) | Bid for an asset at the NFT auction
*auction()* | [**blockchainAuctionCancelAuction()**](./Api/AuctionApi.md#blockchainauctioncancelauction) | Cancel the selling of an asset at the NFT auction
*auction()* | [**blockchainAuctionCancelAuctionCelo()**](./Api/AuctionApi.md#blockchainauctioncancelauctioncelo) | Cancel the selling of an asset at the NFT auction
*auction()* | [**blockchainAuctionCancelAuctionCeloKMS()**](./Api/AuctionApi.md#blockchainauctioncancelauctioncelokms) | Cancel the selling of an asset at the NFT auction
*auction()* | [**blockchainAuctionCancelAuctionKMS()**](./Api/AuctionApi.md#blockchainauctioncancelauctionkms) | Cancel the selling of an asset at the NFT auction
*auction()* | [**blockchainAuctionFeeUpdateFeeAuctionCeloKMSUpdate()**](./Api/AuctionApi.md#blockchainauctionfeeupdatefeeauctioncelokmsupdate) | Update the NFT auction fee
*auction()* | [**blockchainAuctionFeeUpdateFeeAuctionCeloUpdate()**](./Api/AuctionApi.md#blockchainauctionfeeupdatefeeauctionceloupdate) | Update the NFT auction fee
*auction()* | [**blockchainAuctionFeeUpdateFeeAuctionKMSUpdate()**](./Api/AuctionApi.md#blockchainauctionfeeupdatefeeauctionkmsupdate) | Update the NFT auction fee
*auction()* | [**blockchainAuctionFeeUpdateFeeAuctionUpdate()**](./Api/AuctionApi.md#blockchainauctionfeeupdatefeeauctionupdate) | Update the NFT auction fee
*auction()* | [**blockchainAuctionGenerateAuction()**](./Api/AuctionApi.md#blockchainauctiongenerateauction) | Create an NFT auction
*auction()* | [**blockchainAuctionGenerateAuctionCelo()**](./Api/AuctionApi.md#blockchainauctiongenerateauctioncelo) | Create an NFT auction
*auction()* | [**blockchainAuctionGenerateAuctionCeloKMS()**](./Api/AuctionApi.md#blockchainauctiongenerateauctioncelokms) | Create an NFT auction
*auction()* | [**blockchainAuctionGenerateAuctionKMS()**](./Api/AuctionApi.md#blockchainauctiongenerateauctionkms) | Create an NFT auction
*auction()* | [**blockchainAuctionRecipientUpdateFeeRecipientCeloKMSUpdate()**](./Api/AuctionApi.md#blockchainauctionrecipientupdatefeerecipientcelokmsupdate) | Update the recipient of the NFT auction fee
*auction()* | [**blockchainAuctionRecipientUpdateFeeRecipientCeloUpdate()**](./Api/AuctionApi.md#blockchainauctionrecipientupdatefeerecipientceloupdate) | Update the recipient of the NFT auction fee
*auction()* | [**blockchainAuctionRecipientUpdateFeeRecipientKMSUpdate()**](./Api/AuctionApi.md#blockchainauctionrecipientupdatefeerecipientkmsupdate) | Update the recipient of the NFT auction fee
*auction()* | [**blockchainAuctionRecipientUpdateFeeRecipientUpdate()**](./Api/AuctionApi.md#blockchainauctionrecipientupdatefeerecipientupdate) | Update the recipient of the NFT auction fee
*auction()* | [**blockchainAuctionSellCreateAuction()**](./Api/AuctionApi.md#blockchainauctionsellcreateauction) | Sell an asset at the NFT auction
*auction()* | [**blockchainAuctionSellCreateAuctionCelo()**](./Api/AuctionApi.md#blockchainauctionsellcreateauctioncelo) | Sell an asset at the NFT auction
*auction()* | [**blockchainAuctionSellCreateAuctionCeloKMS()**](./Api/AuctionApi.md#blockchainauctionsellcreateauctioncelokms) | Sell an asset at the NFT auction
*auction()* | [**blockchainAuctionSellCreateAuctionKMS()**](./Api/AuctionApi.md#blockchainauctionsellcreateauctionkms) | Sell an asset at the NFT auction
*auction()* | [**blockchainAuctionSettleAuction()**](./Api/AuctionApi.md#blockchainauctionsettleauction) | Settle an NFT auction
*auction()* | [**blockchainAuctionSettleAuctionCelo()**](./Api/AuctionApi.md#blockchainauctionsettleauctioncelo) | Settle an NFT auction
*auction()* | [**blockchainAuctionSettleAuctionCeloKMS()**](./Api/AuctionApi.md#blockchainauctionsettleauctioncelokms) | Settle an NFT auction
*auction()* | [**blockchainAuctionSettleAuctionKMS()**](./Api/AuctionApi.md#blockchainauctionsettleauctionkms) | Settle an NFT auction
*auction()* | [**getAuction()**](./Api/AuctionApi.md#getauction) | Get information about an auctioned asset at the NFT auction
*auction()* | [**getAuctionFee()**](./Api/AuctionApi.md#getauctionfee) | Get the NFT auction fee
*auction()* | [**getAuctionFeeRecipient()**](./Api/AuctionApi.md#getauctionfeerecipient) | Get the recipient of the NFT auction fee
*bNBBeaconChain()* | [**bnbBroadcast()**](./Api/BNBBeaconChainApi.md#bnbbroadcast) | Broadcast signed BNB transaction
*bNBBeaconChain()* | [**bnbGenerateWallet()**](./Api/BNBBeaconChainApi.md#bnbgeneratewallet) | Generate Binance wallet
*bNBBeaconChain()* | [**bnbGetAccount()**](./Api/BNBBeaconChainApi.md#bnbgetaccount) | Get Binance Account
*bNBBeaconChain()* | [**bnbGetBlock()**](./Api/BNBBeaconChainApi.md#bnbgetblock) | Get Binance Transactions in Block
*bNBBeaconChain()* | [**bnbGetCurrentBlock()**](./Api/BNBBeaconChainApi.md#bnbgetcurrentblock) | Get Binance current block
*bNBBeaconChain()* | [**bnbGetTransaction()**](./Api/BNBBeaconChainApi.md#bnbgettransaction) | Get Binance Transaction
*bNBBeaconChain()* | [**bnbGetTxByAccount()**](./Api/BNBBeaconChainApi.md#bnbgettxbyaccount) | Get Binance Transactions By Address
*bNBBeaconChain()* | [**bnbTransactionTransferBnbBlockchain()**](./Api/BNBBeaconChainApi.md#bnbtransactiontransferbnbblockchain) | Send Binance / Binance Token from account to account
*bNBBeaconChain()* | [**bnbTransactionTransferBnbBlockchainKMS()**](./Api/BNBBeaconChainApi.md#bnbtransactiontransferbnbblockchainkms) | Send Binance / Binance Token from account to account
*bNBSmartChain()* | [**bscBroadcast()**](./Api/BNBSmartChainApi.md#bscbroadcast) | Broadcast signed BSC transaction
*bNBSmartChain()* | [**bscGenerateAddress()**](./Api/BNBSmartChainApi.md#bscgenerateaddress) | Generate BSC account address from Extended public key
*bNBSmartChain()* | [**bscGenerateAddressPrivateKey()**](./Api/BNBSmartChainApi.md#bscgenerateaddressprivatekey) | Generate BSC private key
*bNBSmartChain()* | [**bscGenerateWallet()**](./Api/BNBSmartChainApi.md#bscgeneratewallet) | Generate BSC wallet
*bNBSmartChain()* | [**bscGetBalance()**](./Api/BNBSmartChainApi.md#bscgetbalance) | Get BSC Account balance
*bNBSmartChain()* | [**bscGetBlock()**](./Api/BNBSmartChainApi.md#bscgetblock) | Get BSC block by hash
*bNBSmartChain()* | [**bscGetCurrentBlock()**](./Api/BNBSmartChainApi.md#bscgetcurrentblock) | Get current block number
*bNBSmartChain()* | [**bscGetTransaction()**](./Api/BNBSmartChainApi.md#bscgettransaction) | Get BSC Transaction
*bNBSmartChain()* | [**bscGetTransactionCount()**](./Api/BNBSmartChainApi.md#bscgettransactioncount) | Get count of outgoing BSC transactions
*bNBSmartChain()* | [**bscSmartcontractCallBscSmartContractMethod()**](./Api/BNBSmartChainApi.md#bscsmartcontractcallbscsmartcontractmethod) | Invoke a method in a smart contract on BNB Smart Chain
*bNBSmartChain()* | [**bscSmartcontractCallBscSmartContractMethodKMS()**](./Api/BNBSmartChainApi.md#bscsmartcontractcallbscsmartcontractmethodkms) | Invoke a method in a smart contract on BNB Smart Chain
*bNBSmartChain()* | [**bscSmartcontractCallBscSmartContractReadMethod()**](./Api/BNBSmartChainApi.md#bscsmartcontractcallbscsmartcontractreadmethod) | Invoke a method in a smart contract on BNB Smart Chain
*bNBSmartChain()* | [**bscTransactionTransferBscBlockchain()**](./Api/BNBSmartChainApi.md#bsctransactiontransferbscblockchain) | Send BSC / BEP20 from account to account
*bNBSmartChain()* | [**bscTransactionTransferBscBlockchainKMS()**](./Api/BNBSmartChainApi.md#bsctransactiontransferbscblockchainkms) | Send BSC / BEP20 from account to account
*bNBSmartChain()* | [**bscWeb3Driver()**](./Api/BNBSmartChainApi.md#bscweb3driver) | Web3 HTTP driver
*bitcoin()* | [**bitcoinTransactionBtcTransactionFromAddress()**](./Api/BitcoinApi.md#bitcointransactionbtctransactionfromaddress) | Send BTC to Bitcoin addresses
*bitcoin()* | [**bitcoinTransactionBtcTransactionFromAddressKMS()**](./Api/BitcoinApi.md#bitcointransactionbtctransactionfromaddresskms) | Send BTC to Bitcoin addresses
*bitcoin()* | [**bitcoinTransactionBtcTransactionFromUTXO()**](./Api/BitcoinApi.md#bitcointransactionbtctransactionfromutxo) | Send BTC to Bitcoin addresses
*bitcoin()* | [**bitcoinTransactionBtcTransactionFromUTXOKMS()**](./Api/BitcoinApi.md#bitcointransactionbtctransactionfromutxokms) | Send BTC to Bitcoin addresses
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
*bitcoinCash()* | [**bcashTransactionBchTransaction()**](./Api/BitcoinCashApi.md#bcashtransactionbchtransaction) | Send BCH to Bitcoin Cash addresses
*bitcoinCash()* | [**bcashTransactionBchTransactionKMS()**](./Api/BitcoinCashApi.md#bcashtransactionbchtransactionkms) | Send BCH to Bitcoin Cash addresses
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
*blockchainAddresses()* | [**addressExists()**](./Api/BlockchainAddressesApi.md#addressexists) | Check whether a blockchain address is assigned to a virtual account
*blockchainAddresses()* | [**assignAddress()**](./Api/BlockchainAddressesApi.md#assignaddress) | Assign a blockchain address to a virtual account
*blockchainAddresses()* | [**generateDepositAddress()**](./Api/BlockchainAddressesApi.md#generatedepositaddress) | Create a deposit address for a virtual account
*blockchainAddresses()* | [**generateDepositAddressesBatch()**](./Api/BlockchainAddressesApi.md#generatedepositaddressesbatch) | Create multiple deposit addresses for a virtual account
*blockchainAddresses()* | [**getAllDepositAddresses()**](./Api/BlockchainAddressesApi.md#getalldepositaddresses) | Get all deposit addresses for a virtual account
*blockchainAddresses()* | [**removeAddress()**](./Api/BlockchainAddressesApi.md#removeaddress) | Remove a deposit address from a virtual account
*blockchainFees()* | [**blockchainEstimateFee()**](./Api/BlockchainFeesApi.md#blockchainestimatefee) | Estimate the fee for a transaction
*blockchainFees()* | [**blockchainEstimateFeeBatchMintNft()**](./Api/BlockchainFeesApi.md#blockchainestimatefeebatchmintnft) | Estimate the fee for a transaction
*blockchainFees()* | [**blockchainEstimateFeeDeployCustodialWallet()**](./Api/BlockchainFeesApi.md#blockchainestimatefeedeploycustodialwallet) | Estimate the fee for a transaction
*blockchainFees()* | [**blockchainEstimateFeeFromAddress()**](./Api/BlockchainFeesApi.md#blockchainestimatefeefromaddress) | Estimate the fee for a transaction
*blockchainFees()* | [**blockchainEstimateFeeFromUTXO()**](./Api/BlockchainFeesApi.md#blockchainestimatefeefromutxo) | Estimate the fee for a transaction
*blockchainFees()* | [**blockchainEstimateFeeTransferFromCustodial()**](./Api/BlockchainFeesApi.md#blockchainestimatefeetransferfromcustodial) | Estimate the fee for a transaction
*blockchainFees()* | [**bscEstimateGas()**](./Api/BlockchainFeesApi.md#bscestimategas) | Estimate BNB Smart Chain transaction fees
*blockchainFees()* | [**celoEstimateGas()**](./Api/BlockchainFeesApi.md#celoestimategas) | Estimate Celo Chain transaction fees
*blockchainFees()* | [**egldEstimateGas()**](./Api/BlockchainFeesApi.md#egldestimategas) | Estimate EGLD transaction fees
*blockchainFees()* | [**ethEstimateGas()**](./Api/BlockchainFeesApi.md#ethestimategas) | Estimate Ethereum transaction fees
*blockchainFees()* | [**ethEstimateGasBatch()**](./Api/BlockchainFeesApi.md#ethestimategasbatch) | Estimate multiple Ethereum transaction fees
*blockchainFees()* | [**getBlockchainFee()**](./Api/BlockchainFeesApi.md#getblockchainfee) | Get recommended blockchain fee / gas price
*blockchainFees()* | [**kcsEstimateGas()**](./Api/BlockchainFeesApi.md#kcsestimategas) | Estimate KuCoin Community Chain transaction fees
*blockchainFees()* | [**klaytnEstimateGas()**](./Api/BlockchainFeesApi.md#klaytnestimategas) | Estimate Klaytn transaction fees
*blockchainFees()* | [**polygonEstimateGas()**](./Api/BlockchainFeesApi.md#polygonestimategas) | Estimate Polygon transaction fees
*blockchainFees()* | [**vetEstimateGas()**](./Api/BlockchainFeesApi.md#vetestimategas) | Estimate VeChain Gas for transaction
*blockchainFees()* | [**xdcEstimateGas()**](./Api/BlockchainFeesApi.md#xdcestimategas) | Estimate XinFin transaction fees
*blockchainOperations()* | [**bnbAssetOffchain()**](./Api/BlockchainOperationsApi.md#bnbassetoffchain) | Create a BNB-based asset
*blockchainOperations()* | [**offchainAdaTransferAdaKMS()**](./Api/BlockchainOperationsApi.md#offchainadatransferadakms) | Send ADA from a virtual account to the blockchain
*blockchainOperations()* | [**offchainAdaTransferAdaKeyPair()**](./Api/BlockchainOperationsApi.md#offchainadatransferadakeypair) | Send ADA from a virtual account to the blockchain
*blockchainOperations()* | [**offchainAdaTransferAdaMnemonic()**](./Api/BlockchainOperationsApi.md#offchainadatransferadamnemonic) | Send ADA from a virtual account to the blockchain
*blockchainOperations()* | [**offchainAlgoErc20DeployAlgoErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offchainalgoerc20deployalgoerc20offchainkmsaddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offchainalgoerc20deployalgoerc20offchainmnemonicaddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainAlgoErc20DeployAlgoErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offchainalgoerc20deployalgoerc20offchainpkaddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainAlgorandTransferAlgo()**](./Api/BlockchainOperationsApi.md#offchainalgorandtransferalgo) | Send ALGO from a virtual account to the blockchain
*blockchainOperations()* | [**offchainAlgorandTransferAlgoErc20()**](./Api/BlockchainOperationsApi.md#offchainalgorandtransferalgoerc20) | Send ALGO from a virtual account to the blockchain
*blockchainOperations()* | [**offchainAlgorandTransferAlgoKMS()**](./Api/BlockchainOperationsApi.md#offchainalgorandtransferalgokms) | Send ALGO from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBcashTransferBchKMS()**](./Api/BlockchainOperationsApi.md#offchainbcashtransferbchkms) | Send BCH from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBcashTransferBchKeyPair()**](./Api/BlockchainOperationsApi.md#offchainbcashtransferbchkeypair) | Send BCH from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBcashTransferBchMnemonic()**](./Api/BlockchainOperationsApi.md#offchainbcashtransferbchmnemonic) | Send BCH from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBitcoinTransferBtcKMS()**](./Api/BlockchainOperationsApi.md#offchainbitcointransferbtckms) | Send BTC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBitcoinTransferBtcKeyPair()**](./Api/BlockchainOperationsApi.md#offchainbitcointransferbtckeypair) | Send BTC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBitcoinTransferBtcMnemonic()**](./Api/BlockchainOperationsApi.md#offchainbitcointransferbtcmnemonic) | Send BTC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBnbTransferBnb()**](./Api/BlockchainOperationsApi.md#offchainbnbtransferbnb) | Send BNB from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBnbTransferBnbKMS()**](./Api/BlockchainOperationsApi.md#offchainbnbtransferbnbkms) | Send BNB from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBscBep20DeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offchainbscbep20deployerc20offchainkmsaddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainBscBep20DeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offchainbscbep20deployerc20offchainkmsxpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainBscBep20DeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offchainbscbep20deployerc20offchainmnemxpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainBscBep20DeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offchainbscbep20deployerc20offchainmnemonicaddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainBscBep20DeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offchainbscbep20deployerc20offchainpkaddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainBscBep20DeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offchainbscbep20deployerc20offchainpkxpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainBscBep20Erc20()**](./Api/BlockchainOperationsApi.md#offchainbscbep20erc20) | Register a new BNB Smart Chain BEP-20 token in the virtual account
*blockchainOperations()* | [**offchainBscBep20Erc20Address()**](./Api/BlockchainOperationsApi.md#offchainbscbep20erc20address) | Register a new BNB Smart Chain BEP-20 token in the virtual account
*blockchainOperations()* | [**offchainBscTransferBsc()**](./Api/BlockchainOperationsApi.md#offchainbsctransferbsc) | Send BSC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBscTransferBscKMS()**](./Api/BlockchainOperationsApi.md#offchainbsctransferbsckms) | Send BSC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainBscTransferBscMnemonic()**](./Api/BlockchainOperationsApi.md#offchainbsctransferbscmnemonic) | Send BSC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainCeloErc20()**](./Api/BlockchainOperationsApi.md#offchainceloerc20) | Register a new Celo ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**offchainCeloErc20Address()**](./Api/BlockchainOperationsApi.md#offchainceloerc20address) | Register a new Celo ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**offchainCeloErc20DeployCeloErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offchainceloerc20deployceloerc20offchainkmsaddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainCeloErc20DeployCeloErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offchainceloerc20deployceloerc20offchainkmsxpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainCeloErc20DeployCeloErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offchainceloerc20deployceloerc20offchainmnemxpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainCeloErc20DeployCeloErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offchainceloerc20deployceloerc20offchainmnemonicaddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainCeloErc20DeployCeloErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offchainceloerc20deployceloerc20offchainpkaddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainCeloErc20DeployCeloErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offchainceloerc20deployceloerc20offchainpkxpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainCeloTransferCelo()**](./Api/BlockchainOperationsApi.md#offchaincelotransfercelo) | Send CELO from a virtual account to the blockchain
*blockchainOperations()* | [**offchainCeloTransferCeloKMS()**](./Api/BlockchainOperationsApi.md#offchaincelotransfercelokms) | Send CELO from a virtual account to the blockchain
*blockchainOperations()* | [**offchainCeloTransferCeloMnemonic()**](./Api/BlockchainOperationsApi.md#offchaincelotransfercelomnemonic) | Send CELO from a virtual account to the blockchain
*blockchainOperations()* | [**offchainDogecoinTransferDogeKMS()**](./Api/BlockchainOperationsApi.md#offchaindogecointransferdogekms) | Send DOGE from a virtual account to the blockchain
*blockchainOperations()* | [**offchainDogecoinTransferDogeKeyPair()**](./Api/BlockchainOperationsApi.md#offchaindogecointransferdogekeypair) | Send DOGE from a virtual account to the blockchain
*blockchainOperations()* | [**offchainDogecoinTransferDogeMnemonic()**](./Api/BlockchainOperationsApi.md#offchaindogecointransferdogemnemonic) | Send DOGE from a virtual account to the blockchain
*blockchainOperations()* | [**offchainEgldTransferEth()**](./Api/BlockchainOperationsApi.md#offchainegldtransfereth) | Send EGLD from a virtual account to the blockchain
*blockchainOperations()* | [**offchainEgldTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offchainegldtransferethkms) | Send EGLD from a virtual account to the blockchain
*blockchainOperations()* | [**offchainEgldTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offchainegldtransferethmnemonic) | Send EGLD from a virtual account to the blockchain
*blockchainOperations()* | [**offchainEthereumErc20()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20) | Register a new Ethereum ERC-20 token in the virtual account
*blockchainOperations()* | [**offchainEthereumErc20Address()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20address) | Register a new Ethereum ERC-20 token in the virtual account
*blockchainOperations()* | [**offchainEthereumErc20DeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20deployerc20offchainkmsaddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainEthereumErc20DeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20deployerc20offchainkmsxpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainEthereumErc20DeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20deployerc20offchainmnemxpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainEthereumErc20DeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20deployerc20offchainmnemonicaddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainEthereumErc20DeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20deployerc20offchainpkaddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainEthereumErc20DeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20deployerc20offchainpkxpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainEthereumErc20TransferErc20()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20transfererc20) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
*blockchainOperations()* | [**offchainEthereumErc20TransferErc20KMS()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20transfererc20kms) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
*blockchainOperations()* | [**offchainEthereumErc20TransferErc20Mnemonic()**](./Api/BlockchainOperationsApi.md#offchainethereumerc20transfererc20mnemonic) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
*blockchainOperations()* | [**offchainEthereumTransferEth()**](./Api/BlockchainOperationsApi.md#offchainethereumtransfereth) | Send ETH from a virtual account to the blockchain
*blockchainOperations()* | [**offchainEthereumTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offchainethereumtransferethkms) | Send ETH from a virtual account to the blockchain
*blockchainOperations()* | [**offchainEthereumTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offchainethereumtransferethmnemonic) | Send ETH from a virtual account to the blockchain
*blockchainOperations()* | [**offchainFlowTransferFlowKMS()**](./Api/BlockchainOperationsApi.md#offchainflowtransferflowkms) | Send FLOW from a virtual account to the blockchain
*blockchainOperations()* | [**offchainFlowTransferFlowMnemonic()**](./Api/BlockchainOperationsApi.md#offchainflowtransferflowmnemonic) | Send FLOW from a virtual account to the blockchain
*blockchainOperations()* | [**offchainFlowTransferFlowPK()**](./Api/BlockchainOperationsApi.md#offchainflowtransferflowpk) | Send FLOW from a virtual account to the blockchain
*blockchainOperations()* | [**offchainKcsErc20DeployKCSErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offchainkcserc20deploykcserc20offchainkmsaddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKcsErc20DeployKCSErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offchainkcserc20deploykcserc20offchainkmsxpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKcsErc20DeployKCSErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offchainkcserc20deploykcserc20offchainmnemxpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKcsErc20DeployKCSErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offchainkcserc20deploykcserc20offchainmnemonicaddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKcsErc20DeployKCSErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offchainkcserc20deploykcserc20offchainpkaddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKcsErc20DeployKCSErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offchainkcserc20deploykcserc20offchainpkxpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKcsTransferKCS()**](./Api/BlockchainOperationsApi.md#offchainkcstransferkcs) | Send KCS from a virtual account to the blockchain
*blockchainOperations()* | [**offchainKcsTransferKCSKMS()**](./Api/BlockchainOperationsApi.md#offchainkcstransferkcskms) | Send KCS from a virtual account to the blockchain
*blockchainOperations()* | [**offchainKcsTransferKCSMnemonic()**](./Api/BlockchainOperationsApi.md#offchainkcstransferkcsmnemonic) | Send KCS from a virtual account to the blockchain
*blockchainOperations()* | [**offchainKlaytnErc20DeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offchainklaytnerc20deployerc20offchainkmsaddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKlaytnErc20DeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offchainklaytnerc20deployerc20offchainkmsxpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKlaytnErc20DeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offchainklaytnerc20deployerc20offchainmnemxpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKlaytnErc20DeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offchainklaytnerc20deployerc20offchainmnemonicaddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKlaytnErc20DeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offchainklaytnerc20deployerc20offchainpkaddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKlaytnErc20DeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offchainklaytnerc20deployerc20offchainpkxpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainKlaytnTransferEth()**](./Api/BlockchainOperationsApi.md#offchainklaytntransfereth) | Send KLAY from a virtual account to the blockchain
*blockchainOperations()* | [**offchainKlaytnTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offchainklaytntransferethkms) | Send KLAY from a virtual account to the blockchain
*blockchainOperations()* | [**offchainKlaytnTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offchainklaytntransferethmnemonic) | Send KLAY from a virtual account to the blockchain
*blockchainOperations()* | [**offchainLitecoinTransferLtcKMS()**](./Api/BlockchainOperationsApi.md#offchainlitecointransferltckms) | Send LTC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainLitecoinTransferLtcKeyPair()**](./Api/BlockchainOperationsApi.md#offchainlitecointransferltckeypair) | Send LTC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainLitecoinTransferLtcMnemonic()**](./Api/BlockchainOperationsApi.md#offchainlitecointransferltcmnemonic) | Send LTC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainOneHrm20DeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offchainonehrm20deployerc20offchainkmsaddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainOneHrm20DeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offchainonehrm20deployerc20offchainkmsxpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainOneHrm20DeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offchainonehrm20deployerc20offchainmnemxpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainOneHrm20DeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offchainonehrm20deployerc20offchainmnemonicaddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainOneHrm20DeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offchainonehrm20deployerc20offchainpkaddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainOneHrm20DeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offchainonehrm20deployerc20offchainpkxpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainOneHrm20Erc20()**](./Api/BlockchainOperationsApi.md#offchainonehrm20erc20) | Register a new Harmony HRM-20 token in the virtual account
*blockchainOperations()* | [**offchainOneHrm20Erc20Address()**](./Api/BlockchainOperationsApi.md#offchainonehrm20erc20address) | Register a new Harmony HRM-20 token in the virtual account
*blockchainOperations()* | [**offchainOneTransferEth()**](./Api/BlockchainOperationsApi.md#offchainonetransfereth) | Send ONE from a virtual account to the blockchain
*blockchainOperations()* | [**offchainOneTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offchainonetransferethkms) | Send ONE from a virtual account to the blockchain
*blockchainOperations()* | [**offchainOneTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offchainonetransferethmnemonic) | Send ONE from a virtual account to the blockchain
*blockchainOperations()* | [**offchainPolygonTransferEth()**](./Api/BlockchainOperationsApi.md#offchainpolygontransfereth) | Send MATIC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainPolygonTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offchainpolygontransferethkms) | Send MATIC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainPolygonTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offchainpolygontransferethmnemonic) | Send MATIC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainSolanaTransferSol()**](./Api/BlockchainOperationsApi.md#offchainsolanatransfersol) | Send SOL from a virtual account to the blockchain
*blockchainOperations()* | [**offchainSolanaTransferSolKMS()**](./Api/BlockchainOperationsApi.md#offchainsolanatransfersolkms) | Send SOL from a virtual account to the blockchain
*blockchainOperations()* | [**offchainTokenchainErc20()**](./Api/BlockchainOperationsApi.md#offchaintokenchainerc20) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**offchainTokenchainErc20Address()**](./Api/BlockchainOperationsApi.md#offchaintokenchainerc20address) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**offchainTronTransferTron()**](./Api/BlockchainOperationsApi.md#offchaintrontransfertron) | Send TRON from a virtual account to the blockchain
*blockchainOperations()* | [**offchainTronTransferTronKMS()**](./Api/BlockchainOperationsApi.md#offchaintrontransfertronkms) | Send TRON from a virtual account to the blockchain
*blockchainOperations()* | [**offchainTronTransferTronMnemonic()**](./Api/BlockchainOperationsApi.md#offchaintrontransfertronmnemonic) | Send TRON from a virtual account to the blockchain
*blockchainOperations()* | [**offchainTronTrcAddress()**](./Api/BlockchainOperationsApi.md#offchaintrontrcaddress) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
*blockchainOperations()* | [**offchainTronTrcDeployTrcOffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offchaintrontrcdeploytrcoffchainkmsaddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainTronTrcDeployTrcOffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offchaintrontrcdeploytrcoffchainkmsxpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainTronTrcDeployTrcOffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offchaintrontrcdeploytrcoffchainmnemxpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainTronTrcDeployTrcOffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offchaintrontrcdeploytrcoffchainmnemonicaddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainTronTrcDeployTrcOffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offchaintrontrcdeploytrcoffchainpkaddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainTronTrcDeployTrcOffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offchaintrontrcdeploytrcoffchainpkxpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainTronTrcXpub()**](./Api/BlockchainOperationsApi.md#offchaintrontrcxpub) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
*blockchainOperations()* | [**offchainXdcErc20()**](./Api/BlockchainOperationsApi.md#offchainxdcerc20) | Register a new XinFin ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**offchainXdcErc20Address()**](./Api/BlockchainOperationsApi.md#offchainxdcerc20address) | Register a new XinFin ERC-20-equivalent token in the virtual account
*blockchainOperations()* | [**offchainXdcErc20DeployErc20OffchainKMSAddress()**](./Api/BlockchainOperationsApi.md#offchainxdcerc20deployerc20offchainkmsaddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainXdcErc20DeployErc20OffchainKMSXpub()**](./Api/BlockchainOperationsApi.md#offchainxdcerc20deployerc20offchainkmsxpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainXdcErc20DeployErc20OffchainMnemXpub()**](./Api/BlockchainOperationsApi.md#offchainxdcerc20deployerc20offchainmnemxpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainXdcErc20DeployErc20OffchainMnemonicAddress()**](./Api/BlockchainOperationsApi.md#offchainxdcerc20deployerc20offchainmnemonicaddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainXdcErc20DeployErc20OffchainPKAddress()**](./Api/BlockchainOperationsApi.md#offchainxdcerc20deployerc20offchainpkaddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainXdcErc20DeployErc20OffchainPKXpub()**](./Api/BlockchainOperationsApi.md#offchainxdcerc20deployerc20offchainpkxpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
*blockchainOperations()* | [**offchainXdcTransferEth()**](./Api/BlockchainOperationsApi.md#offchainxdctransfereth) | Send XDC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainXdcTransferEthKMS()**](./Api/BlockchainOperationsApi.md#offchainxdctransferethkms) | Send XDC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainXdcTransferEthMnemonic()**](./Api/BlockchainOperationsApi.md#offchainxdctransferethmnemonic) | Send XDC from a virtual account to the blockchain
*blockchainOperations()* | [**offchainXlmTransferXlm()**](./Api/BlockchainOperationsApi.md#offchainxlmtransferxlm) | Send XLM from a virtual account to the blockchain
*blockchainOperations()* | [**offchainXlmTransferXlmKMS()**](./Api/BlockchainOperationsApi.md#offchainxlmtransferxlmkms) | Send XLM from a virtual account to the blockchain
*blockchainOperations()* | [**offchainXrpTransferXrp()**](./Api/BlockchainOperationsApi.md#offchainxrptransferxrp) | Send XRP from a virtual account to the blockchain
*blockchainOperations()* | [**offchainXrpTransferXrpKMS()**](./Api/BlockchainOperationsApi.md#offchainxrptransferxrpkms) | Send XRP from a virtual account to the blockchain
*blockchainOperations()* | [**storeCeloErc20Address()**](./Api/BlockchainOperationsApi.md#storeceloerc20address) | Set the contract address of a Celo ERC-20-equivalent token
*blockchainOperations()* | [**storeTokenAddress()**](./Api/BlockchainOperationsApi.md#storetokenaddress) | Set the contract address of an ERC-20, ERC-20-equivalent, or TRC-10 token
*blockchainOperations()* | [**storeTrcAddress()**](./Api/BlockchainOperationsApi.md#storetrcaddress) | Set the contract address of a TRC-10 or TRC-20 token
*blockchainOperations()* | [**xlmAssetOffchain()**](./Api/BlockchainOperationsApi.md#xlmassetoffchain) | Create an XLM-based asset
*blockchainOperations()* | [**xrpAssetOffchain()**](./Api/BlockchainOperationsApi.md#xrpassetoffchain) | Create XRP based Asset
*blockchainStorage()* | [**getLog()**](./Api/BlockchainStorageApi.md#getlog) | Get a log record
*blockchainStorage()* | [**recordCreateRecord()**](./Api/BlockchainStorageApi.md#recordcreaterecord) | Store a log record
*blockchainStorage()* | [**recordCreateRecordCelo()**](./Api/BlockchainStorageApi.md#recordcreaterecordcelo) | Store a log record
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
*cardano()* | [**adaTransactionAdaTransactionFromAddress()**](./Api/CardanoApi.md#adatransactionadatransactionfromaddress) | Send ADA to Cardano addresses
*cardano()* | [**adaTransactionAdaTransactionFromAddressKMS()**](./Api/CardanoApi.md#adatransactionadatransactionfromaddresskms) | Send ADA to Cardano addresses
*cardano()* | [**adaTransactionAdaTransactionFromUTXO()**](./Api/CardanoApi.md#adatransactionadatransactionfromutxo) | Send ADA to Cardano addresses
*cardano()* | [**adaTransactionAdaTransactionFromUTXOKMS()**](./Api/CardanoApi.md#adatransactionadatransactionfromutxokms) | Send ADA to Cardano addresses
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
*celo()* | [**celoSmartcontractCallCeloReadSmartContractMethod()**](./Api/CeloApi.md#celosmartcontractcallceloreadsmartcontractmethod) | Invoke a method in a smart contract on Celo
*celo()* | [**celoSmartcontractCallCeloSmartContractMethod()**](./Api/CeloApi.md#celosmartcontractcallcelosmartcontractmethod) | Invoke a method in a smart contract on Celo
*celo()* | [**celoSmartcontractCallCeloSmartContractMethodKMS()**](./Api/CeloApi.md#celosmartcontractcallcelosmartcontractmethodkms) | Invoke a method in a smart contract on Celo
*celo()* | [**celoTransactionTransferCeloBlockchain()**](./Api/CeloApi.md#celotransactiontransferceloblockchain) | Send Celo / ERC20 from account to account
*celo()* | [**celoTransactionTransferCeloBlockchainKMS()**](./Api/CeloApi.md#celotransactiontransferceloblockchainkms) | Send Celo / ERC20 from account to account
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
*dogecoin()* | [**dogecoinTransactionDogeTransactionUTXO()**](./Api/DogecoinApi.md#dogecointransactiondogetransactionutxo) | Send DOGE to Dogecoin addresses
*dogecoin()* | [**dogecoinTransactionDogeTransactionUTXOKMS()**](./Api/DogecoinApi.md#dogecointransactiondogetransactionutxokms) | Send DOGE to Dogecoin addresses
*elrond()* | [**eGldGetCurrentBlock()**](./Api/ElrondApi.md#egldgetcurrentblock) | Get current block number
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
*elrond()* | [**egldTransactionTransferEgldBlockchain()**](./Api/ElrondApi.md#egldtransactiontransferegldblockchain) | Send EGLD from account to account
*elrond()* | [**egldTransactionTransferEgldBlockchainKMS()**](./Api/ElrondApi.md#egldtransactiontransferegldblockchainkms) | Send EGLD from account to account
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
*ethereum()* | [**ethereumSmartcontractCallReadSmartContractMethod()**](./Api/EthereumApi.md#ethereumsmartcontractcallreadsmartcontractmethod) | Invoke a method in a smart contract on Ethereum
*ethereum()* | [**ethereumSmartcontractCallSmartContractMethod()**](./Api/EthereumApi.md#ethereumsmartcontractcallsmartcontractmethod) | Invoke a method in a smart contract on Ethereum
*ethereum()* | [**ethereumSmartcontractCallSmartContractMethodKMS()**](./Api/EthereumApi.md#ethereumsmartcontractcallsmartcontractmethodkms) | Invoke a method in a smart contract on Ethereum
*ethereum()* | [**ethereumTransactionTransferEthBlockchain()**](./Api/EthereumApi.md#ethereumtransactiontransferethblockchain) | Send Ethereum / ERC20 from account to account
*ethereum()* | [**ethereumTransactionTransferEthBlockchainKMS()**](./Api/EthereumApi.md#ethereumtransactiontransferethblockchainkms) | Send Ethereum / ERC20 from account to account
*exchangeRate()* | [**getExchangeRate()**](./Api/ExchangeRateApi.md#getexchangerate) | Get the current exchange rate for exchanging fiat/crypto assets
*flow()* | [**flowAccountFlowAddPubKeyMnemonicUpdate()**](./Api/FlowApi.md#flowaccountflowaddpubkeymnemonicupdate) | Add public key to Flow address
*flow()* | [**flowAccountFlowAddPubKeySecretKMSUpdate()**](./Api/FlowApi.md#flowaccountflowaddpubkeysecretkmsupdate) | Add public key to Flow address
*flow()* | [**flowAccountFlowAddPubKeySecretUpdate()**](./Api/FlowApi.md#flowaccountflowaddpubkeysecretupdate) | Add public key to Flow address
*flow()* | [**flowAccountFlowCreateAddressFromPubKeyKMS()**](./Api/FlowApi.md#flowaccountflowcreateaddressfrompubkeykms) | Create Flow address from public key
*flow()* | [**flowAccountFlowCreateAddressFromPubKeyMnemonic()**](./Api/FlowApi.md#flowaccountflowcreateaddressfrompubkeymnemonic) | Create Flow address from public key
*flow()* | [**flowAccountFlowCreateAddressFromPubKeySecret()**](./Api/FlowApi.md#flowaccountflowcreateaddressfrompubkeysecret) | Create Flow address from public key
*flow()* | [**flowGenerateAddress()**](./Api/FlowApi.md#flowgenerateaddress) | Generate Flow address from Extended public key
*flow()* | [**flowGeneratePubKey()**](./Api/FlowApi.md#flowgeneratepubkey) | Generate Flow public key from Extended public key
*flow()* | [**flowGeneratePubKeyPrivateKey()**](./Api/FlowApi.md#flowgeneratepubkeyprivatekey) | Generate Flow private key
*flow()* | [**flowGenerateWallet()**](./Api/FlowApi.md#flowgeneratewallet) | Generate Flow wallet
*flow()* | [**flowGetAccount()**](./Api/FlowApi.md#flowgetaccount) | Get the balance of a Flow account
*flow()* | [**flowGetBlock()**](./Api/FlowApi.md#flowgetblock) | Get Flow Block by hash or height
*flow()* | [**flowGetBlockChainInfo()**](./Api/FlowApi.md#flowgetblockchaininfo) | Get Flow current block number
*flow()* | [**flowGetBlockEvents()**](./Api/FlowApi.md#flowgetblockevents) | Get Flow events from blocks
*flow()* | [**flowGetRawTransaction()**](./Api/FlowApi.md#flowgetrawtransaction) | Get Flow Transaction by hash
*flow()* | [**flowTransactionCustomFlowCustomTransactionKMS()**](./Api/FlowApi.md#flowtransactioncustomflowcustomtransactionkms) | Send arbitrary transaction to blockchain
*flow()* | [**flowTransactionCustomFlowCustomTransactionMnemonic()**](./Api/FlowApi.md#flowtransactioncustomflowcustomtransactionmnemonic) | Send arbitrary transaction to blockchain
*flow()* | [**flowTransactionCustomFlowCustomTransactionPK()**](./Api/FlowApi.md#flowtransactioncustomflowcustomtransactionpk) | Send arbitrary transaction to blockchain
*flow()* | [**flowTransactionFlowTransactionKMS()**](./Api/FlowApi.md#flowtransactionflowtransactionkms) | Send Flow to blockchain addresses
*flow()* | [**flowTransactionFlowTransactionMnemonic()**](./Api/FlowApi.md#flowtransactionflowtransactionmnemonic) | Send Flow to blockchain addresses
*flow()* | [**flowTransactionFlowTransactionPK()**](./Api/FlowApi.md#flowtransactionflowtransactionpk) | Send Flow to blockchain addresses
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenApproveCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenapproveceloerc20) | Allow a blockchain address to transfer and burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenApproveCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenapproveceloerc20kms) | Allow a blockchain address to transfer and burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenApproveErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenapproveerc20) | Allow a blockchain address to transfer and burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenApproveErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenapproveerc20kms) | Allow a blockchain address to transfer and burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenBurnChainBurnCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenburnchainburnceloerc20) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenBurnChainBurnCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenburnchainburnceloerc20kms) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenBurnChainBurnErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenburnchainburnerc20) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenBurnChainBurnErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenburnchainburnerc20kms) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenBurnChainBurnKcsErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenburnchainburnkcserc20) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenBurnChainBurnKcsErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenburnchainburnkcserc20kms) | Burn fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeployAlgoErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeployalgoerc20) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeployAlgoErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeployalgoerc20kms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeployCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeployceloerc20) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeployCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeployceloerc20kms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeployErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeployerc20) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeployErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeployerc20kms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeployKcsErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeploykcserc20) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeployKcsErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeploykcserc20kms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeploySolanaSpl()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeploysolanaspl) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenDeployChainDeploySolanaSplKMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokendeploychaindeploysolanasplkms) | Deploy a fungible token smart contract
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenMintChainMintCeloErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenmintchainmintceloerc20) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenMintChainMintCeloErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenmintchainmintceloerc20kms) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenMintChainMintErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenmintchainminterc20) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenMintChainMintErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenmintchainminterc20kms) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenMintChainMintKcsErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenmintchainmintkcserc20) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenMintChainMintKcsErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokenmintchainmintkcserc20kms) | Mint fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferAlgoErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferalgoerc20) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferAlgoErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferalgoerc20kms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferBscBep20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferbscbep20) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferBscBep20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferbscbep20kms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferCeloErc20Token()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferceloerc20token) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferCeloErc20TokenKMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferceloerc20tokenkms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferEthErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferetherc20) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferEthErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferetherc20kms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferKcsEthErc20()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferkcsetherc20) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferKcsEthErc20KMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransferkcsetherc20kms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferSolanaSpl()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransfersolanaspl) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**blockchainTokenTransactionChainTransferSolanaSplKMS()**](./Api/FungibleTokensERC20OrCompatibleApi.md#blockchaintokentransactionchaintransfersolanasplkms) | Transfer fungible tokens
*fungibleTokensERC20OrCompatible()* | [**erc20GetBalance()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalance) | Get the number of fungible tokens that a blockchain address holds in a smart contract
*fungibleTokensERC20OrCompatible()* | [**erc20GetBalanceAddress()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20getbalanceaddress) | Get the total number of fungible tokens that a blockchain address holds
*fungibleTokensERC20OrCompatible()* | [**erc20GetTransactionByAddress()**](./Api/FungibleTokensERC20OrCompatibleApi.md#erc20gettransactionbyaddress) | Get fungible token transactions on a blockchain address
*gasPump()* | [**activatedNotActivatedGasPumpAddresses()**](./Api/GasPumpApi.md#activatednotactivatedgaspumpaddresses) | Get the results of the address activation transaction
*gasPump()* | [**blockchainScCustodialApproveTransferCustodialWallet()**](./Api/GasPumpApi.md#blockchainsccustodialapprovetransfercustodialwallet) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**blockchainScCustodialApproveTransferCustodialWalletCelo()**](./Api/GasPumpApi.md#blockchainsccustodialapprovetransfercustodialwalletcelo) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**blockchainScCustodialApproveTransferCustodialWalletCeloKMS()**](./Api/GasPumpApi.md#blockchainsccustodialapprovetransfercustodialwalletcelokms) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**blockchainScCustodialApproveTransferCustodialWalletKMS()**](./Api/GasPumpApi.md#blockchainsccustodialapprovetransfercustodialwalletkms) | Approve the transfer of an asset from a gas pump address
*gasPump()* | [**blockchainScCustodialBatchGenerateCustodialWalletBatch()**](./Api/GasPumpApi.md#blockchainsccustodialbatchgeneratecustodialwalletbatch) | Generate a gas pump wallet address
*gasPump()* | [**blockchainScCustodialBatchGenerateCustodialWalletBatchCelo()**](./Api/GasPumpApi.md#blockchainsccustodialbatchgeneratecustodialwalletbatchcelo) | Generate a gas pump wallet address
*gasPump()* | [**blockchainScCustodialBatchGenerateCustodialWalletBatchCeloKMS()**](./Api/GasPumpApi.md#blockchainsccustodialbatchgeneratecustodialwalletbatchcelokms) | Generate a gas pump wallet address
*gasPump()* | [**blockchainScCustodialBatchGenerateCustodialWalletBatchKMS()**](./Api/GasPumpApi.md#blockchainsccustodialbatchgeneratecustodialwalletbatchkms) | Generate a gas pump wallet address
*gasPump()* | [**blockchainScCustodialBatchGenerateCustodialWalletBatchPayer()**](./Api/GasPumpApi.md#blockchainsccustodialbatchgeneratecustodialwalletbatchpayer) | Generate a gas pump wallet address
*gasPump()* | [**blockchainScCustodialBatchGenerateCustodialWalletBatchTron()**](./Api/GasPumpApi.md#blockchainsccustodialbatchgeneratecustodialwalletbatchtron) | Generate a gas pump wallet address
*gasPump()* | [**blockchainScCustodialBatchGenerateCustodialWalletBatchTronKMS()**](./Api/GasPumpApi.md#blockchainsccustodialbatchgeneratecustodialwalletbatchtronkms) | Generate a gas pump wallet address
*gasPump()* | [**blockchainScCustodialGenerateCustodialWallet()**](./Api/GasPumpApi.md#blockchainsccustodialgeneratecustodialwallet) | Generate a custodial wallet address
*gasPump()* | [**blockchainScCustodialGenerateCustodialWalletCelo()**](./Api/GasPumpApi.md#blockchainsccustodialgeneratecustodialwalletcelo) | Generate a custodial wallet address
*gasPump()* | [**blockchainScCustodialGenerateCustodialWalletCeloKMS()**](./Api/GasPumpApi.md#blockchainsccustodialgeneratecustodialwalletcelokms) | Generate a custodial wallet address
*gasPump()* | [**blockchainScCustodialGenerateCustodialWalletKMS()**](./Api/GasPumpApi.md#blockchainsccustodialgeneratecustodialwalletkms) | Generate a custodial wallet address
*gasPump()* | [**blockchainScCustodialGenerateCustodialWalletTron()**](./Api/GasPumpApi.md#blockchainsccustodialgeneratecustodialwallettron) | Generate a custodial wallet address
*gasPump()* | [**blockchainScCustodialGenerateCustodialWalletTronKMS()**](./Api/GasPumpApi.md#blockchainsccustodialgeneratecustodialwallettronkms) | Generate a custodial wallet address
*gasPump()* | [**blockchainScCustodialTransferBatchTransferCustodialWalletBatch()**](./Api/GasPumpApi.md#blockchainsccustodialtransferbatchtransfercustodialwalletbatch) | Transfer multiple assets from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferBatchTransferCustodialWalletBatchCelo()**](./Api/GasPumpApi.md#blockchainsccustodialtransferbatchtransfercustodialwalletbatchcelo) | Transfer multiple assets from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferBatchTransferCustodialWalletBatchCeloKMS()**](./Api/GasPumpApi.md#blockchainsccustodialtransferbatchtransfercustodialwalletbatchcelokms) | Transfer multiple assets from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferBatchTransferCustodialWalletBatchKMS()**](./Api/GasPumpApi.md#blockchainsccustodialtransferbatchtransfercustodialwalletbatchkms) | Transfer multiple assets from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferBatchTransferCustodialWalletBatchTron()**](./Api/GasPumpApi.md#blockchainsccustodialtransferbatchtransfercustodialwalletbatchtron) | Transfer multiple assets from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferBatchTransferCustodialWalletBatchTronKMS()**](./Api/GasPumpApi.md#blockchainsccustodialtransferbatchtransfercustodialwalletbatchtronkms) | Transfer multiple assets from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferCustodialWallet()**](./Api/GasPumpApi.md#blockchainsccustodialtransfercustodialwallet) | Transfer an asset from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferCustodialWalletCelo()**](./Api/GasPumpApi.md#blockchainsccustodialtransfercustodialwalletcelo) | Transfer an asset from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferCustodialWalletCeloKMS()**](./Api/GasPumpApi.md#blockchainsccustodialtransfercustodialwalletcelokms) | Transfer an asset from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferCustodialWalletKMS()**](./Api/GasPumpApi.md#blockchainsccustodialtransfercustodialwalletkms) | Transfer an asset from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferCustodialWalletTron()**](./Api/GasPumpApi.md#blockchainsccustodialtransfercustodialwallettron) | Transfer an asset from a gas pump address
*gasPump()* | [**blockchainScCustodialTransferCustodialWalletTronKMS()**](./Api/GasPumpApi.md#blockchainsccustodialtransfercustodialwallettronkms) | Transfer an asset from a gas pump address
*gasPump()* | [**gasPumpActivateGasPump()**](./Api/GasPumpApi.md#gaspumpactivategaspump) | Activate gas pump addresses
*gasPump()* | [**gasPumpActivateGasPumpCelo()**](./Api/GasPumpApi.md#gaspumpactivategaspumpcelo) | Activate gas pump addresses
*gasPump()* | [**gasPumpActivateGasPumpCeloKMS()**](./Api/GasPumpApi.md#gaspumpactivategaspumpcelokms) | Activate gas pump addresses
*gasPump()* | [**gasPumpActivateGasPumpKMS()**](./Api/GasPumpApi.md#gaspumpactivategaspumpkms) | Activate gas pump addresses
*gasPump()* | [**gasPumpActivateGasPumpTatum()**](./Api/GasPumpApi.md#gaspumpactivategaspumptatum) | Activate gas pump addresses
*gasPump()* | [**gasPumpActivateGasPumpTron()**](./Api/GasPumpApi.md#gaspumpactivategaspumptron) | Activate gas pump addresses
*gasPump()* | [**gasPumpActivateGasPumpTronKMS()**](./Api/GasPumpApi.md#gaspumpactivategaspumptronkms) | Activate gas pump addresses
*gasPump()* | [**gasPumpAddressesActivatedOrNot()**](./Api/GasPumpApi.md#gaspumpaddressesactivatedornot) | Check whether the gas pump address with a specified index is activated
*gasPump()* | [**precalculateGasPumpAddresses()**](./Api/GasPumpApi.md#precalculategaspumpaddresses) | Precalculate gas pump addresses
*gasPump()* | [**sCGetCustodialAddresses()**](./Api/GasPumpApi.md#scgetcustodialaddresses) | Get the custodial wallet address from the transaction
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
*harmony()* | [**oneSmartcontractCallOneReadSmartContractMethod()**](./Api/HarmonyApi.md#onesmartcontractcallonereadsmartcontractmethod) | Invoke a method in a smart contract on Harmony
*harmony()* | [**oneSmartcontractCallOneSmartContractMethod()**](./Api/HarmonyApi.md#onesmartcontractcallonesmartcontractmethod) | Invoke a method in a smart contract on Harmony
*harmony()* | [**oneSmartcontractCallOneSmartContractMethodKMS()**](./Api/HarmonyApi.md#onesmartcontractcallonesmartcontractmethodkms) | Invoke a method in a smart contract on Harmony
*harmony()* | [**oneTransactionTransferOneBlockchain()**](./Api/HarmonyApi.md#onetransactiontransferoneblockchain) | Send ONE / HRM20 from account to account
*harmony()* | [**oneTransactionTransferOneBlockchainKMS()**](./Api/HarmonyApi.md#onetransactiontransferoneblockchainkms) | Send ONE / HRM20 from account to account
*harmony()* | [**oneWeb3Driver()**](./Api/HarmonyApi.md#oneweb3driver) | Web3 HTTP driver
*iPFS()* | [**getIPFSData()**](./Api/IPFSApi.md#getipfsdata) | Get file from IPFS
*iPFS()* | [**storeIPFS()**](./Api/IPFSApi.md#storeipfs) | Store data to IPFS
*keyManagementSystem()* | [**completePendingSignature()**](./Api/KeyManagementSystemApi.md#completependingsignature) | Complete pending transaction to sign
*keyManagementSystem()* | [**deletePendingTransactionToSign()**](./Api/KeyManagementSystemApi.md#deletependingtransactiontosign) | Delete transaction
*keyManagementSystem()* | [**getPendingTransactionToSign()**](./Api/KeyManagementSystemApi.md#getpendingtransactiontosign) | Get transaction details
*keyManagementSystem()* | [**getPendingTransactionsToSign()**](./Api/KeyManagementSystemApi.md#getpendingtransactionstosign) | Get pending transactions to sign
*keyManagementSystem()* | [**receivePendingTransactionsToSign()**](./Api/KeyManagementSystemApi.md#receivependingtransactionstosign) | Get pending transactions to sign
*klaytn()* | [**klaytnBroadcast()**](./Api/KlaytnApi.md#klaytnbroadcast) | Broadcast signed Klaytn transaction
*klaytn()* | [**klaytnGenerateAddress()**](./Api/KlaytnApi.md#klaytngenerateaddress) | Generate Klaytn account address from Extended public key
*klaytn()* | [**klaytnGenerateAddressPrivateKey()**](./Api/KlaytnApi.md#klaytngenerateaddressprivatekey) | Generate Klaytn private key
*klaytn()* | [**klaytnGenerateWallet()**](./Api/KlaytnApi.md#klaytngeneratewallet) | Generate Klaytn wallet
*klaytn()* | [**klaytnGetBalance()**](./Api/KlaytnApi.md#klaytngetbalance) | Get Klaytn Account balance
*klaytn()* | [**klaytnGetBlock()**](./Api/KlaytnApi.md#klaytngetblock) | Get Klaytn block by hash
*klaytn()* | [**klaytnGetCurrentBlock()**](./Api/KlaytnApi.md#klaytngetcurrentblock) | Get current block number
*klaytn()* | [**klaytnGetTransaction()**](./Api/KlaytnApi.md#klaytngettransaction) | Get Klaytn Transaction
*klaytn()* | [**klaytnGetTransactionCount()**](./Api/KlaytnApi.md#klaytngettransactioncount) | Get count of outgoing Klaytn transactions
*klaytn()* | [**klaytnSmartcontractCallKlaytnSmartContractMethod()**](./Api/KlaytnApi.md#klaytnsmartcontractcallklaytnsmartcontractmethod) | Invoke a method in a smart contract on Klaytn
*klaytn()* | [**klaytnSmartcontractCallKlaytnSmartContractMethodKMS()**](./Api/KlaytnApi.md#klaytnsmartcontractcallklaytnsmartcontractmethodkms) | Invoke a method in a smart contract on Klaytn
*klaytn()* | [**klaytnSmartcontractCallKlaytnSmartContractReadMethod()**](./Api/KlaytnApi.md#klaytnsmartcontractcallklaytnsmartcontractreadmethod) | Invoke a method in a smart contract on Klaytn
*klaytn()* | [**klaytnTransactionTransferKlaytnBlockchain()**](./Api/KlaytnApi.md#klaytntransactiontransferklaytnblockchain) | Send KLAY from account to account
*klaytn()* | [**klaytnTransactionTransferKlaytnBlockchainKMS()**](./Api/KlaytnApi.md#klaytntransactiontransferklaytnblockchainkms) | Send KLAY from account to account
*klaytn()* | [**klaytnWeb3Driver()**](./Api/KlaytnApi.md#klaytnweb3driver) | Web3 HTTP driver
*kuCoin()* | [**kcsBroadcast()**](./Api/KuCoinApi.md#kcsbroadcast) | Broadcast signed Kcs transaction
*kuCoin()* | [**kcsGenerateAddress()**](./Api/KuCoinApi.md#kcsgenerateaddress) | Generate Kcs account address from Extended public key
*kuCoin()* | [**kcsGenerateAddressPrivateKey()**](./Api/KuCoinApi.md#kcsgenerateaddressprivatekey) | Generate Kcs private key
*kuCoin()* | [**kcsGenerateWallet()**](./Api/KuCoinApi.md#kcsgeneratewallet) | Generate Kcs wallet
*kuCoin()* | [**kcsGetBalance()**](./Api/KuCoinApi.md#kcsgetbalance) | Get Kcs Account balance
*kuCoin()* | [**kcsGetBlock()**](./Api/KuCoinApi.md#kcsgetblock) | Get Kcs block by hash
*kuCoin()* | [**kcsGetCurrentBlock()**](./Api/KuCoinApi.md#kcsgetcurrentblock) | Get current block number
*kuCoin()* | [**kcsGetTransaction()**](./Api/KuCoinApi.md#kcsgettransaction) | Get Kcs Transaction
*kuCoin()* | [**kcsGetTransactionCount()**](./Api/KuCoinApi.md#kcsgettransactioncount) | Get count of outgoing Kcs transactions
*kuCoin()* | [**kcsSmartcontractCallKcsSmartContractMethod()**](./Api/KuCoinApi.md#kcssmartcontractcallkcssmartcontractmethod) | Invoke a method in a smart contract on KuCoin Community Chain
*kuCoin()* | [**kcsSmartcontractCallKcsSmartContractMethodKMS()**](./Api/KuCoinApi.md#kcssmartcontractcallkcssmartcontractmethodkms) | Invoke a method in a smart contract on KuCoin Community Chain
*kuCoin()* | [**kcsSmartcontractCallKcsSmartContractReadMethod()**](./Api/KuCoinApi.md#kcssmartcontractcallkcssmartcontractreadmethod) | Invoke a method in a smart contract on KuCoin Community Chain
*kuCoin()* | [**kcsTransactionTransferKcsBlockchain()**](./Api/KuCoinApi.md#kcstransactiontransferkcsblockchain) | Send KCS from account to account
*kuCoin()* | [**kcsTransactionTransferKcsBlockchainKMS()**](./Api/KuCoinApi.md#kcstransactiontransferkcsblockchainkms) | Send KCS from account to account
*kuCoin()* | [**kcsWeb3Driver()**](./Api/KuCoinApi.md#kcsweb3driver) | Web3 HTTP driver
*litecoin()* | [**litecoinTransactionLtcTransactionAddress()**](./Api/LitecoinApi.md#litecointransactionltctransactionaddress) | Send LTC to Litecoin addresses
*litecoin()* | [**litecoinTransactionLtcTransactionAddressKMS()**](./Api/LitecoinApi.md#litecointransactionltctransactionaddresskms) | Send LTC to Litecoin addresses
*litecoin()* | [**litecoinTransactionLtcTransactionUTXO()**](./Api/LitecoinApi.md#litecointransactionltctransactionutxo) | Send LTC to Litecoin addresses
*litecoin()* | [**litecoinTransactionLtcTransactionUTXOKMS()**](./Api/LitecoinApi.md#litecointransactionltctransactionutxokms) | Send LTC to Litecoin addresses
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
*maliciousAddress()* | [**checkMalicousAddress()**](./Api/MaliciousAddressApi.md#checkmalicousaddress) | Check malicous address
*marketplace()* | [**blockchainMarketplaceListingBuyAssetOnMarketplace()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingbuyassetonmarketplace) | Buy an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingBuyAssetOnMarketplaceCelo()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingbuyassetonmarketplacecelo) | Buy an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingBuyAssetOnMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingbuyassetonmarketplacecelokms) | Buy an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingBuyAssetOnMarketplaceKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingbuyassetonmarketplacekms) | Buy an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingBuyAssetOnMarketplaceSolana()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingbuyassetonmarketplacesolana) | Buy an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingBuyAssetOnMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingbuyassetonmarketplacesolanakms) | Buy an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingCancelSellAssetOnMarketplace()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingcancelsellassetonmarketplace) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingCancelSellAssetOnMarketplaceCelo()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingcancelsellassetonmarketplacecelo) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingCancelSellAssetOnMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingcancelsellassetonmarketplacecelokms) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingCancelSellAssetOnMarketplaceKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingcancelsellassetonmarketplacekms) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingCancelSellAssetOnMarketplaceSolana()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingcancelsellassetonmarketplacesolana) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingCancelSellAssetOnMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingcancelsellassetonmarketplacesolanakms) | Cancel the selling of an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingFeeUpdateFeeCeloKMSUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingfeeupdatefeecelokmsupdate) | Update the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingFeeUpdateFeeCeloUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingfeeupdatefeeceloupdate) | Update the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingFeeUpdateFeeKMSUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingfeeupdatefeekmsupdate) | Update the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingFeeUpdateFeeSolanaKMSUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingfeeupdatefeesolanakmsupdate) | Update the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingFeeUpdateFeeSolanaUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingfeeupdatefeesolanaupdate) | Update the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingFeeUpdateFeeUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingfeeupdatefeeupdate) | Update the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingGenerateMarketplace()**](./Api/MarketplaceApi.md#blockchainmarketplacelistinggeneratemarketplace) | Create an NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingGenerateMarketplaceCelo()**](./Api/MarketplaceApi.md#blockchainmarketplacelistinggeneratemarketplacecelo) | Create an NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingGenerateMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistinggeneratemarketplacecelokms) | Create an NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingGenerateMarketplaceKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistinggeneratemarketplacekms) | Create an NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingGenerateMarketplaceSolana()**](./Api/MarketplaceApi.md#blockchainmarketplacelistinggeneratemarketplacesolana) | Create an NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingGenerateMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistinggeneratemarketplacesolanakms) | Create an NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingRecipientUpdateFeeRecipientCeloKMSUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingrecipientupdatefeerecipientcelokmsupdate) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingRecipientUpdateFeeRecipientCeloUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingrecipientupdatefeerecipientceloupdate) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingRecipientUpdateFeeRecipientKMSUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingrecipientupdatefeerecipientkmsupdate) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingRecipientUpdateFeeRecipientSolanaKMSUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingrecipientupdatefeerecipientsolanakmsupdate) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingRecipientUpdateFeeRecipientSolanaUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingrecipientupdatefeerecipientsolanaupdate) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingRecipientUpdateFeeRecipientUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingrecipientupdatefeerecipientupdate) | Update the recipient of the NFT marketplace fee
*marketplace()* | [**blockchainMarketplaceListingSellAssetOnMarketplace()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingsellassetonmarketplace) | Sell an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingSellAssetOnMarketplaceCelo()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingsellassetonmarketplacecelo) | Sell an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingSellAssetOnMarketplaceCeloKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingsellassetonmarketplacecelokms) | Sell an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingSellAssetOnMarketplaceKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingsellassetonmarketplacekms) | Sell an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingSellAssetOnMarketplaceSolana()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingsellassetonmarketplacesolana) | Sell an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingSellAssetOnMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingsellassetonmarketplacesolanakms) | Sell an asset on the NFT marketplace
*marketplace()* | [**blockchainMarketplaceListingUpdateMarketplaceSolanaKMSUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingupdatemarketplacesolanakmsupdate) | Update an NFT marketplace on Solana
*marketplace()* | [**blockchainMarketplaceListingUpdateMarketplaceSolanaUpdate()**](./Api/MarketplaceApi.md#blockchainmarketplacelistingupdatemarketplacesolanaupdate) | Update an NFT marketplace on Solana
*marketplace()* | [**blockchainMarketplaceWithdrawFeeWithdrawFromMarketplaceSolana()**](./Api/MarketplaceApi.md#blockchainmarketplacewithdrawfeewithdrawfrommarketplacesolana) | Withdraw funds from the marketplace fee account on Solana
*marketplace()* | [**blockchainMarketplaceWithdrawFeeWithdrawFromMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacewithdrawfeewithdrawfrommarketplacesolanakms) | Withdraw funds from the marketplace fee account on Solana
*marketplace()* | [**blockchainMarketplaceWithdrawTreasuryWithdrawFromMarketplaceSolana()**](./Api/MarketplaceApi.md#blockchainmarketplacewithdrawtreasurywithdrawfrommarketplacesolana) | Withdraw funds from the marketplace treasury account on Solana
*marketplace()* | [**blockchainMarketplaceWithdrawTreasuryWithdrawFromMarketplaceSolanaKMS()**](./Api/MarketplaceApi.md#blockchainmarketplacewithdrawtreasurywithdrawfrommarketplacesolanakms) | Withdraw funds from the marketplace treasury account on Solana
*marketplace()* | [**getMarketplaceFee()**](./Api/MarketplaceApi.md#getmarketplacefee) | Get the NFT marketplace fee
*marketplace()* | [**getMarketplaceFeeRecipient()**](./Api/MarketplaceApi.md#getmarketplacefeerecipient) | Get the recipient of the NFT marketplace fee
*marketplace()* | [**getMarketplaceInfo()**](./Api/MarketplaceApi.md#getmarketplaceinfo) | Get information about an NFT marketplace on Solana
*marketplace()* | [**getMarketplaceListing()**](./Api/MarketplaceApi.md#getmarketplacelisting) | Get information about a listing on the NFT marketplace
*marketplace()* | [**getMarketplaceListings()**](./Api/MarketplaceApi.md#getmarketplacelistings) | Get the listings of a certain type from the NFT marketplace
*multiTokensERC1155OrCompatible()* | [**multiTokenGetAddressBalance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetaddressbalance) | Get all Multi Tokens that a blockchain address holds
*multiTokensERC1155OrCompatible()* | [**multiTokenGetBalance()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalance) | Get the amount of a specific MultiToken that a blockchain address holds
*multiTokensERC1155OrCompatible()* | [**multiTokenGetBalanceBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetbalancebatch) | Get the amount of one or multiple Multi Tokens for multiple blockchain addresses
*multiTokensERC1155OrCompatible()* | [**multiTokenGetContractAddress()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetcontractaddress) | Get the address of a Multi Token smart contract by its transaction hash
*multiTokensERC1155OrCompatible()* | [**multiTokenGetMetadata()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengetmetadata) | Get Multi Token metadata
*multiTokensERC1155OrCompatible()* | [**multiTokenGetTransaction()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransaction) | Get a Multi Token transaction by its hash
*multiTokensERC1155OrCompatible()* | [**multiTokenGetTransactionByAddress()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokengettransactionbyaddress) | Get Multi Token transactions on a blockchain address
*multiTokensERC1155OrCompatible()* | [**multitokenBurnBatchBurnMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenburnbatchburnmultitokenbatch) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenBurnBatchBurnMultiTokenBatchCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenburnbatchburnmultitokenbatchcelo) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenBurnBatchBurnMultiTokenBatchKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenburnbatchburnmultitokenbatchkms) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenBurnBatchBurnMultiTokenBatchKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenburnbatchburnmultitokenbatchkmscelo) | Burn multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenBurnMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenburnmultitoken) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenBurnMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenburnmultitokencelo) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenBurnMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenburnmultitokenkms) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenBurnMultiTokenKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenburnmultitokenkmscelo) | Burn a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenDeployMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokendeploymultitoken) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**multitokenDeployMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokendeploymultitokencelo) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**multitokenDeployMultiTokenCeloKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokendeploymultitokencelokms) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**multitokenDeployMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokendeploymultitokenkms) | Deploy a Multi Token smart contract
*multiTokensERC1155OrCompatible()* | [**multitokenMintAddMultiTokenMinter()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintaddmultitokenminter) | Add a Multi Token minter
*multiTokensERC1155OrCompatible()* | [**multitokenMintAddMultiTokenMinterKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintaddmultitokenminterkms) | Add a Multi Token minter
*multiTokensERC1155OrCompatible()* | [**multitokenMintBatchMintMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintbatchmintmultitokenbatch) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenMintBatchMintMultiTokenBatchCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintbatchmintmultitokenbatchcelo) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenMintBatchMintMultiTokenBatchKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintbatchmintmultitokenbatchkms) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenMintBatchMintMultiTokenBatchKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintbatchmintmultitokenbatchkmscelo) | Mint multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenMintMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintmultitoken) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenMintMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintmultitokencelo) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenMintMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintmultitokenkms) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenMintMultiTokenKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokenmintmultitokenkmscelo) | Mint a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenTransactionBatchTransferMultiTokenBatch()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokentransactionbatchtransfermultitokenbatch) | Transfer multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenTransactionBatchTransferMultiTokenBatchCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokentransactionbatchtransfermultitokenbatchcelo) | Transfer multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenTransactionBatchTransferMultiTokenBatchKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokentransactionbatchtransfermultitokenbatchkms) | Transfer multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenTransactionBatchTransferMultiTokenBatchKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokentransactionbatchtransfermultitokenbatchkmscelo) | Transfer multiple Multi Tokens
*multiTokensERC1155OrCompatible()* | [**multitokenTransactionTransferMultiToken()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokentransactiontransfermultitoken) | Transfer a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenTransactionTransferMultiTokenCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokentransactiontransfermultitokencelo) | Transfer a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenTransactionTransferMultiTokenKMS()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokentransactiontransfermultitokenkms) | Transfer a Multi Token
*multiTokensERC1155OrCompatible()* | [**multitokenTransactionTransferMultiTokenKMSCelo()**](./Api/MultiTokensERC1155OrCompatibleApi.md#multitokentransactiontransfermultitokenkmscelo) | Transfer a Multi Token
*nFTERC721OrCompatible()* | [**nftBurnNft()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnft) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftBurnNftAlgo()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnftalgo) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftBurnNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnftcelo) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftBurnNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnftflowkms) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftBurnNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnftflowmnemonic) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftBurnNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnftflowpk) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftBurnNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnftkms) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftBurnNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnftkmscelo) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftBurnNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnftkmstron) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftBurnNftTron()**](./Api/NFTERC721OrCompatibleApi.md#nftburnnfttron) | Burn an NFT
*nFTERC721OrCompatible()* | [**nftDeployNft()**](./Api/NFTERC721OrCompatibleApi.md#nftdeploynft) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftDeployNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#nftdeploynftcelo) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftDeployNftCeloKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftdeploynftcelokms) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftDeployNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftdeploynftflowkms) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftDeployNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#nftdeploynftflowmnemonic) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftDeployNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#nftdeploynftflowpk) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftDeployNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftdeploynftkms) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftDeployNftTron()**](./Api/NFTERC721OrCompatibleApi.md#nftdeploynfttron) | Deploy an NFT smart contract
*nFTERC721OrCompatible()* | [**nftDeployNftTronKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftdeploynfttronkms) | Deploy an NFT smart contract
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
*nFTERC721OrCompatible()* | [**nftMintAddNftMinter()**](./Api/NFTERC721OrCompatibleApi.md#nftmintaddnftminter) | Add an NFT minter to an NFT smart contract
*nFTERC721OrCompatible()* | [**nftMintAddNftMinterKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftmintaddnftminterkms) | Add an NFT minter to an NFT smart contract
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNft()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenft) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenftcelo) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenftflowkms) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenftflowmnemonic) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenftflowpk) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenftkms) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenftkmscelo) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenftkmstron) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNftMinter()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenftminter) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintBatchMintMultipleNftTron()**](./Api/NFTERC721OrCompatibleApi.md#nftmintbatchmintmultiplenfttron) | Mint multiple NFTs
*nFTERC721OrCompatible()* | [**nftMintNft()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnft) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftAlgorand()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftalgorand) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftAlgorandKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftalgorandkms) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftcelo) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftExpress()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftexpress) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftExpressAlgorand()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftexpressalgorand) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftExpressSolana()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftexpresssolana) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftflowkms) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftflowmnemonic) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftflowpk) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftkms) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftkmscelo) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftkmstron) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftMinter()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftminter) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftSolana()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftsolana) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftSolanaKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnftsolanakms) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftMintNftTron()**](./Api/NFTERC721OrCompatibleApi.md#nftmintnfttron) | Mint an NFT
*nFTERC721OrCompatible()* | [**nftRoyaltyUpdateCashbackValueForAuthorNftCeloUpdate()**](./Api/NFTERC721OrCompatibleApi.md#nftroyaltyupdatecashbackvalueforauthornftceloupdate) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**nftRoyaltyUpdateCashbackValueForAuthorNftKMSCeloUpdate()**](./Api/NFTERC721OrCompatibleApi.md#nftroyaltyupdatecashbackvalueforauthornftkmsceloupdate) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**nftRoyaltyUpdateCashbackValueForAuthorNftKMSTronUpdate()**](./Api/NFTERC721OrCompatibleApi.md#nftroyaltyupdatecashbackvalueforauthornftkmstronupdate) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**nftRoyaltyUpdateCashbackValueForAuthorNftKMSUpdate()**](./Api/NFTERC721OrCompatibleApi.md#nftroyaltyupdatecashbackvalueforauthornftkmsupdate) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**nftRoyaltyUpdateCashbackValueForAuthorNftTronUpdate()**](./Api/NFTERC721OrCompatibleApi.md#nftroyaltyupdatecashbackvalueforauthornfttronupdate) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**nftRoyaltyUpdateCashbackValueForAuthorNftUpdate()**](./Api/NFTERC721OrCompatibleApi.md#nftroyaltyupdatecashbackvalueforauthornftupdate) | Update NFT royalty information
*nFTERC721OrCompatible()* | [**nftTransactionTransferNft()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernft) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftAlgo()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftalgo) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftAlgoExpress()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftalgoexpress) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftAlgoKMS()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftalgokms) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftCelo()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftcelo) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftFlowKMS()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftflowkms) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftFlowMnemonic()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftflowmnemonic) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftFlowPK()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftflowpk) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftKMS()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftkms) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftKMSCelo()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftkmscelo) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftKMSTron()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftkmstron) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftSolana()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftsolana) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftSolanaKMS()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernftsolanakms) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftTransactionTransferNftTron()**](./Api/NFTERC721OrCompatibleApi.md#nfttransactiontransfernfttron) | Transfer an NFT
*nFTERC721OrCompatible()* | [**nftVerifySolanaNFT()**](./Api/NFTERC721OrCompatibleApi.md#nftverifysolananft) | Verify an NFT in an NFT collection on Solana
*nFTERC721OrCompatible()* | [**nftVerifySolanaNFTKMS()**](./Api/NFTERC721OrCompatibleApi.md#nftverifysolananftkms) | Verify an NFT in an NFT collection on Solana
*nodeRPC()* | [**nodeJsonPostRpcDriver()**](./Api/NodeRPCApi.md#nodejsonpostrpcdriver) | Connect to the blockchain node through an RPC driver
*nodeRPC()* | [**nodeJsonRpcGetDriver()**](./Api/NodeRPCApi.md#nodejsonrpcgetdriver) | Connect to the blockchain node through an RPC driver
*nodeRPC()* | [**nodeJsonRpcPutDriver()**](./Api/NodeRPCApi.md#nodejsonrpcputdriver) | Connect to the blockchain node through an RPC driver
*notificationSubscriptions()* | [**deleteSubscription()**](./Api/NotificationSubscriptionsApi.md#deletesubscription) | Cancel existing subscription
*notificationSubscriptions()* | [**disableWebHookHmac()**](./Api/NotificationSubscriptionsApi.md#disablewebhookhmac) | Disable HMAC webhook digest
*notificationSubscriptions()* | [**enableWebHookHmac()**](./Api/NotificationSubscriptionsApi.md#enablewebhookhmac) | Enable HMAC webhook digest
*notificationSubscriptions()* | [**getAllWebhooks()**](./Api/NotificationSubscriptionsApi.md#getallwebhooks) | List all executed webhooks
*notificationSubscriptions()* | [**getAllWebhooksCount()**](./Api/NotificationSubscriptionsApi.md#getallwebhookscount) | Count of found entities for get webhook request
*notificationSubscriptions()* | [**getSubscriptionReport()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionreport) | Obtain report for subscription
*notificationSubscriptions()* | [**getSubscriptions()**](./Api/NotificationSubscriptionsApi.md#getsubscriptions) | List all active subscriptions
*notificationSubscriptions()* | [**getSubscriptionsCount()**](./Api/NotificationSubscriptionsApi.md#getsubscriptionscount) | Count of found entities for get webhook request
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionBalance()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionbalance) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionContractLogEvent()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptioncontractlogevent) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionIncoming()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionincoming) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionInterval()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptioninterval) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionKMSError()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionkmserror) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionKMSSuccess()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionkmssuccess) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionMultiTokenTransferEvent()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionmultitokentransferevent) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionNftTransferEvent()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionnfttransferevent) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionNotification()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionnotification) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionPartialTradeMatch()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionpartialtradematch) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionPending()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptionpending) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionTradeMatch()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptiontradematch) | Create a subscription
*notificationSubscriptions()* | [**subscriptionCreateSubscriptionTxInTheBlock()**](./Api/NotificationSubscriptionsApi.md#subscriptioncreatesubscriptiontxintheblock) | Create a subscription
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
*orderBook()* | [**tradeCreateFutureTrade()**](./Api/OrderBookApi.md#tradecreatefuturetrade) | Store buy / sell trade
*orderBook()* | [**tradeCreateTrade()**](./Api/OrderBookApi.md#tradecreatetrade) | Store buy / sell trade
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
*polygon()* | [**polygonSmartcontractCallPolygonSmartContractMethod()**](./Api/PolygonApi.md#polygonsmartcontractcallpolygonsmartcontractmethod) | Invoke a method in a smart contract on Polygon
*polygon()* | [**polygonSmartcontractCallPolygonSmartContractMethodCaller()**](./Api/PolygonApi.md#polygonsmartcontractcallpolygonsmartcontractmethodcaller) | Invoke a method in a smart contract on Polygon
*polygon()* | [**polygonSmartcontractCallPolygonSmartContractMethodKMS()**](./Api/PolygonApi.md#polygonsmartcontractcallpolygonsmartcontractmethodkms) | Invoke a method in a smart contract on Polygon
*polygon()* | [**polygonSmartcontractCallPolygonSmartContractReadMethod()**](./Api/PolygonApi.md#polygonsmartcontractcallpolygonsmartcontractreadmethod) | Invoke a method in a smart contract on Polygon
*polygon()* | [**polygonTransactionTransferPolygonBlockchain()**](./Api/PolygonApi.md#polygontransactiontransferpolygonblockchain) | Send MATIC from account to account
*polygon()* | [**polygonTransactionTransferPolygonBlockchainKMS()**](./Api/PolygonApi.md#polygontransactiontransferpolygonblockchainkms) | Send MATIC from account to account
*polygon()* | [**polygonWeb3Driver()**](./Api/PolygonApi.md#polygonweb3driver) | Web3 HTTP driver
*serviceUtils()* | [**freezeApiKey()**](./Api/ServiceUtilsApi.md#freezeapikey) | Freeze API Key
*serviceUtils()* | [**getCredits()**](./Api/ServiceUtilsApi.md#getcredits) | Get information about your credit consumption for the last month
*serviceUtils()* | [**getVersion()**](./Api/ServiceUtilsApi.md#getversion) | Get API version
*serviceUtils()* | [**unfreezeApiKey()**](./Api/ServiceUtilsApi.md#unfreezeapikey) | Unfreeze API Key
*solana()* | [**solanaBroadcastConfirm()**](./Api/SolanaApi.md#solanabroadcastconfirm) | Broadcast and confirm signed Solana transaction
*solana()* | [**solanaGenerateWallet()**](./Api/SolanaApi.md#solanageneratewallet) | Generate Solana wallet
*solana()* | [**solanaGetBalance()**](./Api/SolanaApi.md#solanagetbalance) | Get Solana Account balance
*solana()* | [**solanaGetBlock()**](./Api/SolanaApi.md#solanagetblock) | Get Solana block by number
*solana()* | [**solanaGetCurrentBlock()**](./Api/SolanaApi.md#solanagetcurrentblock) | Get current block number
*solana()* | [**solanaGetTransaction()**](./Api/SolanaApi.md#solanagettransaction) | Get Solana Transaction
*solana()* | [**solanaTransactionTransferSolanaBlockchain()**](./Api/SolanaApi.md#solanatransactiontransfersolanablockchain) | Send SOL from account to account
*solana()* | [**solanaTransactionTransferSolanaBlockchainKMS()**](./Api/SolanaApi.md#solanatransactiontransfersolanablockchainkms) | Send SOL from account to account
*solana()* | [**solanaWeb3Driver()**](./Api/SolanaApi.md#solanaweb3driver) | JSON RPC HTTP driver
*stellar()* | [**xlmBroadcast()**](./Api/StellarApi.md#xlmbroadcast) | Broadcast signed XLM transaction
*stellar()* | [**xlmGetAccountInfo()**](./Api/StellarApi.md#xlmgetaccountinfo) | Get XLM Account info
*stellar()* | [**xlmGetAccountTx()**](./Api/StellarApi.md#xlmgetaccounttx) | Get XLM Account transactions
*stellar()* | [**xlmGetFee()**](./Api/StellarApi.md#xlmgetfee) | Get actual XLM fee
*stellar()* | [**xlmGetLastClosedLedger()**](./Api/StellarApi.md#xlmgetlastclosedledger) | Get XLM Blockchain Information
*stellar()* | [**xlmGetLedger()**](./Api/StellarApi.md#xlmgetledger) | Get XLM Blockchain Ledger by sequence
*stellar()* | [**xlmGetLedgerTx()**](./Api/StellarApi.md#xlmgetledgertx) | Get XLM Blockchain Transactions in Ledger
*stellar()* | [**xlmGetTransaction()**](./Api/StellarApi.md#xlmgettransaction) | Get XLM Transaction by hash
*stellar()* | [**xlmTransactionTransferXlmBlockchain()**](./Api/StellarApi.md#xlmtransactiontransferxlmblockchain) | Send XLM from address to address
*stellar()* | [**xlmTransactionTransferXlmBlockchainAsset()**](./Api/StellarApi.md#xlmtransactiontransferxlmblockchainasset) | Send XLM from address to address
*stellar()* | [**xlmTransactionTransferXlmBlockchainKMS()**](./Api/StellarApi.md#xlmtransactiontransferxlmblockchainkms) | Send XLM from address to address
*stellar()* | [**xlmTransactionTransferXlmBlockchainKMSAsset()**](./Api/StellarApi.md#xlmtransactiontransferxlmblockchainkmsasset) | Send XLM from address to address
*stellar()* | [**xlmTrustLineXlmBlockchain()**](./Api/StellarApi.md#xlmtrustlinexlmblockchain) | Create / Update / Delete XLM trust line
*stellar()* | [**xlmTrustLineXlmBlockchainKMS()**](./Api/StellarApi.md#xlmtrustlinexlmblockchainkms) | Create / Update / Delete XLM trust line
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
*tron()* | [**tronFreezeBalanceFreezeTron()**](./Api/TronApi.md#tronfreezebalancefreezetron) | Freeze the balance of a TRON account
*tron()* | [**tronFreezeBalanceFreezeTronKMS()**](./Api/TronApi.md#tronfreezebalancefreezetronkms) | Freeze the balance of a TRON account
*tron()* | [**tronGenerateAddress()**](./Api/TronApi.md#trongenerateaddress) | Generate a TRON address from the wallet&#39;s extended public key
*tron()* | [**tronGenerateAddressPrivateKey()**](./Api/TronApi.md#trongenerateaddressprivatekey) | Generate the private key for a TRON address
*tron()* | [**tronGetAccount()**](./Api/TronApi.md#trongetaccount) | Get the TRON account by its address
*tron()* | [**tronGetBlock()**](./Api/TronApi.md#trongetblock) | Get a TRON block by its hash or height
*tron()* | [**tronGetCurrentBlock()**](./Api/TronApi.md#trongetcurrentblock) | Get the current TRON block
*tron()* | [**tronGetTransaction()**](./Api/TronApi.md#trongettransaction) | Get a TRON transaction by its hash
*tron()* | [**tronTransactionTransferTronBlockchain()**](./Api/TronApi.md#trontransactiontransfertronblockchain) | Send TRX to a TRON account
*tron()* | [**tronTransactionTransferTronBlockchainKMS()**](./Api/TronApi.md#trontransactiontransfertronblockchainkms) | Send TRX to a TRON account
*tron()* | [**tronTrc10DeployCreateTronTrc10Blockchain()**](./Api/TronApi.md#trontrc10deploycreatetrontrc10blockchain) | Create a TRC-10 token
*tron()* | [**tronTrc10DeployCreateTronTrc10BlockchainKMS()**](./Api/TronApi.md#trontrc10deploycreatetrontrc10blockchainkms) | Create a TRC-10 token
*tron()* | [**tronTrc10Detail()**](./Api/TronApi.md#trontrc10detail) | Get information about a TRC-10 token
*tron()* | [**tronTrc10TransactionTransferTronTrc10Blockchain()**](./Api/TronApi.md#trontrc10transactiontransfertrontrc10blockchain) | Send TRC-10 tokens to a TRON account
*tron()* | [**tronTrc10TransactionTransferTronTrc10BlockchainKMS()**](./Api/TronApi.md#trontrc10transactiontransfertrontrc10blockchainkms) | Send TRC-10 tokens to a TRON account
*tron()* | [**tronTrc20DeployCreateTronTrc20Blockchain()**](./Api/TronApi.md#trontrc20deploycreatetrontrc20blockchain) | Create a TRC-20 token
*tron()* | [**tronTrc20DeployCreateTronTrc20BlockchainKMS()**](./Api/TronApi.md#trontrc20deploycreatetrontrc20blockchainkms) | Create a TRC-20 token
*tron()* | [**tronTrc20TransactionTransferTronTrc20Blockchain()**](./Api/TronApi.md#trontrc20transactiontransfertrontrc20blockchain) | Send TRC-20 tokens to a TRON account
*tron()* | [**tronTrc20TransactionTransferTronTrc20BlockchainKMS()**](./Api/TronApi.md#trontrc20transactiontransfertrontrc20blockchainkms) | Send TRC-20 tokens to a TRON account
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
*veChain()* | [**vetTransactionTransferVetBlockchain()**](./Api/VeChainApi.md#vettransactiontransfervetblockchain) | Send VeChain from account to account
*veChain()* | [**vetTransactionTransferVetBlockchainKMS()**](./Api/VeChainApi.md#vettransactiontransfervetblockchainkms) | Send VeChain from account to account
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
*xRP()* | [**xrpAccountSettingsAccountSettingsXrpBlockchain()**](./Api/XRPApi.md#xrpaccountsettingsaccountsettingsxrpblockchain) | Modify XRP account
*xRP()* | [**xrpAccountSettingsAccountSettingsXrpBlockchainKMS()**](./Api/XRPApi.md#xrpaccountsettingsaccountsettingsxrpblockchainkms) | Modify XRP account
*xRP()* | [**xrpBroadcast()**](./Api/XRPApi.md#xrpbroadcast) | Broadcast signed XRP transaction
*xRP()* | [**xrpGetAccountBalance()**](./Api/XRPApi.md#xrpgetaccountbalance) | Get Account Balance
*xRP()* | [**xrpGetAccountInfo()**](./Api/XRPApi.md#xrpgetaccountinfo) | Get Account info
*xRP()* | [**xrpGetAccountTx()**](./Api/XRPApi.md#xrpgetaccounttx) | Get Account transactions
*xRP()* | [**xrpGetFee()**](./Api/XRPApi.md#xrpgetfee) | Get actual Blockchain fee
*xRP()* | [**xrpGetLastClosedLedger()**](./Api/XRPApi.md#xrpgetlastclosedledger) | Get XRP Blockchain Information
*xRP()* | [**xrpGetLedger()**](./Api/XRPApi.md#xrpgetledger) | Get Ledger
*xRP()* | [**xrpGetTransaction()**](./Api/XRPApi.md#xrpgettransaction) | Get XRP Transaction by hash
*xRP()* | [**xrpTransactionTransferXrpBlockchain()**](./Api/XRPApi.md#xrptransactiontransferxrpblockchain) | Send XRP from address to address
*xRP()* | [**xrpTransactionTransferXrpBlockchainAsset()**](./Api/XRPApi.md#xrptransactiontransferxrpblockchainasset) | Send XRP from address to address
*xRP()* | [**xrpTransactionTransferXrpBlockchainAssetKMS()**](./Api/XRPApi.md#xrptransactiontransferxrpblockchainassetkms) | Send XRP from address to address
*xRP()* | [**xrpTransactionTransferXrpBlockchainKMS()**](./Api/XRPApi.md#xrptransactiontransferxrpblockchainkms) | Send XRP from address to address
*xRP()* | [**xrpTrustLineXrpBlockchain()**](./Api/XRPApi.md#xrptrustlinexrpblockchain) | Create / Update / Delete XRP trust line
*xRP()* | [**xrpTrustLineXrpBlockchainKMS()**](./Api/XRPApi.md#xrptrustlinexrpblockchainkms) | Create / Update / Delete XRP trust line
*xRP()* | [**xrpWallet()**](./Api/XRPApi.md#xrpwallet) | Generate XRP account
*xinFin()* | [**xdcBroadcast()**](./Api/XinFinApi.md#xdcbroadcast) | Broadcast signed XDC transaction
*xinFin()* | [**xdcGenerateAddress()**](./Api/XinFinApi.md#xdcgenerateaddress) | Generate XDC account address from Extended public key
*xinFin()* | [**xdcGenerateAddressPrivateKey()**](./Api/XinFinApi.md#xdcgenerateaddressprivatekey) | Generate XDC private key
*xinFin()* | [**xdcGenerateWallet()**](./Api/XinFinApi.md#xdcgeneratewallet) | Generate XDC wallet
*xinFin()* | [**xdcGetBalance()**](./Api/XinFinApi.md#xdcgetbalance) | Get XDC Account balance
*xinFin()* | [**xdcGetBlock()**](./Api/XinFinApi.md#xdcgetblock) | Get XDC block by hash
*xinFin()* | [**xdcGetCurrentBlock()**](./Api/XinFinApi.md#xdcgetcurrentblock) | Get current block number
*xinFin()* | [**xdcGetTransaction()**](./Api/XinFinApi.md#xdcgettransaction) | Get XDC Transaction
*xinFin()* | [**xdcGetTransactionCount()**](./Api/XinFinApi.md#xdcgettransactioncount) | Get count of outgoing XDC transactions
*xinFin()* | [**xdcSmartcontractCallXdcReadSmartContractMethod()**](./Api/XinFinApi.md#xdcsmartcontractcallxdcreadsmartcontractmethod) | Invoke a method in a smart contract on XinFin
*xinFin()* | [**xdcSmartcontractCallXdcSmartContractMethod()**](./Api/XinFinApi.md#xdcsmartcontractcallxdcsmartcontractmethod) | Invoke a method in a smart contract on XinFin
*xinFin()* | [**xdcSmartcontractCallXdcSmartContractMethodKMS()**](./Api/XinFinApi.md#xdcsmartcontractcallxdcsmartcontractmethodkms) | Invoke a method in a smart contract on XinFin
*xinFin()* | [**xdcTransactionTransferXdcBlockchain()**](./Api/XinFinApi.md#xdctransactiontransferxdcblockchain) | Send XDC / ERC20 from account to account
*xinFin()* | [**xdcTransactionTransferXdcBlockchainKMS()**](./Api/XinFinApi.md#xdctransactiontransferxdcblockchainkms) | Send XDC / ERC20 from account to account
*xinFin()* | [**xdcWeb3Driver()**](./Api/XinFinApi.md#xdcweb3driver) | Web3 HTTP driver


[[Back to top]](#) 