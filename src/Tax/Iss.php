<?php

namespace Src\Patterns\Tax;

use Src\Patterns\Budget;

class Iss implements ITax
{
    public function calculate(Budget $budget): float
    {
        return $budget->price * 0.1;
    }
}
