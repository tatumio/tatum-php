<?php
/**
 * Schema Mappings Test
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum\Test\Local\Api;
!class_exists("\Tatum\Sdk") && exit();

use PHPUnit\Framework\TestCase;

/**
 * Schema Mappings Test
 *
 * @coversDefaultClass \Tatum\Local\Wallet
 */
class SchemaMappingsTest extends TestCase {

    /**
     * Test schema mappings
     */
    public function testSchemaMappings() {
        // BtcTransactionFromAddress_200_response >> TransactionSigned
        $this->assertTrue(
            class_exists("\Tatum\Model\TransactionSigned"), 
            "BtcTransactionFromAddress_200_response missing - could not be renamed to TransactionSigned"
        );

    }
}
