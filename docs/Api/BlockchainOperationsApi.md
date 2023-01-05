# Tatum/Api/BlockchainOperationsApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bnbAssetOffchain()**](#bnbassetoffchain) | **POST** [/v3/offchain/bnb/asset](https://apidoc.tatum.io/tag/BlockchainOperations#operation/BnbAssetOffchain) | Create a BNB-based asset
[**offchainAdaTransferAdaKMS()**](#offchainadatransferadakms) | **POST** [/v3/offchain/ada/transfer#postTransferAdaKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAdaTransferAdaKMS) | Send ADA from a virtual account to the blockchain
[**offchainAdaTransferAdaKeyPair()**](#offchainadatransferadakeypair) | **POST** [/v3/offchain/ada/transfer#postTransferAdaKeyPair](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAdaTransferAdaKeyPair) | Send ADA from a virtual account to the blockchain
[**offchainAdaTransferAdaMnemonic()**](#offchainadatransferadamnemonic) | **POST** [/v3/offchain/ada/transfer#postTransferAdaMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAdaTransferAdaMnemonic) | Send ADA from a virtual account to the blockchain
[**offchainAlgoErc20DeployAlgoErc20OffchainKMSAddress()**](#offchainalgoerc20deployalgoerc20offchainkmsaddress) | **POST** [/v3/offchain/algo/erc20/deploy#postDeployAlgoErc20OffchainKMSAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAlgoErc20DeployAlgoErc20OffchainKMSAddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress()**](#offchainalgoerc20deployalgoerc20offchainmnemonicaddress) | **POST** [/v3/offchain/algo/erc20/deploy#postDeployAlgoErc20OffchainMnemonicAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainAlgoErc20DeployAlgoErc20OffchainPKAddress()**](#offchainalgoerc20deployalgoerc20offchainpkaddress) | **POST** [/v3/offchain/algo/erc20/deploy#postDeployAlgoErc20OffchainPKAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAlgoErc20DeployAlgoErc20OffchainPKAddress) | Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainAlgorandTransferAlgo()**](#offchainalgorandtransferalgo) | **POST** [/v3/offchain/algorand/transfer#postTransferAlgo](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAlgorandTransferAlgo) | Send ALGO from a virtual account to the blockchain
[**offchainAlgorandTransferAlgoErc20()**](#offchainalgorandtransferalgoerc20) | **POST** [/v3/offchain/algorand/transfer#postTransferAlgoErc20](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAlgorandTransferAlgoErc20) | Send ALGO from a virtual account to the blockchain
[**offchainAlgorandTransferAlgoKMS()**](#offchainalgorandtransferalgokms) | **POST** [/v3/offchain/algorand/transfer#postTransferAlgoKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainAlgorandTransferAlgoKMS) | Send ALGO from a virtual account to the blockchain
[**offchainBcashTransferBchKMS()**](#offchainbcashtransferbchkms) | **POST** [/v3/offchain/bcash/transfer#postTransferBchKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBcashTransferBchKMS) | Send BCH from a virtual account to the blockchain
[**offchainBcashTransferBchKeyPair()**](#offchainbcashtransferbchkeypair) | **POST** [/v3/offchain/bcash/transfer#postTransferBchKeyPair](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBcashTransferBchKeyPair) | Send BCH from a virtual account to the blockchain
[**offchainBcashTransferBchMnemonic()**](#offchainbcashtransferbchmnemonic) | **POST** [/v3/offchain/bcash/transfer#postTransferBchMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBcashTransferBchMnemonic) | Send BCH from a virtual account to the blockchain
[**offchainBitcoinTransferBtcKMS()**](#offchainbitcointransferbtckms) | **POST** [/v3/offchain/bitcoin/transfer#postTransferBtcKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBitcoinTransferBtcKMS) | Send BTC from a virtual account to the blockchain
[**offchainBitcoinTransferBtcKeyPair()**](#offchainbitcointransferbtckeypair) | **POST** [/v3/offchain/bitcoin/transfer#postTransferBtcKeyPair](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBitcoinTransferBtcKeyPair) | Send BTC from a virtual account to the blockchain
[**offchainBitcoinTransferBtcMnemonic()**](#offchainbitcointransferbtcmnemonic) | **POST** [/v3/offchain/bitcoin/transfer#postTransferBtcMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBitcoinTransferBtcMnemonic) | Send BTC from a virtual account to the blockchain
[**offchainBnbTransferBnb()**](#offchainbnbtransferbnb) | **POST** [/v3/offchain/bnb/transfer#postTransferBnb](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBnbTransferBnb) | Send BNB from a virtual account to the blockchain
[**offchainBnbTransferBnbKMS()**](#offchainbnbtransferbnbkms) | **POST** [/v3/offchain/bnb/transfer#postTransferBnbKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBnbTransferBnbKMS) | Send BNB from a virtual account to the blockchain
[**offchainBscBep20DeployErc20OffchainKMSAddress()**](#offchainbscbep20deployerc20offchainkmsaddress) | **POST** [/v3/offchain/bsc/bep20/deploy#postDeployErc20OffchainKMSAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscBep20DeployErc20OffchainKMSAddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offchainBscBep20DeployErc20OffchainKMSXpub()**](#offchainbscbep20deployerc20offchainkmsxpub) | **POST** [/v3/offchain/bsc/bep20/deploy#postDeployErc20OffchainKMSXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscBep20DeployErc20OffchainKMSXpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offchainBscBep20DeployErc20OffchainMnemXpub()**](#offchainbscbep20deployerc20offchainmnemxpub) | **POST** [/v3/offchain/bsc/bep20/deploy#postDeployErc20OffchainMnemXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscBep20DeployErc20OffchainMnemXpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offchainBscBep20DeployErc20OffchainMnemonicAddress()**](#offchainbscbep20deployerc20offchainmnemonicaddress) | **POST** [/v3/offchain/bsc/bep20/deploy#postDeployErc20OffchainMnemonicAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscBep20DeployErc20OffchainMnemonicAddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offchainBscBep20DeployErc20OffchainPKAddress()**](#offchainbscbep20deployerc20offchainpkaddress) | **POST** [/v3/offchain/bsc/bep20/deploy#postDeployErc20OffchainPKAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscBep20DeployErc20OffchainPKAddress) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offchainBscBep20DeployErc20OffchainPKXpub()**](#offchainbscbep20deployerc20offchainpkxpub) | **POST** [/v3/offchain/bsc/bep20/deploy#postDeployErc20OffchainPKXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscBep20DeployErc20OffchainPKXpub) | Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account
[**offchainBscBep20Erc20()**](#offchainbscbep20erc20) | **POST** [/v3/offchain/bsc/bep20#postErc20](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscBep20Erc20) | Register a new BNB Smart Chain BEP-20 token in the virtual account
[**offchainBscBep20Erc20Address()**](#offchainbscbep20erc20address) | **POST** [/v3/offchain/bsc/bep20#postErc20Address](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscBep20Erc20Address) | Register a new BNB Smart Chain BEP-20 token in the virtual account
[**offchainBscTransferBsc()**](#offchainbsctransferbsc) | **POST** [/v3/offchain/bsc/transfer#postTransferBsc](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscTransferBsc) | Send BSC from a virtual account to the blockchain
[**offchainBscTransferBscKMS()**](#offchainbsctransferbsckms) | **POST** [/v3/offchain/bsc/transfer#postTransferBscKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscTransferBscKMS) | Send BSC from a virtual account to the blockchain
[**offchainBscTransferBscMnemonic()**](#offchainbsctransferbscmnemonic) | **POST** [/v3/offchain/bsc/transfer#postTransferBscMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainBscTransferBscMnemonic) | Send BSC from a virtual account to the blockchain
[**offchainCeloErc20()**](#offchainceloerc20) | **POST** [/v3/offchain/celo/erc20#postErc20](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloErc20) | Register a new Celo ERC-20-equivalent token in the virtual account
[**offchainCeloErc20Address()**](#offchainceloerc20address) | **POST** [/v3/offchain/celo/erc20#postErc20Address](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloErc20Address) | Register a new Celo ERC-20-equivalent token in the virtual account
[**offchainCeloErc20DeployCeloErc20OffchainKMSAddress()**](#offchainceloerc20deployceloerc20offchainkmsaddress) | **POST** [/v3/offchain/celo/erc20/deploy#postDeployCeloErc20OffchainKMSAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloErc20DeployCeloErc20OffchainKMSAddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainCeloErc20DeployCeloErc20OffchainKMSXpub()**](#offchainceloerc20deployceloerc20offchainkmsxpub) | **POST** [/v3/offchain/celo/erc20/deploy#postDeployCeloErc20OffchainKMSXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloErc20DeployCeloErc20OffchainKMSXpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainCeloErc20DeployCeloErc20OffchainMnemXpub()**](#offchainceloerc20deployceloerc20offchainmnemxpub) | **POST** [/v3/offchain/celo/erc20/deploy#postDeployCeloErc20OffchainMnemXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloErc20DeployCeloErc20OffchainMnemXpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainCeloErc20DeployCeloErc20OffchainMnemonicAddress()**](#offchainceloerc20deployceloerc20offchainmnemonicaddress) | **POST** [/v3/offchain/celo/erc20/deploy#postDeployCeloErc20OffchainMnemonicAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloErc20DeployCeloErc20OffchainMnemonicAddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainCeloErc20DeployCeloErc20OffchainPKAddress()**](#offchainceloerc20deployceloerc20offchainpkaddress) | **POST** [/v3/offchain/celo/erc20/deploy#postDeployCeloErc20OffchainPKAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloErc20DeployCeloErc20OffchainPKAddress) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainCeloErc20DeployCeloErc20OffchainPKXpub()**](#offchainceloerc20deployceloerc20offchainpkxpub) | **POST** [/v3/offchain/celo/erc20/deploy#postDeployCeloErc20OffchainPKXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloErc20DeployCeloErc20OffchainPKXpub) | Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainCeloTransferCelo()**](#offchaincelotransfercelo) | **POST** [/v3/offchain/celo/transfer#postTransferCelo](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloTransferCelo) | Send CELO from a virtual account to the blockchain
[**offchainCeloTransferCeloKMS()**](#offchaincelotransfercelokms) | **POST** [/v3/offchain/celo/transfer#postTransferCeloKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloTransferCeloKMS) | Send CELO from a virtual account to the blockchain
[**offchainCeloTransferCeloMnemonic()**](#offchaincelotransfercelomnemonic) | **POST** [/v3/offchain/celo/transfer#postTransferCeloMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainCeloTransferCeloMnemonic) | Send CELO from a virtual account to the blockchain
[**offchainDogecoinTransferDogeKMS()**](#offchaindogecointransferdogekms) | **POST** [/v3/offchain/dogecoin/transfer#postTransferDogeKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainDogecoinTransferDogeKMS) | Send DOGE from a virtual account to the blockchain
[**offchainDogecoinTransferDogeKeyPair()**](#offchaindogecointransferdogekeypair) | **POST** [/v3/offchain/dogecoin/transfer#postTransferDogeKeyPair](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainDogecoinTransferDogeKeyPair) | Send DOGE from a virtual account to the blockchain
[**offchainDogecoinTransferDogeMnemonic()**](#offchaindogecointransferdogemnemonic) | **POST** [/v3/offchain/dogecoin/transfer#postTransferDogeMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainDogecoinTransferDogeMnemonic) | Send DOGE from a virtual account to the blockchain
[**offchainEgldTransferEth()**](#offchainegldtransfereth) | **POST** [/v3/offchain/egld/transfer#postTransferEth](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEgldTransferEth) | Send EGLD from a virtual account to the blockchain
[**offchainEgldTransferEthKMS()**](#offchainegldtransferethkms) | **POST** [/v3/offchain/egld/transfer#postTransferEthKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEgldTransferEthKMS) | Send EGLD from a virtual account to the blockchain
[**offchainEgldTransferEthMnemonic()**](#offchainegldtransferethmnemonic) | **POST** [/v3/offchain/egld/transfer#postTransferEthMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEgldTransferEthMnemonic) | Send EGLD from a virtual account to the blockchain
[**offchainEthereumErc20()**](#offchainethereumerc20) | **POST** [/v3/offchain/ethereum/erc20#postErc20](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20) | Register a new Ethereum ERC-20 token in the virtual account
[**offchainEthereumErc20Address()**](#offchainethereumerc20address) | **POST** [/v3/offchain/ethereum/erc20#postErc20Address](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20Address) | Register a new Ethereum ERC-20 token in the virtual account
[**offchainEthereumErc20DeployErc20OffchainKMSAddress()**](#offchainethereumerc20deployerc20offchainkmsaddress) | **POST** [/v3/offchain/ethereum/erc20/deploy#postDeployErc20OffchainKMSAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20DeployErc20OffchainKMSAddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**offchainEthereumErc20DeployErc20OffchainKMSXpub()**](#offchainethereumerc20deployerc20offchainkmsxpub) | **POST** [/v3/offchain/ethereum/erc20/deploy#postDeployErc20OffchainKMSXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20DeployErc20OffchainKMSXpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**offchainEthereumErc20DeployErc20OffchainMnemXpub()**](#offchainethereumerc20deployerc20offchainmnemxpub) | **POST** [/v3/offchain/ethereum/erc20/deploy#postDeployErc20OffchainMnemXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20DeployErc20OffchainMnemXpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**offchainEthereumErc20DeployErc20OffchainMnemonicAddress()**](#offchainethereumerc20deployerc20offchainmnemonicaddress) | **POST** [/v3/offchain/ethereum/erc20/deploy#postDeployErc20OffchainMnemonicAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20DeployErc20OffchainMnemonicAddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**offchainEthereumErc20DeployErc20OffchainPKAddress()**](#offchainethereumerc20deployerc20offchainpkaddress) | **POST** [/v3/offchain/ethereum/erc20/deploy#postDeployErc20OffchainPKAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20DeployErc20OffchainPKAddress) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**offchainEthereumErc20DeployErc20OffchainPKXpub()**](#offchainethereumerc20deployerc20offchainpkxpub) | **POST** [/v3/offchain/ethereum/erc20/deploy#postDeployErc20OffchainPKXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20DeployErc20OffchainPKXpub) | Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account
[**offchainEthereumErc20TransferErc20()**](#offchainethereumerc20transfererc20) | **POST** [/v3/offchain/ethereum/erc20/transfer#postTransferErc20](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20TransferErc20) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
[**offchainEthereumErc20TransferErc20KMS()**](#offchainethereumerc20transfererc20kms) | **POST** [/v3/offchain/ethereum/erc20/transfer#postTransferErc20KMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20TransferErc20KMS) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
[**offchainEthereumErc20TransferErc20Mnemonic()**](#offchainethereumerc20transfererc20mnemonic) | **POST** [/v3/offchain/ethereum/erc20/transfer#postTransferErc20Mnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumErc20TransferErc20Mnemonic) | Send Ethereum ERC-20 tokens from a virtual account to the blockchain
[**offchainEthereumTransferEth()**](#offchainethereumtransfereth) | **POST** [/v3/offchain/ethereum/transfer#postTransferEth](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumTransferEth) | Send ETH from a virtual account to the blockchain
[**offchainEthereumTransferEthKMS()**](#offchainethereumtransferethkms) | **POST** [/v3/offchain/ethereum/transfer#postTransferEthKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumTransferEthKMS) | Send ETH from a virtual account to the blockchain
[**offchainEthereumTransferEthMnemonic()**](#offchainethereumtransferethmnemonic) | **POST** [/v3/offchain/ethereum/transfer#postTransferEthMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainEthereumTransferEthMnemonic) | Send ETH from a virtual account to the blockchain
[**offchainFlowTransferFlowKMS()**](#offchainflowtransferflowkms) | **POST** [/v3/offchain/flow/transfer#postTransferFlowKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainFlowTransferFlowKMS) | Send FLOW from a virtual account to the blockchain
[**offchainFlowTransferFlowMnemonic()**](#offchainflowtransferflowmnemonic) | **POST** [/v3/offchain/flow/transfer#postTransferFlowMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainFlowTransferFlowMnemonic) | Send FLOW from a virtual account to the blockchain
[**offchainFlowTransferFlowPK()**](#offchainflowtransferflowpk) | **POST** [/v3/offchain/flow/transfer#postTransferFlowPK](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainFlowTransferFlowPK) | Send FLOW from a virtual account to the blockchain
[**offchainKcsErc20DeployKCSErc20OffchainKMSAddress()**](#offchainkcserc20deploykcserc20offchainkmsaddress) | **POST** [/v3/offchain/kcs/erc20/deploy#postDeployKCSErc20OffchainKMSAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKcsErc20DeployKCSErc20OffchainKMSAddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKcsErc20DeployKCSErc20OffchainKMSXpub()**](#offchainkcserc20deploykcserc20offchainkmsxpub) | **POST** [/v3/offchain/kcs/erc20/deploy#postDeployKCSErc20OffchainKMSXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKcsErc20DeployKCSErc20OffchainKMSXpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKcsErc20DeployKCSErc20OffchainMnemXpub()**](#offchainkcserc20deploykcserc20offchainmnemxpub) | **POST** [/v3/offchain/kcs/erc20/deploy#postDeployKCSErc20OffchainMnemXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKcsErc20DeployKCSErc20OffchainMnemXpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKcsErc20DeployKCSErc20OffchainMnemonicAddress()**](#offchainkcserc20deploykcserc20offchainmnemonicaddress) | **POST** [/v3/offchain/kcs/erc20/deploy#postDeployKCSErc20OffchainMnemonicAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKcsErc20DeployKCSErc20OffchainMnemonicAddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKcsErc20DeployKCSErc20OffchainPKAddress()**](#offchainkcserc20deploykcserc20offchainpkaddress) | **POST** [/v3/offchain/kcs/erc20/deploy#postDeployKCSErc20OffchainPKAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKcsErc20DeployKCSErc20OffchainPKAddress) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKcsErc20DeployKCSErc20OffchainPKXpub()**](#offchainkcserc20deploykcserc20offchainpkxpub) | **POST** [/v3/offchain/kcs/erc20/deploy#postDeployKCSErc20OffchainPKXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKcsErc20DeployKCSErc20OffchainPKXpub) | Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKcsTransferKCS()**](#offchainkcstransferkcs) | **POST** [/v3/offchain/kcs/transfer#postTransferKCS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKcsTransferKCS) | Send KCS from a virtual account to the blockchain
[**offchainKcsTransferKCSKMS()**](#offchainkcstransferkcskms) | **POST** [/v3/offchain/kcs/transfer#postTransferKCSKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKcsTransferKCSKMS) | Send KCS from a virtual account to the blockchain
[**offchainKcsTransferKCSMnemonic()**](#offchainkcstransferkcsmnemonic) | **POST** [/v3/offchain/kcs/transfer#postTransferKCSMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKcsTransferKCSMnemonic) | Send KCS from a virtual account to the blockchain
[**offchainKlaytnErc20DeployErc20OffchainKMSAddress()**](#offchainklaytnerc20deployerc20offchainkmsaddress) | **POST** [/v3/offchain/klaytn/erc20/deploy#postDeployErc20OffchainKMSAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKlaytnErc20DeployErc20OffchainKMSAddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKlaytnErc20DeployErc20OffchainKMSXpub()**](#offchainklaytnerc20deployerc20offchainkmsxpub) | **POST** [/v3/offchain/klaytn/erc20/deploy#postDeployErc20OffchainKMSXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKlaytnErc20DeployErc20OffchainKMSXpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKlaytnErc20DeployErc20OffchainMnemXpub()**](#offchainklaytnerc20deployerc20offchainmnemxpub) | **POST** [/v3/offchain/klaytn/erc20/deploy#postDeployErc20OffchainMnemXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKlaytnErc20DeployErc20OffchainMnemXpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKlaytnErc20DeployErc20OffchainMnemonicAddress()**](#offchainklaytnerc20deployerc20offchainmnemonicaddress) | **POST** [/v3/offchain/klaytn/erc20/deploy#postDeployErc20OffchainMnemonicAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKlaytnErc20DeployErc20OffchainMnemonicAddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKlaytnErc20DeployErc20OffchainPKAddress()**](#offchainklaytnerc20deployerc20offchainpkaddress) | **POST** [/v3/offchain/klaytn/erc20/deploy#postDeployErc20OffchainPKAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKlaytnErc20DeployErc20OffchainPKAddress) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKlaytnErc20DeployErc20OffchainPKXpub()**](#offchainklaytnerc20deployerc20offchainpkxpub) | **POST** [/v3/offchain/klaytn/erc20/deploy#postDeployErc20OffchainPKXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKlaytnErc20DeployErc20OffchainPKXpub) | Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainKlaytnTransferEth()**](#offchainklaytntransfereth) | **POST** [/v3/offchain/klaytn/transfer#postTransferEth](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKlaytnTransferEth) | Send KLAY from a virtual account to the blockchain
[**offchainKlaytnTransferEthKMS()**](#offchainklaytntransferethkms) | **POST** [/v3/offchain/klaytn/transfer#postTransferEthKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKlaytnTransferEthKMS) | Send KLAY from a virtual account to the blockchain
[**offchainKlaytnTransferEthMnemonic()**](#offchainklaytntransferethmnemonic) | **POST** [/v3/offchain/klaytn/transfer#postTransferEthMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainKlaytnTransferEthMnemonic) | Send KLAY from a virtual account to the blockchain
[**offchainLitecoinTransferLtcKMS()**](#offchainlitecointransferltckms) | **POST** [/v3/offchain/litecoin/transfer#postTransferLtcKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainLitecoinTransferLtcKMS) | Send LTC from a virtual account to the blockchain
[**offchainLitecoinTransferLtcKeyPair()**](#offchainlitecointransferltckeypair) | **POST** [/v3/offchain/litecoin/transfer#postTransferLtcKeyPair](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainLitecoinTransferLtcKeyPair) | Send LTC from a virtual account to the blockchain
[**offchainLitecoinTransferLtcMnemonic()**](#offchainlitecointransferltcmnemonic) | **POST** [/v3/offchain/litecoin/transfer#postTransferLtcMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainLitecoinTransferLtcMnemonic) | Send LTC from a virtual account to the blockchain
[**offchainOneHrm20DeployErc20OffchainKMSAddress()**](#offchainonehrm20deployerc20offchainkmsaddress) | **POST** [/v3/offchain/one/hrm20/deploy#postDeployErc20OffchainKMSAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneHrm20DeployErc20OffchainKMSAddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offchainOneHrm20DeployErc20OffchainKMSXpub()**](#offchainonehrm20deployerc20offchainkmsxpub) | **POST** [/v3/offchain/one/hrm20/deploy#postDeployErc20OffchainKMSXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneHrm20DeployErc20OffchainKMSXpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offchainOneHrm20DeployErc20OffchainMnemXpub()**](#offchainonehrm20deployerc20offchainmnemxpub) | **POST** [/v3/offchain/one/hrm20/deploy#postDeployErc20OffchainMnemXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneHrm20DeployErc20OffchainMnemXpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offchainOneHrm20DeployErc20OffchainMnemonicAddress()**](#offchainonehrm20deployerc20offchainmnemonicaddress) | **POST** [/v3/offchain/one/hrm20/deploy#postDeployErc20OffchainMnemonicAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneHrm20DeployErc20OffchainMnemonicAddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offchainOneHrm20DeployErc20OffchainPKAddress()**](#offchainonehrm20deployerc20offchainpkaddress) | **POST** [/v3/offchain/one/hrm20/deploy#postDeployErc20OffchainPKAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneHrm20DeployErc20OffchainPKAddress) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offchainOneHrm20DeployErc20OffchainPKXpub()**](#offchainonehrm20deployerc20offchainpkxpub) | **POST** [/v3/offchain/one/hrm20/deploy#postDeployErc20OffchainPKXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneHrm20DeployErc20OffchainPKXpub) | Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account
[**offchainOneHrm20Erc20()**](#offchainonehrm20erc20) | **POST** [/v3/offchain/one/hrm20#postErc20](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneHrm20Erc20) | Register a new Harmony HRM-20 token in the virtual account
[**offchainOneHrm20Erc20Address()**](#offchainonehrm20erc20address) | **POST** [/v3/offchain/one/hrm20#postErc20Address](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneHrm20Erc20Address) | Register a new Harmony HRM-20 token in the virtual account
[**offchainOneTransferEth()**](#offchainonetransfereth) | **POST** [/v3/offchain/one/transfer#postTransferEth](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneTransferEth) | Send ONE from a virtual account to the blockchain
[**offchainOneTransferEthKMS()**](#offchainonetransferethkms) | **POST** [/v3/offchain/one/transfer#postTransferEthKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneTransferEthKMS) | Send ONE from a virtual account to the blockchain
[**offchainOneTransferEthMnemonic()**](#offchainonetransferethmnemonic) | **POST** [/v3/offchain/one/transfer#postTransferEthMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainOneTransferEthMnemonic) | Send ONE from a virtual account to the blockchain
[**offchainPolygonTransferEth()**](#offchainpolygontransfereth) | **POST** [/v3/offchain/polygon/transfer#postTransferEth](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainPolygonTransferEth) | Send MATIC from a virtual account to the blockchain
[**offchainPolygonTransferEthKMS()**](#offchainpolygontransferethkms) | **POST** [/v3/offchain/polygon/transfer#postTransferEthKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainPolygonTransferEthKMS) | Send MATIC from a virtual account to the blockchain
[**offchainPolygonTransferEthMnemonic()**](#offchainpolygontransferethmnemonic) | **POST** [/v3/offchain/polygon/transfer#postTransferEthMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainPolygonTransferEthMnemonic) | Send MATIC from a virtual account to the blockchain
[**offchainSolanaTransferSol()**](#offchainsolanatransfersol) | **POST** [/v3/offchain/solana/transfer#postTransferSol](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainSolanaTransferSol) | Send SOL from a virtual account to the blockchain
[**offchainSolanaTransferSolKMS()**](#offchainsolanatransfersolkms) | **POST** [/v3/offchain/solana/transfer#postTransferSolKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainSolanaTransferSolKMS) | Send SOL from a virtual account to the blockchain
[**offchainTokenchainErc20()**](#offchaintokenchainerc20) | **POST** [/v3/offchain/token/{chain}#postErc20](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainToken{chain}Erc20) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
[**offchainTokenchainErc20Address()**](#offchaintokenchainerc20address) | **POST** [/v3/offchain/token/{chain}#postErc20Address](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainToken{chain}Erc20Address) | Register a new ERC-20 or ERC-20-equivalent token in the virtual account
[**offchainTronTransferTron()**](#offchaintrontransfertron) | **POST** [/v3/offchain/tron/transfer#postTransferTron](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTransferTron) | Send TRON from a virtual account to the blockchain
[**offchainTronTransferTronKMS()**](#offchaintrontransfertronkms) | **POST** [/v3/offchain/tron/transfer#postTransferTronKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTransferTronKMS) | Send TRON from a virtual account to the blockchain
[**offchainTronTransferTronMnemonic()**](#offchaintrontransfertronmnemonic) | **POST** [/v3/offchain/tron/transfer#postTransferTronMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTransferTronMnemonic) | Send TRON from a virtual account to the blockchain
[**offchainTronTrcAddress()**](#offchaintrontrcaddress) | **POST** [/v3/offchain/tron/trc#postTrcAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTrcAddress) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
[**offchainTronTrcDeployTrcOffchainKMSAddress()**](#offchaintrontrcdeploytrcoffchainkmsaddress) | **POST** [/v3/offchain/tron/trc/deploy#postDeployTrcOffchainKMSAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTrcDeployTrcOffchainKMSAddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**offchainTronTrcDeployTrcOffchainKMSXpub()**](#offchaintrontrcdeploytrcoffchainkmsxpub) | **POST** [/v3/offchain/tron/trc/deploy#postDeployTrcOffchainKMSXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTrcDeployTrcOffchainKMSXpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**offchainTronTrcDeployTrcOffchainMnemXpub()**](#offchaintrontrcdeploytrcoffchainmnemxpub) | **POST** [/v3/offchain/tron/trc/deploy#postDeployTrcOffchainMnemXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTrcDeployTrcOffchainMnemXpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**offchainTronTrcDeployTrcOffchainMnemonicAddress()**](#offchaintrontrcdeploytrcoffchainmnemonicaddress) | **POST** [/v3/offchain/tron/trc/deploy#postDeployTrcOffchainMnemonicAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTrcDeployTrcOffchainMnemonicAddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**offchainTronTrcDeployTrcOffchainPKAddress()**](#offchaintrontrcdeploytrcoffchainpkaddress) | **POST** [/v3/offchain/tron/trc/deploy#postDeployTrcOffchainPKAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTrcDeployTrcOffchainPKAddress) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**offchainTronTrcDeployTrcOffchainPKXpub()**](#offchaintrontrcdeploytrcoffchainpkxpub) | **POST** [/v3/offchain/tron/trc/deploy#postDeployTrcOffchainPKXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTrcDeployTrcOffchainPKXpub) | Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account
[**offchainTronTrcXpub()**](#offchaintrontrcxpub) | **POST** [/v3/offchain/tron/trc#postTrcXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainTronTrcXpub) | Register a new TRON TRC-10 or TRC-20 token in the virtual account
[**offchainXdcErc20()**](#offchainxdcerc20) | **POST** [/v3/offchain/xdc/erc20#postErc20](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcErc20) | Register a new XinFin ERC-20-equivalent token in the virtual account
[**offchainXdcErc20Address()**](#offchainxdcerc20address) | **POST** [/v3/offchain/xdc/erc20#postErc20Address](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcErc20Address) | Register a new XinFin ERC-20-equivalent token in the virtual account
[**offchainXdcErc20DeployErc20OffchainKMSAddress()**](#offchainxdcerc20deployerc20offchainkmsaddress) | **POST** [/v3/offchain/xdc/erc20/deploy#postDeployErc20OffchainKMSAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcErc20DeployErc20OffchainKMSAddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainXdcErc20DeployErc20OffchainKMSXpub()**](#offchainxdcerc20deployerc20offchainkmsxpub) | **POST** [/v3/offchain/xdc/erc20/deploy#postDeployErc20OffchainKMSXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcErc20DeployErc20OffchainKMSXpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainXdcErc20DeployErc20OffchainMnemXpub()**](#offchainxdcerc20deployerc20offchainmnemxpub) | **POST** [/v3/offchain/xdc/erc20/deploy#postDeployErc20OffchainMnemXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcErc20DeployErc20OffchainMnemXpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainXdcErc20DeployErc20OffchainMnemonicAddress()**](#offchainxdcerc20deployerc20offchainmnemonicaddress) | **POST** [/v3/offchain/xdc/erc20/deploy#postDeployErc20OffchainMnemonicAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcErc20DeployErc20OffchainMnemonicAddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainXdcErc20DeployErc20OffchainPKAddress()**](#offchainxdcerc20deployerc20offchainpkaddress) | **POST** [/v3/offchain/xdc/erc20/deploy#postDeployErc20OffchainPKAddress](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcErc20DeployErc20OffchainPKAddress) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainXdcErc20DeployErc20OffchainPKXpub()**](#offchainxdcerc20deployerc20offchainpkxpub) | **POST** [/v3/offchain/xdc/erc20/deploy#postDeployErc20OffchainPKXpub](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcErc20DeployErc20OffchainPKXpub) | Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account
[**offchainXdcTransferEth()**](#offchainxdctransfereth) | **POST** [/v3/offchain/xdc/transfer#postTransferEth](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcTransferEth) | Send XDC from a virtual account to the blockchain
[**offchainXdcTransferEthKMS()**](#offchainxdctransferethkms) | **POST** [/v3/offchain/xdc/transfer#postTransferEthKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcTransferEthKMS) | Send XDC from a virtual account to the blockchain
[**offchainXdcTransferEthMnemonic()**](#offchainxdctransferethmnemonic) | **POST** [/v3/offchain/xdc/transfer#postTransferEthMnemonic](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXdcTransferEthMnemonic) | Send XDC from a virtual account to the blockchain
[**offchainXlmTransferXlm()**](#offchainxlmtransferxlm) | **POST** [/v3/offchain/xlm/transfer#postTransferXlm](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXlmTransferXlm) | Send XLM from a virtual account to the blockchain
[**offchainXlmTransferXlmKMS()**](#offchainxlmtransferxlmkms) | **POST** [/v3/offchain/xlm/transfer#postTransferXlmKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXlmTransferXlmKMS) | Send XLM from a virtual account to the blockchain
[**offchainXrpTransferXrp()**](#offchainxrptransferxrp) | **POST** [/v3/offchain/xrp/transfer#postTransferXrp](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXrpTransferXrp) | Send XRP from a virtual account to the blockchain
[**offchainXrpTransferXrpKMS()**](#offchainxrptransferxrpkms) | **POST** [/v3/offchain/xrp/transfer#postTransferXrpKMS](https://apidoc.tatum.io/tag/BlockchainOperations#operation/offchainXrpTransferXrpKMS) | Send XRP from a virtual account to the blockchain
[**storeCeloErc20Address()**](#storeceloerc20address) | **POST** [/v3/offchain/celo/erc20/{name}/{address}](https://apidoc.tatum.io/tag/BlockchainOperations#operation/storeCeloErc20Address) | Set the contract address of a Celo ERC-20-equivalent token
[**storeTokenAddress()**](#storetokenaddress) | **POST** [/v3/offchain/token/{name}/{address}](https://apidoc.tatum.io/tag/BlockchainOperations#operation/storeTokenAddress) | Set the contract address of an ERC-20, ERC-20-equivalent, or TRC-10 token
[**storeTrcAddress()**](#storetrcaddress) | **POST** [/v3/offchain/tron/trc/{name}/{address}](https://apidoc.tatum.io/tag/BlockchainOperations#operation/storeTrcAddress) | Set the contract address of a TRC-10 or TRC-20 token
[**xlmAssetOffchain()**](#xlmassetoffchain) | **POST** [/v3/offchain/xlm/asset](https://apidoc.tatum.io/tag/BlockchainOperations#operation/XlmAssetOffchain) | Create an XLM-based asset
[**xrpAssetOffchain()**](#xrpassetoffchain) | **POST** [/v3/offchain/xrp/asset](https://apidoc.tatum.io/tag/BlockchainOperations#operation/XrpAssetOffchain) | Create XRP based Asset


## `bnbAssetOffchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->bnbAssetOffchain(
    \Tatum\Model\CreateBnbAsset $create_bnb_asset
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_bnb_asset** | [**\Tatum\Model\CreateBnbAsset**](../Model/CreateBnbAsset.md) |  |

### Return type

void (empty response body)

### Description

Create a BNB-based asset

<h4>2 credits per API call.</h4><br/><p>         <p>Create a BNB-based asset in a virtual account. The asset must first be <a href="https://docs.bnbchain.org/docs/beaconchain/learn/BEP8" target="_blank">created and configured on BNB Beacon Chain blockhain</a>.</p> <p>This API call will create an internal virtual currency. You can create virtual accounts with off-chain support.</p>

### Example

[✨ View "bnbAssetOffchain.php"](../../examples/Api/BlockchainOperationsApi/bnbAssetOffchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainAdaTransferAdaKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainAdaTransferAdaKMS(
    \Tatum\Model\TransferAdaKMS $transfer_ada_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ada_kms** | [**\Tatum\Model\TransferAdaKMS**](../Model/TransferAdaKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ADA from a virtual account to the blockchain

TransferAdaKMS operation

### Example

[✨ View "offchainAdaTransferAdaKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainAdaTransferAdaKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainAdaTransferAdaKeyPair()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainAdaTransferAdaKeyPair(
    \Tatum\Model\TransferAdaKeyPair $transfer_ada_key_pair
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ada_key_pair** | [**\Tatum\Model\TransferAdaKeyPair**](../Model/TransferAdaKeyPair.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ADA from a virtual account to the blockchain

<p><b>Support for Cardano is deprecated.</b></p><br/> <h4>10 credits per API call.</h4><p>Send ADA (Cardano) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If ADA server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainAdaTransferAdaKeyPair.php"](../../examples/Api/BlockchainOperationsApi/offchainAdaTransferAdaKeyPair.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainAdaTransferAdaMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainAdaTransferAdaMnemonic(
    \Tatum\Model\TransferAdaMnemonic $transfer_ada_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ada_mnemonic** | [**\Tatum\Model\TransferAdaMnemonic**](../Model/TransferAdaMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ADA from a virtual account to the blockchain

TransferAdaMnemonic operation

### Example

[✨ View "offchainAdaTransferAdaMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainAdaTransferAdaMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainAlgoErc20DeployAlgoErc20OffchainKMSAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainAlgoErc20DeployAlgoErc20OffchainKMSAddress(
    \Tatum\Model\DeployAlgoErc20OffchainKMSAddress $deploy_algo_erc20_offchain_kms_address
): \Tatum\Model\OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_algo_erc20_offchain_kms_address** | [**\Tatum\Model\DeployAlgoErc20OffchainKMSAddress**](../Model/DeployAlgoErc20OffchainKMSAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response**](../Model/OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployAlgoErc20OffchainKMSAddress operation

### Example

[✨ View "offchainAlgoErc20DeployAlgoErc20OffchainKMSAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainAlgoErc20DeployAlgoErc20OffchainKMSAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress $deploy_algo_erc20_offchain_mnemonic_address
): \Tatum\Model\OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_algo_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployAlgoErc20OffchainMnemonicAddress**](../Model/DeployAlgoErc20OffchainMnemonicAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response**](../Model/OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy an Algorand ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new Algorand ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainAlgoErc20DeployAlgoErc20OffchainPKAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainAlgoErc20DeployAlgoErc20OffchainPKAddress(
    \Tatum\Model\DeployAlgoErc20OffchainPKAddress $deploy_algo_erc20_offchain_pk_address
): \Tatum\Model\OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_algo_erc20_offchain_pk_address** | [**\Tatum\Model\DeployAlgoErc20OffchainPKAddress**](../Model/DeployAlgoErc20OffchainPKAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response**](../Model/OffchainAlgoErc20DeployAlgoErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy an Algorand ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployAlgoErc20OffchainPKAddress operation

### Example

[✨ View "offchainAlgoErc20DeployAlgoErc20OffchainPKAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainAlgoErc20DeployAlgoErc20OffchainPKAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainAlgorandTransferAlgo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainAlgorandTransferAlgo(
    \Tatum\Model\TransferAlgo $transfer_algo
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algo** | [**\Tatum\Model\TransferAlgo**](../Model/TransferAlgo.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ALGO from a virtual account to the blockchain

<p><b>4 credits per API call</b></p> <p>Send Algos or ERC-20-equivalent Algorand tokens from a virtual account (even from a virtual account without deposit addresses adssigned) to the Algorand blockchain.</p> <p>The recipient has to agree in advance to receive assets because Algorand charges users for storing assets on their addresses, and an Algorand blockchain address by default does not receive assets unless explicitly agreed. Before sending any asset from a virtual account to the blockchain, make sure that the recipient <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset" target="_blank">has agreed to receive the assets</a> to their address.</p> <p>Sending Algorand assets creates an internal Tatum withdrawal request with an ID. If everything works as expected, the withdrawal request is marked as complete and a transaction ID is assigned to it.</p> <ul> <li>If a server connection is unavailable, the withdrawal request is cancelled.</li> <li>If the transfer to the blockchain is successful, but the Tatum infrastructure cannot be accesses, the ID of the blockchain transaction is returned and you have to <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal" target="_blank">complete the withdrawal request manually</a>. Otherwise, all other withdrawals will be pending.</li> </ul> <p><b>Signing a transaction</b><br/> When sending Algos or ERC-20-equivalent Algorand tokens, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "offchainAlgorandTransferAlgo.php"](../../examples/Api/BlockchainOperationsApi/offchainAlgorandTransferAlgo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainAlgorandTransferAlgoErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainAlgorandTransferAlgoErc20(
    \Tatum\Model\TransferAlgoErc20 $transfer_algo_erc20
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algo_erc20** | [**\Tatum\Model\TransferAlgoErc20**](../Model/TransferAlgoErc20.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ALGO from a virtual account to the blockchain

TransferAlgoErc20 operation

### Example

[✨ View "offchainAlgorandTransferAlgoErc20.php"](../../examples/Api/BlockchainOperationsApi/offchainAlgorandTransferAlgoErc20.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainAlgorandTransferAlgoKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainAlgorandTransferAlgoKMS(
    \Tatum\Model\TransferAlgoKMS $transfer_algo_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_algo_kms** | [**\Tatum\Model\TransferAlgoKMS**](../Model/TransferAlgoKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ALGO from a virtual account to the blockchain

TransferAlgoKMS operation

### Example

[✨ View "offchainAlgorandTransferAlgoKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainAlgorandTransferAlgoKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBcashTransferBchKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBcashTransferBchKMS(
    \Tatum\Model\TransferBchKMS $transfer_bch_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bch_kms** | [**\Tatum\Model\TransferBchKMS**](../Model/TransferBchKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BCH from a virtual account to the blockchain

TransferBchKMS operation

### Example

[✨ View "offchainBcashTransferBchKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainBcashTransferBchKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBcashTransferBchKeyPair()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBcashTransferBchKeyPair(
    \Tatum\Model\TransferBchKeyPair $transfer_bch_key_pair
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bch_key_pair** | [**\Tatum\Model\TransferBchKeyPair**](../Model/TransferBchKeyPair.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BCH from a virtual account to the blockchain

TransferBchKeyPair operation

### Example

[✨ View "offchainBcashTransferBchKeyPair.php"](../../examples/Api/BlockchainOperationsApi/offchainBcashTransferBchKeyPair.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBcashTransferBchMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBcashTransferBchMnemonic(
    \Tatum\Model\TransferBchMnemonic $transfer_bch_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bch_mnemonic** | [**\Tatum\Model\TransferBchMnemonic**](../Model/TransferBchMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BCH from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/> <p>Send BCH (Bitcoin Cash) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Bitcoin Cash server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field <b>attr</b> should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Bitcoin-Cash#operation/BchTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

[✨ View "offchainBcashTransferBchMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainBcashTransferBchMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBitcoinTransferBtcKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBitcoinTransferBtcKMS(
    \Tatum\Model\TransferBtcKMS $transfer_btc_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_btc_kms** | [**\Tatum\Model\TransferBtcKMS**](../Model/TransferBtcKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BTC from a virtual account to the blockchain

TransferBtcKMS operation

### Example

[✨ View "offchainBitcoinTransferBtcKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainBitcoinTransferBtcKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBitcoinTransferBtcKeyPair()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBitcoinTransferBtcKeyPair(
    \Tatum\Model\TransferBtcKeyPair $transfer_btc_key_pair
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_btc_key_pair** | [**\Tatum\Model\TransferBtcKeyPair**](../Model/TransferBtcKeyPair.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BTC from a virtual account to the blockchain

TransferBtcKeyPair operation

### Example

[✨ View "offchainBitcoinTransferBtcKeyPair.php"](../../examples/Api/BlockchainOperationsApi/offchainBitcoinTransferBtcKeyPair.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBitcoinTransferBtcMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBitcoinTransferBtcMnemonic(
    \Tatum\Model\TransferBtcMnemonic $transfer_btc_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_btc_mnemonic** | [**\Tatum\Model\TransferBtcMnemonic**](../Model/TransferBtcMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BTC from a virtual account to the blockchain

<h4>2 credits per API call.</h4><br/> <p>Send BTC (Bitcoin) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Bitcoin server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field <b>attr</b> should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Bitcoin#operation/BtcTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> When some of the steps fails, <a href="https://apidoc.tatum.io/tag/Withdrawal#operation/cancelInProgressWithdrawal">Cancel withdrawal</a> operation is used, which cancels withdrawal and creates refund transaction to the sender account.</li> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

[✨ View "offchainBitcoinTransferBtcMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainBitcoinTransferBtcMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBnbTransferBnb()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBnbTransferBnb(
    \Tatum\Model\TransferBnb $transfer_bnb
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bnb** | [**\Tatum\Model\TransferBnb**](../Model/TransferBnb.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BNB from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p> <p>Send BNB (BNB Beacon Chain) or BNB assets from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If BNB server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainBnbTransferBnb.php"](../../examples/Api/BlockchainOperationsApi/offchainBnbTransferBnb.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBnbTransferBnbKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBnbTransferBnbKMS(
    \Tatum\Model\TransferBnbKMS $transfer_bnb_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bnb_kms** | [**\Tatum\Model\TransferBnbKMS**](../Model/TransferBnbKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BNB from a virtual account to the blockchain

TransferBnbKMS operation

### Example

[✨ View "offchainBnbTransferBnbKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainBnbTransferBnbKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscBep20DeployErc20OffchainKMSAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscBep20DeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../Model/DeployErc20OffchainKMSAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offchainBscBep20DeployErc20OffchainKMSAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainBscBep20DeployErc20OffchainKMSAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscBep20DeployErc20OffchainKMSXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscBep20DeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../Model/DeployErc20OffchainKMSXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offchainBscBep20DeployErc20OffchainKMSXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainBscBep20DeployErc20OffchainKMSXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscBep20DeployErc20OffchainMnemXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscBep20DeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../Model/DeployErc20OffchainMnemXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offchainBscBep20DeployErc20OffchainMnemXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainBscBep20DeployErc20OffchainMnemXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscBep20DeployErc20OffchainMnemonicAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscBep20DeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../Model/DeployErc20OffchainMnemonicAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a BNB Smart Chain BEP-20 smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new BEP20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainBscBep20DeployErc20OffchainMnemonicAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainBscBep20DeployErc20OffchainMnemonicAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscBep20DeployErc20OffchainPKAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscBep20DeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../Model/DeployErc20OffchainPKAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offchainBscBep20DeployErc20OffchainPKAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainBscBep20DeployErc20OffchainPKAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscBep20DeployErc20OffchainPKXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscBep20DeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../Model/DeployErc20OffchainPKXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a BNB Smart Chain BEP-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offchainBscBep20DeployErc20OffchainPKXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainBscBep20DeployErc20OffchainPKXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscBep20Erc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscBep20Erc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../Model/Erc20.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new BNB Smart Chain BEP-20 token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new BEP20 token with given supply on BSC blockchain with support of Tatum's private ledger.<br/> <br/> <br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of BEP20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with BEP20 token name as account's currency.<br/> Newly created account is frozen until the specific BEP20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create BEP20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Register BEP20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/BscDeployErc20Blockchain">Deploy BEP20 smart contract</a> - create new BEP20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store BEP20 smart contract address</a> - link newly created BEP20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for BEP20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/EthDeployErc20">Deploy BSC BEP20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

[✨ View "offchainBscBep20Erc20.php"](../../examples/Api/BlockchainOperationsApi/offchainBscBep20Erc20.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscBep20Erc20Address()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscBep20Erc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../Model/Erc20Address.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new BNB Smart Chain BEP-20 token in the virtual account

Erc20Address operation

### Example

[✨ View "offchainBscBep20Erc20Address.php"](../../examples/Api/BlockchainOperationsApi/offchainBscBep20Erc20Address.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscTransferBsc()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscTransferBsc(
    \Tatum\Model\TransferBsc $transfer_bsc
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc** | [**\Tatum\Model\TransferBsc**](../Model/TransferBsc.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BSC from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send BSC (BNB Smart Chain) or BEP-20 tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If BSC server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainBscTransferBsc.php"](../../examples/Api/BlockchainOperationsApi/offchainBscTransferBsc.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscTransferBscKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscTransferBscKMS(
    \Tatum\Model\TransferBscKMS $transfer_bsc_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc_kms** | [**\Tatum\Model\TransferBscKMS**](../Model/TransferBscKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BSC from a virtual account to the blockchain

TransferBscKMS operation

### Example

[✨ View "offchainBscTransferBscKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainBscTransferBscKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainBscTransferBscMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainBscTransferBscMnemonic(
    \Tatum\Model\TransferBscMnemonic $transfer_bsc_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_bsc_mnemonic** | [**\Tatum\Model\TransferBscMnemonic**](../Model/TransferBscMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send BSC from a virtual account to the blockchain

TransferBscMnemonic operation

### Example

[✨ View "offchainBscTransferBscMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainBscTransferBscMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloErc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../Model/Erc20.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new Celo ERC-20-equivalent token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new ERC-20 token with given supply on Celo blockchain with support of Tatum's private ledger.<br/> <br/> <br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of ERC-20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with ERC-20 token name as account's currency.<br/> Newly created account is frozen until the specific ERC-20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create ERC-20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Register Celo ERC-20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/CeloDeployErc20">Deploy Celo ERC-20 smart contract</a> - create new ERC-20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store Celo ERC-20 smart contract address</a> - link newly created ERC-20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for ERC-20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/CeloDeployErc20Ledger">Deploy Celo ERC-20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

[✨ View "offchainCeloErc20.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloErc20.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloErc20Address()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloErc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../Model/Erc20Address.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new Celo ERC-20-equivalent token in the virtual account

Erc20Address operation

### Example

[✨ View "offchainCeloErc20Address.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloErc20Address.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloErc20DeployCeloErc20OffchainKMSAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloErc20DeployCeloErc20OffchainKMSAddress(
    \Tatum\Model\DeployCeloErc20OffchainKMSAddress $deploy_celo_erc20_offchain_kms_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_kms_address** | [**\Tatum\Model\DeployCeloErc20OffchainKMSAddress**](../Model/DeployCeloErc20OffchainKMSAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainKMSAddress operation

### Example

[✨ View "offchainCeloErc20DeployCeloErc20OffchainKMSAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloErc20DeployCeloErc20OffchainKMSAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloErc20DeployCeloErc20OffchainKMSXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloErc20DeployCeloErc20OffchainKMSXpub(
    \Tatum\Model\DeployCeloErc20OffchainKMSXpub $deploy_celo_erc20_offchain_kms_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployCeloErc20OffchainKMSXpub**](../Model/DeployCeloErc20OffchainKMSXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainKMSXpub operation

### Example

[✨ View "offchainCeloErc20DeployCeloErc20OffchainKMSXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloErc20DeployCeloErc20OffchainKMSXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloErc20DeployCeloErc20OffchainMnemXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloErc20DeployCeloErc20OffchainMnemXpub(
    \Tatum\Model\DeployCeloErc20OffchainMnemXpub $deploy_celo_erc20_offchain_mnem_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployCeloErc20OffchainMnemXpub**](../Model/DeployCeloErc20OffchainMnemXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainMnemXpub operation

### Example

[✨ View "offchainCeloErc20DeployCeloErc20OffchainMnemXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloErc20DeployCeloErc20OffchainMnemXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloErc20DeployCeloErc20OffchainMnemonicAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloErc20DeployCeloErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployCeloErc20OffchainMnemonicAddress $deploy_celo_erc20_offchain_mnemonic_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployCeloErc20OffchainMnemonicAddress**](../Model/DeployCeloErc20OffchainMnemonicAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a Celo ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new Celo ERC-20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainCeloErc20DeployCeloErc20OffchainMnemonicAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloErc20DeployCeloErc20OffchainMnemonicAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloErc20DeployCeloErc20OffchainPKAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloErc20DeployCeloErc20OffchainPKAddress(
    \Tatum\Model\DeployCeloErc20OffchainPKAddress $deploy_celo_erc20_offchain_pk_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_pk_address** | [**\Tatum\Model\DeployCeloErc20OffchainPKAddress**](../Model/DeployCeloErc20OffchainPKAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainPKAddress operation

### Example

[✨ View "offchainCeloErc20DeployCeloErc20OffchainPKAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloErc20DeployCeloErc20OffchainPKAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloErc20DeployCeloErc20OffchainPKXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloErc20DeployCeloErc20OffchainPKXpub(
    \Tatum\Model\DeployCeloErc20OffchainPKXpub $deploy_celo_erc20_offchain_pk_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_celo_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployCeloErc20OffchainPKXpub**](../Model/DeployCeloErc20OffchainPKXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Celo ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployCeloErc20OffchainPKXpub operation

### Example

[✨ View "offchainCeloErc20DeployCeloErc20OffchainPKXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloErc20DeployCeloErc20OffchainPKXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloTransferCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloTransferCelo(
    \Tatum\Model\TransferCelo $transfer_celo
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo** | [**\Tatum\Model\TransferCelo**](../Model/TransferCelo.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send CELO from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send CELO (Celo), ERC-20-equivalent Celo tokens, cUSD, or cEUR from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If Celo server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainCeloTransferCelo.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloTransferCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloTransferCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloTransferCeloKMS(
    \Tatum\Model\TransferCeloKMS $transfer_celo_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo_kms** | [**\Tatum\Model\TransferCeloKMS**](../Model/TransferCeloKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send CELO from a virtual account to the blockchain

TransferCeloKMS operation

### Example

[✨ View "offchainCeloTransferCeloKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloTransferCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainCeloTransferCeloMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainCeloTransferCeloMnemonic(
    \Tatum\Model\TransferCeloMnemonic $transfer_celo_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_celo_mnemonic** | [**\Tatum\Model\TransferCeloMnemonic**](../Model/TransferCeloMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send CELO from a virtual account to the blockchain

TransferCeloMnemonic operation

### Example

[✨ View "offchainCeloTransferCeloMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainCeloTransferCeloMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainDogecoinTransferDogeKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainDogecoinTransferDogeKMS(
    \Tatum\Model\TransferDogeKMS $transfer_doge_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_doge_kms** | [**\Tatum\Model\TransferDogeKMS**](../Model/TransferDogeKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send DOGE from a virtual account to the blockchain

TransferDogeKMS operation

### Example

[✨ View "offchainDogecoinTransferDogeKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainDogecoinTransferDogeKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainDogecoinTransferDogeKeyPair()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainDogecoinTransferDogeKeyPair(
    \Tatum\Model\TransferDogeKeyPair $transfer_doge_key_pair
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_doge_key_pair** | [**\Tatum\Model\TransferDogeKeyPair**](../Model/TransferDogeKeyPair.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send DOGE from a virtual account to the blockchain

TransferDogeKeyPair operation

### Example

[✨ View "offchainDogecoinTransferDogeKeyPair.php"](../../examples/Api/BlockchainOperationsApi/offchainDogecoinTransferDogeKeyPair.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainDogecoinTransferDogeMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainDogecoinTransferDogeMnemonic(
    \Tatum\Model\TransferDogeMnemonic $transfer_doge_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_doge_mnemonic** | [**\Tatum\Model\TransferDogeMnemonic**](../Model/TransferDogeMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send DOGE from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send DOGE (Dogecoin) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Dogecoin server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field <b>attr</b> should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Dogecoin#operation/DogeTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

[✨ View "offchainDogecoinTransferDogeMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainDogecoinTransferDogeMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEgldTransferEth()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEgldTransferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../Model/TransferEth.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send EGLD from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send EGLD from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainEgldTransferEth.php"](../../examples/Api/BlockchainOperationsApi/offchainEgldTransferEth.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEgldTransferEthKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEgldTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../Model/TransferEthKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send EGLD from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offchainEgldTransferEthKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainEgldTransferEthKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEgldTransferEthMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEgldTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../Model/TransferEthMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send EGLD from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offchainEgldTransferEthMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainEgldTransferEthMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../Model/Erc20.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new Ethereum ERC-20 token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new ERC20 token with given supply on Ethereum blockchain with support of Tatum's private ledger.<br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of ERC20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with ERC20 token name as account's currency.<br/> Newly created account is frozen until the specific ERC20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create ERC20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Create ERC20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/EthDeployErc20Blockchain">Deploy ERC20 smart contract</a> - create new ERC20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store ERC20 smart contract address</a> - link newly created ERC20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for ERC20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/EthDeployErc20">Deploy Ethereum ERC20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

[✨ View "offchainEthereumErc20.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20Address()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../Model/Erc20Address.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new Ethereum ERC-20 token in the virtual account

Erc20Address operation

### Example

[✨ View "offchainEthereumErc20Address.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20Address.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20DeployErc20OffchainKMSAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20DeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../Model/DeployErc20OffchainKMSAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offchainEthereumErc20DeployErc20OffchainKMSAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20DeployErc20OffchainKMSAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20DeployErc20OffchainKMSXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20DeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../Model/DeployErc20OffchainKMSXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offchainEthereumErc20DeployErc20OffchainKMSXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20DeployErc20OffchainKMSXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20DeployErc20OffchainMnemXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20DeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../Model/DeployErc20OffchainMnemXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offchainEthereumErc20DeployErc20OffchainMnemXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20DeployErc20OffchainMnemXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20DeployErc20OffchainMnemonicAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20DeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../Model/DeployErc20OffchainMnemonicAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy an Ethereum ERC-20 smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainEthereumErc20DeployErc20OffchainMnemonicAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20DeployErc20OffchainMnemonicAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20DeployErc20OffchainPKAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20DeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../Model/DeployErc20OffchainPKAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offchainEthereumErc20DeployErc20OffchainPKAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20DeployErc20OffchainPKAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20DeployErc20OffchainPKXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20DeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../Model/DeployErc20OffchainPKXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy an Ethereum ERC-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offchainEthereumErc20DeployErc20OffchainPKXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20DeployErc20OffchainPKXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20TransferErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20TransferErc20(
    \Tatum\Model\TransferErc20 $transfer_erc20
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_erc20** | [**\Tatum\Model\TransferErc20**](../Model/TransferErc20.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send Ethereum ERC-20 tokens from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send Ethereum ERC-20 tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Ethereum server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainEthereumErc20TransferErc20.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20TransferErc20.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20TransferErc20KMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20TransferErc20KMS(
    \Tatum\Model\TransferErc20KMS $transfer_erc20_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_erc20_kms** | [**\Tatum\Model\TransferErc20KMS**](../Model/TransferErc20KMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send Ethereum ERC-20 tokens from a virtual account to the blockchain

TransferErc20KMS operation

### Example

[✨ View "offchainEthereumErc20TransferErc20KMS.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20TransferErc20KMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumErc20TransferErc20Mnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumErc20TransferErc20Mnemonic(
    \Tatum\Model\TransferErc20Mnemonic $transfer_erc20_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_erc20_mnemonic** | [**\Tatum\Model\TransferErc20Mnemonic**](../Model/TransferErc20Mnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send Ethereum ERC-20 tokens from a virtual account to the blockchain

TransferErc20Mnemonic operation

### Example

[✨ View "offchainEthereumErc20TransferErc20Mnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumErc20TransferErc20Mnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumTransferEth()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumTransferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../Model/TransferEth.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ETH from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send ETH (Ethereum) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Ethereum server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainEthereumTransferEth.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumTransferEth.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumTransferEthKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../Model/TransferEthKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ETH from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offchainEthereumTransferEthKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumTransferEthKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainEthereumTransferEthMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainEthereumTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../Model/TransferEthMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ETH from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offchainEthereumTransferEthMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainEthereumTransferEthMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainFlowTransferFlowKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainFlowTransferFlowKMS(
    \Tatum\Model\TransferFlowKMS $transfer_flow_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_flow_kms** | [**\Tatum\Model\TransferFlowKMS**](../Model/TransferFlowKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send FLOW from a virtual account to the blockchain

TransferFlowKMS operation

### Example

[✨ View "offchainFlowTransferFlowKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainFlowTransferFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainFlowTransferFlowMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainFlowTransferFlowMnemonic(
    \Tatum\Model\TransferFlowMnemonic $transfer_flow_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_flow_mnemonic** | [**\Tatum\Model\TransferFlowMnemonic**](../Model/TransferFlowMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send FLOW from a virtual account to the blockchain

<h4>100 credits per API call. Tatum covers the fee connected to the transaction costs in subscription credits. This operation can be done on mainnet only for paid plans.</h4><br/> <p>Send FLOW (Flow) or FUSD from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Flow server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic and index - private key is generated based on the index in the mnemonic.</li> <li>Using secret - private keys is entered manually.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Flow#operation/FlowTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

[✨ View "offchainFlowTransferFlowMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainFlowTransferFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainFlowTransferFlowPK()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainFlowTransferFlowPK(
    \Tatum\Model\TransferFlowPK $transfer_flow_pk
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_flow_pk** | [**\Tatum\Model\TransferFlowPK**](../Model/TransferFlowPK.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send FLOW from a virtual account to the blockchain

TransferFlowPK operation

### Example

[✨ View "offchainFlowTransferFlowPK.php"](../../examples/Api/BlockchainOperationsApi/offchainFlowTransferFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKcsErc20DeployKCSErc20OffchainKMSAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKcsErc20DeployKCSErc20OffchainKMSAddress(
    \Tatum\Model\DeployKCSErc20OffchainKMSAddress $deploy_kcs_erc20_offchain_kms_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_kcs_erc20_offchain_kms_address** | [**\Tatum\Model\DeployKCSErc20OffchainKMSAddress**](../Model/DeployKCSErc20OffchainKMSAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployKCSErc20OffchainKMSAddress operation

### Example

[✨ View "offchainKcsErc20DeployKCSErc20OffchainKMSAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainKcsErc20DeployKCSErc20OffchainKMSAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKcsErc20DeployKCSErc20OffchainKMSXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKcsErc20DeployKCSErc20OffchainKMSXpub(
    \Tatum\Model\DeployKCSErc20OffchainKMSXpub $deploy_kcs_erc20_offchain_kms_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_kcs_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployKCSErc20OffchainKMSXpub**](../Model/DeployKCSErc20OffchainKMSXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployKCSErc20OffchainKMSXpub operation

### Example

[✨ View "offchainKcsErc20DeployKCSErc20OffchainKMSXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainKcsErc20DeployKCSErc20OffchainKMSXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKcsErc20DeployKCSErc20OffchainMnemXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKcsErc20DeployKCSErc20OffchainMnemXpub(
    \Tatum\Model\DeployKCSErc20OffchainMnemXpub $deploy_kcs_erc20_offchain_mnem_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_kcs_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployKCSErc20OffchainMnemXpub**](../Model/DeployKCSErc20OffchainMnemXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployKCSErc20OffchainMnemXpub operation

### Example

[✨ View "offchainKcsErc20DeployKCSErc20OffchainMnemXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainKcsErc20DeployKCSErc20OffchainMnemXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKcsErc20DeployKCSErc20OffchainMnemonicAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKcsErc20DeployKCSErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployKCSErc20OffchainMnemonicAddress $deploy_kcs_erc20_offchain_mnemonic_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_kcs_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployKCSErc20OffchainMnemonicAddress**](../Model/DeployKCSErc20OffchainMnemonicAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new Kcs ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainKcsErc20DeployKCSErc20OffchainMnemonicAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainKcsErc20DeployKCSErc20OffchainMnemonicAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKcsErc20DeployKCSErc20OffchainPKAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKcsErc20DeployKCSErc20OffchainPKAddress(
    \Tatum\Model\DeployKCSErc20OffchainPKAddress $deploy_kcs_erc20_offchain_pk_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_kcs_erc20_offchain_pk_address** | [**\Tatum\Model\DeployKCSErc20OffchainPKAddress**](../Model/DeployKCSErc20OffchainPKAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployKCSErc20OffchainPKAddress operation

### Example

[✨ View "offchainKcsErc20DeployKCSErc20OffchainPKAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainKcsErc20DeployKCSErc20OffchainPKAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKcsErc20DeployKCSErc20OffchainPKXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKcsErc20DeployKCSErc20OffchainPKXpub(
    \Tatum\Model\DeployKCSErc20OffchainPKXpub $deploy_kcs_erc20_offchain_pk_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_kcs_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployKCSErc20OffchainPKXpub**](../Model/DeployKCSErc20OffchainPKXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a KuCoin Community Chain (KCC) ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployKCSErc20OffchainPKXpub operation

### Example

[✨ View "offchainKcsErc20DeployKCSErc20OffchainPKXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainKcsErc20DeployKCSErc20OffchainPKXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKcsTransferKCS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKcsTransferKCS(
    \Tatum\Model\TransferKCS $transfer_kcs
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_kcs** | [**\Tatum\Model\TransferKCS**](../Model/TransferKCS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send KCS from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send KCS (KuCoin Community Chain (KCC)) or ERC-20-equivalent KCC tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If KCS server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainKcsTransferKCS.php"](../../examples/Api/BlockchainOperationsApi/offchainKcsTransferKCS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKcsTransferKCSKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKcsTransferKCSKMS(
    \Tatum\Model\TransferKCSKMS $transfer_kcskms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_kcskms** | [**\Tatum\Model\TransferKCSKMS**](../Model/TransferKCSKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send KCS from a virtual account to the blockchain

TransferKCSKMS operation

### Example

[✨ View "offchainKcsTransferKCSKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainKcsTransferKCSKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKcsTransferKCSMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKcsTransferKCSMnemonic(
    \Tatum\Model\TransferKCSMnemonic $transfer_kcs_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_kcs_mnemonic** | [**\Tatum\Model\TransferKCSMnemonic**](../Model/TransferKCSMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send KCS from a virtual account to the blockchain

TransferKCSMnemonic operation

### Example

[✨ View "offchainKcsTransferKCSMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainKcsTransferKCSMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKlaytnErc20DeployErc20OffchainKMSAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKlaytnErc20DeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../Model/DeployErc20OffchainKMSAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offchainKlaytnErc20DeployErc20OffchainKMSAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainKlaytnErc20DeployErc20OffchainKMSAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKlaytnErc20DeployErc20OffchainKMSXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKlaytnErc20DeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../Model/DeployErc20OffchainKMSXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offchainKlaytnErc20DeployErc20OffchainKMSXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainKlaytnErc20DeployErc20OffchainKMSXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKlaytnErc20DeployErc20OffchainMnemXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKlaytnErc20DeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../Model/DeployErc20OffchainMnemXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offchainKlaytnErc20DeployErc20OffchainMnemXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainKlaytnErc20DeployErc20OffchainMnemXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKlaytnErc20DeployErc20OffchainMnemonicAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKlaytnErc20DeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../Model/DeployErc20OffchainMnemonicAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a Klaytn ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainKlaytnErc20DeployErc20OffchainMnemonicAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainKlaytnErc20DeployErc20OffchainMnemonicAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKlaytnErc20DeployErc20OffchainPKAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKlaytnErc20DeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../Model/DeployErc20OffchainPKAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offchainKlaytnErc20DeployErc20OffchainPKAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainKlaytnErc20DeployErc20OffchainPKAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKlaytnErc20DeployErc20OffchainPKXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKlaytnErc20DeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../Model/DeployErc20OffchainPKXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Klaytn ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offchainKlaytnErc20DeployErc20OffchainPKXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainKlaytnErc20DeployErc20OffchainPKXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKlaytnTransferEth()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKlaytnTransferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../Model/TransferEth.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send KLAY from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send KLAY or ERC-20-equivalent tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If KLAY server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainKlaytnTransferEth.php"](../../examples/Api/BlockchainOperationsApi/offchainKlaytnTransferEth.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKlaytnTransferEthKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKlaytnTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../Model/TransferEthKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send KLAY from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offchainKlaytnTransferEthKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainKlaytnTransferEthKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainKlaytnTransferEthMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainKlaytnTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../Model/TransferEthMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send KLAY from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offchainKlaytnTransferEthMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainKlaytnTransferEthMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainLitecoinTransferLtcKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainLitecoinTransferLtcKMS(
    \Tatum\Model\TransferLtcKMS $transfer_ltc_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ltc_kms** | [**\Tatum\Model\TransferLtcKMS**](../Model/TransferLtcKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send LTC from a virtual account to the blockchain

TransferLtcKMS operation

### Example

[✨ View "offchainLitecoinTransferLtcKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainLitecoinTransferLtcKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainLitecoinTransferLtcKeyPair()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainLitecoinTransferLtcKeyPair(
    \Tatum\Model\TransferLtcKeyPair $transfer_ltc_key_pair
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ltc_key_pair** | [**\Tatum\Model\TransferLtcKeyPair**](../Model/TransferLtcKeyPair.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send LTC from a virtual account to the blockchain

TransferLtcKeyPair operation

### Example

[✨ View "offchainLitecoinTransferLtcKeyPair.php"](../../examples/Api/BlockchainOperationsApi/offchainLitecoinTransferLtcKeyPair.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainLitecoinTransferLtcMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainLitecoinTransferLtcMnemonic(
    \Tatum\Model\TransferLtcMnemonic $transfer_ltc_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_ltc_mnemonic** | [**\Tatum\Model\TransferLtcMnemonic**](../Model/TransferLtcMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send LTC from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/> <p>Send LTC (Litecoin) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Litecoin server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> There are two possibilites how the transaction on the blockchain can be created: <ul> <li>Using mnemonic - all of the addresses, that are generated from the mnemonic are scanned for the incoming deposits which are used as a source of the transaction. Assets, which are not used in a transaction are moved to the system address wih the derivation index 0. Address with index 0 cannot be assigned automatically to any account and is used for custodial wallet use cases. For non-custodial wallets, field <b>attr</b> should be present and it should be address with the index 1 of the connected wallet.</li> <li>Using keyPair - addresses which are used as a source of the transaction are entered manually</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This method is a helper method, which internally wraps these steps: <ol> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/storeWithdrawal">Store withdrawal</a> - create a ledger transaction, which debits the assets on the sender account.</li> <li><a href="https://apidoc.tatum.io/tag/Litecoin#operation/LtcTransferBlockchain">Perform blockchain transaction</a></li> <li><a href="https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal">Complete withdrawal</a> - move the withdrawal to the completed state, when all of the previous steps were successful.</li> </ol> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.</p>

### Example

[✨ View "offchainLitecoinTransferLtcMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainLitecoinTransferLtcMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneHrm20DeployErc20OffchainKMSAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneHrm20DeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address,
    [ float $shard_id = 0 ]
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../Model/DeployErc20OffchainKMSAddress.md) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offchainOneHrm20DeployErc20OffchainKMSAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainOneHrm20DeployErc20OffchainKMSAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneHrm20DeployErc20OffchainKMSXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneHrm20DeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub,
    [ float $shard_id = 0 ]
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../Model/DeployErc20OffchainKMSXpub.md) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offchainOneHrm20DeployErc20OffchainKMSXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainOneHrm20DeployErc20OffchainKMSXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneHrm20DeployErc20OffchainMnemXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneHrm20DeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub,
    [ float $shard_id = 0 ]
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../Model/DeployErc20OffchainMnemXpub.md) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offchainOneHrm20DeployErc20OffchainMnemXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainOneHrm20DeployErc20OffchainMnemXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneHrm20DeployErc20OffchainMnemonicAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneHrm20DeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address,
    [ float $shard_id = 0 ]
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../Model/DeployErc20OffchainMnemonicAddress.md) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a Harmony HRM-20 smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new HRM20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainOneHrm20DeployErc20OffchainMnemonicAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainOneHrm20DeployErc20OffchainMnemonicAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneHrm20DeployErc20OffchainPKAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneHrm20DeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address,
    [ float $shard_id = 0 ]
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../Model/DeployErc20OffchainPKAddress.md) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offchainOneHrm20DeployErc20OffchainPKAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainOneHrm20DeployErc20OffchainPKAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneHrm20DeployErc20OffchainPKXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneHrm20DeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub,
    [ float $shard_id = 0 ]
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../Model/DeployErc20OffchainPKXpub.md) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a Harmony HRM-20 smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offchainOneHrm20DeployErc20OffchainPKXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainOneHrm20DeployErc20OffchainPKXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneHrm20Erc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneHrm20Erc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../Model/Erc20.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new Harmony HRM-20 token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new HRM20 token with given supply on ONE blockchain with support of Tatum's private ledger.<br/> <br/> <br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of HRM20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with HRM20 token name as account's currency.<br/> Newly created account is frozen until the specific HRM20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create HRM20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Register HRM20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/Erc20Deploy">Deploy HRM20 smart contract</a> - create new HRM20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store HRM20 smart contract address</a> - link newly created HRM20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for HRM20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/Erc20Deploy">Deploy ONE HRM20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

[✨ View "offchainOneHrm20Erc20.php"](../../examples/Api/BlockchainOperationsApi/offchainOneHrm20Erc20.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneHrm20Erc20Address()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneHrm20Erc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../Model/Erc20Address.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new Harmony HRM-20 token in the virtual account

Erc20Address operation

### Example

[✨ View "offchainOneHrm20Erc20Address.php"](../../examples/Api/BlockchainOperationsApi/offchainOneHrm20Erc20Address.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneTransferEth()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneTransferEth(
    \Tatum\Model\TransferEth $transfer_eth,
    [ float $shard_id = 0 ]
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../Model/TransferEth.md) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ONE from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send ONE (Harmony) or HRM-20 tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If ONE server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainOneTransferEth.php"](../../examples/Api/BlockchainOperationsApi/offchainOneTransferEth.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneTransferEthKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms,
    [ float $shard_id = 0 ]
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../Model/TransferEthKMS.md) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ONE from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offchainOneTransferEthKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainOneTransferEthKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainOneTransferEthMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainOneTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic,
    [ float $shard_id = 0 ]
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../Model/TransferEthMnemonic.md) |  |
 **$shard_id** | **float**  | Shard to operate on | [optional] [default to 0]

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send ONE from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offchainOneTransferEthMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainOneTransferEthMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainPolygonTransferEth()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainPolygonTransferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../Model/TransferEth.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send MATIC from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send MATIC (Polygon) or ERC-20-equivalent Polygon tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Polygon server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainPolygonTransferEth.php"](../../examples/Api/BlockchainOperationsApi/offchainPolygonTransferEth.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainPolygonTransferEthKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainPolygonTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../Model/TransferEthKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send MATIC from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offchainPolygonTransferEthKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainPolygonTransferEthKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainPolygonTransferEthMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainPolygonTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../Model/TransferEthMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send MATIC from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offchainPolygonTransferEthMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainPolygonTransferEthMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainSolanaTransferSol()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainSolanaTransferSol(
    \Tatum\Model\TransferSol $transfer_sol
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_sol** | [**\Tatum\Model\TransferSol**](../Model/TransferSol.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send SOL from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p> <p>Send SOL (Solana), USDC_SOL, or custom SPL tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If SOL server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainSolanaTransferSol.php"](../../examples/Api/BlockchainOperationsApi/offchainSolanaTransferSol.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainSolanaTransferSolKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainSolanaTransferSolKMS(
    \Tatum\Model\TransferSolKMS $transfer_sol_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_sol_kms** | [**\Tatum\Model\TransferSolKMS**](../Model/TransferSolKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send SOL from a virtual account to the blockchain

TransferSolKMS operation

### Example

[✨ View "offchainSolanaTransferSolKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainSolanaTransferSolKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTokenchainErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTokenchainErc20(
    string $chain,
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$erc20** | [**\Tatum\Model\Erc20**](../Model/Erc20.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new ERC-20 or ERC-20-equivalent token in the virtual account

<h4>2 credits per API call.</h4><br/> <p>This is the first step to create a new ERC-20 or ERC-20 equivalent token with some supply in a virtual account.<br/> <br/> <br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with token name as account's currency.<br/> Newly created account is frozen until the specific smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create smart contract with Tatum private ledger support: <ol> <li>Register token</a> (this API) - creates a virtual currency within Tatum</li> <li><a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy smart contract</a> - create new smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store smart contract address</a> - link newly created smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for Tatum accounts</li> </ol> Blockchain address will be assigned to the virtual account as a deposit address. It can be defined via the address explicitly or by using xpub and derivationIndex. </p>

### Example

[✨ View "offchainTokenchainErc20.php"](../../examples/Api/BlockchainOperationsApi/offchainTokenchainErc20.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTokenchainErc20Address()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTokenchainErc20Address(
    string $chain,
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to work with |
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../Model/Erc20Address.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new ERC-20 or ERC-20-equivalent token in the virtual account

Erc20Address operation

### Example

[✨ View "offchainTokenchainErc20Address.php"](../../examples/Api/BlockchainOperationsApi/offchainTokenchainErc20Address.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTransferTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTransferTron(
    \Tatum\Model\TransferTron $transfer_tron
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron** | [**\Tatum\Model\TransferTron**](../Model/TransferTron.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send TRON from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p>Send TRON or TRX assets from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If Tron server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainTronTransferTron.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTransferTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTransferTronKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTransferTronKMS(
    \Tatum\Model\TransferTronKMS $transfer_tron_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_kms** | [**\Tatum\Model\TransferTronKMS**](../Model/TransferTronKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send TRON from a virtual account to the blockchain

TransferTronKMS operation

### Example

[✨ View "offchainTronTransferTronKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTransferTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTransferTronMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTransferTronMnemonic(
    \Tatum\Model\TransferTronMnemonic $transfer_tron_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_tron_mnemonic** | [**\Tatum\Model\TransferTronMnemonic**](../Model/TransferTronMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send TRON from a virtual account to the blockchain

TransferTronMnemonic operation

### Example

[✨ View "offchainTronTransferTronMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTransferTronMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTrcAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTrcAddress(
    \Tatum\Model\TrcAddress $trc_address
): \Tatum\Model\Trc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trc_address** | [**\Tatum\Model\TrcAddress**](../Model/TrcAddress.md) |  |

### Return type

[**\Tatum\Model\Trc20Response**](../Model/Trc20Response.md)

### Description

Register a new TRON TRC-10 or TRC-20 token in the virtual account

<h4>10 credits per API call.</h4><br/> <p>First step to create new TRC 10/20 token with given supply on the Tron blockchain with support of Tatum's private ledger.<br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of TRC 10/20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with TRC 10/20 token name as account's currency.<br/> Newly created account is frozen until the specific TRC 10/20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create TRC 10/20 smart contract with Tatum private ledger support: <ol> <li>Create TRC 10/20 token (this API) - creates a virtual currency within Tatum</li> <li><a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc10">Deploy TRC 10</a> or <a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc20">TRC 20 smart contract</a> - create new TRC 10/20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store TRC 10/20 smart contract address</a> - link newly created TRC 10/20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for TRC 10/20 Tatum accounts</li> </ol> Blockchain address will be assigned to the virtual account as a deposit address. It can be defined via the address explicitly or by using xpub and derivationIndex. There is a helper method <a href="#operation/TronDeployTrc">Deploy TRC 10/20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> </p>

### Example

[✨ View "offchainTronTrcAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTrcAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTrcDeployTrcOffchainKMSAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTrcDeployTrcOffchainKMSAddress(
    \Tatum\Model\DeployTrcOffchainKMSAddress $deploy_trc_offchain_kms_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_kms_address** | [**\Tatum\Model\DeployTrcOffchainKMSAddress**](../Model/DeployTrcOffchainKMSAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainKMSAddress operation

### Example

[✨ View "offchainTronTrcDeployTrcOffchainKMSAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTrcDeployTrcOffchainKMSAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTrcDeployTrcOffchainKMSXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTrcDeployTrcOffchainKMSXpub(
    \Tatum\Model\DeployTrcOffchainKMSXpub $deploy_trc_offchain_kms_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_kms_xpub** | [**\Tatum\Model\DeployTrcOffchainKMSXpub**](../Model/DeployTrcOffchainKMSXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainKMSXpub operation

### Example

[✨ View "offchainTronTrcDeployTrcOffchainKMSXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTrcDeployTrcOffchainKMSXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTrcDeployTrcOffchainMnemXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTrcDeployTrcOffchainMnemXpub(
    \Tatum\Model\DeployTrcOffchainMnemXpub $deploy_trc_offchain_mnem_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_mnem_xpub** | [**\Tatum\Model\DeployTrcOffchainMnemXpub**](../Model/DeployTrcOffchainMnemXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainMnemXpub operation

### Example

[✨ View "offchainTronTrcDeployTrcOffchainMnemXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTrcDeployTrcOffchainMnemXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTrcDeployTrcOffchainMnemonicAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTrcDeployTrcOffchainMnemonicAddress(
    \Tatum\Model\DeployTrcOffchainMnemonicAddress $deploy_trc_offchain_mnemonic_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_mnemonic_address** | [**\Tatum\Model\DeployTrcOffchainMnemonicAddress**](../Model/DeployTrcOffchainMnemonicAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

<h4>10 credits per API call.</h4><br/> <p>Deploy a TRON TRC-10 or TRC-20 smart contract. This is a helper method, which is combination of <a href="#operation/createTrc">Register new TRC-10/20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc20">Deploy blockchain TRC20</a> or <a href="https://apidoc.tatum.io/tag/Tron#operation/TronCreateTrc10">Deploy blockchain TRC10</a>.<br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainTronTrcDeployTrcOffchainMnemonicAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTrcDeployTrcOffchainMnemonicAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTrcDeployTrcOffchainPKAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTrcDeployTrcOffchainPKAddress(
    \Tatum\Model\DeployTrcOffchainPKAddress $deploy_trc_offchain_pk_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_pk_address** | [**\Tatum\Model\DeployTrcOffchainPKAddress**](../Model/DeployTrcOffchainPKAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainPKAddress operation

### Example

[✨ View "offchainTronTrcDeployTrcOffchainPKAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTrcDeployTrcOffchainPKAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTrcDeployTrcOffchainPKXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTrcDeployTrcOffchainPKXpub(
    \Tatum\Model\DeployTrcOffchainPKXpub $deploy_trc_offchain_pk_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_trc_offchain_pk_xpub** | [**\Tatum\Model\DeployTrcOffchainPKXpub**](../Model/DeployTrcOffchainPKXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a TRON TRC-10 or TRC-20 smart contract to the blockchain and a virtual account

DeployTrcOffchainPKXpub operation

### Example

[✨ View "offchainTronTrcDeployTrcOffchainPKXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTrcDeployTrcOffchainPKXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainTronTrcXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainTronTrcXpub(
    \Tatum\Model\TrcXpub $trc_xpub
): \Tatum\Model\Trc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$trc_xpub** | [**\Tatum\Model\TrcXpub**](../Model/TrcXpub.md) |  |

### Return type

[**\Tatum\Model\Trc20Response**](../Model/Trc20Response.md)

### Description

Register a new TRON TRC-10 or TRC-20 token in the virtual account

TrcXpub operation

### Example

[✨ View "offchainTronTrcXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainTronTrcXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcErc20()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcErc20(
    \Tatum\Model\Erc20 $erc20
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20** | [**\Tatum\Model\Erc20**](../Model/Erc20.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new XinFin ERC-20-equivalent token in the virtual account

<p><b>This method is deprecated.<br/>Use <a href="#operation/registerErc20Token">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4> <p>First step to create new ERC20 token with given supply on XDC blockchain with support of Tatum's private ledger.<br/> This method only creates Tatum Private ledger virtual currency with predefined parameters. It will not generate any blockchain smart contract.<br/> The whole supply of ERC20 token is stored in the customer's newly created account. Then it is possible to create new Tatum accounts with ERC20 token name as account's currency.<br/> Newly created account is frozen until the specific ERC20 smart contract address is linked with the Tatum virtual currency, representing the token.<br/> Order of the steps to create ERC20 smart contract with Tatum private ledger support: <ol> <li><a href="#operation/registerErc20Token">Register ERC20 token</a> - creates a virtual currency within Tatum</li> <li><a href="#operation/Erc20Deploy">Deploy ERC20 smart contract</a> - create new ERC20 smart contract on the blockchain</li> <li><a href="#operation/storeTokenAddress">Store ERC20 smart contract address</a> - link newly created ERC20 smart contract address with Tatum virtual currency - this operation enables frozen account and enables ledger synchronization for ERC20 Tatum accounts</li> </ol> There is a helper method <a href="#operation/Erc20Deploy">Deploy XDC ERC20 Smart Contract to Blockchain and Ledger</a>, which wraps first 2 steps into 1 method.<br/> Address on the blockchain, where all initial supply will be transferred, can be defined via the address or xpub and derivationIndex. When xpub is present, the account connected to this virtualCurrency will be set as the account's xpub. </p>

### Example

[✨ View "offchainXdcErc20.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcErc20.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcErc20Address()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcErc20Address(
    \Tatum\Model\Erc20Address $erc20_address
): \Tatum\Model\Erc20Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$erc20_address** | [**\Tatum\Model\Erc20Address**](../Model/Erc20Address.md) |  |

### Return type

[**\Tatum\Model\Erc20Response**](../Model/Erc20Response.md)

### Description

Register a new XinFin ERC-20-equivalent token in the virtual account

Erc20Address operation

### Example

[✨ View "offchainXdcErc20Address.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcErc20Address.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcErc20DeployErc20OffchainKMSAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcErc20DeployErc20OffchainKMSAddress(
    \Tatum\Model\DeployErc20OffchainKMSAddress $deploy_erc20_offchain_kms_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_address** | [**\Tatum\Model\DeployErc20OffchainKMSAddress**](../Model/DeployErc20OffchainKMSAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSAddress operation

### Example

[✨ View "offchainXdcErc20DeployErc20OffchainKMSAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcErc20DeployErc20OffchainKMSAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcErc20DeployErc20OffchainKMSXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcErc20DeployErc20OffchainKMSXpub(
    \Tatum\Model\DeployErc20OffchainKMSXpub $deploy_erc20_offchain_kms_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_kms_xpub** | [**\Tatum\Model\DeployErc20OffchainKMSXpub**](../Model/DeployErc20OffchainKMSXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainKMSXpub operation

### Example

[✨ View "offchainXdcErc20DeployErc20OffchainKMSXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcErc20DeployErc20OffchainKMSXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcErc20DeployErc20OffchainMnemXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcErc20DeployErc20OffchainMnemXpub(
    \Tatum\Model\DeployErc20OffchainMnemXpub $deploy_erc20_offchain_mnem_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnem_xpub** | [**\Tatum\Model\DeployErc20OffchainMnemXpub**](../Model/DeployErc20OffchainMnemXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainMnemXpub operation

### Example

[✨ View "offchainXdcErc20DeployErc20OffchainMnemXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcErc20DeployErc20OffchainMnemXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcErc20DeployErc20OffchainMnemonicAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcErc20DeployErc20OffchainMnemonicAddress(
    \Tatum\Model\DeployErc20OffchainMnemonicAddress $deploy_erc20_offchain_mnemonic_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_mnemonic_address** | [**\Tatum\Model\DeployErc20OffchainMnemonicAddress**](../Model/DeployErc20OffchainMnemonicAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

<h4>4 credits per API call.</h4><br/> <p>Deploy a XinFin ERC-20-equivalent smart contract. This is a helper method, which is combination of <a href="#operation/registerErc20Token">Register new ERC20 token in the ledger</a> and <a href="https://apidoc.tatum.io/tag/Fungible-Tokens-(ERC-20-or-compatible)#operation/Erc20Deploy">Deploy blockchain ERC20</a>.<br/> <br/> <br/> After deploying a contract to blockchain, the contract address will become available and must be stored within Tatum. Otherwise, it will not be possible to interact with it and starts automatic blockchain synchronization.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainXdcErc20DeployErc20OffchainMnemonicAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcErc20DeployErc20OffchainMnemonicAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcErc20DeployErc20OffchainPKAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcErc20DeployErc20OffchainPKAddress(
    \Tatum\Model\DeployErc20OffchainPKAddress $deploy_erc20_offchain_pk_address
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_address** | [**\Tatum\Model\DeployErc20OffchainPKAddress**](../Model/DeployErc20OffchainPKAddress.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKAddress operation

### Example

[✨ View "offchainXdcErc20DeployErc20OffchainPKAddress.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcErc20DeployErc20OffchainPKAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcErc20DeployErc20OffchainPKXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcErc20DeployErc20OffchainPKXpub(
    \Tatum\Model\DeployErc20OffchainPKXpub $deploy_erc20_offchain_pk_xpub
): \Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_erc20_offchain_pk_xpub** | [**\Tatum\Model\DeployErc20OffchainPKXpub**](../Model/DeployErc20OffchainPKXpub.md) |  |

### Return type

[**\Tatum\Model\OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response**](../Model/OffchainEthereumErc20DeployErc20OffchainMnemonicAddress200Response.md)

### Description

Deploy a XinFin ERC-20-equivalent smart contract to the blockchain and a virtual account

DeployErc20OffchainPKXpub operation

### Example

[✨ View "offchainXdcErc20DeployErc20OffchainPKXpub.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcErc20DeployErc20OffchainPKXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcTransferEth()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcTransferEth(
    \Tatum\Model\TransferEth $transfer_eth
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth** | [**\Tatum\Model\TransferEth**](../Model/TransferEth.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send XDC from a virtual account to the blockchain

<h4>4 credits per API call.</h4><br/> <p>Send XDC (XinFin) or ERC-20-equivalent XinFin tokens from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. If every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <br/> <br/> <ul> <li>If XDC server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainXdcTransferEth.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcTransferEth.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcTransferEthKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcTransferEthKMS(
    \Tatum\Model\TransferEthKMS $transfer_eth_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_kms** | [**\Tatum\Model\TransferEthKMS**](../Model/TransferEthKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send XDC from a virtual account to the blockchain

TransferEthKMS operation

### Example

[✨ View "offchainXdcTransferEthKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcTransferEthKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXdcTransferEthMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXdcTransferEthMnemonic(
    \Tatum\Model\TransferEthMnemonic $transfer_eth_mnemonic
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_eth_mnemonic** | [**\Tatum\Model\TransferEthMnemonic**](../Model/TransferEthMnemonic.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send XDC from a virtual account to the blockchain

TransferEthMnemonic operation

### Example

[✨ View "offchainXdcTransferEthMnemonic.php"](../../examples/Api/BlockchainOperationsApi/offchainXdcTransferEthMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXlmTransferXlm()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXlmTransferXlm(
    \Tatum\Model\TransferXlm $transfer_xlm
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm** | [**\Tatum\Model\TransferXlm**](../Model/TransferXlm.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send XLM from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p> <p>Send XLM (Stellar) or XLM-based assets from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If XLM server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainXlmTransferXlm.php"](../../examples/Api/BlockchainOperationsApi/offchainXlmTransferXlm.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXlmTransferXlmKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXlmTransferXlmKMS(
    \Tatum\Model\TransferXlmKMS $transfer_xlm_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xlm_kms** | [**\Tatum\Model\TransferXlmKMS**](../Model/TransferXlmKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send XLM from a virtual account to the blockchain

TransferXlmKMS operation

### Example

[✨ View "offchainXlmTransferXlmKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainXlmTransferXlmKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXrpTransferXrp()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXrpTransferXrp(
    \Tatum\Model\TransferXrp $transfer_xrp
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp** | [**\Tatum\Model\TransferXrp**](../Model/TransferXrp.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send XRP from a virtual account to the blockchain

<h4>10 credits per API call.</h4><br/><p> <p>Send XRP (Ripple) from a virtual account to the blockchain. This will create Tatum internal withdrawal request with ID. When every system works as expected, withdrawal request is marked as complete and transaction id is assigned to it. <ul> <li>If XRP server connection is unavailable, withdrawal request is cancelled.</li> <li>If blockchain transfer is successful, but is it not possible to reach Tatum, transaction id of blockchain transaction is returned and withdrawal request must be completed manually, otherwise all other withdrawals will be pending.</li> </ul> It is possible to perform ledger to blockchain transaction for ledger accounts without blockchain address assigned to them.<br/> This operation needs the private key of the blockchain address. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and losing funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. </p>

### Example

[✨ View "offchainXrpTransferXrp.php"](../../examples/Api/BlockchainOperationsApi/offchainXrpTransferXrp.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `offchainXrpTransferXrpKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->offchainXrpTransferXrpKMS(
    \Tatum\Model\TransferXrpKMS $transfer_xrp_kms
): \Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_xrp_kms** | [**\Tatum\Model\TransferXrpKMS**](../Model/TransferXrpKMS.md) |  |

### Return type

[**\Tatum\Model\OffchainBitcoinTransferBtcMnemonic200Response**](../Model/OffchainBitcoinTransferBtcMnemonic200Response.md)

### Description

Send XRP from a virtual account to the blockchain

TransferXrpKMS operation

### Example

[✨ View "offchainXrpTransferXrpKMS.php"](../../examples/Api/BlockchainOperationsApi/offchainXrpTransferXrpKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `storeCeloErc20Address()`

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

<p><b>This method is deprecated.<br/>Use <a href="#operation/storeTokenAddress">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4>

### Example

[✨ View "storeCeloErc20Address.php"](../../examples/Api/BlockchainOperationsApi/storeCeloErc20Address.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `storeTokenAddress()`

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

<p><b>2 credits per API call</b></p> <p>Set the contract address of an ERC-20, ERC-20-equivalent (for example, BEP-20, HRM-20, and so on), or TRC-10 token to be able to communicate with the smart contract.</p> <p>After creating and deploying the token to the blockchain, the smart contract address is generated and must be set within Tatum. If the address is not set, the Tatum platform will not be able to detect incoming deposits of the tokens and transfer the tokens from virtual accounts to blockchain addresses.</p> <p><b>NOTE:</b></p> <ul> <li>For <b>Algorand</b>, the contract address is the asset ID (<code>assetId</code>), for example, <code>55351976</code>.</li> <li>For <b>TRON</b>, the contract address is the token ID (<code>tokenId</code>), for example, <code>1234567</code>.</li> </ul>

### Example

[✨ View "storeTokenAddress.php"](../../examples/Api/BlockchainOperationsApi/storeTokenAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `storeTrcAddress()`

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

<p><b>This method is deprecated.<br/>Use <a href="#operation/storeTokenAddress">this method</a> instead.</b></p><br/> <h4>2 credits per API call.</h4>

### Example

[✨ View "storeTrcAddress.php"](../../examples/Api/BlockchainOperationsApi/storeTrcAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xlmAssetOffchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xlmAssetOffchain(
    \Tatum\Model\CreateXlmAsset $create_xlm_asset
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_xlm_asset** | [**\Tatum\Model\CreateXlmAsset**](../Model/CreateXlmAsset.md) |  |

### Return type

void (empty response body)

### Description

Create an XLM-based asset

<h4>2 credits per API call.</h4><br/> <p>Create an XLM-based asset in a virtual account. The asset must be created and configured on the Stellar blockchain before <a href="https://apidoc.tatum.io/tag/Stellar#operation/XlmTrustLineBlockchain">creating a trust line</a>.</p> <p>This API call will create an internal virtual currency. You can create virtual accounts with off-chain support.</p>

### Example

[✨ View "xlmAssetOffchain.php"](../../examples/Api/BlockchainOperationsApi/xlmAssetOffchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `xrpAssetOffchain()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainOperations()->xrpAssetOffchain(
    \Tatum\Model\CreateXrpAsset $create_xrp_asset
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_xrp_asset** | [**\Tatum\Model\CreateXrpAsset**](../Model/CreateXrpAsset.md) |  |

### Return type

void (empty response body)

### Description

Create XRP based Asset

<h4>2 credits per API call.</h4><br/><p> <p>Create an XRP-based asset in a virtual account. The asset must be created and configured on the Ripple blockchain before <a href="https://apidoc.tatum.io/tag/XRP#operation/XrpTrustLineBlockchain">creating a trust line</a>.</p> <p>This API call will create an internal virtual currency. You can create virtual accounts with off-chain support.</p>

### Example

[✨ View "xrpAssetOffchain.php"](../../examples/Api/BlockchainOperationsApi/xrpAssetOffchain.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
