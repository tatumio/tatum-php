<?php
/**
 * @author Adeleye Benjamin Adesanoye <benjamin.adesanoye@tatum.io>
 */

namespace Tatum;

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