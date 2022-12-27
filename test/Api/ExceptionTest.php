<?php
/**
 * Exception Test
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Test\Local\Api;

use Tatum\Sdk;
use PHPUnit\Framework\TestCase;
use Tatum\Sdk\ApiException;

/**
 * Exception Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class ExceptionTest extends TestCase {
    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Testnet:Api:Bitcoin
     *
     * @var \Tatum\Api\BitcoinApi
     */
    protected $tApi;

    /**
     * Mainnet:Api:Bitcoin
     *
     * @var \Tatum\Api\BitcoinApi
     */
    protected $mApi;

    /**
     * Set-up
     */
    public function setUp(): void {
        $this->sdk = new Sdk("bad", "keys");

        $this->tApi = $this->sdk
            ->testnet()
            ->api()
            ->bitcoin();

        $this->mApi = $this->sdk
            ->mainnet()
            ->api()
            ->bitcoin();
    }

    /**
     * Unauthorized: TestNet
     */
    public function testUnauthorizedTestnet(): void {
        $this->expectExceptionObject(new ApiException("Unauthorized", 401));
        $this->tApi->btcGenerateWallet();
    }

    /**
     * Unauthorized: MainNet
     */
    public function testUnauthorizedMainnet(): void {
        $this->expectExceptionObject(new ApiException("Unauthorized", 401));
        $this->mApi->btcGenerateWallet();
    }
}
