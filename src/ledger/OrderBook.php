<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \RuntimeException("Access Denied!");
}

trait LedgerOrderBook{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getHistoricalTrades" target="_blank">Tatum API documentation</a>
 */
function getHistoricalTrades(int $pageSize = 50, int $offset = 0, string $id = "", string $pair = ""){
    $url = "/trade/history?pageSize={$pageSize}&offset={$offset}";
    if ($id && $id != "") {
        $url .= "&id={$id}";
    }
    if($pair && $pair != "") {
        $url .= "&pair={$pair}";
    }
    return $this->get($url);
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getBuyTrades" target="_blank">Tatum API documentation</a>
 */
function getActiveBuyTrades(string $id, int $pageSize = 50, int $offset = 0){
return $this->get("/trade/buy?id={$id}&pageSize={$pageSize}&offset={$offset}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getSellTrades" target="_blank">Tatum API documentation</a>
 */
function getActiveSellTrades(string $id, int $pageSize = 50, int $offset = 0){
return $this->get("/trade/sell?id={$id}&pageSize={$pageSize}&offset={$offset}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/storeTrade" target="_blank">Tatum API documentation</a>
 */
function storeTrade(array $data){
return $this->post("/trade");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getTradeById" target="_blank">Tatum API documentation</a>
 */
function getTradeById(string $id){
return $this->get("/trade/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/deleteTrade" target="_blank">Tatum API documentation</a>
 */
function deleteTrade(string $id){
return $this->delete("/trade/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/deleteAccountTrades" target="_blank">Tatum API documentation</a>
 */
function deleteAccountTrades(string $id){
return  $this->delete("/trade/account/{$id}");
}
    
}