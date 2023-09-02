<?php

namespace Src\Patterns\Tax;

use Src\Patterns\Budget;

class Icpp extends TaxWithTwoRates implements TaxInterface
{
    protected function shouldApplyMaximumTax(Budget $budget): bool
    {
        return $budget->price > 500;
    }

    protected function calculateMinTax(Budget $budget): float
    {
        return $budget->price * 0.03;
    }

    protected function calculateMaxTax(Budget $budget): float
    {
        return $budget->price * 0.02;
    }
}
