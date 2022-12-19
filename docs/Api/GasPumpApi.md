# Tatum/Api/GasPumpApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateGasPumpAddresses()**](#activateGasPumpAddresses) | **POST** /v3/gas-pump/activate | Activate gas pump addresses
[**activatedNotActivatedGasPumpAddresses()**](#activatedNotActivatedGasPumpAddresses) | **GET** /v3/gas-pump/address/{chain}/{txId} | Get the results of the address activation transaction
[**approveTransferCustodialWallet()**](#approveTransferCustodialWallet) | **POST** /v3/blockchain/sc/custodial/approve | Approve the transfer of an asset from a gas pump address
[**gasPumpAddressesActivatedOrNot()**](#gasPumpAddressesActivatedOrNot) | **GET** /v3/gas-pump/activated/{chain}/{owner}/{index} | Check whether the gas pump address with a specified index is activated
[**generateCustodialWallet()**](#generateCustodialWallet) | **POST** /v3/blockchain/sc/custodial | Generate a custodial wallet address
[**generateCustodialWalletBatch()**](#generateCustodialWalletBatch) | **POST** /v3/blockchain/sc/custodial/batch | Generate a gas pump wallet address
[**precalculateGasPumpAddresses()**](#precalculateGasPumpAddresses) | **POST** /v3/gas-pump | Precalculate gas pump addresses
[**sCGetCustodialAddresses()**](#sCGetCustodialAddresses) | **GET** /v3/blockchain/sc/custodial/{chain}/{hash} | Get the custodial wallet address from the transaction
[**transferCustodialWallet()**](#transferCustodialWallet) | **POST** /v3/blockchain/sc/custodial/transfer | Transfer an asset from a gas pump address
[**transferCustodialWalletBatch()**](#transferCustodialWalletBatch) | **POST** /v3/blockchain/sc/custodial/transfer/batch | Transfer multiple assets from a gas pump address


## `activateGasPumpAddresses()`

```php
api()->gasPump()->activateGasPumpAddresses(
    ?\Tatum\Model\ActivateGasPumpAddressesRequest $activate_gas_pump_addresses_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Activate gas pump addresses

<p><b>2 credits per API call</b></p> <p>Activate the <a href="#operation/PrecalculateGasPumpAddresses">precalulated gas pump addresses</a>. Activating a gas pump address allows this address to send funds to other addresses.</p> <p>You can activate up to 270 addresses in one call. If you need to activate more than 270 addresses, make several API calls. For example, if you need to activate 500 addresses, make an API call with 270 addresses (set up the range of their index values accordingly in the <code>from</code> and <code>to</code> request body parameters) and then make another API call with the remaining 230 addresses.</p> <p><b>When to activate a gas pump address</b><br/> Because activating a gas pump address costs some amount of gas on a blockchain, you want to activate only those addresses that will be used for sending funds to other addresses. If you know that a gas pump address will not be used for sending funds, you can leave this address not activated. The customer who uses this address will still be able to receive funds.</p> <p>Depending on your business needs and requirements, you can choose when to activate the gas pump addresses. If you know for sure that all the precalculated addresses will be sending funds, you can activate all the addresses right after they have been precalculated.</p> <p>Alternatively, you can set up the activation in such a way so that a gas pump address gets activated only when a specific event is triggered. For example, you can activate a gas pump address:</p> <ul> <li>When it receives an asset for the first time</li> <li>When the customer tries to send an asset from this address for the first time</li> </ul> <p>After you make an API call to activate gas pump addresses, use the <a href="#operation/ActivatedNotActivatedGasPumpAddresses">API for getting the results of the address activation transaction</a>.</p> <p><b>Paying the gas fee for activating gas pump addresses</b><br/> You can pay the gas fees for each activation transaction yourself, or Tatum can cover it for you.</p> <ul> <li>When <b>paying the gas fees yourself</b>, you must sign the transaction with either the private key of the blockchain address from which you want to pay the fees or the signature ID of that private key (if you use <a href="https://apidoc.tatum.io/tag/Key-Management-System" target="_blank">Key Management System</a>, KMS).<br/> To pay the fees yourself, use this API with any schema of the request body except for <code>ActivateGasPumpTatum</code>. For example, if you are activating gas pump addresses on Ethereum and you use KMS, use the <code>ActivateGasPumpKMS</code> schema. </li> <li>If you want <b>Tatum to cover the fees</b>, use this API with the <code>ActivateGasPumpTatum</code> schema of the request body. <ul> <li>On the <b>mainnet</b>, you have to have a <a href="https://tatum.io/pricing" target="_blank">paid pricing plan</a>.<br/> Tatum pays the fees from its own blockchain address. Then, the fee amount paid by Tatum is converted to the number of credits, and these credits are deducted from the monthly credit allowance of your paid pricing plan. The transaction fees and the corresponding numbers of credits deducted from your allowance vary depending on what blockchain you activate the addresses.</li> <li>On the <b>testnet</b>, no credits are deducted from the monthly credit allowance. You can activate gas pump addresses regardless of your pricing plan.</li> </ul> </li> </ul> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$activate_gas_pump_addresses_request = new \Tatum\Model\ActivateGasPumpAddressesRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->activateGasPumpAddresses($activate_gas_pump_addresses_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->activateGasPumpAddresses(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->activateGasPumpAddresses(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$activate_gas_pump_addresses_request** | [**\Tatum\Model\ActivateGasPumpAddressesRequest**](../Model/ActivateGasPumpAddressesRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `activatedNotActivatedGasPumpAddresses()`

```php
api()->gasPump()->activatedNotActivatedGasPumpAddresses(
    ?string $chain, 
    ?string $tx_id
): \Tatum\Model\GasPumpTrxOut
```

Get the results of the address activation transaction

<p><b>1 credit per API call</b></p> <p>Get the results of the activation transaction after <a href="#operation/ActivateGasPumpAddresses">activating gas pump addresses</a>.</p> <p>If the activation transaction got recorded into a block, the API returns two arrays:</p> <ul> <li><code>valid</code>, with the activated gas pump addresses</li> <li><code>invalid</code>, with the gas pump addresses that for some reason did not get activated together with the reason why</li> </ul> <p>If the transaction is still being processed, the API returns an error message. In this case, repeat the call later.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'ETH';

// The ID of the address activation transaction
$tx_id = '0x94Ce79B9F001E25BBEbE7C01998A78F7B27D1326';

try {
    /** @var \Tatum\Model\GasPumpTrxOut $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->activatedNotActivatedGasPumpAddresses($chain, $tx_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->activatedNotActivatedGasPumpAddresses(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->activatedNotActivatedGasPumpAddresses(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$tx_id** | **string**| The ID of the address activation transaction |

### Return type

[**\Tatum\Model\GasPumpTrxOut**](../Model/GasPumpTrxOut.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `approveTransferCustodialWallet()`

```php
api()->gasPump()->approveTransferCustodialWallet(
    ?\Tatum\Model\ApproveTransferCustodialWalletRequest $approve_transfer_custodial_wallet_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Approve the transfer of an asset from a gas pump address

<p><b>2 credits per API call</b></p> <p>Allow another blockchain address (the <code>spender</code> parameter in the request body) to transfer the asset from a gas pump address on behalf of the master address.</p> <p>Use this API when the customer using the gas pump address sells assets on a marketplace or auction. After the customer creates a listing of the asset, they have to allow the marketplace/auction smart contract to transfer the asset to the buyer after the asset has been bought.</p> <p>The asset can be one of the following types:</p> <ul> <li>Fungible token (ERC-20 or equivalent)</li> <li>NFT (ERC-721 or equivalent)</li> <li>Multi Token (ERC-1155 or equivalent)</li> </ul> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b><br/> When approving the transfer of an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$approve_transfer_custodial_wallet_request = new \Tatum\Model\ApproveTransferCustodialWalletRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->approveTransferCustodialWallet($approve_transfer_custodial_wallet_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->approveTransferCustodialWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->approveTransferCustodialWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$approve_transfer_custodial_wallet_request** | [**\Tatum\Model\ApproveTransferCustodialWalletRequest**](../Model/ApproveTransferCustodialWalletRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `gasPumpAddressesActivatedOrNot()`

```php
api()->gasPump()->gasPumpAddressesActivatedOrNot(
    ?string $chain, 
    ?string $owner, 
    ?float $index
): \Tatum\Model\Activated
```

Check whether the gas pump address with a specified index is activated

<p><b>1 credit per API call</b></p> <p>Check whether the gas pump address with a specified index is <a href="#operation/ActivateGasPumpAddresses">activated</a> and can send funds to other addresses.</p> <p>You can use this API when a customer initiates a fund transfer and you need to check whether their gas pump address is allowed to send funds.</p>  <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// The blockchain to work with
$chain = 'ETH';

// The blockchain address that owns the gas pump address to check; can be referred to as "master address"
$owner = 'owner_example';

// The index of the gas pump address to check
$index = 3.4;

try {
    /** @var \Tatum\Model\Activated $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->gasPumpAddressesActivatedOrNot($chain, $owner, $index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->gasPumpAddressesActivatedOrNot(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->gasPumpAddressesActivatedOrNot(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| The blockchain to work with |
 **$owner** | **string**| The blockchain address that owns the gas pump address to check; can be referred to as \&quot;master address\&quot; |
 **$index** | **float**| The index of the gas pump address to check |

### Return type

[**\Tatum\Model\Activated**](../Model/Activated.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `generateCustodialWallet()`

```php
api()->gasPump()->generateCustodialWallet(
    ?\Tatum\Model\GenerateCustodialWalletRequest $generate_custodial_wallet_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Generate a custodial wallet address

<p><b>This API is deprecated.<br/>To start with the gas pump, use the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a>.</b></p> <p><b>If you built your gas pump solution using this API and the <a href="#operation/GenerateCustodialWalletBatch">API for generating a gas pump wallet address</a>, you can still use this API for creating more custodial addresses for your solution. However, we recommend that you switch to the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a></b>.</p><br/> <p><b>2 credits per API call</b></p> <p>Generate new gas pump smart contract address on the blockchain. It's possible to enable tokens, which should be detected and supported on that address. This address enables custodial providers to receive native assets, ERC20 / ERC721 / ERC1155 tokens on behalf of their customers on dedicated blockchain address, but in the same time it can initiate transfer of those assets away.</p> <p>Gas required for the transfer from that address is going to be deducted from the providers address - the one, which was used to generate the address on the blockchain.</p> <p>There are multiple options, how this address can be setup - it cannot be changed in the future:</p> <ul> <li>Native assets only - ETH, BSC, CELO, MATIC, ONE, TRX</li> <li>Native assets + ERC20 tokens</li> <li>Native assets + ERC721 tokens</li> <li>Native assets + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC20 + ERC721 tokens</li> <li>Native assets + ERC20 + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC721 + ERC1155 tokens - TRON does not support 1155 standard</li> <li>Native assets + ERC20 + ERC721 + ERC1155 tokens - TRON does not support 1155 standard</li> </ul> <p>All of these options could be enabled with a batch mode as well - in 1 transaction, it is possible to transfer multiple different assets from that address, e.g. ETH + USDC + ERC721 token. Without batch mode, 3 separate transaction must have been performed.</p> <p>This operation deploys a smart contract on the blockchain. More assets you will support, more intial gas will be used for address creation. Batch mode adds more gas for every type.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Polygon</li> <li>TRON (except for Multi Tokens)</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$generate_custodial_wallet_request = new \Tatum\Model\GenerateCustodialWalletRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->generateCustodialWallet($generate_custodial_wallet_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->generateCustodialWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->generateCustodialWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_request** | [**\Tatum\Model\GenerateCustodialWalletRequest**](../Model/GenerateCustodialWalletRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `generateCustodialWalletBatch()`

```php
api()->gasPump()->generateCustodialWalletBatch(
    ?\Tatum\Model\GenerateCustodialWalletBatchRequest $generate_custodial_wallet_batch_request, 
    ?string $x_testnet_type
): \Tatum\Model\BtcTransferBlockchain200Response
```

Generate a gas pump wallet address

<p><b>This API is deprecated.<br/>To start with the gas pump, use the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a>.</b></p><br/> <p><b>2 credits per API call</b></p> <p>Generate new gas pump smart contract address on the blockchain. This address enables custodial providers to receive native assets, ERC20 / ERC721 / ERC1155 tokens on behalf of their customers on dedicated blockchain address, but in the same time it can initiate transfer of those assets away. Gas required for the transfer from that address is going to be deducted from the providers address - the one, which was used to generate the address on the blockchain.<br/> This operation deploys a smart contract on the blockchain.<br/> For paid plans, it is possible to pay for the gas costs - you don't have to provide private key or signatureId. Blockchain fees will be covered by your credits. <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$generate_custodial_wallet_batch_request = new \Tatum\Model\GenerateCustodialWalletBatchRequest();

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$x_testnet_type = 'ethereum-sepolia';

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->generateCustodialWalletBatch($generate_custodial_wallet_batch_request, $x_testnet_type);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->generateCustodialWalletBatch(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->generateCustodialWalletBatch(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$generate_custodial_wallet_batch_request** | [**\Tatum\Model\GenerateCustodialWalletBatchRequest**](../Model/GenerateCustodialWalletBatchRequest.md)|  |
 **$x_testnet_type** | **string**| Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `precalculateGasPumpAddresses()`

```php
api()->gasPump()->precalculateGasPumpAddresses(
    ?\Tatum\Model\CreateGasPump $create_gas_pump
): string[]
```

Precalculate gas pump addresses

<p><b>2 credits per API call</b></p> <p>Precalculate (generate) gas pump addresses that you can assign to the customers of your custodial application.</p> <p>This API does not make any changes on the blockchain itself, just generates addresses that follow the blockchain's requirements for the address format; therefore, no gas fee is applied.</p><p/> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul> <p><b>Address index</b><br/> Each address should be associated with its own index. Use the <code>from</code> and <code>to</code> request body parameters to set a range of index values for the addresses to precalculate. You can start with any number, but we recommend that you start from 0.</p> <p>In one API call, you can precalculate:</p> <ul> <li>Up to 4,000 addresses for Harmony</li> <li>Up to 500 addresses for TRON</li> <li>Up to 5,000 addresses for the other supported blockchains</li> </ul> <p>If you need more addresses than one API call can precalculate, make several API calls. For example, if you need 10,000 addresses on Ethereum, make an API call with an index range from 0 through 4,999 and then make another API call with an index range from 5,000 through 9,999.</p> <p>The order in which the precalculated addresses are returned in the API response is the order of the values in the index range, and the index values are assigned to the addresses accordingly.<br/>For example, you precalculated three gas pump addresses with a range of index values from 3 to 5. The first address in the returned arrray is assigned the index value "3", the second one - "4", and the third one - "5".</p> <pre> [   "0x8cb76aed9c5e336ef961265c6079c14e9cd3d2ea", // index is 3   "0x5c6079c14e9cd3d2ea8cb76aed9c5e336ef96126", // index is 4   "0xc5e336ef9612614e9cd3d2ea8cb76aed95c6079c"  // index is 5 ] </pre> <p><b>The owner of the gas pump addresses</b><br/> The owner (also referred to as "master address") is the blockchain address that will own the precalculated gas pump addresses. The owner will also be paying gas fees for operations made on the gas pump addresses. You have to make sure that the owner always has enough funds to cover these gas fees.</p> <p><b>Activated and not activated addresses</b><br/> The precalculated addresses can be immediately assigned to customers and can <b>receive</b> funds. However, they cannot be used to <b>send</b> funds to other addresses. This is because the addresses are not activated. To make the addresses be able to send funds, <a href="#operation/ActivateGasPumpAddresses">activate them</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$create_gas_pump = new \Tatum\Model\CreateGasPump();

try {
    /** @var string[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->precalculateGasPumpAddresses($create_gas_pump);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->precalculateGasPumpAddresses(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->precalculateGasPumpAddresses(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$create_gas_pump** | [**\Tatum\Model\CreateGasPump**](../Model/CreateGasPump.md)|  | [optional]

### Return type

**string[]**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `sCGetCustodialAddresses()`

```php
api()->gasPump()->sCGetCustodialAddresses(
    ?string $chain, 
    ?string $hash
): string[]
```

Get the custodial wallet address from the transaction

<p><b>This API is deprecated.<br/>To start with the gas pump, use the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a>.</b></p> <p><b>If you built your gas pump solution using the <a href="#operation/GenerateCustodialWalletBatch">API for generating a gas pump wallet address</a> and <a href="#operation/GenerateCustodialWallet">API for generating a custodial wallet address</a>, you can still use this API for getting the custodial wallet address from the transaction. However, we recommend that you switch to the <a href="#operation/PrecalculateGasPumpAddresses">API for precalculating the gas pump addresses</a></b>.</p><br/> <p><b>1 credit per API call</b></p> <p>Get gas pump smart contract addresses from deploy transaction.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

// Blockchain to work with
$chain = 'chain_example';

// Transaction hash
$hash = '0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7';

try {
    /** @var string[] $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->sCGetCustodialAddresses($chain, $hash);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->sCGetCustodialAddresses(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->sCGetCustodialAddresses(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**| Blockchain to work with |
 **$hash** | **string**| Transaction hash |

### Return type

**string[]**

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `transferCustodialWallet()`

```php
api()->gasPump()->transferCustodialWallet(
    ?\Tatum\Model\TransferCustodialWalletRequest $transfer_custodial_wallet_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Transfer an asset from a gas pump address

<p><b>2 credits per API call</b></p> <p>Transfer (send) an asset from a gas pump address to the other address.</p> <p>This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer an asset to some address on the blockchain.</p> <p>The gas fee for sending the asset will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.</p> <ul> <li>To be able to send the asset, the gas pump address must be <a href="#operation/ActivateGasPumpAddresses">activated</a>.</li> <li>To check whether the gas pump address is activated, use <a href="#operation/GasPumpAddressesActivatedOrNot">this API</a>.</li> </ul> <p>With this API, you can send only one asset per API call. If you want to send multiple assets, use the <a href="#operation/TransferCustodialWalletBatch">API for transferring multiple assets from a gas pump account</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b><br/> When transferring an asset, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$transfer_custodial_wallet_request = new \Tatum\Model\TransferCustodialWalletRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->transferCustodialWallet($transfer_custodial_wallet_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->transferCustodialWallet(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->transferCustodialWallet(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_request** | [**\Tatum\Model\TransferCustodialWalletRequest**](../Model/TransferCustodialWalletRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)

## `transferCustodialWalletBatch()`

```php
api()->gasPump()->transferCustodialWalletBatch(
    ?\Tatum\Model\TransferCustodialWalletBatchRequest $transfer_custodial_wallet_batch_request
): \Tatum\Model\BtcTransferBlockchain200Response
```

Transfer multiple assets from a gas pump address

<p><b>2 credits per API call</b></p> <p>Transfer (send) multiple assets from a gas pump address to one or more addresses.</p> <p>This operation is usually performed by users in your custodial application: a user who has a gas pump address assigned wants to transfer multiple assets to one or more addresses on the blockchain.</p> <p>The gas fee for sending the assets will be covered by crypto funds on the master address. Make sure that the master address always has enough funds to cover gas fees.</p> <ul> <li>To be able to send the assets, the gas pump address must be <a href="#operation/ActivateGasPumpAddresses">activated</a>.</li> <li>To check whether the gas pump address is activated, use <a href="#operation/GasPumpAddressesActivatedOrNot">this API</a>.</li> </ul> <p>If you want to send only one asset, you can also use the <a href="#operation/TransferCustodialWallet">API for transferring an asset from a gas pump account</a>.</p> <p>This API is supported for the following blockchains:</p> <ul> <li>BNB Smart Chain</li> <li>Celo</li> <li>Ethereum</li> <li>Harmony</li> <li>Klaytn</li> <li>Polygon</li> <li>TRON</li> <li>XinFin</li> </ul> <p><b>Signing a transaction</b><br/> When transferring assets, you are charged a fee for the transaction, and you must sign the transaction with the private key of the blockchain address from which the fee will be deducted.</p> <p>Providing the private key in the API is not a secure way of signing transactions, because the private key can be stolen or exposed. Your private keys should never leave your security perimeter. You should use the private keys only for testing a solution you are building on the <b>testnet</b> of a blockchain.</p> <p>For signing transactions on the <b>mainnet</b>, we strongly recommend that you use the Tatum <a href="https://github.com/tatumio/tatum-kms" target="_blank">Key Management System (KMS)</a> and provide the signature ID instead of the private key in the API. Alternatively, you can use the <a href="https://github.com/tatumio/tatum-js" target="_blank">Tatum JavaScript client</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/autoload.php');

// Set your optional Tatum API keys
// @see https://apidoc.tatum.io/#section/Authentication
$sdk = new \Tatum\Sdk(/*'TATUM_API_MAINNET', 'TATUM_API_TESTNET'*/);

$transfer_custodial_wallet_batch_request = new \Tatum\Model\TransferCustodialWalletBatchRequest();

try {
    /** @var \Tatum\Model\BtcTransferBlockchain200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->gasPump()
        ->transferCustodialWalletBatch($transfer_custodial_wallet_batch_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling gasPump()->transferCustodialWalletBatch(): ",
        var_export($apiExc->getResponseObject(), true),
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling gasPump()->transferCustodialWalletBatch(): " . $exc->getMessage() . PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$transfer_custodial_wallet_batch_request** | [**\Tatum\Model\TransferCustodialWalletBatchRequest**](../Model/TransferCustodialWalletBatchRequest.md)|  |

### Return type

[**\Tatum\Model\BtcTransferBlockchain200Response**](../Model/BtcTransferBlockchain200Response.md)

[[Back to top]](#) | [[Back to API list]](../../README.md#api-endpoints)
