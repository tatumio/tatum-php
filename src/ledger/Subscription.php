<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait LedgerSubscription{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/createSubscription" target="_blank">Tatum API documentation</a>
 */
function createNewSubscription(array $data){
return $this->post($data, "/subscription");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getSubscriptions" target="_blank">Tatum API documentation</a>
 */
function listActiveSubscriptions(int $pageSize = 50, int $offset = 0){
return $this->get("/subscription?pageSize={$pageSize}&offset={$offset}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/deleteSubscription" target="_blank">Tatum API documentation</a>
 */
function cancelExistingSubscription(string $id){
return $this->delete("/subscription/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getSubscriptionReport" target="_blank">Tatum API documentation</a>
 */
function obtainReportForSubscription(string $id){
return $this->get("/subscription/report/{$id}");
}

}