# DeployTrcOffchainKMSAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | Name of the TRC token - stored as a symbol on Blockchain |
**supply** | **string** | max supply of TRC token. |
**decimals** | **float** | Number of decimal points of the token. |
**type** | **string** | Type of TRC token to create. |
**description** | **string** | Description of the TRC token |
**url** | **string** | URL of the project. Applicable for TRC-10 only. | [optional]
**base_pair** | **string** | Base pair for TRC token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair. |
**base_rate** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [optional] [default to 1]
**customer** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**address** | **string** | Address on Tron blockchain, where all initial supply will be stored. Either xpub and derivationIndex, or address must be present, not both. |
**from** | **string** | Blockchain address to perform operation from |
**signature_id** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present. |

[[Back to Index]](../index.md)
