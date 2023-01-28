---
title: Blockchain addresses
parent: API
layout: page
---

# Api/BlockchainAddressesApi

[Blockchain addresses API Reference](https://apidoc.tatum.io/tag/Blockchain-addresses/)

```php
// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

// MainNet API Call
$sdk->mainnet()->api()->blockchainAddresses();

// TestNet API Call
$sdk->testnet()->api()->blockchainAddresses();
```

## Methods

Method | Description
------------- | -------------
[**addressExists()**](#addressexists) | Check whether a blockchain address is assigned to a virtual account
[**assignAddress()**](#assignaddress) | Assign a blockchain address to a virtual account
[**generateDepositAddress()**](#generatedepositaddress) | Create a deposit address for a virtual account
[**generateDepositAddressesBatch()**](#generatedepositaddressesbatch) | Create multiple deposit addresses for a virtual account
[**getAllDepositAddresses()**](#getalldepositaddresses) | Get all deposit addresses for a virtual account
[**removeAddress()**](#removeaddress) | Remove a deposit address from a virtual account


## `addressExists()`

### Example

[👉 View "**addressExists.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainAddressesApi/addressExists.php)

### Request

> **GET** `/v3/offchain/account/address/{address}/{currency}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainAddresses()->addressExists(
    string $currency,
    string $address,
    [ float $index ]
): \Tatum\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$currency** | **string**  | The cryptocurrency of the blockchain address to check |
 **$address** | **string**  | The blockchain address to check |
 **$index** | **float**  | Only for BNB Beacon Chain, Stellar, or XRPL&lt;ul&gt;&lt;li&gt;For &lt;b&gt;BNB Beacon Chain&lt;/b&gt;, specify the memo.&lt;/li&gt;&lt;li&gt;For &lt;b&gt;Stellar&lt;/b&gt;, specify the message.&lt;/li&gt;&lt;li&gt;For &lt;b&gt;XRPL&lt;/b&gt;, specify the DestinationTag.&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

[**\Tatum\Model\Account**](../../Model/Account)

### Description

Check whether a blockchain address is assigned to a virtual account

**1 credit per API call**

 Check whether a blockchain address with the specified cryptocurrency is registered within Tatum and is assigned to a virtual account (that is, whether this blockchain address is a deposit address associated with the virtual account).

 If the blockchain address is assigned to a virtual account, information about this account is returned. Otherwise, an error message is returned.

[Back to top](#top)



## `assignAddress()`

### Example

[👉 View "**assignAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainAddressesApi/assignAddress.php)

### Request

> **POST** `/v3/offchain/account/{id}/address/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainAddresses()->assignAddress(
    string $id,
    string $address,
    [ float $index ]
): \Tatum\Model\Address
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | The ID of the virtual account to assign a blockchain address to |
 **$address** | **string**  | The blockchain address to assign to the virtual account |
 **$index** | **float**  | Destination tag or memo attribute for XRP or XLM addresses | [optional]

### Return type

[**\Tatum\Model\Address**](../../Model/Address)

### Description

Assign a blockchain address to a virtual account

**2 credits per API call**

 Assign an existing blockchain address to a virtual account. The blockchain address becomes a deposit address associated with this account.

Use this API when the <a href="https://apidoc.tatum.io/tag/Account#operation/createAccount" target="_blank">virtual account has no default extended public key</a> (<code>xpub</code>) and deposit addresses are handled manually.

 You can assign multiple blockchain addresses to one virtual account. When you have multiple blockchain addresses assigned to the same virtual account, you aggregate various blockchain transactions from different addresses under a single account.

You can deposit funds from another blockchain address to a deposit address associated with the virtual account, and the funds will be credited to that virtual account.

 **Scanning for incoming deposits**

 By default, deposit addresses are scanned for incoming deposits. Deposit addresses are automatically synchronized with the associated virtual account, and you can see incoming deposits on the virtual account.

Scanning deposit addresses for incoming deposits consumes **20 credits per address per day**.

 If you want to be notified about certain events occurring on the deposit addresses, <a href="https://apidoc.tatum.io/tag/Notification-subscriptions#operation/createSubscription" target="_blank">subscribe for notifications</a>.

[Back to top](#top)



## `generateDepositAddress()`

### Example

[👉 View "**generateDepositAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainAddressesApi/generateDepositAddress.php)

### Request

> **POST** `/v3/offchain/account/{id}/address`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainAddresses()->generateDepositAddress(
    string $id,
    [ float $index ]
): \Tatum\Model\Address
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |
 **$index** | **float**  | &lt;p&gt;Derivation path index for specific address. If not present, last used index for given xpub of account + 1 is used. We recommend not to pass this value manually, since when some of the indexes are skipped, it is not possible to use them lately to generate address from it.&lt;/p&gt; | [optional]

### Return type

[**\Tatum\Model\Address**](../../Model/Address)

### Description

Create a deposit address for a virtual account

**2 credits per API call

 On Flow, additional 3000 credits are consumed for <a href="https://apidoc.tatum.io/tag/Flow#operation/FlowGenerateAddress" target="_blank">each created address</a>.**

 Create a deposit address associated with a virtual account.

 You can create multiple deposit addresses for one virtual account. When you have multiple deposit addresses created for the same virtual account, you aggregate various blockchain transactions from different addresses under a single account.

You can deposit funds from another blockchain address to a deposit address associated with the virtual account, and the funds will be credited to that virtual account.

 **Scanning for incoming deposits**

 By default, deposit addresses are scanned for incoming deposits. Deposit addresses are automatically synchronized with the associated virtual account, and you can see incoming deposits on the virtual account.

Scanning deposit addresses for incoming deposits consumes **20 credits per address per day**.

 If you want to be notified about certain events occurring on the deposit addresses, <a href="https://apidoc.tatum.io/tag/Notification-subscriptions#operation/createSubscription" target="_blank">subscribe for notifications</a>.

 **Virtual account cryptocurrency**

 Depending on the cryptocurrency of the virtual account, this API generates:

 

<ul> <li>**Public address** for BTC, BCH, ETH, or LTC</li> <li>**DestinationTag** for XRP</li> <li>**Message** for XLM</li> </ul>

 For fore information about supported blockchains and address types, see the <a href="https://apidoc.tatum.io/tag/Account#operation/createAccount" target="_blank">API for creating virtual accounts</a>.

 Deposit addresses are generated in the natural order of the extended public key provided in the virtual account. The derivation index is the representation of that order; it starts from 0 and ends at 2^31.

 When a new deposit address is generated, the last not used index is used to generate the address. You can skip some addresses to a different index, which means all the skipped addresses will no longer be used.

[Back to top](#top)



## `generateDepositAddressesBatch()`

### Example

[👉 View "**generateDepositAddressesBatch.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainAddressesApi/generateDepositAddressesBatch.php)

### Request

> **POST** `/v3/offchain/account/address/batch`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainAddresses()->generateDepositAddressesBatch(
    \Tatum\Model\OffchainAddresses $offchain_addresses
): \Tatum\Model\Address[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$offchain_addresses** | [**\Tatum\Model\OffchainAddresses**](../../Model/OffchainAddresses) |  |

### Return type

[**\Tatum\Model\Address[]**](../../Model/Address)

### Description

Create multiple deposit addresses for a virtual account

**2 credits per API call + 1 credit for each created address

 On Flow, additional 3000 credits are consumed for <a href="https://apidoc.tatum.io/tag/Flow#operation/FlowGenerateAddress" target="_blank">each created address</a>.**

 Create multiple deposit addresses associated with a virtual account.

 When you have multiple deposit addresses created for the same virtual account, you aggregate various blockchain transactions from different addresses under a single account.

You can deposit funds from another blockchain address to a deposit address associated with the virtual account, and the funds will be credited to that virtual account.

 **Scanning for incoming deposits**

 By default, deposit addresses are scanned for incoming deposits. Deposit addresses are automatically synchronized with the associated virtual account, and you can see incoming deposits on the virtual account.

Scanning deposit addresses for incoming deposits consumes **20 credits per address per day**.

 If you want to be notified about certain events occurring on the deposit addresses, <a href="https://apidoc.tatum.io/tag/Notification-subscriptions#operation/createSubscription" target="_blank">subscribe for notifications</a>.

 **Virtual account cryptocurrency**

 Depending on the cryptocurrency of the virtual account, this API generates:

 

<ul> <li>**Public address** for BTC, BCH, ETH, or LTC</li> <li>**DestinationTag** for XRP</li> <li>**Message** for XLM</li> </ul>

 For fore information about supported blockchains and address types, see the <a href="https://apidoc.tatum.io/tag/Account#operation/createAccount" target="_blank">API for creating virtual accounts</a>.

 Deposit addresses are generated in the natural order of the extended public key provided in the virtual account. The derivation index is the representation of that order; it starts from 0 and ends at 2^31.

 When a new deposit address is generated, the last not used index is used to generate the address. You can skip some addresses to a different index, which means all the skipped addresses will no longer be used.

[Back to top](#top)



## `getAllDepositAddresses()`

### Example

[👉 View "**getAllDepositAddresses.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainAddressesApi/getAllDepositAddresses.php)

### Request

> **GET** `/v3/offchain/account/{id}/address`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainAddresses()->getAllDepositAddresses(
    string $id
): \Tatum\Model\Address[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | The ID of the virtual account to get deposit addresses for |

### Return type

[**\Tatum\Model\Address[]**](../../Model/Address)

### Description

Get all deposit addresses for a virtual account

**1 credit per API call**

 Get all deposit addresses generated for a virtual account.

[Back to top](#top)



## `removeAddress()`

### Example

[👉 View "**removeAddress.php**" ✨](https://github.com/tatumio/tatum-php/blob/master/examples/Api/BlockchainAddressesApi/removeAddress.php)

### Request

> **DELETE** `/v3/offchain/account/{id}/address/{address}`

### Type signature

```php
(new \Tatum\Sdk())->{mainnet/testnet}()->api()->blockchainAddresses()->removeAddress(
    string $id,
    string $address,
    [ float $index ]
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |
 **$address** | **string**  | Blockchain address |
 **$index** | **float**  | Destination tag or memo attribute for XRP, BNB or XLM addresses | [optional]

### Return type

void (empty response body)

### Description

Remove a deposit address from a virtual account

**1 credit per API call**

 Remove a deposit address from the virtual account.

 The deposit address will no longer be scanned for incoming deposits. You will no longer be able to generate this address again.

[Back to top](#top)

