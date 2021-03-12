<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Accessss Denied!");
}

trait LedgerVirtualCurrency{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getCurrency" target="_blank">Tatum API documentation</a>
 */
function getVirtualCurrencyByName(string $name){
return $this->get("/ledger/virtualCurrency/{$name}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/createCurrency" target="_blank">Tatum API documentation</a>
 */
function createVirtualCurrency(array $data){
return $this->post($data, "/ledger/virtualCurrency");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/updateCurrency" target="_blank">Tatum API documentation</a>
 */
function updateVirtualCurrency(array $data){
return $this->putData($data, "/ledger/virtualCurrency");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/mintCurrency" target="_blank">Tatum API documentation</a>
 */
function mintVirtualCurrency(array $data){
return $this->putData($data, "/ledger/virtualCurrency/mint");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/revokeCurrency" target="_blank">Tatum API documentation</a>
 */
function revokeVirtualCurrency(array $data){
return $this->putData($data, "/ledger/virtualCurrency/revoke");
  }
}