<?php

namespace Leonardo\Patterns\Tax;

use Leonardo\Patterns\Budget;

interface ITax
{
    public function calculate(Budget $budget): float;
}
