<?php

namespace Leonardo\Patterns;

use Leonardo\Patterns\Tax\ITax;

class TaxCalculator
{
    public function calculate(Budget $budget, ITax $tax): float
    {
        return $tax->calculate($budget);
    }
}
