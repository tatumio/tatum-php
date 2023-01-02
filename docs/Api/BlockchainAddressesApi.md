# Tatum/Api/BlockchainAddressesApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressExists()**](#addressexists) | **GET** [/v3/offchain/account/address/{address}/{currency}](https://apidoc.tatum.io/tag/BlockchainAddresses#operation/addressExists) | Check whether a blockchain address is assigned to a virtual account
[**assignAddress()**](#assignaddress) | **POST** [/v3/offchain/account/{id}/address/{address}](https://apidoc.tatum.io/tag/BlockchainAddresses#operation/assignAddress) | Assign a blockchain address to a virtual account
[**generateDepositAddress()**](#generatedepositaddress) | **POST** [/v3/offchain/account/{id}/address](https://apidoc.tatum.io/tag/BlockchainAddresses#operation/generateDepositAddress) | Create a deposit address for a virtual account
[**generateDepositAddressesBatch()**](#generatedepositaddressesbatch) | **POST** [/v3/offchain/account/address/batch](https://apidoc.tatum.io/tag/BlockchainAddresses#operation/generateDepositAddressesBatch) | Create multiple deposit addresses for a virtual account
[**getAllDepositAddresses()**](#getalldepositaddresses) | **GET** [/v3/offchain/account/{id}/address](https://apidoc.tatum.io/tag/BlockchainAddresses#operation/getAllDepositAddresses) | Get all deposit addresses for a virtual account
[**removeAddress()**](#removeaddress) | **DELETE** [/v3/offchain/account/{id}/address/{address}](https://apidoc.tatum.io/tag/BlockchainAddresses#operation/removeAddress) | Remove a deposit address from a virtual account


## `addressExists()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainAddresses()->addressExists(
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
 **$index** | **float**  | In case of XLM or XRP, this is a memo or DestinationTag to search for. | [optional]

### Return type

[**\Tatum\Model\Account**](../Model/Account.md)

### Description

Check whether a blockchain address is assigned to a virtual account

<p><b>1 credit per API call</b></p> <p>Check whether a blockchain address with the specified cryptocurrency is registered within Tatum and is assigned to a virtual account (that is, whether this blockchain address is a deposit address associated with the virtual account).</p> <p>If the blockchain address is assigned to a virtual account, information about this account is returned. Otherwise, an error message is returned.</p>

### Example

[✨ View "addressExists.php"](../../examples/Api/BlockchainAddressesApi/addressExists.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `assignAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainAddresses()->assignAddress(
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

[**\Tatum\Model\Address**](../Model/Address.md)

### Description

Assign a blockchain address to a virtual account

<p><b>2 credits per API call</b></p> <p>Assign an existing blockchain address to a virtual account. The blockchain address becomes a deposit address associated with this account.</br>Use this API when the <a href="https://apidoc.tatum.io/tag/Account#operation/createAccount" target="_blank">virtual account has no default extended public key</a> (<code>xpub</code>) and deposit addresses are handled manually.</p> <p>You can assign multiple blockchain addresses to one virtual account. When you have multiple blockchain addresses assigned to the same virtual account, you aggregate various blockchain transactions from different addresses under a single account.<br/>You can deposit funds from another blockchain address to a deposit address associated with the virtual account, and the funds will be credited to that virtual account.</p> <p><b>Scanning for incoming deposits</b></p> <p>By default, deposit addresses are scanned for incoming deposits. Deposit addresses are automatically synchronized with the associated virtual account, and you can see incoming deposits on the virtual account.<br/>Scanning deposit addresses for incoming deposits consumes <b>20 credits per address per day</b>.</p> <p>If you want to be notified about certain events occurring on the deposit addresses, <a href="https://apidoc.tatum.io/tag/Notification-subscriptions#operation/createSubscription" target="_blank">subscribe for notifications</a>.</p>

### Example

[✨ View "assignAddress.php"](../../examples/Api/BlockchainAddressesApi/assignAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateDepositAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainAddresses()->generateDepositAddress(
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

[**\Tatum\Model\Address**](../Model/Address.md)

### Description

Create a deposit address for a virtual account

<p><b>2 credits per API call<br/> On Flow, additional 3000 credits are consumed for <a href="https://apidoc.tatum.io/tag/Flow#operation/FlowGenerateAddress" target="_blank">each created address</a>.</b></p> <p>Create a deposit address associated with a virtual account.</p> <p>You can create multiple deposit addresses for one virtual account. When you have multiple deposit addresses created for the same virtual account, you aggregate various blockchain transactions from different addresses under a single account.<br/>You can deposit funds from another blockchain address to a deposit address associated with the virtual account, and the funds will be credited to that virtual account.</p> <p><b>Scanning for incoming deposits</b></p> <p>By default, deposit addresses are scanned for incoming deposits. Deposit addresses are automatically synchronized with the associated virtual account, and you can see incoming deposits on the virtual account.<br/>Scanning deposit addresses for incoming deposits consumes <b>20 credits per address per day</b>.</p> <p>If you want to be notified about certain events occurring on the deposit addresses, <a href="https://apidoc.tatum.io/tag/Notification-subscriptions#operation/createSubscription" target="_blank">subscribe for notifications</a>.</p> <p><b>Virtual account cryptocurrency</b></p> <p>Depending on the cryptocurrency of the virtual account, this API generates:<p> <ul> <li><b>Public address</b> for BTC, BCH, ETH, or LTC</li> <li><b>DestinationTag</b> for XRP</li> <li><b>Message</b> for XLM</li> </ul> <p>For fore information about supported blockchains and address types, see the <a href="https://apidoc.tatum.io/tag/Account#operation/createAccount" target="_blank">API for creating virtual accounts</a>.</p> <p>Deposit addresses are generated in the natural order of the extended public key provided in the virtual account. The derivation index is the representation of that order; it starts from 0 and ends at 2^31.</p> <p>When a new deposit address is generated, the last not used index is used to generate the address. You can skip some addresses to a different index, which means all the skipped addresses will no longer be used.</p>

### Example

[✨ View "generateDepositAddress.php"](../../examples/Api/BlockchainAddressesApi/generateDepositAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `generateDepositAddressesBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainAddresses()->generateDepositAddressesBatch(
    \Tatum\Model\OffchainAddresses $offchain_addresses
): \Tatum\Model\Address[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$offchain_addresses** | [**\Tatum\Model\OffchainAddresses**](../Model/OffchainAddresses.md) |  |

### Return type

[**\Tatum\Model\Address[]**](../Model/Address.md)

### Description

Create multiple deposit addresses for a virtual account

<p><b>2 credits per API call + 1 credit for each created address<br/> On Flow, additional 3000 credits are consumed for <a href="https://apidoc.tatum.io/tag/Flow#operation/FlowGenerateAddress" target="_blank">each created address</a>.</b></p> <p>Create multiple deposit addresses associated with a virtual account.</p> <p>When you have multiple deposit addresses created for the same virtual account, you aggregate various blockchain transactions from different addresses under a single account.<br/>You can deposit funds from another blockchain address to a deposit address associated with the virtual account, and the funds will be credited to that virtual account.</p> <p><b>Scanning for incoming deposits</b></p> <p>By default, deposit addresses are scanned for incoming deposits. Deposit addresses are automatically synchronized with the associated virtual account, and you can see incoming deposits on the virtual account.<br/>Scanning deposit addresses for incoming deposits consumes <b>20 credits per address per day</b>.</p> <p>If you want to be notified about certain events occurring on the deposit addresses, <a href="https://apidoc.tatum.io/tag/Notification-subscriptions#operation/createSubscription" target="_blank">subscribe for notifications</a>.</p> <p><b>Virtual account cryptocurrency</b></p> <p>Depending on the cryptocurrency of the virtual account, this API generates:<p> <ul> <li><b>Public address</b> for BTC, BCH, ETH, or LTC</li> <li><b>DestinationTag</b> for XRP</li> <li><b>Message</b> for XLM</li> </ul> <p>For fore information about supported blockchains and address types, see the <a href="https://apidoc.tatum.io/tag/Account#operation/createAccount" target="_blank">API for creating virtual accounts</a>.</p> <p>Deposit addresses are generated in the natural order of the extended public key provided in the virtual account. The derivation index is the representation of that order; it starts from 0 and ends at 2^31.</p> <p>When a new deposit address is generated, the last not used index is used to generate the address. You can skip some addresses to a different index, which means all the skipped addresses will no longer be used.</p>

### Example

[✨ View "generateDepositAddressesBatch.php"](../../examples/Api/BlockchainAddressesApi/generateDepositAddressesBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAllDepositAddresses()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainAddresses()->getAllDepositAddresses(
    string $id
): \Tatum\Model\Address[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | The ID of the virtual account to get deposit addresses for |

### Return type

[**\Tatum\Model\Address[]**](../Model/Address.md)

### Description

Get all deposit addresses for a virtual account

<p><b>1 credit per API call</b></p> <p>Get all deposit addresses generated for a virtual account.</p>

### Example

[✨ View "getAllDepositAddresses.php"](../../examples/Api/BlockchainAddressesApi/getAllDepositAddresses.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `removeAddress()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->blockchainAddresses()->removeAddress(
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

<p><b>1 credit per API call</b></p> <p>Remove a deposit address from the virtual account.</p> <p>The deposit address will no longer be scanned for incoming deposits. You will no longer be able to generate this address again.</p>

### Example

[✨ View "removeAddress.php"](../../examples/Api/BlockchainAddressesApi/removeAddress.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
