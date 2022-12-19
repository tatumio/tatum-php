# DeployErc20OffchainPKAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Name of the ERC20 token - stored as a symbol on Blockchain |
**supply** | **string** | max supply of ERC20 token. |
**description** | **string** | Description of the ERC20 token |
**base_pair** | **string** | Base pair for ERC20 token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair. |
**base_rate** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [optional] [default to 1]
**customer** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**address** | **string** | Address on Ethereum blockchain, where all initial supply will be stored. Either xpub and derivationIndex, or address must be present, not both. |
**private_key** | **string** | Private key of Ethereum account address, from which gas for deployment of ERC20 will be paid. Private key, mnemonic or signature Id must be present. |
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
