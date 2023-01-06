# Tatum/Api/NFTERC721OrCompatibleApi

* NFT (ERC-721 or compatible) [documentation](https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/)
* HTTP requests are relative to https://api.tatum.io

Method | HTTP request | Description
------------- | ------------- | -------------
[**nftBurnNft()**](#nftburnnft) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftBurnNftAlgo()**](#nftburnnftalgo) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftBurnNftCelo()**](#nftburnnftcelo) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftBurnNftFlowKMS()**](#nftburnnftflowkms) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftBurnNftFlowMnemonic()**](#nftburnnftflowmnemonic) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftBurnNftFlowPK()**](#nftburnnftflowpk) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftBurnNftKMS()**](#nftburnnftkms) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftBurnNftKMSCelo()**](#nftburnnftkmscelo) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftBurnNftKMSTron()**](#nftburnnftkmstron) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftBurnNftTron()**](#nftburnnfttron) | **POST** `/v3/nft/burn` | Burn an NFT
[**nftDeployNft()**](#nftdeploynft) | **POST** `/v3/nft/deploy` | Deploy an NFT smart contract
[**nftDeployNftCelo()**](#nftdeploynftcelo) | **POST** `/v3/nft/deploy` | Deploy an NFT smart contract
[**nftDeployNftCeloKMS()**](#nftdeploynftcelokms) | **POST** `/v3/nft/deploy` | Deploy an NFT smart contract
[**nftDeployNftFlowKMS()**](#nftdeploynftflowkms) | **POST** `/v3/nft/deploy` | Deploy an NFT smart contract
[**nftDeployNftFlowMnemonic()**](#nftdeploynftflowmnemonic) | **POST** `/v3/nft/deploy` | Deploy an NFT smart contract
[**nftDeployNftFlowPK()**](#nftdeploynftflowpk) | **POST** `/v3/nft/deploy` | Deploy an NFT smart contract
[**nftDeployNftKMS()**](#nftdeploynftkms) | **POST** `/v3/nft/deploy` | Deploy an NFT smart contract
[**nftDeployNftTron()**](#nftdeploynfttron) | **POST** `/v3/nft/deploy` | Deploy an NFT smart contract
[**nftDeployNftTronKMS()**](#nftdeploynfttronkms) | **POST** `/v3/nft/deploy` | Deploy an NFT smart contract
[**nftGetBalanceErc721()**](#nftgetbalanceerc721) | **GET** `/v3/nft/balance/{chain}/{contractAddress}/{address}` | Get the NFTs from a specific smart contract that a blockchain address holds
[**nftGetContractAddress()**](#nftgetcontractaddress) | **GET** `/v3/nft/address/{chain}/{hash}` | Get the address of an NFT smart contract by its transaction hash
[**nftGetMetadataErc721()**](#nftgetmetadataerc721) | **GET** `/v3/nft/metadata/{chain}/{contractAddress}/{tokenId}` | Get NFT metadata
[**nftGetProvenanceDataErc721()**](#nftgetprovenancedataerc721) | **GET** `/v3/nft/provenance/{chain}/{contractAddress}/{tokenId}` | Get NFT provenance information
[**nftGetRoyaltyErc721()**](#nftgetroyaltyerc721) | **GET** `/v3/nft/royalty/{chain}/{contractAddress}/{tokenId}` | Get NFT royalty information
[**nftGetTokensByAddressErc721()**](#nftgettokensbyaddresserc721) | **GET** `/v3/nft/address/balance/{chain}/{address}` | Get all NFTs that a blockchain address holds
[**nftGetTokensByCollectionErc721()**](#nftgettokensbycollectionerc721) | **GET** `/v3/nft/collection/{chain}/{address}` | Get all NFTs from a collection
[**nftGetTransactErc721()**](#nftgettransacterc721) | **GET** `/v3/nft/transaction/{chain}/{hash}` | Get an NFT transaction by its hash
[**nftGetTransactionByAddress()**](#nftgettransactionbyaddress) | **GET** `/v3/nft/transaction/{chain}/{address}/{tokenAddress}` | Get NFT transactions on a blockchain address
[**nftGetTransactionByToken()**](#nftgettransactionbytoken) | **GET** `/v3/nft/transaction/tokenId/{chain}/{tokenAddress}/{tokenId}` | Get NFT transactions for an NFT
[**nftMintAddNftMinter()**](#nftmintaddnftminter) | **POST** `/v3/nft/mint/add` | Add an NFT minter to an NFT smart contract
[**nftMintAddNftMinterKMS()**](#nftmintaddnftminterkms) | **POST** `/v3/nft/mint/add` | Add an NFT minter to an NFT smart contract
[**nftMintBatchMintMultipleNft()**](#nftmintbatchmintmultiplenft) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintBatchMintMultipleNftCelo()**](#nftmintbatchmintmultiplenftcelo) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintBatchMintMultipleNftFlowKMS()**](#nftmintbatchmintmultiplenftflowkms) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintBatchMintMultipleNftFlowMnemonic()**](#nftmintbatchmintmultiplenftflowmnemonic) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintBatchMintMultipleNftFlowPK()**](#nftmintbatchmintmultiplenftflowpk) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintBatchMintMultipleNftKMS()**](#nftmintbatchmintmultiplenftkms) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintBatchMintMultipleNftKMSCelo()**](#nftmintbatchmintmultiplenftkmscelo) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintBatchMintMultipleNftKMSTron()**](#nftmintbatchmintmultiplenftkmstron) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintBatchMintMultipleNftMinter()**](#nftmintbatchmintmultiplenftminter) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintBatchMintMultipleNftTron()**](#nftmintbatchmintmultiplenfttron) | **POST** `/v3/nft/mint/batch` | Mint multiple NFTs
[**nftMintNft()**](#nftmintnft) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftAlgorand()**](#nftmintnftalgorand) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftAlgorandKMS()**](#nftmintnftalgorandkms) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftCelo()**](#nftmintnftcelo) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftExpress()**](#nftmintnftexpress) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftExpressAlgorand()**](#nftmintnftexpressalgorand) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftExpressSolana()**](#nftmintnftexpresssolana) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftFlowKMS()**](#nftmintnftflowkms) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftFlowMnemonic()**](#nftmintnftflowmnemonic) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftFlowPK()**](#nftmintnftflowpk) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftKMS()**](#nftmintnftkms) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftKMSCelo()**](#nftmintnftkmscelo) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftKMSTron()**](#nftmintnftkmstron) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftMinter()**](#nftmintnftminter) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftSolana()**](#nftmintnftsolana) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftSolanaKMS()**](#nftmintnftsolanakms) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftMintNftTron()**](#nftmintnfttron) | **POST** `/v3/nft/mint` | Mint an NFT
[**nftRoyaltyUpdateCashbackValueForAuthorNft()**](#nftroyaltyupdatecashbackvalueforauthornft) | **PUT** `/v3/nft/royalty` | Update NFT royalty information
[**nftRoyaltyUpdateCashbackValueForAuthorNftCelo()**](#nftroyaltyupdatecashbackvalueforauthornftcelo) | **PUT** `/v3/nft/royalty` | Update NFT royalty information
[**nftRoyaltyUpdateCashbackValueForAuthorNftKMS()**](#nftroyaltyupdatecashbackvalueforauthornftkms) | **PUT** `/v3/nft/royalty` | Update NFT royalty information
[**nftRoyaltyUpdateCashbackValueForAuthorNftKMSCelo()**](#nftroyaltyupdatecashbackvalueforauthornftkmscelo) | **PUT** `/v3/nft/royalty` | Update NFT royalty information
[**nftRoyaltyUpdateCashbackValueForAuthorNftKMSTron()**](#nftroyaltyupdatecashbackvalueforauthornftkmstron) | **PUT** `/v3/nft/royalty` | Update NFT royalty information
[**nftRoyaltyUpdateCashbackValueForAuthorNftTron()**](#nftroyaltyupdatecashbackvalueforauthornfttron) | **PUT** `/v3/nft/royalty` | Update NFT royalty information
[**nftTransactionTransferNft()**](#nfttransactiontransfernft) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftAlgo()**](#nfttransactiontransfernftalgo) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftAlgoExpress()**](#nfttransactiontransfernftalgoexpress) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftAlgoKMS()**](#nfttransactiontransfernftalgokms) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftCelo()**](#nfttransactiontransfernftcelo) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftFlowKMS()**](#nfttransactiontransfernftflowkms) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftFlowMnemonic()**](#nfttransactiontransfernftflowmnemonic) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftFlowPK()**](#nfttransactiontransfernftflowpk) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftKMS()**](#nfttransactiontransfernftkms) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftKMSCelo()**](#nfttransactiontransfernftkmscelo) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftKMSTron()**](#nfttransactiontransfernftkmstron) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftSolana()**](#nfttransactiontransfernftsolana) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftSolanaKMS()**](#nfttransactiontransfernftsolanakms) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftTransactionTransferNftTron()**](#nfttransactiontransfernfttron) | **POST** `/v3/nft/transaction` | Transfer an NFT
[**nftVerifySolanaNFT()**](#nftverifysolananft) | **POST** `/v3/nft/verify` | Verify an NFT in an NFT collection on Solana
[**nftVerifySolanaNFTKMS()**](#nftverifysolananftkms) | **POST** `/v3/nft/verify` | Verify an NFT in an NFT collection on Solana


## `nftBurnNft()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNft(
    \Tatum\Model\BurnNft $burn_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft** | [**\Tatum\Model\BurnNft**](../Model/BurnNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

<p><b>100 credits per API call on Flow<br/> 2 credits per API call on the other blockchains</b></p> <p>Destroy an NFT. Burning the NFT transfers it to an un-spendable blockchain address that no one can access.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>Burning NFTs on Algorand</b><br/> You can burn only the NFTs that were minted with the address of the manager account specified in the <code>manager</code> parameter in the <a href="#operation/NftMintErc721">minting call</a> (see the <code>MintNftExpressAlgorand</code>, <code>MintNftAlgorand</code>, and <code>MintNftAlgorandKMS</code> schemas of the request body).</p> <p><b>Signing a transaction</b><br/> When burning an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "nftBurnNft.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnNftAlgo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNftAlgo(
    \Tatum\Model\BurnNftAlgo $burn_nft_algo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_algo** | [**\Tatum\Model\BurnNftAlgo**](../Model/BurnNftAlgo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

BurnNftAlgo operation

### Example

[✨ View "nftBurnNftAlgo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNftAlgo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnNftCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNftCelo(
    \Tatum\Model\BurnNftCelo $burn_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_celo** | [**\Tatum\Model\BurnNftCelo**](../Model/BurnNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

BurnNftCelo operation

### Example

[✨ View "nftBurnNftCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnNftFlowKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNftFlowKMS(
    \Tatum\Model\BurnNftFlowKMS $burn_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_flow_kms** | [**\Tatum\Model\BurnNftFlowKMS**](../Model/BurnNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

BurnNftFlowKMS operation

### Example

[✨ View "nftBurnNftFlowKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnNftFlowMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNftFlowMnemonic(
    \Tatum\Model\BurnNftFlowMnemonic $burn_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_flow_mnemonic** | [**\Tatum\Model\BurnNftFlowMnemonic**](../Model/BurnNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

BurnNftFlowMnemonic operation

### Example

[✨ View "nftBurnNftFlowMnemonic.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnNftFlowPK()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNftFlowPK(
    \Tatum\Model\BurnNftFlowPK $burn_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_flow_pk** | [**\Tatum\Model\BurnNftFlowPK**](../Model/BurnNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

BurnNftFlowPK operation

### Example

[✨ View "nftBurnNftFlowPK.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnNftKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNftKMS(
    \Tatum\Model\BurnNftKMS $burn_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_kms** | [**\Tatum\Model\BurnNftKMS**](../Model/BurnNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

BurnNftKMS operation

### Example

[✨ View "nftBurnNftKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnNftKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNftKMSCelo(
    \Tatum\Model\BurnNftKMSCelo $burn_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_kms_celo** | [**\Tatum\Model\BurnNftKMSCelo**](../Model/BurnNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

BurnNftKMSCelo operation

### Example

[✨ View "nftBurnNftKMSCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnNftKMSTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNftKMSTron(
    \Tatum\Model\BurnNftKMSTron $burn_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_kms_tron** | [**\Tatum\Model\BurnNftKMSTron**](../Model/BurnNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

BurnNftKMSTron operation

### Example

[✨ View "nftBurnNftKMSTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftBurnNftTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftBurnNftTron(
    \Tatum\Model\BurnNftTron $burn_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_tron** | [**\Tatum\Model\BurnNftTron**](../Model/BurnNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Burn an NFT

BurnNftTron operation

### Example

[✨ View "nftBurnNftTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftBurnNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployNft()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployNft(
    \Tatum\Model\DeployNft $deploy_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft** | [**\Tatum\Model\DeployNft**](../Model/DeployNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy an NFT smart contract

<p><b>100 credits per API call on Flow<br/> 2 credits per API call on the other blockchains</b></p> <p>Deploy an NFT smart contract on the blockchain. In a deployed NFT smart contract, you can mint NFTs (one NFT at a time or multiple NFTs at once), burn, and transfer NFTs.</p> <p>Smart contracts are standardized and audited. You can review the code of a deployed NFT smart contract <a href="https://github.com/tatumio/flow-contracts" target="_blank">here</a> (if the contract is deployed on Flow) or <a href="https://github.com/tatumio/smart-contracts/tree/master/contracts/tatum" target="_blank">here</a> (if the contract is deployed on any other supported blockchain).</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>General NFT smart contracts</b><br/> By default, an NFT smart contract is deployed as a <b>general NFT smart contract compatible with OpenSea royalties</b>. This is a standard NFT contract with <code>AccessControl</code> and <code>Ownable</code>, enhanced with NFT batch minting. NFTs minted on this smart contract are compatible with OpenSea and its royalty structure.<p> <p><b>Cashback and provenance NFT smart contracts</b><br/> In addition to the general NFT contract, you can deploy the following types of NFT smart contracts for the supported blockchains <b>except for Flow and TRON</b>:<p> <ul> <li><b>Cashback NFT smart contract</b> is an NFT smart contract that forces on-chain royalties to be paid every time an NFT is transferred, and the royalties are defined as a <b>fixed value</b>. The royalties are <b>not</b> OpenSea-compatible.<br /> To deploy an NFT smart contract as a cashback contract, deploy the contract with the <code>cashback</code> parameter set to <code>true</code> in the request body.</li> <li><b>Provenance NFT smart contract</b> is an NFT smart contract that forces on-chain royalties to be paid every time an NFT is transferred, and the royalties are defined as a <b>percentage of the NFT price</b>. The royalties are <b>not</b> OpenSea-compatible.<br /> To deploy an NFT smart contract as a provenance contract, deploy the contract with the <code>provenance</code> parameter set to <code>true</code> in the request body.</li> </ul> <p>You can enable <b>public minting</b> for cashback and provenance smart contracts. By default, public minting is disabled, which means that only the blockchain address whose private key was used to create the smart contract or the blockchain addresses <a href="#operation/NftAddMinter">added to the smart contract as NFT minters</a> will be able to mint NFTs for the contract. To enable public minting and allow anyone to mint NFTs on top of the smart contract, deploy the contract with the <code>publicMint</code> parameter set to <code>true</code> in the request body.</p> <p><b>NFT smart contracts and NFT Express</b><br/> If you want to use NFT Express to mint NFTs on the deployed smart contract, deploy the smart contract as a general NFT smart contract (that is, deploy the contract with the <code>cashback</code>, <code>provenance</code>, and <code>publicMint</code> parameters either set to <code>false</code> or not set at all in the request body).<br/> After you have deployed the NFT smart contract, <a href="#operation/NftAddMinter">add the Tatum minter address as an NFT minter to your smart contract</a>.</p> <p>For the complete information about using NFT Express on your smart contract, see "Use your own smart contract to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p> <p><b>Signing a transaction</b><br/> When deploying an NFT smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "nftDeployNft.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftDeployNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployNftCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployNftCelo(
    \Tatum\Model\DeployNftCelo $deploy_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_celo** | [**\Tatum\Model\DeployNftCelo**](../Model/DeployNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy an NFT smart contract

DeployNftCelo operation

### Example

[✨ View "nftDeployNftCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftDeployNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployNftCeloKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployNftCeloKMS(
    \Tatum\Model\DeployNftCeloKMS $deploy_nft_celo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_celo_kms** | [**\Tatum\Model\DeployNftCeloKMS**](../Model/DeployNftCeloKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy an NFT smart contract

DeployNftCeloKMS operation

### Example

[✨ View "nftDeployNftCeloKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftDeployNftCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployNftFlowKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployNftFlowKMS(
    \Tatum\Model\DeployNftFlowKMS $deploy_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_flow_kms** | [**\Tatum\Model\DeployNftFlowKMS**](../Model/DeployNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy an NFT smart contract

DeployNftFlowKMS operation

### Example

[✨ View "nftDeployNftFlowKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftDeployNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployNftFlowMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployNftFlowMnemonic(
    \Tatum\Model\DeployNftFlowMnemonic $deploy_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_flow_mnemonic** | [**\Tatum\Model\DeployNftFlowMnemonic**](../Model/DeployNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy an NFT smart contract

DeployNftFlowMnemonic operation

### Example

[✨ View "nftDeployNftFlowMnemonic.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftDeployNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployNftFlowPK()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployNftFlowPK(
    \Tatum\Model\DeployNftFlowPK $deploy_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_flow_pk** | [**\Tatum\Model\DeployNftFlowPK**](../Model/DeployNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy an NFT smart contract

DeployNftFlowPK operation

### Example

[✨ View "nftDeployNftFlowPK.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftDeployNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployNftKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployNftKMS(
    \Tatum\Model\DeployNftKMS $deploy_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_kms** | [**\Tatum\Model\DeployNftKMS**](../Model/DeployNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy an NFT smart contract

DeployNftKMS operation

### Example

[✨ View "nftDeployNftKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftDeployNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployNftTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployNftTron(
    \Tatum\Model\DeployNftTron $deploy_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_tron** | [**\Tatum\Model\DeployNftTron**](../Model/DeployNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy an NFT smart contract

DeployNftTron operation

### Example

[✨ View "nftDeployNftTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftDeployNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftDeployNftTronKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftDeployNftTronKMS(
    \Tatum\Model\DeployNftTronKMS $deploy_nft_tron_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_tron_kms** | [**\Tatum\Model\DeployNftTronKMS**](../Model/DeployNftTronKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Deploy an NFT smart contract

DeployNftTronKMS operation

### Example

[✨ View "nftDeployNftTronKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftDeployNftTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetBalanceErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetBalanceErc721(
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

[**\Tatum\Model\NftGetBalanceErc721200Response**](../Model/NftGetBalanceErc721200Response.md)

### Description

Get the NFTs from a specific smart contract that a blockchain address holds

<p><b>1 credit per API call</b></p> <p>Get the NFTs minted on a specific smart contract (the <code>contractAddress</code> path parameter in the request endpoint URL) that a blockchain address holds.</p> <p><b>NOTE:</b> This API works only for the NFT smart contracts deployed using the <a href="#operation/NftDeployErc721">Tatum smart contract API</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetBalanceErc721.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetBalanceErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetContractAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetContractAddress(
    string $chain,
    string $hash,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftGetContractAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | The blockchain to work with |
 **$hash** | **string**  | Transaction hash |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftGetContractAddress200Response**](../Model/NftGetContractAddress200Response.md)

### Description

Get the address of an NFT smart contract by its transaction hash

<p><p>This endpoint is deprecated. Do not use it.<br/> Instead, use <a href="https://apidoc.tatum.io/tag/Blockchain-utils#operation/SCGetContractAddress" target="_blank">this API</a>.</b></p><br/> <p><b>1 credit per API call</b></p> <p>Get NFT contract address from deploy transaction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetContractAddress.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetContractAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetMetadataErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetMetadataErc721(
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

[**\Tatum\Model\NftMetadataErc721**](../Model/NftMetadataErc721.md)

### Description

Get NFT metadata

<p><b>1 credit per API call</b></p> <p>Get metadata of an NFT.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetMetadataErc721.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetMetadataErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetProvenanceDataErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetProvenanceDataErc721(
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

[**\Tatum\Model\NftProvenanceDataErc721[]**](../Model/NftProvenanceDataErc721.md)

### Description

Get NFT provenance information

<p><b>1 credit per API call</b></p> <p>Get provenance information for an NFT.</p> <p><b>NOTE:</b> This API works only for <a href="#operation/NftDeployErc721">provenance NFT smart contracts</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

[✨ View "nftGetProvenanceDataErc721.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetProvenanceDataErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetRoyaltyErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetRoyaltyErc721(
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

[**\Tatum\Model\NftRoyaltyErc721**](../Model/NftRoyaltyErc721.md)

### Description

Get NFT royalty information

<p><b>1 credit per API call</b></p> <p>Get information about royalties for an NFT.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetRoyaltyErc721.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetRoyaltyErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTokensByAddressErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTokensByAddressErc721(
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

[**\Tatum\Model\NftTokenByAddressErc721[]**](../Model/NftTokenByAddressErc721.md)

### Description

Get all NFTs that a blockchain address holds

<p><b>1 credit per API call + 5 credits for each owned NFT</b></p> <p>Get all NFTs that a blockchain address holds. The NFTs are returned grouped by the smart contracts they were minted on.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain - mainnet only</li> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> <li>Solana</li> </ul> <p>On Solana and Algorand, if a blockchain address holds fewer than 50 NFTs, the API also returns each NFT's metadata. If the metadata is not returned, you can obtain it using the <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/NftGetMetadataErc721">API for getting NFT metadata</a>.</p>

### Example

[✨ View "nftGetTokensByAddressErc721.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetTokensByAddressErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTokensByCollectionErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTokensByCollectionErc721(
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

[**\Tatum\Model\NftTokenByCollectionErc721[]**](../Model/NftTokenByCollectionErc721.md)

### Description

Get all NFTs from a collection

<p><b>1 credit per API call + 5 credits for each listed NFT</b></p> <p>Get all NFTs from a collection (all the NFTs that were minted on the smart contract).</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

[✨ View "nftGetTokensByCollectionErc721.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetTokensByCollectionErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTransactErc721()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTransactErc721(
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

[**\Tatum\Model\NftGetTransactErc721200Response**](../Model/NftGetTransactErc721200Response.md)

### Description

Get an NFT transaction by its hash

<p><b>1 credit per API call</b></p> <p>Get an NFT transaction by its hash.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetTransactErc721.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetTransactErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTransactionByAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTransactionByAddress(
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

[**\Tatum\Model\NftTx[]**](../Model/NftTx.md)

### Description

Get NFT transactions on a blockchain address

<p><b>1 credit per API call</b></p> <p>Get incoming and outgoing NFT transactions on a blockchain address.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

[✨ View "nftGetTransactionByAddress.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTransactionByToken()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftGetTransactionByToken(
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

[**\Tatum\Model\NftTx[]**](../Model/NftTx.md)

### Description

Get NFT transactions for an NFT

<p><b>1 credit per API call</b></p> <p>Get incoming and outgoing transactions for an NFT.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

[✨ View "nftGetTransactionByToken.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftGetTransactionByToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintAddNftMinter()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintAddNftMinter(
    \Tatum\Model\AddNftMinter $add_nft_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_nft_minter** | [**\Tatum\Model\AddNftMinter**](../Model/AddNftMinter.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Add an NFT minter to an NFT smart contract

<p><b>2 credits per API call</b></p> <p>Allow a blockchain address (the <code>minter</code> parameter in the request body) to mint NFTs on the NFT smart contract (the <code>contractAddress</code> parameter in the request body). </br>Use this API when you are using NFT Express with your own smart contract to mint NFTs and need to add the Tatum NFT minter's address as an NFT minter to your smart contract. For more information about the Tatum NFT minter, see "Use your own smart contract to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b><br/> When adding an NFT minter, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "nftMintAddNftMinter.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintAddNftMinter.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintAddNftMinterKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintAddNftMinterKMS(
    \Tatum\Model\AddNftMinterKMS $add_nft_minter_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_nft_minter_kms** | [**\Tatum\Model\AddNftMinterKMS**](../Model/AddNftMinterKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Add an NFT minter to an NFT smart contract

AddNftMinterKMS operation

### Example

[✨ View "nftMintAddNftMinterKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintAddNftMinterKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNft()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNft(
    \Tatum\Model\MintMultipleNft $mint_multiple_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft** | [**\Tatum\Model\MintMultipleNft**](../Model/MintMultipleNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNft operation

### Example

[✨ View "nftMintBatchMintMultipleNft.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNftCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNftCelo(
    \Tatum\Model\MintMultipleNftCelo $mint_multiple_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_celo** | [**\Tatum\Model\MintMultipleNftCelo**](../Model/MintMultipleNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftCelo operation

### Example

[✨ View "nftMintBatchMintMultipleNftCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNftFlowKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNftFlowKMS(
    \Tatum\Model\MintMultipleNftFlowKMS $mint_multiple_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_flow_kms** | [**\Tatum\Model\MintMultipleNftFlowKMS**](../Model/MintMultipleNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftFlowKMS operation

### Example

[✨ View "nftMintBatchMintMultipleNftFlowKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNftFlowMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNftFlowMnemonic(
    \Tatum\Model\MintMultipleNftFlowMnemonic $mint_multiple_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_flow_mnemonic** | [**\Tatum\Model\MintMultipleNftFlowMnemonic**](../Model/MintMultipleNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftFlowMnemonic operation

### Example

[✨ View "nftMintBatchMintMultipleNftFlowMnemonic.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNftFlowPK()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNftFlowPK(
    \Tatum\Model\MintMultipleNftFlowPK $mint_multiple_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_flow_pk** | [**\Tatum\Model\MintMultipleNftFlowPK**](../Model/MintMultipleNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftFlowPK operation

### Example

[✨ View "nftMintBatchMintMultipleNftFlowPK.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNftKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNftKMS(
    \Tatum\Model\MintMultipleNftKMS $mint_multiple_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_kms** | [**\Tatum\Model\MintMultipleNftKMS**](../Model/MintMultipleNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftKMS operation

### Example

[✨ View "nftMintBatchMintMultipleNftKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNftKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNftKMSCelo(
    \Tatum\Model\MintMultipleNftKMSCelo $mint_multiple_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_kms_celo** | [**\Tatum\Model\MintMultipleNftKMSCelo**](../Model/MintMultipleNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftKMSCelo operation

### Example

[✨ View "nftMintBatchMintMultipleNftKMSCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNftKMSTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNftKMSTron(
    \Tatum\Model\MintMultipleNftKMSTron $mint_multiple_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_kms_tron** | [**\Tatum\Model\MintMultipleNftKMSTron**](../Model/MintMultipleNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftKMSTron operation

### Example

[✨ View "nftMintBatchMintMultipleNftKMSTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNftMinter()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNftMinter(
    \Tatum\Model\MintMultipleNftMinter $mint_multiple_nft_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_minter** | [**\Tatum\Model\MintMultipleNftMinter**](../Model/MintMultipleNftMinter.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

<p><b>100 credits per API call on Flow<br/> 2 credits per API call on the other blockchains</b></p> <p>Create multiple NFT Tokens and transfer them to destination account. Create and transfer any NFT tokens from smart contract defined in contractAddress.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> This operation works in two modes.  First mode works just like other NFT endpoints. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.  Second mode enables you to mint on any custom NFT ERC-721 smart contract, on which specified minter address is approved as a minter. You don't specify private key or signatureId, only minter address, from which the NFT will be minted.<br/> It means you perform mint multiple NFT request with following body: <pre>{    "to": ["0x80d8bac9a6901698b3749fe336bbd1385c1f98f2"],    "url": ["ipfs://QmXJJ6UF5WkF4WTJvsdhiA1etGwBLfpva7Vr9AudGMe3pj"],    "tokenId": ["9876541124516"],    "contractAddress":"0xcd2ada00c48a27faa5cc67f9a1ed55b89ddf7f77",    "minter": "0x542b9ac4945a3836fd12ad98acbc76a0c8b743f5",    "chain": "MATIC" }</pre> The blockchain fee of the performed transaction is paid from the address connected with built-in private key and is debited in form of credits. The credits are debited only if NFT mint requests are performed with paid API key plan. We transform fee to the credits in accordance to the rates provided by the Tatum. If you want to batch mint on ERC-721 contract which is not deployed via Tatum API, your smart contract must contain this method: <pre>mintMultiple(address[] to, uint256[] tokenId, string[] uri): boolean</pre> You can use addresses specified in the bellow table to be used as a minter. <table>   <tr>     <th>Chain</th>     <th>Testnet address</th>     <th>Mainnet Address</th>   </tr>   <tr>     <td>MATIC</td>     <td>0x542b9ac4945a3836fd12ad98acbc76a0c8b743f5</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>BSC</td>     <td>0xc16ae5e8c985b906935a0cadf4e24f0400531883</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>ONE</td>     <td>0x8906f62d40293ddca77fdf6714c3f63265deddf0</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>ETH</td>     <td>0x53e8577C4347C365E4e0DA5B57A589cB6f2AB848</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>CELO</td>     <td>0xBC2eBA680EE50d685cc4Fe65f102AA70AfB27D3F</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>KLAY</td>     <td>0x80d8bac9a6901698b3749fe336bbd1385c1f98f2</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr> </table> If there are not enough coins on any testnet address, feel free to send coins there.</p>

### Example

[✨ View "nftMintBatchMintMultipleNftMinter.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNftMinter.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintBatchMintMultipleNftTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintBatchMintMultipleNftTron(
    \Tatum\Model\MintMultipleNftTron $mint_multiple_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintBatchMintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_tron** | [**\Tatum\Model\MintMultipleNftTron**](../Model/MintMultipleNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintBatchMintMultipleNftMinter200Response**](../Model/NftMintBatchMintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftTron operation

### Example

[✨ View "nftMintBatchMintMultipleNftTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintBatchMintMultipleNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNft()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNft(
    \Tatum\Model\MintNft $mint_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft** | [**\Tatum\Model\MintNft**](../Model/MintNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNft</code> schema lets you mint NFTs natively on BNB Smart Chain, Ethereum, Harmony, Klaytn, KuCoin Community Chain, and Polygon and sign the transaction with your private key.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNft.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftAlgorand()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftAlgorand(
    \Tatum\Model\MintNftAlgorand $mint_nft_algorand,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_algorand** | [**\Tatum\Model\MintNftAlgorand**](../Model/MintNftAlgorand.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftAlgorand</code> schema lets you mint NFTs natively on Algorand and sign the transaction with your private key.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftAlgorand.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftAlgorand.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftAlgorandKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftAlgorandKMS(
    \Tatum\Model\MintNftAlgorandKMS $mint_nft_algorand_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_algorand_kms** | [**\Tatum\Model\MintNftAlgorandKMS**](../Model/MintNftAlgorandKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftAlgorandKMS</code> schema lets you mint NFTs natively on Algorand and sign the transaction with your signature ID.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftAlgorandKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftAlgorandKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftCelo(
    \Tatum\Model\MintNftCelo $mint_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_celo** | [**\Tatum\Model\MintNftCelo**](../Model/MintNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftCelo</code> schema lets you mint NFTs natively on Celo and sign the transaction with your private key.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftExpress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftExpress(
    \Tatum\Model\MintNftExpress $mint_nft_express,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_express** | [**\Tatum\Model\MintNftExpress**](../Model/MintNftExpress.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftExpress</code> schema lets you mint NFTs on BNB Smart Chain, Celo, Ethereum, Harmony, Klaytn, and Polygon using <b>NTF Express</b> with the pre-built smart contract provided by Tatum.<br/>For more information, see "Use the pre-built smart contract provided by Tatum to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftExpress.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftExpress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftExpressAlgorand()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftExpressAlgorand(
    \Tatum\Model\MintNftExpressAlgorand $mint_nft_express_algorand,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_express_algorand** | [**\Tatum\Model\MintNftExpressAlgorand**](../Model/MintNftExpressAlgorand.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftExpressAlgorand</code> schema lets you mint NFTs on Algorand using <b>NTF Express</b> with the pre-built smart contract provided by Tatum.<br/>For more information, see "Use the pre-built smart contract provided by Tatum to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftExpressAlgorand.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftExpressAlgorand.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftExpressSolana()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftExpressSolana(
    \Tatum\Model\MintNftExpressSolana $mint_nft_express_solana,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_express_solana** | [**\Tatum\Model\MintNftExpressSolana**](../Model/MintNftExpressSolana.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftExpressSolana</code> schema lets you mint NFTs on Solana using <b>NTF Express</b> with the pre-built smart contract provided by Tatum.<br/>For more information, see "Use the pre-built smart contract provided by Tatum to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftExpressSolana.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftExpressSolana.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftFlowKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftFlowKMS(
    \Tatum\Model\MintNftFlowKMS $mint_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_flow_kms** | [**\Tatum\Model\MintNftFlowKMS**](../Model/MintNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftFlowKMS</code> schema lets you mint NFTs natively on Flow and sign the transaction with your signature ID.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftFlowKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftFlowMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftFlowMnemonic(
    \Tatum\Model\MintNftFlowMnemonic $mint_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_flow_mnemonic** | [**\Tatum\Model\MintNftFlowMnemonic**](../Model/MintNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftFlowMnemonic</code> schema lets you mint NFTs natively on Flow and sign the transaction with your wallet mnemonic.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftFlowMnemonic.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftFlowPK()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftFlowPK(
    \Tatum\Model\MintNftFlowPK $mint_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_flow_pk** | [**\Tatum\Model\MintNftFlowPK**](../Model/MintNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftFlowPK</code> schema lets you mint NFTs natively on Flow and sign the transaction with your private key.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftFlowPK.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftKMS(
    \Tatum\Model\MintNftKMS $mint_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_kms** | [**\Tatum\Model\MintNftKMS**](../Model/MintNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftKMS</code> schema lets you mint NFTs natively on BNB Smart Chain, Ethereum, Harmony, Klaytn, KuCoin Community Chain, and Polygon and sign the transaction with your signature ID.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftKMSCelo(
    \Tatum\Model\MintNftKMSCelo $mint_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_kms_celo** | [**\Tatum\Model\MintNftKMSCelo**](../Model/MintNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftKMSCelo</code> schema lets you mint NFTs natively on Celo and sign the transaction with your signature ID.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftKMSCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftKMSTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftKMSTron(
    \Tatum\Model\MintNftKMSTron $mint_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_kms_tron** | [**\Tatum\Model\MintNftKMSTron**](../Model/MintNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftKMSTron</code> schema lets you mint NFTs natively on TRON and sign the transaction with your signature ID.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftKMSTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftMinter()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftMinter(
    \Tatum\Model\MintNftMinter $mint_nft_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_minter** | [**\Tatum\Model\MintNftMinter**](../Model/MintNftMinter.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftMinter</code> schema lets you mint NFTs on BNB Smart Chain, Celo, Ethereum, Harmony, Klaytn, and Polygon using the <b>NTF minter</b>, a special blockchain address provided by Tatum that will cover the minting fees.<br/>For more information, see "Use your own smart contract to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftMinter.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftMinter.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftSolana()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftSolana(
    \Tatum\Model\MintNftSolana $mint_nft_solana,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_solana** | [**\Tatum\Model\MintNftSolana**](../Model/MintNftSolana.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftSolana</code> schema lets you mint NFTs natively on Solana and sign the transaction with your private key.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftSolana.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftSolana.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftSolanaKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftSolanaKMS(
    \Tatum\Model\MintNftSolanaKMS $mint_nft_solana_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_solana_kms** | [**\Tatum\Model\MintNftSolanaKMS**](../Model/MintNftSolanaKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftSolanaKMS</code> schema lets you mint NFTs natively on Solana and sign the transaction with your signature ID.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftSolanaKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftSolanaKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftMintNftTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftMintNftTron(
    \Tatum\Model\MintNftTron $mint_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\NftMintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_tron** | [**\Tatum\Model\MintNftTron**](../Model/MintNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\NftMintNftExpress200Response**](../Model/NftMintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftTron</code> schema lets you mint NFTs natively on TRON and sign the transaction with your private key.<br/>For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p><br/>

### Example

[✨ View "nftMintNftTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftMintNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftRoyaltyUpdateCashbackValueForAuthorNft()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftRoyaltyUpdateCashbackValueForAuthorNft(
    \Tatum\Model\UpdateCashbackValueForAuthorNft $update_cashback_value_for_author_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft** | [**\Tatum\Model\UpdateCashbackValueForAuthorNft**](../Model/UpdateCashbackValueForAuthorNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update NFT royalty information

<p><b>2 credits per API call</b></p> <p>Update the value of the royalty cashback set for an NFT.</p> <p>The royalty cashback value can be updated only from the address of the NFT author (the address that is listed as a royalty cashback receiver in the NFT royalty information). The royalty cashback value cannot be updated from the address of the NFT owner.<br/> In one API call, you can update the first value of the royalty cashback for the NFT author for one NFT.</p> <p>To disable the royalties for the NFT completely, set it to 0.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>Signing a transaction</b><br/> When updating NFT royalty, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "nftRoyaltyUpdateCashbackValueForAuthorNft.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftRoyaltyUpdateCashbackValueForAuthorNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftRoyaltyUpdateCashbackValueForAuthorNftCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftRoyaltyUpdateCashbackValueForAuthorNftCelo(
    \Tatum\Model\UpdateCashbackValueForAuthorNftCelo $update_cashback_value_for_author_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_celo** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftCelo**](../Model/UpdateCashbackValueForAuthorNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftCelo operation

### Example

[✨ View "nftRoyaltyUpdateCashbackValueForAuthorNftCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftRoyaltyUpdateCashbackValueForAuthorNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftRoyaltyUpdateCashbackValueForAuthorNftKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftRoyaltyUpdateCashbackValueForAuthorNftKMS(
    \Tatum\Model\UpdateCashbackValueForAuthorNftKMS $update_cashback_value_for_author_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_kms** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftKMS**](../Model/UpdateCashbackValueForAuthorNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftKMS operation

### Example

[✨ View "nftRoyaltyUpdateCashbackValueForAuthorNftKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftRoyaltyUpdateCashbackValueForAuthorNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftRoyaltyUpdateCashbackValueForAuthorNftKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftRoyaltyUpdateCashbackValueForAuthorNftKMSCelo(
    \Tatum\Model\UpdateCashbackValueForAuthorNftKMSCelo $update_cashback_value_for_author_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_kms_celo** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftKMSCelo**](../Model/UpdateCashbackValueForAuthorNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftKMSCelo operation

### Example

[✨ View "nftRoyaltyUpdateCashbackValueForAuthorNftKMSCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftRoyaltyUpdateCashbackValueForAuthorNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftRoyaltyUpdateCashbackValueForAuthorNftKMSTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftRoyaltyUpdateCashbackValueForAuthorNftKMSTron(
    \Tatum\Model\UpdateCashbackValueForAuthorNftKMSTron $update_cashback_value_for_author_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_kms_tron** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftKMSTron**](../Model/UpdateCashbackValueForAuthorNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftKMSTron operation

### Example

[✨ View "nftRoyaltyUpdateCashbackValueForAuthorNftKMSTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftRoyaltyUpdateCashbackValueForAuthorNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftRoyaltyUpdateCashbackValueForAuthorNftTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftRoyaltyUpdateCashbackValueForAuthorNftTron(
    \Tatum\Model\UpdateCashbackValueForAuthorNftTron $update_cashback_value_for_author_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_tron** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftTron**](../Model/UpdateCashbackValueForAuthorNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftTron operation

### Example

[✨ View "nftRoyaltyUpdateCashbackValueForAuthorNftTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftRoyaltyUpdateCashbackValueForAuthorNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNft()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNft(
    \Tatum\Model\TransferNft $transfer_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft** | [**\Tatum\Model\TransferNft**](../Model/TransferNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

<p><b>100 credits per API call on Flow<br/> 2 credits per API call on the other blockchains</b></p> <p>Transfer an NFT from the smart contract (the <code>contractAddress</code> parameter in the request body) to the specified blockchain address (the <code>to</code> parameter in the request body).</p> <p>In one API call, you can transfer only one NFT.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul> <p>For Ethereum, Celo, and BNB Smart Chain, transferring NFTs invokes the <code>safeTransfer()</code> method.</p> <p><b>Transferring NFTs on Algorand</b></p> <ul> <li>On Algorand, the recipient has to agree in advance to receive your NFT because Algorand charges users for storing NFTs on their addresses, and an Algorand blockchain address by default does not receive NFTs unless explicitly agreed. Before transferring an NFT, make sure that the recipient <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset" target="_blank">has agreed to receive the NFT</a> to their address.</li> <li>If you want to transfer an NFT that <a href="#operation/NftMintErc721">was minted using NFT Express</a>, use the <code>transferNftAlgoExpress</code> schema of the request body.<br /><b>NOTE:</b> On the <b>mainnet</b>, Tatum covers your transaction fees for the NFT transfer and pays for them from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. On the <b>testnet</b>, no credits are deducted from the monthly credit allowance.</li> </ul> <p><b>Transferring NFTs on Solana</b><br/> If you want to transfer an NFT that <a href="#operation/NftMintErc721">was minted using NFT Express</a>, use the <code>transferNftSolana</code> or <code>transferNftSolanaKMS</code> schema of the request body. In the request body: <ul> <li>Set the <code>from</code> parameter to the address that you used in the <code>to</code> parameter in the request body of the minting call.</li> <li>Set the <code>to</code> parameter to the recipient's address.</li> <li>Set the <code>contractAddress</code> parameter to the address from the <code>nftAddress</code> parameter returned in the response body of the minting call.</li> <li>Set the <code>fromPrivateKey</code>/<code>signatureId</code> parameter to the private key/signature ID of the blockchain address that you specified in the <code>from</code> parameter.</li> </ul> <p><b>Signing a transaction</b><br/> When transferring an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p> <p><b>NOTE:</b> This does not apply to transferring NFTs that were minted on Algorand using NFT Express (see earlier in this section).</p>

### Example

[✨ View "nftTransactionTransferNft.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftAlgo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftAlgo(
    \Tatum\Model\TransferNftAlgo $transfer_nft_algo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_algo** | [**\Tatum\Model\TransferNftAlgo**](../Model/TransferNftAlgo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftAlgo operation

### Example

[✨ View "nftTransactionTransferNftAlgo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftAlgo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftAlgoExpress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftAlgoExpress(
    \Tatum\Model\TransferNftAlgoExpress $transfer_nft_algo_express,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_algo_express** | [**\Tatum\Model\TransferNftAlgoExpress**](../Model/TransferNftAlgoExpress.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftAlgoExpress operation

### Example

[✨ View "nftTransactionTransferNftAlgoExpress.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftAlgoExpress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftAlgoKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftAlgoKMS(
    \Tatum\Model\TransferNftAlgoKMS $transfer_nft_algo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_algo_kms** | [**\Tatum\Model\TransferNftAlgoKMS**](../Model/TransferNftAlgoKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftAlgoKMS operation

### Example

[✨ View "nftTransactionTransferNftAlgoKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftAlgoKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftCelo(
    \Tatum\Model\TransferNftCelo $transfer_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_celo** | [**\Tatum\Model\TransferNftCelo**](../Model/TransferNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftCelo operation

### Example

[✨ View "nftTransactionTransferNftCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftFlowKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftFlowKMS(
    \Tatum\Model\TransferNftFlowKMS $transfer_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_flow_kms** | [**\Tatum\Model\TransferNftFlowKMS**](../Model/TransferNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftFlowKMS operation

### Example

[✨ View "nftTransactionTransferNftFlowKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftFlowMnemonic()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftFlowMnemonic(
    \Tatum\Model\TransferNftFlowMnemonic $transfer_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_flow_mnemonic** | [**\Tatum\Model\TransferNftFlowMnemonic**](../Model/TransferNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftFlowMnemonic operation

### Example

[✨ View "nftTransactionTransferNftFlowMnemonic.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftFlowPK()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftFlowPK(
    \Tatum\Model\TransferNftFlowPK $transfer_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_flow_pk** | [**\Tatum\Model\TransferNftFlowPK**](../Model/TransferNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftFlowPK operation

### Example

[✨ View "nftTransactionTransferNftFlowPK.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftKMS(
    \Tatum\Model\TransferNftKMS $transfer_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_kms** | [**\Tatum\Model\TransferNftKMS**](../Model/TransferNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftKMS operation

### Example

[✨ View "nftTransactionTransferNftKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftKMSCelo()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftKMSCelo(
    \Tatum\Model\TransferNftKMSCelo $transfer_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_kms_celo** | [**\Tatum\Model\TransferNftKMSCelo**](../Model/TransferNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftKMSCelo operation

### Example

[✨ View "nftTransactionTransferNftKMSCelo.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftKMSTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftKMSTron(
    \Tatum\Model\TransferNftKMSTron $transfer_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_kms_tron** | [**\Tatum\Model\TransferNftKMSTron**](../Model/TransferNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftKMSTron operation

### Example

[✨ View "nftTransactionTransferNftKMSTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftSolana()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftSolana(
    \Tatum\Model\TransferNftSolana $transfer_nft_solana,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_solana** | [**\Tatum\Model\TransferNftSolana**](../Model/TransferNftSolana.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftSolana operation

### Example

[✨ View "nftTransactionTransferNftSolana.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftSolana.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftSolanaKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftSolanaKMS(
    \Tatum\Model\TransferNftSolanaKMS $transfer_nft_solana_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_solana_kms** | [**\Tatum\Model\TransferNftSolanaKMS**](../Model/TransferNftSolanaKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftSolanaKMS operation

### Example

[✨ View "nftTransactionTransferNftSolanaKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftSolanaKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftTransactionTransferNftTron()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftTransactionTransferNftTron(
    \Tatum\Model\TransferNftTron $transfer_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_tron** | [**\Tatum\Model\TransferNftTron**](../Model/TransferNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Transfer an NFT

TransferNftTron operation

### Example

[✨ View "nftTransactionTransferNftTron.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftTransactionTransferNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftVerifySolanaNFT()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftVerifySolanaNFT(
    \Tatum\Model\VerifySolanaNFT $verify_solana_nft
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$verify_solana_nft** | [**\Tatum\Model\VerifySolanaNFT**](../Model/VerifySolanaNFT.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Verify an NFT in an NFT collection on Solana

<p><b>2 credits per API call</b></p> <p>Verify an NFT in an NFT collection on Solana. Verifying an NFT sets the <code>Verified</code> parameter to <code>true</code> for the NFT, which means that the NFT is really a part of the collection. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>.</p> <p>The collection must be a sized collection that was introduced in <a href="https://docs.metaplex.com/programs/token-metadata/changelog/v1.3" target="_blank">Version 1.3</a> of the Metaplex Token Metadata program. The NFT must have been <a href="#operation/NftMintErc721">minted in this collection</a>.</p> <p>This API is supported only for Solana.</p> <p><b>Signing a transaction</b><br/> When verifying an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

[✨ View "nftVerifySolanaNFT.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftVerifySolanaNFT.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftVerifySolanaNFTKMS()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->nftVerifySolanaNFTKMS(
    \Tatum\Model\VerifySolanaNFTKMS $verify_solana_nftkms
): \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$verify_solana_nftkms** | [**\Tatum\Model\VerifySolanaNFTKMS**](../Model/VerifySolanaNFTKMS.md) |  |

### Return type

[**\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response**](../Model/BitcoinTransactionBtcTransactionFromAddress200Response.md)

### Description

Verify an NFT in an NFT collection on Solana

VerifySolanaNFTKMS operation

### Example

[✨ View "nftVerifySolanaNFTKMS.php"](../../examples/Api/NFTERC721OrCompatibleApi/nftVerifySolanaNFTKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
