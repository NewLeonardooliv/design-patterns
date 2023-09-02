<?php

namespace Src\Patterns\Discounts;

use Src\Patterns\Budget;

class MoreThanFiveItems extends Discount
{
    public function calculate(Budget $budget): float
    {
        if ($budget->items > 5) {
            return $budget->price * 0.1;
        }

        return $this->nextDiscount->calculate($budget);
    }
}
