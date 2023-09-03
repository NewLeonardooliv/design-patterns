<?php

namespace Src\Patterns\BudgetStates;

use Src\Patterns\Budget;

class Disapproved extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('Um orçamento reprovado não pode receber desconto');
    }

    public function finish(Budget $budget)
    {
        $budget->state = new Finished();
    }
}
