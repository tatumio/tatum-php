# Model/DeployTrcOffchainPKXpub

## Getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getSymbol()** | **string** | Name of the TRC token - stored as a symbol on Blockchain |
**getSupply()** | **string** | max supply of TRC token. |
**getDecimals()** | **float** | Number of decimal points of the token. |
**getType()** | **string** | Type of TRC token to create. |
**getDescription()** | **string** | Description of the TRC token |
**getUrl()** | **string** | URL of the project. Applicable for TRC-10 only. | [optional]
**getBasePair()** | **string** | Base pair for TRC token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair. |
**getBaseRate()** | **float** | Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair. | [optional] [default to 1]
**getCustomer()** | [**\Tatum\Model\CustomerRegistration**](CustomerRegistration.md) |  | [optional]
**getXpub()** | **string** | Extended public key (xpub), from which address, where all initial supply will be stored, will be generated. Either xpub and derivationIndex, or address must be present, not both. |
**getDerivationIndex()** | **int** | Derivation index for xpub to generate specific deposit address. |
**getPrivateKey()** | **string** | Private key of Tron account address, from which gas for deployment of TRC will be paid. Private key, mnemonic or signature Id must be present. |

[[Back to Index]](../index.md)
