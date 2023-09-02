<?php

namespace Leonardo\Patterns\Tax;

use Leonardo\Patterns\Budget;

class Icms implements ITax
{
    public function calculate(Budget $budget): float
    {
        return $budget->price * 0.06;
    }
}
