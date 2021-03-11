<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait LedgerCustomer{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getCustomerByExternalId" target="_blank">Tatum API documentation</a>
 */
function getCustomer(string $id){
return $this->get("/ledger/customer/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/findAllCustomers" target="_blank">Tatum API documentation</a>
 */
function getAllCustomers(int $pageSize = 50, int $offset = 0){
return $this->get("/ledger/customer?pageSize={$pageSize}&offset={$offset}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/updateCustomer" target="_blank">Tatum API documentation</a>
 */
function updateCustomer(string $id, array $data){
return $this->putData($data, "/ledger/customer/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/activateAccount" target="_blank">Tatum API documentation</a>
 */
function activateCustomer(string $id){
return $this->put("/ledger/customer/{$id}/activate");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/deactivateCustomer" target="_blank">Tatum API documentation</a>
 */
function deactivateCustomer(string $id){
return $this->put("/ledger/customer/{$id}/deactivate");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/enableCustomer" target="_blank">Tatum API documentation</a>
 */
function enableCustomer(string $id){
return $this->put("/ledger/customer/{$id}/enable");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/disableCustomer" target="_blank">Tatum API documentation</a>
 */
function disableCustomer(string $id){
return $this->put("/ledger/customer/{$id}/disable");    
}

}