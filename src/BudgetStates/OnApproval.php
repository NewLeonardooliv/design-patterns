<?php

namespace Src\Patterns\BudgetStates;

use Src\Patterns\Budget;

class OnApproval extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->price * 0.05;
    }

    public function approve(Budget $budget)
    {
        $budget->state = new Approved();
    }

    public function disapprove(Budget $budget)
    {
        $budget->state = new Disapproved();
    }
}
