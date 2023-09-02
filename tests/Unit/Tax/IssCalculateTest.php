<?php

namespace Tests\Unit\Tax;

use Leonardo\Patterns\Budget;
use Leonardo\Patterns\Tax\Iss;
use Leonardo\Patterns\TaxCalculator;
use PHPUnit\Framework\TestCase;

final class IssCalculateTest extends TestCase
{
    public function testCalculateIss()
    {
        $calculator = new TaxCalculator();

        $bugdet = new Budget();
        $bugdet->price = 100;

        $finalPrice = $calculator->calculate($bugdet, new Iss());

        $this->assertEquals(10, $finalPrice);
    }
}
