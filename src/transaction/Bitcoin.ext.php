<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
use BitWasp\Bitcoin\Key\Factory\PrivateKeyFactory;
use BitWasp\Bitcoin\Transaction\TransactionOutput;
use BitWasp\Bitcoin\Transaction\Factory\Signer;
use BitWasp\Bitcoin\Script\ScriptFactory;
use BitWasp\Bitcoin\Transaction\OutPoint;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Network\NetworkFactory;
use BitWasp\Bitcoin\Transaction\SignatureHash\SigHash;
use BitWasp\Bitcoin\Address\AddressCreator;
use Exception;

trait BitcoinTransaction{

function ToSatoshi2($val){
return round(($val * 100000000), 8);
}

function ToSatoshi($val){
    return (int)self::toSatoshiString($val);
}

function SatoshiToBtc($val){
    return round(($val / 100000000), 8);
}
 /**
     * convert a BTC value (float) to a Satoshi value (int)
     *
     * @param float $btc
     * @return int
     */
    public static function toSatoshiX($btc)
    {
        return (int)self::toSatoshiString($btc);
    }

    /**
     * convert a BTC value (float) to a Satoshi value (int)
     *  and return it as a string
     *
     * @param float $btc
     * @return string
     */
    public static function toSatoshiString($btc)
    {
        return bcmul(sprintf("%.8f", (float)$btc), 100000000, 0);
    }


function prepareSignedBitcoinTransaction($body){
    $addrCreator = new AddressCreator();
    $ecAdapter = Bitcoin::getEcAdapter();
    $math = $ecAdapter->getMath();
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::bitcoinTestnet());
    $network = $Bitcoin->getNetwork();
    $PrivateKeyFactory = new PrivateKeyFactory();
    list($fromUTXO, $fromAddress, $to) = $body;
    $utxoAmountArr = [];
    $feeArr = [];
    $txHashArr = [];
    $txIndexArr = [];
    $privateKeysToSignArr = [];
    $outpointArr = [];
    $txOutArr = [];
    $keyPairInputArr = [];
    $signScriptArr = [];
    $signScriptKeyArr = [];
    $utxoScriptSignArr = [];
    $outpoint[] = "";
    $balance = 0;
    $transaction = \BitWasp\Bitcoin\Transaction\TransactionFactory::build()->version(1)->locktime(0);

    
    if (isset($fromAddress['addresses']) && is_array($fromAddress['addresses'])) {
        $ikno = 0;
        foreach($fromAddress['addresses'] as $item) {
            //die($this->btcGetTxForAccount($item)."<hr/>");
        try{
          $txs = json_decode($this->btcGetTxForAccount($item));
          if(isset($txs) && is_array($txs)){
            foreach($txs as $t) {

                for($ii = 0; $ii < count($t->outputs); $ii++) {
                    $balGet = json_decode($this->btcGetBalance($item));
                        $BalanceNow = ($balGet->incoming - $balGet->outgoing);
                    if($t->outputs[$ii]->address !== $item || $BalanceNow <= 0) {
                        continue;
                    }
                    else{

                    try {
                        
                        if($t->outputs[$ii]->address !== $item || $BalanceNow <= 0) {
                        continue;
                        }
                        else{
                       try {
                           //die($this->btcGetUTXO($t->hash, $ii));
                        $utxoX = json_decode($this->btcGetUTXO($t->hash, $ii));
                        //&& $utxoX->errorCode !== 'tx.hash.index.spent'
                        if(!isset($utxoX->errorCode) && !isset($utxoX->statusCode) && isset($utxoX->hash) && $utxoX->hash != "" && $utxoX->value && $utxoX->value != "" && $utxoX->value > 0){
                        $balance+= $BalanceNow;
                        $outpoint = new OutPoint(\BitWasp\Buffertools\Buffer::hex($utxoX->hash, 32), $utxoX->index);
                        array_push($outpointArr, $outpoint);
                        array_push($utxoAmountArr, $utxoX->value);
                        array_push($utxoScriptSignArr, $utxoX->script);
                        //if(!in_array($fromAddress['privateKeys'][$ikno], $privateKeysToSignArr)){
                        array_push($privateKeysToSignArr, $fromAddress['privateKeys'][$ikno]);
                        //}
                        }
                    } catch (\TatumException $e) {
                        $msg = $e->getMessage();  
                        throw new \TatumException(sprintf("%s", $msg)); 
                    }
                    }
                    } catch (\TatumException $e) {
                  $msg = $e->getMessage();
                    }
                  }
                }
            }
        }
        else{
            throw new \TypeError("Invalid Type not an Object");
        }
    } catch(\TypeError $e){
        throw new \TypeError($e->getMessage());
    }
    $ikno++;
      }

    } else if ($fromUTXO && is_array($fromUTXO)) {
        foreach($fromUTXO as $item) {
            //tx.addInput($item->txHash, $item->index);
        $outpoint = new OutPoint(\BitWasp\Buffertools\Buffer::hex($item['txHash'], 32), $item['index']);
        array_push($outpointArr, $outpoint);
        $privHex = $PrivateKeyFactory->fromWif($item['privateKey'], $network);
        array_push($privateKeysToSign, $item['privateKey']);
        array_push($privateKeysToSignHex, $privHex->getHex());
        array_push($txHashArr, $item['txHash']);
        array_push($txIndexArr, $item['index']);
        
        }
    }
    //die(var_dump($outpoint));

