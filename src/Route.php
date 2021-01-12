<?php
/**
 * @author Adeleye Benjamin Adesanoye <benjamin.adesanoye@tatum.io>
 */

namespace Tatum;
use Exception;
trait Route{

public static function getRoute($code){
    $code = strtolower($code);
    switch($code){
    case 'btc':
    return "bitcoin";
    break;
    case 'eth':
    case 'usdt':
    case 'usdc':
    case 'tusd':
    case 'leo':
    case 'link':
    case 'uni':
    case 'free':
    case 'mkr':
    case 'bat':
    case 'pax':
    case 'paxg':
    case 'pltc':
    case 'xcon':
    case 'mmy':
    return "ethereum";
    break;
    case 'bch':
    return "bcash";
    break;
    case 'ltc':
    return "litecoin";
    break;
    case 'xrp':
    return "xrp";
    break;
    case 'xlm':
    return "xlm";
    break;
    case 'bnb':
    return "bnb";
    break;
    case 'vet':
    return "vet";
    break;
    case 'neo':
    return "neo";
    break;
    case 'libra':
    return "libra";
    break;
    case 'scrypta':
    return "scrypta";
    break;
    default:
    //throw new Exception("Unsupported Blockchain ".$code." !");
    return "tatum";
    break;
    }
}

}