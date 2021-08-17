<?php

declare(strict_types=1);

namespace Tatum\Test;

use Tatum\Service;

class TatumTest extends TestCase
{
    public function testGetHello()
    {
        print_r(Service::getApiVersion());
    }
}
