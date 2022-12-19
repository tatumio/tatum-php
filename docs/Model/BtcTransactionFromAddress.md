# BtcTransactionFromAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_address** | [**\Tatum\Model\BtcTransactionFromAddressSource[]**](BtcTransactionFromAddressSource.md) | The array of blockchain addresses to send the assets from and their private keys. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction. |
**to** | [**\Tatum\Model\BtcTransactionFromAddressTarget[]**](BtcTransactionFromAddressTarget.md) | The array of blockchain addresses to send the assets to and the amounts that each address should receive (in BTC). The difference between the UTXOs calculated in the &lt;code&gt;fromAddress&lt;/code&gt; section and the total amount to receive calculated in the &lt;code&gt;to&lt;/code&gt; section will be used as the gas fee. To explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent, set the &lt;code&gt;fee&lt;/code&gt; and &lt;code&gt;changeAddress&lt;/code&gt; parameters. |
**fee** | **string** | The fee to be paid for the transaction (in BTC); if you are using this parameter, you have to also use the &lt;code&gt;changeAddress&lt;/code&gt; parameter because these two parameters only work together. | [optional]
**change_address** | **string** | The blockchain address to send any extra assets remaning after covering the fee to; if you are using this parameter, you have to also use the &lt;code&gt;fee&lt;/code&gt; parameter because these two parameters only work together. | [optional]

[[Back to API list]](../../README.md#api-endpoints)
