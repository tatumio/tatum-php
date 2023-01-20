<?php

/**
 * Implementation of VirtualAccountBlockchainFees API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * VirtualAccountBlockchainFees API
 */
class VirtualAccountBlockchainFeesApi extends AbstractApi {
    /**
     * Estimate ledger to blockchain transaction fee
     *
     * @param \Tatum\Model\OffchainEstimateFee $offchain_estimate_fee 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FeeBtc
     */
    public function offchainEstimateFee($offchain_estimate_fee) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\FeeBtc $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/offchain/blockchain/estimate", "/v3/offchain/blockchain/estimate", [], $rHeaders, [], $offchain_estimate_fee
            ), 
            "\Tatum\Model\FeeBtc"
        );
            
        return $result;
    }
    
}
