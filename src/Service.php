<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}

trait Service{

function GetUsage(){
return $this->get("/tatum/usage");
}

function GetRates($currency, $basePair = "USD"){
    return $this->get("/tatum/rate/{$currency}?basePair={$basePair}");
    }

function GetApiVersion(){
return $this->get("/tatum/version");
}

}