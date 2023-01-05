# Tatum/Api/AccountApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateAccount()**](#activateaccount) | **PUT** [/v3/ledger/account/{id}/activate](https://apidoc.tatum.io/tag/Account#operation/activateAccount) | Activate account
[**blockAmount()**](#blockamount) | **POST** [/v3/ledger/account/block/{id}](https://apidoc.tatum.io/tag/Account#operation/blockAmount) | Block an amount in an account
[**createAccountBatch()**](#createaccountbatch) | **POST** [/v3/ledger/account/batch](https://apidoc.tatum.io/tag/Account#operation/createAccountBatch) | Create multiple accounts in a batch call
[**deactivateAccount()**](#deactivateaccount) | **PUT** [/v3/ledger/account/{id}/deactivate](https://apidoc.tatum.io/tag/Account#operation/deactivateAccount) | Deactivate account
[**deleteAllBlockAmount()**](#deleteallblockamount) | **DELETE** [/v3/ledger/account/block/account/{id}](https://apidoc.tatum.io/tag/Account#operation/deleteAllBlockAmount) | Unblock all blocked amounts in an account
[**deleteBlockAmount()**](#deleteblockamount) | **DELETE** [/v3/ledger/account/block/{id}](https://apidoc.tatum.io/tag/Account#operation/deleteBlockAmount) | Unblock a blocked amount in an account
[**freezeAccount()**](#freezeaccount) | **PUT** [/v3/ledger/account/{id}/freeze](https://apidoc.tatum.io/tag/Account#operation/freezeAccount) | Freeze account
[**getAccountBalance()**](#getaccountbalance) | **GET** [/v3/ledger/account/{id}/balance](https://apidoc.tatum.io/tag/Account#operation/getAccountBalance) | Get account balance
[**getAccountByAccountId()**](#getaccountbyaccountid) | **GET** [/v3/ledger/account/{id}](https://apidoc.tatum.io/tag/Account#operation/getAccountByAccountId) | Get account by ID
[**getAccounts()**](#getaccounts) | **GET** [/v3/ledger/account](https://apidoc.tatum.io/tag/Account#operation/getAccounts) | List all accounts
[**getAccountsByCustomerId()**](#getaccountsbycustomerid) | **GET** [/v3/ledger/account/customer/{id}](https://apidoc.tatum.io/tag/Account#operation/getAccountsByCustomerId) | List all customer accounts
[**getAccountsCount()**](#getaccountscount) | **GET** [/v3/ledger/account/count](https://apidoc.tatum.io/tag/Account#operation/getAccountsCount) | Count of found entities for get accounts request
[**getBlockAmount()**](#getblockamount) | **GET** [/v3/ledger/account/block/{id}](https://apidoc.tatum.io/tag/Account#operation/getBlockAmount) | Get blocked amounts in an account
[**getBlockAmountById()**](#getblockamountbyid) | **GET** [/v3/ledger/account/block/{id}/detail](https://apidoc.tatum.io/tag/Account#operation/getBlockAmountById) | Get blocked amount by ID
[**ledgerAccountCreateAccount()**](#ledgeraccountcreateaccount) | **POST** [/v3/ledger/account#postCreateAccount](https://apidoc.tatum.io/tag/Account#operation/ledgerAccountCreateAccount) | Create a virtual account
[**ledgerAccountCreateAccountXpub()**](#ledgeraccountcreateaccountxpub) | **POST** [/v3/ledger/account#postCreateAccountXpub](https://apidoc.tatum.io/tag/Account#operation/ledgerAccountCreateAccountXpub) | Create a virtual account
[**unblockAmountWithTransaction()**](#unblockamountwithtransaction) | **PUT** [/v3/ledger/account/block/{id}](https://apidoc.tatum.io/tag/Account#operation/unblockAmountWithTransaction) | Unblock an amount in an account and perform a transaction
[**unfreezeAccount()**](#unfreezeaccount) | **PUT** [/v3/ledger/account/{id}/unfreeze](https://apidoc.tatum.io/tag/Account#operation/unfreezeAccount) | Unfreeze account
[**updateAccountByAccountId()**](#updateaccountbyaccountid) | **PUT** [/v3/ledger/account/{id}](https://apidoc.tatum.io/tag/Account#operation/updateAccountByAccountId) | Update account


## `activateAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->activateAccount(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

void (empty response body)

### Description

Activate account

<h4>2 credits per API call.</h4><br/><p>Activates an account.</p>

### Example

[✨ View "activateAccount.php"](../../examples/Api/AccountApi/activateAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `blockAmount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->blockAmount(
    string $id,
    \Tatum\Model\BlockAmount $block_amount
): \Tatum\Model\Id
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |
 **$block_amount** | [**\Tatum\Model\BlockAmount**](../Model/BlockAmount.md) |  |

### Return type

[**\Tatum\Model\Id**](../Model/Id.md)

### Description

Block an amount in an account

<h4>2 credits per API call.</h4><br/> <p>Blocks an amount in an account. Any number of distinct amounts can be blocked in one account. Every new blockage has its own distinct ID, which is used as a reference. When the amount is blocked, it is debited from the available balance of the account. The account balance remains the same. The account balance represents the total amount of funds in the account. The available balance represents the total amount of funds that can be used to perform transactions. When an account is frozen, the available balance is set to 0 minus all blockages for the account.</p>

### Example

[✨ View "blockAmount.php"](../../examples/Api/AccountApi/blockAmount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `createAccountBatch()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->createAccountBatch(
    \Tatum\Model\CreateAccountBatch $create_account_batch
): \Tatum\Model\Account[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_account_batch** | [**\Tatum\Model\CreateAccountBatch**](../Model/CreateAccountBatch.md) |  |

### Return type

[**\Tatum\Model\Account[]**](../Model/Account.md)

### Description

Create multiple accounts in a batch call

<h4>2 credits per API call + 1 credit for every account created.</h4><br/> <p>Creates new accounts for the customer in a batch call.</p>

### Example

[✨ View "createAccountBatch.php"](../../examples/Api/AccountApi/createAccountBatch.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deactivateAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->deactivateAccount(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

void (empty response body)

### Description

Deactivate account

<h4>2 credits per API call.</h4><br/><p>Deactivates an account. Only accounts with account and available balances of zero can be deactivated. Deactivated accounts are not visible in the list of accounts, it is not possible to send funds to these accounts or perform transactions. However, they are still present in the ledger and all transaction histories.</p>

### Example

[✨ View "deactivateAccount.php"](../../examples/Api/AccountApi/deactivateAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deleteAllBlockAmount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->deleteAllBlockAmount(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

void (empty response body)

### Description

Unblock all blocked amounts in an account

<h4>1 credit per API call, 1 credit for each deleted blockage. 1 API call + 2 blockages  = 3 credits.</h4><br/><p>Unblocks previously blocked amounts in an account. Increases the available balance in the account where the amount was blocked.</p>

### Example

[✨ View "deleteAllBlockAmount.php"](../../examples/Api/AccountApi/deleteAllBlockAmount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `deleteBlockAmount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->deleteBlockAmount(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Blockage ID |

### Return type

void (empty response body)

### Description

Unblock a blocked amount in an account

<h4>1 credit per API call.</h4><br/><p>Unblocks a previously blocked amount in an account. Increases the available balance in the account where the amount was blocked.</p>

### Example

[✨ View "deleteBlockAmount.php"](../../examples/Api/AccountApi/deleteBlockAmount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `freezeAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->freezeAccount(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

void (empty response body)

### Description

Freeze account

<h4>2 credits per API call.</h4><br/><p>Disables all outgoing transactions. Incoming transactions to the account are available. When an account is frozen, its available balance is set to 0. This operation will create a new blockage of type ACCOUNT_FROZEN, which is automatically deleted when the account is unfrozen.</p>

### Example

[✨ View "freezeAccount.php"](../../examples/Api/AccountApi/freezeAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAccountBalance()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->getAccountBalance(
    string $id
): \Tatum\Model\AccountBalance
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

[**\Tatum\Model\AccountBalance**](../Model/AccountBalance.md)

### Description

Get account balance

<h4>1 credit per API call.</h4><br/><p>Get balance for the account.</p>

### Example

[✨ View "getAccountBalance.php"](../../examples/Api/AccountApi/getAccountBalance.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAccountByAccountId()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->getAccountByAccountId(
    string $id
): \Tatum\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

[**\Tatum\Model\Account**](../Model/Account.md)

### Description

Get account by ID

<h4>1 credit per API call.</h4><br/><p>Gets active account by ID. Displays all information regarding the given account.</p>

### Example

[✨ View "getAccountByAccountId.php"](../../examples/Api/AccountApi/getAccountByAccountId.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAccounts()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->getAccounts(
    [ float $page_size, ]
    [ float $page, ]
    [ string $sort, ]
    [ string $sort_by, ]
    [ bool $active, ]
    [ bool $only_non_zero_balance, ]
    [ bool $frozen, ]
    [ string $currency, ]
    [ string $account_number ]
): \Tatum\Model\Account[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. | [optional]
 **$page** | **float**  | Page number | [optional]
 **$sort** | **string**  | Direction of sorting. Can be asc or desc | [optional]
 **$sort_by** | **string**  | Sort by | [optional]
 **$active** | **bool**  | Filter only active or non active accounts | [optional]
 **$only_non_zero_balance** | **bool**  | Filter only accounts with non zero balances | [optional]
 **$frozen** | **bool**  | Filter only frozen or non frozen accounts | [optional]
 **$currency** | **string**  | Filter by currency | [optional]
 **$account_number** | **string**  | Filter by account number | [optional]

### Return type

[**\Tatum\Model\Account[]**](../Model/Account.md)

### Description

List all accounts

<h4>1 credit per API call.</h4><br/><p>Lists all accounts. Inactive accounts are also visible.</p>

### Example

[✨ View "getAccounts.php"](../../examples/Api/AccountApi/getAccounts.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAccountsByCustomerId()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->getAccountsByCustomerId(
    float $page_size,
    string $id,
    [ float $offset, ]
    [ string $account_code ]
): \Tatum\Model\Account[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$id** | **string**  | Internal customer ID |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]
 **$account_code** | **string**  | For bookkeeping to distinct account purpose. | [optional]

### Return type

[**\Tatum\Model\Account[]**](../Model/Account.md)

### Description

List all customer accounts

<h4>1 credit per API call.</h4><br/><p>Lists all accounts associated with a customer. Only active accounts are visible.</p>

### Example

[✨ View "getAccountsByCustomerId.php"](../../examples/Api/AccountApi/getAccountsByCustomerId.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getAccountsCount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->getAccountsCount(
    [ float $page_size, ]
    [ float $page, ]
    [ string $sort, ]
    [ string $sort_by, ]
    [ bool $active, ]
    [ bool $only_non_zero_balance, ]
    [ bool $frozen, ]
    [ string $currency, ]
    [ string $account_number ]
): \Tatum\Model\EntitiesCount
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$page_size** | **float**  | Max number of items per page is 50. | [optional]
 **$page** | **float**  | Page number | [optional]
 **$sort** | **string**  | Direction of sorting. Can be asc or desc | [optional]
 **$sort_by** | **string**  | Sort by | [optional]
 **$active** | **bool**  | Filter only active or non active accounts | [optional]
 **$only_non_zero_balance** | **bool**  | Filter only accounts with non zero balances | [optional]
 **$frozen** | **bool**  | Filter only frozen or non frozen accounts | [optional]
 **$currency** | **string**  | Filter by currency | [optional]
 **$account_number** | **string**  | Filter by account number | [optional]

### Return type

[**\Tatum\Model\EntitiesCount**](../Model/EntitiesCount.md)

### Description

Count of found entities for get accounts request

<h4>1 credit per API call.</h4><br/><p>Count of accounts that were found from /v3/ledger/account</p>

### Example

[✨ View "getAccountsCount.php"](../../examples/Api/AccountApi/getAccountsCount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getBlockAmount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->getBlockAmount(
    string $id,
    float $page_size,
    [ float $offset ]
): \Tatum\Model\Blockage[]
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |
 **$page_size** | **float**  | Max number of items per page is 50. |
 **$offset** | **float**  | Offset to obtain the next page of data. | [optional]

### Return type

[**\Tatum\Model\Blockage[]**](../Model/Blockage.md)

### Description

Get blocked amounts in an account

<h4>1 credit per API call.</h4><br/><p>Gets blocked amounts for an account.</p>

### Example

[✨ View "getBlockAmount.php"](../../examples/Api/AccountApi/getBlockAmount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `getBlockAmountById()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->getBlockAmountById(
    string $id
): \Tatum\Model\Blockage
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Blocked amount ID |

### Return type

[**\Tatum\Model\Blockage**](../Model/Blockage.md)

### Description

Get blocked amount by ID

<h4>1 credit per API call.</h4><br/><p>Gets blocked amount by id.</p>

### Example

[✨ View "getBlockAmountById.php"](../../examples/Api/AccountApi/getBlockAmountById.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ledgerAccountCreateAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->ledgerAccountCreateAccount(
    \Tatum\Model\CreateAccount $create_account
): \Tatum\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_account** | [**\Tatum\Model\CreateAccount**](../Model/CreateAccount.md) |  |

### Return type

[**\Tatum\Model\Account**](../Model/Account.md)

### Description

Create a virtual account

CreateAccount operation

### Example

[✨ View "ledgerAccountCreateAccount.php"](../../examples/Api/AccountApi/ledgerAccountCreateAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `ledgerAccountCreateAccountXpub()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->ledgerAccountCreateAccountXpub(
    \Tatum\Model\CreateAccountXpub $create_account_xpub
): \Tatum\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_account_xpub** | [**\Tatum\Model\CreateAccountXpub**](../Model/CreateAccountXpub.md) |  |

### Return type

[**\Tatum\Model\Account**](../Model/Account.md)

### Description

Create a virtual account

<p><b>2 credits per API call</b></p> <p>Create a new virtual account for a customer.</p> <ul> <li>If the customer that you specified in the request body already exists, the newly created virtual account is added to this customer's list of accounts.</li> <li>If the customer that you specified in the request body does not exist yet, a new customer is created together with the virtual account, and the virtual account is added to this customer.</li> </ul> <p>You can create a virtual account for any supported cryptocurrency, fiat currency, Tatum virtual currency, or fungible tokens created within Tatum. Once the currency/asset is set for a virtual account, it cannot be changed.</p> <p><b>Virtual account balance</b></p> <p>A virtual account has its own balance. The balance can be logically presented by the account balance and available balance:</p> <ul> <li>The <b>account balance</b> (<code>accountBalance</code>) represents all assets on the account, both available and blocked.</li> <li>The <b>available balance</b> (<code>availableBalance</code>) represents the account balance minus the blocked assets. Use the available balance to determine how much a customer can send or withdraw from their virtual account.</li> </ul> <p><b>Cryptocurrency virtual accounts</b></p> <p>When you create a virtual account based on a cryptocurrency (for example, BTC or ETH), you have to provide the extended public key (<code>xpub</code>) of the blockchain wallet that will be connected to this account.</p> <p><b>NOTE:</b> Adding <code>xpub</code> to the virtual account does <b>not</b> connect any specific blockchain address to this account. <code>xpub</code> is a generator of addresses, not an address itself.</p> <p>Not all blockchains provide <code>xpub</code> for wallets, or Tatum may not support wallets on some blockchains. In such cases, use the wallet address or the account address instead.</p> <ul> <li><b>ALGO:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Algorand#operation/AlgorandGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>BCH:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Bitcoin-Cash#operation/BchGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>BNB:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/BNB-Beacon-Chain#operation/BnbGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>BSC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/BNB-Smart-Chain#operation/BscGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>BTC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Bitcoin#operation/BtcGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>CELO:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Celo#operation/CeloGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>DOGE:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Dogecoin#operation/DogeGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>EGLD:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Elrond#operation/EgldGenerateAddress" target="_blank">generated blockchain address</a> instead.<br />Blockchain addresses on Elrond are generated based on the mnemonic of an Elrond wallet. If you do not have an Elrond wallet, <a href="https://apidoc.tatum.io/tag/Elrond/#operation/EgldGenerateWallet" target="_blank">create one</a>.</li> <li><b>ETH:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Ethereum#operation/EthGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>FLOW:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Flow#operation/FlowGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>KCS:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/KuCoin#operation/KcsGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>KLAY:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Klaytn#operation/KlaytnGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>LTC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Litecoin#operation/LtcGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>MATIC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Polygon#operation/PolygonGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>SOL:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Solana#operation/SolanaGenerateWallet" target="_blank">generated wallet</a> instead.</li> <li><b>TRON:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/Tron#operation/GenerateTronwallet" target="_blank">generated wallet</a>.</li> <li><b>XDC:</b> Obtain <code>xpub</code> from the <a href="https://apidoc.tatum.io/tag/XinFin#operation/XdcGenerateWallet" target="_blank">generated wallet</a>.</li> <li><b>XLM:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/Stellar#operation/XlmWallet" target="_blank">generated account</a> instead.</li> <li><b>XRP:</b> No <code>xpub</code> provided; use <code>address</code> from the <a href="https://apidoc.tatum.io/tag/XRP#operation/XrpWallet" target="_blank">generated account</a> instead.</li> </ul> <p><b>Connect a virtual account to the blockchain</b></p> <ul> <li>If the virtual account was created with the wallet's <code>xpub</code>, <a href="https://apidoc.tatum.io/tag/Blockchain-addresses#operation/generateDepositAddress" target="_blank">generate a new blockchain address</a> for this account.</li> <li>If the virtual account was created with the wallet's or account's address instead of the wallet's <code>xpub</code>, <a href="https://apidoc.tatum.io/tag/Blockchain-addresses#operation/assignAddress" target="_blank">assign an existing blockchain address</a> to this account.</li> </ul> <p>You can connect multiple blockchain addresses to one virtual account.</p>

### Example

[✨ View "ledgerAccountCreateAccountXpub.php"](../../examples/Api/AccountApi/ledgerAccountCreateAccountXpub.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `unblockAmountWithTransaction()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->unblockAmountWithTransaction(
    string $id,
    \Tatum\Model\UnblockAmount $unblock_amount
): \Tatum\Model\TransactionResult
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Blockage ID |
 **$unblock_amount** | [**\Tatum\Model\UnblockAmount**](../Model/UnblockAmount.md) |  |

### Return type

[**\Tatum\Model\TransactionResult**](../Model/TransactionResult.md)

### Description

Unblock an amount in an account and perform a transaction

<h4>2 credits per API call.</h4><br/> <p>Unblocks a previously blocked amount in an account and invokes a ledger transaction from that account to a different recipient. If the request fails, the amount is not unblocked.</p>

### Example

[✨ View "unblockAmountWithTransaction.php"](../../examples/Api/AccountApi/unblockAmountWithTransaction.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `unfreezeAccount()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->unfreezeAccount(
    string $id
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |

### Return type

void (empty response body)

### Description

Unfreeze account

<h4>2 credits per API call.</h4><br/><p>Unfreezes a previously frozen account. Unfreezing a non-frozen account not affect the account.</p>

### Example

[✨ View "unfreezeAccount.php"](../../examples/Api/AccountApi/unfreezeAccount.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `updateAccountByAccountId()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->account()->updateAccountByAccountId(
    string $id,
    \Tatum\Model\UpdateAccount $update_account
)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Account ID |
 **$update_account** | [**\Tatum\Model\UpdateAccount**](../Model/UpdateAccount.md) |  |

### Return type

void (empty response body)

### Description

Update account

<h4>2 credits per API call.</h4><br/><p>Update account by ID. Only a small number of fields can be updated.</p>

### Example

[✨ View "updateAccountByAccountId.php"](../../examples/Api/AccountApi/updateAccountByAccountId.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
