<?php

namespace Tests\Unit\Discounts;

use Leonardo\Patterns\Budget;
use Leonardo\Patterns\DiscountsCalculator;
use PHPUnit\Framework\TestCase;

final class NoDiscountTest extends TestCase
{
    public function testNoDiscount()
    {
        $calculator = new DiscountsCalculator();

        $bugdet = new Budget();
        $bugdet->price = 500;
        $bugdet->items = 5;

        $discount = $calculator->calculate($bugdet);

        $this->assertEquals(0, $discount);
    }
}
