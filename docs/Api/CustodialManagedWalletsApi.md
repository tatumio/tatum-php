---
title: Custodial managed wallets
parent: API
layout: page
---

# Api/CustodialManagedWalletsApi

[Custodial managed wallets API Reference](https://apidoc.tatum.io/tag/Custodial-managed-wallets/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->custodialManagedWallets();

// TestNet API Call
$sdk->testnet()->api()->custodialManagedWallets();
```

## Methods

Method | Description
------------- | -------------
[**custodialCreateWallet()**](#custodialcreatewallet) | Create managed address
[**custodialDeleteWallet()**](#custodialdeletewallet) | Delete managed address
[**custodialGetWallet()**](#custodialgetwallet) | Get managed address
[**custodialGetWallets()**](#custodialgetwallets) | Get managed addresses
[**custodialTransferManagedAddress()**](#custodialtransfermanagedaddress) | Sign and transfer using managed address


## `custodialCreateWallet()`

### Example

[👉 View "**custodialCreateWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustodialManagedWalletsApi/custodialCreateWallet.php)

### Request

> **POST** `/v3/custodial/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->custodialManagedWallets()->custodialCreateWallet(
    [ \Tatum\Model\CustodialCreateWalletRequest $custodial_create_wallet_request ]
): \Tatum\Model\CustodialManagedAddress
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$custodial_create_wallet_request** | [**\Tatum\Model\CustodialCreateWalletRequest**](../../Model/CustodialCreateWalletRequest) |  | [optional]

### Return type

[**\Tatum\Model\CustodialManagedAddress**](../../Model/CustodialManagedAddress)

### Description

Create managed address

<h4>2 credits per API call, 10 credits for each managed wallet every day.</h4>

 Create new managed address for a specific chain. If the address is mainnet or testnet one depends on the API Key - testnet API Key manages testnet addresses, mainnet API Key manages mainnet addresses. Result of the operation is address and walletId, which is used for identifying the wallet later on and/or exporting the private key if needed.

 Free users can manage only 10 addresses per API Key.

[Back to top](#top)



## `custodialDeleteWallet()`

### Example

[👉 View "**custodialDeleteWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustodialManagedWalletsApi/custodialDeleteWallet.php)

### Request

> **DELETE** `/v3/custodial/wallet/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->custodialManagedWallets()->custodialDeleteWallet(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | WalletID of the managed address |

### Return type

void (empty response body)

### Description

Delete managed address

<h4>1 credit per API call.</h4>

 Delete managed address. Once deleted, the address won't be charged in a daily credit usage, but it **won't be possible to get the private key** for it.

[Back to top](#top)



## `custodialGetWallet()`

### Example

[👉 View "**custodialGetWallet.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustodialManagedWalletsApi/custodialGetWallet.php)

### Request

> **GET** `/v3/custodial/wallet/{id}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->custodialManagedWallets()->custodialGetWallet(
    string $id,
    [ bool $export = false ]
): \Tatum\Model\CustodialManagedAddress[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | WalletID of the managed address |
 **$export** | **bool**  | If set to \&quot;true\&quot;, returns the private key in the response; if not set, defaults to \&quot;false\&quot; (the private key is not included in the response) | [optional] [default to false]

### Return type

[**\Tatum\Model\CustodialManagedAddress[]**](../../Model/CustodialManagedAddress)

### Description

Get managed address

<h4>1 credit per API call.</h4>

 Get managed address for an API Key. It's possible to export the private key, if query parameter **export** is set to true.

[Back to top](#top)



## `custodialGetWallets()`

### Example

[👉 View "**custodialGetWallets.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustodialManagedWalletsApi/custodialGetWallets.php)

### Request

> **GET** `/v3/custodial/wallet`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->custodialManagedWallets()->custodialGetWallets(): \Tatum\Model\CustodialManagedAddress[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tatum\Model\CustodialManagedAddress[]**](../../Model/CustodialManagedAddress)

### Description

Get managed addresses

<h4>1 credit per API call.</h4>

 Get all managed addresses for an API Key.

[Back to top](#top)



## `custodialTransferManagedAddress()`

### Example

[👉 View "**custodialTransferManagedAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/CustodialManagedWalletsApi/custodialTransferManagedAddress.php)

### Request

> **POST** `/v3/custodial/transaction`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->custodialManagedWallets()->custodialTransferManagedAddress(
    [ \Tatum\Model\TransferManagedAddress $transfer_managed_address ]
): \Tatum\Model\TransactionHash
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_managed_address** | [**\Tatum\Model\TransferManagedAddress**](../../Model/TransferManagedAddress) |  | [optional]

### Return type

[**\Tatum\Model\TransactionHash**](../../Model/TransactionHash)

### Description

Sign and transfer using managed address

<h4>2 credits per API call, additional credits are charged for each gas covered operation.</h4>

 Sign transaction and transfer assets from a custodial managed address.

 Supported chains: 

<ul> <li>**Solana**</li> </ul>

 

 Logic for **Solana**

 In Solana, it's possible to cover the fees connected to any arbitrary transaction by a third party. Tatum can cover these fees for any transaction on the Solana blockchain - transfer of SOL, SPL tokens, minting or transferring NFTs or invoking programs. In order to do this, Tatum fee address must be used as a feePayer address during transaction creation: 

<table> 
<tr><td></td><td>**Mainnet address**</td><td>**Devnet address**</td></tr>
 
<tr><td>**Address**</td><td>DSpHmb7hLnetoybammcJBJiyqMVR3pDhCuW6hqVg9eBF</td><td>DSpHmb7hLnetoybammcJBJiyqMVR3pDhCuW6hqVg9eBF</td></tr>
 </table>

 Once transaction is constructed using <a href="https://github.com/solana-labs/solana-web3.js/" target="_blank">Solana SDK</a>, it can be serialized to HEX data string, which is then passed to the API and signed.

 Transaction could require multiple private keys for signing - fee payer, sender of the SOL assets, minting key during NFT mint operation etc. Some of the keys are used in Tatum - fee payer, or, in case of managed wallet holding SOL assets, the key of that managed wallet - those must be referenced in a list of walletIds to be used. For external keys, which are not managed by Tatum, those could either sign the transaction before it's serialization, or could be passed to the API in it's raw form - this is OK only for keys, which could be exposed and there is no harm of loosing assets on them.

 How to partially sign the transaction could be found <a href="https://solanacookbook.com/references/offline-transactions.html#partial-sign-transaction" target="_blank">here</a>.

 **Fee payer key is used by default, doesn't have to be mentioned in the list of wallets used for signing.**

 **Examples of different transaction payloads.**

 1. Send SOL from account HrJtQTy2RW9c6y41RvN8x3bEiD6Co74AuhER2MGCpa58 to FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU <pre> import { LAMPORTS_PER_SOL, PublicKey, SystemProgram, Transaction, Connection } from '@solana/web3.js' const connection = new Connection('https://api.tatum.io/v3/blockchain/node/SOL') const from = 'HrJtQTy2RW9c6y41RvN8x3bEiD6Co74AuhER2MGCpa58' const to = 'FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU' const amount = '0.000001' const devnet_fee_payer = '5zPr5331CtBjgVeLedhmJPEpFaUsorLCnb3aCQPsUc9w' const fromPubkey = new PublicKey(from) const transaction = new Transaction({ feePayer: new PublicKey(devnet_fee_payer) }) transaction.add( SystemProgram.transfer({ fromPubkey: fromPubkey, toPubkey: new PublicKey(to), lamports: new BigNumber(amount).multipliedBy(LAMPORTS_PER_SOL).toNumber(), }), ) const { blockhash, lastValidBlockHeight } = await connection.getLatestBlockhash('finalized') transaction.recentBlockhash = blockhash transaction.lastValidBlockHeight = lastValidBlockHeight transaction.partialSign(...signers) return transaction.serialize({ requireAllSignatures: false }).toString('hex') </pre> For the above example, developer have 2 options how to sign transaction - if the sender address HrJtQTy2RW9c6y41RvN8x3bEiD6Co74AuhER2MGCpa58 is managed using a Tatum managed wallet with id 0b1eae3d-2520-4903-8bbf-5dec3ad2a5d4, the final payload to the custodial/transaction endpoint should look like this: <pre> { "chain": "SOL", "txData": "020001044a22af97a838a504e6f7c0b18d779afcea612da50794cc1dac641861fc1ab14afa5cacaf91c298694e64bb5496916c3c68a32affb92d4bcd2736fbb00169d57bd840de2a454960308f688cd3ee308c1fa01ecfa0b03770aaaf3b52d71d46c31d000000000000000000000000000000000000000000000000000000000000000060d38e0da20dc5900b7e902c918eae6a95e2d90af154b53a422f4ab26b050f4f01030201020c02000000e803000000000000", "walletIds": [ { "key": "0b1eae3d-2520-4903-8bbf-5dec3ad2a5d4", "type": "MANAGED" } ] } </pre> If the sender address is not managed, the transaction could be signed with the private key of that address before the serialization and the payload will look like this: <pre> { "chain": "SOL", "txData": "020001044a22af97a838a504e6f7c0b18d779afcea612da50794cc1dac641861fc1ab14afa5cacaf91c298694e64bb5496916c3c68a32affb92d4bcd2736fbb00169d57bd840de2a454960308f688cd3ee308c1fa01ecfa0b03770aaaf3b52d71d46c31d000000000000000000000000000000000000000000000000000000000000000060d38e0da20dc5900b7e902c918eae6a95e2d90af154b53a422f4ab26b050f4f01030201020c02000000e803000000000000", "walletIds": [] } </pre>

[Back to top](#top)

