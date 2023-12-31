<?php

namespace Src\Patterns\Discounts;

use Src\Patterns\Budget;

class MoreThanFiveHundredCurrency extends Discount
{
    public function calculate(Budget $budget): float
    {
        if ($budget->price > 500) {
            return $budget->price * 0.5;
        }

        return $this->nextDiscount->calculate($budget);
    }
}
