---
title: NFT (ERC-721 or compatible)
parent: API
layout: page
---

# Api/NFTERC721OrCompatibleApi

[NFT (ERC-721 or compatible) API Reference](https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->nFTERC721OrCompatible();

// TestNet API Call
$sdk->testnet()->api()->nFTERC721OrCompatible();
```

## Methods

Method | Description
------------- | -------------
[**addNftMinter()**](#addnftminter) | Add a blockchain address as an NFT minter to an NFT smart contract
[**addNftMinterKMS()**](#addnftminterkms) | Add a blockchain address as an NFT minter to an NFT smart contract
[**burnNft()**](#burnnft) | Burn an NFT
[**burnNftAlgo()**](#burnnftalgo) | Burn an NFT
[**burnNftCelo()**](#burnnftcelo) | Burn an NFT
[**burnNftFlowKMS()**](#burnnftflowkms) | Burn an NFT
[**burnNftFlowMnemonic()**](#burnnftflowmnemonic) | Burn an NFT
[**burnNftFlowPK()**](#burnnftflowpk) | Burn an NFT
[**burnNftKMS()**](#burnnftkms) | Burn an NFT
[**burnNftKMSCelo()**](#burnnftkmscelo) | Burn an NFT
[**burnNftKMSTron()**](#burnnftkmstron) | Burn an NFT
[**burnNftTron()**](#burnnfttron) | Burn an NFT
[**deployNft()**](#deploynft) | Deploy an NFT smart contract
[**deployNftCelo()**](#deploynftcelo) | Deploy an NFT smart contract
[**deployNftCeloKMS()**](#deploynftcelokms) | Deploy an NFT smart contract
[**deployNftFlowKMS()**](#deploynftflowkms) | Deploy an NFT smart contract
[**deployNftFlowMnemonic()**](#deploynftflowmnemonic) | Deploy an NFT smart contract
[**deployNftFlowPK()**](#deploynftflowpk) | Deploy an NFT smart contract
[**deployNftKMS()**](#deploynftkms) | Deploy an NFT smart contract
[**deployNftTron()**](#deploynfttron) | Deploy an NFT smart contract
[**deployNftTronKMS()**](#deploynfttronkms) | Deploy an NFT smart contract
[**mintMultipleNft()**](#mintmultiplenft) | Mint multiple NFTs
[**mintMultipleNftCelo()**](#mintmultiplenftcelo) | Mint multiple NFTs
[**mintMultipleNftFlowKMS()**](#mintmultiplenftflowkms) | Mint multiple NFTs
[**mintMultipleNftFlowMnemonic()**](#mintmultiplenftflowmnemonic) | Mint multiple NFTs
[**mintMultipleNftFlowPK()**](#mintmultiplenftflowpk) | Mint multiple NFTs
[**mintMultipleNftKMS()**](#mintmultiplenftkms) | Mint multiple NFTs
[**mintMultipleNftKMSCelo()**](#mintmultiplenftkmscelo) | Mint multiple NFTs
[**mintMultipleNftKMSTron()**](#mintmultiplenftkmstron) | Mint multiple NFTs
[**mintMultipleNftMinter()**](#mintmultiplenftminter) | Mint multiple NFTs
[**mintMultipleNftTron()**](#mintmultiplenfttron) | Mint multiple NFTs
[**mintNft()**](#mintnft) | Mint an NFT
[**mintNftAlgorand()**](#mintnftalgorand) | Mint an NFT
[**mintNftAlgorandKMS()**](#mintnftalgorandkms) | Mint an NFT
[**mintNftCelo()**](#mintnftcelo) | Mint an NFT
[**mintNftExpress()**](#mintnftexpress) | Mint an NFT
[**mintNftExpressAlgorand()**](#mintnftexpressalgorand) | Mint an NFT
[**mintNftExpressSolana()**](#mintnftexpresssolana) | Mint an NFT
[**mintNftFlowKMS()**](#mintnftflowkms) | Mint an NFT
[**mintNftFlowMnemonic()**](#mintnftflowmnemonic) | Mint an NFT
[**mintNftFlowPK()**](#mintnftflowpk) | Mint an NFT
[**mintNftKMS()**](#mintnftkms) | Mint an NFT
[**mintNftKMSCelo()**](#mintnftkmscelo) | Mint an NFT
[**mintNftKMSTron()**](#mintnftkmstron) | Mint an NFT
[**mintNftMinter()**](#mintnftminter) | Mint an NFT
[**mintNftSolana()**](#mintnftsolana) | Mint an NFT
[**mintNftSolanaKMS()**](#mintnftsolanakms) | Mint an NFT
[**mintNftTron()**](#mintnfttron) | Mint an NFT
[**nftGetBalanceErc721()**](#nftgetbalanceerc721) | Get the NFTs from a specific smart contract that a blockchain address holds
[**nftGetMetadataErc721()**](#nftgetmetadataerc721) | Get NFT metadata
[**nftGetProvenanceDataErc721()**](#nftgetprovenancedataerc721) | Get NFT provenance information
[**nftGetRoyaltyErc721()**](#nftgetroyaltyerc721) | Get NFT royalty information
[**nftGetTokensByAddressErc721()**](#nftgettokensbyaddresserc721) | Get all NFTs that a blockchain address holds
[**nftGetTokensByCollectionErc721()**](#nftgettokensbycollectionerc721) | Get all NFTs from a collection
[**nftGetTransactErc721()**](#nftgettransacterc721) | Get an NFT transaction by its hash
[**nftGetTransactionByAddress()**](#nftgettransactionbyaddress) | Get NFT transactions on a blockchain address
[**nftGetTransactionByToken()**](#nftgettransactionbytoken) | Get NFT transactions for an NFT
[**transferNft()**](#transfernft) | Transfer an NFT
[**transferNftAlgo()**](#transfernftalgo) | Transfer an NFT
[**transferNftAlgoExpress()**](#transfernftalgoexpress) | Transfer an NFT
[**transferNftAlgoKMS()**](#transfernftalgokms) | Transfer an NFT
[**transferNftCelo()**](#transfernftcelo) | Transfer an NFT
[**transferNftFlowKMS()**](#transfernftflowkms) | Transfer an NFT
[**transferNftFlowMnemonic()**](#transfernftflowmnemonic) | Transfer an NFT
[**transferNftFlowPK()**](#transfernftflowpk) | Transfer an NFT
[**transferNftKMS()**](#transfernftkms) | Transfer an NFT
[**transferNftKMSCelo()**](#transfernftkmscelo) | Transfer an NFT
[**transferNftKMSTron()**](#transfernftkmstron) | Transfer an NFT
[**transferNftSolana()**](#transfernftsolana) | Transfer an NFT
[**transferNftSolanaKMS()**](#transfernftsolanakms) | Transfer an NFT
[**transferNftTron()**](#transfernfttron) | Transfer an NFT
[**updateCashbackValueForAuthorNft()**](#updatecashbackvalueforauthornft) | Update NFT royalty information
[**updateCashbackValueForAuthorNftCelo()**](#updatecashbackvalueforauthornftcelo) | Update NFT royalty information
[**updateCashbackValueForAuthorNftKMS()**](#updatecashbackvalueforauthornftkms) | Update NFT royalty information
[**updateCashbackValueForAuthorNftKMSCelo()**](#updatecashbackvalueforauthornftkmscelo) | Update NFT royalty information
[**updateCashbackValueForAuthorNftKMSTron()**](#updatecashbackvalueforauthornftkmstron) | Update NFT royalty information
[**updateCashbackValueForAuthorNftTron()**](#updatecashbackvalueforauthornfttron) | Update NFT royalty information
[**verifySolanaNFT()**](#verifysolananft) | Verify an NFT in an NFT collection on Solana
[**verifySolanaNFTKMS()**](#verifysolananftkms) | Verify an NFT in an NFT collection on Solana


## `addNftMinter()`

### Example

[👉 View "**addNftMinter.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/addNftMinter.php)

### Request

> **POST** `/v3/nft/mint/add`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->addNftMinter(
    \Tatum\Model\AddNftMinter $add_nft_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_nft_minter** | [**\Tatum\Model\AddNftMinter**](../../Model/AddNftMinter) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Add a blockchain address as an NFT minter to an NFT smart contract

**2 credits per API call**

 Allow a blockchain address (the <code>minter</code> parameter in the request body) to mint NFTs on your NFT smart contract (the <code>contractAddress</code> parameter in the request body).

 **NOTE:** Use this API **only** when you are using NFT Express with your own smart contract. For more information, see "Use your own smart contract to mint NFTs" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

 Do not use this API in any other case.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

 **Signing a transaction**

 When allowing a blockchain address to mint NFTs, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `addNftMinterKMS()`

### Example

[👉 View "**addNftMinterKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/addNftMinterKMS.php)

### Request

> **POST** `/v3/nft/mint/add`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->addNftMinterKMS(
    \Tatum\Model\AddNftMinterKMS $add_nft_minter_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_nft_minter_kms** | [**\Tatum\Model\AddNftMinterKMS**](../../Model/AddNftMinterKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Add a blockchain address as an NFT minter to an NFT smart contract

AddNftMinterKMS operation

[Back to top](#top)



## `burnNft()`

### Example

[👉 View "**burnNft.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNft.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNft(
    \Tatum\Model\BurnNft $burn_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft** | [**\Tatum\Model\BurnNft**](../../Model/BurnNft) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

**100 credits per API call on Flow

 2 credits per API call on the other blockchains**

 Destroy an NFT. Burning the NFT transfers it to an un-spendable blockchain address that no one can access.

 This API is supported for the following blockchains:

 

<ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

 **Burning NFTs on Algorand**

 You can burn only the NFTs that were minted with the address of the manager account specified in the <code>manager</code> parameter in the <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">minting call</a> (see the <code>MintNftExpressAlgorand</code>, <code>MintNftAlgorand</code>, and <code>MintNftAlgorandKMS</code> schemas of the request body).

 **Signing a transaction**

 When burning an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `burnNftAlgo()`

### Example

[👉 View "**burnNftAlgo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftAlgo.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftAlgo(
    \Tatum\Model\BurnNftAlgo $burn_nft_algo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_algo** | [**\Tatum\Model\BurnNftAlgo**](../../Model/BurnNftAlgo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

BurnNftAlgo operation

[Back to top](#top)



## `burnNftCelo()`

### Example

[👉 View "**burnNftCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftCelo.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftCelo(
    \Tatum\Model\BurnNftCelo $burn_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_celo** | [**\Tatum\Model\BurnNftCelo**](../../Model/BurnNftCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

BurnNftCelo operation

[Back to top](#top)



## `burnNftFlowKMS()`

### Example

[👉 View "**burnNftFlowKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftFlowKMS.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftFlowKMS(
    \Tatum\Model\BurnNftFlowKMS $burn_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_flow_kms** | [**\Tatum\Model\BurnNftFlowKMS**](../../Model/BurnNftFlowKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

BurnNftFlowKMS operation

[Back to top](#top)



## `burnNftFlowMnemonic()`

### Example

[👉 View "**burnNftFlowMnemonic.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftFlowMnemonic.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftFlowMnemonic(
    \Tatum\Model\BurnNftFlowMnemonic $burn_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_flow_mnemonic** | [**\Tatum\Model\BurnNftFlowMnemonic**](../../Model/BurnNftFlowMnemonic) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

BurnNftFlowMnemonic operation

[Back to top](#top)



## `burnNftFlowPK()`

### Example

[👉 View "**burnNftFlowPK.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftFlowPK.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftFlowPK(
    \Tatum\Model\BurnNftFlowPK $burn_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_flow_pk** | [**\Tatum\Model\BurnNftFlowPK**](../../Model/BurnNftFlowPK) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

BurnNftFlowPK operation

[Back to top](#top)



## `burnNftKMS()`

### Example

[👉 View "**burnNftKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftKMS.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftKMS(
    \Tatum\Model\BurnNftKMS $burn_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_kms** | [**\Tatum\Model\BurnNftKMS**](../../Model/BurnNftKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

BurnNftKMS operation

[Back to top](#top)



## `burnNftKMSCelo()`

### Example

[👉 View "**burnNftKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftKMSCelo.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftKMSCelo(
    \Tatum\Model\BurnNftKMSCelo $burn_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_kms_celo** | [**\Tatum\Model\BurnNftKMSCelo**](../../Model/BurnNftKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

BurnNftKMSCelo operation

[Back to top](#top)



## `burnNftKMSTron()`

### Example

[👉 View "**burnNftKMSTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftKMSTron.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftKMSTron(
    \Tatum\Model\BurnNftKMSTron $burn_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_kms_tron** | [**\Tatum\Model\BurnNftKMSTron**](../../Model/BurnNftKMSTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

BurnNftKMSTron operation

[Back to top](#top)



## `burnNftTron()`

### Example

[👉 View "**burnNftTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftTron.php)

### Request

> **POST** `/v3/nft/burn`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftTron(
    \Tatum\Model\BurnNftTron $burn_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_tron** | [**\Tatum\Model\BurnNftTron**](../../Model/BurnNftTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Burn an NFT

BurnNftTron operation

[Back to top](#top)



## `deployNft()`

### Example

[👉 View "**deployNft.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNft.php)

### Request

> **POST** `/v3/nft/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNft(
    \Tatum\Model\DeployNft $deploy_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft** | [**\Tatum\Model\DeployNft**](../../Model/DeployNft) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy an NFT smart contract

**100 credits per API call on Flow

 2 credits per API call on the other blockchains**

 Deploy an NFT smart contract on the blockchain. In a deployed NFT smart contract, you can mint NFTs (one NFT at a time or multiple NFTs at once), burn, and transfer NFTs.

 Smart contracts are standardized and audited. You can review the code of a deployed NFT smart contract <a href="https://github.com/tatumio/flow-contracts" target="_blank">here</a> (if the contract is deployed on Flow) or <a href="https://github.com/tatumio/smart-contracts/tree/master/contracts/tatum" target="_blank">here</a> (if the contract is deployed on any other supported blockchain).

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

 **General NFT smart contracts**

 By default, an NFT smart contract is deployed as a **general NFT smart contract compatible with OpenSea royalties**. This is a standard NFT contract with <code>AccessControl</code> and <code>Ownable</code>, enhanced with NFT batch minting. NFTs minted on this smart contract are compatible with OpenSea and its royalty structure. **Cashback and provenance NFT smart contracts**

 In addition to the general NFT contract, you can deploy the following types of NFT smart contracts for the supported blockchains **except for Flow and TRON**: 

<ul> <li>**Cashback NFT smart contract** is an NFT smart contract that forces on-chain royalties to be paid every time an NFT is transferred, and the royalties are defined as a **fixed value**. The royalties are **not** OpenSea-compatible.

 To deploy an NFT smart contract as a cashback contract, deploy the contract with the <code>cashback</code> parameter set to <code>true</code> in the request body.</li> <li>**Provenance NFT smart contract** is an NFT smart contract that forces on-chain royalties to be paid every time an NFT is transferred, and the royalties are defined as a **percentage of the NFT price**. The royalties are **not** OpenSea-compatible.

 To deploy an NFT smart contract as a provenance contract, deploy the contract with the <code>provenance</code> parameter set to <code>true</code> in the request body.</li> </ul>

 You can enable **public minting** for cashback and provenance smart contracts. By default, public minting is disabled, which means that only the blockchain address whose private key was used to create the smart contract or the blockchain addresses <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftaddminter">added to the smart contract as NFT minters</a> will be able to mint NFTs for the contract. To enable public minting and allow anyone to mint NFTs on top of the smart contract, deploy the contract with the <code>publicMint</code> parameter set to <code>true</code> in the request body.

 **NFT smart contracts and NFT Express**

 If you want to use NFT Express to mint NFTs on the deployed smart contract, deploy the smart contract as a general NFT smart contract (that is, deploy the contract with the <code>cashback</code>, <code>provenance</code>, and <code>publicMint</code> parameters either set to <code>false</code> or not set at all in the request body).

 After you have deployed the NFT smart contract, <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftaddminter">add the Tatum minter address as an NFT minter to your smart contract</a>.

 For the complete information about using NFT Express on your smart contract, see "Use your own smart contract to mint NFTs" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

 **Signing a transaction**

 When deploying an NFT smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `deployNftCelo()`

### Example

[👉 View "**deployNftCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftCelo.php)

### Request

> **POST** `/v3/nft/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftCelo(
    \Tatum\Model\DeployNftCelo $deploy_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_celo** | [**\Tatum\Model\DeployNftCelo**](../../Model/DeployNftCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy an NFT smart contract

DeployNftCelo operation

[Back to top](#top)



## `deployNftCeloKMS()`

### Example

[👉 View "**deployNftCeloKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftCeloKMS.php)

### Request

> **POST** `/v3/nft/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftCeloKMS(
    \Tatum\Model\DeployNftCeloKMS $deploy_nft_celo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_celo_kms** | [**\Tatum\Model\DeployNftCeloKMS**](../../Model/DeployNftCeloKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy an NFT smart contract

DeployNftCeloKMS operation

[Back to top](#top)



## `deployNftFlowKMS()`

### Example

[👉 View "**deployNftFlowKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftFlowKMS.php)

### Request

> **POST** `/v3/nft/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftFlowKMS(
    \Tatum\Model\DeployNftFlowKMS $deploy_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_flow_kms** | [**\Tatum\Model\DeployNftFlowKMS**](../../Model/DeployNftFlowKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy an NFT smart contract

DeployNftFlowKMS operation

[Back to top](#top)



## `deployNftFlowMnemonic()`

### Example

[👉 View "**deployNftFlowMnemonic.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftFlowMnemonic.php)

### Request

> **POST** `/v3/nft/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftFlowMnemonic(
    \Tatum\Model\DeployNftFlowMnemonic $deploy_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_flow_mnemonic** | [**\Tatum\Model\DeployNftFlowMnemonic**](../../Model/DeployNftFlowMnemonic) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy an NFT smart contract

DeployNftFlowMnemonic operation

[Back to top](#top)



## `deployNftFlowPK()`

### Example

[👉 View "**deployNftFlowPK.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftFlowPK.php)

### Request

> **POST** `/v3/nft/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftFlowPK(
    \Tatum\Model\DeployNftFlowPK $deploy_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_flow_pk** | [**\Tatum\Model\DeployNftFlowPK**](../../Model/DeployNftFlowPK) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy an NFT smart contract

DeployNftFlowPK operation

[Back to top](#top)



## `deployNftKMS()`

### Example

[👉 View "**deployNftKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftKMS.php)

### Request

> **POST** `/v3/nft/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftKMS(
    \Tatum\Model\DeployNftKMS $deploy_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_kms** | [**\Tatum\Model\DeployNftKMS**](../../Model/DeployNftKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy an NFT smart contract

DeployNftKMS operation

[Back to top](#top)



## `deployNftTron()`

### Example

[👉 View "**deployNftTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftTron.php)

### Request

> **POST** `/v3/nft/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftTron(
    \Tatum\Model\DeployNftTron $deploy_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_tron** | [**\Tatum\Model\DeployNftTron**](../../Model/DeployNftTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy an NFT smart contract

DeployNftTron operation

[Back to top](#top)



## `deployNftTronKMS()`

### Example

[👉 View "**deployNftTronKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftTronKMS.php)

### Request

> **POST** `/v3/nft/deploy`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftTronKMS(
    \Tatum\Model\DeployNftTronKMS $deploy_nft_tron_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_tron_kms** | [**\Tatum\Model\DeployNftTronKMS**](../../Model/DeployNftTronKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Deploy an NFT smart contract

DeployNftTronKMS operation

[Back to top](#top)



## `mintMultipleNft()`

### Example

[👉 View "**mintMultipleNft.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNft.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNft(
    \Tatum\Model\MintMultipleNft $mint_multiple_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft** | [**\Tatum\Model\MintMultipleNft**](../../Model/MintMultipleNft) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

MintMultipleNft operation

[Back to top](#top)



## `mintMultipleNftCelo()`

### Example

[👉 View "**mintMultipleNftCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftCelo.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftCelo(
    \Tatum\Model\MintMultipleNftCelo $mint_multiple_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_celo** | [**\Tatum\Model\MintMultipleNftCelo**](../../Model/MintMultipleNftCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

MintMultipleNftCelo operation

[Back to top](#top)



## `mintMultipleNftFlowKMS()`

### Example

[👉 View "**mintMultipleNftFlowKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftFlowKMS.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftFlowKMS(
    \Tatum\Model\MintMultipleNftFlowKMS $mint_multiple_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_flow_kms** | [**\Tatum\Model\MintMultipleNftFlowKMS**](../../Model/MintMultipleNftFlowKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

MintMultipleNftFlowKMS operation

[Back to top](#top)



## `mintMultipleNftFlowMnemonic()`

### Example

[👉 View "**mintMultipleNftFlowMnemonic.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftFlowMnemonic.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftFlowMnemonic(
    \Tatum\Model\MintMultipleNftFlowMnemonic $mint_multiple_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_flow_mnemonic** | [**\Tatum\Model\MintMultipleNftFlowMnemonic**](../../Model/MintMultipleNftFlowMnemonic) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

MintMultipleNftFlowMnemonic operation

[Back to top](#top)



## `mintMultipleNftFlowPK()`

### Example

[👉 View "**mintMultipleNftFlowPK.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftFlowPK.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftFlowPK(
    \Tatum\Model\MintMultipleNftFlowPK $mint_multiple_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_flow_pk** | [**\Tatum\Model\MintMultipleNftFlowPK**](../../Model/MintMultipleNftFlowPK) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

MintMultipleNftFlowPK operation

[Back to top](#top)



## `mintMultipleNftKMS()`

### Example

[👉 View "**mintMultipleNftKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftKMS.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftKMS(
    \Tatum\Model\MintMultipleNftKMS $mint_multiple_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_kms** | [**\Tatum\Model\MintMultipleNftKMS**](../../Model/MintMultipleNftKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

MintMultipleNftKMS operation

[Back to top](#top)



## `mintMultipleNftKMSCelo()`

### Example

[👉 View "**mintMultipleNftKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftKMSCelo.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftKMSCelo(
    \Tatum\Model\MintMultipleNftKMSCelo $mint_multiple_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_kms_celo** | [**\Tatum\Model\MintMultipleNftKMSCelo**](../../Model/MintMultipleNftKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

MintMultipleNftKMSCelo operation

[Back to top](#top)



## `mintMultipleNftKMSTron()`

### Example

[👉 View "**mintMultipleNftKMSTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftKMSTron.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftKMSTron(
    \Tatum\Model\MintMultipleNftKMSTron $mint_multiple_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_kms_tron** | [**\Tatum\Model\MintMultipleNftKMSTron**](../../Model/MintMultipleNftKMSTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

MintMultipleNftKMSTron operation

[Back to top](#top)



## `mintMultipleNftMinter()`

### Example

[👉 View "**mintMultipleNftMinter.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftMinter.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftMinter(
    \Tatum\Model\MintMultipleNftMinter $mint_multiple_nft_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_minter** | [**\Tatum\Model\MintMultipleNftMinter**](../../Model/MintMultipleNftMinter) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

**100 credits per API call on Flow

 2 credits per API call on the other blockchains**

 Create multiple NFT Tokens and transfer them to destination account. Create and transfer any NFT tokens from smart contract defined in contractAddress.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

 This operation works in two modes. First mode works just like other NFT endpoints. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages. Second mode enables you to mint on any custom NFT ERC-721 smart contract, on which specified minter address is approved as a minter. You don't specify private key or signatureId, only minter address, from which the NFT will be minted.

 It means you perform mint multiple NFT request with following body: <pre>{ "to": ["0x80d8bac9a6901698b3749fe336bbd1385c1f98f2"], "url": ["ipfs://QmXJJ6UF5WkF4WTJvsdhiA1etGwBLfpva7Vr9AudGMe3pj"], "tokenId": ["9876541124516"], "contractAddress":"0xcd2ada00c48a27faa5cc67f9a1ed55b89ddf7f77", "minter": "0x542b9ac4945a3836fd12ad98acbc76a0c8b743f5", "chain": "MATIC" }</pre> The blockchain fee of the performed transaction is paid from the address connected with built-in private key and is debited in form of credits. The credits are debited only if NFT mint requests are performed with paid API key plan. We transform fee to the credits in accordance to the rates provided by the Tatum. If you want to batch mint on ERC-721 contract which is not deployed via Tatum API, your smart contract must contain this method: <pre>mintMultiple(address[] to, uint256[] tokenId, string[] uri): boolean</pre> You can use addresses specified in the bellow table to be used as a minter. 

<table> 
<tr> <th>Chain</th> <th>Testnet address</th> <th>Mainnet Address</th> </tr>
 
<tr> <td>MATIC</td> <td>0x542b9ac4945a3836fd12ad98acbc76a0c8b743f5</td> <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td> </tr>
 
<tr> <td>BSC</td> <td>0xc16ae5e8c985b906935a0cadf4e24f0400531883</td> <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td> </tr>
 
<tr> <td>ONE</td> <td>0x8906f62d40293ddca77fdf6714c3f63265deddf0</td> <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td> </tr>
 
<tr> <td>ETH</td> <td>0x53e8577C4347C365E4e0DA5B57A589cB6f2AB848</td> <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td> </tr>
 
<tr> <td>CELO</td> <td>0xBC2eBA680EE50d685cc4Fe65f102AA70AfB27D3F</td> <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td> </tr>
 
<tr> <td>KLAY</td> <td>0x80d8bac9a6901698b3749fe336bbd1385c1f98f2</td> <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td> </tr>
 </table>

 If there are not enough coins on any testnet address, feel free to send coins there.

[Back to top](#top)



## `mintMultipleNftTron()`

### Example

[👉 View "**mintMultipleNftTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftTron.php)

### Request

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftTron(
    \Tatum\Model\MintMultipleNftTron $mint_multiple_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_tron** | [**\Tatum\Model\MintMultipleNftTron**](../../Model/MintMultipleNftTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../../Model/MintMultipleNftMinter200Response)

### Description

Mint multiple NFTs

MintMultipleNftTron operation

[Back to top](#top)



## `mintNft()`

### Example

[👉 View "**mintNft.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNft.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNft(
    \Tatum\Model\MintNft $mint_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft** | [**\Tatum\Model\MintNft**](../../Model/MintNft) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNft</code> schema lets you mint NFTs natively on BNB Smart Chain, Ethereum, Harmony, Klaytn, KuCoin Community Chain, and Polygon and sign the transaction with your private key.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftAlgorand()`

### Example

[👉 View "**mintNftAlgorand.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftAlgorand.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftAlgorand(
    \Tatum\Model\MintNftAlgorand $mint_nft_algorand,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_algorand** | [**\Tatum\Model\MintNftAlgorand**](../../Model/MintNftAlgorand) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftAlgorand</code> schema lets you mint NFTs natively on Algorand and sign the transaction with your private key.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftAlgorandKMS()`

### Example

[👉 View "**mintNftAlgorandKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftAlgorandKMS.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftAlgorandKMS(
    \Tatum\Model\MintNftAlgorandKMS $mint_nft_algorand_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_algorand_kms** | [**\Tatum\Model\MintNftAlgorandKMS**](../../Model/MintNftAlgorandKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftAlgorandKMS</code> schema lets you mint NFTs natively on Algorand and sign the transaction with your signature ID.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftCelo()`

### Example

[👉 View "**mintNftCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftCelo.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftCelo(
    \Tatum\Model\MintNftCelo $mint_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_celo** | [**\Tatum\Model\MintNftCelo**](../../Model/MintNftCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftCelo</code> schema lets you mint NFTs natively on Celo and sign the transaction with your private key.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftExpress()`

### Example

[👉 View "**mintNftExpress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftExpress.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftExpress(
    \Tatum\Model\MintNftExpress $mint_nft_express,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_express** | [**\Tatum\Model\MintNftExpress**](../../Model/MintNftExpress) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftExpress</code> schema lets you mint NFTs on BNB Smart Chain, Celo, Ethereum, Harmony, Klaytn, and Polygon using **NTF Express** with the pre-built smart contract provided by Tatum.

For more information, see "Use the pre-built smart contract provided by Tatum to mint NFTs" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftExpressAlgorand()`

### Example

[👉 View "**mintNftExpressAlgorand.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftExpressAlgorand.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftExpressAlgorand(
    \Tatum\Model\MintNftExpressAlgorand $mint_nft_express_algorand,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_express_algorand** | [**\Tatum\Model\MintNftExpressAlgorand**](../../Model/MintNftExpressAlgorand) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftExpressAlgorand</code> schema lets you mint NFTs on Algorand using **NTF Express** with the pre-built smart contract provided by Tatum.

For more information, see "Use the pre-built smart contract provided by Tatum to mint NFTs" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftExpressSolana()`

### Example

[👉 View "**mintNftExpressSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftExpressSolana.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftExpressSolana(
    \Tatum\Model\MintNftExpressSolana $mint_nft_express_solana,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_express_solana** | [**\Tatum\Model\MintNftExpressSolana**](../../Model/MintNftExpressSolana) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftExpressSolana</code> schema lets you mint NFTs on Solana using **NTF Express** with the pre-built smart contract provided by Tatum.

For more information, see "Use the pre-built smart contract provided by Tatum to mint NFTs" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftFlowKMS()`

### Example

[👉 View "**mintNftFlowKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftFlowKMS.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftFlowKMS(
    \Tatum\Model\MintNftFlowKMS $mint_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_flow_kms** | [**\Tatum\Model\MintNftFlowKMS**](../../Model/MintNftFlowKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftFlowKMS</code> schema lets you mint NFTs natively on Flow and sign the transaction with your signature ID.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftFlowMnemonic()`

### Example

[👉 View "**mintNftFlowMnemonic.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftFlowMnemonic.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftFlowMnemonic(
    \Tatum\Model\MintNftFlowMnemonic $mint_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_flow_mnemonic** | [**\Tatum\Model\MintNftFlowMnemonic**](../../Model/MintNftFlowMnemonic) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftFlowMnemonic</code> schema lets you mint NFTs natively on Flow and sign the transaction with your wallet mnemonic.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftFlowPK()`

### Example

[👉 View "**mintNftFlowPK.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftFlowPK.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftFlowPK(
    \Tatum\Model\MintNftFlowPK $mint_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_flow_pk** | [**\Tatum\Model\MintNftFlowPK**](../../Model/MintNftFlowPK) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftFlowPK</code> schema lets you mint NFTs natively on Flow and sign the transaction with your private key.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftKMS()`

### Example

[👉 View "**mintNftKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftKMS.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftKMS(
    \Tatum\Model\MintNftKMS $mint_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_kms** | [**\Tatum\Model\MintNftKMS**](../../Model/MintNftKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftKMS</code> schema lets you mint NFTs natively on BNB Smart Chain, Ethereum, Harmony, Klaytn, KuCoin Community Chain, and Polygon and sign the transaction with your signature ID.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftKMSCelo()`

### Example

[👉 View "**mintNftKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftKMSCelo.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftKMSCelo(
    \Tatum\Model\MintNftKMSCelo $mint_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_kms_celo** | [**\Tatum\Model\MintNftKMSCelo**](../../Model/MintNftKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftKMSCelo</code> schema lets you mint NFTs natively on Celo and sign the transaction with your signature ID.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftKMSTron()`

### Example

[👉 View "**mintNftKMSTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftKMSTron.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftKMSTron(
    \Tatum\Model\MintNftKMSTron $mint_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_kms_tron** | [**\Tatum\Model\MintNftKMSTron**](../../Model/MintNftKMSTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftKMSTron</code> schema lets you mint NFTs natively on TRON and sign the transaction with your signature ID.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftMinter()`

### Example

[👉 View "**mintNftMinter.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftMinter.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftMinter(
    \Tatum\Model\MintNftMinter $mint_nft_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_minter** | [**\Tatum\Model\MintNftMinter**](../../Model/MintNftMinter) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftMinter</code> schema lets you mint NFTs on BNB Smart Chain, Celo, Ethereum, Harmony, Klaytn, and Polygon using the **NTF minter**, a special blockchain address provided by Tatum that will cover the minting fees.

For more information, see "Use your own smart contract to mint NFTs" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftSolana()`

### Example

[👉 View "**mintNftSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftSolana.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftSolana(
    \Tatum\Model\MintNftSolana $mint_nft_solana,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_solana** | [**\Tatum\Model\MintNftSolana**](../../Model/MintNftSolana) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftSolana</code> schema lets you mint NFTs natively on Solana and sign the transaction with your private key.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftSolanaKMS()`

### Example

[👉 View "**mintNftSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftSolanaKMS.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftSolanaKMS(
    \Tatum\Model\MintNftSolanaKMS $mint_nft_solana_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_solana_kms** | [**\Tatum\Model\MintNftSolanaKMS**](../../Model/MintNftSolanaKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftSolanaKMS</code> schema lets you mint NFTs natively on Solana and sign the transaction with your signature ID.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `mintNftTron()`

### Example

[👉 View "**mintNftTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftTron.php)

### Request

> **POST** `/v3/nft/mint`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftTron(
    \Tatum\Model\MintNftTron $mint_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_tron** | [**\Tatum\Model\MintNftTron**](../../Model/MintNftTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../../Model/MintNftExpress200Response)

### Description

Mint an NFT

The <code>MintNftTron</code> schema lets you mint NFTs natively on TRON and sign the transaction with your private key.

For more information, see "Minting NFTs natively on a blockchain" in <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">Mint an NFT</a>.

[Back to top](#top)



## `nftGetBalanceErc721()`

### Example

[👉 View "**nftGetBalanceErc721.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetBalanceErc721.php)

### Request

> **GET** `/v3/nft/balance/{chain}/{contractAddress}/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetBalanceErc721(
    string $chain,
    string $address,
    string $contract_address,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftGetBalanceErc721200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$address** | **string**  | The blockchain address that you want to get the token balance of |
 **$contract_address** | **string**  | The address of the NFT smart contract |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftGetBalanceErc721200Response**](../../Model/NftGetBalanceErc721200Response)

### Description

Get the NFTs from a specific smart contract that a blockchain address holds

**1 credit per API call**

 Get the NFTs minted on a specific smart contract (the <code>contractAddress</code> path parameter in the request endpoint URL) that a blockchain address holds.

 **NOTE:** This API works only for the NFT smart contracts deployed using the <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftdeployerc721">Tatum smart contract API</a>.

 This API is supported for the following blockchains:

 

<ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

[Back to top](#top)



## `nftGetMetadataErc721()`

### Example

[👉 View "**nftGetMetadataErc721.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetMetadataErc721.php)

### Request

> **GET** `/v3/nft/metadata/{chain}/{contractAddress}/{tokenId}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetMetadataErc721(
    string $chain,
    string $contract_address,
    string $token_id,
    [ string $account, ]
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMetadataErc721
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$contract_address** | **string**  | The blockchain address of the NFT to get metadata for |
 **$token_id** | **string**  | The ID of the NFT to get metadata for&lt;br/&gt;Do &lt;b&gt;not&lt;/b&gt; use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana. |
 **$account** | **string**  | (Flow only) The account that holds the NFT | [optional]
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMetadataErc721**](../../Model/NftMetadataErc721)

### Description

Get NFT metadata

**1 credit per API call**

 Get metadata of an NFT.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

[Back to top](#top)



## `nftGetProvenanceDataErc721()`

### Example

[👉 View "**nftGetProvenanceDataErc721.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetProvenanceDataErc721.php)

### Request

> **GET** `/v3/nft/provenance/{chain}/{contractAddress}/{tokenId}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetProvenanceDataErc721(
    string $chain,
    string $contract_address,
    string $token_id,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftProvenanceDataErc721[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$contract_address** | **string**  | The blockchain address of the NFT to get provenance information for |
 **$token_id** | **string**  | The ID of the NFT to get provenance information for |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftProvenanceDataErc721[]**](../../Model/NftProvenanceDataErc721)

### Description

Get NFT provenance information

**1 credit per API call**

 Get provenance information for an NFT.

 **NOTE:** This API works only for <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftdeployerc721">provenance NFT smart contracts</a>.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `nftGetRoyaltyErc721()`

### Example

[👉 View "**nftGetRoyaltyErc721.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetRoyaltyErc721.php)

### Request

> **GET** `/v3/nft/royalty/{chain}/{contractAddress}/{tokenId}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetRoyaltyErc721(
    string $chain,
    string $contract_address,
    string $token_id,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftRoyaltyErc721
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$contract_address** | **string**  | The blockchain address of the NFT to get royalty information for |
 **$token_id** | **string**  | The ID of the NFT to get royalty information for&lt;br/&gt;Do &lt;b&gt;not&lt;/b&gt; use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana. |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftRoyaltyErc721**](../../Model/NftRoyaltyErc721)

### Description

Get NFT royalty information

**1 credit per API call**

 Get information about royalties for an NFT.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

[Back to top](#top)



## `nftGetTokensByAddressErc721()`

### Example

[👉 View "**nftGetTokensByAddressErc721.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTokensByAddressErc721.php)

### Request

> **GET** `/v3/nft/address/balance/{chain}/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTokensByAddressErc721(
    string $chain,
    string $address
): \Tatum\Model\NftTokenByAddressErc721[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$address** | **string**  | The blockchain address that you want to get the token balance of |

### Return type

[**\Tatum\Model\NftTokenByAddressErc721[]**](../../Model/NftTokenByAddressErc721)

### Description

Get all NFTs that a blockchain address holds

**1 credit per API call + 5 credits for each owned NFT**

 Get all NFTs that a blockchain address holds. The NFTs are returned grouped by the smart contracts they were minted on.

 This API is supported for the following blockchains:

 

<ul> <li>Algorand</li> <li>BNB Smart Chain - mainnet only</li> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> <li>Solana</li> </ul>

 On Solana and Algorand, if a blockchain address holds fewer than 50 NFTs, the API also returns each NFT's metadata. If the metadata is not returned, you can obtain it using the <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/NftGetMetadataErc721">API for getting NFT metadata</a>.

[Back to top](#top)



## `nftGetTokensByCollectionErc721()`

### Example

[👉 View "**nftGetTokensByCollectionErc721.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTokensByCollectionErc721.php)

### Request

> **GET** `/v3/nft/collection/{chain}/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTokensByCollectionErc721(
    string $chain,
    float $page_size,
    string $address,
    [ float $offset ]
): \Tatum\Model\NftTokenByCollectionErc721[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$address** | **string**  | The blockchain address of the collection |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]

### Return type

[**\Tatum\Model\NftTokenByCollectionErc721[]**](../../Model/NftTokenByCollectionErc721)

### Description

Get all NFTs from a collection

**1 credit per API call + 5 credits for each listed NFT**

 Get all NFTs from a collection (all the NFTs that were minted on the smart contract).

 This API is supported for the following blockchains:

 

<ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `nftGetTransactErc721()`

### Example

[👉 View "**nftGetTransactErc721.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTransactErc721.php)

### Request

> **GET** `/v3/nft/transaction/{chain}/{hash}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTransactErc721(
    string $chain,
    string $hash,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftGetTransactErc721200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$hash** | **string**  | The hash (ID) of the NFT transaction |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftGetTransactErc721200Response**](../../Model/NftGetTransactErc721200Response)

### Description

Get an NFT transaction by its hash

**1 credit per API call**

 Get an NFT transaction by its hash.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

[Back to top](#top)



## `nftGetTransactionByAddress()`

### Example

[👉 View "**nftGetTransactionByAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTransactionByAddress.php)

### Request

> **GET** `/v3/nft/transaction/{chain}/{address}/{tokenAddress}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTransactionByAddress(
    string $chain,
    string $address,
    string $token_address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to ]
): \Tatum\Model\NftTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$address** | **string**  | Account address you want to get balance of |
 **$token_address** | **string**  | Address of the token smart contract |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$from** | **float**  | Transactions from this block onwards will be included. | [optional]
 **$to** | **float**  | Transactions up to this block will be included. | [optional]

### Return type

[**\Tatum\Model\NftTx[]**](../../Model/NftTx)

### Description

Get NFT transactions on a blockchain address

**1 credit per API call**

 Get incoming and outgoing NFT transactions on a blockchain address.

 This API is supported for the following blockchains:

 

<ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `nftGetTransactionByToken()`

### Example

[👉 View "**nftGetTransactionByToken.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTransactionByToken.php)

### Request

> **GET** `/v3/nft/transaction/tokenId/{chain}/{tokenAddress}/{tokenId}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTransactionByToken(
    string $chain,
    string $token_id,
    string $token_address,
    float $page_size,
    [ float $offset, ]
    [ float $from, ]
    [ float $to ]
): \Tatum\Model\NftTx[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$token_id** | **string**  | NFT Token ID. |
 **$token_address** | **string**  | Address of the token smart contract |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain next page of the data. | [optional]
 **$from** | **float**  | Transactions from this block onwards will be included. | [optional]
 **$to** | **float**  | Transactions up to this block will be included. | [optional]

### Return type

[**\Tatum\Model\NftTx[]**](../../Model/NftTx)

### Description

Get NFT transactions for an NFT

**1 credit per API call**

 Get incoming and outgoing transactions for an NFT.

 This API is supported for the following blockchains:

 

<ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

[Back to top](#top)



## `transferNft()`

### Example

[👉 View "**transferNft.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNft.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNft(
    \Tatum\Model\TransferNft $transfer_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft** | [**\Tatum\Model\TransferNft**](../../Model/TransferNft) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

**100 credits per API call on Flow

 2 credits per API call on the other blockchains**

 Transfer an NFT from the smart contract (the <code>contractAddress</code> parameter in the request body) to the specified blockchain address (the <code>to</code> parameter in the request body).

 In one API call, you can transfer only one NFT.

 This API is supported for the following blockchains:

 

<ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

 For Ethereum, Celo, and BNB Smart Chain, transferring NFTs invokes the <code>safeTransfer()</code> method.

 **Transferring NFTs on Algorand**

 

<ul> <li>On Algorand, the recipient has to agree in advance to receive your NFT because Algorand charges users for storing NFTs on their addresses, and an Algorand blockchain address by default does not receive NFTs unless explicitly agreed. Before transferring an NFT, make sure that the recipient <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset" target="_blank">has agreed to receive the NFT</a> to their address.</li> <li>If you want to transfer an NFT that <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">was minted using NFT Express</a>, use the <code>transferNftAlgoExpress</code> schema of the request body.

**NOTE:** On the **mainnet**, Tatum covers your transaction fees for the NFT transfer and pays for them from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. On the **testnet**, no credits are deducted from the monthly credit allowance.</li> </ul>

 **Transferring NFTs on Solana**

 If you want to transfer an NFT that <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">was minted using NFT Express</a>, use the <code>transferNftSolana</code> or <code>transferNftSolanaKMS</code> schema of the request body. In the request body: 

<ul> <li>Set the <code>from</code> parameter to the address that you used in the <code>to</code> parameter in the request body of the minting call.</li> <li>Set the <code>to</code> parameter to the recipient's address.</li> <li>Set the <code>contractAddress</code> parameter to the address from the <code>nftAddress</code> parameter returned in the response body of the minting call.</li> <li>Set the <code>fromPrivateKey</code>/<code>signatureId</code> parameter to the private key/signature ID of the blockchain address that you specified in the <code>from</code> parameter.</li> </ul>

 **Signing a transaction**

 When transferring an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

 **NOTE:** This does not apply to transferring NFTs that were minted on Algorand using NFT Express (see earlier in this section).

[Back to top](#top)



## `transferNftAlgo()`

### Example

[👉 View "**transferNftAlgo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftAlgo.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftAlgo(
    \Tatum\Model\TransferNftAlgo $transfer_nft_algo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_algo** | [**\Tatum\Model\TransferNftAlgo**](../../Model/TransferNftAlgo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftAlgo operation

[Back to top](#top)



## `transferNftAlgoExpress()`

### Example

[👉 View "**transferNftAlgoExpress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftAlgoExpress.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftAlgoExpress(
    \Tatum\Model\TransferNftAlgoExpress $transfer_nft_algo_express,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_algo_express** | [**\Tatum\Model\TransferNftAlgoExpress**](../../Model/TransferNftAlgoExpress) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftAlgoExpress operation

[Back to top](#top)



## `transferNftAlgoKMS()`

### Example

[👉 View "**transferNftAlgoKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftAlgoKMS.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftAlgoKMS(
    \Tatum\Model\TransferNftAlgoKMS $transfer_nft_algo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_algo_kms** | [**\Tatum\Model\TransferNftAlgoKMS**](../../Model/TransferNftAlgoKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftAlgoKMS operation

[Back to top](#top)



## `transferNftCelo()`

### Example

[👉 View "**transferNftCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftCelo.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftCelo(
    \Tatum\Model\TransferNftCelo $transfer_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_celo** | [**\Tatum\Model\TransferNftCelo**](../../Model/TransferNftCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftCelo operation

[Back to top](#top)



## `transferNftFlowKMS()`

### Example

[👉 View "**transferNftFlowKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftFlowKMS.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftFlowKMS(
    \Tatum\Model\TransferNftFlowKMS $transfer_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_flow_kms** | [**\Tatum\Model\TransferNftFlowKMS**](../../Model/TransferNftFlowKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftFlowKMS operation

[Back to top](#top)



## `transferNftFlowMnemonic()`

### Example

[👉 View "**transferNftFlowMnemonic.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftFlowMnemonic.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftFlowMnemonic(
    \Tatum\Model\TransferNftFlowMnemonic $transfer_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_flow_mnemonic** | [**\Tatum\Model\TransferNftFlowMnemonic**](../../Model/TransferNftFlowMnemonic) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftFlowMnemonic operation

[Back to top](#top)



## `transferNftFlowPK()`

### Example

[👉 View "**transferNftFlowPK.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftFlowPK.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftFlowPK(
    \Tatum\Model\TransferNftFlowPK $transfer_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_flow_pk** | [**\Tatum\Model\TransferNftFlowPK**](../../Model/TransferNftFlowPK) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftFlowPK operation

[Back to top](#top)



## `transferNftKMS()`

### Example

[👉 View "**transferNftKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftKMS.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftKMS(
    \Tatum\Model\TransferNftKMS $transfer_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_kms** | [**\Tatum\Model\TransferNftKMS**](../../Model/TransferNftKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftKMS operation

[Back to top](#top)



## `transferNftKMSCelo()`

### Example

[👉 View "**transferNftKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftKMSCelo.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftKMSCelo(
    \Tatum\Model\TransferNftKMSCelo $transfer_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_kms_celo** | [**\Tatum\Model\TransferNftKMSCelo**](../../Model/TransferNftKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftKMSCelo operation

[Back to top](#top)



## `transferNftKMSTron()`

### Example

[👉 View "**transferNftKMSTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftKMSTron.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftKMSTron(
    \Tatum\Model\TransferNftKMSTron $transfer_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_kms_tron** | [**\Tatum\Model\TransferNftKMSTron**](../../Model/TransferNftKMSTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftKMSTron operation

[Back to top](#top)



## `transferNftSolana()`

### Example

[👉 View "**transferNftSolana.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftSolana.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftSolana(
    \Tatum\Model\TransferNftSolana $transfer_nft_solana,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_solana** | [**\Tatum\Model\TransferNftSolana**](../../Model/TransferNftSolana) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftSolana operation

[Back to top](#top)



## `transferNftSolanaKMS()`

### Example

[👉 View "**transferNftSolanaKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftSolanaKMS.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftSolanaKMS(
    \Tatum\Model\TransferNftSolanaKMS $transfer_nft_solana_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_solana_kms** | [**\Tatum\Model\TransferNftSolanaKMS**](../../Model/TransferNftSolanaKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftSolanaKMS operation

[Back to top](#top)



## `transferNftTron()`

### Example

[👉 View "**transferNftTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftTron.php)

### Request

> **POST** `/v3/nft/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftTron(
    \Tatum\Model\TransferNftTron $transfer_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_tron** | [**\Tatum\Model\TransferNftTron**](../../Model/TransferNftTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Transfer an NFT

TransferNftTron operation

[Back to top](#top)



## `updateCashbackValueForAuthorNft()`

### Example

[👉 View "**updateCashbackValueForAuthorNft.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNft.php)

### Request

> **PUT** `/v3/nft/royalty`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNft(
    \Tatum\Model\UpdateCashbackValueForAuthorNft $update_cashback_value_for_author_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft** | [**\Tatum\Model\UpdateCashbackValueForAuthorNft**](../../Model/UpdateCashbackValueForAuthorNft) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update NFT royalty information

**2 credits per API call**

 Update the value of the royalty cashback set for an NFT.

 The royalty cashback value can be updated only from the address of the NFT author (the address that is listed as a royalty cashback receiver in the NFT royalty information). The royalty cashback value cannot be updated from the address of the NFT owner.

 In one API call, you can update the first value of the royalty cashback for the NFT author for one NFT.

 To disable the royalties for the NFT completely, set it to 0.

 This API is supported for the following blockchains:

 

<ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

 **Signing a transaction**

 When updating NFT royalty, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `updateCashbackValueForAuthorNftCelo()`

### Example

[👉 View "**updateCashbackValueForAuthorNftCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftCelo.php)

### Request

> **PUT** `/v3/nft/royalty`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftCelo(
    \Tatum\Model\UpdateCashbackValueForAuthorNftCelo $update_cashback_value_for_author_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_celo** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftCelo**](../../Model/UpdateCashbackValueForAuthorNftCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftCelo operation

[Back to top](#top)



## `updateCashbackValueForAuthorNftKMS()`

### Example

[👉 View "**updateCashbackValueForAuthorNftKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftKMS.php)

### Request

> **PUT** `/v3/nft/royalty`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftKMS(
    \Tatum\Model\UpdateCashbackValueForAuthorNftKMS $update_cashback_value_for_author_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_kms** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftKMS**](../../Model/UpdateCashbackValueForAuthorNftKMS) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftKMS operation

[Back to top](#top)



## `updateCashbackValueForAuthorNftKMSCelo()`

### Example

[👉 View "**updateCashbackValueForAuthorNftKMSCelo.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftKMSCelo.php)

### Request

> **PUT** `/v3/nft/royalty`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftKMSCelo(
    \Tatum\Model\UpdateCashbackValueForAuthorNftKMSCelo $update_cashback_value_for_author_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_kms_celo** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftKMSCelo**](../../Model/UpdateCashbackValueForAuthorNftKMSCelo) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftKMSCelo operation

[Back to top](#top)



## `updateCashbackValueForAuthorNftKMSTron()`

### Example

[👉 View "**updateCashbackValueForAuthorNftKMSTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftKMSTron.php)

### Request

> **PUT** `/v3/nft/royalty`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftKMSTron(
    \Tatum\Model\UpdateCashbackValueForAuthorNftKMSTron $update_cashback_value_for_author_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_kms_tron** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftKMSTron**](../../Model/UpdateCashbackValueForAuthorNftKMSTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftKMSTron operation

[Back to top](#top)



## `updateCashbackValueForAuthorNftTron()`

### Example

[👉 View "**updateCashbackValueForAuthorNftTron.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftTron.php)

### Request

> **PUT** `/v3/nft/royalty`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftTron(
    \Tatum\Model\UpdateCashbackValueForAuthorNftTron $update_cashback_value_for_author_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_tron** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftTron**](../../Model/UpdateCashbackValueForAuthorNftTron) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftTron operation

[Back to top](#top)



## `verifySolanaNFT()`

### Example

[👉 View "**verifySolanaNFT.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/verifySolanaNFT.php)

### Request

> **POST** `/v3/nft/verify`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->verifySolanaNFT(
    \Tatum\Model\VerifySolanaNFT $verify_solana_nft
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$verify_solana_nft** | [**\Tatum\Model\VerifySolanaNFT**](../../Model/VerifySolanaNFT) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Verify an NFT in an NFT collection on Solana

**2 credits per API call**

 Verify an NFT in an NFT collection on Solana. Verifying an NFT sets the <code>Verified</code> parameter to <code>true</code> for the NFT, which means that the NFT is really a part of the collection. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>.

 The collection must be a sized collection that was introduced in <a href="https://docs.metaplex.com/programs/token-metadata/changelog/v1.3" target="_blank">Version 1.3</a> of the Metaplex Token Metadata program. The NFT must have been <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/nftminterc721">minted in this collection</a>.

 This API is supported only for Solana.

 **Signing a transaction**

 When verifying an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.

 Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the **testnet** of a blockchain.

 For signing transactions on the **mainnet**, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.

[Back to top](#top)



## `verifySolanaNFTKMS()`

### Example

[👉 View "**verifySolanaNFTKMS.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/verifySolanaNFTKMS.php)

### Request

> **POST** `/v3/nft/verify`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->verifySolanaNFTKMS(
    \Tatum\Model\VerifySolanaNFTKMS $verify_solana_nftkms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$verify_solana_nftkms** | [**\Tatum\Model\VerifySolanaNFTKMS**](../../Model/VerifySolanaNFTKMS) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../../Model/TransactionSigned)

### Description

Verify an NFT in an NFT collection on Solana

VerifySolanaNFTKMS operation

[Back to top](#top)

