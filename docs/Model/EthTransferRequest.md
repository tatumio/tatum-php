# EthTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nonce** | **float** | Nonce to be set to Ethereum | Polygon | KCS | XDC transaction. If not present, last known nonce will be used. | [optional]
**address** | **string** | Blockchain address to send assets |
**amount** | **string** | Amount to be sent in Ether | MATIC | XDC | KCS. |
**compliant** | **bool** | Compliance check, if withdrawal is not compliant, it will not be processed. | [optional]
**private_key** | **string** | Private key of sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. |
**payment_id** | **string** | Identifier of the payment, shown for created Transaction within Tatum sender account. | [optional]
**sender_account_id** | **string** | Sender account ID |
**sender_note** | **string** | Note visible to owner of withdrawing account | [optional]
**gas_limit** | **string** | Gas limit for transaction in gas price. If not set, automatic calculation will be used. | [optional]
**gas_price** | **string** | Gas price in Gwei. If not set, automatic calculation will be used. | [optional]
**index** | **int** | Derivation index of sender address. |
**mnemonic** | **string** | Mnemonic to generate private key for sender address. Either mnemonic and index, privateKey or signature Id must be present - depends on the type of account and xpub. |
**signature_id** | **string** | Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)
