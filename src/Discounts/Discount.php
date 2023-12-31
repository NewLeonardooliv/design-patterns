<?php

namespace Src\Patterns\Discounts;

use Src\Patterns\Budget;

abstract class Discount
{
    protected ?Discount $nextDiscount;

    public function __construct(?Discount $nextDiscount)
    {
        $this->nextDiscount = $nextDiscount;
    }


    abstract public function calculate(Budget $budget): float;
}
