<?php

namespace Tests\Unit\Tax;

use PHPUnit\Framework\TestCase;
use Src\Patterns\Budget;
use Src\Patterns\Tax\Icpp;
use Src\Patterns\TaxCalculator;

/**
 * @internal
 *
 * @coversNothing
 */
final class IcppCalculateTest extends TestCase
{
    public function testCalculateIcppWithMaximumTax()
    {
        $calculator = new TaxCalculator();

        $bugdet = new Budget();
        $bugdet->price = 550;

        $finalPrice = $calculator->calculate($bugdet, new Icpp());

        $this->assertEquals(11, $finalPrice);
    }

    public function testCalculateIcppWithMinimumTax()
    {
        $calculator = new TaxCalculator();

        $bugdet = new Budget();
        $bugdet->price = 400;
        $bugdet->items = 3;

        $finalPrice = $calculator->calculate($bugdet, new Icpp());

        $this->assertEquals(12, $finalPrice);
    }
}
