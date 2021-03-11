<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait OffchainCommon{

    /**
 * For more details, see <a href="https://tatum.io/apidoc#operation/generateDepositAddress" target="_blank">Tatum API documentation</a>
 */
function generateDepositAddress(string $id, int $index = null){
$url = "/offchain/account/{$id}/address";
return $this->post($index === '' || $index === null ? $url : $url."?index={$index}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/generateDepositAddressesBatch" target="_blank">Tatum API documentation</a>
 */
function generateDepositAddresses(array $data){
return $this->post($data, "/offchain/account/address/batch");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/addressExists" target="_blank">Tatum API documentation</a>
 */
function checkAddressExists(string $address, string $currency, int $index = null){
$url = "/offchain/account/address/{$address}/{$currency}";
return $this->get($index === '' || $index === null ? $url : $url."?index={$index}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/GetWithdrawals" target="_blank">Tatum API documentation</a>
 */
function getWithdrawals(string $status = "", string $currency = "", int $pageSize = 50, int $offset = 0){
$url = "/offchain/withdrawal?pageSize={$pageSize}&offset={$offset}";
if ($status) {
$url += "&status={$status}";
}
if ($currency) {
$url += "&currency={$currency}";
}
return $this->get($url);
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/assignAddress" target="_blank">Tatum API documentation</a>
 */
function assignDepositAddress(string $id, string $address){
return $this->post("/offchain/account/{$id}/address/{$address}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/createErc20" target="_blank">Tatum API documentation</a>
 */
function registerEthereumErc20(array $data){
return $this->post($data, "/offchain/ethereum/erc20");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/storeErc20Address" target="_blank">Tatum API documentation</a>
 */
function storeErc20ContractAddress(string $name, string $address){
return $this->post("/offchain/ethereum/erc20/{$name}/{$address}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/storeTrcAddress" target="_blank">Tatum API documentation</a>
 */
function storeTrcContractAddress(string $name, string $address){
return $this->post("/offchain/tron/trc/{$name}/{$address}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/createTrc" target="_blank">Tatum API documentation</a>
 */
function registerTronTrc(array $data){
return $this->post($data, "/offchain/tron/trc");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/removeAddress" target="_blank">Tatum API documentation</a>
 */
function removeDepositAddress(string $id, string $address){
return $this->delete("/offchain/account/{$id}/address/{$address}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/getAllDepositAddresses" target="_blank">Tatum API documentation</a>
 */
function getDepositAddressesForAccount(string $id){
return $this->get("/offchain/account/{$id}/address");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/broadcastBlockchainTransaction" target="_blank">Tatum API documentation</a>
 */
function offchainBroadcast(array $data){
return $this->post($data, "/offchain/withdrawal/broadcast");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/storeWithdrawal" target="_blank">Tatum API documentation</a>
 */
function offchainStoreWithdrawal(array $data){
return $this->post($data, "/offchain/withdrawal");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/cancelInProgressWithdrawal" target="_blank">Tatum API documentation</a>
 */
function offchainCancelWithdrawal(string $id, bool $revert = true){
return $this->delete("/offchain/withdrawal/{$id}?revert={$revert}");
}

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/completeWithdrawal" target="_blank">Tatum API documentation</a>
 */
function offchainCompleteWithdrawal(string $id, string $txId){
return $this->put("/offchain/withdrawal/{$id}/{$txId}");
}

}