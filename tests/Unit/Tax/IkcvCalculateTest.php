<?php

namespace Tests\Unit\Tax;

use PHPUnit\Framework\TestCase;
use Src\Patterns\Budget;
use Src\Patterns\Tax\Ikcv;
use Src\Patterns\TaxCalculator;

/**
 * @internal
 *
 * @coversNothing
 */
final class IkcvCalculateTest extends TestCase
{
    public function testCalculateIkcvWithMaximumTax()
    {
        $calculator = new TaxCalculator();

        $bugdet = new Budget();
        $bugdet->price = 400;
        $bugdet->items = 4;

        $finalPrice = $calculator->calculate($bugdet, new Ikcv());

        $this->assertEquals(160, $finalPrice);
    }

    public function testCalculateIkcvWithMinimumTax()
    {
        $calculator = new TaxCalculator();

        $bugdet = new Budget();
        $bugdet->price = 300;
        $bugdet->items = 3;

        $finalPrice = $calculator->calculate($bugdet, new Ikcv());

        $this->assertEquals(7.5, $finalPrice);
    }
}
