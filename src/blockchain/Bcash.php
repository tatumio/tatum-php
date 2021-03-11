<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait BcashBlockchain{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BcgBroadcast" target="_blank">Tatum API documentation</a>
 */
function bcashBroadcast(string $txData, string $signatureId = ""){
    if($signatureId != ""){
    $data = array('txData' => $txData, 'signatureId' => $signatureId);
    }
    else{
        $data = array('txData' => $txData);   
    }
    return $this->post($data, "/{$this->getRoute("BCH")}/broadcast"); 
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BchGetBlockChainInfo" target="_blank">Tatum API documentation</a>
 */
function bcashGetCurrentBlock(){
    return $this->get("/{$this->getRoute('BCH')}/info");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BchGetBlock" target="_blank">Tatum API documentation</a>
 */
function bcashGetBlock(string $hash){
    return $this->get("/{$this->getRoute('BCH')}/block/hash/{$hash}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BchGetBlockHash" target="_blank">Tatum API documentation</a>
 */
function bcashGetBlockHash(int $i) {
    return $this->get("/{$this->getRoute('BCH')}/block/hash/{$i}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BchGetTxByAddress" target="_blank">Tatum API documentation</a>
 */
function bcashGetTxForAccount(string $address, int $skip = 0){
    return $this->get("/{$this->getRoute('BCH')}/transaction/address/{$address}?skip={$skip}"); 
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BchGetRawTransaction" target="_blank">Tatum API documentation</a>
 */
function bcashGetTransaction(string $hash){
    return $this->get("/{$this->getRoute('BCH')}/transaction/{$hash}");
}

}