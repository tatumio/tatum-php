<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait LedgerTransaction{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getTransactionsByReference" target="_blank">Tatum API documentation</a>
 */
function getTransactionsByReference(string $reference){
return $this->get("/ledger/transaction/reference/{$reference}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/sendTransaction" target="_blank">Tatum API documentation</a>
 */
function storeTransaction(array $data){
return $this->post($data, "/ledger/transaction");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getTransactionsByAccountId" target="_blank">Tatum API documentation</a>
 */
function getTransactionsByAccount(array $data, int $pageSize = 50, int $offset = 0, string $count = ""){
$counter = $count != "" ? "&count={$count}" : "";
return $this->post($data, "/ledger/transaction/account?pageSize={$pageSize}&offset={$offset}".$counter);
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getTransactionsByCustomerId" target="_blank">Tatum API documentation</a>
 */
function getTransactionsByCustomer(array $data, int $pageSize = 50, int $offset = 0){
return $this->post($data, "/ledger/transaction/customer?pageSize={$pageSize}&offset={$offset}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getTransactions" target="_blank">Tatum API documentation</a>
 */
function getTransactionsByLedger(array $data, int $pageSize = 50, int $offset = 0){
return $this->post($data, "/ledger/transaction/ledger?pageSize={$pageSize}&offset={$offset}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getTransactionsByAccountId" target="_blank">Tatum API documentation</a>
 */
function countTransactionsByAccount(array $data){
return $this->post($data, "/ledger/transaction/account?count=true");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getTransactionsByCustomerId" target="_blank">Tatum API documentation</a>
 */
function countTransactionsByCustomer(array $data){
return $this->post($data, "/ledger/transaction/customer?count=true");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getTransactions" target="_blank">Tatum API documentation</a>
 */
function countTransactionsByLedger(array $data){
return $this->post($data, "/ledger/transaction/ledger?count=true");
}

}