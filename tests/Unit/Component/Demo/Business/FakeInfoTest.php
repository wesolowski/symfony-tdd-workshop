<?php
# https://symfony.com/doc/current/testing.html#unit-tests

namespace App\Tests\Unit\Component\Demo\Business;

use App\Component\Demo\Business\FakeInfo;
use PHPUnit\Framework\TestCase;

/**
 * @package App\Tests\Unit\Component\Demo\Business
 */
class FakeInfoTest extends TestCase
{
    public function testGetInfo()
    {
        $fakeInfo = new FakeInfo('Unit');
        $expected = FakeInfo::PREFIX . 'Unit';
        $this->assertSame($expected, $fakeInfo->getInfo());
    }

}