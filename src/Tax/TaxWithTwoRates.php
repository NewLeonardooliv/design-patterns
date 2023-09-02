<?php

namespace Src\Patterns\Tax;

use Src\Patterns\Budget;

abstract class TaxWithTwoRates implements TaxInterface
{
    public function calculate(Budget $budget): float
    {
        if ($this->shouldApplyMaximumTax($budget)) {
            return $this->calculateMaxTax($budget);
        }

        return $this->calculateMinTax($budget);
    }

    abstract protected function shouldApplyMaximumTax(Budget $budget): bool;

    abstract protected function calculateMinTax(Budget $budget): float;

    abstract protected function calculateMaxTax(Budget $budget): float;
}
