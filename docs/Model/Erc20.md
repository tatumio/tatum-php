# Erc20

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | ERC20/BEP20 token name. Used as a identifier within Tatum system and also in blockchain as a currency symbol. |
**supply** | **string** | Supply of ERC20/BEP20 token. |
**decimals** | **float** | Decimals of ERC20/BEP20 token. |
**description** | **string** | Used as a description within Tatum system and in blockchain as a currency name. |
**base_pair** | **string** | Base pair for ERC20/BEP20 token. Transaction value will be calculated according to this base pair. |
**base_rate** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [optional] [default to 1]
**customer** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**accounting_currency** | **string** | All transaction will be billed in this currency for created account associated with this currency. If not set, EUR is used. ISO-4217 | [optional]
**derivation_index** | **int** | Derivation index for xpub to generate specific deposit address. |
**xpub** | **string** | Extended public key (xpub), from which address, where all initial supply will be stored, will be generated. Either xpub and derivationIndex, or address must be present, not both. |

[[Back to API list]](../../README.md#api-endpoints)
