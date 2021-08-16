<?php

declare(strict_types=1);

namespace Tatum\Test;

use Tatum\Tatum;

class TatumTest extends TestCase
{
    public function testGetHello()
    {
        $object = \Mockery::mock(Tatum::class);
        $object->shouldReceive('getHello')->passthru();

        $this->assertSame('Hello, World!', $object->getHello());
    }
}
