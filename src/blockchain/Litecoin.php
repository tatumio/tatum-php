<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait LitecoinBlockchain{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/LtcBroadcast" target="_blank">Tatum API documentation</a>
 */
function ltcBroadcast(string $txData, string $signatureId = ""){
    if($signatureId != ""){
    $data = array('txData' => $txData, 'signatureId' => $signatureId);
    }
    else{
        $data = array('txData' => $txData);   
    }
    return $this->post($data, "/{$this->getRoute("LTC")}/broadcast"); 
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/LtcGetBlockChainInfo" target="_blank">Tatum API documentation</a>
 */
function ltcGetCurrentBlock(){
    return $this->get("/{$this->getRoute('LTC')}/info");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/LtcGetBalanceOfAddress" target="_blank">Tatum API documentation</a>
 */
function ltcGetBalance(string $address){
    return $this->get("/{$this->getRoute('LTC')}/address/balance/{$address}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/LtcGetBlock" target="_blank">Tatum API documentation</a>
 */
function ltcGetBlock(string $hash){
    return $this->get("/{$this->getRoute('LTC')}/block/hash/{$hash}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/LtcGetBlockHash" target="_blank">Tatum API documentation</a>
 */
function ltcGetBlockHash(int $i){
    return $this->get("/{$this->getRoute('LTC')}/block/hash/{$i}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/LtcGetUTXO" target="_blank">Tatum API documentation</a>
 */
function ltcGetUTXO(string $hash, int $i){
    return $this->get("/{$this->getRoute('LTC')}/utxo/{$hash}/{$i}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/LtcGetTxByAddress" target="_blank">Tatum API documentation</a>
 */
function ltcGetTxForAccount(string $address, int $pageSize = 50, int $offset = 0){
    return $this->get("/{$this->getRoute('LTC')}/transaction/address/{$address}?pageSize={$pageSize}&offset={$offset}"); 
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/LtcGetRawTransaction" target="_blank">Tatum API documentation</a>
 */
function ltcGetTransaction(string $hash){
    return $this->get("/{$this->getRoute('LTC')}/transaction/{$hash}");
}

}