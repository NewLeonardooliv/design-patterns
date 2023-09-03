<?php

namespace Src\Patterns\BudgetStates;

use Src\Patterns\Budget;

class Finished extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('Um orçamento finalizado não pode receber desconto');
    }
}
