<?php

namespace Src\Patterns\Tax;

use Src\Patterns\Budget;

interface TaxInterface
{
    public function calculate(Budget $budget): float;
}
