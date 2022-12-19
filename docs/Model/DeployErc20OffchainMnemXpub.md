# DeployErc20OffchainMnemXpub

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Name of the ERC20 token - stored as a symbol on Blockchain |
**supply** | **string** | max supply of ERC20 token. |
**description** | **string** | Description of the ERC20 token |
**base_pair** | **string** | Base pair for ERC20 token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair. |
**base_rate** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [optional] [default to 1]
**customer** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**xpub** | **string** | Extended public key (xpub), from which address, where all initial supply will be stored, will be generated. Either xpub and derivationIndex, or address must be present, not both. |
**derivation_index** | **int** | Derivation index for xpub to generate specific deposit address. |
**mnemonic** | **string** | Mnemonic to generate private key for the deploy account of ERC20, from which the gas will be paid (index will be used). If address is not present, mnemonic is used to generate xpub and index is set to 1. Either mnemonic and index or privateKey and address must be present, not both. |
**index** | **int** | derivation index of address to pay for deployment of ERC20 |
**nonce** | **float** | Nonce to be set to Ethereum transaction. If not present, last known nonce will be used. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
