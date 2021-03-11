<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait EthereumBlockchain{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/EthBroadcast" target="_blank">Tatum API documentation</a>
 */
function ethBroadcast(string $txData, string $signatureId = ""){
    if($signatureId != ""){
        $data = array('txData' => $txData, 'signatureId' => $signatureId);
        }
        else{
            $data = array('txData' => $txData);   
        }
    return $this->post($data, "/{$this->getRoute("ETH")}/broadcast"); 
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/EthGetTransactionCount" target="_blank">Tatum API documentation</a>
 */
function ethGetTransactionsCount(string $address){
    return $this->get("/{$this->getRoute('ETH')}/transaction/count/{$address}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/EthGetBlockChainInfo" target="_blank">Tatum API documentation</a>
 */
function ethGetCurrentBlock(){
    return $this->get("/{$this->getRoute('ETH')}/block/current");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/BtcGetBlock" target="_blank">Tatum API documentation</a>
 */
function ethGetBlock(string $hash){
    return $this->get("/{$this->getRoute('ETH')}/block/hash/{$hash}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/EthGetBlockHash" target="_blank">Tatum API documentation</a>
 */
function ethGetBlockHash(int $i) {
    return $this->get("/{$this->getRoute('ETH')}/block/hash/{$i}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/EthGetBalance" target="_blank">Tatum API documentation</a>
 */
function ethGetAccountBalance(string $address){
    return $this->get("/{$this->getRoute('ETH')}/account/balance/{$address}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/EthErc20GetBalance" target="_blank">Tatum API documentation</a>
 */
function ethGetAccountErc20Address(string $address, string $contractAddress){
    return $this->get("/{$this->getRoute('ETH')}/account/balance/erc20/{$address}?contractAddress={$contractAddress}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/EthGetTransactionByAddress" target="_blank">Tatum API documentation</a>
 */
function ethGetAccountTransactions(string $address, int $pageSize = 50, int $offset = 0){
    return $this->get("/{$this->getRoute('ETH')}/account/transaction/address/{$address}?pageSize={$pageSize}&offset={$offset}"); 
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/EthGetTransaction" target="_blank">Tatum API documentation</a>
 */
function ethGetTransaction(string $hash){
    return $this->get("/{$this->getRoute('ETH')}/transaction/{$hash}");
}

}