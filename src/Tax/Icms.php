<?php

namespace Src\Patterns\Tax;

use Src\Patterns\Budget;

class Icms implements ITax
{
    public function calculate(Budget $budget): float
    {
        return $budget->price * 0.06;
    }
}
