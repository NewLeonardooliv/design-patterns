<?php

namespace Tests\Unit\Tax;

use Leonardo\Patterns\Budget;
use Leonardo\Patterns\Tax\Icms;
use Leonardo\Patterns\TaxCalculator;
use PHPUnit\Framework\TestCase;

final class IcmsCalculateTest extends TestCase
{
    public function testCalculateIcms()
    {
        $calculator = new TaxCalculator();

        $bugdet = new Budget();
        $bugdet->price = 100;

        $finalPrice = $calculator->calculate($bugdet, new Icms());

        $this->assertEquals(6, $finalPrice);
    }
}
