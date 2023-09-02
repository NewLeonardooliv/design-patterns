<?php

namespace Src\Patterns\Tax;

use Src\Patterns\Budget;

interface ITax
{
    public function calculate(Budget $budget): float;
}
