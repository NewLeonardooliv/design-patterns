<?php

namespace Tests\Unit\Discounts;

use Leonardo\Patterns\Budget;
use Leonardo\Patterns\DiscountsCalculator;
use PHPUnit\Framework\TestCase;

final class MoreThan500CurrencyTest extends TestCase
{
    public function testCalculateMoreThan500Currency()
    {
        $calculator = new DiscountsCalculator();

        $bugdet = new Budget();
        $bugdet->price = 600;
        $bugdet->items = 4;

        $discount = $calculator->calculate($bugdet);

        $this->assertEquals(300, $discount);
    }
}
