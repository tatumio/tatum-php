<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait LedgerAccount{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getAccountByAccountId" target="_blank">Tatum API documentation</a>
 */
function getAccountById(string $id){
return $this->get("/ledger/account/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/createAccount" target="_blank">Tatum API documentation</a>
 */
function createAccount(array $data){
return $this->post($data, "/ledger/account");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/updateAccountByAccountId" target="_blank">Tatum API documentation</a>
 */
function updateAccount(string $id, array $data){
return $this->putData($data, "/ledger/account/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/createAccountBatch" target="_blank">Tatum API documentation</a>
 */
function createAccounts(array $data){
return $this->post($data, "/ledger/account/batch");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getBlockAmount" target="_blank">Tatum API documentation</a>
 */
function getBlockedAmountsByAccountId(string $id, int $pageSize = 50, int $offset = 0){
return $this->get("/ledger/account/block/{$id}?pageSize={$pageSize}&offset={$offset}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/blockAmount" target="_blank">Tatum API documentation</a>
 */
function blockAmount(string $id, array $data){
return $this->post($data, "/ledger/account/block/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/deleteBlockAmount" target="_blank">Tatum API documentation</a>
 */
function deleteBlockedAmount(string $id){
return $this->delete("/ledger/account/block/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/unblockAmountWithTransaction" target="_blank">Tatum API documentation</a>
 */
function deleteBlockedAmountWithTransaction(string $id, array $data){
return $this->putData($data, "/ledger/account/block/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/deleteAllBlockAmount" target="_blank">Tatum API documentation</a>
 */
function deleteBlockedAmountForAccount(string $id){
    return $this->delete("/ledger/account/block/account/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/activateAccount" target="_blank">Tatum API documentation</a>
 */
function activateAccount(string $id){
    return $this->put("/ledger/account/${id}/activate");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/deactivateAccount" target="_blank">Tatum API documentation</a>
 */
function deactivateAccount(string $id){
    return $this->put("/ledger/account/{$id}/deactivate");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/freezeAccount" target="_blank">Tatum API documentation</a>
 */
function freezeAccount(string $id){
    return $this->put("/ledger/account/{$id}/freeze");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/unfreezeAccount" target="_blank">Tatum API documentation</a>
 */
function unfreezeAccount(string $id){
    return $this->put("/ledger/account/{$id}/unfreeze");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getAccountsByCustomerId" target="_blank">Tatum API documentation</a>
 */
function getAccountsByCustomerId(string $id, int $pageSize = 50, int $offset = 0){
    return $this->get("/ledger/account/customer/{$id}?pageSize={$pageSize}&offset={$offset}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getAllAccounts" target="_blank">Tatum API documentation</a>
 */
function getAllAccounts(int $pageSize = 50, int $offset = 0){
return $this->get("/ledger/account?pageSize={$pageSize}&offset={$offset}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getAccountBalance" target="_blank">Tatum API documentation</a>
 */
function getAccountBalance(string $id){
return $this->get("/ledger/account/{$id}/balance");    
}

}