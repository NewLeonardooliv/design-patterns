<?php

namespace Leonardo\Patterns\Tax;

use Leonardo\Patterns\Budget;

class Iss implements ITax
{
    public function calculate(Budget $budget): float
    {
        return $budget->price * 0.1;
    }
}
