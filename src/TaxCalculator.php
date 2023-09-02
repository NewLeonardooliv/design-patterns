<?php

namespace Src\Patterns;

use Src\Patterns\Tax\ITax;

class TaxCalculator
{
    public function calculate(Budget $budget, ITax $tax): float
    {
        return $tax->calculate($budget);
    }
}
