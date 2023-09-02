<?php

namespace Src\Patterns\Discounts;

use Src\Patterns\Budget;

class NoDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);

    }

    public function calculate(Budget $budget): float
    {
        return 0;
    }
}
