<?php

namespace Tests\Unit\Discounts;

use Src\Patterns\Budget;
use Src\Patterns\DiscountsCalculator;
use PHPUnit\Framework\TestCase;

final class MoreThanFiveHundredCurrencyTest extends TestCase
{
    public function testCalculateMoreThanFiveHundredCurrency()
    {
        $calculator = new DiscountsCalculator();

        $bugdet = new Budget();
        $bugdet->price = 600;
        $bugdet->items = 4;

        $discount = $calculator->calculate($bugdet);

        $this->assertEquals(300, $discount);
    }
}
