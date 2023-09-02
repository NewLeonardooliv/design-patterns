<?php

namespace Src\Patterns;

use Src\Patterns\Budget;
use Src\Patterns\Discounts\MoreThan500Currency;
use Src\Patterns\Discounts\MoreThan5Items;
use Src\Patterns\Discounts\NoDiscount;

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
