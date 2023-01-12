<?php
/**
 * NFT Test
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Test\Local\Api;
!class_exists("\Tatum\Sdk") && exit();

use Tatum\Sdk;
use PHPUnit\Framework\TestCase;
use Tatum\Model;

/**
 * NFT Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class NftTest extends TestCase {
    /**
     * IPFS file hash
     *
     * @var string
     */
    const IPFS_HASH = "bafkreihjtmd4gg5cujvhzdvg2jx7xawwjpmee74bkcf5pgpw6yu6n6nka4";

    /**
     * Tatum SDK
     *
     * @var \Tatum\Sdk
     */
    protected $sdk;

    /**
     * Set-up
     */
    public function setUp(): void {
        $this->sdk = new Sdk(getenv("TATUM_API_MAINNET"), getenv("TATUM_API_TESTNET"));
    }

    /**
     * Test Mint Express
     */
    public function testMintExpress() {
        $response = $this->sdk
            ->testnet()
            ->api()
            ->nFTERC721OrCompatible()
            ->mintNftExpress(
                (new Model\MintNftExpress())
                    ->setChain(Model\MintNftExpress::CHAIN_CELO)
                    ->setTo("0x687422eEA2cB73B5d3e242bA5456b782919AFc85")
                    ->setUrl("ipfs://" . self::IPFS_HASH)
            );
        $this->assertInstanceOf(\Tatum\Model\MintNftExpress200Response::class, $response);
    }
}
