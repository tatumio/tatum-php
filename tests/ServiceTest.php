<?php

declare(strict_types=1);

namespace Tatum\Test;

use Tatum\Ledger\Account;
use Tatum\Service;

class ServiceTest extends TestCase
{
    public function testGetHello()
    {
        $version = Service::getApiVersion();
        self::assertNotNull($version);
        self::assertIsArray($version);
        self::assertArrayHasKey('version', $version);
        self::assertIsString($version['version']);
    }

    public function testLedger()
    {
        $account = Account::creatAccount();
        self::assertNotNull($account);
        self::assertIsArray($account);
    }
}
