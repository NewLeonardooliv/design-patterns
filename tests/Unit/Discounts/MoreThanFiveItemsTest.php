<?php

namespace Tests\Unit\Discounts;

use Src\Patterns\Budget;
use Src\Patterns\DiscountsCalculator;
use PHPUnit\Framework\TestCase;

final class MoreThanFiveItemsTest extends TestCase
{
    public function testCalculateMoreThanFiveItems()
    {
        $calculator = new DiscountsCalculator();

        $bugdet = new Budget();
        $bugdet->price = 300;
        $bugdet->items = 6;

        $discount = $calculator->calculate($bugdet);

        $this->assertEquals(30, $discount);
    }
}
