<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait SecurityAddress{

/**
 * For more details, see <a href="https://tatum.io/apidoc#operation/CheckMalicousAddress" target="_blank">Tatum API documentation</a>
 */
function checkMaliciousAddress(string $address){
return $this->get("/security/address/{$address}");
}

}