<?php
/**
 * IPFS Test
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
 * IPFS Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class IpfsTest extends TestCase {
    /**
     * IPFS file hash
     *
     * @var string
     */
    const IPFS_HASH = "bafkreihjtmd4gg5cujvhzdvg2jx7xawwjpmee74bkcf5pgpw6yu6n6nka4";

    /**
     * IPFS file size in bytes
     *
     * @var int
     */
    const IPFS_SIZE = 20249;

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
     * Test file upload
     */
    public function testFileUpload() {
        $response = $this->sdk
            ->mainnet()
            ->api()
            ->iPFS()
            ->storeIPFS(new \SplFileObject(dirname(__DIR__, 4) . "/res/readme/screen-dev-mode.png"));

        $this->assertInstanceOf(Model\StoreIPFS200Response::class, $response);
        $this->assertEquals($response->getIpfsHash(), self::IPFS_HASH);
    }

    /**
     * Test file download
     */
    public function testFileDownload() {
        $fileObject = $this->sdk
            ->testnet()
            ->api()
            ->iPFS()
            ->getIPFSData(self::IPFS_HASH);
        $this->assertInstanceOf(\SplFileObject::class, $fileObject);
        $this->assertEquals(filesize($fileObject->getRealPath()), self::IPFS_SIZE);

        // Clean-up
        @unlink($fileObject->getRealPath());
    }
}
