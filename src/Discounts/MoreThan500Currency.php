<?php

namespace Leonardo\Patterns\Discounts;

use Leonardo\Patterns\Budget;

class MoreThan500Currency extends Discount
{
    public function calculate(Budget $budget): float
    {
        if ($budget->price > 500) {
            return $budget->price * 0.5;
        }

        return $this->nextDiscount->calculate($budget);
    }
}
