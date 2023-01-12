# Tatum/Api/NFTERC721OrCompatibleApi

## References

[NFT (ERC-721 or compatible) API documentation](https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/)

## Methods

HTTP requests are relative to https://api.tatum.io

[🔹 **addNftMinter()**](#addnftminter) 

> Add a blockchain address as an NFT minter to an NFT smart contract
> 
> **POST** `/v3/nft/mint/add`

[🔹 **addNftMinterKMS()**](#addnftminterkms) 

> Add a blockchain address as an NFT minter to an NFT smart contract
> 
> **POST** `/v3/nft/mint/add`

[🔹 **burnNft()**](#burnnft) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftAlgo()**](#burnnftalgo) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftCelo()**](#burnnftcelo) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftFlowKMS()**](#burnnftflowkms) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftFlowMnemonic()**](#burnnftflowmnemonic) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftFlowPK()**](#burnnftflowpk) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftKMS()**](#burnnftkms) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftKMSCelo()**](#burnnftkmscelo) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftKMSTron()**](#burnnftkmstron) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **burnNftTron()**](#burnnfttron) 

> Burn an NFT
> 
> **POST** `/v3/nft/burn`

[🔹 **deployNft()**](#deploynft) 

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftCelo()**](#deploynftcelo) 

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftCeloKMS()**](#deploynftcelokms) 

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftFlowKMS()**](#deploynftflowkms) 

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftFlowMnemonic()**](#deploynftflowmnemonic) 

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftFlowPK()**](#deploynftflowpk) 

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftKMS()**](#deploynftkms) 

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftTron()**](#deploynfttron) 

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **deployNftTronKMS()**](#deploynfttronkms) 

> Deploy an NFT smart contract
> 
> **POST** `/v3/nft/deploy`

[🔹 **mintMultipleNft()**](#mintmultiplenft) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftCelo()**](#mintmultiplenftcelo) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftFlowKMS()**](#mintmultiplenftflowkms) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftFlowMnemonic()**](#mintmultiplenftflowmnemonic) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftFlowPK()**](#mintmultiplenftflowpk) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftKMS()**](#mintmultiplenftkms) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftKMSCelo()**](#mintmultiplenftkmscelo) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftKMSTron()**](#mintmultiplenftkmstron) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftMinter()**](#mintmultiplenftminter) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintMultipleNftTron()**](#mintmultiplenfttron) 

> Mint multiple NFTs
> 
> **POST** `/v3/nft/mint/batch`

[🔹 **mintNft()**](#mintnft) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftAlgorand()**](#mintnftalgorand) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftAlgorandKMS()**](#mintnftalgorandkms) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftCelo()**](#mintnftcelo) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftExpress()**](#mintnftexpress) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftExpressAlgorand()**](#mintnftexpressalgorand) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftExpressSolana()**](#mintnftexpresssolana) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftFlowKMS()**](#mintnftflowkms) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftFlowMnemonic()**](#mintnftflowmnemonic) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftFlowPK()**](#mintnftflowpk) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftKMS()**](#mintnftkms) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftKMSCelo()**](#mintnftkmscelo) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftKMSTron()**](#mintnftkmstron) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftMinter()**](#mintnftminter) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftSolana()**](#mintnftsolana) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftSolanaKMS()**](#mintnftsolanakms) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **mintNftTron()**](#mintnfttron) 

> Mint an NFT
> 
> **POST** `/v3/nft/mint`

[🔹 **nftGetBalanceErc721()**](#nftgetbalanceerc721) 

> Get the NFTs from a specific smart contract that a blockchain address holds
> 
> **GET** `/v3/nft/balance/{chain}/{contractAddress}/{address}`

[🔹 **nftGetContractAddress()**](#nftgetcontractaddress) 

> Get the address of an NFT smart contract by its transaction hash
> 
> **GET** `/v3/nft/address/{chain}/{hash}`

[🔹 **nftGetMetadataErc721()**](#nftgetmetadataerc721) 

> Get NFT metadata
> 
> **GET** `/v3/nft/metadata/{chain}/{contractAddress}/{tokenId}`

[🔹 **nftGetProvenanceDataErc721()**](#nftgetprovenancedataerc721) 

> Get NFT provenance information
> 
> **GET** `/v3/nft/provenance/{chain}/{contractAddress}/{tokenId}`

[🔹 **nftGetRoyaltyErc721()**](#nftgetroyaltyerc721) 

> Get NFT royalty information
> 
> **GET** `/v3/nft/royalty/{chain}/{contractAddress}/{tokenId}`

[🔹 **nftGetTokensByAddressErc721()**](#nftgettokensbyaddresserc721) 

> Get all NFTs that a blockchain address holds
> 
> **GET** `/v3/nft/address/balance/{chain}/{address}`

[🔹 **nftGetTokensByCollectionErc721()**](#nftgettokensbycollectionerc721) 

> Get all NFTs from a collection
> 
> **GET** `/v3/nft/collection/{chain}/{address}`

[🔹 **nftGetTransactErc721()**](#nftgettransacterc721) 

> Get an NFT transaction by its hash
> 
> **GET** `/v3/nft/transaction/{chain}/{hash}`

[🔹 **nftGetTransactionByAddress()**](#nftgettransactionbyaddress) 

> Get NFT transactions on a blockchain address
> 
> **GET** `/v3/nft/transaction/{chain}/{address}/{tokenAddress}`

[🔹 **nftGetTransactionByToken()**](#nftgettransactionbytoken) 

> Get NFT transactions for an NFT
> 
> **GET** `/v3/nft/transaction/tokenId/{chain}/{tokenAddress}/{tokenId}`

[🔹 **transferNft()**](#transfernft) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftAlgo()**](#transfernftalgo) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftAlgoExpress()**](#transfernftalgoexpress) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftAlgoKMS()**](#transfernftalgokms) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftCelo()**](#transfernftcelo) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftFlowKMS()**](#transfernftflowkms) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftFlowMnemonic()**](#transfernftflowmnemonic) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftFlowPK()**](#transfernftflowpk) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftKMS()**](#transfernftkms) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftKMSCelo()**](#transfernftkmscelo) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftKMSTron()**](#transfernftkmstron) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftSolana()**](#transfernftsolana) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftSolanaKMS()**](#transfernftsolanakms) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **transferNftTron()**](#transfernfttron) 

> Transfer an NFT
> 
> **POST** `/v3/nft/transaction`

[🔹 **updateCashbackValueForAuthorNft()**](#updatecashbackvalueforauthornft) 

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftCelo()**](#updatecashbackvalueforauthornftcelo) 

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftKMS()**](#updatecashbackvalueforauthornftkms) 

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftKMSCelo()**](#updatecashbackvalueforauthornftkmscelo) 

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftKMSTron()**](#updatecashbackvalueforauthornftkmstron) 

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **updateCashbackValueForAuthorNftTron()**](#updatecashbackvalueforauthornfttron) 

> Update NFT royalty information
> 
> **PUT** `/v3/nft/royalty`

[🔹 **verifySolanaNFT()**](#verifysolananft) 

> Verify an NFT in an NFT collection on Solana
> 
> **POST** `/v3/nft/verify`

[🔹 **verifySolanaNFTKMS()**](#verifysolananftkms) 

> Verify an NFT in an NFT collection on Solana
> 
> **POST** `/v3/nft/verify`



## `addNftMinter()`

> **POST** `/v3/nft/mint/add`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->addNftMinter(
    \Tatum\Model\AddNftMinter $add_nft_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_nft_minter** | [**\Tatum\Model\AddNftMinter**](../Model/AddNftMinter.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Add a blockchain address as an NFT minter to an NFT smart contract

<p><b>2 credits per API call</b></p>
 <p>Allow a blockchain address (the <code>minter</code> parameter in the request body) to mint NFTs on your NFT smart contract (the <code>contractAddress</code> parameter in the request body).</p>
 <p><b>NOTE:</b> Use this API <b>only</b> when you are using NFT Express with your own smart contract. For more information, see "Use your own smart contract to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.
 Do not use this API in any other case.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul> <p><b>Signing a transaction</b>
 When allowing a blockchain address to mint NFTs, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "addNftMinter.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/addNftMinter.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `addNftMinterKMS()`

> **POST** `/v3/nft/mint/add`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->addNftMinterKMS(
    \Tatum\Model\AddNftMinterKMS $add_nft_minter_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$add_nft_minter_kms** | [**\Tatum\Model\AddNftMinterKMS**](../Model/AddNftMinterKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Add a blockchain address as an NFT minter to an NFT smart contract

AddNftMinterKMS operation

### Example

[✨ View "addNftMinterKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/addNftMinterKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNft()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNft(
    \Tatum\Model\BurnNft $burn_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft** | [**\Tatum\Model\BurnNft**](../Model/BurnNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

<p><b>100 credits per API call on Flow
 2 credits per API call on the other blockchains</b></p>
 <p>Destroy an NFT. Burning the NFT transfers it to an un-spendable blockchain address that no one can access.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>Burning NFTs on Algorand</b>
 You can burn only the NFTs that were minted with the address of the manager account specified in the <code>manager</code> parameter in the <a href="#operation/NftMintErc721">minting call</a> (see the <code>MintNftExpressAlgorand</code>, <code>MintNftAlgorand</code>, and <code>MintNftAlgorandKMS</code> schemas of the request body).</p>
 <p><b>Signing a transaction</b>
 When burning an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "burnNft.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNftAlgo()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftAlgo(
    \Tatum\Model\BurnNftAlgo $burn_nft_algo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_algo** | [**\Tatum\Model\BurnNftAlgo**](../Model/BurnNftAlgo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

BurnNftAlgo operation

### Example

[✨ View "burnNftAlgo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftAlgo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNftCelo()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftCelo(
    \Tatum\Model\BurnNftCelo $burn_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_celo** | [**\Tatum\Model\BurnNftCelo**](../Model/BurnNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

BurnNftCelo operation

### Example

[✨ View "burnNftCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNftFlowKMS()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftFlowKMS(
    \Tatum\Model\BurnNftFlowKMS $burn_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_flow_kms** | [**\Tatum\Model\BurnNftFlowKMS**](../Model/BurnNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

BurnNftFlowKMS operation

### Example

[✨ View "burnNftFlowKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNftFlowMnemonic()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftFlowMnemonic(
    \Tatum\Model\BurnNftFlowMnemonic $burn_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_flow_mnemonic** | [**\Tatum\Model\BurnNftFlowMnemonic**](../Model/BurnNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

BurnNftFlowMnemonic operation

### Example

[✨ View "burnNftFlowMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNftFlowPK()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftFlowPK(
    \Tatum\Model\BurnNftFlowPK $burn_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_flow_pk** | [**\Tatum\Model\BurnNftFlowPK**](../Model/BurnNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

BurnNftFlowPK operation

### Example

[✨ View "burnNftFlowPK.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNftKMS()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftKMS(
    \Tatum\Model\BurnNftKMS $burn_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_kms** | [**\Tatum\Model\BurnNftKMS**](../Model/BurnNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

BurnNftKMS operation

### Example

[✨ View "burnNftKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNftKMSCelo()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftKMSCelo(
    \Tatum\Model\BurnNftKMSCelo $burn_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_kms_celo** | [**\Tatum\Model\BurnNftKMSCelo**](../Model/BurnNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

BurnNftKMSCelo operation

### Example

[✨ View "burnNftKMSCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNftKMSTron()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftKMSTron(
    \Tatum\Model\BurnNftKMSTron $burn_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_kms_tron** | [**\Tatum\Model\BurnNftKMSTron**](../Model/BurnNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

BurnNftKMSTron operation

### Example

[✨ View "burnNftKMSTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `burnNftTron()`

> **POST** `/v3/nft/burn`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->burnNftTron(
    \Tatum\Model\BurnNftTron $burn_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$burn_nft_tron** | [**\Tatum\Model\BurnNftTron**](../Model/BurnNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Burn an NFT

BurnNftTron operation

### Example

[✨ View "burnNftTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/burnNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployNft()`

> **POST** `/v3/nft/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNft(
    \Tatum\Model\DeployNft $deploy_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft** | [**\Tatum\Model\DeployNft**](../Model/DeployNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy an NFT smart contract

<p><b>100 credits per API call on Flow
 2 credits per API call on the other blockchains</b></p>
 <p>Deploy an NFT smart contract on the blockchain. In a deployed NFT smart contract, you can mint NFTs (one NFT at a time or multiple NFTs at once), burn, and transfer NFTs.</p>
 <p>Smart contracts are standardized and audited. You can review the code of a deployed NFT smart contract <a href="https://github.com/tatumio/flow-contracts" target="_blank">here</a> (if the contract is deployed on Flow) or <a href="https://github.com/tatumio/smart-contracts/tree/master/contracts/tatum" target="_blank">here</a> (if the contract is deployed on any other supported blockchain).</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>General NFT smart contracts</b>
 By default, an NFT smart contract is deployed as a <b>general NFT smart contract compatible with OpenSea royalties</b>. This is a standard NFT contract with <code>AccessControl</code> and <code>Ownable</code>, enhanced with NFT batch minting. NFTs minted on this smart contract are compatible with OpenSea and its royalty structure.<p> <p><b>Cashback and provenance NFT smart contracts</b>
 In addition to the general NFT contract, you can deploy the following types of NFT smart contracts for the supported blockchains <b>except for Flow and TRON</b>:<p> <ul> <li><b>Cashback NFT smart contract</b> is an NFT smart contract that forces on-chain royalties to be paid every time an NFT is transferred, and the royalties are defined as a <b>fixed value</b>. The royalties are <b>not</b> OpenSea-compatible.
 To deploy an NFT smart contract as a cashback contract, deploy the contract with the <code>cashback</code> parameter set to <code>true</code> in the request body.</li> <li><b>Provenance NFT smart contract</b> is an NFT smart contract that forces on-chain royalties to be paid every time an NFT is transferred, and the royalties are defined as a <b>percentage of the NFT price</b>. The royalties are <b>not</b> OpenSea-compatible.
 To deploy an NFT smart contract as a provenance contract, deploy the contract with the <code>provenance</code> parameter set to <code>true</code> in the request body.</li> </ul> <p>You can enable <b>public minting</b> for cashback and provenance smart contracts. By default, public minting is disabled, which means that only the blockchain address whose private key was used to create the smart contract or the blockchain addresses <a href="#operation/NftAddMinter">added to the smart contract as NFT minters</a> will be able to mint NFTs for the contract. To enable public minting and allow anyone to mint NFTs on top of the smart contract, deploy the contract with the <code>publicMint</code> parameter set to <code>true</code> in the request body.</p>
 <p><b>NFT smart contracts and NFT Express</b>
 If you want to use NFT Express to mint NFTs on the deployed smart contract, deploy the smart contract as a general NFT smart contract (that is, deploy the contract with the <code>cashback</code>, <code>provenance</code>, and <code>publicMint</code> parameters either set to <code>false</code> or not set at all in the request body).
 After you have deployed the NFT smart contract, <a href="#operation/NftAddMinter">add the Tatum minter address as an NFT minter to your smart contract</a>.</p>
 <p>For the complete information about using NFT Express on your smart contract, see "Use your own smart contract to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>
 <p><b>Signing a transaction</b>
 When deploying an NFT smart contract, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "deployNft.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployNftCelo()`

> **POST** `/v3/nft/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftCelo(
    \Tatum\Model\DeployNftCelo $deploy_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_celo** | [**\Tatum\Model\DeployNftCelo**](../Model/DeployNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy an NFT smart contract

DeployNftCelo operation

### Example

[✨ View "deployNftCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployNftCeloKMS()`

> **POST** `/v3/nft/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftCeloKMS(
    \Tatum\Model\DeployNftCeloKMS $deploy_nft_celo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_celo_kms** | [**\Tatum\Model\DeployNftCeloKMS**](../Model/DeployNftCeloKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy an NFT smart contract

DeployNftCeloKMS operation

### Example

[✨ View "deployNftCeloKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftCeloKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployNftFlowKMS()`

> **POST** `/v3/nft/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftFlowKMS(
    \Tatum\Model\DeployNftFlowKMS $deploy_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_flow_kms** | [**\Tatum\Model\DeployNftFlowKMS**](../Model/DeployNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy an NFT smart contract

DeployNftFlowKMS operation

### Example

[✨ View "deployNftFlowKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployNftFlowMnemonic()`

> **POST** `/v3/nft/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftFlowMnemonic(
    \Tatum\Model\DeployNftFlowMnemonic $deploy_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_flow_mnemonic** | [**\Tatum\Model\DeployNftFlowMnemonic**](../Model/DeployNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy an NFT smart contract

DeployNftFlowMnemonic operation

### Example

[✨ View "deployNftFlowMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployNftFlowPK()`

> **POST** `/v3/nft/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftFlowPK(
    \Tatum\Model\DeployNftFlowPK $deploy_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_flow_pk** | [**\Tatum\Model\DeployNftFlowPK**](../Model/DeployNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy an NFT smart contract

DeployNftFlowPK operation

### Example

[✨ View "deployNftFlowPK.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployNftKMS()`

> **POST** `/v3/nft/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftKMS(
    \Tatum\Model\DeployNftKMS $deploy_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_kms** | [**\Tatum\Model\DeployNftKMS**](../Model/DeployNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy an NFT smart contract

DeployNftKMS operation

### Example

[✨ View "deployNftKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployNftTron()`

> **POST** `/v3/nft/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftTron(
    \Tatum\Model\DeployNftTron $deploy_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_tron** | [**\Tatum\Model\DeployNftTron**](../Model/DeployNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy an NFT smart contract

DeployNftTron operation

### Example

[✨ View "deployNftTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deployNftTronKMS()`

> **POST** `/v3/nft/deploy`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->deployNftTronKMS(
    \Tatum\Model\DeployNftTronKMS $deploy_nft_tron_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$deploy_nft_tron_kms** | [**\Tatum\Model\DeployNftTronKMS**](../Model/DeployNftTronKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Deploy an NFT smart contract

DeployNftTronKMS operation

### Example

[✨ View "deployNftTronKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/deployNftTronKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNft()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNft(
    \Tatum\Model\MintMultipleNft $mint_multiple_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft** | [**\Tatum\Model\MintMultipleNft**](../Model/MintMultipleNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNft operation

### Example

[✨ View "mintMultipleNft.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNftCelo()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftCelo(
    \Tatum\Model\MintMultipleNftCelo $mint_multiple_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_celo** | [**\Tatum\Model\MintMultipleNftCelo**](../Model/MintMultipleNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftCelo operation

### Example

[✨ View "mintMultipleNftCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNftFlowKMS()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftFlowKMS(
    \Tatum\Model\MintMultipleNftFlowKMS $mint_multiple_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_flow_kms** | [**\Tatum\Model\MintMultipleNftFlowKMS**](../Model/MintMultipleNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftFlowKMS operation

### Example

[✨ View "mintMultipleNftFlowKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNftFlowMnemonic()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftFlowMnemonic(
    \Tatum\Model\MintMultipleNftFlowMnemonic $mint_multiple_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_flow_mnemonic** | [**\Tatum\Model\MintMultipleNftFlowMnemonic**](../Model/MintMultipleNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftFlowMnemonic operation

### Example

[✨ View "mintMultipleNftFlowMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNftFlowPK()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftFlowPK(
    \Tatum\Model\MintMultipleNftFlowPK $mint_multiple_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_flow_pk** | [**\Tatum\Model\MintMultipleNftFlowPK**](../Model/MintMultipleNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftFlowPK operation

### Example

[✨ View "mintMultipleNftFlowPK.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNftKMS()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftKMS(
    \Tatum\Model\MintMultipleNftKMS $mint_multiple_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_kms** | [**\Tatum\Model\MintMultipleNftKMS**](../Model/MintMultipleNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftKMS operation

### Example

[✨ View "mintMultipleNftKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNftKMSCelo()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftKMSCelo(
    \Tatum\Model\MintMultipleNftKMSCelo $mint_multiple_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_kms_celo** | [**\Tatum\Model\MintMultipleNftKMSCelo**](../Model/MintMultipleNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftKMSCelo operation

### Example

[✨ View "mintMultipleNftKMSCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNftKMSTron()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftKMSTron(
    \Tatum\Model\MintMultipleNftKMSTron $mint_multiple_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_kms_tron** | [**\Tatum\Model\MintMultipleNftKMSTron**](../Model/MintMultipleNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftKMSTron operation

### Example

[✨ View "mintMultipleNftKMSTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNftMinter()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftMinter(
    \Tatum\Model\MintMultipleNftMinter $mint_multiple_nft_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_minter** | [**\Tatum\Model\MintMultipleNftMinter**](../Model/MintMultipleNftMinter.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

<p><b>100 credits per API call on Flow
 2 credits per API call on the other blockchains</b></p>
 <p>Create multiple NFT Tokens and transfer them to destination account. Create and transfer any NFT tokens from smart contract defined in contractAddress.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> This operation works in two modes.  First mode works just like other NFT endpoints. Every time the funds are transferred, the transaction must be signed with the corresponding private key. No one should ever send it's own private keys to the internet because there is a strong possibility of stealing keys and loss of funds. In this method, it is possible to enter privateKey or signatureId. PrivateKey should be used only for quick development on testnet versions of blockchain when there is no risk of losing funds. In production, <a href="https://github.com/tatumio/tatum-kms" target="_blank">Tatum KMS</a> should be used for the highest security standards, and signatureId should be present in the request. Alternatively, using the Tatum client library for supported languages.  Second mode enables you to mint on any custom NFT ERC-721 smart contract, on which specified minter address is approved as a minter. You don't specify private key or signatureId, only minter address, from which the NFT will be minted.
 It means you perform mint multiple NFT request with following body: <pre>{    "to": ["0x80d8bac9a6901698b3749fe336bbd1385c1f98f2"],    "url": ["ipfs://QmXJJ6UF5WkF4WTJvsdhiA1etGwBLfpva7Vr9AudGMe3pj"],    "tokenId": ["9876541124516"],    "contractAddress":"0xcd2ada00c48a27faa5cc67f9a1ed55b89ddf7f77",    "minter": "0x542b9ac4945a3836fd12ad98acbc76a0c8b743f5",    "chain": "MATIC" }</pre> The blockchain fee of the performed transaction is paid from the address connected with built-in private key and is debited in form of credits. The credits are debited only if NFT mint requests are performed with paid API key plan. We transform fee to the credits in accordance to the rates provided by the Tatum. If you want to batch mint on ERC-721 contract which is not deployed via Tatum API, your smart contract must contain this method: <pre>mintMultiple(address[] to, uint256[] tokenId, string[] uri): boolean</pre> You can use addresses specified in the bellow table to be used as a minter. <table>   <tr>     <th>Chain</th>     <th>Testnet address</th>     <th>Mainnet Address</th>   </tr>   <tr>     <td>MATIC</td>     <td>0x542b9ac4945a3836fd12ad98acbc76a0c8b743f5</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>BSC</td>     <td>0xc16ae5e8c985b906935a0cadf4e24f0400531883</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>ONE</td>     <td>0x8906f62d40293ddca77fdf6714c3f63265deddf0</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>ETH</td>     <td>0x53e8577C4347C365E4e0DA5B57A589cB6f2AB848</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>CELO</td>     <td>0xBC2eBA680EE50d685cc4Fe65f102AA70AfB27D3F</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr>   <tr>     <td>KLAY</td>     <td>0x80d8bac9a6901698b3749fe336bbd1385c1f98f2</td>     <td>0xcf9e127455d28e7362380aec1b92ddee8200b295</td>   </tr> </table> If there are not enough coins on any testnet address, feel free to send coins there.</p>


### Example

[✨ View "mintMultipleNftMinter.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftMinter.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintMultipleNftTron()`

> **POST** `/v3/nft/mint/batch`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintMultipleNftTron(
    \Tatum\Model\MintMultipleNftTron $mint_multiple_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintMultipleNftMinter200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_multiple_nft_tron** | [**\Tatum\Model\MintMultipleNftTron**](../Model/MintMultipleNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintMultipleNftMinter200Response**](../Model/MintMultipleNftMinter200Response.md)

### Description

Mint multiple NFTs

MintMultipleNftTron operation

### Example

[✨ View "mintMultipleNftTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintMultipleNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNft()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNft(
    \Tatum\Model\MintNft $mint_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft** | [**\Tatum\Model\MintNft**](../Model/MintNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNft</code> schema lets you mint NFTs natively on BNB Smart Chain, Ethereum, Harmony, Klaytn, KuCoin Community Chain, and Polygon and sign the transaction with your private key.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNft.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftAlgorand()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftAlgorand(
    \Tatum\Model\MintNftAlgorand $mint_nft_algorand,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_algorand** | [**\Tatum\Model\MintNftAlgorand**](../Model/MintNftAlgorand.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftAlgorand</code> schema lets you mint NFTs natively on Algorand and sign the transaction with your private key.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftAlgorand.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftAlgorand.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftAlgorandKMS()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftAlgorandKMS(
    \Tatum\Model\MintNftAlgorandKMS $mint_nft_algorand_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_algorand_kms** | [**\Tatum\Model\MintNftAlgorandKMS**](../Model/MintNftAlgorandKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftAlgorandKMS</code> schema lets you mint NFTs natively on Algorand and sign the transaction with your signature ID.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftAlgorandKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftAlgorandKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftCelo()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftCelo(
    \Tatum\Model\MintNftCelo $mint_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_celo** | [**\Tatum\Model\MintNftCelo**](../Model/MintNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftCelo</code> schema lets you mint NFTs natively on Celo and sign the transaction with your private key.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftExpress()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftExpress(
    \Tatum\Model\MintNftExpress $mint_nft_express,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_express** | [**\Tatum\Model\MintNftExpress**](../Model/MintNftExpress.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftExpress</code> schema lets you mint NFTs on BNB Smart Chain, Celo, Ethereum, Harmony, Klaytn, and Polygon using <b>NTF Express</b> with the pre-built smart contract provided by Tatum.
For more information, see "Use the pre-built smart contract provided by Tatum to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftExpress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftExpress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftExpressAlgorand()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftExpressAlgorand(
    \Tatum\Model\MintNftExpressAlgorand $mint_nft_express_algorand,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_express_algorand** | [**\Tatum\Model\MintNftExpressAlgorand**](../Model/MintNftExpressAlgorand.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftExpressAlgorand</code> schema lets you mint NFTs on Algorand using <b>NTF Express</b> with the pre-built smart contract provided by Tatum.
For more information, see "Use the pre-built smart contract provided by Tatum to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftExpressAlgorand.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftExpressAlgorand.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftExpressSolana()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftExpressSolana(
    \Tatum\Model\MintNftExpressSolana $mint_nft_express_solana,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_express_solana** | [**\Tatum\Model\MintNftExpressSolana**](../Model/MintNftExpressSolana.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftExpressSolana</code> schema lets you mint NFTs on Solana using <b>NTF Express</b> with the pre-built smart contract provided by Tatum.
For more information, see "Use the pre-built smart contract provided by Tatum to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftExpressSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftExpressSolana.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftFlowKMS()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftFlowKMS(
    \Tatum\Model\MintNftFlowKMS $mint_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_flow_kms** | [**\Tatum\Model\MintNftFlowKMS**](../Model/MintNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftFlowKMS</code> schema lets you mint NFTs natively on Flow and sign the transaction with your signature ID.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftFlowKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftFlowMnemonic()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftFlowMnemonic(
    \Tatum\Model\MintNftFlowMnemonic $mint_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_flow_mnemonic** | [**\Tatum\Model\MintNftFlowMnemonic**](../Model/MintNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftFlowMnemonic</code> schema lets you mint NFTs natively on Flow and sign the transaction with your wallet mnemonic.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftFlowMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftFlowPK()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftFlowPK(
    \Tatum\Model\MintNftFlowPK $mint_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_flow_pk** | [**\Tatum\Model\MintNftFlowPK**](../Model/MintNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftFlowPK</code> schema lets you mint NFTs natively on Flow and sign the transaction with your private key.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftFlowPK.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftKMS()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftKMS(
    \Tatum\Model\MintNftKMS $mint_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_kms** | [**\Tatum\Model\MintNftKMS**](../Model/MintNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftKMS</code> schema lets you mint NFTs natively on BNB Smart Chain, Ethereum, Harmony, Klaytn, KuCoin Community Chain, and Polygon and sign the transaction with your signature ID.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftKMSCelo()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftKMSCelo(
    \Tatum\Model\MintNftKMSCelo $mint_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_kms_celo** | [**\Tatum\Model\MintNftKMSCelo**](../Model/MintNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftKMSCelo</code> schema lets you mint NFTs natively on Celo and sign the transaction with your signature ID.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftKMSCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftKMSTron()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftKMSTron(
    \Tatum\Model\MintNftKMSTron $mint_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_kms_tron** | [**\Tatum\Model\MintNftKMSTron**](../Model/MintNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftKMSTron</code> schema lets you mint NFTs natively on TRON and sign the transaction with your signature ID.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftKMSTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftMinter()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftMinter(
    \Tatum\Model\MintNftMinter $mint_nft_minter,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_minter** | [**\Tatum\Model\MintNftMinter**](../Model/MintNftMinter.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftMinter</code> schema lets you mint NFTs on BNB Smart Chain, Celo, Ethereum, Harmony, Klaytn, and Polygon using the <b>NTF minter</b>, a special blockchain address provided by Tatum that will cover the minting fees.
For more information, see "Use your own smart contract to mint NFTs" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftMinter.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftMinter.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftSolana()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftSolana(
    \Tatum\Model\MintNftSolana $mint_nft_solana,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_solana** | [**\Tatum\Model\MintNftSolana**](../Model/MintNftSolana.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftSolana</code> schema lets you mint NFTs natively on Solana and sign the transaction with your private key.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftSolana.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftSolanaKMS()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftSolanaKMS(
    \Tatum\Model\MintNftSolanaKMS $mint_nft_solana_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_solana_kms** | [**\Tatum\Model\MintNftSolanaKMS**](../Model/MintNftSolanaKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftSolanaKMS</code> schema lets you mint NFTs natively on Solana and sign the transaction with your signature ID.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftSolanaKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `mintNftTron()`

> **POST** `/v3/nft/mint`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->mintNftTron(
    \Tatum\Model\MintNftTron $mint_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\MintNftExpress200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$mint_nft_tron** | [**\Tatum\Model\MintNftTron**](../Model/MintNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\MintNftExpress200Response**](../Model/MintNftExpress200Response.md)

### Description

Mint an NFT

<p>The <code>MintNftTron</code> schema lets you mint NFTs natively on TRON and sign the transaction with your private key.
For more information, see "Minting NFTs natively on a blockchain" in <a href="#operation/NftMintErc721">Mint an NFT</a>.</p>



### Example

[✨ View "mintNftTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/mintNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetBalanceErc721()`

> **GET** `/v3/nft/balance/{chain}/{contractAddress}/{address}`

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

<p><b>1 credit per API call</b></p>
 <p>Get the NFTs minted on a specific smart contract (the <code>contractAddress</code> path parameter in the request endpoint URL) that a blockchain address holds.</p>
 <p><b>NOTE:</b> This API works only for the NFT smart contracts deployed using the <a href="#operation/NftDeployErc721">Tatum smart contract API</a>.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Elrond</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetBalanceErc721.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetBalanceErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetContractAddress()`

> **GET** `/v3/nft/address/{chain}/{hash}`

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

<p><p>This endpoint is deprecated. Do not use it.
 Instead, use <a href="https://apidoc.tatum.io/tag/Blockchain-utils#operation/SCGetContractAddress" target="_blank">this API</a>.</b></p>

 <p><b>1 credit per API call</b></p>
 <p>Get NFT contract address from deploy transaction.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetContractAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetContractAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetMetadataErc721()`

> **GET** `/v3/nft/metadata/{chain}/{contractAddress}/{tokenId}`

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

<p><b>1 credit per API call</b></p>
 <p>Get metadata of an NFT.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetMetadataErc721.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetMetadataErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetProvenanceDataErc721()`

> **GET** `/v3/nft/provenance/{chain}/{contractAddress}/{tokenId}`

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

<p><b>1 credit per API call</b></p>
 <p>Get provenance information for an NFT.</p>
 <p><b>NOTE:</b> This API works only for <a href="#operation/NftDeployErc721">provenance NFT smart contracts</a>.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> </ul>

### Example

[✨ View "nftGetProvenanceDataErc721.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetProvenanceDataErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetRoyaltyErc721()`

> **GET** `/v3/nft/royalty/{chain}/{contractAddress}/{tokenId}`

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

<p><b>1 credit per API call</b></p>
 <p>Get information about royalties for an NFT.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetRoyaltyErc721.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetRoyaltyErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTokensByAddressErc721()`

> **GET** `/v3/nft/address/balance/{chain}/{address}`

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

<p><b>1 credit per API call + 5 credits for each owned NFT</b></p>
 <p>Get all NFTs that a blockchain address holds. The NFTs are returned grouped by the smart contracts they were minted on.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>Algorand</li> <li>BNB Smart Chain - mainnet only</li> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> <li>Solana</li> </ul> <p>On Solana and Algorand, if a blockchain address holds fewer than 50 NFTs, the API also returns each NFT's metadata. If the metadata is not returned, you can obtain it using the <a href="https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)/#operation/NftGetMetadataErc721">API for getting NFT metadata</a>.</p>


### Example

[✨ View "nftGetTokensByAddressErc721.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTokensByAddressErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTokensByCollectionErc721()`

> **GET** `/v3/nft/collection/{chain}/{address}`

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

<p><b>1 credit per API call + 5 credits for each listed NFT</b></p>
 <p>Get all NFTs from a collection (all the NFTs that were minted on the smart contract).</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

[✨ View "nftGetTokensByCollectionErc721.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTokensByCollectionErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTransactErc721()`

> **GET** `/v3/nft/transaction/{chain}/{hash}`

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

<p><b>1 credit per API call</b></p>
 <p>Get an NFT transaction by its hash.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

[✨ View "nftGetTransactErc721.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTransactErc721.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTransactionByAddress()`

> **GET** `/v3/nft/transaction/{chain}/{address}/{tokenAddress}`

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

<p><b>1 credit per API call</b></p>
 <p>Get incoming and outgoing NFT transactions on a blockchain address.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

[✨ View "nftGetTransactionByAddress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTransactionByAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nftGetTransactionByToken()`

> **GET** `/v3/nft/transaction/tokenId/{chain}/{tokenAddress}/{tokenId}`

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

<p><b>1 credit per API call</b></p>
 <p>Get incoming and outgoing transactions for an NFT.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>Celo</li> <li>Ethereum</li> <li>Polygon</li> </ul>

### Example

[✨ View "nftGetTransactionByToken.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/nftGetTransactionByToken.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNft()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNft(
    \Tatum\Model\TransferNft $transfer_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft** | [**\Tatum\Model\TransferNft**](../Model/TransferNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

<p><b>100 credits per API call on Flow
 2 credits per API call on the other blockchains</b></p>
 <p>Transfer an NFT from the smart contract (the <code>contractAddress</code> parameter in the request body) to the specified blockchain address (the <code>to</code> parameter in the request body).</p>
 <p>In one API call, you can transfer only one NFT.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>Algorand</li> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Flow</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>Solana</li> <li>TRON</li> </ul> <p>For Ethereum, Celo, and BNB Smart Chain, transferring NFTs invokes the <code>safeTransfer()</code> method.</p>
 <p><b>Transferring NFTs on Algorand</b></p>
 <ul> <li>On Algorand, the recipient has to agree in advance to receive your NFT because Algorand charges users for storing NFTs on their addresses, and an Algorand blockchain address by default does not receive NFTs unless explicitly agreed. Before transferring an NFT, make sure that the recipient <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandBlockchainReceiveAsset" target="_blank">has agreed to receive the NFT</a> to their address.</li> <li>If you want to transfer an NFT that <a href="#operation/NftMintErc721">was minted using NFT Express</a>, use the <code>transferNftAlgoExpress</code> schema of the request body.
<b>NOTE:</b> On the <b>mainnet</b>, Tatum covers your transaction fees for the NFT transfer and pays for them from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. On the <b>testnet</b>, no credits are deducted from the monthly credit allowance.</li> </ul> <p><b>Transferring NFTs on Solana</b>
 If you want to transfer an NFT that <a href="#operation/NftMintErc721">was minted using NFT Express</a>, use the <code>transferNftSolana</code> or <code>transferNftSolanaKMS</code> schema of the request body. In the request body: <ul> <li>Set the <code>from</code> parameter to the address that you used in the <code>to</code> parameter in the request body of the minting call.</li> <li>Set the <code>to</code> parameter to the recipient's address.</li> <li>Set the <code>contractAddress</code> parameter to the address from the <code>nftAddress</code> parameter returned in the response body of the minting call.</li> <li>Set the <code>fromPrivateKey</code>/<code>signatureId</code> parameter to the private key/signature ID of the blockchain address that you specified in the <code>from</code> parameter.</li> </ul> <p><b>Signing a transaction</b>
 When transferring an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>
 <p><b>NOTE:</b> This does not apply to transferring NFTs that were minted on Algorand using NFT Express (see earlier in this section).</p>


### Example

[✨ View "transferNft.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftAlgo()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftAlgo(
    \Tatum\Model\TransferNftAlgo $transfer_nft_algo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_algo** | [**\Tatum\Model\TransferNftAlgo**](../Model/TransferNftAlgo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftAlgo operation

### Example

[✨ View "transferNftAlgo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftAlgo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftAlgoExpress()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftAlgoExpress(
    \Tatum\Model\TransferNftAlgoExpress $transfer_nft_algo_express,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_algo_express** | [**\Tatum\Model\TransferNftAlgoExpress**](../Model/TransferNftAlgoExpress.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftAlgoExpress operation

### Example

[✨ View "transferNftAlgoExpress.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftAlgoExpress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftAlgoKMS()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftAlgoKMS(
    \Tatum\Model\TransferNftAlgoKMS $transfer_nft_algo_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_algo_kms** | [**\Tatum\Model\TransferNftAlgoKMS**](../Model/TransferNftAlgoKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftAlgoKMS operation

### Example

[✨ View "transferNftAlgoKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftAlgoKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftCelo()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftCelo(
    \Tatum\Model\TransferNftCelo $transfer_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_celo** | [**\Tatum\Model\TransferNftCelo**](../Model/TransferNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftCelo operation

### Example

[✨ View "transferNftCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftFlowKMS()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftFlowKMS(
    \Tatum\Model\TransferNftFlowKMS $transfer_nft_flow_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_flow_kms** | [**\Tatum\Model\TransferNftFlowKMS**](../Model/TransferNftFlowKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftFlowKMS operation

### Example

[✨ View "transferNftFlowKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftFlowKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftFlowMnemonic()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftFlowMnemonic(
    \Tatum\Model\TransferNftFlowMnemonic $transfer_nft_flow_mnemonic,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_flow_mnemonic** | [**\Tatum\Model\TransferNftFlowMnemonic**](../Model/TransferNftFlowMnemonic.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftFlowMnemonic operation

### Example

[✨ View "transferNftFlowMnemonic.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftFlowMnemonic.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftFlowPK()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftFlowPK(
    \Tatum\Model\TransferNftFlowPK $transfer_nft_flow_pk,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_flow_pk** | [**\Tatum\Model\TransferNftFlowPK**](../Model/TransferNftFlowPK.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftFlowPK operation

### Example

[✨ View "transferNftFlowPK.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftFlowPK.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftKMS()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftKMS(
    \Tatum\Model\TransferNftKMS $transfer_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_kms** | [**\Tatum\Model\TransferNftKMS**](../Model/TransferNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftKMS operation

### Example

[✨ View "transferNftKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftKMSCelo()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftKMSCelo(
    \Tatum\Model\TransferNftKMSCelo $transfer_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_kms_celo** | [**\Tatum\Model\TransferNftKMSCelo**](../Model/TransferNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftKMSCelo operation

### Example

[✨ View "transferNftKMSCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftKMSTron()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftKMSTron(
    \Tatum\Model\TransferNftKMSTron $transfer_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_kms_tron** | [**\Tatum\Model\TransferNftKMSTron**](../Model/TransferNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftKMSTron operation

### Example

[✨ View "transferNftKMSTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftSolana()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftSolana(
    \Tatum\Model\TransferNftSolana $transfer_nft_solana,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_solana** | [**\Tatum\Model\TransferNftSolana**](../Model/TransferNftSolana.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftSolana operation

### Example

[✨ View "transferNftSolana.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftSolana.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftSolanaKMS()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftSolanaKMS(
    \Tatum\Model\TransferNftSolanaKMS $transfer_nft_solana_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_solana_kms** | [**\Tatum\Model\TransferNftSolanaKMS**](../Model/TransferNftSolanaKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftSolanaKMS operation

### Example

[✨ View "transferNftSolanaKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftSolanaKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `transferNftTron()`

> **POST** `/v3/nft/transaction`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->transferNftTron(
    \Tatum\Model\TransferNftTron $transfer_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_nft_tron** | [**\Tatum\Model\TransferNftTron**](../Model/TransferNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Transfer an NFT

TransferNftTron operation

### Example

[✨ View "transferNftTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/transferNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateCashbackValueForAuthorNft()`

> **PUT** `/v3/nft/royalty`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNft(
    \Tatum\Model\UpdateCashbackValueForAuthorNft $update_cashback_value_for_author_nft,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft** | [**\Tatum\Model\UpdateCashbackValueForAuthorNft**](../Model/UpdateCashbackValueForAuthorNft.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update NFT royalty information

<p><b>2 credits per API call</b></p>
 <p>Update the value of the royalty cashback set for an NFT.</p>
 <p>The royalty cashback value can be updated only from the address of the NFT author (the address that is listed as a royalty cashback receiver in the NFT royalty information). The royalty cashback value cannot be updated from the address of the NFT owner.
 In one API call, you can update the first value of the royalty cashback for the NFT author for one NFT.</p>
 <p>To disable the royalties for the NFT completely, set it to 0.</p>
 <p>This API is supported for the following blockchains:</p>
 <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>KuCoin Community Chain</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>Signing a transaction</b>
 When updating NFT royalty, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "updateCashbackValueForAuthorNft.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNft.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateCashbackValueForAuthorNftCelo()`

> **PUT** `/v3/nft/royalty`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftCelo(
    \Tatum\Model\UpdateCashbackValueForAuthorNftCelo $update_cashback_value_for_author_nft_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_celo** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftCelo**](../Model/UpdateCashbackValueForAuthorNftCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftCelo operation

### Example

[✨ View "updateCashbackValueForAuthorNftCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateCashbackValueForAuthorNftKMS()`

> **PUT** `/v3/nft/royalty`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftKMS(
    \Tatum\Model\UpdateCashbackValueForAuthorNftKMS $update_cashback_value_for_author_nft_kms,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_kms** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftKMS**](../Model/UpdateCashbackValueForAuthorNftKMS.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftKMS operation

### Example

[✨ View "updateCashbackValueForAuthorNftKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateCashbackValueForAuthorNftKMSCelo()`

> **PUT** `/v3/nft/royalty`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftKMSCelo(
    \Tatum\Model\UpdateCashbackValueForAuthorNftKMSCelo $update_cashback_value_for_author_nft_kms_celo,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_kms_celo** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftKMSCelo**](../Model/UpdateCashbackValueForAuthorNftKMSCelo.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftKMSCelo operation

### Example

[✨ View "updateCashbackValueForAuthorNftKMSCelo.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftKMSCelo.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateCashbackValueForAuthorNftKMSTron()`

> **PUT** `/v3/nft/royalty`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftKMSTron(
    \Tatum\Model\UpdateCashbackValueForAuthorNftKMSTron $update_cashback_value_for_author_nft_kms_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_kms_tron** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftKMSTron**](../Model/UpdateCashbackValueForAuthorNftKMSTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftKMSTron operation

### Example

[✨ View "updateCashbackValueForAuthorNftKMSTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftKMSTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateCashbackValueForAuthorNftTron()`

> **PUT** `/v3/nft/royalty`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->updateCashbackValueForAuthorNftTron(
    \Tatum\Model\UpdateCashbackValueForAuthorNftTron $update_cashback_value_for_author_nft_tron,
    [ string $x_testnet_type = 'ethereum-sepolia' ]
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$update_cashback_value_for_author_nft_tron** | [**\Tatum\Model\UpdateCashbackValueForAuthorNftTron**](../Model/UpdateCashbackValueForAuthorNftTron.md) |  |
 **$x_testnet_type** | **string**  | Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Update NFT royalty information

UpdateCashbackValueForAuthorNftTron operation

### Example

[✨ View "updateCashbackValueForAuthorNftTron.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/updateCashbackValueForAuthorNftTron.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `verifySolanaNFT()`

> **POST** `/v3/nft/verify`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->verifySolanaNFT(
    \Tatum\Model\VerifySolanaNFT $verify_solana_nft
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$verify_solana_nft** | [**\Tatum\Model\VerifySolanaNFT**](../Model/VerifySolanaNFT.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Verify an NFT in an NFT collection on Solana

<p><b>2 credits per API call</b></p>
 <p>Verify an NFT in an NFT collection on Solana. Verifying an NFT sets the <code>Verified</code> parameter to <code>true</code> for the NFT, which means that the NFT is really a part of the collection. To know more about Solana collections and verification, refer to the <a href="https://docs.metaplex.com/programs/token-metadata/certified-collections" target="_blank">Solana user documentation</a>.</p>
 <p>The collection must be a sized collection that was introduced in <a href="https://docs.metaplex.com/programs/token-metadata/changelog/v1.3" target="_blank">Version 1.3</a> of the Metaplex Token Metadata program. The NFT must have been <a href="#operation/NftMintErc721">minted in this collection</a>.</p>
 <p>This API is supported only for Solana.</p>
 <p><b>Signing a transaction</b>
 When verifying an NFT, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p>
 <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p>
 <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>


### Example

[✨ View "verifySolanaNFT.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/verifySolanaNFT.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `verifySolanaNFTKMS()`

> **POST** `/v3/nft/verify`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nFTERC721OrCompatible()->verifySolanaNFTKMS(
    \Tatum\Model\VerifySolanaNFTKMS $verify_solana_nftkms
): \Tatum\Model\TransactionSigned
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$verify_solana_nftkms** | [**\Tatum\Model\VerifySolanaNFTKMS**](../Model/VerifySolanaNFTKMS.md) |  |

### Return type

[**\Tatum\Model\TransactionSigned**](../Model/TransactionSigned.md)

### Description

Verify an NFT in an NFT collection on Solana

VerifySolanaNFTKMS operation

### Example

[✨ View "verifySolanaNFTKMS.php"](https://github.com/tatumio/tatum-php/blob/master/examples/Api/NFTERC721OrCompatibleApi/verifySolanaNFTKMS.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
