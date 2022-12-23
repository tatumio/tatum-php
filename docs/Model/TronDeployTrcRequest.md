# TronDeployTrcRequest

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
**getAddress()** | **string** | Address on Tron blockchain, where all initial supply will be stored. Either xpub and derivationIndex, or address must be present, not both. |
**getMnemonic()** | **string** | Mnemonic to generate private key for the deploy account of TRC, from which the gas will be paid (index will be used). If address is not present, mnemonic is used to generate xpub and index is set to 1. Either mnemonic and index or privateKey and address must be present, not both. |
**getIndex()** | **int** | derivation index of address to pay for deployment of TRC |
**getXpub()** | **string** | Extended public key (xpub), from which address, where all initial supply will be stored, will be generated. Either xpub and derivationIndex, or address must be present, not both. |
**getDerivationIndex()** | **int** | Derivation index for xpub to generate specific deposit address. |
**getPrivateKey()** | **string** | Private key of Tron account address, from which gas for deployment of TRC will be paid. Private key, mnemonic or signature Id must be present. |
**getFrom()** | **string** | Blockchain address to perform operation from |
**getSignatureId()** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present. |

[[Back to Index]](../index.md)
