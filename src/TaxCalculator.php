<?php

namespace Src\Patterns;

use Src\Patterns\Tax\TaxInterface;

class TaxCalculator
{
    public function calculate(Budget $budget, TaxInterface $tax): float
    {
        return $tax->calculate($budget);
    }
}
