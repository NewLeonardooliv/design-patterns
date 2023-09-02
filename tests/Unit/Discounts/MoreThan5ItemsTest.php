<?php

namespace Tests\Unit\Discounts;

use Leonardo\Patterns\Budget;
use Leonardo\Patterns\DiscountsCalculator;
use PHPUnit\Framework\TestCase;

final class MoreThan5ItemsTest extends TestCase
{
    public function testCalculateMoreThan5Items()
    {
        $calculator = new DiscountsCalculator();

        $bugdet = new Budget();
        $bugdet->price = 300;
        $bugdet->items = 6;

        $discount = $calculator->calculate($bugdet);

        $this->assertEquals(30, $discount);
    }
}
