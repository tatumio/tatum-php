<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait SecurityKMS{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/GetPendingTransactionToSign" target="_blank">Tatum API documentation</a>
 */
function getTransactionKMS(string $id){
return $this->get("/kms/{$id}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/DeletePendingTransactionToSign" target="_blank">Tatum API documentation</a>
 */
function deleteTransactionKMS(string $id, bool $revert = true){
return $this->delete("/kms/{$id}/{$revert}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/CompletePendingSignature" target="_blank">Tatum API documentation</a>
 */
function completePendingTransactionKMS(string $id, string $txId){
return $this->put("/kms/{$id}/{$txId}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/GetPendingTransactionsToSign" target="_blank">Tatum API documentation</a>
 */
function getPendingTransactionsKMSByChain(string $chain){
return $this->get("/kms/pending/{$chain}");
}

}