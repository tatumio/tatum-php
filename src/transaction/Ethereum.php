<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
    throw new \TatumException("Access Denied!");
}

trait EthereumTransaction{


/**
 * Estimate Gas price for the transaction.
 * fetch from https://ethgasstation.info/json/ethgasAPI.json
 */

function ethGetGasPriceInWei(){
    $converter = new \Bezhanov\Ethereum\Converter();
    $datas =  $this->curlGet("https://ethgasstation.info/json/ethgasAPI.json");

    if($datas != "" && $datas !== false){
    $data = json_decode($datas);
    return $converter->toWei(($data->fast / 10), 'gwei');
    }
    else{
        throw new \TatumException("Can't get Gas Price at the moment!");
    }
}


/**
 * Convert Gas price to wei from ether.
 * @param $amount
 */
function ethConvertPriceToWei($amount){
    $converter = new \Bezhanov\Ethereum\Converter();
    return $converter->toWei(($amount), 'ether');
}

function ethConvertWeiToGwei($amount){
    $converter = new \Bezhanov\Ethereum\Converter();
    return $converter->fromWei(($amount), 'gwei');
}

function ethConvertGweiToWei($amount){
    $converter = new \Bezhanov\Ethereum\Converter();
    return $converter->toWei(($amount), 'gwei');
}

function ethChainIDToHex($amount){
    return "0x0".dechex($amount);
}

function ethWeiToHex($amount){
    return "0x".dechex($amount);
}

function ethHexToWei($amount){
    return hexdec(substr($amount, 2));
}

function ethToHex($amount){
    return $this->ethWeiToHex($this->ethConvertPriceToWei($amount));
}

function stringToHex(string $text){
    return "0x".bin2hex($text);
}

function hexToString(string $text){
    return hex2bin(substr($text, 2));
}

function makeNonce(){
    return substr((rand(100, 9000000000) + rand(5100, 8000000000) + rand(200, 2000000000) + rand(1000, 7000000000)),3, 4);
}

/**
 * Prepare Sign Etehereum transaction with private keys locally. Nothing is broadcast to the blockchain.
 * @param $body content of the transaction to broadcast
 * @returns transaction data to be broadcast to blockchain.
 */

function prepareSignedEthereumTransaction(array $body){
    list(
    $currency,
    $fromPrivateKey,
    $from,
    $to,
    $amount,
    $gasPrice,
    $gasLimit,
    $data,
    $nonce) = $body;

    if(!$this->in_arrayi($currency, $this->supportedETHBlockchain)){
    throw new \UnexpectedValueException(sprintf('Unsupported Ethereum Blockchain %s!', strtoupper($currency)));
    }

    $gasPrice = $gasPrice && $gasPrice != "" && $gasPrice > 0 ? $this->ethWeiToHex($this->ethConvertGweiToWei($gasPrice)) : $this->ethWeiToHex($this->ethGetGasPriceInWei());
    $data = $data != "" ? $this->stringToHex($data) : $this->stringToHex("Transaction from: {$from} to: {$to} amount of {$amount} {$currency} with Gas Fee of {$this->ethHexToWei($gasPrice)}");
    $gasLimit = $gasLimit && $gasLimit != "" && $gasLimit > 0 ? $this->ethWeiToHex($this->ethConvertGweiToWei($gasLimit)) : $this->ethWeiToHex(strlen($data) * 68 + 21000);
    $nonce = $nonce != "" ? $nonce : ($this->ethGetTransactionsCount($from) + 0);
    $amount = $this->ethToHex($amount);
    $chainID = $this->isMainNet() ? 1 : 3;
if($currency === 'ETH'){
    $transaction = new \Web3p\EthereumTx\Transaction([
    'nonce' => $nonce,
    'from' => $from,
    'to' => $to,
    'gas' => $gasLimit,
    'gasPrice' => $gasPrice,
    'value' => $amount,
    'data' => '',//$data,
    "chainId" => $chainID,
]);
    }
    else{
      throw new \TatumException("Token Transfer not yet supported");
    }

$signedTransaction = $transaction->sign($fromPrivateKey);

return "0x".$signedTransaction;
}

/**
 * Sign Ethereum transaction with private keys locally. Nothing is broadcast to the blockchain.
 * @param $body content of the transaction to broadcast
 * @returns transaction data to be broadcast to blockchain.
 */

function prepareEthereumSignedTransaction(array $body){
    return $this->prepareSignedEthereumTransaction($body);
}

/**
 * Send Ethereum transaction to the blockchain. This method broadcasts signed transaction to the blockchain.
 * This operation is irreversible.
 * @param $body content of the transaction to broadcast
 * @returns transaction id of the transaction in the blockchain
 */

 function sendEthereumTransaction(array $body){
    return $this->ethBroadcast($this->prepareEthereumSignedTransaction($body));
 }

}



