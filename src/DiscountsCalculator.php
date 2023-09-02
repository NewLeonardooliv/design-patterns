<?php

namespace Src\Patterns;

use Src\Patterns\Budget;
use Src\Patterns\Discounts\MoreThanFiveHundredCurrency;
use Src\Patterns\Discounts\MoreThanFiveItems;
use Src\Patterns\Discounts\NoDiscount;

class DiscountsCalculator
{
    public function calculate(Budget $budget): float
    {
        $discountChain = new MoreThanFiveItems(
            new MoreThanFiveHundredCurrency(
                new NoDiscount()
            )
        );

        return $discountChain->calculate($budget);
    }
}