    for($iii = 0; $iii < count($outpointArr); $iii++) {
    $transaction->spendOutPoint($outpointArr[$iii]);
    }

    foreach($to as $item) {
    $destination = \BitWasp\Bitcoin\Script\ScriptFactory::scriptPubKey()->payToPubKeyHash((new \BitWasp\Bitcoin\Address\AddressCreator())->fromString($item['address'], $network)->getHash());
    //->payToAddress($this->ToSatoshi($item['value'] - $item['fee']), $addrCreator->fromString($item['address'], $network));
    $transaction->output($this->ToSatoshi($item['value']), $destination);
    }

    $BalanceSatoshi = $this->ToSatoshi($balance);
    $spendingTotal = $this->ToSatoshi($item['value'] + $item['fee']);
    $spendingRemain = ($balance - $item['value'] - $item['fee']);
    $utxoRemaining = (array_sum($utxoAmountArr) - $this->ToSatoshi($item['value']) - $this->ToSatoshi($item['fee']));
    $spendingRemain = $this->SatoshiToBtc($utxoRemaining);
    $TotalUtxo = (array_sum($utxoAmountArr));
    $TotalUtxoBtc = $this->SatoshiToBtc($TotalUtxo);

    if($spendingRemain > 0){
    $destination = \BitWasp\Bitcoin\Script\ScriptFactory::scriptPubKey()->payToPubKeyHash((new \BitWasp\Bitcoin\Address\AddressCreator())->fromString($fromAddress['addresses'][0], $network)->getHash());
    $transaction->output($this->ToSatoshi($spendingRemain), $destination);
    }
     // Make transaction
    $transaction = $transaction->get();
    // Sign transaction
    $signer = new Signer($transaction, $ecAdapter);
    $signatureType = SigHash::ALL;
    die(var_dump($privateKeysToSignArr));
    
    for($i = 0; $i < count($privateKeysToSignArr); $i++) {
        $keyPairInput = $PrivateKeyFactory->fromWif($privateKeysToSignArr[$i], null, $network);
        $signScriptKey = ScriptFactory::scriptPubKey()->payToPubKeyHash($keyPairInput->getPubKeyHash());
        array_push($keyPairInputArr, $keyPairInput);
        array_push($signScriptKeyArr, $signScriptKey);
    }

    for($i = 0; $i < count($utxoScriptSignArr); $i++) {
        $signScript = ScriptFactory::fromHex($utxoScriptSignArr[$i]);
        $txOut = new TransactionOutput($this->ToSatoshi($utxoAmountArr[$i]), $signScript);
        array_push($txOutArr, $txOut);
        array_push($signScriptArr, $signScript);
    }
    //die(var_dump($signScriptArr));
    //die(var_dump($keyPairInputArr));
   
    for($utii=0; $utii < count($txOutArr); $utii++){
    foreach ($transaction->getInputs() as $index=>$input) {
        $input = $signer->input($index, $txOutArr[$utii]);
        $input->sign($keyPairInputArr[$utii]);
        $signer->sign($index, $keyPairInputArr[$utii], $txOutArr[$utii]);
    }
    }

    if($BalanceSatoshi < $spendingTotal){
        throw new \TatumException(sprintf("Balance %s must be greater than amount to spend %s", $BalanceSatoshi, $spendingTotal)); 
    }

    if($TotalUtxo < $spendingTotal){
        throw new \TatumException(sprintf("Utxo %s must be greater than amount to spend %s", $TotalUtxo, $spendingTotal)); 
    }
    
    for($utiii=0; $utiii < count($keyPairInputArr); $utiii++){
    $input->sign($keyPairInputArr[$utiii], $signatureType);
    }

    $signed = $signer->get();
    return $signed->getHex();
    //return $signed->getTxId()->getHex();
}

/**
 * Sign Bitcoin transaction with private keys locally. Nothing is broadcast to the blockchain.
 * @param testnet mainnet or testnet version
 * @param body content of the transaction to broadcast
 * @returns transaction data to be broadcast to blockchain.
 */

function prepareBitcoinSignedTransaction($body){
    return $this->prepareSignedBitcoinTransaction($body);
}

/**
 * Send Bitcoin transaction to the blockchain. This method broadcasts signed transaction to the blockchain.
 * This operation is irreversible.
 * @param testnet mainnet or testnet version
 * @param body content of the transaction to broadcast
 * @returns transaction id of the transaction in the blockchain
 */

 function sendBitcoinTransaction($body){
    return $this->btcBroadcast($this->prepareBitcoinSignedTransaction($body));
 }

}