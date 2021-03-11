<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait BitcoinBlockchain{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BtcBroadcast" target="_blank">Tatum API documentation</a>
 */
function btcBroadcast(string $txData, string $signatureId = ""){
    if($signatureId != ""){
    $data = array('txData' => $txData, 'signatureId' => $signatureId);
    }
    else{
        $data = array('txData' => $txData);   
    }
    return $this->post($data, "/{$this->getRoute("BTC")}/broadcast"); 
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BtcGetBlockChainInfo" target="_blank">Tatum API documentation</a>
 */
function btcGetCurrentBlock(){
    return $this->get("/{$this->getRoute('BTC')}/info");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BtcGetBalanceOfAddress" target="_blank">Tatum API documentation</a>
 */
function btcGetBalance(string $address){
    return $this->get("/{$this->getRoute('BTC')}/address/balance/{$address}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BtcGetBlock" target="_blank">Tatum API documentation</a>
 */
function btcGetBlock(string $hash){
    return $this->get("/{$this->getRoute('BTC')}/block/hash/{$hash}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BtcGetBlockHash" target="_blank">Tatum API documentation</a>
 */
function btcGetBlockHash(int $i) {
    return $this->get("/{$this->getRoute('BTC')}/block/hash/{$i}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BtcGetUTXO" target="_blank">Tatum API documentation</a>
 */
function btcGetUTXO(string $hash, int $i){
    return $this->get("/{$this->getRoute('BTC')}/utxo/{$hash}/{$i}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BtcGetTxByAddress" target="_blank">Tatum API documentation</a>
 */
function btcGetTxForAccount(string $address, int $pageSize = 50, int $offset = 0){
    return $this->get("/{$this->getRoute('BTC')}/transaction/address/{$address}?pageSize={$pageSize}&offset={$offset}"); 
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BtcGetRawTransaction" target="_blank">Tatum API documentation</a>
 */
function btcGetTransaction(string $hash){
    return $this->get("/{$this->getRoute('BTC')}/transaction/{$hash}");
}

}