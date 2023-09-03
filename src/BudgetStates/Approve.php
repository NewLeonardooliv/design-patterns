<?php

namespace Src\Patterns\BudgetStates;

use Src\Patterns\Budget;

class Approve extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->price * 0.02;
    }

    public function finish(Budget $budget)
    {
        $budget->state = new Finished();
    }
}
