<?php

namespace Leonardo\Patterns;

use Leonardo\Patterns\Budget;
use Leonardo\Patterns\Discounts\MoreThan500Currency;
use Leonardo\Patterns\Discounts\MoreThan5Items;
use Leonardo\Patterns\Discounts\NoDiscount;

class DiscountsCalculator
{
    public function calculate(Budget $budget): float
    {
        $discountChain = new MoreThan5Items(
            new MoreThan500Currency(
                new NoDiscount()
            )
        );

        return $discountChain->calculate($budget);
    }
}
