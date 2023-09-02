<?php

namespace Tests\Unit\Tax;

use Src\Patterns\Budget;
use Src\Patterns\Tax\Iss;
use Src\Patterns\TaxCalculator;
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
