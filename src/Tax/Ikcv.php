<?php

namespace Src\Patterns\Tax;

use Src\Patterns\Budget;

class Ikcv extends TaxWithTwoRates implements TaxInterface
{
    protected function shouldApplyMaximumTax(Budget $budget): bool
    {
        return $budget->price > 300 && $budget->items > 3;
    }

    protected function calculateMinTax(Budget $budget): float
    {
        return $budget->price * 0.025;
    }

    protected function calculateMaxTax(Budget $budget): float
    {
        return $budget->price * 0.4;
    }
}
