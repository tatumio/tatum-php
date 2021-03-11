<?php
/**
 * @author Adeleye Benjamin Adesanoye <adeleye.benjamin@highbreedtech.com>
 */

namespace Tatum;
if(!defined('TATUM') || !defined('TATUMIO') || !defined('TATUMPHP') || !defined('TATUMLIB')){
throw new \TatumException("Access Denied!");
}
use BitWasp\Bitcoin\Key\Factory\PrivateKeyFactory;
use BitWasp\Bitcoin\Transaction\TransactionOutput;
use BitWasp\Bitcoin\Transaction\Factory\Signer;
use BitWasp\Bitcoin\Script\ScriptFactory;
use BitWasp\Bitcoin\Transaction\OutPoint;
use BitWasp\Bitcoin\Bitcoin;
use BitWasp\Bitcoin\Network\NetworkFactory;
use BitWasp\Bitcoin\Transaction\SignatureHash\SigHash;

trait BitcoinTransaction{

    function ToSatoshi2($val){
    return round(($val * 100000000), 8);
    }

    function ToSatoshi($val){
    return (int)self::toSatoshiString($val);
    }

     /**
     * convert a Satoshi value (int) to a BTC value (float)
     *
     * @param float $val
     * @return float
     */

    function SatoshiToBtc(int $val){
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
/**
 * Prepare Sign Bitcoin transaction with private keys locally. Nothing is broadcast to the blockchain.
 * @param $body content of the transaction to broadcast
 * @returns transaction data to be broadcast to blockchain.
 */

function prepareSignedBitcoinTransaction(array $body){
    $ecAdapter = Bitcoin::getEcAdapter();
    $Bitcoin = new Bitcoin();
    $Bitcoin->setNetwork($this->isMainNet() ? NetworkFactory::bitcoin() : NetworkFactory::bitcoinTestnet());
    $network = $Bitcoin->getNetwork();
    $PrivateKeyFactory = new PrivateKeyFactory();
    list($fromUTXO, $fromAddress, $to) = $body;
    $utxoAmountArr = [];
    $UtxoAddressArr = [];
    $utxoAmountValue = 0;
    $spendingValue = 0;
    $spendingValueArr = [];
    $txHashArr = [];
    $txIndexArr = [];
    $privateKeysToSignArr = [];
    $outpointArr = [];
    $txOutArr = [];
    $keyPairInputArr = [];
    $signScriptArr = [];
    $outpoint[] = "";
    $balance = 0;
    $transaction = \BitWasp\Bitcoin\Transaction\TransactionFactory::build()->version(1)->locktime(0);

    
    if (isset($fromAddress['addresses']) && is_array($fromAddress['addresses'])) {
        $spendingType = 'address';
        $ikno = 0;
        foreach($fromAddress['addresses'] as $item) {
        try{
          $txs = json_decode($this->btcGetTxForAccount($item));
          if(isset($txs) && is_array($txs)){
            foreach($txs as $t) {

                for($ii = 0; $ii < count($t->outputs); $ii++) {
                    if($t->outputs[$ii]->address !== $item) {
                        continue;
                    }
                    else{

                    try {
                        
                        if($t->outputs[$ii]->address !== $item) {
                        continue;
                        }
                        else{
                       try {
                        $utxoX = json_decode($this->btcGetUTXO($t->hash, $ii));
                        if(!isset($utxoX->errorCode) && !isset($utxoX->statusCode) && isset($utxoX->hash) && $utxoX->hash != "" && $utxoX->value && $utxoX->value != "" && $utxoX->value > 0){
                        $balance+= $this->SatoshiToBtc($utxoX->value);
                        $utxoAmountValue+= $utxoX->value;
                        $outpoint = new OutPoint(\BitWasp\Buffertools\Buffer::hex($utxoX->hash, 32), $utxoX->index);
                        array_push($outpointArr, $outpoint);
                        array_push($utxoAmountArr, $utxoX->value);
                        array_push($privateKeysToSignArr, $fromAddress['privateKeys'][$ikno]);
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
        $spendingType = 'utxo';
        $ikno = 0;
        foreach($fromUTXO as $item) {
            try {
                $utxoX = json_decode($this->btcGetUTXO($item['txHash'], $item['index']));
                if(!isset($utxoX->errorCode) && !isset($utxoX->statusCode) && isset($utxoX->hash) && $utxoX->hash != "" && $utxoX->value && $utxoX->value != "" && $utxoX->value > 0){
                $balance+= $this->SatoshiToBtc($utxoX->value);
                $utxoAmountValue+= $utxoX->value;
                $outpoint = new OutPoint(\BitWasp\Buffertools\Buffer::hex($utxoX->hash, 32), $utxoX->index);
                array_push($outpointArr, $outpoint);
                array_push($utxoAmountArr, $utxoX->value);
                array_push($privateKeysToSignArr, $item['privateKey']);
                array_push($UtxoAddressArr, $utxoX->address);
                }
            } catch (\TatumException $e) {
                $msg = $e->getMessage();  
                throw new \TatumException(sprintf("%s", $msg)); 
            }
            $ikno++;
          }
      }

    for($iii = 0; $iii < count($outpointArr); $iii++) {
    $transaction->spendOutPoint($outpointArr[$iii]); 
    }
    

    foreach($to['addresses'] as $item) {
    $destination = (new \BitWasp\Bitcoin\Address\AddressCreator())->fromString($item['address'], $network)->getScriptPubKey();
    $transaction->output($this->ToSatoshi($item['value']), $destination);
    array_push($spendingValueArr, $item['value']);
    $spendingValue+= $item['value'];
    }

    $BalanceSatoshi = $this->ToSatoshi($balance);
    $spendingAmountin = $spendingValue;
    $spendingFee = $to['fee'];
    $spendingTotal = $this->ToSatoshi($spendingAmountin + $spendingFee);
    $spendingRemain = ($balance - $spendingAmountin - $spendingFee);
    $utxoRemaining = ($utxoAmountValue - $this->ToSatoshi($spendingAmountin) - $this->ToSatoshi($spendingFee));
    $spendingRemain = $this->SatoshiToBtc($utxoRemaining);
    $TotalUtxo = $utxoAmountValue;
    $TotalUtxoBtc = $this->SatoshiToBtc($TotalUtxo);

    if($spendingRemain > 0){
    $destination = (new \BitWasp\Bitcoin\Address\AddressCreator())->fromString($spendingType === 'address' ? $fromAddress['addresses'][0] : $UtxoAddressArr[0], $network)->getScriptPubKey();
    $transaction->output($this->ToSatoshi($spendingRemain), $destination);
    }
     // Make transaction
    $transaction = $transaction->get();
    // Sign transaction
    $signer = new Signer($transaction, $ecAdapter);
    $signatureType = SigHash::ALL | SigHash::ANYONECANPAY;
    $ScriptFactory = new ScriptFactory();

    for($i = 0; $i < count($privateKeysToSignArr); $i++) {
        $keyPairInput = $PrivateKeyFactory->fromWif($privateKeysToSignArr[$i], null, $network);
        $signScript = $ScriptFactory->scriptPubKey()->payToPubKeyHash($keyPairInput->getPubKeyHash());
        $txOut = new TransactionOutput($this->ToSatoshi($utxoAmountArr[$i]), $signScript);
        array_push($txOutArr, $txOut);
        array_push($keyPairInputArr, $keyPairInput);
        array_push($signScriptArr, $signScript);
    }
   
    for($i = 0; $i < count($txOutArr); $i++) {
        $input = $signer->input($i, $txOutArr[$i]);
        $signer->sign($i, $keyPairInputArr[$i], $txOutArr[$i]);
        $input->sign($keyPairInputArr[$i], $signatureType);
   }


    if($BalanceSatoshi < $spendingTotal){
        throw new \TatumException(sprintf("Balance %s must be greater than amount to spend %s", $BalanceSatoshi, $spendingTotal)); 
    }

    if($TotalUtxo < $spendingTotal){
        throw new \TatumException(sprintf("Utxo %s must be greater than amount to spend %s", $TotalUtxo, $spendingTotal)); 
    }

    $signed = $signer->get();
    return $signed->getHex();
}

/**
 * Sign Bitcoin transaction with private keys locally. Nothing is broadcast to the blockchain.
 * @param $body content of the transaction to broadcast
 * @returns transaction data to be broadcast to blockchain.
 */

function prepareBitcoinSignedTransaction(array $body){
    return $this->prepareSignedBitcoinTransaction($body);
}

/**
 * Send Bitcoin transaction to the blockchain. This method broadcasts signed transaction to the blockchain.
 * This operation is irreversible.
 * @param $body content of the transaction to broadcast
 * @returns transaction id of the transaction in the blockchain
 */

 function sendBitcoinTransaction(array $body){
    return $this->btcBroadcast($this->prepareBitcoinSignedTransaction($body));
 }

}